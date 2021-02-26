@foreach($shedules as $shedule)
    <div>
        <a href="{{route('shedule', [$shedule['EventId']])}}">{{ $shedule['Name'] }}||{{ $shedule['Season'] }}||{{ $shedule['Day'] }}</a>
        
    </div>
@endforeach