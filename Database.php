<?php

/**
 * Class Database
 *
 * @author A. Suvorkin
 */
class Database
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->pdo = new PDO(
            'mysql:host=db;dbname=test;charset=utf8;',
            'root',
            '123'
        );
    }

    /**
     * Запрос в БД.
     *
     * @param $query
     * @return bool|PDOStatement
     */
    public function query($query)
    {
        $queryPrepare = $this->pdo->prepare($query);
        $queryPrepare->execute();

        return $queryPrepare;
    }
}