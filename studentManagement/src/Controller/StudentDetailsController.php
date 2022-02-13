<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * StudentDetails Controller
 *
 * @method \App\Model\Entity\StudentDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentDetailsController extends AppController
{
    private $connection;
    public function signUp(){
        $this->connection = ConnectionManager::get('default');
        $this->connection->insert('student_details',[
            "name"=>"Rohit Bhandari",
            "email"=>"1",
            "student_id"=>"1234"
        ]);
        //$this->autoRender = false;
    }
}
