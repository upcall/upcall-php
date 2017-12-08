# Swagger\Client\AnswersApi

All URIs are relative to *https://api.upcall.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchContactAnswers**](AnswersApi.md#fetchContactAnswers) | **GET** /contacts/{id}/answers | Get contact&#39;s answers
[**fetchQuestionAnswers**](AnswersApi.md#fetchQuestionAnswers) | **GET** /questions/{id}/answers | Get question&#39;s answers


# **fetchContactAnswers**
> \Swagger\Client\Model\InlineResponse2005 fetchContactAnswers($id, $limit, $start_id, $end_id, $result, $sort)

Get contact's answers

Fetching answers for contact

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

$api_instance = new Swagger\Client\Api\AnswersApi();
$id = "id_example"; // string | ID of contact
$limit = 56; // int | Amount of records to return. 25 by default.
$start_id = 56; // int | Object ID to fetch next page
$end_id = 56; // int | Object ID to fetch previous page
$result = "result_example"; // string | Filter. Filter collection by result
$sort = "sort_example"; // string | Sort field. Available fields: answer_type, created_at

try {
    $result = $api_instance->fetchContactAnswers($id, $limit, $start_id, $end_id, $result, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswersApi->fetchContactAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of contact |
 **limit** | **int**| Amount of records to return. 25 by default. | [optional]
 **start_id** | **int**| Object ID to fetch next page | [optional]
 **end_id** | **int**| Object ID to fetch previous page | [optional]
 **result** | **string**| Filter. Filter collection by result | [optional]
 **sort** | **string**| Sort field. Available fields: answer_type, created_at | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchQuestionAnswers**
> \Swagger\Client\Model\InlineResponse2005 fetchQuestionAnswers($id, $limit, $start_id, $end_id, $result, $sort)

Get question's answers

Fetching answers for question

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

$api_instance = new Swagger\Client\Api\AnswersApi();
$id = "id_example"; // string | ID of question
$limit = 56; // int | Amount of records to return. 25 by default.
$start_id = 56; // int | Object ID to fetch next page
$end_id = 56; // int | Object ID to fetch previous page
$result = "result_example"; // string | Filter. Filter collection by result
$sort = "sort_example"; // string | Sort field. Available fields: created_at

try {
    $result = $api_instance->fetchQuestionAnswers($id, $limit, $start_id, $end_id, $result, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswersApi->fetchQuestionAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of question |
 **limit** | **int**| Amount of records to return. 25 by default. | [optional]
 **start_id** | **int**| Object ID to fetch next page | [optional]
 **end_id** | **int**| Object ID to fetch previous page | [optional]
 **result** | **string**| Filter. Filter collection by result | [optional]
 **sort** | **string**| Sort field. Available fields: created_at | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

