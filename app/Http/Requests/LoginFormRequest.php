<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password'                   =>  'required|alpha_dash|min:6|max:50',
        ];
    }


    public function messages(){
        return[
            'password.required'          =>  'O campo password é de Preenchimento obrigatório!',
            'password.alpha_dash'        =>  'A password pode conter apenas letras, números, traços e sublinhados!',
            'password.min'               =>  'O campo password deve possuir no mínimo 6 caracteres!',
            'password.max'               =>  'O campo Senha deve possuir no máximo 50 caracteres!',

        ];
    }
}