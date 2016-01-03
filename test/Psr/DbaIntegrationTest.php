<?php
/**
 * @author matt
 * @copyright 2015 Claritum Limited
 * @license Commercial
 */

namespace ZendTest\Cache\Psr;

use PHPUnit_Framework_TestCase as TestCase;
use Zend\Cache\Psr\CacheItemPoolAdapter;
use Zend\Cache\StorageFactory;

class DbaIntegrationTest extends TestCase
{
    /**
     * @expectedException \Zend\Cache\Psr\CacheException
     */
    public function testAdapterNotSupported()
    {
        $storage = StorageFactory::factory([
            'adapter' => [
                'name'    => 'dba',
                'options' => [],
            ],
        ]);

        new CacheItemPoolAdapter($storage);
    }
}
