<?php
/*
 * Provides ProxyConnect support
 *
 * @package Helpers
 * @subpackage proxyconnect
 *
 * @author Matt Sephton <matt.sephton@gmail.com>
 * @copyright Matt Sephton, 2011
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

class ProxyConnect
{
    public function UserInfo()
    {
        // Start checking here
        AuthUser::load();

        if (AuthUser::isLoggedIn()) {
            $id = AuthUser::getId();

            $user  = AuthUser::getRecord();
            $name  = $user->name;
            $email = $user->email;

            echo "UniqueID=$id\nName=$name\nEmail=$email";
        } else {
            //echo "not logged in";
        }

    }
}
?>