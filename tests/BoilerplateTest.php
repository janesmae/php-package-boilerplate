<?php

/**
 * PHP Package Boilerplate
 * Boilerplate for PHP packages.
 *
 * @link https://github.com/janesmae/php-package-boilerplate
 *
 * @version 0.1.0
 *
 * @author Jaan Janesmae <jaan@janesmae.com>
 * @copyright 2016 Jaan Janesmae
 * @license MIT License (https://github.com/janesmae/php-package-boilerplate/blob/master/LICENSE)
 */
use janesmae\boilerplate\Boilerplate;

class BoilerplateTest extends PHPUnit_Framework_TestCase
{
    public function testBoilerplateInit()
    {
        $rsvp = new Boilerplate();
        $this->assertTrue($rsvp->testInit());
    }
}
