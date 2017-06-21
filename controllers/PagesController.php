<?php

class PagesController
{
	public function index()
	{

		require 'views/index.view.php';

	}

	public function contact()
	{

		App::get('database')->insert('users', [

				'name' => $_POST['name'],

				'email' => $_POST['email']

			]

		);

		header('Location: /');

	}

	public function product()
	{

		require 'views/product.view.php';

	}
}