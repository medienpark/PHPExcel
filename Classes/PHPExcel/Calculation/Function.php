<?php

/**
 * PHPExcel_Calculation_Function
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
 * @category   PHPExcel
 * @package    PHPExcel_Calculation
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */
class PHPExcel_Calculation_Function
{
    /* Function categories */
    final public const CATEGORY_CUBE                 = 'Cube';
    final public const CATEGORY_DATABASE             = 'Database';
    final public const CATEGORY_DATE_AND_TIME        = 'Date and Time';
    final public const CATEGORY_ENGINEERING          = 'Engineering';
    final public const CATEGORY_FINANCIAL            = 'Financial';
    final public const CATEGORY_INFORMATION          = 'Information';
    final public const CATEGORY_LOGICAL              = 'Logical';
    final public const CATEGORY_LOOKUP_AND_REFERENCE = 'Lookup and Reference';
    final public const CATEGORY_MATH_AND_TRIG        = 'Math and Trig';
    final public const CATEGORY_STATISTICAL          = 'Statistical';
    final public const CATEGORY_TEXT_AND_DATA        = 'Text and Data';

    /**
     * Category (represented by CATEGORY_*)
     *
     * @var string
     */
    private $category;

    /**
     * Excel name
     *
     * @var string
     */
    private $excelName;

    /**
     * PHPExcel name
     *
     * @var string
     */
    private $phpExcelName;

    /**
     * Create a new PHPExcel_Calculation_Function
     *
     * @param     string        $pCategory         Category (represented by CATEGORY_*)
     * @param     string        $pExcelName        Excel function name
     * @param     string        $pPHPExcelName    PHPExcel function mapping
     * @throws     PHPExcel_Calculation_Exception
     */
    public function __construct($pCategory = null, $pExcelName = null, $pPHPExcelName = null)
    {
        if (($pCategory !== null) && ($pExcelName !== null) && ($pPHPExcelName !== null)) {
            // Initialise values
            $this->category     = $pCategory;
            $this->excelName    = $pExcelName;
            $this->phpExcelName = $pPHPExcelName;
        } else {
            throw new PHPExcel_Calculation_Exception("Invalid parameters passed.");
        }
    }

    /**
     * Get Category (represented by CATEGORY_*)
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set Category (represented by CATEGORY_*)
     *
     * @param     string        $value
     * @throws     PHPExcel_Calculation_Exception
     */
    public function setCategory($value = null)
    {
        if (!is_null($value)) {
            $this->category = $value;
        } else {
            throw new PHPExcel_Calculation_Exception("Invalid parameter passed.");
        }
    }

    /**
     * Get Excel name
     *
     * @return string
     */
    public function getExcelName()
    {
        return $this->excelName;
    }

    /**
     * Set Excel name
     *
     * @param string    $value
     */
    public function setExcelName($value)
    {
        $this->excelName = $value;
    }

    /**
     * Get PHPExcel name
     *
     * @return string
     */
    public function getPHPExcelName()
    {
        return $this->phpExcelName;
    }

    /**
     * Set PHPExcel name
     *
     * @param string    $value
     */
    public function setPHPExcelName($value)
    {
        $this->phpExcelName = $value;
    }
}
