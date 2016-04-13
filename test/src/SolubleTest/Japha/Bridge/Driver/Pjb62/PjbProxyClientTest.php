<?php

namespace SolubleTest\Japha\Bridge\Driver\Pjb62;

use Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient;
use Soluble\Japha\Bridge\Adapter;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-13 at 10:21:03.
 */
class PjbProxyClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     * @var string
     */
    protected $servlet_address;


    /**
     *
     * @var Adapter
     */
    protected $adapter;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }


    public function testGetInstance()
    {
        /*
        $servlet_address = \SolubleTestFactories::getJavaBridgeServerAddress();
        $options = array(
            'servlet_address' =>  $servlet_address,
            'java_disable_autoload' => false,
            'java_prefer_values' => true,
            'load_pjb_compatibility' => false
        );

        $pjbProxyClient = PjbProxyClient::getInstance($options);

        $this->assertInstanceOf('Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient', $pjbProxyClient);
        $this->assertTrue(PjbProxyClient::isInitialized());
        $this->assertInstanceOf('Soluble\Japha\Bridge\Driver\Pjb62\Client', $pjbProxyClient->getClient());

        $pjbProxyClient->unregisterInstance();
        $this->assertFalse(PjbProxyClient::isInitialized());
        $this->assertInstanceOf('Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient', $pjbProxyClient);

        $pjbProxyClient = PjbProxyClient::getInstance($options);

        die();

        */
        //$this->assertFalse(PjbProxyClient::isInitialized());
    }


    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::getJavaClass
     * @todo   Implement testGetJavaClass().
     */
    public function testGetJavaClass()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::invokeMethod
     * @todo   Implement testInvokeMethod().
     */
    public function testInvokeMethod()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::autoload5
     * @todo   Implement testAutoload5().
     */
    public function testAutoload5()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::autoload
     * @todo   Implement testAutoload().
     */
    public function testAutoload()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::inspect
     * @todo   Implement testInspect().
     */
    public function testInspect()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::isInstanceOf
     * @todo   Implement testIsInstanceOf().
     */
    public function testIsInstanceOf()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::getValues
     * @todo   Implement testGetValues().
     */
    public function testGetValues()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::getLastException
     * @todo   Implement testGetLastException().
     */
    public function testGetLastException()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::clearLastException
     * @todo   Implement testClearLastException().
     */
    public function testClearLastException()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::getCompatibilityOption
     * @todo   Implement testGetCompatibilityOption().
     */
    public function testGetCompatibilityOption()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::unregisterInstance
     * @todo   Implement testUnregisterInstance().
     */
    public function testUnregisterInstance()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient::__destroy
     * @todo   Implement test__destroy().
     */
    public function test__destroy()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
