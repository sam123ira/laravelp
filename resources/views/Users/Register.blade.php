@extends('Layouts.main')

@section('content')

    <div class="container my-auto mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign up</h4>
                            <div class="row mt-3">
                                <div class="col-2 text-center ms-auto">
                                    <a class="btn btn-link px-3" href="javascript:;">
                                        <i class="fa fa-facebook text-white text-lg"></i>
                                    </a>
                                </div>
                                <div class="col-2 text-center px-1">
                                    <a class="btn btn-link px-3" href="javascript:;">
                                        <i class="fa fa-github text-white text-lg"></i>
                                    </a>
                                </div>
                                <div class="col-2 text-center me-auto">
                                    <a class="btn btn-link px-3" href="javascript:;">
                                        <i class="fa fa-google text-white text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="text-start" action="{{ route('register') }}">
                            @csrf()
                            <div class="form-group input-group input-group-outline my-3">
                                <label class="form-label">firstname</label>
                                <input type="text" class="form-control" name="name" :value="old('name')" required autofocus>
                            </div>
                            <div class="form-group input-group input-group-outline my-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" :value="old('email')" required>
                            </div>
                            <div class="form-group input-group input-group-outline mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>

                            <div class="form-group input-group input-group-outline mb-3">
                                <label class="form-label">password confirmation</label>
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <p class="mt-4 text-sm text-center">
                                You have an account
                                <a href="{{url('Users/Login')}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
