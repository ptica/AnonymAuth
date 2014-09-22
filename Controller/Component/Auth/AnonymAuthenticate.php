<?php

App::uses('BaseAuthenticate', 'Controller/Component/Auth');

class AnonymAuthenticate extends BaseAuthenticate {

/**
* Authentication hook to authenticate every visitor into Anonymous role
* @param CakeRequest $request The request that contains login information.
* @param CakeResponse $response Unused response object.
* @return mixed. False on login failure. An array of User data on success.
*/
	public function authenticate(CakeRequest $request, CakeResponse $response) {
		// TODO
		// better load a real anonymous user from db!
		$user = array(
			'act_role' => 1,
			'roles' => array(1),
		);
		return $user;
	}
}
