@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Date</td>
          <td>Treatment</td>
          <td>Email</td>
          <td>Contact Number</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
        <tr>
            <td>{{$appointment->id}}</td>
            <td>{{$appointment->first_name}}</td>
			<td>{{$appointment->last_name}}</td>
			<td>{{$appointment->date}}</td>
			<td>{{$appointment->treatment}}</td>
			<td>{{$appointment->email}}</td>
			<td>{{$appointment->phone_number}}</td>
            <td><a href="{{ route('appointments.edit',$appointment->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('appointments.destroy', $appointment->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection