<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Requests\CadFormRequest;
use Session;

class UsuarioController extends Controller
{
    public function index(){
        $email = $value = session('email');
        if($email){
            return redirect()->route('administracao')->with('success', 'O usuário já está logado como: '.$email.'!');
        }else{
            return view("login");
        }
    } 

    public function autenticar(Request $request){
        $client = new Client();
        date_default_timezone_set('America/Manaus');
        $data = date('Y-m-d H:i:s');
        $token = md5($data."-".$request->email);
        
        try {
            $response = $client->request('POST', 'http://127.0.0.1:3333/api/auth/login', [
                'form_params' => [
                'email' => $request->email,
                'password' => $request->password,
                ]
            ]);
            if($response){
                $request->session()->put('email', $request->email);
                return redirect()->route('administracao')->with('success', 'Login realizado com sucesso!');
           }else{
                return redirect()->route('login')->with('info', 'Usuário ou senha não cadastrado!');   
           }
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('info', 'Usuário ou senha não cadastrado!');   
        }
        
    }

    public function formulario(){
        return view("form");
    }

    public function salvar(CadFormRequest $request){
        $client = new Client();
        $response = $client->request('POST', 'http://127.0.0.1:3333/api/auth/register', [
            'form_params' => [
                'email' => $request->email,
                'password' => $request->password,
                'password_confirmation' => $request->password_confirmation,
                ]
            ]);
        if($response){
            return redirect()->route('formulario')->with('success', 'Cadastro realizado com sucesso!');
        }else{
            return redirect()->back()->with('error', 'Falha ao Cadastrar!');
        }
    }

    public function administracao(){
        $email = session('email');
        if(!$email){
            return view("login");
        }
        return view("admin");
    }

    public function logout(){
        Session::flush();
        return view("login");
    }

    public function salvarToken(){

    }
}
