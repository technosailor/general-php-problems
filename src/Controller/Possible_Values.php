<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Possible_Values {

	protected $a = [];

	/**
	 * 3) Given the following pseudo code, determine the range of possible values for “a”.
	 * x = random_int(1,6)
	 * y = random_int(1,6)
	 * z = random_int(1,6)
	 *
	 * a = x + y + z
	 *
	 * @return Response
	 */
	public function render() {
		for( $x = 1; $x <= 6; $x++ ) {
			for( $y = 1; $y <= 6; $y++ ) {
				for( $z = 1; $z <= 6; $z++ ) {
					$this->a[] = $x + $y + $z;
				}
			}
		}

		return new Response( count( array_unique( $this->a ) ) );
	}
}