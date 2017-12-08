<?php
/**
 * ContactsApi
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
 * ContactsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactsApi
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
     * @return ContactsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createContact
     *
     * Add a contact to a campaign
     *
     * @param string $id ID of campaign (required)
     * @param \Swagger\Client\Model\Contact $contact Contact data (required)
     * @param bool $custom_fields If set, custom fields will be displayed in the output (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2003
     */
    public function createContact($id, $contact, $custom_fields = null)
    {
        list($response) = $this->createContactWithHttpInfo($id, $contact, $custom_fields);
        return $response;
    }

    /**
     * Operation createContactWithHttpInfo
     *
     * Add a contact to a campaign
     *
     * @param string $id ID of campaign (required)
     * @param \Swagger\Client\Model\Contact $contact Contact data (required)
     * @param bool $custom_fields If set, custom fields will be displayed in the output (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function createContactWithHttpInfo($id, $contact, $custom_fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling createContact');
        }
        // verify the required parameter 'contact' is set
        if ($contact === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact when calling createContact');
        }
        // parse inputs
        $resourcePath = "/campaigns/{id}/contacts";
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
        if ($custom_fields !== null) {
            $queryParams['custom_fields'] = $this->apiClient->getSerializer()->toQueryValue($custom_fields);
        }
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
        if (isset($contact)) {
            $_tempBody = $contact;
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
                '\Swagger\Client\Model\InlineResponse2003',
                '/campaigns/{id}/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2003', $e->getResponseHeaders());
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
     * Operation deleteContact
     *
     * Delete contact
     *
     * @param string $id ID of contact to delete (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteContact($id)
    {
        list($response) = $this->deleteContactWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteContactWithHttpInfo
     *
     * Delete contact
     *
     * @param string $id ID of contact to delete (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteContactWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteContact');
        }
        // parse inputs
        $resourcePath = "/contacts/{id}";
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
                '/contacts/{id}'
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
     * Operation fetchContacts
     *
     * Get contacts for a campaign
     *
     * @param string $id ID of campaign (required)
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @param string $first_name Filter. Filter collection by first_name (optional)
     * @param string $last_name Filter. Filter collection by last_name (optional)
     * @param string $company Filter. Filter collection by company (optional)
     * @param string $name Filter. Filter collection by name (optional)
     * @param string $field_id Filter. Filter collection by field_id (optional)
     * @param string $urgency Filter. Filter collection by urgency (optional)
     * @param string $status Filter. Filter collection by status (optional)
     * @param string $phone Filter. Filter collection by phone (optional)
     * @param string $email Filter. Filter collection by email (optional)
     * @param string $sort Sort field. Available fields: last_name, first_name, company, calls.status                              calls.called_at, calls.caller.user.first_name, calls.caller.user.last_name, urgency (optional)
     * @param bool $custom_fields If set, custom fields will be displayed in the output (optional)
     * @param bool $answers If set, question/answer pairs will be displayed in the output (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2002
     */
    public function fetchContacts($id, $limit = null, $start_id = null, $end_id = null, $first_name = null, $last_name = null, $company = null, $name = null, $field_id = null, $urgency = null, $status = null, $phone = null, $email = null, $sort = null, $custom_fields = null, $answers = null)
    {
        list($response) = $this->fetchContactsWithHttpInfo($id, $limit, $start_id, $end_id, $first_name, $last_name, $company, $name, $field_id, $urgency, $status, $phone, $email, $sort, $custom_fields, $answers);
        return $response;
    }

    /**
     * Operation fetchContactsWithHttpInfo
     *
     * Get contacts for a campaign
     *
     * @param string $id ID of campaign (required)
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @param string $first_name Filter. Filter collection by first_name (optional)
     * @param string $last_name Filter. Filter collection by last_name (optional)
     * @param string $company Filter. Filter collection by company (optional)
     * @param string $name Filter. Filter collection by name (optional)
     * @param string $field_id Filter. Filter collection by field_id (optional)
     * @param string $urgency Filter. Filter collection by urgency (optional)
     * @param string $status Filter. Filter collection by status (optional)
     * @param string $phone Filter. Filter collection by phone (optional)
     * @param string $email Filter. Filter collection by email (optional)
     * @param string $sort Sort field. Available fields: last_name, first_name, company, calls.status                              calls.called_at, calls.caller.user.first_name, calls.caller.user.last_name, urgency (optional)
     * @param bool $custom_fields If set, custom fields will be displayed in the output (optional)
     * @param bool $answers If set, question/answer pairs will be displayed in the output (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchContactsWithHttpInfo($id, $limit = null, $start_id = null, $end_id = null, $first_name = null, $last_name = null, $company = null, $name = null, $field_id = null, $urgency = null, $status = null, $phone = null, $email = null, $sort = null, $custom_fields = null, $answers = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling fetchContacts');
        }
        // parse inputs
        $resourcePath = "/campaigns/{id}/contacts";
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
        if ($first_name !== null) {
            $queryParams['first_name'] = $this->apiClient->getSerializer()->toQueryValue($first_name);
        }
        // query params
        if ($last_name !== null) {
            $queryParams['last_name'] = $this->apiClient->getSerializer()->toQueryValue($last_name);
        }
        // query params
        if ($company !== null) {
            $queryParams['company'] = $this->apiClient->getSerializer()->toQueryValue($company);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }
        // query params
        if ($field_id !== null) {
            $queryParams['field_id'] = $this->apiClient->getSerializer()->toQueryValue($field_id);
        }
        // query params
        if ($urgency !== null) {
            $queryParams['urgency'] = $this->apiClient->getSerializer()->toQueryValue($urgency);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = $this->apiClient->getSerializer()->toQueryValue($phone);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($custom_fields !== null) {
            $queryParams['custom_fields'] = $this->apiClient->getSerializer()->toQueryValue($custom_fields);
        }
        // query params
        if ($answers !== null) {
            $queryParams['answers'] = $this->apiClient->getSerializer()->toQueryValue($answers);
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
                '\Swagger\Client\Model\InlineResponse2002',
                '/campaigns/{id}/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
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
     * Operation fetchCustomFields
     *
     * Get custom fields
     *
     * @param string $id ID of contact (required)
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2006
     */
    public function fetchCustomFields($id, $limit = null, $start_id = null, $end_id = null)
    {
        list($response) = $this->fetchCustomFieldsWithHttpInfo($id, $limit, $start_id, $end_id);
        return $response;
    }

    /**
     * Operation fetchCustomFieldsWithHttpInfo
     *
     * Get custom fields
     *
     * @param string $id ID of contact (required)
     * @param int $limit Amount of records to return. 25 by default. (optional)
     * @param int $start_id Object ID to fetch next page (optional)
     * @param int $end_id Object ID to fetch previous page (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchCustomFieldsWithHttpInfo($id, $limit = null, $start_id = null, $end_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling fetchCustomFields');
        }
        // parse inputs
        $resourcePath = "/contacts/{id}/custom_fields";
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
                '\Swagger\Client\Model\InlineResponse2006',
                '/contacts/{id}/custom_fields'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2006', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2006', $e->getResponseHeaders());
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
     * Operation fetchSpecificContact
     *
     * Get a specific contact
     *
     * @param string $id ID of contact to fetch (required)
     * @param bool $custom_fields If set, custom fields will be displayed in the output (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2003
     */
    public function fetchSpecificContact($id, $custom_fields = null)
    {
        list($response) = $this->fetchSpecificContactWithHttpInfo($id, $custom_fields);
        return $response;
    }

    /**
     * Operation fetchSpecificContactWithHttpInfo
     *
     * Get a specific contact
     *
     * @param string $id ID of contact to fetch (required)
     * @param bool $custom_fields If set, custom fields will be displayed in the output (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchSpecificContactWithHttpInfo($id, $custom_fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling fetchSpecificContact');
        }
        // parse inputs
        $resourcePath = "/contacts/{id}";
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
        if ($custom_fields !== null) {
            $queryParams['custom_fields'] = $this->apiClient->getSerializer()->toQueryValue($custom_fields);
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
                '\Swagger\Client\Model\InlineResponse2003',
                '/contacts/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2003', $e->getResponseHeaders());
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
     * Operation updateContact
     *
     * Update a contact
     *
     * @param string $id ID of contact to update (required)
     * @param \Swagger\Client\Model\Contact1 $contact Contact data (required)
     * @param bool $custom_fields If set, custom fields will be displayed in the output (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2003
     */
    public function updateContact($id, $contact, $custom_fields = null)
    {
        list($response) = $this->updateContactWithHttpInfo($id, $contact, $custom_fields);
        return $response;
    }

    /**
     * Operation updateContactWithHttpInfo
     *
     * Update a contact
     *
     * @param string $id ID of contact to update (required)
     * @param \Swagger\Client\Model\Contact1 $contact Contact data (required)
     * @param bool $custom_fields If set, custom fields will be displayed in the output (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateContactWithHttpInfo($id, $contact, $custom_fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateContact');
        }
        // verify the required parameter 'contact' is set
        if ($contact === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact when calling updateContact');
        }
        // parse inputs
        $resourcePath = "/contacts/{id}";
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
        if ($custom_fields !== null) {
            $queryParams['custom_fields'] = $this->apiClient->getSerializer()->toQueryValue($custom_fields);
        }
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
        if (isset($contact)) {
            $_tempBody = $contact;
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
                '\Swagger\Client\Model\InlineResponse2003',
                '/contacts/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2003', $e->getResponseHeaders());
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