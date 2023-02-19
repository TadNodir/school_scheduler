@extends('layouts.uniTime');

@section('timeInfo')
    <div class="d-flex align-items-center flex-column">
        <form method="get" action="">
            <label for="lectDuration">1 lecture duration: </label>
            <input type="time" id="lectDuration" name="lectDuration"><br>
            <label for="startTime">Lectures starting time: </label>
            <input type="time" id="startTime" name="startTime"><br>
            <label for="endTime">Lectures ending time: </label>
            <input type="time" id="endTime" name="endTime"><br>
            <label for="pause">Pause duration: </label>
            <input type="time" id="pause" name="pause"><br>
            <label for="days">lecture days: </label>
            <select type="number" id="days" name="days"><br>
                <option value="mofr">Monday-Friday</option>
                <option value="mosat">Monday-Saturday</option>
            </select><br>
            <input type="submit" name="submitTime" value="Get a timetable">
        </form>
    </div>

@endsection
