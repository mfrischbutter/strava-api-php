# Swagger\Client\RunningRacesApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRunningRaceById**](RunningRacesApi.md#getRunningRaceById) | **GET** /running_races/{id} | Get Running Race
[**getRunningRaces**](RunningRacesApi.md#getRunningRaces) | **GET** /running_races | List Running Races


# **getRunningRaceById**
> \Swagger\Client\Model\RunningRace getRunningRaceById($id)

Get Running Race

Returns a running race for a given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RunningRacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the running race.

try {
    $result = $apiInstance->getRunningRaceById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunningRacesApi->getRunningRaceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the running race. |

### Return type

[**\Swagger\Client\Model\RunningRace**](../Model/RunningRace.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRunningRaces**
> \Swagger\Client\Model\RunningRace[] getRunningRaces($year)

List Running Races

Returns a list running races based on a set of search criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RunningRacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Filters the list by a given year.

try {
    $result = $apiInstance->getRunningRaces($year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunningRacesApi->getRunningRaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Filters the list by a given year. | [optional]

### Return type

[**\Swagger\Client\Model\RunningRace[]**](../Model/RunningRace.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

