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
    <main class="main-principal content" id="principal-contato">
        <section class="main-topo">
            <a href="index.php"><i class="fa-solid fa-house"></i>Página inicial</a>
            <p>Contato</p>
        </section>


        <section id="main-contato" class="main-meio">
            <h1 class="title-meio">Contato</h1>

            <article id="art-form">
                <form>
                    <table id="tb-form">
                        <thead id="cabeca-tb">
                            <th>Fale Conosco - Preencha o formulário abaixo</th> 
                        </thead>

                        <tbody id="corpo-tb">
                            <tr class="linha-tb">
                                <td><label class="titulo-form" for="nome">nome:</label></td>
                                <td><input id="campo-nome" class="campo-form" type="text"></td>
                            </tr>
                            
                            <tr class="linha-tb">
                                <td><label class="titulo-form" for="email">e-mail:</label></td>
                                <td><input id="campo-email" class="campo-form" type="email" name="" id=""></td>
                            </tr>
                            
                            <tr class="linha-tb">
                                <td><label class="titulo-form" for="telefone">telefone:</label></td>
                                <td><input id="campo-telefone" class="campo-form" type="number"></td>
                            </tr>
                            
                            <tr class="linha-tb">
                                <td><label class="titulo-form" for="numero-pedido">número do pedido:</label></td>
                                <td><input id="campo-num-pedido" class="campo-form" type="number"></td>
                            </tr>
                            
                            <tr class="linha-tb">
                                <td><label class="titulo-form" for="mensagem">mensagem:</label></td>
                                <td><input id="campo-mensagem" class="campo-form" type="text"></td>
                            </tr>

                            <tr id="btn-row" class="linha-tb">
                                <td colspan="2"><input id="btn-form" type="button" value="ENVIAR"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </article>

            <aside id="cont-right">
                <table id="table-info"> 
                    <tr class="row-tb">
                        <td><label class="titulo-info" for="cnpj">CNPJ:</label></td>
                        <td><label class="titulo-info" for="num-cnpj">99.999.999/9999-99</label></td>
                    </tr>

                    <tr class="row-tb">
                        <td><label class="titulo-info" for="telefone">Telefone:</label></td>
                        <td><label class="titulo-info" for="num-telefone">(11) 9999-9999</label></td>
                    </tr>

                    <tr class="row-tb">
                        <td><label class="titulo-info" for="whatsapp">Whatsapp:</label></td>
                        <td><label class="titulo-info" for="num-whatsapp">(11) 9999-9999</label></td>
                    </tr>

                    <tr class="row-tb">
                        <td><label class="titulo-info" for="endereco">Endereço:</label></td>
                        <td><label class="titulo-info" for="nome-endereco">Av. Itaquera, 8266 - Vila Carmosina, São Paulo - SP, 08295-000</label></td>
                    </tr>

                    <tr class="row-tb">
                        <td><label class="titulo-info" for="email">E-mail:</label></td>
                        <td><label class="titulo-info" for="nome-email">email@mail.com</label></td>
                    </tr>
                </table>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.794423782136!2d-46.4587318854519!3d-23.53989526668404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf22458913%3A0xecdac462b58a9475!2sSenac%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1672345627095!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </aside>
        </section>
    </main>
    <!-- Fim da página -->


    <!-- Inclusão do rodapé -->
    <?php include('footer.html'); ?>
</body>
</html>