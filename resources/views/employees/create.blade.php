@extends('base')

@section('content')

<div class="row">
  <div class="col-md-6 offset-md-3">
<div class="card mt-5 border-dark bg-success">
  <h1><div class="card-header text-center text-light bg-secondary"> New Employee</div></h1>
  <div class="card-body bg-success">
    
    {!! Form::open(['url' => '/employees', 'method'=>'post']) !!}

    <div class="mb-2 text-center">
    {!! Form::label("date_of_hire", "DoH",) !!}
    {!! Form::date('date_of_hire', null,['class' => 'form-control','required'])!!}
    </div>

    <div class="mb-2 text-center">
    {!! Form::label("employee_name", "Name Of The Employee",) !!}
    {!! Form::text("employee_name", null, ['class'=>'form-control','required']) !!}
    </div>
    <div class="mb-2 text-center">
    {!! Form::label("address", "Address",) !!}
    {!! Form::text("address", null, ['class'=>'form-control','required']) !!}
    </div>
    <div class="mb-2 text-center">
    {!! Form::label("cell_no", "Contact",) !!}
    {!! Form::text("cell_no", null, ['class'=>'form-control','required']) !!}
    </div>
    <div class="mb-2 text-center">
    {!! Form::label("email_add", "Email",) !!}
    {!! Form::text("email_add", null, ['class'=>'form-control','required']) !!}
    </div>

    <div class="mb-2 d-flex justify-content-center">
        <button class="btn btn-info btn-outline-dark" type=" submit">
            Save Employers
        </button>
    </div>
{!! Form::close() !!}
         </div>
      </div>
  </div>
</div>

@endsection