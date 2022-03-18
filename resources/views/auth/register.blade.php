<x-guest-layout>
    <div class="card">
        <div class="card-header text-center">
            <h1 class="fw-normal">Elections To-Go</h1>
            <h3 class="fw-light">Register</p>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $message)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Whoops!</strong>
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Name" required
                        @if (!old('name'))
                            autofocus
                        @endif
                    >
                    <label for="name">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" required>
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required minlength="8" autocomplete="new-password" autofocus>
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm password" required>
                    <label for="password_confirmation">Confirm password</label>
                </div>
                <div class="mb-3 text-end">
                    <a href="{{ route('login') }}">Already registered?</a>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
        </div>
    </div>
</x-guest-layout>
