<div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-2 sticky-top">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='home') || !isset ($_GET['x'])) ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="home"><i
                                                class="bi bi-house-door"></i> Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='testimoni') ? 'active link-light' : 'link-dark'; ?>" href="testimoni"><i class="bi bi-hand-thumbs-up"></i>
                                            Testimony</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='checkout') ? 'active link-light' : 'link-dark'; ?>" href="checkout"><i class="bi bi-telephone-forward"></i>
                                            Check-out</a>
                                    </li>
                                    <?php if($hasil['level']==1){ ?>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='report') ? 'active link-light' : 'link-dark'; ?>" href="report"><i class="bi bi-journal-bookmark"></i>
                                            Report</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='team') ? 'active link-light' : 'link-dark'; ?>" href="team"><i class="bi bi-person-workspace"></i>
                                            Team</a>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='whyus') ? 'active link-light' : 'link-dark'; ?>" href="whyus">Why us?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>