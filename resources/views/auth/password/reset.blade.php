@extends('turtle::layouts.app')

@section('title', 'Reset Password')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                @yield('title')
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.reset') }}" novalidate>
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm New Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>

                    @if (config('turtle.recaptcha.site_key'))
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="{{ config('turtle.recaptcha.site_key') }}"></div>
                            <script src="https://www.google.com/recaptcha/api.js"></script>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection