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

namespace Adyen\Service\Management;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\Management\ObjectSerializer;

class AccountCompanyLevelApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * AccountCompanyLevelApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://management-test.adyen.com/v3");
    }

    /**
    * Get a list of company accounts
    *
    * @param array|null $requestOptions ['queryParams' => ['pageNumber'=> int, 'pageSize'=> int]]
    * @return \Adyen\Model\Management\ListCompanyResponse
    * @throws AdyenException
    */
    public function listCompanyAccounts(array $requestOptions = null): \Adyen\Model\Management\ListCompanyResponse
    {
        $endpoint = $this->baseURL . "/companies";
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Management\ListCompanyResponse::class);
    }

    /**
    * Get a company account
    *
    * @param string $companyId
    * @param array|null $requestOptions
    * @return \Adyen\Model\Management\Company
    * @throws AdyenException
    */
    public function getCompanyAccount(string $companyId, array $requestOptions = null): \Adyen\Model\Management\Company
    {
        $endpoint = $this->baseURL . str_replace(['{companyId}'], [$companyId], "/companies/{companyId}");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Management\Company::class);
    }

    /**
    * Get a list of merchant accounts
    *
    * @param string $companyId
    * @param array|null $requestOptions ['queryParams' => ['pageNumber'=> int, 'pageSize'=> int]]
    * @return \Adyen\Model\Management\ListMerchantResponse
    * @throws AdyenException
    */
    public function listMerchantAccounts(string $companyId, array $requestOptions = null): \Adyen\Model\Management\ListMerchantResponse
    {
        $endpoint = $this->baseURL . str_replace(['{companyId}'], [$companyId], "/companies/{companyId}/merchants");
        $response = $this->requestHttp($endpoint, strtolower('GET'), null, $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Management\ListMerchantResponse::class);
    }
}