<?php
/**
 * CampaignsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Upcall API
 *
 * A RESTful API (json) to manage your human-powered outbound call campaigns.
 *
 * OpenAPI spec version: 2
 * Contact: support@upcall.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * CampaignsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignsApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return CampaignsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createCampaign
     *
     * Create a new campaign
     *
     * @param \Swagger\Client\Model\Campaign $campaign Campaign data (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function createCampaign($campaign)
    {
        list($response) = $this->createCampaignWithHttpInfo($campaign);
        return $response;
    }

    /**
     * Operation createCampaignWithHttpInfo
     *
     * Create a new campaign
     *
     * @param \Swagger\Client\Model\Campaign $campaign Campaign data (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCampaignWithHttpInfo($campaign)
    {
        // verify the required parameter 'campaign' is set
        if ($campaign === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign when calling createCampaign');
        }
        // parse inputs
        $resourcePath = "/campaigns";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($campaign)) {
            $_tempBody = $campaign;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['Token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2001',
                '/campaigns'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteCampaign
     *
     * Delete a campaign
     *
     * @param string $id ID of campaign (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteCampaign($id)
    {
        list($response) = $this->deleteCampaignWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteCampaignWithHttpInfo
     *
     * Delete a campaign
     *
     * @param string $id ID of campaign (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCampaignWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteCampaign');
        }
        // parse inputs
        $resourcePath = "/campaigns/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['Token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/campaigns/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation fetchCampaign
     *
     * Get a specific campaign
     *
     * @param string $id ID of campaign (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function fetchCampaign($id)
    {
        list($response) = $this->fetchCampaignWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation fetchCampaignWithHttpInfo
     *
     * Get a specific campaign
     *
     * @param string $id ID of campaign (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchCampaignWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling fetchCampaign');
        }
        // parse inputs
        $resourcePath = "/campaigns/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['Token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2001',
                '/campaigns/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation fetchCampaigns
     *
     * Get all campaigns
     *
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @param string $name Filter. Filter collection by name (optional)
     * @param string $status Filter. Filter collection by status (optional)
     * @param string $language Filter. Filter collection by language (optional)
     * @param \DateTime $min_start_date Filter. Format: YYYY-MM-DD. Filter collection by min_start_date, required max_start_date too. (optional)
     * @param \DateTime $max_start_date Filter. Format: YYYY-MM-DD. Filter collection by max_start_date, required mix_start_date too. (optional)
     * @param \DateTime $min_created_datetime Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by min_created_datetime, required max_created_datetime too. (optional)
     * @param \DateTime $max_created_datetime Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by max_created_datetime, required min_created_datetime too. (optional)
     * @param \DateTime $min_updated_datetime Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by min_updated_datetime, required max_updated_datetime too. (optional)
     * @param \DateTime $max_updated_datetime Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by max_updated_datetime, required min_updated_datetime too. (optional)
     * @param string $sort Sort field. Available fields: name, status, kind, created_at, start_date (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse200
     */
    public function fetchCampaigns($limit = null, $start_id = null, $end_id = null, $name = null, $status = null, $language = null, $min_start_date = null, $max_start_date = null, $min_created_datetime = null, $max_created_datetime = null, $min_updated_datetime = null, $max_updated_datetime = null, $sort = null)
    {
        list($response) = $this->fetchCampaignsWithHttpInfo($limit, $start_id, $end_id, $name, $status, $language, $min_start_date, $max_start_date, $min_created_datetime, $max_created_datetime, $min_updated_datetime, $max_updated_datetime, $sort);
        return $response;
    }

    /**
     * Operation fetchCampaignsWithHttpInfo
     *
     * Get all campaigns
     *
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @param string $name Filter. Filter collection by name (optional)
     * @param string $status Filter. Filter collection by status (optional)
     * @param string $language Filter. Filter collection by language (optional)
     * @param \DateTime $min_start_date Filter. Format: YYYY-MM-DD. Filter collection by min_start_date, required max_start_date too. (optional)
     * @param \DateTime $max_start_date Filter. Format: YYYY-MM-DD. Filter collection by max_start_date, required mix_start_date too. (optional)
     * @param \DateTime $min_created_datetime Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by min_created_datetime, required max_created_datetime too. (optional)
     * @param \DateTime $max_created_datetime Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by max_created_datetime, required min_created_datetime too. (optional)
     * @param \DateTime $min_updated_datetime Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by min_updated_datetime, required max_updated_datetime too. (optional)
     * @param \DateTime $max_updated_datetime Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by max_updated_datetime, required min_updated_datetime too. (optional)
     * @param string $sort Sort field. Available fields: name, status, kind, created_at, start_date (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchCampaignsWithHttpInfo($limit = null, $start_id = null, $end_id = null, $name = null, $status = null, $language = null, $min_start_date = null, $max_start_date = null, $min_created_datetime = null, $max_created_datetime = null, $min_updated_datetime = null, $max_updated_datetime = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/campaigns";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($start_id !== null) {
            $queryParams['start_id'] = $this->apiClient->getSerializer()->toQueryValue($start_id);
        }
        // query params
        if ($end_id !== null) {
            $queryParams['end_id'] = $this->apiClient->getSerializer()->toQueryValue($end_id);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($min_start_date !== null) {
            $queryParams['min_start_date'] = $this->apiClient->getSerializer()->toQueryValue($min_start_date);
        }
        // query params
        if ($max_start_date !== null) {
            $queryParams['max_start_date'] = $this->apiClient->getSerializer()->toQueryValue($max_start_date);
        }
        // query params
        if ($min_created_datetime !== null) {
            $queryParams['min_created_datetime'] = $this->apiClient->getSerializer()->toQueryValue($min_created_datetime);
        }
        // query params
        if ($max_created_datetime !== null) {
            $queryParams['max_created_datetime'] = $this->apiClient->getSerializer()->toQueryValue($max_created_datetime);
        }
        // query params
        if ($min_updated_datetime !== null) {
            $queryParams['min_updated_datetime'] = $this->apiClient->getSerializer()->toQueryValue($min_updated_datetime);
        }
        // query params
        if ($max_updated_datetime !== null) {
            $queryParams['max_updated_datetime'] = $this->apiClient->getSerializer()->toQueryValue($max_updated_datetime);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['Token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse200',
                '/campaigns'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateCampaign
     *
     * Update a campaign
     *
     * @param string $id ID of campaign (required)
     * @param \Swagger\Client\Model\Campaign1 $campaign Campaign data (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function updateCampaign($id, $campaign)
    {
        list($response) = $this->updateCampaignWithHttpInfo($id, $campaign);
        return $response;
    }

    /**
     * Operation updateCampaignWithHttpInfo
     *
     * Update a campaign
     *
     * @param string $id ID of campaign (required)
     * @param \Swagger\Client\Model\Campaign1 $campaign Campaign data (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCampaignWithHttpInfo($id, $campaign)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateCampaign');
        }
        // verify the required parameter 'campaign' is set
        if ($campaign === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign when calling updateCampaign');
        }
        // parse inputs
        $resourcePath = "/campaigns/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($campaign)) {
            $_tempBody = $campaign;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['Token'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2001',
                '/campaigns/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
