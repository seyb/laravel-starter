<?php
/**
 * Created by PhpStorm.
 * User: seybounet
 * Date: 28/12/2015
 * Time: 08:49
 */

namespace App\Traits;


trait RoleTrait
{
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