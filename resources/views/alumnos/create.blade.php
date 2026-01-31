<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.add_student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('alumnos.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block font-medium text-sm text-gray-700">{{ __('messages.name') }}</label>
                            <input type="text" name="nombre" value="{{ old('nombre') }}"
                                   class="w-full border-gray-300 rounded-md shadow-sm @error('nombre') border-red-500 @enderror">
                            @error('nombre')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700">{{ __('messages.surname') }}</label>
                            <input type="text" name="apellido" value="{{ old('apellido') }}"
                                   class="w-full border-gray-300 rounded-md shadow-sm @error('apellido') border-red-500 @enderror">
                            @error('apellido')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700">{{ __('messages.email') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                   class="w-full border-gray-300 rounded-md shadow-sm @error('email') border-red-500 @enderror">
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700">{{ __('messages.age') }}</label>
                            <input type="number" name="edad" value="{{ old('edad') }}"
                                   class="w-full border-gray-300 rounded-md shadow-sm @error('edad') border-red-500 @enderror">
                            @error('edad')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6 flex items-center gap-4">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md font-bold uppercase text-xs">
                            {{ __('messages.save') }}
                        </button>

                        <a href="{{ route('alumnos.index') }}" class="text-sm text-gray-600 underline">
                            {{ __('messages.cancel') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
