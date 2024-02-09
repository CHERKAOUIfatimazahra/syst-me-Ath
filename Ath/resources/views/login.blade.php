@extends('layout.app')
@section('content')

    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 shadow-lg rounded-lg max-w-md w-full">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Log In</h2>
            <p class="text-sm text-center text-gray-500 mb-6">Log in to access your account and post gigs</p>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-600 mb-1">Email</label>
                    <input type="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary-500"
                        name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold text-gray-600 mb-1">Password</label>
                    <input type="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary-500"
                        name="password" value="{{ old('password') }}" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                        class="w-full bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600 focus:outline-none focus:ring focus:border-orange-400">
                        Sign In
                    </button>
                </div>

                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account? <a href="{{ route('register') }}"
                            class="text-primary-500 hover:underline">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('title', 'login')
