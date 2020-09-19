<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const SUPER_ADMIN_ROLE_ID = 1;
    const ADMIN_ROLE_ID = 2;
    const USER_ROLE_ID = 3;

    protected $guarded = ['id'];
}
