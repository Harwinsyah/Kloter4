<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumbways Soal 2</title>
</head>
<body>
    <form action="2.php" method="post">
        <table>
            <tr>
                <td>Input String</td>
                <td>:</td>
                <td><input type="text" name="string"></td>
            </tr>
            <tr>
                <td>Input Array 1</td>
                <td>:</td>
                <td><input type="text" name="array1"></td>
            </tr>
            <tr>
                <td>Input Array 2</td>
                <td>:</td>
                <td><input type="text" name="array2"></td>
            </tr>
            <tr>
                <td>Input Array 3</td>
                <td>:</td>
                <td><input type="text" name="array3"></td>
            </tr>
            <tr>
                <td>Input Array 4</td>
                <td>:</td>
                <td><input type="text" name="array4"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><button type="submit" name="proses">Proses</button></td>
            </tr>
        </table>
    </form>
    <br>
    <hr>
    <?php
        if(isset($_POST['proses'])) {
            $string = $_POST['string'];
            $array = [];
            $array[] = $_POST['array1'];
            $array[] = $_POST['array2'];
            $array[] = $_POST['array3'];
            $array[] = $_POST['array4'];

            echo $string . '<br><br>';

            foreach($array as $key => $val)     {
                if (strpos($string, $val) !== false) {
                    echo $array[$key] . " - true";
                } else {
                    echo $array[$key] . " - false";
                }
                echo '<br>';
            } 
        }
    ?>
</body>
</html>