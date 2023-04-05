<?php

function obterContatos()
{
    $contatos = array(
        array(
            'nome' => 'João',
            'idade' => 25,
            'telefone' => '(11) 1111-1111',
            'email' => 'joao@example.com'
        ),
        array(
            'nome' => 'Maria',
            'idade' => 30,
            'telefone' => '(22) 2222-2222',
            'email' => 'maria@example.com'
        ),
        array(
            'nome' => 'Pedro',
            'idade' => 40,
            'telefone' => '(33) 3333-3333',
            'email' => 'pedro@example.com'
        ),
        array(
            'nome' => 'Ana',
            'idade' => 27,
            'telefone' => '(44) 4444-4444',
            'email' => 'ana@example.com'
        ),
        array(
            'nome' => 'Lucas',
            'idade' => 22,
            'telefone' => '(55) 5555-5555',
            'email' => 'lucas@example.com'
        )
    );
    
    return $contatos;
}

$contatos = obterContatos();

foreach ($contatos as $contato) {
    echo $contato['nome'] . ', ' . $contato['idade'] . ' anos, ' . $contato['telefone'] . ', ' . $contato['email'] . '<br>';
}


print_r($contatos);