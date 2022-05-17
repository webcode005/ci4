<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'user_table';

	protected $primaryKey = 'id';

	protected $allowedFields = ['name', 'email'];

}

?>