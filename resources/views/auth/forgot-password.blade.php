@extends('Layouts.main')

@section('content')

    <div class="card-body">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
                <div class="form-group input-group input-group-outline my-3 w-40">
                    <label class="form-label">Email</label>

                    <input type="email" class="form-control" name="email" :value="old('email')" required autofocus>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn bg-gradient-primary w-20 my-4 mb-2">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>

@endsection
