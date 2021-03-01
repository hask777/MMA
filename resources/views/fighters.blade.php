@extends('main')
@section('content')

    @foreach($fighters as $fighter)

    <a href="{{route('fighter', [$fighter['FighterId']])}}">
        <div class="bg-white mt-4 mb-4 p-2">

            <h1 class="font-bold text-2xl ">{{ $fighter['FirstName'] }}  {{ $fighter['LastName'] }} 
                <span class="ml-4 text-red-500">{{ $fighter['Nickname'] }}</span>
                <span class="text-xl ml-10">{{ $fighter['WeightClass'] }}</span>
            </h1>
            
            <div class="flex justify-between">
                <div class="stat">
                   <div class="weight">birth date:{{ $fighter['BirthDate'] }}</div>
                   <div class="weight">weight:{{ $fighter['Weight'] }}</div>
                   <div class="height">height:{{ $fighter['Height'] }}</div>
                   <div class="height">reach:{{ $fighter['Reach'] }}</div>
                </div>
                <div class="fighter_img w-32">
                    {{-- @include('parts.user') --}}
                    <img class="" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-01/STEWART_KYLE_L.png?o5dKYwN7nm32idpAVQEBAHegkSJpt3sK&itok=H2pycD1D" alt="">
                </div>
            </div>
            
            {{-- NICNAME --}}
            {{-- WEIGHT --}}
            {{-- BirthDate  --}}
            {{-- Height --}}
            {{-- Weight --}}
            {{-- Rich --}}
            {{-- Wins --}}
            {{-- Losess --}} 
            {{-- Draws --}}
            {{-- TechnicalKnockouts --}}
            {{-- TechnicalKnockoutLosses --}}
            {{-- Submissions --}}
            {{-- SubmissionLosses --}}
            {{-- TitleWins --}}
            {{-- TitleLosses --}}
            {{-- TitleDraws --}}
            {{-- CareerStats --}}

            
        </div> 
    </a>

    @endforeach

@endsection 
