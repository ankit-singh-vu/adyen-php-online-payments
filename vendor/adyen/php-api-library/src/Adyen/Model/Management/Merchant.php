<?php

/**
 * Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Management;

use \ArrayAccess;
use Adyen\Model\Management\ObjectSerializer;

/**
 * Merchant Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Merchant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Merchant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'links' => '\Adyen\Model\Management\MerchantLinks',
        'captureDelay' => 'string',
        'companyId' => 'string',
        'dataCenters' => '\Adyen\Model\Management\DataCenter[]',
        'defaultShopperInteraction' => 'string',
        'description' => 'string',
        'id' => 'string',
        'merchantCity' => 'string',
        'name' => 'string',
        'pricingPlan' => 'string',
        'primarySettlementCurrency' => 'string',
        'reference' => 'string',
        'shopWebAddress' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'links' => null,
        'captureDelay' => null,
        'companyId' => null,
        'dataCenters' => null,
        'defaultShopperInteraction' => null,
        'description' => null,
        'id' => null,
        'merchantCity' => null,
        'name' => null,
        'pricingPlan' => null,
        'primarySettlementCurrency' => null,
        'reference' => null,
        'shopWebAddress' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'links' => false,
        'captureDelay' => false,
        'companyId' => false,
        'dataCenters' => false,
        'defaultShopperInteraction' => false,
        'description' => false,
        'id' => false,
        'merchantCity' => false,
        'name' => false,
        'pricingPlan' => false,
        'primarySettlementCurrency' => false,
        'reference' => false,
        'shopWebAddress' => false,
        'status' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'links' => '_links',
        'captureDelay' => 'captureDelay',
        'companyId' => 'companyId',
        'dataCenters' => 'dataCenters',
        'defaultShopperInteraction' => 'defaultShopperInteraction',
        'description' => 'description',
        'id' => 'id',
        'merchantCity' => 'merchantCity',
        'name' => 'name',
        'pricingPlan' => 'pricingPlan',
        'primarySettlementCurrency' => 'primarySettlementCurrency',
        'reference' => 'reference',
        'shopWebAddress' => 'shopWebAddress',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'captureDelay' => 'setCaptureDelay',
        'companyId' => 'setCompanyId',
        'dataCenters' => 'setDataCenters',
        'defaultShopperInteraction' => 'setDefaultShopperInteraction',
        'description' => 'setDescription',
        'id' => 'setId',
        'merchantCity' => 'setMerchantCity',
        'name' => 'setName',
        'pricingPlan' => 'setPricingPlan',
        'primarySettlementCurrency' => 'setPrimarySettlementCurrency',
        'reference' => 'setReference',
        'shopWebAddress' => 'setShopWebAddress',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'captureDelay' => 'getCaptureDelay',
        'companyId' => 'getCompanyId',
        'dataCenters' => 'getDataCenters',
        'defaultShopperInteraction' => 'getDefaultShopperInteraction',
        'description' => 'getDescription',
        'id' => 'getId',
        'merchantCity' => 'getMerchantCity',
        'name' => 'getName',
        'pricingPlan' => 'getPricingPlan',
        'primarySettlementCurrency' => 'getPrimarySettlementCurrency',
        'reference' => 'getReference',
        'shopWebAddress' => 'getShopWebAddress',
        'status' => 'getStatus'
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
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('captureDelay', $data ?? [], null);
        $this->setIfExists('companyId', $data ?? [], null);
        $this->setIfExists('dataCenters', $data ?? [], null);
        $this->setIfExists('defaultShopperInteraction', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('merchantCity', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('pricingPlan', $data ?? [], null);
        $this->setIfExists('primarySettlementCurrency', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('shopWebAddress', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets links
     *
     * @return \Adyen\Model\Management\MerchantLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Adyen\Model\Management\MerchantLinks|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets captureDelay
     *
     * @return string|null
     */
    public function getCaptureDelay()
    {
        return $this->container['captureDelay'];
    }

    /**
     * Sets captureDelay
     *
     * @param string|null $captureDelay The [capture delay](https://docs.adyen.com/online-payments/capture#capture-delay) set for the merchant account.  Possible values: * **Immediate** * **Manual** * Number of days from **1** to **29**
     *
     * @return self
     */
    public function setCaptureDelay($captureDelay)
    {
        if (is_null($captureDelay)) {
            throw new \InvalidArgumentException('non-nullable captureDelay cannot be null');
        }
        $this->container['captureDelay'] = $captureDelay;

        return $this;
    }

    /**
     * Gets companyId
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['companyId'];
    }

    /**
     * Sets companyId
     *
     * @param string|null $companyId The unique identifier of the company account this merchant belongs to
     *
     * @return self
     */
    public function setCompanyId($companyId)
    {
        if (is_null($companyId)) {
            throw new \InvalidArgumentException('non-nullable companyId cannot be null');
        }
        $this->container['companyId'] = $companyId;

        return $this;
    }

    /**
     * Gets dataCenters
     *
     * @return \Adyen\Model\Management\DataCenter[]|null
     */
    public function getDataCenters()
    {
        return $this->container['dataCenters'];
    }

    /**
     * Sets dataCenters
     *
     * @param \Adyen\Model\Management\DataCenter[]|null $dataCenters List of available data centers.  Adyen has several data centers around the world.In the URL that you use for making API requests, we recommend you use the live URL prefix from the data center closest to your shoppers.
     *
     * @return self
     */
    public function setDataCenters($dataCenters)
    {
        if (is_null($dataCenters)) {
            throw new \InvalidArgumentException('non-nullable dataCenters cannot be null');
        }
        $this->container['dataCenters'] = $dataCenters;

        return $this;
    }

    /**
     * Gets defaultShopperInteraction
     *
     * @return string|null
     */
    public function getDefaultShopperInteraction()
    {
        return $this->container['defaultShopperInteraction'];
    }

    /**
     * Sets defaultShopperInteraction
     *
     * @param string|null $defaultShopperInteraction The default [`shopperInteraction`](https://docs.adyen.com/api-explorer/#/CheckoutService/v68/post/payments__reqParam_shopperInteraction) value used when processing payments through this merchant account.
     *
     * @return self
     */
    public function setDefaultShopperInteraction($defaultShopperInteraction)
    {
        if (is_null($defaultShopperInteraction)) {
            throw new \InvalidArgumentException('non-nullable defaultShopperInteraction cannot be null');
        }
        $this->container['defaultShopperInteraction'] = $defaultShopperInteraction;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Your description for the merchant account, maximum 300 characters
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier of the merchant account.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchantCity
     *
     * @return string|null
     */
    public function getMerchantCity()
    {
        return $this->container['merchantCity'];
    }

    /**
     * Sets merchantCity
     *
     * @param string|null $merchantCity The city where the legal entity of this merchant account is registered.
     *
     * @return self
     */
    public function setMerchantCity($merchantCity)
    {
        if (is_null($merchantCity)) {
            throw new \InvalidArgumentException('non-nullable merchantCity cannot be null');
        }
        $this->container['merchantCity'] = $merchantCity;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the legal entity associated with the merchant account.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pricingPlan
     *
     * @return string|null
     */
    public function getPricingPlan()
    {
        return $this->container['pricingPlan'];
    }

    /**
     * Sets pricingPlan
     *
     * @param string|null $pricingPlan Only applies to merchant accounts managed by Adyen's partners. The name of the pricing plan assigned to the merchant account.
     *
     * @return self
     */
    public function setPricingPlan($pricingPlan)
    {
        if (is_null($pricingPlan)) {
            throw new \InvalidArgumentException('non-nullable pricingPlan cannot be null');
        }
        $this->container['pricingPlan'] = $pricingPlan;

        return $this;
    }

    /**
     * Gets primarySettlementCurrency
     *
     * @return string|null
     */
    public function getPrimarySettlementCurrency()
    {
        return $this->container['primarySettlementCurrency'];
    }

    /**
     * Sets primarySettlementCurrency
     *
     * @param string|null $primarySettlementCurrency The currency of the country where the legal entity of this merchant account is registered. Format: [ISO currency code](https://docs.adyen.com/development-resources/currency-codes). For example, a legal entity based in the United States has USD as the primary settlement currency.
     *
     * @return self
     */
    public function setPrimarySettlementCurrency($primarySettlementCurrency)
    {
        if (is_null($primarySettlementCurrency)) {
            throw new \InvalidArgumentException('non-nullable primarySettlementCurrency cannot be null');
        }
        $this->container['primarySettlementCurrency'] = $primarySettlementCurrency;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Reference of the merchant account.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets shopWebAddress
     *
     * @return string|null
     */
    public function getShopWebAddress()
    {
        return $this->container['shopWebAddress'];
    }

    /**
     * Sets shopWebAddress
     *
     * @param string|null $shopWebAddress The URL for the ecommerce website used with this merchant account.
     *
     * @return self
     */
    public function setShopWebAddress($shopWebAddress)
    {
        if (is_null($shopWebAddress)) {
            throw new \InvalidArgumentException('non-nullable shopWebAddress cannot be null');
        }
        $this->container['shopWebAddress'] = $shopWebAddress;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the merchant account.  Possible values:  * **PreActive**: The merchant account has been created. Users cannot access the merchant account in the Customer Area. The account cannot process payments. * **Active**: Users can access the merchant account in the Customer Area. If the company account is also **Active**, then payment processing and payouts are enabled. * **InactiveWithModifications**: Users can access the merchant account in the Customer Area. You cannot process new payments but you can still modify payments, for example issue refunds. You can still receive payouts. * **Inactive**: Users can access the merchant account in the Customer Area. Payment processing and payouts are disabled. * **Closed**: The account is closed and this cannot be reversed. Users cannot log in. Payment processing and payouts are disabled.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}