<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumbways Soal 3</title>
</head>
<body>
<form action="3.php" method="post">
        <table>
            <tr>
                <td>Input Angka Ganjil 1 - 9</td>
                <td>:</td>
                <td><input type="text" name="angka"></td>
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
            $a = $_POST['angka'];
            $b = ($a / $a) + 1;    
            $c = $b + 2;
            $d = $c + 2;
            $e = $d + 2;    

            for ($i=1; $i <= $a; $i++) { 
                for ($j=1; $j <= $a; $j++) { 
                    if($j % 2 && $i == $b || $j % 2 && $i == $c || $j % 2 && $i == $d || $j % 2 && $i == $e || $i % 2 && $j == $b || $i % 2 && $j == $c || $i % 2 && $j == $d || $i % 2 && $j == $e) {
                        echo '*';
                    } else {
                        echo '=';
                    }
                }
                echo "<br>";
            }            
        }
    ?>
</body>
</html>