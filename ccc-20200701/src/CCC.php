<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\CCC\V20200701\Models\AbortCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AbortCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AcceptChatRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AcceptChatResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddBlacklistCallTaggingRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddBlacklistCallTaggingResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddFeedbackRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddFeedbackResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCallSummaryRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCallSummaryResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCallTagsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCallTagsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateChatMediaUrlRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateChatMediaUrlResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\DeleteInstanceResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ExportContactFlowResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\GetChatMediaUrlRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetChatMediaUrlResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetChatRoutingProfileRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetChatRoutingProfileResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\GetIvrTrackingSummaryRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetIvrTrackingSummaryResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSummaryTemplateRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSummaryTemplateResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportContactFlowRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportContactFlowResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2Request;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2Response;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallSummariesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallSummariesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallSummariesShrinkRequest;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsApplicationsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsApplicationsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsTemplatesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsTemplatesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListGroupChatMessagesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListGroupChatMessagesResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSmsMetadataRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSmsMetadataResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListVisitorChatMessagesRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListVisitorChatMessagesResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListVoicemailsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListVoicemailsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ProcessCustomIMCallbackRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ProcessCustomIMCallbackResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateCallSummaryRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateCallSummaryResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateCampaignRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateCampaignResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateChatRoutingProfileRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateChatRoutingProfileResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateConfigItemsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateConfigItemsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyShrinkRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateTicketResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\WithdrawTicketRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\WithdrawTicketResponse;
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
     * 废弃预测式外呼活动.
     *
     * @param request - AbortCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AbortCampaignResponse
     *
     * @param AbortCampaignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AbortCampaignResponse
     */
    public function abortCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AbortCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AbortCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 废弃预测式外呼活动.
     *
     * @param request - AbortCampaignRequest
     *
     * @returns AbortCampaignResponse
     *
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
     * @param request - AcceptChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AcceptChatResponse
     *
     * @param AcceptChatRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AcceptChatResponse
     */
    public function acceptChatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AcceptChat',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AcceptChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AcceptChatRequest
     *
     * @returns AcceptChatResponse
     *
     * @param AcceptChatRequest $request
     *
     * @return AcceptChatResponse
     */
    public function acceptChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptChatWithOptions($request, $runtime);
    }

    /**
     * 编辑呼入控制号码
     *
     * @param request - AddBlacklistCallTaggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBlacklistCallTaggingResponse
     *
     * @param AddBlacklistCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddBlacklistCallTaggingResponse
     */
    public function addBlacklistCallTaggingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBlacklistCallTagging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBlacklistCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑呼入控制号码
     *
     * @param request - AddBlacklistCallTaggingRequest
     *
     * @returns AddBlacklistCallTaggingResponse
     *
     * @param AddBlacklistCallTaggingRequest $request
     *
     * @return AddBlacklistCallTaggingResponse
     */
    public function addBlacklistCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBlacklistCallTaggingWithOptions($request, $runtime);
    }

    /**
     * 追加联系人.
     *
     * @param tmpReq - AddCasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCasesResponse
     *
     * @param AddCasesRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return AddCasesResponse
     */
    public function addCasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddCasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->caseList) {
            $request->caseListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->caseList, 'CaseList', 'json');
        }

        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->caseListShrink) {
            @$query['CaseList'] = $request->caseListShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCases',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 追加联系人.
     *
     * @param request - AddCasesRequest
     *
     * @returns AddCasesResponse
     *
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
     * @param request - AddFeedbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFeedbackResponse
     *
     * @param AddFeedbackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddFeedbackResponse
     */
    public function addFeedbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feedback) {
            @$query['Feedback'] = $request->feedback;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->rating) {
            @$query['Rating'] = $request->rating;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddFeedback',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddFeedbackRequest
     *
     * @returns AddFeedbackResponse
     *
     * @param AddFeedbackRequest $request
     *
     * @return AddFeedbackResponse
     */
    public function addFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFeedbackWithOptions($request, $runtime);
    }

    /**
     * @param request - AddNumbersToSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddNumbersToSkillGroupResponse
     *
     * @param AddNumbersToSkillGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddNumbersToSkillGroupResponse
     */
    public function addNumbersToSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instNumberGroupIdList) {
            @$query['InstNumberGroupIdList'] = $request->instNumberGroupIdList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddNumbersToSkillGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddNumbersToSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddNumbersToSkillGroupRequest
     *
     * @returns AddNumbersToSkillGroupResponse
     *
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
     * @param request - AddPersonalNumbersToUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPersonalNumbersToUserResponse
     *
     * @param AddPersonalNumbersToUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddPersonalNumbersToUserResponse
     */
    public function addPersonalNumbersToUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPersonalNumbersToUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPersonalNumbersToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddPersonalNumbersToUserRequest
     *
     * @returns AddPersonalNumbersToUserResponse
     *
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
     * @param request - AddPhoneNumberToSkillGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPhoneNumberToSkillGroupsResponse
     *
     * @param AddPhoneNumberToSkillGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddPhoneNumberToSkillGroupsResponse
     */
    public function addPhoneNumberToSkillGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPhoneNumberToSkillGroups',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPhoneNumberToSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddPhoneNumberToSkillGroupsRequest
     *
     * @returns AddPhoneNumberToSkillGroupsResponse
     *
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
     * @param request - AddPhoneNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPhoneNumbersResponse
     *
     * @param AddPhoneNumbersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddPhoneNumbersResponse
     */
    public function addPhoneNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberGroupId) {
            @$query['NumberGroupId'] = $request->numberGroupId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPhoneNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddPhoneNumbersRequest
     *
     * @returns AddPhoneNumbersResponse
     *
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
     * @param tmpReq - AddSchemaPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSchemaPropertyResponse
     *
     * @param AddSchemaPropertyRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return AddSchemaPropertyResponse
     */
    public function addSchemaPropertyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddSchemaPropertyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->property) {
            $request->propertyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->property, 'Property', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->propertyShrink) {
            @$body['Property'] = $request->propertyShrink;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddSchemaProperty',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddSchemaPropertyRequest
     *
     * @returns AddSchemaPropertyResponse
     *
     * @param AddSchemaPropertyRequest $request
     *
     * @return AddSchemaPropertyResponse
     */
    public function addSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param request - AddSkillGroupsToUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSkillGroupsToUserResponse
     *
     * @param AddSkillGroupsToUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddSkillGroupsToUserResponse
     */
    public function addSkillGroupsToUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillLevelList) {
            @$query['SkillLevelList'] = $request->skillLevelList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSkillGroupsToUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSkillGroupsToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddSkillGroupsToUserRequest
     *
     * @returns AddSkillGroupsToUserResponse
     *
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
     * @param request - AddTicketTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTicketTaskResponse
     *
     * @param AddTicketTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddTicketTaskResponse
     */
    public function addTicketTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assignee) {
            @$query['Assignee'] = $request->assignee;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->position) {
            @$query['Position'] = $request->position;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTicketTask',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTicketTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddTicketTaskRequest
     *
     * @returns AddTicketTaskResponse
     *
     * @param AddTicketTaskRequest $request
     *
     * @return AddTicketTaskResponse
     */
    public function addTicketTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTicketTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - AddUsersToSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUsersToSkillGroupResponse
     *
     * @param AddUsersToSkillGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddUsersToSkillGroupResponse
     */
    public function addUsersToSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->userSkillLevelList) {
            @$query['UserSkillLevelList'] = $request->userSkillLevelList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUsersToSkillGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUsersToSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddUsersToSkillGroupRequest
     *
     * @returns AddUsersToSkillGroupResponse
     *
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
     * @param request - AnalyzeConversationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnalyzeConversationResponse
     *
     * @param AnalyzeConversationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AnalyzeConversationResponse
     */
    public function analyzeConversationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->fieldListJson) {
            @$query['FieldListJson'] = $request->fieldListJson;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskListJson) {
            @$query['TaskListJson'] = $request->taskListJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AnalyzeConversation',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AnalyzeConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AnalyzeConversationRequest
     *
     * @returns AnalyzeConversationResponse
     *
     * @param AnalyzeConversationRequest $request
     *
     * @return AnalyzeConversationResponse
     */
    public function analyzeConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->analyzeConversationWithOptions($request, $runtime);
    }

    /**
     * @param request - AnswerCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnswerCallResponse
     *
     * @param AnswerCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AnswerCallResponse
     */
    public function answerCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AnswerCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AnswerCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AnswerCallRequest
     *
     * @returns AnswerCallResponse
     *
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
     * 追加联系人.
     *
     * @param tmpReq - AppendCasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AppendCasesResponse
     *
     * @param AppendCasesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return AppendCasesResponse
     */
    public function appendCasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AppendCasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AppendCases',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AppendCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 追加联系人.
     *
     * @param request - AppendCasesRequest
     *
     * @returns AppendCasesResponse
     *
     * @param AppendCasesRequest $request
     *
     * @return AppendCasesResponse
     */
    public function appendCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appendCasesWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * @deprecated openAPI AssignUsers is deprecated, please use CCC::2020-07-01::ImportRamUsers instead
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

        if (null !== $request->ramIdList) {
            @$query['RamIdList'] = $request->ramIdList;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->skillLevelList) {
            @$query['SkillLevelList'] = $request->skillLevelList;
        }

        if (null !== $request->workMode) {
            @$query['WorkMode'] = $request->workMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssignUsers',
            'version' => '2020-07-01',
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

    // Deprecated
    /**
     * @deprecated openAPI AssignUsers is deprecated, please use CCC::2020-07-01::ImportRamUsers instead
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
     * @param request - BargeInCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BargeInCallResponse
     *
     * @param BargeInCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BargeInCallResponse
     */
    public function bargeInCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bargedUserId) {
            @$query['BargedUserId'] = $request->bargedUserId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BargeInCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BargeInCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BargeInCallRequest
     *
     * @returns BargeInCallResponse
     *
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
     * @param request - BlindTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BlindTransferResponse
     *
     * @param BlindTransferRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BlindTransferResponse
     */
    public function blindTransferWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callPriority) {
            @$query['CallPriority'] = $request->callPriority;
        }

        if (null !== $request->contactFlowVariables) {
            @$query['ContactFlowVariables'] = $request->contactFlowVariables;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->queuingOverflowThreshold) {
            @$query['QueuingOverflowThreshold'] = $request->queuingOverflowThreshold;
        }

        if (null !== $request->queuingTimeoutSeconds) {
            @$query['QueuingTimeoutSeconds'] = $request->queuingTimeoutSeconds;
        }

        if (null !== $request->routingType) {
            @$query['RoutingType'] = $request->routingType;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->strategyName) {
            @$query['StrategyName'] = $request->strategyName;
        }

        if (null !== $request->strategyParams) {
            @$query['StrategyParams'] = $request->strategyParams;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->transferee) {
            @$query['Transferee'] = $request->transferee;
        }

        if (null !== $request->transfereeType) {
            @$query['TransfereeType'] = $request->transfereeType;
        }

        if (null !== $request->transferor) {
            @$query['Transferor'] = $request->transferor;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BlindTransfer',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BlindTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BlindTransferRequest
     *
     * @returns BlindTransferResponse
     *
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
     * @param request - BridgeRtcCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BridgeRtcCallResponse
     *
     * @param BridgeRtcCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BridgeRtcCallResponse
     */
    public function bridgeRtcCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->serviceProvider) {
            @$query['ServiceProvider'] = $request->serviceProvider;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->videoEnabled) {
            @$query['VideoEnabled'] = $request->videoEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BridgeRtcCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BridgeRtcCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BridgeRtcCallRequest
     *
     * @returns BridgeRtcCallResponse
     *
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
     * @param request - CancelAttendedTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAttendedTransferResponse
     *
     * @param CancelAttendedTransferRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CancelAttendedTransferResponse
     */
    public function cancelAttendedTransferWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelAttendedTransfer',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAttendedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelAttendedTransferRequest
     *
     * @returns CancelAttendedTransferResponse
     *
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
     * @param request - ChangeVisibilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeVisibilityResponse
     *
     * @param ChangeVisibilityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ChangeVisibilityResponse
     */
    public function changeVisibilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->invisible) {
            @$query['Invisible'] = $request->invisible;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeVisibility',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeVisibilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeVisibilityRequest
     *
     * @returns ChangeVisibilityResponse
     *
     * @param ChangeVisibilityRequest $request
     *
     * @return ChangeVisibilityResponse
     */
    public function changeVisibility($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeVisibilityWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeWorkModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeWorkModeResponse
     *
     * @param ChangeWorkModeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ChangeWorkModeResponse
     */
    public function changeWorkModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->signedSkillGroupIdList) {
            @$query['SignedSkillGroupIdList'] = $request->signedSkillGroupIdList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workMode) {
            @$query['WorkMode'] = $request->workMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeWorkMode',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeWorkModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeWorkModeRequest
     *
     * @returns ChangeWorkModeResponse
     *
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
     * @param request - ClaimChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClaimChatResponse
     *
     * @param ClaimChatRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ClaimChatResponse
     */
    public function claimChatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClaimChat',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClaimChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ClaimChatRequest
     *
     * @returns ClaimChatResponse
     *
     * @param ClaimChatRequest $request
     *
     * @return ClaimChatResponse
     */
    public function claimChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->claimChatWithOptions($request, $runtime);
    }

    /**
     * @param request - CoachCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CoachCallResponse
     *
     * @param CoachCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CoachCallResponse
     */
    public function coachCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coachedUserId) {
            @$query['CoachedUserId'] = $request->coachedUserId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CoachCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CoachCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CoachCallRequest
     *
     * @returns CoachCallResponse
     *
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
     * @param request - CommitContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommitContactFlowResponse
     *
     * @param CommitContactFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CommitContactFlowResponse
     */
    public function commitContactFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->definition) {
            @$query['Definition'] = $request->definition;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->draftId) {
            @$query['DraftId'] = $request->draftId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CommitContactFlow',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CommitContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CommitContactFlowRequest
     *
     * @returns CommitContactFlowResponse
     *
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
     * @param request - CompleteAttendedTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteAttendedTransferResponse
     *
     * @param CompleteAttendedTransferRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CompleteAttendedTransferResponse
     */
    public function completeAttendedTransferWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CompleteAttendedTransfer',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompleteAttendedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CompleteAttendedTransferRequest
     *
     * @returns CompleteAttendedTransferResponse
     *
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
     * @param request - CreateAudioFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAudioFileResponse
     *
     * @param CreateAudioFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAudioFileResponse
     */
    public function createAudioFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audioFileName) {
            @$query['AudioFileName'] = $request->audioFileName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossFileKey) {
            @$query['OssFileKey'] = $request->ossFileKey;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAudioFile',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAudioFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAudioFileRequest
     *
     * @returns CreateAudioFileResponse
     *
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
     * @param request - CreateCallSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCallSummaryResponse
     *
     * @param CreateCallSummaryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCallSummaryResponse
     */
    public function createCallSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->context) {
            @$query['Context'] = $request->context;
        }

        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCallSummary',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCallSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateCallSummaryRequest
     *
     * @returns CreateCallSummaryResponse
     *
     * @param CreateCallSummaryRequest $request
     *
     * @return CreateCallSummaryResponse
     */
    public function createCallSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCallSummaryWithOptions($request, $runtime);
    }

    /**
     * 批量创建号码标签.
     *
     * @param request - CreateCallTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCallTagsResponse
     *
     * @param CreateCallTagsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCallTagsResponse
     */
    public function createCallTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callTagNameList) {
            @$query['CallTagNameList'] = $request->callTagNameList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCallTags',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCallTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量创建号码标签.
     *
     * @param request - CreateCallTagsRequest
     *
     * @returns CreateCallTagsResponse
     *
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
     * 创建预测式外呼活动.
     *
     * @param tmpReq - CreateCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCampaignResponse
     *
     * @param CreateCampaignRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCampaignResponse
     */
    public function createCampaignWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCampaignShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->caseList) {
            $request->caseListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->caseList, 'CaseList', 'json');
        }

        $query = [];
        if (null !== $request->callableTime) {
            @$query['CallableTime'] = $request->callableTime;
        }

        if (null !== $request->caseFileKey) {
            @$query['CaseFileKey'] = $request->caseFileKey;
        }

        if (null !== $request->caseListShrink) {
            @$query['CaseList'] = $request->caseListShrink;
        }

        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executingUntilTimeout) {
            @$query['ExecutingUntilTimeout'] = $request->executingUntilTimeout;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxAttemptCount) {
            @$query['MaxAttemptCount'] = $request->maxAttemptCount;
        }

        if (null !== $request->minAttemptInterval) {
            @$query['MinAttemptInterval'] = $request->minAttemptInterval;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->queueId) {
            @$query['QueueId'] = $request->queueId;
        }

        if (null !== $request->simulation) {
            @$query['Simulation'] = $request->simulation;
        }

        if (null !== $request->simulationParameters) {
            @$query['SimulationParameters'] = $request->simulationParameters;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->strategyParameters) {
            @$query['StrategyParameters'] = $request->strategyParameters;
        }

        if (null !== $request->strategyType) {
            @$query['StrategyType'] = $request->strategyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建预测式外呼活动.
     *
     * @param request - CreateCampaignRequest
     *
     * @returns CreateCampaignResponse
     *
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
     * @param request - CreateChatMediaUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatMediaUrlResponse
     *
     * @param CreateChatMediaUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateChatMediaUrlResponse
     */
    public function createChatMediaUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mimeType) {
            @$body['MimeType'] = $request->mimeType;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChatMediaUrl',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateChatMediaUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateChatMediaUrlRequest
     *
     * @returns CreateChatMediaUrlResponse
     *
     * @param CreateChatMediaUrlRequest $request
     *
     * @return CreateChatMediaUrlResponse
     */
    public function createChatMediaUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChatMediaUrlWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->definition) {
            @$query['Definition'] = $request->definition;
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

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContactFlow',
            'version' => '2020-07-01',
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

    // Deprecated
    /**
     * 创建呼入控制号码
     *
     * @deprecated openAPI CreateCustomCallTagging is deprecated, please use CCC::2020-07-01::CreateCustomCallTaggings instead
     *
     * @param request - CreateCustomCallTaggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomCallTaggingResponse
     *
     * @param CreateCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCustomCallTaggingResponse
     */
    public function createCustomCallTaggingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customNumberList) {
            @$query['CustomNumberList'] = $request->customNumberList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomCallTagging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 创建呼入控制号码
     *
     * @deprecated openAPI CreateCustomCallTagging is deprecated, please use CCC::2020-07-01::CreateCustomCallTaggings instead
     *
     * @param request - CreateCustomCallTaggingRequest
     *
     * @returns CreateCustomCallTaggingResponse
     *
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
        if (null !== $request->adminRamIdList) {
            @$query['AdminRamIdList'] = $request->adminRamIdList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2020-07-01',
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
     * @param tmpReq - CreateSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSchemaResponse
     *
     * @param CreateSchemaRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSchemaResponse
     */
    public function createSchemaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSchemaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->properties) {
            $request->propertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->properties, 'Properties', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->propertiesShrink) {
            @$body['Properties'] = $request->propertiesShrink;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSchema',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSchemaRequest
     *
     * @returns CreateSchemaResponse
     *
     * @param CreateSchemaRequest $request
     *
     * @return CreateSchemaResponse
     */
    public function createSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchemaWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSkillGroup',
            'version' => '2020-07-01',
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
     * @param request - CreateTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->context) {
            @$query['Context'] = $request->context;
        }

        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateTicketRequest
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     *
     * @return CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicketWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->avatarUrl) {
            @$query['AvatarUrl'] = $request->avatarUrl;
        }

        if (null !== $request->displayId) {
            @$query['DisplayId'] = $request->displayId;
        }

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

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->nickname) {
            @$query['Nickname'] = $request->nickname;
        }

        if (null !== $request->resetPassword) {
            @$query['ResetPassword'] = $request->resetPassword;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->skillLevelList) {
            @$query['SkillLevelList'] = $request->skillLevelList;
        }

        if (null !== $request->workMode) {
            @$query['WorkMode'] = $request->workMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2020-07-01',
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
     * @param request - DeleteAudioFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAudioFileResponse
     *
     * @param DeleteAudioFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAudioFileResponse
     */
    public function deleteAudioFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audioResourceId) {
            @$query['AudioResourceId'] = $request->audioResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAudioFile',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAudioFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAudioFileRequest
     *
     * @returns DeleteAudioFileResponse
     *
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
     * 删除号码标签.
     *
     * @param request - DeleteCallTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCallTagResponse
     *
     * @param DeleteCallTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCallTagResponse
     */
    public function deleteCallTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCallTag',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCallTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除号码标签.
     *
     * @param request - DeleteCallTagRequest
     *
     * @returns DeleteCallTagResponse
     *
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
     * -.
     *
     * @param request - DeleteContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactFlowResponse
     *
     * @param DeleteContactFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteContactFlowResponse
     */
    public function deleteContactFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContactFlow',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * -.
     *
     * @param request - DeleteContactFlowRequest
     *
     * @returns DeleteContactFlowResponse
     *
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
     * 删除呼入控制号码
     *
     * @param request - DeleteCustomCallTaggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomCallTaggingResponse
     *
     * @param DeleteCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteCustomCallTaggingResponse
     */
    public function deleteCustomCallTaggingWithOptions($request, $runtime)
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
            'action' => 'DeleteCustomCallTagging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除呼入控制号码
     *
     * @param request - DeleteCustomCallTaggingRequest
     *
     * @returns DeleteCustomCallTaggingResponse
     *
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
     * @param request - DeleteDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDocumentResponse
     *
     * @param DeleteDocumentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocumentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->documentId) {
            @$body['DocumentId'] = $request->documentId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDocument',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDocumentRequest
     *
     * @returns DeleteDocumentResponse
     *
     * @param DeleteDocumentRequest $request
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - DeleteDocumentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDocumentsResponse
     *
     * @param DeleteDocumentsRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDocumentsResponse
     */
    public function deleteDocumentsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteDocumentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->documentIds) {
            $request->documentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }

        $body = [];
        if (null !== $request->documentIdsShrink) {
            @$body['DocumentIds'] = $request->documentIdsShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDocuments',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDocumentsRequest
     *
     * @returns DeleteDocumentsResponse
     *
     * @param DeleteDocumentsRequest $request
     *
     * @return DeleteDocumentsResponse
     */
    public function deleteDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentsWithOptions($request, $runtime);
    }

    /**
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
            'version' => '2020-07-01',
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
     * @param request - DeleteSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSchemaResponse
     *
     * @param DeleteSchemaRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSchemaResponse
     */
    public function deleteSchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSchema',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteSchemaRequest
     *
     * @returns DeleteSchemaResponse
     *
     * @param DeleteSchemaRequest $request
     *
     * @return DeleteSchemaResponse
     */
    public function deleteSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchemaWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteSchemaPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSchemaPropertyResponse
     *
     * @param DeleteSchemaPropertyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSchemaPropertyResponse
     */
    public function deleteSchemaPropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->propertyName) {
            @$body['PropertyName'] = $request->propertyName;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSchemaProperty',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteSchemaPropertyRequest
     *
     * @returns DeleteSchemaPropertyResponse
     *
     * @param DeleteSchemaPropertyRequest $request
     *
     * @return DeleteSchemaPropertyResponse
     */
    public function deleteSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchemaPropertyWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

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
            'version' => '2020-07-01',
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
     * @param request - DeleteTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTicketResponse
     *
     * @param DeleteTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteTicketResponse
     */
    public function deleteTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTicket',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteTicketRequest
     *
     * @returns DeleteTicketResponse
     *
     * @param DeleteTicketRequest $request
     *
     * @return DeleteTicketResponse
     */
    public function deleteTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteTicketTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTicketTemplateResponse
     *
     * @param DeleteTicketTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteTicketTemplateResponse
     */
    public function deleteTicketTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTicketTemplate',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteTicketTemplateRequest
     *
     * @returns DeleteTicketTemplateResponse
     *
     * @param DeleteTicketTemplateRequest $request
     *
     * @return DeleteTicketTemplateResponse
     */
    public function deleteTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DisableSchemaPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSchemaPropertyResponse
     *
     * @param DisableSchemaPropertyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableSchemaPropertyResponse
     */
    public function disableSchemaPropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->propertyName) {
            @$body['PropertyName'] = $request->propertyName;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableSchemaProperty',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableSchemaPropertyRequest
     *
     * @returns DisableSchemaPropertyResponse
     *
     * @param DisableSchemaPropertyRequest $request
     *
     * @return DisableSchemaPropertyResponse
     */
    public function disableSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param request - DisableTicketTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableTicketTemplateResponse
     *
     * @param DisableTicketTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableTicketTemplateResponse
     */
    public function disableTicketTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableTicketTemplate',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableTicketTemplateRequest
     *
     * @returns DisableTicketTemplateResponse
     *
     * @param DisableTicketTemplateRequest $request
     *
     * @return DisableTicketTemplateResponse
     */
    public function disableTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DiscardEditingContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DiscardEditingContactFlowResponse
     *
     * @param DiscardEditingContactFlowRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DiscardEditingContactFlowResponse
     */
    public function discardEditingContactFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->draftId) {
            @$query['DraftId'] = $request->draftId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DiscardEditingContactFlow',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DiscardEditingContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DiscardEditingContactFlowRequest
     *
     * @returns DiscardEditingContactFlowResponse
     *
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
     * @param request - EnableSchemaPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSchemaPropertyResponse
     *
     * @param EnableSchemaPropertyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableSchemaPropertyResponse
     */
    public function enableSchemaPropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->propertyName) {
            @$body['PropertyName'] = $request->propertyName;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableSchemaProperty',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableSchemaPropertyRequest
     *
     * @returns EnableSchemaPropertyResponse
     *
     * @param EnableSchemaPropertyRequest $request
     *
     * @return EnableSchemaPropertyResponse
     */
    public function enableSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableTicketTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableTicketTemplateResponse
     *
     * @param EnableTicketTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableTicketTemplateResponse
     */
    public function enableTicketTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableTicketTemplate',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableTicketTemplateRequest
     *
     * @returns EnableTicketTemplateResponse
     *
     * @param EnableTicketTemplateRequest $request
     *
     * @return EnableTicketTemplateResponse
     */
    public function enableTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - EndConferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EndConferenceResponse
     *
     * @param EndConferenceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EndConferenceResponse
     */
    public function endConferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EndConference',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EndConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EndConferenceRequest
     *
     * @returns EndConferenceResponse
     *
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
     * @param request - ExportContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportContactFlowResponse
     *
     * @param ExportContactFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportContactFlowResponse
     */
    public function exportContactFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportContactFlow',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ExportContactFlowRequest
     *
     * @returns ExportContactFlowResponse
     *
     * @param ExportContactFlowRequest $request
     *
     * @return ExportContactFlowResponse
     */
    public function exportContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportContactFlowWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * 导出全部呼入号码标签.
     *
     * @deprecated openAPI ExportCustomCallTagging is deprecated, please use CCC::2020-07-01::ExportCustomCallTaggings instead
     *
     * @param request - ExportCustomCallTaggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportCustomCallTaggingResponse
     *
     * @param ExportCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ExportCustomCallTaggingResponse
     */
    public function exportCustomCallTaggingWithOptions($request, $runtime)
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
            'action' => 'ExportCustomCallTagging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 导出全部呼入号码标签.
     *
     * @deprecated openAPI ExportCustomCallTagging is deprecated, please use CCC::2020-07-01::ExportCustomCallTaggings instead
     *
     * @param request - ExportCustomCallTaggingRequest
     *
     * @returns ExportCustomCallTaggingResponse
     *
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
     * 导出黑名单号码
     *
     * @param request - ExportDoNotCallNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportDoNotCallNumbersResponse
     *
     * @param ExportDoNotCallNumbersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExportDoNotCallNumbersResponse
     */
    public function exportDoNotCallNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportDoNotCallNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportDoNotCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出黑名单号码
     *
     * @param request - ExportDoNotCallNumbersRequest
     *
     * @returns ExportDoNotCallNumbersResponse
     *
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
     * @param request - FinishTicketTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FinishTicketTaskResponse
     *
     * @param FinishTicketTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FinishTicketTaskResponse
     */
    public function finishTicketTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FinishTicketTask',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FinishTicketTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FinishTicketTaskRequest
     *
     * @returns FinishTicketTaskResponse
     *
     * @param FinishTicketTaskRequest $request
     *
     * @return FinishTicketTaskResponse
     */
    public function finishTicketTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishTicketTaskWithOptions($request, $runtime);
    }

    /**
     * GetAccessChannelOfStaging.
     *
     * @param request - GetAccessChannelOfStagingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessChannelOfStagingResponse
     *
     * @param GetAccessChannelOfStagingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAccessChannelOfStagingResponse
     */
    public function getAccessChannelOfStagingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessChannelOfStaging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessChannelOfStagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetAccessChannelOfStaging.
     *
     * @param request - GetAccessChannelOfStagingRequest
     *
     * @returns GetAccessChannelOfStagingResponse
     *
     * @param GetAccessChannelOfStagingRequest $request
     *
     * @return GetAccessChannelOfStagingResponse
     */
    public function getAccessChannelOfStaging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessChannelOfStagingWithOptions($request, $runtime);
    }

    /**
     * 获取音频文件.
     *
     * @param request - GetAudioFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAudioFileResponse
     *
     * @param GetAudioFileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAudioFileResponse
     */
    public function getAudioFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audioResourceId) {
            @$query['AudioResourceId'] = $request->audioResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAudioFile',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAudioFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取音频文件.
     *
     * @param request - GetAudioFileRequest
     *
     * @returns GetAudioFileResponse
     *
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
     * @param request - GetAudioFileDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAudioFileDownloadUrlResponse
     *
     * @param GetAudioFileDownloadUrlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAudioFileDownloadUrlResponse
     */
    public function getAudioFileDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audioResourceId) {
            @$query['AudioResourceId'] = $request->audioResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAudioFileDownloadUrl',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAudioFileDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAudioFileDownloadUrlRequest
     *
     * @returns GetAudioFileDownloadUrlResponse
     *
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
     * @param request - GetAudioFileUploadParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAudioFileUploadParametersResponse
     *
     * @param GetAudioFileUploadParametersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAudioFileUploadParametersResponse
     */
    public function getAudioFileUploadParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audioFileName) {
            @$query['AudioFileName'] = $request->audioFileName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAudioFileUploadParameters',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAudioFileUploadParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAudioFileUploadParametersRequest
     *
     * @returns GetAudioFileUploadParametersResponse
     *
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
     * 通话记录详情.
     *
     * @param request - GetCallDetailRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCallDetailRecordResponse
     *
     * @param GetCallDetailRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCallDetailRecordResponse
     */
    public function getCallDetailRecordWithOptions($request, $runtime)
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
            'action' => 'GetCallDetailRecord',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCallDetailRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通话记录详情.
     *
     * @param request - GetCallDetailRecordRequest
     *
     * @returns GetCallDetailRecordResponse
     *
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
     * 获取预测式外呼活动信息.
     *
     * @param request - GetCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCampaignResponse
     *
     * @param GetCampaignRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCampaignResponse
     */
    public function getCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼活动信息.
     *
     * @param request - GetCampaignRequest
     *
     * @returns GetCampaignResponse
     *
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
     * @param request - GetCaseFileUploadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCaseFileUploadUrlResponse
     *
     * @param GetCaseFileUploadUrlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetCaseFileUploadUrlResponse
     */
    public function getCaseFileUploadUrlWithOptions($request, $runtime)
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
            'action' => 'GetCaseFileUploadUrl',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCaseFileUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetCaseFileUploadUrlRequest
     *
     * @returns GetCaseFileUploadUrlResponse
     *
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
     * @param request - GetChatMediaUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatMediaUrlResponse
     *
     * @param GetChatMediaUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetChatMediaUrlResponse
     */
    public function getChatMediaUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaId) {
            @$body['MediaId'] = $request->mediaId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetChatMediaUrl',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChatMediaUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetChatMediaUrlRequest
     *
     * @returns GetChatMediaUrlResponse
     *
     * @param GetChatMediaUrlRequest $request
     *
     * @return GetChatMediaUrlResponse
     */
    public function getChatMediaUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatMediaUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - GetChatRoutingProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatRoutingProfileResponse
     *
     * @param GetChatRoutingProfileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetChatRoutingProfileResponse
     */
    public function getChatRoutingProfileWithOptions($request, $runtime)
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
            'action' => 'GetChatRoutingProfile',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChatRoutingProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetChatRoutingProfileRequest
     *
     * @returns GetChatRoutingProfileResponse
     *
     * @param GetChatRoutingProfileRequest $request
     *
     * @return GetChatRoutingProfileResponse
     */
    public function getChatRoutingProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatRoutingProfileWithOptions($request, $runtime);
    }

    /**
     * @param request - GetContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContactFlowResponse
     *
     * @param GetContactFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetContactFlowResponse
     */
    public function getContactFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->draftId) {
            @$query['DraftId'] = $request->draftId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContactFlow',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetContactFlowRequest
     *
     * @returns GetContactFlowResponse
     *
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
     * 获取通话文本信息.
     *
     * @param request - GetConversationDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConversationDetailResponse
     *
     * @param GetConversationDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetConversationDetailResponse
     */
    public function getConversationDetailWithOptions($request, $runtime)
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
            'action' => 'GetConversationDetail',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConversationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取通话文本信息.
     *
     * @param request - GetConversationDetailRequest
     *
     * @returns GetConversationDetailResponse
     *
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
     * @param request - GetDataChannelCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataChannelCredentialsResponse
     *
     * @param GetDataChannelCredentialsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataChannelCredentialsResponse
     */
    public function getDataChannelCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataChannelCredentials',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataChannelCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetDataChannelCredentialsRequest
     *
     * @returns GetDataChannelCredentialsResponse
     *
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
     * 获取黑名单文件上传地址
     *
     * @param request - GetDoNotCallFileUploadParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDoNotCallFileUploadParametersResponse
     *
     * @param GetDoNotCallFileUploadParametersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetDoNotCallFileUploadParametersResponse
     */
    public function getDoNotCallFileUploadParametersWithOptions($request, $runtime)
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
            'action' => 'GetDoNotCallFileUploadParameters',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDoNotCallFileUploadParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取黑名单文件上传地址
     *
     * @param request - GetDoNotCallFileUploadParametersRequest
     *
     * @returns GetDoNotCallFileUploadParametersResponse
     *
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
     * @param request - GetDocumentUploadParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentUploadParametersResponse
     *
     * @param GetDocumentUploadParametersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetDocumentUploadParametersResponse
     */
    public function getDocumentUploadParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentUploadParameters',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocumentUploadParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetDocumentUploadParametersRequest
     *
     * @returns GetDocumentUploadParametersResponse
     *
     * @param GetDocumentUploadParametersRequest $request
     *
     * @return GetDocumentUploadParametersResponse
     */
    public function getDocumentUploadParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentUploadParametersWithOptions($request, $runtime);
    }

    /**
     * 获取早媒体音频.
     *
     * @param request - GetEarlyMediaRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEarlyMediaRecordingResponse
     *
     * @param GetEarlyMediaRecordingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetEarlyMediaRecordingResponse
     */
    public function getEarlyMediaRecordingWithOptions($request, $runtime)
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
            'action' => 'GetEarlyMediaRecording',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEarlyMediaRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取早媒体音频.
     *
     * @param request - GetEarlyMediaRecordingRequest
     *
     * @returns GetEarlyMediaRecordingResponse
     *
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
     * @param request - GetHistoricalCallerReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistoricalCallerReportResponse
     *
     * @param GetHistoricalCallerReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetHistoricalCallerReportResponse
     */
    public function getHistoricalCallerReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'GetHistoricalCallerReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHistoricalCallerReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetHistoricalCallerReportRequest
     *
     * @returns GetHistoricalCallerReportResponse
     *
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
     * 获取预测式外呼活动历史报表.
     *
     * @param request - GetHistoricalCampaignReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistoricalCampaignReportResponse
     *
     * @param GetHistoricalCampaignReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHistoricalCampaignReportResponse
     */
    public function getHistoricalCampaignReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHistoricalCampaignReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHistoricalCampaignReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼活动历史报表.
     *
     * @param request - GetHistoricalCampaignReportRequest
     *
     * @returns GetHistoricalCampaignReportResponse
     *
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
     * @param request - GetHistoricalInstanceReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistoricalInstanceReportResponse
     *
     * @param GetHistoricalInstanceReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHistoricalInstanceReportResponse
     */
    public function getHistoricalInstanceReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHistoricalInstanceReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHistoricalInstanceReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetHistoricalInstanceReportRequest
     *
     * @returns GetHistoricalInstanceReportResponse
     *
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
            'version' => '2020-07-01',
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
     * @param request - GetInstanceTrendingReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceTrendingReportResponse
     *
     * @param GetInstanceTrendingReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetInstanceTrendingReportResponse
     */
    public function getInstanceTrendingReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceTrendingReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceTrendingReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetInstanceTrendingReportRequest
     *
     * @returns GetInstanceTrendingReportResponse
     *
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
     * @param request - GetIvrTrackingSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIvrTrackingSummaryResponse
     *
     * @param GetIvrTrackingSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetIvrTrackingSummaryResponse
     */
    public function getIvrTrackingSummaryWithOptions($request, $runtime)
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
            'action' => 'GetIvrTrackingSummary',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIvrTrackingSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetIvrTrackingSummaryRequest
     *
     * @returns GetIvrTrackingSummaryResponse
     *
     * @param GetIvrTrackingSummaryRequest $request
     *
     * @return GetIvrTrackingSummaryResponse
     */
    public function getIvrTrackingSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIvrTrackingSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - GetLoginDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoginDetailsResponse
     *
     * @param GetLoginDetailsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLoginDetailsResponse
     */
    public function getLoginDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chatDeviceId) {
            @$query['ChatDeviceId'] = $request->chatDeviceId;
        }

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
            'action' => 'GetLoginDetails',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLoginDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetLoginDetailsRequest
     *
     * @returns GetLoginDetailsResponse
     *
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
     * @param request - GetMonoRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonoRecordingResponse
     *
     * @param GetMonoRecordingRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMonoRecordingResponse
     */
    public function getMonoRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->expireSeconds) {
            @$query['ExpireSeconds'] = $request->expireSeconds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMonoRecording',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMonoRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMonoRecordingRequest
     *
     * @returns GetMonoRecordingResponse
     *
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
     * @param request - GetMultiChannelRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiChannelRecordingResponse
     *
     * @param GetMultiChannelRecordingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMultiChannelRecordingResponse
     */
    public function getMultiChannelRecordingWithOptions($request, $runtime)
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
            'action' => 'GetMultiChannelRecording',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMultiChannelRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMultiChannelRecordingRequest
     *
     * @returns GetMultiChannelRecordingResponse
     *
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
     * @param request - GetNumberLocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNumberLocationResponse
     *
     * @param GetNumberLocationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetNumberLocationResponse
     */
    public function getNumberLocationWithOptions($request, $runtime)
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
            'action' => 'GetNumberLocation',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNumberLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetNumberLocationRequest
     *
     * @returns GetNumberLocationResponse
     *
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
     * 获取预测式外呼实时状态
     *
     * @param request - GetRealtimeCampaignStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRealtimeCampaignStatsResponse
     *
     * @param GetRealtimeCampaignStatsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRealtimeCampaignStatsResponse
     */
    public function getRealtimeCampaignStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRealtimeCampaignStats',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRealtimeCampaignStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼实时状态
     *
     * @param request - GetRealtimeCampaignStatsRequest
     *
     * @returns GetRealtimeCampaignStatsResponse
     *
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
     * @param request - GetRealtimeInstanceStatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRealtimeInstanceStatesResponse
     *
     * @param GetRealtimeInstanceStatesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetRealtimeInstanceStatesResponse
     */
    public function getRealtimeInstanceStatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRealtimeInstanceStates',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRealtimeInstanceStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetRealtimeInstanceStatesRequest
     *
     * @returns GetRealtimeInstanceStatesResponse
     *
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
     * @param request - GetSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSchemaResponse
     *
     * @param GetSchemaRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetSchemaResponse
     */
    public function getSchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSchema',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetSchemaRequest
     *
     * @returns GetSchemaResponse
     *
     * @param GetSchemaRequest $request
     *
     * @return GetSchemaResponse
     */
    public function getSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSchemaWithOptions($request, $runtime);
    }

    /**
     * 查询技能组.
     *
     * @param request - GetSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillGroupResponse
     *
     * @param GetSkillGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSkillGroupResponse
     */
    public function getSkillGroupWithOptions($request, $runtime)
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
            'action' => 'GetSkillGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询技能组.
     *
     * @param request - GetSkillGroupRequest
     *
     * @returns GetSkillGroupResponse
     *
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
     * @param request - GetSummaryTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSummaryTemplateResponse
     *
     * @param GetSummaryTemplateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSummaryTemplateResponse
     */
    public function getSummaryTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSummaryTemplate',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSummaryTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetSummaryTemplateRequest
     *
     * @returns GetSummaryTemplateResponse
     *
     * @param GetSummaryTemplateRequest $request
     *
     * @return GetSummaryTemplateResponse
     */
    public function getSummaryTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSummaryTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTicketResponse
     *
     * @param GetTicketRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetTicketResponse
     */
    public function getTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTicket',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTicketRequest
     *
     * @returns GetTicketResponse
     *
     * @param GetTicketRequest $request
     *
     * @return GetTicketResponse
     */
    public function getTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - GetTicketSummaryReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTicketSummaryReportResponse
     *
     * @param GetTicketSummaryReportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetTicketSummaryReportResponse
     */
    public function getTicketSummaryReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assignee) {
            @$query['Assignee'] = $request->assignee;
        }

        if (null !== $request->assigneeType) {
            @$query['AssigneeType'] = $request->assigneeType;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
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

        if (null !== $request->participant) {
            @$query['Participant'] = $request->participant;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTicketSummaryReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTicketSummaryReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTicketSummaryReportRequest
     *
     * @returns GetTicketSummaryReportResponse
     *
     * @param GetTicketSummaryReportRequest $request
     *
     * @return GetTicketSummaryReportResponse
     */
    public function getTicketSummaryReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketSummaryReportWithOptions($request, $runtime);
    }

    /**
     * @param request - GetTicketTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTicketTemplateResponse
     *
     * @param GetTicketTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTicketTemplateResponse
     */
    public function getTicketTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTicketTemplate',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTicketTemplateRequest
     *
     * @returns GetTicketTemplateResponse
     *
     * @param GetTicketTemplateRequest $request
     *
     * @return GetTicketTemplateResponse
     */
    public function getTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetTurnCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTurnCredentialsResponse
     *
     * @param GetTurnCredentialsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTurnCredentialsResponse
     */
    public function getTurnCredentialsWithOptions($request, $runtime)
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
            'action' => 'GetTurnCredentials',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTurnCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTurnCredentialsRequest
     *
     * @returns GetTurnCredentialsResponse
     *
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
     * @param request - GetTurnServerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTurnServerListResponse
     *
     * @param GetTurnServerListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTurnServerListResponse
     */
    public function getTurnServerListWithOptions($request, $runtime)
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
            'action' => 'GetTurnServerList',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTurnServerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTurnServerListRequest
     *
     * @returns GetTurnServerListResponse
     *
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
     * 获取质检参数.
     *
     * @param request - GetUploadAudioDataParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadAudioDataParamsResponse
     *
     * @param GetUploadAudioDataParamsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUploadAudioDataParamsResponse
     */
    public function getUploadAudioDataParamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUploadAudioDataParams',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUploadAudioDataParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取质检参数.
     *
     * @param request - GetUploadAudioDataParamsRequest
     *
     * @returns GetUploadAudioDataParamsResponse
     *
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
        if (null !== $request->extension) {
            @$query['Extension'] = $request->extension;
        }

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
            'version' => '2020-07-01',
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
     * 获取视频.
     *
     * @param request - GetVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoResponse
     *
     * @param GetVideoRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetVideoResponse
     */
    public function getVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideo',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取视频.
     *
     * @param request - GetVideoRequest
     *
     * @returns GetVideoResponse
     *
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
     * @param request - GetVisitorLoginDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVisitorLoginDetailsResponse
     *
     * @param GetVisitorLoginDetailsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetVisitorLoginDetailsResponse
     */
    public function getVisitorLoginDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chatDeviceId) {
            @$query['ChatDeviceId'] = $request->chatDeviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->visitorId) {
            @$query['VisitorId'] = $request->visitorId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVisitorLoginDetails',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVisitorLoginDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetVisitorLoginDetailsRequest
     *
     * @returns GetVisitorLoginDetailsResponse
     *
     * @param GetVisitorLoginDetailsRequest $request
     *
     * @return GetVisitorLoginDetailsResponse
     */
    public function getVisitorLoginDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVisitorLoginDetailsWithOptions($request, $runtime);
    }

    /**
     * @param request - GetVoicemailRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVoicemailRecordingResponse
     *
     * @param GetVoicemailRecordingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetVoicemailRecordingResponse
     */
    public function getVoicemailRecordingWithOptions($request, $runtime)
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
            'action' => 'GetVoicemailRecording',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVoicemailRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetVoicemailRecordingRequest
     *
     * @returns GetVoicemailRecordingResponse
     *
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
     * @param request - HoldCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HoldCallResponse
     *
     * @param HoldCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return HoldCallResponse
     */
    public function holdCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->music) {
            @$query['Music'] = $request->music;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HoldCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HoldCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - HoldCallRequest
     *
     * @returns HoldCallResponse
     *
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
     * @param request - ImportAdminsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportAdminsResponse
     *
     * @param ImportAdminsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImportAdminsResponse
     */
    public function importAdminsWithOptions($request, $runtime)
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
            'action' => 'ImportAdmins',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportAdminsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ImportAdminsRequest
     *
     * @returns ImportAdminsResponse
     *
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
     * @param request - ImportContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportContactFlowResponse
     *
     * @param ImportContactFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportContactFlowResponse
     */
    public function importContactFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->flowPackageData) {
            @$body['FlowPackageData'] = $request->flowPackageData;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportContactFlow',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ImportContactFlowRequest
     *
     * @returns ImportContactFlowResponse
     *
     * @param ImportContactFlowRequest $request
     *
     * @return ImportContactFlowResponse
     */
    public function importContactFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importContactFlowWithOptions($request, $runtime);
    }

    /**
     * @param request - ImportCorpNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportCorpNumbersResponse
     *
     * @param ImportCorpNumbersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportCorpNumbersResponse
     */
    public function importCorpNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->corpName) {
            @$query['CorpName'] = $request->corpName;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->tagList) {
            @$query['TagList'] = $request->tagList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportCorpNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportCorpNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ImportCorpNumbersRequest
     *
     * @returns ImportCorpNumbersResponse
     *
     * @param ImportCorpNumbersRequest $request
     *
     * @return ImportCorpNumbersResponse
     */
    public function importCorpNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCorpNumbersWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * 文件导入呼入控制号码
     *
     * @deprecated openAPI ImportCustomCallTagging is deprecated, please use CCC::2020-07-01::ImportCustomCallTaggings instead
     *
     * @param request - ImportCustomCallTaggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportCustomCallTaggingResponse
     *
     * @param ImportCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ImportCustomCallTaggingResponse
     */
    public function importCustomCallTaggingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportCustomCallTagging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 文件导入呼入控制号码
     *
     * @deprecated openAPI ImportCustomCallTagging is deprecated, please use CCC::2020-07-01::ImportCustomCallTaggings instead
     *
     * @param request - ImportCustomCallTaggingRequest
     *
     * @returns ImportCustomCallTaggingResponse
     *
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
     * 添加黑名单号码
     *
     * @param request - ImportDoNotCallNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportDoNotCallNumbersResponse
     *
     * @param ImportDoNotCallNumbersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ImportDoNotCallNumbersResponse
     */
    public function importDoNotCallNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportDoNotCallNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportDoNotCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加黑名单号码
     *
     * @param request - ImportDoNotCallNumbersRequest
     *
     * @returns ImportDoNotCallNumbersResponse
     *
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
     * @param request - ImportDocumentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportDocumentsResponse
     *
     * @param ImportDocumentsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ImportDocumentsResponse
     */
    public function importDocumentsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ossFileKey) {
            @$body['OssFileKey'] = $request->ossFileKey;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportDocuments',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ImportDocumentsRequest
     *
     * @returns ImportDocumentsResponse
     *
     * @param ImportDocumentsRequest $request
     *
     * @return ImportDocumentsResponse
     */
    public function importDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDocumentsWithOptions($request, $runtime);
    }

    /**
     * @param request - InitiateAttendedTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitiateAttendedTransferResponse
     *
     * @param InitiateAttendedTransferRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InitiateAttendedTransferResponse
     */
    public function initiateAttendedTransferWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callPriority) {
            @$query['CallPriority'] = $request->callPriority;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->queuingOverflowThreshold) {
            @$query['QueuingOverflowThreshold'] = $request->queuingOverflowThreshold;
        }

        if (null !== $request->queuingTimeoutSeconds) {
            @$query['QueuingTimeoutSeconds'] = $request->queuingTimeoutSeconds;
        }

        if (null !== $request->routingType) {
            @$query['RoutingType'] = $request->routingType;
        }

        if (null !== $request->strategyName) {
            @$query['StrategyName'] = $request->strategyName;
        }

        if (null !== $request->strategyParams) {
            @$query['StrategyParams'] = $request->strategyParams;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->transferee) {
            @$query['Transferee'] = $request->transferee;
        }

        if (null !== $request->transfereeType) {
            @$query['TransfereeType'] = $request->transfereeType;
        }

        if (null !== $request->transferor) {
            @$query['Transferor'] = $request->transferor;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitiateAttendedTransfer',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitiateAttendedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - InitiateAttendedTransferRequest
     *
     * @returns InitiateAttendedTransferResponse
     *
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
     * @param request - InterceptCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InterceptCallResponse
     *
     * @param InterceptCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return InterceptCallResponse
     */
    public function interceptCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interceptedUserId) {
            @$query['InterceptedUserId'] = $request->interceptedUserId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InterceptCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InterceptCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - InterceptCallRequest
     *
     * @returns InterceptCallResponse
     *
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
     * @param request - LaunchAuthenticationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LaunchAuthenticationResponse
     *
     * @param LaunchAuthenticationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return LaunchAuthenticationResponse
     */
    public function launchAuthenticationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->contactFlowVariables) {
            @$query['ContactFlowVariables'] = $request->contactFlowVariables;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LaunchAuthentication',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LaunchAuthenticationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - LaunchAuthenticationRequest
     *
     * @returns LaunchAuthenticationResponse
     *
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
     * @param request - LaunchSurveyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LaunchSurveyResponse
     *
     * @param LaunchSurveyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LaunchSurveyResponse
     */
    public function launchSurveyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->contactFlowVariables) {
            @$query['ContactFlowVariables'] = $request->contactFlowVariables;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->smsMetadataId) {
            @$query['SmsMetadataId'] = $request->smsMetadataId;
        }

        if (null !== $request->surveyChannel) {
            @$query['SurveyChannel'] = $request->surveyChannel;
        }

        if (null !== $request->surveyTemplateId) {
            @$query['SurveyTemplateId'] = $request->surveyTemplateId;
        }

        if (null !== $request->surveyTemplateVariables) {
            @$query['SurveyTemplateVariables'] = $request->surveyTemplateVariables;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LaunchSurvey',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LaunchSurveyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - LaunchSurveyRequest
     *
     * @returns LaunchSurveyResponse
     *
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
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentStateLogs',
            'version' => '2020-07-01',
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

    // Deprecated
    /**
     * ListAgentStates for ACC.
     *
     * @deprecated openAPI ListAgentStates is deprecated, please use CCC::2020-07-01::ListRealtimeAgentStates instead
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

        if (null !== $request->excludeOfflineUsers) {
            @$query['ExcludeOfflineUsers'] = $request->excludeOfflineUsers;
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
            'version' => '2020-07-01',
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

    // Deprecated
    /**
     * ListAgentStates for ACC.
     *
     * @deprecated openAPI ListAgentStates is deprecated, please use CCC::2020-07-01::ListRealtimeAgentStates instead
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

    // Deprecated
    /**
     * ListAgentSummaryReportsSinceMidnight for acc.
     *
     * @deprecated openAPI ListAgentSummaryReportsSinceMidnight is deprecated, please use CCC::2020-07-01::ListHistoricalAgentReport instead
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentSummaryReportsSinceMidnight',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentSummaryReportsSinceMidnightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * ListAgentSummaryReportsSinceMidnight for acc.
     *
     * @deprecated openAPI ListAgentSummaryReportsSinceMidnight is deprecated, please use CCC::2020-07-01::ListHistoricalAgentReport instead
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
     * 获取预测式外呼呼叫记录.
     *
     * @param request - ListAttemptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAttemptsResponse
     *
     * @param ListAttemptsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAttemptsResponse
     */
    public function listAttemptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAttempts',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAttemptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼呼叫记录.
     *
     * @param request - ListAttemptsRequest
     *
     * @returns ListAttemptsResponse
     *
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
     * 获取音频文件列表.
     *
     * @param request - ListAudioFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAudioFilesResponse
     *
     * @param ListAudioFilesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAudioFilesResponse
     */
    public function listAudioFilesWithOptions($request, $runtime)
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAudioFiles',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAudioFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取音频文件列表.
     *
     * @param request - ListAudioFilesRequest
     *
     * @returns ListAudioFilesResponse
     *
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
     * 编辑呼入控制号码
     *
     * @param request - ListBlacklistCallTaggingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBlacklistCallTaggingsResponse
     *
     * @param ListBlacklistCallTaggingsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListBlacklistCallTaggingsResponse
     */
    public function listBlacklistCallTaggingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBlacklistCallTaggings',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBlacklistCallTaggingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑呼入控制号码
     *
     * @param request - ListBlacklistCallTaggingsRequest
     *
     * @returns ListBlacklistCallTaggingsResponse
     *
     * @param ListBlacklistCallTaggingsRequest $request
     *
     * @return ListBlacklistCallTaggingsResponse
     */
    public function listBlacklistCallTaggings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBlacklistCallTaggingsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListBriefSkillGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBriefSkillGroupsResponse
     *
     * @param ListBriefSkillGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBriefSkillGroupsResponse
     */
    public function listBriefSkillGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBriefSkillGroups',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBriefSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListBriefSkillGroupsRequest
     *
     * @returns ListBriefSkillGroupsResponse
     *
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
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->contactDisposition) {
            @$query['ContactDisposition'] = $request->contactDisposition;
        }

        if (null !== $request->contactDispositionList) {
            @$query['ContactDispositionList'] = $request->contactDispositionList;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactType) {
            @$query['ContactType'] = $request->contactType;
        }

        if (null !== $request->contactTypeList) {
            @$query['ContactTypeList'] = $request->contactTypeList;
        }

        if (null !== $request->criteria) {
            @$query['Criteria'] = $request->criteria;
        }

        if (null !== $request->earlyMediaStateList) {
            @$query['EarlyMediaStateList'] = $request->earlyMediaStateList;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderByField) {
            @$query['OrderByField'] = $request->orderByField;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->satisfactionDescriptionList) {
            @$query['SatisfactionDescriptionList'] = $request->satisfactionDescriptionList;
        }

        if (null !== $request->satisfactionList) {
            @$query['SatisfactionList'] = $request->satisfactionList;
        }

        if (null !== $request->satisfactionSurveyChannel) {
            @$query['SatisfactionSurveyChannel'] = $request->satisfactionSurveyChannel;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallDetailRecords',
            'version' => '2020-07-01',
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
     * 通话记录列表.
     *
     * @param request - ListCallDetailRecordsV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallDetailRecordsV2Response
     *
     * @param ListCallDetailRecordsV2Request $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListCallDetailRecordsV2Response
     */
    public function listCallDetailRecordsV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessChannelTypeList) {
            @$query['AccessChannelTypeList'] = $request->accessChannelTypeList;
        }

        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->analyticsReportReady) {
            @$query['AnalyticsReportReady'] = $request->analyticsReportReady;
        }

        if (null !== $request->broker) {
            @$query['Broker'] = $request->broker;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->contactDispositionList) {
            @$query['ContactDispositionList'] = $request->contactDispositionList;
        }

        if (null !== $request->contactIdList) {
            @$query['ContactIdList'] = $request->contactIdList;
        }

        if (null !== $request->contactTypeList) {
            @$query['ContactTypeList'] = $request->contactTypeList;
        }

        if (null !== $request->earlyMediaStateList) {
            @$query['EarlyMediaStateList'] = $request->earlyMediaStateList;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->firstAgentId) {
            @$query['FirstAgentId'] = $request->firstAgentId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->orderByField) {
            @$query['OrderByField'] = $request->orderByField;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->releaseInitiatorList) {
            @$query['ReleaseInitiatorList'] = $request->releaseInitiatorList;
        }

        if (null !== $request->releaseReasonList) {
            @$query['ReleaseReasonList'] = $request->releaseReasonList;
        }

        if (null !== $request->satisfactionDescriptionList) {
            @$query['SatisfactionDescriptionList'] = $request->satisfactionDescriptionList;
        }

        if (null !== $request->satisfactionRateList) {
            @$query['SatisfactionRateList'] = $request->satisfactionRateList;
        }

        if (null !== $request->satisfactionSurveyChannel) {
            @$query['SatisfactionSurveyChannel'] = $request->satisfactionSurveyChannel;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallDetailRecordsV2',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallDetailRecordsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通话记录列表.
     *
     * @param request - ListCallDetailRecordsV2Request
     *
     * @returns ListCallDetailRecordsV2Response
     *
     * @param ListCallDetailRecordsV2Request $request
     *
     * @return ListCallDetailRecordsV2Response
     */
    public function listCallDetailRecordsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallDetailRecordsV2WithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - ListCallSummariesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallSummariesResponse
     *
     * @param ListCallSummariesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ListCallSummariesResponse
     */
    public function listCallSummariesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCallSummariesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contactIdList) {
            $request->contactIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contactIdList, 'ContactIdList', 'json');
        }

        $query = [];
        if (null !== $request->contactIdListShrink) {
            @$query['ContactIdList'] = $request->contactIdListShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallSummaries',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListCallSummariesRequest
     *
     * @returns ListCallSummariesResponse
     *
     * @param ListCallSummariesRequest $request
     *
     * @return ListCallSummariesResponse
     */
    public function listCallSummaries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallSummariesWithOptions($request, $runtime);
    }

    /**
     * 列出号码标签.
     *
     * @param request - ListCallTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallTagsResponse
     *
     * @param ListCallTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCallTagsResponse
     */
    public function listCallTagsWithOptions($request, $runtime)
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
            'action' => 'ListCallTags',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出号码标签.
     *
     * @param request - ListCallTagsRequest
     *
     * @returns ListCallTagsResponse
     *
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
     * 获取预测式外呼活动趋势报表.
     *
     * @param request - ListCampaignTrendingReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCampaignTrendingReportResponse
     *
     * @param ListCampaignTrendingReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListCampaignTrendingReportResponse
     */
    public function listCampaignTrendingReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCampaignTrendingReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCampaignTrendingReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼活动趋势报表.
     *
     * @param request - ListCampaignTrendingReportRequest
     *
     * @returns ListCampaignTrendingReportResponse
     *
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
     * 获取预测式外呼活动列表.
     *
     * @param request - ListCampaignsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCampaignsResponse
     *
     * @param ListCampaignsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListCampaignsResponse
     */
    public function listCampaignsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actualStartTimeFrom) {
            @$query['ActualStartTimeFrom'] = $request->actualStartTimeFrom;
        }

        if (null !== $request->actualStartTimeTo) {
            @$query['ActualStartTimeTo'] = $request->actualStartTimeTo;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->planedStartTimeFrom) {
            @$query['PlanedStartTimeFrom'] = $request->planedStartTimeFrom;
        }

        if (null !== $request->planedStartTimeTo) {
            @$query['PlanedStartTimeTo'] = $request->planedStartTimeTo;
        }

        if (null !== $request->queueId) {
            @$query['QueueId'] = $request->queueId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCampaigns',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCampaignsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼活动列表.
     *
     * @param request - ListCampaignsRequest
     *
     * @returns ListCampaignsResponse
     *
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
     * 获取预测式外呼活动的联系人呼叫详情.
     *
     * @param request - ListCasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCasesResponse
     *
     * @param ListCasesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListCasesResponse
     */
    public function listCasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
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

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCases',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼活动的联系人呼叫详情.
     *
     * @param request - ListCasesRequest
     *
     * @returns ListCasesResponse
     *
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
     * @param request - ListCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCategoriesResponse
     *
     * @param ListCategoriesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCategoriesResponse
     */
    public function listCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCategories',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListCategoriesRequest
     *
     * @returns ListCategoriesResponse
     *
     * @param ListCategoriesRequest $request
     *
     * @return ListCategoriesResponse
     */
    public function listCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListCommonTicketFieldsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCommonTicketFieldsResponse
     *
     * @param ListCommonTicketFieldsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListCommonTicketFieldsResponse
     */
    public function listCommonTicketFieldsWithOptions($request, $runtime)
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
            'action' => 'ListCommonTicketFields',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCommonTicketFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListCommonTicketFieldsRequest
     *
     * @returns ListCommonTicketFieldsResponse
     *
     * @param ListCommonTicketFieldsRequest $request
     *
     * @return ListCommonTicketFieldsResponse
     */
    public function listCommonTicketFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommonTicketFieldsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListConfigItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigItemsResponse
     *
     * @param ListConfigItemsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConfigItemsResponse
     */
    public function listConfigItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'ListConfigItems',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListConfigItemsRequest
     *
     * @returns ListConfigItemsResponse
     *
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
     * -.
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

        if (null !== $request->orderByField) {
            @$query['OrderByField'] = $request->orderByField;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContactFlows',
            'version' => '2020-07-01',
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
     * -.
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

    // Deprecated
    /**
     * 列出呼入控制号码
     *
     * @deprecated openAPI ListCustomCallTagging is deprecated, please use CCC::2020-07-01::ListCustomCallTaggings instead
     *
     * @param request - ListCustomCallTaggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomCallTaggingResponse
     *
     * @param ListCustomCallTaggingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCustomCallTaggingResponse
     */
    public function listCustomCallTaggingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callTagNameList) {
            @$query['CallTagNameList'] = $request->callTagNameList;
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

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomCallTagging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 列出呼入控制号码
     *
     * @deprecated openAPI ListCustomCallTagging is deprecated, please use CCC::2020-07-01::ListCustomCallTaggings instead
     *
     * @param request - ListCustomCallTaggingRequest
     *
     * @returns ListCustomCallTaggingResponse
     *
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
     * @param request - ListDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDevicesResponse
     *
     * @param ListDevicesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDevicesResponse
     */
    public function listDevicesWithOptions($request, $runtime)
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
            'action' => 'ListDevices',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListDevicesRequest
     *
     * @returns ListDevicesResponse
     *
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
     * 查询黑名单号码
     *
     * @param request - ListDoNotCallNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDoNotCallNumbersResponse
     *
     * @param ListDoNotCallNumbersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDoNotCallNumbersResponse
     */
    public function listDoNotCallNumbersWithOptions($request, $runtime)
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

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDoNotCallNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDoNotCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询黑名单号码
     *
     * @param request - ListDoNotCallNumbersRequest
     *
     * @returns ListDoNotCallNumbersResponse
     *
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
     * @param tmpReq - ListDocumentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDocumentsResponse
     *
     * @param ListDocumentsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListDocumentsResponse
     */
    public function listDocumentsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDocumentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sorts) {
            $request->sortsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sorts, 'Sorts', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nextPageToken) {
            @$body['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        if (null !== $request->searchPattern) {
            @$body['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->sortsShrink) {
            @$body['Sorts'] = $request->sortsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDocuments',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListDocumentsRequest
     *
     * @returns ListDocumentsResponse
     *
     * @param ListDocumentsRequest $request
     *
     * @return ListDocumentsResponse
     */
    public function listDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocumentsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListFlashSmsApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlashSmsApplicationsResponse
     *
     * @param ListFlashSmsApplicationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListFlashSmsApplicationsResponse
     */
    public function listFlashSmsApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->providerId) {
            @$query['ProviderId'] = $request->providerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlashSmsApplications',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlashSmsApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListFlashSmsApplicationsRequest
     *
     * @returns ListFlashSmsApplicationsResponse
     *
     * @param ListFlashSmsApplicationsRequest $request
     *
     * @return ListFlashSmsApplicationsResponse
     */
    public function listFlashSmsApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlashSmsApplicationsWithOptions($request, $runtime);
    }

    /**
     * 获取闪信模板列表.
     *
     * @param request - ListFlashSmsTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlashSmsTemplatesResponse
     *
     * @param ListFlashSmsTemplatesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListFlashSmsTemplatesResponse
     */
    public function listFlashSmsTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->providerId) {
            @$query['ProviderId'] = $request->providerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlashSmsTemplates',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlashSmsTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取闪信模板列表.
     *
     * @param request - ListFlashSmsTemplatesRequest
     *
     * @returns ListFlashSmsTemplatesResponse
     *
     * @param ListFlashSmsTemplatesRequest $request
     *
     * @return ListFlashSmsTemplatesResponse
     */
    public function listFlashSmsTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlashSmsTemplatesWithOptions($request, $runtime);
    }

    /**
     * ListGroupChatMessages.
     *
     * @param request - ListGroupChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupChatMessagesResponse
     *
     * @param ListGroupChatMessagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListGroupChatMessagesResponse
     */
    public function listGroupChatMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupChatMessages',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupChatMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListGroupChatMessages.
     *
     * @param request - ListGroupChatMessagesRequest
     *
     * @returns ListGroupChatMessagesResponse
     *
     * @param ListGroupChatMessagesRequest $request
     *
     * @return ListGroupChatMessagesResponse
     */
    public function listGroupChatMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupChatMessagesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListHistoricalAgentReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHistoricalAgentReportResponse
     *
     * @param ListHistoricalAgentReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListHistoricalAgentReportResponse
     */
    public function listHistoricalAgentReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
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

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        $body = [];
        if (null !== $request->agentIdList) {
            @$body['AgentIdList'] = $request->agentIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHistoricalAgentReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHistoricalAgentReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListHistoricalAgentReportRequest
     *
     * @returns ListHistoricalAgentReportResponse
     *
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
     * ListHistoricalAgentSkillGroupReport.
     *
     * @param request - ListHistoricalAgentSkillGroupReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHistoricalAgentSkillGroupReportResponse
     *
     * @param ListHistoricalAgentSkillGroupReportRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListHistoricalAgentSkillGroupReportResponse
     */
    public function listHistoricalAgentSkillGroupReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $body = [];
        if (null !== $request->agentIdList) {
            @$body['AgentIdList'] = $request->agentIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHistoricalAgentSkillGroupReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHistoricalAgentSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListHistoricalAgentSkillGroupReport.
     *
     * @param request - ListHistoricalAgentSkillGroupReportRequest
     *
     * @returns ListHistoricalAgentSkillGroupReportResponse
     *
     * @param ListHistoricalAgentSkillGroupReportRequest $request
     *
     * @return ListHistoricalAgentSkillGroupReportResponse
     */
    public function listHistoricalAgentSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHistoricalAgentSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param request - ListHistoricalSkillGroupReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHistoricalSkillGroupReportResponse
     *
     * @param ListHistoricalSkillGroupReportRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListHistoricalSkillGroupReportResponse
     */
    public function listHistoricalSkillGroupReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
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

        $body = [];
        if (null !== $request->skillGroupIdList) {
            @$body['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHistoricalSkillGroupReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHistoricalSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListHistoricalSkillGroupReportRequest
     *
     * @returns ListHistoricalSkillGroupReportResponse
     *
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
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListInstances',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
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
     * @param request - ListInstancesOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesOfUserResponse
     *
     * @param ListInstancesOfUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstancesOfUserResponse
     */
    public function listInstancesOfUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListInstancesOfUser',
            'version' => '2020-07-01',
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
     * @param request - ListInstancesOfUserRequest
     *
     * @returns ListInstancesOfUserResponse
     *
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
     * @param request - ListIntervalAgentReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntervalAgentReportResponse
     *
     * @param ListIntervalAgentReportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListIntervalAgentReportResponse
     */
    public function listIntervalAgentReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
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

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntervalAgentReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntervalAgentReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListIntervalAgentReportRequest
     *
     * @returns ListIntervalAgentReportResponse
     *
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
     * ListIntervalAgentSkillGroupReport.
     *
     * @param request - ListIntervalAgentSkillGroupReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntervalAgentSkillGroupReportResponse
     *
     * @param ListIntervalAgentSkillGroupReportRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListIntervalAgentSkillGroupReportResponse
     */
    public function listIntervalAgentSkillGroupReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntervalAgentSkillGroupReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntervalAgentSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListIntervalAgentSkillGroupReport.
     *
     * @param request - ListIntervalAgentSkillGroupReportRequest
     *
     * @returns ListIntervalAgentSkillGroupReportResponse
     *
     * @param ListIntervalAgentSkillGroupReportRequest $request
     *
     * @return ListIntervalAgentSkillGroupReportResponse
     */
    public function listIntervalAgentSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalAgentSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param request - ListIntervalInstanceReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntervalInstanceReportResponse
     *
     * @param ListIntervalInstanceReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListIntervalInstanceReportResponse
     */
    public function listIntervalInstanceReportWithOptions($request, $runtime)
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntervalInstanceReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntervalInstanceReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListIntervalInstanceReportRequest
     *
     * @returns ListIntervalInstanceReportResponse
     *
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
     * @param request - ListIntervalSkillGroupReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntervalSkillGroupReportResponse
     *
     * @param ListIntervalSkillGroupReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListIntervalSkillGroupReportResponse
     */
    public function listIntervalSkillGroupReportWithOptions($request, $runtime)
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

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
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
            'action' => 'ListIntervalSkillGroupReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntervalSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListIntervalSkillGroupReportRequest
     *
     * @returns ListIntervalSkillGroupReportResponse
     *
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
     * @param request - ListIvrTrackingDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIvrTrackingDetailsResponse
     *
     * @param ListIvrTrackingDetailsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListIvrTrackingDetailsResponse
     */
    public function listIvrTrackingDetailsWithOptions($request, $runtime)
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
            'action' => 'ListIvrTrackingDetails',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIvrTrackingDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListIvrTrackingDetailsRequest
     *
     * @returns ListIvrTrackingDetailsResponse
     *
     * @param ListIvrTrackingDetailsRequest $request
     *
     * @return ListIvrTrackingDetailsResponse
     */
    public function listIvrTrackingDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIvrTrackingDetailsWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * ListLegacyAgentEventLogs.
     *
     * @deprecated openAPI ListLegacyAgentEventLogs is deprecated, please use CCC::2020-07-01::ListAgentStateLogs instead
     *
     * @param request - ListLegacyAgentEventLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLegacyAgentEventLogsResponse
     *
     * @param ListLegacyAgentEventLogsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListLegacyAgentEventLogsResponse
     */
    public function listLegacyAgentEventLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLegacyAgentEventLogs',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLegacyAgentEventLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * ListLegacyAgentEventLogs.
     *
     * @deprecated openAPI ListLegacyAgentEventLogs is deprecated, please use CCC::2020-07-01::ListAgentStateLogs instead
     *
     * @param request - ListLegacyAgentEventLogsRequest
     *
     * @returns ListLegacyAgentEventLogsResponse
     *
     * @param ListLegacyAgentEventLogsRequest $request
     *
     * @return ListLegacyAgentEventLogsResponse
     */
    public function listLegacyAgentEventLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLegacyAgentEventLogsWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * ListLegacyAgentStatusLogs.
     *
     * @deprecated openAPI ListLegacyAgentStatusLogs is deprecated, please use CCC::2020-07-01::ListAgentStateLogs instead
     *
     * @param request - ListLegacyAgentStatusLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLegacyAgentStatusLogsResponse
     *
     * @param ListLegacyAgentStatusLogsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListLegacyAgentStatusLogsResponse
     */
    public function listLegacyAgentStatusLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLegacyAgentStatusLogs',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLegacyAgentStatusLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * ListLegacyAgentStatusLogs.
     *
     * @deprecated openAPI ListLegacyAgentStatusLogs is deprecated, please use CCC::2020-07-01::ListAgentStateLogs instead
     *
     * @param request - ListLegacyAgentStatusLogsRequest
     *
     * @returns ListLegacyAgentStatusLogsResponse
     *
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
     * ListLegacyAppraiseLogs.
     *
     * @param request - ListLegacyAppraiseLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLegacyAppraiseLogsResponse
     *
     * @param ListLegacyAppraiseLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListLegacyAppraiseLogsResponse
     */
    public function listLegacyAppraiseLogsWithOptions($request, $runtime)
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
            'action' => 'ListLegacyAppraiseLogs',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLegacyAppraiseLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListLegacyAppraiseLogs.
     *
     * @param request - ListLegacyAppraiseLogsRequest
     *
     * @returns ListLegacyAppraiseLogsResponse
     *
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
     * ListLegacyQueueEventLogs.
     *
     * @param request - ListLegacyQueueEventLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLegacyQueueEventLogsResponse
     *
     * @param ListLegacyQueueEventLogsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListLegacyQueueEventLogsResponse
     */
    public function listLegacyQueueEventLogsWithOptions($request, $runtime)
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
            'action' => 'ListLegacyQueueEventLogs',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLegacyQueueEventLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListLegacyQueueEventLogs.
     *
     * @param request - ListLegacyQueueEventLogsRequest
     *
     * @returns ListLegacyQueueEventLogsResponse
     *
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
     * @param request - ListMonoRecordingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMonoRecordingsResponse
     *
     * @param ListMonoRecordingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListMonoRecordingsResponse
     */
    public function listMonoRecordingsWithOptions($request, $runtime)
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
            'action' => 'ListMonoRecordings',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMonoRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMonoRecordingsRequest
     *
     * @returns ListMonoRecordingsResponse
     *
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
     * @param request - ListMultiChannelRecordingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMultiChannelRecordingsResponse
     *
     * @param ListMultiChannelRecordingsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListMultiChannelRecordingsResponse
     */
    public function listMultiChannelRecordingsWithOptions($request, $runtime)
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
            'action' => 'ListMultiChannelRecordings',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultiChannelRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMultiChannelRecordingsRequest
     *
     * @returns ListMultiChannelRecordingsResponse
     *
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
     * 该坐席可用的外呼号码列表.
     *
     * @param request - ListOutboundNumbersOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOutboundNumbersOfUserResponse
     *
     * @param ListOutboundNumbersOfUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListOutboundNumbersOfUserResponse
     */
    public function listOutboundNumbersOfUserWithOptions($request, $runtime)
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

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOutboundNumbersOfUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOutboundNumbersOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 该坐席可用的外呼号码列表.
     *
     * @param request - ListOutboundNumbersOfUserRequest
     *
     * @returns ListOutboundNumbersOfUserResponse
     *
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
     * @param request - ListPersonalNumbersOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPersonalNumbersOfUserResponse
     *
     * @param ListPersonalNumbersOfUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPersonalNumbersOfUserResponse
     */
    public function listPersonalNumbersOfUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isMember) {
            @$query['IsMember'] = $request->isMember;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPersonalNumbersOfUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPersonalNumbersOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListPersonalNumbersOfUserRequest
     *
     * @returns ListPersonalNumbersOfUserResponse
     *
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
     * 获取号码列表.
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
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
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

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPhoneNumbers',
            'version' => '2020-07-01',
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
     * 获取号码列表.
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
     * @param request - ListPhoneNumbersOfSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPhoneNumbersOfSkillGroupResponse
     *
     * @param ListPhoneNumbersOfSkillGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListPhoneNumbersOfSkillGroupResponse
     */
    public function listPhoneNumbersOfSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isMember) {
            @$query['IsMember'] = $request->isMember;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPhoneNumbersOfSkillGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPhoneNumbersOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListPhoneNumbersOfSkillGroupRequest
     *
     * @returns ListPhoneNumbersOfSkillGroupResponse
     *
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
     * @param request - ListPrivilegesOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivilegesOfUserResponse
     *
     * @param ListPrivilegesOfUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPrivilegesOfUserResponse
     */
    public function listPrivilegesOfUserWithOptions($request, $runtime)
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
            'action' => 'ListPrivilegesOfUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivilegesOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListPrivilegesOfUserRequest
     *
     * @returns ListPrivilegesOfUserResponse
     *
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
     * @param request - ListRamUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRamUsersResponse
     *
     * @param ListRamUsersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListRamUsersResponse
     */
    public function listRamUsersWithOptions($request, $runtime)
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

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRamUsers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRamUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListRamUsersRequest
     *
     * @returns ListRamUsersResponse
     *
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
     * @param request - ListRealtimeAgentStatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRealtimeAgentStatesResponse
     *
     * @param ListRealtimeAgentStatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListRealtimeAgentStatesResponse
     */
    public function listRealtimeAgentStatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->callTypeList) {
            @$query['CallTypeList'] = $request->callTypeList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->outboundScenario) {
            @$query['OutboundScenario'] = $request->outboundScenario;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->workModeList) {
            @$query['WorkModeList'] = $request->workModeList;
        }

        $body = [];
        if (null !== $request->agentIdList) {
            @$body['AgentIdList'] = $request->agentIdList;
        }

        if (null !== $request->stateList) {
            @$body['StateList'] = $request->stateList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRealtimeAgentStates',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRealtimeAgentStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListRealtimeAgentStatesRequest
     *
     * @returns ListRealtimeAgentStatesResponse
     *
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
     * @param request - ListRealtimeSkillGroupStatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRealtimeSkillGroupStatesResponse
     *
     * @param ListRealtimeSkillGroupStatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListRealtimeSkillGroupStatesResponse
     */
    public function listRealtimeSkillGroupStatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->skillGroupIdList) {
            @$body['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRealtimeSkillGroupStates',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRealtimeSkillGroupStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListRealtimeSkillGroupStatesRequest
     *
     * @returns ListRealtimeSkillGroupStatesResponse
     *
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
     * @param request - ListRecentCallDetailRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecentCallDetailRecordsResponse
     *
     * @param ListRecentCallDetailRecordsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListRecentCallDetailRecordsResponse
     */
    public function listRecentCallDetailRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->criteria) {
            @$query['Criteria'] = $request->criteria;
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

        $body = [];
        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRecentCallDetailRecords',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecentCallDetailRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListRecentCallDetailRecordsRequest
     *
     * @returns ListRecentCallDetailRecordsResponse
     *
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
            'version' => '2020-07-01',
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

    // Deprecated
    /**
     * ListSkillGroupStates for acc.
     *
     * @deprecated openAPI ListSkillGroupStates is deprecated, please use CCC::2020-07-01::ListRealtimeSkillGroupStates instead
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroupStates',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * ListSkillGroupStates for acc.
     *
     * @deprecated openAPI ListSkillGroupStates is deprecated, please use CCC::2020-07-01::ListRealtimeSkillGroupStates instead
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

    // Deprecated
    /**
     * ListSkillGroupSummaryReportsSinceMidnight for acc.
     *
     * @deprecated openAPI ListSkillGroupSummaryReportsSinceMidnight is deprecated, please use CCC::2020-07-01::ListHistoricalSkillGroupReport instead
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroupSummaryReportsSinceMidnight',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupSummaryReportsSinceMidnightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * ListSkillGroupSummaryReportsSinceMidnight for acc.
     *
     * @deprecated openAPI ListSkillGroupSummaryReportsSinceMidnight is deprecated, please use CCC::2020-07-01::ListHistoricalSkillGroupReport instead
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

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroups',
            'version' => '2020-07-01',
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
     * @param request - ListSkillLevelsOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillLevelsOfUserResponse
     *
     * @param ListSkillLevelsOfUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSkillLevelsOfUserResponse
     */
    public function listSkillLevelsOfUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isMember) {
            @$query['IsMember'] = $request->isMember;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillLevelsOfUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillLevelsOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListSkillLevelsOfUserRequest
     *
     * @returns ListSkillLevelsOfUserResponse
     *
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
     * @param request - ListSmsMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSmsMetadataResponse
     *
     * @param ListSmsMetadataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSmsMetadataResponse
     */
    public function listSmsMetadataWithOptions($request, $runtime)
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

        if (null !== $request->scenarioListJson) {
            @$query['ScenarioListJson'] = $request->scenarioListJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSmsMetadata',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSmsMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListSmsMetadataRequest
     *
     * @returns ListSmsMetadataResponse
     *
     * @param ListSmsMetadataRequest $request
     *
     * @return ListSmsMetadataResponse
     */
    public function listSmsMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmsMetadataWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTicketTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTicketTasksResponse
     *
     * @param ListTicketTasksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListTicketTasksResponse
     */
    public function listTicketTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTicketTasks',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTicketTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListTicketTasksRequest
     *
     * @returns ListTicketTasksResponse
     *
     * @param ListTicketTasksRequest $request
     *
     * @return ListTicketTasksResponse
     */
    public function listTicketTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTicketTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTicketTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTicketTemplatesResponse
     *
     * @param ListTicketTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListTicketTemplatesResponse
     */
    public function listTicketTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
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

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTicketTemplates',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTicketTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListTicketTemplatesRequest
     *
     * @returns ListTicketTemplatesResponse
     *
     * @param ListTicketTemplatesRequest $request
     *
     * @return ListTicketTemplatesResponse
     */
    public function listTicketTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTicketTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTicketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTicketsResponse
     *
     * @param ListTicketsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTicketsResponse
     */
    public function listTicketsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assignee) {
            @$query['Assignee'] = $request->assignee;
        }

        if (null !== $request->assigneeType) {
            @$query['AssigneeType'] = $request->assigneeType;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobIdList) {
            @$query['JobIdList'] = $request->jobIdList;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->participant) {
            @$query['Participant'] = $request->participant;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTickets',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListTicketsRequest
     *
     * @returns ListTicketsResponse
     *
     * @param ListTicketsRequest $request
     *
     * @return ListTicketsResponse
     */
    public function listTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTicketsWithOptions($request, $runtime);
    }

    /**
     * 获取未分配号码列表.
     *
     * @param request - ListUnassignedNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUnassignedNumbersResponse
     *
     * @param ListUnassignedNumbersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUnassignedNumbersResponse
     */
    public function listUnassignedNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUnassignedNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUnassignedNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取未分配号码列表.
     *
     * @param request - ListUnassignedNumbersRequest
     *
     * @returns ListUnassignedNumbersResponse
     *
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
     * @param request - ListUserLevelsOfSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserLevelsOfSkillGroupResponse
     *
     * @param ListUserLevelsOfSkillGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUserLevelsOfSkillGroupResponse
     */
    public function listUserLevelsOfSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isMember) {
            @$query['IsMember'] = $request->isMember;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserLevelsOfSkillGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserLevelsOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListUserLevelsOfSkillGroupRequest
     *
     * @returns ListUserLevelsOfSkillGroupResponse
     *
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

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2020-07-01',
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
     * ListVisitorChatMessages.
     *
     * @param request - ListVisitorChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVisitorChatMessagesResponse
     *
     * @param ListVisitorChatMessagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVisitorChatMessagesResponse
     */
    public function listVisitorChatMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessChannelId) {
            @$query['AccessChannelId'] = $request->accessChannelId;
        }

        if (null !== $request->accessToken) {
            @$query['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->visitorId) {
            @$query['VisitorId'] = $request->visitorId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVisitorChatMessages',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVisitorChatMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListVisitorChatMessages.
     *
     * @param request - ListVisitorChatMessagesRequest
     *
     * @returns ListVisitorChatMessagesResponse
     *
     * @param ListVisitorChatMessagesRequest $request
     *
     * @return ListVisitorChatMessagesResponse
     */
    public function listVisitorChatMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVisitorChatMessagesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListVoicemailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVoicemailsResponse
     *
     * @param ListVoicemailsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListVoicemailsResponse
     */
    public function listVoicemailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'ListVoicemails',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVoicemailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListVoicemailsRequest
     *
     * @returns ListVoicemailsResponse
     *
     * @param ListVoicemailsRequest $request
     *
     * @return ListVoicemailsResponse
     */
    public function listVoicemails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoicemailsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListWaitingChatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWaitingChatsResponse
     *
     * @param ListWaitingChatsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListWaitingChatsResponse
     */
    public function listWaitingChatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWaitingChats',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWaitingChatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListWaitingChatsRequest
     *
     * @returns ListWaitingChatsResponse
     *
     * @param ListWaitingChatsRequest $request
     *
     * @return ListWaitingChatsResponse
     */
    public function listWaitingChats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWaitingChatsWithOptions($request, $runtime);
    }

    /**
     * @param request - MakeCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MakeCallResponse
     *
     * @param MakeCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MakeCallResponse
     */
    public function makeCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->flashSmsVariables) {
            @$query['FlashSmsVariables'] = $request->flashSmsVariables;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maskedCallee) {
            @$query['MaskedCallee'] = $request->maskedCallee;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MakeCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MakeCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MakeCallRequest
     *
     * @returns MakeCallResponse
     *
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
     * @param request - ModifyAudioFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAudioFileResponse
     *
     * @param ModifyAudioFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyAudioFileResponse
     */
    public function modifyAudioFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audioFileName) {
            @$query['AudioFileName'] = $request->audioFileName;
        }

        if (null !== $request->audioResourceId) {
            @$query['AudioResourceId'] = $request->audioResourceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossFileKey) {
            @$query['OssFileKey'] = $request->ossFileKey;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAudioFile',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAudioFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyAudioFileRequest
     *
     * @returns ModifyAudioFileResponse
     *
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
     * 编辑呼入控制号码
     *
     * @param request - ModifyCustomCallTaggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCustomCallTaggingResponse
     *
     * @param ModifyCustomCallTaggingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyCustomCallTaggingResponse
     */
    public function modifyCustomCallTaggingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callTagNameList) {
            @$query['CallTagNameList'] = $request->callTagNameList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

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
            'action' => 'ModifyCustomCallTagging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCustomCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑呼入控制号码
     *
     * @param request - ModifyCustomCallTaggingRequest
     *
     * @returns ModifyCustomCallTaggingResponse
     *
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
     * @param request - ModifyInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceResponse
     *
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstance',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyInstanceRequest
     *
     * @returns ModifyInstanceResponse
     *
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

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->usage) {
            @$query['Usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPhoneNumber',
            'version' => '2020-07-01',
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
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

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
            'action' => 'ModifySkillGroup',
            'version' => '2020-07-01',
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
     * @param request - ModifySkillLevelsOfUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySkillLevelsOfUserResponse
     *
     * @param ModifySkillLevelsOfUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySkillLevelsOfUserResponse
     */
    public function modifySkillLevelsOfUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillLevelList) {
            @$query['SkillLevelList'] = $request->skillLevelList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySkillLevelsOfUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySkillLevelsOfUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifySkillLevelsOfUserRequest
     *
     * @returns ModifySkillLevelsOfUserResponse
     *
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
        if (null !== $request->avatarUrl) {
            @$query['AvatarUrl'] = $request->avatarUrl;
        }

        if (null !== $request->displayId) {
            @$query['DisplayId'] = $request->displayId;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->nickname) {
            @$query['Nickname'] = $request->nickname;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workMode) {
            @$query['WorkMode'] = $request->workMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUser',
            'version' => '2020-07-01',
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
     * @param request - ModifyUserLevelsOfSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserLevelsOfSkillGroupResponse
     *
     * @param ModifyUserLevelsOfSkillGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyUserLevelsOfSkillGroupResponse
     */
    public function modifyUserLevelsOfSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->userLevelList) {
            @$query['UserLevelList'] = $request->userLevelList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserLevelsOfSkillGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserLevelsOfSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyUserLevelsOfSkillGroupRequest
     *
     * @returns ModifyUserLevelsOfSkillGroupResponse
     *
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
     * @param request - MonitorCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MonitorCallResponse
     *
     * @param MonitorCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MonitorCallResponse
     */
    public function monitorCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->monitoredUserId) {
            @$query['MonitoredUserId'] = $request->monitoredUserId;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MonitorCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MonitorCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MonitorCallRequest
     *
     * @returns MonitorCallResponse
     *
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
     * @param request - MuteCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MuteCallResponse
     *
     * @param MuteCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MuteCallResponse
     */
    public function muteCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MuteCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MuteCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MuteCallRequest
     *
     * @returns MuteCallResponse
     *
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
     * 暂停预测式外呼活动.
     *
     * @param request - PauseCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseCampaignResponse
     *
     * @param PauseCampaignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PauseCampaignResponse
     */
    public function pauseCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PauseCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 暂停预测式外呼活动.
     *
     * @param request - PauseCampaignRequest
     *
     * @returns PauseCampaignResponse
     *
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
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PickOutboundNumbers',
            'version' => '2020-07-01',
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
     * @param request - PollUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PollUserStatusResponse
     *
     * @param PollUserStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PollUserStatusResponse
     */
    public function pollUserStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

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
            'action' => 'PollUserStatus',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PollUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PollUserStatusRequest
     *
     * @returns PollUserStatusResponse
     *
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
     * ProcessAliMeCallbackOfStaging.
     *
     * @param request - ProcessAliMeCallbackOfStagingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProcessAliMeCallbackOfStagingResponse
     *
     * @param ProcessAliMeCallbackOfStagingRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ProcessAliMeCallbackOfStagingResponse
     */
    public function processAliMeCallbackOfStagingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProcessAliMeCallbackOfStaging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProcessAliMeCallbackOfStagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ProcessAliMeCallbackOfStaging.
     *
     * @param request - ProcessAliMeCallbackOfStagingRequest
     *
     * @returns ProcessAliMeCallbackOfStagingResponse
     *
     * @param ProcessAliMeCallbackOfStagingRequest $request
     *
     * @return ProcessAliMeCallbackOfStagingResponse
     */
    public function processAliMeCallbackOfStaging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processAliMeCallbackOfStagingWithOptions($request, $runtime);
    }

    /**
     * @param request - ProcessCustomIMCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProcessCustomIMCallbackResponse
     *
     * @param ProcessCustomIMCallbackRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ProcessCustomIMCallbackResponse
     */
    public function processCustomIMCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessChannelId) {
            @$body['AccessChannelId'] = $request->accessChannelId;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageContent) {
            @$body['MessageContent'] = $request->messageContent;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->senderAvatarMediaId) {
            @$body['SenderAvatarMediaId'] = $request->senderAvatarMediaId;
        }

        if (null !== $request->senderId) {
            @$body['SenderId'] = $request->senderId;
        }

        if (null !== $request->senderName) {
            @$body['SenderName'] = $request->senderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ProcessCustomIMCallback',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProcessCustomIMCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ProcessCustomIMCallbackRequest
     *
     * @returns ProcessCustomIMCallbackResponse
     *
     * @param ProcessCustomIMCallbackRequest $request
     *
     * @return ProcessCustomIMCallbackResponse
     */
    public function processCustomIMCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processCustomIMCallbackWithOptions($request, $runtime);
    }

    /**
     * @param request - PublishContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishContactFlowResponse
     *
     * @param PublishContactFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PublishContactFlowResponse
     */
    public function publishContactFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->draftId) {
            @$query['DraftId'] = $request->draftId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishContactFlow',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PublishContactFlowRequest
     *
     * @returns PublishContactFlowResponse
     *
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
     * @param request - ReadyForServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadyForServiceResponse
     *
     * @param ReadyForServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReadyForServiceResponse
     */
    public function readyForServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundScenario) {
            @$query['OutboundScenario'] = $request->outboundScenario;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReadyForService',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadyForServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReadyForServiceRequest
     *
     * @returns ReadyForServiceResponse
     *
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
     * @param request - RedialCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RedialCallResponse
     *
     * @param RedialCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RedialCallResponse
     */
    public function redialCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RedialCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RedialCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RedialCallRequest
     *
     * @returns RedialCallResponse
     *
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
     * @param request - RegisterDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterDeviceResponse
     *
     * @param RegisterDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RegisterDeviceResponse
     */
    public function registerDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterDevice',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RegisterDeviceRequest
     *
     * @returns RegisterDeviceResponse
     *
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
     * @param request - RegisterDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterDevicesResponse
     *
     * @param RegisterDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterDevicesResponse
     */
    public function registerDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->userIdListJson) {
            @$query['UserIdListJson'] = $request->userIdListJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterDevices',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RegisterDevicesRequest
     *
     * @returns RegisterDevicesResponse
     *
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
     * @param request - RejectChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RejectChatResponse
     *
     * @param RejectChatRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RejectChatResponse
     */
    public function rejectChatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RejectChat',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RejectChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RejectChatRequest
     *
     * @returns RejectChatResponse
     *
     * @param RejectChatRequest $request
     *
     * @return RejectChatResponse
     */
    public function rejectChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectChatWithOptions($request, $runtime);
    }

    /**
     * @param request - RejectTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RejectTicketResponse
     *
     * @param RejectTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RejectTicketResponse
     */
    public function rejectTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RejectTicket',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RejectTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RejectTicketRequest
     *
     * @returns RejectTicketResponse
     *
     * @param RejectTicketRequest $request
     *
     * @return RejectTicketResponse
     */
    public function rejectTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - ReleaseCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseCallResponse
     *
     * @param ReleaseCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ReleaseCallResponse
     */
    public function releaseCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseCallRequest
     *
     * @returns ReleaseCallResponse
     *
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
     * @param request - ReleaseChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseChatResponse
     *
     * @param ReleaseChatRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ReleaseChatResponse
     */
    public function releaseChatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseChat',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseChatRequest
     *
     * @returns ReleaseChatResponse
     *
     * @param ReleaseChatRequest $request
     *
     * @return ReleaseChatResponse
     */
    public function releaseChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseChatWithOptions($request, $runtime);
    }

    /**
     * 编辑呼入控制号码
     *
     * @param request - RemoveBlacklistCallTaggingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveBlacklistCallTaggingResponse
     *
     * @param RemoveBlacklistCallTaggingRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RemoveBlacklistCallTaggingResponse
     */
    public function removeBlacklistCallTaggingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveBlacklistCallTagging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveBlacklistCallTaggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑呼入控制号码
     *
     * @param request - RemoveBlacklistCallTaggingRequest
     *
     * @returns RemoveBlacklistCallTaggingResponse
     *
     * @param RemoveBlacklistCallTaggingRequest $request
     *
     * @return RemoveBlacklistCallTaggingResponse
     */
    public function removeBlacklistCallTagging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBlacklistCallTaggingWithOptions($request, $runtime);
    }

    /**
     * 删除黑名单号码
     *
     * @param request - RemoveDoNotCallNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDoNotCallNumbersResponse
     *
     * @param RemoveDoNotCallNumbersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveDoNotCallNumbersResponse
     */
    public function removeDoNotCallNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveDoNotCallNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveDoNotCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除黑名单号码
     *
     * @param request - RemoveDoNotCallNumbersRequest
     *
     * @returns RemoveDoNotCallNumbersResponse
     *
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
     * @param request - RemovePersonalNumbersFromUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePersonalNumbersFromUserResponse
     *
     * @param RemovePersonalNumbersFromUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RemovePersonalNumbersFromUserResponse
     */
    public function removePersonalNumbersFromUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePersonalNumbersFromUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePersonalNumbersFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemovePersonalNumbersFromUserRequest
     *
     * @returns RemovePersonalNumbersFromUserResponse
     *
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
     * @param request - RemovePhoneNumberFromSkillGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePhoneNumberFromSkillGroupsResponse
     *
     * @param RemovePhoneNumberFromSkillGroupsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemovePhoneNumberFromSkillGroupsResponse
     */
    public function removePhoneNumberFromSkillGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePhoneNumberFromSkillGroups',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePhoneNumberFromSkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemovePhoneNumberFromSkillGroupsRequest
     *
     * @returns RemovePhoneNumberFromSkillGroupsResponse
     *
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
     * @param request - RemovePhoneNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePhoneNumbersResponse
     *
     * @param RemovePhoneNumbersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemovePhoneNumbersResponse
     */
    public function removePhoneNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePhoneNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemovePhoneNumbersRequest
     *
     * @returns RemovePhoneNumbersResponse
     *
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
     * @param request - RemovePhoneNumbersFromSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePhoneNumbersFromSkillGroupResponse
     *
     * @param RemovePhoneNumbersFromSkillGroupRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemovePhoneNumbersFromSkillGroupResponse
     */
    public function removePhoneNumbersFromSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePhoneNumbersFromSkillGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePhoneNumbersFromSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemovePhoneNumbersFromSkillGroupRequest
     *
     * @returns RemovePhoneNumbersFromSkillGroupResponse
     *
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
     * @param request - RemoveSkillGroupsFromUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSkillGroupsFromUserResponse
     *
     * @param RemoveSkillGroupsFromUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveSkillGroupsFromUserResponse
     */
    public function removeSkillGroupsFromUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveSkillGroupsFromUser',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveSkillGroupsFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemoveSkillGroupsFromUserRequest
     *
     * @returns RemoveSkillGroupsFromUserResponse
     *
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
        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->notificationEmail) {
            @$query['NotificationEmail'] = $request->notificationEmail;
        }

        if (null !== $request->userIdList) {
            @$query['UserIdList'] = $request->userIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUsers',
            'version' => '2020-07-01',
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

        if (null !== $request->userIdList) {
            @$query['UserIdList'] = $request->userIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUsersFromSkillGroup',
            'version' => '2020-07-01',
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
     * @param request - ResetAgentStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAgentStateResponse
     *
     * @param ResetAgentStateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResetAgentStateResponse
     */
    public function resetAgentStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

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
            'action' => 'ResetAgentState',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAgentStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResetAgentStateRequest
     *
     * @returns ResetAgentStateResponse
     *
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
     * @param request - ResetUserPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetUserPasswordResponse
     *
     * @param ResetUserPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetUserPassword',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResetUserPasswordRequest
     *
     * @returns ResetUserPasswordResponse
     *
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
     * 录音解冻.
     *
     * @param request - RestoreArchivedRecordingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreArchivedRecordingsResponse
     *
     * @param RestoreArchivedRecordingsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RestoreArchivedRecordingsResponse
     */
    public function restoreArchivedRecordingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactIds) {
            @$query['ContactIds'] = $request->contactIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestoreArchivedRecordings',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreArchivedRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 录音解冻.
     *
     * @param request - RestoreArchivedRecordingsRequest
     *
     * @returns RestoreArchivedRecordingsResponse
     *
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
     * @param request - ResubmitTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResubmitTicketResponse
     *
     * @param ResubmitTicketRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResubmitTicketResponse
     */
    public function resubmitTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResubmitTicket',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResubmitTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResubmitTicketRequest
     *
     * @returns ResubmitTicketResponse
     *
     * @param ResubmitTicketRequest $request
     *
     * @return ResubmitTicketResponse
     */
    public function resubmitTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resubmitTicketWithOptions($request, $runtime);
    }

    /**
     * 恢复预测式外呼活动.
     *
     * @param request - ResumeCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeCampaignResponse
     *
     * @param ResumeCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeCampaignResponse
     */
    public function resumeCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 恢复预测式外呼活动.
     *
     * @param request - ResumeCampaignRequest
     *
     * @returns ResumeCampaignResponse
     *
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
     * @param request - RetrieveCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetrieveCallResponse
     *
     * @param RetrieveCallRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RetrieveCallResponse
     */
    public function retrieveCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetrieveCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetrieveCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RetrieveCallRequest
     *
     * @returns RetrieveCallResponse
     *
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
     * @param request - SaveDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveDocumentResponse
     *
     * @param SaveDocumentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SaveDocumentResponse
     */
    public function saveDocumentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->documentId) {
            @$body['DocumentId'] = $request->documentId;
        }

        if (null !== $request->documentJson) {
            @$body['DocumentJson'] = $request->documentJson;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveDocument',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveDocumentRequest
     *
     * @returns SaveDocumentResponse
     *
     * @param SaveDocumentRequest $request
     *
     * @return SaveDocumentResponse
     */
    public function saveDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDocumentWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveRTCStatsV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveRTCStatsV2Response
     *
     * @param SaveRTCStatsV2Request $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveRTCStatsV2Response
     */
    public function saveRTCStatsV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->generalInfo) {
            @$query['GeneralInfo'] = $request->generalInfo;
        }

        if (null !== $request->googAddress) {
            @$query['GoogAddress'] = $request->googAddress;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->receiverReport) {
            @$query['ReceiverReport'] = $request->receiverReport;
        }

        if (null !== $request->senderReport) {
            @$query['SenderReport'] = $request->senderReport;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveRTCStatsV2',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveRTCStatsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveRTCStatsV2Request
     *
     * @returns SaveRTCStatsV2Response
     *
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
     * @param request - SaveTerminalLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTerminalLogResponse
     *
     * @param SaveTerminalLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveTerminalLogResponse
     */
    public function saveTerminalLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->methodName) {
            @$query['MethodName'] = $request->methodName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->uniqueRequestId) {
            @$query['UniqueRequestId'] = $request->uniqueRequestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTerminalLog',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTerminalLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveTerminalLogRequest
     *
     * @returns SaveTerminalLogResponse
     *
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

        if (null !== $request->generalInfo) {
            @$query['GeneralInfo'] = $request->generalInfo;
        }

        if (null !== $request->googAddress) {
            @$query['GoogAddress'] = $request->googAddress;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->receiverReport) {
            @$query['ReceiverReport'] = $request->receiverReport;
        }

        if (null !== $request->senderReport) {
            @$query['SenderReport'] = $request->senderReport;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveWebRTCStats',
            'version' => '2020-07-01',
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
     * @param request - SaveWebRtcInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveWebRtcInfoResponse
     *
     * @param SaveWebRtcInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveWebRtcInfoResponse
     */
    public function saveWebRtcInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveWebRtcInfo',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveWebRtcInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveWebRtcInfoRequest
     *
     * @returns SaveWebRtcInfoResponse
     *
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
     * @param request - SendDtmfSignalingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendDtmfSignalingResponse
     *
     * @param SendDtmfSignalingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendDtmfSignalingResponse
     */
    public function sendDtmfSignalingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->dtmf) {
            @$query['Dtmf'] = $request->dtmf;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendDtmfSignaling',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendDtmfSignalingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SendDtmfSignalingRequest
     *
     * @returns SendDtmfSignalingResponse
     *
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
     * @param request - SignInGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SignInGroupResponse
     *
     * @param SignInGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SignInGroupResponse
     */
    public function signInGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additivity) {
            @$query['Additivity'] = $request->additivity;
        }

        if (null !== $request->chatDeviceId) {
            @$query['ChatDeviceId'] = $request->chatDeviceId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->signedSkillGroupIdList) {
            @$query['SignedSkillGroupIdList'] = $request->signedSkillGroupIdList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SignInGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SignInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SignInGroupRequest
     *
     * @returns SignInGroupResponse
     *
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
     * @param request - SignOutGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SignOutGroupResponse
     *
     * @param SignOutGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SignOutGroupResponse
     */
    public function signOutGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

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
            'action' => 'SignOutGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SignOutGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SignOutGroupRequest
     *
     * @returns SignOutGroupResponse
     *
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
        if (null !== $request->additionalBroker) {
            @$query['AdditionalBroker'] = $request->additionalBroker;
        }

        if (null !== $request->broker) {
            @$query['Broker'] = $request->broker;
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

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartBack2BackCall',
            'version' => '2020-07-01',
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

    /**
     * @param tmpReq - StartChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartChatResponse
     *
     * @param StartChatRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return StartChatResponse
     */
    public function startChatWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userList) {
            $request->userListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userList, 'UserList', 'json');
        }

        $query = [];
        if (null !== $request->accessChannelId) {
            @$query['AccessChannelId'] = $request->accessChannelId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userListShrink) {
            @$query['UserList'] = $request->userListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartChat',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartChatRequest
     *
     * @returns StartChatResponse
     *
     * @param StartChatRequest $request
     *
     * @return StartChatResponse
     */
    public function startChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startChatWithOptions($request, $runtime);
    }

    /**
     * @param request - StartConferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartConferenceResponse
     *
     * @param StartConferenceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartConferenceResponse
     */
    public function startConferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->participantListJson) {
            @$query['ParticipantListJson'] = $request->participantListJson;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartConference',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartConferenceRequest
     *
     * @returns StartConferenceResponse
     *
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
     * @param request - StartEditContactFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartEditContactFlowResponse
     *
     * @param StartEditContactFlowRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartEditContactFlowResponse
     */
    public function startEditContactFlowWithOptions($request, $runtime)
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
            'action' => 'StartEditContactFlow',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartEditContactFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartEditContactFlowRequest
     *
     * @returns StartEditContactFlowResponse
     *
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
     * @param request - StartPredictiveCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartPredictiveCallResponse
     *
     * @param StartPredictiveCallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartPredictiveCallResponse
     */
    public function startPredictiveCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->contactFlowVariables) {
            @$query['ContactFlowVariables'] = $request->contactFlowVariables;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maskedCallee) {
            @$query['MaskedCallee'] = $request->maskedCallee;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartPredictiveCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartPredictiveCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartPredictiveCallRequest
     *
     * @returns StartPredictiveCallResponse
     *
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
     * 发起隐私呼叫.
     *
     * @param request - StartPrivacyCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartPrivacyCallResponse
     *
     * @param StartPrivacyCallRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartPrivacyCallResponse
     */
    public function startPrivacyCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartPrivacyCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartPrivacyCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发起隐私呼叫.
     *
     * @param request - StartPrivacyCallRequest
     *
     * @returns StartPrivacyCallResponse
     *
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
     * 提交预测式外呼活动.
     *
     * @param request - SubmitCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitCampaignResponse
     *
     * @param SubmitCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitCampaignResponse
     */
    public function submitCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交预测式外呼活动.
     *
     * @param request - SubmitCampaignRequest
     *
     * @returns SubmitCampaignResponse
     *
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
     * @param request - SwitchToConferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchToConferenceResponse
     *
     * @param SwitchToConferenceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwitchToConferenceResponse
     */
    public function switchToConferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchToConference',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchToConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SwitchToConferenceRequest
     *
     * @returns SwitchToConferenceResponse
     *
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
     * @param request - TakeBreakRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TakeBreakResponse
     *
     * @param TakeBreakRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return TakeBreakResponse
     */
    public function takeBreakWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

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
            'action' => 'TakeBreak',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TakeBreakResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TakeBreakRequest
     *
     * @returns TakeBreakResponse
     *
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
     * @param request - TerminateTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminateTicketResponse
     *
     * @param TerminateTicketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TerminateTicketResponse
     */
    public function terminateTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TerminateTicket',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TerminateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TerminateTicketRequest
     *
     * @returns TerminateTicketResponse
     *
     * @param TerminateTicketRequest $request
     *
     * @return TerminateTicketResponse
     */
    public function terminateTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - TransferTicketTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferTicketTaskResponse
     *
     * @param TransferTicketTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TransferTicketTaskResponse
     */
    public function transferTicketTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assignee) {
            @$query['Assignee'] = $request->assignee;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferTicketTask',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferTicketTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TransferTicketTaskRequest
     *
     * @returns TransferTicketTaskResponse
     *
     * @param TransferTicketTaskRequest $request
     *
     * @return TransferTicketTaskResponse
     */
    public function transferTicketTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferTicketTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - UnmuteCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnmuteCallResponse
     *
     * @param UnmuteCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UnmuteCallResponse
     */
    public function unmuteCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnmuteCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnmuteCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UnmuteCallRequest
     *
     * @returns UnmuteCallResponse
     *
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
     * 删除注册设备.
     *
     * @param request - UnregisterDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnregisterDeviceResponse
     *
     * @param UnregisterDeviceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnregisterDeviceResponse
     */
    public function unregisterDeviceWithOptions($request, $runtime)
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
            'action' => 'UnregisterDevice',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnregisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除注册设备.
     *
     * @param request - UnregisterDeviceRequest
     *
     * @returns UnregisterDeviceResponse
     *
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
     * @param request - UpdateCallSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCallSummaryResponse
     *
     * @param UpdateCallSummaryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCallSummaryResponse
     */
    public function updateCallSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->context) {
            @$query['Context'] = $request->context;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCallSummary',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCallSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateCallSummaryRequest
     *
     * @returns UpdateCallSummaryResponse
     *
     * @param UpdateCallSummaryRequest $request
     *
     * @return UpdateCallSummaryResponse
     */
    public function updateCallSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCallSummaryWithOptions($request, $runtime);
    }

    /**
     * Update campaign.
     *
     * @param request - UpdateCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCampaignResponse
     *
     * @param UpdateCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCampaignResponse
     */
    public function updateCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callableTime) {
            @$query['CallableTime'] = $request->callableTime;
        }

        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->strategyParameters) {
            @$query['StrategyParameters'] = $request->strategyParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update campaign.
     *
     * @param request - UpdateCampaignRequest
     *
     * @returns UpdateCampaignResponse
     *
     * @param UpdateCampaignRequest $request
     *
     * @return UpdateCampaignResponse
     */
    public function updateCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCampaignWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateChatRoutingProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateChatRoutingProfileResponse
     *
     * @param UpdateChatRoutingProfileRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateChatRoutingProfileResponse
     */
    public function updateChatRoutingProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->routingProfiles) {
            @$query['RoutingProfiles'] = $request->routingProfiles;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateChatRoutingProfile',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateChatRoutingProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateChatRoutingProfileRequest
     *
     * @returns UpdateChatRoutingProfileResponse
     *
     * @param UpdateChatRoutingProfileRequest $request
     *
     * @return UpdateChatRoutingProfileResponse
     */
    public function updateChatRoutingProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChatRoutingProfileWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateConfigItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigItemsResponse
     *
     * @param UpdateConfigItemsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateConfigItemsResponse
     */
    public function updateConfigItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configItems) {
            @$query['ConfigItems'] = $request->configItems;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'UpdateConfigItems',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConfigItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateConfigItemsRequest
     *
     * @returns UpdateConfigItemsResponse
     *
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
     * @param tmpReq - UpdateSchemaPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSchemaPropertyResponse
     *
     * @param UpdateSchemaPropertyRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateSchemaPropertyResponse
     */
    public function updateSchemaPropertyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSchemaPropertyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->property) {
            $request->propertyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->property, 'Property', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->propertyShrink) {
            @$body['Property'] = $request->propertyShrink;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSchemaProperty',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSchemaPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateSchemaPropertyRequest
     *
     * @returns UpdateSchemaPropertyResponse
     *
     * @param UpdateSchemaPropertyRequest $request
     *
     * @return UpdateSchemaPropertyResponse
     */
    public function updateSchemaProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSchemaPropertyWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTicketResponse
     *
     * @param UpdateTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateTicketResponse
     */
    public function updateTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->context) {
            @$query['Context'] = $request->context;
        }

        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTicket',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateTicketRequest
     *
     * @returns UpdateTicketResponse
     *
     * @param UpdateTicketRequest $request
     *
     * @return UpdateTicketResponse
     */
    public function updateTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - WithdrawTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WithdrawTicketResponse
     *
     * @param WithdrawTicketRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return WithdrawTicketResponse
     */
    public function withdrawTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WithdrawTicket',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WithdrawTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - WithdrawTicketRequest
     *
     * @returns WithdrawTicketResponse
     *
     * @param WithdrawTicketRequest $request
     *
     * @return WithdrawTicketResponse
     */
    public function withdrawTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawTicketWithOptions($request, $runtime);
    }
}
