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
use AlibabaCloud\SDK\CCC\V20200701\Models\ClaimCallRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ClaimCallResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportRamUsersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ImportRamUsersResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFeedbacksRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFeedbacksResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsApplicationsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsApplicationsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsSettingsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsSettingsResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListFlashSmsSettingsShrinkRequest;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ListNotificationRecordsRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListNotificationRecordsResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyCampaignNumbersRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyCampaignNumbersResponse;
use AlibabaCloud\SDK\CCC\V20200701\Models\ModifyCampaignNumbersShrinkRequest;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\SendNotificationRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\SendNotificationResponse;
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
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSubscriptionResponse;
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
     * Invoke AbortCampaign to stop the predictive outbound calling Activity corresponding to the specified Activity ID under the specified instance.
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
     * Invoke AbortCampaign to stop the predictive outbound calling Activity corresponding to the specified Activity ID under the specified instance.
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
     * Call this operation to accept a chat.
     *
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
     * Call this operation to accept a chat.
     *
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
     * Adds a blacklist tag to a specified phone number. You can use this feature with your Interactive Voice Response (IVR) settings to block frequent harassing calls.
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
     * Adds a blacklist tag to a specified phone number. You can use this feature with your Interactive Voice Response (IVR) settings to block frequent harassing calls.
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
     * Invoke AddCases to add an outbound call list to a predictive dialing activity identified by a specified ID under a specified instance.
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
     * Invoke AddCases to add an outbound call list to a predictive dialing activity identified by a specified ID under a specified instance.
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
     * You can use the AddFeedback API to evaluate and rate AI features.
     *
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
     * You can use the AddFeedback API to evaluate and rate AI features.
     *
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
     * Adds one or more phone numbers to a skill group by calling AddNumbersToSkillGroup.
     *
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
     * Adds one or more phone numbers to a skill group by calling AddNumbersToSkillGroup.
     *
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
     * You can invoke AddPersonalNumbersToUser to add one or more personal outbound numbers to a specified agent under a specified instance.
     *
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
     * You can invoke AddPersonalNumbersToUser to add one or more personal outbound numbers to a specified agent under a specified instance.
     *
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
     * You can invoke AddPhoneNumberToSkillGroups to associate a phone number with one or more skill groups under a specified instance.
     *
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
     * You can invoke AddPhoneNumberToSkillGroups to associate a phone number with one or more skill groups under a specified instance.
     *
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
     * You can invoke AddPhoneNumbers to add one or more phone numbers to a specified instance.
     *
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
     * You can invoke AddPhoneNumbers to add one or more phone numbers to a specified instance.
     *
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
     * You can invoke AddSkillGroupsToUser to add one or more skill groups to a specified agent under a specified instance.
     *
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
     * You can invoke AddSkillGroupsToUser to add one or more skill groups to a specified agent under a specified instance.
     *
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
     * Use AddTicketTask to add a signature and assign an assignee.
     *
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
     * Use AddTicketTask to add a signature and assign an assignee.
     *
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
     * You can invoke AddUsersToSkillGroup to add one or more agents to the same skill group.
     *
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
     * You can invoke AddUsersToSkillGroup to add one or more agents to the same skill group.
     *
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
     * Analyze the specified text-based conversation content and extract summary-related information, such as the title, keywords, summary, and other specified details.
     *
     * @remarks
     * This API can be used for both online chat sessions and voice sessions. When used for voice sessions, the real-time speech-to-text transcription feature must be enabled.
     *
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
     * Analyze the specified text-based conversation content and extract summary-related information, such as the title, keywords, summary, and other specified details.
     *
     * @remarks
     * This API can be used for both online chat sessions and voice sessions. When used for voice sessions, the real-time speech-to-text transcription feature must be enabled.
     *
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
     * You can invoke AnswerCall to answer the call associated with a specified call ID under a specified instance.
     *
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
     * You can invoke AnswerCall to answer the call associated with a specified call ID under a specified instance.
     *
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
     * Adds cases to a predictive campaign in a specified instance.
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
     * Adds cases to a predictive campaign in a specified instance.
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

    /**
     * Call AssignUsers to import one or more RAM users into a specified instance. After the import, the RAM users become agents in the instance.
     *
     * @remarks
     * Accounts with RAM permissions can view all RAM users under an Alibaba Cloud account in the RAM console. You can access the RAM console at https\\://ram.console.aliyun.com/users.
     *
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
        if (null !== $request->async) {
            @$query['Async'] = $request->async;
        }

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
     * Call AssignUsers to import one or more RAM users into a specified instance. After the import, the RAM users become agents in the instance.
     *
     * @remarks
     * Accounts with RAM permissions can view all RAM users under an Alibaba Cloud account in the RAM console. You can access the RAM console at https\\://ram.console.aliyun.com/users.
     *
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
     * You can invoke BargeInCall to forcibly insert into an ongoing call associated with a specified call ID under a specified instance. After the forced insertion succeeds, the original two-party call becomes a three-party conference call.
     *
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
     * You can invoke BargeInCall to forcibly insert into an ongoing call associated with a specified call ID under a specified instance. After the forced insertion succeeds, the original two-party call becomes a three-party conference call.
     *
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
     * Directly transfer a call to another agent, a skill group queue, or an external number. Direct transfer is also known as blind transfer or single-step transfer.
     *
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
     * Directly transfer a call to another agent, a skill group queue, or an external number. Direct transfer is also known as blind transfer or single-step transfer.
     *
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
     * BridgeRtcCall.
     *
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
     * BridgeRtcCall.
     *
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
     * You can invoke the CancelAttendedTransfer API to cancel an attended transfer. You can call this API at any time after initiating the attended transfer and before completing it, even if the transferee has already answered the call.
     *
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
     * You can invoke the CancelAttendedTransfer API to cancel an attended transfer. You can call this API at any time after initiating the attended transfer and before completing it, even if the transferee has already answered the call.
     *
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
     * Changes an agent\\"s status to invisible. This is equivalent to the outbound-only mode.
     *
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
     * Changes an agent\\"s status to invisible. This is equivalent to the outbound-only mode.
     *
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
     * You can invoke ChangeWorkMode to change the agent\\"s work mode.
     *
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
     * You can invoke ChangeWorkMode to change the agent\\"s work mode.
     *
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
     * Call the `ClaimCall` API to assign a call to an agent.
     *
     * @param request - ClaimCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClaimCallResponse
     *
     * @param ClaimCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ClaimCallResponse
     */
    public function claimCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->candidateUserListJson) {
            @$query['CandidateUserListJson'] = $request->candidateUserListJson;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClaimCall',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClaimCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the `ClaimCall` API to assign a call to an agent.
     *
     * @param request - ClaimCallRequest
     *
     * @returns ClaimCallResponse
     *
     * @param ClaimCallRequest $request
     *
     * @return ClaimCallResponse
     */
    public function claimCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->claimCallWithOptions($request, $runtime);
    }

    /**
     * You can call ClaimChat to claim the chat for a specified Job ID in a specified instance.
     *
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
     * You can call ClaimChat to claim the chat for a specified Job ID in a specified instance.
     *
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
     * You can invoke CoachCall to coach a specified agent in a specified call (identified by a call ID) under a specified instance. During the coaching session, the coached agent can hear the coach\\"s voice, but the customer cannot hear the coach\\"s voice.
     *
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
     * You can invoke CoachCall to coach a specified agent in a specified call (identified by a call ID) under a specified instance. During the coaching session, the coached agent can hear the coach\\"s voice, but the customer cannot hear the coach\\"s voice.
     *
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
     * Commits a contact flow.
     *
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
     * Commits a contact flow.
     *
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
     * You can invoke CompleteAttendedTransfer to complete a consultative transfer.
     *
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
     * You can invoke CompleteAttendedTransfer to complete a consultative transfer.
     *
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
     * You can invoke CreateAudioFile to create an audio resource under a specified instance. The created audio resource can be used in the instance, such as selecting the audio file for playback during IVR.
     *
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
     * You can invoke CreateAudioFile to create an audio resource under a specified instance. The created audio resource can be used in the instance, such as selecting the audio file for playback during IVR.
     *
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
     * Use the CreateCallSummary operation to create a call summary.
     *
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
     * Use the CreateCallSummary operation to create a call summary.
     *
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
     * You can invoke CreateCallTags to create multiple call tags under a specified instance.
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
     * You can invoke CreateCallTags to create multiple call tags under a specified instance.
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
     * You can invoke CreateCampaign to create a predictive outbound calling activity under a specified instance.
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

        if (null !== $tmpReq->numberList) {
            $request->numberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numberList, 'NumberList', 'json');
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

        if (null !== $request->flashSmsParameters) {
            @$query['FlashSmsParameters'] = $request->flashSmsParameters;
        }

        if (null !== $request->instGroupId) {
            @$query['InstGroupId'] = $request->instGroupId;
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

        if (null !== $request->numberListShrink) {
            @$query['NumberList'] = $request->numberListShrink;
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
     * You can invoke CreateCampaign to create a predictive outbound calling activity under a specified instance.
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
     * Creates an IVR flow.
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
     * Creates an IVR flow.
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
     * You can invoke CreateCustomCallTagging to create one or more inbound number tags under a specified instance.
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
     * You can invoke CreateCustomCallTagging to create one or more inbound number tags under a specified instance.
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
     * Invoke CreateInstance to create a Cloud Contact Center instance.
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
     * Invoke CreateInstance to create a Cloud Contact Center instance.
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
     * You can call CreateSkillGroup to create a skill group under a specified instance.
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
     * You can call CreateSkillGroup to create a skill group under a specified instance.
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
     * Use CreateTicket to create a ticket.
     *
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
     * Use CreateTicket to create a ticket.
     *
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
     * Call the CreateUser operation to create a new agent in a specified instance.
     *
     * @remarks
     * Creating an agent is equivalent to creating a Resource Access Management (RAM) sub-account. Agents in Cloud Contact Center are mapped to RAM sub-accounts. Therefore, the parameters for creating an agent are similar to those for creating a RAM account. For example, LoginName is the logon name for the RAM account. Email is the email address associated with the RAM account. This email address receives an email containing the initial logon password for the RAM account.
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

        if (null !== $request->needEmailNotification) {
            @$query['NeedEmailNotification'] = $request->needEmailNotification;
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
     * Call the CreateUser operation to create a new agent in a specified instance.
     *
     * @remarks
     * Creating an agent is equivalent to creating a Resource Access Management (RAM) sub-account. Agents in Cloud Contact Center are mapped to RAM sub-accounts. Therefore, the parameters for creating an agent are similar to those for creating a RAM account. For example, LoginName is the logon name for the RAM account. Email is the email address associated with the RAM account. This email address receives an email containing the initial logon password for the RAM account.
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
     * You can invoke DeleteAudioFile to delete the audio file associated with a specified audio resource ID under a specified instance.
     *
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
     * You can invoke DeleteAudioFile to delete the audio file associated with a specified audio resource ID under a specified instance.
     *
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
     * You can invoke DeleteCallTag to delete a phone number tag under a specified instance.
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
     * You can invoke DeleteCallTag to delete a phone number tag under a specified instance.
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
     * Deletes the specified contact flow.
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
     * Deletes the specified contact flow.
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
     * You can invoke DeleteCustomCallTagging to delete the inbound number tag associated with a specified number under a specified instance.
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
     * You can invoke DeleteCustomCallTagging to delete the inbound number tag associated with a specified number under a specified instance.
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
     * Invoke DeleteSkillGroup to delete the skill group associated with the specified skill group ID under the specified instance.
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
     * Invoke DeleteSkillGroup to delete the skill group associated with the specified skill group ID under the specified instance.
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
     * Deletes a specified ticket.
     *
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
     * Deletes a specified ticket.
     *
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
     * Deletes a specified ticket template.
     *
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
     * Deletes a specified ticket template.
     *
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
     * Use the DisableTicketTemplate operation to disable a ticket template. A disabled template cannot be selected when you create a new ticket.
     *
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
     * Use the DisableTicketTemplate operation to disable a ticket template. A disabled template cannot be selected when you create a new ticket.
     *
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
     * Revoke contact flow editing and discard the associated draft.
     *
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
     * Revoke contact flow editing and discard the associated draft.
     *
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
     * The EnableTicketTemplate operation publishes a ticket template. Published ticket templates can be used to create tickets.
     *
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
     * The EnableTicketTemplate operation publishes a ticket template. Published ticket templates can be used to create tickets.
     *
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
     * You can invoke EndConference to make the specified agent exit the call associated with the specified call ID under the specified instance. The call must be in a conference state.
     *
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
     * You can invoke EndConference to make the specified agent exit the call associated with the specified call ID under the specified instance. The call must be in a conference state.
     *
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

    /**
     * You can invoke ExportCustomCallTagging to export all inbound number tags under a specified instance.
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
     * You can invoke ExportCustomCallTagging to export all inbound number tags under a specified instance.
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
     * The ExportDoNotCallNumbers operation exports a filtered list of do-not-call numbers from a specified instance.
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
     * The ExportDoNotCallNumbers operation exports a filtered list of do-not-call numbers from a specified instance.
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
     * Use the FinishTicketTask operation to process tickets.
     *
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
     * Use the FinishTicketTask operation to process tickets.
     *
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
     * 获取指定Chat渠道配置.
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
     * 获取指定Chat渠道配置.
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
     * Invoke GetAudioFile to obtain the audio file information corresponding to a specified audio resource ID under a specified instance.
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
     * Invoke GetAudioFile to obtain the audio file information corresponding to a specified audio resource ID under a specified instance.
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
     * Invoke GetAudioFileDownloadUrl to obtain the OSS download link for a specified audio resource under a specified instance.
     *
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
     * Invoke GetAudioFileDownloadUrl to obtain the OSS download link for a specified audio resource under a specified instance.
     *
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
     * Invoke the GetAudioFileUploadParameters API to obtain audio file upload parameters. Before creating an audio file, you must first call this API to retrieve the upload parameters and then call CreateAudioFile to create the audio file. This API is typically invoked by the default public cloud CRM system provided by Cloud Contact Center. It is not recommended for integration customers to call this API directly, because file upload must be performed through a Page operation first; only after the upload is complete can the GetAudioFileUploadParameters API be called.
     *
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
     * Invoke the GetAudioFileUploadParameters API to obtain audio file upload parameters. Before creating an audio file, you must first call this API to retrieve the upload parameters and then call CreateAudioFile to create the audio file. This API is typically invoked by the default public cloud CRM system provided by Cloud Contact Center. It is not recommended for integration customers to call this API directly, because file upload must be performed through a Page operation first; only after the upload is complete can the GetAudioFileUploadParameters API be called.
     *
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
     * You can invoke the GetCallDetailRecord operation to retrieve call details for a specific call ID within a specific instance.
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
     * You can invoke the GetCallDetailRecord operation to retrieve call details for a specific call ID within a specific instance.
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
     * Gets a predictive outbound campaign by its ID from a specified instance.
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
     * Gets a predictive outbound campaign by its ID from a specified instance.
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
     * Invoke GetCaseFileUploadUrl to obtain the OSS upload parameters for a predictive outbound calling list file under a specified instance. When creating a predictive outbound calling Activity by importing a file, you must first invoke this API to retrieve the file upload parameters and then invoke the CreateCampaign API.
     *
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
     * Invoke GetCaseFileUploadUrl to obtain the OSS upload parameters for a predictive outbound calling list file under a specified instance. When creating a predictive outbound calling Activity by importing a file, you must first invoke this API to retrieve the file upload parameters and then invoke the CreateCampaign API.
     *
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
     * Use GetChatRoutingProfile to retrieve the chat routing configuration.
     *
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
     * Use GetChatRoutingProfile to retrieve the chat routing configuration.
     *
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
     * Retrieve a specified contact flow.
     *
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
     * Retrieve a specified contact flow.
     *
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
     * Call GetConversationDetail to obtain the conversation details for the call corresponding to the specified contact ID within the specified instance. The instance and skill group must have quality inspection push enabled to obtain these details.
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
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
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
     * Call GetConversationDetail to obtain the conversation details for the call corresponding to the specified contact ID within the specified instance. The instance and skill group must have quality inspection push enabled to obtain these details.
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
     * 获取DataChannel通道的Token信息.
     *
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
     * 获取DataChannel通道的Token信息.
     *
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
     * Invoke GetDoNotCallFileUploadParameters to obtain the upload parameters for a do-not-call file. When importing prohibited outbound call numbers through a file, you must first invoke this API to upload the do-not-call number file to the public OSS space of Cloud Contact Center, and then invoke ImportDoNotCallNumbers to execute the import.
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
     * Invoke GetDoNotCallFileUploadParameters to obtain the upload parameters for a do-not-call file. When importing prohibited outbound call numbers through a file, you must first invoke this API to upload the do-not-call number file to the public OSS space of Cloud Contact Center, and then invoke ImportDoNotCallNumbers to execute the import.
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
     * Retrieve early-media audio recordings for a call in a specified Cloud Contact Center instance.
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
     * Retrieve early-media audio recordings for a call in a specified Cloud Contact Center instance.
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
     * Invoke GetHistoricalCallerReport to retrieve the historical inbound call report for a specified calling number under a specified instance.
     *
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
     * Invoke GetHistoricalCallerReport to retrieve the historical inbound call report for a specified calling number under a specified instance.
     *
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
     * You can invoke the GetHistoricalCampaignReport API to retrieve the historical data report of a predictive outbound calling activity corresponding to a specified ID under a specified instance.
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
     * You can invoke the GetHistoricalCampaignReport API to retrieve the historical data report of a predictive outbound calling activity corresponding to a specified ID under a specified instance.
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
     * You can invoke GetHistoricalInstanceReport to obtain the historical data report for a specified instance.
     *
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
     * You can invoke GetHistoricalInstanceReport to obtain the historical data report for a specified instance.
     *
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
     * Retrieves the details of a Cloud Contact Center instance.
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
     * Retrieves the details of a Cloud Contact Center instance.
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
     * You can call GetInstanceTrendingReport to retrieve the trend report for a specified instance.
     *
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
     * You can call GetInstanceTrendingReport to retrieve the trend report for a specified instance.
     *
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
     * Retrieve the IVR tracking summary.
     *
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
     * Retrieve the IVR tracking summary.
     *
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
     * Invoke GetLoginDetails to obtain the agent\\"s logon information, including basic agent information, server address information, authentication information, and more. This API can only be invoked by the agent themselves; administrators are not permitted to invoke it on behalf of others.
     *
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
     * Invoke GetLoginDetails to obtain the agent\\"s logon information, including basic agent information, server address information, authentication information, and more. This API can only be invoked by the agent themselves; administrators are not permitted to invoke it on behalf of others.
     *
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
     * You can invoke GetMonoRecording to obtain the single-track recording of a specified call under a specified instance. A single-track recording contains only one audio track, with both the agent-side and customer-side recordings merged into the same track in WAV format.
     *
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
     * You can invoke GetMonoRecording to obtain the single-track recording of a specified call under a specified instance. A single-track recording contains only one audio track, with both the agent-side and customer-side recordings merged into the same track in WAV format.
     *
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
     * You can invoke GetMultiChannelRecording to obtain the multi-track recording of a specified call under a specified instance. In the multi-track recording, the agent\\"s and customer\\"s audio are distributed across different sound channels. During each playback, only one sound channel can be played, meaning you can hear only one party\\"s voice. The format is MKV.
     *
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
     * You can invoke GetMultiChannelRecording to obtain the multi-track recording of a specified call under a specified instance. In the multi-track recording, the agent\\"s and customer\\"s audio are distributed across different sound channels. During each playback, only one sound channel can be played, meaning you can hear only one party\\"s voice. The format is MKV.
     *
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
     * Invoke the GetNumberLocation API to obtain number location information.
     *
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
     * Invoke the GetNumberLocation API to obtain number location information.
     *
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
     * You can invoke GetRealtimeCampaignStats to retrieve real-time agent status data for a predictive outbound calling Activity with a specified ID under a specified instance.
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
     * You can invoke GetRealtimeCampaignStats to retrieve real-time agent status data for a predictive outbound calling Activity with a specified ID under a specified instance.
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
     * You can invoke GetRealtimeInstanceStates to obtain the real-time status of a specified instance.
     *
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
     * You can invoke GetRealtimeInstanceStates to obtain the real-time status of a specified instance.
     *
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
     * You can invoke GetSkillGroup to obtain information about the skill group corresponding to a specified skill group ID under a specified instance.
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
     * You can invoke GetSkillGroup to obtain information about the skill group corresponding to a specified skill group ID under a specified instance.
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
     * Retrieves the content of a session summary template.
     *
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
     * Retrieves the content of a session summary template.
     *
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
     * Retrieves information about a specific ticket.
     *
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
     * Retrieves information about a specific ticket.
     *
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
     * You can call GetTicketSummaryReport to retrieve a summary of ticket statuses.
     *
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
     * You can call GetTicketSummaryReport to retrieve a summary of ticket statuses.
     *
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
     * Call GetTicketTemplate to retrieve ticket template definitions.
     *
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
     * Call GetTicketTemplate to retrieve ticket template definitions.
     *
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
     * Call GetTurnCredentials to get the connection credentials for a Cloud Contact Center Point of Presence (PoP). These credentials include a username and password for authentication. Connecting to Cloud Contact Center through a PoP improves network quality and stability.
     *
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
     * Call GetTurnCredentials to get the connection credentials for a Cloud Contact Center Point of Presence (PoP). These credentials include a username and password for authentication. Connecting to Cloud Contact Center through a PoP improves network quality and stability.
     *
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
     * Call GetTurnServerList to get a list of front-end access points for Alibaba Cloud Contact Center. Connecting through these access points improves network quality and stability.
     *
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
     * Call GetTurnServerList to get a list of front-end access points for Alibaba Cloud Contact Center. Connecting through these access points improves network quality and stability.
     *
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
     * Obtain the parameters related to offline quality inspection audio files. Normally, if the Customer has configured the quality inspection feature in Cloud Contact Center, the audio files requiring offline quality inspection and their corresponding parameters are automatically passed to Intelligent Quality Inspection. You only need to invoke this API to obtain the parameters for pushing quality inspection recordings when the Customer has not configured the quality inspection feature in Cloud Contact Center and wishes to manually push Cloud Contact Center call recordings to the quality inspection system.
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
     * Obtain the parameters related to offline quality inspection audio files. Normally, if the Customer has configured the quality inspection feature in Cloud Contact Center, the audio files requiring offline quality inspection and their corresponding parameters are automatically passed to Intelligent Quality Inspection. You only need to invoke this API to obtain the parameters for pushing quality inspection recordings when the Customer has not configured the quality inspection feature in Cloud Contact Center and wishes to manually push Cloud Contact Center call recordings to the quality inspection system.
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
     * You can invoke GetUser to obtain the agent information corresponding to a specified agent ID under a specified instance.
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
     * You can invoke GetUser to obtain the agent information corresponding to a specified agent ID under a specified instance.
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
     * Call GetVisitorLoginDetails to retrieve login, server address, and authentication information for network service visitors.
     *
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
     * Call GetVisitorLoginDetails to retrieve login, server address, and authentication information for network service visitors.
     *
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
     * You can invoke GetVoicemailRecording to obtain the voicemail recording of a specified call under a specified instance. The recording is single-track and in WAV format.
     *
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
     * You can invoke GetVoicemailRecording to obtain the voicemail recording of a specified call under a specified instance. The recording is single-track and in WAV format.
     *
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
     * You can invoke HoldCall to hold the call associated with a specified call ID under a specified instance. After the call is held, it will be temporarily suspended, and the held party will hear hold music.
     *
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
     * You can invoke HoldCall to hold the call associated with a specified call ID under a specified instance. After the call is held, it will be temporarily suspended, and the held party will hear hold music.
     *
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
     * Imports one or more admins to a specified instance. The caller must have the `AliyunCCCFullAccess` permission, which you can grant in the RAM console.
     *
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
     * Imports one or more admins to a specified instance. The caller must have the `AliyunCCCFullAccess` permission, which you can grant in the RAM console.
     *
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
     * Imports your organization’s telephone line numbers. Before performing the first import, contact Cloud Contact Center technical support to add the numbers to the allowlist.
     *
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
     * Imports your organization’s telephone line numbers. Before performing the first import, contact Cloud Contact Center technical support to add the numbers to the allowlist.
     *
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

    /**
     * You can invoke ImportCustomCallTagging to import multiple inbound number tags into a specified instance.
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
     * You can invoke ImportCustomCallTagging to import multiple inbound number tags into a specified instance.
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
     * Imports one or more do-not-call numbers to a specified instance. You can import numbers by manual entry or file upload.
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
     * Imports one or more do-not-call numbers to a specified instance. You can import numbers by manual entry or file upload.
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
     * Import existing RAM users as contact center agents.
     *
     * @param request - ImportRamUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportRamUsersResponse
     *
     * @param ImportRamUsersRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ImportRamUsersResponse
     */
    public function importRamUsersWithOptions($request, $runtime)
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
            'action' => 'ImportRamUsers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportRamUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Import existing RAM users as contact center agents.
     *
     * @param request - ImportRamUsersRequest
     *
     * @returns ImportRamUsersResponse
     *
     * @param ImportRamUsersRequest $request
     *
     * @return ImportRamUsersResponse
     */
    public function importRamUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importRamUsersWithOptions($request, $runtime);
    }

    /**
     * Consultation transfer refers to transferring a call to another agent, a skill group queue, or an external number. It is also known as follow transfer or two-step transfer.
     *
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
     * Consultation transfer refers to transferring a call to another agent, a skill group queue, or an external number. It is also known as follow transfer or two-step transfer.
     *
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
     * You can invoke InterceptCall to forcibly disconnect the call associated with a specified call ID under a given instance. The call must be in the listener state, and the forced disconnection must be initiated by the listener. After the forced disconnection succeeds, the agent who was originally talking with the customer will be disconnected, and the agent who initiated the forced disconnection will replace the original agent and continue the conversation with the customer.
     *
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
     * You can invoke InterceptCall to forcibly disconnect the call associated with a specified call ID under a given instance. The call must be in the listener state, and the forced disconnection must be initiated by the listener. After the forced disconnection succeeds, the agent who was originally talking with the customer will be disconnected, and the agent who initiated the forced disconnection will replace the original agent and continue the conversation with the customer.
     *
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
     * You can invoke LaunchAuthentication to temporarily transfer a call into a specified IVR flow. After invoking this API, the call enters an IVR interaction phase, which is commonly used for identity verification operations.
     *
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
     * You can invoke LaunchAuthentication to temporarily transfer a call into a specified IVR flow. After invoking this API, the call enters an IVR interaction phase, which is commonly used for identity verification operations.
     *
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
     * Invoke LaunchSurvey to send a satisfaction survey. This operation causes the agent to hang up. If it is a voice-based satisfaction survey, the customer enters the IVR satisfaction survey flow after the agent hangs up and completes the satisfaction collection within the IVR flow. If it is an SMS-based satisfaction survey, the call ends and the customer receives a satisfaction survey text message.
     *
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
     * Invoke LaunchSurvey to send a satisfaction survey. This operation causes the agent to hang up. If it is a voice-based satisfaction survey, the customer enters the IVR satisfaction survey flow after the agent hangs up and completes the satisfaction collection within the IVR flow. If it is an SMS-based satisfaction survey, the call ends and the customer receives a satisfaction survey text message.
     *
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
     * Invoke ListAgentStateLogs to obtain the status log list of a specified agent under a specified instance. Note that this API will soon expire. Use the override API ListRealtimeAgentStates instead.
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
     * Invoke ListAgentStateLogs to obtain the status log list of a specified agent under a specified instance. Note that this API will soon expire. Use the override API ListRealtimeAgentStates instead.
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
     * You can invoke the ListAgentStates API to retrieve a list of agent statuses under a specified instance, filtered by specified conditions. This API is available only to specific Users. Other Customers are not recommended to invoke it.
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
     * You can invoke the ListAgentStates API to retrieve a list of agent statuses under a specified instance, filtered by specified conditions. This API is available only to specific Users. Other Customers are not recommended to invoke it.
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

    /**
     * You can invoke the ListAgentSummaryReportsSinceMidnight API to retrieve agent historical data reports under a specified instance, filtered by given conditions. The statistics cover data from 00:00 of the current day up to the current time. This API is available only to specific users; other customers are not recommended to invoke it.
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
     * You can invoke the ListAgentSummaryReportsSinceMidnight API to retrieve agent historical data reports under a specified instance, filtered by given conditions. The statistics cover data from 00:00 of the current day up to the current time. This API is available only to specific users; other customers are not recommended to invoke it.
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
     * You can invoke ListAttempts to obtain the list of contact dialing records for a specified predictive outbound calling Activity under a specified instance.
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
     * You can invoke ListAttempts to obtain the list of contact dialing records for a specified predictive outbound calling Activity under a specified instance.
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
     * Invoke ListAudioFiles to obtain the list of audio files under a specified instance.
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
     * Invoke ListAudioFiles to obtain the list of audio files under a specified instance.
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
     * Queries the blacklist tag status of specified numbers in a batch.
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
     * Queries the blacklist tag status of specified numbers in a batch.
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
     * You can invoke ListBriefSkillGroups to obtain the list of skill group summary information under a specified instance.
     *
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
     * You can invoke ListBriefSkillGroups to obtain the list of skill group summary information under a specified instance.
     *
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
     * You can invoke ListCallDetailRecords to obtain a list of call details filtered by specified search conditions under a specified instance. This API is no longer iteratively updated. We recommend that you use the ListCallDetailRecordsV2 API instead.
     *
     * @remarks
     * To ensure query efficiency, the TotalCount field in the response data is populated only when the first page is queried. For other pages, this field returns 0.
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
     * You can invoke ListCallDetailRecords to obtain a list of call details filtered by specified search conditions under a specified instance. This API is no longer iteratively updated. We recommend that you use the ListCallDetailRecordsV2 API instead.
     *
     * @remarks
     * To ensure query efficiency, the TotalCount field in the response data is populated only when the first page is queried. For other pages, this field returns 0.
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
     * Retrieves a list of call detail records that match the specified filter criteria for a specified instance.
     *
     * @remarks
     * ListCallDetailRecordsV2 is used to override the ListCallDetailRecords operation. New fields and query conditions will undergo continuous optimization in ListCallDetailRecordsV2. To ensure query efficiency, the TotalCount field in the response is populated only when you query the first page. For other pages, the value 0 is returned.
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
     * Retrieves a list of call detail records that match the specified filter criteria for a specified instance.
     *
     * @remarks
     * ListCallDetailRecordsV2 is used to override the ListCallDetailRecords operation. New fields and query conditions will undergo continuous optimization in ListCallDetailRecordsV2. To ensure query efficiency, the TotalCount field in the response is populated only when you query the first page. For other pages, the value 0 is returned.
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
     * Use the ListCallSummaries operation to retrieve call summaries.
     *
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
     * Use the ListCallSummaries operation to retrieve call summaries.
     *
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
     * You can invoke ListCallTags to obtain all number tags under a specified instance.
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
     * You can invoke ListCallTags to obtain all number tags under a specified instance.
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
     * Obtain the trend report of the predictive outbound calling activity with the specified ID under the specified instance.
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
     * Obtain the trend report of the predictive outbound calling activity with the specified ID under the specified instance.
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
     * Calls ListCampaigns to obtain the list of predictive dialing campaigns under a specified instance.
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
     * Calls ListCampaigns to obtain the list of predictive dialing campaigns under a specified instance.
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
     * Invoke ListCases to obtain the execution details list of the outbound contact list for the predictive dialing Activity corresponding to the specified ID under the specified instance.
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
     * Invoke ListCases to obtain the execution details list of the outbound contact list for the predictive dialing Activity corresponding to the specified ID under the specified instance.
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
     * You can use ListCategories to retrieve category information.
     *
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
     * You can use ListCategories to retrieve category information.
     *
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
     * Retrieves the ticket field types that are defined for an instance.
     *
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
     * Retrieves the ticket field types that are defined for an instance.
     *
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
     * Retrieves the config items for a specified instance.
     *
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
     * Retrieves the config items for a specified instance.
     *
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
     * Call ListContactFlows to retrieve the IVR contact flows for a specified instance.
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
     * Call ListContactFlows to retrieve the IVR contact flows for a specified instance.
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
     * You can invoke ListCustomCallTagging to obtain the list of inbound number marks under a specified instance.
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
     * You can invoke ListCustomCallTagging to obtain the list of inbound number marks under a specified instance.
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
     * Obtain the device list of a specified agent under a specified instance.
     *
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
     * Obtain the device list of a specified agent under a specified instance.
     *
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
     * Retrieves the list of prohibited outbound call numbers under a specified instance, filtered by specified search conditions.
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
     * Retrieves the list of prohibited outbound call numbers under a specified instance, filtered by specified search conditions.
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
     * Queries feedback records.
     *
     * @param request - ListFeedbacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeedbacksResponse
     *
     * @param ListFeedbacksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListFeedbacksResponse
     */
    public function listFeedbacksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskIdList) {
            @$query['TaskIdList'] = $request->taskIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFeedbacks',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFeedbacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries feedback records.
     *
     * @param request - ListFeedbacksRequest
     *
     * @returns ListFeedbacksResponse
     *
     * @param ListFeedbacksRequest $request
     *
     * @return ListFeedbacksResponse
     */
    public function listFeedbacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFeedbacksWithOptions($request, $runtime);
    }

    /**
     * You can use ListFlashSmsApplication to obtain third-party flash SMS configuration information.
     *
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
     * You can use ListFlashSmsApplication to obtain third-party flash SMS configuration information.
     *
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
     * Call the ListFlashSmsSettings operation to retrieve the flash SMS configurations for a specified skill group.
     *
     * @param tmpReq - ListFlashSmsSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlashSmsSettingsResponse
     *
     * @param ListFlashSmsSettingsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListFlashSmsSettingsResponse
     */
    public function listFlashSmsSettingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFlashSmsSettingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->skillGroupIdList) {
            $request->skillGroupIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->skillGroupIdList, 'SkillGroupIdList', 'json');
        }

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

        if (null !== $request->skillGroupIdListShrink) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdListShrink;
        }

        if (null !== $request->skillGroupName) {
            @$query['SkillGroupName'] = $request->skillGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlashSmsSettings',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlashSmsSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the ListFlashSmsSettings operation to retrieve the flash SMS configurations for a specified skill group.
     *
     * @param request - ListFlashSmsSettingsRequest
     *
     * @returns ListFlashSmsSettingsResponse
     *
     * @param ListFlashSmsSettingsRequest $request
     *
     * @return ListFlashSmsSettingsResponse
     */
    public function listFlashSmsSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlashSmsSettingsWithOptions($request, $runtime);
    }

    /**
     * Use ListFlashSmsTemplates to retrieve flash SMS template information.
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
     * Use ListFlashSmsTemplates to retrieve flash SMS template information.
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
     * Retrieves the records of group chat messages.
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
     * Retrieves the records of group chat messages.
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
     * Retrieves historical data reports for one or more agents in a specified instance.
     *
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
     * Retrieves historical data reports for one or more agents in a specified instance.
     *
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
     * You can call ListHistoricalAgentSkillGroupReport to retrieve historical skill group reports for one or more agents in a specified instance.
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
     * You can call ListHistoricalAgentSkillGroupReport to retrieve historical skill group reports for one or more agents in a specified instance.
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
     * You can invoke ListHistoricalSkillGroupReport to obtain historical data reports for one or more skill groups under a specified instance.
     *
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
     * You can invoke ListHistoricalSkillGroupReport to obtain historical data reports for one or more skill groups under a specified instance.
     *
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
     * Invoke the ListInstances API to obtain the list of Cloud Contact Center instances under the current Alibaba Cloud account.
     *
     * @remarks
     * If a RAM user needs to invoke this API, the RAM user must have the "Manage Cloud Call Center (CCC)" permission (AliyunCCCFullAccess).
     *
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
     * Invoke the ListInstances API to obtain the list of Cloud Contact Center instances under the current Alibaba Cloud account.
     *
     * @remarks
     * If a RAM user needs to invoke this API, the RAM user must have the "Manage Cloud Call Center (CCC)" permission (AliyunCCCFullAccess).
     *
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
     * You can invoke ListInstancesOfUser to obtain the list of Cloud Contact Center instances to which the User belongs.
     *
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
     * You can invoke ListInstancesOfUser to obtain the list of Cloud Contact Center instances to which the User belongs.
     *
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
     * You can invoke ListIntervalAgentReport to obtain the segment statistical report of a specified agent under a specified instance.
     *
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
     * You can invoke ListIntervalAgentReport to obtain the segment statistical report of a specified agent under a specified instance.
     *
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
     * Retrieves the interval-based statistical report for a specified agent in a specified instance.
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
     * Retrieves the interval-based statistical report for a specified agent in a specified instance.
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
     * You can invoke ListIntervalInstanceReport to obtain the segment statistical report for a specified instance.
     *
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
     * You can invoke ListIntervalInstanceReport to obtain the segment statistical report for a specified instance.
     *
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
     * You can invoke ListIntervalSkillGroupReport to obtain the segment-based statistical report of a specified skill group under a specified instance.
     *
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
     * You can invoke ListIntervalSkillGroupReport to obtain the segment-based statistical report of a specified skill group under a specified instance.
     *
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
     * Invoke ListIvrTrackingDetails to obtain the IVR tracking details of a specified call under a specified instance.
     *
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
     * Invoke ListIvrTrackingDetails to obtain the IVR tracking details of a specified call under a specified instance.
     *
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

    /**
     * You can invoke ListLegacyAgentEventLogs to obtain the list of 1.0 legacy agent event logs. This API is available only to specific Users, and other Customers are not recommended to invoke it.
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
     * You can invoke ListLegacyAgentEventLogs to obtain the list of 1.0 legacy agent event logs. This API is available only to specific Users, and other Customers are not recommended to invoke it.
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

    /**
     * You can invoke ListLegacyAgentStatusLogs to obtain the list of legacy agent status logs for version 1.0. This API is available only to specific Users, and other Customers are not recommended to invoke it.
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
     * You can invoke ListLegacyAgentStatusLogs to obtain the list of legacy agent status logs for version 1.0. This API is available only to specific Users, and other Customers are not recommended to invoke it.
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
     * You can invoke ListLegacyQueueEventLogs to obtain the list of 1.0 legacy queue event logs. This API is available only to specific Users, and other Customers are not recommended to invoke it.
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
     * You can invoke ListLegacyQueueEventLogs to obtain the list of 1.0 legacy queue event logs. This API is available only to specific Users, and other Customers are not recommended to invoke it.
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
     * Call ListMonoRecordings to retrieve single-track recordings for each party in a specified call under a specified instance. During a call, each party has a channel, and each channel generates a combined track recording in WAV format.
     *
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
        if (null !== $request->agentChannelId) {
            @$query['AgentChannelId'] = $request->agentChannelId;
        }

        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
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
     * Call ListMonoRecordings to retrieve single-track recordings for each party in a specified call under a specified instance. During a call, each party has a channel, and each channel generates a combined track recording in WAV format.
     *
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
     * Call ListMultiChannelRecordings to retrieve the multi-channel recordings for each party in a specified call and instance. Each party has a call channel that corresponds to a multi-channel recording in MKV format.
     *
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
        if (null !== $request->agentChannelId) {
            @$query['AgentChannelId'] = $request->agentChannelId;
        }

        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
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
     * Call ListMultiChannelRecordings to retrieve the multi-channel recordings for each party in a specified call and instance. Each party has a call channel that corresponds to a multi-channel recording in MKV format.
     *
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
     * Query notification records that were not sent using Message Queue (MQ).
     *
     * @param request - ListNotificationRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNotificationRecordsResponse
     *
     * @param ListNotificationRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListNotificationRecordsResponse
     */
    public function listNotificationRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->notificationKeys) {
            @$query['NotificationKeys'] = $request->notificationKeys;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNotificationRecords',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNotificationRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query notification records that were not sent using Message Queue (MQ).
     *
     * @param request - ListNotificationRecordsRequest
     *
     * @returns ListNotificationRecordsResponse
     *
     * @param ListNotificationRecordsRequest $request
     *
     * @return ListNotificationRecordsResponse
     */
    public function listNotificationRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotificationRecordsWithOptions($request, $runtime);
    }

    /**
     * `ListOutboundNumbersOfUser` retrieves the outbound numbers for a specified agent in a specified instance.
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
     * `ListOutboundNumbersOfUser` retrieves the outbound numbers for a specified agent in a specified instance.
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
     * You can invoke ListPersonalNumbersOfUser to obtain the list of personal outbound numbers for a specified agent under a specified instance. You can also use this API to retrieve the list of numbers that can be added as personal outbound numbers for an agent.
     *
     * @remarks
     * Note: If a number is already attached to a skill group, it will not appear in the list of numbers available as personal outbound numbers.
     *
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
     * You can invoke ListPersonalNumbersOfUser to obtain the list of personal outbound numbers for a specified agent under a specified instance. You can also use this API to retrieve the list of numbers that can be added as personal outbound numbers for an agent.
     *
     * @remarks
     * Note: If a number is already attached to a skill group, it will not appear in the list of numbers available as personal outbound numbers.
     *
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
     * You can invoke ListPhoneNumbers to obtain the phone number list under a specified instance.
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
     * You can invoke ListPhoneNumbers to obtain the phone number list under a specified instance.
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
     * You can invoke the ListPhoneNumbersOfSkillGroup API to obtain the list of phone numbers associated with a specified skill group under a specified instance. You can also use this API to query phone numbers that are not currently associated with the skill group but can be associated with it.
     *
     * @remarks
     * Note: If a phone number is already used as a personal outbound number, it will not appear in the list of numbers available for association with a skill group.
     *
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
     * You can invoke the ListPhoneNumbersOfSkillGroup API to obtain the list of phone numbers associated with a specified skill group under a specified instance. You can also use this API to query phone numbers that are not currently associated with the skill group but can be associated with it.
     *
     * @remarks
     * Note: If a phone number is already used as a personal outbound number, it will not appear in the list of numbers available for association with a skill group.
     *
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
     * Invoke ListPrivilegesOfUser to obtain the permissions owned by the current User.
     *
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
     * Invoke ListPrivilegesOfUser to obtain the permissions owned by the current User.
     *
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
     * Lists RAM users that have not been imported into a specified instance.
     *
     * @remarks
     * A Resource Access Management (RAM) user can be imported as an agent into multiple Cloud Contact Center (CCC) instances. However, an agent can be associated with only one RAM account. When you create an agent in a CCC instance, a corresponding RAM account is also created. To avoid creating redundant RAM accounts when you set up a new instance, you can call the ListRamUsers operation to list RAM users that have not been imported into the instance. You can then call the operation that imports RAM users to add them to the new instance. This prevents creating unnecessary RAM accounts and conserves resources.
     *
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
     * Lists RAM users that have not been imported into a specified instance.
     *
     * @remarks
     * A Resource Access Management (RAM) user can be imported as an agent into multiple Cloud Contact Center (CCC) instances. However, an agent can be associated with only one RAM account. When you create an agent in a CCC instance, a corresponding RAM account is also created. To avoid creating redundant RAM accounts when you set up a new instance, you can call the ListRamUsers operation to list RAM users that have not been imported into the instance. You can then call the operation that imports RAM users to add them to the new instance. This prevents creating unnecessary RAM accounts and conserves resources.
     *
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
     * You can invoke ListRealtimeAgentStates to obtain a real-time status data report for one or more specified agents in a specified instance.
     *
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
     * You can invoke ListRealtimeAgentStates to obtain a real-time status data report for one or more specified agents in a specified instance.
     *
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
     * You can invoke ListRealtimeSkillGroupStates to obtain the real-time skill group status report for a specified instance.
     *
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
     * You can invoke ListRealtimeSkillGroupStates to obtain the real-time skill group status report for a specified instance.
     *
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
     * You can invoke ListRecentCallDetailRecords to obtain the list of recent call detail records for agents mapped to the current Resource Access Management (RAM) user under the specified instance.
     *
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
     * You can invoke ListRecentCallDetailRecords to obtain the list of recent call detail records for agents mapped to the current Resource Access Management (RAM) user under the specified instance.
     *
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
     * You can invoke ListRoles to obtain all roles under a specified instance.
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
     * You can invoke ListRoles to obtain all roles under a specified instance.
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
     * You can invoke the ListSkillgroupStates API to obtain the status list of specified skill groups under a specified instance. This API is only available to specific Users, and other Customers are not recommended to invoke it.
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
     * You can invoke the ListSkillgroupStates API to obtain the status list of specified skill groups under a specified instance. This API is only available to specific Users, and other Customers are not recommended to invoke it.
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

    /**
     * The `ListSkillgroupSummaryReportsSinceMidnight` operation retrieves historical summary reports, filtered by specified conditions, for skill groups in a specified instance. The report contains data from 00:00 (midnight) today to the time of the request. This operation is available to specific users only.
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
     * The `ListSkillgroupSummaryReportsSinceMidnight` operation retrieves historical summary reports, filtered by specified conditions, for skill groups in a specified instance. The report contains data from 00:00 (midnight) today to the time of the request. This operation is available to specific users only.
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
     * You can invoke ListSkillGroups to obtain the list of skill groups under a specified instance.
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
     * You can invoke ListSkillGroups to obtain the list of skill groups under a specified instance.
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
     * You can use this API to retrieve the list of skill levels for skill groups associated with a specified agent under a specified instance. You can also use this API to query the list of skill groups that the agent can be associated with but is not currently associated with.
     *
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
     * You can use this API to retrieve the list of skill levels for skill groups associated with a specified agent under a specified instance. You can also use this API to query the list of skill groups that the agent can be associated with but is not currently associated with.
     *
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
     * Queries the details of SMS configurations.
     *
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
     * Queries the details of SMS configurations.
     *
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
     * Retrieves a list of ticket templates.
     *
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
     * Retrieves a list of ticket templates.
     *
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
     * Retrieves a list of tickets for an instance.
     *
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
     * Retrieves a list of tickets for an instance.
     *
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
     * You can invoke ListUnassignedNumbers to obtain the list of numbers under your Alibaba Cloud account that have not been assigned to an instance.
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
     * You can invoke ListUnassignedNumbers to obtain the list of numbers under your Alibaba Cloud account that have not been assigned to an instance.
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
     * You can invoke the ListUserLevelsOfSkillGroup API to retrieve the list of agent skill levels under a specified skill group in a given instance. You can also use this API to retrieve the list of agents who can be associated with but are not currently associated with the specified skill group.
     *
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
     * You can invoke the ListUserLevelsOfSkillGroup API to retrieve the list of agent skill levels under a specified skill group in a given instance. You can also use this API to retrieve the list of agents who can be associated with but are not currently associated with the specified skill group.
     *
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
     * Invoke ListUsers to obtain the agent list under a specified instance.
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
     * Invoke ListUsers to obtain the agent list under a specified instance.
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
     * You can use ListVisitorChatMessages to retrieve visitor chat records.
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
     * You can use ListVisitorChatMessages to retrieve visitor chat records.
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
     * You can call the ListVoicemails operation to retrieve a list of voicemails for a specified instance.
     *
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
     * You can call the ListVoicemails operation to retrieve a list of voicemails for a specified instance.
     *
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
     * The ListWaitingChats operation allows agents to retrieve chats that are waiting in a queue to be assigned or claimed.
     *
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
     * The ListWaitingChats operation allows agents to retrieve chats that are waiting in a queue to be assigned or claimed.
     *
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
     * You can invoke MakeCall to initiate a call. The callee can be an internal agent or an external customer.
     *
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
     * You can invoke MakeCall to initiate a call. The callee can be an internal agent or an external customer.
     *
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
     * You can invoke ModifyAudioFile to modify the audio file associated with a specified audio resource ID under a given instance. You can update the audio file name, display name, and the OSS key of the audio file.
     *
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
     * You can invoke ModifyAudioFile to modify the audio file associated with a specified audio resource ID under a given instance. You can update the audio file name, display name, and the OSS key of the audio file.
     *
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
     * Modifies the calling numbers for a batch prediction outbound campaign.
     *
     * @param tmpReq - ModifyCampaignNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCampaignNumbersResponse
     *
     * @param ModifyCampaignNumbersRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyCampaignNumbersResponse
     */
    public function modifyCampaignNumbersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyCampaignNumbersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numberList) {
            $request->numberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numberList, 'NumberList', 'json');
        }

        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instGroupId) {
            @$query['InstGroupId'] = $request->instGroupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numberListShrink) {
            @$query['NumberList'] = $request->numberListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCampaignNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCampaignNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the calling numbers for a batch prediction outbound campaign.
     *
     * @param request - ModifyCampaignNumbersRequest
     *
     * @returns ModifyCampaignNumbersResponse
     *
     * @param ModifyCampaignNumbersRequest $request
     *
     * @return ModifyCampaignNumbersResponse
     */
    public function modifyCampaignNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCampaignNumbersWithOptions($request, $runtime);
    }

    /**
     * You can invoke ModifyCustomCallTagging to modify the description and attached number tags of an inbound number mark for a specified number under a specified instance.
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
     * You can invoke ModifyCustomCallTagging to modify the description and attached number tags of an inbound number mark for a specified number under a specified instance.
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
     * You can invoke ModifyInstance to modify a Cloud Contact Center instance.
     *
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
     * You can invoke ModifyInstance to modify a Cloud Contact Center instance.
     *
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
     * You can invoke ModifyPhoneNumber to modify the information of a specified phone number under a specified instance, primarily to update the number\\"s usage and the attached contact flow ID.
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
     * You can invoke ModifyPhoneNumber to modify the information of a specified phone number under a specified instance, primarily to update the number\\"s usage and the attached contact flow ID.
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
     * You can invoke ModifySkillGroup to modify the information of a skill group associated with a specified skill group ID under a specified instance, primarily updating the skill group\\"s display name and description.
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
     * You can invoke ModifySkillGroup to modify the information of a skill group associated with a specified skill group ID under a specified instance, primarily updating the skill group\\"s display name and description.
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
     * Modify the skill level of a specified agent in one or more skill groups under a specified instance.
     *
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
     * Modify the skill level of a specified agent in one or more skill groups under a specified instance.
     *
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
     * You can invoke ModifyUser to modify the information of a specified agent under a specified instance. You can modify the phone number, work mode, role, and agent ID.
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
     * You can invoke ModifyUser to modify the information of a specified agent under a specified instance. You can modify the phone number, work mode, role, and agent ID.
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
     * You can invoke ModifyUserLevelsOfSkillGroup to modify the skill levels of one or more agents under a specified skill group in a specified instance.
     *
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
     * You can invoke ModifyUserLevelsOfSkillGroup to modify the skill levels of one or more agents under a specified skill group in a specified instance.
     *
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
     * You can invoke MonitorCall to listen to a call associated with a specified call ID under a specified instance. The call must be in a state where both the agent and the customer are normally connected, and the agent initiating the listening must have permission to monitor the target agent.
     *
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
     * You can invoke MonitorCall to listen to a call associated with a specified call ID under a specified instance. The call must be in a state where both the agent and the customer are normally connected, and the agent initiating the listening must have permission to monitor the target agent.
     *
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
     * You can invoke MuteCall to mute the call associated with a specified call ID under a specified instance. This operation can only be invoked by an agent who is in a talking state, and the agent can only mute themselves. After the agent mutes themselves, the customer will no longer hear the agent\\"s voice.
     *
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
     * You can invoke MuteCall to mute the call associated with a specified call ID under a specified instance. This operation can only be invoked by an agent who is in a talking state, and the agent can only mute themselves. After the agent mutes themselves, the customer will no longer hear the agent\\"s voice.
     *
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
     * Invoke PauseCampaign to pause the predictive outbound calling Activity corresponding to the specified ID under the specified instance.
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
     * Invoke PauseCampaign to pause the predictive outbound calling Activity corresponding to the specified ID under the specified instance.
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
     * You can invoke PickOutboundNumbers to select an appropriate caller number based on the provided callee number. The number selection logic is controlled by an Intelligent algorithm.
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
     * You can invoke PickOutboundNumbers to select an appropriate caller number based on the provided callee number. The number selection logic is controlled by an Intelligent algorithm.
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
     * Polls the agent status of a specified agent under a specified instance. This operation is typically invoked by the frontend agent Workbench to synchronize agent status.
     *
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
     * Polls the agent status of a specified agent under a specified instance. This operation is typically invoked by the frontend agent Workbench to synchronize agent status.
     *
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
     * Publishes a contact flow.
     *
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
     * Publishes a contact flow.
     *
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
     * You can invoke ReadyForService to make a specified agent under a specified instance ready. After becoming ready, the agent enters the idle status.
     *
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
     * You can invoke ReadyForService to make a specified agent under a specified instance ready. After becoming ready, the agent enters the idle status.
     *
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
     * Redial the number in the desensitized call record.
     *
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
     * Redial the number in the desensitized call record.
     *
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
     * Registers a Session Initiation Protocol (SIP) device with a specified agent in an instance. A SIP device can be a physical SIP phone or a softphone.
     *
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
     * Registers a Session Initiation Protocol (SIP) device with a specified agent in an instance. A SIP device can be a physical SIP phone or a softphone.
     *
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
     * Registers one or more SIP devices to specified agents in an instance. A SIP device can be a SIP phone or a SIP softphone.
     *
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
     * Registers one or more SIP devices to specified agents in an instance. A SIP device can be a SIP phone or a SIP softphone.
     *
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
     * Rejects a chat assigned to an agent.
     *
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
     * Rejects a chat assigned to an agent.
     *
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
     * Use the RejectTicket operation to reject a ticket. The ticket creator can add information to a rejected ticket and then resubmit it.
     *
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
     * Use the RejectTicket operation to reject a ticket. The ticket creator can add information to a rejected ticket and then resubmit it.
     *
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
     * You can invoke ReleaseCall to hang up the call associated with a specified call ID under a specified instance. The invoker must be an agent and currently in a call.
     *
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
     * You can invoke ReleaseCall to hang up the call associated with a specified call ID under a specified instance. The invoker must be an agent and currently in a call.
     *
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
     * The ReleaseChat operation ends the current chat.
     *
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
     * The ReleaseChat operation ends the current chat.
     *
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
     * Removes the blacklist tag from a specified phone number.
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
     * Removes the blacklist tag from a specified phone number.
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
     * You can invoke RemoveDoNotCallNumbers to delete one or more Do Not Call number configuration items under a specified instance.
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
     * You can invoke RemoveDoNotCallNumbers to delete one or more Do Not Call number configuration items under a specified instance.
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
     * You can invoke RemovePersonalNumbersFromUser to delete one or more personal outbound numbers associated with a specified agent under a specified instance.
     *
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
     * You can invoke RemovePersonalNumbersFromUser to delete one or more personal outbound numbers associated with a specified agent under a specified instance.
     *
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
     * You can invoke RemovePhoneNumberFromSkillGroups to delete the binding relationship between a specified phone number and one or more skill groups under a given instance. This operation removes only the association between the phone number and the skill groups, not the actual phone number itself.
     *
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
     * You can invoke RemovePhoneNumberFromSkillGroups to delete the binding relationship between a specified phone number and one or more skill groups under a given instance. This operation removes only the association between the phone number and the skill groups, not the actual phone number itself.
     *
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
     * Removes one or more numbers from an instance. This action disassociates the numbers from the instance but does not permanently delete them. It also disassociates all associated resources, such as skill groups, contact flows, and agents.
     *
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
     * Removes one or more numbers from an instance. This action disassociates the numbers from the instance but does not permanently delete them. It also disassociates all associated resources, such as skill groups, contact flows, and agents.
     *
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
     * You can invoke RemovePhoneNumbersFromSkillGroup to delete the association between one or more phone numbers and a specified skill group under a given instance.
     *
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
     * You can invoke RemovePhoneNumbersFromSkillGroup to delete the association between one or more phone numbers and a specified skill group under a given instance.
     *
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
     * You can invoke RemoveSkillGroupsFromUser to delete the association between one or more skill groups and a specified agent under a specified instance.
     *
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
     * You can invoke RemoveSkillGroupsFromUser to delete the association between one or more skill groups and a specified agent under a specified instance.
     *
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
     * You can invoke RemoveUsers to delete one or more agents from a specified instance. This operation only detaches the RAM accounts from the instance and removes the agents mapped to those RAM accounts from the instance. It does not delete the RAM accounts themselves.
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
     * You can invoke RemoveUsers to delete one or more agents from a specified instance. This operation only detaches the RAM accounts from the instance and removes the agents mapped to those RAM accounts from the instance. It does not delete the RAM accounts themselves.
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
     * You can invoke RemoveUsersFromSkillGroup to delete the association between one or more agents and a specified skill group under a specified instance. This operation only removes the association between the skill group and the agents and does not delete the agents themselves.
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
     * You can invoke RemoveUsersFromSkillGroup to delete the association between one or more agents and a specified skill group under a specified instance. This operation only removes the association between the skill group and the agents and does not delete the agents themselves.
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
     * Resets the state of a specific agent in a specific instance.
     *
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
     * Resets the state of a specific agent in a specific instance.
     *
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
     * Invoke ResetUserPassword to reset the logon password of a specified agent under a specified instance. In practice, agents do not have logon passwords; this operation actually modifies the logon password of the RAM account associated with the agent. This is typically used in scenarios where a customer service representative forgets the logon password of their RAM account.
     *
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
     * Invoke ResetUserPassword to reset the logon password of a specified agent under a specified instance. In practice, agents do not have logon passwords; this operation actually modifies the logon password of the RAM account associated with the agent. This is typically used in scenarios where a customer service representative forgets the logon password of their RAM account.
     *
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
     * Restores call recordings for the specified instance.
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
     * Restores call recordings for the specified instance.
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
     * You can use the ResubmitTicket API to resubmit a rejected or returned ticket.
     *
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
     * You can use the ResubmitTicket API to resubmit a rejected or returned ticket.
     *
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
     * Invoke ResumeCampaign to recover the predictive outbound calling Activity corresponding to the specified ID under the specified instance.
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
     * Invoke ResumeCampaign to recover the predictive outbound calling Activity corresponding to the specified ID under the specified instance.
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
     * You can invoke RetrieveCall to retrieve a call associated with a specified call ID under a specified instance. The call must be on hold for the retrieve operation to be performed.
     *
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
     * You can invoke RetrieveCall to retrieve a call associated with a specified call ID under a specified instance. The call must be on hold for the retrieve operation to be performed.
     *
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
     * Invoke SaveRTCStatsV2 to report Web Real-Time Communication (WebRTC) voice transmission statistics information from the agent side. This API is not relevant for regular customers.
     *
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
     * Invoke SaveRTCStatsV2 to report Web Real-Time Communication (WebRTC) voice transmission statistics information from the agent side. This API is not relevant for regular customers.
     *
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
     * Invoke the SaveTerminalLog API to report agent-side log information. Regular customers do not need to be concerned with this API.
     *
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
     * Invoke the SaveTerminalLog API to report agent-side log information. Regular customers do not need to be concerned with this API.
     *
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
     * Invoke the SaveWebRTCStats API to report Web Real-Time Communication (WebRTC) voice transmission statistics information from the agent side. Regular customers do not need to concern themselves with this API.
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
     * Invoke the SaveWebRTCStats API to report Web Real-Time Communication (WebRTC) voice transmission statistics information from the agent side. Regular customers do not need to concern themselves with this API.
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
     * Invoke the SaveWebRtcInfo API to report WebRTC call status information from the agent side, including call quality monitoring data, for backend statistics and monitoring. Customers do not need to concern themselves with this API.
     *
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
     * Invoke the SaveWebRtcInfo API to report WebRTC call status information from the agent side, including call quality monitoring data, for backend statistics and monitoring. Customers do not need to concern themselves with this API.
     *
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
     * You can invoke SendDtmfSignaling to send DTMF keypress information during a call.
     *
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
     * You can invoke SendDtmfSignaling to send DTMF keypress information during a call.
     *
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
     * 推送消息.
     *
     * @param request - SendNotificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendNotificationResponse
     *
     * @param SendNotificationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendNotificationResponse
     */
    public function sendNotificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageBody) {
            @$query['MessageBody'] = $request->messageBody;
        }

        if (null !== $request->notificationTarget) {
            @$query['NotificationTarget'] = $request->notificationTarget;
        }

        if (null !== $request->notificationType) {
            @$query['NotificationType'] = $request->notificationType;
        }

        if (null !== $request->shardingKey) {
            @$query['ShardingKey'] = $request->shardingKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendNotification',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送消息.
     *
     * @param request - SendNotificationRequest
     *
     * @returns SendNotificationResponse
     *
     * @param SendNotificationRequest $request
     *
     * @return SendNotificationResponse
     */
    public function sendNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendNotificationWithOptions($request, $runtime);
    }

    /**
     * You can invoke SignInGroup to sign an agent into a specified skill group under a specified instance, which is the operation for publishing the agent online.
     *
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
     * You can invoke SignInGroup to sign an agent into a specified skill group under a specified instance, which is the operation for publishing the agent online.
     *
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
     * You can call SignOutGroup to check out an agent from the skill group they are currently signed into, which is equivalent to performing an unpublish operation for the agent.
     *
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
     * You can call SignOutGroup to check out an agent from the skill group they are currently signed into, which is equivalent to performing an unpublish operation for the agent.
     *
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
     * You can invoke StartBack2BackCall to initiate a back-to-back call.
     *
     * @remarks
     * A back-to-back call differs from a traditional two-party call in that the caller does not directly call the callee. Instead, a Back-to-Back Agent is used. The Back-to-Back Agent first calls the caller, and after the connection is established, it calls the callee and then joins both parties into a single conference. In this mode, because all message streams of each call pass through the Back-to-Back Agent, the service provider (SP) can offer value-added services such as call timing, call recording, and number masking.
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
     * You can invoke StartBack2BackCall to initiate a back-to-back call.
     *
     * @remarks
     * A back-to-back call differs from a traditional two-party call in that the caller does not directly call the callee. Instead, a Back-to-Back Agent is used. The Back-to-Back Agent first calls the caller, and after the connection is established, it calls the callee and then joins both parties into a single conference. In this mode, because all message streams of each call pass through the Back-to-Back Agent, the service provider (SP) can offer value-added services such as call timing, call recording, and number masking.
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

    /**
     * Starts a chat session.
     *
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
     * Starts a chat session.
     *
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
     * You can invoke StartConference to initiate a conference.
     *
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
     * You can invoke StartConference to initiate a conference.
     *
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
     * Start editing a contact flow and generate a draft version.
     *
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
     * Start editing a contact flow and generate a draft version.
     *
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
     * Invoke StartPredictiveCall to initiate predictive outbound calling.
     *
     * @remarks
     * In addition to supporting agents initiating outbound calls from the agent Workbench, Cloud Call Center also enables your Operational System backend to initiate outbound calls and transfer the call to an agent after it is answered. This allows you to seamlessly embed Cloud Call Center features into your Business Process.
     * For example, your Customer can enter their phone number on your WeChat Official Account and click a button to inquire about a product. Your backend system then invokes this API to call the Customer’s Phone. After the call is connected, the system plays back the message: “We have received your inquiry about our product via the Official Account. We are now connecting you to an advisor. Please wait.” The call is then transferred to an appropriate agent.
     * Compared with the DialEX API in version 1.0, this API offers greater flexibility in configuration. In addition to customizing the IVR for transfer-in, you can also pass custom parameters, which can be played back by voice within the IVR to support notification scenarios.
     *
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
     * Invoke StartPredictiveCall to initiate predictive outbound calling.
     *
     * @remarks
     * In addition to supporting agents initiating outbound calls from the agent Workbench, Cloud Call Center also enables your Operational System backend to initiate outbound calls and transfer the call to an agent after it is answered. This allows you to seamlessly embed Cloud Call Center features into your Business Process.
     * For example, your Customer can enter their phone number on your WeChat Official Account and click a button to inquire about a product. Your backend system then invokes this API to call the Customer’s Phone. After the call is connected, the system plays back the message: “We have received your inquiry about our product via the Official Account. We are now connecting you to an advisor. Please wait.” The call is then transferred to an appropriate agent.
     * Compared with the DialEX API in version 1.0, this API offers greater flexibility in configuration. In addition to customizing the IVR for transfer-in, you can also pass custom parameters, which can be played back by voice within the IVR to support notification scenarios.
     *
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
     * Starts a privacy call.
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
     * Starts a privacy call.
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
     * Invoke SubmitCampaign to start the predictive outbound calling activity corresponding to the specified ID under the specified instance.
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
     * Invoke SubmitCampaign to start the predictive outbound calling activity corresponding to the specified ID under the specified instance.
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
     * You can invoke SwitchToConference to switch the status of a specified call under a specified instance to a three-party conference. This is typically used in scenarios where a consultation is converted into a conference.
     *
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
     * You can invoke SwitchToConference to switch the status of a specified call under a specified instance to a three-party conference. This is typically used in scenarios where a consultation is converted into a conference.
     *
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
     * You can invoke TakeBreak to set a specified agent in a specified instance to the break state.
     *
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
     * You can invoke TakeBreak to set a specified agent in a specified instance to the break state.
     *
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
     * Closes a ticket.
     *
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
     * Closes a ticket.
     *
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
     * You can call TransferTicketTask to transfer a ticket to another user.
     *
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
     * You can call TransferTicketTask to transfer a ticket to another user.
     *
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
     * [responses_200_schema_properties_Data_properties_UserContext_properties_UserState_type]string.
     *
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
     * [responses_200_schema_properties_Data_properties_UserContext_properties_UserState_type]string.
     *
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
     * You can invoke UnregisterDevice to delete the device registration record of a specified agent under a specified instance. After deletion, the SIP phone or SIP softphone associated with the agent becomes inactive.
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
     * You can invoke UnregisterDevice to delete the device registration record of a specified agent under a specified instance. After deletion, the SIP phone or SIP softphone associated with the agent becomes inactive.
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
     * Updates a call summary.
     *
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
     * Updates a call summary.
     *
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
     * Updates outbound campaign parameters.
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
     * Updates outbound campaign parameters.
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
     * You can use UpdateChatRoutingProfile to configure session transfers.
     *
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
     * You can use UpdateChatRoutingProfile to configure session transfers.
     *
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
     * Use the UpdateConfigItems operation to add or modify configuration items for an instance, such as hiding the caller ID for inbound calls or allowing agents to hang up.
     *
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
     * Use the UpdateConfigItems operation to add or modify configuration items for an instance, such as hiding the caller ID for inbound calls or allowing agents to hang up.
     *
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
     * Use the UpdateSubscription operation to configure message subscriptions.
     *
     * @param request - UpdateSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param UpdateSubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPoint) {
            @$query['AccessPoint'] = $request->accessPoint;
        }

        if (null !== $request->aliyunUid) {
            @$query['AliyunUid'] = $request->aliyunUid;
        }

        if (null !== $request->defaultTopic) {
            @$query['DefaultTopic'] = $request->defaultTopic;
        }

        if (null !== $request->eventSubscriptionsJson) {
            @$query['EventSubscriptionsJson'] = $request->eventSubscriptionsJson;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mqInstanceId) {
            @$query['MqInstanceId'] = $request->mqInstanceId;
        }

        if (null !== $request->mqType) {
            @$query['MqType'] = $request->mqType;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->producerId) {
            @$query['ProducerId'] = $request->producerId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSubscription',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Use the UpdateSubscription operation to configure message subscriptions.
     *
     * @param request - UpdateSubscriptionRequest
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param UpdateSubscriptionRequest $request
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubscriptionWithOptions($request, $runtime);
    }

    /**
     * UpdateTicket updates the content of a ticket.
     *
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
     * UpdateTicket updates the content of a ticket.
     *
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
     * You can use WithdrawTicket to withdraw a ticket.
     *
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
     * You can use WithdrawTicket to withdraw a ticket.
     *
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
