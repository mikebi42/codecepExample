<?php 

namespace Grav\Plugin\CodecepExamplePlugin;

use Grav\Common\Plugin;
use Grav\Plugin\CodecepExamplePlugin\API\Test;

class exampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        include __DIR__ . '/../../vendor/autoload.php';
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        var_dump(get_declared_classes());

        $data = new \Grav\Common\Data\Data ([
             'fullname' => "First Last",
             'email' => "Testemail@test.com"
            ]);
        
        $t = new Test($data);
        $t->test();
    }
}