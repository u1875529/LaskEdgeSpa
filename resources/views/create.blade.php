<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 50px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Please fill in our booking form
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
      <form method="post" action="{{ route('bookings.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Full Name:</label>
              <input type="text" class="form-control" name="full_name"/>
          </div>
          <div class="form-group">
              <label for="treatment">Treatment:</label>
              <!--<input type="text" class="form-control" name="treatment"/>-->
              <select name="treatment">
                  <option value="Facial">Facial</option>
                  <option value="Indian_Massage">Indian Head Massage</option>
                  <option value="Thai_Massage">Thai Massage</option>
                </select>
          </div>
         <!-- <div class="form-group">
              <label for="date">Date:</label>
              <input class="date form-control" type="text" id="datepicker" name="date"/>
          </div>-->
          <div class="form-group">
            <label for="date">Date:</label>
            <div class='input-group date' id='datetimepicker1'>
              <input type='text' class="date form-control" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="mobile">Mobile Number:</label>
              <input type="text" class="form-control" name="mobile_number"/>
          </div>
          <button type="submit" class="btn btn-primary">Submit Booking</button>
      </form>
   

      <!-- does not work
      <script type="text/javascript">
             $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  })
      </script>-->



  </div>
</div>
   <script type="text/javascript"> 
      $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
</script>
@endsection





