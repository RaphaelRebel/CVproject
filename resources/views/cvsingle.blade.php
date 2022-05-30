<x-app-layout>
    <div>

    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="single-container ">
        <h2>{{$cv->title}}</h2>
        <p style="font-size: 12px">{{$cv->created_at}}</p>
        <p>{{$cv->description}}</p>
        @if($cv->afbeelding) <img class="single-img" src="{{asset('storage/'. $cv->afbeelding)}}" alt="Afbeelding van de todo"> @endif
        <a href="{{route('download-file', $cv->id)}}" class="btn btn-primary">Download</a>
    </div>
</x-app-layout>
