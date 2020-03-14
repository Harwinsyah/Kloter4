<?php
    include_once("config.php");
    $id = $_GET['id'];
    $user = mysqli_query($koneksi, "SELECT * FROM user_tb WHERE id=$id");
    while ($data = mysqli_fetch_array($user)) {
        $penulis = $data['name'];
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel <?= $penulis ?></title>
</head>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?= $penulis ?></h2>                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Artikel</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $post = mysqli_query($koneksi, "SELECT * FROM posts_tb WHERE createdBy=$id");
                            while ($data2 = mysqli_fetch_array($post)) {
                                $postId = $data2['id'];
                                ?>                            
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data2['title'] ?></td>
                                        <td>
                                            <?php
                                                $komen = mysqli_query($koneksi, "SELECT * FROM comments_tb WHERE postId=$postId");
                                                while($data3 = mysqli_fetch_array($komen)) {
                                                    echo $data3['comment'] . '<br>';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>                
            </div>
        </div>
    </div>
</body>
</html>