<?php
//insert.php
 include 'connect.php';
 $con = new connect();
if(isset($_POST["subject"]))
{


 $subject = $_POST['subject'];
 $comment = $_POST['comment'];
 $query = " INSERT INTO comments(comment_subject, comment_text) VALUES ('$subject', '$comment')";
 $con->insert($query);
}
?>