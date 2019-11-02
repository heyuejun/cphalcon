<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Html\Link\Link;

use Phalcon\Html\Link\Link;
use UnitTester;

class GetRelsCest
{
    /**
     * Tests Phalcon\Html\Link\Link :: getRels()
     *
     * @since  2019-06-15
     */
    public function linkLinkGetRels(UnitTester $I)
    {
        $I->wantToTest('Link\Link - getRels()');

        $href = 'https://dev.phalcon.ld';
        $link = new Link('payment', $href);

        $expected = ['payment'];
        $I->assertEquals($expected, $link->getRels());
    }
}