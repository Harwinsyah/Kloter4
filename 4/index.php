<?php
    include_once("config.php");
    $post = mysqli_query($koneksi, "SELECT * FROM posts_tb ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumbways Soal 4</title>
</head>
<body>    
    <div class="container">        
        <div class="row">
            <div class="col-md-12 header">
                <div class="float-left">
                    <h4>DumbSocmed</h4>
                </div>
                <div class="float-right">
                    <a href="add_post.php" class="btn btn-info btn-sm">Add Posts</a> <a href="add_user.php" class="btn btn-info btn-sm">Add Users</a>                    
                </div>
            </div>        
        </div>
        <div class="row">            
            <?php
                while($data = mysqli_fetch_array($post)) {
                    ?>
                        <div class="col-md-6">
                            <h5><a href="show_post.php?id=<?= $data['id'] ?>"><?= $data['title'] ?></a></h5>
                            <h6 id="penulis">
                                <?php 
                                    $create = $data['createdBy'];
                                    $sql2 = mysqli_query($koneksi, "SELECT * FROM user_tb");
                                    while ($data2 = mysqli_fetch_array($sql2)) {
                                        if ($create == $data2['id']) {
                                            ?>
                                                <a href="show_user.php?id=<?= $data2['id'] ?>"><?= $data2['name'] ?></a>
                                            <?php
                                        }
                                    }
                                ?>
                            </h6>
                            <p id="konten"><?= substr($data['content'], 0, 100) ?>...</p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</body>
</html>