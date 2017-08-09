<?php 

include("connections/connections.php");
if(isset($_GET['pid'])){
 $postid=$_GET['pid'];
$query="SELECT * FROM posts WHERE id='$postid'";
}
function setComments($connect)
{
   
    if(isset($_POST['commentSubmit'])){
        $name=$_POST['name'];
        $date=$_POST['date'];
        $message=$_POST['message'];
         $postid=$_GET['pid'];

        $sql="INSERT INTO comments(name,date,message,postid) VALUES('$name','$date','$message',$postid)";
        $result=$connect->query($sql);
    }
    }


//     function getComments($connect)
//     {
//          $postid=$_GET['pid'];
//         $sql="SELECT * from comments where postid='$postid'";
//         $result = $connect->query($sql);
//         while($row=$result->fetch_assoc())
//         {
//             // echo "<div='comment-box'><p>";
//             // echo $row['name']."<br>";
//             // echo $row['date']."<br>";
//             // echo $row['message']."<br><br>";
//             // echo "</p></div>";
            
//             echo"                <div class='media'>";
//                    echo" <a class='pull-left' href="#">";
//                        echo" <img class='media-object' src='http://placehold.it/64x64' alt=''>";
//                    echo" </a>
//                     <div class='media-body'>";
//                         echo "<h4 class='media-heading'>$row[name]
//                             <small>$row['date']</small>
//                         </h4>
//                         $row['message']
//                     </div>
//                 </div>
// ";
//         }
//     }



?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan of Action</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/blog2.css" rel="stylesheet">
    

  

</head>

<body>
<?php include("menu.html");?>
    <!-- Navigation -->
    <!-- Page Header -->
    <br>
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="post-heading">
                        <h1 style="font-size:35px">This Bhayankar Thandi Coffee In Gurugram Is A Liquid Hug For Your Brain!</h1>
                        <a href="#" style="color:white;"><h5 class="category">FOOD AND LIFESTYLE</h5></a>
                        <span class="meta">Posted by <a href="#">Anuj Garg</a> on August 2, 2017</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">


            <div class="row">
                <div class="col-lg-12  col-md-10 offset-md-2" >
                                <div class="row">
    
 
    <!-- Facebook -->
   <div class="col-xs-12 col-lg-4 col-md-6 col-sm-7"><a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://www.example.com&p[images][0]=&p[title]=Title%20Goes%20Here&p[summary]=Description%20goes%20here!" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false"><button style="width:100%; margin-top:6px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i> Share on Facebook</button></a><!-- Twitter -->
    
   </div>
    <div class="col-xs-12 col-lg-4 col-md-6 col-sm-7">
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false"><button style="width:100%; margin-top:6px;" type="button" class="btn btn-twitter btn-lg"><i class="fa fa-twitter fa-2"></i> Share on Twitter</button></a><!-- Twitter -->
    </div>
    </div>
                        <?php 
         
         
//$query="SELECT * FROM posts WHERE category='$category'";

$result1=mysqli_query($connect,$query);
//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){


          ?>
                   
<?php echo $row['body'];}?>

                </div>
            </div>
        </div>
    </article>

    <hr>
    
    <!-- Blog Comments -->

                <!-- Comments Form -->
                <!--<div class="well"> -->
                    <div class="container">
                    <h4>Leave a Comment:</h4>
                    <?php
                    echo "<form method='POST' action='".setComments($connect)."'>
                       
                            <input type='text' name='name' placeholder='Your Name'><br>
                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                            <textarea name='message' cols='50' rows='3' placeholder='Enter your comment'></textarea>
                        
                        <button type='submit' name='commentSubmit'>Comment</button>
                    </form>";
                    
                    ?>
                    </div>
              
<?php 
$postid=$_GET['pid'];
        $sql="SELECT * from comments where postid='$postid'";
$result1=mysqli_query($connect,$sql);
//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){
?><div class="container">
                                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $row['name'];?>
                            <small><?php echo $row['date'];?></small>
                        </h4>
                       <?php echo $row['message'];?> 
                    </div>
                </div>
                </div>
                
<?php }?>

                <!-- Posted Comments -->

                

               
    <?php include("footer.html");?>
    
    <!-- Bootstrap core JavaScript -->

    
    <script src="vendor/tether/tether.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>