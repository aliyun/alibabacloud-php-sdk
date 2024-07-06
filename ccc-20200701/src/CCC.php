<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CCC\V20200701\Models\AbortCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AbortCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AcceptChatRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AcceptChatResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddBlacklistCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddBlacklistCallTaggingResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\AddSchemaPropertyRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddSchemaPropertyResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddSchemaPropertyShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddSkillGroupsToUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddSkillGroupsToUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddTicketTaskRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddTicketTaskResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddUsersToSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddUsersToSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AnalyzeConversationRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AnalyzeConversationResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ChangeVisibilityRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ChangeVisibilityResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ChangeWorkModeRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ChangeWorkModeResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSchemaRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSchemaResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSchemaShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateTicketResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteDocumentRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteDocumentResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteDocumentsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteDocumentsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteDocumentsShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSchemaPropertyRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSchemaPropertyResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSchemaRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSchemaResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteTicketResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteTicketTemplateRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteTicketTemplateResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DisableSchemaPropertyRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DisableSchemaPropertyResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DisableTicketTemplateRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DisableTicketTemplateResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\DiscardEditingContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DiscardEditingContactFlowResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\EnableSchemaPropertyRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\EnableSchemaPropertyResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\EnableTicketTemplateRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\EnableTicketTemplateResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\EndConferenceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\EndConferenceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportCustomCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportDoNotCallNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportDoNotCallNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\FinishTicketTaskRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\FinishTicketTaskResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetAccessChannelOfStagingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetAccessChannelOfStagingResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\GetDocumentUploadParametersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetDocumentUploadParametersResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSchemaRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSchemaResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketSummaryReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketSummaryReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketTemplateRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketTemplateResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\GetVisitorLoginDetailsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetVisitorLoginDetailsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetVoicemailRecordingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetVoicemailRecordingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\HoldCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\HoldCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportAdminsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportAdminsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportCorpNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportCorpNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportCustomCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportDocumentsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportDocumentsResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListBlacklistCallTaggingsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListBlacklistCallTaggingsResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCategoriesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCategoriesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCommonTicketFieldsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCommonTicketFieldsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListConfigItemsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListConfigItemsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCustomCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCustomCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDevicesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDevicesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDoNotCallNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDoNotCallNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentSkillGroupReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentSkillGroupReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesOfUserRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesOfUserResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentSkillGroupReportRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentSkillGroupReportResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketTasksRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketTasksResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketTemplatesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketTemplatesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUnassignedNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUnassignedNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUserLevelsOfSkillGroupRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUserLevelsOfSkillGroupResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListVoicemailsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListVoicemailsResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ProcessAliMeCallbackOfStagingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ProcessAliMeCallbackOfStagingResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\RejectChatRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RejectChatResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RejectTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RejectTicketResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReleaseCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReleaseCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReleaseChatRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ReleaseChatResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveBlacklistCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RemoveBlacklistCallTaggingResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ResubmitTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResubmitTicketResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResumeCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ResumeCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\RetrieveCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\RetrieveCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveDocumentRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SaveDocumentResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\StartChatRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartChatResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartChatShrinkRequest;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\TerminateTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\TerminateTicketResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\TransferTicketTaskRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\TransferTicketTaskResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnmuteCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnmuteCallResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnregisterDeviceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UnregisterDeviceResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateConfigItemsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateConfigItemsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateTicketResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\WithdrawTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\WithdrawTicketResponse;
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
     * @summary 废弃预测式外呼活动
     *  *
     * @param AbortCampaignRequest $request AbortCampaignRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AbortCampaignResponse AbortCampaignResponse
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
     * @summary 废弃预测式外呼活动
     *  *
     * @param AbortCampaignRequest $request AbortCampaignRequest
     *
     * @return AbortCampaignResponse AbortCampaignResponse
     */
    public function abortCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abortCampaignWithOptions($request, $runtime);
    }

    /**
     * @param AcceptChatRequest $request AcceptChatRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptChatResponse AcceptChatResponse
     */
    public function acceptChatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'AcceptChat',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AcceptChatRequest $request AcceptChatRequest
     *
     * @return AcceptChatResponse AcceptChatResponse
     */
    public function acceptChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptChatWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑呼入控制号码
     *  *
     * @param AddBlacklistCallTaggingRequest $request AddBlacklistCallTaggingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddBlacklistCallTaggingResponse AddBlacklistCallTaggingResponse
     */
    public function addBlacklistCallTaggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBlacklistCallTagging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBlacklistCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑呼入控制号码
     *  *
     * @param AddBlacklistCallTaggingRequest $request AddBlacklistCallTaggingRequest
     *
     * @return AddBlacklistCallTaggingResponse AddBlacklistCallTaggingResponse
     */
    public function addBlacklistCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBlacklistCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @summary 追加联系人
     *  *
     * @param AddCasesRequest $tmpReq  AddCasesRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCasesResponse AddCasesResponse
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
     * @summary 追加联系人
     *  *
     * @param AddCasesRequest $request AddCasesRequest
     *
     * @return AddCasesResponse AddCasesResponse
     */
    public function addCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasesWithOptions($request, $runtime);
    }

    /**
     * @param AddNumbersToSkillGroupRequest $request AddNumbersToSkillGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddNumbersToSkillGroupResponse AddNumbersToSkillGroupResponse
     */
    public function addNumbersToSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instNumberGroupIdList)) {
            $query['InstNumberGroupIdList'] = $request->instNumberGroupIdList;
        }
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
     * @param AddNumbersToSkillGroupRequest $request AddNumbersToSkillGroupRequest
     *
     * @return AddNumbersToSkillGroupResponse AddNumbersToSkillGroupResponse
     */
    public function addNumbersToSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNumbersToSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddPersonalNumbersToUserRequest $request AddPersonalNumbersToUserRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPersonalNumbersToUserResponse AddPersonalNumbersToUserResponse
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
     * @param AddPersonalNumbersToUserRequest $request AddPersonalNumbersToUserRequest
     *
     * @return AddPersonalNumbersToUserResponse AddPersonalNumbersToUserResponse
     */
    public function addPersonalNumbersToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPersonalNumbersToUserWithOptions($request, $runtime);
    }

    /**
     * @param AddPhoneNumberToSkillGroupsRequest $request AddPhoneNumberToSkillGroupsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPhoneNumberToSkillGroupsResponse AddPhoneNumberToSkillGroupsResponse
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
     * @param AddPhoneNumberToSkillGroupsRequest $request AddPhoneNumberToSkillGroupsRequest
     *
     * @return AddPhoneNumberToSkillGroupsResponse AddPhoneNumberToSkillGroupsResponse
     */
    public function addPhoneNumberToSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPhoneNumberToSkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param AddPhoneNumbersRequest $request AddPhoneNumbersRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPhoneNumbersResponse AddPhoneNumbersResponse
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
     * @param AddPhoneNumbersRequest $request AddPhoneNumbersRequest
     *
     * @return AddPhoneNumbersResponse AddPhoneNumbersResponse
     */
    public function addPhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * @param AddSchemaPropertyRequest $tmpReq  AddSchemaPropertyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSchemaPropertyResponse AddSchemaPropertyResponse
     */
    public function addSchemaPropertyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddSchemaPropertyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->property)) {
            $request->propertyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->property, 'Property', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->propertyShrink)) {
            $body['Property'] = $request->propertyShrink;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddSchemaProperty',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSchemaPropertyRequest $request AddSchemaPropertyRequest
     *
     * @return AddSchemaPropertyResponse AddSchemaPropertyResponse
     */
    public function addSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param AddSkillGroupsToUserRequest $request AddSkillGroupsToUserRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSkillGroupsToUserResponse AddSkillGroupsToUserResponse
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
     * @param AddSkillGroupsToUserRequest $request AddSkillGroupsToUserRequest
     *
     * @return AddSkillGroupsToUserResponse AddSkillGroupsToUserResponse
     */
    public function addSkillGroupsToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSkillGroupsToUserWithOptions($request, $runtime);
    }

    /**
     * @param AddTicketTaskRequest $request AddTicketTaskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTicketTaskResponse AddTicketTaskResponse
     */
    public function addTicketTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assignee)) {
            $query['Assignee'] = $request->assignee;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->position)) {
            $query['Position'] = $request->position;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTicketTask',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTicketTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTicketTaskRequest $request AddTicketTaskRequest
     *
     * @return AddTicketTaskResponse AddTicketTaskResponse
     */
    public function addTicketTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTicketTaskWithOptions($request, $runtime);
    }

    /**
     * @param AddUsersToSkillGroupRequest $request AddUsersToSkillGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUsersToSkillGroupResponse AddUsersToSkillGroupResponse
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
     * @param AddUsersToSkillGroupRequest $request AddUsersToSkillGroupRequest
     *
     * @return AddUsersToSkillGroupResponse AddUsersToSkillGroupResponse
     */
    public function addUsersToSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersToSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param AnalyzeConversationRequest $request AnalyzeConversationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AnalyzeConversationResponse AnalyzeConversationResponse
     */
    public function analyzeConversationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->fieldListJson)) {
            $query['FieldListJson'] = $request->fieldListJson;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskListJson)) {
            $query['TaskListJson'] = $request->taskListJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AnalyzeConversation',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AnalyzeConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AnalyzeConversationRequest $request AnalyzeConversationRequest
     *
     * @return AnalyzeConversationResponse AnalyzeConversationResponse
     */
    public function analyzeConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->analyzeConversationWithOptions($request, $runtime);
    }

    /**
     * @param AnswerCallRequest $request AnswerCallRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AnswerCallResponse AnswerCallResponse
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
     * @param AnswerCallRequest $request AnswerCallRequest
     *
     * @return AnswerCallResponse AnswerCallResponse
     */
    public function answerCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->answerCallWithOptions($request, $runtime);
    }

    /**
     * @summary 追加联系人
     *  *
     * @param AppendCasesRequest $tmpReq  AppendCasesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AppendCasesResponse AppendCasesResponse
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
     * @summary 追加联系人
     *  *
     * @param AppendCasesRequest $request AppendCasesRequest
     *
     * @return AppendCasesResponse AppendCasesResponse
     */
    public function appendCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appendCasesWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI AssignUsers is deprecated, please use CCC::2020-07-01::ImportRamUsers instead.
     *  *
     * Deprecated
     *
     * @param AssignUsersRequest $request AssignUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignUsersResponse AssignUsersResponse
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
     * @deprecated OpenAPI AssignUsers is deprecated, please use CCC::2020-07-01::ImportRamUsers instead.
     *  *
     * Deprecated
     *
     * @param AssignUsersRequest $request AssignUsersRequest
     *
     * @return AssignUsersResponse AssignUsersResponse
     */
    public function assignUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignUsersWithOptions($request, $runtime);
    }

    /**
     * @param BargeInCallRequest $request BargeInCallRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return BargeInCallResponse BargeInCallResponse
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
     * @param BargeInCallRequest $request BargeInCallRequest
     *
     * @return BargeInCallResponse BargeInCallResponse
     */
    public function bargeInCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bargeInCallWithOptions($request, $runtime);
    }

    /**
     * @param BlindTransferRequest $request BlindTransferRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return BlindTransferResponse BlindTransferResponse
     */
    public function blindTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callPriority)) {
            $query['CallPriority'] = $request->callPriority;
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
        if (!Utils::isUnset($request->queuingOverflowThreshold)) {
            $query['QueuingOverflowThreshold'] = $request->queuingOverflowThreshold;
        }
        if (!Utils::isUnset($request->queuingTimeoutSeconds)) {
            $query['QueuingTimeoutSeconds'] = $request->queuingTimeoutSeconds;
        }
        if (!Utils::isUnset($request->routingType)) {
            $query['RoutingType'] = $request->routingType;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        if (!Utils::isUnset($request->strategyParams)) {
            $query['StrategyParams'] = $request->strategyParams;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->transferee)) {
            $query['Transferee'] = $request->transferee;
        }
        if (!Utils::isUnset($request->transfereeType)) {
            $query['TransfereeType'] = $request->transfereeType;
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
     * @param BlindTransferRequest $request BlindTransferRequest
     *
     * @return BlindTransferResponse BlindTransferResponse
     */
    public function blindTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blindTransferWithOptions($request, $runtime);
    }

    /**
     * @param BridgeRtcCallRequest $request BridgeRtcCallRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return BridgeRtcCallResponse BridgeRtcCallResponse
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
     * @param BridgeRtcCallRequest $request BridgeRtcCallRequest
     *
     * @return BridgeRtcCallResponse BridgeRtcCallResponse
     */
    public function bridgeRtcCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bridgeRtcCallWithOptions($request, $runtime);
    }

    /**
     * @param CancelAttendedTransferRequest $request CancelAttendedTransferRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelAttendedTransferResponse CancelAttendedTransferResponse
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
     * @param CancelAttendedTransferRequest $request CancelAttendedTransferRequest
     *
     * @return CancelAttendedTransferResponse CancelAttendedTransferResponse
     */
    public function cancelAttendedTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAttendedTransferWithOptions($request, $runtime);
    }

    /**
     * @param ChangeVisibilityRequest $request ChangeVisibilityRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeVisibilityResponse ChangeVisibilityResponse
     */
    public function changeVisibilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->invisible)) {
            $query['Invisible'] = $request->invisible;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeVisibility',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeVisibilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeVisibilityRequest $request ChangeVisibilityRequest
     *
     * @return ChangeVisibilityResponse ChangeVisibilityResponse
     */
    public function changeVisibility($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeVisibilityWithOptions($request, $runtime);
    }

    /**
     * @param ChangeWorkModeRequest $request ChangeWorkModeRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeWorkModeResponse ChangeWorkModeResponse
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
     * @param ChangeWorkModeRequest $request ChangeWorkModeRequest
     *
     * @return ChangeWorkModeResponse ChangeWorkModeResponse
     */
    public function changeWorkMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeWorkModeWithOptions($request, $runtime);
    }

    /**
     * @param ClaimChatRequest $request ClaimChatRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ClaimChatResponse ClaimChatResponse
     */
    public function claimChatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClaimChat',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClaimChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClaimChatRequest $request ClaimChatRequest
     *
     * @return ClaimChatResponse ClaimChatResponse
     */
    public function claimChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->claimChatWithOptions($request, $runtime);
    }

    /**
     * @param CoachCallRequest $request CoachCallRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CoachCallResponse CoachCallResponse
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
     * @param CoachCallRequest $request CoachCallRequest
     *
     * @return CoachCallResponse CoachCallResponse
     */
    public function coachCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->coachCallWithOptions($request, $runtime);
    }

    /**
     * @param CommitContactFlowRequest $request CommitContactFlowRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CommitContactFlowResponse CommitContactFlowResponse
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
     * @param CommitContactFlowRequest $request CommitContactFlowRequest
     *
     * @return CommitContactFlowResponse CommitContactFlowResponse
     */
    public function commitContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitContactFlowWithOptions($request, $runtime);
    }

    /**
     * @param CompleteAttendedTransferRequest $request CompleteAttendedTransferRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CompleteAttendedTransferResponse CompleteAttendedTransferResponse
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
     * @param CompleteAttendedTransferRequest $request CompleteAttendedTransferRequest
     *
     * @return CompleteAttendedTransferResponse CompleteAttendedTransferResponse
     */
    public function completeAttendedTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeAttendedTransferWithOptions($request, $runtime);
    }

    /**
     * @param CreateAudioFileRequest $request CreateAudioFileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAudioFileResponse CreateAudioFileResponse
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
        if (!Utils::isUnset($request->usage)) {
            $query['Usage'] = $request->usage;
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
     * @param CreateAudioFileRequest $request CreateAudioFileRequest
     *
     * @return CreateAudioFileResponse CreateAudioFileResponse
     */
    public function createAudioFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAudioFileWithOptions($request, $runtime);
    }

    /**
     * @summary 批量创建号码标签
     *  *
     * @param CreateCallTagsRequest $request CreateCallTagsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCallTagsResponse CreateCallTagsResponse
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
     * @summary 批量创建号码标签
     *  *
     * @param CreateCallTagsRequest $request CreateCallTagsRequest
     *
     * @return CreateCallTagsResponse CreateCallTagsResponse
     */
    public function createCallTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCallTagsWithOptions($request, $runtime);
    }

    /**
     * @summary 创建预测式外呼活动
     *  *
     * @param CreateCampaignRequest $tmpReq  CreateCampaignRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCampaignResponse CreateCampaignResponse
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
     * @summary 创建预测式外呼活动
     *  *
     * @param CreateCampaignRequest $request CreateCampaignRequest
     *
     * @return CreateCampaignResponse CreateCampaignResponse
     */
    public function createCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCampaignWithOptions($request, $runtime);
    }

    /**
     * @param CreateContactFlowRequest $request CreateContactFlowRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateContactFlowResponse CreateContactFlowResponse
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
     * @param CreateContactFlowRequest $request CreateContactFlowRequest
     *
     * @return CreateContactFlowResponse CreateContactFlowResponse
     */
    public function createContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContactFlowWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI CreateCustomCallTagging is deprecated, please use CCC::2020-07-01::CreateCustomCallTaggings instead
     *  *
     * @summary 创建呼入控制号码
     *  *
     * Deprecated
     *
     * @param CreateCustomCallTaggingRequest $request CreateCustomCallTaggingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomCallTaggingResponse CreateCustomCallTaggingResponse
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
     * @deprecated openAPI CreateCustomCallTagging is deprecated, please use CCC::2020-07-01::CreateCustomCallTaggings instead
     *  *
     * @summary 创建呼入控制号码
     *  *
     * Deprecated
     *
     * @param CreateCustomCallTaggingRequest $request CreateCustomCallTaggingRequest
     *
     * @return CreateCustomCallTaggingResponse CreateCustomCallTaggingResponse
     */
    public function createCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
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
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateSchemaRequest $tmpReq  CreateSchemaRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSchemaResponse CreateSchemaResponse
     */
    public function createSchemaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSchemaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->properties)) {
            $request->propertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->properties, 'Properties', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->propertiesShrink)) {
            $body['Properties'] = $request->propertiesShrink;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSchema',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSchemaRequest $request CreateSchemaRequest
     *
     * @return CreateSchemaResponse CreateSchemaResponse
     */
    public function createSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchemaWithOptions($request, $runtime);
    }

    /**
     * @param CreateSkillGroupRequest $request CreateSkillGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSkillGroupResponse CreateSkillGroupResponse
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
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param CreateSkillGroupRequest $request CreateSkillGroupRequest
     *
     * @return CreateSkillGroupResponse CreateSkillGroupResponse
     */
    public function createSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateTicketRequest $request CreateTicketRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTicketResponse CreateTicketResponse
     */
    public function createTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->context)) {
            $query['Context'] = $request->context;
        }
        if (!Utils::isUnset($request->customerId)) {
            $query['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTicket',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTicketRequest $request CreateTicketRequest
     *
     * @return CreateTicketResponse CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicketWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserRequest $request CreateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarUrl)) {
            $query['AvatarUrl'] = $request->avatarUrl;
        }
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
        if (!Utils::isUnset($request->nickname)) {
            $query['Nickname'] = $request->nickname;
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
     * @param CreateUserRequest $request CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAudioFileRequest $request DeleteAudioFileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAudioFileResponse DeleteAudioFileResponse
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
     * @param DeleteAudioFileRequest $request DeleteAudioFileRequest
     *
     * @return DeleteAudioFileResponse DeleteAudioFileResponse
     */
    public function deleteAudioFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAudioFileWithOptions($request, $runtime);
    }

    /**
     * @summary 删除号码标签
     *  *
     * @param DeleteCallTagRequest $request DeleteCallTagRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCallTagResponse DeleteCallTagResponse
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
     * @summary 删除号码标签
     *  *
     * @param DeleteCallTagRequest $request DeleteCallTagRequest
     *
     * @return DeleteCallTagResponse DeleteCallTagResponse
     */
    public function deleteCallTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCallTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactFlowRequest $request DeleteContactFlowRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContactFlowResponse DeleteContactFlowResponse
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
     * @param DeleteContactFlowRequest $request DeleteContactFlowRequest
     *
     * @return DeleteContactFlowResponse DeleteContactFlowResponse
     */
    public function deleteContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactFlowWithOptions($request, $runtime);
    }

    /**
     * @summary 删除呼入控制号码
     *  *
     * @param DeleteCustomCallTaggingRequest $request DeleteCustomCallTaggingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomCallTaggingResponse DeleteCustomCallTaggingResponse
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
     * @summary 删除呼入控制号码
     *  *
     * @param DeleteCustomCallTaggingRequest $request DeleteCustomCallTaggingRequest
     *
     * @return DeleteCustomCallTaggingResponse DeleteCustomCallTaggingResponse
     */
    public function deleteCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDocumentRequest $request DeleteDocumentRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDocumentResponse DeleteDocumentResponse
     */
    public function deleteDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->documentId)) {
            $body['DocumentId'] = $request->documentId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDocument',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDocumentRequest $request DeleteDocumentRequest
     *
     * @return DeleteDocumentResponse DeleteDocumentResponse
     */
    public function deleteDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDocumentsRequest $tmpReq  DeleteDocumentsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDocumentsResponse DeleteDocumentsResponse
     */
    public function deleteDocumentsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteDocumentsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->documentIds)) {
            $request->documentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->documentIdsShrink)) {
            $body['DocumentIds'] = $request->documentIdsShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDocuments',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDocumentsRequest $request DeleteDocumentsRequest
     *
     * @return DeleteDocumentsResponse DeleteDocumentsResponse
     */
    public function deleteDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSchemaRequest $request DeleteSchemaRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSchemaResponse DeleteSchemaResponse
     */
    public function deleteSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSchema',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSchemaRequest $request DeleteSchemaRequest
     *
     * @return DeleteSchemaResponse DeleteSchemaResponse
     */
    public function deleteSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchemaWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSchemaPropertyRequest $request DeleteSchemaPropertyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSchemaPropertyResponse DeleteSchemaPropertyResponse
     */
    public function deleteSchemaPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->propertyName)) {
            $body['PropertyName'] = $request->propertyName;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSchemaProperty',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSchemaPropertyRequest $request DeleteSchemaPropertyRequest
     *
     * @return DeleteSchemaPropertyResponse DeleteSchemaPropertyResponse
     */
    public function deleteSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSkillGroupRequest $request DeleteSkillGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSkillGroupResponse DeleteSkillGroupResponse
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
     * @param DeleteSkillGroupRequest $request DeleteSkillGroupRequest
     *
     * @return DeleteSkillGroupResponse DeleteSkillGroupResponse
     */
    public function deleteSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTicketRequest $request DeleteTicketRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTicketResponse DeleteTicketResponse
     */
    public function deleteTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTicket',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTicketRequest $request DeleteTicketRequest
     *
     * @return DeleteTicketResponse DeleteTicketResponse
     */
    public function deleteTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTicketWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTicketTemplateRequest $request DeleteTicketTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTicketTemplateResponse DeleteTicketTemplateResponse
     */
    public function deleteTicketTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTicketTemplate',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTicketTemplateRequest $request DeleteTicketTemplateRequest
     *
     * @return DeleteTicketTemplateResponse DeleteTicketTemplateResponse
     */
    public function deleteTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DisableSchemaPropertyRequest $request DisableSchemaPropertyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableSchemaPropertyResponse DisableSchemaPropertyResponse
     */
    public function disableSchemaPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->propertyName)) {
            $body['PropertyName'] = $request->propertyName;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableSchemaProperty',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableSchemaPropertyRequest $request DisableSchemaPropertyRequest
     *
     * @return DisableSchemaPropertyResponse DisableSchemaPropertyResponse
     */
    public function disableSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param DisableTicketTemplateRequest $request DisableTicketTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableTicketTemplateResponse DisableTicketTemplateResponse
     */
    public function disableTicketTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableTicketTemplate',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableTicketTemplateRequest $request DisableTicketTemplateRequest
     *
     * @return DisableTicketTemplateResponse DisableTicketTemplateResponse
     */
    public function disableTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DiscardEditingContactFlowRequest $request DiscardEditingContactFlowRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DiscardEditingContactFlowResponse DiscardEditingContactFlowResponse
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
     * @param DiscardEditingContactFlowRequest $request DiscardEditingContactFlowRequest
     *
     * @return DiscardEditingContactFlowResponse DiscardEditingContactFlowResponse
     */
    public function discardEditingContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->discardEditingContactFlowWithOptions($request, $runtime);
    }

    /**
     * @param EnableSchemaPropertyRequest $request EnableSchemaPropertyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableSchemaPropertyResponse EnableSchemaPropertyResponse
     */
    public function enableSchemaPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->propertyName)) {
            $body['PropertyName'] = $request->propertyName;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableSchemaProperty',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableSchemaPropertyRequest $request EnableSchemaPropertyRequest
     *
     * @return EnableSchemaPropertyResponse EnableSchemaPropertyResponse
     */
    public function enableSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param EnableTicketTemplateRequest $request EnableTicketTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableTicketTemplateResponse EnableTicketTemplateResponse
     */
    public function enableTicketTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableTicketTemplate',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableTicketTemplateRequest $request EnableTicketTemplateRequest
     *
     * @return EnableTicketTemplateResponse EnableTicketTemplateResponse
     */
    public function enableTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * @param EndConferenceRequest $request EndConferenceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return EndConferenceResponse EndConferenceResponse
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
     * @param EndConferenceRequest $request EndConferenceRequest
     *
     * @return EndConferenceResponse EndConferenceResponse
     */
    public function endConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endConferenceWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ExportCustomCallTagging is deprecated, please use CCC::2020-07-01::ExportCustomCallTaggings instead
     *  *
     * @summary 导出全部呼入号码标签
     *  *
     * Deprecated
     *
     * @param ExportCustomCallTaggingRequest $request ExportCustomCallTaggingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportCustomCallTaggingResponse ExportCustomCallTaggingResponse
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
     * @deprecated openAPI ExportCustomCallTagging is deprecated, please use CCC::2020-07-01::ExportCustomCallTaggings instead
     *  *
     * @summary 导出全部呼入号码标签
     *  *
     * Deprecated
     *
     * @param ExportCustomCallTaggingRequest $request ExportCustomCallTaggingRequest
     *
     * @return ExportCustomCallTaggingResponse ExportCustomCallTaggingResponse
     */
    public function exportCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCustomCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @summary 导出黑名单号码
     *  *
     * @param ExportDoNotCallNumbersRequest $request ExportDoNotCallNumbersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportDoNotCallNumbersResponse ExportDoNotCallNumbersResponse
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
     * @summary 导出黑名单号码
     *  *
     * @param ExportDoNotCallNumbersRequest $request ExportDoNotCallNumbersRequest
     *
     * @return ExportDoNotCallNumbersResponse ExportDoNotCallNumbersResponse
     */
    public function exportDoNotCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDoNotCallNumbersWithOptions($request, $runtime);
    }

    /**
     * @param FinishTicketTaskRequest $request FinishTicketTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return FinishTicketTaskResponse FinishTicketTaskResponse
     */
    public function finishTicketTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FinishTicketTask',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FinishTicketTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FinishTicketTaskRequest $request FinishTicketTaskRequest
     *
     * @return FinishTicketTaskResponse FinishTicketTaskResponse
     */
    public function finishTicketTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishTicketTaskWithOptions($request, $runtime);
    }

    /**
     * @summary GetAccessChannelOfStaging
     *  *
     * @param GetAccessChannelOfStagingRequest $request GetAccessChannelOfStagingRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessChannelOfStagingResponse GetAccessChannelOfStagingResponse
     */
    public function getAccessChannelOfStagingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessChannelOfStaging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessChannelOfStagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetAccessChannelOfStaging
     *  *
     * @param GetAccessChannelOfStagingRequest $request GetAccessChannelOfStagingRequest
     *
     * @return GetAccessChannelOfStagingResponse GetAccessChannelOfStagingResponse
     */
    public function getAccessChannelOfStaging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessChannelOfStagingWithOptions($request, $runtime);
    }

    /**
     * @summary 获取音频文件
     *  *
     * @param GetAudioFileRequest $request GetAudioFileRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAudioFileResponse GetAudioFileResponse
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
     * @summary 获取音频文件
     *  *
     * @param GetAudioFileRequest $request GetAudioFileRequest
     *
     * @return GetAudioFileResponse GetAudioFileResponse
     */
    public function getAudioFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioFileWithOptions($request, $runtime);
    }

    /**
     * @param GetAudioFileDownloadUrlRequest $request GetAudioFileDownloadUrlRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAudioFileDownloadUrlResponse GetAudioFileDownloadUrlResponse
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
     * @param GetAudioFileDownloadUrlRequest $request GetAudioFileDownloadUrlRequest
     *
     * @return GetAudioFileDownloadUrlResponse GetAudioFileDownloadUrlResponse
     */
    public function getAudioFileDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioFileDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetAudioFileUploadParametersRequest $request GetAudioFileUploadParametersRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAudioFileUploadParametersResponse GetAudioFileUploadParametersResponse
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
     * @param GetAudioFileUploadParametersRequest $request GetAudioFileUploadParametersRequest
     *
     * @return GetAudioFileUploadParametersResponse GetAudioFileUploadParametersResponse
     */
    public function getAudioFileUploadParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioFileUploadParametersWithOptions($request, $runtime);
    }

    /**
     * @param GetCallDetailRecordRequest $request GetCallDetailRecordRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCallDetailRecordResponse GetCallDetailRecordResponse
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
     * @param GetCallDetailRecordRequest $request GetCallDetailRecordRequest
     *
     * @return GetCallDetailRecordResponse GetCallDetailRecordResponse
     */
    public function getCallDetailRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallDetailRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 获取预测式外呼活动信息
     *  *
     * @param GetCampaignRequest $request GetCampaignRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCampaignResponse GetCampaignResponse
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
     * @summary 获取预测式外呼活动信息
     *  *
     * @param GetCampaignRequest $request GetCampaignRequest
     *
     * @return GetCampaignResponse GetCampaignResponse
     */
    public function getCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCampaignWithOptions($request, $runtime);
    }

    /**
     * @param GetCaseFileUploadUrlRequest $request GetCaseFileUploadUrlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCaseFileUploadUrlResponse GetCaseFileUploadUrlResponse
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
     * @param GetCaseFileUploadUrlRequest $request GetCaseFileUploadUrlRequest
     *
     * @return GetCaseFileUploadUrlResponse GetCaseFileUploadUrlResponse
     */
    public function getCaseFileUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCaseFileUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetContactFlowRequest $request GetContactFlowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetContactFlowResponse GetContactFlowResponse
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
     * @param GetContactFlowRequest $request GetContactFlowRequest
     *
     * @return GetContactFlowResponse GetContactFlowResponse
     */
    public function getContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContactFlowWithOptions($request, $runtime);
    }

    /**
     * @summary 获取通话文本信息
     *  *
     * @param GetConversationDetailRequest $request GetConversationDetailRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConversationDetailResponse GetConversationDetailResponse
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
     * @summary 获取通话文本信息
     *  *
     * @param GetConversationDetailRequest $request GetConversationDetailRequest
     *
     * @return GetConversationDetailResponse GetConversationDetailResponse
     */
    public function getConversationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConversationDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDataChannelCredentialsRequest $request GetDataChannelCredentialsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataChannelCredentialsResponse GetDataChannelCredentialsResponse
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
     * @param GetDataChannelCredentialsRequest $request GetDataChannelCredentialsRequest
     *
     * @return GetDataChannelCredentialsResponse GetDataChannelCredentialsResponse
     */
    public function getDataChannelCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataChannelCredentialsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取黑名单文件上传地址
     *  *
     * @param GetDoNotCallFileUploadParametersRequest $request GetDoNotCallFileUploadParametersRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoNotCallFileUploadParametersResponse GetDoNotCallFileUploadParametersResponse
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
     * @summary 获取黑名单文件上传地址
     *  *
     * @param GetDoNotCallFileUploadParametersRequest $request GetDoNotCallFileUploadParametersRequest
     *
     * @return GetDoNotCallFileUploadParametersResponse GetDoNotCallFileUploadParametersResponse
     */
    public function getDoNotCallFileUploadParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoNotCallFileUploadParametersWithOptions($request, $runtime);
    }

    /**
     * @param GetDocumentUploadParametersRequest $request GetDocumentUploadParametersRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocumentUploadParametersResponse GetDocumentUploadParametersResponse
     */
    public function getDocumentUploadParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocumentUploadParameters',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocumentUploadParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDocumentUploadParametersRequest $request GetDocumentUploadParametersRequest
     *
     * @return GetDocumentUploadParametersResponse GetDocumentUploadParametersResponse
     */
    public function getDocumentUploadParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentUploadParametersWithOptions($request, $runtime);
    }

    /**
     * @summary 获取早媒体音频
     *  *
     * @param GetEarlyMediaRecordingRequest $request GetEarlyMediaRecordingRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEarlyMediaRecordingResponse GetEarlyMediaRecordingResponse
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
     * @summary 获取早媒体音频
     *  *
     * @param GetEarlyMediaRecordingRequest $request GetEarlyMediaRecordingRequest
     *
     * @return GetEarlyMediaRecordingResponse GetEarlyMediaRecordingResponse
     */
    public function getEarlyMediaRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEarlyMediaRecordingWithOptions($request, $runtime);
    }

    /**
     * @param GetHistoricalCallerReportRequest $request GetHistoricalCallerReportRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHistoricalCallerReportResponse GetHistoricalCallerReportResponse
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
     * @param GetHistoricalCallerReportRequest $request GetHistoricalCallerReportRequest
     *
     * @return GetHistoricalCallerReportResponse GetHistoricalCallerReportResponse
     */
    public function getHistoricalCallerReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoricalCallerReportWithOptions($request, $runtime);
    }

    /**
     * @summary 获取预测式外呼活动历史报表
     *  *
     * @param GetHistoricalCampaignReportRequest $request GetHistoricalCampaignReportRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHistoricalCampaignReportResponse GetHistoricalCampaignReportResponse
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
     * @summary 获取预测式外呼活动历史报表
     *  *
     * @param GetHistoricalCampaignReportRequest $request GetHistoricalCampaignReportRequest
     *
     * @return GetHistoricalCampaignReportResponse GetHistoricalCampaignReportResponse
     */
    public function getHistoricalCampaignReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoricalCampaignReportWithOptions($request, $runtime);
    }

    /**
     * @param GetHistoricalInstanceReportRequest $request GetHistoricalInstanceReportRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHistoricalInstanceReportResponse GetHistoricalInstanceReportResponse
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
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param GetHistoricalInstanceReportRequest $request GetHistoricalInstanceReportRequest
     *
     * @return GetHistoricalInstanceReportResponse GetHistoricalInstanceReportResponse
     */
    public function getHistoricalInstanceReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoricalInstanceReportWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request GetInstanceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
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
     * @param GetInstanceRequest $request GetInstanceRequest
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceTrendingReportRequest $request GetInstanceTrendingReportRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceTrendingReportResponse GetInstanceTrendingReportResponse
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
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param GetInstanceTrendingReportRequest $request GetInstanceTrendingReportRequest
     *
     * @return GetInstanceTrendingReportResponse GetInstanceTrendingReportResponse
     */
    public function getInstanceTrendingReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceTrendingReportWithOptions($request, $runtime);
    }

    /**
     * @param GetLoginDetailsRequest $request GetLoginDetailsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoginDetailsResponse GetLoginDetailsResponse
     */
    public function getLoginDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chatDeviceId)) {
            $query['ChatDeviceId'] = $request->chatDeviceId;
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
     * @param GetLoginDetailsRequest $request GetLoginDetailsRequest
     *
     * @return GetLoginDetailsResponse GetLoginDetailsResponse
     */
    public function getLoginDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetMonoRecordingRequest $request GetMonoRecordingRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMonoRecordingResponse GetMonoRecordingResponse
     */
    public function getMonoRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->expireSeconds)) {
            $query['ExpireSeconds'] = $request->expireSeconds;
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
     * @param GetMonoRecordingRequest $request GetMonoRecordingRequest
     *
     * @return GetMonoRecordingResponse GetMonoRecordingResponse
     */
    public function getMonoRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonoRecordingWithOptions($request, $runtime);
    }

    /**
     * @param GetMultiChannelRecordingRequest $request GetMultiChannelRecordingRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMultiChannelRecordingResponse GetMultiChannelRecordingResponse
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
     * @param GetMultiChannelRecordingRequest $request GetMultiChannelRecordingRequest
     *
     * @return GetMultiChannelRecordingResponse GetMultiChannelRecordingResponse
     */
    public function getMultiChannelRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiChannelRecordingWithOptions($request, $runtime);
    }

    /**
     * @param GetNumberLocationRequest $request GetNumberLocationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNumberLocationResponse GetNumberLocationResponse
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
     * @param GetNumberLocationRequest $request GetNumberLocationRequest
     *
     * @return GetNumberLocationResponse GetNumberLocationResponse
     */
    public function getNumberLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumberLocationWithOptions($request, $runtime);
    }

    /**
     * @summary 获取预测式外呼实时状态
     *  *
     * @param GetRealtimeCampaignStatsRequest $request GetRealtimeCampaignStatsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRealtimeCampaignStatsResponse GetRealtimeCampaignStatsResponse
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
     * @summary 获取预测式外呼实时状态
     *  *
     * @param GetRealtimeCampaignStatsRequest $request GetRealtimeCampaignStatsRequest
     *
     * @return GetRealtimeCampaignStatsResponse GetRealtimeCampaignStatsResponse
     */
    public function getRealtimeCampaignStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeCampaignStatsWithOptions($request, $runtime);
    }

    /**
     * @param GetRealtimeInstanceStatesRequest $request GetRealtimeInstanceStatesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRealtimeInstanceStatesResponse GetRealtimeInstanceStatesResponse
     */
    public function getRealtimeInstanceStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param GetRealtimeInstanceStatesRequest $request GetRealtimeInstanceStatesRequest
     *
     * @return GetRealtimeInstanceStatesResponse GetRealtimeInstanceStatesResponse
     */
    public function getRealtimeInstanceStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeInstanceStatesWithOptions($request, $runtime);
    }

    /**
     * @param GetSchemaRequest $request GetSchemaRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSchemaResponse GetSchemaResponse
     */
    public function getSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSchema',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSchemaRequest $request GetSchemaRequest
     *
     * @return GetSchemaResponse GetSchemaResponse
     */
    public function getSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSchemaWithOptions($request, $runtime);
    }

    /**
     * @summary 查询技能组
     *  *
     * @param GetSkillGroupRequest $request GetSkillGroupRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSkillGroupResponse GetSkillGroupResponse
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
     * @summary 查询技能组
     *  *
     * @param GetSkillGroupRequest $request GetSkillGroupRequest
     *
     * @return GetSkillGroupResponse GetSkillGroupResponse
     */
    public function getSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetTicketRequest $request GetTicketRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTicketResponse GetTicketResponse
     */
    public function getTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTicket',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTicketRequest $request GetTicketRequest
     *
     * @return GetTicketResponse GetTicketResponse
     */
    public function getTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketWithOptions($request, $runtime);
    }

    /**
     * @param GetTicketSummaryReportRequest $request GetTicketSummaryReportRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTicketSummaryReportResponse GetTicketSummaryReportResponse
     */
    public function getTicketSummaryReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assignee)) {
            $query['Assignee'] = $request->assignee;
        }
        if (!Utils::isUnset($request->assigneeType)) {
            $query['AssigneeType'] = $request->assigneeType;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
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
        if (!Utils::isUnset($request->participant)) {
            $query['Participant'] = $request->participant;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTicketSummaryReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTicketSummaryReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTicketSummaryReportRequest $request GetTicketSummaryReportRequest
     *
     * @return GetTicketSummaryReportResponse GetTicketSummaryReportResponse
     */
    public function getTicketSummaryReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketSummaryReportWithOptions($request, $runtime);
    }

    /**
     * @param GetTicketTemplateRequest $request GetTicketTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTicketTemplateResponse GetTicketTemplateResponse
     */
    public function getTicketTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTicketTemplate',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTicketTemplateRequest $request GetTicketTemplateRequest
     *
     * @return GetTicketTemplateResponse GetTicketTemplateResponse
     */
    public function getTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetTurnCredentialsRequest $request GetTurnCredentialsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTurnCredentialsResponse GetTurnCredentialsResponse
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
     * @param GetTurnCredentialsRequest $request GetTurnCredentialsRequest
     *
     * @return GetTurnCredentialsResponse GetTurnCredentialsResponse
     */
    public function getTurnCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTurnCredentialsWithOptions($request, $runtime);
    }

    /**
     * @param GetTurnServerListRequest $request GetTurnServerListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTurnServerListResponse GetTurnServerListResponse
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
     * @param GetTurnServerListRequest $request GetTurnServerListRequest
     *
     * @return GetTurnServerListResponse GetTurnServerListResponse
     */
    public function getTurnServerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTurnServerListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取质检参数
     *  *
     * @param GetUploadAudioDataParamsRequest $request GetUploadAudioDataParamsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadAudioDataParamsResponse GetUploadAudioDataParamsResponse
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
     * @summary 获取质检参数
     *  *
     * @param GetUploadAudioDataParamsRequest $request GetUploadAudioDataParamsRequest
     *
     * @return GetUploadAudioDataParamsResponse GetUploadAudioDataParamsResponse
     */
    public function getUploadAudioDataParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadAudioDataParamsWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request GetUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
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
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @summary 获取视频
     *  *
     * @param GetVideoRequest $request GetVideoRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoResponse GetVideoResponse
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
     * @summary 获取视频
     *  *
     * @param GetVideoRequest $request GetVideoRequest
     *
     * @return GetVideoResponse GetVideoResponse
     */
    public function getVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoWithOptions($request, $runtime);
    }

    /**
     * @param GetVisitorLoginDetailsRequest $request GetVisitorLoginDetailsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVisitorLoginDetailsResponse GetVisitorLoginDetailsResponse
     */
    public function getVisitorLoginDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chatDeviceId)) {
            $query['ChatDeviceId'] = $request->chatDeviceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->visitorId)) {
            $query['VisitorId'] = $request->visitorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVisitorLoginDetails',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVisitorLoginDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVisitorLoginDetailsRequest $request GetVisitorLoginDetailsRequest
     *
     * @return GetVisitorLoginDetailsResponse GetVisitorLoginDetailsResponse
     */
    public function getVisitorLoginDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVisitorLoginDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetVoicemailRecordingRequest $request GetVoicemailRecordingRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVoicemailRecordingResponse GetVoicemailRecordingResponse
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
     * @param GetVoicemailRecordingRequest $request GetVoicemailRecordingRequest
     *
     * @return GetVoicemailRecordingResponse GetVoicemailRecordingResponse
     */
    public function getVoicemailRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVoicemailRecordingWithOptions($request, $runtime);
    }

    /**
     * @param HoldCallRequest $request HoldCallRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return HoldCallResponse HoldCallResponse
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
     * @param HoldCallRequest $request HoldCallRequest
     *
     * @return HoldCallResponse HoldCallResponse
     */
    public function holdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->holdCallWithOptions($request, $runtime);
    }

    /**
     * @param ImportAdminsRequest $request ImportAdminsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportAdminsResponse ImportAdminsResponse
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
     * @param ImportAdminsRequest $request ImportAdminsRequest
     *
     * @return ImportAdminsResponse ImportAdminsResponse
     */
    public function importAdmins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAdminsWithOptions($request, $runtime);
    }

    /**
     * @param ImportCorpNumbersRequest $request ImportCorpNumbersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportCorpNumbersResponse ImportCorpNumbersResponse
     */
    public function importCorpNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->corpName)) {
            $query['CorpName'] = $request->corpName;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportCorpNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportCorpNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportCorpNumbersRequest $request ImportCorpNumbersRequest
     *
     * @return ImportCorpNumbersResponse ImportCorpNumbersResponse
     */
    public function importCorpNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCorpNumbersWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ImportCustomCallTagging is deprecated, please use CCC::2020-07-01::ImportCustomCallTaggings instead
     *  *
     * @summary 文件导入呼入控制号码
     *  *
     * Deprecated
     *
     * @param ImportCustomCallTaggingRequest $request ImportCustomCallTaggingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportCustomCallTaggingResponse ImportCustomCallTaggingResponse
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
     * @deprecated openAPI ImportCustomCallTagging is deprecated, please use CCC::2020-07-01::ImportCustomCallTaggings instead
     *  *
     * @summary 文件导入呼入控制号码
     *  *
     * Deprecated
     *
     * @param ImportCustomCallTaggingRequest $request ImportCustomCallTaggingRequest
     *
     * @return ImportCustomCallTaggingResponse ImportCustomCallTaggingResponse
     */
    public function importCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCustomCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @summary 添加黑名单号码
     *  *
     * @param ImportDoNotCallNumbersRequest $request ImportDoNotCallNumbersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportDoNotCallNumbersResponse ImportDoNotCallNumbersResponse
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
     * @summary 添加黑名单号码
     *  *
     * @param ImportDoNotCallNumbersRequest $request ImportDoNotCallNumbersRequest
     *
     * @return ImportDoNotCallNumbersResponse ImportDoNotCallNumbersResponse
     */
    public function importDoNotCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDoNotCallNumbersWithOptions($request, $runtime);
    }

    /**
     * @param ImportDocumentsRequest $request ImportDocumentsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportDocumentsResponse ImportDocumentsResponse
     */
    public function importDocumentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ossFileKey)) {
            $body['OssFileKey'] = $request->ossFileKey;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportDocuments',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportDocumentsRequest $request ImportDocumentsRequest
     *
     * @return ImportDocumentsResponse ImportDocumentsResponse
     */
    public function importDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDocumentsWithOptions($request, $runtime);
    }

    /**
     * @param InitiateAttendedTransferRequest $request InitiateAttendedTransferRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return InitiateAttendedTransferResponse InitiateAttendedTransferResponse
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
        if (!Utils::isUnset($request->queuingOverflowThreshold)) {
            $query['QueuingOverflowThreshold'] = $request->queuingOverflowThreshold;
        }
        if (!Utils::isUnset($request->queuingTimeoutSeconds)) {
            $query['QueuingTimeoutSeconds'] = $request->queuingTimeoutSeconds;
        }
        if (!Utils::isUnset($request->routingType)) {
            $query['RoutingType'] = $request->routingType;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        if (!Utils::isUnset($request->strategyParams)) {
            $query['StrategyParams'] = $request->strategyParams;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->timeoutSeconds)) {
            $query['TimeoutSeconds'] = $request->timeoutSeconds;
        }
        if (!Utils::isUnset($request->transferee)) {
            $query['Transferee'] = $request->transferee;
        }
        if (!Utils::isUnset($request->transfereeType)) {
            $query['TransfereeType'] = $request->transfereeType;
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
     * @param InitiateAttendedTransferRequest $request InitiateAttendedTransferRequest
     *
     * @return InitiateAttendedTransferResponse InitiateAttendedTransferResponse
     */
    public function initiateAttendedTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initiateAttendedTransferWithOptions($request, $runtime);
    }

    /**
     * @param InterceptCallRequest $request InterceptCallRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return InterceptCallResponse InterceptCallResponse
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
     * @param InterceptCallRequest $request InterceptCallRequest
     *
     * @return InterceptCallResponse InterceptCallResponse
     */
    public function interceptCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->interceptCallWithOptions($request, $runtime);
    }

    /**
     * @param LaunchAuthenticationRequest $request LaunchAuthenticationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return LaunchAuthenticationResponse LaunchAuthenticationResponse
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
     * @param LaunchAuthenticationRequest $request LaunchAuthenticationRequest
     *
     * @return LaunchAuthenticationResponse LaunchAuthenticationResponse
     */
    public function launchAuthentication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchAuthenticationWithOptions($request, $runtime);
    }

    /**
     * @param LaunchSurveyRequest $request LaunchSurveyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return LaunchSurveyResponse LaunchSurveyResponse
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
        if (!Utils::isUnset($request->surveyTemplateId)) {
            $query['SurveyTemplateId'] = $request->surveyTemplateId;
        }
        if (!Utils::isUnset($request->surveyTemplateVariables)) {
            $query['SurveyTemplateVariables'] = $request->surveyTemplateVariables;
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
     * @param LaunchSurveyRequest $request LaunchSurveyRequest
     *
     * @return LaunchSurveyResponse LaunchSurveyResponse
     */
    public function launchSurvey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchSurveyWithOptions($request, $runtime);
    }

    /**
     * @param ListAgentStateLogsRequest $request ListAgentStateLogsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAgentStateLogsResponse ListAgentStateLogsResponse
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
     * @param ListAgentStateLogsRequest $request ListAgentStateLogsRequest
     *
     * @return ListAgentStateLogsResponse ListAgentStateLogsResponse
     */
    public function listAgentStateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentStateLogsWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListAgentStates is deprecated, please use CCC::2020-07-01::ListRealtimeAgentStates instead
     *  *
     * @summary ListAgentStates for ACC
     *  *
     * Deprecated
     *
     * @param ListAgentStatesRequest $request ListAgentStatesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAgentStatesResponse ListAgentStatesResponse
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
     * @deprecated openAPI ListAgentStates is deprecated, please use CCC::2020-07-01::ListRealtimeAgentStates instead
     *  *
     * @summary ListAgentStates for ACC
     *  *
     * Deprecated
     *
     * @param ListAgentStatesRequest $request ListAgentStatesRequest
     *
     * @return ListAgentStatesResponse ListAgentStatesResponse
     */
    public function listAgentStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentStatesWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListAgentSummaryReportsSinceMidnight is deprecated, please use CCC::2020-07-01::ListHistoricalAgentReport instead
     *  *
     * @summary ListAgentSummaryReportsSinceMidnight for acc
     *  *
     * Deprecated
     *
     * @param ListAgentSummaryReportsSinceMidnightRequest $request ListAgentSummaryReportsSinceMidnightRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAgentSummaryReportsSinceMidnightResponse ListAgentSummaryReportsSinceMidnightResponse
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
     * @deprecated openAPI ListAgentSummaryReportsSinceMidnight is deprecated, please use CCC::2020-07-01::ListHistoricalAgentReport instead
     *  *
     * @summary ListAgentSummaryReportsSinceMidnight for acc
     *  *
     * Deprecated
     *
     * @param ListAgentSummaryReportsSinceMidnightRequest $request ListAgentSummaryReportsSinceMidnightRequest
     *
     * @return ListAgentSummaryReportsSinceMidnightResponse ListAgentSummaryReportsSinceMidnightResponse
     */
    public function listAgentSummaryReportsSinceMidnight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentSummaryReportsSinceMidnightWithOptions($request, $runtime);
    }

    /**
     * @summary 获取预测式外呼呼叫记录
     *  *
     * @param ListAttemptsRequest $request ListAttemptsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAttemptsResponse ListAttemptsResponse
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
     * @summary 获取预测式外呼呼叫记录
     *  *
     * @param ListAttemptsRequest $request ListAttemptsRequest
     *
     * @return ListAttemptsResponse ListAttemptsResponse
     */
    public function listAttempts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAttemptsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取音频文件列表
     *  *
     * @param ListAudioFilesRequest $request ListAudioFilesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAudioFilesResponse ListAudioFilesResponse
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->usage)) {
            $query['Usage'] = $request->usage;
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
     * @summary 获取音频文件列表
     *  *
     * @param ListAudioFilesRequest $request ListAudioFilesRequest
     *
     * @return ListAudioFilesResponse ListAudioFilesResponse
     */
    public function listAudioFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAudioFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑呼入控制号码
     *  *
     * @param ListBlacklistCallTaggingsRequest $request ListBlacklistCallTaggingsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBlacklistCallTaggingsResponse ListBlacklistCallTaggingsResponse
     */
    public function listBlacklistCallTaggingsWithOptions($request, $runtime)
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
            'action'      => 'ListBlacklistCallTaggings',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBlacklistCallTaggingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑呼入控制号码
     *  *
     * @param ListBlacklistCallTaggingsRequest $request ListBlacklistCallTaggingsRequest
     *
     * @return ListBlacklistCallTaggingsResponse ListBlacklistCallTaggingsResponse
     */
    public function listBlacklistCallTaggings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBlacklistCallTaggingsWithOptions($request, $runtime);
    }

    /**
     * @param ListBriefSkillGroupsRequest $request ListBriefSkillGroupsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBriefSkillGroupsResponse ListBriefSkillGroupsResponse
     */
    public function listBriefSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param ListBriefSkillGroupsRequest $request ListBriefSkillGroupsRequest
     *
     * @return ListBriefSkillGroupsResponse ListBriefSkillGroupsResponse
     */
    public function listBriefSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBriefSkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListCallDetailRecordsRequest $request ListCallDetailRecordsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCallDetailRecordsResponse ListCallDetailRecordsResponse
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
     * @param ListCallDetailRecordsRequest $request ListCallDetailRecordsRequest
     *
     * @return ListCallDetailRecordsResponse ListCallDetailRecordsResponse
     */
    public function listCallDetailRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallDetailRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 列出号码标签
     *  *
     * @param ListCallTagsRequest $request ListCallTagsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCallTagsResponse ListCallTagsResponse
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
     * @summary 列出号码标签
     *  *
     * @param ListCallTagsRequest $request ListCallTagsRequest
     *
     * @return ListCallTagsResponse ListCallTagsResponse
     */
    public function listCallTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallTagsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取预测式外呼活动趋势报表
     *  *
     * @param ListCampaignTrendingReportRequest $request ListCampaignTrendingReportRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCampaignTrendingReportResponse ListCampaignTrendingReportResponse
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
     * @summary 获取预测式外呼活动趋势报表
     *  *
     * @param ListCampaignTrendingReportRequest $request ListCampaignTrendingReportRequest
     *
     * @return ListCampaignTrendingReportResponse ListCampaignTrendingReportResponse
     */
    public function listCampaignTrendingReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCampaignTrendingReportWithOptions($request, $runtime);
    }

    /**
     * @summary 获取预测式外呼活动列表
     *  *
     * @param ListCampaignsRequest $request ListCampaignsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCampaignsResponse ListCampaignsResponse
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
     * @summary 获取预测式外呼活动列表
     *  *
     * @param ListCampaignsRequest $request ListCampaignsRequest
     *
     * @return ListCampaignsResponse ListCampaignsResponse
     */
    public function listCampaigns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCampaignsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取预测式外呼活动的联系人呼叫详情
     *  *
     * @param ListCasesRequest $request ListCasesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCasesResponse ListCasesResponse
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
     * @summary 获取预测式外呼活动的联系人呼叫详情
     *  *
     * @param ListCasesRequest $request ListCasesRequest
     *
     * @return ListCasesResponse ListCasesResponse
     */
    public function listCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCasesWithOptions($request, $runtime);
    }

    /**
     * @param ListCategoriesRequest $request ListCategoriesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCategoriesResponse ListCategoriesResponse
     */
    public function listCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCategories',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCategoriesRequest $request ListCategoriesRequest
     *
     * @return ListCategoriesResponse ListCategoriesResponse
     */
    public function listCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListCommonTicketFieldsRequest $request ListCommonTicketFieldsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCommonTicketFieldsResponse ListCommonTicketFieldsResponse
     */
    public function listCommonTicketFieldsWithOptions($request, $runtime)
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
            'action'      => 'ListCommonTicketFields',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCommonTicketFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCommonTicketFieldsRequest $request ListCommonTicketFieldsRequest
     *
     * @return ListCommonTicketFieldsResponse ListCommonTicketFieldsResponse
     */
    public function listCommonTicketFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommonTicketFieldsWithOptions($request, $runtime);
    }

    /**
     * @param ListConfigItemsRequest $request ListConfigItemsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConfigItemsResponse ListConfigItemsResponse
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
     * @param ListConfigItemsRequest $request ListConfigItemsRequest
     *
     * @return ListConfigItemsResponse ListConfigItemsResponse
     */
    public function listConfigItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigItemsWithOptions($request, $runtime);
    }

    /**
     * @param ListContactFlowsRequest $request ListContactFlowsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListContactFlowsResponse ListContactFlowsResponse
     */
    public function listContactFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
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
     * @param ListContactFlowsRequest $request ListContactFlowsRequest
     *
     * @return ListContactFlowsResponse ListContactFlowsResponse
     */
    public function listContactFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContactFlowsWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListCustomCallTagging is deprecated, please use CCC::2020-07-01::ListCustomCallTaggings instead
     *  *
     * @summary 列出呼入控制号码
     *  *
     * Deprecated
     *
     * @param ListCustomCallTaggingRequest $request ListCustomCallTaggingRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomCallTaggingResponse ListCustomCallTaggingResponse
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
     * @deprecated openAPI ListCustomCallTagging is deprecated, please use CCC::2020-07-01::ListCustomCallTaggings instead
     *  *
     * @summary 列出呼入控制号码
     *  *
     * Deprecated
     *
     * @param ListCustomCallTaggingRequest $request ListCustomCallTaggingRequest
     *
     * @return ListCustomCallTaggingResponse ListCustomCallTaggingResponse
     */
    public function listCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @param ListDevicesRequest $request ListDevicesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDevicesResponse ListDevicesResponse
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
     * @param ListDevicesRequest $request ListDevicesRequest
     *
     * @return ListDevicesResponse ListDevicesResponse
     */
    public function listDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询黑名单号码
     *  *
     * @param ListDoNotCallNumbersRequest $request ListDoNotCallNumbersRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoNotCallNumbersResponse ListDoNotCallNumbersResponse
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
     * @summary 查询黑名单号码
     *  *
     * @param ListDoNotCallNumbersRequest $request ListDoNotCallNumbersRequest
     *
     * @return ListDoNotCallNumbersResponse ListDoNotCallNumbersResponse
     */
    public function listDoNotCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoNotCallNumbersWithOptions($request, $runtime);
    }

    /**
     * @param ListDocumentsRequest $tmpReq  ListDocumentsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDocumentsResponse ListDocumentsResponse
     */
    public function listDocumentsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDocumentsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sorts)) {
            $request->sortsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sorts, 'Sorts', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $body['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        if (!Utils::isUnset($request->searchPattern)) {
            $body['SearchPattern'] = $request->searchPattern;
        }
        if (!Utils::isUnset($request->sortsShrink)) {
            $body['Sorts'] = $request->sortsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDocuments',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDocumentsRequest $request ListDocumentsRequest
     *
     * @return ListDocumentsResponse ListDocumentsResponse
     */
    public function listDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocumentsWithOptions($request, $runtime);
    }

    /**
     * @param ListHistoricalAgentReportRequest $request ListHistoricalAgentReportRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHistoricalAgentReportResponse ListHistoricalAgentReportResponse
     */
    public function listHistoricalAgentReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param ListHistoricalAgentReportRequest $request ListHistoricalAgentReportRequest
     *
     * @return ListHistoricalAgentReportResponse ListHistoricalAgentReportResponse
     */
    public function listHistoricalAgentReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHistoricalAgentReportWithOptions($request, $runtime);
    }

    /**
     * @summary ListHistoricalAgentSkillGroupReport
     *  *
     * @param ListHistoricalAgentSkillGroupReportRequest $request ListHistoricalAgentSkillGroupReportRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHistoricalAgentSkillGroupReportResponse ListHistoricalAgentSkillGroupReportResponse
     */
    public function listHistoricalAgentSkillGroupReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
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
            'action'      => 'ListHistoricalAgentSkillGroupReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHistoricalAgentSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListHistoricalAgentSkillGroupReport
     *  *
     * @param ListHistoricalAgentSkillGroupReportRequest $request ListHistoricalAgentSkillGroupReportRequest
     *
     * @return ListHistoricalAgentSkillGroupReportResponse ListHistoricalAgentSkillGroupReportResponse
     */
    public function listHistoricalAgentSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHistoricalAgentSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param ListHistoricalSkillGroupReportRequest $request ListHistoricalSkillGroupReportRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHistoricalSkillGroupReportResponse ListHistoricalSkillGroupReportResponse
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
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param ListHistoricalSkillGroupReportRequest $request ListHistoricalSkillGroupReportRequest
     *
     * @return ListHistoricalSkillGroupReportResponse ListHistoricalSkillGroupReportResponse
     */
    public function listHistoricalSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHistoricalSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
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
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesOfUserRequest $request ListInstancesOfUserRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesOfUserResponse ListInstancesOfUserResponse
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
     * @param ListInstancesOfUserRequest $request ListInstancesOfUserRequest
     *
     * @return ListInstancesOfUserResponse ListInstancesOfUserResponse
     */
    public function listInstancesOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesOfUserWithOptions($request, $runtime);
    }

    /**
     * @param ListIntervalAgentReportRequest $request ListIntervalAgentReportRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntervalAgentReportResponse ListIntervalAgentReportResponse
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
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param ListIntervalAgentReportRequest $request ListIntervalAgentReportRequest
     *
     * @return ListIntervalAgentReportResponse ListIntervalAgentReportResponse
     */
    public function listIntervalAgentReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalAgentReportWithOptions($request, $runtime);
    }

    /**
     * @summary ListIntervalAgentSkillGroupReport
     *  *
     * @param ListIntervalAgentSkillGroupReportRequest $request ListIntervalAgentSkillGroupReportRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntervalAgentSkillGroupReportResponse ListIntervalAgentSkillGroupReportResponse
     */
    public function listIntervalAgentSkillGroupReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIntervalAgentSkillGroupReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntervalAgentSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListIntervalAgentSkillGroupReport
     *  *
     * @param ListIntervalAgentSkillGroupReportRequest $request ListIntervalAgentSkillGroupReportRequest
     *
     * @return ListIntervalAgentSkillGroupReportResponse ListIntervalAgentSkillGroupReportResponse
     */
    public function listIntervalAgentSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalAgentSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param ListIntervalInstanceReportRequest $request ListIntervalInstanceReportRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntervalInstanceReportResponse ListIntervalInstanceReportResponse
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
     * @param ListIntervalInstanceReportRequest $request ListIntervalInstanceReportRequest
     *
     * @return ListIntervalInstanceReportResponse ListIntervalInstanceReportResponse
     */
    public function listIntervalInstanceReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalInstanceReportWithOptions($request, $runtime);
    }

    /**
     * @param ListIntervalSkillGroupReportRequest $request ListIntervalSkillGroupReportRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntervalSkillGroupReportResponse ListIntervalSkillGroupReportResponse
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
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param ListIntervalSkillGroupReportRequest $request ListIntervalSkillGroupReportRequest
     *
     * @return ListIntervalSkillGroupReportResponse ListIntervalSkillGroupReportResponse
     */
    public function listIntervalSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param ListIvrTrackingDetailsRequest $request ListIvrTrackingDetailsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIvrTrackingDetailsResponse ListIvrTrackingDetailsResponse
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
     * @param ListIvrTrackingDetailsRequest $request ListIvrTrackingDetailsRequest
     *
     * @return ListIvrTrackingDetailsResponse ListIvrTrackingDetailsResponse
     */
    public function listIvrTrackingDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIvrTrackingDetailsWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListLegacyAgentEventLogs is deprecated, please use CCC::2020-07-01::ListAgentStateLogs instead
     *  *
     * @summary ListLegacyAgentEventLogs
     *  *
     * Deprecated
     *
     * @param ListLegacyAgentEventLogsRequest $request ListLegacyAgentEventLogsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLegacyAgentEventLogsResponse ListLegacyAgentEventLogsResponse
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
     * @deprecated openAPI ListLegacyAgentEventLogs is deprecated, please use CCC::2020-07-01::ListAgentStateLogs instead
     *  *
     * @summary ListLegacyAgentEventLogs
     *  *
     * Deprecated
     *
     * @param ListLegacyAgentEventLogsRequest $request ListLegacyAgentEventLogsRequest
     *
     * @return ListLegacyAgentEventLogsResponse ListLegacyAgentEventLogsResponse
     */
    public function listLegacyAgentEventLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyAgentEventLogsWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListLegacyAgentStatusLogs is deprecated, please use CCC::2020-07-01::ListAgentStateLogs instead
     *  *
     * @summary ListLegacyAgentStatusLogs
     *  *
     * Deprecated
     *
     * @param ListLegacyAgentStatusLogsRequest $request ListLegacyAgentStatusLogsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLegacyAgentStatusLogsResponse ListLegacyAgentStatusLogsResponse
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
     * @deprecated openAPI ListLegacyAgentStatusLogs is deprecated, please use CCC::2020-07-01::ListAgentStateLogs instead
     *  *
     * @summary ListLegacyAgentStatusLogs
     *  *
     * Deprecated
     *
     * @param ListLegacyAgentStatusLogsRequest $request ListLegacyAgentStatusLogsRequest
     *
     * @return ListLegacyAgentStatusLogsResponse ListLegacyAgentStatusLogsResponse
     */
    public function listLegacyAgentStatusLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyAgentStatusLogsWithOptions($request, $runtime);
    }

    /**
     * @summary ListLegacyAppraiseLogs
     *  *
     * @param ListLegacyAppraiseLogsRequest $request ListLegacyAppraiseLogsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLegacyAppraiseLogsResponse ListLegacyAppraiseLogsResponse
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
     * @summary ListLegacyAppraiseLogs
     *  *
     * @param ListLegacyAppraiseLogsRequest $request ListLegacyAppraiseLogsRequest
     *
     * @return ListLegacyAppraiseLogsResponse ListLegacyAppraiseLogsResponse
     */
    public function listLegacyAppraiseLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyAppraiseLogsWithOptions($request, $runtime);
    }

    /**
     * @summary ListLegacyQueueEventLogs
     *  *
     * @param ListLegacyQueueEventLogsRequest $request ListLegacyQueueEventLogsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLegacyQueueEventLogsResponse ListLegacyQueueEventLogsResponse
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
     * @summary ListLegacyQueueEventLogs
     *  *
     * @param ListLegacyQueueEventLogsRequest $request ListLegacyQueueEventLogsRequest
     *
     * @return ListLegacyQueueEventLogsResponse ListLegacyQueueEventLogsResponse
     */
    public function listLegacyQueueEventLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyQueueEventLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListMonoRecordingsRequest $request ListMonoRecordingsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMonoRecordingsResponse ListMonoRecordingsResponse
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
     * @param ListMonoRecordingsRequest $request ListMonoRecordingsRequest
     *
     * @return ListMonoRecordingsResponse ListMonoRecordingsResponse
     */
    public function listMonoRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMonoRecordingsWithOptions($request, $runtime);
    }

    /**
     * @param ListMultiChannelRecordingsRequest $request ListMultiChannelRecordingsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMultiChannelRecordingsResponse ListMultiChannelRecordingsResponse
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
     * @param ListMultiChannelRecordingsRequest $request ListMultiChannelRecordingsRequest
     *
     * @return ListMultiChannelRecordingsResponse ListMultiChannelRecordingsResponse
     */
    public function listMultiChannelRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiChannelRecordingsWithOptions($request, $runtime);
    }

    /**
     * @param ListOutboundNumbersOfUserRequest $request ListOutboundNumbersOfUserRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOutboundNumbersOfUserResponse ListOutboundNumbersOfUserResponse
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
     * @param ListOutboundNumbersOfUserRequest $request ListOutboundNumbersOfUserRequest
     *
     * @return ListOutboundNumbersOfUserResponse ListOutboundNumbersOfUserResponse
     */
    public function listOutboundNumbersOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundNumbersOfUserWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonalNumbersOfUserRequest $request ListPersonalNumbersOfUserRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPersonalNumbersOfUserResponse ListPersonalNumbersOfUserResponse
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
     * @param ListPersonalNumbersOfUserRequest $request ListPersonalNumbersOfUserRequest
     *
     * @return ListPersonalNumbersOfUserResponse ListPersonalNumbersOfUserResponse
     */
    public function listPersonalNumbersOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonalNumbersOfUserWithOptions($request, $runtime);
    }

    /**
     * @summary 获取号码列表
     *  *
     * @param ListPhoneNumbersRequest $request ListPhoneNumbersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPhoneNumbersResponse ListPhoneNumbersResponse
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
     * @summary 获取号码列表
     *  *
     * @param ListPhoneNumbersRequest $request ListPhoneNumbersRequest
     *
     * @return ListPhoneNumbersResponse ListPhoneNumbersResponse
     */
    public function listPhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * @param ListPhoneNumbersOfSkillGroupRequest $request ListPhoneNumbersOfSkillGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPhoneNumbersOfSkillGroupResponse ListPhoneNumbersOfSkillGroupResponse
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
     * @param ListPhoneNumbersOfSkillGroupRequest $request ListPhoneNumbersOfSkillGroupRequest
     *
     * @return ListPhoneNumbersOfSkillGroupResponse ListPhoneNumbersOfSkillGroupResponse
     */
    public function listPhoneNumbersOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhoneNumbersOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListPrivilegesOfUserRequest $request ListPrivilegesOfUserRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrivilegesOfUserResponse ListPrivilegesOfUserResponse
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
     * @param ListPrivilegesOfUserRequest $request ListPrivilegesOfUserRequest
     *
     * @return ListPrivilegesOfUserResponse ListPrivilegesOfUserResponse
     */
    public function listPrivilegesOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivilegesOfUserWithOptions($request, $runtime);
    }

    /**
     * @param ListRamUsersRequest $request ListRamUsersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRamUsersResponse ListRamUsersResponse
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
     * @param ListRamUsersRequest $request ListRamUsersRequest
     *
     * @return ListRamUsersResponse ListRamUsersResponse
     */
    public function listRamUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRamUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListRealtimeAgentStatesRequest $request ListRealtimeAgentStatesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRealtimeAgentStatesResponse ListRealtimeAgentStatesResponse
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
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param ListRealtimeAgentStatesRequest $request ListRealtimeAgentStatesRequest
     *
     * @return ListRealtimeAgentStatesResponse ListRealtimeAgentStatesResponse
     */
    public function listRealtimeAgentStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeAgentStatesWithOptions($request, $runtime);
    }

    /**
     * @param ListRealtimeSkillGroupStatesRequest $request ListRealtimeSkillGroupStatesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRealtimeSkillGroupStatesResponse ListRealtimeSkillGroupStatesResponse
     */
    public function listRealtimeSkillGroupStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param ListRealtimeSkillGroupStatesRequest $request ListRealtimeSkillGroupStatesRequest
     *
     * @return ListRealtimeSkillGroupStatesResponse ListRealtimeSkillGroupStatesResponse
     */
    public function listRealtimeSkillGroupStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeSkillGroupStatesWithOptions($request, $runtime);
    }

    /**
     * @param ListRecentCallDetailRecordsRequest $request ListRecentCallDetailRecordsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRecentCallDetailRecordsResponse ListRecentCallDetailRecordsResponse
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
     * @param ListRecentCallDetailRecordsRequest $request ListRecentCallDetailRecordsRequest
     *
     * @return ListRecentCallDetailRecordsResponse ListRecentCallDetailRecordsResponse
     */
    public function listRecentCallDetailRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecentCallDetailRecordsWithOptions($request, $runtime);
    }

    /**
     * @param ListRolesRequest $request ListRolesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRolesResponse ListRolesResponse
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
     * @param ListRolesRequest $request ListRolesRequest
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListSkillGroupStates is deprecated, please use CCC::2020-07-01::ListRealtimeSkillGroupStates instead
     *  *
     * @summary ListSkillGroupStates for acc
     *  *
     * Deprecated
     *
     * @param ListSkillGroupStatesRequest $request ListSkillGroupStatesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSkillGroupStatesResponse ListSkillGroupStatesResponse
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
     * @deprecated openAPI ListSkillGroupStates is deprecated, please use CCC::2020-07-01::ListRealtimeSkillGroupStates instead
     *  *
     * @summary ListSkillGroupStates for acc
     *  *
     * Deprecated
     *
     * @param ListSkillGroupStatesRequest $request ListSkillGroupStatesRequest
     *
     * @return ListSkillGroupStatesResponse ListSkillGroupStatesResponse
     */
    public function listSkillGroupStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupStatesWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListSkillGroupSummaryReportsSinceMidnight is deprecated, please use CCC::2020-07-01::ListHistoricalSkillGroupReport instead
     *  *
     * @summary ListSkillGroupSummaryReportsSinceMidnight for acc
     *  *
     * Deprecated
     *
     * @param ListSkillGroupSummaryReportsSinceMidnightRequest $request ListSkillGroupSummaryReportsSinceMidnightRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSkillGroupSummaryReportsSinceMidnightResponse ListSkillGroupSummaryReportsSinceMidnightResponse
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
     * @deprecated openAPI ListSkillGroupSummaryReportsSinceMidnight is deprecated, please use CCC::2020-07-01::ListHistoricalSkillGroupReport instead
     *  *
     * @summary ListSkillGroupSummaryReportsSinceMidnight for acc
     *  *
     * Deprecated
     *
     * @param ListSkillGroupSummaryReportsSinceMidnightRequest $request ListSkillGroupSummaryReportsSinceMidnightRequest
     *
     * @return ListSkillGroupSummaryReportsSinceMidnightResponse ListSkillGroupSummaryReportsSinceMidnightResponse
     */
    public function listSkillGroupSummaryReportsSinceMidnight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupSummaryReportsSinceMidnightWithOptions($request, $runtime);
    }

    /**
     * @param ListSkillGroupsRequest $request ListSkillGroupsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSkillGroupsResponse ListSkillGroupsResponse
     */
    public function listSkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param ListSkillGroupsRequest $request ListSkillGroupsRequest
     *
     * @return ListSkillGroupsResponse ListSkillGroupsResponse
     */
    public function listSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListSkillLevelsOfUserRequest $request ListSkillLevelsOfUserRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSkillLevelsOfUserResponse ListSkillLevelsOfUserResponse
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
     * @param ListSkillLevelsOfUserRequest $request ListSkillLevelsOfUserRequest
     *
     * @return ListSkillLevelsOfUserResponse ListSkillLevelsOfUserResponse
     */
    public function listSkillLevelsOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillLevelsOfUserWithOptions($request, $runtime);
    }

    /**
     * @param ListTicketTasksRequest $request ListTicketTasksRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTicketTasksResponse ListTicketTasksResponse
     */
    public function listTicketTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTicketTasks',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTicketTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTicketTasksRequest $request ListTicketTasksRequest
     *
     * @return ListTicketTasksResponse ListTicketTasksResponse
     */
    public function listTicketTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTicketTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListTicketTemplatesRequest $request ListTicketTemplatesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTicketTemplatesResponse ListTicketTemplatesResponse
     */
    public function listTicketTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
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
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTicketTemplates',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTicketTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTicketTemplatesRequest $request ListTicketTemplatesRequest
     *
     * @return ListTicketTemplatesResponse ListTicketTemplatesResponse
     */
    public function listTicketTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTicketTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListTicketsRequest $request ListTicketsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTicketsResponse ListTicketsResponse
     */
    public function listTicketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assignee)) {
            $query['Assignee'] = $request->assignee;
        }
        if (!Utils::isUnset($request->assigneeType)) {
            $query['AssigneeType'] = $request->assigneeType;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->customerId)) {
            $query['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobIdList)) {
            $query['JobIdList'] = $request->jobIdList;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->participant)) {
            $query['Participant'] = $request->participant;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTickets',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTicketsRequest $request ListTicketsRequest
     *
     * @return ListTicketsResponse ListTicketsResponse
     */
    public function listTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTicketsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取未分配号码列表
     *  *
     * @param ListUnassignedNumbersRequest $request ListUnassignedNumbersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUnassignedNumbersResponse ListUnassignedNumbersResponse
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
     * @summary 获取未分配号码列表
     *  *
     * @param ListUnassignedNumbersRequest $request ListUnassignedNumbersRequest
     *
     * @return ListUnassignedNumbersResponse ListUnassignedNumbersResponse
     */
    public function listUnassignedNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUnassignedNumbersWithOptions($request, $runtime);
    }

    /**
     * @param ListUserLevelsOfSkillGroupRequest $request ListUserLevelsOfSkillGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserLevelsOfSkillGroupResponse ListUserLevelsOfSkillGroupResponse
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
     * @param ListUserLevelsOfSkillGroupRequest $request ListUserLevelsOfSkillGroupRequest
     *
     * @return ListUserLevelsOfSkillGroupResponse ListUserLevelsOfSkillGroupResponse
     */
    public function listUserLevelsOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserLevelsOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
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
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
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
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListVoicemailsRequest $request ListVoicemailsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVoicemailsResponse ListVoicemailsResponse
     */
    public function listVoicemailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVoicemails',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVoicemailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVoicemailsRequest $request ListVoicemailsRequest
     *
     * @return ListVoicemailsResponse ListVoicemailsResponse
     */
    public function listVoicemails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoicemailsWithOptions($request, $runtime);
    }

    /**
     * @param MakeCallRequest $request MakeCallRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return MakeCallResponse MakeCallResponse
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
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
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
     * @param MakeCallRequest $request MakeCallRequest
     *
     * @return MakeCallResponse MakeCallResponse
     */
    public function makeCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeCallWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAudioFileRequest $request ModifyAudioFileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAudioFileResponse ModifyAudioFileResponse
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
        if (!Utils::isUnset($request->usage)) {
            $query['Usage'] = $request->usage;
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
     * @param ModifyAudioFileRequest $request ModifyAudioFileRequest
     *
     * @return ModifyAudioFileResponse ModifyAudioFileResponse
     */
    public function modifyAudioFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAudioFileWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑呼入控制号码
     *  *
     * @param ModifyCustomCallTaggingRequest $request ModifyCustomCallTaggingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCustomCallTaggingResponse ModifyCustomCallTaggingResponse
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
     * @summary 编辑呼入控制号码
     *  *
     * @param ModifyCustomCallTaggingRequest $request ModifyCustomCallTaggingRequest
     *
     * @return ModifyCustomCallTaggingResponse ModifyCustomCallTaggingResponse
     */
    public function modifyCustomCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceRequest $request ModifyInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceResponse ModifyInstanceResponse
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
     * @param ModifyInstanceRequest $request ModifyInstanceRequest
     *
     * @return ModifyInstanceResponse ModifyInstanceResponse
     */
    public function modifyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPhoneNumberRequest $request ModifyPhoneNumberRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPhoneNumberResponse ModifyPhoneNumberResponse
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
     * @param ModifyPhoneNumberRequest $request ModifyPhoneNumberRequest
     *
     * @return ModifyPhoneNumberResponse ModifyPhoneNumberResponse
     */
    public function modifyPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * @param ModifySkillGroupRequest $request ModifySkillGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySkillGroupResponse ModifySkillGroupResponse
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
     * @param ModifySkillGroupRequest $request ModifySkillGroupRequest
     *
     * @return ModifySkillGroupResponse ModifySkillGroupResponse
     */
    public function modifySkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifySkillLevelsOfUserRequest $request ModifySkillLevelsOfUserRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySkillLevelsOfUserResponse ModifySkillLevelsOfUserResponse
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
     * @param ModifySkillLevelsOfUserRequest $request ModifySkillLevelsOfUserRequest
     *
     * @return ModifySkillLevelsOfUserResponse ModifySkillLevelsOfUserResponse
     */
    public function modifySkillLevelsOfUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySkillLevelsOfUserWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserRequest $request ModifyUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserResponse ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarUrl)) {
            $query['AvatarUrl'] = $request->avatarUrl;
        }
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
        if (!Utils::isUnset($request->nickname)) {
            $query['Nickname'] = $request->nickname;
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
     * @param ModifyUserRequest $request ModifyUserRequest
     *
     * @return ModifyUserResponse ModifyUserResponse
     */
    public function modifyUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserLevelsOfSkillGroupRequest $request ModifyUserLevelsOfSkillGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserLevelsOfSkillGroupResponse ModifyUserLevelsOfSkillGroupResponse
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
     * @param ModifyUserLevelsOfSkillGroupRequest $request ModifyUserLevelsOfSkillGroupRequest
     *
     * @return ModifyUserLevelsOfSkillGroupResponse ModifyUserLevelsOfSkillGroupResponse
     */
    public function modifyUserLevelsOfSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserLevelsOfSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param MonitorCallRequest $request MonitorCallRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return MonitorCallResponse MonitorCallResponse
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
     * @param MonitorCallRequest $request MonitorCallRequest
     *
     * @return MonitorCallResponse MonitorCallResponse
     */
    public function monitorCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->monitorCallWithOptions($request, $runtime);
    }

    /**
     * @param MuteCallRequest $request MuteCallRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return MuteCallResponse MuteCallResponse
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
     * @param MuteCallRequest $request MuteCallRequest
     *
     * @return MuteCallResponse MuteCallResponse
     */
    public function muteCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->muteCallWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停预测式外呼活动
     *  *
     * @param PauseCampaignRequest $request PauseCampaignRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return PauseCampaignResponse PauseCampaignResponse
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
     * @summary 暂停预测式外呼活动
     *  *
     * @param PauseCampaignRequest $request PauseCampaignRequest
     *
     * @return PauseCampaignResponse PauseCampaignResponse
     */
    public function pauseCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseCampaignWithOptions($request, $runtime);
    }

    /**
     * @param PickOutboundNumbersRequest $request PickOutboundNumbersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PickOutboundNumbersResponse PickOutboundNumbersResponse
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
     * @param PickOutboundNumbersRequest $request PickOutboundNumbersRequest
     *
     * @return PickOutboundNumbersResponse PickOutboundNumbersResponse
     */
    public function pickOutboundNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pickOutboundNumbersWithOptions($request, $runtime);
    }

    /**
     * @param PollUserStatusRequest $request PollUserStatusRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return PollUserStatusResponse PollUserStatusResponse
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
     * @param PollUserStatusRequest $request PollUserStatusRequest
     *
     * @return PollUserStatusResponse PollUserStatusResponse
     */
    public function pollUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pollUserStatusWithOptions($request, $runtime);
    }

    /**
     * @summary ProcessAliMeCallbackOfStaging
     *  *
     * @param ProcessAliMeCallbackOfStagingRequest $request ProcessAliMeCallbackOfStagingRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ProcessAliMeCallbackOfStagingResponse ProcessAliMeCallbackOfStagingResponse
     */
    public function processAliMeCallbackOfStagingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProcessAliMeCallbackOfStaging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProcessAliMeCallbackOfStagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ProcessAliMeCallbackOfStaging
     *  *
     * @param ProcessAliMeCallbackOfStagingRequest $request ProcessAliMeCallbackOfStagingRequest
     *
     * @return ProcessAliMeCallbackOfStagingResponse ProcessAliMeCallbackOfStagingResponse
     */
    public function processAliMeCallbackOfStaging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processAliMeCallbackOfStagingWithOptions($request, $runtime);
    }

    /**
     * @param PublishContactFlowRequest $request PublishContactFlowRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishContactFlowResponse PublishContactFlowResponse
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
     * @param PublishContactFlowRequest $request PublishContactFlowRequest
     *
     * @return PublishContactFlowResponse PublishContactFlowResponse
     */
    public function publishContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishContactFlowWithOptions($request, $runtime);
    }

    /**
     * @param ReadyForServiceRequest $request ReadyForServiceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReadyForServiceResponse ReadyForServiceResponse
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
     * @param ReadyForServiceRequest $request ReadyForServiceRequest
     *
     * @return ReadyForServiceResponse ReadyForServiceResponse
     */
    public function readyForService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readyForServiceWithOptions($request, $runtime);
    }

    /**
     * @param RedialCallRequest $request RedialCallRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RedialCallResponse RedialCallResponse
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
     * @param RedialCallRequest $request RedialCallRequest
     *
     * @return RedialCallResponse RedialCallResponse
     */
    public function redialCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->redialCallWithOptions($request, $runtime);
    }

    /**
     * @param RegisterDeviceRequest $request RegisterDeviceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterDeviceResponse RegisterDeviceResponse
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
     * @param RegisterDeviceRequest $request RegisterDeviceRequest
     *
     * @return RegisterDeviceResponse RegisterDeviceResponse
     */
    public function registerDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceWithOptions($request, $runtime);
    }

    /**
     * @param RegisterDevicesRequest $request RegisterDevicesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterDevicesResponse RegisterDevicesResponse
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
     * @param RegisterDevicesRequest $request RegisterDevicesRequest
     *
     * @return RegisterDevicesResponse RegisterDevicesResponse
     */
    public function registerDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDevicesWithOptions($request, $runtime);
    }

    /**
     * @param RejectChatRequest $request RejectChatRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RejectChatResponse RejectChatResponse
     */
    public function rejectChatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'RejectChat',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectChatRequest $request RejectChatRequest
     *
     * @return RejectChatResponse RejectChatResponse
     */
    public function rejectChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectChatWithOptions($request, $runtime);
    }

    /**
     * @param RejectTicketRequest $request RejectTicketRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RejectTicketResponse RejectTicketResponse
     */
    public function rejectTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectTicket',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectTicketRequest $request RejectTicketRequest
     *
     * @return RejectTicketResponse RejectTicketResponse
     */
    public function rejectTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectTicketWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseCallRequest $request ReleaseCallRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseCallResponse ReleaseCallResponse
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
     * @param ReleaseCallRequest $request ReleaseCallRequest
     *
     * @return ReleaseCallResponse ReleaseCallResponse
     */
    public function releaseCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseCallWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseChatRequest $request ReleaseChatRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseChatResponse ReleaseChatResponse
     */
    public function releaseChatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseChat',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseChatRequest $request ReleaseChatRequest
     *
     * @return ReleaseChatResponse ReleaseChatResponse
     */
    public function releaseChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseChatWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑呼入控制号码
     *  *
     * @param RemoveBlacklistCallTaggingRequest $request RemoveBlacklistCallTaggingRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveBlacklistCallTaggingResponse RemoveBlacklistCallTaggingResponse
     */
    public function removeBlacklistCallTaggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveBlacklistCallTagging',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveBlacklistCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑呼入控制号码
     *  *
     * @param RemoveBlacklistCallTaggingRequest $request RemoveBlacklistCallTaggingRequest
     *
     * @return RemoveBlacklistCallTaggingResponse RemoveBlacklistCallTaggingResponse
     */
    public function removeBlacklistCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBlacklistCallTaggingWithOptions($request, $runtime);
    }

    /**
     * @summary 删除黑名单号码
     *  *
     * @param RemoveDoNotCallNumbersRequest $request RemoveDoNotCallNumbersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveDoNotCallNumbersResponse RemoveDoNotCallNumbersResponse
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
     * @summary 删除黑名单号码
     *  *
     * @param RemoveDoNotCallNumbersRequest $request RemoveDoNotCallNumbersRequest
     *
     * @return RemoveDoNotCallNumbersResponse RemoveDoNotCallNumbersResponse
     */
    public function removeDoNotCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDoNotCallNumbersWithOptions($request, $runtime);
    }

    /**
     * @param RemovePersonalNumbersFromUserRequest $request RemovePersonalNumbersFromUserRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePersonalNumbersFromUserResponse RemovePersonalNumbersFromUserResponse
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
     * @param RemovePersonalNumbersFromUserRequest $request RemovePersonalNumbersFromUserRequest
     *
     * @return RemovePersonalNumbersFromUserResponse RemovePersonalNumbersFromUserResponse
     */
    public function removePersonalNumbersFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePersonalNumbersFromUserWithOptions($request, $runtime);
    }

    /**
     * @param RemovePhoneNumberFromSkillGroupsRequest $request RemovePhoneNumberFromSkillGroupsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePhoneNumberFromSkillGroupsResponse RemovePhoneNumberFromSkillGroupsResponse
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
     * @param RemovePhoneNumberFromSkillGroupsRequest $request RemovePhoneNumberFromSkillGroupsRequest
     *
     * @return RemovePhoneNumberFromSkillGroupsResponse RemovePhoneNumberFromSkillGroupsResponse
     */
    public function removePhoneNumberFromSkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePhoneNumberFromSkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param RemovePhoneNumbersRequest $request RemovePhoneNumbersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePhoneNumbersResponse RemovePhoneNumbersResponse
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
     * @param RemovePhoneNumbersRequest $request RemovePhoneNumbersRequest
     *
     * @return RemovePhoneNumbersResponse RemovePhoneNumbersResponse
     */
    public function removePhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * @param RemovePhoneNumbersFromSkillGroupRequest $request RemovePhoneNumbersFromSkillGroupRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePhoneNumbersFromSkillGroupResponse RemovePhoneNumbersFromSkillGroupResponse
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
     * @param RemovePhoneNumbersFromSkillGroupRequest $request RemovePhoneNumbersFromSkillGroupRequest
     *
     * @return RemovePhoneNumbersFromSkillGroupResponse RemovePhoneNumbersFromSkillGroupResponse
     */
    public function removePhoneNumbersFromSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePhoneNumbersFromSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSkillGroupsFromUserRequest $request RemoveSkillGroupsFromUserRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveSkillGroupsFromUserResponse RemoveSkillGroupsFromUserResponse
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
     * @param RemoveSkillGroupsFromUserRequest $request RemoveSkillGroupsFromUserRequest
     *
     * @return RemoveSkillGroupsFromUserResponse RemoveSkillGroupsFromUserResponse
     */
    public function removeSkillGroupsFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSkillGroupsFromUserWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUsersRequest $request RemoveUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUsersResponse RemoveUsersResponse
     */
    public function removeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->notificationEmail)) {
            $query['NotificationEmail'] = $request->notificationEmail;
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
     * @param RemoveUsersRequest $request RemoveUsersRequest
     *
     * @return RemoveUsersResponse RemoveUsersResponse
     */
    public function removeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUsersFromSkillGroupRequest $request RemoveUsersFromSkillGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUsersFromSkillGroupResponse RemoveUsersFromSkillGroupResponse
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
     * @param RemoveUsersFromSkillGroupRequest $request RemoveUsersFromSkillGroupRequest
     *
     * @return RemoveUsersFromSkillGroupResponse RemoveUsersFromSkillGroupResponse
     */
    public function removeUsersFromSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersFromSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ResetAgentStateRequest $request ResetAgentStateRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAgentStateResponse ResetAgentStateResponse
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
     * @param ResetAgentStateRequest $request ResetAgentStateRequest
     *
     * @return ResetAgentStateResponse ResetAgentStateResponse
     */
    public function resetAgentState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAgentStateWithOptions($request, $runtime);
    }

    /**
     * @param ResetUserPasswordRequest $request ResetUserPasswordRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetUserPasswordResponse ResetUserPasswordResponse
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
     * @param ResetUserPasswordRequest $request ResetUserPasswordRequest
     *
     * @return ResetUserPasswordResponse ResetUserPasswordResponse
     */
    public function resetUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary 录音解冻
     *  *
     * @param RestoreArchivedRecordingsRequest $request RestoreArchivedRecordingsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreArchivedRecordingsResponse RestoreArchivedRecordingsResponse
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
     * @summary 录音解冻
     *  *
     * @param RestoreArchivedRecordingsRequest $request RestoreArchivedRecordingsRequest
     *
     * @return RestoreArchivedRecordingsResponse RestoreArchivedRecordingsResponse
     */
    public function restoreArchivedRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreArchivedRecordingsWithOptions($request, $runtime);
    }

    /**
     * @param ResubmitTicketRequest $request ResubmitTicketRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ResubmitTicketResponse ResubmitTicketResponse
     */
    public function resubmitTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResubmitTicket',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResubmitTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResubmitTicketRequest $request ResubmitTicketRequest
     *
     * @return ResubmitTicketResponse ResubmitTicketResponse
     */
    public function resubmitTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resubmitTicketWithOptions($request, $runtime);
    }

    /**
     * @summary 恢复预测式外呼活动
     *  *
     * @param ResumeCampaignRequest $request ResumeCampaignRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeCampaignResponse ResumeCampaignResponse
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
     * @summary 恢复预测式外呼活动
     *  *
     * @param ResumeCampaignRequest $request ResumeCampaignRequest
     *
     * @return ResumeCampaignResponse ResumeCampaignResponse
     */
    public function resumeCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeCampaignWithOptions($request, $runtime);
    }

    /**
     * @param RetrieveCallRequest $request RetrieveCallRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RetrieveCallResponse RetrieveCallResponse
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
     * @param RetrieveCallRequest $request RetrieveCallRequest
     *
     * @return RetrieveCallResponse RetrieveCallResponse
     */
    public function retrieveCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retrieveCallWithOptions($request, $runtime);
    }

    /**
     * @param SaveDocumentRequest $request SaveDocumentRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveDocumentResponse SaveDocumentResponse
     */
    public function saveDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->documentId)) {
            $body['DocumentId'] = $request->documentId;
        }
        if (!Utils::isUnset($request->documentJson)) {
            $body['DocumentJson'] = $request->documentJson;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveDocument',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveDocumentRequest $request SaveDocumentRequest
     *
     * @return SaveDocumentResponse SaveDocumentResponse
     */
    public function saveDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDocumentWithOptions($request, $runtime);
    }

    /**
     * @param SaveRTCStatsV2Request $request SaveRTCStatsV2Request
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveRTCStatsV2Response SaveRTCStatsV2Response
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
     * @param SaveRTCStatsV2Request $request SaveRTCStatsV2Request
     *
     * @return SaveRTCStatsV2Response SaveRTCStatsV2Response
     */
    public function saveRTCStatsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveRTCStatsV2WithOptions($request, $runtime);
    }

    /**
     * @param SaveTerminalLogRequest $request SaveTerminalLogRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveTerminalLogResponse SaveTerminalLogResponse
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
     * @param SaveTerminalLogRequest $request SaveTerminalLogRequest
     *
     * @return SaveTerminalLogResponse SaveTerminalLogResponse
     */
    public function saveTerminalLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTerminalLogWithOptions($request, $runtime);
    }

    /**
     * @param SaveWebRTCStatsRequest $request SaveWebRTCStatsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveWebRTCStatsResponse SaveWebRTCStatsResponse
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
     * @param SaveWebRTCStatsRequest $request SaveWebRTCStatsRequest
     *
     * @return SaveWebRTCStatsResponse SaveWebRTCStatsResponse
     */
    public function saveWebRTCStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveWebRTCStatsWithOptions($request, $runtime);
    }

    /**
     * @param SaveWebRtcInfoRequest $request SaveWebRtcInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveWebRtcInfoResponse SaveWebRtcInfoResponse
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
     * @param SaveWebRtcInfoRequest $request SaveWebRtcInfoRequest
     *
     * @return SaveWebRtcInfoResponse SaveWebRtcInfoResponse
     */
    public function saveWebRtcInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveWebRtcInfoWithOptions($request, $runtime);
    }

    /**
     * @param SendDtmfSignalingRequest $request SendDtmfSignalingRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SendDtmfSignalingResponse SendDtmfSignalingResponse
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
     * @param SendDtmfSignalingRequest $request SendDtmfSignalingRequest
     *
     * @return SendDtmfSignalingResponse SendDtmfSignalingResponse
     */
    public function sendDtmfSignaling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendDtmfSignalingWithOptions($request, $runtime);
    }

    /**
     * @param SignInGroupRequest $request SignInGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SignInGroupResponse SignInGroupResponse
     */
    public function signInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additivity)) {
            $query['Additivity'] = $request->additivity;
        }
        if (!Utils::isUnset($request->chatDeviceId)) {
            $query['ChatDeviceId'] = $request->chatDeviceId;
        }
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
     * @param SignInGroupRequest $request SignInGroupRequest
     *
     * @return SignInGroupResponse SignInGroupResponse
     */
    public function signInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signInGroupWithOptions($request, $runtime);
    }

    /**
     * @param SignOutGroupRequest $request SignOutGroupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SignOutGroupResponse SignOutGroupResponse
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
     * @param SignOutGroupRequest $request SignOutGroupRequest
     *
     * @return SignOutGroupResponse SignOutGroupResponse
     */
    public function signOutGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signOutGroupWithOptions($request, $runtime);
    }

    /**
     * @param StartBack2BackCallRequest $request StartBack2BackCallRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartBack2BackCallResponse StartBack2BackCallResponse
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
     * @param StartBack2BackCallRequest $request StartBack2BackCallRequest
     *
     * @return StartBack2BackCallResponse StartBack2BackCallResponse
     */
    public function startBack2BackCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBack2BackCallWithOptions($request, $runtime);
    }

    /**
     * @param StartChatRequest $tmpReq  StartChatRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StartChatResponse StartChatResponse
     */
    public function startChatWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartChatShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userList)) {
            $request->userListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userList, 'UserList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessChannelId)) {
            $query['AccessChannelId'] = $request->accessChannelId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->userListShrink)) {
            $query['UserList'] = $request->userListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartChat',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartChatRequest $request StartChatRequest
     *
     * @return StartChatResponse StartChatResponse
     */
    public function startChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startChatWithOptions($request, $runtime);
    }

    /**
     * @param StartConferenceRequest $request StartConferenceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StartConferenceResponse StartConferenceResponse
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
     * @param StartConferenceRequest $request StartConferenceRequest
     *
     * @return StartConferenceResponse StartConferenceResponse
     */
    public function startConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConferenceWithOptions($request, $runtime);
    }

    /**
     * @param StartEditContactFlowRequest $request StartEditContactFlowRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StartEditContactFlowResponse StartEditContactFlowResponse
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
     * @param StartEditContactFlowRequest $request StartEditContactFlowRequest
     *
     * @return StartEditContactFlowResponse StartEditContactFlowResponse
     */
    public function startEditContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEditContactFlowWithOptions($request, $runtime);
    }

    /**
     * @param StartPredictiveCallRequest $request StartPredictiveCallRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartPredictiveCallResponse StartPredictiveCallResponse
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
     * @param StartPredictiveCallRequest $request StartPredictiveCallRequest
     *
     * @return StartPredictiveCallResponse StartPredictiveCallResponse
     */
    public function startPredictiveCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPredictiveCallWithOptions($request, $runtime);
    }

    /**
     * @summary 发起隐私呼叫
     *  *
     * @param StartPrivacyCallRequest $request StartPrivacyCallRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StartPrivacyCallResponse StartPrivacyCallResponse
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
     * @summary 发起隐私呼叫
     *  *
     * @param StartPrivacyCallRequest $request StartPrivacyCallRequest
     *
     * @return StartPrivacyCallResponse StartPrivacyCallResponse
     */
    public function startPrivacyCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPrivacyCallWithOptions($request, $runtime);
    }

    /**
     * @summary 提交预测式外呼活动
     *  *
     * @param SubmitCampaignRequest $request SubmitCampaignRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitCampaignResponse SubmitCampaignResponse
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
     * @summary 提交预测式外呼活动
     *  *
     * @param SubmitCampaignRequest $request SubmitCampaignRequest
     *
     * @return SubmitCampaignResponse SubmitCampaignResponse
     */
    public function submitCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCampaignWithOptions($request, $runtime);
    }

    /**
     * @param SwitchToConferenceRequest $request SwitchToConferenceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchToConferenceResponse SwitchToConferenceResponse
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
     * @param SwitchToConferenceRequest $request SwitchToConferenceRequest
     *
     * @return SwitchToConferenceResponse SwitchToConferenceResponse
     */
    public function switchToConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchToConferenceWithOptions($request, $runtime);
    }

    /**
     * @param TakeBreakRequest $request TakeBreakRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return TakeBreakResponse TakeBreakResponse
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
     * @param TakeBreakRequest $request TakeBreakRequest
     *
     * @return TakeBreakResponse TakeBreakResponse
     */
    public function takeBreak($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->takeBreakWithOptions($request, $runtime);
    }

    /**
     * @param TerminateTicketRequest $request TerminateTicketRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return TerminateTicketResponse TerminateTicketResponse
     */
    public function terminateTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TerminateTicket',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TerminateTicketRequest $request TerminateTicketRequest
     *
     * @return TerminateTicketResponse TerminateTicketResponse
     */
    public function terminateTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateTicketWithOptions($request, $runtime);
    }

    /**
     * @param TransferTicketTaskRequest $request TransferTicketTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferTicketTaskResponse TransferTicketTaskResponse
     */
    public function transferTicketTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assignee)) {
            $query['Assignee'] = $request->assignee;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferTicketTask',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferTicketTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransferTicketTaskRequest $request TransferTicketTaskRequest
     *
     * @return TransferTicketTaskResponse TransferTicketTaskResponse
     */
    public function transferTicketTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferTicketTaskWithOptions($request, $runtime);
    }

    /**
     * @param UnmuteCallRequest $request UnmuteCallRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UnmuteCallResponse UnmuteCallResponse
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
     * @param UnmuteCallRequest $request UnmuteCallRequest
     *
     * @return UnmuteCallResponse UnmuteCallResponse
     */
    public function unmuteCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unmuteCallWithOptions($request, $runtime);
    }

    /**
     * @summary 删除注册设备
     *  *
     * @param UnregisterDeviceRequest $request UnregisterDeviceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UnregisterDeviceResponse UnregisterDeviceResponse
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
     * @summary 删除注册设备
     *  *
     * @param UnregisterDeviceRequest $request UnregisterDeviceRequest
     *
     * @return UnregisterDeviceResponse UnregisterDeviceResponse
     */
    public function unregisterDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unregisterDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary Update campaign
     *  *
     * @param UpdateCampaignRequest $request UpdateCampaignRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCampaignResponse UpdateCampaignResponse
     */
    public function updateCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callableTime)) {
            $query['CallableTime'] = $request->callableTime;
        }
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->strategyParameters)) {
            $query['StrategyParameters'] = $request->strategyParameters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update campaign
     *  *
     * @param UpdateCampaignRequest $request UpdateCampaignRequest
     *
     * @return UpdateCampaignResponse UpdateCampaignResponse
     */
    public function updateCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCampaignWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConfigItemsRequest $request UpdateConfigItemsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConfigItemsResponse UpdateConfigItemsResponse
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
     * @param UpdateConfigItemsRequest $request UpdateConfigItemsRequest
     *
     * @return UpdateConfigItemsResponse UpdateConfigItemsResponse
     */
    public function updateConfigItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigItemsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSchemaPropertyRequest $tmpReq  UpdateSchemaPropertyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSchemaPropertyResponse UpdateSchemaPropertyResponse
     */
    public function updateSchemaPropertyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSchemaPropertyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->property)) {
            $request->propertyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->property, 'Property', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->propertyShrink)) {
            $body['Property'] = $request->propertyShrink;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->schemaId)) {
            $body['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSchemaProperty',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSchemaPropertyRequest $request UpdateSchemaPropertyRequest
     *
     * @return UpdateSchemaPropertyResponse UpdateSchemaPropertyResponse
     */
    public function updateSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTicketRequest $request UpdateTicketRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTicketResponse UpdateTicketResponse
     */
    public function updateTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->context)) {
            $query['Context'] = $request->context;
        }
        if (!Utils::isUnset($request->customerId)) {
            $query['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTicket',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTicketRequest $request UpdateTicketRequest
     *
     * @return UpdateTicketResponse UpdateTicketResponse
     */
    public function updateTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTicketWithOptions($request, $runtime);
    }

    /**
     * @param WithdrawTicketRequest $request WithdrawTicketRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return WithdrawTicketResponse WithdrawTicketResponse
     */
    public function withdrawTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WithdrawTicket',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WithdrawTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WithdrawTicketRequest $request WithdrawTicketRequest
     *
     * @return WithdrawTicketResponse WithdrawTicketResponse
     */
    public function withdrawTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawTicketWithOptions($request, $runtime);
    }
}
