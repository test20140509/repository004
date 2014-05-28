<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

	/**
	 * @var unknown
	 */
	public $actsAs = array(
		'Upload.Upload' => array(
			'photo' => array(
				'fields' => array(
					'dir' => 'photo_dir'
				)
			)
		)
	);
}