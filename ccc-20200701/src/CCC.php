<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CCC\V20200701\Models\AbortCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AbortCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesShrinkRequest;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\AppendCasesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AppendCasesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AppendCasesShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AssignUsersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AssignUsersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\BargeInCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\BargeInCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\BlindTransferRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\BlindTransferResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\BridgeRtcCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\BridgeRtcCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CancelAttendedTransferRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CancelAttendedTransferResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ChangeWorkModeRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ChangeWorkModeResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CoachCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CoachCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CommitContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CommitContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CompleteAttendedTransferRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CompleteAttendedTransferResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateAudioFileRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateAudioFileResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCallTagsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCallTagsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCustomCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteAudioFileRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteAudioFileResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteCallTagRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteCallTagResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteCustomCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DiscardEditingContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DiscardEditingContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\EndConferenceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\EndConferenceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportCustomCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportDoNotCallNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportDoNotCallNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetAudioFileDownloadUrlRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetAudioFileDownloadUrlResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetAudioFileRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetAudioFileResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetAudioFileUploadParametersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetAudioFileUploadParametersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCaseFileUploadUrlRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCaseFileUploadUrlResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetConversationDetailRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetConversationDetailResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetDataChannelCredentialsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetDataChannelCredentialsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetDoNotCallFileUploadParametersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetDoNotCallFileUploadParametersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetEarlyMediaRecordingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetEarlyMediaRecordingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalCallerReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalCallerReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalCampaignReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalCampaignReportResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeCampaignStatsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeCampaignStatsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeInstanceStatesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeInstanceStatesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnCredentialsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnCredentialsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnServerListRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnServerListResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetUploadAudioDataParamsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetUploadAudioDataParamsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetVideoRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetVideoResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetVoicemailRecordingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetVoicemailRecordingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\HoldCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\HoldCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportAdminsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportAdminsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportCustomCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportDoNotCallNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportDoNotCallNumbersResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStatesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStatesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentSummaryReportsSinceMidnightRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentSummaryReportsSinceMidnightResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAttemptsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAttemptsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAudioFilesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListAudioFilesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListBriefSkillGroupsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListBriefSkillGroupsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallTagsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallTagsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCampaignsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCampaignsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCampaignTrendingReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCampaignTrendingReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCasesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCasesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListConfigItemsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListConfigItemsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCustomCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDevicesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDevicesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDoNotCallNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDoNotCallNumbersResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAgentEventLogsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAgentEventLogsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAgentStatusLogsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAgentStatusLogsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAppraiseLogsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAppraiseLogsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyQueueEventLogsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyQueueEventLogsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListMonoRecordingsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListMonoRecordingsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListMultiChannelRecordingsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListMultiChannelRecordingsResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupStatesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupStatesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupSummaryReportsSinceMidnightRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupSummaryReportsSinceMidnightResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyAudioFileRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyAudioFileResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyCustomCallTaggingResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\PauseCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\PauseCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\PickOutboundNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\PickOutboundNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\PublishContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\PublishContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReadyForServiceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReadyForServiceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RedialCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RedialCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RegisterDeviceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RegisterDeviceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RegisterDevicesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RegisterDevicesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReleaseCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReleaseCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveDoNotCallNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveDoNotCallNumbersResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\RestoreArchivedRecordingsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RestoreArchivedRecordingsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResumeCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResumeCampaignResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\StartConferenceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartConferenceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartEditContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartEditContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartPredictiveCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartPredictiveCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartPrivacyCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartPrivacyCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SubmitCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SubmitCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SwitchToConferenceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SwitchToConferenceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\TakeBreakRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\TakeBreakResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnmuteCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnmuteCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnregisterDeviceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnregisterDeviceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateConfigItemsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateConfigItemsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @param AbortCampaignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AbortCampaignResponse
     */
    public function abortCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbortCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbortCampaignRequest $request
     *
     * @return AbortCampaignResponse
     */
    public function abortCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abortCampaignWithOptions($request, $runtime);
    }

    /**
     * @param AddCasesRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return AddCasesResponse
     */
    public function addCasesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddCasesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->caseList)) {
            $request->caseListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->caseList, 'CaseList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->caseListShrink)) {
            $query['CaseList'] = $request->caseListShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCases',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCasesRequest $request
     *
     * @return AddCasesResponse
     */
    public function addCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddNumbersToSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddNumbersToSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AddPersonalNumbersToUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddPersonalNumbersToUserResponse
     */
    public function addPersonalNumbersToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPersonalNumbersToUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPersonalNumbersToUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AddPhoneNumberToSkillGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddPhoneNumberToSkillGroupsResponse
     */
    public function addPhoneNumberToSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $query['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPhoneNumberToSkillGroups',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPhoneNumberToSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AddPhoneNumbersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddPhoneNumbersResponse
     */
    public function addPhoneNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->numberGroupId)) {
            $query['NumberGroupId'] = $request->numberGroupId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->usage)) {
            $query['Usage'] = $request->usage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPhoneNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AddSkillGroupsToUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddSkillGroupsToUserResponse
     */
    public function addSkillGroupsToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillLevelList)) {
            $query['SkillLevelList'] = $request->skillLevelList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSkillGroupsToUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSkillGroupsToUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AddUsersToSkillGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddUsersToSkillGroupResponse
     */
    public function addUsersToSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->userSkillLevelList)) {
            $query['UserSkillLevelList'] = $request->userSkillLevelList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUsersToSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUsersToSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AnswerCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AnswerCallResponse
     */
    public function answerCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AnswerCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AnswerCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AppendCasesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return AppendCasesResponse
     */
    public function appendCasesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AppendCasesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $body['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppendCases',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppendCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppendCasesRequest $request
     *
     * @return AppendCasesResponse
     */
    public function appendCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appendCasesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ramIdList)) {
            $query['RamIdList'] = $request->ramIdList;
        }
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->skillLevelList)) {
            $query['SkillLevelList'] = $request->skillLevelList;
        }
        if (!Utils::isUnset($request->workMode)) {
            $query['WorkMode'] = $request->workMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssignUsers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssignUsersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BargeInCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BargeInCallResponse
     */
    public function bargeInCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bargedUserId)) {
            $query['BargedUserId'] = $request->bargedUserId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BargeInCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BargeInCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BlindTransferRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BlindTransferResponse
     */
    public function blindTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callPriority)) {
            $query['CallPriority'] = $request->callPriority;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        if (!Utils::isUnset($request->strategyParams)) {
            $query['StrategyParams'] = $request->strategyParams;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->transferee)) {
            $query['Transferee'] = $request->transferee;
        }
        if (!Utils::isUnset($request->transferor)) {
            $query['Transferor'] = $request->transferor;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BlindTransfer',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BlindTransferResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BridgeRtcCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BridgeRtcCallResponse
     */
    public function bridgeRtcCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callee)) {
            $query['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->serviceProvider)) {
            $query['ServiceProvider'] = $request->serviceProvider;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->videoEnabled)) {
            $query['VideoEnabled'] = $request->videoEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BridgeRtcCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BridgeRtcCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BridgeRtcCallRequest $request
     *
     * @return BridgeRtcCallResponse
     */
    public function bridgeRtcCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bridgeRtcCallWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelAttendedTransfer',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelAttendedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ChangeWorkModeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ChangeWorkModeResponse
     */
    public function changeWorkModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->signedSkillGroupIdList)) {
            $query['SignedSkillGroupIdList'] = $request->signedSkillGroupIdList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workMode)) {
            $query['WorkMode'] = $request->workMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeWorkMode',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeWorkModeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CoachCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CoachCallResponse
     */
    public function coachCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coachedUserId)) {
            $query['CoachedUserId'] = $request->coachedUserId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CoachCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CoachCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CommitContactFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CommitContactFlowResponse
     */
    public function commitContactFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->draftId)) {
            $query['DraftId'] = $request->draftId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommitContactFlow',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommitContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommitContactFlowRequest $request
     *
     * @return CommitContactFlowResponse
     */
    public function commitContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitContactFlowWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompleteAttendedTransfer',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompleteAttendedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateAudioFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAudioFileResponse
     */
    public function createAudioFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioFileName)) {
            $query['AudioFileName'] = $request->audioFileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossFileKey)) {
            $query['OssFileKey'] = $request->ossFileKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAudioFile',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAudioFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAudioFileRequest $request
     *
     * @return CreateAudioFileResponse
     */
    public function createAudioFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAudioFileWithOptions($request, $runtime);
    }

    /**
     * @param CreateCallTagsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCallTagsResponse
     */
    public function createCallTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callTagNameList)) {
            $query['CallTagNameList'] = $request->callTagNameList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCallTags',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCallTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCallTagsRequest $request
     *
     * @return CreateCallTagsResponse
     */
    public function createCallTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCallTagsWithOptions($request, $runtime);
    }

    /**
     * @param CreateCampaignRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCampaignResponse
     */
    public function createCampaignWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCampaignShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->caseList)) {
            $request->caseListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->caseList, 'CaseList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->callableTime)) {
            $query['CallableTime'] = $request->callableTime;
        }
        if (!Utils::isUnset($request->caseFileKey)) {
            $query['CaseFileKey'] = $request->caseFileKey;
        }
        if (!Utils::isUnset($request->caseListShrink)) {
            $query['CaseList'] = $request->caseListShrink;
        }
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executingUntilTimeout)) {
            $query['ExecutingUntilTimeout'] = $request->executingUntilTimeout;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxAttemptCount)) {
            $query['MaxAttemptCount'] = $request->maxAttemptCount;
        }
        if (!Utils::isUnset($request->minAttemptInterval)) {
            $query['MinAttemptInterval'] = $request->minAttemptInterval;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->queueId)) {
            $query['QueueId'] = $request->queueId;
        }
        if (!Utils::isUnset($request->simulation)) {
            $query['Simulation'] = $request->simulation;
        }
        if (!Utils::isUnset($request->simulationParameters)) {
            $query['SimulationParameters'] = $request->simulationParameters;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->strategyParameters)) {
            $query['StrategyParameters'] = $request->strategyParameters;
        }
        if (!Utils::isUnset($request->strategyType)) {
            $query['StrategyType'] = $request->strategyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCampaignRequest $request
     *
     * @return CreateCampaignResponse
     */
    public function createCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCampaignWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateContactFlow',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCustomCallTaggingResponse
     */
    public function createCustomCallTaggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customNumberList)) {
            $query['CustomNumberList'] = $request->customNumberList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomCallTagging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomCallTaggingRequest $request
     *
     * @return CreateCustomCallTaggingResponse
     */
    public function createCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomCallTaggingWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->adminRamIdList)) {
            $query['AdminRamIdList'] = $request->adminRamIdList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayId)) {
            $query['DisplayId'] = $request->displayId;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->loginName)) {
            $query['LoginName'] = $request->loginName;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->resetPassword)) {
            $query['ResetPassword'] = $request->resetPassword;
        }
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->skillLevelList)) {
            $query['SkillLevelList'] = $request->skillLevelList;
        }
        if (!Utils::isUnset($request->workMode)) {
            $query['WorkMode'] = $request->workMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteAudioFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAudioFileResponse
     */
    public function deleteAudioFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioResourceId)) {
            $query['AudioResourceId'] = $request->audioResourceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAudioFile',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAudioFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAudioFileRequest $request
     *
     * @return DeleteAudioFileResponse
     */
    public function deleteAudioFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAudioFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCallTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCallTagResponse
     */
    public function deleteCallTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCallTag',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCallTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCallTagRequest $request
     *
     * @return DeleteCallTagResponse
     */
    public function deleteCallTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCallTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteContactFlowResponse
     */
    public function deleteContactFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContactFlow',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactFlowRequest $request
     *
     * @return DeleteContactFlowResponse
     */
    public function deleteContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactFlowWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteCustomCallTaggingResponse
     */
    public function deleteCustomCallTaggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomCallTagging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomCallTaggingRequest $request
     *
     * @return DeleteCustomCallTaggingResponse
     */
    public function deleteCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomCallTaggingWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DiscardEditingContactFlowRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DiscardEditingContactFlowResponse
     */
    public function discardEditingContactFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->draftId)) {
            $query['DraftId'] = $request->draftId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DiscardEditingContactFlow',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DiscardEditingContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DiscardEditingContactFlowRequest $request
     *
     * @return DiscardEditingContactFlowResponse
     */
    public function discardEditingContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->discardEditingContactFlowWithOptions($request, $runtime);
    }

    /**
     * @param EndConferenceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EndConferenceResponse
     */
    public function endConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EndConference',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EndConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EndConferenceRequest $request
     *
     * @return EndConferenceResponse
     */
    public function endConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endConferenceWithOptions($request, $runtime);
    }

    /**
     * @param ExportCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ExportCustomCallTaggingResponse
     */
    public function exportCustomCallTaggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportCustomCallTagging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportCustomCallTaggingRequest $request
     *
     * @return ExportCustomCallTaggingResponse
     */
    public function exportCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCustomCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @param ExportDoNotCallNumbersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExportDoNotCallNumbersResponse
     */
    public function exportDoNotCallNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportDoNotCallNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportDoNotCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportDoNotCallNumbersRequest $request
     *
     * @return ExportDoNotCallNumbersResponse
     */
    public function exportDoNotCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDoNotCallNumbersWithOptions($request, $runtime);
    }

    /**
     * @param GetAudioFileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAudioFileResponse
     */
    public function getAudioFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioResourceId)) {
            $query['AudioResourceId'] = $request->audioResourceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAudioFile',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAudioFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAudioFileRequest $request
     *
     * @return GetAudioFileResponse
     */
    public function getAudioFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioFileWithOptions($request, $runtime);
    }

    /**
     * @param GetAudioFileDownloadUrlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAudioFileDownloadUrlResponse
     */
    public function getAudioFileDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioResourceId)) {
            $query['AudioResourceId'] = $request->audioResourceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAudioFileDownloadUrl',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAudioFileDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAudioFileDownloadUrlRequest $request
     *
     * @return GetAudioFileDownloadUrlResponse
     */
    public function getAudioFileDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioFileDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetAudioFileUploadParametersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAudioFileUploadParametersResponse
     */
    public function getAudioFileUploadParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioFileName)) {
            $query['AudioFileName'] = $request->audioFileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAudioFileUploadParameters',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAudioFileUploadParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAudioFileUploadParametersRequest $request
     *
     * @return GetAudioFileUploadParametersResponse
     */
    public function getAudioFileUploadParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioFileUploadParametersWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCallDetailRecord',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCallDetailRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetCampaignRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCampaignResponse
     */
    public function getCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCampaignRequest $request
     *
     * @return GetCampaignResponse
     */
    public function getCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCampaignWithOptions($request, $runtime);
    }

    /**
     * @param GetCaseFileUploadUrlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetCaseFileUploadUrlResponse
     */
    public function getCaseFileUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCaseFileUploadUrl',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCaseFileUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCaseFileUploadUrlRequest $request
     *
     * @return GetCaseFileUploadUrlResponse
     */
    public function getCaseFileUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCaseFileUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetContactFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetContactFlowResponse
     */
    public function getContactFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->draftId)) {
            $query['DraftId'] = $request->draftId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetContactFlow',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetContactFlowRequest $request
     *
     * @return GetContactFlowResponse
     */
    public function getContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContactFlowWithOptions($request, $runtime);
    }

    /**
     * @param GetConversationDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetConversationDetailResponse
     */
    public function getConversationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConversationDetail',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConversationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConversationDetailRequest $request
     *
     * @return GetConversationDetailResponse
     */
    public function getConversationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConversationDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDataChannelCredentialsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataChannelCredentialsResponse
     */
    public function getDataChannelCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataChannelCredentials',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataChannelCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataChannelCredentialsRequest $request
     *
     * @return GetDataChannelCredentialsResponse
     */
    public function getDataChannelCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataChannelCredentialsWithOptions($request, $runtime);
    }

    /**
     * @param GetDoNotCallFileUploadParametersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetDoNotCallFileUploadParametersResponse
     */
    public function getDoNotCallFileUploadParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoNotCallFileUploadParameters',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDoNotCallFileUploadParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDoNotCallFileUploadParametersRequest $request
     *
     * @return GetDoNotCallFileUploadParametersResponse
     */
    public function getDoNotCallFileUploadParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoNotCallFileUploadParametersWithOptions($request, $runtime);
    }

    /**
     * @param GetEarlyMediaRecordingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetEarlyMediaRecordingResponse
     */
    public function getEarlyMediaRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEarlyMediaRecording',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEarlyMediaRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEarlyMediaRecordingRequest $request
     *
     * @return GetEarlyMediaRecordingResponse
     */
    public function getEarlyMediaRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEarlyMediaRecordingWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stopTime)) {
            $query['StopTime'] = $request->stopTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoricalCallerReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistoricalCallerReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetHistoricalCampaignReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHistoricalCampaignReportResponse
     */
    public function getHistoricalCampaignReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoricalCampaignReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistoricalCampaignReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHistoricalCampaignReportRequest $request
     *
     * @return GetHistoricalCampaignReportResponse
     */
    public function getHistoricalCampaignReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoricalCampaignReportWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoricalInstanceReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistoricalInstanceReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetInstanceTrendingReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetInstanceTrendingReportResponse
     */
    public function getInstanceTrendingReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceTrendingReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceTrendingReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetLoginDetailsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLoginDetailsResponse
     */
    public function getLoginDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLoginDetails',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoginDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
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

    /**
     * @param GetMonoRecordingRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMonoRecordingResponse
     */
    public function getMonoRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMonoRecording',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMonoRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetMultiChannelRecordingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMultiChannelRecordingResponse
     */
    public function getMultiChannelRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMultiChannelRecording',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMultiChannelRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetNumberLocationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetNumberLocationResponse
     */
    public function getNumberLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNumberLocation',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNumberLocationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetRealtimeCampaignStatsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRealtimeCampaignStatsResponse
     */
    public function getRealtimeCampaignStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealtimeCampaignStats',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealtimeCampaignStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRealtimeCampaignStatsRequest $request
     *
     * @return GetRealtimeCampaignStatsResponse
     */
    public function getRealtimeCampaignStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeCampaignStatsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealtimeInstanceStates',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealtimeInstanceStatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetSkillGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSkillGroupResponse
     */
    public function getSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSkillGroupRequest $request
     *
     * @return GetSkillGroupResponse
     */
    public function getSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTurnCredentials',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTurnCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetTurnServerListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTurnServerListResponse
     */
    public function getTurnServerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTurnServerList',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTurnServerListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetUploadAudioDataParamsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUploadAudioDataParamsResponse
     */
    public function getUploadAudioDataParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUploadAudioDataParams',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUploadAudioDataParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUploadAudioDataParamsRequest $request
     *
     * @return GetUploadAudioDataParamsResponse
     */
    public function getUploadAudioDataParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadAudioDataParamsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->extension)) {
            $query['Extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetVideoRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetVideoResponse
     */
    public function getVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideo',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVideoRequest $request
     *
     * @return GetVideoResponse
     */
    public function getVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoWithOptions($request, $runtime);
    }

    /**
     * @param GetVoicemailRecordingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetVoicemailRecordingResponse
     */
    public function getVoicemailRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVoicemailRecording',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVoicemailRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVoicemailRecordingRequest $request
     *
     * @return GetVoicemailRecordingResponse
     */
    public function getVoicemailRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVoicemailRecordingWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->music)) {
            $query['Music'] = $request->music;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HoldCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HoldCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ImportAdminsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImportAdminsResponse
     */
    public function importAdminsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ramIdList)) {
            $query['RamIdList'] = $request->ramIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportAdmins',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportAdminsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportAdminsRequest $request
     *
     * @return ImportAdminsResponse
     */
    public function importAdmins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAdminsWithOptions($request, $runtime);
    }

    /**
     * @param ImportCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ImportCustomCallTaggingResponse
     */
    public function importCustomCallTaggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportCustomCallTagging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportCustomCallTaggingRequest $request
     *
     * @return ImportCustomCallTaggingResponse
     */
    public function importCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCustomCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @param ImportDoNotCallNumbersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ImportDoNotCallNumbersResponse
     */
    public function importDoNotCallNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportDoNotCallNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportDoNotCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportDoNotCallNumbersRequest $request
     *
     * @return ImportDoNotCallNumbersResponse
     */
    public function importDoNotCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDoNotCallNumbersWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->callPriority)) {
            $query['CallPriority'] = $request->callPriority;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        if (!Utils::isUnset($request->strategyParams)) {
            $query['StrategyParams'] = $request->strategyParams;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->transferee)) {
            $query['Transferee'] = $request->transferee;
        }
        if (!Utils::isUnset($request->transferor)) {
            $query['Transferor'] = $request->transferor;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitiateAttendedTransfer',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitiateAttendedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param InterceptCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return InterceptCallResponse
     */
    public function interceptCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interceptedUserId)) {
            $query['InterceptedUserId'] = $request->interceptedUserId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InterceptCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InterceptCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param LaunchAuthenticationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return LaunchAuthenticationResponse
     */
    public function launchAuthenticationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->contactFlowVariables)) {
            $query['ContactFlowVariables'] = $request->contactFlowVariables;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LaunchAuthentication',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LaunchAuthenticationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param LaunchSurveyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LaunchSurveyResponse
     */
    public function launchSurveyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->contactFlowVariables)) {
            $query['ContactFlowVariables'] = $request->contactFlowVariables;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->smsMetadataId)) {
            $query['SmsMetadataId'] = $request->smsMetadataId;
        }
        if (!Utils::isUnset($request->surveyChannel)) {
            $query['SurveyChannel'] = $request->surveyChannel;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LaunchSurvey',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LaunchSurveyResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListAgentStateLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAgentStateLogsResponse
     */
    public function listAgentStateLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAgentStateLogs',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAgentStateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->agentIds)) {
            $query['AgentIds'] = $request->agentIds;
        }
        if (!Utils::isUnset($request->excludeOfflineUsers)) {
            $query['ExcludeOfflineUsers'] = $request->excludeOfflineUsers;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAgentStates',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAgentStatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListAgentSummaryReportsSinceMidnightRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListAgentSummaryReportsSinceMidnightResponse
     */
    public function listAgentSummaryReportsSinceMidnightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAgentSummaryReportsSinceMidnight',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAgentSummaryReportsSinceMidnightResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListAttemptsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAttemptsResponse
     */
    public function listAttemptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAttempts',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAttemptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAttemptsRequest $request
     *
     * @return ListAttemptsResponse
     */
    public function listAttempts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAttemptsWithOptions($request, $runtime);
    }

    /**
     * @param ListAudioFilesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAudioFilesResponse
     */
    public function listAudioFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAudioFiles',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAudioFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAudioFilesRequest $request
     *
     * @return ListAudioFilesResponse
     */
    public function listAudioFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAudioFilesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBriefSkillGroups',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBriefSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListCallDetailRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCallDetailRecordsResponse
     */
    public function listCallDetailRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->contactDisposition)) {
            $query['ContactDisposition'] = $request->contactDisposition;
        }
        if (!Utils::isUnset($request->contactDispositionList)) {
            $query['ContactDispositionList'] = $request->contactDispositionList;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactType)) {
            $query['ContactType'] = $request->contactType;
        }
        if (!Utils::isUnset($request->contactTypeList)) {
            $query['ContactTypeList'] = $request->contactTypeList;
        }
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->earlyMediaStateList)) {
            $query['EarlyMediaStateList'] = $request->earlyMediaStateList;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderByField)) {
            $query['OrderByField'] = $request->orderByField;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->satisfactionDescriptionList)) {
            $query['SatisfactionDescriptionList'] = $request->satisfactionDescriptionList;
        }
        if (!Utils::isUnset($request->satisfactionList)) {
            $query['SatisfactionList'] = $request->satisfactionList;
        }
        if (!Utils::isUnset($request->satisfactionSurveyChannel)) {
            $query['SatisfactionSurveyChannel'] = $request->satisfactionSurveyChannel;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCallDetailRecords',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCallDetailRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListCallTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCallTagsResponse
     */
    public function listCallTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCallTags',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCallTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCallTagsRequest $request
     *
     * @return ListCallTagsResponse
     */
    public function listCallTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListCampaignTrendingReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListCampaignTrendingReportResponse
     */
    public function listCampaignTrendingReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCampaignTrendingReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCampaignTrendingReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCampaignTrendingReportRequest $request
     *
     * @return ListCampaignTrendingReportResponse
     */
    public function listCampaignTrendingReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCampaignTrendingReportWithOptions($request, $runtime);
    }

    /**
     * @param ListCampaignsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListCampaignsResponse
     */
    public function listCampaignsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actualStartTimeFrom)) {
            $query['ActualStartTimeFrom'] = $request->actualStartTimeFrom;
        }
        if (!Utils::isUnset($request->actualStartTimeTo)) {
            $query['ActualStartTimeTo'] = $request->actualStartTimeTo;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->planedStartTimeFrom)) {
            $query['PlanedStartTimeFrom'] = $request->planedStartTimeFrom;
        }
        if (!Utils::isUnset($request->planedStartTimeTo)) {
            $query['PlanedStartTimeTo'] = $request->planedStartTimeTo;
        }
        if (!Utils::isUnset($request->queueId)) {
            $query['QueueId'] = $request->queueId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCampaigns',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCampaignsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCampaignsRequest $request
     *
     * @return ListCampaignsResponse
     */
    public function listCampaigns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCampaignsWithOptions($request, $runtime);
    }

    /**
     * @param ListCasesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListCasesResponse
     */
    public function listCasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCases',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCasesRequest $request
     *
     * @return ListCasesResponse
     */
    public function listCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCasesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigItems',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigItemsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListContactFlowsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListContactFlowsResponse
     */
    public function listContactFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListContactFlows',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListContactFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListCustomCallTaggingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCustomCallTaggingResponse
     */
    public function listCustomCallTaggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callTagNameList)) {
            $query['CallTagNameList'] = $request->callTagNameList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomCallTagging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomCallTaggingRequest $request
     *
     * @return ListCustomCallTaggingResponse
     */
    public function listCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomCallTaggingWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDevices',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListDoNotCallNumbersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDoNotCallNumbersResponse
     */
    public function listDoNotCallNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoNotCallNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDoNotCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDoNotCallNumbersRequest $request
     *
     * @return ListDoNotCallNumbersResponse
     */
    public function listDoNotCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoNotCallNumbersWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stopTime)) {
            $query['StopTime'] = $request->stopTime;
        }
        $body = [];
        if (!Utils::isUnset($request->agentIdList)) {
            $body['AgentIdList'] = $request->agentIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHistoricalAgentReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHistoricalAgentReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListHistoricalSkillGroupReportRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListHistoricalSkillGroupReportResponse
     */
    public function listHistoricalSkillGroupReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $body = [];
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $body['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHistoricalSkillGroupReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHistoricalSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListInstancesOfUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstancesOfUserResponse
     */
    public function listInstancesOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstancesOfUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListIntervalAgentReportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListIntervalAgentReportResponse
     */
    public function listIntervalAgentReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIntervalAgentReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntervalAgentReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListIntervalInstanceReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListIntervalInstanceReportResponse
     */
    public function listIntervalInstanceReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIntervalInstanceReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntervalInstanceReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListIntervalSkillGroupReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListIntervalSkillGroupReportResponse
     */
    public function listIntervalSkillGroupReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIntervalSkillGroupReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntervalSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListIvrTrackingDetailsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListIvrTrackingDetailsResponse
     */
    public function listIvrTrackingDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIvrTrackingDetails',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIvrTrackingDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListLegacyAgentEventLogsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListLegacyAgentEventLogsResponse
     */
    public function listLegacyAgentEventLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLegacyAgentEventLogs',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLegacyAgentEventLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLegacyAgentEventLogsRequest $request
     *
     * @return ListLegacyAgentEventLogsResponse
     */
    public function listLegacyAgentEventLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyAgentEventLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListLegacyAgentStatusLogsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListLegacyAgentStatusLogsResponse
     */
    public function listLegacyAgentStatusLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLegacyAgentStatusLogs',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLegacyAgentStatusLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLegacyAgentStatusLogsRequest $request
     *
     * @return ListLegacyAgentStatusLogsResponse
     */
    public function listLegacyAgentStatusLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyAgentStatusLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListLegacyAppraiseLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListLegacyAppraiseLogsResponse
     */
    public function listLegacyAppraiseLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLegacyAppraiseLogs',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLegacyAppraiseLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLegacyAppraiseLogsRequest $request
     *
     * @return ListLegacyAppraiseLogsResponse
     */
    public function listLegacyAppraiseLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyAppraiseLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListLegacyQueueEventLogsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListLegacyQueueEventLogsResponse
     */
    public function listLegacyQueueEventLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLegacyQueueEventLogs',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLegacyQueueEventLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLegacyQueueEventLogsRequest $request
     *
     * @return ListLegacyQueueEventLogsResponse
     */
    public function listLegacyQueueEventLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyQueueEventLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListMonoRecordingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListMonoRecordingsResponse
     */
    public function listMonoRecordingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMonoRecordings',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMonoRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMonoRecordingsRequest $request
     *
     * @return ListMonoRecordingsResponse
     */
    public function listMonoRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMonoRecordingsWithOptions($request, $runtime);
    }

    /**
     * @param ListMultiChannelRecordingsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListMultiChannelRecordingsResponse
     */
    public function listMultiChannelRecordingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMultiChannelRecordings',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMultiChannelRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMultiChannelRecordingsRequest $request
     *
     * @return ListMultiChannelRecordingsResponse
     */
    public function listMultiChannelRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiChannelRecordingsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $query['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOutboundNumbersOfUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOutboundNumbersOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListPersonalNumbersOfUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPersonalNumbersOfUserResponse
     */
    public function listPersonalNumbersOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isMember)) {
            $query['IsMember'] = $request->isMember;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPersonalNumbersOfUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPersonalNumbersOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListPhoneNumbersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPhoneNumbersResponse
     */
    public function listPhoneNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->active)) {
            $query['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        if (!Utils::isUnset($request->usage)) {
            $query['Usage'] = $request->usage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPhoneNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListPhoneNumbersOfSkillGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListPhoneNumbersOfSkillGroupResponse
     */
    public function listPhoneNumbersOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->active)) {
            $query['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isMember)) {
            $query['IsMember'] = $request->isMember;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPhoneNumbersOfSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPhoneNumbersOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListPrivilegesOfUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPrivilegesOfUserResponse
     */
    public function listPrivilegesOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrivilegesOfUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrivilegesOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListRamUsersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListRamUsersResponse
     */
    public function listRamUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRamUsers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRamUsersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListRealtimeAgentStatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListRealtimeAgentStatesResponse
     */
    public function listRealtimeAgentStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentName)) {
            $query['AgentName'] = $request->agentName;
        }
        if (!Utils::isUnset($request->callTypeList)) {
            $query['CallTypeList'] = $request->callTypeList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundScenario)) {
            $query['OutboundScenario'] = $request->outboundScenario;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->workModeList)) {
            $query['WorkModeList'] = $request->workModeList;
        }
        $body = [];
        if (!Utils::isUnset($request->agentIdList)) {
            $body['AgentIdList'] = $request->agentIdList;
        }
        if (!Utils::isUnset($request->stateList)) {
            $body['StateList'] = $request->stateList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRealtimeAgentStates',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRealtimeAgentStatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListRealtimeSkillGroupStatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListRealtimeSkillGroupStatesResponse
     */
    public function listRealtimeSkillGroupStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $body['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRealtimeSkillGroupStates',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRealtimeSkillGroupStatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListRecentCallDetailRecordsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListRecentCallDetailRecordsResponse
     */
    public function listRecentCallDetailRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRecentCallDetailRecords',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRecentCallDetailRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRoles',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSkillGroupStatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSkillGroupStatesResponse
     */
    public function listSkillGroupStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSkillGroupStates',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSkillGroupStatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSkillGroupSummaryReportsSinceMidnightRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return ListSkillGroupSummaryReportsSinceMidnightResponse
     */
    public function listSkillGroupSummaryReportsSinceMidnightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSkillGroupSummaryReportsSinceMidnight',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSkillGroupSummaryReportsSinceMidnightResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSkillGroupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSkillGroupsResponse
     */
    public function listSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSkillGroups',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSkillLevelsOfUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSkillLevelsOfUserResponse
     */
    public function listSkillLevelsOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isMember)) {
            $query['IsMember'] = $request->isMember;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSkillLevelsOfUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSkillLevelsOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUnassignedNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUnassignedNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListUserLevelsOfSkillGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUserLevelsOfSkillGroupResponse
     */
    public function listUserLevelsOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isMember)) {
            $query['IsMember'] = $request->isMember;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserLevelsOfSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserLevelsOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $query['SearchPattern'] = $request->searchPattern;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param MakeCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MakeCallResponse
     */
    public function makeCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callee)) {
            $query['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maskedCallee)) {
            $query['MaskedCallee'] = $request->maskedCallee;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MakeCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MakeCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyAudioFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyAudioFileResponse
     */
    public function modifyAudioFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioFileName)) {
            $query['AudioFileName'] = $request->audioFileName;
        }
        if (!Utils::isUnset($request->audioResourceId)) {
            $query['AudioResourceId'] = $request->audioResourceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossFileKey)) {
            $query['OssFileKey'] = $request->ossFileKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAudioFile',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAudioFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAudioFileRequest $request
     *
     * @return ModifyAudioFileResponse
     */
    public function modifyAudioFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAudioFileWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyCustomCallTaggingResponse
     */
    public function modifyCustomCallTaggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callTagNameList)) {
            $query['CallTagNameList'] = $request->callTagNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCustomCallTagging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCustomCallTaggingRequest $request
     *
     * @return ModifyCustomCallTaggingResponse
     */
    public function modifyCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomCallTaggingWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstance',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyPhoneNumberRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPhoneNumberResponse
     */
    public function modifyPhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->usage)) {
            $query['Usage'] = $request->usage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPhoneNumber',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifySkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifySkillGroupResponse
     */
    public function modifySkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifySkillLevelsOfUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySkillLevelsOfUserResponse
     */
    public function modifySkillLevelsOfUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillLevelList)) {
            $query['SkillLevelList'] = $request->skillLevelList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySkillLevelsOfUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySkillLevelsOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayId)) {
            $query['DisplayId'] = $request->displayId;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workMode)) {
            $query['WorkMode'] = $request->workMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyUserLevelsOfSkillGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyUserLevelsOfSkillGroupResponse
     */
    public function modifyUserLevelsOfSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->userLevelList)) {
            $query['UserLevelList'] = $request->userLevelList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserLevelsOfSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserLevelsOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param MonitorCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MonitorCallResponse
     */
    public function monitorCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->monitoredUserId)) {
            $query['MonitoredUserId'] = $request->monitoredUserId;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MonitorCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MonitorCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param MuteCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MuteCallResponse
     */
    public function muteCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MuteCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MuteCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param PauseCampaignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PauseCampaignResponse
     */
    public function pauseCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PauseCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PauseCampaignRequest $request
     *
     * @return PauseCampaignResponse
     */
    public function pauseCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseCampaignWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $query['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PickOutboundNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PickOutboundNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param PollUserStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PollUserStatusResponse
     */
    public function pollUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PollUserStatus',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PollUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param PublishContactFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PublishContactFlowResponse
     */
    public function publishContactFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->draftId)) {
            $query['DraftId'] = $request->draftId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishContactFlow',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishContactFlowRequest $request
     *
     * @return PublishContactFlowResponse
     */
    public function publishContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishContactFlowWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundScenario)) {
            $query['OutboundScenario'] = $request->outboundScenario;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReadyForService',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReadyForServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RedialCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RedialCallResponse
     */
    public function redialCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callee)) {
            $query['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RedialCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RedialCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RedialCallRequest $request
     *
     * @return RedialCallResponse
     */
    public function redialCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->redialCallWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterDevice',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RegisterDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterDevicesResponse
     */
    public function registerDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->userIdListJson)) {
            $query['UserIdListJson'] = $request->userIdListJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterDevices',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterDevicesRequest $request
     *
     * @return RegisterDevicesResponse
     */
    public function registerDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDevicesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RemoveDoNotCallNumbersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveDoNotCallNumbersResponse
     */
    public function removeDoNotCallNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveDoNotCallNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveDoNotCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDoNotCallNumbersRequest $request
     *
     * @return RemoveDoNotCallNumbersResponse
     */
    public function removeDoNotCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDoNotCallNumbersWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePersonalNumbersFromUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePersonalNumbersFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RemovePhoneNumberFromSkillGroupsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemovePhoneNumberFromSkillGroupsResponse
     */
    public function removePhoneNumberFromSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $query['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePhoneNumberFromSkillGroups',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePhoneNumberFromSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RemovePhoneNumbersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemovePhoneNumbersResponse
     */
    public function removePhoneNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePhoneNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RemovePhoneNumbersFromSkillGroupRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemovePhoneNumbersFromSkillGroupResponse
     */
    public function removePhoneNumbersFromSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePhoneNumbersFromSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePhoneNumbersFromSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RemoveSkillGroupsFromUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveSkillGroupsFromUserResponse
     */
    public function removeSkillGroupsFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $query['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveSkillGroupsFromUser',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSkillGroupsFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RemoveUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveUsersResponse
     */
    public function removeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userIdList)) {
            $query['UserIdList'] = $request->userIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUsers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->userIdList)) {
            $query['UserIdList'] = $request->userIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUsersFromSkillGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUsersFromSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ResetAgentStateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResetAgentStateResponse
     */
    public function resetAgentStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAgentState',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAgentStateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ResetUserPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetUserPassword',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RestoreArchivedRecordingsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RestoreArchivedRecordingsResponse
     */
    public function restoreArchivedRecordingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreArchivedRecordings',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreArchivedRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestoreArchivedRecordingsRequest $request
     *
     * @return RestoreArchivedRecordingsResponse
     */
    public function restoreArchivedRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreArchivedRecordingsWithOptions($request, $runtime);
    }

    /**
     * @param ResumeCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeCampaignResponse
     */
    public function resumeCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeCampaignRequest $request
     *
     * @return ResumeCampaignResponse
     */
    public function resumeCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeCampaignWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetrieveCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetrieveCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveRTCStatsV2Request $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveRTCStatsV2Response
     */
    public function saveRTCStatsV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->generalInfo)) {
            $query['GeneralInfo'] = $request->generalInfo;
        }
        if (!Utils::isUnset($request->googAddress)) {
            $query['GoogAddress'] = $request->googAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->receiverReport)) {
            $query['ReceiverReport'] = $request->receiverReport;
        }
        if (!Utils::isUnset($request->senderReport)) {
            $query['SenderReport'] = $request->senderReport;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveRTCStatsV2',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveRTCStatsV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveTerminalLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveTerminalLogResponse
     */
    public function saveTerminalLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->methodName)) {
            $query['MethodName'] = $request->methodName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uniqueRequestId)) {
            $query['UniqueRequestId'] = $request->uniqueRequestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTerminalLog',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTerminalLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveWebRTCStatsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveWebRTCStatsResponse
     */
    public function saveWebRTCStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->generalInfo)) {
            $query['GeneralInfo'] = $request->generalInfo;
        }
        if (!Utils::isUnset($request->googAddress)) {
            $query['GoogAddress'] = $request->googAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->receiverReport)) {
            $query['ReceiverReport'] = $request->receiverReport;
        }
        if (!Utils::isUnset($request->senderReport)) {
            $query['SenderReport'] = $request->senderReport;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveWebRTCStats',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveWebRTCStatsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SaveWebRtcInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveWebRtcInfoResponse
     */
    public function saveWebRtcInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveWebRtcInfo',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveWebRtcInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SendDtmfSignalingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendDtmfSignalingResponse
     */
    public function sendDtmfSignalingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->dtmf)) {
            $query['Dtmf'] = $request->dtmf;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendDtmfSignaling',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendDtmfSignalingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SignInGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SignInGroupResponse
     */
    public function signInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->signedSkillGroupIdList)) {
            $query['SignedSkillGroupIdList'] = $request->signedSkillGroupIdList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SignInGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SignInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SignOutGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SignOutGroupResponse
     */
    public function signOutGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SignOutGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SignOutGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StartBack2BackCallRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartBack2BackCallResponse
     */
    public function startBack2BackCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionalBroker)) {
            $query['AdditionalBroker'] = $request->additionalBroker;
        }
        if (!Utils::isUnset($request->broker)) {
            $query['Broker'] = $request->broker;
        }
        if (!Utils::isUnset($request->callee)) {
            $query['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartBack2BackCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartBack2BackCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StartConferenceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartConferenceResponse
     */
    public function startConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->participantListJson)) {
            $query['ParticipantListJson'] = $request->participantListJson;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartConference',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartConferenceRequest $request
     *
     * @return StartConferenceResponse
     */
    public function startConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConferenceWithOptions($request, $runtime);
    }

    /**
     * @param StartEditContactFlowRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartEditContactFlowResponse
     */
    public function startEditContactFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartEditContactFlow',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartEditContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartEditContactFlowRequest $request
     *
     * @return StartEditContactFlowResponse
     */
    public function startEditContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEditContactFlowWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->callee)) {
            $query['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->contactFlowVariables)) {
            $query['ContactFlowVariables'] = $request->contactFlowVariables;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maskedCallee)) {
            $query['MaskedCallee'] = $request->maskedCallee;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartPredictiveCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPredictiveCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StartPrivacyCallRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartPrivacyCallResponse
     */
    public function startPrivacyCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callee)) {
            $query['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartPrivacyCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPrivacyCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartPrivacyCallRequest $request
     *
     * @return StartPrivacyCallResponse
     */
    public function startPrivacyCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPrivacyCallWithOptions($request, $runtime);
    }

    /**
     * @param SubmitCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitCampaignResponse
     */
    public function submitCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitCampaignRequest $request
     *
     * @return SubmitCampaignResponse
     */
    public function submitCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCampaignWithOptions($request, $runtime);
    }

    /**
     * @param SwitchToConferenceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwitchToConferenceResponse
     */
    public function switchToConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchToConference',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchToConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchToConferenceRequest $request
     *
     * @return SwitchToConferenceResponse
     */
    public function switchToConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchToConferenceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TakeBreak',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TakeBreakResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UnmuteCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UnmuteCallResponse
     */
    public function unmuteCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnmuteCall',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnmuteCallResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UnregisterDeviceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnregisterDeviceResponse
     */
    public function unregisterDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnregisterDevice',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnregisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnregisterDeviceRequest $request
     *
     * @return UnregisterDeviceResponse
     */
    public function unregisterDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unregisterDeviceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->configItems)) {
            $query['ConfigItems'] = $request->configItems;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfigItems',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConfigItemsResponse::fromMap($this->callApi($params, $req, $runtime));
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
}
