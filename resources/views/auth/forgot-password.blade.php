<x-layout>
    <x-slot:title>
        Reset Password
    </x-slot:title>

    @if(session('status'))
        <div class="alert alert-dismissible alert-success">
            <strong>{{ session('status') }}</strong>
        </div>
    @endif

    <h3>Please enter your email</h3>

    <form method="post" action="{{ route('password.email') }}" class="w-50">
        @csrf

        <div>
            <label for="email" class="form-label mt-4">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Send Email</button>
    </form>
</x-layout>
