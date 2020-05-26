@extends('layouts.app')

@section('content')
    <div class="my-24 mx-auto max-w-3xl md:flex items-center">
        <div class="w-full md:w-1/2 px-4">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email" class="text-sm text-gray-500 font-semibold">
                        Email
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('email') border border-red-500 @enderror"
                        id="email" name="email" type="text" placeholder="Enter your email address"
                        value="{{ old('email') }}" required
                        autocomplete="email" autofocus>
                    @error('email')
                    <span class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="text-sm text-gray-500 font-semibold">
                        Password
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('email') border border-red-500 @enderror"
                        id="password" name="password" type="password" placeholder="Enter your password" required
                        autocomplete="current-password">
                    @error('password')
                    <span class="text-sm text-red-500" role="alert">
                    {{ $message }}
                </span>
                    @enderror
                </div>

                <div class="mt-6">
                    <button type="submit" class="button">
                        Sign in →
                    </button>
                </div>
            </form>
        </div>
        <div class="mt-16 md:mt-0 w-full md:w-1/2 px-4 mt-4">
            <div class="rounded shadow-lg">
                <div class="flex items-center bg-gray-700 h-16 rounded-tr rounded-tl">
                    <h1 class="mx-auto text-lg text-white">
                        Sign in to <strong>Bit Pleskdesk</strong>
                    </h1>
                </div>
                <div class="px-4 py-4 bg-gray-800 rounded-br rounded-bl">
                    <p class="text-sm text-white">
                        👋️ Hey there! Welcome to Bit Pleskdesk. Need any help? Feel free to read the
                        <a href="/" class="font-semibold border-b-2 border-blue-500 pb-1">
                            documentation.
                        </a>
                    </p>
                    <p class="mt-4 mb-4 text-sm text-white">
                        ⚡️ In order to sign in, you need to be a student of the
                        <a href="/" class="font-semibold border-b-2 border-blue-500 pb-1">
                            Bit Academy.
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
