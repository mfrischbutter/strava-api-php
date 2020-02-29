# Swagger\Client\ActivitiesApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createActivity**](ActivitiesApi.md#createActivity) | **POST** /activities | Create an Activity
[**getActivityById**](ActivitiesApi.md#getActivityById) | **GET** /activities/{id} | Get Activity
[**getCommentsByActivityId**](ActivitiesApi.md#getCommentsByActivityId) | **GET** /activities/{id}/comments | List Activity Comments
[**getKudoersByActivityId**](ActivitiesApi.md#getKudoersByActivityId) | **GET** /activities/{id}/kudos | List Activity Kudoers
[**getLapsByActivityId**](ActivitiesApi.md#getLapsByActivityId) | **GET** /activities/{id}/laps | List Activity Laps
[**getLoggedInAthleteActivities**](ActivitiesApi.md#getLoggedInAthleteActivities) | **GET** /athlete/activities | List Athlete Activities
[**getZonesByActivityId**](ActivitiesApi.md#getZonesByActivityId) | **GET** /activities/{id}/zones | Get Activity Zones
[**updateActivityById**](ActivitiesApi.md#updateActivityById) | **PUT** /activities/{id} | Update Activity


# **createActivity**
> \Swagger\Client\Model\DetailedActivity createActivity($name, $type, $start_date_local, $elapsed_time, $description, $distance, $trainer, $commute)

Create an Activity

Creates a manual activity for an athlete, requires activity:write scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The name of the activity.
$type = "type_example"; // string | Type of activity. For example - Run, Ride etc.
$start_date_local = "start_date_local_example"; // string | ISO 8601 formatted date time.
$elapsed_time = 56; // int | In seconds.
$description = "description_example"; // string | Description of the activity.
$distance = 3.4; // float | In meters.
$trainer = 56; // int | Set to 1 to mark as a trainer activity.
$commute = 56; // int | Set to 1 to mark as commute.

try {
    $result = $apiInstance->createActivity($name, $type, $start_date_local, $elapsed_time, $description, $distance, $trainer, $commute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the activity. |
 **type** | **string**| Type of activity. For example - Run, Ride etc. |
 **start_date_local** | **string**| ISO 8601 formatted date time. |
 **elapsed_time** | **int**| In seconds. |
 **description** | **string**| Description of the activity. | [optional]
 **distance** | **float**| In meters. | [optional]
 **trainer** | **int**| Set to 1 to mark as a trainer activity. | [optional]
 **commute** | **int**| Set to 1 to mark as commute. | [optional]

### Return type

[**\Swagger\Client\Model\DetailedActivity**](../Model/DetailedActivity.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityById**
> \Swagger\Client\Model\DetailedActivity getActivityById($id, $include_all_efforts)

Get Activity

Returns the given activity that is owned by the authenticated athlete. Requires activity:read for Everyone and Followers activities. Requires activity:read_all for Only Me activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the activity.
$include_all_efforts = true; // bool | To include all segments efforts.

try {
    $result = $apiInstance->getActivityById($id, $include_all_efforts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the activity. |
 **include_all_efforts** | **bool**| To include all segments efforts. | [optional]

### Return type

[**\Swagger\Client\Model\DetailedActivity**](../Model/DetailedActivity.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommentsByActivityId**
> \Swagger\Client\Model\Comment[] getCommentsByActivityId($id, $page, $per_page)

List Activity Comments

Returns the comments on the given activity. Requires activity:read for Everyone and Followers activities. Requires activity:read_all for Only Me activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the activity.
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getCommentsByActivityId($id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getCommentsByActivityId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the activity. |
 **page** | **int**| Page number. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\Comment[]**](../Model/Comment.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKudoersByActivityId**
> \Swagger\Client\Model\SummaryAthlete[] getKudoersByActivityId($id, $page, $per_page)

List Activity Kudoers

Returns the athletes who kudoed an activity identified by an identifier. Requires activity:read for Everyone and Followers activities. Requires activity:read_all for Only Me activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the activity.
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getKudoersByActivityId($id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getKudoersByActivityId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the activity. |
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

# **getLapsByActivityId**
> \Swagger\Client\Model\Lap[] getLapsByActivityId($id)

List Activity Laps

Returns the laps of an activity identified by an identifier. Requires activity:read for Everyone and Followers activities. Requires activity:read_all for Only Me activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the activity.

try {
    $result = $apiInstance->getLapsByActivityId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getLapsByActivityId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the activity. |

### Return type

[**\Swagger\Client\Model\Lap[]**](../Model/Lap.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedInAthleteActivities**
> \Swagger\Client\Model\SummaryActivity[] getLoggedInAthleteActivities($before, $after, $page, $per_page)

List Athlete Activities

Returns the activities of an athlete for a specific identifier. Requires activity:read. Only Me activities will be filtered out unless requested by a token with activity:read_all.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$before = 56; // int | An epoch timestamp to use for filtering activities that have taken place before a certain time.
$after = 56; // int | An epoch timestamp to use for filtering activities that have taken place after a certain time.
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getLoggedInAthleteActivities($before, $after, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getLoggedInAthleteActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **before** | **int**| An epoch timestamp to use for filtering activities that have taken place before a certain time. | [optional]
 **after** | **int**| An epoch timestamp to use for filtering activities that have taken place after a certain time. | [optional]
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

# **getZonesByActivityId**
> \Swagger\Client\Model\ActivityZone[] getZonesByActivityId($id)

Get Activity Zones

Summit Feature. Returns the zones of a given activity. Requires activity:read for Everyone and Followers activities. Requires activity:read_all for Only Me activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the activity.

try {
    $result = $apiInstance->getZonesByActivityId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getZonesByActivityId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the activity. |

### Return type

[**\Swagger\Client\Model\ActivityZone[]**](../Model/ActivityZone.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateActivityById**
> \Swagger\Client\Model\DetailedActivity updateActivityById($id, $body)

Update Activity

Updates the given activity that is owned by the authenticated athlete. Requires activity:write. Also requires activity:read_all in order to update Only Me activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the activity.
$body = new \Swagger\Client\Model\UpdatableActivity(); // \Swagger\Client\Model\UpdatableActivity | 

try {
    $result = $apiInstance->updateActivityById($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->updateActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the activity. |
 **body** | [**\Swagger\Client\Model\UpdatableActivity**](../Model/UpdatableActivity.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DetailedActivity**](../Model/DetailedActivity.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

