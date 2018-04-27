<?php
function countWords($str)
{
    $str_array = explode(" ", $str);
    $new_array = array_count_values($str_array);
    
    return $new_array;
}

if (isset($_GET['text'])) 
{
    $string = htmlentities($_GET['text']);
    $array = countWords($string);
    arsort($array);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Counting Words</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <input type="text" name="text">
        <input type="submit" value="Submit">
    </form>

    <table>
        <tr>
            <th>Word</th>
            <th>Count</th>
        </tr>
        <?php foreach($array as $key => $value): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>