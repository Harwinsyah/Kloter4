<?php
    include_once("config.php");
    $id = $_GET['id'];
    $post = mysqli_query($koneksi, "SELECT * FROM posts_tb WHERE id=$id");    
    $comment = mysqli_query($koneksi, "SELECT * FROM comments_tb WHERE postId=$id");    
    $user = mysqli_query($koneksi, "SELECT * FROM user_tb");
    while($data = mysqli_fetch_array($post)) {
        $idPost = $data['id'];
        $title = $data['title'];
        $content = $data['content'];
        $createdBy = $data['createdBy'];        

        while ($data2 = mysqli_fetch_array($user)) {
            if ($createdBy == $data2['id']) {
                $penulis = $data2['name'];
            }
        }
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
</head>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?= $title ?></h2>
                <h6>
                    <blockquote class="blockquote">
                        <footer class="blockquote-footer">dibuat oleh <cite title="Penulis"><?= $penulis ?></cite></footer>
                    </blockquote>
                </h6>
                <p><?= $content ?></p>
                <h5>Komentar</h5>
                <form action="comment.php" method="post">
                    <div class="form-group">
                        <input type="hidden" name="postId" value="<?= $idPost ?>">
                        <textarea name="comment" id="comment" rows="3" class="form-control" placeholder="masukkan komentar anda ..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" name="Submit">Tambah</button>        
                </form>
                <?php
                    while ($data3 = mysqli_fetch_array($comment)) {
                        ?>                            
                            <hr>
                            <h6>Anonymous berkata :</h6>                    
                            <p><?= $data3['comment'] ?></p>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>