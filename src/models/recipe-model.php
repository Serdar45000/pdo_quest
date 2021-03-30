<?php

function createConnection(): PDO
{
    $connection = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $connection;
}

function getAllFriends(): array
{
    $connection = createConnection();
    $statement = $connection->query('SELECT firstname, lastname FROM friend');
    $friends = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $friends;
}



function addFriend(array $newFriend): void
{
    $connection = createConnection();  
    $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';    
    $statement = $connection->prepare($query);
    $statement->bindValue(':firstname', $newFriend['firstname'], PDO::PARAM_STR);
    $statement->bindValue(':lastname', $newFriend['lastname'], PDO::PARAM_STR);    
    $statement->execute();
       
}