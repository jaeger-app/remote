<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Remote/Local.php
 */
namespace JaegerApp\Remote;

use League\Flysystem\Adapter\Local as Adapter;

/**
 * Jaeger - Local File System Transfer Abstraction
 *
 * Simple intermediary between Flysystem and mithra62
 *
 * @package Remote
 * @author Eric Lamb <eric@mithra62.com>
 */
class Local extends Adapter
{
}