<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



                    <div class="single-container ">
                        <ol class=" slides" id="change-overzicht">
                    @foreach($cv as $cvs)
                        <div>
                        <h3>{{$cvs->title}}</h3>
                            @if( $cvs->user_id !== null)
                                <p style="color: purple">{{$cvs->User->name}}</p>
                            @endif
                            <p>{{$cvs->description}}</p>
                        <button><a href="cv/single/{{$cvs->id}}">Read more</a></button>
                        </div>
                    @endforeach
                        </ol>

    </div>
</x-app-layout>
