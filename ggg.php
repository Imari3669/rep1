<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>"
</head>
 <!--   <body>
        <input type = "button" value="Click me" id= "click-me"/>
        <div id="show-ajax"></div>
        <script>
        jQuery('#click-me').on('click', function (){
            jQuery.post('/', (), function (data) {
                jQuery('#show-ajax').html (data);
            });
        });
        </script>-->

<body class="row">
<div class="col-md-12" id="table">
    <table class="table" action="index.php" role="form" method="post">
        <tr>
            <td name="id">ИД</td>
            <td name="name">Имя</td>
            <td name="email">Почта</td>
            <td name="phone">Телефон</td>
            <td><input type="submit" class="btn btn-success" id="delete" value="Delete"/></td>
        </tr>
        <?php
        $db_connect = mysql_connect('localhost', 'root', '123');
        if($db_connect !==false) {
            mysql_select_db('info', $db_connect);
            $query = mysql_query('INSERT INTO contact (id, name,email,phone)
VALUES (' . $id . ',\'' . $name . '\',\'' . $email . '\',\'' . $phone . '\')', $db_connect);
            if ($query !== false) {
                while ($row = mysql_fetch_assoc($query)) {
                    echo '<tr></tr>';
                };
            };
        };
        ?>
    </table>
</div>

<!--
<script>
$("#btn-comm").on("click",function(){
    var name=$("#name-comm").val();
    var email=$("#email-comm").val();
    var text=$("#text-comm").val();
    $(".comments").text(name,email,text);

});
</script>-->

<?php
// $a = array($_REQUEST["id"], $_REQUEST["name"], $_REQUEST["email"], $_REQUEST["phone"]);
$id=$_REQUEST["id"];
$name=$_REQUEST["name"];
$email= $_REQUEST["email"];
$phone=$_REQUEST["phone"];

function delete(){
    $id=$_REQUEST["id"];
    $db_connect = mysql_connect('localhost', 'root', '123');
    if ($db_connect !== false) {
        mysql_select_db('info', $db_connect);
        $query = mysql_query('DELETE FROM contact WHERE id= '.$id.' ', $db_connect);
        if ($query !== false) {
            while ($row = mysql_fetch_assoc($query)) {
                echo $row['id'];
            };
        };
    };
};
?>

<div id="table"></div>
<script>
    jQuery('#delete').on('click', function (){
        jQuery.post('index.php', function (data, delete) {
            jQuery('#table').html (data);
        });
    });
</script>

<!--аякс для записи, php в странице-->

        </body>
</html>