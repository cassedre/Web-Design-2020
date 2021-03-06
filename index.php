<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- FONTE -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3d2750cf9d.js" crossorigin="anonymous"></script>
    <script src="js/progressbar.min.js"> </script>
</head>

<body>
    <?php include('include/header.php'); ?>

    <br></br>
    <div id="banner">
        <h1>&lt;HDemetrio/&gt; </h1>

    </div>

    <main>
        <a href="#">
            <h2 class="section-heading">My Personal Information</h2>
        </a>

        <section class="my-personal">
            <div class="card card-gif">
                <div class="card-image">
                    <a href="#">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pandasecurity.com%2Fmediacenter%2Fsrc%2Fuploads%2F2016%2F05%2FPandaGeekPride_ENG_800x800gif.gif&f=1&nofb=1" alt="Card Image">
                    </a>
                </div>
                <div class="card-description">

                    <p><strong>Name: Henrique Demetrio Pacheco de Souza </p></strong>
                    <p><strong>My Student Number: 2019225 </p></strong>
                    <p><strong>Course: Technology Information </p></strong>
                    <p><strong>CA: Web Development</p></strong>
                    
                    <a href="#" class="btn-readmore"> Read More</a>
                </div>
            </div>
            
        </section>
    </main>


    <?php include("include/footer.php"); ?>
</body>

</html>