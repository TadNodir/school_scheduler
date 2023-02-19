@extends('layouts.uniSubjects')

@section('subjectInfo')

    <form action="{{url('/uni_dashboard/' . $user->id . '/subjects_info/time_info')}}" method="get">
        @for($i = 0 ; $i < $subAmount; $i++)
            <div class="card card-body">
                <label for="teacher">{{$i+1}}. Teacher name: </label>
                <input type="text" id="teacher" name="teacherName_{{$i}}"><br>
                <label for="subject">{{$i+1}}. Subject name: </label>
                <input type="text" id="subject" name="subjectName_{{$i}}"><br>
                <label for="room">Room number: </label>
                <input type="text" id="room" name="roomNum_{{$i}}"><br>
                <label for="lecPerWeek">Lectures per week: </label>
                <input type="number" id="lecPerWeek" name="lecPerWeek_{{$i}}"><br>
            </div>
        @endfor
        {{--                            <label for="group_amount" class="m-2">Amount of groups: </label>--}}
        {{--                            <input type="number" id="group_amount" name="group_amount" maxlength="2" required><br>--}}
        {{--                            <label for="lectures_start" class="m-2">Starting time of lectures: </label>--}}
        {{--                            <input type="time" id="lectures_start" name="lectures_start" required><br>--}}
        {{--                            <label for="lecture_duration" class="m-2">Duration of one lecture: </label>--}}
        {{--                            <input type="time" id="lecture_duration" name="lecture_duration" required><br>--}}


        <input type="submit" name="initial_save" class="m-3" value="Save">
    </form>

@endsection
