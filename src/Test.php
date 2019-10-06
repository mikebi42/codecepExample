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
use Grav\Common\Plugin;


class Test
{
    protected $gdata;

    public function __construct(\Grav\Common\Data\Data $data)
    {
        $this->gdata = $data;
    }


    public function test($grav)
    {
        codecept_debug($this->gdata->get('email'));
        // Value for plugins.codecepexample.text_var is set in _bootstrap.php
        codecept_debug($grav['config']->get('plugins.codecepexample.text_var'));

        return new \Grav\Common\Data\Data ([
            'email' => $this->gdata->get('email'),
            'text_var' => $grav['config']->get('plugins.codecepexample.text_var')
           ]);
    }
}
