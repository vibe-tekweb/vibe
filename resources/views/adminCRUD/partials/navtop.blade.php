<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin')  ||Request::is('admin/editsong/*')? 'active' : '' }}" aria-current="page" href="/admin">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/addsong') ? 'active' : '' }}" href="/admin/addsong">Add Song</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/viewuser') ? 'active' : '' }}" href="/admin/viewuser">View User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/viewadmin') ? 'active' : '' }}" href="/admin/viewadmin">View Admin</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/discover') ||Request::is('admin/editdiscover/*')? 'active' : '' }}" href="/admin/discover">Discover</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/adddiscovery')   ? 'active' : '' }}" href="/admin/adddiscovery">Add Discover</a>
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