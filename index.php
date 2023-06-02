<!doctype HTML>
<html>
<head>
    <title>aula_php</title>
</head>
<body>
    <style>  
        *{
            background-color: #d1c9c9#c4c4c4;
        }

        p{
            font-size: 30px;
            font-weight: 1000;
            font-family: sans-serif;
            text-shadow: -3px 3px 3px red;
            color: black;
            text-transform: none;  
            margin: 0;
            background-color: #c4c4c4;
        }

        .echoBox{
            box-shadow: 0 20px 20px;
            border-radius: 50px;
            padding: 5%;
            margin: 5% 5% 0 5%;
            background-color: #c4c4c4;
        }

    </style>

    <section class="echoBox">
        <?php

        echo "<p>Nome: Emynen Acacio Nunes Santana de Araujo<br><br></p>";
        echo "<p>Idade: 17 anos<br><br></p>";
        echo "<p>Data de Nascimento: 28/03/2006</p>";

        ?>
    </section>
</body>
</html>
