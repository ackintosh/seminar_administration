<?php

namespace Fuel\Migrations;

class Create_seminars
{
	public function up()
	{
		\DBUtil::create_table('seminars', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'type' => array('constraint' => 1, 'type' => 'int'),
			'price' => array('constraint' => 11, 'type' => 'int'),
			'view' => array('constraint' => 1, 'type' => 'int'),
			'date_year' => array('constraint' => 11, 'type' => 'int'),
			'date_month' => array('constraint' => 11, 'type' => 'int'),
			'date_day' => array('constraint' => 11, 'type' => 'int'),
			'date_hour_start' => array('constraint' => 11, 'type' => 'int'),
			'date_minute_start' => array('constraint' => 11, 'type' => 'int'),
			'date_hour_end' => array('constraint' => 11, 'type' => 'int'),
			'date_minute_end' => array('constraint' => 11, 'type' => 'int'),
			'application_start' => array('constraint' => 11, 'type' => 'int'),
			'application_end' => array('constraint' => 11, 'type' => 'int'),
			'site' => array('constraint' => 100, 'type' => 'varchar'),
			'place' => array('constraint' => 100, 'type' => 'varchar'),
			'limit' => array('constraint' => 50, 'type' => 'varchar'),
			'zip' => array('constraint' => 8, 'type' => 'varchar'),
			'pref' => array('constraint' => 2, 'type' => 'int'),
			'address' => array('constraint' => 100, 'type' => 'varchar'),
			'tel' => array('constraint' => 13, 'type' => 'varchar'),
			'access' => array('type' => 'text'),
			'attach' => array('constraint' => 50, 'type' => 'varchar'),
			'payment' => array('type' => 'text'),
			'note' => array('type' => 'text'),
			'company_name' => array('constraint' => 100, 'type' => 'varchar'),
			'company_zip' => array('constraint' => 8, 'type' => 'varchar'),
			'company_pref' => array('constraint' => 2, 'type' => 'int'),
			'company_address' => array('constraint' => 100, 'type' => 'varchar'),
			'company_tel' => array('constraint' => 13, 'type' => 'varchar'),
			'company_fax' => array('constraint' => 13, 'type' => 'varchar'),
			'company_charge' => array('constraint' => 50, 'type' => 'varchar'),
			'option_years' => array('constraint' => 1, 'type' => 'int'),
			'option_fukubu' => array('constraint' => 1, 'type' => 'int'),
			'option_syoka' => array('constraint' => 1, 'type' => 'int'),
			'option_endai' => array('constraint' => 1, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),
			'del_flg' => array('constraint' => 1, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('seminars');
	}
}
