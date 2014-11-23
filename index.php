

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML5 Skeleton</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body class="row">

<nav>

    <ul class="breadcrumb">
        <img class="glyphicon-search">
        <li role="presentation"><a href="#">News</a></li>
        <li><a href="#">Disney</a></li>
        <li><a href="#">Cartoons</a></li>
    </ul>
</nav>

<aside class="col-md-3">
    <nav>
        <ul class="nav list-group">
            <li class="list-group-item"><img class=""><a href="#" class="text-left">Latest articles</a></li>
            <li class="list-group-item"><img class=""><a href="#" class="text-left">Popular Comments</a></li>
            <li class="list-group-item"><img class=""><a href="#" class="text-left">Latest Events</a></li>
            <li class="list-group-item"><img class=""/><a href="#" class="text-left">HTML 5</a></li>
            <li class="list-group-item"><img src=""/><a href="#" class="text-left">Android Apps</a></li>
            <li class="list-group-item"><img src=""/><a href="#" class="text-left">Website Usage</a></li>
            <li class="list-group-item"><img src=""/><a href="#" class="text-left">Email address</a></li>
        </ul>
    </nav>

    <div class="side-info">
        <img src=>
        <strong>Animated musical</strong>
        <p>Thisis Photoshop's<br>version of Lorem</p>
        <hr>
    </div>

    <div class="side-info">
        <img class="img-responsive" src="img/side1.jpg">
        <strong>Animated musical</strong>
        <p>This is Photoshop's<br>version of Lorem</p>
        <hr>
    </div>

    <div class="side-info">
        <img class="img-responsive" src="img/side2.jpg">
        <strong>Animated musical</strong>
        <p>This is Photoshop's<br>version of Lorem</p>
        <hr>
    </div>

    <div class="side-info">
        <img class="img-responsive" src="img/side3.jpg">
        <strong>Animated musical</strong>
        <p>This is Photoshop's<br>version of Lorem</p>
        <button type="submit" class="btn">Load more</button>
    </div>

    <form role="form">
        <strong>Search</strong>
        <br>
        <div>
            <input type="search" class="form-control" placeholder="Search.."/>
            <button class="glyphicon-search"></button>
            <br>
            <select name="categories" class="form-control">
                <option value="">Select Category</option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <button type="submit" class="btn" value="Comment">Comment</button>
        </div>
    </form>

    <br>
    <div>
        <img src=""/>
        <br>
        <strong>Admin login</strong>
        <br>
        <input type="password" class="form-control">
        <br>
        <button type="submit" class="btn">Submit</button>
    </div>
</aside>


<section class="col-md-9">
    <article>
        <img clsss="image-responsive" src="img/post1.jpg"/>
        <br>
        <strong>Animated musical adventure-comedy film</strong>
        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor<br>aliquet. Aenean sollicitudin,
            lorem quis bibendum auctor, nisi elit consequat ipsum,<br> nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulutate cursus a sit amet<br>
            mauris. Morbi accumsan ipsum velit.
        </p>
        <footer>
            <span class="foot-comment"><img src="img/comment-sign.jpg"/>12 Comment</span>
            <span class="foot-tweet"><img src="img/twit.jpg"/>500 Tweets</span>
            <span class="foot-like"><img src="img/like.jpg"/>30</span>
        </footer>
    </article>
    <section>
        <div class="comments">
            <div class="date">
                <data value="">05/03/2013</data>
                <span>Reply</span>
            </div>
            <br>
            <img class="img-responsive" src="img/comment1.jpg">
            <strong>GIMMY</strong>
            <p>Lorem Ipsum is simply dummy the printing and typesetting world Lorem Ipsum has been</p>
        </div>

        <div class="reply">
            <div class="date">
                <data value="">05/03/2013</data>
                <span>Reply</span>
            </div>
            <br>
            <img class="img-responsive" src="img/comment2.jpg">
            <strong>GIMMY</strong>

            <p>Lorem Ipsum is simply dummy the printing and typesetting world Lorem Ipsum has been</p>
        </div>

        <div class="comments">
            <div class="date">
                <data value="">05/03/2013</data>
                <span>Reply</span>
            </div>
            <br>
            <img class="img-responsive" src="img/reply1.jpg">
            <strong>GIMMY</strong>
            <p>Lorem Ipsum is simply dummy the printing and typesetting world Lorem Ipsum has been</p>
        </div>

        <div class="comments">
            <div class="date">
                <data value="">05/03/2013</data>
                <span>Reply</span>
            </div>
            <br>
            <img class="img-responsive" src="img/reply1.jpg">
            <strong>GIMMY</strong>
            <p>Lorem Ipsum is simply dummy the printing and typesetting world Lorem Ipsum has been</p>
        </div>

        <form role="form" action="index.php" method="post">
            <strong>New Comment</strong>
            <br>
            <input type="text" class="form-control" placeholder="Your name" id="name-comm" name="name"/>
            <br>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address" id="email-comm" name="email">
            <br>
            <textarea type="text" class="form-control" placeholder="Comments" id="text-comm" name="comtext"></textarea>
            <br>
            <input type="submit" class="btn" value="Comment" id="btn-comm">
            </div>
        </form>
    </section>
</section>

<script>
    $("#btn-comm").on("click",function(){
        var name=$("#name-comm").val();
        var email=$("#email-comm").val();
        var text=$("#text-comm").val();
        $(".comments").text(name,email,text);

    });
</script>


</body>
</html>


<div class = "comments">
    <div class="date">
        <data value="">05/03/2013</data>
        <span>Reply</span>
    </div>
    <img class="img-responsive" src="img/reply1.jpg">
    <?php



    $a = array($_REQUEST["name"], $_REQUEST["email"], $_REQUEST["comtext"]);
    $writeStr = implode(';', $a);
    $fo = fopen('newcomments.txt', 'a+');
    fwrite($fo, $writeStr);
    fclose($fo);
        $imploded= implode(" ", $a);
        echo "<strong> $imploded </strong>";

    $readStr = explode(";", $imploded);
    $file = fopen("newcomments.txt","r");
    fread($file,filesize("newcomments.txt"));
    fclose($file);
    $exploded = explode(" ", $imploded);
    echo $exploded;
    ?>


<?php

$db_connect = mysqli_connect('127.0.0.1', 'root', '1234', 'database1');
if($db_connect !==false){
    mysql_select_db('database1', $db_connect);
    $query = mysql_query('SELECT * FROM users', $db_connect);
    if ($query!==false) {
        while ($row = mysql_fetch_assoc($query)) {
            echo $row['id'];
        }
    }
}

