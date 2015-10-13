<?php
/**
 * This file is part of the Meup Kali Client Bundle.
 *
 * (c) 1001pharmacies <http://github.com/1001pharmacies/kali-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meup\Bundle\KaliClientBundle\Tests\DependencyInjection;

use Meup\Bundle\KaliClientBundle\DependencyInjection\MeupKaliClientExtension;
use Meup\Bundle\KaliClientBundle\DependencyInjection\Configuration;

/**
 * Class ConfigurationTest
 *
 * @author Loïc AMBROSINI <loic@1001pharmacies.com>
 * @author Florian AJIR <florian@1001pharmacies.com>
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MeupKaliClientExtension
     */
    private $extension;

    /**
     * Root name of the configuration
     *
     * @var string
     */
    private $root;

    /**
     * @return MeupKaliClientExtension
     */
    protected function getExtension()
    {
        return new MeupKaliClientExtension();
    }

    /**
     *
     */
    public function setUp()
    {
        parent::setUp();
        $this->extension = $this->getExtension();
        $this->root      = "meup_kali_client";
    }

    /**
     *
     */
    public function testGetConfigurationTree()
    {
        $configuration = new Configuration();

        $this->assertInstanceOf(
            '\Symfony\Component\Config\Definition\Builder\TreeBuilder',
            $configuration->getConfigTreeBuilder()
        );
    }
}
