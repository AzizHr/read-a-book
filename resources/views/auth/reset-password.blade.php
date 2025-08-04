<x-layout>
    <x-slot:title>
        Create New Password
    </x-slot:title>

    <h3>Create new password</h3>

    <form method="post" action="{{ route('password.update') }}" class="w-50">
        @csrf

        <div>
            <label for="email" class="form-label mt-4">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <input type="hidden" name="token" class="form-control" id="token" value="{{ $token }}">

        <div>
            <label for="password" class="form-label mt-4">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="form-label mt-4">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm your password">
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Update Password</button>
    </form>
</x-layout>
