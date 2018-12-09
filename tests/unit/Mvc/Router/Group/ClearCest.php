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

namespace Phalcon\Test\Unit\Mvc\Router\Group;

use UnitTester;

/**
 * Class ClearCest
 *
 * @package Phalcon\Test\Unit\Mvc\Router\Group
 */
class ClearCest
{
    /**
     * Tests Phalcon\Mvc\Router\Group :: clear()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcRouterGroupClear(UnitTester $I)
    {
        $I->wantToTest("Mvc\Router\Group - clear()");
        $I->skipTest("Need implementation");
    }
}
