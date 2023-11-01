<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | VCW</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="STYLES/index.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <section class="hero">
            <header>
                <div class="container">
                    <nav class="navbar navbar-light navbar-toggleable-sm">
                        <a href="#" class="navbar-brand mb-0">VCW</a>
                    </nav>
                </div>
            </header>

            <div class="jumbotron jumbotron-fluid mb-0">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-10 col-lg-6">
                            <h1 class="display-5">The Coolest Video compression Website</h1>

                            <p class="lead">Where you choose to how to compress your video which has impact on your productivity and creativity. It also saves a lot of your time. We are the right video compression website space.</p>

                            <p class="lead">
                                <a class="btn btn-primary btn-lg" href="#sec-pricing" role="button">do Your work effortlessly</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sec-about" class="sec-about pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-center text-center">

                    <div class="col-lg-12">
                        <?php include('PARTIAL/chnage_bitrate_form.php'); ?>

                    </div>
                    <div class="col-lg-12">
                        <?php include('PARTIAL/change_resolution_form.php'); ?>


                    </div>


                </div>
            </div>
        </section>





        <footer class="footer">
            <div class="container">
                <ul class="list-inline mb-0 text-center">
                    <li class="list-inline-item">
                        <a href=""><span class="fa fa-twitter"></span></a>
                    </li>

                    <li class="list-inline-item">
                        <a href=""><span class="fa fa-google-plus"></span></a>
                    </li>

                    <li class="list-inline-item">
                        <a href=""><span class="fa fa-instagram"></span></a>
                    </li>

                    <li class="list-inline-item">
                        <a href=""><span class="fa fa-envelope-o"></span></a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>