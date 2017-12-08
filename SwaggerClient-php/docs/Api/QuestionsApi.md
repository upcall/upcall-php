# Swagger\Client\QuestionsApi

All URIs are relative to *https://api.upcall.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchCampaignQuestions**](QuestionsApi.md#fetchCampaignQuestions) | **GET** /campaigns/{id}/questions | Get campaign&#39;s questions


# **fetchCampaignQuestions**
> \Swagger\Client\Model\InlineResponse20010 fetchCampaignQuestions($id, $limit, $start_id, $end_id)

Get campaign's questions

Fetching questions for campaign

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

$api_instance = new Swagger\Client\Api\QuestionsApi();
$id = "id_example"; // string | ID of campaign
$limit = 56; // int | Amount of records to return. 25 by default.
$start_id = 56; // int | Object ID to fetch next page
$end_id = 56; // int | Object ID to fetch previous page

try {
    $result = $api_instance->fetchCampaignQuestions($id, $limit, $start_id, $end_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionsApi->fetchCampaignQuestions: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

