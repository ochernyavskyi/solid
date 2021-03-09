<?php


class Post
{
    private $dbConnection;

    public function __construct(DbConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        $this->dbConnection->connect();
    }
}