<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Even_Numbers_In_Range {

	protected $even_numbers = 0;

	/**
	 * Write a function that determines the number of even numbers that appear in a range of integers 0..n, where n is
	 * supplied as the sole argument to your function.
	 *
	 * @param $number
	 *
	 * @return Response;
	 */
	public function render( $number ) {
		for( $i = 0; $i < $number; $i++ ) {
			$this->maybe_add_even_number( $i );
		}

		return new Response( sprintf( '<p>There are %d even numbers</p>', $this->even_numbers ) );
	}

	protected function maybe_add_even_number( $number ) {
		// 0 is not an even number
		if ( 0 === $number ) {
			return false;
		}

		if( 0 === $number % 2 ) {
			$this->even_numbers++;
		}
	}
}