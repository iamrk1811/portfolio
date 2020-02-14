<?php
    include_once('login/config.php');
    $post_id = $_GET['id'];
    $sql = "SELECT * FROM knife_blog_posts WHERE blog_id = '$post_id'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        while($row = $result->fetch_assoc()){ ?>  
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $row['blog_title']; ?></title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="js/jquery-3.4.1.slim.min.js">
                <link rel="stylesheet" href="js/bootstrap.min.js">  
                <link rel="stylesheet" href="css/style.css">  
            </head>
            <body id="blog-body">
                <div class="container pt-5 pb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-thumbnail-container">
                                <img id="blog-thumbnail" class="img-fluid" src="<?php echo str_replace("../", "", $row['blog_thumbnail']); ?>" alt="thumbnail">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="blog-title-container pt-5 pb-5">
                                <h3><?php echo $row['blog_title']; ?></h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="blog-content-container">
                                <?php echo $row['blog_content']; ?>
                            </div>
                        </div>                        
                    </div>      
                </div>
            </body>
            </html>        
    <?php }
    }
?>