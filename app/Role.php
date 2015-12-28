<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\RoleTrait as authRole;

class Role extends Authenticatable
{
    const ADMIN_ROLE = 1;
    const WEBMASTER_ROLE = 2;

    use authRole;
}