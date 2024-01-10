<?php


require_once __DIR__ . '/../../../testDataFileIterator.php';

class PasswordHasherTest extends \PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    /**
     * @dataProvider providerHashPassword
     */
    public function testHashPassword()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(['PHPExcel_Shared_PasswordHasher', 'hashPassword'], $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerHashPassword()
    {
        return new testDataFileIterator('rawTestData/Shared/PasswordHashes.data');
    }
}
