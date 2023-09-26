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
            <div class="bg-light p-4 rounded fs-6" style="min-width: 300px">
                <form
                    method="POST"
                    action="/form"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="text-center fs-2 mb-2">This is a form</div>

                    <div class="mb-2 form-group">
                        <label for="name" class="form-label">Name</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            class="form-control"
                        />
                        @error('name')
                        <span class="text-danger">
                            Fill in your short name
                        </span>

                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            class="form-control"
                        />
                        @error('email')
                        <span class="text-danger">Email format invalid</span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="password" class="form-label"
                            >Password</label
                        >
                        <input
                            id="password"
                            name="password"
                            type="password"
                            class="form-control"
                        />
                        @error('password')
                        <span class="text-danger"> Password invalid </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="image" class="form-label"
                            >Profile Picture</label
                        >
                        <input
                            id="image"
                            name="image"
                            type="file"
                            class="form-control"
                        />
                        @error('image')
                        <span class="text-danger">
                            Image has to be of type jpeg, jpg, or png and be
                            maximal 2 Mb
                        </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="number" class="form-label">Number</label>
                        <input
                            id="number"
                            name="number"
                            type="text"
                            class="form-control"
                        />
                        @error('number')
                        <span class="text-danger">
                            Number has to be in range 2.50 ≤ number ≤ 99.99
                        </span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-100">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
