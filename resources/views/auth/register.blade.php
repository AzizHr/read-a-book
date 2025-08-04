<x-layout>
    <x-slot:title>
        Create New Account
    </x-slot:title>

    <h3>Create your account now!</h3>
    <form method="post" action="{{ route('register') }}" class="w-50">
        @csrf

        <div>
            <label for="firstname" class="form-label mt-4">Firstname</label>
            <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" placeholder="Enter your firstname">
            @error('firstname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="lastname" class="form-label mt-4">Lastname</label>
            <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" placeholder="Enter your lastname">
            @error('lastname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

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

        <div>
            <label for="password_confirmation" class="form-label mt-4">Password</label>
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm your password">
            @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Register</button>
    </form>
</x-layout>
