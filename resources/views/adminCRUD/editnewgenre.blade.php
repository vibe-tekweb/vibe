<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit AddDiscover </title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/admin">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/addsong">Add Song</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/viewuser">View User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/viewadmin">View Admin</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/discover">Discover</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/adddiscovery">Add Discover</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <style>
        .bg-body-primary {
            background-color: blue;
            overflow: scroll;
        }

        .navbar a.active {
            color: yellow !important;
        }

        .navbar a {
            color: #fff;
        }
    </style>


    <div class="container-md p-3">
        <br>
        <h1>Edit Genre</h1>
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <div class="mt-4 mb-3">

            <form method="post" action="{{route('admin.update_newgenre', ['newgenre' => $newgenre])}}">
                <div class="P-5">
                    @csrf
                    @method('put')
                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">new_genre id</label>
                        <input type="text" class="form-control form-control-md" aria-label="Default disable example" value="{{$newgenre->id}}" disabled>
                    </div>

                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Old genre name</label>
                        <input type="text" class="form-control form-control-md" name="old_newgenre" aria-label="Default disable example" value="{{$newgenre->new_genre}}" disabled>
                    </div>

                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Nama baru genre</label>
                        <input type="text" class="form-control form-control-md" name="new_genre" aria-label="Default disable example" value="{{$newgenre->new_genre}}" placeholder="Insert new name">
                    </div>

                    <div>
                        <input class="submit-addDiscover btn btn-primary btn-md col-lg-1 mt-3" type="submit" name="submit" id="submit" value="Update">
                    </div>
            </form>

            <a href="{{ route('admin.adddiscovery') }}" class="btn btn-secondary btn-md mt-3">Back</a>
        </div>
    </div>
</body>

</html>