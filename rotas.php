<?php
include "cabecalho.php";
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Google Maps API v3: Criando rotas</title>
        <link rel="stylesheet" type="text/css" href="css/rotas1.css">
    </head>
 
    <body>
        <div id="site">
            <h1>Criando rotas</h1>
            
            <div id="mapa"></div>
            
            <div id="trajeto-texto"></div>
        
        
            <form method="post" action="rotas.php">
                <fieldset>
                    <legend>Criar rotas</legend>
                    
                    <div>
                        <label for="txtEnderecoPartida">Endereço de partida:</label>
                        <input type="text" id="txtEnderecoPartida" name="txtEnderecoPartida" />
                    </div>
                    
                    <div>
                        <label for="txtEnderecoChegada">Endereço de chegada:</label>
                        <input type="text" id="txtEnderecoChegada" name="txtEnderecoChegada" />
                    </div>
                    
                    <div>
                        <input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar" />
                    </div>
                </fieldset>
            </form>
        
        
        </div>
        
        <script src="javascript/jquery.min.js"></script>
        
        <!-- Maps API Javascript -->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC-xE7a7Pi92cA69kmk-zwtGg5M9l0N2Ag"></script>
 
        <!-- Arquivo de inicialização do mapa -->
        <script src="javascript/mapa.js"></script>
    </body>
</html>