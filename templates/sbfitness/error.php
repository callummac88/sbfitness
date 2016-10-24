<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
if ($this->error->getcode() == '404')
{
    header("HTTP/1.0 404 Not Found");
    echo file_get_contents("http://local-www.smsoilfield.com/404.php");
    die();
}
?>
