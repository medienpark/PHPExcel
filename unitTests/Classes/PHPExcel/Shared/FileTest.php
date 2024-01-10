<?php


require_once __DIR__ . '/../../../testDataFileIterator.php';

class FileTest extends \PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    public function testGetUseUploadTempDirectory()
    {
        $expectedResult = false;

        $result = call_user_func(['PHPExcel_Shared_File', 'getUseUploadTempDirectory']);
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetUseUploadTempDirectory()
    {
        $useUploadTempDirectoryValues = [true, false];

        foreach ($useUploadTempDirectoryValues as $useUploadTempDirectoryValue) {
            call_user_func(['PHPExcel_Shared_File', 'setUseUploadTempDirectory'], $useUploadTempDirectoryValue);

            $result = call_user_func(['PHPExcel_Shared_File', 'getUseUploadTempDirectory']);
            $this->assertEquals($useUploadTempDirectoryValue, $result);
        }
    }
}
