<?php

namespace App;

use App\Role;

class User extends Role
{
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


    public function projects() {
        return $this->hasMany(Project::class);
    }
}
