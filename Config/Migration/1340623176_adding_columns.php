<?php
class AddingColumns extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
            'create_field' => array(
                'profiles' => array(
                    'created' => array(
                        'type' => 'datetime'),
                    'modified' => array(
                        'type' => 'datetime')
                )
            ),
		),
		'down' => array(
			'drop_field' => array(
                'profiles' => array(
				'created','modified'
                    )
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
