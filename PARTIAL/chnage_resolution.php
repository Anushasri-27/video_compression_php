<?php

$video =$_FILES["video"]["tmp_name"];
$resolution = $_POST["resolution"];
$name="resolution_".rand(50,200)."_".$resolution.".mp4";
$command = "ffmpeg -i $video -s $resolution uploads/$name";
system($command);
global $name;
echo "";


$path = "uploads/" . $name;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link href="../STYLES/VIDEO.CSS" rel="stylesheet" />
</head>

<body>
    <div class="container">
    <div class="row">
            <div class="col-lg-12 heading-wrap">
                <h1 class="heading">your compressed video is below click on donwload option to download</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 video-wrap">
                <video width="820" height="540" controls>
                    <source src="<?php echo $path;  ?>" type="video/mp4">
                </video>
            </div>
        </div>
        <a class="a-go" href="../index.php"><button class="btn btn-danger goback"> Go Back</button></a>
    </div>
</body>

</html>