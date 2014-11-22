<?php

$db_connect = mysql_connect('localhost', 'root', '123');
if($db_connect !==false){
    mysql_select_db('my_new_database', $db_connect);
    $query = mysql_query('SELECT * FROM my_new_table', $db_connect);
    if ($query!==false) {
       while ($row = mysql_fetch_assoc($query)) {
           echo $row['id'];
       }
    }
}