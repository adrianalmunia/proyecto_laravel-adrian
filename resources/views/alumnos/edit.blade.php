<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Alumno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
                    @csrf
                    @method('PUT') <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Nombre</label>
                            <input type="text" name="nombre" value="{{ $alumno->nombre }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Apellido</label>
                            <input type="text" name="apellido" value="{{ $alumno->apellido }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="email" name="email" value="{{ $alumno->email }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700">Edad</label>
                            <input type="number" name="edad" value="{{ $alumno->edad }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center gap-4">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md font-bold uppercase text-xs">
                            Actualizar Alumno
                        </button>

                        <a href="{{ route('alumnos.index') }}" class="text-sm text-gray-600 underline">
                            Cancelar y Volver
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
