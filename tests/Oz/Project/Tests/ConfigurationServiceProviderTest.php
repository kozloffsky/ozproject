<?php
/**
 * Created by PhpStorm.
 * User: miho
 * Date: 11.09.14
 * Time: 2:13
 */

class ConfigurationServiceProviderTest extends \PHPUnit_Framework_TestCase{
    private $app;

    public function setUp(){
        $this->app = new \Silex\Application(array(
            \Oz\Project\Config::ROOT => __DIR__.'/../../../../config'
        ));
        $this->app->register(new \Oz\Project\PropelServiceProvider());
        $this->app->register(new \Oz\Project\ConfigurationServiceProvider());
    }

    public function testServices()
    {
        $systemService = $this->app[\Oz\Project\Config::SYS_CONFIG];
        $this->assertInstanceOf("\\Oz\\Project\\Config\\SystemConfigurationServiceInterface", $systemService);
    }

    /**
     * @dataProvider getSetProvider
     * @param $path
     * @param $value
     */
    public function testSetAndGet($path, $value){
        $systemService = $this->app[\Oz\Project\Config::SYS_CONFIG];
        $systemService->set($path,$value);
        $res = $systemService->get($path);
        $this->assertSame($res, $value);
    }

    public function getSetProvider()
    {
        return array(
            array('test/path1',1),
            array('test/path2',"2"),
            array('test/path3',array('3'=>'4')),
            array('test/path4',false),
        );
    }

} 