<?php
namespace App\Controller;
use App\Controller\AppController;

/**
 * StudentDetails Controller
 *
 * @method \App\Model\Entity\StudentDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsController extends AppController
{
    public function index() {
        $this->set('students',$this->Students->find('all'));
    }
    
    public function register(){
        $students = $this->Students->newEntity();
        if($this->request->is('post')){
            $students = $this->Students->patchEntity($students, $this->request->getData());
            if($this->Students->save($students))
            {
                $this->Flash->success('Student successfully registered',['key'=>'message']);
                return $this->redirect(['action'=>'index']);
            }
            else
            {
                $this->Flash->error(__('Unable to register Student'));
                return $this->redirect(['action'=>'index']);
            }
            $this->set('students',$students);
        }
    }

    public function view($id=Null){
        $students = $this->Students->get($id);
        $this->set('student_details',$students);
    }
    public function edit($id=Null){
        $students = $this->Students->get($id);
        if ($this->request->is('post') || $this->request->is('put'))
        {
            $students = $this->Students->patchEntity($students, $this->request->getData());
            if($this->Students->save($students))
            {
                $this->Flash->success('Student Updated Successfully !',['key'=>'message']);
                return $this->redirect(['action'=>'index']);
            }
            else
            {
                $this->Flash->error(__('Unable to update your details !'));
            }
        }
        $this->set('students', $students);
    }
    
    public function delete($id){
        $this->request->allowMethod (['get','post', 'delete']);
        $students = $this->Students->get($id);
        if($this->Students->delete($students))
        {
            $this->Flash->success('Post Deleted Successfully !',['key'=>'message']);
            return $this->redirect(['action'=>'index']);
        }
    }
}
