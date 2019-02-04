<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class One_To_One_Hundred_Foo_Bar {

	/**
	 * Write a function that prints the numbers from 1 to 100. But for multiples of three print “Foo” instead of the
	 * number and for the multiples of five print “Bar”. For numbers which are multiples of both three and five print “FooBar”.
	 *
	 * Example output: 1 2 Foo 4 Bar Foo 7 8 Foo Bar 11 Foo 13 14 FooBar …
	 */
	public function render() {

		$results = [];
		for ( $i = 1; $i <= 100; $i++ ) {

			$result = '';
			if ( ! empty( $this->is_divisible_by_3( $i ) ) ) {
				$result .= 'Foo';
			}

			if( ! empty( $this->is_divisible_by_5( $i ) ) ) {
				$result .= 'Bar';
			}

			if ( empty( $result ) ) {
				$result = $i;
			}

			$results[] = $result;
		}

		return new Response(
			sprintf( '<pre>%s</pre>', implode( ', ', $results ) )
		);
	}

	protected function is_divisible_by_3( int $number ) {
		return 0 === $number % 3 ? true : false;
	}

	protected function is_divisible_by_5( int $number ) {
		return 0 === $number % 5 ? true : false;
	}
}