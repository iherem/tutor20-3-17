<?php
namespace App\Repositories;
use App\Student;
class StudentRepository implements StudentRepositoryInterface{
    function getAllStudent(){
        return Student::all();
    }

    function findById($id){

    }

    function addStudent($data){

    }

    function getLimitStudent($limit){
        return Student::limit($limit)->get(); //select * from students limit 5;
    }
}