@extends('layouts.app')

@section('titulo', 'Regístrate en Devstagram')


@section('contenido')
    <div class="md:flex justify-center md:gap-10 md:items-center p-5">
        <div class="md:w-4/12">
            <img src="{{ asset('img/registrar.jpg') }}" alt="">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name"
                            class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Tu Nombre"
                        class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror"
                        value="{{ old('name') }}"
                    />

                    @error('name')
                        <p
                            class="bg-red-500 text-white my-2 rounded text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username"
                            class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Tu Nombre de Usuario"
                        class="border p-3 w-full rounded-lg @error('username')
                        border-red-500
                        @enderror"
                    />

                    @error('username')
                        <p
                            class="bg-red-500 text-white my-2 rounded text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email"
                            class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Tu Email de Registro"
                        class="border p-3 w-full rounded-lg @error('email')
                        border-red-500
                        @enderror"
                    />

                    @error('email')
                        <p
                            class="bg-red-500 text-white my-2 rounded text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password"
                            class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password de Registro"
                        class="border p-3 w-full rounded-lg @error('password')
                        border-red-500
                        @enderror"
                    />

                    @error('password')
                        <p
                            class="bg-red-500 text-white my-2 rounded text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation"
                            class="mb-2 block uppercase text-gray-500 font-bold">
                        Repiter  Password
                    </label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Repite tu Password"
                        class="border p-3 w-full rounded-lg"
                    />
                </div>

                <input
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                            uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>

@endsection
