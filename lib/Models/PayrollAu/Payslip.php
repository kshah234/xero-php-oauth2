<?php
/**
 * Payslip
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.2.13
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Payslip Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Payslip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payslip';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'payslip_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'wages' => 'double',
        'deductions' => 'double',
        'tax' => 'double',
        'super' => 'double',
        'reimbursements' => 'double',
        'net_pay' => 'double',
        'earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]',
        'leave_earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveEarningsLine[]',
        'timesheet_earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]',
        'deduction_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]',
        'leave_accrual_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveAccrualLine[]',
        'reimbursement_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]',
        'superannuation_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationLine[]',
        'tax_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\TaxLine[]',
        'updated_date_utc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'employee_id' => 'uuid',
        'payslip_id' => 'uuid',
        'first_name' => null,
        'last_name' => null,
        'wages' => 'double',
        'deductions' => 'double',
        'tax' => 'double',
        'super' => 'double',
        'reimbursements' => 'double',
        'net_pay' => 'double',
        'earnings_lines' => null,
        'leave_earnings_lines' => null,
        'timesheet_earnings_lines' => null,
        'deduction_lines' => null,
        'leave_accrual_lines' => null,
        'reimbursement_lines' => null,
        'superannuation_lines' => null,
        'tax_lines' => null,
        'updated_date_utc' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'employee_id' => 'EmployeeID',
        'payslip_id' => 'PayslipID',
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'wages' => 'Wages',
        'deductions' => 'Deductions',
        'tax' => 'Tax',
        'super' => 'Super',
        'reimbursements' => 'Reimbursements',
        'net_pay' => 'NetPay',
        'earnings_lines' => 'EarningsLines',
        'leave_earnings_lines' => 'LeaveEarningsLines',
        'timesheet_earnings_lines' => 'TimesheetEarningsLines',
        'deduction_lines' => 'DeductionLines',
        'leave_accrual_lines' => 'LeaveAccrualLines',
        'reimbursement_lines' => 'ReimbursementLines',
        'superannuation_lines' => 'SuperannuationLines',
        'tax_lines' => 'TaxLines',
        'updated_date_utc' => 'UpdatedDateUTC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'payslip_id' => 'setPayslipId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'wages' => 'setWages',
        'deductions' => 'setDeductions',
        'tax' => 'setTax',
        'super' => 'setSuper',
        'reimbursements' => 'setReimbursements',
        'net_pay' => 'setNetPay',
        'earnings_lines' => 'setEarningsLines',
        'leave_earnings_lines' => 'setLeaveEarningsLines',
        'timesheet_earnings_lines' => 'setTimesheetEarningsLines',
        'deduction_lines' => 'setDeductionLines',
        'leave_accrual_lines' => 'setLeaveAccrualLines',
        'reimbursement_lines' => 'setReimbursementLines',
        'superannuation_lines' => 'setSuperannuationLines',
        'tax_lines' => 'setTaxLines',
        'updated_date_utc' => 'setUpdatedDateUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'payslip_id' => 'getPayslipId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'wages' => 'getWages',
        'deductions' => 'getDeductions',
        'tax' => 'getTax',
        'super' => 'getSuper',
        'reimbursements' => 'getReimbursements',
        'net_pay' => 'getNetPay',
        'earnings_lines' => 'getEarningsLines',
        'leave_earnings_lines' => 'getLeaveEarningsLines',
        'timesheet_earnings_lines' => 'getTimesheetEarningsLines',
        'deduction_lines' => 'getDeductionLines',
        'leave_accrual_lines' => 'getLeaveAccrualLines',
        'reimbursement_lines' => 'getReimbursementLines',
        'superannuation_lines' => 'getSuperannuationLines',
        'tax_lines' => 'getTaxLines',
        'updated_date_utc' => 'getUpdatedDateUtc'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['payslip_id'] = isset($data['payslip_id']) ? $data['payslip_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['wages'] = isset($data['wages']) ? $data['wages'] : null;
        $this->container['deductions'] = isset($data['deductions']) ? $data['deductions'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['super'] = isset($data['super']) ? $data['super'] : null;
        $this->container['reimbursements'] = isset($data['reimbursements']) ? $data['reimbursements'] : null;
        $this->container['net_pay'] = isset($data['net_pay']) ? $data['net_pay'] : null;
        $this->container['earnings_lines'] = isset($data['earnings_lines']) ? $data['earnings_lines'] : null;
        $this->container['leave_earnings_lines'] = isset($data['leave_earnings_lines']) ? $data['leave_earnings_lines'] : null;
        $this->container['timesheet_earnings_lines'] = isset($data['timesheet_earnings_lines']) ? $data['timesheet_earnings_lines'] : null;
        $this->container['deduction_lines'] = isset($data['deduction_lines']) ? $data['deduction_lines'] : null;
        $this->container['leave_accrual_lines'] = isset($data['leave_accrual_lines']) ? $data['leave_accrual_lines'] : null;
        $this->container['reimbursement_lines'] = isset($data['reimbursement_lines']) ? $data['reimbursement_lines'] : null;
        $this->container['superannuation_lines'] = isset($data['superannuation_lines']) ? $data['superannuation_lines'] : null;
        $this->container['tax_lines'] = isset($data['tax_lines']) ? $data['tax_lines'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets employee_id
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string|null $employee_id The Xero identifier for an employee
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {

        $this->container['employee_id'] = $employee_id;

        return $this;
    }



    /**
     * Gets payslip_id
     *
     * @return string|null
     */
    public function getPayslipId()
    {
        return $this->container['payslip_id'];
    }

    /**
     * Sets payslip_id
     *
     * @param string|null $payslip_id Xero identifier for the payslip
     *
     * @return $this
     */
    public function setPayslipId($payslip_id)
    {

        $this->container['payslip_id'] = $payslip_id;

        return $this;
    }



    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name of employee
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {

        $this->container['first_name'] = $first_name;

        return $this;
    }



    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name of employee
     *
     * @return $this
     */
    public function setLastName($last_name)
    {

        $this->container['last_name'] = $last_name;

        return $this;
    }



    /**
     * Gets wages
     *
     * @return double|null
     */
    public function getWages()
    {
        return $this->container['wages'];
    }

    /**
     * Sets wages
     *
     * @param double|null $wages The Wages for the Payslip
     *
     * @return $this
     */
    public function setWages($wages)
    {

        $this->container['wages'] = $wages;

        return $this;
    }



    /**
     * Gets deductions
     *
     * @return double|null
     */
    public function getDeductions()
    {
        return $this->container['deductions'];
    }

    /**
     * Sets deductions
     *
     * @param double|null $deductions The Deductions for the Payslip
     *
     * @return $this
     */
    public function setDeductions($deductions)
    {

        $this->container['deductions'] = $deductions;

        return $this;
    }



    /**
     * Gets tax
     *
     * @return double|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param double|null $tax The Tax for the Payslip
     *
     * @return $this
     */
    public function setTax($tax)
    {

        $this->container['tax'] = $tax;

        return $this;
    }



    /**
     * Gets super
     *
     * @return double|null
     */
    public function getSuper()
    {
        return $this->container['super'];
    }

    /**
     * Sets super
     *
     * @param double|null $super The Super for the Payslip
     *
     * @return $this
     */
    public function setSuper($super)
    {

        $this->container['super'] = $super;

        return $this;
    }



    /**
     * Gets reimbursements
     *
     * @return double|null
     */
    public function getReimbursements()
    {
        return $this->container['reimbursements'];
    }

    /**
     * Sets reimbursements
     *
     * @param double|null $reimbursements The Reimbursements for the Payslip
     *
     * @return $this
     */
    public function setReimbursements($reimbursements)
    {

        $this->container['reimbursements'] = $reimbursements;

        return $this;
    }



    /**
     * Gets net_pay
     *
     * @return double|null
     */
    public function getNetPay()
    {
        return $this->container['net_pay'];
    }

    /**
     * Sets net_pay
     *
     * @param double|null $net_pay The NetPay for the Payslip
     *
     * @return $this
     */
    public function setNetPay($net_pay)
    {

        $this->container['net_pay'] = $net_pay;

        return $this;
    }



    /**
     * Gets earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null
     */
    public function getEarningsLines()
    {
        return $this->container['earnings_lines'];
    }

    /**
     * Sets earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null $earnings_lines earnings_lines
     *
     * @return $this
     */
    public function setEarningsLines($earnings_lines)
    {

        $this->container['earnings_lines'] = $earnings_lines;

        return $this;
    }



    /**
     * Gets leave_earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveEarningsLine[]|null
     */
    public function getLeaveEarningsLines()
    {
        return $this->container['leave_earnings_lines'];
    }

    /**
     * Sets leave_earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveEarningsLine[]|null $leave_earnings_lines leave_earnings_lines
     *
     * @return $this
     */
    public function setLeaveEarningsLines($leave_earnings_lines)
    {

        $this->container['leave_earnings_lines'] = $leave_earnings_lines;

        return $this;
    }



    /**
     * Gets timesheet_earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null
     */
    public function getTimesheetEarningsLines()
    {
        return $this->container['timesheet_earnings_lines'];
    }

    /**
     * Sets timesheet_earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null $timesheet_earnings_lines timesheet_earnings_lines
     *
     * @return $this
     */
    public function setTimesheetEarningsLines($timesheet_earnings_lines)
    {

        $this->container['timesheet_earnings_lines'] = $timesheet_earnings_lines;

        return $this;
    }



    /**
     * Gets deduction_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]|null
     */
    public function getDeductionLines()
    {
        return $this->container['deduction_lines'];
    }

    /**
     * Sets deduction_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]|null $deduction_lines deduction_lines
     *
     * @return $this
     */
    public function setDeductionLines($deduction_lines)
    {

        $this->container['deduction_lines'] = $deduction_lines;

        return $this;
    }



    /**
     * Gets leave_accrual_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveAccrualLine[]|null
     */
    public function getLeaveAccrualLines()
    {
        return $this->container['leave_accrual_lines'];
    }

    /**
     * Sets leave_accrual_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveAccrualLine[]|null $leave_accrual_lines leave_accrual_lines
     *
     * @return $this
     */
    public function setLeaveAccrualLines($leave_accrual_lines)
    {

        $this->container['leave_accrual_lines'] = $leave_accrual_lines;

        return $this;
    }



    /**
     * Gets reimbursement_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]|null
     */
    public function getReimbursementLines()
    {
        return $this->container['reimbursement_lines'];
    }

    /**
     * Sets reimbursement_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]|null $reimbursement_lines reimbursement_lines
     *
     * @return $this
     */
    public function setReimbursementLines($reimbursement_lines)
    {

        $this->container['reimbursement_lines'] = $reimbursement_lines;

        return $this;
    }



    /**
     * Gets superannuation_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationLine[]|null
     */
    public function getSuperannuationLines()
    {
        return $this->container['superannuation_lines'];
    }

    /**
     * Sets superannuation_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationLine[]|null $superannuation_lines superannuation_lines
     *
     * @return $this
     */
    public function setSuperannuationLines($superannuation_lines)
    {

        $this->container['superannuation_lines'] = $superannuation_lines;

        return $this;
    }



    /**
     * Gets tax_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\TaxLine[]|null
     */
    public function getTaxLines()
    {
        return $this->container['tax_lines'];
    }

    /**
     * Sets tax_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\TaxLine[]|null $tax_lines tax_lines
     *
     * @return $this
     */
    public function setTaxLines($tax_lines)
    {

        $this->container['tax_lines'] = $tax_lines;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


