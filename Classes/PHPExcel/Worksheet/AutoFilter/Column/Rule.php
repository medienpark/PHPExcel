<?php

/**
 * PHPExcel_Worksheet_AutoFilter_Column_Rule
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category    PHPExcel
 * @package        PHPExcel_Worksheet
 * @copyright    Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license        http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version        ##VERSION##, ##DATE##
 */
class PHPExcel_Worksheet_AutoFilter_Column_Rule
{
    final public const AUTOFILTER_RULETYPE_FILTER        = 'filter';
    final public const AUTOFILTER_RULETYPE_DATEGROUP     = 'dateGroupItem';
    final public const AUTOFILTER_RULETYPE_CUSTOMFILTER  = 'customFilter';
    final public const AUTOFILTER_RULETYPE_DYNAMICFILTER = 'dynamicFilter';
    final public const AUTOFILTER_RULETYPE_TOPTENFILTER  = 'top10Filter';

    private static $ruleTypes = [
        //    Currently we're not handling
        //        colorFilter
        //        extLst
        //        iconFilter
        self::AUTOFILTER_RULETYPE_FILTER,
        self::AUTOFILTER_RULETYPE_DATEGROUP,
        self::AUTOFILTER_RULETYPE_CUSTOMFILTER,
        self::AUTOFILTER_RULETYPE_DYNAMICFILTER,
        self::AUTOFILTER_RULETYPE_TOPTENFILTER,
    ];

    final public const AUTOFILTER_RULETYPE_DATEGROUP_YEAR   = 'year';
    final public const AUTOFILTER_RULETYPE_DATEGROUP_MONTH  = 'month';
    final public const AUTOFILTER_RULETYPE_DATEGROUP_DAY    = 'day';
    final public const AUTOFILTER_RULETYPE_DATEGROUP_HOUR   = 'hour';
    final public const AUTOFILTER_RULETYPE_DATEGROUP_MINUTE = 'minute';
    final public const AUTOFILTER_RULETYPE_DATEGROUP_SECOND = 'second';

    private static $dateTimeGroups = [self::AUTOFILTER_RULETYPE_DATEGROUP_YEAR, self::AUTOFILTER_RULETYPE_DATEGROUP_MONTH, self::AUTOFILTER_RULETYPE_DATEGROUP_DAY, self::AUTOFILTER_RULETYPE_DATEGROUP_HOUR, self::AUTOFILTER_RULETYPE_DATEGROUP_MINUTE, self::AUTOFILTER_RULETYPE_DATEGROUP_SECOND];

    final public const AUTOFILTER_RULETYPE_DYNAMIC_YESTERDAY    = 'yesterday';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_TODAY        = 'today';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_TOMORROW     = 'tomorrow';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_YEARTODATE   = 'yearToDate';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_THISYEAR     = 'thisYear';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_THISQUARTER  = 'thisQuarter';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_THISMONTH    = 'thisMonth';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_THISWEEK     = 'thisWeek';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_LASTYEAR     = 'lastYear';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_LASTQUARTER  = 'lastQuarter';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_LASTMONTH    = 'lastMonth';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_LASTWEEK     = 'lastWeek';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_NEXTYEAR     = 'nextYear';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_NEXTQUARTER  = 'nextQuarter';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_NEXTMONTH    = 'nextMonth';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_NEXTWEEK     = 'nextWeek';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_1      = 'M1';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_JANUARY      = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_1;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_2      = 'M2';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_FEBRUARY     = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_2;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_3      = 'M3';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MARCH        = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_3;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_4      = 'M4';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_APRIL        = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_4;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_5      = 'M5';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MAY          = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_5;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_6      = 'M6';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_JUNE         = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_6;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_7      = 'M7';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_JULY         = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_7;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_8      = 'M8';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_AUGUST       = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_8;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_9      = 'M9';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_SEPTEMBER    = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_9;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_10     = 'M10';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_OCTOBER      = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_10;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_11     = 'M11';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_NOVEMBER     = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_11;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_MONTH_12     = 'M12';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_DECEMBER     = self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_12;
    final public const AUTOFILTER_RULETYPE_DYNAMIC_QUARTER_1    = 'Q1';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_QUARTER_2    = 'Q2';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_QUARTER_3    = 'Q3';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_QUARTER_4    = 'Q4';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_ABOVEAVERAGE = 'aboveAverage';
    final public const AUTOFILTER_RULETYPE_DYNAMIC_BELOWAVERAGE = 'belowAverage';

