<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Remove_Array_Duplicates {

	protected $array = [
		'one',
		'one',
		'two',
		'three',
		'three',
		'two',
	];

	public function render() {
		return new Response( var_dump( array_unique( $this->array ) ) );
	}
}