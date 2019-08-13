<?php

    $nome = $_GET ['nome'];

    if($nome == "Luis"){
        echo '
            {
                "nome": "Luis Guilherme",
                "email": "luis@gmail.com",
                "telefone": "(44) 9 9999-5555"
            }
        ';
    } else {
        echo '
            {"erro": "Nenhum registro encontrado." }
        ';
    }

?>