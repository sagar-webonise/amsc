<?php
class CreatingMessage extends CakeMigration {

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
            'create_table'=>array(
               'messages' =>array(
                'id'=>array(
                   'type'=>'integer',
                   'null'=>false,
                   'key'=>'primary',

               ),
               'subject'=>array(
                   'type'=>'string',
                   'null'=>true,


               )
            )
          )
		),
		'down' => array(
            'drop_table'=>array(
                'messages'
            )
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
