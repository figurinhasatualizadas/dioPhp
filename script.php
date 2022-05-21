<?php 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if (empty($nome)) {
    echo "Verifique os campos vazios!";
    return;
}


if(strlen($nome) < 3){
    echo "Nome inválido!";
    return;
}


if (strlen($nome) > 40) {
    echo "Insira um nome menor";
    return;
}


if (!is_numeric($idade)) {
    echo "Informe a idade com numeros";
    return;
}



if ($idade >= 6 && $idade <=12) 
{
    for ($i = 0; $i <= count($categorias); $i++) 
    { 
        if($categorias[$i] == 'infantil') 
            echo "O nadador ".$nome." Pertence a categoria Infantil ";
    }
}
elseif ($idade >= 13 && $idade <=18) 
{
    for($i=0; $i <= count($categorias); $i++) 
    { 
        if($categorias[$i] == 'adolescente')
        echo "Fulano de nome ".$nome." É da categoria Aborrecente!";
    }
}
else 
{
    for($i=0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        echo "O Atleta ".$nome." É ".$categorias[$i];
    }
}
