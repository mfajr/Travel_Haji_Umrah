<nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
    <div class="container-lg">
        <a class="navbar-brand" href="#">
            <img src="assets/img/gambar_kakbah.png" alt="Logo" width="40" height="30"
                class="d-inline-block align-text-top">
            Al-Fajr
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php
                        echo $hasil['username'];
                        ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Log-out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>