<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px;">
    <!-- Header -->
    <?php include "header.php"; ?>
    <!-- end Header -->
    <div class="container-lg">
        <div class="row">
            <!-- sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- end sidebar -->

            <!-- content -->
            <div class="col-lg-9 mt-2 rounded">
                <div class="card">
                    <div class="card-header">
                        Mengapa Memilih Travel Kami?
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ini adalah bagian "Why us"</h5>
                        <p class="card-text">With supporting text below as a natural
                            lead-in to additional conten Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit.Quae ratione illo impedit soluta
                            accusantium est tempore enim, excepturi optio totam? Dolor,
                            at. Consequatur, distinctio! Odio repellendus impedit nemo
                            necessitatibus labore!</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- end content -->
        </div>
        <div class="fixed-bottom text-center mb-2">
            Copyright 2024 FK Channel
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>