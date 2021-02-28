@extends('main')
@section('content')
    @foreach($fighters as $fighter)
    <div class="">
        <a href="{{route('fighter', [$fighter['FighterId']])}}">{{ $fighter['FirstName'] }}||{{ $fighter['LastName'] }}</a>
        
    </div>
    @endforeach
@endsection 
