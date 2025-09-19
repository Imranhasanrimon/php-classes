<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#">
        Year
        <select name="2000" id="">
            <?php
            $year = 2000;
            while ($year<=2050){
                ?>

                <option value="<?php echo $year?>"><?php echo $year ?></option>

            <?php
                $year ++;
            }
            ?>
            
        </select>
    </form>
</body>
</html> -->

<?php
// $count = 1;
// do{
//     echo $count."<br>";
//     $count++;
// }while($count<5)


for($iterate = 1; $iterate<=10; $iterate ++){
    ?>

    <li> <?php echo"Imran $iterate" ?></li>
    <?php
    if($iterate == 2){
        break;
    }
}
?>