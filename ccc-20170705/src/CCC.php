<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddAgentDeviceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddAgentDeviceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneNumberRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneNumberResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneTagsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneTagsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AssignJobsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AssignJobsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\AssignUsersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\AssignUsersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CallOnlinePrivacyNumberRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CallOnlinePrivacyNumberResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CancelJobsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CancelJobsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CommitContactFlowVersionModificationRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CommitContactFlowVersionModificationResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateBatchJobsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateBatchJobsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateCabInstanceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateCabInstanceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateFaultRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateFaultResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateJobGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateJobGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateMediaRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateMediaResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateScenarioFromTemplateRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateScenarioFromTemplateResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateScenarioRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateScenarioResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateSurveyRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateSurveyResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateVoiceAppraiseRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateVoiceAppraiseResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteJobGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteJobGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteMediaRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteMediaResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeletePhoneTagsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeletePhoneTagsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteSurveyRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DeleteSurveyResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DialExRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DialExResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DialogueRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DialogueResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DisableTrunkProvidersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DisableTrunkProvidersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadAllTypeRecordingRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadAllTypeRecordingResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadCabRecordingRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadCabRecordingResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadOriginalStatisticsReportRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadOriginalStatisticsReportResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadRecordingRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadRecordingResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadUnreachableContactsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadUnreachableContactsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConfigRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConfigResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationListRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationListResponse;
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
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobDataUploadParamsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobDataUploadParamsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobListRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobListResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobStatusByCallIdRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobStatusByCallIdResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobTemplateDownloadParamsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobTemplateDownloadParamsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetNumberRegionInfoRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetNumberRegionInfoResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetRecordOssUploadParamRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetRecordOssUploadParamResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetRoutePointRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetRoutePointResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetScenarioRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetScenarioResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetSmsConfigRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetSmsConfigResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetSurveyRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetSurveyResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTaskListRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTaskListResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTURNCredentialsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTURNCredentialsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTURNServerListRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetTURNServerListResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\InflightTaskTimeoutRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\InflightTaskTimeoutResponse;
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
use AlibabaCloud\SDK\CCC\V20170705\Models\ListBasicStatisticsReportSubItemsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListBasicStatisticsReportSubItemsResponse;
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
use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobGroupsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobGroupsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobsByGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobsByGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobStatusRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobStatusResponse;
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
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingOfDualTrackRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingOfDualTrackResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsByContactIdRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsByContactIdResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRolesRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRolesResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenariosRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenariosResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenarioTemplatesResponse;
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
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSurveysRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSurveysResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTransferableSkillGroupsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTransferableSkillGroupsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTrunkProvidersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTrunksOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListTrunksOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUnreachableContactsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUnreachableContactsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyAgentDeviceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyAgentDeviceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyCabInstanceRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyCabInstanceResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPhoneNumberRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPhoneNumberResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPhoneTagsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPhoneTagsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPrimaryTrunksOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPrimaryTrunksOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPrivacyNumberCallDetailRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyPrivacyNumberCallDetailResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyScenarioRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyScenarioResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupOfUserRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupOfUserResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupOutboundNumbersRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupOutboundNumbersResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySurveyRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySurveyResponse;
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
use AlibabaCloud\SDK\CCC\V20170705\Models\PublishSurveyRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\PublishSurveyResponse;
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
use AlibabaCloud\SDK\CCC\V20170705\Models\ResumeJobsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\ResumeJobsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\SaveStatsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\SaveStatsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\SaveWebRTCStatsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\SaveWebRTCStatsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\SendPredefinedShortMessageRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\SendPredefinedShortMessageResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\StartBack2BackCallRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\StartBack2BackCallResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\StartJobRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\StartJobResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\SubmitBatchJobsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\SubmitBatchJobsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\SubmitCabRecordingRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\SubmitCabRecordingResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\SuspendJobsRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\SuspendJobsResponse;
use AlibabaCloud\SDK\CCC\V20170705\Models\TaskPreparingRequest;
use AlibabaCloud\SDK\CCC\V20170705\Models\TaskPreparingResponse;
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
     * @param AddAgentDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddAgentDeviceResponse
     */
    public function addAgentDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAgentDeviceResponse::fromMap($this->doRPCRequest('AddAgentDevice', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AddBulkPhoneNumbersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddBulkPhoneNumbersResponse
     */
    public function addBulkPhoneNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddBulkPhoneNumbersResponse::fromMap($this->doRPCRequest('AddBulkPhoneNumbers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AddPhoneNumberRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddPhoneNumberResponse
     */
    public function addPhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddPhoneNumberResponse::fromMap($this->doRPCRequest('AddPhoneNumber', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AddPhoneTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddPhoneTagsResponse
     */
    public function addPhoneTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddPhoneTagsResponse::fromMap($this->doRPCRequest('AddPhoneTags', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AssignJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AssignJobsResponse
     */
    public function assignJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssignJobsResponse::fromMap($this->doRPCRequest('AssignJobs', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssignJobsRequest $request
     *
     * @return AssignJobsResponse
     */
    public function assignJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignJobsWithOptions($request, $runtime);
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

        return AssignUsersResponse::fromMap($this->doRPCRequest('AssignUsers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CallOnlinePrivacyNumberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CallOnlinePrivacyNumberResponse
     */
    public function callOnlinePrivacyNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CallOnlinePrivacyNumberResponse::fromMap($this->doRPCRequest('CallOnlinePrivacyNumber', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CancelJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelJobsResponse
     */
    public function cancelJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelJobsResponse::fromMap($this->doRPCRequest('CancelJobs', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelJobsRequest $request
     *
     * @return CancelJobsResponse
     */
    public function cancelJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelJobsWithOptions($request, $runtime);
    }

    /**
     * @param CheckNumberAvaliableRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckNumberAvaliableResponse
     */
    public function checkNumberAvaliableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckNumberAvaliableResponse::fromMap($this->doRPCRequest('CheckNumberAvaliable', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CommitContactFlowVersionModificationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CommitContactFlowVersionModificationResponse
     */
    public function commitContactFlowVersionModificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CommitContactFlowVersionModificationResponse::fromMap($this->doRPCRequest('CommitContactFlowVersionModification', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateBatchJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateBatchJobsResponse
     */
    public function createBatchJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBatchJobsResponse::fromMap($this->doRPCRequest('CreateBatchJobs', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBatchJobsRequest $request
     *
     * @return CreateBatchJobsResponse
     */
    public function createBatchJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchJobsWithOptions($request, $runtime);
    }

    /**
     * @param CreateCabInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCabInstanceResponse
     */
    public function createCabInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCabInstanceResponse::fromMap($this->doRPCRequest('CreateCabInstance', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCabInstanceRequest $request
     *
     * @return CreateCabInstanceResponse
     */
    public function createCabInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCabInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateContactFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateContactFlowResponse
     */
    public function createContactFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateContactFlowResponse::fromMap($this->doRPCRequest('CreateContactFlow', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateFaultRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateFaultResponse
     */
    public function createFaultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFaultResponse::fromMap($this->doRPCRequest('CreateFault', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateJobGroupResponse
     */
    public function createJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateJobGroupResponse::fromMap($this->doRPCRequest('CreateJobGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateJobGroupRequest $request
     *
     * @return CreateJobGroupResponse
     */
    public function createJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateMediaResponse
     */
    public function createMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMediaResponse::fromMap($this->doRPCRequest('CreateMedia', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScenarioResponse
     */
    public function createScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScenarioResponse::fromMap($this->doRPCRequest('CreateScenario', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateScenarioRequest $request
     *
     * @return CreateScenarioResponse
     */
    public function createScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScenarioWithOptions($request, $runtime);
    }

    /**
     * @param CreateScenarioFromTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateScenarioFromTemplateResponse
     */
    public function createScenarioFromTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScenarioFromTemplateResponse::fromMap($this->doRPCRequest('CreateScenarioFromTemplate', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateScenarioFromTemplateRequest $request
     *
     * @return CreateScenarioFromTemplateResponse
     */
    public function createScenarioFromTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScenarioFromTemplateWithOptions($request, $runtime);
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

        return CreateSkillGroupResponse::fromMap($this->doRPCRequest('CreateSkillGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSurveyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSurveyResponse
     */
    public function createSurveyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSurveyResponse::fromMap($this->doRPCRequest('CreateSurvey', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSurveyRequest $request
     *
     * @return CreateSurveyResponse
     */
    public function createSurvey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSurveyWithOptions($request, $runtime);
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

        return CreateUserResponse::fromMap($this->doRPCRequest('CreateUser', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateVoiceAppraiseRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVoiceAppraiseResponse
     */
    public function createVoiceAppraiseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVoiceAppraiseResponse::fromMap($this->doRPCRequest('CreateVoiceAppraise', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteJobGroupResponse
     */
    public function deleteJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteJobGroupResponse::fromMap($this->doRPCRequest('DeleteJobGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteJobGroupRequest $request
     *
     * @return DeleteJobGroupResponse
     */
    public function deleteJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteMediaResponse
     */
    public function deleteMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMediaResponse::fromMap($this->doRPCRequest('DeleteMedia', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeletePhoneTagsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePhoneTagsResponse
     */
    public function deletePhoneTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePhoneTagsResponse::fromMap($this->doRPCRequest('DeletePhoneTags', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return DeleteSkillGroupResponse::fromMap($this->doRPCRequest('DeleteSkillGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSurveyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSurveyResponse
     */
    public function deleteSurveyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSurveyResponse::fromMap($this->doRPCRequest('DeleteSurvey', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSurveyRequest $request
     *
     * @return DeleteSurveyResponse
     */
    public function deleteSurvey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSurveyWithOptions($request, $runtime);
    }

    /**
     * @param DialExRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return DialExResponse
     */
    public function dialExWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DialExResponse::fromMap($this->doRPCRequest('DialEx', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DialogueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DialogueResponse
     */
    public function dialogueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DialogueResponse::fromMap($this->doRPCRequest('Dialogue', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DialogueRequest $request
     *
     * @return DialogueResponse
     */
    public function dialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dialogueWithOptions($request, $runtime);
    }

    /**
     * @param DisableTrunkProvidersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableTrunkProvidersResponse
     */
    public function disableTrunkProvidersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableTrunkProvidersResponse::fromMap($this->doRPCRequest('DisableTrunkProviders', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DownloadAllTypeRecordingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadAllTypeRecordingResponse
     */
    public function downloadAllTypeRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadAllTypeRecordingResponse::fromMap($this->doRPCRequest('DownloadAllTypeRecording', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DownloadCabRecordingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DownloadCabRecordingResponse
     */
    public function downloadCabRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadCabRecordingResponse::fromMap($this->doRPCRequest('DownloadCabRecording', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadCabRecordingRequest $request
     *
     * @return DownloadCabRecordingResponse
     */
    public function downloadCabRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadCabRecordingWithOptions($request, $runtime);
    }

    /**
     * @param DownloadOriginalStatisticsReportRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DownloadOriginalStatisticsReportResponse
     */
    public function downloadOriginalStatisticsReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadOriginalStatisticsReportResponse::fromMap($this->doRPCRequest('DownloadOriginalStatisticsReport', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadOriginalStatisticsReportRequest $request
     *
     * @return DownloadOriginalStatisticsReportResponse
     */
    public function downloadOriginalStatisticsReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadOriginalStatisticsReportWithOptions($request, $runtime);
    }

    /**
     * @param DownloadRecordingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DownloadRecordingResponse
     */
    public function downloadRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadRecordingResponse::fromMap($this->doRPCRequest('DownloadRecording', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DownloadUnreachableContactsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DownloadUnreachableContactsResponse
     */
    public function downloadUnreachableContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadUnreachableContactsResponse::fromMap($this->doRPCRequest('DownloadUnreachableContacts', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadUnreachableContactsRequest $request
     *
     * @return DownloadUnreachableContactsResponse
     */
    public function downloadUnreachableContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadUnreachableContactsWithOptions($request, $runtime);
    }

    /**
     * @param FindUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return FindUsersResponse
     */
    public function findUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindUsersResponse::fromMap($this->doRPCRequest('FindUsers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetCallMeasureSummaryReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetCallMeasureSummaryReportResponse
     */
    public function getCallMeasureSummaryReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCallMeasureSummaryReportResponse::fromMap($this->doRPCRequest('GetCallMeasureSummaryReport', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetConfigRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetConfigResponse
     */
    public function getConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConfigResponse::fromMap($this->doRPCRequest('GetConfig', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetConversationDetailByContactIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetConversationDetailByContactIdResponse
     */
    public function getConversationDetailByContactIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConversationDetailByContactIdResponse::fromMap($this->doRPCRequest('GetConversationDetailByContactId', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetConversationListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConversationListResponse
     */
    public function getConversationListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConversationListResponse::fromMap($this->doRPCRequest('GetConversationList', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetConversationListRequest $request
     *
     * @return GetConversationListResponse
     */
    public function getConversationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConversationListWithOptions($request, $runtime);
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

        return GetInstanceResponse::fromMap($this->doRPCRequest('GetInstance', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetInstanceStateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetInstanceStateResponse
     */
    public function getInstanceStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceStateResponse::fromMap($this->doRPCRequest('GetInstanceState', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetInstanceSummaryReportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetInstanceSummaryReportResponse
     */
    public function getInstanceSummaryReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceSummaryReportResponse::fromMap($this->doRPCRequest('GetInstanceSummaryReport', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetInstanceSummaryReportByIntervalRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetInstanceSummaryReportByIntervalResponse
     */
    public function getInstanceSummaryReportByIntervalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceSummaryReportByIntervalResponse::fromMap($this->doRPCRequest('GetInstanceSummaryReportByInterval', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetInstanceSummaryReportSinceMidnightRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GetInstanceSummaryReportSinceMidnightResponse
     */
    public function getInstanceSummaryReportSinceMidnightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceSummaryReportSinceMidnightResponse::fromMap($this->doRPCRequest('GetInstanceSummaryReportSinceMidnight', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetJobRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobResponse::fromMap($this->doRPCRequest('GetJob', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobWithOptions($request, $runtime);
    }

    /**
     * @param GetJobDataUploadParamsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetJobDataUploadParamsResponse
     */
    public function getJobDataUploadParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobDataUploadParamsResponse::fromMap($this->doRPCRequest('GetJobDataUploadParams', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJobDataUploadParamsRequest $request
     *
     * @return GetJobDataUploadParamsResponse
     */
    public function getJobDataUploadParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobDataUploadParamsWithOptions($request, $runtime);
    }

    /**
     * @param GetJobGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetJobGroupResponse
     */
    public function getJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobGroupResponse::fromMap($this->doRPCRequest('GetJobGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJobGroupRequest $request
     *
     * @return GetJobGroupResponse
     */
    public function getJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetJobListRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetJobListResponse
     */
    public function getJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobListResponse::fromMap($this->doRPCRequest('GetJobList', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJobListRequest $request
     *
     * @return GetJobListResponse
     */
    public function getJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobListWithOptions($request, $runtime);
    }

    /**
     * @param GetJobStatusByCallIdRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetJobStatusByCallIdResponse
     */
    public function getJobStatusByCallIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobStatusByCallIdResponse::fromMap($this->doRPCRequest('GetJobStatusByCallId', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJobStatusByCallIdRequest $request
     *
     * @return GetJobStatusByCallIdResponse
     */
    public function getJobStatusByCallId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusByCallIdWithOptions($request, $runtime);
    }

    /**
     * @param GetJobTemplateDownloadParamsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetJobTemplateDownloadParamsResponse
     */
    public function getJobTemplateDownloadParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobTemplateDownloadParamsResponse::fromMap($this->doRPCRequest('GetJobTemplateDownloadParams', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJobTemplateDownloadParamsRequest $request
     *
     * @return GetJobTemplateDownloadParamsResponse
     */
    public function getJobTemplateDownloadParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobTemplateDownloadParamsWithOptions($request, $runtime);
    }

    /**
     * @param GetNumberRegionInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNumberRegionInfoResponse
     */
    public function getNumberRegionInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNumberRegionInfoResponse::fromMap($this->doRPCRequest('GetNumberRegionInfo', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetRecordOssUploadParamRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetRecordOssUploadParamResponse
     */
    public function getRecordOssUploadParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRecordOssUploadParamResponse::fromMap($this->doRPCRequest('GetRecordOssUploadParam', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetRoutePointRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRoutePointResponse
     */
    public function getRoutePointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRoutePointResponse::fromMap($this->doRPCRequest('GetRoutePoint', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetScenarioRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetScenarioResponse
     */
    public function getScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetScenarioResponse::fromMap($this->doRPCRequest('GetScenario', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetScenarioRequest $request
     *
     * @return GetScenarioResponse
     */
    public function getScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenarioWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceExtensionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceExtensionsResponse
     */
    public function getServiceExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceExtensionsResponse::fromMap($this->doRPCRequest('GetServiceExtensions', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetSmsConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSmsConfigResponse
     */
    public function getSmsConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSmsConfigResponse::fromMap($this->doRPCRequest('GetSmsConfig', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetSurveyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetSurveyResponse
     */
    public function getSurveyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSurveyResponse::fromMap($this->doRPCRequest('GetSurvey', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSurveyRequest $request
     *
     * @return GetSurveyResponse
     */
    public function getSurvey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSurveyWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskListRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTaskListResponse
     */
    public function getTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskListResponse::fromMap($this->doRPCRequest('GetTaskList', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskListRequest $request
     *
     * @return GetTaskListResponse
     */
    public function getTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskListWithOptions($request, $runtime);
    }

    /**
     * @param GetTURNCredentialsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTURNCredentialsResponse
     */
    public function getTURNCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTURNCredentialsResponse::fromMap($this->doRPCRequest('GetTURNCredentials', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetTURNServerListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTURNServerListResponse
     */
    public function getTURNServerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTURNServerListResponse::fromMap($this->doRPCRequest('GetTURNServerList', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return GetUserResponse::fromMap($this->doRPCRequest('GetUser', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetUserByExtensionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserByExtensionResponse
     */
    public function getUserByExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserByExtensionResponse::fromMap($this->doRPCRequest('GetUserByExtension', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param InflightTaskTimeoutRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return InflightTaskTimeoutResponse
     */
    public function inflightTaskTimeoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InflightTaskTimeoutResponse::fromMap($this->doRPCRequest('InflightTaskTimeout', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InflightTaskTimeoutRequest $request
     *
     * @return InflightTaskTimeoutResponse
     */
    public function inflightTaskTimeout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inflightTaskTimeoutWithOptions($request, $runtime);
    }

    /**
     * @param LaunchAppraiseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return LaunchAppraiseResponse
     */
    public function launchAppraiseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LaunchAppraiseResponse::fromMap($this->doRPCRequest('LaunchAppraise', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param LaunchShortMessageAppraiseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return LaunchShortMessageAppraiseResponse
     */
    public function launchShortMessageAppraiseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LaunchShortMessageAppraiseResponse::fromMap($this->doRPCRequest('LaunchShortMessageAppraise', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListAgentDevicesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAgentDevicesResponse
     */
    public function listAgentDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAgentDevicesResponse::fromMap($this->doRPCRequest('ListAgentDevices', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListAgentEventsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAgentEventsResponse
     */
    public function listAgentEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAgentEventsResponse::fromMap($this->doRPCRequest('ListAgentEvents', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return ListAgentStateLogsResponse::fromMap($this->doRPCRequest('ListAgentStateLogs', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListAgentStatesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAgentStatesResponse
     */
    public function listAgentStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAgentStatesResponse::fromMap($this->doRPCRequest('ListAgentStates', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListAgentSummaryReportsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAgentSummaryReportsResponse
     */
    public function listAgentSummaryReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAgentSummaryReportsResponse::fromMap($this->doRPCRequest('ListAgentSummaryReports', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListAgentSummaryReportsByIntervalRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListAgentSummaryReportsByIntervalResponse
     */
    public function listAgentSummaryReportsByIntervalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAgentSummaryReportsByIntervalResponse::fromMap($this->doRPCRequest('ListAgentSummaryReportsByInterval', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListAgentSummaryReportsSinceMidnightRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListAgentSummaryReportsSinceMidnightResponse
     */
    public function listAgentSummaryReportsSinceMidnightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAgentSummaryReportsSinceMidnightResponse::fromMap($this->doRPCRequest('ListAgentSummaryReportsSinceMidnight', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListBasicStatisticsReportSubItemsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListBasicStatisticsReportSubItemsResponse
     */
    public function listBasicStatisticsReportSubItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBasicStatisticsReportSubItemsResponse::fromMap($this->doRPCRequest('ListBasicStatisticsReportSubItems', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBasicStatisticsReportSubItemsRequest $request
     *
     * @return ListBasicStatisticsReportSubItemsResponse
     */
    public function listBasicStatisticsReportSubItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBasicStatisticsReportSubItemsWithOptions($request, $runtime);
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

        return ListCallDetailRecordsResponse::fromMap($this->doRPCRequest('ListCallDetailRecords', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListCallEventDetailByContactIdRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListCallEventDetailByContactIdResponse
     */
    public function listCallEventDetailByContactIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCallEventDetailByContactIdResponse::fromMap($this->doRPCRequest('ListCallEventDetailByContactId', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListCallMeasureSummaryReportsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListCallMeasureSummaryReportsResponse
     */
    public function listCallMeasureSummaryReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCallMeasureSummaryReportsResponse::fromMap($this->doRPCRequest('ListCallMeasureSummaryReports', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListConfigRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListConfigResponse
     */
    public function listConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConfigResponse::fromMap($this->doRPCRequest('ListConfig', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return ListContactFlowsResponse::fromMap($this->doRPCRequest('ListContactFlows', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return ListInstancesOfUserResponse
     */
    public function listInstancesOfUserWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListInstancesOfUserResponse::fromMap($this->doRPCRequest('ListInstancesOfUser', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListInstancesOfUserResponse
     */
    public function listInstancesOfUser()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesOfUserWithOptions($runtime);
    }

    /**
     * @param ListIvrTrackingDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListIvrTrackingDetailResponse
     */
    public function listIvrTrackingDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIvrTrackingDetailResponse::fromMap($this->doRPCRequest('ListIvrTrackingDetail', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListJobGroupsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListJobGroupsResponse
     */
    public function listJobGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJobGroupsResponse::fromMap($this->doRPCRequest('ListJobGroups', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListJobGroupsRequest $request
     *
     * @return ListJobGroupsResponse
     */
    public function listJobGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListJobsByGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListJobsByGroupResponse
     */
    public function listJobsByGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJobsByGroupResponse::fromMap($this->doRPCRequest('ListJobsByGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListJobsByGroupRequest $request
     *
     * @return ListJobsByGroupResponse
     */
    public function listJobsByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsByGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListJobStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListJobStatusResponse
     */
    public function listJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJobStatusResponse::fromMap($this->doRPCRequest('ListJobStatus', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListJobStatusRequest $request
     *
     * @return ListJobStatusResponse
     */
    public function listJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListMediasRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMediasResponse
     */
    public function listMediasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMediasResponse::fromMap($this->doRPCRequest('ListMedias', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListOutboundPhoneNumberOfUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListOutboundPhoneNumberOfUserResponse
     */
    public function listOutboundPhoneNumberOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOutboundPhoneNumberOfUserResponse::fromMap($this->doRPCRequest('ListOutboundPhoneNumberOfUser', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return ListPhoneNumbersResponse::fromMap($this->doRPCRequest('ListPhoneNumbers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListPhoneTagsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPhoneTagsResponse
     */
    public function listPhoneTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPhoneTagsResponse::fromMap($this->doRPCRequest('ListPhoneTags', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListRealTimeAgentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRealTimeAgentResponse
     */
    public function listRealTimeAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRealTimeAgentResponse::fromMap($this->doRPCRequest('ListRealTimeAgent', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListRecordingOfDualTrackRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRecordingOfDualTrackResponse
     */
    public function listRecordingOfDualTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRecordingOfDualTrackResponse::fromMap($this->doRPCRequest('ListRecordingOfDualTrack', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListRecordingsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListRecordingsResponse
     */
    public function listRecordingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRecordingsResponse::fromMap($this->doRPCRequest('ListRecordings', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListRecordingsByContactIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListRecordingsByContactIdResponse
     */
    public function listRecordingsByContactIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRecordingsByContactIdResponse::fromMap($this->doRPCRequest('ListRecordingsByContactId', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return ListRolesResponse::fromMap($this->doRPCRequest('ListRoles', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListScenariosRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListScenariosResponse
     */
    public function listScenariosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScenariosResponse::fromMap($this->doRPCRequest('ListScenarios', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListScenariosRequest $request
     *
     * @return ListScenariosResponse
     */
    public function listScenarios($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenariosWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListScenarioTemplatesResponse
     */
    public function listScenarioTemplatesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListScenarioTemplatesResponse::fromMap($this->doRPCRequest('ListScenarioTemplates', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListScenarioTemplatesResponse
     */
    public function listScenarioTemplates()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenarioTemplatesWithOptions($runtime);
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

        return ListSkillGroupsResponse::fromMap($this->doRPCRequest('ListSkillGroups', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListSkillGroupsOfUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSkillGroupsOfUserResponse
     */
    public function listSkillGroupsOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSkillGroupsOfUserResponse::fromMap($this->doRPCRequest('ListSkillGroupsOfUser', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListSkillGroupStatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSkillGroupStatesResponse
     */
    public function listSkillGroupStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSkillGroupStatesResponse::fromMap($this->doRPCRequest('ListSkillGroupStates', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListSkillGroupSummaryReportsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListSkillGroupSummaryReportsResponse
     */
    public function listSkillGroupSummaryReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSkillGroupSummaryReportsResponse::fromMap($this->doRPCRequest('ListSkillGroupSummaryReports', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListSkillGroupSummaryReportsByIntervalRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListSkillGroupSummaryReportsByIntervalResponse
     */
    public function listSkillGroupSummaryReportsByIntervalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSkillGroupSummaryReportsByIntervalResponse::fromMap($this->doRPCRequest('ListSkillGroupSummaryReportsByInterval', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListSkillGroupSummaryReportsSinceMidnightRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return ListSkillGroupSummaryReportsSinceMidnightResponse
     */
    public function listSkillGroupSummaryReportsSinceMidnightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSkillGroupSummaryReportsSinceMidnightResponse::fromMap($this->doRPCRequest('ListSkillGroupSummaryReportsSinceMidnight', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListSurveysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSurveysResponse
     */
    public function listSurveysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSurveysResponse::fromMap($this->doRPCRequest('ListSurveys', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSurveysRequest $request
     *
     * @return ListSurveysResponse
     */
    public function listSurveys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSurveysWithOptions($request, $runtime);
    }

    /**
     * @param ListTransferableSkillGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListTransferableSkillGroupsResponse
     */
    public function listTransferableSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTransferableSkillGroupsResponse::fromMap($this->doRPCRequest('ListTransferableSkillGroups', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return ListTrunkProvidersResponse
     */
    public function listTrunkProvidersWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListTrunkProvidersResponse::fromMap($this->doRPCRequest('ListTrunkProviders', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListTrunkProvidersResponse
     */
    public function listTrunkProviders()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrunkProvidersWithOptions($runtime);
    }

    /**
     * @param ListTrunksOfSkillGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListTrunksOfSkillGroupResponse
     */
    public function listTrunksOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTrunksOfSkillGroupResponse::fromMap($this->doRPCRequest('ListTrunksOfSkillGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListUnreachableContactsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUnreachableContactsResponse
     */
    public function listUnreachableContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUnreachableContactsResponse::fromMap($this->doRPCRequest('ListUnreachableContacts', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUnreachableContactsRequest $request
     *
     * @return ListUnreachableContactsResponse
     */
    public function listUnreachableContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUnreachableContactsWithOptions($request, $runtime);
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

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListUsersOfSkillGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUsersOfSkillGroupResponse
     */
    public function listUsersOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersOfSkillGroupResponse::fromMap($this->doRPCRequest('ListUsersOfSkillGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListVoiceAppraiseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListVoiceAppraiseResponse
     */
    public function listVoiceAppraiseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVoiceAppraiseResponse::fromMap($this->doRPCRequest('ListVoiceAppraise', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyAgentDeviceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAgentDeviceResponse
     */
    public function modifyAgentDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAgentDeviceResponse::fromMap($this->doRPCRequest('ModifyAgentDevice', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyCabInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyCabInstanceResponse
     */
    public function modifyCabInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCabInstanceResponse::fromMap($this->doRPCRequest('ModifyCabInstance', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCabInstanceRequest $request
     *
     * @return ModifyCabInstanceResponse
     */
    public function modifyCabInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCabInstanceWithOptions($request, $runtime);
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

        return ModifyPhoneNumberResponse::fromMap($this->doRPCRequest('ModifyPhoneNumber', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyPhoneTagsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyPhoneTagsResponse
     */
    public function modifyPhoneTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPhoneTagsResponse::fromMap($this->doRPCRequest('ModifyPhoneTags', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyPrimaryTrunksOfSkillGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyPrimaryTrunksOfSkillGroupResponse
     */
    public function modifyPrimaryTrunksOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPrimaryTrunksOfSkillGroupResponse::fromMap($this->doRPCRequest('ModifyPrimaryTrunksOfSkillGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyPrivacyNumberCallDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyPrivacyNumberCallDetailResponse
     */
    public function modifyPrivacyNumberCallDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPrivacyNumberCallDetailResponse::fromMap($this->doRPCRequest('ModifyPrivacyNumberCallDetail', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyScenarioResponse
     */
    public function modifyScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScenarioResponse::fromMap($this->doRPCRequest('ModifyScenario', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyScenarioRequest $request
     *
     * @return ModifyScenarioResponse
     */
    public function modifyScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScenarioWithOptions($request, $runtime);
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

        return ModifySkillGroupResponse::fromMap($this->doRPCRequest('ModifySkillGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifySkillGroupOfUserRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifySkillGroupOfUserResponse
     */
    public function modifySkillGroupOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySkillGroupOfUserResponse::fromMap($this->doRPCRequest('ModifySkillGroupOfUser', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifySkillGroupOutboundNumbersRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifySkillGroupOutboundNumbersResponse
     */
    public function modifySkillGroupOutboundNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySkillGroupOutboundNumbersResponse::fromMap($this->doRPCRequest('ModifySkillGroupOutboundNumbers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifySurveyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifySurveyResponse
     */
    public function modifySurveyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySurveyResponse::fromMap($this->doRPCRequest('ModifySurvey', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySurveyRequest $request
     *
     * @return ModifySurveyResponse
     */
    public function modifySurvey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySurveyWithOptions($request, $runtime);
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

        return ModifyUserResponse::fromMap($this->doRPCRequest('ModifyUser', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PickGlobalOutboundNumbersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PickGlobalOutboundNumbersResponse
     */
    public function pickGlobalOutboundNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PickGlobalOutboundNumbersResponse::fromMap($this->doRPCRequest('PickGlobalOutboundNumbers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PickLocalNumberRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PickLocalNumberResponse
     */
    public function pickLocalNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PickLocalNumberResponse::fromMap($this->doRPCRequest('PickLocalNumber', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return PickOutboundNumbersResponse::fromMap($this->doRPCRequest('PickOutboundNumbers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PublishContactFlowVersionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PublishContactFlowVersionResponse
     */
    public function publishContactFlowVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishContactFlowVersionResponse::fromMap($this->doRPCRequest('PublishContactFlowVersion', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param PublishSurveyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PublishSurveyResponse
     */
    public function publishSurveyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishSurveyResponse::fromMap($this->doRPCRequest('PublishSurvey', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PublishSurveyRequest $request
     *
     * @return PublishSurveyResponse
     */
    public function publishSurvey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishSurveyWithOptions($request, $runtime);
    }

    /**
     * @param RefreshTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RefreshTokenResponse
     */
    public function refreshTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshTokenResponse::fromMap($this->doRPCRequest('RefreshToken', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RemovePhoneNumberRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemovePhoneNumberResponse
     */
    public function removePhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemovePhoneNumberResponse::fromMap($this->doRPCRequest('RemovePhoneNumber', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return RemoveUsersResponse::fromMap($this->doRPCRequest('RemoveUsers', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return RemoveUsersFromSkillGroupResponse::fromMap($this->doRPCRequest('RemoveUsersFromSkillGroup', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RequestLoginInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RequestLoginInfoResponse
     */
    public function requestLoginInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RequestLoginInfoResponse::fromMap($this->doRPCRequest('RequestLoginInfo', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ResetUserStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResetUserStatusResponse
     */
    public function resetUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetUserStatusResponse::fromMap($this->doRPCRequest('ResetUserStatus', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ResumeJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResumeJobsResponse
     */
    public function resumeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResumeJobsResponse::fromMap($this->doRPCRequest('ResumeJobs', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResumeJobsRequest $request
     *
     * @return ResumeJobsResponse
     */
    public function resumeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeJobsWithOptions($request, $runtime);
    }

    /**
     * @param SaveStatsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SaveStatsResponse
     */
    public function saveStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveStatsResponse::fromMap($this->doRPCRequest('SaveStats', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveStatsRequest $request
     *
     * @return SaveStatsResponse
     */
    public function saveStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveStatsWithOptions($request, $runtime);
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

        return SaveWebRTCStatsResponse::fromMap($this->doRPCRequest('SaveWebRTCStats', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SendPredefinedShortMessageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SendPredefinedShortMessageResponse
     */
    public function sendPredefinedShortMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendPredefinedShortMessageResponse::fromMap($this->doRPCRequest('SendPredefinedShortMessage', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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

        return StartBack2BackCallResponse::fromMap($this->doRPCRequest('StartBack2BackCall', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StartJobResponse
     */
    public function startJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartJobResponse::fromMap($this->doRPCRequest('StartJob', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartJobRequest $request
     *
     * @return StartJobResponse
     */
    public function startJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitBatchJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitBatchJobsResponse
     */
    public function submitBatchJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitBatchJobsResponse::fromMap($this->doRPCRequest('SubmitBatchJobs', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitBatchJobsRequest $request
     *
     * @return SubmitBatchJobsResponse
     */
    public function submitBatchJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitBatchJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitCabRecordingRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitCabRecordingResponse
     */
    public function submitCabRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitCabRecordingResponse::fromMap($this->doRPCRequest('SubmitCabRecording', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitCabRecordingRequest $request
     *
     * @return SubmitCabRecordingResponse
     */
    public function submitCabRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCabRecordingWithOptions($request, $runtime);
    }

    /**
     * @param SuspendJobsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SuspendJobsResponse
     */
    public function suspendJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SuspendJobsResponse::fromMap($this->doRPCRequest('SuspendJobs', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SuspendJobsRequest $request
     *
     * @return SuspendJobsResponse
     */
    public function suspendJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendJobsWithOptions($request, $runtime);
    }

    /**
     * @param TaskPreparingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TaskPreparingResponse
     */
    public function taskPreparingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TaskPreparingResponse::fromMap($this->doRPCRequest('TaskPreparing', '2017-07-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TaskPreparingRequest $request
     *
     * @return TaskPreparingResponse
     */
    public function taskPreparing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskPreparingWithOptions($request, $runtime);
    }
}
