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
     * Вставка в таблицу.
     *
     * @param $query
     * @return bool|PDOStatement
     */
    public function insert($query)
    {
        $prepare = $this->pdo->prepare($query);

        return $prepare->execute();
    }

    /**
     * Выборка из базы.
     *
     * @param $query
     * @return bool|PDOStatement
     */
    public function select($query)
    {
        $execute = $this->pdo->prepare($query);
        $execute->execute();

        return $execute;
    }
}