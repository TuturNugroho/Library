<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <section class="content">
        <div class="container">
            <!-- <button type="button" class="btn btn-primary mt-5">Tambah User</button> -->
            <a href="<?= Staditek\App\Core\Router::url('/tambah'); ?>" type="button" class="btn btn-primary mt-5">Tambah User</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col" hidden>Avatar</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Created</th>
                        <th scope="col" hidden>Update</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $td) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $td->id ?>
                            </td>
                            <td>
                                <?php echo $td->nama ?>
                            </td>
                            <td>
                                <?php echo $td->username ?>
                            </td>

                            <td>
                                <?php echo $td->email ?>
                            </td>
                            <td>
                                <?php echo $td->password ?>
                            </td>
                            <td>
                                <?php echo $td->created_ad ?>
                            </td>

                            <td>
                                <a href="<?= Staditek\App\Core\Router::Url("/edit/$td->id"); ?>" type="button" class="btn btn-warning">Edit</a>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- <section class="footer">
        <div class="container">
            <footer>
                <p>&copy; <a href="https://www.youtube.com">Tutur nugroho</a>. created with love</p>
            </footer>
        </div>
    </section> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>