<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quinzena Julho</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="bootstrap\css\style.scss" rel="stylesheet">

</head>
<body>
    <header>
        <!--  Navegação -->
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
        <a href="#" class="navbar-brand">
            <img id="logo" src="images/logo.png" alt ="Teste Image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav">
                <a class="nav-item nav-link" id="home-menu">Home</a>
                <a class="nav-item nav-link" id="register-menu">Cadastrar</a>
                <a class="nav-item nav-link" id="consult-menu">Consultar</a>
             
            </div>
        </div>

        </nav>
    </div>
    </header>
     <!--  Carousel  -->
    <main>
<div class="container-fluid">
    <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="1"></li>
            <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.jpg" class="d-block w-100" alt="Imagem Teste">
                <div class="carousel-caption d-md-block">
                    
                    <p>Disponível agora!</p>
                    <a href="#" class="main-btn"></a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/banner2.jpg" class="d-block w-100" alt="Imagem Teste 2">
                <div class="carousel-caption d-md-block">
                    
                    <p>Disponível agora!</p>
                    <a href="#" class="main-btn"></a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/banner4.jpg" class="d-block w-100" alt="Imagem Teste 3">
                <div class="carousel-caption d-md-block">
                  
                    <p>Pré-Venda disponível!</p>
                    <a href="#" class="main-btn"></a> 
                </div>
            </div>
            
        </div>  
        
        <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
</div>
</main>


<!-- Bootstrap  -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>