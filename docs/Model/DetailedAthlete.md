# DetailedAthlete

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the athlete | [optional] 
**resource_state** | **int** | Resource state, indicates level of detail. Possible values: 1 -&gt; \&quot;meta\&quot;, 2 -&gt; \&quot;summary\&quot;, 3 -&gt; \&quot;detail\&quot; | [optional] 
**firstname** | **string** | The athlete&#39;s first name. | [optional] 
**lastname** | **string** | The athlete&#39;s last name. | [optional] 
**profile_medium** | **string** | URL to a 62x62 pixel profile picture. | [optional] 
**profile** | **string** | URL to a 124x124 pixel profile picture. | [optional] 
**city** | **string** | The athlete&#39;s city. | [optional] 
**state** | **string** | The athlete&#39;s state or geographical region. | [optional] 
**country** | **string** | The athlete&#39;s country. | [optional] 
**sex** | **string** | The athlete&#39;s sex. | [optional] 
**premium** | **bool** | Deprecated.  Use summit field instead. Whether the athlete has any Summit subscription. | [optional] 
**summit** | **bool** | Whether the athlete has any Summit subscription. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The time at which the athlete was created. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The time at which the athlete was last updated. | [optional] 
**follower_count** | **int** | The athlete&#39;s follower count. | [optional] 
**friend_count** | **int** | The athlete&#39;s friend count. | [optional] 
**measurement_preference** | **string** | The athlete&#39;s preferred unit system. | [optional] 
**ftp** | **int** | The athlete&#39;s FTP (Functional Threshold Power). | [optional] 
**weight** | **float** | The athlete&#39;s weight. | [optional] 
**clubs** | [**\Swagger\Client\Model\SummaryClub[]**](SummaryClub.md) | The athlete&#39;s clubs. | [optional] 
**bikes** | [**\Swagger\Client\Model\SummaryGear[]**](SummaryGear.md) | The athlete&#39;s bikes. | [optional] 
**shoes** | [**\Swagger\Client\Model\SummaryGear[]**](SummaryGear.md) | The athlete&#39;s shoes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


