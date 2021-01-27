<?php

/*
 * This file is part of JQueryInContaoBackendBundle.

 * @package   JQueryInContaoBackendBundle
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2020
 * @website	  https://github.com/marcel-mathias-nolte
 * @license   LGPL-3.0-or-later
 */

namespace MarcelMathiasNolte\JQueryInContaoBackendBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use MarcelMathiasNolte\JQueryInContaoBackendBundle\JQueryInContaoBackendBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(JQueryInContaoBackendBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
