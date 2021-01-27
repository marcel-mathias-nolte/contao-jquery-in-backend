<?php

/*
 * This file is part of JQueryInContaoBackendBundle.

 * @package   JQueryInContaoBackendBundle
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2020
 * @website	  https://github.com/marcel-mathias-nolte
 * @license   LGPL-3.0-or-later
 */

namespace MarcelMathiasNolte\JQueryInContaoBackendBundle\Tests;

use PHPUnit\Framework\TestCase;
use MarcelMathiasNolte\JQueryInContaoBackendBundle;

class JQueryInContaoBackendBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new JQueryInContaoBackendBundle();

        $this->assertInstanceOf('MarcelMathiasNolte\JQueryInContaoBackendBundle\JQueryInContaoBackendBundle', $bundle);
    }
}
