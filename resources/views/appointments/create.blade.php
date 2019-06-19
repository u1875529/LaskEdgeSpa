@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create your Appointment
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('appointments.store') }}">
          <div class="form-group">
              @csrf
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          <div class="form-group">
              <label for="date">Date:</label>
              <input type="date" class="form-control" name="date"/>
          </div>
           <div class="form-group">
              <label for="treatment">Treatment:</label>
              <input type="text" class="form-control" name="treatment"/>
          </div>
           <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
           <div class="form-group">
              <label for="phone_number">Contact Number:</label>
              <input type="text" class="form-control" name="phone_number"/>
          </div>
          <button type="submit" class="btn btn-primary">Book Now</button>
      </form>
  </div>
</div>
@endsection