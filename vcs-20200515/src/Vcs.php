<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddDataSourceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddDataSourceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddProfileCatalogRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddProfileCatalogResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddProfileRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\AddProfileResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\BindCorpGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\BindCorpGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\BindPersonRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\BindPersonResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\BindUserRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\BindUserResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateCorpGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateCorpGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateCorpRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateCorpResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateMarkerRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateMarkerResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateSampleRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateSampleResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateTrainLabelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateTrainLabelResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateUserRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateUserResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateVideoComposeTaskRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateVideoComposeTaskResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateVideoSummaryTaskRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateVideoSummaryTaskResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteChannelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteChannelResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteCorpGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteCorpGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceForInstanceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceForInstanceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceForInstanceShrinkRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteIPCDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteIPCDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteMarkerRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteMarkerResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteNVRDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteNVRDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProfileCatalogRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProfileCatalogResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProfileRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProfileResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteRecordsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteRecordsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteSampleRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteSampleResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteTrainAlgorithmRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteTrainAlgorithmResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteTrainLabelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteTrainLabelResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteVideoSummaryTaskRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteVideoSummaryTaskResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DescribeDevicesRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DescribeDevicesResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetBodyOptionsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetBodyOptionsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetCatalogListRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetCatalogListResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceCaptureStrategyRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceCaptureStrategyResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceConfigRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceConfigResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceLiveUrlRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceLiveUrlResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDevicePictureRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDevicePictureResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceVideoUrlRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceVideoUrlResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceModelResultRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceModelResultResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetFaceOptionsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorListRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorListResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonDetailRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonDetailResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListShrinkRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetProfileDetailRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetProfileDetailResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetProfileListRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetProfileListResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetProfileListShrinkRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainAlgorithmRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainAlgorithmResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainAlgorithRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainAlgorithResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainLabelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainLabelResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetUserDetailRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetUserDetailResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetVideoComposeResultRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetVideoComposeResultResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetVideoSummaryTaskResultRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetVideoSummaryTaskResultResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\InvokeMotorModelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\InvokeMotorModelResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListAccessNumberRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListAccessNumberResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListAlgorithmNamesByDeviceIdsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListAlgorithmNamesByDeviceIdsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListBodyAlgorithmResultsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListBodyAlgorithmResultsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpGroupMetricsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpGroupMetricsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpGroupsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpGroupsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpMetricsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpMetricsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListDeviceGroupsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListDeviceGroupsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListEventAlgorithmDetailsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListEventAlgorithmDetailsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListEventAlgorithmResultsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListEventAlgorithmResultsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListFaceAlgorithmResultsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListFaceAlgorithmResultsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMarkerRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMarkerResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMetricsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMetricsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMotorAlgorithmResultsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMotorAlgorithmResultsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListNVRChannelDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListNVRChannelDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListNVRDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListNVRDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceDetailsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceDetailsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonVisitCountRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonVisitCountResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListTrainLabelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListTrainLabelResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListUserGroupsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListUserGroupsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListUsersRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListUsersResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListUsersShrinkRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeFaceQualityRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeFaceQualityResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeImageRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeImageResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RegisterDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RegisterDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ReportDeviceCapacityRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ReportDeviceCapacityResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RetryStartDeployRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\RetryStartDeployResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SampleListRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SampleListResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SaveVideoSummaryTaskVideoRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SaveVideoSummaryTaskVideoResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchBodyRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchBodyResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchBodyShrinkRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceShrinkRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchObjectRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchObjectResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SearchObjectShrinkRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StartDeployRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StartDeployResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StartTrainRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StartTrainResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopDeployRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopDeployResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopTrainRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopTrainResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SyncDeviceTimeRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\SyncDeviceTimeResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UnbindCorpGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UnbindCorpGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UnbindPersonRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UnbindPersonResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UnbindUserRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UnbindUserResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateCorpRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateCorpResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceCaptureStrategyRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceCaptureStrategyResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMarkerRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMarkerResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateProfileCatalogRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateProfileCatalogResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateProfileRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateProfileResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateSampleRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateSampleResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateTrainAlgorithmRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateTrainAlgorithmResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateTrainLabelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateTrainLabelResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UploadFileRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UploadFileResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UploadImageRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UploadImageResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\VerifyTrainLabelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\VerifyTrainLabelResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Vcs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vcs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param UnbindPersonRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnbindPersonResponse
     */
    public function unbindPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindPersonResponse::fromMap($this->doRPCRequest('UnbindPerson', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindPersonRequest $request
     *
     * @return UnbindPersonResponse
     */
    public function unbindPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindPersonWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->personList)) {
            $request->personListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->personList, 'PersonList', 'json');
        }
        if (!Utils::isUnset($tmpReq->userList)) {
            $request->userListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userList, 'UserList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param SearchObjectRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return SearchObjectResponse
     */
    public function searchObjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchObjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceList)) {
            $request->deviceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceList, 'DeviceList', 'json');
        }
        if (!Utils::isUnset($tmpReq->conditions)) {
            $request->conditionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->conditions, 'Conditions', 'json');
        }
        if (!Utils::isUnset($tmpReq->imagePath)) {
            $request->imagePathShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imagePath, 'ImagePath', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchObjectResponse::fromMap($this->doRPCRequest('SearchObject', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchObjectRequest $request
     *
     * @return SearchObjectResponse
     */
    public function searchObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchObjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecordsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRecordsResponse
     */
    public function deleteRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRecordsResponse::fromMap($this->doRPCRequest('DeleteRecords', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRecordsRequest $request
     *
     * @return DeleteRecordsResponse
     */
    public function deleteRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordsWithOptions($request, $runtime);
    }

    /**
     * @param StartDeployRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartDeployResponse
     */
    public function startDeployWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartDeployResponse::fromMap($this->doRPCRequest('StartDeploy', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartDeployRequest $request
     *
     * @return StartDeployResponse
     */
    public function startDeploy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDeployWithOptions($request, $runtime);
    }

    /**
     * @param GetInventoryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetInventoryResponse
     */
    public function getInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInventoryResponse::fromMap($this->doRPCRequest('GetInventory', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInventoryRequest $request
     *
     * @return GetInventoryResponse
     */
    public function getInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInventoryWithOptions($request, $runtime);
    }

    /**
     * @param UploadImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UploadImageResponse
     */
    public function uploadImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadImageResponse::fromMap($this->doRPCRequest('UploadImage', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadImageRequest $request
     *
     * @return UploadImageResponse
     */
    public function uploadImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadImageWithOptions($request, $runtime);
    }

    /**
     * @param BindUserRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return BindUserResponse
     */
    public function bindUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindUserResponse::fromMap($this->doRPCRequest('BindUser', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindUserRequest $request
     *
     * @return BindUserResponse
     */
    public function bindUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeviceResponse::fromMap($this->doRPCRequest('DeleteDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDeviceRequest $request
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceWithOptions($request, $runtime);
    }

    /**
     * @param VerifyTrainLabelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return VerifyTrainLabelResponse
     */
    public function verifyTrainLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyTrainLabelResponse::fromMap($this->doRPCRequest('VerifyTrainLabel', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param VerifyTrainLabelRequest $request
     *
     * @return VerifyTrainLabelResponse
     */
    public function verifyTrainLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyTrainLabelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMonitorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateMonitorResponse
     */
    public function updateMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMonitorResponse::fromMap($this->doRPCRequest('UpdateMonitor', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMonitorRequest $request
     *
     * @return UpdateMonitorResponse
     */
    public function updateMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMonitorWithOptions($request, $runtime);
    }

    /**
     * @param GetPersonDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPersonDetailResponse
     */
    public function getPersonDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPersonDetailResponse::fromMap($this->doRPCRequest('GetPersonDetail', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPersonDetailRequest $request
     *
     * @return GetPersonDetailResponse
     */
    public function getPersonDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPersonDetailWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSampleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSampleResponse
     */
    public function deleteSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSampleResponse::fromMap($this->doRPCRequest('DeleteSample', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSampleRequest $request
     *
     * @return DeleteSampleResponse
     */
    public function deleteSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSampleWithOptions($request, $runtime);
    }

    /**
     * @param ListCorpGroupMetricsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListCorpGroupMetricsResponse
     */
    public function listCorpGroupMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCorpGroupMetricsResponse::fromMap($this->doRPCRequest('ListCorpGroupMetrics', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCorpGroupMetricsRequest $request
     *
     * @return ListCorpGroupMetricsResponse
     */
    public function listCorpGroupMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCorpGroupMetricsWithOptions($request, $runtime);
    }

    /**
     * @param SaveVideoSummaryTaskVideoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SaveVideoSummaryTaskVideoResponse
     */
    public function saveVideoSummaryTaskVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveVideoSummaryTaskVideoResponse::fromMap($this->doRPCRequest('SaveVideoSummaryTaskVideo', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveVideoSummaryTaskVideoRequest $request
     *
     * @return SaveVideoSummaryTaskVideoResponse
     */
    public function saveVideoSummaryTaskVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveVideoSummaryTaskVideoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectResponse::fromMap($this->doRPCRequest('DeleteProject', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @param SearchFaceRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchFaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->optionList)) {
            $request->optionListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->optionList, 'OptionList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchFaceResponse::fromMap($this->doRPCRequest('SearchFace', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchFaceRequest $request
     *
     * @return SearchFaceResponse
     */
    public function searchFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFaceWithOptions($request, $runtime);
    }

    /**
     * @param ListAccessNumberRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAccessNumberResponse
     */
    public function listAccessNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAccessNumberResponse::fromMap($this->doRPCRequest('ListAccessNumber', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAccessNumberRequest $request
     *
     * @return ListAccessNumberResponse
     */
    public function listAccessNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessNumberWithOptions($request, $runtime);
    }

    /**
     * @param GetDevicePictureRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDevicePictureResponse
     */
    public function getDevicePictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDevicePictureResponse::fromMap($this->doRPCRequest('GetDevicePicture', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDevicePictureRequest $request
     *
     * @return GetDevicePictureResponse
     */
    public function getDevicePicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevicePictureWithOptions($request, $runtime);
    }

    /**
     * @param GetMonitorListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetMonitorListResponse
     */
    public function getMonitorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMonitorListResponse::fromMap($this->doRPCRequest('GetMonitorList', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMonitorListRequest $request
     *
     * @return GetMonitorListResponse
     */
    public function getMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonitorListWithOptions($request, $runtime);
    }

    /**
     * @param ListTrainLabelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTrainLabelResponse
     */
    public function listTrainLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTrainLabelResponse::fromMap($this->doRPCRequest('ListTrainLabel', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTrainLabelRequest $request
     *
     * @return ListTrainLabelResponse
     */
    public function listTrainLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrainLabelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrainLabelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTrainLabelResponse
     */
    public function updateTrainLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTrainLabelResponse::fromMap($this->doRPCRequest('UpdateTrainLabel', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTrainLabelRequest $request
     *
     * @return UpdateTrainLabelResponse
     */
    public function updateTrainLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrainLabelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrainLabelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteTrainLabelResponse
     */
    public function deleteTrainLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrainLabelResponse::fromMap($this->doRPCRequest('DeleteTrainLabel', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTrainLabelRequest $request
     *
     * @return DeleteTrainLabelResponse
     */
    public function deleteTrainLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrainLabelWithOptions($request, $runtime);
    }

    /**
     * @param StopDeployRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopDeployResponse
     */
    public function stopDeployWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopDeployResponse::fromMap($this->doRPCRequest('StopDeploy', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopDeployRequest $request
     *
     * @return StopDeployResponse
     */
    public function stopDeploy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDeployWithOptions($request, $runtime);
    }

    /**
     * @param StopMonitorRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopMonitorResponse
     */
    public function stopMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopMonitorResponse::fromMap($this->doRPCRequest('StopMonitor', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopMonitorRequest $request
     *
     * @return StopMonitorResponse
     */
    public function stopMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMonitorWithOptions($request, $runtime);
    }

    /**
     * @param GetProfileListRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return GetProfileListResponse
     */
    public function getProfileListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetProfileListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->personIdList)) {
            $request->personIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->personIdList, 'PersonIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->profileIdList)) {
            $request->profileIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->profileIdList, 'ProfileIdList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProfileListResponse::fromMap($this->doRPCRequest('GetProfileList', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProfileListRequest $request
     *
     * @return GetProfileListResponse
     */
    public function getProfileList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProfileListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDataSourceResponse::fromMap($this->doRPCRequest('DeleteDataSource', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDataSourceRequest $request
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoComposeResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetVideoComposeResultResponse
     */
    public function getVideoComposeResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoComposeResultResponse::fromMap($this->doRPCRequest('GetVideoComposeResult', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoComposeResultRequest $request
     *
     * @return GetVideoComposeResultResponse
     */
    public function getVideoComposeResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoComposeResultWithOptions($request, $runtime);
    }

    /**
     * @param ListFaceAlgorithmResultsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListFaceAlgorithmResultsResponse
     */
    public function listFaceAlgorithmResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFaceAlgorithmResultsResponse::fromMap($this->doRPCRequest('ListFaceAlgorithmResults', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFaceAlgorithmResultsRequest $request
     *
     * @return ListFaceAlgorithmResultsResponse
     */
    public function listFaceAlgorithmResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFaceAlgorithmResultsWithOptions($request, $runtime);
    }

    /**
     * @param GetFaceOptionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFaceOptionsResponse
     */
    public function getFaceOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetFaceOptionsResponse::fromMap($this->doRPCRequest('GetFaceOptions', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFaceOptionsRequest $request
     *
     * @return GetFaceOptionsResponse
     */
    public function getFaceOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFaceOptionsWithOptions($request, $runtime);
    }

    /**
     * @param GetProfileDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProfileDetailResponse
     */
    public function getProfileDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProfileDetailResponse::fromMap($this->doRPCRequest('GetProfileDetail', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProfileDetailRequest $request
     *
     * @return GetProfileDetailResponse
     */
    public function getProfileDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProfileDetailWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDeviceResponse
     */
    public function createDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceResponse::fromMap($this->doRPCRequest('CreateDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDeviceRequest $request
     *
     * @return CreateDeviceResponse
     */
    public function createDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CreateMarkerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMarkerResponse
     */
    public function createMarkerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMarkerResponse::fromMap($this->doRPCRequest('CreateMarker', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMarkerRequest $request
     *
     * @return CreateMarkerResponse
     */
    public function createMarker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMarkerWithOptions($request, $runtime);
    }

    /**
     * @param CreateCorpRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateCorpResponse
     */
    public function createCorpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCorpResponse::fromMap($this->doRPCRequest('CreateCorp', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCorpRequest $request
     *
     * @return CreateCorpResponse
     */
    public function createCorp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCorpWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProfileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProfileResponse
     */
    public function updateProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProfileResponse::fromMap($this->doRPCRequest('UpdateProfile', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProfileRequest $request
     *
     * @return UpdateProfileResponse
     */
    public function updateProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProfileWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceCaptureStrategyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDeviceCaptureStrategyResponse
     */
    public function getDeviceCaptureStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceCaptureStrategyResponse::fromMap($this->doRPCRequest('GetDeviceCaptureStrategy', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDeviceCaptureStrategyRequest $request
     *
     * @return GetDeviceCaptureStrategyResponse
     */
    public function getDeviceCaptureStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceCaptureStrategyWithOptions($request, $runtime);
    }

    /**
     * @param StartTrainRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StartTrainResponse
     */
    public function startTrainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartTrainResponse::fromMap($this->doRPCRequest('StartTrain', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartTrainRequest $request
     *
     * @return StartTrainResponse
     */
    public function startTrain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTrainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVideoSummaryTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVideoSummaryTaskResponse
     */
    public function deleteVideoSummaryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVideoSummaryTaskResponse::fromMap($this->doRPCRequest('DeleteVideoSummaryTask', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVideoSummaryTaskRequest $request
     *
     * @return DeleteVideoSummaryTaskResponse
     */
    public function deleteVideoSummaryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVideoSummaryTaskWithOptions($request, $runtime);
    }

    /**
     * @param UnbindUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UnbindUserResponse
     */
    public function unbindUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindUserResponse::fromMap($this->doRPCRequest('UnbindUser', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindUserRequest $request
     *
     * @return UnbindUserResponse
     */
    public function unbindUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindUserWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListPersonsResponse
     */
    public function listPersonsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonsResponse::fromMap($this->doRPCRequest('ListPersons', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonsRequest $request
     *
     * @return ListPersonsResponse
     */
    public function listPersons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonsWithOptions($request, $runtime);
    }

    /**
     * @param ListMotorAlgorithmResultsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListMotorAlgorithmResultsResponse
     */
    public function listMotorAlgorithmResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMotorAlgorithmResultsResponse::fromMap($this->doRPCRequest('ListMotorAlgorithmResults', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMotorAlgorithmResultsRequest $request
     *
     * @return ListMotorAlgorithmResultsResponse
     */
    public function listMotorAlgorithmResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMotorAlgorithmResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonTraceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPersonTraceResponse
     */
    public function listPersonTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonTraceResponse::fromMap($this->doRPCRequest('ListPersonTrace', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonTraceRequest $request
     *
     * @return ListPersonTraceResponse
     */
    public function listPersonTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonTraceWithOptions($request, $runtime);
    }

    /**
     * @param ListDevicesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDevicesResponse
     */
    public function listDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevicesResponse::fromMap($this->doRPCRequest('ListDevices', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevicesRequest $request
     *
     * @return ListDevicesResponse
     */
    public function listDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ReportDeviceCapacityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReportDeviceCapacityResponse
     */
    public function reportDeviceCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportDeviceCapacityResponse::fromMap($this->doRPCRequest('ReportDeviceCapacity', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportDeviceCapacityRequest $request
     *
     * @return ReportDeviceCapacityResponse
     */
    public function reportDeviceCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportDeviceCapacityWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMarkerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMarkerResponse
     */
    public function deleteMarkerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMarkerResponse::fromMap($this->doRPCRequest('DeleteMarker', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMarkerRequest $request
     *
     * @return DeleteMarkerResponse
     */
    public function deleteMarker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMarkerWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonTraceDetailsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListPersonTraceDetailsResponse
     */
    public function listPersonTraceDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonTraceDetailsResponse::fromMap($this->doRPCRequest('ListPersonTraceDetails', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonTraceDetailsRequest $request
     *
     * @return ListPersonTraceDetailsResponse
     */
    public function listPersonTraceDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonTraceDetailsWithOptions($request, $runtime);
    }

    /**
     * @param ListMetricsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListMetricsResponse
     */
    public function listMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMetricsResponse::fromMap($this->doRPCRequest('ListMetrics', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMetricsRequest $request
     *
     * @return ListMetricsResponse
     */
    public function listMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMetricsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNVRDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNVRDeviceResponse
     */
    public function deleteNVRDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNVRDeviceResponse::fromMap($this->doRPCRequest('DeleteNVRDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNVRDeviceRequest $request
     *
     * @return DeleteNVRDeviceResponse
     */
    public function deleteNVRDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNVRDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddProfileCatalogRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddProfileCatalogResponse
     */
    public function addProfileCatalogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddProfileCatalogResponse::fromMap($this->doRPCRequest('AddProfileCatalog', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddProfileCatalogRequest $request
     *
     * @return AddProfileCatalogResponse
     */
    public function addProfileCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProfileCatalogWithOptions($request, $runtime);
    }

    /**
     * @param SampleListRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SampleListResponse
     */
    public function sampleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SampleListResponse::fromMap($this->doRPCRequest('SampleList', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SampleListRequest $request
     *
     * @return SampleListResponse
     */
    public function sampleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sampleListWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeFaceQualityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeFaceQualityResponse
     */
    public function recognizeFaceQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeFaceQualityResponse::fromMap($this->doRPCRequest('RecognizeFaceQuality', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeFaceQualityRequest $request
     *
     * @return RecognizeFaceQualityResponse
     */
    public function recognizeFaceQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFaceQualityWithOptions($request, $runtime);
    }

    /**
     * @param GetTrainAlgorithmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTrainAlgorithmResponse
     */
    public function getTrainAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTrainAlgorithmResponse::fromMap($this->doRPCRequest('GetTrainAlgorithm', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTrainAlgorithmRequest $request
     *
     * @return GetTrainAlgorithmResponse
     */
    public function getTrainAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrainAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrainAlgorithmRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteTrainAlgorithmResponse
     */
    public function deleteTrainAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrainAlgorithmResponse::fromMap($this->doRPCRequest('DeleteTrainAlgorithm', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTrainAlgorithmRequest $request
     *
     * @return DeleteTrainAlgorithmResponse
     */
    public function deleteTrainAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrainAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMarkerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMarkerResponse
     */
    public function updateMarkerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMarkerResponse::fromMap($this->doRPCRequest('UpdateMarker', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMarkerRequest $request
     *
     * @return UpdateMarkerResponse
     */
    public function updateMarker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMarkerWithOptions($request, $runtime);
    }

    /**
     * @param ListCorpGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCorpGroupsResponse
     */
    public function listCorpGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCorpGroupsResponse::fromMap($this->doRPCRequest('ListCorpGroups', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCorpGroupsRequest $request
     *
     * @return ListCorpGroupsResponse
     */
    public function listCorpGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCorpGroupsWithOptions($request, $runtime);
    }

    /**
     * @param StopTrainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopTrainResponse
     */
    public function stopTrainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopTrainResponse::fromMap($this->doRPCRequest('StopTrain', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopTrainRequest $request
     *
     * @return StopTrainResponse
     */
    public function stopTrain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTrainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDevicesResponse::fromMap($this->doRPCRequest('DescribeDevices', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDevicesRequest $request
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDevicesWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceVideoUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDeviceVideoUrlResponse
     */
    public function getDeviceVideoUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceVideoUrlResponse::fromMap($this->doRPCRequest('GetDeviceVideoUrl', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDeviceVideoUrlRequest $request
     *
     * @return GetDeviceVideoUrlResponse
     */
    public function getDeviceVideoUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceVideoUrlWithOptions($request, $runtime);
    }

    /**
     * @param ListCorpsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListCorpsResponse
     */
    public function listCorpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCorpsResponse::fromMap($this->doRPCRequest('ListCorps', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCorpsRequest $request
     *
     * @return ListCorpsResponse
     */
    public function listCorps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCorpsWithOptions($request, $runtime);
    }

    /**
     * @param ListBodyAlgorithmResultsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListBodyAlgorithmResultsResponse
     */
    public function listBodyAlgorithmResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBodyAlgorithmResultsResponse::fromMap($this->doRPCRequest('ListBodyAlgorithmResults', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBodyAlgorithmResultsRequest $request
     *
     * @return ListBodyAlgorithmResultsResponse
     */
    public function listBodyAlgorithmResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBodyAlgorithmResultsWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDeviceConfigResponse
     */
    public function getDeviceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceConfigResponse::fromMap($this->doRPCRequest('GetDeviceConfig', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDeviceConfigRequest $request
     *
     * @return GetDeviceConfigResponse
     */
    public function getDeviceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCorpRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateCorpResponse
     */
    public function updateCorpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCorpResponse::fromMap($this->doRPCRequest('UpdateCorp', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCorpRequest $request
     *
     * @return UpdateCorpResponse
     */
    public function updateCorp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCorpWithOptions($request, $runtime);
    }

    /**
     * @param CreateCorpGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCorpGroupResponse
     */
    public function createCorpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCorpGroupResponse::fromMap($this->doRPCRequest('CreateCorpGroup', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCorpGroupRequest $request
     *
     * @return CreateCorpGroupResponse
     */
    public function createCorpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCorpGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddDeviceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDeviceResponse
     */
    public function addDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDeviceResponse::fromMap($this->doRPCRequest('AddDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddDeviceRequest $request
     *
     * @return AddDeviceResponse
     */
    public function addDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceWithOptions($request, $runtime);
    }

    /**
     * @param GetPersonListRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetPersonListResponse
     */
    public function getPersonListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetPersonListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->corpIdList)) {
            $request->corpIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->corpIdList, 'CorpIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->personIdList)) {
            $request->personIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->personIdList, 'PersonIdList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPersonListResponse::fromMap($this->doRPCRequest('GetPersonList', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPersonListRequest $request
     *
     * @return GetPersonListResponse
     */
    public function getPersonList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPersonListWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrainLabelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTrainLabelResponse
     */
    public function createTrainLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTrainLabelResponse::fromMap($this->doRPCRequest('CreateTrainLabel', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTrainLabelRequest $request
     *
     * @return CreateTrainLabelResponse
     */
    public function createTrainLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrainLabelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProfileCatalogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateProfileCatalogResponse
     */
    public function updateProfileCatalogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProfileCatalogResponse::fromMap($this->doRPCRequest('UpdateProfileCatalog', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProfileCatalogRequest $request
     *
     * @return UpdateProfileCatalogResponse
     */
    public function updateProfileCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProfileCatalogWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonVisitCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPersonVisitCountResponse
     */
    public function listPersonVisitCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonVisitCountResponse::fromMap($this->doRPCRequest('ListPersonVisitCount', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonVisitCountRequest $request
     *
     * @return ListPersonVisitCountResponse
     */
    public function listPersonVisitCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonVisitCountWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSampleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSampleResponse
     */
    public function updateSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSampleResponse::fromMap($this->doRPCRequest('UpdateSample', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSampleRequest $request
     *
     * @return UpdateSampleResponse
     */
    public function updateSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSampleWithOptions($request, $runtime);
    }

    /**
     * @param CreateVideoSummaryTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVideoSummaryTaskResponse
     */
    public function createVideoSummaryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVideoSummaryTaskResponse::fromMap($this->doRPCRequest('CreateVideoSummaryTask', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVideoSummaryTaskRequest $request
     *
     * @return CreateVideoSummaryTaskResponse
     */
    public function createVideoSummaryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoSummaryTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListCorpMetricsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCorpMetricsResponse
     */
    public function listCorpMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCorpMetricsResponse::fromMap($this->doRPCRequest('ListCorpMetrics', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCorpMetricsRequest $request
     *
     * @return ListCorpMetricsResponse
     */
    public function listCorpMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCorpMetricsWithOptions($request, $runtime);
    }

    /**
     * @param ListEventAlgorithmDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEventAlgorithmDetailsResponse
     */
    public function listEventAlgorithmDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEventAlgorithmDetailsResponse::fromMap($this->doRPCRequest('ListEventAlgorithmDetails', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEventAlgorithmDetailsRequest $request
     *
     * @return ListEventAlgorithmDetailsResponse
     */
    public function listEventAlgorithmDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventAlgorithmDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetCatalogListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCatalogListResponse
     */
    public function getCatalogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCatalogListResponse::fromMap($this->doRPCRequest('GetCatalogList', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCatalogListRequest $request
     *
     * @return GetCatalogListResponse
     */
    public function getCatalogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCatalogListWithOptions($request, $runtime);
    }

    /**
     * @param ListNVRDeviceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListNVRDeviceResponse
     */
    public function listNVRDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNVRDeviceResponse::fromMap($this->doRPCRequest('ListNVRDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListNVRDeviceRequest $request
     *
     * @return ListNVRDeviceResponse
     */
    public function listNVRDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNVRDeviceWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceLiveUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDeviceLiveUrlResponse
     */
    public function getDeviceLiveUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDeviceLiveUrlResponse::fromMap($this->doRPCRequest('GetDeviceLiveUrl', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDeviceLiveUrlRequest $request
     *
     * @return GetDeviceLiveUrlResponse
     */
    public function getDeviceLiveUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceLiveUrlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCorpGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCorpGroupResponse
     */
    public function deleteCorpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCorpGroupResponse::fromMap($this->doRPCRequest('DeleteCorpGroup', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCorpGroupRequest $request
     *
     * @return DeleteCorpGroupResponse
     */
    public function deleteCorpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCorpGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrainAlgorithmRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTrainAlgorithmResponse
     */
    public function updateTrainAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTrainAlgorithmResponse::fromMap($this->doRPCRequest('UpdateTrainAlgorithm', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTrainAlgorithmRequest $request
     *
     * @return UpdateTrainAlgorithmResponse
     */
    public function updateTrainAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrainAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserResponse::fromMap($this->doRPCRequest('CreateUser', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @param ListAlgorithmNamesByDeviceIdsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListAlgorithmNamesByDeviceIdsResponse
     */
    public function listAlgorithmNamesByDeviceIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAlgorithmNamesByDeviceIdsResponse::fromMap($this->doRPCRequest('ListAlgorithmNamesByDeviceIds', '2020-05-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlgorithmNamesByDeviceIdsRequest $request
     *
     * @return ListAlgorithmNamesByDeviceIdsResponse
     */
    public function listAlgorithmNamesByDeviceIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlgorithmNamesByDeviceIdsWithOptions($request, $runtime);
    }

    /**
     * @param AddDataSourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddDataSourceResponse
     */
    public function addDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDataSourceResponse::fromMap($this->doRPCRequest('AddDataSource', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddDataSourceRequest $request
     *
     * @return AddDataSourceResponse
     */
    public function addDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindCorpGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindCorpGroupResponse
     */
    public function unbindCorpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindCorpGroupResponse::fromMap($this->doRPCRequest('UnbindCorpGroup', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindCorpGroupRequest $request
     *
     * @return UnbindCorpGroupResponse
     */
    public function unbindCorpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindCorpGroupWithOptions($request, $runtime);
    }

    /**
     * @param UploadFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UploadFileResponse
     */
    public function uploadFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadFileResponse::fromMap($this->doRPCRequest('UploadFile', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadFileRequest $request
     *
     * @return UploadFileResponse
     */
    public function uploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadFileWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserResponse::fromMap($this->doRPCRequest('UpdateUser', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @param GetTrainAlgorithRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTrainAlgorithResponse
     */
    public function getTrainAlgorithWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTrainAlgorithResponse::fromMap($this->doRPCRequest('GetTrainAlgorith', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTrainAlgorithRequest $request
     *
     * @return GetTrainAlgorithResponse
     */
    public function getTrainAlgorith($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrainAlgorithWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoSummaryTaskResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetVideoSummaryTaskResultResponse
     */
    public function getVideoSummaryTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoSummaryTaskResultResponse::fromMap($this->doRPCRequest('GetVideoSummaryTaskResult', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoSummaryTaskResultRequest $request
     *
     * @return GetVideoSummaryTaskResultResponse
     */
    public function getVideoSummaryTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoSummaryTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeviceGroupsResponse
     */
    public function listDeviceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeviceGroupsResponse::fromMap($this->doRPCRequest('ListDeviceGroups', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceGroupsRequest $request
     *
     * @return ListDeviceGroupsResponse
     */
    public function listDeviceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param GetUserDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetUserDetailResponse
     */
    public function getUserDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserDetailResponse::fromMap($this->doRPCRequest('GetUserDetail', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserDetailRequest $request
     *
     * @return GetUserDetailResponse
     */
    public function getUserDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserDetailWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceCaptureStrategyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateDeviceCaptureStrategyResponse
     */
    public function updateDeviceCaptureStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDeviceCaptureStrategyResponse::fromMap($this->doRPCRequest('UpdateDeviceCaptureStrategy', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDeviceCaptureStrategyRequest $request
     *
     * @return UpdateDeviceCaptureStrategyResponse
     */
    public function updateDeviceCaptureStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceCaptureStrategyWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserGroupResponse::fromMap($this->doRPCRequest('CreateUserGroup', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUserGroupRequest $request
     *
     * @return CreateUserGroupResponse
     */
    public function createUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param InvokeMotorModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InvokeMotorModelResponse
     */
    public function invokeMotorModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvokeMotorModelResponse::fromMap($this->doRPCRequest('InvokeMotorModel', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InvokeMotorModelRequest $request
     *
     * @return InvokeMotorModelResponse
     */
    public function invokeMotorModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeMotorModelWithOptions($request, $runtime);
    }

    /**
     * @param ListEventAlgorithmResultsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEventAlgorithmResultsResponse
     */
    public function listEventAlgorithmResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEventAlgorithmResultsResponse::fromMap($this->doRPCRequest('ListEventAlgorithmResults', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEventAlgorithmResultsRequest $request
     *
     * @return ListEventAlgorithmResultsResponse
     */
    public function listEventAlgorithmResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventAlgorithmResultsWithOptions($request, $runtime);
    }

    /**
     * @param GetFaceModelResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetFaceModelResultResponse
     */
    public function getFaceModelResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetFaceModelResultResponse::fromMap($this->doRPCRequest('GetFaceModelResult', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFaceModelResultRequest $request
     *
     * @return GetFaceModelResultResponse
     */
    public function getFaceModelResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFaceModelResultWithOptions($request, $runtime);
    }

    /**
     * @param RetryStartDeployRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RetryStartDeployResponse
     */
    public function retryStartDeployWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RetryStartDeployResponse::fromMap($this->doRPCRequest('RetryStartDeploy', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RetryStartDeployRequest $request
     *
     * @return RetryStartDeployResponse
     */
    public function retryStartDeploy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryStartDeployWithOptions($request, $runtime);
    }

    /**
     * @param SyncDeviceTimeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SyncDeviceTimeResponse
     */
    public function syncDeviceTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncDeviceTimeResponse::fromMap($this->doRPCRequest('SyncDeviceTime', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SyncDeviceTimeRequest $request
     *
     * @return SyncDeviceTimeResponse
     */
    public function syncDeviceTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncDeviceTimeWithOptions($request, $runtime);
    }

    /**
     * @param CreateSampleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSampleResponse
     */
    public function createSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSampleResponse::fromMap($this->doRPCRequest('CreateSample', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSampleRequest $request
     *
     * @return CreateSampleResponse
     */
    public function createSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleWithOptions($request, $runtime);
    }

    /**
     * @param AddMonitorRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddMonitorResponse
     */
    public function addMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMonitorResponse::fromMap($this->doRPCRequest('AddMonitor', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddMonitorRequest $request
     *
     * @return AddMonitorResponse
     */
    public function addMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProfileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProfileResponse
     */
    public function deleteProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProfileResponse::fromMap($this->doRPCRequest('DeleteProfile', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProfileRequest $request
     *
     * @return DeleteProfileResponse
     */
    public function deleteProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProfileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProfileCatalogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProfileCatalogResponse
     */
    public function deleteProfileCatalogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProfileCatalogResponse::fromMap($this->doRPCRequest('DeleteProfileCatalog', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProfileCatalogRequest $request
     *
     * @return DeleteProfileCatalogResponse
     */
    public function deleteProfileCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProfileCatalogWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIPCDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteIPCDeviceResponse
     */
    public function deleteIPCDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIPCDeviceResponse::fromMap($this->doRPCRequest('DeleteIPCDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteIPCDeviceRequest $request
     *
     * @return DeleteIPCDeviceResponse
     */
    public function deleteIPCDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIPCDeviceWithOptions($request, $runtime);
    }

    /**
     * @param GetMonitorResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMonitorResultResponse
     */
    public function getMonitorResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMonitorResultResponse::fromMap($this->doRPCRequest('GetMonitorResult', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMonitorResultRequest $request
     *
     * @return GetMonitorResultResponse
     */
    public function getMonitorResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonitorResultWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeImageResponse
     */
    public function recognizeImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeImageResponse::fromMap($this->doRPCRequest('RecognizeImage', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeImageRequest $request
     *
     * @return RecognizeImageResponse
     */
    public function recognizeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserResponse::fromMap($this->doRPCRequest('DeleteUser', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDeviceResponse
     */
    public function updateDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDeviceResponse::fromMap($this->doRPCRequest('UpdateDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDeviceRequest $request
     *
     * @return UpdateDeviceResponse
     */
    public function updateDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceWithOptions($request, $runtime);
    }

    /**
     * @param RegisterDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RegisterDeviceResponse
     */
    public function registerDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterDeviceResponse::fromMap($this->doRPCRequest('RegisterDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterDeviceRequest $request
     *
     * @return RegisterDeviceResponse
     */
    public function registerDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteChannelResponse
     */
    public function deleteChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteChannelResponse::fromMap($this->doRPCRequest('DeleteChannel', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteChannelRequest $request
     *
     * @return DeleteChannelResponse
     */
    public function deleteChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChannelWithOptions($request, $runtime);
    }

    /**
     * @param GetTrainLabelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTrainLabelResponse
     */
    public function getTrainLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTrainLabelResponse::fromMap($this->doRPCRequest('GetTrainLabel', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTrainLabelRequest $request
     *
     * @return GetTrainLabelResponse
     */
    public function getTrainLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrainLabelWithOptions($request, $runtime);
    }

    /**
     * @param ListMarkerRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMarkerResponse
     */
    public function listMarkerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMarkerResponse::fromMap($this->doRPCRequest('ListMarker', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMarkerRequest $request
     *
     * @return ListMarkerResponse
     */
    public function listMarker($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMarkerWithOptions($request, $runtime);
    }

    /**
     * @param CreateVideoComposeTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVideoComposeTaskResponse
     */
    public function createVideoComposeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVideoComposeTaskResponse::fromMap($this->doRPCRequest('CreateVideoComposeTask', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVideoComposeTaskRequest $request
     *
     * @return CreateVideoComposeTaskResponse
     */
    public function createVideoComposeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoComposeTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceForInstanceRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDeviceForInstanceResponse
     */
    public function deleteDeviceForInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteDeviceForInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->devices)) {
            $request->devicesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->devices, 'Devices', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeviceForInstanceResponse::fromMap($this->doRPCRequest('DeleteDeviceForInstance', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDeviceForInstanceRequest $request
     *
     * @return DeleteDeviceForInstanceResponse
     */
    public function deleteDeviceForInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceForInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserGroupResponse::fromMap($this->doRPCRequest('UpdateUserGroup', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserGroupRequest $request
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param BindPersonRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return BindPersonResponse
     */
    public function bindPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindPersonResponse::fromMap($this->doRPCRequest('BindPerson', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindPersonRequest $request
     *
     * @return BindPersonResponse
     */
    public function bindPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPersonWithOptions($request, $runtime);
    }

    /**
     * @param GetBodyOptionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetBodyOptionsResponse
     */
    public function getBodyOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBodyOptionsResponse::fromMap($this->doRPCRequest('GetBodyOptions', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetBodyOptionsRequest $request
     *
     * @return GetBodyOptionsResponse
     */
    public function getBodyOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBodyOptionsWithOptions($request, $runtime);
    }

    /**
     * @param BindCorpGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindCorpGroupResponse
     */
    public function bindCorpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindCorpGroupResponse::fromMap($this->doRPCRequest('BindCorpGroup', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindCorpGroupRequest $request
     *
     * @return BindCorpGroupResponse
     */
    public function bindCorpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindCorpGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListNVRChannelDeviceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListNVRChannelDeviceResponse
     */
    public function listNVRChannelDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNVRChannelDeviceResponse::fromMap($this->doRPCRequest('ListNVRChannelDevice', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListNVRChannelDeviceRequest $request
     *
     * @return ListNVRChannelDeviceResponse
     */
    public function listNVRChannelDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNVRChannelDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddProfileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddProfileResponse
     */
    public function addProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddProfileResponse::fromMap($this->doRPCRequest('AddProfile', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddProfileRequest $request
     *
     * @return AddProfileResponse
     */
    public function addProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProfileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserGroupResponse::fromMap($this->doRPCRequest('DeleteUserGroup', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserGroupRequest $request
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListUserGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListUserGroupsResponse
     */
    public function listUserGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserGroupsResponse::fromMap($this->doRPCRequest('ListUserGroups', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserGroupsRequest $request
     *
     * @return ListUserGroupsResponse
     */
    public function listUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsWithOptions($request, $runtime);
    }

    /**
     * @param SearchBodyRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return SearchBodyResponse
     */
    public function searchBodyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchBodyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->optionList)) {
            $request->optionListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->optionList, 'OptionList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchBodyResponse::fromMap($this->doRPCRequest('SearchBody', '2020-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchBodyRequest $request
     *
     * @return SearchBodyResponse
     */
    public function searchBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchBodyWithOptions($request, $runtime);
    }
}
