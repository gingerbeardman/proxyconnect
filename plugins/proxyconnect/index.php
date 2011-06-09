<?php
/*
 * Provides ProxyConnect support
 *
 * @package Plugins
 * @subpackage proxyconnect
 *
 * @author Matt Sephton <matt.sephton@gmail.com>
 * @copyright Matt Sephton, 2011
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

/* Security measure */
if (!defined('IN_CMS')) {
    exit();
}

Plugin::setInfos(array(
        'id'          => 'proxyconnect',
        'title'       => __('ProxyConnect'),
        'description' => __('Links the Vanilla forum signin process to the WolfCMS login process.'),
        'version'     => '0.1.0',
        'website'     => 'http://www.gingerbeardman.com/wolfcms/',
        'update_url'  => 'http://www.gingerbeardman.com/wolfcms/plugin-versions.xml'
));

Observer::observe('admin_login_success', 'proxyconnect_redirect');
Observer::observe('admin_after_logout', 'proxyconnect_deletecookie');

/**
 * Redirect to Vanilla forum after login
 */
function proxyconnect_redirect() {
	// needs to differentiate between proper admin login and Register Users login
	header("Location: http://forum.cms.local");
	exit();
}

/**
 * Delete Vanilla cookie after logout
 */
function proxyconnect_deletecookie() {
	setcookie('Vanilla', ' ', time() - 3600, '/', 'forum.cms.local');
	unset($_COOKIE['Vanilla']);
}
