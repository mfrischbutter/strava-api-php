# Swagger\Client\SegmentsApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exploreSegments**](SegmentsApi.md#exploreSegments) | **GET** /segments/explore | Explore segments
[**getLeaderboardBySegmentId**](SegmentsApi.md#getLeaderboardBySegmentId) | **GET** /segments/{id}/leaderboard | Get Segment Leaderboard
[**getLoggedInAthleteStarredSegments**](SegmentsApi.md#getLoggedInAthleteStarredSegments) | **GET** /segments/starred | List Starred Segments
[**getSegmentById**](SegmentsApi.md#getSegmentById) | **GET** /segments/{id} | Get Segment
[**starSegment**](SegmentsApi.md#starSegment) | **PUT** /segments/{id}/starred | Star Segment


# **exploreSegments**
> \Swagger\Client\Model\ExplorerResponse exploreSegments($bounds, $activity_type, $min_cat, $max_cat)

Explore segments

Returns the top 10 segments matching a specified query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bounds = array(3.4); // float[] | The latitude and longitude for two points describing a rectangular boundary for the search: [southwest corner latitutde, southwest corner longitude, northeast corner latitude, northeast corner longitude]
$activity_type = "activity_type_example"; // string | Desired activity type.
$min_cat = 56; // int | The minimum climbing category.
$max_cat = 56; // int | The maximum climbing category.

try {
    $result = $apiInstance->exploreSegments($bounds, $activity_type, $min_cat, $max_cat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->exploreSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bounds** | [**float[]**](../Model/float.md)| The latitude and longitude for two points describing a rectangular boundary for the search: [southwest corner latitutde, southwest corner longitude, northeast corner latitude, northeast corner longitude] |
 **activity_type** | **string**| Desired activity type. | [optional]
 **min_cat** | **int**| The minimum climbing category. | [optional]
 **max_cat** | **int**| The maximum climbing category. | [optional]

### Return type

[**\Swagger\Client\Model\ExplorerResponse**](../Model/ExplorerResponse.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboardBySegmentId**
> \Swagger\Client\Model\SegmentLeaderboard getLeaderboardBySegmentId($id, $gender, $age_group, $weight_class, $following, $club_id, $date_range, $context_entries, $page, $per_page)

Get Segment Leaderboard

Returns the specified segment leaderboard.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the segment leaderboard.
$gender = "gender_example"; // string | Filter by gender.
$age_group = "age_group_example"; // string | Summit Feature. Filter by age group.
$weight_class = "weight_class_example"; // string | Summit Feature. Filter by weight class.
$following = true; // bool | Filter by friends of the authenticated athlete.
$club_id = 789; // int | Filter by club.
$date_range = "date_range_example"; // string | Filter by date range, will be in the athlete's timezone
$context_entries = 56; // int | 
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getLeaderboardBySegmentId($id, $gender, $age_group, $weight_class, $following, $club_id, $date_range, $context_entries, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getLeaderboardBySegmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the segment leaderboard. |
 **gender** | **string**| Filter by gender. | [optional]
 **age_group** | **string**| Summit Feature. Filter by age group. | [optional]
 **weight_class** | **string**| Summit Feature. Filter by weight class. | [optional]
 **following** | **bool**| Filter by friends of the authenticated athlete. | [optional]
 **club_id** | **int**| Filter by club. | [optional]
 **date_range** | **string**| Filter by date range, will be in the athlete&#39;s timezone | [optional]
 **context_entries** | **int**|  | [optional]
 **page** | **int**| Page number. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\SegmentLeaderboard**](../Model/SegmentLeaderboard.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedInAthleteStarredSegments**
> \Swagger\Client\Model\SummarySegment[] getLoggedInAthleteStarredSegments($page, $per_page)

List Starred Segments

List of the authenticated athlete's starred segments. Private segments are filtered out unless requested by a token with read_all scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getLoggedInAthleteStarredSegments($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getLoggedInAthleteStarredSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\SummarySegment[]**](../Model/SummarySegment.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentById**
> \Swagger\Client\Model\DetailedSegment getSegmentById($id)

Get Segment

Returns the specified segment. read_all scope required in order to retrieve athlete-specific segment information, or to retrieve private segments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the segment.

try {
    $result = $apiInstance->getSegmentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the segment. |

### Return type

[**\Swagger\Client\Model\DetailedSegment**](../Model/DetailedSegment.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **starSegment**
> \Swagger\Client\Model\DetailedSegment starSegment($id, $starred)

Star Segment

Stars/Unstars the given segment for the authenticated athlete. Requires profile:write scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the segment to star.
$starred = false; // bool | If true, star the segment; if false, unstar the segment.

try {
    $result = $apiInstance->starSegment($id, $starred);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->starSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the segment to star. |
 **starred** | **bool**| If true, star the segment; if false, unstar the segment. | [default to false]

### Return type

[**\Swagger\Client\Model\DetailedSegment**](../Model/DetailedSegment.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

