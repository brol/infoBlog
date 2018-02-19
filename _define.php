<?php 
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of infoBlog, a plugin for Dotclear.
# 
# Copyright (c) 2009 Tomtom
# http://blog.zenstyle.fr/
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
		/* Name */			'infoBlog',
		/* Description */		'Display all information about your blog',
		/* Author */			'Tomtom (http://plugins.zenstyle.fr/)',
		/* Version */			'1.1',
	/* Properties */
	array(
		'permissions' => 'admin',
		'type' => 'plugin',
		'dc_min' => '2.9',
		'support' => 'https://forum.dotclear.org/viewforum.php?id=16',
		'details' => 'http://lab.dotclear.org/wiki/plugin/infoBlog/fr'
		)
);