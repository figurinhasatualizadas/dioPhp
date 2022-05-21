<?php 


$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = "Eduardo";
$idade = 24;

//var_dump($nome);
//var_dump($idade);


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
else {
    for($i=0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        echo "O viado ".$nome." É ".$categorias[$i];
    }
}


?>