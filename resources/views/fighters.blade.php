@extends('main')
@section('content')
    @foreach($fighters as $fighter)
    <div>
        <a href="{{route('fighter', [$fighter['FighterId']])}}">{{ $fighter['FirstName'] }}||{{ $fighter['LastName'] }}</a>
        
    </div>
    @endforeach
@endsection 
