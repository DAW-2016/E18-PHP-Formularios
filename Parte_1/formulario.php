<!DOCTYPE html>
<html>
<head>
    <style>
        table,tr,th,td{
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <?php

        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        function primeiraLetra($n){

            $n = explode(" ", $n);


            $tamanho = count($n);
            for($i = 0; $i < $tamanho;$i++){

                $n[$i] = ucfirst($n[$i]);
            }
            $n = implode(" ",$n);
            return $n;
        }

        $nome = $_GET["nome"];
        $mail = $_GET["mail"];
        $endereco = $_GET["endereco"];
        $profissao = $_GET["profissao"];
        $sexo = $_GET["sexo"];
        $login = $_GET["login"];
        $senha = $_GET["senha"];


        $nome = primeiraLetra($nome);
        $mail = strtoupper($mail);
        $endereco = primeiraLetra($endereco);

        if(strlen($senha) < 6){
            echo "É recomendado uma senha com mais de 6 caracteres!!!";
        }



        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Nome</th>";
                    echo "<th>Email</th>";
                    echo "<th>Endereço</th>";
                    echo "<th>Profissão</th>";
                    echo "<th>Sexo</th>";
                    echo "<th>Login</th>";
                    echo "<th>Senha</th>";
                echo "</tr>";
            echo "</thead>";
                echo "<tr>";
                    echo "<td>$nome</td>";
                    echo "<td>$mail</td>";
                    echo "<td>$endereco</td>";
                    echo "<td>$profissao</td>";
                    echo "<td>$sexo</td>";
                    echo "<td>$login</td>";
                    echo "<td>$senha</td>";
                echo "</tr>";
            echo "<tbody>";
            echo "</tbody>";
        echo "</table>";
    
        echo strftime('%A, %d de %B de %Y', strtotime('today'));
    ?>
</body>
</html>