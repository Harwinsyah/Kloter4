<?php
    include_once("config.php");
    $user = mysqli_query($koneksi, "SELECT * FROM user_tb ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumbways</title>
</head>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Tambah User</h4>
                <form action="add_user.php" method="post"> 
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>                                        
                    <button type="submit" class="btn btn-primary btn-sm" name="Submit">Tambah</button>        
                </form>
                <?php    
                    if(isset($_POST['Submit'])) {
                        $name = $_POST['name'];                                               
                        
                        $query = "INSERT INTO user_tb VALUES(NULL, '".$name."')";
                        $sql = mysqli_query($koneksi, $query);
                        ?>
                            <br>
                            <div class="alert alert-success" role="alert">
                                Data User Berhasil Di Tambahkan!
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>        
    </div>
</body>
</html>