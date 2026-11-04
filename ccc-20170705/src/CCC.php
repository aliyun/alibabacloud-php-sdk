<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddAgentDeviceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddAgentDeviceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneNumberRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneNumberResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneTagsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneTagsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AssignUsersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AssignUsersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CallOnlinePrivacyNumberRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CallOnlinePrivacyNumberResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CommitContactFlowVersionModificationRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CommitContactFlowVersionModificationResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateFaultRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateFaultResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateMediaRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateMediaResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateVoiceAppraiseRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateVoiceAppraiseResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteMediaRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteMediaResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeletePhoneTagsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeletePhoneTagsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DialExRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DialExResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DisableTrunkProvidersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DisableTrunkProvidersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadAllTypeRecordingRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadAllTypeRecordingResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadRecordingRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadRecordingResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GenerateAgentStatisticReportResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetAgentDataRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetAgentDataResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConfigRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConfigResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportSinceMidnightRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportSinceMidnightResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetNumberRegionInfoRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetNumberRegionInfoResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetRecordOssUploadParamRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetRecordOssUploadParamResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetRoutePointRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetRoutePointResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetSmsConfigRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetSmsConfigResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTURNCredentialsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTURNCredentialsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTURNServerListRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTURNServerListResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\LaunchAppraiseRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\LaunchAppraiseResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\LaunchShortMessageAppraiseRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\LaunchShortMessageAppraiseResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentDevicesRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentDevicesResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentEventsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentEventsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStateLogsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStateLogsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStatesRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStatesResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsByIntervalResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsSinceMidnightRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsSinceMidnightResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallMeasureSummaryReportsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallMeasureSummaryReportsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListConfigRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListConfigResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListContactFlowsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListContactFlowsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListInstancesOfUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListIvrTrackingDetailRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListIvrTrackingDetailResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListMediasRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListMediasResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListOutboundPhoneNumberOfUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListOutboundPhoneNumberOfUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneNumbersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneNumbersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneTagsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneTagsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRealTimeAgentRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRealTimeAgentResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingOfDualTrackRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingOfDualTrackResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsByContactIdRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsByContactIdResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRolesRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRolesResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsOfUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsOfUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupStatesRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupStatesResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsSinceMidnightRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsSinceMidnightResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTransferableSkillGroupsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTransferableSkillGroupsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTrunkProvidersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTrunksOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTrunksOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyAgentDeviceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyAgentDeviceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPhoneNumberRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPhoneNumberResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPhoneTagsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPhoneTagsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPrimaryTrunksOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPrimaryTrunksOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPrivacyNumberCallDetailRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPrivacyNumberCallDetailResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupBasicInfoRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupBasicInfoResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupOfUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupOfUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupOutboundNumbersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupOutboundNumbersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickGlobalOutboundNumbersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickGlobalOutboundNumbersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickLocalNumberRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickLocalNumberResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\PublishContactFlowVersionRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\PublishContactFlowVersionResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\RefreshTokenRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\RefreshTokenResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\RemovePhoneNumberRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\RemovePhoneNumberResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\RemoveUsersFromSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\RemoveUsersFromSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\RemoveUsersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\RemoveUsersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\RequestLoginInfoRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\RequestLoginInfoResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ResetUserStatusRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ResetUserStatusResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\SaveWebRTCStatsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\SaveWebRTCStatsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\SendPredefinedShortMessageRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\SendPredefinedShortMessageResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\StartBack2BackCallRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\StartBack2BackCallResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CCC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'ccc.aliyuncs.com',
            'ap-south-1' => 'ccc.aliyuncs.com',
            'ap-southeast-1' => 'ccc.aliyuncs.com',
            'ap-southeast-2' => 'ccc.aliyuncs.com',
            'ap-southeast-3' => 'ccc.aliyuncs.com',
            'ap-southeast-5' => 'ccc.aliyuncs.com',
            'cn-beijing' => 'ccc.aliyuncs.com',
            'cn-chengdu' => 'ccc.aliyuncs.com',
            'cn-hongkong' => 'ccc.aliyuncs.com',
            'cn-huhehaote' => 'ccc.aliyuncs.com',
            'cn-qingdao' => 'ccc.aliyuncs.com',
            'cn-shenzhen' => 'ccc.aliyuncs.com',
            'cn-zhangjiakou' => 'ccc.aliyuncs.com',
            'eu-central-1' => 'ccc.aliyuncs.com',
            'eu-west-1' => 'ccc.aliyuncs.com',
            'me-east-1' => 'ccc.aliyuncs.com',
            'us-east-1' => 'ccc.aliyuncs.com',
            'us-west-1' => 'ccc.aliyuncs.com',
            'cn-hangzhou-finance' => 'ccc.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'ccc.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ccc.aliyuncs.com',
            'cn-north-2-gov-1' => 'ccc.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ccc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 添加坐席的设备信息.
     *
     * @param request - AddAgentDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAgentDeviceResponse
     *
     * @param AddAgentDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddAgentDeviceResponse
     */
    public function addAgentDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientPort) {
            @$query['ClientPort'] = $request->clientPort;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->browserVersion) {
            @$body['BrowserVersion'] = $request->browserVersion;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddAgentDevice',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAgentDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加坐席的设备信息.
     *
     * @param request - AddAgentDeviceRequest
     *
     * @returns AddAgentDeviceResponse
     *
     * @param AddAgentDeviceRequest $request
     *
     * @return AddAgentDeviceResponse
     */
    public function addAgentDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAgentDeviceWithOptions($request, $runtime);
    }

    /**
     * AddBulkPhoneNumbers.
     *
     * @param request - AddBulkPhoneNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBulkPhoneNumbersResponse
     *
     * @param AddBulkPhoneNumbersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddBulkPhoneNumbersResponse
     */
    public function addBulkPhoneNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBulkPhoneNumbers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBulkPhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AddBulkPhoneNumbers.
     *
     * @param request - AddBulkPhoneNumbersRequest
     *
     * @returns AddBulkPhoneNumbersResponse
     *
     * @param AddBulkPhoneNumbersRequest $request
     *
     * @return AddBulkPhoneNumbersResponse
     */
    public function addBulkPhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBulkPhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * AddPhoneNumber.
     *
     * @param request - AddPhoneNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPhoneNumberResponse
     *
     * @param AddPhoneNumberRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddPhoneNumberResponse
     */
    public function addPhoneNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPhoneNumber',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AddPhoneNumber.
     *
     * @param request - AddPhoneNumberRequest
     *
     * @returns AddPhoneNumberResponse
     *
     * @param AddPhoneNumberRequest $request
     *
     * @return AddPhoneNumberResponse
     */
    public function addPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * AddPhoneTags.
     *
     * @param request - AddPhoneTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPhoneTagsResponse
     *
     * @param AddPhoneTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddPhoneTagsResponse
     */
    public function addPhoneTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumberList) {
            @$query['PhoneNumberList'] = $request->phoneNumberList;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->regionNameCity) {
            @$query['RegionNameCity'] = $request->regionNameCity;
        }

        if (null !== $request->regionNameProvince) {
            @$query['RegionNameProvince'] = $request->regionNameProvince;
        }

        if (null !== $request->serviceTag) {
            @$query['ServiceTag'] = $request->serviceTag;
        }

        if (null !== $request->sipTag) {
            @$query['SipTag'] = $request->sipTag;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPhoneTags',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPhoneTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AddPhoneTags.
     *
     * @param request - AddPhoneTagsRequest
     *
     * @returns AddPhoneTagsResponse
     *
     * @param AddPhoneTagsRequest $request
     *
     * @return AddPhoneTagsResponse
     */
    public function addPhoneTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPhoneTagsWithOptions($request, $runtime);
    }

    /**
     * 把目录服务中的一组用户添加到一个呼叫中心实例中。添加完成后，需要为每一个用户分配一个分机号码
     *
     * @param request - AssignUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignUsersResponse
     *
     * @param AssignUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AssignUsersResponse
     */
    public function assignUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillLevel) {
            @$query['SkillLevel'] = $request->skillLevel;
        }

        if (null !== $request->userRamId) {
            @$query['UserRamId'] = $request->userRamId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssignUsers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 把目录服务中的一组用户添加到一个呼叫中心实例中。添加完成后，需要为每一个用户分配一个分机号码
     *
     * @param request - AssignUsersRequest
     *
     * @returns AssignUsersResponse
     *
     * @param AssignUsersRequest $request
     *
     * @return AssignUsersResponse
     */
    public function assignUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignUsersWithOptions($request, $runtime);
    }

    /**
     * CallOnlinePrivacyNumber.
     *
     * @param request - CallOnlinePrivacyNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CallOnlinePrivacyNumberResponse
     *
     * @param CallOnlinePrivacyNumberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CallOnlinePrivacyNumberResponse
     */
    public function callOnlinePrivacyNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->telA) {
            @$query['TelA'] = $request->telA;
        }

        if (null !== $request->telB) {
            @$query['TelB'] = $request->telB;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CallOnlinePrivacyNumber',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CallOnlinePrivacyNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CallOnlinePrivacyNumber.
     *
     * @param request - CallOnlinePrivacyNumberRequest
     *
     * @returns CallOnlinePrivacyNumberResponse
     *
     * @param CallOnlinePrivacyNumberRequest $request
     *
     * @return CallOnlinePrivacyNumberResponse
     */
    public function callOnlinePrivacyNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->callOnlinePrivacyNumberWithOptions($request, $runtime);
    }

    /**
     * CheckNumberAvaliable.
     *
     * @param request - CheckNumberAvaliableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckNumberAvaliableResponse
     *
     * @param CheckNumberAvaliableRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckNumberAvaliableResponse
     */
    public function checkNumberAvaliableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckNumberAvaliable',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckNumberAvaliableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CheckNumberAvaliable.
     *
     * @param request - CheckNumberAvaliableRequest
     *
     * @returns CheckNumberAvaliableResponse
     *
     * @param CheckNumberAvaliableRequest $request
     *
     * @return CheckNumberAvaliableResponse
     */
    public function checkNumberAvaliable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkNumberAvaliableWithOptions($request, $runtime);
    }

    /**
     * CommitContactFlowVersionModification.
     *
     * @param request - CommitContactFlowVersionModificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommitContactFlowVersionModificationResponse
     *
     * @param CommitContactFlowVersionModificationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CommitContactFlowVersionModificationResponse
     */
    public function commitContactFlowVersionModificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowVersionId) {
            @$query['ContactFlowVersionId'] = $request->contactFlowVersionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->canvas) {
            @$body['Canvas'] = $request->canvas;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CommitContactFlowVersionModification',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CommitContactFlowVersionModificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CommitContactFlowVersionModification.
     *
     * @param request - CommitContactFlowVersionModificationRequest
     *
     * @returns CommitContactFlowVersionModificationResponse
     *
     * @param CommitContactFlowVersionModificationRequest $request
     *
     * @return CommitContactFlowVersionModificationResponse
     */
    public function commitContactFlowVersionModification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitContactFlowVersionModificationWithOptions($request, $runtime);
    }

    /**
     * CreateContactFlow.
     *
     * @param request - CreateContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContactFlowResponse
     *
     * @param CreateContactFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateContactFlowResponse
     */
    public function createContactFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->canvas) {
            @$body['Canvas'] = $request->canvas;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateContactFlow',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateContactFlow.
     *
     * @param request - CreateContactFlowRequest
     *
     * @returns CreateContactFlowResponse
     *
     * @param CreateContactFlowRequest $request
     *
     * @return CreateContactFlowResponse
     */
    public function createContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContactFlowWithOptions($request, $runtime);
    }

    /**
     * CreateFault.
     *
     * @param request - CreateFaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFaultResponse
     *
     * @param CreateFaultRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateFaultResponse
     */
    public function createFaultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentFilePath) {
            @$query['AgentFilePath'] = $request->agentFilePath;
        }

        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentOssFileName) {
            @$query['AgentOssFileName'] = $request->agentOssFileName;
        }

        if (null !== $request->browserVersion) {
            @$query['BrowserVersion'] = $request->browserVersion;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientPort) {
            @$query['ClientPort'] = $request->clientPort;
        }

        if (null !== $request->connectId) {
            @$query['ConnectId'] = $request->connectId;
        }

        if (null !== $request->customFilePath) {
            @$query['CustomFilePath'] = $request->customFilePath;
        }

        if (null !== $request->customOssFileName) {
            @$query['CustomOssFileName'] = $request->customOssFileName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->microphoneEquipment) {
            @$query['MicrophoneEquipment'] = $request->microphoneEquipment;
        }

        if (null !== $request->microphoneList) {
            @$query['MicrophoneList'] = $request->microphoneList;
        }

        if (null !== $request->operatingSystemVersion) {
            @$query['OperatingSystemVersion'] = $request->operatingSystemVersion;
        }

        if (null !== $request->serviceIp) {
            @$query['ServiceIp'] = $request->serviceIp;
        }

        if (null !== $request->servicePort) {
            @$query['ServicePort'] = $request->servicePort;
        }

        if (null !== $request->speakerEquipment) {
            @$query['SpeakerEquipment'] = $request->speakerEquipment;
        }

        if (null !== $request->speakerList) {
            @$query['SpeakerList'] = $request->speakerList;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFault',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateFault.
     *
     * @param request - CreateFaultRequest
     *
     * @returns CreateFaultResponse
     *
     * @param CreateFaultRequest $request
     *
     * @return CreateFaultResponse
     */
    public function createFault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaultWithOptions($request, $runtime);
    }

    /**
     * CreateInstance.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adminRamId) {
            @$query['AdminRamId'] = $request->adminRamId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->storageMaxDays) {
            @$query['StorageMaxDays'] = $request->storageMaxDays;
        }

        if (null !== $request->storageMaxSize) {
            @$query['StorageMaxSize'] = $request->storageMaxSize;
        }

        if (null !== $request->userObject) {
            @$query['UserObject'] = $request->userObject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateInstance.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * CreateMedia.
     *
     * @param request - CreateMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMediaResponse
     *
     * @param CreateMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateMediaResponse
     */
    public function createMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossFileName) {
            @$query['OssFileName'] = $request->ossFileName;
        }

        if (null !== $request->ossFilePath) {
            @$query['OssFilePath'] = $request->ossFilePath;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->uploadResult) {
            @$query['UploadResult'] = $request->uploadResult;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMedia',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateMedia.
     *
     * @param request - CreateMediaRequest
     *
     * @returns CreateMediaResponse
     *
     * @param CreateMediaRequest $request
     *
     * @return CreateMediaResponse
     */
    public function createMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaWithOptions($request, $runtime);
    }

    /**
     * CreateSkillGroup.
     *
     * @param request - CreateSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillGroupResponse
     *
     * @param CreateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowPrivateOutboundNumber) {
            @$query['AllowPrivateOutboundNumber'] = $request->allowPrivateOutboundNumber;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outboundPhoneNumberId) {
            @$query['OutboundPhoneNumberId'] = $request->outboundPhoneNumberId;
        }

        if (null !== $request->routingStrategy) {
            @$query['RoutingStrategy'] = $request->routingStrategy;
        }

        if (null !== $request->skillLevel) {
            @$query['SkillLevel'] = $request->skillLevel;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSkillGroup',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateSkillGroup.
     *
     * @param request - CreateSkillGroupRequest
     *
     * @returns CreateSkillGroupResponse
     *
     * @param CreateSkillGroupRequest $request
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillGroupWithOptions($request, $runtime);
    }

    /**
     * CreateUser.
     *
     * @param request - CreateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->loginName) {
            @$query['LoginName'] = $request->loginName;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->privateOutboundNumberId) {
            @$query['PrivateOutboundNumberId'] = $request->privateOutboundNumberId;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillLevel) {
            @$query['SkillLevel'] = $request->skillLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateUser.
     *
     * @param request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
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
     * CreateVoiceAppraise.
     *
     * @param request - CreateVoiceAppraiseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVoiceAppraiseResponse
     *
     * @param CreateVoiceAppraiseRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVoiceAppraiseResponse
     */
    public function createVoiceAppraiseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowVersionId) {
            @$query['ContactFlowVersionId'] = $request->contactFlowVersionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isAppraise) {
            @$query['IsAppraise'] = $request->isAppraise;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVoiceAppraise',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVoiceAppraiseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateVoiceAppraise.
     *
     * @param request - CreateVoiceAppraiseRequest
     *
     * @returns CreateVoiceAppraiseResponse
     *
     * @param CreateVoiceAppraiseRequest $request
     *
     * @return CreateVoiceAppraiseResponse
     */
    public function createVoiceAppraise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVoiceAppraiseWithOptions($request, $runtime);
    }

    /**
     * DeleteInstance.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteInstance.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * DeleteMedia.
     *
     * @param request - DeleteMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMediaResponse
     *
     * @param DeleteMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteMediaResponse
     */
    public function deleteMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMedia',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteMedia.
     *
     * @param request - DeleteMediaRequest
     *
     * @returns DeleteMediaResponse
     *
     * @param DeleteMediaRequest $request
     *
     * @return DeleteMediaResponse
     */
    public function deleteMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaWithOptions($request, $runtime);
    }

    /**
     * DeletePhoneTags.
     *
     * @param request - DeletePhoneTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePhoneTagsResponse
     *
     * @param DeletePhoneTagsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePhoneTagsResponse
     */
    public function deletePhoneTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumberList) {
            @$query['PhoneNumberList'] = $request->phoneNumberList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePhoneTags',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePhoneTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeletePhoneTags.
     *
     * @param request - DeletePhoneTagsRequest
     *
     * @returns DeletePhoneTagsResponse
     *
     * @param DeletePhoneTagsRequest $request
     *
     * @return DeletePhoneTagsResponse
     */
    public function deletePhoneTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhoneTagsWithOptions($request, $runtime);
    }

    /**
     * DeleteSkillGroup.
     *
     * @param request - DeleteSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillGroupResponse
     *
     * @param DeleteSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSkillGroupResponse
     */
    public function deleteSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSkillGroup',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteSkillGroup.
     *
     * @param request - DeleteSkillGroupRequest
     *
     * @returns DeleteSkillGroupResponse
     *
     * @param DeleteSkillGroupRequest $request
     *
     * @return DeleteSkillGroupResponse
     */
    public function deleteSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillGroupWithOptions($request, $runtime);
    }

    /**
     * DialEx.
     *
     * @param request - DialExRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DialExResponse
     *
     * @param DialExRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return DialExResponse
     */
    public function dialExWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->answerMode) {
            @$query['AnswerMode'] = $request->answerMode;
        }

        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->routPoint) {
            @$query['RoutPoint'] = $request->routPoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DialEx',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DialExResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DialEx.
     *
     * @param request - DialExRequest
     *
     * @returns DialExResponse
     *
     * @param DialExRequest $request
     *
     * @return DialExResponse
     */
    public function dialEx($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dialExWithOptions($request, $runtime);
    }

    /**
     * DisableTrunkProviders.
     *
     * @param request - DisableTrunkProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableTrunkProvidersResponse
     *
     * @param DisableTrunkProvidersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableTrunkProvidersResponse
     */
    public function disableTrunkProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->providerName) {
            @$query['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableTrunkProviders',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableTrunkProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DisableTrunkProviders.
     *
     * @param request - DisableTrunkProvidersRequest
     *
     * @returns DisableTrunkProvidersResponse
     *
     * @param DisableTrunkProvidersRequest $request
     *
     * @return DisableTrunkProvidersResponse
     */
    public function disableTrunkProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableTrunkProvidersWithOptions($request, $runtime);
    }

    /**
     * 下载MKV音频文件.
     *
     * @param request - DownloadAllTypeRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadAllTypeRecordingResponse
     *
     * @param DownloadAllTypeRecordingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadAllTypeRecordingResponse
     */
    public function downloadAllTypeRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadAllTypeRecording',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadAllTypeRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下载MKV音频文件.
     *
     * @param request - DownloadAllTypeRecordingRequest
     *
     * @returns DownloadAllTypeRecordingResponse
     *
     * @param DownloadAllTypeRecordingRequest $request
     *
     * @return DownloadAllTypeRecordingResponse
     */
    public function downloadAllTypeRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadAllTypeRecordingWithOptions($request, $runtime);
    }

    /**
     * 下载录音文件.
     *
     * @param request - DownloadRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadRecordingResponse
     *
     * @param DownloadRecordingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DownloadRecordingResponse
     */
    public function downloadRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadRecording',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下载录音文件.
     *
     * @param request - DownloadRecordingRequest
     *
     * @returns DownloadRecordingResponse
     *
     * @param DownloadRecordingRequest $request
     *
     * @return DownloadRecordingResponse
     */
    public function downloadRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadRecordingWithOptions($request, $runtime);
    }

    /**
     * FindUsers.
     *
     * @param request - FindUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindUsersResponse
     *
     * @param FindUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return FindUsersResponse
     */
    public function findUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->criteria) {
            @$query['Criteria'] = $request->criteria;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindUsers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * FindUsers.
     *
     * @param request - FindUsersRequest
     *
     * @returns FindUsersResponse
     *
     * @param FindUsersRequest $request
     *
     * @return FindUsersResponse
     */
    public function findUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findUsersWithOptions($request, $runtime);
    }

    /**
     * GenerateAgentStatisticReport.
     *
     * @param request - GenerateAgentStatisticReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAgentStatisticReportResponse
     *
     * @param GenerateAgentStatisticReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GenerateAgentStatisticReportResponse
     */
    public function generateAgentStatisticReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateAgentStatisticReport',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateAgentStatisticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GenerateAgentStatisticReport.
     *
     * @param request - GenerateAgentStatisticReportRequest
     *
     * @returns GenerateAgentStatisticReportResponse
     *
     * @param GenerateAgentStatisticReportRequest $request
     *
     * @return GenerateAgentStatisticReportResponse
     */
    public function generateAgentStatisticReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAgentStatisticReportWithOptions($request, $runtime);
    }

    /**
     * GetAgentData.
     *
     * @param request - GetAgentDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentDataResponse
     *
     * @param GetAgentDataRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAgentDataResponse
     */
    public function getAgentDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDay) {
            @$query['EndDay'] = $request->endDay;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDay) {
            @$query['StartDay'] = $request->startDay;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentData',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetAgentData.
     *
     * @param request - GetAgentDataRequest
     *
     * @returns GetAgentDataResponse
     *
     * @param GetAgentDataRequest $request
     *
     * @return GetAgentDataResponse
     */
    public function getAgentData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentDataWithOptions($request, $runtime);
    }

    /**
     * GetCallMeasureSummaryReport.
     *
     * @param request - GetCallMeasureSummaryReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCallMeasureSummaryReportResponse
     *
     * @param GetCallMeasureSummaryReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetCallMeasureSummaryReportResponse
     */
    public function getCallMeasureSummaryReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->day) {
            @$query['Day'] = $request->day;
        }

        if (null !== $request->intervalType) {
            @$query['IntervalType'] = $request->intervalType;
        }

        if (null !== $request->month) {
            @$query['Month'] = $request->month;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->year) {
            @$query['Year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCallMeasureSummaryReport',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCallMeasureSummaryReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetCallMeasureSummaryReport.
     *
     * @param request - GetCallMeasureSummaryReportRequest
     *
     * @returns GetCallMeasureSummaryReportResponse
     *
     * @param GetCallMeasureSummaryReportRequest $request
     *
     * @return GetCallMeasureSummaryReportResponse
     */
    public function getCallMeasureSummaryReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallMeasureSummaryReportWithOptions($request, $runtime);
    }

    /**
     * GetConfig.
     *
     * @param request - GetConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigResponse
     *
     * @param GetConfigRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetConfigResponse
     */
    public function getConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConfig',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetConfig.
     *
     * @param request - GetConfigRequest
     *
     * @returns GetConfigResponse
     *
     * @param GetConfigRequest $request
     *
     * @return GetConfigResponse
     */
    public function getConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigWithOptions($request, $runtime);
    }

    /**
     * GetConversationDetailByContactId.
     *
     * @param request - GetConversationDetailByContactIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConversationDetailByContactIdResponse
     *
     * @param GetConversationDetailByContactIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetConversationDetailByContactIdResponse
     */
    public function getConversationDetailByContactIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConversationDetailByContactId',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConversationDetailByContactIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetConversationDetailByContactId.
     *
     * @param request - GetConversationDetailByContactIdRequest
     *
     * @returns GetConversationDetailByContactIdResponse
     *
     * @param GetConversationDetailByContactIdRequest $request
     *
     * @return GetConversationDetailByContactIdResponse
     */
    public function getConversationDetailByContactId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConversationDetailByContactIdWithOptions($request, $runtime);
    }

    /**
     * GetInstance.
     *
     * @param request - GetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetInstance.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * GetInstanceState.
     *
     * @param request - GetInstanceStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceStateResponse
     *
     * @param GetInstanceStateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetInstanceStateResponse
     */
    public function getInstanceStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceState',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetInstanceState.
     *
     * @param request - GetInstanceStateRequest
     *
     * @returns GetInstanceStateResponse
     *
     * @param GetInstanceStateRequest $request
     *
     * @return GetInstanceStateResponse
     */
    public function getInstanceState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceStateWithOptions($request, $runtime);
    }

    /**
     * GetInstanceSummaryReport.
     *
     * @param request - GetInstanceSummaryReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceSummaryReportResponse
     *
     * @param GetInstanceSummaryReportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetInstanceSummaryReportResponse
     */
    public function getInstanceSummaryReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceSummaryReport',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceSummaryReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetInstanceSummaryReport.
     *
     * @param request - GetInstanceSummaryReportRequest
     *
     * @returns GetInstanceSummaryReportResponse
     *
     * @param GetInstanceSummaryReportRequest $request
     *
     * @return GetInstanceSummaryReportResponse
     */
    public function getInstanceSummaryReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSummaryReportWithOptions($request, $runtime);
    }

    /**
     * GetInstanceSummaryReportByInterval.
     *
     * @param request - GetInstanceSummaryReportByIntervalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceSummaryReportByIntervalResponse
     *
     * @param GetInstanceSummaryReportByIntervalRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetInstanceSummaryReportByIntervalResponse
     */
    public function getInstanceSummaryReportByIntervalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceSummaryReportByInterval',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceSummaryReportByIntervalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetInstanceSummaryReportByInterval.
     *
     * @param request - GetInstanceSummaryReportByIntervalRequest
     *
     * @returns GetInstanceSummaryReportByIntervalResponse
     *
     * @param GetInstanceSummaryReportByIntervalRequest $request
     *
     * @return GetInstanceSummaryReportByIntervalResponse
     */
    public function getInstanceSummaryReportByInterval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSummaryReportByIntervalWithOptions($request, $runtime);
    }

    /**
     * GetInstanceSummaryReportSinceMidnight.
     *
     * @param request - GetInstanceSummaryReportSinceMidnightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceSummaryReportSinceMidnightResponse
     *
     * @param GetInstanceSummaryReportSinceMidnightRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GetInstanceSummaryReportSinceMidnightResponse
     */
    public function getInstanceSummaryReportSinceMidnightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceSummaryReportSinceMidnight',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceSummaryReportSinceMidnightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetInstanceSummaryReportSinceMidnight.
     *
     * @param request - GetInstanceSummaryReportSinceMidnightRequest
     *
     * @returns GetInstanceSummaryReportSinceMidnightResponse
     *
     * @param GetInstanceSummaryReportSinceMidnightRequest $request
     *
     * @return GetInstanceSummaryReportSinceMidnightResponse
     */
    public function getInstanceSummaryReportSinceMidnight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSummaryReportSinceMidnightWithOptions($request, $runtime);
    }

    /**
     * GetNumberRegionInfo.
     *
     * @param request - GetNumberRegionInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNumberRegionInfoResponse
     *
     * @param GetNumberRegionInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNumberRegionInfoResponse
     */
    public function getNumberRegionInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNumberRegionInfo',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNumberRegionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetNumberRegionInfo.
     *
     * @param request - GetNumberRegionInfoRequest
     *
     * @returns GetNumberRegionInfoResponse
     *
     * @param GetNumberRegionInfoRequest $request
     *
     * @return GetNumberRegionInfoResponse
     */
    public function getNumberRegionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumberRegionInfoWithOptions($request, $runtime);
    }

    /**
     * GetRecordOssUploadParam.
     *
     * @param request - GetRecordOssUploadParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecordOssUploadParamResponse
     *
     * @param GetRecordOssUploadParamRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetRecordOssUploadParamResponse
     */
    public function getRecordOssUploadParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRecordOssUploadParam',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRecordOssUploadParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetRecordOssUploadParam.
     *
     * @param request - GetRecordOssUploadParamRequest
     *
     * @returns GetRecordOssUploadParamResponse
     *
     * @param GetRecordOssUploadParamRequest $request
     *
     * @return GetRecordOssUploadParamResponse
     */
    public function getRecordOssUploadParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordOssUploadParamWithOptions($request, $runtime);
    }

    /**
     * GetRoutePoint.
     *
     * @param request - GetRoutePointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoutePointResponse
     *
     * @param GetRoutePointRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRoutePointResponse
     */
    public function getRoutePointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRoutePoint',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRoutePointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetRoutePoint.
     *
     * @param request - GetRoutePointRequest
     *
     * @returns GetRoutePointResponse
     *
     * @param GetRoutePointRequest $request
     *
     * @return GetRoutePointResponse
     */
    public function getRoutePoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutePointWithOptions($request, $runtime);
    }

    /**
     * 获取服务号码，比如满意度调查分机号码（实际是满意度调查IVR的路由点，该路由点由ACC核心服务根据IVR的Project ID提供），或者是其他技能组号码。
     *
     * @param request - GetServiceExtensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceExtensionsResponse
     *
     * @param GetServiceExtensionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceExtensionsResponse
     */
    public function getServiceExtensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceExtensions',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取服务号码，比如满意度调查分机号码（实际是满意度调查IVR的路由点，该路由点由ACC核心服务根据IVR的Project ID提供），或者是其他技能组号码。
     *
     * @param request - GetServiceExtensionsRequest
     *
     * @returns GetServiceExtensionsResponse
     *
     * @param GetServiceExtensionsRequest $request
     *
     * @return GetServiceExtensionsResponse
     */
    public function getServiceExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceExtensionsWithOptions($request, $runtime);
    }

    /**
     * GetSmsConfig.
     *
     * @param request - GetSmsConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSmsConfigResponse
     *
     * @param GetSmsConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSmsConfigResponse
     */
    public function getSmsConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scenario) {
            @$query['Scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSmsConfig',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSmsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetSmsConfig.
     *
     * @param request - GetSmsConfigRequest
     *
     * @returns GetSmsConfigResponse
     *
     * @param GetSmsConfigRequest $request
     *
     * @return GetSmsConfigResponse
     */
    public function getSmsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmsConfigWithOptions($request, $runtime);
    }

    /**
     * GetTURNCredentials.
     *
     * @param request - GetTURNCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTURNCredentialsResponse
     *
     * @param GetTURNCredentialsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTURNCredentialsResponse
     */
    public function getTURNCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTURNCredentials',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTURNCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetTURNCredentials.
     *
     * @param request - GetTURNCredentialsRequest
     *
     * @returns GetTURNCredentialsResponse
     *
     * @param GetTURNCredentialsRequest $request
     *
     * @return GetTURNCredentialsResponse
     */
    public function getTURNCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTURNCredentialsWithOptions($request, $runtime);
    }

    /**
     * GetTURNServerList.
     *
     * @param request - GetTURNServerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTURNServerListResponse
     *
     * @param GetTURNServerListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTURNServerListResponse
     */
    public function getTURNServerListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTURNServerList',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTURNServerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetTURNServerList.
     *
     * @param request - GetTURNServerListRequest
     *
     * @returns GetTURNServerListResponse
     *
     * @param GetTURNServerListRequest $request
     *
     * @return GetTURNServerListResponse
     */
    public function getTURNServerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTURNServerListWithOptions($request, $runtime);
    }

    /**
     * GetUser.
     *
     * @param request - GetUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetUser.
     *
     * @param request - GetUserRequest
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * GetUserByExtension.
     *
     * @param request - GetUserByExtensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserByExtensionResponse
     *
     * @param GetUserByExtensionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserByExtensionResponse
     */
    public function getUserByExtensionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extension) {
            @$query['Extension'] = $request->extension;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserByExtension',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserByExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetUserByExtension.
     *
     * @param request - GetUserByExtensionRequest
     *
     * @returns GetUserByExtensionResponse
     *
     * @param GetUserByExtensionRequest $request
     *
     * @return GetUserByExtensionResponse
     */
    public function getUserByExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserByExtensionWithOptions($request, $runtime);
    }

    /**
     * LaunchAppraise.
     *
     * @param request - LaunchAppraiseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LaunchAppraiseResponse
     *
     * @param LaunchAppraiseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return LaunchAppraiseResponse
     */
    public function launchAppraiseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acid) {
            @$query['Acid'] = $request->acid;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LaunchAppraise',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LaunchAppraiseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * LaunchAppraise.
     *
     * @param request - LaunchAppraiseRequest
     *
     * @returns LaunchAppraiseResponse
     *
     * @param LaunchAppraiseRequest $request
     *
     * @return LaunchAppraiseResponse
     */
    public function launchAppraise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchAppraiseWithOptions($request, $runtime);
    }

    /**
     * LaunchShortMessageAppraise.
     *
     * @param request - LaunchShortMessageAppraiseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LaunchShortMessageAppraiseResponse
     *
     * @param LaunchShortMessageAppraiseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return LaunchShortMessageAppraiseResponse
     */
    public function launchShortMessageAppraiseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acid) {
            @$query['Acid'] = $request->acid;
        }

        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LaunchShortMessageAppraise',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LaunchShortMessageAppraiseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * LaunchShortMessageAppraise.
     *
     * @param request - LaunchShortMessageAppraiseRequest
     *
     * @returns LaunchShortMessageAppraiseResponse
     *
     * @param LaunchShortMessageAppraiseRequest $request
     *
     * @return LaunchShortMessageAppraiseResponse
     */
    public function launchShortMessageAppraise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchShortMessageAppraiseWithOptions($request, $runtime);
    }

    /**
     * ListAgentDevices.
     *
     * @param request - ListAgentDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentDevicesResponse
     *
     * @param ListAgentDevicesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAgentDevicesResponse
     */
    public function listAgentDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ramIds) {
            @$query['RamIds'] = $request->ramIds;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentDevices',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListAgentDevices.
     *
     * @param request - ListAgentDevicesRequest
     *
     * @returns ListAgentDevicesResponse
     *
     * @param ListAgentDevicesRequest $request
     *
     * @return ListAgentDevicesResponse
     */
    public function listAgentDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentDevicesWithOptions($request, $runtime);
    }

    /**
     * 获取坐席的事件信息.
     *
     * @param request - ListAgentEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentEventsResponse
     *
     * @param ListAgentEventsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAgentEventsResponse
     */
    public function listAgentEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->event) {
            @$query['Event'] = $request->event;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ramId) {
            @$query['RamId'] = $request->ramId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentEvents',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取坐席的事件信息.
     *
     * @param request - ListAgentEventsRequest
     *
     * @returns ListAgentEventsResponse
     *
     * @param ListAgentEventsRequest $request
     *
     * @return ListAgentEventsResponse
     */
    public function listAgentEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentEventsWithOptions($request, $runtime);
    }

    /**
     * ListAgentStateLogs.
     *
     * @param request - ListAgentStateLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentStateLogsResponse
     *
     * @param ListAgentStateLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAgentStateLogsResponse
     */
    public function listAgentStateLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ramId) {
            @$query['RamId'] = $request->ramId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentStateLogs',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentStateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListAgentStateLogs.
     *
     * @param request - ListAgentStateLogsRequest
     *
     * @returns ListAgentStateLogsResponse
     *
     * @param ListAgentStateLogsRequest $request
     *
     * @return ListAgentStateLogsResponse
     */
    public function listAgentStateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentStateLogsWithOptions($request, $runtime);
    }

    /**
     * ListAgentStates.
     *
     * @param request - ListAgentStatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentStatesResponse
     *
     * @param ListAgentStatesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAgentStatesResponse
     */
    public function listAgentStatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentIds) {
            @$query['AgentIds'] = $request->agentIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentStates',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListAgentStates.
     *
     * @param request - ListAgentStatesRequest
     *
     * @returns ListAgentStatesResponse
     *
     * @param ListAgentStatesRequest $request
     *
     * @return ListAgentStatesResponse
     */
    public function listAgentStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentStatesWithOptions($request, $runtime);
    }

    /**
     * ListAgentSummaryReports.
     *
     * @param request - ListAgentSummaryReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentSummaryReportsResponse
     *
     * @param ListAgentSummaryReportsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAgentSummaryReportsResponse
     */
    public function listAgentSummaryReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentIds) {
            @$query['AgentIds'] = $request->agentIds;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentSummaryReports',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentSummaryReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListAgentSummaryReports.
     *
     * @param request - ListAgentSummaryReportsRequest
     *
     * @returns ListAgentSummaryReportsResponse
     *
     * @param ListAgentSummaryReportsRequest $request
     *
     * @return ListAgentSummaryReportsResponse
     */
    public function listAgentSummaryReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentSummaryReportsWithOptions($request, $runtime);
    }

    /**
     * ListAgentSummaryReportsByInterval.
     *
     * @param request - ListAgentSummaryReportsByIntervalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentSummaryReportsByIntervalResponse
     *
     * @param ListAgentSummaryReportsByIntervalRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListAgentSummaryReportsByIntervalResponse
     */
    public function listAgentSummaryReportsByIntervalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentIds) {
            @$query['AgentIds'] = $request->agentIds;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentSummaryReportsByInterval',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentSummaryReportsByIntervalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListAgentSummaryReportsByInterval.
     *
     * @param request - ListAgentSummaryReportsByIntervalRequest
     *
     * @returns ListAgentSummaryReportsByIntervalResponse
     *
     * @param ListAgentSummaryReportsByIntervalRequest $request
     *
     * @return ListAgentSummaryReportsByIntervalResponse
     */
    public function listAgentSummaryReportsByInterval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentSummaryReportsByIntervalWithOptions($request, $runtime);
    }

    /**
     * ListAgentSummaryReportsSinceMidnight.
     *
     * @param request - ListAgentSummaryReportsSinceMidnightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentSummaryReportsSinceMidnightResponse
     *
     * @param ListAgentSummaryReportsSinceMidnightRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListAgentSummaryReportsSinceMidnightResponse
     */
    public function listAgentSummaryReportsSinceMidnightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentIds) {
            @$query['AgentIds'] = $request->agentIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentSummaryReportsSinceMidnight',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentSummaryReportsSinceMidnightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListAgentSummaryReportsSinceMidnight.
     *
     * @param request - ListAgentSummaryReportsSinceMidnightRequest
     *
     * @returns ListAgentSummaryReportsSinceMidnightResponse
     *
     * @param ListAgentSummaryReportsSinceMidnightRequest $request
     *
     * @return ListAgentSummaryReportsSinceMidnightResponse
     */
    public function listAgentSummaryReportsSinceMidnight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentSummaryReportsSinceMidnightWithOptions($request, $runtime);
    }

    /**
     * 获取通话详单。
     *
     * @param request - ListCallDetailRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallDetailRecordsResponse
     *
     * @param ListCallDetailRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCallDetailRecordsResponse
     */
    public function listCallDetailRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactDisposition) {
            @$query['ContactDisposition'] = $request->contactDisposition;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->criteria) {
            @$query['Criteria'] = $request->criteria;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        if (null !== $request->withRecording) {
            @$query['WithRecording'] = $request->withRecording;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallDetailRecords',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallDetailRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取通话详单。
     *
     * @param request - ListCallDetailRecordsRequest
     *
     * @returns ListCallDetailRecordsResponse
     *
     * @param ListCallDetailRecordsRequest $request
     *
     * @return ListCallDetailRecordsResponse
     */
    public function listCallDetailRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallDetailRecordsWithOptions($request, $runtime);
    }

    /**
     * ListCallEventDetailByContactId.
     *
     * @param request - ListCallEventDetailByContactIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallEventDetailByContactIdResponse
     *
     * @param ListCallEventDetailByContactIdRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListCallEventDetailByContactIdResponse
     */
    public function listCallEventDetailByContactIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallEventDetailByContactId',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallEventDetailByContactIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListCallEventDetailByContactId.
     *
     * @param request - ListCallEventDetailByContactIdRequest
     *
     * @returns ListCallEventDetailByContactIdResponse
     *
     * @param ListCallEventDetailByContactIdRequest $request
     *
     * @return ListCallEventDetailByContactIdResponse
     */
    public function listCallEventDetailByContactId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallEventDetailByContactIdWithOptions($request, $runtime);
    }

    /**
     * ListCallMeasureSummaryReports.
     *
     * @param request - ListCallMeasureSummaryReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallMeasureSummaryReportsResponse
     *
     * @param ListCallMeasureSummaryReportsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListCallMeasureSummaryReportsResponse
     */
    public function listCallMeasureSummaryReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->intervalType) {
            @$query['IntervalType'] = $request->intervalType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallMeasureSummaryReports',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallMeasureSummaryReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListCallMeasureSummaryReports.
     *
     * @param request - ListCallMeasureSummaryReportsRequest
     *
     * @returns ListCallMeasureSummaryReportsResponse
     *
     * @param ListCallMeasureSummaryReportsRequest $request
     *
     * @return ListCallMeasureSummaryReportsResponse
     */
    public function listCallMeasureSummaryReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallMeasureSummaryReportsWithOptions($request, $runtime);
    }

    /**
     * ListConfig.
     *
     * @param request - ListConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigResponse
     *
     * @param ListConfigRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListConfigResponse
     */
    public function listConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configItem) {
            @$query['ConfigItem'] = $request->configItem;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfig',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListConfig.
     *
     * @param request - ListConfigRequest
     *
     * @returns ListConfigResponse
     *
     * @param ListConfigRequest $request
     *
     * @return ListConfigResponse
     */
    public function listConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigWithOptions($request, $runtime);
    }

    /**
     * ListContactFlows.
     *
     * @param request - ListContactFlowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContactFlowsResponse
     *
     * @param ListContactFlowsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListContactFlowsResponse
     */
    public function listContactFlowsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContactFlows',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContactFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListContactFlows.
     *
     * @param request - ListContactFlowsRequest
     *
     * @returns ListContactFlowsResponse
     *
     * @param ListContactFlowsRequest $request
     *
     * @return ListContactFlowsResponse
     */
    public function listContactFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContactFlowsWithOptions($request, $runtime);
    }

    /**
     * ListInstancesOfUser.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesOfUserResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListInstancesOfUserResponse
     */
    public function listInstancesOfUserWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListInstancesOfUser',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListInstancesOfUser.
     *
     * @returns ListInstancesOfUserResponse
     *
     * @return ListInstancesOfUserResponse
     */
    public function listInstancesOfUser()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesOfUserWithOptions($runtime);
    }

    /**
     * ListIvrTrackingDetail.
     *
     * @param request - ListIvrTrackingDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIvrTrackingDetailResponse
     *
     * @param ListIvrTrackingDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListIvrTrackingDetailResponse
     */
    public function listIvrTrackingDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIvrTrackingDetail',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIvrTrackingDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListIvrTrackingDetail.
     *
     * @param request - ListIvrTrackingDetailRequest
     *
     * @returns ListIvrTrackingDetailResponse
     *
     * @param ListIvrTrackingDetailRequest $request
     *
     * @return ListIvrTrackingDetailResponse
     */
    public function listIvrTrackingDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIvrTrackingDetailWithOptions($request, $runtime);
    }

    /**
     * ListMedias.
     *
     * @param request - ListMediasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMediasResponse
     *
     * @param ListMediasRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMediasResponse
     */
    public function listMediasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namePrefix) {
            @$query['NamePrefix'] = $request->namePrefix;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMedias',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMediasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListMedias.
     *
     * @param request - ListMediasRequest
     *
     * @returns ListMediasResponse
     *
     * @param ListMediasRequest $request
     *
     * @return ListMediasResponse
     */
    public function listMedias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediasWithOptions($request, $runtime);
    }

    /**
     * ListOutboundPhoneNumberOfUser.
     *
     * @param request - ListOutboundPhoneNumberOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOutboundPhoneNumberOfUserResponse
     *
     * @param ListOutboundPhoneNumberOfUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListOutboundPhoneNumberOfUserResponse
     */
    public function listOutboundPhoneNumberOfUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOutboundPhoneNumberOfUser',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOutboundPhoneNumberOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListOutboundPhoneNumberOfUser.
     *
     * @param request - ListOutboundPhoneNumberOfUserRequest
     *
     * @returns ListOutboundPhoneNumberOfUserResponse
     *
     * @param ListOutboundPhoneNumberOfUserRequest $request
     *
     * @return ListOutboundPhoneNumberOfUserResponse
     */
    public function listOutboundPhoneNumberOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundPhoneNumberOfUserWithOptions($request, $runtime);
    }

    /**
     * ListPhoneNumbers.
     *
     * @param request - ListPhoneNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPhoneNumbersResponse
     *
     * @param ListPhoneNumbersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPhoneNumbersResponse
     */
    public function listPhoneNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundOnly) {
            @$query['OutboundOnly'] = $request->outboundOnly;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPhoneNumbers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListPhoneNumbers.
     *
     * @param request - ListPhoneNumbersRequest
     *
     * @returns ListPhoneNumbersResponse
     *
     * @param ListPhoneNumbersRequest $request
     *
     * @return ListPhoneNumbersResponse
     */
    public function listPhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * ListPhoneTags.
     *
     * @param request - ListPhoneTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPhoneTagsResponse
     *
     * @param ListPhoneTagsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPhoneTagsResponse
     */
    public function listPhoneTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->numberGroupIds) {
            @$query['NumberGroupIds'] = $request->numberGroupIds;
        }

        if (null !== $request->outboundOnly) {
            @$query['OutboundOnly'] = $request->outboundOnly;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPhoneTags',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPhoneTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListPhoneTags.
     *
     * @param request - ListPhoneTagsRequest
     *
     * @returns ListPhoneTagsResponse
     *
     * @param ListPhoneTagsRequest $request
     *
     * @return ListPhoneTagsResponse
     */
    public function listPhoneTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhoneTagsWithOptions($request, $runtime);
    }

    /**
     * ListRealTimeAgent.
     *
     * @param request - ListRealTimeAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRealTimeAgentResponse
     *
     * @param ListRealTimeAgentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRealTimeAgentResponse
     */
    public function listRealTimeAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRealTimeAgent',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRealTimeAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListRealTimeAgent.
     *
     * @param request - ListRealTimeAgentRequest
     *
     * @returns ListRealTimeAgentResponse
     *
     * @param ListRealTimeAgentRequest $request
     *
     * @return ListRealTimeAgentResponse
     */
    public function listRealTimeAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealTimeAgentWithOptions($request, $runtime);
    }

    /**
     * ListRecentCallRecords.
     *
     * @param request - ListRecentCallRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecentCallRecordsResponse
     *
     * @param ListRecentCallRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRecentCallRecordsResponse
     */
    public function listRecentCallRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->criteria) {
            @$query['Criteria'] = $request->criteria;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecentCallRecords',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecentCallRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListRecentCallRecords.
     *
     * @param request - ListRecentCallRecordsRequest
     *
     * @returns ListRecentCallRecordsResponse
     *
     * @param ListRecentCallRecordsRequest $request
     *
     * @return ListRecentCallRecordsResponse
     */
    public function listRecentCallRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecentCallRecordsWithOptions($request, $runtime);
    }

    /**
     * ListRecordingOfDualTrack.
     *
     * @param request - ListRecordingOfDualTrackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecordingOfDualTrackResponse
     *
     * @param ListRecordingOfDualTrackRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRecordingOfDualTrackResponse
     */
    public function listRecordingOfDualTrackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->connectId) {
            @$query['ConnectId'] = $request->connectId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecordingOfDualTrack',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecordingOfDualTrackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListRecordingOfDualTrack.
     *
     * @param request - ListRecordingOfDualTrackRequest
     *
     * @returns ListRecordingOfDualTrackResponse
     *
     * @param ListRecordingOfDualTrackRequest $request
     *
     * @return ListRecordingOfDualTrackResponse
     */
    public function listRecordingOfDualTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecordingOfDualTrackWithOptions($request, $runtime);
    }

    /**
     * ListRecordings.
     *
     * @param request - ListRecordingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecordingsResponse
     *
     * @param ListRecordingsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListRecordingsResponse
     */
    public function listRecordingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->criteria) {
            @$query['Criteria'] = $request->criteria;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecordings',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListRecordings.
     *
     * @param request - ListRecordingsRequest
     *
     * @returns ListRecordingsResponse
     *
     * @param ListRecordingsRequest $request
     *
     * @return ListRecordingsResponse
     */
    public function listRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecordingsWithOptions($request, $runtime);
    }

    /**
     * ListRecordingsByContactId.
     *
     * @param request - ListRecordingsByContactIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecordingsByContactIdResponse
     *
     * @param ListRecordingsByContactIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListRecordingsByContactIdResponse
     */
    public function listRecordingsByContactIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecordingsByContactId',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecordingsByContactIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListRecordingsByContactId.
     *
     * @param request - ListRecordingsByContactIdRequest
     *
     * @returns ListRecordingsByContactIdResponse
     *
     * @param ListRecordingsByContactIdRequest $request
     *
     * @return ListRecordingsByContactIdResponse
     */
    public function listRecordingsByContactId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecordingsByContactIdWithOptions($request, $runtime);
    }

    /**
     * ListRoles.
     *
     * @param request - ListRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListRoles.
     *
     * @param request - ListRolesRequest
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     *
     * @return ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * ListSkillGroupStates.
     *
     * @param request - ListSkillGroupStatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillGroupStatesResponse
     *
     * @param ListSkillGroupStatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSkillGroupStatesResponse
     */
    public function listSkillGroupStatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupIds) {
            @$query['SkillGroupIds'] = $request->skillGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroupStates',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListSkillGroupStates.
     *
     * @param request - ListSkillGroupStatesRequest
     *
     * @returns ListSkillGroupStatesResponse
     *
     * @param ListSkillGroupStatesRequest $request
     *
     * @return ListSkillGroupStatesResponse
     */
    public function listSkillGroupStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupStatesWithOptions($request, $runtime);
    }

    /**
     * ListSkillGroupSummaryReports.
     *
     * @param request - ListSkillGroupSummaryReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillGroupSummaryReportsResponse
     *
     * @param ListSkillGroupSummaryReportsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListSkillGroupSummaryReportsResponse
     */
    public function listSkillGroupSummaryReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupIds) {
            @$query['SkillGroupIds'] = $request->skillGroupIds;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroupSummaryReports',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupSummaryReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListSkillGroupSummaryReports.
     *
     * @param request - ListSkillGroupSummaryReportsRequest
     *
     * @returns ListSkillGroupSummaryReportsResponse
     *
     * @param ListSkillGroupSummaryReportsRequest $request
     *
     * @return ListSkillGroupSummaryReportsResponse
     */
    public function listSkillGroupSummaryReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupSummaryReportsWithOptions($request, $runtime);
    }

    /**
     * ListSkillGroupSummaryReportsByInterval.
     *
     * @param request - ListSkillGroupSummaryReportsByIntervalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillGroupSummaryReportsByIntervalResponse
     *
     * @param ListSkillGroupSummaryReportsByIntervalRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListSkillGroupSummaryReportsByIntervalResponse
     */
    public function listSkillGroupSummaryReportsByIntervalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupIds) {
            @$query['SkillGroupIds'] = $request->skillGroupIds;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroupSummaryReportsByInterval',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupSummaryReportsByIntervalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListSkillGroupSummaryReportsByInterval.
     *
     * @param request - ListSkillGroupSummaryReportsByIntervalRequest
     *
     * @returns ListSkillGroupSummaryReportsByIntervalResponse
     *
     * @param ListSkillGroupSummaryReportsByIntervalRequest $request
     *
     * @return ListSkillGroupSummaryReportsByIntervalResponse
     */
    public function listSkillGroupSummaryReportsByInterval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupSummaryReportsByIntervalWithOptions($request, $runtime);
    }

    /**
     * ListSkillGroupSummaryReportsByInterval.
     *
     * @param request - ListSkillGroupSummaryReportsSinceMidnightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillGroupSummaryReportsSinceMidnightResponse
     *
     * @param ListSkillGroupSummaryReportsSinceMidnightRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return ListSkillGroupSummaryReportsSinceMidnightResponse
     */
    public function listSkillGroupSummaryReportsSinceMidnightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroups) {
            @$query['SkillGroups'] = $request->skillGroups;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroupSummaryReportsSinceMidnight',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupSummaryReportsSinceMidnightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListSkillGroupSummaryReportsByInterval.
     *
     * @param request - ListSkillGroupSummaryReportsSinceMidnightRequest
     *
     * @returns ListSkillGroupSummaryReportsSinceMidnightResponse
     *
     * @param ListSkillGroupSummaryReportsSinceMidnightRequest $request
     *
     * @return ListSkillGroupSummaryReportsSinceMidnightResponse
     */
    public function listSkillGroupSummaryReportsSinceMidnight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupSummaryReportsSinceMidnightWithOptions($request, $runtime);
    }

    /**
     * ListSkillGroups.
     *
     * @param request - ListSkillGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillGroupsResponse
     *
     * @param ListSkillGroupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSkillGroupsResponse
     */
    public function listSkillGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillGroupName) {
            @$query['SkillGroupName'] = $request->skillGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroups',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListSkillGroups.
     *
     * @param request - ListSkillGroupsRequest
     *
     * @returns ListSkillGroupsResponse
     *
     * @param ListSkillGroupsRequest $request
     *
     * @return ListSkillGroupsResponse
     */
    public function listSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupsWithOptions($request, $runtime);
    }

    /**
     * ListSkillGroupsOfUser.
     *
     * @param request - ListSkillGroupsOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillGroupsOfUserResponse
     *
     * @param ListSkillGroupsOfUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSkillGroupsOfUserResponse
     */
    public function listSkillGroupsOfUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroupsOfUser',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupsOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListSkillGroupsOfUser.
     *
     * @param request - ListSkillGroupsOfUserRequest
     *
     * @returns ListSkillGroupsOfUserResponse
     *
     * @param ListSkillGroupsOfUserRequest $request
     *
     * @return ListSkillGroupsOfUserResponse
     */
    public function listSkillGroupsOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupsOfUserWithOptions($request, $runtime);
    }

    /**
     * ListTransferableSkillGroups.
     *
     * @param request - ListTransferableSkillGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransferableSkillGroupsResponse
     *
     * @param ListTransferableSkillGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListTransferableSkillGroupsResponse
     */
    public function listTransferableSkillGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransferableSkillGroups',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransferableSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListTransferableSkillGroups.
     *
     * @param request - ListTransferableSkillGroupsRequest
     *
     * @returns ListTransferableSkillGroupsResponse
     *
     * @param ListTransferableSkillGroupsRequest $request
     *
     * @return ListTransferableSkillGroupsResponse
     */
    public function listTransferableSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransferableSkillGroupsWithOptions($request, $runtime);
    }

    /**
     * ListTrunkProviders.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrunkProvidersResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListTrunkProvidersResponse
     */
    public function listTrunkProvidersWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListTrunkProviders',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTrunkProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListTrunkProviders.
     *
     * @returns ListTrunkProvidersResponse
     *
     * @return ListTrunkProvidersResponse
     */
    public function listTrunkProviders()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrunkProvidersWithOptions($runtime);
    }

    /**
     * ListTrunksOfSkillGroup.
     *
     * @param request - ListTrunksOfSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrunksOfSkillGroupResponse
     *
     * @param ListTrunksOfSkillGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListTrunksOfSkillGroupResponse
     */
    public function listTrunksOfSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrunksOfSkillGroup',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTrunksOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListTrunksOfSkillGroup.
     *
     * @param request - ListTrunksOfSkillGroupRequest
     *
     * @returns ListTrunksOfSkillGroupResponse
     *
     * @param ListTrunksOfSkillGroupRequest $request
     *
     * @return ListTrunksOfSkillGroupResponse
     */
    public function listTrunksOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrunksOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * ListUsers.
     *
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListUsers.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
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
     * ListUsersOfSkillGroup.
     *
     * @param request - ListUsersOfSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersOfSkillGroupResponse
     *
     * @param ListUsersOfSkillGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUsersOfSkillGroupResponse
     */
    public function listUsersOfSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsersOfSkillGroup',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListUsersOfSkillGroup.
     *
     * @param request - ListUsersOfSkillGroupRequest
     *
     * @returns ListUsersOfSkillGroupResponse
     *
     * @param ListUsersOfSkillGroupRequest $request
     *
     * @return ListUsersOfSkillGroupResponse
     */
    public function listUsersOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * ListVoiceAppraise.
     *
     * @param request - ListVoiceAppraiseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVoiceAppraiseResponse
     *
     * @param ListVoiceAppraiseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListVoiceAppraiseResponse
     */
    public function listVoiceAppraiseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVoiceAppraise',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVoiceAppraiseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListVoiceAppraise.
     *
     * @param request - ListVoiceAppraiseRequest
     *
     * @returns ListVoiceAppraiseResponse
     *
     * @param ListVoiceAppraiseRequest $request
     *
     * @return ListVoiceAppraiseResponse
     */
    public function listVoiceAppraise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceAppraiseWithOptions($request, $runtime);
    }

    /**
     * ModifyAgentDevice.
     *
     * @param request - ModifyAgentDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAgentDeviceResponse
     *
     * @param ModifyAgentDeviceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAgentDeviceResponse
     */
    public function modifyAgentDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentDeviceId) {
            @$query['AgentDeviceId'] = $request->agentDeviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isLogin) {
            @$query['IsLogin'] = $request->isLogin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAgentDevice',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAgentDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifyAgentDevice.
     *
     * @param request - ModifyAgentDeviceRequest
     *
     * @returns ModifyAgentDeviceResponse
     *
     * @param ModifyAgentDeviceRequest $request
     *
     * @return ModifyAgentDeviceResponse
     */
    public function modifyAgentDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAgentDeviceWithOptions($request, $runtime);
    }

    /**
     * ModifyPhoneNumber.
     *
     * @param request - ModifyPhoneNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPhoneNumberResponse
     *
     * @param ModifyPhoneNumberRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPhoneNumberResponse
     */
    public function modifyPhoneNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumberId) {
            @$query['PhoneNumberId'] = $request->phoneNumberId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPhoneNumber',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifyPhoneNumber.
     *
     * @param request - ModifyPhoneNumberRequest
     *
     * @returns ModifyPhoneNumberResponse
     *
     * @param ModifyPhoneNumberRequest $request
     *
     * @return ModifyPhoneNumberResponse
     */
    public function modifyPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * ModifyPhoneTags.
     *
     * @param request - ModifyPhoneTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPhoneTagsResponse
     *
     * @param ModifyPhoneTagsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyPhoneTagsResponse
     */
    public function modifyPhoneTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->serviceTag) {
            @$query['ServiceTag'] = $request->serviceTag;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPhoneTags',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPhoneTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifyPhoneTags.
     *
     * @param request - ModifyPhoneTagsRequest
     *
     * @returns ModifyPhoneTagsResponse
     *
     * @param ModifyPhoneTagsRequest $request
     *
     * @return ModifyPhoneTagsResponse
     */
    public function modifyPhoneTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPhoneTagsWithOptions($request, $runtime);
    }

    /**
     * ModifyPrimaryTrunksOfSkillGroup.
     *
     * @param request - ModifyPrimaryTrunksOfSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPrimaryTrunksOfSkillGroupResponse
     *
     * @param ModifyPrimaryTrunksOfSkillGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyPrimaryTrunksOfSkillGroupResponse
     */
    public function modifyPrimaryTrunksOfSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->primaryProviderName) {
            @$query['PrimaryProviderName'] = $request->primaryProviderName;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPrimaryTrunksOfSkillGroup',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPrimaryTrunksOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifyPrimaryTrunksOfSkillGroup.
     *
     * @param request - ModifyPrimaryTrunksOfSkillGroupRequest
     *
     * @returns ModifyPrimaryTrunksOfSkillGroupResponse
     *
     * @param ModifyPrimaryTrunksOfSkillGroupRequest $request
     *
     * @return ModifyPrimaryTrunksOfSkillGroupResponse
     */
    public function modifyPrimaryTrunksOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrimaryTrunksOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * ModifyPrivacyNumberCallDetail.
     *
     * @param request - ModifyPrivacyNumberCallDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPrivacyNumberCallDetailResponse
     *
     * @param ModifyPrivacyNumberCallDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyPrivacyNumberCallDetailResponse
     */
    public function modifyPrivacyNumberCallDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPrivacyNumberCallDetail',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPrivacyNumberCallDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifyPrivacyNumberCallDetail.
     *
     * @param request - ModifyPrivacyNumberCallDetailRequest
     *
     * @returns ModifyPrivacyNumberCallDetailResponse
     *
     * @param ModifyPrivacyNumberCallDetailRequest $request
     *
     * @return ModifyPrivacyNumberCallDetailResponse
     */
    public function modifyPrivacyNumberCallDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrivacyNumberCallDetailWithOptions($request, $runtime);
    }

    /**
     * ModifySkillGroup.
     *
     * @param request - ModifySkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySkillGroupResponse
     *
     * @param ModifySkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifySkillGroupResponse
     */
    public function modifySkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowPrivateOutboundNumber) {
            @$query['AllowPrivateOutboundNumber'] = $request->allowPrivateOutboundNumber;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outboundPhoneNumberId) {
            @$query['OutboundPhoneNumberId'] = $request->outboundPhoneNumberId;
        }

        if (null !== $request->routingStrategy) {
            @$query['RoutingStrategy'] = $request->routingStrategy;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillLevel) {
            @$query['SkillLevel'] = $request->skillLevel;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySkillGroup',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifySkillGroup.
     *
     * @param request - ModifySkillGroupRequest
     *
     * @returns ModifySkillGroupResponse
     *
     * @param ModifySkillGroupRequest $request
     *
     * @return ModifySkillGroupResponse
     */
    public function modifySkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySkillGroupWithOptions($request, $runtime);
    }

    /**
     * 修改技能组基础信息,包括技能组名称、技能组描述、匹配模式、个人外呼号码标识等基础信息.
     *
     * @param request - ModifySkillGroupBasicInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySkillGroupBasicInfoResponse
     *
     * @param ModifySkillGroupBasicInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifySkillGroupBasicInfoResponse
     */
    public function modifySkillGroupBasicInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowPrivateOutboundNumber) {
            @$query['AllowPrivateOutboundNumber'] = $request->allowPrivateOutboundNumber;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->routingStrategy) {
            @$query['RoutingStrategy'] = $request->routingStrategy;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySkillGroupBasicInfo',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySkillGroupBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改技能组基础信息,包括技能组名称、技能组描述、匹配模式、个人外呼号码标识等基础信息.
     *
     * @param request - ModifySkillGroupBasicInfoRequest
     *
     * @returns ModifySkillGroupBasicInfoResponse
     *
     * @param ModifySkillGroupBasicInfoRequest $request
     *
     * @return ModifySkillGroupBasicInfoResponse
     */
    public function modifySkillGroupBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySkillGroupBasicInfoWithOptions($request, $runtime);
    }

    /**
     * ModifySkillGroupOfUser.
     *
     * @param request - ModifySkillGroupOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySkillGroupOfUserResponse
     *
     * @param ModifySkillGroupOfUserRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifySkillGroupOfUserResponse
     */
    public function modifySkillGroupOfUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillLevel) {
            @$query['SkillLevel'] = $request->skillLevel;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySkillGroupOfUser',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySkillGroupOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifySkillGroupOfUser.
     *
     * @param request - ModifySkillGroupOfUserRequest
     *
     * @returns ModifySkillGroupOfUserResponse
     *
     * @param ModifySkillGroupOfUserRequest $request
     *
     * @return ModifySkillGroupOfUserResponse
     */
    public function modifySkillGroupOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySkillGroupOfUserWithOptions($request, $runtime);
    }

    /**
     * ModifySkillGroupOutboundNumbers.
     *
     * @param request - ModifySkillGroupOutboundNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySkillGroupOutboundNumbersResponse
     *
     * @param ModifySkillGroupOutboundNumbersRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifySkillGroupOutboundNumbersResponse
     */
    public function modifySkillGroupOutboundNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->outboundPhoneNumberId) {
            @$query['OutboundPhoneNumberId'] = $request->outboundPhoneNumberId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySkillGroupOutboundNumbers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySkillGroupOutboundNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifySkillGroupOutboundNumbers.
     *
     * @param request - ModifySkillGroupOutboundNumbersRequest
     *
     * @returns ModifySkillGroupOutboundNumbersResponse
     *
     * @param ModifySkillGroupOutboundNumbersRequest $request
     *
     * @return ModifySkillGroupOutboundNumbersResponse
     */
    public function modifySkillGroupOutboundNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySkillGroupOutboundNumbersWithOptions($request, $runtime);
    }

    /**
     * ModifyUser.
     *
     * @param request - ModifyUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserResponse
     *
     * @param ModifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->privateOutboundNumberId) {
            @$query['PrivateOutboundNumberId'] = $request->privateOutboundNumberId;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillLevel) {
            @$query['SkillLevel'] = $request->skillLevel;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUser',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ModifyUser.
     *
     * @param request - ModifyUserRequest
     *
     * @returns ModifyUserResponse
     *
     * @param ModifyUserRequest $request
     *
     * @return ModifyUserResponse
     */
    public function modifyUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserWithOptions($request, $runtime);
    }

    /**
     * PickGlobalOutboundNumbers.
     *
     * @param request - PickGlobalOutboundNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PickGlobalOutboundNumbersResponse
     *
     * @param PickGlobalOutboundNumbersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PickGlobalOutboundNumbersResponse
     */
    public function pickGlobalOutboundNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calleeNumber) {
            @$query['CalleeNumber'] = $request->calleeNumber;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isVirtual) {
            @$query['IsVirtual'] = $request->isVirtual;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PickGlobalOutboundNumbers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PickGlobalOutboundNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PickGlobalOutboundNumbers.
     *
     * @param request - PickGlobalOutboundNumbersRequest
     *
     * @returns PickGlobalOutboundNumbersResponse
     *
     * @param PickGlobalOutboundNumbersRequest $request
     *
     * @return PickGlobalOutboundNumbersResponse
     */
    public function pickGlobalOutboundNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pickGlobalOutboundNumbersWithOptions($request, $runtime);
    }

    /**
     * PickLocalNumber.
     *
     * @param request - PickLocalNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PickLocalNumberResponse
     *
     * @param PickLocalNumberRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PickLocalNumberResponse
     */
    public function pickLocalNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calleeNumber) {
            @$query['CalleeNumber'] = $request->calleeNumber;
        }

        if (null !== $request->candidateNumber) {
            @$query['CandidateNumber'] = $request->candidateNumber;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PickLocalNumber',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PickLocalNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PickLocalNumber.
     *
     * @param request - PickLocalNumberRequest
     *
     * @returns PickLocalNumberResponse
     *
     * @param PickLocalNumberRequest $request
     *
     * @return PickLocalNumberResponse
     */
    public function pickLocalNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pickLocalNumberWithOptions($request, $runtime);
    }

    /**
     * PickOutboundNumbers.
     *
     * @param request - PickOutboundNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PickOutboundNumbersResponse
     *
     * @param PickOutboundNumbersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PickOutboundNumbersResponse
     */
    public function pickOutboundNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calleeNumber) {
            @$query['CalleeNumber'] = $request->calleeNumber;
        }

        if (null !== $request->candidateNumber) {
            @$query['CandidateNumber'] = $request->candidateNumber;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PickOutboundNumbers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PickOutboundNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PickOutboundNumbers.
     *
     * @param request - PickOutboundNumbersRequest
     *
     * @returns PickOutboundNumbersResponse
     *
     * @param PickOutboundNumbersRequest $request
     *
     * @return PickOutboundNumbersResponse
     */
    public function pickOutboundNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pickOutboundNumbersWithOptions($request, $runtime);
    }

    /**
     * PublishContactFlowVersion.
     *
     * @param request - PublishContactFlowVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishContactFlowVersionResponse
     *
     * @param PublishContactFlowVersionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PublishContactFlowVersionResponse
     */
    public function publishContactFlowVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowVersionId) {
            @$query['ContactFlowVersionId'] = $request->contactFlowVersionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->useTianGong) {
            @$query['UseTianGong'] = $request->useTianGong;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishContactFlowVersion',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishContactFlowVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PublishContactFlowVersion.
     *
     * @param request - PublishContactFlowVersionRequest
     *
     * @returns PublishContactFlowVersionResponse
     *
     * @param PublishContactFlowVersionRequest $request
     *
     * @return PublishContactFlowVersionResponse
     */
    public function publishContactFlowVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishContactFlowVersionWithOptions($request, $runtime);
    }

    /**
     * RefreshToken.
     *
     * @param request - RefreshTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshTokenResponse
     *
     * @param RefreshTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RefreshTokenResponse
     */
    public function refreshTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshToken',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RefreshToken.
     *
     * @param request - RefreshTokenRequest
     *
     * @returns RefreshTokenResponse
     *
     * @param RefreshTokenRequest $request
     *
     * @return RefreshTokenResponse
     */
    public function refreshToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshTokenWithOptions($request, $runtime);
    }

    /**
     * 移除电话号码
     *
     * @param request - RemovePhoneNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePhoneNumberResponse
     *
     * @param RemovePhoneNumberRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemovePhoneNumberResponse
     */
    public function removePhoneNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumberId) {
            @$query['PhoneNumberId'] = $request->phoneNumberId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePhoneNumber',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除电话号码
     *
     * @param request - RemovePhoneNumberRequest
     *
     * @returns RemovePhoneNumberResponse
     *
     * @param RemovePhoneNumberRequest $request
     *
     * @return RemovePhoneNumberResponse
     */
    public function removePhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePhoneNumberWithOptions($request, $runtime);
    }

    /**
     * RemoveUsers.
     *
     * @param request - RemoveUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUsersResponse
     *
     * @param RemoveUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveUsersResponse
     */
    public function removeUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUsers',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RemoveUsers.
     *
     * @param request - RemoveUsersRequest
     *
     * @returns RemoveUsersResponse
     *
     * @param RemoveUsersRequest $request
     *
     * @return RemoveUsersResponse
     */
    public function removeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersWithOptions($request, $runtime);
    }

    /**
     * RemoveUsersFromSkillGroup.
     *
     * @param request - RemoveUsersFromSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUsersFromSkillGroupResponse
     *
     * @param RemoveUsersFromSkillGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveUsersFromSkillGroupResponse
     */
    public function removeUsersFromSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUsersFromSkillGroup',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUsersFromSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RemoveUsersFromSkillGroup.
     *
     * @param request - RemoveUsersFromSkillGroupRequest
     *
     * @returns RemoveUsersFromSkillGroupResponse
     *
     * @param RemoveUsersFromSkillGroupRequest $request
     *
     * @return RemoveUsersFromSkillGroupResponse
     */
    public function removeUsersFromSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersFromSkillGroupWithOptions($request, $runtime);
    }

    /**
     * RequestLoginInfo.
     *
     * @param request - RequestLoginInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RequestLoginInfoResponse
     *
     * @param RequestLoginInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RequestLoginInfoResponse
     */
    public function requestLoginInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RequestLoginInfo',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RequestLoginInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RequestLoginInfo.
     *
     * @param request - RequestLoginInfoRequest
     *
     * @returns RequestLoginInfoResponse
     *
     * @param RequestLoginInfoRequest $request
     *
     * @return RequestLoginInfoResponse
     */
    public function requestLoginInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestLoginInfoWithOptions($request, $runtime);
    }

    /**
     * ResetUserStatus.
     *
     * @param request - ResetUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetUserStatusResponse
     *
     * @param ResetUserStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResetUserStatusResponse
     */
    public function resetUserStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ramIdList) {
            @$query['RamIdList'] = $request->ramIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetUserStatus',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ResetUserStatus.
     *
     * @param request - ResetUserStatusRequest
     *
     * @returns ResetUserStatusResponse
     *
     * @param ResetUserStatusRequest $request
     *
     * @return ResetUserStatusResponse
     */
    public function resetUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserStatusWithOptions($request, $runtime);
    }

    /**
     * SaveWebRTCStats.
     *
     * @param request - SaveWebRTCStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveWebRTCStatsResponse
     *
     * @param SaveWebRTCStatsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveWebRTCStatsResponse
     */
    public function saveWebRTCStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->callStartTime) {
            @$query['CallStartTime'] = $request->callStartTime;
        }

        if (null !== $request->calleeNumber) {
            @$query['CalleeNumber'] = $request->calleeNumber;
        }

        if (null !== $request->callerNumber) {
            @$query['CallerNumber'] = $request->callerNumber;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->recordTime) {
            @$query['RecordTime'] = $request->recordTime;
        }

        if (null !== $request->stats) {
            @$query['Stats'] = $request->stats;
        }

        if (null !== $request->tenantId) {
            @$query['TenantId'] = $request->tenantId;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveWebRTCStats',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveWebRTCStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SaveWebRTCStats.
     *
     * @param request - SaveWebRTCStatsRequest
     *
     * @returns SaveWebRTCStatsResponse
     *
     * @param SaveWebRTCStatsRequest $request
     *
     * @return SaveWebRTCStatsResponse
     */
    public function saveWebRTCStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveWebRTCStatsWithOptions($request, $runtime);
    }

    /**
     * SendPredefinedShortMessage.
     *
     * @param request - SendPredefinedShortMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendPredefinedShortMessageResponse
     *
     * @param SendPredefinedShortMessageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SendPredefinedShortMessageResponse
     */
    public function sendPredefinedShortMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendPredefinedShortMessage',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendPredefinedShortMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SendPredefinedShortMessage.
     *
     * @param request - SendPredefinedShortMessageRequest
     *
     * @returns SendPredefinedShortMessageResponse
     *
     * @param SendPredefinedShortMessageRequest $request
     *
     * @return SendPredefinedShortMessageResponse
     */
    public function sendPredefinedShortMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendPredefinedShortMessageWithOptions($request, $runtime);
    }

    /**
     * 发起双向呼叫.
     *
     * @param request - StartBack2BackCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartBack2BackCallResponse
     *
     * @param StartBack2BackCallRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartBack2BackCallResponse
     */
    public function startBack2BackCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callCenterNumber) {
            @$query['CallCenterNumber'] = $request->callCenterNumber;
        }

        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartBack2BackCall',
            'version' => '2017-07-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartBack2BackCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发起双向呼叫.
     *
     * @param request - StartBack2BackCallRequest
     *
     * @returns StartBack2BackCallResponse
     *
     * @param StartBack2BackCallRequest $request
     *
     * @return StartBack2BackCallResponse
     */
    public function startBack2BackCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBack2BackCallWithOptions($request, $runtime);
    }
}
