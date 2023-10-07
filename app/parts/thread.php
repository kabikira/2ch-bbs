<?php 

$title = "panda";
// var_dump($title);
// print_r($title);
include_once("./app/database/connect.php");
include("app/functions/comment_add.php");

include("app/functions/thread_get.php");

var_dump($thread_array);
?>
<?php foreach ($thread_array as $thread) : ?>
    <!-- スレッドエリア -->
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>【タイトル】</span>
                <h1><?php echo $thread["title"] ?></h1>
            </div>
            <?php include("commentSection.php"); ?>
            <?php include("commentForm.php"); ?>
        </div>
    </div>
<?php endforeach ?>