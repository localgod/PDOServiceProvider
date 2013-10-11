<?php
/**
 * PDOServiceProvider
 *
 * PHP version 5.3.3
 *
 * @category Library
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://github.com/localgod/PDOServiceProvider
 */
namespace Localgod\Silex;

/**
 * Test class for PDOServiceProvider
 *
 * @category Test
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://github.com/localgod/PDOServiceProvider
 */
class PDOServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     *
     * @test
     *
     * @return void
     */
    public function create()
    {
        $serviceprovider = new \Localgod\Silex\PDOServiceProvider(array(
            'pdo.connection' => array(
            'driver' => 'sqlite::memory:'
            )))
        ;
        $this->assertInstanceOf('Localgod\Silex\PDOServiceProvider', $serviceprovider);
    }
}
