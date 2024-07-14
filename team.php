<?php
    include "proses/connect.php";
    $_query = mysqli_query($conn,"SELECT * FROM tb_user");
    while ($record = mysqli_fetch_array($_query)) {
        $result[] = $record; 
    }
?>

<div class="col-lg-9 mt-2 rounded">
    <div class="card">
        <div class="card-header">
            TEAM
        </div>
        <div class="card-body">
            <div class="row">
            </div>
            <!-- Modal tambah team start -->
            <div class="modal fade" id="modaltambahteam" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">tambah anggota</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal tambah team end -->

            <!-- Modal view start -->
            <div class="modal fade" id="modalview" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">data anggota</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal view end -->
            <?php  
                if(empty($result)){
                    echo "Data user tidak ada";
                }else {
            ?>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">level</th>
                            <th scope="col">No_HP</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($result as $row) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['level'] ?></td>
                            <td><?php echo $row['nohp'] ?></td>
                            <td class="d-flex ">
                                <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modalview"><i class="bi bi-eye-fill"></i></button>
                                <button class="btn btn-warning btn-sm me-1"><i class="bi bi-pencil-fill"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="col d-flex">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambahteam"> tambah
                        user</button>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>