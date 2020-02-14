<?php
include_once('config.php');

 if(isset($_POST['upload'])){
    //  ===================
    //  IMAGE CHECKING CODE
    //  ===================
                $imagePath = "";
                $target_dir = "../thumbnails/";
                // target file
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                // file type
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                    // orry, only JPG, JPEG, PNG & GIF files are allowed
                    $uploadOk = 0;
                }else{
                    // Check if image file is a actual image or fake image
                    if(exif_imagetype($_FILES["fileToUpload"]["tmp_name"])) {
                        // for image
                        $imagePath = $target_dir . $_FILES['fileToUpload']["name"];
                        $uploadOk = 1;
                    } else {
                        // for not image
                        $uploadOk = 0;
                        }
                }                    
                
                // Check if file already exists
                if (file_exists($target_file)) {
                    // for already exist
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    // for file is too large
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    // Sorry, your file was not uploaded
                    
                } 
                // if everything is ok, try to upload file
                else {

                    $date = date("M") ." ". date("d") ." " .date("Y");

                    $blog_title = $_POST['blog_title'];
                    $blog_description = $_POST['blog_description'];
                    // $blog_content = $_POST['blog_content'];

                    $content = $_POST['blog_content'];
                    $new_content = "";
                    // Removing ' from content
                    $strlen = strlen($content);
                    for ($i = 0; $i < $strlen; $i++) {
                        $char = substr($content, $i, 1);
                        if($char == "'")
                            $new_content = $new_content . "\'"; 
                        else
                            $new_content = $new_content . $char;
                    }

                    $login_id = $_COOKIE['logged_in_user'];
                    $login_id = str_replace(md5("AmiRakibBolchi"), "", $login_id);
                    $login_id = str_replace(md5("SobThikA6e"), "", $login_id);
                    
                    // echo "hello";
                    // Other code here
                    echo $login_id . $new_content . $blog_description . $blog_title;
                        if(isset($_POST['blog_title']) && isset($_POST['blog_description']) && isset($_POST['blog_content'])){
                            $sql = "INSERT INTO knife_blog_posts
                                    (blog_title, blog_content, blog_description, blog_thumbnail, login_id, blog_post_date)
                                    VALUES ('$blog_title', '$new_content', '$blog_description', '$imagePath', '$login_id', '$date')";
                            $conn->query($sql);
                            header("Location: http://localhost/portfolio/login/dashboard.php");
                            echo $login_id . $new_content . $blog_description . $blog_title;
                            // Moving image to directory
                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $imagePath)) {
                                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

                            } else {
                                echo "Sorry, there was an error uploading your file.";
                        }
                    }                    
                }
 }
?>

<?php
        // checking user already logged in or not
        if(isset($_COOKIE['logged_in_user'])){
            $login_id = $_COOKIE['logged_in_user'];
            $login_id = str_replace(md5("AmiRakibBolchi"), "", $login_id);
            $login_id = str_replace(md5("SobThikA6e"), "", $login_id);


            $check_user_sql = "SELECT * FROM knife_login WHERE login_id = '$login_id'";
            $result = $conn->query($check_user_sql);
            if ($result->num_rows == 1){
                // for logged in user
            ?>
            <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.tiny.cloud/1/iin4g3wkm2xmhkm6rogcj5zhudd0vh9ult9jaz7dflbp59aw/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <div class="container blog-post-container">
        <h1 class="dashboard_heading">HYPHI DASHBOARD</h1>
        <hr>
        <div class="row">
            <div class="col-md-2 mb-3">
                <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active item1" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">DASHBOARD</a>
                    </li>
                    <li class="nav-item item1">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">UPLOAD PORTFOLIO</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="blog-post-editor">
                                <div class="blog_title">
                                    <h5>please write your sweet blog title</h5>
                                    <input name="blog_title" type="text" class="write_blog">
                                </div>

                                <div class="blog_thumbnail">
                                    <h5>Please Put Your Thumbnail :</h5>
                                    <input type="file" name="fileToUpload">
                                </div>

                                <div class="blog_description">
                                    <h5>Write your blog description</h5>
                                    <textarea name="blog_description" id="" cols="80" rows="5"></textarea>
                                </div>

                                <div class="write_blog">
                                    <h5>Please Write Your Sweet Blog :</h5>
                                    <textarea name="blog_content" id="textarea" cols="80" rows="5"></textarea>
                                </div>

                                <button class="btn blog_btn" type="submit" name="upload">Post Your Blog</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Contact</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed
                            accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem
                            blanditiis voluptates vel ipsam? Facilis, earum!</p>

                    </div>
                </div>
            </div>
        </div>



    </div>

    <script>
        tinymce.init({
            selector: '#textarea'
        });
    </script>
</body>

</html>
<?php   } 
        }else{
            //for not logged in user
            header("Location: http://localhost/portfolio/login");
        }
?>
            

