# Swagger\Client\CallsApi

All URIs are relative to *https://api.upcall.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchCalls**](CallsApi.md#fetchCalls) | **GET** /calls | Get all calls
[**fetchCallsForCampaign**](CallsApi.md#fetchCallsForCampaign) | **GET** /campaigns/{id}/calls | Get all calls for a campaign


# **fetchCalls**
> \Swagger\Client\Model\InlineResponse2004 fetchCalls($limit, $start_id, $end_id, $status, $caller_name, $sort)

Get all calls

Fetching calls for company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CallsApi();
$limit = 56; // int | Amount of records to return. 25 by default.
$start_id = 56; // int | Object ID to fetch next page
$end_id = 56; // int | Object ID to fetch previous page
$status = "status_example"; // string | Filter. Filter collection by status
$caller_name = "caller_name_example"; // string | Filter. Filter collection by caller name
$sort = "sort_example"; // string | Sort field. Available fields: status, called_at

try {
    $result = $api_instance->fetchCalls($limit, $start_id, $end_id, $status, $caller_name, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->fetchCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Amount of records to return. 25 by default. | [optional]
 **start_id** | **int**| Object ID to fetch next page | [optional]
 **end_id** | **int**| Object ID to fetch previous page | [optional]
 **status** | **string**| Filter. Filter collection by status | [optional]
 **caller_name** | **string**| Filter. Filter collection by caller name | [optional]
 **sort** | **string**| Sort field. Available fields: status, called_at | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchCallsForCampaign**
> \Swagger\Client\Model\InlineResponse2004 fetchCallsForCampaign($id, $limit, $start_id, $end_id, $status, $caller_name, $sort)

Get all calls for a campaign

Fetching calls for campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | ID of campaign
$limit = 56; // int | Amount of records to return. 25 by default.
$start_id = 56; // int | Object ID to fetch next page
$end_id = 56; // int | Object ID to fetch previous page
$status = "status_example"; // string | Filter. Filter collection by status
$caller_name = "caller_name_example"; // string | Filter. Filter collection by caller name
$sort = "sort_example"; // string | Sort field. Available fields: status, called_at

try {
    $result = $api_instance->fetchCallsForCampaign($id, $limit, $start_id, $end_id, $status, $caller_name, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->fetchCallsForCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of campaign |
 **limit** | **int**| Amount of records to return. 25 by default. | [optional]
 **start_id** | **int**| Object ID to fetch next page | [optional]
 **end_id** | **int**| Object ID to fetch previous page | [optional]
 **status** | **string**| Filter. Filter collection by status | [optional]
 **caller_name** | **string**| Filter. Filter collection by caller name | [optional]
 **sort** | **string**| Sort field. Available fields: status, called_at | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

