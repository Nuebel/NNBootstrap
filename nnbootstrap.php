<?php
/**
 * @package   NNBoostrap 3
 * @author    NN-Medienagentur http://www.nn-medienagentur.de
 * @copyright Copyright (C) NN-Medienagentur
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

class plgContentNNBootstrap extends JPlugin {

	public function onContentPrepare($context, &$article, &$params, $limitstart=0) {

		$replace = array(
			"{row}",
			"{col-xs-1}",
			"{col-xs-2}",
			"{col-xs-3}",
			"{col-xs-4}",
			"{col-xs-5}",
			"{col-xs-6}",
			"{col-xs-7}",
			"{col-xs-8}",
			"{col-xs-9}",
			"{col-xs-10}",
			"{col-xs-11}",
			"{col-xs-12}",
			"{col-sm-1}",
			"{col-sm-2}",
			"{col-sm-3}",
			"{col-sm-4}",
			"{col-sm-5}",
			"{col-sm-6}",
			"{col-sm-7}",
			"{col-sm-8}",
			"{col-sm-9}",
			"{col-sm-10}",
			"{col-sm-11}",
			"{col-sm-12}",
			"{col-md-1}",
			"{col-md-2}",
			"{col-md-3}",
			"{col-md-4}",
			"{col-md-5}",
			"{col-md-6}",
			"{col-md-7}",
			"{col-md-8}",
			"{col-md-9}",
			"{col-md-10}",
			"{col-md-11}",
			"{col-md-12}",
			"{pull-right col-xs-1}",
			"{pull-right col-xs-2}",
			"{pull-right col-xs-3}",
			"{pull-right col-xs-4}",
			"{pull-right col-xs-5}",
			"{pull-right col-xs-6}",
			"{pull-right col-xs-7}",
			"{pull-right col-xs-8}",
			"{pull-right col-xs-9}",
			"{pull-right col-xs-10}",
			"{pull-right col-xs-11}",
			"{pull-right col-xs-12}",
			"{pull-right col-sm-1}",
			"{pull-right col-sm-2}",
			"{pull-right col-sm-3}",
			"{pull-right col-sm-4}",
			"{pull-right col-sm-5}",
			"{pull-right col-sm-6}",
			"{pull-right col-sm-7}",
			"{pull-right col-sm-8}",
			"{pull-right col-sm-9}",
			"{pull-right col-sm-10}",
			"{pull-right col-sm-11}",
			"{pull-right col-sm-12}",
			"{pull-right col-md-1}",
			"{pull-right col-md-2}",
			"{pull-right col-md-3}",
			"{pull-right col-md-4}",
			"{pull-right col-md-5}",
			"{pull-right col-md-6}",
			"{pull-right col-md-7}",
			"{pull-right col-md-8}",
			"{pull-right col-md-9}",
			"{pull-right col-md-10}",
			"{pull-right col-md-11}",
			"{pull-right col-md-12}",
			"{/div}",
			"{clearfix}",
		);
		$bootstrap = array(
			'<div class="row">',
			'<div class="col-xs-1">',
			'<div class="col-xs-2">',
			'<div class="col-xs-3">',
			'<div class="col-xs-4">',
			'<div class="col-xs-5">',
			'<div class="col-xs-6">',
			'<div class="col-xs-7">',
			'<div class="col-xs-8">',
			'<div class="col-xs-9">',
			'<div class="col-xs-10">',
			'<div class="col-xs-11">',
			'<div class="col-xs-12">',
			'<div class="col-sm-1">',
			'<div class="col-sm-2">',
			'<div class="col-sm-3">',
			'<div class="col-sm-4">',
			'<div class="col-sm-5">',
			'<div class="col-sm-6">',
			'<div class="col-sm-7">',
			'<div class="col-sm-8">',
			'<div class="col-sm-9">',
			'<div class="col-sm-10">',
			'<div class="col-sm-11">',
			'<div class="col-sm-12">',
			'<div class="col-md-1">',
			'<div class="col-md-2">',
			'<div class="col-md-3">',
			'<div class="col-md-4">',
			'<div class="col-md-5">',
			'<div class="col-md-6">',
			'<div class="col-md-7">',
			'<div class="col-md-8">',
			'<div class="col-md-9">',
			'<div class="col-md-10">',
			'<div class="col-md-11">',
			'<div class="col-md-12">',
			'<div class="pull-right col-xs-1">',
			'<div class="pull-right col-xs-2">',
			'<div class="pull-right col-xs-3">',
			'<div class="pull-right col-xs-4">',
			'<div class="pull-right col-xs-5">',
			'<div class="pull-right col-xs-6">',
			'<div class="pull-right col-xs-7">',
			'<div class="pull-right col-xs-8">',
			'<div class="pull-right col-xs-9">',
			'<div class="pull-right col-xs-10">',
			'<div class="pull-right col-xs-11">',
			'<div class="pull-right col-xs-12">',
			'<div class="pull-right col-sm-1">',
			'<div class="pull-right col-sm-2">',
			'<div class="pull-right col-sm-3">',
			'<div class="pull-right col-sm-4">',
			'<div class="pull-right col-sm-5">',
			'<div class="pull-right col-sm-6">',
			'<div class="pull-right col-sm-7">',
			'<div class="pull-right col-sm-8">',
			'<div class="pull-right col-sm-9">',
			'<div class="pull-right col-sm-10">',
			'<div class="pull-right col-sm-11">',
			'<div class="pull-right col-sm-12">',
			'<div class="pull-right col-md-1">',
			'<div class="pull-right col-md-2">',
			'<div class="pull-right col-md-3">',
			'<div class="pull-right col-md-4">',
			'<div class="pull-right col-md-5">',
			'<div class="pull-right col-md-6">',
			'<div class="pull-right col-md-7">',
			'<div class="pull-right col-md-8">',
			'<div class="pull-right col-md-9">',
			'<div class="pull-right col-md-10">',
			'<div class="pull-right col-md-11">',
			'<div class="pull-right col-md-12">',
			'</div>',
			'<div class="clearfix"></div>',
		);

		$article->text = str_replace($replace, $bootstrap, $article->text);
		return '';
	}
}
