<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Mvc\Url;

use UnitTester;

/**
 * Class SetBasePathCest
 *
 * @package Phalcon\Test\Unit\Mvc\Url
 */
class SetBasePathCest
{
    /**
     * Tests Phalcon\Mvc\Url :: setBasePath()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcUrlSetBasePath(UnitTester $I)
    {
        $I->wantToTest("Mvc\Url - setBasePath()");
        $I->skipTest("Need implementation");
    }
}
