<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('cv-store') }}" enctype="multipart/form-data">
                        @csrf

                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <!-- Titel -->
                        <div>
                            <x-label for="title" :value="__('Title')"/>

                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/>
                        </div>

                        <!-- Descriptie -->
                        <div>
                            <x-label for="description" :value="__('Description')"/>

                            <x-input id="description" class="block h-20 mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus/>
                        </div>

                        <!-- Foto -->

                        <div>
                            <x-label for="afbeelding" :value="__('Afbeelding')"/>

                            <x-input id="afbeelding" class="block h-20 mt-1 w-full" type="file" name="afbeelding"  required autofocus/>
                        </div>
                        <div class="flex items-center justify-end mt-4">


                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
