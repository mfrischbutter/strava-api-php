# Swagger\Client\ClubsApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClubActivitiesById**](ClubsApi.md#getClubActivitiesById) | **GET** /clubs/{id}/activities | List Club Activities
[**getClubAdminsById**](ClubsApi.md#getClubAdminsById) | **GET** /clubs/{id}/admins | List Club Administrators
[**getClubById**](ClubsApi.md#getClubById) | **GET** /clubs/{id} | Get Club
[**getClubMembersById**](ClubsApi.md#getClubMembersById) | **GET** /clubs/{id}/members | List Club Members
[**getLoggedInAthleteClubs**](ClubsApi.md#getLoggedInAthleteClubs) | **GET** /athlete/clubs | List Athlete Clubs


# **getClubActivitiesById**
> \Swagger\Client\Model\SummaryActivity[] getClubActivitiesById($id, $page, $per_page)

List Club Activities

Retrieve recent activities from members of a specific club. The authenticated athlete must belong to the requested club in order to hit this endpoint. Pagination is supported. Athlete profile visibility is respected for all activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClubsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the club.
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getClubActivitiesById($id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubsApi->getClubActivitiesById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the club. |
 **page** | **int**| Page number. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\SummaryActivity[]**](../Model/SummaryActivity.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClubAdminsById**
> \Swagger\Client\Model\SummaryAthlete[] getClubAdminsById($id, $page, $per_page)

List Club Administrators

Returns a list of the administrators of a given club.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClubsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the club.
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getClubAdminsById($id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubsApi->getClubAdminsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the club. |
 **page** | **int**| Page number. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\SummaryAthlete[]**](../Model/SummaryAthlete.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClubById**
> \Swagger\Client\Model\DetailedClub getClubById($id)

Get Club

Returns a given club using its identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClubsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the club.

try {
    $result = $apiInstance->getClubById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubsApi->getClubById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the club. |

### Return type

[**\Swagger\Client\Model\DetailedClub**](../Model/DetailedClub.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClubMembersById**
> \Swagger\Client\Model\SummaryAthlete[] getClubMembersById($id, $page, $per_page)

List Club Members

Returns a list of the athletes who are members of a given club.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClubsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the club.
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getClubMembersById($id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubsApi->getClubMembersById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the club. |
 **page** | **int**| Page number. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\SummaryAthlete[]**](../Model/SummaryAthlete.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedInAthleteClubs**
> \Swagger\Client\Model\SummaryClub[] getLoggedInAthleteClubs($page, $per_page)

List Athlete Clubs

Returns a list of the clubs whose membership includes the authenticated athlete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClubsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getLoggedInAthleteClubs($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClubsApi->getLoggedInAthleteClubs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\SummaryClub[]**](../Model/SummaryClub.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

