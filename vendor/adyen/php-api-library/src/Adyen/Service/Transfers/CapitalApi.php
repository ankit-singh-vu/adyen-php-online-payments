<?php
/**
 * Transfers API
 *
 * The version of the OpenAPI document: 4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adyen\Service\Transfers;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\Transfers\ObjectSerializer;

class CapitalApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * CapitalApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://balanceplatform-api-test.adyen.com/btl/v4");
    }

    /**
    * Get a capital account
    *
    * @param array|null $requestOptions ['queryParams' => ['counterpartyAccountHolderId'=> string]]
    * @return \Adyen\Model\Transfers\CapitalGrants
    * @throws AdyenException
    */
    public function getCapitalAccount(array $requestOptions = null): \Adyen\Model\Transfers\CapitalGrants
    {
        $endpoint = $this->baseURL . "/grants";
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Transfers\CapitalGrants::class);
    }

    /**
    * Get grant reference details
    *
    * @param string $id
    * @param array|null $requestOptions
    * @return \Adyen\Model\Transfers\CapitalGrant
    * @throws AdyenException
    */
    public function getGrantReferenceDetails(string $id, array $requestOptions = null): \Adyen\Model\Transfers\CapitalGrant
    {
        $endpoint = $this->baseURL . str_replace(['{id}'], [$id], "/grants/{id}");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Transfers\CapitalGrant::class);
    }

    /**
    * Request a grant payout
    *
    * @param \Adyen\Model\Transfers\CapitalGrantInfo $capitalGrantInfo
    * @param array|null $requestOptions
    * @return \Adyen\Model\Transfers\CapitalGrant
    * @throws AdyenException
    */
    public function requestGrantPayout(\Adyen\Model\Transfers\CapitalGrantInfo $capitalGrantInfo, array $requestOptions = null): \Adyen\Model\Transfers\CapitalGrant
    {
        $endpoint = $this->baseURL . "/grants";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $capitalGrantInfo->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Transfers\CapitalGrant::class);
    }
}
