<?php
    include_once("config.php");
?>

<html>
<head>
    <title>Tambah Buku</title>
</head>

<body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="container">
        <div class="row">
            <div class="col-md-12">                        
                <form action="add_post.php" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">Konten</label>
                        <textarea name="content" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <select name="penulis" class="form-control">
                            <option value=""> Penulis </option>
                            <?php
                                $sql = mysqli_query($koneksi, "SELECT * FROM user_tb");
                                while ($data = mysqli_fetch_array($sql)){                            
                            ?>
                            <option value="<?= $data['id']?>"><?= $data['name']?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>                    
                    <button type="submit" class="btn btn-primary btn-sm" name="Submit">Tambah</button>        
                </form>
                <?php    
                    if(isset($_POST['Submit'])) {
                        $title = $_POST['title'];
                        $content = $_POST['content'];
                        $penulis = $_POST['penulis'];                                                
                        
                        $query = "INSERT INTO posts_tb VALUES(NULL, '".$title."', '".$content."', '".$penulis."')";
                        $sql = mysqli_query($koneksi, $query);         
                        ?> 
                            <br>
                            <div class="alert alert-success" role="alert">
                                Post Baru Berhasil Dibuat!
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>        
</body>
</html>