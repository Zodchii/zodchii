<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <table border="1px solid #000" style="color:#000; font-family:Arial;text-align: left;font-size:16px;">
        <thead>
            <?php foreach($news[0] as $key=>$value):?>
            <th> <?php echo $key;?></th>
            <?php endforeach?>
        </thead>
        <tbody>
            <?php foreach($news as $val):?>
            <tr>
            <?php foreach( $val as $key=>$value):?>
            <td> <?php echo $value;?></td>
            <?php endforeach?>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>

    <br>

    <a href="/add.php">добавить новость</a>
</body>
</html>