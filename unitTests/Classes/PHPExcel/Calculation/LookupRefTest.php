<?php


require_once __DIR__ . '/../../../testDataFileIterator.php';

class LookupRefTest extends \PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');

        PHPExcel_Calculation_Functions::setCompatibilityMode(PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerHLOOKUP
     */
    public function testHLOOKUP()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_LookupRef', 'HLOOKUP'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerHLOOKUP()
    {
        return new testDataFileIterator('rawTestData/Calculation/LookupRef/HLOOKUP.data');
    }

    /**
     * @dataProvider providerVLOOKUP
     */
    public function testVLOOKUP()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Calculation_LookupRef', 'VLOOKUP'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerVLOOKUP()
    {
        return new testDataFileIterator('rawTestData/Calculation/LookupRef/VLOOKUP.data');
    }
}
