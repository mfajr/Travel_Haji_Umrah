            <?php
            session_start();
            if (isset ($_GET['x']) && $_GET['x']=='home'){
                $page = 'home.php';
            include "main.php";
            }elseif (isset ($_GET['x']) && $_GET['x']=='facilities'){
                $page = 'facilities.php';
            include "main.php";
            }elseif (isset ($_GET['x']) && $_GET['x']=='checkout'){
                $page = 'checkout.php';
            include "main.php";
            }elseif (isset ($_GET['x']) && $_GET['x']=='report'){
                if($_SESSION['level_travel']==1){
                    $page = 'report.php';
                    include "main.php";
                }else {
                    $page = "home.php";
                    include "main.php";
                }
            }elseif (isset ($_GET['x']) && $_GET['x']=='team'){
                if($_SESSION['level_travel']==1){
                    $page = 'team.php';
                    include "main.php";
                }else {
                    $page = "home.php";
                    include "main.php";
                }
            }elseif (isset ($_GET['x']) && $_GET['x']=='whyus'){
                $page = 'whyus.php';
            include "main.php";
            }elseif (isset ($_GET['x']) && $_GET['x']=='login'){
            include "login.php";
            }elseif (isset ($_GET['x']) && $_GET['x']=='logout'){
            include "proses/proses_logout.php";
            }else {
                $page = "home.php";
                include "main.php";
            }
            ?> 