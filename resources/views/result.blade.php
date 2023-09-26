<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Form Laravel</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-dark p-2">
        <div
            class="d-flex flex-column justify-content-center align-items-center min-vh-100"
        >
            @if(session('success'))
            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                <span class="text-success">
                    {{ session("success") }}
                </span>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            </div>
            @endif
            <div
                class="bg-light p-4 rounded fs-6 text-center"
                style="min-width: 400px"
            >
                <div class="fs-2 mb-2">Your Form Data</div>
                @foreach ($results as $key => $data) @if( $key == 'image')
                <img
                    src="{{ asset('storage/images/'.$data) }}"
                    width="200px"
                    alt="Image"
                />
                @endif
                <div class="mb-3">
                    {{ ucfirst($key) }} =
                    <span class="text-success">{{ $data }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
