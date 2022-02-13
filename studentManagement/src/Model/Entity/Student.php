<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $name
 * @property int $student_id
 * @property int $college_id
 * @property string $department
 * @property string $course
 * @property int $phone
 * @property string $email
 * @property int $age
 * @property string $address
 * @property string $username
 * @property string $password
 * @property \Cake\I18n\FrozenDate $created_on
 * @property \Cake\I18n\FrozenDate $upadted_on
 *
 * @property \App\Model\Entity\Student[] $students
 * @property \App\Model\Entity\College $college
 */
class Student extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'student_id' => true,
        'college_id' => true,
        'department' => true,
        'course' => true,
        'phone' => true,
        'email' => true,
        'age' => true,
        'address' => true,
        'username' => true,
        'password' => true,
        'created_on' => true,
        'upadted_on' => true,
        'students' => true,
        'college' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
