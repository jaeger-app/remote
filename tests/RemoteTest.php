<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/RemoteTest.php
 */
namespace JaegerApp\tests;

use League\Flysystem\Adapter\NullAdapter as Adapter;
use JaegerApp\Remote;

/**
 * Jaeger - Remote Object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Remote object
 *
 * @package Jaeger\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class RemoteTest extends \PHPUnit_Framework_TestCase
{

    public function testInstance()
    {
        $remote = new Remote(new Adapter());
        $this->assertInstanceOf('\League\Flysystem\FilesystemInterface', $remote);
    }
}