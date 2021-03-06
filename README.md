# SwaggerClient-php
The [Swagger Playground](https://developers.strava.com/playground) is the easiest way to familiarize yourself with the Strava API by submitting HTTP requests and observing the responses before you write any client code. It will show what a response will look like with different endpoints depending on the authorization scope you receive from your athletes. To use the Playground, go to https://www.strava.com/settings/api and change your “Authorization Callback Domain” to developers.strava.com. Please note, we only support Swagger 2.0. There is a known issue where you can only select one scope at a time. For more information, please check the section “client code” at https://developers.strava.com/docs.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://www.strava.com/api/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivitiesApi* | [**createActivity**](docs/Api/ActivitiesApi.md#createactivity) | **POST** /activities | Create an Activity
*ActivitiesApi* | [**getActivityById**](docs/Api/ActivitiesApi.md#getactivitybyid) | **GET** /activities/{id} | Get Activity
*ActivitiesApi* | [**getCommentsByActivityId**](docs/Api/ActivitiesApi.md#getcommentsbyactivityid) | **GET** /activities/{id}/comments | List Activity Comments
*ActivitiesApi* | [**getKudoersByActivityId**](docs/Api/ActivitiesApi.md#getkudoersbyactivityid) | **GET** /activities/{id}/kudos | List Activity Kudoers
*ActivitiesApi* | [**getLapsByActivityId**](docs/Api/ActivitiesApi.md#getlapsbyactivityid) | **GET** /activities/{id}/laps | List Activity Laps
*ActivitiesApi* | [**getLoggedInAthleteActivities**](docs/Api/ActivitiesApi.md#getloggedinathleteactivities) | **GET** /athlete/activities | List Athlete Activities
*ActivitiesApi* | [**getZonesByActivityId**](docs/Api/ActivitiesApi.md#getzonesbyactivityid) | **GET** /activities/{id}/zones | Get Activity Zones
*ActivitiesApi* | [**updateActivityById**](docs/Api/ActivitiesApi.md#updateactivitybyid) | **PUT** /activities/{id} | Update Activity
*AthletesApi* | [**getLoggedInAthlete**](docs/Api/AthletesApi.md#getloggedinathlete) | **GET** /athlete | Get Authenticated Athlete
*AthletesApi* | [**getLoggedInAthleteZones**](docs/Api/AthletesApi.md#getloggedinathletezones) | **GET** /athlete/zones | Get Zones
*AthletesApi* | [**getStats**](docs/Api/AthletesApi.md#getstats) | **GET** /athletes/{id}/stats | Get Athlete Stats
*AthletesApi* | [**updateLoggedInAthlete**](docs/Api/AthletesApi.md#updateloggedinathlete) | **PUT** /athlete | Update Athlete
*ClubsApi* | [**getClubActivitiesById**](docs/Api/ClubsApi.md#getclubactivitiesbyid) | **GET** /clubs/{id}/activities | List Club Activities
*ClubsApi* | [**getClubAdminsById**](docs/Api/ClubsApi.md#getclubadminsbyid) | **GET** /clubs/{id}/admins | List Club Administrators
*ClubsApi* | [**getClubById**](docs/Api/ClubsApi.md#getclubbyid) | **GET** /clubs/{id} | Get Club
*ClubsApi* | [**getClubMembersById**](docs/Api/ClubsApi.md#getclubmembersbyid) | **GET** /clubs/{id}/members | List Club Members
*ClubsApi* | [**getLoggedInAthleteClubs**](docs/Api/ClubsApi.md#getloggedinathleteclubs) | **GET** /athlete/clubs | List Athlete Clubs
*GearsApi* | [**getGearById**](docs/Api/GearsApi.md#getgearbyid) | **GET** /gear/{id} | Get Equipment
*RoutesApi* | [**getRouteAsGPX**](docs/Api/RoutesApi.md#getrouteasgpx) | **GET** /routes/{id}/export_gpx | Export Route GPX
*RoutesApi* | [**getRouteAsTCX**](docs/Api/RoutesApi.md#getrouteastcx) | **GET** /routes/{id}/export_tcx | Export Route TCX
*RoutesApi* | [**getRouteById**](docs/Api/RoutesApi.md#getroutebyid) | **GET** /routes/{id} | Get Route
*RoutesApi* | [**getRoutesByAthleteId**](docs/Api/RoutesApi.md#getroutesbyathleteid) | **GET** /athletes/{id}/routes | List Athlete Routes
*RunningRacesApi* | [**getRunningRaceById**](docs/Api/RunningRacesApi.md#getrunningracebyid) | **GET** /running_races/{id} | Get Running Race
*RunningRacesApi* | [**getRunningRaces**](docs/Api/RunningRacesApi.md#getrunningraces) | **GET** /running_races | List Running Races
*SegmentEffortsApi* | [**getEffortsBySegmentId**](docs/Api/SegmentEffortsApi.md#geteffortsbysegmentid) | **GET** /segments/{id}/all_efforts | List Segment Efforts
*SegmentEffortsApi* | [**getSegmentEffortById**](docs/Api/SegmentEffortsApi.md#getsegmenteffortbyid) | **GET** /segment_efforts/{id} | Get Segment Effort
*SegmentsApi* | [**exploreSegments**](docs/Api/SegmentsApi.md#exploresegments) | **GET** /segments/explore | Explore segments
*SegmentsApi* | [**getLeaderboardBySegmentId**](docs/Api/SegmentsApi.md#getleaderboardbysegmentid) | **GET** /segments/{id}/leaderboard | Get Segment Leaderboard
*SegmentsApi* | [**getLoggedInAthleteStarredSegments**](docs/Api/SegmentsApi.md#getloggedinathletestarredsegments) | **GET** /segments/starred | List Starred Segments
*SegmentsApi* | [**getSegmentById**](docs/Api/SegmentsApi.md#getsegmentbyid) | **GET** /segments/{id} | Get Segment
*SegmentsApi* | [**starSegment**](docs/Api/SegmentsApi.md#starsegment) | **PUT** /segments/{id}/starred | Star Segment
*StreamsApi* | [**getActivityStreams**](docs/Api/StreamsApi.md#getactivitystreams) | **GET** /activities/{id}/streams | Get Activity Streams
*StreamsApi* | [**getRouteStreams**](docs/Api/StreamsApi.md#getroutestreams) | **GET** /routes/{id}/streams | Get Route Streams
*StreamsApi* | [**getSegmentEffortStreams**](docs/Api/StreamsApi.md#getsegmenteffortstreams) | **GET** /segment_efforts/{id}/streams | Get Segment Effort Streams
*StreamsApi* | [**getSegmentStreams**](docs/Api/StreamsApi.md#getsegmentstreams) | **GET** /segments/{id}/streams | Get Segment Streams
*UploadsApi* | [**createUpload**](docs/Api/UploadsApi.md#createupload) | **POST** /uploads | Upload Activity
*UploadsApi* | [**getUploadById**](docs/Api/UploadsApi.md#getuploadbyid) | **GET** /uploads/{uploadId} | Get Upload


## Documentation For Models

 - [ActivityStats](docs/Model/ActivityStats.md)
 - [ActivityTotal](docs/Model/ActivityTotal.md)
 - [ActivityType](docs/Model/ActivityType.md)
 - [ActivityZone](docs/Model/ActivityZone.md)
 - [BaseStream](docs/Model/BaseStream.md)
 - [Comment](docs/Model/Comment.md)
 - [Error](docs/Model/Error.md)
 - [ExplorerResponse](docs/Model/ExplorerResponse.md)
 - [ExplorerSegment](docs/Model/ExplorerSegment.md)
 - [Fault](docs/Model/Fault.md)
 - [HeartRateZoneRanges](docs/Model/HeartRateZoneRanges.md)
 - [Lap](docs/Model/Lap.md)
 - [LatLng](docs/Model/LatLng.md)
 - [MetaActivity](docs/Model/MetaActivity.md)
 - [MetaAthlete](docs/Model/MetaAthlete.md)
 - [MetaClub](docs/Model/MetaClub.md)
 - [PhotosSummary](docs/Model/PhotosSummary.md)
 - [PhotosSummaryPrimary](docs/Model/PhotosSummaryPrimary.md)
 - [PolylineMap](docs/Model/PolylineMap.md)
 - [PowerZoneRanges](docs/Model/PowerZoneRanges.md)
 - [Route](docs/Model/Route.md)
 - [RunningRace](docs/Model/RunningRace.md)
 - [SegmentLeaderboard](docs/Model/SegmentLeaderboard.md)
 - [SegmentLeaderboardEntry](docs/Model/SegmentLeaderboardEntry.md)
 - [Split](docs/Model/Split.md)
 - [StreamSet](docs/Model/StreamSet.md)
 - [SummaryGear](docs/Model/SummaryGear.md)
 - [SummarySegment](docs/Model/SummarySegment.md)
 - [SummarySegmentEffort](docs/Model/SummarySegmentEffort.md)
 - [TimedZoneDistribution](docs/Model/TimedZoneDistribution.md)
 - [UpdatableActivity](docs/Model/UpdatableActivity.md)
 - [Upload](docs/Model/Upload.md)
 - [ZoneRange](docs/Model/ZoneRange.md)
 - [ZoneRanges](docs/Model/ZoneRanges.md)
 - [Zones](docs/Model/Zones.md)
 - [AltitudeStream](docs/Model/AltitudeStream.md)
 - [CadenceStream](docs/Model/CadenceStream.md)
 - [DetailedGear](docs/Model/DetailedGear.md)
 - [DetailedSegment](docs/Model/DetailedSegment.md)
 - [DetailedSegmentEffort](docs/Model/DetailedSegmentEffort.md)
 - [DistanceStream](docs/Model/DistanceStream.md)
 - [HeartrateStream](docs/Model/HeartrateStream.md)
 - [LatLngStream](docs/Model/LatLngStream.md)
 - [MovingStream](docs/Model/MovingStream.md)
 - [PowerStream](docs/Model/PowerStream.md)
 - [SmoothGradeStream](docs/Model/SmoothGradeStream.md)
 - [SmoothVelocityStream](docs/Model/SmoothVelocityStream.md)
 - [SummaryActivity](docs/Model/SummaryActivity.md)
 - [SummaryAthlete](docs/Model/SummaryAthlete.md)
 - [SummaryClub](docs/Model/SummaryClub.md)
 - [TemperatureStream](docs/Model/TemperatureStream.md)
 - [TimeStream](docs/Model/TimeStream.md)
 - [TimedZoneRange](docs/Model/TimedZoneRange.md)
 - [DetailedActivity](docs/Model/DetailedActivity.md)
 - [DetailedAthlete](docs/Model/DetailedAthlete.md)
 - [DetailedClub](docs/Model/DetailedClub.md)


## Documentation For Authorization


## strava_oauth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://www.strava.com/api/v3/oauth/authorize
- **Scopes**: 
 - **read**: Read public segments, public routes, public profile data, public posts, public events, club feeds, and leaderboards
 - **read_all**: Read private routes, private segments, and private events for the user
 - **profile:read_all**: Read all profile information even if the user has set their profile visibility to Followers or Only You
 - **profile:write**: Update the user's weight and Functional Threshold Power (FTP), and access to star or unstar segments on their behalf
 - **activity:read**: Read the user's activity data for activities that are visible to Everyone and Followers, excluding privacy zone data
 - **activity:read_all**: The same access as activity:read, plus privacy zone data and access to read the user's activities with visibility set to Only You
 - **activity:write**: Access to create manual activities and uploads, and access to edit any activities that are visible to the app, based on activity read access level


## Author




