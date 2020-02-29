<?php
/**
 * SmoothVelocityStream
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Strava API v3
 *
 * The [Swagger Playground](https://developers.strava.com/playground) is the easiest way to familiarize yourself with the Strava API by submitting HTTP requests and observing the responses before you write any client code. It will show what a response will look like with different endpoints depending on the authorization scope you receive from your athletes. To use the Playground, go to https://www.strava.com/settings/api and change your “Authorization Callback Domain” to developers.strava.com. Please note, we only support Swagger 2.0. There is a known issue where you can only select one scope at a time. For more information, please check the section “client code” at https://developers.strava.com/docs.
 *
 * OpenAPI spec version: 3.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * SmoothVelocityStream Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmoothVelocityStream implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmoothVelocityStream';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'original_size' => 'int',
        'resolution' => 'string',
        'series_type' => 'string',
        'data' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'original_size' => null,
        'resolution' => null,
        'series_type' => null,
        'data' => 'float'
    ];

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
        'original_size' => 'original_size',
        'resolution' => 'resolution',
        'series_type' => 'series_type',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'original_size' => 'setOriginalSize',
        'resolution' => 'setResolution',
        'series_type' => 'setSeriesType',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'original_size' => 'getOriginalSize',
        'resolution' => 'getResolution',
        'series_type' => 'getSeriesType',
        'data' => 'getData'
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
        return self::$swaggerModelName;
    }

    const RESOLUTION_LOW = 'low';
    const RESOLUTION_MEDIUM = 'medium';
    const RESOLUTION_HIGH = 'high';
    const SERIES_TYPE_DISTANCE = 'distance';
    const SERIES_TYPE_TIME = 'time';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResolutionAllowableValues()
    {
        return [
            self::RESOLUTION_LOW,
            self::RESOLUTION_MEDIUM,
            self::RESOLUTION_HIGH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeriesTypeAllowableValues()
    {
        return [
            self::SERIES_TYPE_DISTANCE,
            self::SERIES_TYPE_TIME,
        ];
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
        $this->container['original_size'] = isset($data['original_size']) ? $data['original_size'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['series_type'] = isset($data['series_type']) ? $data['series_type'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResolutionAllowableValues();
        if (!in_array($this->container['resolution'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resolution', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSeriesTypeAllowableValues();
        if (!in_array($this->container['series_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'series_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getResolutionAllowableValues();
        if (!in_array($this->container['resolution'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSeriesTypeAllowableValues();
        if (!in_array($this->container['series_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets original_size
     *
     * @return int
     */
    public function getOriginalSize()
    {
        return $this->container['original_size'];
    }

    /**
     * Sets original_size
     *
     * @param int $original_size The number of data points in this stream
     *
     * @return $this
     */
    public function setOriginalSize($original_size)
    {
        $this->container['original_size'] = $original_size;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param string $resolution The level of detail (sampling) in which this stream was returned
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $allowedValues = $this->getResolutionAllowableValues();
        if (!is_null($resolution) && !in_array($resolution, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resolution', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets series_type
     *
     * @return string
     */
    public function getSeriesType()
    {
        return $this->container['series_type'];
    }

    /**
     * Sets series_type
     *
     * @param string $series_type The base series used in the case the stream was downsampled
     *
     * @return $this
     */
    public function setSeriesType($series_type)
    {
        $allowedValues = $this->getSeriesTypeAllowableValues();
        if (!is_null($series_type) && !in_array($series_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'series_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['series_type'] = $series_type;

        return $this;
    }

    /**
     * Gets data
     *
     * @return float[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param float[] $data The sequence of velocity values for this stream, in meters per second
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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


