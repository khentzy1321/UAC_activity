@extends('base')

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-4"><p class="text-primary">
       
        <div class="card mt-5 border-dark bg-success">
        <h2><div class="card-header text-light text-center bg-secondary text-light">User Login</div></h2>
            <div class="card-body">
                {!! Form::open(['url'=>'/login','method'=>'post']) !!}

                <div class="mb-3 text-center">
                    {!! Form::label("username", "User Name") !!}
                    {!! Form::text("username", null, ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3 text-center">
                    {!! Form::label("password", "Password") !!}
                    {!! Form::password("password", ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button class="btn btn-info btn-outline-dark " type="submit">
                        L O G I N
                    </button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
