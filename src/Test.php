<?php
/**
 * codecepExample Plugin, Unit Tests
 *
 * PHP version 7
 *
 * @category API
 * @package  Grav\Plugin\codecepExamplePlugin
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/mikebi42/grav-codecepExample.git
 */
namespace Grav\Plugin\CodecepExamplePlugin\API;

use Grav\Common\Utils;


class Test
{
    protected $gdata;

    public function __construct(\Grav\Common\Data\Data $data)
    {
        $this->gdata = $data;
    }


    public function test()
    {
        codecept_debug($this->gdata->get('email'));
        //$this->config->get('plugins.codecepexample.text_var');
    }
}
