@extends('base')

@section('content')

<hr>

<div class="container d-flex justify-content-center">

<div class="card " style="width: 90%">
 <div class="card-header text-danger bg-secondary text-light text-center">Employers Info</div>
       <div class="card-body bg-success ">
            <div class="card-title">
            <table class="table bg-light table-striped table-bordered border-primary">
              <thead>
                  <th> Date Of Hire</th>
                  <th> Name :</th>             
                  <th> Address :</th>             
                  <th> Contact :</th>               
                  <th> Email :</th>
                  </thead>
                  <tbody>
                     <tr>
                      <td>{{$employ->date_of_hire}}</td>
                      <td>{{$employ->employee_name}}</td>
                      <td>{{$employ->address}}</td>
                      <td>{{$employ->cell_no}}</td>
                      <td>{{$employ->email_add}}</td>
                     </tr>
                  </tbody>
              </table>
           </div>
      <div class="float-end bg-light">
   <a href="{{'/employees/recent'}}" class="btn btn-info btn-outline-dark ">
         Back
   </a>
</div>
@endsection