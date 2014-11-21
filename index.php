<html>
<head></head>
<body>
<form action="index.php" method="post">
    <input type="text" name="text3">
    <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php
echo $_REQUEST["text3"];
?>
<?php
echo file_put_contents("text.txt", $_REQUEST["text3"])?'wer':'w3';
$imploded = implode(",",array(2,5,6));
echo $imploded;
$exploded = explode(",",$imploded);
print_r($exploded);
var_dump($exploded);