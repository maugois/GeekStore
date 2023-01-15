<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
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
    <main class="main-principal content" id="principal-produto" tabindex="0" onclick="closeSidebar()">
        <section class="main-topo">
            <a href="index.php"><i class="fa-solid fa-house"></i>Página inicial</a>
            <p>Produtos</p>
        </section>


        <section class="main-meio">
            <h1 class="title-meio" id="title-produto">Produtos</h1>
            

            <div id="cat-fil">
                <aside id="categorias">
                    <ul>
                        <li><a href="#">canecas</a><i class="fa fa-caret-down"></i></li>
                        <li><a href="#">camisas</a><i class="fa fa-caret-down"></i></li>
                        <li><a href="#">calças</a><i class="fa fa-caret-down"></i></li>
                        <li><a href="#">moletons</a><i class="fa fa-caret-down"></i></li>
                        <li><a href="#">jaquetas</a><i class="fa fa-caret-down"></i></li>
                        <li><a href="#">acessórios</a><i class="fa fa-caret-down"></i></li>
                    </ul>
                </aside>


                <article id="filtro">
                    <button class="btn1">Ordem alfabética</button>
                    <div class="dropdown">
                        <button class="btn2">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Ordem alfabética</a>
                            <a href="#">Menor preço</a>
                            <a href="#">Maior preço</a>
                        </div>
                    </div>
                </article>
            </div>

            <div id="produtos">
                <article class="card-produtos-pg">
                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto1.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>


                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto2.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>


                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto3.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>
                </article>


                <article class="card-produtos-pg">
                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto1.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>


                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto2.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>


                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto3.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>
                </article>


                <article class="card-produtos-pg">
                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto1.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>


                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto2.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>


                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto3.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>
                </article>


                <article class="card-produtos-pg">
                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto1.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>


                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto2.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>


                    <div class="card-produtos card-rp">
                        <div class="produtos-top produtos-top-rp">
                            <div class="promo promo-rp">
                                <span>-10%</span>
                            </div>


                            <a href="index.php" class="fav fav-rp"><span class="material-symbols-outlined">favorite</span></a>
                        </div>


                        <div class="img-card img-c img-crp">
                            <img class="img-c img-crp" src="images/produto3.webp" alt="imagem do produto">
                        </div>


                        <div class="desc desc-rp">
                            <h1>XXXXXXXX</h1>


                            <div class="desc-preco">
                                <div class="preco preco-rp">
                                    <p class="p1 p1-rp">R$xxxx,xx</p><span>R$xxxx,xx</span>
                                </div>
                                <p class="p2 p2-rp">
                                    até <strong>3x</strong> de <strong>R$xxxx,xx</strong> sem juros
                                </p>
                            </div>


                            <a href="produto.php" class="btn-comprar btn-comprar-rp"><span>comprar</span></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <!-- Fim da página -->


    <!-- Inclusão do rodapé -->
    <?php include('footer.html'); ?>
</body>
</html>