<?php


class SettingsTest extends \PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    /**
     */
    public function testGetXMLSettings()
    {
        $result = call_user_func(['PHPExcel_Settings', 'getLibXmlLoaderOptions']);
        $this->assertTrue((bool) ((LIBXML_DTDLOAD | LIBXML_DTDATTR) & $result));
    }

    /**
     */
    public function testSetXMLSettings()
    {
        call_user_func_array(['PHPExcel_Settings', 'setLibXmlLoaderOptions'], [LIBXML_DTDLOAD | LIBXML_DTDATTR | LIBXML_DTDVALID]);
        $result = call_user_func(['PHPExcel_Settings', 'getLibXmlLoaderOptions']);
        $this->assertTrue((bool) ((LIBXML_DTDLOAD | LIBXML_DTDATTR | LIBXML_DTDVALID) & $result));
    }

}
