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

use PDO;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * PDO service provider
 */
class PDOServiceProvider implements ServiceProviderInterface
{

    /**
     * Register the service
     *
     * @param Silex\Application $app
     *            Silex application
     * @return \PDO
     */
    public function register(Application $app)
    {
        /**
         * Default options
         */
        $options = array(
            'driver' => 'mysql',
            'host' => 'localhost',
            'port' => 3306,
            'name' => 'name',
            'user' => 'username',
            'pass' => 'password'
        );
        
        $app['pdo'] = $app->share(function () use($app, $options)
        {
            
            $connOpts = isset($app['pdo.connection']) ? array_merge($options, $app['pdo.connection']) : $options;
            
            $dsn = $connOpts['driver'] . 
                   ':host=' . $connOpts['host'] . 
                   ';dbname=' . $connOpts['name'] . 
                   ';port=' . $connOpts['port'];
            $pdo = new PDO($dsn, $connOpts['user'], $connOpts['pass']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        });
    }

    /**
     * Boot the application
     *
     * @param Silex\Application $app
     *            Silex application
     *            
     * @return void
     */
    public function boot(Application $app)
    {}
}