    private static $dynamicTypes = [self::AUTOFILTER_RULETYPE_DYNAMIC_YESTERDAY, self::AUTOFILTER_RULETYPE_DYNAMIC_TODAY, self::AUTOFILTER_RULETYPE_DYNAMIC_TOMORROW, self::AUTOFILTER_RULETYPE_DYNAMIC_YEARTODATE, self::AUTOFILTER_RULETYPE_DYNAMIC_THISYEAR, self::AUTOFILTER_RULETYPE_DYNAMIC_THISQUARTER, self::AUTOFILTER_RULETYPE_DYNAMIC_THISMONTH, self::AUTOFILTER_RULETYPE_DYNAMIC_THISWEEK, self::AUTOFILTER_RULETYPE_DYNAMIC_LASTYEAR, self::AUTOFILTER_RULETYPE_DYNAMIC_LASTQUARTER, self::AUTOFILTER_RULETYPE_DYNAMIC_LASTMONTH, self::AUTOFILTER_RULETYPE_DYNAMIC_LASTWEEK, self::AUTOFILTER_RULETYPE_DYNAMIC_NEXTYEAR, self::AUTOFILTER_RULETYPE_DYNAMIC_NEXTQUARTER, self::AUTOFILTER_RULETYPE_DYNAMIC_NEXTMONTH, self::AUTOFILTER_RULETYPE_DYNAMIC_NEXTWEEK, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_1, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_2, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_3, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_4, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_5, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_6, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_7, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_8, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_9, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_10, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_11, self::AUTOFILTER_RULETYPE_DYNAMIC_MONTH_12, self::AUTOFILTER_RULETYPE_DYNAMIC_QUARTER_1, self::AUTOFILTER_RULETYPE_DYNAMIC_QUARTER_2, self::AUTOFILTER_RULETYPE_DYNAMIC_QUARTER_3, self::AUTOFILTER_RULETYPE_DYNAMIC_QUARTER_4, self::AUTOFILTER_RULETYPE_DYNAMIC_ABOVEAVERAGE, self::AUTOFILTER_RULETYPE_DYNAMIC_BELOWAVERAGE];

    /*
     *    The only valid filter rule operators for filter and customFilter types are:
     *        <xsd:enumeration value="equal"/>
     *        <xsd:enumeration value="lessThan"/>
     *        <xsd:enumeration value="lessThanOrEqual"/>
     *        <xsd:enumeration value="notEqual"/>
     *        <xsd:enumeration value="greaterThanOrEqual"/>
     *        <xsd:enumeration value="greaterThan"/>
     */
    final public const AUTOFILTER_COLUMN_RULE_EQUAL              = 'equal';
    final public const AUTOFILTER_COLUMN_RULE_NOTEQUAL           = 'notEqual';
    final public const AUTOFILTER_COLUMN_RULE_GREATERTHAN        = 'greaterThan';
    final public const AUTOFILTER_COLUMN_RULE_GREATERTHANOREQUAL = 'greaterThanOrEqual';
    final public const AUTOFILTER_COLUMN_RULE_LESSTHAN           = 'lessThan';
    final public const AUTOFILTER_COLUMN_RULE_LESSTHANOREQUAL    = 'lessThanOrEqual';

    private static $operators = [self::AUTOFILTER_COLUMN_RULE_EQUAL, self::AUTOFILTER_COLUMN_RULE_NOTEQUAL, self::AUTOFILTER_COLUMN_RULE_GREATERTHAN, self::AUTOFILTER_COLUMN_RULE_GREATERTHANOREQUAL, self::AUTOFILTER_COLUMN_RULE_LESSTHAN, self::AUTOFILTER_COLUMN_RULE_LESSTHANOREQUAL];

    final public const AUTOFILTER_COLUMN_RULE_TOPTEN_BY_VALUE = 'byValue';
    final public const AUTOFILTER_COLUMN_RULE_TOPTEN_PERCENT  = 'byPercent';

    private static $topTenValue = [self::AUTOFILTER_COLUMN_RULE_TOPTEN_BY_VALUE, self::AUTOFILTER_COLUMN_RULE_TOPTEN_PERCENT];

    final public const AUTOFILTER_COLUMN_RULE_TOPTEN_TOP    = 'top';
    final public const AUTOFILTER_COLUMN_RULE_TOPTEN_BOTTOM = 'bottom';

    private static $topTenType = [self::AUTOFILTER_COLUMN_RULE_TOPTEN_TOP, self::AUTOFILTER_COLUMN_RULE_TOPTEN_BOTTOM];


    /**
     * Autofilter Rule Type
     *
     * @var string
     */
    private $ruleType = self::AUTOFILTER_RULETYPE_FILTER;


    /**
     * Autofilter Rule Value
     *
     * @var string
     */
    private $value = '';

    /**
     * Autofilter Rule Operator
     *
     * @var string
     */
    private $operator = self::AUTOFILTER_COLUMN_RULE_EQUAL;

    /**
     * DateTimeGrouping Group Value
     *
     * @var string
     */
    private $grouping = '';


    /**
     * Create a new PHPExcel_Worksheet_AutoFilter_Column_Rule
     *
     * @param PHPExcel_Worksheet_AutoFilter_Column $parent
     */
    public function __construct(
        /**
         * Autofilter Column
         */
        private ?\PHPExcel_Worksheet_AutoFilter_Column $parent = null
    )
    {
    }

