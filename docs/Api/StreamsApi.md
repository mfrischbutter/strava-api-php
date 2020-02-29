# Swagger\Client\StreamsApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivityStreams**](StreamsApi.md#getActivityStreams) | **GET** /activities/{id}/streams | Get Activity Streams
[**getRouteStreams**](StreamsApi.md#getRouteStreams) | **GET** /routes/{id}/streams | Get Route Streams
[**getSegmentEffortStreams**](StreamsApi.md#getSegmentEffortStreams) | **GET** /segment_efforts/{id}/streams | Get Segment Effort Streams
[**getSegmentStreams**](StreamsApi.md#getSegmentStreams) | **GET** /segments/{id}/streams | Get Segment Streams


# **getActivityStreams**
> \Swagger\Client\Model\StreamSet getActivityStreams($id, $keys, $key_by_type)

Get Activity Streams

Returns the given activity's streams. Requires activity:read scope. Requires activity:read_all scope for Only Me activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the activity.
$keys = array("keys_example"); // string[] | Desired stream types.
$key_by_type = true; // bool | Must be true.

try {
    $result = $apiInstance->getActivityStreams($id, $keys, $key_by_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->getActivityStreams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the activity. |
 **keys** | [**string[]**](../Model/string.md)| Desired stream types. |
 **key_by_type** | **bool**| Must be true. | [default to true]

### Return type

[**\Swagger\Client\Model\StreamSet**](../Model/StreamSet.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRouteStreams**
> \Swagger\Client\Model\StreamSet getRouteStreams($id)

Get Route Streams

Returns the given route's streams. Requires read_all scope for private routes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the route.

try {
    $result = $apiInstance->getRouteStreams($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->getRouteStreams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the route. |

### Return type

[**\Swagger\Client\Model\StreamSet**](../Model/StreamSet.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentEffortStreams**
> \Swagger\Client\Model\StreamSet getSegmentEffortStreams($id, $keys, $key_by_type)

Get Segment Effort Streams

Returns a set of streams for a segment effort completed by the authenticated athlete. Requires read_all scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the segment effort.
$keys = array("keys_example"); // string[] | The types of streams to return.
$key_by_type = true; // bool | Must be true.

try {
    $result = $apiInstance->getSegmentEffortStreams($id, $keys, $key_by_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->getSegmentEffortStreams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the segment effort. |
 **keys** | [**string[]**](../Model/string.md)| The types of streams to return. |
 **key_by_type** | **bool**| Must be true. | [default to true]

### Return type

[**\Swagger\Client\Model\StreamSet**](../Model/StreamSet.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentStreams**
> \Swagger\Client\Model\StreamSet getSegmentStreams($id, $keys, $key_by_type)

Get Segment Streams

Returns the given segment's streams. Requires read_all scope for private segments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the segment.
$keys = array("keys_example"); // string[] | The types of streams to return.
$key_by_type = true; // bool | Must be true.

try {
    $result = $apiInstance->getSegmentStreams($id, $keys, $key_by_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->getSegmentStreams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the segment. |
 **keys** | [**string[]**](../Model/string.md)| The types of streams to return. |
 **key_by_type** | **bool**| Must be true. | [default to true]

### Return type

[**\Swagger\Client\Model\StreamSet**](../Model/StreamSet.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

