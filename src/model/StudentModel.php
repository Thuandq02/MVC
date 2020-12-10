<?php

namespace App\model;
class StudentModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from student";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function addStudent($student)
    {
        $sql = "insert into student (`name`, `age`, `address`, `img`) values (:name, :age, :address, :img)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $student->getName());
        $stmt->bindParam(':age', $student->getAge());
        $stmt->bindParam(':address', $student->getAddress());
        $stmt->bindParam(':img', $student->getImg());
        $stmt->execute();
    }

    public function getStudentById($id){
        $sql = 'SELECT * FROM student WHERE id = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function editStudent($newStudent){
        $sql = 'UPDATE student SET `name`=:name,age=:age,address=:address,img=:img WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name',$newStudent->getName());
        $stmt->bindParam(':age',$newStudent->getAge());
        $stmt->bindParam(':address',$newStudent->getAddress());
        $stmt->bindParam(':img', $newStudent->getImg());
        $stmt->bindParam(':id',$newStudent->getId());
        $stmt->execute();
    }

    public function deleteStudent($id)
    {
        $sql = 'DELETE FROM student WHERE id =:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}