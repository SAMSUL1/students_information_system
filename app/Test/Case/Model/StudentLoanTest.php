<?php
App::uses('StudentLoan', 'Model');

/**
 * StudentLoan Test Case
 *
 */
class StudentLoanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student_loan',
		'app.student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentLoan = ClassRegistry::init('StudentLoan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentLoan);

		parent::tearDown();
	}

}