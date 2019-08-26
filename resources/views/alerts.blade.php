@if(session ('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session ('danger'))
    <div class="alert alert-danger">
        {{session('danger')}}
    </div>
@endif

@if(session ('info'))
    <div class="alert alert-info">
        {{session('info')}}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <ul>{{$error}}</ul>
        @endforeach
    </div>
@endif