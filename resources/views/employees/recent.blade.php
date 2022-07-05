@extends('base')

@section('content')

<h1 class="d-flex justify-content-center text-primary">Recent Employers</h1>
<hr>

  @foreach($recentEmployee as $employ)

  <div class="container">
  <table class="table table-striped table-bordered text-center bg-light">
    <thead class="bg-success text-black">
    <tr>
      <th>Date Of Hire</th>
      <th>Name</th>
      <th>Address</th>
      <th>Contact</th>
      <th>Email</th>
      <th class="text-center">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td >{{$employ->date_of_hire}}</td>
      <td>{{$employ->employee_name}}</td>
      <td>{{$employ->address}}</td>
      <td>{{$employ->cell_no}}</td>
      <td>{{$employ->email_add}}</td>
      <td>
        <a href="{{url('/employees/edit/' . $employ->id)}}" class="btn btn-light btn-sm btn-outline-dark"> Edit </a>
        <a href="{{url('/employees/list/' . $employ->id)}}" class="btn btn-light btn-sm btn-outline-warning"> Open </a>
        <a href="{{url('/employees/open/' . $employ->id)}}" class="btn btn-light btn-sm btn-outline-danger"> delete </a>
      </td>
    </tr>
  </tbody>
  
</table>
</div>
  @endforeach




@endsection