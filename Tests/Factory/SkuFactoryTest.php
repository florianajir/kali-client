<?php
/**
 * This file is part of the Meup Kali Client Bundle.
 *
 * (c) 1001pharmacies <http://github.com/1001pharmacies/kali-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meup\Bundle\KaliClientBundle\Tests\Factory;

use Meup\Bundle\KaliClientBundle\Factory\SkuFactory;
use Meup\Bundle\KaliClientBundle\Tests\BaseTestCase;

/**
 * Class SkuFactoryTest
 *
 * @author Loïc AMBROSINI <loic@1001pharmacies.com>
 */
class SkuFactoryTest extends BaseTestCase
{
    public function testCreateSkuObject()
    {
        $factory = new SkuFactory('Meup\Bundle\KaliClientBundle\Model\Sku');

        $this->assertInstanceOf('Meup\Bundle\KaliClientBundle\Model\Sku', $factory->create());
    }
}
