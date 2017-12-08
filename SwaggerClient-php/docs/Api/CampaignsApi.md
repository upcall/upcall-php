# Swagger\Client\CampaignsApi

All URIs are relative to *https://api.upcall.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCampaign**](CampaignsApi.md#createCampaign) | **POST** /campaigns | Create a new campaign
[**deleteCampaign**](CampaignsApi.md#deleteCampaign) | **DELETE** /campaigns/{id} | Delete a campaign
[**fetchCampaign**](CampaignsApi.md#fetchCampaign) | **GET** /campaigns/{id} | Get a specific campaign
[**fetchCampaigns**](CampaignsApi.md#fetchCampaigns) | **GET** /campaigns | Get all campaigns
[**updateCampaign**](CampaignsApi.md#updateCampaign) | **PATCH** /campaigns/{id} | Update a campaign


# **createCampaign**
> \Swagger\Client\Model\InlineResponse2001 createCampaign($campaign)

Create a new campaign

Create campaign

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

$api_instance = new Swagger\Client\Api\CampaignsApi();
$campaign = new \Swagger\Client\Model\Campaign(); // \Swagger\Client\Model\Campaign | Campaign data

try {
    $result = $api_instance->createCampaign($campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign** | [**\Swagger\Client\Model\Campaign**](../Model/Campaign.md)| Campaign data |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCampaign**
> deleteCampaign($id)

Delete a campaign

Delete campaign

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

$api_instance = new Swagger\Client\Api\CampaignsApi();
$id = "id_example"; // string | ID of campaign

try {
    $api_instance->deleteCampaign($id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of campaign |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchCampaign**
> \Swagger\Client\Model\InlineResponse2001 fetchCampaign($id)

Get a specific campaign

Fetch a campaign

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

$api_instance = new Swagger\Client\Api\CampaignsApi();
$id = "id_example"; // string | ID of campaign

try {
    $result = $api_instance->fetchCampaign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->fetchCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of campaign |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchCampaigns**
> \Swagger\Client\Model\InlineResponse200 fetchCampaigns($limit, $start_id, $end_id, $name, $status, $language, $min_start_date, $max_start_date, $min_created_datetime, $max_created_datetime, $min_updated_datetime, $max_updated_datetime, $sort)

Get all campaigns

Fetch campaigns

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

$api_instance = new Swagger\Client\Api\CampaignsApi();
$limit = 56; // int | Amount of records to return. 25 by default.
$start_id = 56; // int | Object ID to fetch next page
$end_id = 56; // int | Object ID to fetch previous page
$name = "name_example"; // string | Filter. Filter collection by name
$status = "status_example"; // string | Filter. Filter collection by status
$language = "language_example"; // string | Filter. Filter collection by language
$min_start_date = new \DateTime("2013-10-20"); // \DateTime | Filter. Format: YYYY-MM-DD. Filter collection by min_start_date, required max_start_date too.
$max_start_date = new \DateTime("2013-10-20"); // \DateTime | Filter. Format: YYYY-MM-DD. Filter collection by max_start_date, required mix_start_date too.
$min_created_datetime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by min_created_datetime, required max_created_datetime too.
$max_created_datetime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by max_created_datetime, required min_created_datetime too.
$min_updated_datetime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by min_updated_datetime, required max_updated_datetime too.
$max_updated_datetime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by max_updated_datetime, required min_updated_datetime too.
$sort = "sort_example"; // string | Sort field. Available fields: name, status, kind, created_at, start_date

try {
    $result = $api_instance->fetchCampaigns($limit, $start_id, $end_id, $name, $status, $language, $min_start_date, $max_start_date, $min_created_datetime, $max_created_datetime, $min_updated_datetime, $max_updated_datetime, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->fetchCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Amount of records to return. 25 by default. | [optional]
 **start_id** | **int**| Object ID to fetch next page | [optional]
 **end_id** | **int**| Object ID to fetch previous page | [optional]
 **name** | **string**| Filter. Filter collection by name | [optional]
 **status** | **string**| Filter. Filter collection by status | [optional]
 **language** | **string**| Filter. Filter collection by language | [optional]
 **min_start_date** | **\DateTime**| Filter. Format: YYYY-MM-DD. Filter collection by min_start_date, required max_start_date too. | [optional]
 **max_start_date** | **\DateTime**| Filter. Format: YYYY-MM-DD. Filter collection by max_start_date, required mix_start_date too. | [optional]
 **min_created_datetime** | **\DateTime**| Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by min_created_datetime, required max_created_datetime too. | [optional]
 **max_created_datetime** | **\DateTime**| Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by max_created_datetime, required min_created_datetime too. | [optional]
 **min_updated_datetime** | **\DateTime**| Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by min_updated_datetime, required max_updated_datetime too. | [optional]
 **max_updated_datetime** | **\DateTime**| Filter. Format: YYYY-MM-DDTHH:MM:SS. Filter collection by max_updated_datetime, required min_updated_datetime too. | [optional]
 **sort** | **string**| Sort field. Available fields: name, status, kind, created_at, start_date | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCampaign**
> \Swagger\Client\Model\InlineResponse2001 updateCampaign($id, $campaign)

Update a campaign

Update campaign

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

$api_instance = new Swagger\Client\Api\CampaignsApi();
$id = "id_example"; // string | ID of campaign
$campaign = new \Swagger\Client\Model\Campaign1(); // \Swagger\Client\Model\Campaign1 | Campaign data

try {
    $result = $api_instance->updateCampaign($id, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of campaign |
 **campaign** | [**\Swagger\Client\Model\Campaign1**](../Model/Campaign1.md)| Campaign data |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

