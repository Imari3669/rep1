<?php

$db_connect = mysql_connect('127.0.0.1', 'root', '1234');
if($db_connect !==false){
    mysql_select_db('database1', $db_connect);
    $query = mysql_query('SELECT * FROM users', $db_connect);
    if ($query!==false) {
       while ($row = mysql_fetch_assoc($query)) {
           echo $row['id'];
       }
    }
}