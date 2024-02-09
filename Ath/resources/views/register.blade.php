@extends('layout.app')
@section('content')
<div class="mx-4">
    <div class="bg-white border border-gray-300 p-10 rounded max-w-lg mx-auto mt-24 shadow-lg">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 text-gray-800">
                Register
            </h2>
            <p class="mb-4 text-gray-600">Create an account</p>
        </header>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-600 mb-1">Name</label>
                <input type="text"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500"
                    name="name" value="{{ old('name') }}" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-600 mb-1">Email</label>
                <input type="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500"
                    name="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-gray-600 mb-1">Password</label>
                <input type="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500"
                    name="password" value="{{ old('password') }}" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password2" class="block text-sm font-semibold text-gray-600 mb-1">Confirm Password</label>
                <input type="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-orange-500"
                    name="password_confirmation" value="{{ old('password_confirmation') }}" />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="w-full bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600 focus:outline-none focus:ring focus:border-orange-400">
                    Register
                </button>
            </div>

            <div class="text-center">
                <p class="text-sm text-gray-600">
                    Already have an account? <a href="{{ route('login') }}"
                        class="text-orange-500 hover:underline">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection