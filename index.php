<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FontAwesome e GoogleIcons-->
    <script src="https://kit.fontawesome.com/687b2e222f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- Meu Estilo-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Inclusão do cabeçalho -->
    <?php include('header.html'); ?>


    <!-- Ínicio da página -->
    <section id="carousel">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img class="imgslide" src="images/banner2.webp">
            </div>
            
            <div class="mySlides fade">
                <img class="imgslide" src="images/banner1.webp">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>   
        </div>
            
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
        </div>
    </section>

    <main id="principal">
        <section id="cards">
            <div class="card">
                <span class="text-card1">produtos</span>
                <a href="produto.php" class="text-card2">confira</a>
            </div>


            <div class="card">
                <span class="text-card1">produtos</span>
                <a href="produto.php" class="text-card2">confira</a>
            </div>


            <div class="card">
                <span class="text-card1">produtos</span>
                <a href="produto.php" class="text-card2">confira</a>
            </div>
        </section>


        <div class="secao-produtos">
            <h1 class="title-index">Lançamentos</h1>
            
            
            <section id="lancamentos-prod">
                <div class="card-produtos">
                    <div class="produtos-top">
                        <div class="promo">
                            <span>-10%</span>
                        </div>


                        <a href="index.php" class="fav"><span class="material-symbols-outlined">favorite</span></a>
                    </div>


                    <div class="img-card img-c">
                        <img class="img-c" src="images/produto1.webp" alt="imagem do produto">
                    </div>


                    <div class="desc">
                        <h1>XXXXXXXX</h1>


                        <div class="desc-preco">
                            <div class="preco">
                                <p class="p1">R$xxxx,xx</p><span>R$xxxx,xx</span>
                            </div>
                            <p class="p2">
                                até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                            </p>
                        </div>


                        <a href="produto.php" class="btn-comprar"><span>comprar</span></a>
                    </div>
                </div>


                <div class="card-produtos">
                    <div class="produtos-top">
                        <div class="promo">
                            <span>-10%</span>
                        </div>


                        <a href="index.php" class="fav"><span class="material-symbols-outlined">favorite</span></a>
                    </div>


                    <div class="img-card img-c">
                        <img class="img-c" src="images/produto2.webp" alt="imagem do produto">
                    </div>


                    <div class="desc">
                        <h1>XXXXXXXX</h1>


                        <div class="desc-preco">
                            <div class="preco">
                                <p class="p1">R$xxxx,xx</p><span>R$xxxx,xx</span>
                            </div>
                            <p class="p2">
                                até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                            </p>
                        </div>


                        <a href="produto.php" class="btn-comprar"><span>comprar</span></a>
                    </div>
                </div>


                <div class="card-produtos">
                    <div class="produtos-top">
                        <div class="promo">
                            <span>-10%</span>
                        </div>


                        <a href="index.php" class="fav"><span class="material-symbols-outlined">favorite</span></a>
                    </div>


                    <div class="img-card img-c">
                        <img class="img-c" src="images/produto3.webp" alt="imagem do produto">
                    </div>


                    <div class="desc">
                        <h1>XXXXXXXX</h1>


                        <div class="desc-preco">
                            <div class="preco">
                                <p class="p1">R$xxxx,xx</p><span>R$xxxx,xx</span>
                            </div>
                            <p class="p2">
                                até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                            </p>
                        </div>


                        <a href="produto.php" class="btn-comprar"><span>comprar</span></a>
                    </div>
                </div>

                <div class="card-produtos">
                    <div class="produtos-top">
                        <div class="promo">
                            <span>-10%</span>
                        </div>


                        <a href="index.php" class="fav"><span class="material-symbols-outlined">favorite</span></a>
                    </div>


                    <div class="img-card img-c">
                        <img class="img-c" src="images/produto1.webp" alt="imagem do produto">
                    </div>


                    <div class="desc">
                        <h1>XXXXXXXX</h1>


                        <div class="desc-preco">
                            <div class="preco">
                                <p class="p1">R$xxxx,xx</p><span>R$xxxx,xx</span>
                            </div>
                            <p class="p2">
                                até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                            </p>
                        </div>


                        <a href="produto.php" class="btn-comprar"><span>comprar</span></a>
                    </div>
                </div>
            </section>
        </div>


        <div class="secao-produtos">
            <h1 class="title-index" >Mais vendidos</h1>


            <section id="vendidos-prod">
                <div class="card-produtos">
                    <div class="produtos-top">
                        <div class="promo">
                            <span>-10%</span>
                        </div>


                        <a href="index.php" class="fav"><span class="material-symbols-outlined">favorite</span></a>
                    </div>


                    <div class="img-card img-c">
                        <img class="img-c" src="images/produto1.webp" alt="imagem do produto">
                    </div>


                    <div class="desc">
                        <h1>XXXXXXXX</h1>


                        <div class="desc-preco">
                            <div class="preco">
                                <p class="p1">R$xxxx,xx</p><span>R$xxxx,xx</span>
                            </div>
                            <p class="p2">
                                até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                            </p>
                        </div>


                        <a href="produto.php" class="btn-comprar"><span>comprar</span></a>
                    </div>
                </div>


                <div class="card-produtos">
                    <div class="produtos-top">
                        <div class="promo">
                            <span>-10%</span>
                        </div>


                        <a href="index.php" class="fav"><span class="material-symbols-outlined">favorite</span></a>
                    </div>


                    <div class="img-card img-c">
                        <img class="img-c" src="images/produto2.webp" alt="imagem do produto">
                    </div>


                    <div class="desc">
                        <h1>XXXXXXXX</h1>


                        <div class="desc-preco">
                            <div class="preco">
                                <p class="p1">R$xxxx,xx</p><span>R$xxxx,xx</span>
                            </div>
                            <p class="p2">
                                até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                            </p>
                        </div>


                        <a href="produto.php" class="btn-comprar"><span>comprar</span></a>
                    </div>
                </div>


                <div class="card-produtos">
                    <div class="produtos-top">
                        <div class="promo">
                            <span>-10%</span>
                        </div>


                        <a href="index.php" class="fav"><span class="material-symbols-outlined">favorite</span></a>
                    </div>


                    <div class="img-card img-c">
                        <img class="img-c" src="images/produto3.webp" alt="imagem do produto">
                    </div>


                    <div class="desc">
                        <h1>XXXXXXXX</h1>


                        <div class="desc-preco">
                            <div class="preco">
                                <p class="p1">R$xxxx,xx</p><span>R$xxxx,xx</span>
                            </div>
                            <p class="p2">
                                até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                            </p>
                        </div>


                        <a href="produto.php" class="btn-comprar"><span>comprar</span></a>
                    </div>
                </div>


                <div class="card-produtos">
                    <div class="produtos-top">
                        <div class="promo">
                            <span>-10%</span>
                        </div>


                        <a href="index.php" class="fav"><span class="material-symbols-outlined">favorite</span></a>
                    </div>


                    <div class="img-card img-c">
                        <img class="img-c" src="images/produto1.webp" alt="imagem do produto">
                    </div>


                    <div class="desc">
                        <h1>XXXXXXXX</h1>


                        <div class="desc-preco">
                            <div class="preco">
                                <p class="p1">R$xxxx,xx</p><span>R$xxxx,xx</span>
                            </div>
                            <p class="p2">
                                até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                            </p>
                        </div>


                        <a href="produto.php" class="btn-comprar"><span>comprar</span></a>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Fim da página -->


    <!-- Inclusão do rodapé -->
    <?php include('footer.html'); ?>
</body>
</html>
<!-- Começo Carrousel -->
<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    carousel(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        dots[slideIndex-1].className += " active";
        setTimeout(carousel, 4000);
    }
</script>
<!-- Fim Carrousel -->