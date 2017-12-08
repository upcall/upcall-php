# Swagger\Client\ContactsApi

All URIs are relative to *https://api.upcall.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContact**](ContactsApi.md#createContact) | **POST** /campaigns/{id}/contacts | Add a contact to a campaign
[**deleteContact**](ContactsApi.md#deleteContact) | **DELETE** /contacts/{id} | Delete contact
[**fetchContacts**](ContactsApi.md#fetchContacts) | **GET** /campaigns/{id}/contacts | Get contacts for a campaign
[**fetchCustomFields**](ContactsApi.md#fetchCustomFields) | **GET** /contacts/{id}/custom_fields | Get custom fields
[**fetchSpecificContact**](ContactsApi.md#fetchSpecificContact) | **GET** /contacts/{id} | Get a specific contact
[**updateContact**](ContactsApi.md#updateContact) | **PATCH** /contacts/{id} | Update a contact


# **createContact**
> \Swagger\Client\Model\InlineResponse2003 createContact($id, $contact, $custom_fields)

Add a contact to a campaign

Create contact for campaign

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | ID of campaign
$contact = new \Swagger\Client\Model\Contact(); // \Swagger\Client\Model\Contact | Contact data
$custom_fields = true; // bool | If set, custom fields will be displayed in the output

try {
    $result = $api_instance->createContact($id, $contact, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of campaign |
 **contact** | [**\Swagger\Client\Model\Contact**](../Model/Contact.md)| Contact data |
 **custom_fields** | **bool**| If set, custom fields will be displayed in the output | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> deleteContact($id)

Delete contact

Delete contact

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | ID of contact to delete

try {
    $api_instance->deleteContact($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of contact to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchContacts**
> \Swagger\Client\Model\InlineResponse2002 fetchContacts($id, $limit, $start_id, $end_id, $first_name, $last_name, $company, $name, $field_id, $urgency, $status, $phone, $email, $sort, $custom_fields, $answers)

Get contacts for a campaign

Fetching contacts for campaign

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | ID of campaign
$limit = 56; // int | Amount of records to return. 25 by default.
$start_id = 56; // int | Object ID to fetch next page
$end_id = 56; // int | Object ID to fetch previous page
$first_name = "first_name_example"; // string | Filter. Filter collection by first_name
$last_name = "last_name_example"; // string | Filter. Filter collection by last_name
$company = "company_example"; // string | Filter. Filter collection by company
$name = "name_example"; // string | Filter. Filter collection by name
$field_id = "field_id_example"; // string | Filter. Filter collection by field_id
$urgency = "urgency_example"; // string | Filter. Filter collection by urgency
$status = "status_example"; // string | Filter. Filter collection by status
$phone = "phone_example"; // string | Filter. Filter collection by phone
$email = "email_example"; // string | Filter. Filter collection by email
$sort = "sort_example"; // string | Sort field. Available fields: last_name, first_name, company, calls.status                              calls.called_at, calls.caller.user.first_name, calls.caller.user.last_name, urgency
$custom_fields = true; // bool | If set, custom fields will be displayed in the output
$answers = true; // bool | If set, question/answer pairs will be displayed in the output

try {
    $result = $api_instance->fetchContacts($id, $limit, $start_id, $end_id, $first_name, $last_name, $company, $name, $field_id, $urgency, $status, $phone, $email, $sort, $custom_fields, $answers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchContacts: ', $e->getMessage(), PHP_EOL;
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
 **first_name** | **string**| Filter. Filter collection by first_name | [optional]
 **last_name** | **string**| Filter. Filter collection by last_name | [optional]
 **company** | **string**| Filter. Filter collection by company | [optional]
 **name** | **string**| Filter. Filter collection by name | [optional]
 **field_id** | **string**| Filter. Filter collection by field_id | [optional]
 **urgency** | **string**| Filter. Filter collection by urgency | [optional]
 **status** | **string**| Filter. Filter collection by status | [optional]
 **phone** | **string**| Filter. Filter collection by phone | [optional]
 **email** | **string**| Filter. Filter collection by email | [optional]
 **sort** | **string**| Sort field. Available fields: last_name, first_name, company, calls.status                              calls.called_at, calls.caller.user.first_name, calls.caller.user.last_name, urgency | [optional]
 **custom_fields** | **bool**| If set, custom fields will be displayed in the output | [optional]
 **answers** | **bool**| If set, question/answer pairs will be displayed in the output | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchCustomFields**
> \Swagger\Client\Model\InlineResponse2006 fetchCustomFields($id, $limit, $start_id, $end_id)

Get custom fields

Fetching custom fields for contact

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | ID of contact
$limit = 56; // int | Amount of records to return. 25 by default.
$start_id = 56; // int | Object ID to fetch next page
$end_id = 56; // int | Object ID to fetch previous page

try {
    $result = $api_instance->fetchCustomFields($id, $limit, $start_id, $end_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchCustomFields: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchSpecificContact**
> \Swagger\Client\Model\InlineResponse2003 fetchSpecificContact($id, $custom_fields)

Get a specific contact

Fetch specific contact

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | ID of contact to fetch
$custom_fields = true; // bool | If set, custom fields will be displayed in the output

try {
    $result = $api_instance->fetchSpecificContact($id, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchSpecificContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of contact to fetch |
 **custom_fields** | **bool**| If set, custom fields will be displayed in the output | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \Swagger\Client\Model\InlineResponse2003 updateContact($id, $contact, $custom_fields)

Update a contact

Update contact

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | ID of contact to update
$contact = new \Swagger\Client\Model\Contact1(); // \Swagger\Client\Model\Contact1 | Contact data
$custom_fields = true; // bool | If set, custom fields will be displayed in the output

try {
    $result = $api_instance->updateContact($id, $contact, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of contact to update |
 **contact** | [**\Swagger\Client\Model\Contact1**](../Model/Contact1.md)| Contact data |
 **custom_fields** | **bool**| If set, custom fields will be displayed in the output | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

