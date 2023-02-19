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
                    <div class="d-flex align-items-center flex-column">
                        <form method="get" action="{{url('/uni_dashboard/' . $user->id . '/subjects_info')}}" class="m-3 justify-content-center">
                        <label for="subjects">Number of subjects: </label>
                        <input type="number" id="subjects" name="subNum" min="0"
                               onkeypress="return (charCode !==8 && charCode ===0 || (charCode >= 48 && charCode <= 57))"><br>
                        <input type="submit" name="submit" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
