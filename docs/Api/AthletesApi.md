# Swagger\Client\AthletesApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLoggedInAthlete**](AthletesApi.md#getLoggedInAthlete) | **GET** /athlete | Get Authenticated Athlete
[**getLoggedInAthleteZones**](AthletesApi.md#getLoggedInAthleteZones) | **GET** /athlete/zones | Get Zones
[**getStats**](AthletesApi.md#getStats) | **GET** /athletes/{id}/stats | Get Athlete Stats
[**updateLoggedInAthlete**](AthletesApi.md#updateLoggedInAthlete) | **PUT** /athlete | Update Athlete


# **getLoggedInAthlete**
> \Swagger\Client\Model\DetailedAthlete getLoggedInAthlete()

Get Authenticated Athlete

Returns the currently authenticated athlete. Tokens with profile:read_all scope will receive a detailed athlete representation; all others will receive a summary representation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AthletesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLoggedInAthlete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthletesApi->getLoggedInAthlete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DetailedAthlete**](../Model/DetailedAthlete.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedInAthleteZones**
> \Swagger\Client\Model\Zones getLoggedInAthleteZones()

Get Zones

Returns the the authenticated athlete's heart rate and power zones. Requires profile:read_all.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AthletesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLoggedInAthleteZones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthletesApi->getLoggedInAthleteZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Zones**](../Model/Zones.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStats**
> \Swagger\Client\Model\ActivityStats getStats($id)

Get Athlete Stats

Returns the activity stats of an athlete. Only includes data from activities set to Everyone visibilty.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AthletesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the athlete. Must match the authenticated athlete.

try {
    $result = $apiInstance->getStats($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthletesApi->getStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the athlete. Must match the authenticated athlete. |

### Return type

[**\Swagger\Client\Model\ActivityStats**](../Model/ActivityStats.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoggedInAthlete**
> \Swagger\Client\Model\DetailedAthlete updateLoggedInAthlete($weight)

Update Athlete

Update the currently authenticated athlete. Requires profile:write scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AthletesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$weight = 3.4; // float | The weight of the athlete in kilograms.

try {
    $result = $apiInstance->updateLoggedInAthlete($weight);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthletesApi->updateLoggedInAthlete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **weight** | **float**| The weight of the athlete in kilograms. |

### Return type

[**\Swagger\Client\Model\DetailedAthlete**](../Model/DetailedAthlete.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

