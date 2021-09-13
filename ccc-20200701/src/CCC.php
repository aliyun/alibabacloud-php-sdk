<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddNumbersToSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddNumbersToSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddPersonalNumbersToUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddPersonalNumbersToUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddPhoneNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddPhoneNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddPhoneNumberToSkillGroupsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddPhoneNumberToSkillGroupsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddSkillGroupsToUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddSkillGroupsToUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddUsersToSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddUsersToSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AnswerCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AnswerCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AssignUsersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AssignUsersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\BargeInCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\BargeInCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\BlindTransferRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\BlindTransferResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CancelAttendedTransferRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CancelAttendedTransferResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ChangeWorkModeRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ChangeWorkModeResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CoachCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CoachCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CompleteAttendedTransferRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CompleteAttendedTransferResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalCallerReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalCallerReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalInstanceReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalInstanceReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetLoginDetailsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetLoginDetailsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetMonoRecordingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetMonoRecordingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetMultiChannelRecordingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetMultiChannelRecordingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetNumberLocationRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetNumberLocationResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeInstanceStatesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeInstanceStatesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnCredentialsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnCredentialsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnServerListRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnServerListResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\HoldCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\HoldCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\InitiateAttendedTransferRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\InitiateAttendedTransferResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\InterceptCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\InterceptCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\LaunchAuthenticationRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\LaunchAuthenticationResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\LaunchSurveyRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\LaunchSurveyResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStateLogsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStateLogsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListBriefSkillGroupsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListBriefSkillGroupsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListConfigItemsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListConfigItemsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDevicesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDevicesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesOfUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesOfUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalInstanceReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalInstanceReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIvrTrackingDetailsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIvrTrackingDetailsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListOutboundNumbersOfUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListOutboundNumbersOfUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPersonalNumbersOfUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPersonalNumbersOfUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPrivilegesOfUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPrivilegesOfUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRamUsersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRamUsersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeAgentStatesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeAgentStatesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeSkillGroupStatesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeSkillGroupStatesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRecentCallDetailRecordsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRecentCallDetailRecordsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRolesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRolesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillLevelsOfUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillLevelsOfUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUnassignedNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUnassignedNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUserLevelsOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUserLevelsOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\MakeCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\MakeCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyPhoneNumberRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyPhoneNumberResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifySkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifySkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifySkillLevelsOfUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifySkillLevelsOfUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyUserLevelsOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyUserLevelsOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\MonitorCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\MonitorCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\MuteCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\MuteCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\PickOutboundNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\PickOutboundNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReadyForServiceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReadyForServiceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RegisterDeviceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RegisterDeviceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReleaseCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReleaseCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemovePersonalNumbersFromUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemovePersonalNumbersFromUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemovePhoneNumberFromSkillGroupsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemovePhoneNumberFromSkillGroupsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemovePhoneNumbersFromSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemovePhoneNumbersFromSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemovePhoneNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemovePhoneNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveSkillGroupsFromUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveSkillGroupsFromUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveUsersFromSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveUsersFromSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveUsersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveUsersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResetAgentStateRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResetAgentStateResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RetrieveCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RetrieveCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveRTCStatsV2Request;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveRTCStatsV2Response;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveTerminalLogRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveTerminalLogResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveWebRtcInfoRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveWebRtcInfoResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveWebRTCStatsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveWebRTCStatsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SendDtmfSignalingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SendDtmfSignalingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SignInGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SignInGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SignOutGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SignOutGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartBack2BackCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartBack2BackCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartPredictiveCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartPredictiveCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\TakeBreakRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\TakeBreakResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnmuteCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnmuteCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateConfigItemsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateConfigItemsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class CCC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'ccc.aliyuncs.com',
            'ap-south-1'            => 'ccc.aliyuncs.com',
            'ap-southeast-1'        => 'ccc.aliyuncs.com',
            'ap-southeast-2'        => 'ccc.aliyuncs.com',
            'ap-southeast-3'        => 'ccc.aliyuncs.com',
            'ap-southeast-5'        => 'ccc.aliyuncs.com',
            'cn-beijing'            => 'ccc.aliyuncs.com',
            'cn-chengdu'            => 'ccc.aliyuncs.com',
            'cn-hongkong'           => 'ccc.aliyuncs.com',
            'cn-huhehaote'          => 'ccc.aliyuncs.com',
            'cn-qingdao'            => 'ccc.aliyuncs.com',
            'cn-shenzhen'           => 'ccc.aliyuncs.com',
            'cn-zhangjiakou'        => 'ccc.aliyuncs.com',
            'eu-central-1'          => 'ccc.aliyuncs.com',
            'eu-west-1'             => 'ccc.aliyuncs.com',
            'me-east-1'             => 'ccc.aliyuncs.com',
            'us-east-1'             => 'ccc.aliyuncs.com',
            'us-west-1'             => 'ccc.aliyuncs.com',
            'cn-hangzhou-finance'   => 'ccc.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'ccc.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ccc.aliyuncs.com',
            'cn-north-2-gov-1'      => 'ccc.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddSkillGroupsToUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddSkillGroupsToUserResponse
     */
    public function addSkillGroupsToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSkillGroupsToUserResponse::fromMap($this->doRPCRequest('AddSkillGroupsToUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddSkillGroupsToUserRequest $request
     *
     * @return AddSkillGroupsToUserResponse
     */
    public function addSkillGroupsToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSkillGroupsToUserWithOptions($request, $runtime);
    }

    /**
     * @param SaveWebRTCStatsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveWebRTCStatsResponse
     */
    public function saveWebRTCStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveWebRTCStatsResponse::fromMap($this->doRPCRequest('SaveWebRTCStats', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetMonoRecordingRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMonoRecordingResponse
     */
    public function getMonoRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMonoRecordingResponse::fromMap($this->doRPCRequest('GetMonoRecording', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMonoRecordingRequest $request
     *
     * @return GetMonoRecordingResponse
     */
    public function getMonoRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonoRecordingWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListAgentStateLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAgentStateLogsResponse
     */
    public function listAgentStateLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAgentStateLogsResponse::fromMap($this->doRPCRequest('ListAgentStateLogs', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RemovePhoneNumberFromSkillGroupsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemovePhoneNumberFromSkillGroupsResponse
     */
    public function removePhoneNumberFromSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemovePhoneNumberFromSkillGroupsResponse::fromMap($this->doRPCRequest('RemovePhoneNumberFromSkillGroups', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemovePhoneNumberFromSkillGroupsRequest $request
     *
     * @return RemovePhoneNumberFromSkillGroupsResponse
     */
    public function removePhoneNumberFromSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePhoneNumberFromSkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListPhoneNumbersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPhoneNumbersResponse
     */
    public function listPhoneNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPhoneNumbersResponse::fromMap($this->doRPCRequest('ListPhoneNumbers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AddNumbersToSkillGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddNumbersToSkillGroupResponse
     */
    public function addNumbersToSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddNumbersToSkillGroupResponse::fromMap($this->doRPCRequest('AddNumbersToSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddNumbersToSkillGroupRequest $request
     *
     * @return AddNumbersToSkillGroupResponse
     */
    public function addNumbersToSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNumbersToSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ResetAgentStateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResetAgentStateResponse
     */
    public function resetAgentStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAgentStateResponse::fromMap($this->doRPCRequest('ResetAgentState', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetAgentStateRequest $request
     *
     * @return ResetAgentStateResponse
     */
    public function resetAgentState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAgentStateWithOptions($request, $runtime);
    }

    /**
     * @param ChangeWorkModeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ChangeWorkModeResponse
     */
    public function changeWorkModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeWorkModeResponse::fromMap($this->doRPCRequest('ChangeWorkMode', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeWorkModeRequest $request
     *
     * @return ChangeWorkModeResponse
     */
    public function changeWorkMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeWorkModeWithOptions($request, $runtime);
    }

    /**
     * @param GetTurnCredentialsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTurnCredentialsResponse
     */
    public function getTurnCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTurnCredentialsResponse::fromMap($this->doRPCRequest('GetTurnCredentials', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTurnCredentialsRequest $request
     *
     * @return GetTurnCredentialsResponse
     */
    public function getTurnCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTurnCredentialsWithOptions($request, $runtime);
    }

    /**
     * @param AddPhoneNumbersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddPhoneNumbersResponse
     */
    public function addPhoneNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddPhoneNumbersResponse::fromMap($this->doRPCRequest('AddPhoneNumbers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddPhoneNumbersRequest $request
     *
     * @return AddPhoneNumbersResponse
     */
    public function addPhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * @param SaveWebRtcInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveWebRtcInfoResponse
     */
    public function saveWebRtcInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveWebRtcInfoResponse::fromMap($this->doRPCRequest('SaveWebRtcInfo', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveWebRtcInfoRequest $request
     *
     * @return SaveWebRtcInfoResponse
     */
    public function saveWebRtcInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveWebRtcInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListIntervalSkillGroupReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListIntervalSkillGroupReportResponse
     */
    public function listIntervalSkillGroupReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIntervalSkillGroupReportResponse::fromMap($this->doRPCRequest('ListIntervalSkillGroupReport', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIntervalSkillGroupReportRequest $request
     *
     * @return ListIntervalSkillGroupReportResponse
     */
    public function listIntervalSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param MonitorCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MonitorCallResponse
     */
    public function monitorCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MonitorCallResponse::fromMap($this->doRPCRequest('MonitorCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MonitorCallRequest $request
     *
     * @return MonitorCallResponse
     */
    public function monitorCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->monitorCallWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUsersFromSkillGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveUsersFromSkillGroupResponse
     */
    public function removeUsersFromSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveUsersFromSkillGroupResponse::fromMap($this->doRPCRequest('RemoveUsersFromSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSkillGroupResponse
     */
    public function deleteSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSkillGroupResponse::fromMap($this->doRPCRequest('DeleteSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param BlindTransferRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BlindTransferResponse
     */
    public function blindTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BlindTransferResponse::fromMap($this->doRPCRequest('BlindTransfer', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BlindTransferRequest $request
     *
     * @return BlindTransferResponse
     */
    public function blindTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blindTransferWithOptions($request, $runtime);
    }

    /**
     * @param ListSkillLevelsOfUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSkillLevelsOfUserResponse
     */
    public function listSkillLevelsOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSkillLevelsOfUserResponse::fromMap($this->doRPCRequest('ListSkillLevelsOfUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSkillLevelsOfUserRequest $request
     *
     * @return ListSkillLevelsOfUserResponse
     */
    public function listSkillLevelsOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillLevelsOfUserWithOptions($request, $runtime);
    }

    /**
     * @param ListUnassignedNumbersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUnassignedNumbersResponse
     */
    public function listUnassignedNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUnassignedNumbersResponse::fromMap($this->doRPCRequest('ListUnassignedNumbers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUnassignedNumbersRequest $request
     *
     * @return ListUnassignedNumbersResponse
     */
    public function listUnassignedNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUnassignedNumbersWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceTrendingReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetInstanceTrendingReportResponse
     */
    public function getInstanceTrendingReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceTrendingReportResponse::fromMap($this->doRPCRequest('GetInstanceTrendingReport', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceTrendingReportRequest $request
     *
     * @return GetInstanceTrendingReportResponse
     */
    public function getInstanceTrendingReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceTrendingReportWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesOfUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstancesOfUserResponse
     */
    public function listInstancesOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstancesOfUserResponse::fromMap($this->doRPCRequest('ListInstancesOfUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstancesOfUserRequest $request
     *
     * @return ListInstancesOfUserResponse
     */
    public function listInstancesOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesOfUserWithOptions($request, $runtime);
    }

    /**
     * @param LaunchSurveyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LaunchSurveyResponse
     */
    public function launchSurveyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LaunchSurveyResponse::fromMap($this->doRPCRequest('LaunchSurvey', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param LaunchSurveyRequest $request
     *
     * @return LaunchSurveyResponse
     */
    public function launchSurvey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchSurveyWithOptions($request, $runtime);
    }

    /**
     * @param ListIvrTrackingDetailsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListIvrTrackingDetailsResponse
     */
    public function listIvrTrackingDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIvrTrackingDetailsResponse::fromMap($this->doRPCRequest('ListIvrTrackingDetails', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIvrTrackingDetailsRequest $request
     *
     * @return ListIvrTrackingDetailsResponse
     */
    public function listIvrTrackingDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIvrTrackingDetailsWithOptions($request, $runtime);
    }

    /**
     * @param ListBriefSkillGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBriefSkillGroupsResponse
     */
    public function listBriefSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBriefSkillGroupsResponse::fromMap($this->doRPCRequest('ListBriefSkillGroups', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBriefSkillGroupsRequest $request
     *
     * @return ListBriefSkillGroupsResponse
     */
    public function listBriefSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBriefSkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param UnmuteCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UnmuteCallResponse
     */
    public function unmuteCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnmuteCallResponse::fromMap($this->doRPCRequest('UnmuteCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnmuteCallRequest $request
     *
     * @return UnmuteCallResponse
     */
    public function unmuteCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unmuteCallWithOptions($request, $runtime);
    }

    /**
     * @param ModifySkillLevelsOfUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySkillLevelsOfUserResponse
     */
    public function modifySkillLevelsOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySkillLevelsOfUserResponse::fromMap($this->doRPCRequest('ModifySkillLevelsOfUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySkillLevelsOfUserRequest $request
     *
     * @return ModifySkillLevelsOfUserResponse
     */
    public function modifySkillLevelsOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySkillLevelsOfUserWithOptions($request, $runtime);
    }

    /**
     * @param AssignUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AssignUsersResponse
     */
    public function assignUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssignUsersResponse::fromMap($this->doRPCRequest('AssignUsers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListUserLevelsOfSkillGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUserLevelsOfSkillGroupResponse
     */
    public function listUserLevelsOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserLevelsOfSkillGroupResponse::fromMap($this->doRPCRequest('ListUserLevelsOfSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserLevelsOfSkillGroupRequest $request
     *
     * @return ListUserLevelsOfSkillGroupResponse
     */
    public function listUserLevelsOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserLevelsOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRolesResponse::fromMap($this->doRPCRequest('ListRoles', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UpdateConfigItemsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateConfigItemsResponse
     */
    public function updateConfigItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConfigItemsResponse::fromMap($this->doRPCRequest('UpdateConfigItems', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateConfigItemsRequest $request
     *
     * @return UpdateConfigItemsResponse
     */
    public function updateConfigItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigItemsWithOptions($request, $runtime);
    }

    /**
     * @param GetCallDetailRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCallDetailRecordResponse
     */
    public function getCallDetailRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCallDetailRecordResponse::fromMap($this->doRPCRequest('GetCallDetailRecord', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCallDetailRecordRequest $request
     *
     * @return GetCallDetailRecordResponse
     */
    public function getCallDetailRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallDetailRecordWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPhoneNumberRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPhoneNumberResponse
     */
    public function modifyPhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPhoneNumberResponse::fromMap($this->doRPCRequest('ModifyPhoneNumber', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CoachCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CoachCallResponse
     */
    public function coachCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CoachCallResponse::fromMap($this->doRPCRequest('CoachCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CoachCallRequest $request
     *
     * @return CoachCallResponse
     */
    public function coachCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->coachCallWithOptions($request, $runtime);
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

        return CreateUserResponse::fromMap($this->doRPCRequest('CreateUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListPrivilegesOfUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPrivilegesOfUserResponse
     */
    public function listPrivilegesOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPrivilegesOfUserResponse::fromMap($this->doRPCRequest('ListPrivilegesOfUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPrivilegesOfUserRequest $request
     *
     * @return ListPrivilegesOfUserResponse
     */
    public function listPrivilegesOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivilegesOfUserWithOptions($request, $runtime);
    }

    /**
     * @param AddPersonalNumbersToUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddPersonalNumbersToUserResponse
     */
    public function addPersonalNumbersToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddPersonalNumbersToUserResponse::fromMap($this->doRPCRequest('AddPersonalNumbersToUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddPersonalNumbersToUserRequest $request
     *
     * @return AddPersonalNumbersToUserResponse
     */
    public function addPersonalNumbersToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPersonalNumbersToUserWithOptions($request, $runtime);
    }

    /**
     * @param ListHistoricalAgentReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListHistoricalAgentReportResponse
     */
    public function listHistoricalAgentReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHistoricalAgentReportResponse::fromMap($this->doRPCRequest('ListHistoricalAgentReport', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHistoricalAgentReportRequest $request
     *
     * @return ListHistoricalAgentReportResponse
     */
    public function listHistoricalAgentReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHistoricalAgentReportWithOptions($request, $runtime);
    }

    /**
     * @param InterceptCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return InterceptCallResponse
     */
    public function interceptCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InterceptCallResponse::fromMap($this->doRPCRequest('InterceptCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InterceptCallRequest $request
     *
     * @return InterceptCallResponse
     */
    public function interceptCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->interceptCallWithOptions($request, $runtime);
    }

    /**
     * @param ListContactFlowsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListContactFlowsResponse
     */
    public function listContactFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListContactFlowsResponse::fromMap($this->doRPCRequest('ListContactFlows', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListPersonalNumbersOfUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPersonalNumbersOfUserResponse
     */
    public function listPersonalNumbersOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonalNumbersOfUserResponse::fromMap($this->doRPCRequest('ListPersonalNumbersOfUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonalNumbersOfUserRequest $request
     *
     * @return ListPersonalNumbersOfUserResponse
     */
    public function listPersonalNumbersOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonalNumbersOfUserWithOptions($request, $runtime);
    }

    /**
     * @param StartPredictiveCallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartPredictiveCallResponse
     */
    public function startPredictiveCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartPredictiveCallResponse::fromMap($this->doRPCRequest('StartPredictiveCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartPredictiveCallRequest $request
     *
     * @return StartPredictiveCallResponse
     */
    public function startPredictiveCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPredictiveCallWithOptions($request, $runtime);
    }

    /**
     * @param ListIntervalInstanceReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListIntervalInstanceReportResponse
     */
    public function listIntervalInstanceReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIntervalInstanceReportResponse::fromMap($this->doRPCRequest('ListIntervalInstanceReport', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIntervalInstanceReportRequest $request
     *
     * @return ListIntervalInstanceReportResponse
     */
    public function listIntervalInstanceReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalInstanceReportWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RemoveSkillGroupsFromUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveSkillGroupsFromUserResponse
     */
    public function removeSkillGroupsFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveSkillGroupsFromUserResponse::fromMap($this->doRPCRequest('RemoveSkillGroupsFromUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveSkillGroupsFromUserRequest $request
     *
     * @return RemoveSkillGroupsFromUserResponse
     */
    public function removeSkillGroupsFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSkillGroupsFromUserWithOptions($request, $runtime);
    }

    /**
     * @param ListRealtimeAgentStatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListRealtimeAgentStatesResponse
     */
    public function listRealtimeAgentStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRealtimeAgentStatesResponse::fromMap($this->doRPCRequest('ListRealtimeAgentStates', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRealtimeAgentStatesRequest $request
     *
     * @return ListRealtimeAgentStatesResponse
     */
    public function listRealtimeAgentStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeAgentStatesWithOptions($request, $runtime);
    }

    /**
     * @param LaunchAuthenticationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return LaunchAuthenticationResponse
     */
    public function launchAuthenticationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LaunchAuthenticationResponse::fromMap($this->doRPCRequest('LaunchAuthentication', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param LaunchAuthenticationRequest $request
     *
     * @return LaunchAuthenticationResponse
     */
    public function launchAuthentication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchAuthenticationWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstancesResponse::fromMap($this->doRPCRequest('ListInstances', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @param GetHistoricalInstanceReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHistoricalInstanceReportResponse
     */
    public function getHistoricalInstanceReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHistoricalInstanceReportResponse::fromMap($this->doRPCRequest('GetHistoricalInstanceReport', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHistoricalInstanceReportRequest $request
     *
     * @return GetHistoricalInstanceReportResponse
     */
    public function getHistoricalInstanceReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoricalInstanceReportWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveUsersResponse
     */
    public function removeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveUsersResponse::fromMap($this->doRPCRequest('RemoveUsers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param StartBack2BackCallRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartBack2BackCallResponse
     */
    public function startBack2BackCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartBack2BackCallResponse::fromMap($this->doRPCRequest('StartBack2BackCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartBack2BackCallRequest $request
     *
     * @return StartBack2BackCallResponse
     */
    public function startBack2BackCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBack2BackCallWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserResponse::fromMap($this->doRPCRequest('GetUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RemovePhoneNumbersFromSkillGroupRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemovePhoneNumbersFromSkillGroupResponse
     */
    public function removePhoneNumbersFromSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemovePhoneNumbersFromSkillGroupResponse::fromMap($this->doRPCRequest('RemovePhoneNumbersFromSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemovePhoneNumbersFromSkillGroupRequest $request
     *
     * @return RemovePhoneNumbersFromSkillGroupResponse
     */
    public function removePhoneNumbersFromSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePhoneNumbersFromSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param CompleteAttendedTransferRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CompleteAttendedTransferResponse
     */
    public function completeAttendedTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompleteAttendedTransferResponse::fromMap($this->doRPCRequest('CompleteAttendedTransfer', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CompleteAttendedTransferRequest $request
     *
     * @return CompleteAttendedTransferResponse
     */
    public function completeAttendedTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeAttendedTransferWithOptions($request, $runtime);
    }

    /**
     * @param ResetUserPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetUserPasswordResponse::fromMap($this->doRPCRequest('ResetUserPassword', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetUserPasswordRequest $request
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param GetTurnServerListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTurnServerListResponse
     */
    public function getTurnServerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTurnServerListResponse::fromMap($this->doRPCRequest('GetTurnServerList', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTurnServerListRequest $request
     *
     * @return GetTurnServerListResponse
     */
    public function getTurnServerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTurnServerListWithOptions($request, $runtime);
    }

    /**
     * @param GetNumberLocationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetNumberLocationResponse
     */
    public function getNumberLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNumberLocationResponse::fromMap($this->doRPCRequest('GetNumberLocation', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNumberLocationRequest $request
     *
     * @return GetNumberLocationResponse
     */
    public function getNumberLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumberLocationWithOptions($request, $runtime);
    }

    /**
     * @param ListRamUsersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListRamUsersResponse
     */
    public function listRamUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRamUsersResponse::fromMap($this->doRPCRequest('ListRamUsers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRamUsersRequest $request
     *
     * @return ListRamUsersResponse
     */
    public function listRamUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRamUsersWithOptions($request, $runtime);
    }

    /**
     * @param MuteCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MuteCallResponse
     */
    public function muteCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MuteCallResponse::fromMap($this->doRPCRequest('MuteCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MuteCallRequest $request
     *
     * @return MuteCallResponse
     */
    public function muteCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->muteCallWithOptions($request, $runtime);
    }

    /**
     * @param AnswerCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AnswerCallResponse
     */
    public function answerCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AnswerCallResponse::fromMap($this->doRPCRequest('AnswerCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AnswerCallRequest $request
     *
     * @return AnswerCallResponse
     */
    public function answerCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->answerCallWithOptions($request, $runtime);
    }

    /**
     * @param ListIntervalAgentReportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListIntervalAgentReportResponse
     */
    public function listIntervalAgentReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIntervalAgentReportResponse::fromMap($this->doRPCRequest('ListIntervalAgentReport', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIntervalAgentReportRequest $request
     *
     * @return ListIntervalAgentReportResponse
     */
    public function listIntervalAgentReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalAgentReportWithOptions($request, $runtime);
    }

    /**
     * @param ListCallDetailRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCallDetailRecordsResponse
     */
    public function listCallDetailRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCallDetailRecordsResponse::fromMap($this->doRPCRequest('ListCallDetailRecords', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RemovePhoneNumbersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemovePhoneNumbersResponse
     */
    public function removePhoneNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemovePhoneNumbersResponse::fromMap($this->doRPCRequest('RemovePhoneNumbers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemovePhoneNumbersRequest $request
     *
     * @return RemovePhoneNumbersResponse
     */
    public function removePhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * @param CancelAttendedTransferRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CancelAttendedTransferResponse
     */
    public function cancelAttendedTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelAttendedTransferResponse::fromMap($this->doRPCRequest('CancelAttendedTransfer', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelAttendedTransferRequest $request
     *
     * @return CancelAttendedTransferResponse
     */
    public function cancelAttendedTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAttendedTransferWithOptions($request, $runtime);
    }

    /**
     * @param TakeBreakRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return TakeBreakResponse
     */
    public function takeBreakWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TakeBreakResponse::fromMap($this->doRPCRequest('TakeBreak', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TakeBreakRequest $request
     *
     * @return TakeBreakResponse
     */
    public function takeBreak($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->takeBreakWithOptions($request, $runtime);
    }

    /**
     * @param ListHistoricalSkillGroupReportRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListHistoricalSkillGroupReportResponse
     */
    public function listHistoricalSkillGroupReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHistoricalSkillGroupReportResponse::fromMap($this->doRPCRequest('ListHistoricalSkillGroupReport', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHistoricalSkillGroupReportRequest $request
     *
     * @return ListHistoricalSkillGroupReportResponse
     */
    public function listHistoricalSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHistoricalSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param SendDtmfSignalingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendDtmfSignalingResponse
     */
    public function sendDtmfSignalingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendDtmfSignalingResponse::fromMap($this->doRPCRequest('SendDtmfSignaling', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendDtmfSignalingRequest $request
     *
     * @return SendDtmfSignalingResponse
     */
    public function sendDtmfSignaling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendDtmfSignalingWithOptions($request, $runtime);
    }

    /**
     * @param ListRecentCallDetailRecordsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListRecentCallDetailRecordsResponse
     */
    public function listRecentCallDetailRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRecentCallDetailRecordsResponse::fromMap($this->doRPCRequest('ListRecentCallDetailRecords', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRecentCallDetailRecordsRequest $request
     *
     * @return ListRecentCallDetailRecordsResponse
     */
    public function listRecentCallDetailRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecentCallDetailRecordsWithOptions($request, $runtime);
    }

    /**
     * @param InitiateAttendedTransferRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InitiateAttendedTransferResponse
     */
    public function initiateAttendedTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InitiateAttendedTransferResponse::fromMap($this->doRPCRequest('InitiateAttendedTransfer', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InitiateAttendedTransferRequest $request
     *
     * @return InitiateAttendedTransferResponse
     */
    public function initiateAttendedTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initiateAttendedTransferWithOptions($request, $runtime);
    }

    /**
     * @param MakeCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MakeCallResponse
     */
    public function makeCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MakeCallResponse::fromMap($this->doRPCRequest('MakeCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MakeCallRequest $request
     *
     * @return MakeCallResponse
     */
    public function makeCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeCallWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceResponse::fromMap($this->doRPCRequest('GetInstance', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AddUsersToSkillGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddUsersToSkillGroupResponse
     */
    public function addUsersToSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddUsersToSkillGroupResponse::fromMap($this->doRPCRequest('AddUsersToSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddUsersToSkillGroupRequest $request
     *
     * @return AddUsersToSkillGroupResponse
     */
    public function addUsersToSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersToSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListConfigItemsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConfigItemsResponse
     */
    public function listConfigItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConfigItemsResponse::fromMap($this->doRPCRequest('ListConfigItems', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListConfigItemsRequest $request
     *
     * @return ListConfigItemsResponse
     */
    public function listConfigItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigItemsWithOptions($request, $runtime);
    }

    /**
     * @param SignInGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SignInGroupResponse
     */
    public function signInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SignInGroupResponse::fromMap($this->doRPCRequest('SignInGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SignInGroupRequest $request
     *
     * @return SignInGroupResponse
     */
    public function signInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signInGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetRealtimeInstanceStatesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetRealtimeInstanceStatesResponse
     */
    public function getRealtimeInstanceStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRealtimeInstanceStatesResponse::fromMap($this->doRPCRequest('GetRealtimeInstanceStates', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRealtimeInstanceStatesRequest $request
     *
     * @return GetRealtimeInstanceStatesResponse
     */
    public function getRealtimeInstanceStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeInstanceStatesWithOptions($request, $runtime);
    }

    /**
     * @param ModifySkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifySkillGroupResponse
     */
    public function modifySkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySkillGroupResponse::fromMap($this->doRPCRequest('ModifySkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUserResponse::fromMap($this->doRPCRequest('ModifyUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AddPhoneNumberToSkillGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddPhoneNumberToSkillGroupsResponse
     */
    public function addPhoneNumberToSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddPhoneNumberToSkillGroupsResponse::fromMap($this->doRPCRequest('AddPhoneNumberToSkillGroups', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddPhoneNumberToSkillGroupsRequest $request
     *
     * @return AddPhoneNumberToSkillGroupsResponse
     */
    public function addPhoneNumberToSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPhoneNumberToSkillGroupsWithOptions($request, $runtime);
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

        return ListDevicesResponse::fromMap($this->doRPCRequest('ListDevices', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RetrieveCallRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RetrieveCallResponse
     */
    public function retrieveCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RetrieveCallResponse::fromMap($this->doRPCRequest('RetrieveCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RetrieveCallRequest $request
     *
     * @return RetrieveCallResponse
     */
    public function retrieveCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retrieveCallWithOptions($request, $runtime);
    }

    /**
     * @param ListSkillGroupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSkillGroupsResponse
     */
    public function listSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSkillGroupsResponse::fromMap($this->doRPCRequest('ListSkillGroups', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param HoldCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return HoldCallResponse
     */
    public function holdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HoldCallResponse::fromMap($this->doRPCRequest('HoldCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HoldCallRequest $request
     *
     * @return HoldCallResponse
     */
    public function holdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->holdCallWithOptions($request, $runtime);
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

        return RegisterDeviceResponse::fromMap($this->doRPCRequest('RegisterDevice', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RemovePersonalNumbersFromUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RemovePersonalNumbersFromUserResponse
     */
    public function removePersonalNumbersFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemovePersonalNumbersFromUserResponse::fromMap($this->doRPCRequest('RemovePersonalNumbersFromUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemovePersonalNumbersFromUserRequest $request
     *
     * @return RemovePersonalNumbersFromUserResponse
     */
    public function removePersonalNumbersFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePersonalNumbersFromUserWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceResponse::fromMap($this->doRPCRequest('ModifyInstance', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceRequest $request
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListOutboundNumbersOfUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListOutboundNumbersOfUserResponse
     */
    public function listOutboundNumbersOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOutboundNumbersOfUserResponse::fromMap($this->doRPCRequest('ListOutboundNumbersOfUser', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOutboundNumbersOfUserRequest $request
     *
     * @return ListOutboundNumbersOfUserResponse
     */
    public function listOutboundNumbersOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundNumbersOfUserWithOptions($request, $runtime);
    }

    /**
     * @param PollUserStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PollUserStatusResponse
     */
    public function pollUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PollUserStatusResponse::fromMap($this->doRPCRequest('PollUserStatus', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PollUserStatusRequest $request
     *
     * @return PollUserStatusResponse
     */
    public function pollUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pollUserStatusWithOptions($request, $runtime);
    }

    /**
     * @param ReadyForServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReadyForServiceResponse
     */
    public function readyForServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReadyForServiceResponse::fromMap($this->doRPCRequest('ReadyForService', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReadyForServiceRequest $request
     *
     * @return ReadyForServiceResponse
     */
    public function readyForService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readyForServiceWithOptions($request, $runtime);
    }

    /**
     * @param GetMultiChannelRecordingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMultiChannelRecordingResponse
     */
    public function getMultiChannelRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMultiChannelRecordingResponse::fromMap($this->doRPCRequest('GetMultiChannelRecording', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMultiChannelRecordingRequest $request
     *
     * @return GetMultiChannelRecordingResponse
     */
    public function getMultiChannelRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiChannelRecordingWithOptions($request, $runtime);
    }

    /**
     * @param BargeInCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BargeInCallResponse
     */
    public function bargeInCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BargeInCallResponse::fromMap($this->doRPCRequest('BargeInCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BargeInCallRequest $request
     *
     * @return BargeInCallResponse
     */
    public function bargeInCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bargeInCallWithOptions($request, $runtime);
    }

    /**
     * @param ListPhoneNumbersOfSkillGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListPhoneNumbersOfSkillGroupResponse
     */
    public function listPhoneNumbersOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPhoneNumbersOfSkillGroupResponse::fromMap($this->doRPCRequest('ListPhoneNumbersOfSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPhoneNumbersOfSkillGroupRequest $request
     *
     * @return ListPhoneNumbersOfSkillGroupResponse
     */
    public function listPhoneNumbersOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhoneNumbersOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param SignOutGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SignOutGroupResponse
     */
    public function signOutGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SignOutGroupResponse::fromMap($this->doRPCRequest('SignOutGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SignOutGroupRequest $request
     *
     * @return SignOutGroupResponse
     */
    public function signOutGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signOutGroupWithOptions($request, $runtime);
    }

    /**
     * @param SaveRTCStatsV2Request $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveRTCStatsV2Response
     */
    public function saveRTCStatsV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveRTCStatsV2Response::fromMap($this->doRPCRequest('SaveRTCStatsV2', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveRTCStatsV2Request $request
     *
     * @return SaveRTCStatsV2Response
     */
    public function saveRTCStatsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveRTCStatsV2WithOptions($request, $runtime);
    }

    /**
     * @param GetHistoricalCallerReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetHistoricalCallerReportResponse
     */
    public function getHistoricalCallerReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHistoricalCallerReportResponse::fromMap($this->doRPCRequest('GetHistoricalCallerReport', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHistoricalCallerReportRequest $request
     *
     * @return GetHistoricalCallerReportResponse
     */
    public function getHistoricalCallerReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoricalCallerReportWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserLevelsOfSkillGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyUserLevelsOfSkillGroupResponse
     */
    public function modifyUserLevelsOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUserLevelsOfSkillGroupResponse::fromMap($this->doRPCRequest('ModifyUserLevelsOfSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyUserLevelsOfSkillGroupRequest $request
     *
     * @return ModifyUserLevelsOfSkillGroupResponse
     */
    public function modifyUserLevelsOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserLevelsOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param SaveTerminalLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveTerminalLogResponse
     */
    public function saveTerminalLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTerminalLogResponse::fromMap($this->doRPCRequest('SaveTerminalLog', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveTerminalLogRequest $request
     *
     * @return SaveTerminalLogResponse
     */
    public function saveTerminalLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTerminalLogWithOptions($request, $runtime);
    }

    /**
     * @param ListRealtimeSkillGroupStatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListRealtimeSkillGroupStatesResponse
     */
    public function listRealtimeSkillGroupStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRealtimeSkillGroupStatesResponse::fromMap($this->doRPCRequest('ListRealtimeSkillGroupStates', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRealtimeSkillGroupStatesRequest $request
     *
     * @return ListRealtimeSkillGroupStatesResponse
     */
    public function listRealtimeSkillGroupStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeSkillGroupStatesWithOptions($request, $runtime);
    }

    /**
     * @param CreateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSkillGroupResponse::fromMap($this->doRPCRequest('CreateSkillGroup', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PickOutboundNumbersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PickOutboundNumbersResponse
     */
    public function pickOutboundNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PickOutboundNumbersResponse::fromMap($this->doRPCRequest('PickOutboundNumbers', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ReleaseCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ReleaseCallResponse
     */
    public function releaseCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseCallResponse::fromMap($this->doRPCRequest('ReleaseCall', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseCallRequest $request
     *
     * @return ReleaseCallResponse
     */
    public function releaseCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseCallWithOptions($request, $runtime);
    }

    /**
     * @param GetLoginDetailsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLoginDetailsResponse
     */
    public function getLoginDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLoginDetailsResponse::fromMap($this->doRPCRequest('GetLoginDetails', '2020-07-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLoginDetailsRequest $request
     *
     * @return GetLoginDetailsResponse
     */
    public function getLoginDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginDetailsWithOptions($request, $runtime);
    }
}
