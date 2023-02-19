@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Create a schedule for your') }} {{$user->place}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">
                        <form action="" method="get">
                            <label for="group_amount" class="m-2">Amount of groups: </label>
                            <input type="number" id="group_amount" name="group_amount" maxlength="2" required><br>
                            <label for="lectures_start" class="m-2">Starting time of lectures: </label>
                            <input type="time" id="lectures_start" name="lectures_start" required><br>
                            <label for="lecture_duration" class="m-2">Duration of one lecture: </label>
                            <input type="time" id="lecture_duration" name="lecture_duration" required><br>
                            <input type="submit" name="initial_save" class="m-3" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
