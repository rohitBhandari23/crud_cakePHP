<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentDetailsFixture
 */
class StudentDetailsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'student_id' => 1,
                'college_id' => 1,
                'department' => 'Lorem ipsum dolor sit amet',
                'course' => 'Lorem ipsum dolor sit amet',
                'phone' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'created_on' => '2022-02-13',
                'upadted_on' => '2022-02-13',
            ],
        ];
        parent::init();
    }
}
