<?php
    $link = strip_tags($_GET['p']);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="OBSEI">
    <meta name="author" content="Maria Eduarda Spiess">
    <link rel="icon" href="images/icon.png">

    <title>OBSEI</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
</head>

<body class="mb-0 pb-4">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #000e6e">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img class="float-sm-right img-fluid my-auto" width="98" height="30,4" src="images/brand.png" alt="">
            <div class="collapse navbar-collapse text-center" id="navbarCollapse">
                <ul class="navbar-nav ml-auto" id="nav">
                    <li class="nav-item <?php if ($link == '' or $link == 'link') echo 'active'; ?>">
                        <a class="nav-link" href="index.php?p=link">Home</a>
                    </li>
                    <li class="nav-item <?php if ($link == 'link2') echo 'active'; ?>">
                        <a class="nav-link" href="projetos.php?p=link2">Projetos</a>
                    </li>
                    <li class="nav-item <?php if ($link == 'link3') echo 'active'; ?>">
                        <a class="nav-link" href="links.php?p=link3">Links</a>
                    </li>
                    <li class="nav-item <?php if ($link == 'link4') echo 'active'; ?>">
                        <a class="nav-link" href='pesquisadores.php?p=link4'>Pesquisadores</a>
                    </li>
                    <li class="nav-item <?php if ($link == 'link5') echo 'active'; ?>">
                        <a class="nav-link" href='questionarios.php?p=link5'>Questionários</a>
                    </li>
                    <li class="nav-item <?php if ($link == 'link6') echo 'active'; ?>">
                        <a class="nav-link" href="artigos.php?p=link6">Artigos</a>
                    </li>
                    <li class="nav-item <?php if ($link == 'link7') echo 'active'; ?>">
                        <a class="nav-link" href="http://www.dalfovo.com/ambienteempreendedor/desktop/index.php">Ambiente</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>