<?php
/**
 * AnswersApi
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
 * AnswersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AnswersApi
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
     * @return AnswersApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation fetchContactAnswers
     *
     * Get contact's answers
     *
     * @param string $id ID of contact (required)
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @param string $result Filter. Filter collection by result (optional)
     * @param string $sort Sort field. Available fields: answer_type, created_at (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2005
     */
    public function fetchContactAnswers($id, $limit = null, $start_id = null, $end_id = null, $result = null, $sort = null)
    {
        list($response) = $this->fetchContactAnswersWithHttpInfo($id, $limit, $start_id, $end_id, $result, $sort);
        return $response;
    }

    /**
     * Operation fetchContactAnswersWithHttpInfo
     *
     * Get contact's answers
     *
     * @param string $id ID of contact (required)
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @param string $result Filter. Filter collection by result (optional)
     * @param string $sort Sort field. Available fields: answer_type, created_at (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchContactAnswersWithHttpInfo($id, $limit = null, $start_id = null, $end_id = null, $result = null, $sort = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling fetchContactAnswers');
        }
        // parse inputs
        $resourcePath = "/contacts/{id}/answers";
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
        if ($result !== null) {
            $queryParams['result'] = $this->apiClient->getSerializer()->toQueryValue($result);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
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
                '\Swagger\Client\Model\InlineResponse2005',
                '/contacts/{id}/answers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2005', $e->getResponseHeaders());
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
     * Operation fetchQuestionAnswers
     *
     * Get question's answers
     *
     * @param string $id ID of question (required)
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @param string $result Filter. Filter collection by result (optional)
     * @param string $sort Sort field. Available fields: created_at (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2005
     */
    public function fetchQuestionAnswers($id, $limit = null, $start_id = null, $end_id = null, $result = null, $sort = null)
    {
        list($response) = $this->fetchQuestionAnswersWithHttpInfo($id, $limit, $start_id, $end_id, $result, $sort);
        return $response;
    }

    /**
     * Operation fetchQuestionAnswersWithHttpInfo
     *
     * Get question's answers
     *
     * @param string $id ID of question (required)
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @param string $result Filter. Filter collection by result (optional)
     * @param string $sort Sort field. Available fields: created_at (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchQuestionAnswersWithHttpInfo($id, $limit = null, $start_id = null, $end_id = null, $result = null, $sort = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling fetchQuestionAnswers');
        }
        // parse inputs
        $resourcePath = "/questions/{id}/answers";
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
        if ($result !== null) {
            $queryParams['result'] = $this->apiClient->getSerializer()->toQueryValue($result);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
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
                '\Swagger\Client\Model\InlineResponse2005',
                '/questions/{id}/answers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2005', $e->getResponseHeaders());
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
