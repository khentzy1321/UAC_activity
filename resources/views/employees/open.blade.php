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
                  <th> Date Of Hire   </th>
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
      <div class="float-end mt-2 bg-light">
   <a href="{{'/employees/recent'}}" class="btn btn-light btn-sm btn-outline-success ">
       Back
   </a>
   <button type="button" class="btn btn-light btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel ">Delete Employee?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this employee?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light btn-sm btn-outline-success" data-bs-dismiss="modal">Close</button>
        <a href="{{url('/employees/delete/' . $employ->id)}}" class="btn btn-light btn-sm btn-outline-danger" style="margin: 1%"> Delete </a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection



