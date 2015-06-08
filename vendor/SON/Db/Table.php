<?php
namespace SON\Db;


abstract class Table {

    protected $db;
    protected $table;
    protected $ordem;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "Select * from {$this->table}";
        return $this->db->query($query);
    }

    public function getRandom()
    {
        $query = "Select conteudo from {$this->table} ORDER by rand() LIMIT 1";
        return $this->db->query($query);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("Select * from {$this->table} where id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $res = $stmt->fetch();
        return $res;
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("delete from {$this->table} where id=:id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

}