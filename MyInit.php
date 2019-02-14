<?php

/**
 * Class MyInit
 *
 * @author A. Suvorkin
 */
final class MyInit
{
    /**
     * @var Database База данных.
     */
    private $db;

    /**
     * MyInit constructor.
     */
    public function __construct()
    {
        $this->db = new Database();

        $this->create();
        $this->fill();
    }

    /**
     * Создание таблицы.
     */
    private function create()
    {
        try {
            $query = "CREATE table test(
             id INT(6) AUTO_INCREMENT PRIMARY KEY,
             script_name VARCHAR(25), 
             start_time INT(10),
             end_time INT(10),
             result ENUM('normal', 'illegal', 'failed', 'success') NOT NULL);";

            $this->db->insert($query);
        } catch (PDOException $exception) {
            throw new PDOException('Failed create table.', 0, $exception);
        }
    }

    /**
     * Заполнение таблицы.
     */
    private function fill()
    {
        try {
            $inc = 0;
            $dataResult = ['normal', 'illegal', 'failed', 'success'];

            while ($inc <= 4) {
                $scriptName = 'test_' . rand();
                $startTime = rand();
                $endTime = rand();
                $result = $dataResult[$inc];

                $query = "INSERT INTO test (script_name, start_time, end_time, result)
                         VALUES ('{$scriptName}', {$startTime}, {$endTime}, '{$result}');";
                $this->db->insert($query);

                $inc++;
            }
        } catch (PDOException $exception) {
            throw new PDOException('Failed insert.', 0, $exception);
        }
    }

    /**
     * Все 'normal' и 'success'.
     *
     * @return array
     */
    public function get()
    {
        $query = "SELECT * FROM test WHERE `result` = 'normal' OR `result` = 'success'";

        return $this->db->select($query)->fetchAll();
    }
}