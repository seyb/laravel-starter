<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const ADMIN_ROLE = 1;
    const WEBMASTER_ROLE = 2;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'role'
    ];

    /**
     * @return bool
     */
    public function isAdmin () {
        return $this->role == self::ADMIN_ROLE;
    }

    /**
     * @return bool
     */
    public function isWebmaster () {
        return $this->role == self::WEBMASTER_ROLE;
    }
}
