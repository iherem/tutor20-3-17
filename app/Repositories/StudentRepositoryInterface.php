<?php
namespace App\Repositories;
interface StudentRepositoryInterface{
    function getAllStudent();
    function findById($id);
    function addStudent($data);
    function getLimitStudent($limit);
}