# Swagger\Client\PinPointApi

All URIs are relative to *https://pinpoint.apc-overnight.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getByIdentifier**](PinPointApi.md#getbyidentifier) | **GET** /getConsignment/{Identifier} | Retrieve PinPoint Data based on a 22 Digit Identifier.
[**getbyConsignmentAndPostcode**](PinPointApi.md#getbyconsignmentandpostcode) | **GET** /getConsignment/{consignment}/{postcode} | Retrieve PinPoint DepotInformation based on a Postcode and Consignment number

# **getByIdentifier**
> \Swagger\Client\Model\PinPointData getByIdentifier($identifier)

Retrieve PinPoint Data based on a 22 Digit Identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PinPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | 

try {
    $result = $apiInstance->getByIdentifier($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PinPointApi->getByIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**|  |

### Return type

[**\Swagger\Client\Model\PinPointData**](../Model/PinPointData.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getbyConsignmentAndPostcode**
> \Swagger\Client\Model\PinPointData getbyConsignmentAndPostcode($consignment, $postcode)

Retrieve PinPoint DepotInformation based on a Postcode and Consignment number

Sample request:                    Get /consignment/postode      {         \"id\": 1,         \"name\": \"Item1\",         \"isComplete\": true      }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PinPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consignment = "consignment_example"; // string | 7 digit consignment number
$postcode = "postcode_example"; // string | valid UK Postcode

try {
    $result = $apiInstance->getbyConsignmentAndPostcode($consignment, $postcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PinPointApi->getbyConsignmentAndPostcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignment** | **string**| 7 digit consignment number |
 **postcode** | **string**| valid UK Postcode |

### Return type

[**\Swagger\Client\Model\PinPointData**](../Model/PinPointData.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

