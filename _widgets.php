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

$core->addBehavior('initWidgets',array('infoBlogWidgets','initWidgets'));

class infoBlogWidgets
{
	/**
	 * This function creates the infoBlog's widget object
	 *
	 * @param	w	Widget object
	 */
	public static function initWidgets($w)
	{
		$w->create('infoBlog',__('Information about your blog'),array('infoBlogPublic','widget'),
			null,
			__('Display all information about your blog'));
		$w->infoBlog->setting('title',__('Title:'),__('Information about your blog'),'text');
		$w->infoBlog->setting('displayentriesnumber',__('Display entries number'),true,'check');
		$w->infoBlog->setting('displayselectedentriesnumber',__('Display selected entries number'),true,'check');
		$w->infoBlog->setting('displayentrieswaitingnumber',__('Display entries waiting\'s number'),true,'check');
		$w->infoBlog->setting('displayscheduledentriesnumber',__('Display scheduled entries number'),true,'check');
		$w->infoBlog->setting('displayofflineentriesnumber',__('Display offline entries number'),true,'check');
		$w->infoBlog->setting('displaycommentsnumber',__('Display comments number'),true,'check');
		$w->infoBlog->setting('displaypingsnumber',__('Display pings number'),true,'check');
		$w->infoBlog->setting('displaystartblogdate',__('Display start blog date'),true,'check');
		$w->infoBlog->setting('displaystartblogdatetext',__('Text to display start day:'),__('Blog start the %s'),'text');
		$w->infoBlog->setting('displayauthors',__('Display authors'),true,'check');
		$w->infoBlog->setting('displayauthorstats',__('Display author statistics'),true,'check');
		$w->infoBlog->setting('homeonly',__('Display on:'),0,'combo',
			array(
				__('All pages') => 0,
				__('Home page only') => 1,
				__('Except on home page') => 2
				)
		);
    $w->infoBlog->setting('content_only',__('Content only'),0,'check');
    $w->infoBlog->setting('class',__('CSS class:'),'');
		$w->infoBlog->setting('offline',__('Offline'),0,'check');
	}
}