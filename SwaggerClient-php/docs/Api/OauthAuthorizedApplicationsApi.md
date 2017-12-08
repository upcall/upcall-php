# Swagger\Client\OauthAuthorizedApplicationsApi

All URIs are relative to *https://api.upcall.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchOauthAuthorizedApplications**](OauthAuthorizedApplicationsApi.md#fetchOauthAuthorizedApplications) | **GET** /oauth/authorized_applications | 
[**revokeOauthAuthorizedApplication**](OauthAuthorizedApplicationsApi.md#revokeOauthAuthorizedApplication) | **DELETE** /oauth/authorized_applications/{id} | 


# **fetchOauthAuthorizedApplications**
> \Swagger\Client\Model\InlineResponse2009 fetchOauthAuthorizedApplications()



Fetch Oauth authorized applications

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

$api_instance = new Swagger\Client\Api\OauthAuthorizedApplicationsApi();

try {
    $result = $api_instance->fetchOauthAuthorizedApplications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthAuthorizedApplicationsApi->fetchOauthAuthorizedApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeOauthAuthorizedApplication**
> revokeOauthAuthorizedApplication($id)



Revoke Oauth authorized application

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

$api_instance = new Swagger\Client\Api\OauthAuthorizedApplicationsApi();
$id = "id_example"; // string | ID of authorized application

try {
    $api_instance->revokeOauthAuthorizedApplication($id);
} catch (Exception $e) {
    echo 'Exception when calling OauthAuthorizedApplicationsApi->revokeOauthAuthorizedApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of authorized application |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

