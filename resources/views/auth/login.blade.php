<x-layout>
    <x-slot:title>
        Login To Your Account
    </x-slot:title>

    @if(session('status'))
        <div class="alert alert-dismissible alert-success">
            <strong>{{ session('status') }}</strong>
        </div>
    @endif

    <h3>Welcome back, login!</h3>

    <form method="post" action="{{ route('login') }}" class="w-50">
        @csrf

        <div>
            <label for="email" class="form-label mt-4">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password" class="form-label mt-4">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-2">
            <a href="{{ route('password.request') }}" class="text-info-emphasis">Forgotten password?</a>
        </div>

        <button type="submit" class="btn btn-success mt-3">Login</button>
    </form>
</x-layout>
