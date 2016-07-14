<!DOCTYPE html>
<html>
    <head>
        <style>

            div{

                border: 1px solid grey;
                padding: 5px;
            }

        </style>
    </head>
    <body>
    <?php
        /**
         * Created by PhpStorm.
         * User: lucas
         * Date: 14/07/16
         * Time: 14:17
         */

        $nome = $_GET["nome"];
        $dataDeNascimento = $_GET["dataDeNascimento"];
        $mail = $_GET["mail"];
        $escola = $_GET["escola"];
        $anoEscola = $_GET["anoEscola"];
        $linguagemFavorita = $_GET["liguagemFavorita"];
        $nivel = $_GET["nivel"];
        $dataProva = $_GET["dataProva"];
        $noticias = $_GET["noticias"];


        echo "Dados Pessoais";

        echo "<div>";
            echo "Nome: ".$nome."<br/>";
            echo "Data Nascimento: ".$dataDeNascimento."<br/>";
            echo "Email: ".$mail."<br/>";
        echo "</div>";


        echo "Dados Escolares";

        echo "<div>";
            echo "Escola: ".$escola."<br/>";
            echo "Ano escola: ".$anoEscola."<br/>";

        echo "</div>";

        echo "Dados da Prova";

        echo "<div>";

            echo "Linguagem: ".$linguagemFavorita."<br/>";
            echo "Nivel: ".$nivel."<br/>";
            echo "Data prova: ".$dataProva."<br/>";

        echo "</div>";

        echo "Noticias: ".$noticias."<br/>";
    ?>
    </body>
</html>