    /**
     * Get AutoFilter Rule Type
     *
     * @return string
     */
    public function getRuleType()
    {
        return $this->ruleType;
    }

    /**
     *    Set AutoFilter Rule Type
     *
     *    @param    string        $pRuleType
     *    @throws    PHPExcel_Exception
     *    @return PHPExcel_Worksheet_AutoFilter_Column
     */
    public function setRuleType($pRuleType = self::AUTOFILTER_RULETYPE_FILTER)
    {
        if (!in_array($pRuleType, self::$ruleTypes)) {
            throw new PHPExcel_Exception('Invalid rule type for column AutoFilter Rule.');
        }

        $this->ruleType = $pRuleType;

        return $this;
    }

    /**
     * Get AutoFilter Rule Value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *    Set AutoFilter Rule Value
     *
     *    @param    string|string[]        $pValue
     *    @throws    PHPExcel_Exception
     *    @return PHPExcel_Worksheet_AutoFilter_Column_Rule
     */
    public function setValue($pValue = '')
    {
        if (is_array($pValue)) {
            $grouping = -1;
            foreach ($pValue as $key => $value) {
                //    Validate array entries
                if (!in_array($key, self::$dateTimeGroups)) {
                    //    Remove any invalid entries from the value array
                    unset($pValue[$key]);
                } else {
                    //    Work out what the dateTime grouping will be
                    $grouping = max($grouping, array_search($key, self::$dateTimeGroups));
                }
            }
            if (count($pValue) == 0) {
                throw new PHPExcel_Exception('Invalid rule value for column AutoFilter Rule.');
            }
            //    Set the dateTime grouping that we've anticipated
            $this->setGrouping(self::$dateTimeGroups[$grouping]);
        }
        $this->value = $pValue;

        return $this;
    }

    /**
     * Get AutoFilter Rule Operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     *    Set AutoFilter Rule Operator
     *
     *    @param    string        $pOperator
     *    @throws    PHPExcel_Exception
     *    @return PHPExcel_Worksheet_AutoFilter_Column_Rule
     */
    public function setOperator($pOperator = self::AUTOFILTER_COLUMN_RULE_EQUAL)
    {
        if (empty($pOperator)) {
            $pOperator = self::AUTOFILTER_COLUMN_RULE_EQUAL;
        }
        if ((!in_array($pOperator, self::$operators)) &&
            (!in_array($pOperator, self::$topTenValue))) {
            throw new PHPExcel_Exception('Invalid operator for column AutoFilter Rule.');
        }
        $this->operator = $pOperator;

        return $this;
    }

    /**
     * Get AutoFilter Rule Grouping
     *
     * @return string
     */
    public function getGrouping()
    {
        return $this->grouping;
    }

    /**
     *    Set AutoFilter Rule Grouping
     *
     *    @param    string        $pGrouping
     *    @throws    PHPExcel_Exception
     *    @return PHPExcel_Worksheet_AutoFilter_Column_Rule
     */
    public function setGrouping($pGrouping = null)
    {
        if (($pGrouping !== null) &&
            (!in_array($pGrouping, self::$dateTimeGroups)) &&
            (!in_array($pGrouping, self::$dynamicTypes)) &&
            (!in_array($pGrouping, self::$topTenType))) {
            throw new PHPExcel_Exception('Invalid rule type for column AutoFilter Rule.');
        }
        $this->grouping = $pGrouping;

        return $this;
    }

    /**
     *    Set AutoFilter Rule
     *
     *    @param    string                $pOperator
     *    @param    string|string[]        $pValue
     *    @param    string                $pGrouping
     *    @throws    PHPExcel_Exception
     *    @return PHPExcel_Worksheet_AutoFilter_Column_Rule
     */
    public function setRule($pOperator = self::AUTOFILTER_COLUMN_RULE_EQUAL, $pValue = '', $pGrouping = null)
    {
        $this->setOperator($pOperator);
        $this->setValue($pValue);
        //    Only set grouping if it's been passed in as a user-supplied argument,
        //        otherwise we're calculating it when we setValue() and don't want to overwrite that
        //        If the user supplies an argumnet for grouping, then on their own head be it
        if ($pGrouping !== null) {
            $this->setGrouping($pGrouping);
        }

        return $this;
    }

    /**
     * Get this Rule's AutoFilter Column Parent
     *
     * @return PHPExcel_Worksheet_AutoFilter_Column
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set this Rule's AutoFilter Column Parent
     *
     * @param PHPExcel_Worksheet_AutoFilter_Column
     * @return PHPExcel_Worksheet_AutoFilter_Column_Rule
     */
    public function setParent(PHPExcel_Worksheet_AutoFilter_Column $pParent = null)
    {
        $this->parent = $pParent;

        return $this;
    }

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $key => $value) {
            if (is_object($value)) {
                if ($key == 'parent') {
                    //    Detach from autofilter column parent
                    $this->$key = null;
                } else {
                    $this->$key = clone $value;
                }
            } else {
                $this->$key = $value;
            }
        }
    }
}
