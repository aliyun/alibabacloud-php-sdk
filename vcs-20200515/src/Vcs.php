<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateUserRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateUserResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateVideoComposeTaskRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateVideoComposeTaskResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateVideoSummaryTaskRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\CreateVideoSummaryTaskResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteCorpGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteCorpGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProfileCatalogRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProfileCatalogResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProfileRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteProfileResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteRecordsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\DeleteRecordsResponse;
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
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceConfigRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceConfigResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceLiveUrlRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceLiveUrlResponse;
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
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetUserDetailRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetUserDetailResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetVideoComposeResultRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetVideoComposeResultResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetVideoSummaryTaskResultRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetVideoSummaryTaskResultResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\InvokeMotorModelRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\InvokeMotorModelResponse;
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
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMetricsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMetricsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMotorAlgorithmResultsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListMotorAlgorithmResultsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonsRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonsResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonVisitCountRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonVisitCountResponse;
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
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\StopMonitorResponse;
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
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateDeviceResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMonitorRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateMonitorResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateProfileCatalogRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateProfileCatalogResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateProfileRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateProfileResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserGroupRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserGroupResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UploadFileRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UploadFileResponse;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UploadImageRequest;
use AlibabaCloud\SDK\Vcs\V20200515\Models\UploadImageResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Vcs extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vcs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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

        return GetMonitorListResponse::fromMap($this->doRequest('GetMonitorList', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListDeviceGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeviceGroupsResponse
     */
    public function listDeviceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDeviceGroupsResponse::fromMap($this->doRequest('ListDeviceGroups', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param SearchObjectRequest $tmp
     * @param RuntimeOptions      $runtime
     *
     * @return SearchObjectResponse
     */
    public function searchObjectWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new SearchObjectShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->deviceList)) {
            $request->deviceListShrink = Utils::toJSONString($tmp->deviceList);
        }
        if (!Utils::isUnset($tmp->conditions)) {
            $request->conditionsShrink = Utils::toJSONString($tmp->conditions);
        }
        if (!Utils::isUnset($tmp->imagePath)) {
            $request->imagePathShrink = Utils::toJSONString($tmp->imagePath);
        }

        return SearchObjectResponse::fromMap($this->doRequest('SearchObject', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DescribeDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDevicesResponse::fromMap($this->doRequest('DescribeDevices', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetProfileListRequest $tmp
     * @param RuntimeOptions        $runtime
     *
     * @return GetProfileListResponse
     */
    public function getProfileListWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new GetProfileListShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->personIdList)) {
            $request->personIdListShrink = Utils::toJSONString($tmp->personIdList);
        }
        if (!Utils::isUnset($tmp->profileIdList)) {
            $request->profileIdListShrink = Utils::toJSONString($tmp->profileIdList);
        }

        return GetProfileListResponse::fromMap($this->doRequest('GetProfileList', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetProfileDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProfileDetailResponse
     */
    public function getProfileDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetProfileDetailResponse::fromMap($this->doRequest('GetProfileDetail', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DeleteProfileCatalogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProfileCatalogResponse
     */
    public function deleteProfileCatalogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProfileCatalogResponse::fromMap($this->doRequest('DeleteProfileCatalog', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param BindPersonRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return BindPersonResponse
     */
    public function bindPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindPersonResponse::fromMap($this->doRequest('BindPerson', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UpdateProfileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProfileResponse
     */
    public function updateProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateProfileResponse::fromMap($this->doRequest('UpdateProfile', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UnbindPersonRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnbindPersonResponse
     */
    public function unbindPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindPersonResponse::fromMap($this->doRequest('UnbindPerson', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param AddProfileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddProfileResponse
     */
    public function addProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddProfileResponse::fromMap($this->doRequest('AddProfile', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UpdateProfileCatalogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateProfileCatalogResponse
     */
    public function updateProfileCatalogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateProfileCatalogResponse::fromMap($this->doRequest('UpdateProfileCatalog', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param AddProfileCatalogRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddProfileCatalogResponse
     */
    public function addProfileCatalogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddProfileCatalogResponse::fromMap($this->doRequest('AddProfileCatalog', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetCatalogListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCatalogListResponse
     */
    public function getCatalogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetCatalogListResponse::fromMap($this->doRequest('GetCatalogList', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DeleteProfileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProfileResponse
     */
    public function deleteProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProfileResponse::fromMap($this->doRequest('DeleteProfile', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UnbindCorpGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindCorpGroupResponse
     */
    public function unbindCorpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindCorpGroupResponse::fromMap($this->doRequest('UnbindCorpGroup', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param BindCorpGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindCorpGroupResponse
     */
    public function bindCorpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindCorpGroupResponse::fromMap($this->doRequest('BindCorpGroup', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListUserGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListUserGroupsResponse
     */
    public function listUserGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListUserGroupsResponse::fromMap($this->doRequest('ListUserGroups', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetPersonListRequest $tmp
     * @param RuntimeOptions       $runtime
     *
     * @return GetPersonListResponse
     */
    public function getPersonListWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new GetPersonListShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->corpIdList)) {
            $request->corpIdListShrink = Utils::toJSONString($tmp->corpIdList);
        }
        if (!Utils::isUnset($tmp->personIdList)) {
            $request->personIdListShrink = Utils::toJSONString($tmp->personIdList);
        }

        return GetPersonListResponse::fromMap($this->doRequest('GetPersonList', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListUsersRequest $tmp
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new ListUsersShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->personList)) {
            $request->personListShrink = Utils::toJSONString($tmp->personList);
        }
        if (!Utils::isUnset($tmp->userList)) {
            $request->userListShrink = Utils::toJSONString($tmp->userList);
        }

        return ListUsersResponse::fromMap($this->doRequest('ListUsers', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateUserResponse::fromMap($this->doRequest('CreateUser', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param BindUserRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return BindUserResponse
     */
    public function bindUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindUserResponse::fromMap($this->doRequest('BindUser', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetUserDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetUserDetailResponse
     */
    public function getUserDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetUserDetailResponse::fromMap($this->doRequest('GetUserDetail', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UploadImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UploadImageResponse
     */
    public function uploadImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UploadImageResponse::fromMap($this->doRequest('UploadImage', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UpdateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateUserGroupResponse::fromMap($this->doRequest('UpdateUserGroup', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param CreateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateUserGroupResponse::fromMap($this->doRequest('CreateUserGroup', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UnbindUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UnbindUserResponse
     */
    public function unbindUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindUserResponse::fromMap($this->doRequest('UnbindUser', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateUserResponse::fromMap($this->doRequest('UpdateUser', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteUserResponse::fromMap($this->doRequest('DeleteUser', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DeleteUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteUserGroupResponse::fromMap($this->doRequest('DeleteUserGroup', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListPersonVisitCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPersonVisitCountResponse
     */
    public function listPersonVisitCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPersonVisitCountResponse::fromMap($this->doRequest('ListPersonVisitCount', 'HTTPS', 'POST', '2020-05-15', 'AK,APP', null, $request->toMap(), $runtime));
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
     * @param ListEventAlgorithmDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEventAlgorithmDetailsResponse
     */
    public function listEventAlgorithmDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListEventAlgorithmDetailsResponse::fromMap($this->doRequest('ListEventAlgorithmDetails', 'HTTPS', 'POST', '2020-05-15', 'AK,APP', null, $request->toMap(), $runtime));
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
     * @param ListCorpMetricsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCorpMetricsResponse
     */
    public function listCorpMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListCorpMetricsResponse::fromMap($this->doRequest('ListCorpMetrics', 'HTTPS', 'POST', '2020-05-15', 'AK,APP', null, $request->toMap(), $runtime));
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
     * @param ListPersonTraceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPersonTraceResponse
     */
    public function listPersonTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPersonTraceResponse::fromMap($this->doRequest('ListPersonTrace', 'HTTPS', 'POST', '2020-05-15', 'AK,APP', null, $request->toMap(), $runtime));
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
     * @param ListCorpGroupMetricsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListCorpGroupMetricsResponse
     */
    public function listCorpGroupMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListCorpGroupMetricsResponse::fromMap($this->doRequest('ListCorpGroupMetrics', 'HTTPS', 'POST', '2020-05-15', 'AK,APP', null, $request->toMap(), $runtime));
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
     * @param GetFaceModelResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetFaceModelResultResponse
     */
    public function getFaceModelResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFaceModelResultResponse::fromMap($this->doRequest('GetFaceModelResult', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param CreateCorpGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCorpGroupResponse
     */
    public function createCorpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateCorpGroupResponse::fromMap($this->doRequest('CreateCorpGroup', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListCorpGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCorpGroupsResponse
     */
    public function listCorpGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListCorpGroupsResponse::fromMap($this->doRequest('ListCorpGroups', 'HTTPS', 'POST', '2020-05-15', 'AK,APP', null, $request->toMap(), $runtime));
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
     * @param DeleteCorpGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCorpGroupResponse
     */
    public function deleteCorpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCorpGroupResponse::fromMap($this->doRequest('DeleteCorpGroup', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param InvokeMotorModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InvokeMotorModelResponse
     */
    public function invokeMotorModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return InvokeMotorModelResponse::fromMap($this->doRequest('InvokeMotorModel', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetDeviceConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDeviceConfigResponse
     */
    public function getDeviceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceConfigResponse::fromMap($this->doRequest('GetDeviceConfig', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param SyncDeviceTimeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SyncDeviceTimeResponse
     */
    public function syncDeviceTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SyncDeviceTimeResponse::fromMap($this->doRequest('SyncDeviceTime', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param RegisterDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RegisterDeviceResponse
     */
    public function registerDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RegisterDeviceResponse::fromMap($this->doRequest('RegisterDevice', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ReportDeviceCapacityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReportDeviceCapacityResponse
     */
    public function reportDeviceCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReportDeviceCapacityResponse::fromMap($this->doRequest('ReportDeviceCapacity', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param SaveVideoSummaryTaskVideoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SaveVideoSummaryTaskVideoResponse
     */
    public function saveVideoSummaryTaskVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SaveVideoSummaryTaskVideoResponse::fromMap($this->doRequest('SaveVideoSummaryTaskVideo', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListBodyAlgorithmResultsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListBodyAlgorithmResultsResponse
     */
    public function listBodyAlgorithmResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBodyAlgorithmResultsResponse::fromMap($this->doRequest('ListBodyAlgorithmResults', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param AddDataSourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddDataSourceResponse
     */
    public function addDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDataSourceResponse::fromMap($this->doRequest('AddDataSource', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetVideoComposeResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetVideoComposeResultResponse
     */
    public function getVideoComposeResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetVideoComposeResultResponse::fromMap($this->doRequest('GetVideoComposeResult', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param CreateVideoComposeTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVideoComposeTaskResponse
     */
    public function createVideoComposeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVideoComposeTaskResponse::fromMap($this->doRequest('CreateVideoComposeTask', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDataSourceResponse::fromMap($this->doRequest('DeleteDataSource', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UploadFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UploadFileResponse
     */
    public function uploadFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UploadFileResponse::fromMap($this->doRequest('UploadFile', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListEventAlgorithmResultsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEventAlgorithmResultsResponse
     */
    public function listEventAlgorithmResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListEventAlgorithmResultsResponse::fromMap($this->doRequest('ListEventAlgorithmResults', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DeleteVideoSummaryTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVideoSummaryTaskResponse
     */
    public function deleteVideoSummaryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVideoSummaryTaskResponse::fromMap($this->doRequest('DeleteVideoSummaryTask', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetVideoSummaryTaskResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetVideoSummaryTaskResultResponse
     */
    public function getVideoSummaryTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetVideoSummaryTaskResultResponse::fromMap($this->doRequest('GetVideoSummaryTaskResult', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param CreateVideoSummaryTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVideoSummaryTaskResponse
     */
    public function createVideoSummaryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVideoSummaryTaskResponse::fromMap($this->doRequest('CreateVideoSummaryTask', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListMotorAlgorithmResultsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListMotorAlgorithmResultsResponse
     */
    public function listMotorAlgorithmResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListMotorAlgorithmResultsResponse::fromMap($this->doRequest('ListMotorAlgorithmResults', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListFaceAlgorithmResultsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListFaceAlgorithmResultsResponse
     */
    public function listFaceAlgorithmResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFaceAlgorithmResultsResponse::fromMap($this->doRequest('ListFaceAlgorithmResults', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListMetricsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListMetricsResponse
     */
    public function listMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListMetricsResponse::fromMap($this->doRequest('ListMetrics', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DeleteRecordsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRecordsResponse
     */
    public function deleteRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRecordsResponse::fromMap($this->doRequest('DeleteRecords', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param RecognizeFaceQualityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeFaceQualityResponse
     */
    public function recognizeFaceQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeFaceQualityResponse::fromMap($this->doRequest('RecognizeFaceQuality', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListPersonsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListPersonsResponse
     */
    public function listPersonsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPersonsResponse::fromMap($this->doRequest('ListPersons', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetPersonDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPersonDetailResponse
     */
    public function getPersonDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPersonDetailResponse::fromMap($this->doRequest('GetPersonDetail', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetFaceOptionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFaceOptionsResponse
     */
    public function getFaceOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFaceOptionsResponse::fromMap($this->doRequest('GetFaceOptions', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetBodyOptionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetBodyOptionsResponse
     */
    public function getBodyOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBodyOptionsResponse::fromMap($this->doRequest('GetBodyOptions', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param StopMonitorRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopMonitorResponse
     */
    public function stopMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopMonitorResponse::fromMap($this->doRequest('StopMonitor', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param SearchBodyRequest $tmp
     * @param RuntimeOptions    $runtime
     *
     * @return SearchBodyResponse
     */
    public function searchBodyWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new SearchBodyShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->optionList)) {
            $request->optionListShrink = Utils::toJSONString($tmp->optionList);
        }

        return SearchBodyResponse::fromMap($this->doRequest('SearchBody', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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

    /**
     * @param AddMonitorRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddMonitorResponse
     */
    public function addMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddMonitorResponse::fromMap($this->doRequest('AddMonitor', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetMonitorResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMonitorResultResponse
     */
    public function getMonitorResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMonitorResultResponse::fromMap($this->doRequest('GetMonitorResult', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UpdateMonitorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateMonitorResponse
     */
    public function updateMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMonitorResponse::fromMap($this->doRequest('UpdateMonitor', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetDeviceVideoUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDeviceVideoUrlResponse
     */
    public function getDeviceVideoUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceVideoUrlResponse::fromMap($this->doRequest('GetDeviceVideoUrl', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetInventoryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetInventoryResponse
     */
    public function getInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInventoryResponse::fromMap($this->doRequest('GetInventory', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param RecognizeImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeImageResponse
     */
    public function recognizeImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeImageResponse::fromMap($this->doRequest('RecognizeImage', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListCorpsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListCorpsResponse
     */
    public function listCorpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListCorpsResponse::fromMap($this->doRequest('ListCorps', 'HTTPS', 'POST', '2020-05-15', 'AK,APP', null, $request->toMap(), $runtime));
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
     * @param UpdateCorpRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateCorpResponse
     */
    public function updateCorpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateCorpResponse::fromMap($this->doRequest('UpdateCorp', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param UpdateDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDeviceResponse
     */
    public function updateDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDeviceResponse::fromMap($this->doRequest('UpdateDevice', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param ListDevicesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDevicesResponse
     */
    public function listDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDevicesResponse::fromMap($this->doRequest('ListDevices', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetDeviceLiveUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDeviceLiveUrlResponse
     */
    public function getDeviceLiveUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceLiveUrlResponse::fromMap($this->doRequest('GetDeviceLiveUrl', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param SearchFaceRequest $tmp
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new SearchFaceShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->optionList)) {
            $request->optionListShrink = Utils::toJSONString($tmp->optionList);
        }

        return SearchFaceResponse::fromMap($this->doRequest('SearchFace', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param AddDeviceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDeviceResponse
     */
    public function addDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDeviceResponse::fromMap($this->doRequest('AddDevice', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param CreateCorpRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateCorpResponse
     */
    public function createCorpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateCorpResponse::fromMap($this->doRequest('CreateCorp', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
     * @param DeleteDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceResponse::fromMap($this->doRequest('DeleteDevice', 'HTTPS', 'POST', '2020-05-15', 'AK', null, $request->toMap(), $runtime));
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap['regionId'])) {
            return @$endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
