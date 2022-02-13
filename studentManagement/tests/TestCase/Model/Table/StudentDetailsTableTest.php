<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentDetailsTable Test Case
 */
class StudentDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentDetailsTable
     */
    protected $StudentDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StudentDetails',
        'app.Students',
        'app.Colleges',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StudentDetails') ? [] : ['className' => StudentDetailsTable::class];
        $this->StudentDetails = $this->getTableLocator()->get('StudentDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StudentDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StudentDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\StudentDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
