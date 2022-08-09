<?php

    $bd = new SQLite3("filmes.db");

    $sql ="DROP TABLE IF EXIST filmes";

    if ($bd->exec($sql))
    echo "\ntabela filmes apagada";

    $sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )";
if ($bd->exec($sql)) 
    echo "\n Tabela filmes criada\n";
else
    echo "\n Erro ao criar a tabela filmes criada\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinospe, nota) VALUES(
    0,
    'Prey',
    'https://www.joblo.com/wp-content/uploads/2022/07/Prey-Hulu-latest-poster-692x1024.jpg',
    'Uma habilidosa guerreira Comanche tenta proteger seu povo de um predador alienígena altamente evoluído que caça humanos por esporte. Ela luta contra a natureza, colonizadores perigosos e essa criatura misteriosa para manter sua tribo segura.',
    9.9
    )";

if ($bd->exec($sql)) 
    echo "\n Filmes inseridos com sucesso\n";
else
    echo "\n Erro ao inserir filmes\n";

?>