<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Checkout | IG</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {

            background: linear-gradient(to right, #007FFF, #ADD8E6);
            font-family: 'Roboto', sans-serif;
            font-family: 'Montserrat', sans-serif;
        }

        .container .imagem {
            transform: scale(0.55);
            margin-top: -150px;
            border-radius: 10px;
            margin-left: 00px;
        }

        .container .info {
            margin-left: 745px;
            margin-top: -680px;
            font-size: 25px;
            color: black;

        }

        .container .price .preco-antigo {
            font-size: 24px;
            font-weight: bold;
            color: grey;
            font-family: 'Roboto', sans-serif;
            margin-left: 750px;
            text-decoration: line-through;
        }

        .container .price .preco-atual {
            font-weight: bold;
            color: red;
            font-size: 20px;
            margin-left: 750px;
        }

        .container .envio {
            margin-left: 750px;
            margin-top: 20px;
            padding: 10px 20px;
            width: 150px;
            height: 50px;
            background-color: green;
            transition: transform 0.3s ease;
            border-radius: 8px;
        }

        .container .envio:hover {
            transform: scale(1.1);
        }

        .container .sobre {
            color: white;
            margin-left: 750px;
        }

        .button {
            cursor: pointer;
            transition: 0.5s;
            margin-left: 750px;
            box-shadow: 0px 35px 80px rgba(0, 0, 0, 0.15);
            color: green;
        }

    </style>

</head>

<body>
    <a href="../home4.php">Voltar</a>
    <div class="container">
        <img class="imagem" src="../imagens/poedagar3.jpg" alt="">
        <div class="info">
            <h1>Poedagar - Black</h1>
        </div>
        <div class="sobre">
            <p>• Relógio De Luxo Da Marca Poedagar<br>
                • Em Aço Inoxidável E Quartzo<br>
                • À prova d'agua<br>
                • Com Luz Noturna<br>
                • Fundo na cor preta</p>
        </div>
        <div class="price">
            <span class="preco-antigo">R$ 359,90</span><br>
            <span class="preco-atual">R$ 159,90</span>
        </div>
        <br><a class="button"href="https://pay.kiwify.com.br/yVarFr2"><button>ADQUIRA JÁ</button></a>

    </div>

</body>

</html>