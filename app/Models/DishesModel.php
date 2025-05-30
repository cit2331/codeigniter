<?php

namespace App\Models;

use CodeIgniter\Model;

class DishesModel extends Model
{
    protected $table = 'dishes';//'dishes'=>tên bảng trong CSDL
    protected $primaryKey = 'd_id'; 
}