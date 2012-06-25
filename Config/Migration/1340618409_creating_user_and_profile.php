<?php
class CreatingUserAndProfile extends CakeMigration {

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
            'create_table' => array(
                'users' => array(

                    'id'=>array(
                        'type'=>'integer',
                        'null'=>false,
                        'key'=>'primary_key'),

                    'username'=>array(
                        'type'=>'string',
                        'null'=>false),


                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'id',
                            'unique' => 1)
                    )


                ),
                'profiles'=>array(

                    'id'=>array(
                        'type'=>'integer',
                        'null'=>false,
                        'key'=>'primary'
                    ),

                    'users_id'=>array(
                        'type'=>'integer',
                        'null'=>true
                    ),

                    'email'=>array(
                        'type'=> 'string',
                        'null'=>true
                    ),

                    'phone'=>array(
                        'type'=>'integer',
                        'null'=>true
                    ),

                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'id',
                            'unique' => 1)
                    )

                )

            ),
        ),
        'down' => array(
            'drop_table'=>array(
                'users','profiles'
            )
        )
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
