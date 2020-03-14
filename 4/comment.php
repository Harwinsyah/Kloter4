<?php    
    if(isset($_POST['Submit'])) {
        include_once("config.php");

        $comment = $_POST['comment'];                                               
        $postId = $_POST['postId'];                                               
        
        $query = "INSERT INTO comments_tb VALUES(NULL, '".$comment."', '".$postId."')";
        $sql = mysqli_query($koneksi, $query);                        

        echo '<script>window.history.back()</script>';
    }
?>