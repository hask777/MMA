@extends('main')
@section('content')

    @foreach($fighters as $fighter)

        <div class="bg-white mt-4 mb-4 p-4 flex justify-between">
            <div>
                <a href="{{route('fighter', [$fighter['FighterId']])}}">{{ $fighter['FirstName'] }}||{{ $fighter['LastName'] }}</a> 
            </div>
            

            <div class="fighter_img">
                @include('parts.user')
            </div>
        </div>

    @endforeach

@endsection 
