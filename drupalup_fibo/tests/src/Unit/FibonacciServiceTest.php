<?php

namespace Drupal\Tests\drupalup_fibo\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\drupalup_fibo\FibonacciService;

/**
* Our main test class for fibonacci service
*/

class FibonacciServiceTest extends UnitTestCase {

	public function testSixthFibonacciNumber() {

		$fibonacciService = new FibonacciService();
		$fibonacciSequence = $fibonacciService->calcSomeFibos(6);
		$this->assertEquals(
			$fibonacciSequence[5],
			5
		);
	}

}