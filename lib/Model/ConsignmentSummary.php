<?php
/**
 * ConsignmentSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PinPoint
 *
 * APC Overnight PinPoint Service. Locate parcel delivery information based on a consignment number and postcode.
 *
 * OpenAPI spec version: v1
 * Contact: developers@apc-overnight.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ConsignmentSummary Class Doc Comment
 *
 * @category Class
 * @description Class providing the data for the Consignment Summary part of PinPoint
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConsignmentSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConsignmentSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignment_number' => 'string',
'dispatch_date' => '\DateTime',
'number_of_parcels' => 'int',
'total_weight' => 'double',
'service_code' => 'string',
'sender_reference' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consignment_number' => null,
'dispatch_date' => 'date-time',
'number_of_parcels' => 'int32',
'total_weight' => 'double',
'service_code' => null,
'sender_reference' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'consignment_number' => 'consignmentNumber',
'dispatch_date' => 'dispatchDate',
'number_of_parcels' => 'numberOfParcels',
'total_weight' => 'totalWeight',
'service_code' => 'serviceCode',
'sender_reference' => 'senderReference'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consignment_number' => 'setConsignmentNumber',
'dispatch_date' => 'setDispatchDate',
'number_of_parcels' => 'setNumberOfParcels',
'total_weight' => 'setTotalWeight',
'service_code' => 'setServiceCode',
'sender_reference' => 'setSenderReference'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consignment_number' => 'getConsignmentNumber',
'dispatch_date' => 'getDispatchDate',
'number_of_parcels' => 'getNumberOfParcels',
'total_weight' => 'getTotalWeight',
'service_code' => 'getServiceCode',
'sender_reference' => 'getSenderReference'    ];

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
        return self::$swaggerModelName;
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
        $this->container['consignment_number'] = isset($data['consignment_number']) ? $data['consignment_number'] : null;
        $this->container['dispatch_date'] = isset($data['dispatch_date']) ? $data['dispatch_date'] : null;
        $this->container['number_of_parcels'] = isset($data['number_of_parcels']) ? $data['number_of_parcels'] : null;
        $this->container['total_weight'] = isset($data['total_weight']) ? $data['total_weight'] : null;
        $this->container['service_code'] = isset($data['service_code']) ? $data['service_code'] : null;
        $this->container['sender_reference'] = isset($data['sender_reference']) ? $data['sender_reference'] : null;
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
     * Gets consignment_number
     *
     * @return string
     */
    public function getConsignmentNumber()
    {
        return $this->container['consignment_number'];
    }

    /**
     * Sets consignment_number
     *
     * @param string $consignment_number 7 Digit Consignment Number
     *
     * @return $this
     */
    public function setConsignmentNumber($consignment_number)
    {
        $this->container['consignment_number'] = $consignment_number;

        return $this;
    }

    /**
     * Gets dispatch_date
     *
     * @return \DateTime
     */
    public function getDispatchDate()
    {
        return $this->container['dispatch_date'];
    }

    /**
     * Sets dispatch_date
     *
     * @param \DateTime $dispatch_date Dispatch Date
     *
     * @return $this
     */
    public function setDispatchDate($dispatch_date)
    {
        $this->container['dispatch_date'] = $dispatch_date;

        return $this;
    }

    /**
     * Gets number_of_parcels
     *
     * @return int
     */
    public function getNumberOfParcels()
    {
        return $this->container['number_of_parcels'];
    }

    /**
     * Sets number_of_parcels
     *
     * @param int $number_of_parcels Number of parcels
     *
     * @return $this
     */
    public function setNumberOfParcels($number_of_parcels)
    {
        $this->container['number_of_parcels'] = $number_of_parcels;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return double
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param double $total_weight Total weight of all parcels - in KG
     *
     * @return $this
     */
    public function setTotalWeight($total_weight)
    {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets service_code
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->container['service_code'];
    }

    /**
     * Sets service_code
     *
     * @param string $service_code Service Code - This also includes a description.
     *
     * @return $this
     */
    public function setServiceCode($service_code)
    {
        $this->container['service_code'] = $service_code;

        return $this;
    }

    /**
     * Gets sender_reference
     *
     * @return string
     */
    public function getSenderReference()
    {
        return $this->container['sender_reference'];
    }

    /**
     * Sets sender_reference
     *
     * @param string $sender_reference The sender reference for the parcel sent.
     *
     * @return $this
     */
    public function setSenderReference($sender_reference)
    {
        $this->container['sender_reference'] = $sender_reference;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
