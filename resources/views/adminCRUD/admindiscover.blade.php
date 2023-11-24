<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        <a class="nav-link active" href="#">Discover</a>
                    </li>

                    {{-- TODO: Jovan sempurnakan tampilannya --}}
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
        }

        .navbar a.active {
            color: yellow !important;
        }

        .navbar a {
            color: #fff;
        }
    </style>

    <section class="p-5">
        <div class="px-5 container-fluid table-responsive-md">
            <table id="song_list" class="table table-striped dataTable no-footer" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>discovery_category</th>
                        <th>Edit</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($musics as $music)
                    <tr>
                        <td></td>
                        <td>{{$music->title}}</td>
                        <td>{{$music->artist}}</td>
                        <td>{{$music->disc_category}}</td>
                        <td>
                            <a href="{{route('admin.editdiscover', ['music' => $music->id])}}" class="btn btn-secondary btn-sm">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


    <script>
        $(document).ready(function() {
            $('#song_list').DataTable();
        });

        $('#song_list').dataTable({
            "ordering": true
        });
    </script>
</body>