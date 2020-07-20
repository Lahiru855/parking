@extends('crud.base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Request Parking Space Update</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('parking_spaces.update', $parking_space->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="name"> Name:</label>
                <input type="text" class="form-control" name="name" value={{ $parking_space->name }} />
            </div>

            <div class="form-group">
                <label for="address">Location:</label>
                <input type="text" class="form-control" name="address" value={{ $parking_space->address }} />
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name ="description" class="form-control" rows="3" cols="40" value=''>{{ $parking_space->description }}</textarea>
            </div>
            <div>
               <label for="city">Open on:</label><br>
              <input type="checkbox" name="open_day1" value="checked" {{ $parking_space->poya }}/> Poya days
              <input type="checkbox" name="open_day2" value="checked" {{ $parking_space->bank }}/> Bank Holidays
              <input type="checkbox" name="open_day3" value="checked" {{ $parking_space->public }}/> Public Holidays
              <br>
              <small>Thesse will be displayed for the users of the application</small><br><br>
          </div>
            <div class="form-group">
               <label for="reservation">Is reservation allowed?</label></br>
              <input type="radio"  name="reservation_on" value="checked" {{ $parking_space->reservation_status_on }}> Allowed<br>
              <input type="radio"  name="reservation_off" value="checked" {{ $parking_space->reservation_status_off }}> Not allowed<br>
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
