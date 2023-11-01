<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../STYLES/VIDEO.CSS" />
  </head>
  <body >
    <div class="container " style="margin-top: 200px;">
      <div class="row ">
        <div class="col-md-4 offset-md-4  mt-1">
          <h1>Video Compression </h1>
          <form method="post" action="PARTIAL/chnage_resolution.php" enctype="multipart/form-data">
            <div class="form-group  mt-1">
              <label>Select Video</label>
              <input required name="video" class="form-control  mt-1" type="file" />
            </div>

            <div class="form-group  mt-1 ">
              <label>Select Resolution</label>
              <input required type="text" name="resolution" class="form-control  mt-1" placeholder="640X480"/>
            </div>

            <input
              type="submit"
              name="change_resolution"
              class="btn btn-primary mt-5"
              value="Change Resolution"
            /> 
          </form>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
