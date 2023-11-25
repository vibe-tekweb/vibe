<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Song </title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
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
                        <a class="nav-link active" href="#">Add Song</a>
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
                        <a class="nav-link" href="/admin/adddiscovery">Add Discover</a>
                    </li>

                    <li class="nav-item">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
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
        <h1>Add Song</h1>
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

            <form method="post" action="/admin/store" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-7">
                    <label class="form-label">Title</label>
                    <input class="form-control" type="text" autofocus="true" name="title" id="title" placeholder="Insert title">
                    <br>
                </div>

                <div class="col-lg-7">
                    <label class="form-label">Artist</label>
                    <input class="form-control" type="text" name="artist" id="artist" placeholder="Insert singer">
                    <br>
                </div>

                <div class="col-lg-7">
                    <label class="form-label">Genre</label>
                    <select class="form-select" aria-label="Default select example" name="genre" id="genre" placeholder="Choose genre">
                        <option selected>Choose genre</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Pop">Pop</option>
                        <option value="Dangdut">Dangdut</option>
                        <option value="Kpop">Kpop</option>
                        <option value="Rock">Rock</option>
                        <option value="Classical">Classical</option>
                        <option value="Dance">Dance</option>
                        <option value="Phonk">Phonk</option>
                        @foreach ($newgenres as $newgenre)
                            <option value="{{ $newgenre->new_genre }}">{{ $newgenre->new_genre }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div class="col-lg-7">
                    <label for="choose" class="form-label">Insert song file .mp3</label>
                    <input class="form-control" type="file" id="chfile" name="chfile">
                    <br>
                </div>


                <div class="col-lg-7">
                    <label class="form-label">Release date</label>
                    <input class="form-control" type="date" name="release_date" id="release_date" placeholder="Insert genre">
                    <br>
                </div>

                <div>
                    <input class="btn btn-primary btn-md col-lg-1 mt-3" type="submit" name="submit" id="submit" value="add">
                </div>

            </form>

        </div>
    </div>


</body>

</html>