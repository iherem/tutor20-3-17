<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;
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
        if(Request::isMethod('post')){
            $studentId = Input::get('std_id');
            $studentName = Input::get('std_name');
            $studentTel = Input::get('std_tel');
            $result = $this->StudentRepository->addStudent($studentId,$studentName,$studentTel);
            if($result){
                return redirect('/home');
            }else{
                echo "Failed to add student";
            }
        }elseif(Request::isMethod('get')){
            return view('add_student');
        }
    }

    function deleteStudent($student_id){
        $result = $this->StudentRepository->deleteStudent($student_id);
        if($result){
            return redirect('/home');
        }else{
            echo "Can not delete";
        }
    }
}
