<?php
namespace App\Repositories;
interface StudentRepositoryInterface{
    function getAllStudent();
    function findById($id);
    function addStudent($student_id,$student_name,$student_tel);
    function getLimitStudent($limit);
    function deleteStudent($student_id);
    function updateStudent($student_id,$student_name,$student_tel);
    function login($student_id,$student_password);
}