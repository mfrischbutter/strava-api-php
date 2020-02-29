# DetailedSegment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of this segment | [optional] 
**name** | **string** | The name of this segment | [optional] 
**activity_type** | **string** |  | [optional] 
**distance** | **float** | The segment&#39;s distance, in meters | [optional] 
**average_grade** | **float** | The segment&#39;s average grade, in percents | [optional] 
**maximum_grade** | **float** | The segments&#39;s maximum grade, in percents | [optional] 
**elevation_high** | **float** | The segments&#39;s highest elevation, in meters | [optional] 
**elevation_low** | **float** | The segments&#39;s lowest elevation, in meters | [optional] 
**start_latlng** | [**\Swagger\Client\Model\LatLng**](LatLng.md) |  | [optional] 
**end_latlng** | [**\Swagger\Client\Model\LatLng**](LatLng.md) |  | [optional] 
**climb_category** | **int** | The category of the climb [0, 5]. Higher is harder ie. 5 is Hors catégorie, 0 is uncategorized in climb_category. | [optional] 
**city** | **string** | The segments&#39;s city. | [optional] 
**state** | **string** | The segments&#39;s state or geographical region. | [optional] 
**country** | **string** | The segment&#39;s country. | [optional] 
**private** | **bool** | Whether this segment is private. | [optional] 
**athlete_pr_effort** | [**\Swagger\Client\Model\SummarySegmentEffort**](SummarySegmentEffort.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The time at which the segment was created. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The time at which the segment was last updated. | [optional] 
**total_elevation_gain** | **float** | The segment&#39;s total elevation gain. | [optional] 
**map** | [**\Swagger\Client\Model\PolylineMap**](PolylineMap.md) |  | [optional] 
**effort_count** | **int** | The total number of efforts for this segment | [optional] 
**athlete_count** | **int** | The number of unique athletes who have an effort for this segment | [optional] 
**hazardous** | **bool** | Whether this segment is considered hazardous | [optional] 
**star_count** | **int** | The number of stars for this segment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


