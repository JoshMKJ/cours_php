<?php
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    public function selectAll($table)
    {
          $statement = pdo->prepare('select*from introduction');
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);  
    }
}