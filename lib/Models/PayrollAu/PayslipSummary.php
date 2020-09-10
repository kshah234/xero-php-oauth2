<?php
/**
 * PayslipSummary
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
 * OpenAPI spec version: 2.2.15
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
 * PayslipSummary Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayslipSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayslipSummary';

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
        'employee_group' => 'string',
        'wages' => 'double',
        'deductions' => 'double',
        'tax' => 'double',
        'super' => 'double',
        'reimbursements' => 'double',
        'net_pay' => 'double',
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
        'employee_group' => null,
        'wages' => 'double',
        'deductions' => 'double',
        'tax' => 'double',
        'super' => 'double',
        'reimbursements' => 'double',
        'net_pay' => 'double',
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
        'employee_group' => 'EmployeeGroup',
        'wages' => 'Wages',
        'deductions' => 'Deductions',
        'tax' => 'Tax',
        'super' => 'Super',
        'reimbursements' => 'Reimbursements',
        'net_pay' => 'NetPay',
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
        'employee_group' => 'setEmployeeGroup',
        'wages' => 'setWages',
        'deductions' => 'setDeductions',
        'tax' => 'setTax',
        'super' => 'setSuper',
        'reimbursements' => 'setReimbursements',
        'net_pay' => 'setNetPay',
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
        'employee_group' => 'getEmployeeGroup',
        'wages' => 'getWages',
        'deductions' => 'getDeductions',
        'tax' => 'getTax',
        'super' => 'getSuper',
        'reimbursements' => 'getReimbursements',
        'net_pay' => 'getNetPay',
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
        $this->container['employee_group'] = isset($data['employee_group']) ? $data['employee_group'] : null;
        $this->container['wages'] = isset($data['wages']) ? $data['wages'] : null;
        $this->container['deductions'] = isset($data['deductions']) ? $data['deductions'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['super'] = isset($data['super']) ? $data['super'] : null;
        $this->container['reimbursements'] = isset($data['reimbursements']) ? $data['reimbursements'] : null;
        $this->container['net_pay'] = isset($data['net_pay']) ? $data['net_pay'] : null;
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
     * Gets employee_group
     *
     * @return string|null
     */
    public function getEmployeeGroup()
    {
        return $this->container['employee_group'];
    }

    /**
     * Sets employee_group
     *
     * @param string|null $employee_group Employee group name
     *
     * @return $this
     */
    public function setEmployeeGroup($employee_group)
    {

        $this->container['employee_group'] = $employee_group;

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


