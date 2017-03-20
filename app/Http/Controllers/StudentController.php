<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Repositories\StudentRepositoryInterface;
class StudentController extends Controller
{
    protected $StudentRepository;
    function __construct(StudentRepositoryInterface $StudentRepository){
        $this->StudentRepository = $StudentRepository;
    }

    function index(){
        $students = $this->StudentRepository->getAllStudent();
        $data = array(
            'students'=>$students
        );
        return view('student',$data);
    }

    function limit($option,$limit=1){
        if($option == 'limit'){
            $students = $this->StudentRepository->getLimitStudent($limit);
            $data = array(
                'students'=>$students
            );
            return view('student',$data);
        }else{
            echo "Error Bad Request";
        }
    }

    function addStudent(){
        return view('add_student');
    }
}
