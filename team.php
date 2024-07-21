<?php
include "proses/connect.php";
$_query = mysqli_query($conn, "SELECT * FROM tb_user");
while ($record = mysqli_fetch_array($_query)) {
    $result[] = $record;
}
?>

<div class="col-lg-9 mt-2 mb-5 rounded">
    <div class="card">
        <div class="card-body text-bg-primary text-center fs-3 rounded">
            DATA TEAM SISTEM TRAVEL AL-FAJR
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Anggota</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="proses/proses_input_team.php" class="needs-validation" novalidate method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" required>
                                        <label for="floatingInput">Nama</label>
                                        <div class="invalid-feedback">Masukkan Nama</div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
                                    <label for="floatingInput">Username</label>
                                    <div class="invalid-feedback">Masukkan Username</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" aria-label="Default select example" name="level" required>
                                        <option selected hidden value="0">pilih level user</option>
                                        <option value="1">admin / owner</option>
                                        <option value="2">developer</option>
                                        <option value="3">costumer service</option>
                                    </select>
                                    <label for="floatingInput">Level User</label>
                                    <div class="invalid-feedback">pilih level user</div>
                                </div>
                                    </div>
                                    <div class="col-lg-8">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxxxxxxx" name="nohp">
                                    <label for="floatingInput">No.HP</label>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingInput" placeholder="Password" disabled value="12345" name="password">
                                        <label for="floatingpassword">Password</label>
                                    </div>
                                    </div>
                        </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="" name="alamat" style="height: 100px;"></textarea>
                                    <label for="floatinginput">Alamat</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_user_validate" value="1234">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal tambah team end -->

            <!-- Modal view start -->
            <?php foreach ($result as $row) { ?>
            <div class="modal fade" id="modalview<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Anggota</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="proses/proses_input_team.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input disabled type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" value="<?php echo $row ['nama'] ?>">
                                        <label for="floatingInput">Nama</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input disabled required type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?php echo $row ['username'] ?>">
                                    <label for="floatingInput">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                <select disabled class="form-select" aria-label="Default select example" name="level">
                                    <?php
                                    $data = array("owner/admin", "developer", "customer service");
                                        foreach ($data as $key => $value) {
                                            if($row['level'] ==$key+1){
                                                echo "<option selected value='$key'>$value</option>";
                                            }else{
                                                echo "<option value='$key'>$value</option>";
                                            }
                                        }
                                    ?>
                                    </select>
                                    <label for="floatingInput">Level User</label>
                                </div>
                                    </div>
                                    <div class="col-lg-8">
                                    <div class="form-floating mb-3">
                                        <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxxxxxxxxx" name="nohp" value="<?php echo $row['nohp'] ?>">
                                    <label for="floatingInput">No.HP</label>
                                    </div>
                                </div>
                                </div>
                                <div class="form-floating">
                                    <textarea disabled class="form-control" id="" name="alamat" style="height: 100px;"><?php echo $row['alamat'] ?></textarea>
                                    <label for="floatinginput">Alamat</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal view end -->
            
            <!-- Modal edit start -->
            <?php } foreach ($result as $row) { ?>
            <div class="modal fade" id="modaledit<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Anggota</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="proses/proses_edit_team.php" method="POST">
                            <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input required type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" value="<?php echo $row ['nama'] ?>">
                                        <label for="floatingInput">Nama</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input required type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?php echo $row ['username'] ?>">
                                    <label for="floatingInput">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" aria-label="Default select example" name="level">
                                    <?php
                                    $data = array("owner/admin", "developer", "customer service");
                                        foreach ($data as $key => $value) {
                                            if($row['level'] ==$key+1){
                                                echo "<option selected value=".($key+1).">$value</option>";
                                            }else{
                                                echo "<option value=".($key+1).">$value</option>";
                                            }
                                        }
                                    ?>
                                    </select>
                                    <label for="floatingInput">Level User</label>
                                </div>
                                    </div>
                                    <div class="col-lg-8">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxxxxxxx" name="nohp" value="<?php echo $row['nohp'] ?>">
                                    <label for="floatingInput">No.HP</label>
                                    </div>
                                </div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="" name="alamat" style="height: 100px;"><?php echo $row['alamat'] ?></textarea>
                                    <label for="floatinginput">Alamat</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_user_validate" value="1234">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal edit end -->
            
            <!-- Modal delete start -->
            <?php } foreach ($result as $row) { ?>
            <div class="modal fade" id="modaldelete<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md modal-fullscreen-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Anggota</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="proses/proses_delete_team.php" method="POST">
                            <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="col-lg-12">
                                    <?php
                                    if($row['username'] == $_SESSION['username_travel']){
                                        echo "<div class='alert alert-danger'>Anda tidak dapat menghapus akun sendiri</div>";
                                    }else{
                                        echo "Apakah anda yakin ingin menghapus user <b>$row[username]</b>";
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button <?php echo ($row['username'] == $_SESSION['username_travel']) ? 'disabled' : '' ;?> type="submit" class="btn btn-danger" name="input_user_validate" value="1234">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal delete end -->

            <?php
            }
            if (empty($result)) {
                echo "Data user tidak ada";
            } else {
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
                                    <td><?php 
                                    if($row['level'] ==1){
                                        echo "Admin";
                                    }elseif($row['level'] ==2){
                                        echo "Developer";
                                    }elseif($row['level'] ==3){
                                        echo "Customer Service";
                                    }
                                    ?></td>
                                    <td><?php echo $row['nohp'] ?></td>
                                    <td class="d-flex ">
                                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#modalview<?php echo $row['id']?>"><i class="bi bi-eye-fill"></i></button>
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                        data-bs-target="#modaledit<?php echo $row['id']?>"><i class="bi bi-pencil-fill"></i></button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modaldelete<?php echo $row['id']?>"><i class="bi bi-trash3-fill"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="col d-flex">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambahteam"> Tambah
                            Anggota</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>