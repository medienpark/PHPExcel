<?php


class TimeZoneTest extends \PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        if (!defined('PHPEXCEL_ROOT')) {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
    }

    public function testSetTimezone()
    {
        $timezoneValues = ['Europe/Prague', 'Asia/Tokyo', 'America/Indiana/Indianapolis', 'Pacific/Honolulu', 'Atlantic/St_Helena'];

        foreach ($timezoneValues as $timezoneValue) {
            $result = call_user_func(['PHPExcel_Shared_TimeZone', 'setTimezone'], $timezoneValue);
            $this->assertTrue($result);
        }

    }

    public function testSetTimezoneWithInvalidValue()
    {
        $unsupportedTimezone = 'Etc/GMT+10';
        $result = call_user_func(['PHPExcel_Shared_TimeZone', 'setTimezone'], $unsupportedTimezone);
        $this->assertFalse($result);
    }
}
