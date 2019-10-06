<?php 

namespace Grav\Plugin\CodecepExamplePlugin;

use Codeception\Util\Fixtures;
use Grav\Common\Plugin;
use Grav\Plugin\CodecepExamplePlugin\API\Test;

class exampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /** @var Grav $grav */
    protected $grav;
    
    protected function _before()
    {
        include __DIR__ . '/../../vendor/autoload.php';
        $grav = Fixtures::get('grav');
        $this->grav = $grav();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
 
        $data = new \Grav\Common\Data\Data ([
             'fullname' => "First Last",
             'email' => "Testemail@test.com"
            ]);
        // Create plugin api test class 
        $t = new Test($data);

        // Create instance of plugin
        $plugin = new \Grav\Plugin\CodecepExamplePlugin('codecptExample', $this->grav);

        // Call function defined in plugin
        $plugin->callTest();
        
        // call function directly from test
        $result = $t->test($this->grav);
        $this->assertEquals("Testemail@test.com",$result->get('email'));
        // Value for plugins.codecepexample.text_var is set in _bootstrap.php
        $this->assertEquals($this->grav['config']->get('plugins.codecepexample.text_var'),$result->get('text_var'));
    }
}