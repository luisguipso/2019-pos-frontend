<?php

$estado = @$_REQUEST['nome'];

if($estado == 'PR'){

    echo '
    {
        "cidades": [
            {"id": 1, "nome": "Alto Paraná"},
            {"id": 2, "nome": "Maringá"},
            {"id": 3, "nome": "Paranavaí"},
            {"id": 4, "nome": "Tamboara"}
        ]
    }
    ';
    
} else if ($estado == 'SC'){
    
    echo '
    {
        "cidades": [
            {"id": 5, "nome": "Balneário Camboriú"},
            {"id": 6, "nome": "Blumenau"},
            {"id": 7, "nome": "Florianópolis"},
            {"id": 8, "nome": "Itapema"}
        ]
    }
    ';
    
} else if ($estado == 'SP'){
    
    echo '
    {
        "cidades": [
            {"id": 9, "nome": "Bauru"},
            {"id": 10, "nome": "Presidente Epitácio"},
            {"id": 11, "nome": "Presidente Prudente"},
            {"id": 12, "nome": "Ribeirão Preto"},
            {"id": 13, "nome": "São Paulo"}
        ]
    }
    ';
} else {
    echo '
    {
        "erro": "Estado inválido."
    }
    ';
}

?>