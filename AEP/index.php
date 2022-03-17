<html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/>
            <title>BACKTRACK | PROJECT </title>
            <link rel="stylesheet" href="_css/estilo.css">
            <link rel="stylesheet" href="_css/formularios.css">

        </head>
        <body>
            <div id="interface">
                <a href="login/painel.php"><header id="cabecalho"></header></a>

                <section id="conteudo">
                    <form id="login" name="loginform" method="post" action="userautentication.php">
                        <fieldset>
                            <legend><p>Login</p></legend>
                            <tr><td><p>Usuário:</td><td><input type="text"  name="user"/><br /><br /></p></td></tr>

                            <tr><td><p>Senha:</td><td> <input type="password"  name="senha" /><br /></p></td></tr><br/>

                            <center><input class="botaoForm" type="submit" value="Entrar"></center>
                        </fieldset>
                        <?php
                        Session_start();
                        if (isset($_SESSION['erro'])){
                        echo $_SESSION['erro'];
                        }
                        ?>
                        
                        
                        
                    </form>                  

                </section>

                <footer id="rodape">
                    <h3>Copyright &copy 2015 - by Carlos Eduardo</h3><br>
                </footer>
            </div> 
        </body> 
    </html>


