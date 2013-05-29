<?php
class AddEmailQueueTable extends CakeMigration
{

/**
 * Migration description
 *
 * @var string
 * @access public
 */
    public $description = 'Add email_queue table';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
    public $migration = array(
        'up' => array(
            'create_table' => array(
                'email_queue' => array(
                    'id' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 36,
                        'key'       => 'primary',
                    ),
                    'to' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 129,
                    ),
                    'from_name' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'from_email' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'subject' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'config' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 30,
                    ),
                    'template' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 50,
                    ),
                    'layout' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 50,
                    ),
                    'format' => array(
                        'type'      => 'string',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 5,
                    ),
                    'template_vars' => array(
                        'type'      => 'text',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'sent' => array(
                        'type'      => 'boolean',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'locked' => array(
                        'type'      => 'boolean',
                        'null'      => false,
                        'default'   => 0,
                    ),
                    'send_tries' => array(
                        'type'      => 'integer',
                        'null'      => false,
                        'default'   => NULL,
                        'length'    => 2,
                    ),
                    'send_at' => array(
                        'type'      => 'datetime',
                        'null'      => true,
                        'default'   => NULL,
                    ),
                    'created' => array(
                        'type'      => 'datetime',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'modified' => array(
                        'type'      => 'datetime',
                        'null'      => false,
                        'default'   => NULL,
                    ),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column'    => 'id',
                            'unique'    => true,
                        ),
                    ),
                    'tableParameters' => array(
                        'charset'   => 'utf8',
                        'collate'   => 'utf8_general_ci',
                        'engine'    => 'InnoDB',
                    ),
                ),
            ),
        ),
        'down' => array(
            'drop_table' => array('email_queue'),
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
