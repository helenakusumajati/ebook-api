<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function me()
	{
		return response()-> json(
			[
				'NIS'    => '3103119084',
				'Name'   => 'Helena Kusumajati',
				'Gender' => 'Female',
				'Phone'  => '089669372169',
				'Class'  => 'XII RPL 3'

			]
		);
	}
}
