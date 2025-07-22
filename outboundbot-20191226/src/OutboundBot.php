<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ApplyNumberDistrictInfoParsingResultRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ApplyNumberDistrictInfoParsingResultResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\AssignJobsAsyncRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\AssignJobsAsyncResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\AssignJobsAsyncShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\AssignJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\AssignJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CancelJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CancelJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateAgentProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateAgentProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateAnnotationMissionRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateAnnotationMissionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateAnnotationMissionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchRepeatJobRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchRepeatJobResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentLgfRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentLgfResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentLgfShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentUserSayRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentUserSayResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentUserSayShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateDialogueFlowRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateDialogueFlowResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateDownloadUrlRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateDownloadUrlResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateGlobalQuestionRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateGlobalQuestionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateInstanceBindNumberRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateInstanceBindNumberResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateJobDataParsingTaskRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateJobDataParsingTaskResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateJobGroupExportTaskRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateJobGroupExportTaskResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateJobGroupRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateJobGroupResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateNumberDistrictInfoDownloadUrlRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateNumberDistrictInfoDownloadUrlResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateNumberDistrictInfoParsingTaskRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateNumberDistrictInfoParsingTaskResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateOutboundCallNumberRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateOutboundCallNumberResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateScriptWaveformRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateScriptWaveformResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateTagRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateTagResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateTaskExportTaskRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateTaskExportTaskResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteAgentProfilesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteAgentProfilesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteAgentProfilesShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteAllNumberDistrictInfoResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteBeebotIntentLgfRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteBeebotIntentLgfResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteBeebotIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteBeebotIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteBeebotIntentUserSayRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteBeebotIntentUserSayResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteContactBlockListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteContactBlockListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteContactWhiteListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteContactWhiteListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteDialogueFlowRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteDialogueFlowResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteGlobalQuestionRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteGlobalQuestionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteJobGroupRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteJobGroupResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteOutboundCallNumberRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteOutboundCallNumberResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteScriptRecordingRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteScriptRecordingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteScriptWaveformRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteScriptWaveformResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeBeebotIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeBeebotIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDialogueNodeStatisticsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDialogueNodeStatisticsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDsReportsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDsReportsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGlobalQuestionRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGlobalQuestionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobDataParsingTaskProgressRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobDataParsingTaskProgressResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupExportTaskProgressRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupExportTaskProgressResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeNumberDistrictInfoStatusResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptVoiceConfigRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptVoiceConfigResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTenantBindNumberRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTenantBindNumberResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTTSConfigRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTTSConfigResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTTSDemoRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTTSDemoResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DialogueRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DialogueResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DismissNumberDistrictInfoParsingResultRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DismissNumberDistrictInfoParsingResultResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DownloadRecordingRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DownloadRecordingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DownloadScriptRecordingRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DownloadScriptRecordingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DuplicateScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DuplicateScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ExportScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ExportScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GenerateUploadUrlRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GenerateUploadUrlResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAfterAnswerDelayPlaybackRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAfterAnswerDelayPlaybackResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAgentProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAgentProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAgentProfileTemplateRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAgentProfileTemplateResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionTagInfoListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionTagInfoListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAsrServerInfoRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAsrServerInfoResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAssignJobsAsyncResultRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAssignJobsAsyncResultResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetBaseStrategyPeriodRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetBaseStrategyPeriodResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetConcurrentConversationQuotaResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetContactBlockListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetContactBlockListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetContactWhiteListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetContactWhiteListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetCurrentConcurrencyRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetCurrentConcurrencyResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetEffectiveDaysRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetEffectiveDaysResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetEmptyNumberNoMoreCallsInfoRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetEmptyNumberNoMoreCallsInfoResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetJobDataUploadParamsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetJobDataUploadParamsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetMaxAttemptsPerDayRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetMaxAttemptsPerDayResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetNumberDistrictInfoTemplateDownloadUrlResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetRealtimeConcurrencyReportRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetRealtimeConcurrencyReportResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetSummaryInfoRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetSummaryInfoResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetTaskByUuidRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetTaskByUuidResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetVersionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ImportScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ImportScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\InflightTaskTimeoutRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\InflightTaskTimeoutResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAgentProfilesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAgentProfilesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAllTenantBindNumberBindingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListApiPluginsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListApiPluginsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListBeebotIntentLgfRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListBeebotIntentLgfResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListBeebotIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListBeebotIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListBeebotIntentUserSayRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListBeebotIntentUserSayResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListChatbotInstancesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListChatbotInstancesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDialogueFlowsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDialogueFlowsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDownloadTasksRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDownloadTasksResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListFlashSmsTemplatesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListFlashSmsTemplatesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListGlobalQuestionsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListGlobalQuestionsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListInstancesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListInstancesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsAsyncRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsAsyncResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsByGroupRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsByGroupResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListOutboundCallNumbersRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListOutboundCallNumbersResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListResourceTagsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListResourceTagsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListSchedulerInstancesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListSchedulerInstancesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptPublishHistoriesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptPublishHistoriesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptRecordingRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptRecordingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptVoiceConfigsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptVoiceConfigsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListTagsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListTagsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyAgentProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyAgentProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyAgentProfileShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyAnnotationMissionRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyAnnotationMissionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBatchJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBatchJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentLgfRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentLgfResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentLgfShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentUserSayRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentUserSayResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentUserSayShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyDialogueFlowRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyDialogueFlowResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyEmptyNumberNoMoreCallsInfoRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyEmptyNumberNoMoreCallsInfoResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyGlobalQuestionRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyGlobalQuestionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyIntentRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyIntentResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyOutboundCallNumberRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyOutboundCallNumberResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyScriptVoiceConfigRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyScriptVoiceConfigResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTagGroupsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTagGroupsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTTSConfigRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTTSConfigResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\PublishScriptForDebugRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\PublishScriptForDebugResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\PublishScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\PublishScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryScriptsByStatusRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryScriptsByStatusResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryScriptWaveformsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryScriptWaveformsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\RecordFailureRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\RecordFailureResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ResumeJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ResumeJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\RollbackScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\RollbackScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAfterAnswerDelayPlaybackRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAfterAnswerDelayPlaybackResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionTagInfoListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionTagInfoListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveBaseStrategyPeriodRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveBaseStrategyPeriodResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveContactBlockListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveContactBlockListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveContactWhiteListRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveContactWhiteListResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveEffectiveDaysRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveEffectiveDaysResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveMaxAttemptsPerDayRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveMaxAttemptsPerDayResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SearchTaskRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SearchTaskResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\StartJobRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\StartJobResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SubmitBatchJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SubmitBatchJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SubmitRecordingRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SubmitRecordingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SubmitScriptReviewRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SubmitScriptReviewResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SuspendCallRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SuspendCallResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SuspendCallWithFileRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SuspendCallWithFileResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SuspendJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SuspendJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\TagResourcesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\TagResourcesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\TaskPreparingRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\TaskPreparingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\TerminateCallRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\TerminateCallResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\UploadScriptRecordingRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\UploadScriptRecordingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\WithdrawScriptReviewRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\WithdrawScriptReviewResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class OutboundBot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('outboundbot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 生效号码库解析结果
     *  *
     * @param ApplyNumberDistrictInfoParsingResultRequest $request ApplyNumberDistrictInfoParsingResultRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyNumberDistrictInfoParsingResultResponse ApplyNumberDistrictInfoParsingResultResponse
     */
    public function applyNumberDistrictInfoParsingResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyNumberDistrictInfoParsingResult',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyNumberDistrictInfoParsingResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生效号码库解析结果
     *  *
     * @param ApplyNumberDistrictInfoParsingResultRequest $request ApplyNumberDistrictInfoParsingResultRequest
     *
     * @return ApplyNumberDistrictInfoParsingResultResponse ApplyNumberDistrictInfoParsingResultResponse
     */
    public function applyNumberDistrictInfoParsingResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyNumberDistrictInfoParsingResultWithOptions($request, $runtime);
    }

    /**
     * @summary 创建外呼任务
     *  *
     * @param AssignJobsRequest $request AssignJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignJobsResponse AssignJobsResponse
     */
    public function assignJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isAsynchrony)) {
            $query['IsAsynchrony'] = $request->isAsynchrony;
        }
        if (!Utils::isUnset($request->jobDataParsingTaskId)) {
            $query['JobDataParsingTaskId'] = $request->jobDataParsingTaskId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobsJson)) {
            $query['JobsJson'] = $request->jobsJson;
        }
        if (!Utils::isUnset($request->rosterType)) {
            $query['RosterType'] = $request->rosterType;
        }
        if (!Utils::isUnset($request->strategyJson)) {
            $query['StrategyJson'] = $request->strategyJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AssignJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建外呼任务
     *  *
     * @param AssignJobsRequest $request AssignJobsRequest
     *
     * @return AssignJobsResponse AssignJobsResponse
     */
    public function assignJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 异步创建外呼任务
     *  *
     * @param AssignJobsAsyncRequest $tmpReq  AssignJobsAsyncRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignJobsAsyncResponse AssignJobsAsyncResponse
     */
    public function assignJobsAsyncWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AssignJobsAsyncShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->callingNumber)) {
            $request->callingNumberShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->callingNumber, 'CallingNumber', 'json');
        }
        if (!Utils::isUnset($tmpReq->jobsJson)) {
            $request->jobsJsonShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobsJson, 'JobsJson', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->callingNumberShrink)) {
            $body['CallingNumber'] = $request->callingNumberShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $body['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobsJsonShrink)) {
            $body['JobsJson'] = $request->jobsJsonShrink;
        }
        if (!Utils::isUnset($request->strategyJson)) {
            $body['StrategyJson'] = $request->strategyJson;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssignJobsAsync',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignJobsAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 异步创建外呼任务
     *  *
     * @param AssignJobsAsyncRequest $request AssignJobsAsyncRequest
     *
     * @return AssignJobsAsyncResponse AssignJobsAsyncResponse
     */
    public function assignJobsAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignJobsAsyncWithOptions($request, $runtime);
    }

    /**
     * @param CancelJobsRequest $request CancelJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelJobsResponse CancelJobsResponse
     */
    public function cancelJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobReferenceId)) {
            $query['JobReferenceId'] = $request->jobReferenceId;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelJobsRequest $request CancelJobsRequest
     *
     * @return CancelJobsResponse CancelJobsResponse
     */
    public function cancelJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelJobsWithOptions($request, $runtime);
    }

    /**
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateAgentProfileRequest $request CreateAgentProfileRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAgentProfileResponse CreateAgentProfileResponse
     */
    public function createAgentProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentProfileTemplateId)) {
            $body['AgentProfileTemplateId'] = $request->agentProfileTemplateId;
        }
        if (!Utils::isUnset($request->appIp)) {
            $body['AppIp'] = $request->appIp;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->faqCategoryIds)) {
            $body['FaqCategoryIds'] = $request->faqCategoryIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instructionJson)) {
            $body['InstructionJson'] = $request->instructionJson;
        }
        if (!Utils::isUnset($request->labelsJson)) {
            $body['LabelsJson'] = $request->labelsJson;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->modelConfig)) {
            $body['ModelConfig'] = $request->modelConfig;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->promptJson)) {
            $body['PromptJson'] = $request->promptJson;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['Scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $body['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->variablesJson)) {
            $body['VariablesJson'] = $request->variablesJson;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentProfile',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAgentProfileRequest $request CreateAgentProfileRequest
     *
     * @return CreateAgentProfileResponse CreateAgentProfileResponse
     */
    public function createAgentProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentProfileWithOptions($request, $runtime);
    }

    /**
     * @param CreateAnnotationMissionRequest $tmpReq  CreateAnnotationMissionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAnnotationMissionResponse CreateAnnotationMissionResponse
     */
    public function createAnnotationMissionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAnnotationMissionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->annotationMissionDebugDataSourceList)) {
            $request->annotationMissionDebugDataSourceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->annotationMissionDebugDataSourceList, 'AnnotationMissionDebugDataSourceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->annotationMissionDataSourceType)) {
            $query['AnnotationMissionDataSourceType'] = $request->annotationMissionDataSourceType;
        }
        if (!Utils::isUnset($request->annotationMissionDebugDataSourceListShrink)) {
            $query['AnnotationMissionDebugDataSourceList'] = $request->annotationMissionDebugDataSourceListShrink;
        }
        if (!Utils::isUnset($request->annotationMissionDebugDataSourceListJsonString)) {
            $query['AnnotationMissionDebugDataSourceListJsonString'] = $request->annotationMissionDebugDataSourceListJsonString;
        }
        if (!Utils::isUnset($request->annotationMissionName)) {
            $query['AnnotationMissionName'] = $request->annotationMissionName;
        }
        if (!Utils::isUnset($request->chatbotId)) {
            $query['ChatbotId'] = $request->chatbotId;
        }
        if (!Utils::isUnset($request->conversationTimeEndFilter)) {
            $query['ConversationTimeEndFilter'] = $request->conversationTimeEndFilter;
        }
        if (!Utils::isUnset($request->conversationTimeStartFilter)) {
            $query['ConversationTimeStartFilter'] = $request->conversationTimeStartFilter;
        }
        if (!Utils::isUnset($request->excludeOtherSession)) {
            $query['ExcludeOtherSession'] = $request->excludeOtherSession;
        }
        if (!Utils::isUnset($request->finished)) {
            $query['Finished'] = $request->finished;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->samplingCount)) {
            $query['SamplingCount'] = $request->samplingCount;
        }
        if (!Utils::isUnset($request->samplingRate)) {
            $query['SamplingRate'] = $request->samplingRate;
        }
        if (!Utils::isUnset($request->samplingType)) {
            $query['SamplingType'] = $request->samplingType;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->sessionEndReasonFilterList)) {
            $query['SessionEndReasonFilterList'] = $request->sessionEndReasonFilterList;
        }
        if (!Utils::isUnset($request->sessionEndReasonFilterListJsonString)) {
            $query['SessionEndReasonFilterListJsonString'] = $request->sessionEndReasonFilterListJsonString;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAnnotationMission',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAnnotationMissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAnnotationMissionRequest $request CreateAnnotationMissionRequest
     *
     * @return CreateAnnotationMissionResponse CreateAnnotationMissionResponse
     */
    public function createAnnotationMission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAnnotationMissionWithOptions($request, $runtime);
    }

    /**
     * @param CreateBatchJobsRequest $request CreateBatchJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBatchJobsResponse CreateBatchJobsResponse
     */
    public function createBatchJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchJobDescription)) {
            $query['BatchJobDescription'] = $request->batchJobDescription;
        }
        if (!Utils::isUnset($request->batchJobName)) {
            $query['BatchJobName'] = $request->batchJobName;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobFilePath)) {
            $query['JobFilePath'] = $request->jobFilePath;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->strategyJson)) {
            $query['StrategyJson'] = $request->strategyJson;
        }
        if (!Utils::isUnset($request->submitted)) {
            $query['Submitted'] = $request->submitted;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBatchJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBatchJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBatchJobsRequest $request CreateBatchJobsRequest
     *
     * @return CreateBatchJobsResponse CreateBatchJobsResponse
     */
    public function createBatchJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchJobsWithOptions($request, $runtime);
    }

    /**
     * @summary CreateBatchRepeatJob
     *  *
     * @param CreateBatchRepeatJobRequest $request CreateBatchRepeatJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBatchRepeatJobResponse CreateBatchRepeatJobResponse
     */
    public function createBatchRepeatJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->filterStatus)) {
            $query['FilterStatus'] = $request->filterStatus;
        }
        if (!Utils::isUnset($request->flashSmsExtras)) {
            $query['FlashSmsExtras'] = $request->flashSmsExtras;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->minConcurrency)) {
            $query['MinConcurrency'] = $request->minConcurrency;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->recallCallingNumber)) {
            $query['RecallCallingNumber'] = $request->recallCallingNumber;
        }
        if (!Utils::isUnset($request->recallStrategyJson)) {
            $query['RecallStrategyJson'] = $request->recallStrategyJson;
        }
        if (!Utils::isUnset($request->ringingDuration)) {
            $query['RingingDuration'] = $request->ringingDuration;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->sourceGroupId)) {
            $query['SourceGroupId'] = $request->sourceGroupId;
        }
        if (!Utils::isUnset($request->strategyJson)) {
            $query['StrategyJson'] = $request->strategyJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBatchRepeatJob',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBatchRepeatJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateBatchRepeatJob
     *  *
     * @param CreateBatchRepeatJobRequest $request CreateBatchRepeatJobRequest
     *
     * @return CreateBatchRepeatJobResponse CreateBatchRepeatJobResponse
     */
    public function createBatchRepeatJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchRepeatJobWithOptions($request, $runtime);
    }

    /**
     * @summary CreateBeebotIntent
     *  *
     * @param CreateBeebotIntentRequest $tmpReq  CreateBeebotIntentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBeebotIntentResponse CreateBeebotIntentResponse
     */
    public function createBeebotIntentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateBeebotIntentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->intentDefinition)) {
            $request->intentDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->intentDefinition, 'IntentDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentDefinitionShrink)) {
            $query['IntentDefinition'] = $request->intentDefinitionShrink;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBeebotIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBeebotIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateBeebotIntent
     *  *
     * @param CreateBeebotIntentRequest $request CreateBeebotIntentRequest
     *
     * @return CreateBeebotIntentResponse CreateBeebotIntentResponse
     */
    public function createBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * @summary CreateBeebotIntentLgf
     *  *
     * @param CreateBeebotIntentLgfRequest $tmpReq  CreateBeebotIntentLgfRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBeebotIntentLgfResponse CreateBeebotIntentLgfResponse
     */
    public function createBeebotIntentLgfWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateBeebotIntentLgfShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->lgfDefinition)) {
            $request->lgfDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lgfDefinition, 'LgfDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lgfDefinitionShrink)) {
            $query['LgfDefinition'] = $request->lgfDefinitionShrink;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBeebotIntentLgf',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBeebotIntentLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateBeebotIntentLgf
     *  *
     * @param CreateBeebotIntentLgfRequest $request CreateBeebotIntentLgfRequest
     *
     * @return CreateBeebotIntentLgfResponse CreateBeebotIntentLgfResponse
     */
    public function createBeebotIntentLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBeebotIntentLgfWithOptions($request, $runtime);
    }

    /**
     * @summary CreateBeebotIntentUserSay
     *  *
     * @param CreateBeebotIntentUserSayRequest $tmpReq  CreateBeebotIntentUserSayRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBeebotIntentUserSayResponse CreateBeebotIntentUserSayResponse
     */
    public function createBeebotIntentUserSayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateBeebotIntentUserSayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userSayDefinition)) {
            $request->userSayDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userSayDefinition, 'UserSayDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->userSayDefinitionShrink)) {
            $query['UserSayDefinition'] = $request->userSayDefinitionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBeebotIntentUserSay',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBeebotIntentUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateBeebotIntentUserSay
     *  *
     * @param CreateBeebotIntentUserSayRequest $request CreateBeebotIntentUserSayRequest
     *
     * @return CreateBeebotIntentUserSayResponse CreateBeebotIntentUserSayResponse
     */
    public function createBeebotIntentUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBeebotIntentUserSayWithOptions($request, $runtime);
    }

    /**
     * @param CreateDialogueFlowRequest $request CreateDialogueFlowRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDialogueFlowResponse CreateDialogueFlowResponse
     */
    public function createDialogueFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dialogueFlowType)) {
            $query['DialogueFlowType'] = $request->dialogueFlowType;
        }
        if (!Utils::isUnset($request->dialogueName)) {
            $query['DialogueName'] = $request->dialogueName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDialogueFlow',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDialogueFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDialogueFlowRequest $request CreateDialogueFlowRequest
     *
     * @return CreateDialogueFlowResponse CreateDialogueFlowResponse
     */
    public function createDialogueFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDialogueFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateDownloadUrlRequest $request CreateDownloadUrlRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDownloadUrlResponse CreateDownloadUrlResponse
     */
    public function createDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDownloadUrl',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDownloadUrlRequest $request CreateDownloadUrlRequest
     *
     * @return CreateDownloadUrlResponse CreateDownloadUrlResponse
     */
    public function createDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalQuestionRequest $request CreateGlobalQuestionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGlobalQuestionResponse CreateGlobalQuestionResponse
     */
    public function createGlobalQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->answers)) {
            $query['Answers'] = $request->answers;
        }
        if (!Utils::isUnset($request->globalQuestionName)) {
            $query['GlobalQuestionName'] = $request->globalQuestionName;
        }
        if (!Utils::isUnset($request->globalQuestionType)) {
            $query['GlobalQuestionType'] = $request->globalQuestionType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->questions)) {
            $query['Questions'] = $request->questions;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGlobalQuestion',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGlobalQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGlobalQuestionRequest $request CreateGlobalQuestionRequest
     *
     * @return CreateGlobalQuestionResponse CreateGlobalQuestionResponse
     */
    public function createGlobalQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalQuestionWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->instanceDescription)) {
            $query['InstanceDescription'] = $request->instanceDescription;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->maxConcurrentConversation)) {
            $query['MaxConcurrentConversation'] = $request->maxConcurrentConversation;
        }
        if (!Utils::isUnset($request->nluServiceType)) {
            $query['NluServiceType'] = $request->nluServiceType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2019-12-26',
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
     * @summary 创建实例绑定号码
     *  *
     * @param CreateInstanceBindNumberRequest $request CreateInstanceBindNumberRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceBindNumberResponse CreateInstanceBindNumberResponse
     */
    public function createInstanceBindNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceList)) {
            $query['InstanceList'] = $request->instanceList;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceBindNumber',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceBindNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实例绑定号码
     *  *
     * @param CreateInstanceBindNumberRequest $request CreateInstanceBindNumberRequest
     *
     * @return CreateInstanceBindNumberResponse CreateInstanceBindNumberResponse
     */
    public function createInstanceBindNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceBindNumberWithOptions($request, $runtime);
    }

    /**
     * @param CreateIntentRequest $request CreateIntentRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIntentResponse CreateIntentResponse
     */
    public function createIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentDescription)) {
            $query['IntentDescription'] = $request->intentDescription;
        }
        if (!Utils::isUnset($request->intentName)) {
            $query['IntentName'] = $request->intentName;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->utterances)) {
            $query['Utterances'] = $request->utterances;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIntentRequest $request CreateIntentRequest
     *
     * @return CreateIntentResponse CreateIntentResponse
     */
    public function createIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntentWithOptions($request, $runtime);
    }

    /**
     * @param CreateJobDataParsingTaskRequest $request CreateJobDataParsingTaskRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobDataParsingTaskResponse CreateJobDataParsingTaskResponse
     */
    public function createJobDataParsingTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobFilePath)) {
            $query['JobFilePath'] = $request->jobFilePath;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJobDataParsingTask',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobDataParsingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateJobDataParsingTaskRequest $request CreateJobDataParsingTaskRequest
     *
     * @return CreateJobDataParsingTaskResponse CreateJobDataParsingTaskResponse
     */
    public function createJobDataParsingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobDataParsingTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateJobGroupRequest $request CreateJobGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobGroupResponse CreateJobGroupResponse
     */
    public function createJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->flashSmsExtras)) {
            $query['FlashSmsExtras'] = $request->flashSmsExtras;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupDescription)) {
            $query['JobGroupDescription'] = $request->jobGroupDescription;
        }
        if (!Utils::isUnset($request->jobGroupName)) {
            $query['JobGroupName'] = $request->jobGroupName;
        }
        if (!Utils::isUnset($request->minConcurrency)) {
            $query['MinConcurrency'] = $request->minConcurrency;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->recallCallingNumber)) {
            $query['RecallCallingNumber'] = $request->recallCallingNumber;
        }
        if (!Utils::isUnset($request->recallStrategyJson)) {
            $query['RecallStrategyJson'] = $request->recallStrategyJson;
        }
        if (!Utils::isUnset($request->ringingDuration)) {
            $query['RingingDuration'] = $request->ringingDuration;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->strategyJson)) {
            $query['StrategyJson'] = $request->strategyJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJobGroup',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateJobGroupRequest $request CreateJobGroupRequest
     *
     * @return CreateJobGroupResponse CreateJobGroupResponse
     */
    public function createJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateJobGroupExportTaskRequest $request CreateJobGroupExportTaskRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobGroupExportTaskResponse CreateJobGroupExportTaskResponse
     */
    public function createJobGroupExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->option)) {
            $query['Option'] = $request->option;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJobGroupExportTask',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobGroupExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateJobGroupExportTaskRequest $request CreateJobGroupExportTaskRequest
     *
     * @return CreateJobGroupExportTaskResponse CreateJobGroupExportTaskResponse
     */
    public function createJobGroupExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobGroupExportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建号码库下载链接
     *  *
     * @param CreateNumberDistrictInfoDownloadUrlRequest $request CreateNumberDistrictInfoDownloadUrlRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNumberDistrictInfoDownloadUrlResponse CreateNumberDistrictInfoDownloadUrlResponse
     */
    public function createNumberDistrictInfoDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNumberDistrictInfoDownloadUrl',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNumberDistrictInfoDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建号码库下载链接
     *  *
     * @param CreateNumberDistrictInfoDownloadUrlRequest $request CreateNumberDistrictInfoDownloadUrlRequest
     *
     * @return CreateNumberDistrictInfoDownloadUrlResponse CreateNumberDistrictInfoDownloadUrlResponse
     */
    public function createNumberDistrictInfoDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNumberDistrictInfoDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 创建号码库解析任务
     *  *
     * @param CreateNumberDistrictInfoParsingTaskRequest $request CreateNumberDistrictInfoParsingTaskRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNumberDistrictInfoParsingTaskResponse CreateNumberDistrictInfoParsingTaskResponse
     */
    public function createNumberDistrictInfoParsingTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $query['FileSize'] = $request->fileSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNumberDistrictInfoParsingTask',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNumberDistrictInfoParsingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建号码库解析任务
     *  *
     * @param CreateNumberDistrictInfoParsingTaskRequest $request CreateNumberDistrictInfoParsingTaskRequest
     *
     * @return CreateNumberDistrictInfoParsingTaskResponse CreateNumberDistrictInfoParsingTaskResponse
     */
    public function createNumberDistrictInfoParsingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNumberDistrictInfoParsingTaskWithOptions($request, $runtime);
    }

    /**
     * @summary CreateOutboundCallNumber
     *  *
     * @param CreateOutboundCallNumberRequest $request CreateOutboundCallNumberRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOutboundCallNumberResponse CreateOutboundCallNumberResponse
     */
    public function createOutboundCallNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->rateLimitCount)) {
            $query['RateLimitCount'] = $request->rateLimitCount;
        }
        if (!Utils::isUnset($request->rateLimitPeriod)) {
            $query['RateLimitPeriod'] = $request->rateLimitPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOutboundCallNumber',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOutboundCallNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateOutboundCallNumber
     *  *
     * @param CreateOutboundCallNumberRequest $request CreateOutboundCallNumberRequest
     *
     * @return CreateOutboundCallNumberResponse CreateOutboundCallNumberResponse
     */
    public function createOutboundCallNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOutboundCallNumberWithOptions($request, $runtime);
    }

    /**
     * @summary 新建场景
     *  *
     * @param CreateScriptRequest $request CreateScriptRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScriptResponse CreateScriptResponse
     */
    public function createScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->agentLlm)) {
            $query['AgentLlm'] = $request->agentLlm;
        }
        if (!Utils::isUnset($request->asrConfig)) {
            $query['AsrConfig'] = $request->asrConfig;
        }
        if (!Utils::isUnset($request->chatbotId)) {
            $query['ChatbotId'] = $request->chatbotId;
        }
        if (!Utils::isUnset($request->emotionEnable)) {
            $query['EmotionEnable'] = $request->emotionEnable;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['Industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->longWaitEnable)) {
            $query['LongWaitEnable'] = $request->longWaitEnable;
        }
        if (!Utils::isUnset($request->miniPlaybackEnable)) {
            $query['MiniPlaybackEnable'] = $request->miniPlaybackEnable;
        }
        if (!Utils::isUnset($request->newBargeInEnable)) {
            $query['NewBargeInEnable'] = $request->newBargeInEnable;
        }
        if (!Utils::isUnset($request->nluAccessType)) {
            $query['NluAccessType'] = $request->nluAccessType;
        }
        if (!Utils::isUnset($request->nluEngine)) {
            $query['NluEngine'] = $request->nluEngine;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->scriptContent)) {
            $query['ScriptContent'] = $request->scriptContent;
        }
        if (!Utils::isUnset($request->scriptDescription)) {
            $query['ScriptDescription'] = $request->scriptDescription;
        }
        if (!Utils::isUnset($request->scriptName)) {
            $query['ScriptName'] = $request->scriptName;
        }
        if (!Utils::isUnset($request->scriptNluProfileJsonString)) {
            $query['ScriptNluProfileJsonString'] = $request->scriptNluProfileJsonString;
        }
        if (!Utils::isUnset($request->scriptWaveform)) {
            $query['ScriptWaveform'] = $request->scriptWaveform;
        }
        if (!Utils::isUnset($request->ttsConfig)) {
            $query['TtsConfig'] = $request->ttsConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建场景
     *  *
     * @param CreateScriptRequest $request CreateScriptRequest
     *
     * @return CreateScriptResponse CreateScriptResponse
     */
    public function createScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScriptWithOptions($request, $runtime);
    }

    /**
     * @param CreateScriptWaveformRequest $request CreateScriptWaveformRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScriptWaveformResponse CreateScriptWaveformResponse
     */
    public function createScriptWaveformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptContent)) {
            $query['ScriptContent'] = $request->scriptContent;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScriptWaveform',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScriptWaveformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScriptWaveformRequest $request CreateScriptWaveformRequest
     *
     * @return CreateScriptWaveformResponse CreateScriptWaveformResponse
     */
    public function createScriptWaveform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScriptWaveformWithOptions($request, $runtime);
    }

    /**
     * @param CreateTagRequest $request CreateTagRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTagResponse CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->tagGroup)) {
            $query['TagGroup'] = $request->tagGroup;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTag',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTagRequest $request CreateTagRequest
     *
     * @return CreateTagResponse CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * @summary 外呼历史导出
     *  *
     * @param CreateTaskExportTaskRequest $request CreateTaskExportTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskExportTaskResponse CreateTaskExportTaskResponse
     */
    public function createTaskExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTaskExportTask',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTaskExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 外呼历史导出
     *  *
     * @param CreateTaskExportTaskRequest $request CreateTaskExportTaskRequest
     *
     * @return CreateTaskExportTaskResponse CreateTaskExportTaskResponse
     */
    public function createTaskExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAgentProfilesRequest $tmpReq  DeleteAgentProfilesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAgentProfilesResponse DeleteAgentProfilesResponse
     */
    public function deleteAgentProfilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAgentProfilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentProfileIds)) {
            $request->agentProfileIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentProfileIds, 'AgentProfileIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->agentProfileIdsShrink)) {
            $body['AgentProfileIds'] = $request->agentProfileIdsShrink;
        }
        if (!Utils::isUnset($request->appIp)) {
            $body['AppIp'] = $request->appIp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAgentProfiles',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAgentProfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAgentProfilesRequest $request DeleteAgentProfilesRequest
     *
     * @return DeleteAgentProfilesResponse DeleteAgentProfilesResponse
     */
    public function deleteAgentProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentProfilesWithOptions($request, $runtime);
    }

    /**
     * @summary 清空归属地号码库
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAllNumberDistrictInfoResponse DeleteAllNumberDistrictInfoResponse
     */
    public function deleteAllNumberDistrictInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DeleteAllNumberDistrictInfo',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAllNumberDistrictInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 清空归属地号码库
     *  *
     * @return DeleteAllNumberDistrictInfoResponse DeleteAllNumberDistrictInfoResponse
     */
    public function deleteAllNumberDistrictInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllNumberDistrictInfoWithOptions($runtime);
    }

    /**
     * @summary DeleteBeebotIntent
     *  *
     * @param DeleteBeebotIntentRequest $request DeleteBeebotIntentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBeebotIntentResponse DeleteBeebotIntentResponse
     */
    public function deleteBeebotIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBeebotIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBeebotIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteBeebotIntent
     *  *
     * @param DeleteBeebotIntentRequest $request DeleteBeebotIntentRequest
     *
     * @return DeleteBeebotIntentResponse DeleteBeebotIntentResponse
     */
    public function deleteBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * @summary DeleteBeebotIntentLgf
     *  *
     * @param DeleteBeebotIntentLgfRequest $request DeleteBeebotIntentLgfRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBeebotIntentLgfResponse DeleteBeebotIntentLgfResponse
     */
    public function deleteBeebotIntentLgfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->lgfId)) {
            $query['LgfId'] = $request->lgfId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBeebotIntentLgf',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBeebotIntentLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteBeebotIntentLgf
     *  *
     * @param DeleteBeebotIntentLgfRequest $request DeleteBeebotIntentLgfRequest
     *
     * @return DeleteBeebotIntentLgfResponse DeleteBeebotIntentLgfResponse
     */
    public function deleteBeebotIntentLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBeebotIntentLgfWithOptions($request, $runtime);
    }

    /**
     * @summary DeleteBeebotIntentUserSay
     *  *
     * @param DeleteBeebotIntentUserSayRequest $request DeleteBeebotIntentUserSayRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBeebotIntentUserSayResponse DeleteBeebotIntentUserSayResponse
     */
    public function deleteBeebotIntentUserSayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->userSayId)) {
            $query['UserSayId'] = $request->userSayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBeebotIntentUserSay',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBeebotIntentUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteBeebotIntentUserSay
     *  *
     * @param DeleteBeebotIntentUserSayRequest $request DeleteBeebotIntentUserSayRequest
     *
     * @return DeleteBeebotIntentUserSayResponse DeleteBeebotIntentUserSayResponse
     */
    public function deleteBeebotIntentUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBeebotIntentUserSayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactBlockListRequest $request DeleteContactBlockListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContactBlockListResponse DeleteContactBlockListResponse
     */
    public function deleteContactBlockListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactBlockListId)) {
            $query['ContactBlockListId'] = $request->contactBlockListId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['Operator'] = $request->operator;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContactBlockList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactBlockListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactBlockListRequest $request DeleteContactBlockListRequest
     *
     * @return DeleteContactBlockListResponse DeleteContactBlockListResponse
     */
    public function deleteContactBlockList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactBlockListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactWhiteListRequest $request DeleteContactWhiteListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContactWhiteListResponse DeleteContactWhiteListResponse
     */
    public function deleteContactWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactWhiteListId)) {
            $query['ContactWhiteListId'] = $request->contactWhiteListId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['Operator'] = $request->operator;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContactWhiteList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactWhiteListRequest $request DeleteContactWhiteListRequest
     *
     * @return DeleteContactWhiteListResponse DeleteContactWhiteListResponse
     */
    public function deleteContactWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDialogueFlowRequest $request DeleteDialogueFlowRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDialogueFlowResponse DeleteDialogueFlowResponse
     */
    public function deleteDialogueFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dialogueFlowId)) {
            $query['DialogueFlowId'] = $request->dialogueFlowId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDialogueFlow',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDialogueFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDialogueFlowRequest $request DeleteDialogueFlowRequest
     *
     * @return DeleteDialogueFlowResponse DeleteDialogueFlowResponse
     */
    public function deleteDialogueFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDialogueFlowWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGlobalQuestionRequest $request DeleteGlobalQuestionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGlobalQuestionResponse DeleteGlobalQuestionResponse
     */
    public function deleteGlobalQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalQuestionId)) {
            $query['GlobalQuestionId'] = $request->globalQuestionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGlobalQuestion',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGlobalQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGlobalQuestionRequest $request DeleteGlobalQuestionRequest
     *
     * @return DeleteGlobalQuestionResponse DeleteGlobalQuestionResponse
     */
    public function deleteGlobalQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalQuestionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
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
            'action' => 'DeleteInstance',
            'version' => '2019-12-26',
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
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIntentRequest $request DeleteIntentRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIntentResponse DeleteIntentResponse
     */
    public function deleteIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIntentRequest $request DeleteIntentRequest
     *
     * @return DeleteIntentResponse DeleteIntentResponse
     */
    public function deleteIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIntentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteJobGroupRequest $request DeleteJobGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteJobGroupResponse DeleteJobGroupResponse
     */
    public function deleteJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteJobGroup',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJobGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteJobGroupRequest $request DeleteJobGroupRequest
     *
     * @return DeleteJobGroupResponse DeleteJobGroupResponse
     */
    public function deleteJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOutboundCallNumberRequest $request DeleteOutboundCallNumberRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOutboundCallNumberResponse DeleteOutboundCallNumberResponse
     */
    public function deleteOutboundCallNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundCallNumberId)) {
            $query['OutboundCallNumberId'] = $request->outboundCallNumberId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOutboundCallNumber',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOutboundCallNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteOutboundCallNumberRequest $request DeleteOutboundCallNumberRequest
     *
     * @return DeleteOutboundCallNumberResponse DeleteOutboundCallNumberResponse
     */
    public function deleteOutboundCallNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOutboundCallNumberWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScriptRequest $request DeleteScriptRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScriptResponse DeleteScriptResponse
     */
    public function deleteScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScriptRequest $request DeleteScriptRequest
     *
     * @return DeleteScriptResponse DeleteScriptResponse
     */
    public function deleteScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScriptRecordingRequest $request DeleteScriptRecordingRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScriptRecordingResponse DeleteScriptRecordingResponse
     */
    public function deleteScriptRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->uuidsJson)) {
            $query['UuidsJson'] = $request->uuidsJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScriptRecording',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScriptRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScriptRecordingRequest $request DeleteScriptRecordingRequest
     *
     * @return DeleteScriptRecordingResponse DeleteScriptRecordingResponse
     */
    public function deleteScriptRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptRecordingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScriptWaveformRequest $request DeleteScriptWaveformRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScriptWaveformResponse DeleteScriptWaveformResponse
     */
    public function deleteScriptWaveformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->scriptWaveformId)) {
            $query['ScriptWaveformId'] = $request->scriptWaveformId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScriptWaveform',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScriptWaveformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScriptWaveformRequest $request DeleteScriptWaveformRequest
     *
     * @return DeleteScriptWaveformResponse DeleteScriptWaveformResponse
     */
    public function deleteScriptWaveform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptWaveformWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeBeebotIntent
     *  *
     * @description ****
     *  *
     * @param DescribeBeebotIntentRequest $request DescribeBeebotIntentRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBeebotIntentResponse DescribeBeebotIntentResponse
     */
    public function describeBeebotIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBeebotIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBeebotIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeBeebotIntent
     *  *
     * @description ****
     *  *
     * @param DescribeBeebotIntentRequest $request DescribeBeebotIntentRequest
     *
     * @return DescribeBeebotIntentResponse DescribeBeebotIntentResponse
     */
    public function describeBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDialogueNodeStatisticsRequest $request DescribeDialogueNodeStatisticsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDialogueNodeStatisticsResponse DescribeDialogueNodeStatisticsResponse
     */
    public function describeDialogueNodeStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDialogueNodeStatistics',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDialogueNodeStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDialogueNodeStatisticsRequest $request DescribeDialogueNodeStatisticsRequest
     *
     * @return DescribeDialogueNodeStatisticsResponse DescribeDialogueNodeStatisticsResponse
     */
    public function describeDialogueNodeStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDialogueNodeStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeDsReports
     *  *
     * @param DescribeDsReportsRequest $request DescribeDsReportsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDsReportsResponse DescribeDsReportsResponse
     */
    public function describeDsReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDsReports',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDsReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeDsReports
     *  *
     * @param DescribeDsReportsRequest $request DescribeDsReportsRequest
     *
     * @return DescribeDsReportsResponse DescribeDsReportsResponse
     */
    public function describeDsReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDsReportsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalQuestionRequest $request DescribeGlobalQuestionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalQuestionResponse DescribeGlobalQuestionResponse
     */
    public function describeGlobalQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalQuestionId)) {
            $query['GlobalQuestionId'] = $request->globalQuestionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalQuestion',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGlobalQuestionRequest $request DescribeGlobalQuestionRequest
     *
     * @return DescribeGlobalQuestionResponse DescribeGlobalQuestionResponse
     */
    public function describeGlobalQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalQuestionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupExecutingInfoRequest $request DescribeGroupExecutingInfoRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupExecutingInfoResponse DescribeGroupExecutingInfoResponse
     */
    public function describeGroupExecutingInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupExecutingInfo',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupExecutingInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupExecutingInfoRequest $request DescribeGroupExecutingInfoRequest
     *
     * @return DescribeGroupExecutingInfoResponse DescribeGroupExecutingInfoResponse
     */
    public function describeGroupExecutingInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupExecutingInfoWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeInstance
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
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
            'action' => 'DescribeInstance',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeInstance
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIntentRequest $request DescribeIntentRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIntentResponse DescribeIntentResponse
     */
    public function describeIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIntentRequest $request DescribeIntentRequest
     *
     * @return DescribeIntentResponse DescribeIntentResponse
     */
    public function describeIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntentWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIntentStatisticsRequest $request DescribeIntentStatisticsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIntentStatisticsResponse DescribeIntentStatisticsResponse
     */
    public function describeIntentStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIntentStatistics',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIntentStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIntentStatisticsRequest $request DescribeIntentStatisticsRequest
     *
     * @return DescribeIntentStatisticsResponse DescribeIntentStatisticsResponse
     */
    public function describeIntentStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntentStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取job信息
     *  *
     * @param DescribeJobRequest $request DescribeJobRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobResponse DescribeJobResponse
     */
    public function describeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->withScript)) {
            $query['WithScript'] = $request->withScript;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJob',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取job信息
     *  *
     * @param DescribeJobRequest $request DescribeJobRequest
     *
     * @return DescribeJobResponse DescribeJobResponse
     */
    public function describeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobWithOptions($request, $runtime);
    }

    /**
     * @param DescribeJobDataParsingTaskProgressRequest $request DescribeJobDataParsingTaskProgressRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobDataParsingTaskProgressResponse DescribeJobDataParsingTaskProgressResponse
     */
    public function describeJobDataParsingTaskProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobDataParsingTaskId)) {
            $query['JobDataParsingTaskId'] = $request->jobDataParsingTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobDataParsingTaskProgress',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobDataParsingTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeJobDataParsingTaskProgressRequest $request DescribeJobDataParsingTaskProgressRequest
     *
     * @return DescribeJobDataParsingTaskProgressResponse DescribeJobDataParsingTaskProgressResponse
     */
    public function describeJobDataParsingTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobDataParsingTaskProgressWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeJobGroup
     *  *
     * @param DescribeJobGroupRequest $request DescribeJobGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobGroupResponse DescribeJobGroupResponse
     */
    public function describeJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->briefTypes)) {
            $query['BriefTypes'] = $request->briefTypes;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobGroup',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeJobGroup
     *  *
     * @param DescribeJobGroupRequest $request DescribeJobGroupRequest
     *
     * @return DescribeJobGroupResponse DescribeJobGroupResponse
     */
    public function describeJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeJobGroupExportTaskProgressRequest $request DescribeJobGroupExportTaskProgressRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobGroupExportTaskProgressResponse DescribeJobGroupExportTaskProgressResponse
     */
    public function describeJobGroupExportTaskProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobGroupExportTaskProgress',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobGroupExportTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeJobGroupExportTaskProgressRequest $request DescribeJobGroupExportTaskProgressRequest
     *
     * @return DescribeJobGroupExportTaskProgressResponse DescribeJobGroupExportTaskProgressResponse
     */
    public function describeJobGroupExportTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobGroupExportTaskProgressWithOptions($request, $runtime);
    }

    /**
     * @summary 查询号码库状态
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNumberDistrictInfoStatusResponse DescribeNumberDistrictInfoStatusResponse
     */
    public function describeNumberDistrictInfoStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeNumberDistrictInfoStatus',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNumberDistrictInfoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询号码库状态
     *  *
     * @return DescribeNumberDistrictInfoStatusResponse DescribeNumberDistrictInfoStatusResponse
     */
    public function describeNumberDistrictInfoStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNumberDistrictInfoStatusWithOptions($runtime);
    }

    /**
     * @summary 获取场景信息
     *  *
     * @param DescribeScriptRequest $request DescribeScriptRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScriptResponse DescribeScriptResponse
     */
    public function describeScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取场景信息
     *  *
     * @param DescribeScriptRequest $request DescribeScriptRequest
     *
     * @return DescribeScriptResponse DescribeScriptResponse
     */
    public function describeScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScriptWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScriptVoiceConfigRequest $request DescribeScriptVoiceConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScriptVoiceConfigResponse DescribeScriptVoiceConfigResponse
     */
    public function describeScriptVoiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->scriptVoiceConfigId)) {
            $query['ScriptVoiceConfigId'] = $request->scriptVoiceConfigId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScriptVoiceConfig',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScriptVoiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScriptVoiceConfigRequest $request DescribeScriptVoiceConfigRequest
     *
     * @return DescribeScriptVoiceConfigResponse DescribeScriptVoiceConfigResponse
     */
    public function describeScriptVoiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScriptVoiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTTSConfigRequest $request DescribeTTSConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTTSConfigResponse DescribeTTSConfigResponse
     */
    public function describeTTSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTTSConfig',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTTSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTTSConfigRequest $request DescribeTTSConfigRequest
     *
     * @return DescribeTTSConfigResponse DescribeTTSConfigResponse
     */
    public function describeTTSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTTSConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTTSDemoRequest $request DescribeTTSDemoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTTSDemoResponse DescribeTTSDemoResponse
     */
    public function describeTTSDemoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->aliCustomizedVoice)) {
            $query['AliCustomizedVoice'] = $request->aliCustomizedVoice;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nlsServiceType)) {
            $query['NlsServiceType'] = $request->nlsServiceType;
        }
        if (!Utils::isUnset($request->pitchRate)) {
            $query['PitchRate'] = $request->pitchRate;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->secretKey)) {
            $query['SecretKey'] = $request->secretKey;
        }
        if (!Utils::isUnset($request->speechRate)) {
            $query['SpeechRate'] = $request->speechRate;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->voice)) {
            $query['Voice'] = $request->voice;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTTSDemo',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTTSDemoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTTSDemoRequest $request DescribeTTSDemoRequest
     *
     * @return DescribeTTSDemoResponse DescribeTTSDemoResponse
     */
    public function describeTTSDemo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTTSDemoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagHitsSummaryRequest $request DescribeTagHitsSummaryRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagHitsSummaryResponse DescribeTagHitsSummaryResponse
     */
    public function describeTagHitsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagHitsSummary',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagHitsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTagHitsSummaryRequest $request DescribeTagHitsSummaryRequest
     *
     * @return DescribeTagHitsSummaryResponse DescribeTagHitsSummaryResponse
     */
    public function describeTagHitsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagHitsSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary 号码绑定实例列表
     *  *
     * @param DescribeTenantBindNumberRequest $request DescribeTenantBindNumberRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantBindNumberResponse DescribeTenantBindNumberResponse
     */
    public function describeTenantBindNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantBindNumber',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTenantBindNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 号码绑定实例列表
     *  *
     * @param DescribeTenantBindNumberRequest $request DescribeTenantBindNumberRequest
     *
     * @return DescribeTenantBindNumberResponse DescribeTenantBindNumberResponse
     */
    public function describeTenantBindNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantBindNumberWithOptions($request, $runtime);
    }

    /**
     * @param DialogueRequest $request DialogueRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return DialogueResponse DialogueResponse
     */
    public function dialogueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionKey)) {
            $query['ActionKey'] = $request->actionKey;
        }
        if (!Utils::isUnset($request->actionParams)) {
            $query['ActionParams'] = $request->actionParams;
        }
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->callType)) {
            $query['CallType'] = $request->callType;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->utterance)) {
            $query['Utterance'] = $request->utterance;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'Dialogue',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DialogueRequest $request DialogueRequest
     *
     * @return DialogueResponse DialogueResponse
     */
    public function dialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dialogueWithOptions($request, $runtime);
    }

    /**
     * @summary 取消号码库解析结果
     *  *
     * @param DismissNumberDistrictInfoParsingResultRequest $request DismissNumberDistrictInfoParsingResultRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DismissNumberDistrictInfoParsingResultResponse DismissNumberDistrictInfoParsingResultResponse
     */
    public function dismissNumberDistrictInfoParsingResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DismissNumberDistrictInfoParsingResult',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DismissNumberDistrictInfoParsingResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消号码库解析结果
     *  *
     * @param DismissNumberDistrictInfoParsingResultRequest $request DismissNumberDistrictInfoParsingResultRequest
     *
     * @return DismissNumberDistrictInfoParsingResultResponse DismissNumberDistrictInfoParsingResultResponse
     */
    public function dismissNumberDistrictInfoParsingResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dismissNumberDistrictInfoParsingResultWithOptions($request, $runtime);
    }

    /**
     * @summary DownloadRecording
     *  *
     * @param DownloadRecordingRequest $request DownloadRecordingRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadRecordingResponse DownloadRecordingResponse
     */
    public function downloadRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needVoiceSliceRecording)) {
            $query['NeedVoiceSliceRecording'] = $request->needVoiceSliceRecording;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadRecording',
            'version' => '2019-12-26',
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
     * @summary DownloadRecording
     *  *
     * @param DownloadRecordingRequest $request DownloadRecordingRequest
     *
     * @return DownloadRecordingResponse DownloadRecordingResponse
     */
    public function downloadRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadRecordingWithOptions($request, $runtime);
    }

    /**
     * @param DownloadScriptRecordingRequest $request DownloadScriptRecordingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadScriptRecordingResponse DownloadScriptRecordingResponse
     */
    public function downloadScriptRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadScriptRecording',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadScriptRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadScriptRecordingRequest $request DownloadScriptRecordingRequest
     *
     * @return DownloadScriptRecordingResponse DownloadScriptRecordingResponse
     */
    public function downloadScriptRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadScriptRecordingWithOptions($request, $runtime);
    }

    /**
     * @param DuplicateScriptRequest $request DuplicateScriptRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DuplicateScriptResponse DuplicateScriptResponse
     */
    public function duplicateScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceScriptId)) {
            $query['SourceScriptId'] = $request->sourceScriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DuplicateScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DuplicateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DuplicateScriptRequest $request DuplicateScriptRequest
     *
     * @return DuplicateScriptResponse DuplicateScriptResponse
     */
    public function duplicateScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->duplicateScriptWithOptions($request, $runtime);
    }

    /**
     * @param ExportScriptRequest $request ExportScriptRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportScriptResponse ExportScriptResponse
     */
    public function exportScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportScriptRequest $request ExportScriptRequest
     *
     * @return ExportScriptResponse ExportScriptResponse
     */
    public function exportScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportScriptWithOptions($request, $runtime);
    }

    /**
     * @param GenerateUploadUrlRequest $request GenerateUploadUrlRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateUploadUrlResponse GenerateUploadUrlResponse
     */
    public function generateUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateUploadUrl',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateUploadUrlRequest $request GenerateUploadUrlRequest
     *
     * @return GenerateUploadUrlResponse GenerateUploadUrlResponse
     */
    public function generateUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetAfterAnswerDelayPlaybackRequest $request GetAfterAnswerDelayPlaybackRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAfterAnswerDelayPlaybackResponse GetAfterAnswerDelayPlaybackResponse
     */
    public function getAfterAnswerDelayPlaybackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAfterAnswerDelayPlayback',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAfterAnswerDelayPlaybackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAfterAnswerDelayPlaybackRequest $request GetAfterAnswerDelayPlaybackRequest
     *
     * @return GetAfterAnswerDelayPlaybackResponse GetAfterAnswerDelayPlaybackResponse
     */
    public function getAfterAnswerDelayPlayback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAfterAnswerDelayPlaybackWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentProfileRequest $request GetAgentProfileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentProfileResponse GetAgentProfileResponse
     */
    public function getAgentProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentProfileId)) {
            $body['AgentProfileId'] = $request->agentProfileId;
        }
        if (!Utils::isUnset($request->appIp)) {
            $body['AppIp'] = $request->appIp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAgentProfile',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAgentProfileRequest $request GetAgentProfileRequest
     *
     * @return GetAgentProfileResponse GetAgentProfileResponse
     */
    public function getAgentProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentProfileWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentProfileTemplateRequest $request GetAgentProfileTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentProfileTemplateResponse GetAgentProfileTemplateResponse
     */
    public function getAgentProfileTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentProfileTemplateId)) {
            $body['AgentProfileTemplateId'] = $request->agentProfileTemplateId;
        }
        if (!Utils::isUnset($request->appIp)) {
            $body['AppIp'] = $request->appIp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAgentProfileTemplate',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentProfileTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAgentProfileTemplateRequest $request GetAgentProfileTemplateRequest
     *
     * @return GetAgentProfileTemplateResponse GetAgentProfileTemplateResponse
     */
    public function getAgentProfileTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentProfileTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetAnnotationMissionSummaryRequest $request GetAnnotationMissionSummaryRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAnnotationMissionSummaryResponse GetAnnotationMissionSummaryResponse
     */
    public function getAnnotationMissionSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotationMissionId)) {
            $query['AnnotationMissionId'] = $request->annotationMissionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAnnotationMissionSummary',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAnnotationMissionSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAnnotationMissionSummaryRequest $request GetAnnotationMissionSummaryRequest
     *
     * @return GetAnnotationMissionSummaryResponse GetAnnotationMissionSummaryResponse
     */
    public function getAnnotationMissionSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAnnotationMissionSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetAnnotationMissionTagInfoListRequest $request GetAnnotationMissionTagInfoListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAnnotationMissionTagInfoListResponse GetAnnotationMissionTagInfoListResponse
     */
    public function getAnnotationMissionTagInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAnnotationMissionTagInfoList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAnnotationMissionTagInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAnnotationMissionTagInfoListRequest $request GetAnnotationMissionTagInfoListRequest
     *
     * @return GetAnnotationMissionTagInfoListResponse GetAnnotationMissionTagInfoListResponse
     */
    public function getAnnotationMissionTagInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAnnotationMissionTagInfoListWithOptions($request, $runtime);
    }

    /**
     * @param GetAsrServerInfoRequest $request GetAsrServerInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsrServerInfoResponse GetAsrServerInfoResponse
     */
    public function getAsrServerInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsrServerInfo',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsrServerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAsrServerInfoRequest $request GetAsrServerInfoRequest
     *
     * @return GetAsrServerInfoResponse GetAsrServerInfoResponse
     */
    public function getAsrServerInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsrServerInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取异步外呼任务上传结果
     *  *
     * @param GetAssignJobsAsyncResultRequest $request GetAssignJobsAsyncResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAssignJobsAsyncResultResponse GetAssignJobsAsyncResultResponse
     */
    public function getAssignJobsAsyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asyncTaskId)) {
            $query['AsyncTaskId'] = $request->asyncTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAssignJobsAsyncResult',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAssignJobsAsyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取异步外呼任务上传结果
     *  *
     * @param GetAssignJobsAsyncResultRequest $request GetAssignJobsAsyncResultRequest
     *
     * @return GetAssignJobsAsyncResultResponse GetAssignJobsAsyncResultResponse
     */
    public function getAssignJobsAsyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAssignJobsAsyncResultWithOptions($request, $runtime);
    }

    /**
     * @summary 获取系统策略配置
     *  *
     * @param GetBaseStrategyPeriodRequest $request GetBaseStrategyPeriodRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBaseStrategyPeriodResponse GetBaseStrategyPeriodResponse
     */
    public function getBaseStrategyPeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBaseStrategyPeriod',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBaseStrategyPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取系统策略配置
     *  *
     * @param GetBaseStrategyPeriodRequest $request GetBaseStrategyPeriodRequest
     *
     * @return GetBaseStrategyPeriodResponse GetBaseStrategyPeriodResponse
     */
    public function getBaseStrategyPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaseStrategyPeriodWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConcurrentConversationQuotaResponse GetConcurrentConversationQuotaResponse
     */
    public function getConcurrentConversationQuotaWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetConcurrentConversationQuota',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConcurrentConversationQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetConcurrentConversationQuotaResponse GetConcurrentConversationQuotaResponse
     */
    public function getConcurrentConversationQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConcurrentConversationQuotaWithOptions($runtime);
    }

    /**
     * @summary GetContactBlockList
     *  *
     * @param GetContactBlockListRequest $request GetContactBlockListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetContactBlockListResponse GetContactBlockListResponse
     */
    public function getContactBlockListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countTotalRow)) {
            $query['CountTotalRow'] = $request->countTotalRow;
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
            'action' => 'GetContactBlockList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContactBlockListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetContactBlockList
     *  *
     * @param GetContactBlockListRequest $request GetContactBlockListRequest
     *
     * @return GetContactBlockListResponse GetContactBlockListResponse
     */
    public function getContactBlockList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContactBlockListWithOptions($request, $runtime);
    }

    /**
     * @summary GetContactWhiteList
     *  *
     * @param GetContactWhiteListRequest $request GetContactWhiteListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetContactWhiteListResponse GetContactWhiteListResponse
     */
    public function getContactWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countTotalRow)) {
            $query['CountTotalRow'] = $request->countTotalRow;
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
            'action' => 'GetContactWhiteList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContactWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetContactWhiteList
     *  *
     * @param GetContactWhiteListRequest $request GetContactWhiteListRequest
     *
     * @return GetContactWhiteListResponse GetContactWhiteListResponse
     */
    public function getContactWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContactWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param GetCurrentConcurrencyRequest $request GetCurrentConcurrencyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCurrentConcurrencyResponse GetCurrentConcurrencyResponse
     */
    public function getCurrentConcurrencyWithOptions($request, $runtime)
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
            'action' => 'GetCurrentConcurrency',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCurrentConcurrencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCurrentConcurrencyRequest $request GetCurrentConcurrencyRequest
     *
     * @return GetCurrentConcurrencyResponse GetCurrentConcurrencyResponse
     */
    public function getCurrentConcurrency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCurrentConcurrencyWithOptions($request, $runtime);
    }

    /**
     * @param GetEffectiveDaysRequest $request GetEffectiveDaysRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEffectiveDaysResponse GetEffectiveDaysResponse
     */
    public function getEffectiveDaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEffectiveDays',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEffectiveDaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEffectiveDaysRequest $request GetEffectiveDaysRequest
     *
     * @return GetEffectiveDaysResponse GetEffectiveDaysResponse
     */
    public function getEffectiveDays($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEffectiveDaysWithOptions($request, $runtime);
    }

    /**
     * @summary GetEmptyNumberNoMoreCallsInfo
     *  *
     * @param GetEmptyNumberNoMoreCallsInfoRequest $request GetEmptyNumberNoMoreCallsInfoRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEmptyNumberNoMoreCallsInfoResponse GetEmptyNumberNoMoreCallsInfoResponse
     */
    public function getEmptyNumberNoMoreCallsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEmptyNumberNoMoreCallsInfo',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEmptyNumberNoMoreCallsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetEmptyNumberNoMoreCallsInfo
     *  *
     * @param GetEmptyNumberNoMoreCallsInfoRequest $request GetEmptyNumberNoMoreCallsInfoRequest
     *
     * @return GetEmptyNumberNoMoreCallsInfoResponse GetEmptyNumberNoMoreCallsInfoResponse
     */
    public function getEmptyNumberNoMoreCallsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEmptyNumberNoMoreCallsInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取上传信息
     *  *
     * @param GetJobDataUploadParamsRequest $request GetJobDataUploadParamsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobDataUploadParamsResponse GetJobDataUploadParamsResponse
     */
    public function getJobDataUploadParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->busiType)) {
            $query['BusiType'] = $request->busiType;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->uniqueId)) {
            $query['UniqueId'] = $request->uniqueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobDataUploadParams',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobDataUploadParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取上传信息
     *  *
     * @param GetJobDataUploadParamsRequest $request GetJobDataUploadParamsRequest
     *
     * @return GetJobDataUploadParamsResponse GetJobDataUploadParamsResponse
     */
    public function getJobDataUploadParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobDataUploadParamsWithOptions($request, $runtime);
    }

    /**
     * @summary GetMaxAttemptsPerDay
     *  *
     * @param GetMaxAttemptsPerDayRequest $request GetMaxAttemptsPerDayRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMaxAttemptsPerDayResponse GetMaxAttemptsPerDayResponse
     */
    public function getMaxAttemptsPerDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMaxAttemptsPerDay',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMaxAttemptsPerDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetMaxAttemptsPerDay
     *  *
     * @param GetMaxAttemptsPerDayRequest $request GetMaxAttemptsPerDayRequest
     *
     * @return GetMaxAttemptsPerDayResponse GetMaxAttemptsPerDayResponse
     */
    public function getMaxAttemptsPerDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMaxAttemptsPerDayWithOptions($request, $runtime);
    }

    /**
     * @summary 获取号码库模板下载链接
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNumberDistrictInfoTemplateDownloadUrlResponse GetNumberDistrictInfoTemplateDownloadUrlResponse
     */
    public function getNumberDistrictInfoTemplateDownloadUrlWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetNumberDistrictInfoTemplateDownloadUrl',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNumberDistrictInfoTemplateDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取号码库模板下载链接
     *  *
     * @return GetNumberDistrictInfoTemplateDownloadUrlResponse GetNumberDistrictInfoTemplateDownloadUrlResponse
     */
    public function getNumberDistrictInfoTemplateDownloadUrl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumberDistrictInfoTemplateDownloadUrlWithOptions($runtime);
    }

    /**
     * @summary GetRealtimeConcurrencyReport
     *  *
     * @param GetRealtimeConcurrencyReportRequest $request GetRealtimeConcurrencyReportRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRealtimeConcurrencyReportResponse GetRealtimeConcurrencyReportResponse
     */
    public function getRealtimeConcurrencyReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRealtimeConcurrencyReport',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRealtimeConcurrencyReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetRealtimeConcurrencyReport
     *  *
     * @param GetRealtimeConcurrencyReportRequest $request GetRealtimeConcurrencyReportRequest
     *
     * @return GetRealtimeConcurrencyReportResponse GetRealtimeConcurrencyReportResponse
     */
    public function getRealtimeConcurrencyReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeConcurrencyReportWithOptions($request, $runtime);
    }

    /**
     * @summary GetSummaryInfo
     *  *
     * @param GetSummaryInfoRequest $request GetSummaryInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSummaryInfoResponse GetSummaryInfoResponse
     */
    public function getSummaryInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSummaryInfo',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetSummaryInfo
     *  *
     * @param GetSummaryInfoRequest $request GetSummaryInfoRequest
     *
     * @return GetSummaryInfoResponse GetSummaryInfoResponse
     */
    public function getSummaryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSummaryInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskByUuidRequest $request GetTaskByUuidRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskByUuidResponse GetTaskByUuidResponse
     */
    public function getTaskByUuidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskByUuid',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskByUuidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskByUuidRequest $request GetTaskByUuidRequest
     *
     * @return GetTaskByUuidResponse GetTaskByUuidResponse
     */
    public function getTaskByUuid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskByUuidWithOptions($request, $runtime);
    }

    /**
     * @summary GetVersion
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVersionResponse GetVersionResponse
     */
    public function getVersionWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetVersion',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetVersion
     *  *
     * @return GetVersionResponse GetVersionResponse
     */
    public function getVersion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVersionWithOptions($runtime);
    }

    /**
     * @param ImportScriptRequest $request ImportScriptRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportScriptResponse ImportScriptResponse
     */
    public function importScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nluEngine)) {
            $query['NluEngine'] = $request->nluEngine;
        }
        if (!Utils::isUnset($request->signatureUrl)) {
            $query['SignatureUrl'] = $request->signatureUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportScriptRequest $request ImportScriptRequest
     *
     * @return ImportScriptResponse ImportScriptResponse
     */
    public function importScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importScriptWithOptions($request, $runtime);
    }

    /**
     * @summary InflightTaskTimeout
     *  *
     * @param InflightTaskTimeoutRequest $request InflightTaskTimeoutRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return InflightTaskTimeoutResponse InflightTaskTimeoutResponse
     */
    public function inflightTaskTimeoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'InflightTaskTimeout',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InflightTaskTimeoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary InflightTaskTimeout
     *  *
     * @param InflightTaskTimeoutRequest $request InflightTaskTimeoutRequest
     *
     * @return InflightTaskTimeoutResponse InflightTaskTimeoutResponse
     */
    public function inflightTaskTimeout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inflightTaskTimeoutWithOptions($request, $runtime);
    }

    /**
     * @param ListAgentProfilesRequest $request ListAgentProfilesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAgentProfilesResponse ListAgentProfilesResponse
     */
    public function listAgentProfilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appIp)) {
            $body['AppIp'] = $request->appIp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $body['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAgentProfiles',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentProfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAgentProfilesRequest $request ListAgentProfilesRequest
     *
     * @return ListAgentProfilesResponse ListAgentProfilesResponse
     */
    public function listAgentProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentProfilesWithOptions($request, $runtime);
    }

    /**
     * @summary 租户绑定号码列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAllTenantBindNumberBindingResponse ListAllTenantBindNumberBindingResponse
     */
    public function listAllTenantBindNumberBindingWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListAllTenantBindNumberBinding',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllTenantBindNumberBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 租户绑定号码列表
     *  *
     * @return ListAllTenantBindNumberBindingResponse ListAllTenantBindNumberBindingResponse
     */
    public function listAllTenantBindNumberBinding()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllTenantBindNumberBindingWithOptions($runtime);
    }

    /**
     * @param ListAnnotationMissionRequest $request ListAnnotationMissionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnnotationMissionResponse ListAnnotationMissionResponse
     */
    public function listAnnotationMissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotationMissionId)) {
            $query['AnnotationMissionId'] = $request->annotationMissionId;
        }
        if (!Utils::isUnset($request->annotationMissionName)) {
            $query['AnnotationMissionName'] = $request->annotationMissionName;
        }
        if (!Utils::isUnset($request->annotationStatusListFilter)) {
            $query['AnnotationStatusListFilter'] = $request->annotationStatusListFilter;
        }
        if (!Utils::isUnset($request->annotationStatusListStringFilter)) {
            $query['AnnotationStatusListStringFilter'] = $request->annotationStatusListStringFilter;
        }
        if (!Utils::isUnset($request->createTimeEndFilter)) {
            $query['CreateTimeEndFilter'] = $request->createTimeEndFilter;
        }
        if (!Utils::isUnset($request->createTimeStartFilter)) {
            $query['CreateTimeStartFilter'] = $request->createTimeStartFilter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnnotationMission',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAnnotationMissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAnnotationMissionRequest $request ListAnnotationMissionRequest
     *
     * @return ListAnnotationMissionResponse ListAnnotationMissionResponse
     */
    public function listAnnotationMission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnnotationMissionWithOptions($request, $runtime);
    }

    /**
     * @param ListAnnotationMissionSessionRequest $request ListAnnotationMissionSessionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnnotationMissionSessionResponse ListAnnotationMissionSessionResponse
     */
    public function listAnnotationMissionSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotationMissionId)) {
            $query['AnnotationMissionId'] = $request->annotationMissionId;
        }
        if (!Utils::isUnset($request->annotationMissionSessionId)) {
            $query['AnnotationMissionSessionId'] = $request->annotationMissionSessionId;
        }
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->includeStatusListJsonString)) {
            $query['IncludeStatusListJsonString'] = $request->includeStatusListJsonString;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnnotationMissionSession',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAnnotationMissionSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAnnotationMissionSessionRequest $request ListAnnotationMissionSessionRequest
     *
     * @return ListAnnotationMissionSessionResponse ListAnnotationMissionSessionResponse
     */
    public function listAnnotationMissionSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnnotationMissionSessionWithOptions($request, $runtime);
    }

    /**
     * @param ListApiPluginsRequest $request ListApiPluginsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApiPluginsResponse ListApiPluginsResponse
     */
    public function listApiPluginsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->uuidsJson)) {
            $query['UuidsJson'] = $request->uuidsJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiPlugins',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApiPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApiPluginsRequest $request ListApiPluginsRequest
     *
     * @return ListApiPluginsResponse ListApiPluginsResponse
     */
    public function listApiPlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiPluginsWithOptions($request, $runtime);
    }

    /**
     * @summary ListBeebotIntent
     *  *
     * @param ListBeebotIntentRequest $request ListBeebotIntentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBeebotIntentResponse ListBeebotIntentResponse
     */
    public function listBeebotIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentName)) {
            $query['IntentName'] = $request->intentName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBeebotIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBeebotIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListBeebotIntent
     *  *
     * @param ListBeebotIntentRequest $request ListBeebotIntentRequest
     *
     * @return ListBeebotIntentResponse ListBeebotIntentResponse
     */
    public function listBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * @summary ListBeebotIntentLgf
     *  *
     * @param ListBeebotIntentLgfRequest $request ListBeebotIntentLgfRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBeebotIntentLgfResponse ListBeebotIntentLgfResponse
     */
    public function listBeebotIntentLgfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->lgfText)) {
            $query['LgfText'] = $request->lgfText;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBeebotIntentLgf',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBeebotIntentLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListBeebotIntentLgf
     *  *
     * @param ListBeebotIntentLgfRequest $request ListBeebotIntentLgfRequest
     *
     * @return ListBeebotIntentLgfResponse ListBeebotIntentLgfResponse
     */
    public function listBeebotIntentLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBeebotIntentLgfWithOptions($request, $runtime);
    }

    /**
     * @summary ListBeebotIntentUserSay
     *  *
     * @param ListBeebotIntentUserSayRequest $request ListBeebotIntentUserSayRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBeebotIntentUserSayResponse ListBeebotIntentUserSayResponse
     */
    public function listBeebotIntentUserSayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBeebotIntentUserSay',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBeebotIntentUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListBeebotIntentUserSay
     *  *
     * @param ListBeebotIntentUserSayRequest $request ListBeebotIntentUserSayRequest
     *
     * @return ListBeebotIntentUserSayResponse ListBeebotIntentUserSayResponse
     */
    public function listBeebotIntentUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBeebotIntentUserSayWithOptions($request, $runtime);
    }

    /**
     * @param ListChatbotInstancesRequest $request ListChatbotInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChatbotInstancesResponse ListChatbotInstancesResponse
     */
    public function listChatbotInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
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
            'action' => 'ListChatbotInstances',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListChatbotInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChatbotInstancesRequest $request ListChatbotInstancesRequest
     *
     * @return ListChatbotInstancesResponse ListChatbotInstancesResponse
     */
    public function listChatbotInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatbotInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListDialogueFlowsRequest $request ListDialogueFlowsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDialogueFlowsResponse ListDialogueFlowsResponse
     */
    public function listDialogueFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDialogueFlows',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDialogueFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDialogueFlowsRequest $request ListDialogueFlowsRequest
     *
     * @return ListDialogueFlowsResponse ListDialogueFlowsResponse
     */
    public function listDialogueFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDialogueFlowsWithOptions($request, $runtime);
    }

    /**
     * @param ListDownloadTasksRequest $request ListDownloadTasksRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDownloadTasksResponse ListDownloadTasksResponse
     */
    public function listDownloadTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDownloadTasks',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDownloadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDownloadTasksRequest $request ListDownloadTasksRequest
     *
     * @return ListDownloadTasksResponse ListDownloadTasksResponse
     */
    public function listDownloadTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDownloadTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListFlashSmsTemplatesRequest $request ListFlashSmsTemplatesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFlashSmsTemplatesResponse ListFlashSmsTemplatesResponse
     */
    public function listFlashSmsTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlashSmsTemplates',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlashSmsTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlashSmsTemplatesRequest $request ListFlashSmsTemplatesRequest
     *
     * @return ListFlashSmsTemplatesResponse ListFlashSmsTemplatesResponse
     */
    public function listFlashSmsTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlashSmsTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListGlobalQuestionsRequest $request ListGlobalQuestionsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGlobalQuestionsResponse ListGlobalQuestionsResponse
     */
    public function listGlobalQuestionsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGlobalQuestions',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGlobalQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGlobalQuestionsRequest $request ListGlobalQuestionsRequest
     *
     * @return ListGlobalQuestionsResponse ListGlobalQuestionsResponse
     */
    public function listGlobalQuestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGlobalQuestionsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2019-12-26',
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
     * @summary 意图列表
     *  *
     * @param ListIntentionsRequest $request ListIntentionsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntentionsResponse ListIntentionsResponse
     */
    public function listIntentionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotationMissionDataSourceType)) {
            $query['AnnotationMissionDataSourceType'] = $request->annotationMissionDataSourceType;
        }
        if (!Utils::isUnset($request->botId)) {
            $query['BotId'] = $request->botId;
        }
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->userNick)) {
            $query['UserNick'] = $request->userNick;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntentions',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntentionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图列表
     *  *
     * @param ListIntentionsRequest $request ListIntentionsRequest
     *
     * @return ListIntentionsResponse ListIntentionsResponse
     */
    public function listIntentions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntentionsWithOptions($request, $runtime);
    }

    /**
     * @param ListIntentsRequest $request ListIntentsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntentsResponse ListIntentsResponse
     */
    public function listIntentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntents',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIntentsRequest $request ListIntentsRequest
     *
     * @return ListIntentsResponse ListIntentsResponse
     */
    public function listIntents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntentsWithOptions($request, $runtime);
    }

    /**
     * @param ListJobGroupsRequest $request ListJobGroupsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobGroupsResponse ListJobGroupsResponse
     */
    public function listJobGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asyncQuery)) {
            $query['AsyncQuery'] = $request->asyncQuery;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupStatusFilter)) {
            $query['JobGroupStatusFilter'] = $request->jobGroupStatusFilter;
        }
        if (!Utils::isUnset($request->onlyMinConcurrencyEnabled)) {
            $query['OnlyMinConcurrencyEnabled'] = $request->onlyMinConcurrencyEnabled;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchText)) {
            $query['SearchText'] = $request->searchText;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobGroups',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobGroupsRequest $request ListJobGroupsRequest
     *
     * @return ListJobGroupsResponse ListJobGroupsResponse
     */
    public function listJobGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListJobGroupsAsyncRequest $request ListJobGroupsAsyncRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobGroupsAsyncResponse ListJobGroupsAsyncResponse
     */
    public function listJobGroupsAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobGroupsAsync',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobGroupsAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobGroupsAsyncRequest $request ListJobGroupsAsyncRequest
     *
     * @return ListJobGroupsAsyncResponse ListJobGroupsAsyncResponse
     */
    public function listJobGroupsAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobGroupsAsyncWithOptions($request, $runtime);
    }

    /**
     * @summary ListJobs
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
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
            'action' => 'ListJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListJobs
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListJobsByGroupRequest $request ListJobsByGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsByGroupResponse ListJobsByGroupResponse
     */
    public function listJobsByGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobFailureReason)) {
            $query['JobFailureReason'] = $request->jobFailureReason;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobStatus)) {
            $query['JobStatus'] = $request->jobStatus;
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
            'action' => 'ListJobsByGroup',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobsByGroupRequest $request ListJobsByGroupRequest
     *
     * @return ListJobsByGroupResponse ListJobsByGroupResponse
     */
    public function listJobsByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsByGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListOutboundCallNumbersRequest $request ListOutboundCallNumbersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOutboundCallNumbersResponse ListOutboundCallNumbersResponse
     */
    public function listOutboundCallNumbersWithOptions($request, $runtime)
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
            'action' => 'ListOutboundCallNumbers',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOutboundCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOutboundCallNumbersRequest $request ListOutboundCallNumbersRequest
     *
     * @return ListOutboundCallNumbersResponse ListOutboundCallNumbersResponse
     */
    public function listOutboundCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundCallNumbersWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceTagsRequest $request ListResourceTagsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceTagsResponse ListResourceTagsResponse
     */
    public function listResourceTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceTags',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceTagsRequest $request ListResourceTagsRequest
     *
     * @return ListResourceTagsResponse ListResourceTagsResponse
     */
    public function listResourceTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListSchedulerInstancesRequest $request ListSchedulerInstancesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSchedulerInstancesResponse ListSchedulerInstancesResponse
     */
    public function listSchedulerInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSchedulerInstances',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSchedulerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSchedulerInstancesRequest $request ListSchedulerInstancesRequest
     *
     * @return ListSchedulerInstancesResponse ListSchedulerInstancesResponse
     */
    public function listSchedulerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchedulerInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListScriptPublishHistoriesRequest $request ListScriptPublishHistoriesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScriptPublishHistoriesResponse ListScriptPublishHistoriesResponse
     */
    public function listScriptPublishHistoriesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScriptPublishHistories',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScriptPublishHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScriptPublishHistoriesRequest $request ListScriptPublishHistoriesRequest
     *
     * @return ListScriptPublishHistoriesResponse ListScriptPublishHistoriesResponse
     */
    public function listScriptPublishHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptPublishHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListScriptRecordingRequest $request ListScriptRecordingRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScriptRecordingResponse ListScriptRecordingResponse
     */
    public function listScriptRecordingWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->refIdsJson)) {
            $query['RefIdsJson'] = $request->refIdsJson;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->search)) {
            $query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->statesJson)) {
            $query['StatesJson'] = $request->statesJson;
        }
        if (!Utils::isUnset($request->uuidsJson)) {
            $query['UuidsJson'] = $request->uuidsJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScriptRecording',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScriptRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScriptRecordingRequest $request ListScriptRecordingRequest
     *
     * @return ListScriptRecordingResponse ListScriptRecordingResponse
     */
    public function listScriptRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptRecordingWithOptions($request, $runtime);
    }

    /**
     * @param ListScriptVoiceConfigsRequest $request ListScriptVoiceConfigsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScriptVoiceConfigsResponse ListScriptVoiceConfigsResponse
     */
    public function listScriptVoiceConfigsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScriptVoiceConfigs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScriptVoiceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScriptVoiceConfigsRequest $request ListScriptVoiceConfigsRequest
     *
     * @return ListScriptVoiceConfigsResponse ListScriptVoiceConfigsResponse
     */
    public function listScriptVoiceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptVoiceConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary -
     *  *
     * @param ListScriptsRequest $request ListScriptsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScriptsResponse ListScriptsResponse
     */
    public function listScriptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nluEngine)) {
            $query['NluEngine'] = $request->nluEngine;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scriptName)) {
            $query['ScriptName'] = $request->scriptName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScripts',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary -
     *  *
     * @param ListScriptsRequest $request ListScriptsRequest
     *
     * @return ListScriptsResponse ListScriptsResponse
     */
    public function listScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListTagsRequest $request ListTagsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagsResponse ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTags',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagsRequest $request ListTagsRequest
     *
     * @return ListTagsResponse ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAgentProfileRequest $tmpReq  ModifyAgentProfileRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAgentProfileResponse ModifyAgentProfileResponse
     */
    public function modifyAgentProfileWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAgentProfileShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->faqCategoryIds)) {
            $request->faqCategoryIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->faqCategoryIds, 'FaqCategoryIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->agentProfileId)) {
            $body['AgentProfileId'] = $request->agentProfileId;
        }
        if (!Utils::isUnset($request->apiPluginJson)) {
            $body['ApiPluginJson'] = $request->apiPluginJson;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->faqCategoryIdsShrink)) {
            $body['FaqCategoryIds'] = $request->faqCategoryIdsShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instructionJson)) {
            $body['InstructionJson'] = $request->instructionJson;
        }
        if (!Utils::isUnset($request->labelsJson)) {
            $body['LabelsJson'] = $request->labelsJson;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->modelConfig)) {
            $body['ModelConfig'] = $request->modelConfig;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->promptJson)) {
            $body['PromptJson'] = $request->promptJson;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['Scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->variablesJson)) {
            $body['VariablesJson'] = $request->variablesJson;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAgentProfile',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAgentProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAgentProfileRequest $request ModifyAgentProfileRequest
     *
     * @return ModifyAgentProfileResponse ModifyAgentProfileResponse
     */
    public function modifyAgentProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAgentProfileWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAnnotationMissionRequest $request ModifyAnnotationMissionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAnnotationMissionResponse ModifyAnnotationMissionResponse
     */
    public function modifyAnnotationMissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotationMissionId)) {
            $query['AnnotationMissionId'] = $request->annotationMissionId;
        }
        if (!Utils::isUnset($request->annotationMissionName)) {
            $query['AnnotationMissionName'] = $request->annotationMissionName;
        }
        if (!Utils::isUnset($request->annotationStatus)) {
            $query['AnnotationStatus'] = $request->annotationStatus;
        }
        if (!Utils::isUnset($request->delete)) {
            $query['Delete'] = $request->delete;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAnnotationMission',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAnnotationMissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAnnotationMissionRequest $request ModifyAnnotationMissionRequest
     *
     * @return ModifyAnnotationMissionResponse ModifyAnnotationMissionResponse
     */
    public function modifyAnnotationMission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAnnotationMissionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBatchJobsRequest $request ModifyBatchJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBatchJobsResponse ModifyBatchJobsResponse
     */
    public function modifyBatchJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchJobName)) {
            $query['BatchJobName'] = $request->batchJobName;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobFilePath)) {
            $query['JobFilePath'] = $request->jobFilePath;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->strategyJson)) {
            $query['StrategyJson'] = $request->strategyJson;
        }
        if (!Utils::isUnset($request->submitted)) {
            $query['Submitted'] = $request->submitted;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBatchJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBatchJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBatchJobsRequest $request ModifyBatchJobsRequest
     *
     * @return ModifyBatchJobsResponse ModifyBatchJobsResponse
     */
    public function modifyBatchJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBatchJobsWithOptions($request, $runtime);
    }

    /**
     * @summary ModifyBeebotIntent
     *  *
     * @param ModifyBeebotIntentRequest $tmpReq  ModifyBeebotIntentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBeebotIntentResponse ModifyBeebotIntentResponse
     */
    public function modifyBeebotIntentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyBeebotIntentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->intentDefinition)) {
            $request->intentDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->intentDefinition, 'IntentDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentDefinitionShrink)) {
            $query['IntentDefinition'] = $request->intentDefinitionShrink;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBeebotIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBeebotIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ModifyBeebotIntent
     *  *
     * @param ModifyBeebotIntentRequest $request ModifyBeebotIntentRequest
     *
     * @return ModifyBeebotIntentResponse ModifyBeebotIntentResponse
     */
    public function modifyBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * @summary ModifyBeebotIntentLgf
     *  *
     * @param ModifyBeebotIntentLgfRequest $tmpReq  ModifyBeebotIntentLgfRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBeebotIntentLgfResponse ModifyBeebotIntentLgfResponse
     */
    public function modifyBeebotIntentLgfWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyBeebotIntentLgfShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->lgfDefinition)) {
            $request->lgfDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lgfDefinition, 'LgfDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lgfDefinitionShrink)) {
            $query['LgfDefinition'] = $request->lgfDefinitionShrink;
        }
        if (!Utils::isUnset($request->lgfId)) {
            $query['LgfId'] = $request->lgfId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBeebotIntentLgf',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBeebotIntentLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ModifyBeebotIntentLgf
     *  *
     * @param ModifyBeebotIntentLgfRequest $request ModifyBeebotIntentLgfRequest
     *
     * @return ModifyBeebotIntentLgfResponse ModifyBeebotIntentLgfResponse
     */
    public function modifyBeebotIntentLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBeebotIntentLgfWithOptions($request, $runtime);
    }

    /**
     * @summary ModifyBeebotIntentUserSay
     *  *
     * @param ModifyBeebotIntentUserSayRequest $tmpReq  ModifyBeebotIntentUserSayRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBeebotIntentUserSayResponse ModifyBeebotIntentUserSayResponse
     */
    public function modifyBeebotIntentUserSayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyBeebotIntentUserSayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userSayDefinition)) {
            $request->userSayDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userSayDefinition, 'UserSayDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->userSayDefinitionShrink)) {
            $query['UserSayDefinition'] = $request->userSayDefinitionShrink;
        }
        if (!Utils::isUnset($request->userSayId)) {
            $query['UserSayId'] = $request->userSayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBeebotIntentUserSay',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBeebotIntentUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ModifyBeebotIntentUserSay
     *  *
     * @param ModifyBeebotIntentUserSayRequest $request ModifyBeebotIntentUserSayRequest
     *
     * @return ModifyBeebotIntentUserSayResponse ModifyBeebotIntentUserSayResponse
     */
    public function modifyBeebotIntentUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBeebotIntentUserSayWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDialogueFlowRequest $request ModifyDialogueFlowRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDialogueFlowResponse ModifyDialogueFlowResponse
     */
    public function modifyDialogueFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dialogueFlowDefinition)) {
            $query['DialogueFlowDefinition'] = $request->dialogueFlowDefinition;
        }
        if (!Utils::isUnset($request->dialogueFlowId)) {
            $query['DialogueFlowId'] = $request->dialogueFlowId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isDrafted)) {
            $query['IsDrafted'] = $request->isDrafted;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDialogueFlow',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDialogueFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDialogueFlowRequest $request ModifyDialogueFlowRequest
     *
     * @return ModifyDialogueFlowResponse ModifyDialogueFlowResponse
     */
    public function modifyDialogueFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDialogueFlowWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEmptyNumberNoMoreCallsInfoRequest $request ModifyEmptyNumberNoMoreCallsInfoRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEmptyNumberNoMoreCallsInfoResponse ModifyEmptyNumberNoMoreCallsInfoResponse
     */
    public function modifyEmptyNumberNoMoreCallsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->emptyNumberNoMoreCalls)) {
            $query['EmptyNumberNoMoreCalls'] = $request->emptyNumberNoMoreCalls;
        }
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEmptyNumberNoMoreCallsInfo',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEmptyNumberNoMoreCallsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyEmptyNumberNoMoreCallsInfoRequest $request ModifyEmptyNumberNoMoreCallsInfoRequest
     *
     * @return ModifyEmptyNumberNoMoreCallsInfoResponse ModifyEmptyNumberNoMoreCallsInfoResponse
     */
    public function modifyEmptyNumberNoMoreCallsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEmptyNumberNoMoreCallsInfoWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalQuestionRequest $request ModifyGlobalQuestionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGlobalQuestionResponse ModifyGlobalQuestionResponse
     */
    public function modifyGlobalQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->answers)) {
            $query['Answers'] = $request->answers;
        }
        if (!Utils::isUnset($request->globalQuestionId)) {
            $query['GlobalQuestionId'] = $request->globalQuestionId;
        }
        if (!Utils::isUnset($request->globalQuestionName)) {
            $query['GlobalQuestionName'] = $request->globalQuestionName;
        }
        if (!Utils::isUnset($request->globalQuestionType)) {
            $query['GlobalQuestionType'] = $request->globalQuestionType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->questions)) {
            $query['Questions'] = $request->questions;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGlobalQuestion',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGlobalQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGlobalQuestionRequest $request ModifyGlobalQuestionRequest
     *
     * @return ModifyGlobalQuestionResponse ModifyGlobalQuestionResponse
     */
    public function modifyGlobalQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalQuestionWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->instanceDescription)) {
            $query['InstanceDescription'] = $request->instanceDescription;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->maxConcurrentConversation)) {
            $query['MaxConcurrentConversation'] = $request->maxConcurrentConversation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstance',
            'version' => '2019-12-26',
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
     * @param ModifyIntentRequest $request ModifyIntentRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyIntentResponse ModifyIntentResponse
     */
    public function modifyIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentDescription)) {
            $query['IntentDescription'] = $request->intentDescription;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->intentName)) {
            $query['IntentName'] = $request->intentName;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->utterances)) {
            $query['Utterances'] = $request->utterances;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyIntent',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIntentRequest $request ModifyIntentRequest
     *
     * @return ModifyIntentResponse ModifyIntentResponse
     */
    public function modifyIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIntentWithOptions($request, $runtime);
    }

    /**
     * @param ModifyJobGroupRequest $request ModifyJobGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyJobGroupResponse ModifyJobGroupResponse
     */
    public function modifyJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flashSmsExtras)) {
            $query['FlashSmsExtras'] = $request->flashSmsExtras;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobGroupStatus)) {
            $query['JobGroupStatus'] = $request->jobGroupStatus;
        }
        if (!Utils::isUnset($request->minConcurrency)) {
            $query['MinConcurrency'] = $request->minConcurrency;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->recallCallingNumber)) {
            $query['RecallCallingNumber'] = $request->recallCallingNumber;
        }
        if (!Utils::isUnset($request->recallStrategyJson)) {
            $query['RecallStrategyJson'] = $request->recallStrategyJson;
        }
        if (!Utils::isUnset($request->ringingDuration)) {
            $query['RingingDuration'] = $request->ringingDuration;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->strategyJson)) {
            $query['StrategyJson'] = $request->strategyJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyJobGroup',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyJobGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyJobGroupRequest $request ModifyJobGroupRequest
     *
     * @return ModifyJobGroupResponse ModifyJobGroupResponse
     */
    public function modifyJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyJobGroupWithOptions($request, $runtime);
    }

    /**
     * @summary ModifyOutboundCallNumber
     *  *
     * @param ModifyOutboundCallNumberRequest $request ModifyOutboundCallNumberRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyOutboundCallNumberResponse ModifyOutboundCallNumberResponse
     */
    public function modifyOutboundCallNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->outboundCallNumberId)) {
            $query['OutboundCallNumberId'] = $request->outboundCallNumberId;
        }
        if (!Utils::isUnset($request->rateLimitCount)) {
            $query['RateLimitCount'] = $request->rateLimitCount;
        }
        if (!Utils::isUnset($request->rateLimitPeriod)) {
            $query['RateLimitPeriod'] = $request->rateLimitPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyOutboundCallNumber',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyOutboundCallNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ModifyOutboundCallNumber
     *  *
     * @param ModifyOutboundCallNumberRequest $request ModifyOutboundCallNumberRequest
     *
     * @return ModifyOutboundCallNumberResponse ModifyOutboundCallNumberResponse
     */
    public function modifyOutboundCallNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOutboundCallNumberWithOptions($request, $runtime);
    }

    /**
     * @summary 修改场景
     *  *
     * @param ModifyScriptRequest $request ModifyScriptRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyScriptResponse ModifyScriptResponse
     */
    public function modifyScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->agentLlm)) {
            $query['AgentLlm'] = $request->agentLlm;
        }
        if (!Utils::isUnset($request->asrConfig)) {
            $query['AsrConfig'] = $request->asrConfig;
        }
        if (!Utils::isUnset($request->chatConfig)) {
            $query['ChatConfig'] = $request->chatConfig;
        }
        if (!Utils::isUnset($request->chatbotId)) {
            $query['ChatbotId'] = $request->chatbotId;
        }
        if (!Utils::isUnset($request->emotionEnable)) {
            $query['EmotionEnable'] = $request->emotionEnable;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['Industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->labelConfig)) {
            $query['LabelConfig'] = $request->labelConfig;
        }
        if (!Utils::isUnset($request->longWaitEnable)) {
            $query['LongWaitEnable'] = $request->longWaitEnable;
        }
        if (!Utils::isUnset($request->miniPlaybackConfigListJsonString)) {
            $query['MiniPlaybackConfigListJsonString'] = $request->miniPlaybackConfigListJsonString;
        }
        if (!Utils::isUnset($request->miniPlaybackEnable)) {
            $query['MiniPlaybackEnable'] = $request->miniPlaybackEnable;
        }
        if (!Utils::isUnset($request->newBargeInEnable)) {
            $query['NewBargeInEnable'] = $request->newBargeInEnable;
        }
        if (!Utils::isUnset($request->nlsConfig)) {
            $query['NlsConfig'] = $request->nlsConfig;
        }
        if (!Utils::isUnset($request->nluAccessType)) {
            $query['NluAccessType'] = $request->nluAccessType;
        }
        if (!Utils::isUnset($request->nluEngine)) {
            $query['NluEngine'] = $request->nluEngine;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->scriptContent)) {
            $query['ScriptContent'] = $request->scriptContent;
        }
        if (!Utils::isUnset($request->scriptDescription)) {
            $query['ScriptDescription'] = $request->scriptDescription;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->scriptName)) {
            $query['ScriptName'] = $request->scriptName;
        }
        if (!Utils::isUnset($request->scriptWaveform)) {
            $query['ScriptWaveform'] = $request->scriptWaveform;
        }
        if (!Utils::isUnset($request->ttsConfig)) {
            $query['TtsConfig'] = $request->ttsConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改场景
     *  *
     * @param ModifyScriptRequest $request ModifyScriptRequest
     *
     * @return ModifyScriptResponse ModifyScriptResponse
     */
    public function modifyScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScriptWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScriptVoiceConfigRequest $request ModifyScriptVoiceConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyScriptVoiceConfigResponse ModifyScriptVoiceConfigResponse
     */
    public function modifyScriptVoiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->scriptVoiceConfigId)) {
            $query['ScriptVoiceConfigId'] = $request->scriptVoiceConfigId;
        }
        if (!Utils::isUnset($request->scriptWaveformRelation)) {
            $query['ScriptWaveformRelation'] = $request->scriptWaveformRelation;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScriptVoiceConfig',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScriptVoiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyScriptVoiceConfigRequest $request ModifyScriptVoiceConfigRequest
     *
     * @return ModifyScriptVoiceConfigResponse ModifyScriptVoiceConfigResponse
     */
    public function modifyScriptVoiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScriptVoiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTTSConfigRequest $request ModifyTTSConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTTSConfigResponse ModifyTTSConfigResponse
     */
    public function modifyTTSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nlsServiceType)) {
            $query['NlsServiceType'] = $request->nlsServiceType;
        }
        if (!Utils::isUnset($request->pitchRate)) {
            $query['PitchRate'] = $request->pitchRate;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->speechRate)) {
            $query['SpeechRate'] = $request->speechRate;
        }
        if (!Utils::isUnset($request->voice)) {
            $query['Voice'] = $request->voice;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTTSConfig',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTTSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTTSConfigRequest $request ModifyTTSConfigRequest
     *
     * @return ModifyTTSConfigResponse ModifyTTSConfigResponse
     */
    public function modifyTTSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTTSConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTagGroupsRequest $request ModifyTagGroupsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTagGroupsResponse ModifyTagGroupsResponse
     */
    public function modifyTagGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->tagGroups)) {
            $query['TagGroups'] = $request->tagGroups;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTagGroups',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTagGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTagGroupsRequest $request ModifyTagGroupsRequest
     *
     * @return ModifyTagGroupsResponse ModifyTagGroupsResponse
     */
    public function modifyTagGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagGroupsWithOptions($request, $runtime);
    }

    /**
     * @param PublishScriptRequest $request PublishScriptRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishScriptResponse PublishScriptResponse
     */
    public function publishScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishScriptRequest $request PublishScriptRequest
     *
     * @return PublishScriptResponse PublishScriptResponse
     */
    public function publishScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishScriptWithOptions($request, $runtime);
    }

    /**
     * @param PublishScriptForDebugRequest $request PublishScriptForDebugRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishScriptForDebugResponse PublishScriptForDebugResponse
     */
    public function publishScriptForDebugWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishScriptForDebug',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishScriptForDebugResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishScriptForDebugRequest $request PublishScriptForDebugRequest
     *
     * @return PublishScriptForDebugResponse PublishScriptForDebugResponse
     */
    public function publishScriptForDebug($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishScriptForDebugWithOptions($request, $runtime);
    }

    /**
     * @summary QueryJobs
     *  *
     * @param QueryJobsRequest $request QueryJobsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryJobsResponse QueryJobsResponse
     */
    public function queryJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
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
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeAlignment)) {
            $query['TimeAlignment'] = $request->timeAlignment;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary QueryJobs
     *  *
     * @param QueryJobsRequest $request QueryJobsRequest
     *
     * @return QueryJobsResponse QueryJobsResponse
     */
    public function queryJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取外呼任务结果信息
     *  *
     * @param QueryJobsWithResultRequest $request QueryJobsWithResultRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryJobsWithResultResponse QueryJobsWithResultResponse
     */
    public function queryJobsWithResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endActualTimeFilter)) {
            $query['EndActualTimeFilter'] = $request->endActualTimeFilter;
        }
        if (!Utils::isUnset($request->hasAnsweredFilter)) {
            $query['HasAnsweredFilter'] = $request->hasAnsweredFilter;
        }
        if (!Utils::isUnset($request->hasHangUpByRejectionFilter)) {
            $query['HasHangUpByRejectionFilter'] = $request->hasHangUpByRejectionFilter;
        }
        if (!Utils::isUnset($request->hasReachedEndOfFlowFilter)) {
            $query['HasReachedEndOfFlowFilter'] = $request->hasReachedEndOfFlowFilter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobFailureReasonsFilter)) {
            $query['JobFailureReasonsFilter'] = $request->jobFailureReasonsFilter;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobStatusFilter)) {
            $query['JobStatusFilter'] = $request->jobStatusFilter;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryText)) {
            $query['QueryText'] = $request->queryText;
        }
        if (!Utils::isUnset($request->startActualTimeFilter)) {
            $query['StartActualTimeFilter'] = $request->startActualTimeFilter;
        }
        if (!Utils::isUnset($request->taskStatusFilter)) {
            $query['TaskStatusFilter'] = $request->taskStatusFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryJobsWithResult',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryJobsWithResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取外呼任务结果信息
     *  *
     * @param QueryJobsWithResultRequest $request QueryJobsWithResultRequest
     *
     * @return QueryJobsWithResultResponse QueryJobsWithResultResponse
     */
    public function queryJobsWithResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobsWithResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryScriptWaveformsRequest $request QueryScriptWaveformsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryScriptWaveformsResponse QueryScriptWaveformsResponse
     */
    public function queryScriptWaveformsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptContent)) {
            $query['ScriptContent'] = $request->scriptContent;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryScriptWaveforms',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryScriptWaveformsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryScriptWaveformsRequest $request QueryScriptWaveformsRequest
     *
     * @return QueryScriptWaveformsResponse QueryScriptWaveformsResponse
     */
    public function queryScriptWaveforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryScriptWaveformsWithOptions($request, $runtime);
    }

    /**
     * @param QueryScriptsByStatusRequest $request QueryScriptsByStatusRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryScriptsByStatusResponse QueryScriptsByStatusResponse
     */
    public function queryScriptsByStatusWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryScriptsByStatus',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryScriptsByStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryScriptsByStatusRequest $request QueryScriptsByStatusRequest
     *
     * @return QueryScriptsByStatusResponse QueryScriptsByStatusResponse
     */
    public function queryScriptsByStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryScriptsByStatusWithOptions($request, $runtime);
    }

    /**
     * @param RecordFailureRequest $request RecordFailureRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RecordFailureResponse RecordFailureResponse
     */
    public function recordFailureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actualTime)) {
            $query['ActualTime'] = $request->actualTime;
        }
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->dispositionCode)) {
            $query['DispositionCode'] = $request->dispositionCode;
        }
        if (!Utils::isUnset($request->exceptionCodes)) {
            $query['ExceptionCodes'] = $request->exceptionCodes;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RecordFailure',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecordFailureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecordFailureRequest $request RecordFailureRequest
     *
     * @return RecordFailureResponse RecordFailureResponse
     */
    public function recordFailure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordFailureWithOptions($request, $runtime);
    }

    /**
     * @param ResumeJobsRequest $request ResumeJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeJobsResponse ResumeJobsResponse
     */
    public function resumeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobReferenceId)) {
            $query['JobReferenceId'] = $request->jobReferenceId;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeJobsRequest $request ResumeJobsRequest
     *
     * @return ResumeJobsResponse ResumeJobsResponse
     */
    public function resumeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeJobsWithOptions($request, $runtime);
    }

    /**
     * @param RollbackScriptRequest $request RollbackScriptRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackScriptResponse RollbackScriptResponse
     */
    public function rollbackScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->rollbackVersion)) {
            $query['RollbackVersion'] = $request->rollbackVersion;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackScript',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackScriptRequest $request RollbackScriptRequest
     *
     * @return RollbackScriptResponse RollbackScriptResponse
     */
    public function rollbackScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackScriptWithOptions($request, $runtime);
    }

    /**
     * @param SaveAfterAnswerDelayPlaybackRequest $request SaveAfterAnswerDelayPlaybackRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveAfterAnswerDelayPlaybackResponse SaveAfterAnswerDelayPlaybackResponse
     */
    public function saveAfterAnswerDelayPlaybackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->afterAnswerDelayPlayback)) {
            $query['AfterAnswerDelayPlayback'] = $request->afterAnswerDelayPlayback;
        }
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveAfterAnswerDelayPlayback',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveAfterAnswerDelayPlaybackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveAfterAnswerDelayPlaybackRequest $request SaveAfterAnswerDelayPlaybackRequest
     *
     * @return SaveAfterAnswerDelayPlaybackResponse SaveAfterAnswerDelayPlaybackResponse
     */
    public function saveAfterAnswerDelayPlayback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAfterAnswerDelayPlaybackWithOptions($request, $runtime);
    }

    /**
     * @param SaveAnnotationMissionSessionListRequest $request SaveAnnotationMissionSessionListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveAnnotationMissionSessionListResponse SaveAnnotationMissionSessionListResponse
     */
    public function saveAnnotationMissionSessionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->annotationMissionDataSourceType)) {
            $query['AnnotationMissionDataSourceType'] = $request->annotationMissionDataSourceType;
        }
        if (!Utils::isUnset($request->annotationMissionSessionList)) {
            $query['AnnotationMissionSessionList'] = $request->annotationMissionSessionList;
        }
        if (!Utils::isUnset($request->annotationMissionSessionListJsonString)) {
            $query['AnnotationMissionSessionListJsonString'] = $request->annotationMissionSessionListJsonString;
        }
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->userNick)) {
            $query['UserNick'] = $request->userNick;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveAnnotationMissionSessionList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveAnnotationMissionSessionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveAnnotationMissionSessionListRequest $request SaveAnnotationMissionSessionListRequest
     *
     * @return SaveAnnotationMissionSessionListResponse SaveAnnotationMissionSessionListResponse
     */
    public function saveAnnotationMissionSessionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAnnotationMissionSessionListWithOptions($request, $runtime);
    }

    /**
     * @param SaveAnnotationMissionTagInfoListRequest $request SaveAnnotationMissionTagInfoListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveAnnotationMissionTagInfoListResponse SaveAnnotationMissionTagInfoListResponse
     */
    public function saveAnnotationMissionTagInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotationMissionTagInfoList)) {
            $query['AnnotationMissionTagInfoList'] = $request->annotationMissionTagInfoList;
        }
        if (!Utils::isUnset($request->annotationMissionTagInfoListJsonString)) {
            $query['AnnotationMissionTagInfoListJsonString'] = $request->annotationMissionTagInfoListJsonString;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->reset)) {
            $query['Reset'] = $request->reset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveAnnotationMissionTagInfoList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveAnnotationMissionTagInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveAnnotationMissionTagInfoListRequest $request SaveAnnotationMissionTagInfoListRequest
     *
     * @return SaveAnnotationMissionTagInfoListResponse SaveAnnotationMissionTagInfoListResponse
     */
    public function saveAnnotationMissionTagInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAnnotationMissionTagInfoListWithOptions($request, $runtime);
    }

    /**
     * @param SaveBaseStrategyPeriodRequest $request SaveBaseStrategyPeriodRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveBaseStrategyPeriodResponse SaveBaseStrategyPeriodResponse
     */
    public function saveBaseStrategyPeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->onlyWeekdays)) {
            $query['OnlyWeekdays'] = $request->onlyWeekdays;
        }
        if (!Utils::isUnset($request->onlyWorkdays)) {
            $query['OnlyWorkdays'] = $request->onlyWorkdays;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        if (!Utils::isUnset($request->workingTime)) {
            $query['WorkingTime'] = $request->workingTime;
        }
        if (!Utils::isUnset($request->workingTimeFramesJson)) {
            $query['WorkingTimeFramesJson'] = $request->workingTimeFramesJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveBaseStrategyPeriod',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveBaseStrategyPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveBaseStrategyPeriodRequest $request SaveBaseStrategyPeriodRequest
     *
     * @return SaveBaseStrategyPeriodResponse SaveBaseStrategyPeriodResponse
     */
    public function saveBaseStrategyPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBaseStrategyPeriodWithOptions($request, $runtime);
    }

    /**
     * @param SaveContactBlockListRequest $request SaveContactBlockListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveContactBlockListResponse SaveContactBlockListResponse
     */
    public function saveContactBlockListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactBlockListList)) {
            $query['ContactBlockListList'] = $request->contactBlockListList;
        }
        if (!Utils::isUnset($request->contactBlockListsJson)) {
            $query['ContactBlockListsJson'] = $request->contactBlockListsJson;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveContactBlockList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveContactBlockListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveContactBlockListRequest $request SaveContactBlockListRequest
     *
     * @return SaveContactBlockListResponse SaveContactBlockListResponse
     */
    public function saveContactBlockList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveContactBlockListWithOptions($request, $runtime);
    }

    /**
     * @param SaveContactWhiteListRequest $request SaveContactWhiteListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveContactWhiteListResponse SaveContactWhiteListResponse
     */
    public function saveContactWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactWhiteListList)) {
            $query['ContactWhiteListList'] = $request->contactWhiteListList;
        }
        if (!Utils::isUnset($request->contactWhiteListsJson)) {
            $query['ContactWhiteListsJson'] = $request->contactWhiteListsJson;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveContactWhiteList',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveContactWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveContactWhiteListRequest $request SaveContactWhiteListRequest
     *
     * @return SaveContactWhiteListResponse SaveContactWhiteListResponse
     */
    public function saveContactWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveContactWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param SaveEffectiveDaysRequest $request SaveEffectiveDaysRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveEffectiveDaysResponse SaveEffectiveDaysResponse
     */
    public function saveEffectiveDaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveDays)) {
            $query['EffectiveDays'] = $request->effectiveDays;
        }
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveEffectiveDays',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveEffectiveDaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveEffectiveDaysRequest $request SaveEffectiveDaysRequest
     *
     * @return SaveEffectiveDaysResponse SaveEffectiveDaysResponse
     */
    public function saveEffectiveDays($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveEffectiveDaysWithOptions($request, $runtime);
    }

    /**
     * @param SaveMaxAttemptsPerDayRequest $request SaveMaxAttemptsPerDayRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveMaxAttemptsPerDayResponse SaveMaxAttemptsPerDayResponse
     */
    public function saveMaxAttemptsPerDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        if (!Utils::isUnset($request->maxAttemptsPerDay)) {
            $query['MaxAttemptsPerDay'] = $request->maxAttemptsPerDay;
        }
        if (!Utils::isUnset($request->strategyLevel)) {
            $query['StrategyLevel'] = $request->strategyLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveMaxAttemptsPerDay',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveMaxAttemptsPerDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveMaxAttemptsPerDayRequest $request SaveMaxAttemptsPerDayRequest
     *
     * @return SaveMaxAttemptsPerDayResponse SaveMaxAttemptsPerDayResponse
     */
    public function saveMaxAttemptsPerDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMaxAttemptsPerDayWithOptions($request, $runtime);
    }

    /**
     * @summary 外呼历史查询
     *  *
     * @param SearchTaskRequest $request SearchTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchTaskResponse SearchTaskResponse
     */
    public function searchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchTask',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 外呼历史查询
     *  *
     * @param SearchTaskRequest $request SearchTaskRequest
     *
     * @return SearchTaskResponse SearchTaskResponse
     */
    public function searchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTaskWithOptions($request, $runtime);
    }

    /**
     * @param StartJobRequest $request StartJobRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return StartJobResponse StartJobResponse
     */
    public function startJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobJson)) {
            $query['JobJson'] = $request->jobJson;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'StartJob',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartJobRequest $request StartJobRequest
     *
     * @return StartJobResponse StartJobResponse
     */
    public function startJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitBatchJobsRequest $request SubmitBatchJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitBatchJobsResponse SubmitBatchJobsResponse
     */
    public function submitBatchJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitBatchJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitBatchJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitBatchJobsRequest $request SubmitBatchJobsRequest
     *
     * @return SubmitBatchJobsResponse SubmitBatchJobsResponse
     */
    public function submitBatchJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitBatchJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitRecordingRequest $request SubmitRecordingRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitRecordingResponse SubmitRecordingResponse
     */
    public function submitRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mergedRecording)) {
            $query['MergedRecording'] = $request->mergedRecording;
        }
        if (!Utils::isUnset($request->resourceRecording)) {
            $query['ResourceRecording'] = $request->resourceRecording;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitRecording',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitRecordingRequest $request SubmitRecordingRequest
     *
     * @return SubmitRecordingResponse SubmitRecordingResponse
     */
    public function submitRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitRecordingWithOptions($request, $runtime);
    }

    /**
     * @param SubmitScriptReviewRequest $request SubmitScriptReviewRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitScriptReviewResponse SubmitScriptReviewResponse
     */
    public function submitScriptReviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitScriptReview',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitScriptReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitScriptReviewRequest $request SubmitScriptReviewRequest
     *
     * @return SubmitScriptReviewResponse SubmitScriptReviewResponse
     */
    public function submitScriptReview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitScriptReviewWithOptions($request, $runtime);
    }

    /**
     * @param SuspendCallRequest $request SuspendCallRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendCallResponse SuspendCallResponse
     */
    public function suspendCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumbers)) {
            $query['CalledNumbers'] = $request->calledNumbers;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendCall',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendCallRequest $request SuspendCallRequest
     *
     * @return SuspendCallResponse SuspendCallResponse
     */
    public function suspendCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendCallWithOptions($request, $runtime);
    }

    /**
     * @param SuspendCallWithFileRequest $request SuspendCallWithFileRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendCallWithFileResponse SuspendCallWithFileResponse
     */
    public function suspendCallWithFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendCallWithFile',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendCallWithFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendCallWithFileRequest $request SuspendCallWithFileRequest
     *
     * @return SuspendCallWithFileResponse SuspendCallWithFileResponse
     */
    public function suspendCallWithFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendCallWithFileWithOptions($request, $runtime);
    }

    /**
     * @param SuspendJobsRequest $request SuspendJobsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendJobsResponse SuspendJobsResponse
     */
    public function suspendJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobGroupId)) {
            $query['JobGroupId'] = $request->jobGroupId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobReferenceId)) {
            $query['JobReferenceId'] = $request->jobReferenceId;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendJobs',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendJobsRequest $request SuspendJobsRequest
     *
     * @return SuspendJobsResponse SuspendJobsResponse
     */
    public function suspendJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendJobsWithOptions($request, $runtime);
    }

    /**
     * @description **
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description **
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary TaskPreparing
     *  *
     * @param TaskPreparingRequest $request TaskPreparingRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return TaskPreparingResponse TaskPreparingResponse
     */
    public function taskPreparingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'TaskPreparing',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskPreparingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary TaskPreparing
     *  *
     * @param TaskPreparingRequest $request TaskPreparingRequest
     *
     * @return TaskPreparingResponse TaskPreparingResponse
     */
    public function taskPreparing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskPreparingWithOptions($request, $runtime);
    }

    /**
     * @param TerminateCallRequest $request TerminateCallRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return TerminateCallResponse TerminateCallResponse
     */
    public function terminateCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'TerminateCall',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TerminateCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TerminateCallRequest $request TerminateCallRequest
     *
     * @return TerminateCallResponse TerminateCallResponse
     */
    public function terminateCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateCallWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UploadScriptRecordingRequest $request UploadScriptRecordingRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadScriptRecordingResponse UploadScriptRecordingResponse
     */
    public function uploadScriptRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadScriptRecording',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadScriptRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadScriptRecordingRequest $request UploadScriptRecordingRequest
     *
     * @return UploadScriptRecordingResponse UploadScriptRecordingResponse
     */
    public function uploadScriptRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadScriptRecordingWithOptions($request, $runtime);
    }

    /**
     * @summary WithdrawScriptReview
     *  *
     * @description ****
     *  *
     * @param WithdrawScriptReviewRequest $request WithdrawScriptReviewRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return WithdrawScriptReviewResponse WithdrawScriptReviewResponse
     */
    public function withdrawScriptReviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'WithdrawScriptReview',
            'version' => '2019-12-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WithdrawScriptReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary WithdrawScriptReview
     *  *
     * @description ****
     *  *
     * @param WithdrawScriptReviewRequest $request WithdrawScriptReviewRequest
     *
     * @return WithdrawScriptReviewResponse WithdrawScriptReviewResponse
     */
    public function withdrawScriptReview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawScriptReviewWithOptions($request, $runtime);
    }
}
