extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Appointment
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
      <form method="post" action="{{ route('appointments.update', $appointment->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" class="form-control" name="first_name" value={{ $appointment->first_name }} />
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" class="form-control" name="last_name" value={{ $appointment->last_name }} />
        </div>
        <div class="form-group">
          <label for="date">Date:</label>
          <input type="date" class="form-control" name="date" value={{ $appointment->date }} />
        </div>
        <div class="form-group">
          <label for="treatment">Treatment:</label>
          <input type="text" class="form-control" name="treatment" value={{ $appointment->treatment }} />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="email" value={{ $appointment->email }} />
        </div>
        <div class="form-group">
          <label for="phone_number">Contact Number:</label>
          <input type="text" class="form-control" name="phone_number" value={{ $appointment->phone_number }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection