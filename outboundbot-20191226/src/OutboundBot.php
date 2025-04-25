<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ApplyNumberDistrictInfoParsingResultRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ApplyNumberDistrictInfoParsingResultResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 生效号码库解析结果.
     *
     * @param request - ApplyNumberDistrictInfoParsingResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyNumberDistrictInfoParsingResultResponse
     *
     * @param ApplyNumberDistrictInfoParsingResultRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ApplyNumberDistrictInfoParsingResultResponse
     */
    public function applyNumberDistrictInfoParsingResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 生效号码库解析结果.
     *
     * @param request - ApplyNumberDistrictInfoParsingResultRequest
     *
     * @returns ApplyNumberDistrictInfoParsingResultResponse
     *
     * @param ApplyNumberDistrictInfoParsingResultRequest $request
     *
     * @return ApplyNumberDistrictInfoParsingResultResponse
     */
    public function applyNumberDistrictInfoParsingResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyNumberDistrictInfoParsingResultWithOptions($request, $runtime);
    }

    /**
     * @param request - AssignJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignJobsResponse
     *
     * @param AssignJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AssignJobsResponse
     */
    public function assignJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isAsynchrony) {
            @$query['IsAsynchrony'] = $request->isAsynchrony;
        }

        if (null !== $request->jobDataParsingTaskId) {
            @$query['JobDataParsingTaskId'] = $request->jobDataParsingTaskId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->jobsJson) {
            @$query['JobsJson'] = $request->jobsJson;
        }

        if (null !== $request->rosterType) {
            @$query['RosterType'] = $request->rosterType;
        }

        if (null !== $request->strategyJson) {
            @$query['StrategyJson'] = $request->strategyJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - AssignJobsRequest
     *
     * @returns AssignJobsResponse
     *
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
     * @param request - CancelJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelJobsResponse
     *
     * @param CancelJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelJobsResponse
     */
    public function cancelJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobReferenceId) {
            @$query['JobReferenceId'] = $request->jobReferenceId;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CancelJobsRequest
     *
     * @returns CancelJobsResponse
     *
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
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateAgentProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentProfileResponse
     *
     * @param CreateAgentProfileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAgentProfileResponse
     */
    public function createAgentProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentProfileTemplateId) {
            @$body['AgentProfileTemplateId'] = $request->agentProfileTemplateId;
        }

        if (null !== $request->appIp) {
            @$body['AppIp'] = $request->appIp;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->faqCategoryIds) {
            @$body['FaqCategoryIds'] = $request->faqCategoryIds;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instructionJson) {
            @$body['InstructionJson'] = $request->instructionJson;
        }

        if (null !== $request->labelsJson) {
            @$body['LabelsJson'] = $request->labelsJson;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->modelConfig) {
            @$body['ModelConfig'] = $request->modelConfig;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->promptJson) {
            @$body['PromptJson'] = $request->promptJson;
        }

        if (null !== $request->scenario) {
            @$body['Scenario'] = $request->scenario;
        }

        if (null !== $request->scriptId) {
            @$body['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->variablesJson) {
            @$body['VariablesJson'] = $request->variablesJson;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * @param request - CreateAgentProfileRequest
     *
     * @returns CreateAgentProfileResponse
     *
     * @param CreateAgentProfileRequest $request
     *
     * @return CreateAgentProfileResponse
     */
    public function createAgentProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentProfileWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - CreateAnnotationMissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnnotationMissionResponse
     *
     * @param CreateAnnotationMissionRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAnnotationMissionResponse
     */
    public function createAnnotationMissionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAnnotationMissionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->annotationMissionDebugDataSourceList) {
            $request->annotationMissionDebugDataSourceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->annotationMissionDebugDataSourceList, 'AnnotationMissionDebugDataSourceList', 'json');
        }

        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->annotationMissionDataSourceType) {
            @$query['AnnotationMissionDataSourceType'] = $request->annotationMissionDataSourceType;
        }

        if (null !== $request->annotationMissionDebugDataSourceListShrink) {
            @$query['AnnotationMissionDebugDataSourceList'] = $request->annotationMissionDebugDataSourceListShrink;
        }

        if (null !== $request->annotationMissionDebugDataSourceListJsonString) {
            @$query['AnnotationMissionDebugDataSourceListJsonString'] = $request->annotationMissionDebugDataSourceListJsonString;
        }

        if (null !== $request->annotationMissionName) {
            @$query['AnnotationMissionName'] = $request->annotationMissionName;
        }

        if (null !== $request->chatbotId) {
            @$query['ChatbotId'] = $request->chatbotId;
        }

        if (null !== $request->conversationTimeEndFilter) {
            @$query['ConversationTimeEndFilter'] = $request->conversationTimeEndFilter;
        }

        if (null !== $request->conversationTimeStartFilter) {
            @$query['ConversationTimeStartFilter'] = $request->conversationTimeStartFilter;
        }

        if (null !== $request->excludeOtherSession) {
            @$query['ExcludeOtherSession'] = $request->excludeOtherSession;
        }

        if (null !== $request->finished) {
            @$query['Finished'] = $request->finished;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->samplingCount) {
            @$query['SamplingCount'] = $request->samplingCount;
        }

        if (null !== $request->samplingRate) {
            @$query['SamplingRate'] = $request->samplingRate;
        }

        if (null !== $request->samplingType) {
            @$query['SamplingType'] = $request->samplingType;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sessionEndReasonFilterList) {
            @$query['SessionEndReasonFilterList'] = $request->sessionEndReasonFilterList;
        }

        if (null !== $request->sessionEndReasonFilterListJsonString) {
            @$query['SessionEndReasonFilterListJsonString'] = $request->sessionEndReasonFilterListJsonString;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateAnnotationMissionRequest
     *
     * @returns CreateAnnotationMissionResponse
     *
     * @param CreateAnnotationMissionRequest $request
     *
     * @return CreateAnnotationMissionResponse
     */
    public function createAnnotationMission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAnnotationMissionWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateBatchJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBatchJobsResponse
     *
     * @param CreateBatchJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateBatchJobsResponse
     */
    public function createBatchJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchJobDescription) {
            @$query['BatchJobDescription'] = $request->batchJobDescription;
        }

        if (null !== $request->batchJobName) {
            @$query['BatchJobName'] = $request->batchJobName;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobFilePath) {
            @$query['JobFilePath'] = $request->jobFilePath;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->strategyJson) {
            @$query['StrategyJson'] = $request->strategyJson;
        }

        if (null !== $request->submitted) {
            @$query['Submitted'] = $request->submitted;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateBatchJobsRequest
     *
     * @returns CreateBatchJobsResponse
     *
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
     * CreateBatchRepeatJob.
     *
     * @param request - CreateBatchRepeatJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBatchRepeatJobResponse
     *
     * @param CreateBatchRepeatJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateBatchRepeatJobResponse
     */
    public function createBatchRepeatJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->filterStatus) {
            @$query['FilterStatus'] = $request->filterStatus;
        }

        if (null !== $request->flashSmsExtras) {
            @$query['FlashSmsExtras'] = $request->flashSmsExtras;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->minConcurrency) {
            @$query['MinConcurrency'] = $request->minConcurrency;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->recallCallingNumber) {
            @$query['RecallCallingNumber'] = $request->recallCallingNumber;
        }

        if (null !== $request->recallStrategyJson) {
            @$query['RecallStrategyJson'] = $request->recallStrategyJson;
        }

        if (null !== $request->ringingDuration) {
            @$query['RingingDuration'] = $request->ringingDuration;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sourceGroupId) {
            @$query['SourceGroupId'] = $request->sourceGroupId;
        }

        if (null !== $request->strategyJson) {
            @$query['StrategyJson'] = $request->strategyJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * CreateBatchRepeatJob.
     *
     * @param request - CreateBatchRepeatJobRequest
     *
     * @returns CreateBatchRepeatJobResponse
     *
     * @param CreateBatchRepeatJobRequest $request
     *
     * @return CreateBatchRepeatJobResponse
     */
    public function createBatchRepeatJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchRepeatJobWithOptions($request, $runtime);
    }

    /**
     * CreateBeebotIntent.
     *
     * @param tmpReq - CreateBeebotIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBeebotIntentResponse
     *
     * @param CreateBeebotIntentRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateBeebotIntentResponse
     */
    public function createBeebotIntentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBeebotIntentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->intentDefinition) {
            $request->intentDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->intentDefinition, 'IntentDefinition', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentDefinitionShrink) {
            @$query['IntentDefinition'] = $request->intentDefinitionShrink;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * CreateBeebotIntent.
     *
     * @param request - CreateBeebotIntentRequest
     *
     * @returns CreateBeebotIntentResponse
     *
     * @param CreateBeebotIntentRequest $request
     *
     * @return CreateBeebotIntentResponse
     */
    public function createBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * CreateBeebotIntentLgf.
     *
     * @param tmpReq - CreateBeebotIntentLgfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBeebotIntentLgfResponse
     *
     * @param CreateBeebotIntentLgfRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateBeebotIntentLgfResponse
     */
    public function createBeebotIntentLgfWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBeebotIntentLgfShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->lgfDefinition) {
            $request->lgfDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lgfDefinition, 'LgfDefinition', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lgfDefinitionShrink) {
            @$query['LgfDefinition'] = $request->lgfDefinitionShrink;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * CreateBeebotIntentLgf.
     *
     * @param request - CreateBeebotIntentLgfRequest
     *
     * @returns CreateBeebotIntentLgfResponse
     *
     * @param CreateBeebotIntentLgfRequest $request
     *
     * @return CreateBeebotIntentLgfResponse
     */
    public function createBeebotIntentLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBeebotIntentLgfWithOptions($request, $runtime);
    }

    /**
     * CreateBeebotIntentUserSay.
     *
     * @param tmpReq - CreateBeebotIntentUserSayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBeebotIntentUserSayResponse
     *
     * @param CreateBeebotIntentUserSayRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateBeebotIntentUserSayResponse
     */
    public function createBeebotIntentUserSayWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBeebotIntentUserSayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userSayDefinition) {
            $request->userSayDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userSayDefinition, 'UserSayDefinition', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->userSayDefinitionShrink) {
            @$query['UserSayDefinition'] = $request->userSayDefinitionShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * CreateBeebotIntentUserSay.
     *
     * @param request - CreateBeebotIntentUserSayRequest
     *
     * @returns CreateBeebotIntentUserSayResponse
     *
     * @param CreateBeebotIntentUserSayRequest $request
     *
     * @return CreateBeebotIntentUserSayResponse
     */
    public function createBeebotIntentUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBeebotIntentUserSayWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateDialogueFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDialogueFlowResponse
     *
     * @param CreateDialogueFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDialogueFlowResponse
     */
    public function createDialogueFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dialogueFlowType) {
            @$query['DialogueFlowType'] = $request->dialogueFlowType;
        }

        if (null !== $request->dialogueName) {
            @$query['DialogueName'] = $request->dialogueName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateDialogueFlowRequest
     *
     * @returns CreateDialogueFlowResponse
     *
     * @param CreateDialogueFlowRequest $request
     *
     * @return CreateDialogueFlowResponse
     */
    public function createDialogueFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDialogueFlowWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDownloadUrlResponse
     *
     * @param CreateDownloadUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDownloadUrlResponse
     */
    public function createDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateDownloadUrlRequest
     *
     * @returns CreateDownloadUrlResponse
     *
     * @param CreateDownloadUrlRequest $request
     *
     * @return CreateDownloadUrlResponse
     */
    public function createDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateGlobalQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGlobalQuestionResponse
     *
     * @param CreateGlobalQuestionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateGlobalQuestionResponse
     */
    public function createGlobalQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->answers) {
            @$query['Answers'] = $request->answers;
        }

        if (null !== $request->globalQuestionName) {
            @$query['GlobalQuestionName'] = $request->globalQuestionName;
        }

        if (null !== $request->globalQuestionType) {
            @$query['GlobalQuestionType'] = $request->globalQuestionType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->questions) {
            @$query['Questions'] = $request->questions;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateGlobalQuestionRequest
     *
     * @returns CreateGlobalQuestionResponse
     *
     * @param CreateGlobalQuestionRequest $request
     *
     * @return CreateGlobalQuestionResponse
     */
    public function createGlobalQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalQuestionWithOptions($request, $runtime);
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
        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->instanceDescription) {
            @$query['InstanceDescription'] = $request->instanceDescription;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->maxConcurrentConversation) {
            @$query['MaxConcurrentConversation'] = $request->maxConcurrentConversation;
        }

        if (null !== $request->nluServiceType) {
            @$query['NluServiceType'] = $request->nluServiceType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 创建实例绑定号码
     *
     * @param request - CreateInstanceBindNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceBindNumberResponse
     *
     * @param CreateInstanceBindNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateInstanceBindNumberResponse
     */
    public function createInstanceBindNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceList) {
            @$query['InstanceList'] = $request->instanceList;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 创建实例绑定号码
     *
     * @param request - CreateInstanceBindNumberRequest
     *
     * @returns CreateInstanceBindNumberResponse
     *
     * @param CreateInstanceBindNumberRequest $request
     *
     * @return CreateInstanceBindNumberResponse
     */
    public function createInstanceBindNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceBindNumberWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIntentResponse
     *
     * @param CreateIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateIntentResponse
     */
    public function createIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentDescription) {
            @$query['IntentDescription'] = $request->intentDescription;
        }

        if (null !== $request->intentName) {
            @$query['IntentName'] = $request->intentName;
        }

        if (null !== $request->keywords) {
            @$query['Keywords'] = $request->keywords;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->utterances) {
            @$query['Utterances'] = $request->utterances;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateIntentRequest
     *
     * @returns CreateIntentResponse
     *
     * @param CreateIntentRequest $request
     *
     * @return CreateIntentResponse
     */
    public function createIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntentWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateJobDataParsingTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobDataParsingTaskResponse
     *
     * @param CreateJobDataParsingTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateJobDataParsingTaskResponse
     */
    public function createJobDataParsingTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobFilePath) {
            @$query['JobFilePath'] = $request->jobFilePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateJobDataParsingTaskRequest
     *
     * @returns CreateJobDataParsingTaskResponse
     *
     * @param CreateJobDataParsingTaskRequest $request
     *
     * @return CreateJobDataParsingTaskResponse
     */
    public function createJobDataParsingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobDataParsingTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateJobGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobGroupResponse
     *
     * @param CreateJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateJobGroupResponse
     */
    public function createJobGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->flashSmsExtras) {
            @$query['FlashSmsExtras'] = $request->flashSmsExtras;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupDescription) {
            @$query['JobGroupDescription'] = $request->jobGroupDescription;
        }

        if (null !== $request->jobGroupName) {
            @$query['JobGroupName'] = $request->jobGroupName;
        }

        if (null !== $request->minConcurrency) {
            @$query['MinConcurrency'] = $request->minConcurrency;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->recallCallingNumber) {
            @$query['RecallCallingNumber'] = $request->recallCallingNumber;
        }

        if (null !== $request->recallStrategyJson) {
            @$query['RecallStrategyJson'] = $request->recallStrategyJson;
        }

        if (null !== $request->ringingDuration) {
            @$query['RingingDuration'] = $request->ringingDuration;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->strategyJson) {
            @$query['StrategyJson'] = $request->strategyJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateJobGroupRequest
     *
     * @returns CreateJobGroupResponse
     *
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
     * @param request - CreateJobGroupExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobGroupExportTaskResponse
     *
     * @param CreateJobGroupExportTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateJobGroupExportTaskResponse
     */
    public function createJobGroupExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateJobGroupExportTaskRequest
     *
     * @returns CreateJobGroupExportTaskResponse
     *
     * @param CreateJobGroupExportTaskRequest $request
     *
     * @return CreateJobGroupExportTaskResponse
     */
    public function createJobGroupExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobGroupExportTaskWithOptions($request, $runtime);
    }

    /**
     * 创建号码库下载链接.
     *
     * @param request - CreateNumberDistrictInfoDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNumberDistrictInfoDownloadUrlResponse
     *
     * @param CreateNumberDistrictInfoDownloadUrlRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateNumberDistrictInfoDownloadUrlResponse
     */
    public function createNumberDistrictInfoDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 创建号码库下载链接.
     *
     * @param request - CreateNumberDistrictInfoDownloadUrlRequest
     *
     * @returns CreateNumberDistrictInfoDownloadUrlResponse
     *
     * @param CreateNumberDistrictInfoDownloadUrlRequest $request
     *
     * @return CreateNumberDistrictInfoDownloadUrlResponse
     */
    public function createNumberDistrictInfoDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNumberDistrictInfoDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * 创建号码库解析任务
     *
     * @param request - CreateNumberDistrictInfoParsingTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNumberDistrictInfoParsingTaskResponse
     *
     * @param CreateNumberDistrictInfoParsingTaskRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateNumberDistrictInfoParsingTaskResponse
     */
    public function createNumberDistrictInfoParsingTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->fileSize) {
            @$query['FileSize'] = $request->fileSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 创建号码库解析任务
     *
     * @param request - CreateNumberDistrictInfoParsingTaskRequest
     *
     * @returns CreateNumberDistrictInfoParsingTaskResponse
     *
     * @param CreateNumberDistrictInfoParsingTaskRequest $request
     *
     * @return CreateNumberDistrictInfoParsingTaskResponse
     */
    public function createNumberDistrictInfoParsingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNumberDistrictInfoParsingTaskWithOptions($request, $runtime);
    }

    /**
     * CreateOutboundCallNumber.
     *
     * @param request - CreateOutboundCallNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOutboundCallNumberResponse
     *
     * @param CreateOutboundCallNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOutboundCallNumberResponse
     */
    public function createOutboundCallNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->rateLimitCount) {
            @$query['RateLimitCount'] = $request->rateLimitCount;
        }

        if (null !== $request->rateLimitPeriod) {
            @$query['RateLimitPeriod'] = $request->rateLimitPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * CreateOutboundCallNumber.
     *
     * @param request - CreateOutboundCallNumberRequest
     *
     * @returns CreateOutboundCallNumberResponse
     *
     * @param CreateOutboundCallNumberRequest $request
     *
     * @return CreateOutboundCallNumberResponse
     */
    public function createOutboundCallNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOutboundCallNumberWithOptions($request, $runtime);
    }

    /**
     * 新建场景.
     *
     * @param request - CreateScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScriptResponse
     *
     * @param CreateScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateScriptResponse
     */
    public function createScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->agentLlm) {
            @$query['AgentLlm'] = $request->agentLlm;
        }

        if (null !== $request->asrConfig) {
            @$query['AsrConfig'] = $request->asrConfig;
        }

        if (null !== $request->chatbotId) {
            @$query['ChatbotId'] = $request->chatbotId;
        }

        if (null !== $request->emotionEnable) {
            @$query['EmotionEnable'] = $request->emotionEnable;
        }

        if (null !== $request->industry) {
            @$query['Industry'] = $request->industry;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->longWaitEnable) {
            @$query['LongWaitEnable'] = $request->longWaitEnable;
        }

        if (null !== $request->miniPlaybackEnable) {
            @$query['MiniPlaybackEnable'] = $request->miniPlaybackEnable;
        }

        if (null !== $request->newBargeInEnable) {
            @$query['NewBargeInEnable'] = $request->newBargeInEnable;
        }

        if (null !== $request->nluAccessType) {
            @$query['NluAccessType'] = $request->nluAccessType;
        }

        if (null !== $request->nluEngine) {
            @$query['NluEngine'] = $request->nluEngine;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->scriptContent) {
            @$query['ScriptContent'] = $request->scriptContent;
        }

        if (null !== $request->scriptDescription) {
            @$query['ScriptDescription'] = $request->scriptDescription;
        }

        if (null !== $request->scriptName) {
            @$query['ScriptName'] = $request->scriptName;
        }

        if (null !== $request->scriptNluProfileJsonString) {
            @$query['ScriptNluProfileJsonString'] = $request->scriptNluProfileJsonString;
        }

        if (null !== $request->scriptWaveform) {
            @$query['ScriptWaveform'] = $request->scriptWaveform;
        }

        if (null !== $request->ttsConfig) {
            @$query['TtsConfig'] = $request->ttsConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 新建场景.
     *
     * @param request - CreateScriptRequest
     *
     * @returns CreateScriptResponse
     *
     * @param CreateScriptRequest $request
     *
     * @return CreateScriptResponse
     */
    public function createScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateScriptWaveformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScriptWaveformResponse
     *
     * @param CreateScriptWaveformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateScriptWaveformResponse
     */
    public function createScriptWaveformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptContent) {
            @$query['ScriptContent'] = $request->scriptContent;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateScriptWaveformRequest
     *
     * @returns CreateScriptWaveformResponse
     *
     * @param CreateScriptWaveformRequest $request
     *
     * @return CreateScriptWaveformResponse
     */
    public function createScriptWaveform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScriptWaveformWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->tagGroup) {
            @$query['TagGroup'] = $request->tagGroup;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - CreateTagRequest
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     *
     * @return CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * 外呼历史导出.
     *
     * @param request - CreateTaskExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTaskExportTaskResponse
     *
     * @param CreateTaskExportTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTaskExportTaskResponse
     */
    public function createTaskExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 外呼历史导出.
     *
     * @param request - CreateTaskExportTaskRequest
     *
     * @returns CreateTaskExportTaskResponse
     *
     * @param CreateTaskExportTaskRequest $request
     *
     * @return CreateTaskExportTaskResponse
     */
    public function createTaskExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - DeleteAgentProfilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentProfilesResponse
     *
     * @param DeleteAgentProfilesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAgentProfilesResponse
     */
    public function deleteAgentProfilesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAgentProfilesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentProfileIds) {
            $request->agentProfileIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentProfileIds, 'AgentProfileIds', 'json');
        }

        $body = [];
        if (null !== $request->agentProfileIdsShrink) {
            @$body['AgentProfileIds'] = $request->agentProfileIdsShrink;
        }

        if (null !== $request->appIp) {
            @$body['AppIp'] = $request->appIp;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * @param request - DeleteAgentProfilesRequest
     *
     * @returns DeleteAgentProfilesResponse
     *
     * @param DeleteAgentProfilesRequest $request
     *
     * @return DeleteAgentProfilesResponse
     */
    public function deleteAgentProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentProfilesWithOptions($request, $runtime);
    }

    /**
     * 清空归属地号码库.
     *
     * @param request - DeleteAllNumberDistrictInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAllNumberDistrictInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAllNumberDistrictInfoResponse
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
     * 清空归属地号码库.
     *
     * @returns DeleteAllNumberDistrictInfoResponse
     *
     * @return DeleteAllNumberDistrictInfoResponse
     */
    public function deleteAllNumberDistrictInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllNumberDistrictInfoWithOptions($runtime);
    }

    /**
     * DeleteBeebotIntent.
     *
     * @param request - DeleteBeebotIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBeebotIntentResponse
     *
     * @param DeleteBeebotIntentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteBeebotIntentResponse
     */
    public function deleteBeebotIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * DeleteBeebotIntent.
     *
     * @param request - DeleteBeebotIntentRequest
     *
     * @returns DeleteBeebotIntentResponse
     *
     * @param DeleteBeebotIntentRequest $request
     *
     * @return DeleteBeebotIntentResponse
     */
    public function deleteBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * DeleteBeebotIntentLgf.
     *
     * @param request - DeleteBeebotIntentLgfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBeebotIntentLgfResponse
     *
     * @param DeleteBeebotIntentLgfRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteBeebotIntentLgfResponse
     */
    public function deleteBeebotIntentLgfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->lgfId) {
            @$query['LgfId'] = $request->lgfId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * DeleteBeebotIntentLgf.
     *
     * @param request - DeleteBeebotIntentLgfRequest
     *
     * @returns DeleteBeebotIntentLgfResponse
     *
     * @param DeleteBeebotIntentLgfRequest $request
     *
     * @return DeleteBeebotIntentLgfResponse
     */
    public function deleteBeebotIntentLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBeebotIntentLgfWithOptions($request, $runtime);
    }

    /**
     * DeleteBeebotIntentUserSay.
     *
     * @param request - DeleteBeebotIntentUserSayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBeebotIntentUserSayResponse
     *
     * @param DeleteBeebotIntentUserSayRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteBeebotIntentUserSayResponse
     */
    public function deleteBeebotIntentUserSayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->userSayId) {
            @$query['UserSayId'] = $request->userSayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * DeleteBeebotIntentUserSay.
     *
     * @param request - DeleteBeebotIntentUserSayRequest
     *
     * @returns DeleteBeebotIntentUserSayResponse
     *
     * @param DeleteBeebotIntentUserSayRequest $request
     *
     * @return DeleteBeebotIntentUserSayResponse
     */
    public function deleteBeebotIntentUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBeebotIntentUserSayWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteContactBlockListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactBlockListResponse
     *
     * @param DeleteContactBlockListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteContactBlockListResponse
     */
    public function deleteContactBlockListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactBlockListId) {
            @$query['ContactBlockListId'] = $request->contactBlockListId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->operator) {
            @$query['Operator'] = $request->operator;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteContactBlockListRequest
     *
     * @returns DeleteContactBlockListResponse
     *
     * @param DeleteContactBlockListRequest $request
     *
     * @return DeleteContactBlockListResponse
     */
    public function deleteContactBlockList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactBlockListWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteContactWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactWhiteListResponse
     *
     * @param DeleteContactWhiteListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteContactWhiteListResponse
     */
    public function deleteContactWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactWhiteListId) {
            @$query['ContactWhiteListId'] = $request->contactWhiteListId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->operator) {
            @$query['Operator'] = $request->operator;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteContactWhiteListRequest
     *
     * @returns DeleteContactWhiteListResponse
     *
     * @param DeleteContactWhiteListRequest $request
     *
     * @return DeleteContactWhiteListResponse
     */
    public function deleteContactWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDialogueFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDialogueFlowResponse
     *
     * @param DeleteDialogueFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDialogueFlowResponse
     */
    public function deleteDialogueFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dialogueFlowId) {
            @$query['DialogueFlowId'] = $request->dialogueFlowId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteDialogueFlowRequest
     *
     * @returns DeleteDialogueFlowResponse
     *
     * @param DeleteDialogueFlowRequest $request
     *
     * @return DeleteDialogueFlowResponse
     */
    public function deleteDialogueFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDialogueFlowWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteGlobalQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGlobalQuestionResponse
     *
     * @param DeleteGlobalQuestionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGlobalQuestionResponse
     */
    public function deleteGlobalQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalQuestionId) {
            @$query['GlobalQuestionId'] = $request->globalQuestionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteGlobalQuestionRequest
     *
     * @returns DeleteGlobalQuestionResponse
     *
     * @param DeleteGlobalQuestionRequest $request
     *
     * @return DeleteGlobalQuestionResponse
     */
    public function deleteGlobalQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalQuestionWithOptions($request, $runtime);
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
     * @param request - DeleteIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIntentResponse
     *
     * @param DeleteIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteIntentResponse
     */
    public function deleteIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteIntentRequest
     *
     * @returns DeleteIntentResponse
     *
     * @param DeleteIntentRequest $request
     *
     * @return DeleteIntentResponse
     */
    public function deleteIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIntentWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteJobGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobGroupResponse
     *
     * @param DeleteJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteJobGroupResponse
     */
    public function deleteJobGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteJobGroupRequest
     *
     * @returns DeleteJobGroupResponse
     *
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
     * @param request - DeleteOutboundCallNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOutboundCallNumberResponse
     *
     * @param DeleteOutboundCallNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteOutboundCallNumberResponse
     */
    public function deleteOutboundCallNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundCallNumberId) {
            @$query['OutboundCallNumberId'] = $request->outboundCallNumberId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteOutboundCallNumberRequest
     *
     * @returns DeleteOutboundCallNumberResponse
     *
     * @param DeleteOutboundCallNumberRequest $request
     *
     * @return DeleteOutboundCallNumberResponse
     */
    public function deleteOutboundCallNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOutboundCallNumberWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScriptResponse
     *
     * @param DeleteScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteScriptResponse
     */
    public function deleteScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteScriptRequest
     *
     * @returns DeleteScriptResponse
     *
     * @param DeleteScriptRequest $request
     *
     * @return DeleteScriptResponse
     */
    public function deleteScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteScriptRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScriptRecordingResponse
     *
     * @param DeleteScriptRecordingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteScriptRecordingResponse
     */
    public function deleteScriptRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->uuidsJson) {
            @$query['UuidsJson'] = $request->uuidsJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteScriptRecordingRequest
     *
     * @returns DeleteScriptRecordingResponse
     *
     * @param DeleteScriptRecordingRequest $request
     *
     * @return DeleteScriptRecordingResponse
     */
    public function deleteScriptRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptRecordingWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteScriptWaveformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScriptWaveformResponse
     *
     * @param DeleteScriptWaveformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteScriptWaveformResponse
     */
    public function deleteScriptWaveformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptWaveformId) {
            @$query['ScriptWaveformId'] = $request->scriptWaveformId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DeleteScriptWaveformRequest
     *
     * @returns DeleteScriptWaveformResponse
     *
     * @param DeleteScriptWaveformRequest $request
     *
     * @return DeleteScriptWaveformResponse
     */
    public function deleteScriptWaveform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptWaveformWithOptions($request, $runtime);
    }

    /**
     * DescribeBeebotIntent.
     *
     * @remarks
     *
     * @param request - DescribeBeebotIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBeebotIntentResponse
     *
     * @param DescribeBeebotIntentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBeebotIntentResponse
     */
    public function describeBeebotIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * DescribeBeebotIntent.
     *
     * @remarks
     *
     * @param request - DescribeBeebotIntentRequest
     *
     * @returns DescribeBeebotIntentResponse
     *
     * @param DescribeBeebotIntentRequest $request
     *
     * @return DescribeBeebotIntentResponse
     */
    public function describeBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDialogueNodeStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDialogueNodeStatisticsResponse
     *
     * @param DescribeDialogueNodeStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDialogueNodeStatisticsResponse
     */
    public function describeDialogueNodeStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeDialogueNodeStatisticsRequest
     *
     * @returns DescribeDialogueNodeStatisticsResponse
     *
     * @param DescribeDialogueNodeStatisticsRequest $request
     *
     * @return DescribeDialogueNodeStatisticsResponse
     */
    public function describeDialogueNodeStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDialogueNodeStatisticsWithOptions($request, $runtime);
    }

    /**
     * DescribeDsReports.
     *
     * @param request - DescribeDsReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDsReportsResponse
     *
     * @param DescribeDsReportsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDsReportsResponse
     */
    public function describeDsReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * DescribeDsReports.
     *
     * @param request - DescribeDsReportsRequest
     *
     * @returns DescribeDsReportsResponse
     *
     * @param DescribeDsReportsRequest $request
     *
     * @return DescribeDsReportsResponse
     */
    public function describeDsReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDsReportsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeGlobalQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalQuestionResponse
     *
     * @param DescribeGlobalQuestionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGlobalQuestionResponse
     */
    public function describeGlobalQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalQuestionId) {
            @$query['GlobalQuestionId'] = $request->globalQuestionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeGlobalQuestionRequest
     *
     * @returns DescribeGlobalQuestionResponse
     *
     * @param DescribeGlobalQuestionRequest $request
     *
     * @return DescribeGlobalQuestionResponse
     */
    public function describeGlobalQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalQuestionWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeGroupExecutingInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupExecutingInfoResponse
     *
     * @param DescribeGroupExecutingInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeGroupExecutingInfoResponse
     */
    public function describeGroupExecutingInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeGroupExecutingInfoRequest
     *
     * @returns DescribeGroupExecutingInfoResponse
     *
     * @param DescribeGroupExecutingInfoRequest $request
     *
     * @return DescribeGroupExecutingInfoResponse
     */
    public function describeGroupExecutingInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupExecutingInfoWithOptions($request, $runtime);
    }

    /**
     * DescribeInstance.
     *
     * @param request - DescribeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
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
     * DescribeInstance.
     *
     * @param request - DescribeInstanceRequest
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIntentResponse
     *
     * @param DescribeIntentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeIntentResponse
     */
    public function describeIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeIntentRequest
     *
     * @returns DescribeIntentResponse
     *
     * @param DescribeIntentRequest $request
     *
     * @return DescribeIntentResponse
     */
    public function describeIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntentWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeIntentStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIntentStatisticsResponse
     *
     * @param DescribeIntentStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeIntentStatisticsResponse
     */
    public function describeIntentStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeIntentStatisticsRequest
     *
     * @returns DescribeIntentStatisticsResponse
     *
     * @param DescribeIntentStatisticsRequest $request
     *
     * @return DescribeIntentStatisticsResponse
     */
    public function describeIntentStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntentStatisticsWithOptions($request, $runtime);
    }

    /**
     * 获取job信息.
     *
     * @param request - DescribeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobResponse
     *
     * @param DescribeJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeJobResponse
     */
    public function describeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->withScript) {
            @$query['WithScript'] = $request->withScript;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取job信息.
     *
     * @param request - DescribeJobRequest
     *
     * @returns DescribeJobResponse
     *
     * @param DescribeJobRequest $request
     *
     * @return DescribeJobResponse
     */
    public function describeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeJobDataParsingTaskProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobDataParsingTaskProgressResponse
     *
     * @param DescribeJobDataParsingTaskProgressRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeJobDataParsingTaskProgressResponse
     */
    public function describeJobDataParsingTaskProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobDataParsingTaskId) {
            @$query['JobDataParsingTaskId'] = $request->jobDataParsingTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeJobDataParsingTaskProgressRequest
     *
     * @returns DescribeJobDataParsingTaskProgressResponse
     *
     * @param DescribeJobDataParsingTaskProgressRequest $request
     *
     * @return DescribeJobDataParsingTaskProgressResponse
     */
    public function describeJobDataParsingTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobDataParsingTaskProgressWithOptions($request, $runtime);
    }

    /**
     * DescribeJobGroup.
     *
     * @param request - DescribeJobGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobGroupResponse
     *
     * @param DescribeJobGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeJobGroupResponse
     */
    public function describeJobGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->briefTypes) {
            @$query['BriefTypes'] = $request->briefTypes;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * DescribeJobGroup.
     *
     * @param request - DescribeJobGroupRequest
     *
     * @returns DescribeJobGroupResponse
     *
     * @param DescribeJobGroupRequest $request
     *
     * @return DescribeJobGroupResponse
     */
    public function describeJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeJobGroupExportTaskProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobGroupExportTaskProgressResponse
     *
     * @param DescribeJobGroupExportTaskProgressRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeJobGroupExportTaskProgressResponse
     */
    public function describeJobGroupExportTaskProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeJobGroupExportTaskProgressRequest
     *
     * @returns DescribeJobGroupExportTaskProgressResponse
     *
     * @param DescribeJobGroupExportTaskProgressRequest $request
     *
     * @return DescribeJobGroupExportTaskProgressResponse
     */
    public function describeJobGroupExportTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobGroupExportTaskProgressWithOptions($request, $runtime);
    }

    /**
     * 查询号码库状态
     *
     * @param request - DescribeNumberDistrictInfoStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNumberDistrictInfoStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeNumberDistrictInfoStatusResponse
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
     * 查询号码库状态
     *
     * @returns DescribeNumberDistrictInfoStatusResponse
     *
     * @return DescribeNumberDistrictInfoStatusResponse
     */
    public function describeNumberDistrictInfoStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNumberDistrictInfoStatusWithOptions($runtime);
    }

    /**
     * 获取场景信息.
     *
     * @param request - DescribeScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScriptResponse
     *
     * @param DescribeScriptRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeScriptResponse
     */
    public function describeScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取场景信息.
     *
     * @param request - DescribeScriptRequest
     *
     * @returns DescribeScriptResponse
     *
     * @param DescribeScriptRequest $request
     *
     * @return DescribeScriptResponse
     */
    public function describeScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeScriptVoiceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScriptVoiceConfigResponse
     *
     * @param DescribeScriptVoiceConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScriptVoiceConfigResponse
     */
    public function describeScriptVoiceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptVoiceConfigId) {
            @$query['ScriptVoiceConfigId'] = $request->scriptVoiceConfigId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeScriptVoiceConfigRequest
     *
     * @returns DescribeScriptVoiceConfigResponse
     *
     * @param DescribeScriptVoiceConfigRequest $request
     *
     * @return DescribeScriptVoiceConfigResponse
     */
    public function describeScriptVoiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScriptVoiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeTTSConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTTSConfigResponse
     *
     * @param DescribeTTSConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTTSConfigResponse
     */
    public function describeTTSConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeTTSConfigRequest
     *
     * @returns DescribeTTSConfigResponse
     *
     * @param DescribeTTSConfigRequest $request
     *
     * @return DescribeTTSConfigResponse
     */
    public function describeTTSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTTSConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeTTSDemoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTTSDemoResponse
     *
     * @param DescribeTTSDemoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTTSDemoResponse
     */
    public function describeTTSDemoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessKey) {
            @$query['AccessKey'] = $request->accessKey;
        }

        if (null !== $request->aliCustomizedVoice) {
            @$query['AliCustomizedVoice'] = $request->aliCustomizedVoice;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nlsServiceType) {
            @$query['NlsServiceType'] = $request->nlsServiceType;
        }

        if (null !== $request->pitchRate) {
            @$query['PitchRate'] = $request->pitchRate;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->secretKey) {
            @$query['SecretKey'] = $request->secretKey;
        }

        if (null !== $request->speechRate) {
            @$query['SpeechRate'] = $request->speechRate;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        if (null !== $request->voice) {
            @$query['Voice'] = $request->voice;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeTTSDemoRequest
     *
     * @returns DescribeTTSDemoResponse
     *
     * @param DescribeTTSDemoRequest $request
     *
     * @return DescribeTTSDemoResponse
     */
    public function describeTTSDemo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTTSDemoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeTagHitsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagHitsSummaryResponse
     *
     * @param DescribeTagHitsSummaryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeTagHitsSummaryResponse
     */
    public function describeTagHitsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DescribeTagHitsSummaryRequest
     *
     * @returns DescribeTagHitsSummaryResponse
     *
     * @param DescribeTagHitsSummaryRequest $request
     *
     * @return DescribeTagHitsSummaryResponse
     */
    public function describeTagHitsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagHitsSummaryWithOptions($request, $runtime);
    }

    /**
     * 号码绑定实例列表.
     *
     * @param request - DescribeTenantBindNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantBindNumberResponse
     *
     * @param DescribeTenantBindNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTenantBindNumberResponse
     */
    public function describeTenantBindNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 号码绑定实例列表.
     *
     * @param request - DescribeTenantBindNumberRequest
     *
     * @returns DescribeTenantBindNumberResponse
     *
     * @param DescribeTenantBindNumberRequest $request
     *
     * @return DescribeTenantBindNumberResponse
     */
    public function describeTenantBindNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantBindNumberWithOptions($request, $runtime);
    }

    /**
     * @param request - DialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DialogueResponse
     *
     * @param DialogueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DialogueResponse
     */
    public function dialogueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionKey) {
            @$query['ActionKey'] = $request->actionKey;
        }

        if (null !== $request->actionParams) {
            @$query['ActionParams'] = $request->actionParams;
        }

        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->callType) {
            @$query['CallType'] = $request->callType;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DialogueRequest
     *
     * @returns DialogueResponse
     *
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
     * 取消号码库解析结果.
     *
     * @param request - DismissNumberDistrictInfoParsingResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DismissNumberDistrictInfoParsingResultResponse
     *
     * @param DismissNumberDistrictInfoParsingResultRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DismissNumberDistrictInfoParsingResultResponse
     */
    public function dismissNumberDistrictInfoParsingResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 取消号码库解析结果.
     *
     * @param request - DismissNumberDistrictInfoParsingResultRequest
     *
     * @returns DismissNumberDistrictInfoParsingResultResponse
     *
     * @param DismissNumberDistrictInfoParsingResultRequest $request
     *
     * @return DismissNumberDistrictInfoParsingResultResponse
     */
    public function dismissNumberDistrictInfoParsingResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dismissNumberDistrictInfoParsingResultWithOptions($request, $runtime);
    }

    /**
     * DownloadRecording.
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->needVoiceSliceRecording) {
            @$query['NeedVoiceSliceRecording'] = $request->needVoiceSliceRecording;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * DownloadRecording.
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
     * @param request - DownloadScriptRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadScriptRecordingResponse
     *
     * @param DownloadScriptRecordingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DownloadScriptRecordingResponse
     */
    public function downloadScriptRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DownloadScriptRecordingRequest
     *
     * @returns DownloadScriptRecordingResponse
     *
     * @param DownloadScriptRecordingRequest $request
     *
     * @return DownloadScriptRecordingResponse
     */
    public function downloadScriptRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadScriptRecordingWithOptions($request, $runtime);
    }

    /**
     * @param request - DuplicateScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DuplicateScriptResponse
     *
     * @param DuplicateScriptRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DuplicateScriptResponse
     */
    public function duplicateScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->sourceScriptId) {
            @$query['SourceScriptId'] = $request->sourceScriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - DuplicateScriptRequest
     *
     * @returns DuplicateScriptResponse
     *
     * @param DuplicateScriptRequest $request
     *
     * @return DuplicateScriptResponse
     */
    public function duplicateScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->duplicateScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - ExportScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportScriptResponse
     *
     * @param ExportScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExportScriptResponse
     */
    public function exportScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ExportScriptRequest
     *
     * @returns ExportScriptResponse
     *
     * @param ExportScriptRequest $request
     *
     * @return ExportScriptResponse
     */
    public function exportScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - GenerateUploadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateUploadUrlResponse
     *
     * @param GenerateUploadUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateUploadUrlResponse
     */
    public function generateUploadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GenerateUploadUrlRequest
     *
     * @returns GenerateUploadUrlResponse
     *
     * @param GenerateUploadUrlRequest $request
     *
     * @return GenerateUploadUrlResponse
     */
    public function generateUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAfterAnswerDelayPlaybackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAfterAnswerDelayPlaybackResponse
     *
     * @param GetAfterAnswerDelayPlaybackRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAfterAnswerDelayPlaybackResponse
     */
    public function getAfterAnswerDelayPlaybackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetAfterAnswerDelayPlaybackRequest
     *
     * @returns GetAfterAnswerDelayPlaybackResponse
     *
     * @param GetAfterAnswerDelayPlaybackRequest $request
     *
     * @return GetAfterAnswerDelayPlaybackResponse
     */
    public function getAfterAnswerDelayPlayback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAfterAnswerDelayPlaybackWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAgentProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentProfileResponse
     *
     * @param GetAgentProfileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAgentProfileResponse
     */
    public function getAgentProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentProfileId) {
            @$body['AgentProfileId'] = $request->agentProfileId;
        }

        if (null !== $request->appIp) {
            @$body['AppIp'] = $request->appIp;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * @param request - GetAgentProfileRequest
     *
     * @returns GetAgentProfileResponse
     *
     * @param GetAgentProfileRequest $request
     *
     * @return GetAgentProfileResponse
     */
    public function getAgentProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentProfileWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAgentProfileTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentProfileTemplateResponse
     *
     * @param GetAgentProfileTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAgentProfileTemplateResponse
     */
    public function getAgentProfileTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentProfileTemplateId) {
            @$body['AgentProfileTemplateId'] = $request->agentProfileTemplateId;
        }

        if (null !== $request->appIp) {
            @$body['AppIp'] = $request->appIp;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * @param request - GetAgentProfileTemplateRequest
     *
     * @returns GetAgentProfileTemplateResponse
     *
     * @param GetAgentProfileTemplateRequest $request
     *
     * @return GetAgentProfileTemplateResponse
     */
    public function getAgentProfileTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentProfileTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAnnotationMissionSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAnnotationMissionSummaryResponse
     *
     * @param GetAnnotationMissionSummaryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAnnotationMissionSummaryResponse
     */
    public function getAnnotationMissionSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotationMissionId) {
            @$query['AnnotationMissionId'] = $request->annotationMissionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetAnnotationMissionSummaryRequest
     *
     * @returns GetAnnotationMissionSummaryResponse
     *
     * @param GetAnnotationMissionSummaryRequest $request
     *
     * @return GetAnnotationMissionSummaryResponse
     */
    public function getAnnotationMissionSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAnnotationMissionSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAnnotationMissionTagInfoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAnnotationMissionTagInfoListResponse
     *
     * @param GetAnnotationMissionTagInfoListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetAnnotationMissionTagInfoListResponse
     */
    public function getAnnotationMissionTagInfoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetAnnotationMissionTagInfoListRequest
     *
     * @returns GetAnnotationMissionTagInfoListResponse
     *
     * @param GetAnnotationMissionTagInfoListRequest $request
     *
     * @return GetAnnotationMissionTagInfoListResponse
     */
    public function getAnnotationMissionTagInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAnnotationMissionTagInfoListWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAsrServerInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsrServerInfoResponse
     *
     * @param GetAsrServerInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAsrServerInfoResponse
     */
    public function getAsrServerInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetAsrServerInfoRequest
     *
     * @returns GetAsrServerInfoResponse
     *
     * @param GetAsrServerInfoRequest $request
     *
     * @return GetAsrServerInfoResponse
     */
    public function getAsrServerInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsrServerInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetBaseStrategyPeriodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBaseStrategyPeriodResponse
     *
     * @param GetBaseStrategyPeriodRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBaseStrategyPeriodResponse
     */
    public function getBaseStrategyPeriodWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetBaseStrategyPeriodRequest
     *
     * @returns GetBaseStrategyPeriodResponse
     *
     * @param GetBaseStrategyPeriodRequest $request
     *
     * @return GetBaseStrategyPeriodResponse
     */
    public function getBaseStrategyPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaseStrategyPeriodWithOptions($request, $runtime);
    }

    /**
     * @param request - GetConcurrentConversationQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConcurrentConversationQuotaResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetConcurrentConversationQuotaResponse
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
     * @returns GetConcurrentConversationQuotaResponse
     *
     * @return GetConcurrentConversationQuotaResponse
     */
    public function getConcurrentConversationQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConcurrentConversationQuotaWithOptions($runtime);
    }

    /**
     * @param request - GetContactBlockListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContactBlockListResponse
     *
     * @param GetContactBlockListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetContactBlockListResponse
     */
    public function getContactBlockListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->countTotalRow) {
            @$query['CountTotalRow'] = $request->countTotalRow;
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
     * @param request - GetContactBlockListRequest
     *
     * @returns GetContactBlockListResponse
     *
     * @param GetContactBlockListRequest $request
     *
     * @return GetContactBlockListResponse
     */
    public function getContactBlockList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContactBlockListWithOptions($request, $runtime);
    }

    /**
     * @param request - GetContactWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContactWhiteListResponse
     *
     * @param GetContactWhiteListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetContactWhiteListResponse
     */
    public function getContactWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->countTotalRow) {
            @$query['CountTotalRow'] = $request->countTotalRow;
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
     * @param request - GetContactWhiteListRequest
     *
     * @returns GetContactWhiteListResponse
     *
     * @param GetContactWhiteListRequest $request
     *
     * @return GetContactWhiteListResponse
     */
    public function getContactWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContactWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param request - GetCurrentConcurrencyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCurrentConcurrencyResponse
     *
     * @param GetCurrentConcurrencyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetCurrentConcurrencyResponse
     */
    public function getCurrentConcurrencyWithOptions($request, $runtime)
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
     * @param request - GetCurrentConcurrencyRequest
     *
     * @returns GetCurrentConcurrencyResponse
     *
     * @param GetCurrentConcurrencyRequest $request
     *
     * @return GetCurrentConcurrencyResponse
     */
    public function getCurrentConcurrency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCurrentConcurrencyWithOptions($request, $runtime);
    }

    /**
     * @param request - GetEffectiveDaysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEffectiveDaysResponse
     *
     * @param GetEffectiveDaysRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetEffectiveDaysResponse
     */
    public function getEffectiveDaysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetEffectiveDaysRequest
     *
     * @returns GetEffectiveDaysResponse
     *
     * @param GetEffectiveDaysRequest $request
     *
     * @return GetEffectiveDaysResponse
     */
    public function getEffectiveDays($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEffectiveDaysWithOptions($request, $runtime);
    }

    /**
     * @param request - GetEmptyNumberNoMoreCallsInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmptyNumberNoMoreCallsInfoResponse
     *
     * @param GetEmptyNumberNoMoreCallsInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetEmptyNumberNoMoreCallsInfoResponse
     */
    public function getEmptyNumberNoMoreCallsInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetEmptyNumberNoMoreCallsInfoRequest
     *
     * @returns GetEmptyNumberNoMoreCallsInfoResponse
     *
     * @param GetEmptyNumberNoMoreCallsInfoRequest $request
     *
     * @return GetEmptyNumberNoMoreCallsInfoResponse
     */
    public function getEmptyNumberNoMoreCallsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEmptyNumberNoMoreCallsInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetJobDataUploadParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobDataUploadParamsResponse
     *
     * @param GetJobDataUploadParamsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetJobDataUploadParamsResponse
     */
    public function getJobDataUploadParamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->busiType) {
            @$query['BusiType'] = $request->busiType;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetJobDataUploadParamsRequest
     *
     * @returns GetJobDataUploadParamsResponse
     *
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
     * @param request - GetMaxAttemptsPerDayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMaxAttemptsPerDayResponse
     *
     * @param GetMaxAttemptsPerDayRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMaxAttemptsPerDayResponse
     */
    public function getMaxAttemptsPerDayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetMaxAttemptsPerDayRequest
     *
     * @returns GetMaxAttemptsPerDayResponse
     *
     * @param GetMaxAttemptsPerDayRequest $request
     *
     * @return GetMaxAttemptsPerDayResponse
     */
    public function getMaxAttemptsPerDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMaxAttemptsPerDayWithOptions($request, $runtime);
    }

    /**
     * 获取号码库模板下载链接.
     *
     * @param request - GetNumberDistrictInfoTemplateDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNumberDistrictInfoTemplateDownloadUrlResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetNumberDistrictInfoTemplateDownloadUrlResponse
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
     * 获取号码库模板下载链接.
     *
     * @returns GetNumberDistrictInfoTemplateDownloadUrlResponse
     *
     * @return GetNumberDistrictInfoTemplateDownloadUrlResponse
     */
    public function getNumberDistrictInfoTemplateDownloadUrl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumberDistrictInfoTemplateDownloadUrlWithOptions($runtime);
    }

    /**
     * GetRealtimeConcurrencyReport.
     *
     * @param request - GetRealtimeConcurrencyReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRealtimeConcurrencyReportResponse
     *
     * @param GetRealtimeConcurrencyReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetRealtimeConcurrencyReportResponse
     */
    public function getRealtimeConcurrencyReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * GetRealtimeConcurrencyReport.
     *
     * @param request - GetRealtimeConcurrencyReportRequest
     *
     * @returns GetRealtimeConcurrencyReportResponse
     *
     * @param GetRealtimeConcurrencyReportRequest $request
     *
     * @return GetRealtimeConcurrencyReportResponse
     */
    public function getRealtimeConcurrencyReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeConcurrencyReportWithOptions($request, $runtime);
    }

    /**
     * @param request - GetSummaryInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSummaryInfoResponse
     *
     * @param GetSummaryInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSummaryInfoResponse
     */
    public function getSummaryInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetSummaryInfoRequest
     *
     * @returns GetSummaryInfoResponse
     *
     * @param GetSummaryInfoRequest $request
     *
     * @return GetSummaryInfoResponse
     */
    public function getSummaryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSummaryInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetTaskByUuidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskByUuidResponse
     *
     * @param GetTaskByUuidRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskByUuidResponse
     */
    public function getTaskByUuidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - GetTaskByUuidRequest
     *
     * @returns GetTaskByUuidResponse
     *
     * @param GetTaskByUuidRequest $request
     *
     * @return GetTaskByUuidResponse
     */
    public function getTaskByUuid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskByUuidWithOptions($request, $runtime);
    }

    /**
     * @param request - GetVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVersionResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetVersionResponse
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
     * @returns GetVersionResponse
     *
     * @return GetVersionResponse
     */
    public function getVersion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVersionWithOptions($runtime);
    }

    /**
     * @param request - ImportScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportScriptResponse
     *
     * @param ImportScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImportScriptResponse
     */
    public function importScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nluEngine) {
            @$query['NluEngine'] = $request->nluEngine;
        }

        if (null !== $request->signatureUrl) {
            @$query['SignatureUrl'] = $request->signatureUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ImportScriptRequest
     *
     * @returns ImportScriptResponse
     *
     * @param ImportScriptRequest $request
     *
     * @return ImportScriptResponse
     */
    public function importScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importScriptWithOptions($request, $runtime);
    }

    /**
     * InflightTaskTimeout.
     *
     * @param request - InflightTaskTimeoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InflightTaskTimeoutResponse
     *
     * @param InflightTaskTimeoutRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return InflightTaskTimeoutResponse
     */
    public function inflightTaskTimeoutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * InflightTaskTimeout.
     *
     * @param request - InflightTaskTimeoutRequest
     *
     * @returns InflightTaskTimeoutResponse
     *
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
     * @param request - ListAgentProfilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentProfilesResponse
     *
     * @param ListAgentProfilesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAgentProfilesResponse
     */
    public function listAgentProfilesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appIp) {
            @$body['AppIp'] = $request->appIp;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$body['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * @param request - ListAgentProfilesRequest
     *
     * @returns ListAgentProfilesResponse
     *
     * @param ListAgentProfilesRequest $request
     *
     * @return ListAgentProfilesResponse
     */
    public function listAgentProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentProfilesWithOptions($request, $runtime);
    }

    /**
     * 租户绑定号码列表.
     *
     * @param request - ListAllTenantBindNumberBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllTenantBindNumberBindingResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListAllTenantBindNumberBindingResponse
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
     * 租户绑定号码列表.
     *
     * @returns ListAllTenantBindNumberBindingResponse
     *
     * @return ListAllTenantBindNumberBindingResponse
     */
    public function listAllTenantBindNumberBinding()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllTenantBindNumberBindingWithOptions($runtime);
    }

    /**
     * @param request - ListAnnotationMissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnnotationMissionResponse
     *
     * @param ListAnnotationMissionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAnnotationMissionResponse
     */
    public function listAnnotationMissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotationMissionId) {
            @$query['AnnotationMissionId'] = $request->annotationMissionId;
        }

        if (null !== $request->annotationMissionName) {
            @$query['AnnotationMissionName'] = $request->annotationMissionName;
        }

        if (null !== $request->annotationStatusListFilter) {
            @$query['AnnotationStatusListFilter'] = $request->annotationStatusListFilter;
        }

        if (null !== $request->annotationStatusListStringFilter) {
            @$query['AnnotationStatusListStringFilter'] = $request->annotationStatusListStringFilter;
        }

        if (null !== $request->createTimeEndFilter) {
            @$query['CreateTimeEndFilter'] = $request->createTimeEndFilter;
        }

        if (null !== $request->createTimeStartFilter) {
            @$query['CreateTimeStartFilter'] = $request->createTimeStartFilter;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListAnnotationMissionRequest
     *
     * @returns ListAnnotationMissionResponse
     *
     * @param ListAnnotationMissionRequest $request
     *
     * @return ListAnnotationMissionResponse
     */
    public function listAnnotationMission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnnotationMissionWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAnnotationMissionSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnnotationMissionSessionResponse
     *
     * @param ListAnnotationMissionSessionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAnnotationMissionSessionResponse
     */
    public function listAnnotationMissionSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotationMissionId) {
            @$query['AnnotationMissionId'] = $request->annotationMissionId;
        }

        if (null !== $request->annotationMissionSessionId) {
            @$query['AnnotationMissionSessionId'] = $request->annotationMissionSessionId;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->includeStatusListJsonString) {
            @$query['IncludeStatusListJsonString'] = $request->includeStatusListJsonString;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListAnnotationMissionSessionRequest
     *
     * @returns ListAnnotationMissionSessionResponse
     *
     * @param ListAnnotationMissionSessionRequest $request
     *
     * @return ListAnnotationMissionSessionResponse
     */
    public function listAnnotationMissionSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnnotationMissionSessionWithOptions($request, $runtime);
    }

    /**
     * @param request - ListApiPluginsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiPluginsResponse
     *
     * @param ListApiPluginsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListApiPluginsResponse
     */
    public function listApiPluginsWithOptions($request, $runtime)
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

        if (null !== $request->uuidsJson) {
            @$query['UuidsJson'] = $request->uuidsJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListApiPluginsRequest
     *
     * @returns ListApiPluginsResponse
     *
     * @param ListApiPluginsRequest $request
     *
     * @return ListApiPluginsResponse
     */
    public function listApiPlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiPluginsWithOptions($request, $runtime);
    }

    /**
     * ListBeebotIntent.
     *
     * @param request - ListBeebotIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBeebotIntentResponse
     *
     * @param ListBeebotIntentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListBeebotIntentResponse
     */
    public function listBeebotIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentName) {
            @$query['IntentName'] = $request->intentName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * ListBeebotIntent.
     *
     * @param request - ListBeebotIntentRequest
     *
     * @returns ListBeebotIntentResponse
     *
     * @param ListBeebotIntentRequest $request
     *
     * @return ListBeebotIntentResponse
     */
    public function listBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * ListBeebotIntentLgf.
     *
     * @param request - ListBeebotIntentLgfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBeebotIntentLgfResponse
     *
     * @param ListBeebotIntentLgfRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListBeebotIntentLgfResponse
     */
    public function listBeebotIntentLgfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->lgfText) {
            @$query['LgfText'] = $request->lgfText;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * ListBeebotIntentLgf.
     *
     * @param request - ListBeebotIntentLgfRequest
     *
     * @returns ListBeebotIntentLgfResponse
     *
     * @param ListBeebotIntentLgfRequest $request
     *
     * @return ListBeebotIntentLgfResponse
     */
    public function listBeebotIntentLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBeebotIntentLgfWithOptions($request, $runtime);
    }

    /**
     * ListBeebotIntentUserSay.
     *
     * @param request - ListBeebotIntentUserSayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBeebotIntentUserSayResponse
     *
     * @param ListBeebotIntentUserSayRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListBeebotIntentUserSayResponse
     */
    public function listBeebotIntentUserSayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * ListBeebotIntentUserSay.
     *
     * @param request - ListBeebotIntentUserSayRequest
     *
     * @returns ListBeebotIntentUserSayResponse
     *
     * @param ListBeebotIntentUserSayRequest $request
     *
     * @return ListBeebotIntentUserSayResponse
     */
    public function listBeebotIntentUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBeebotIntentUserSayWithOptions($request, $runtime);
    }

    /**
     * @param request - ListChatbotInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatbotInstancesResponse
     *
     * @param ListChatbotInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListChatbotInstancesResponse
     */
    public function listChatbotInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
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
     * @param request - ListChatbotInstancesRequest
     *
     * @returns ListChatbotInstancesResponse
     *
     * @param ListChatbotInstancesRequest $request
     *
     * @return ListChatbotInstancesResponse
     */
    public function listChatbotInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatbotInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListDialogueFlowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDialogueFlowsResponse
     *
     * @param ListDialogueFlowsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDialogueFlowsResponse
     */
    public function listDialogueFlowsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListDialogueFlowsRequest
     *
     * @returns ListDialogueFlowsResponse
     *
     * @param ListDialogueFlowsRequest $request
     *
     * @return ListDialogueFlowsResponse
     */
    public function listDialogueFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDialogueFlowsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListDownloadTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDownloadTasksResponse
     *
     * @param ListDownloadTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDownloadTasksResponse
     */
    public function listDownloadTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListDownloadTasksRequest
     *
     * @returns ListDownloadTasksResponse
     *
     * @param ListDownloadTasksRequest $request
     *
     * @return ListDownloadTasksResponse
     */
    public function listDownloadTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDownloadTasksWithOptions($request, $runtime);
    }

    /**
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListGlobalQuestionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGlobalQuestionsResponse
     *
     * @param ListGlobalQuestionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListGlobalQuestionsResponse
     */
    public function listGlobalQuestionsWithOptions($request, $runtime)
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

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListGlobalQuestionsRequest
     *
     * @returns ListGlobalQuestionsResponse
     *
     * @param ListGlobalQuestionsRequest $request
     *
     * @return ListGlobalQuestionsResponse
     */
    public function listGlobalQuestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGlobalQuestionsWithOptions($request, $runtime);
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
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 意图列表.
     *
     * @param request - ListIntentionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntentionsResponse
     *
     * @param ListIntentionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListIntentionsResponse
     */
    public function listIntentionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotationMissionDataSourceType) {
            @$query['AnnotationMissionDataSourceType'] = $request->annotationMissionDataSourceType;
        }

        if (null !== $request->botId) {
            @$query['BotId'] = $request->botId;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->userNick) {
            @$query['UserNick'] = $request->userNick;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 意图列表.
     *
     * @param request - ListIntentionsRequest
     *
     * @returns ListIntentionsResponse
     *
     * @param ListIntentionsRequest $request
     *
     * @return ListIntentionsResponse
     */
    public function listIntentions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntentionsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListIntentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntentsResponse
     *
     * @param ListIntentsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListIntentsResponse
     */
    public function listIntentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListIntentsRequest
     *
     * @returns ListIntentsResponse
     *
     * @param ListIntentsRequest $request
     *
     * @return ListIntentsResponse
     */
    public function listIntents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntentsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListJobGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobGroupsResponse
     *
     * @param ListJobGroupsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListJobGroupsResponse
     */
    public function listJobGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asyncQuery) {
            @$query['AsyncQuery'] = $request->asyncQuery;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupStatusFilter) {
            @$query['JobGroupStatusFilter'] = $request->jobGroupStatusFilter;
        }

        if (null !== $request->onlyMinConcurrencyEnabled) {
            @$query['OnlyMinConcurrencyEnabled'] = $request->onlyMinConcurrencyEnabled;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchText) {
            @$query['SearchText'] = $request->searchText;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListJobGroupsRequest
     *
     * @returns ListJobGroupsResponse
     *
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
     * @param request - ListJobGroupsAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobGroupsAsyncResponse
     *
     * @param ListJobGroupsAsyncRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListJobGroupsAsyncResponse
     */
    public function listJobGroupsAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListJobGroupsAsyncRequest
     *
     * @returns ListJobGroupsAsyncResponse
     *
     * @param ListJobGroupsAsyncRequest $request
     *
     * @return ListJobGroupsAsyncResponse
     */
    public function listJobGroupsAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobGroupsAsyncWithOptions($request, $runtime);
    }

    /**
     * ListJobs.
     *
     * @param request - ListJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
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
     * ListJobs.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListJobsByGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsByGroupResponse
     *
     * @param ListJobsByGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListJobsByGroupResponse
     */
    public function listJobsByGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobFailureReason) {
            @$query['JobFailureReason'] = $request->jobFailureReason;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->jobStatus) {
            @$query['JobStatus'] = $request->jobStatus;
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
     * @param request - ListJobsByGroupRequest
     *
     * @returns ListJobsByGroupResponse
     *
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
     * @param request - ListOutboundCallNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOutboundCallNumbersResponse
     *
     * @param ListOutboundCallNumbersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOutboundCallNumbersResponse
     */
    public function listOutboundCallNumbersWithOptions($request, $runtime)
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
     * @param request - ListOutboundCallNumbersRequest
     *
     * @returns ListOutboundCallNumbersResponse
     *
     * @param ListOutboundCallNumbersRequest $request
     *
     * @return ListOutboundCallNumbersResponse
     */
    public function listOutboundCallNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundCallNumbersWithOptions($request, $runtime);
    }

    /**
     * @param request - ListResourceTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceTagsResponse
     *
     * @param ListResourceTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListResourceTagsRequest
     *
     * @returns ListResourceTagsResponse
     *
     * @param ListResourceTagsRequest $request
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTagsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListSchedulerInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSchedulerInstancesResponse
     *
     * @param ListSchedulerInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListSchedulerInstancesResponse
     */
    public function listSchedulerInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListSchedulerInstancesRequest
     *
     * @returns ListSchedulerInstancesResponse
     *
     * @param ListSchedulerInstancesRequest $request
     *
     * @return ListSchedulerInstancesResponse
     */
    public function listSchedulerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchedulerInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListScriptPublishHistoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScriptPublishHistoriesResponse
     *
     * @param ListScriptPublishHistoriesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListScriptPublishHistoriesResponse
     */
    public function listScriptPublishHistoriesWithOptions($request, $runtime)
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

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListScriptPublishHistoriesRequest
     *
     * @returns ListScriptPublishHistoriesResponse
     *
     * @param ListScriptPublishHistoriesRequest $request
     *
     * @return ListScriptPublishHistoriesResponse
     */
    public function listScriptPublishHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptPublishHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListScriptRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScriptRecordingResponse
     *
     * @param ListScriptRecordingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListScriptRecordingResponse
     */
    public function listScriptRecordingWithOptions($request, $runtime)
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

        if (null !== $request->refIdsJson) {
            @$query['RefIdsJson'] = $request->refIdsJson;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->search) {
            @$query['Search'] = $request->search;
        }

        if (null !== $request->statesJson) {
            @$query['StatesJson'] = $request->statesJson;
        }

        if (null !== $request->uuidsJson) {
            @$query['UuidsJson'] = $request->uuidsJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListScriptRecordingRequest
     *
     * @returns ListScriptRecordingResponse
     *
     * @param ListScriptRecordingRequest $request
     *
     * @return ListScriptRecordingResponse
     */
    public function listScriptRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptRecordingWithOptions($request, $runtime);
    }

    /**
     * @param request - ListScriptVoiceConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScriptVoiceConfigsResponse
     *
     * @param ListScriptVoiceConfigsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListScriptVoiceConfigsResponse
     */
    public function listScriptVoiceConfigsWithOptions($request, $runtime)
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

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListScriptVoiceConfigsRequest
     *
     * @returns ListScriptVoiceConfigsResponse
     *
     * @param ListScriptVoiceConfigsRequest $request
     *
     * @return ListScriptVoiceConfigsResponse
     */
    public function listScriptVoiceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptVoiceConfigsWithOptions($request, $runtime);
    }

    /**
     * -.
     *
     * @param request - ListScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScriptsResponse
     *
     * @param ListScriptsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListScriptsResponse
     */
    public function listScriptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nluEngine) {
            @$query['NluEngine'] = $request->nluEngine;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scriptName) {
            @$query['ScriptName'] = $request->scriptName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * -.
     *
     * @param request - ListScriptsRequest
     *
     * @returns ListScriptsResponse
     *
     * @param ListScriptsRequest $request
     *
     * @return ListScriptsResponse
     */
    public function listScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListTagsRequest
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - ModifyAgentProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAgentProfileResponse
     *
     * @param ModifyAgentProfileRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyAgentProfileResponse
     */
    public function modifyAgentProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAgentProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->faqCategoryIds) {
            $request->faqCategoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->faqCategoryIds, 'FaqCategoryIds', 'json');
        }

        $body = [];
        if (null !== $request->agentProfileId) {
            @$body['AgentProfileId'] = $request->agentProfileId;
        }

        if (null !== $request->apiPluginJson) {
            @$body['ApiPluginJson'] = $request->apiPluginJson;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->faqCategoryIdsShrink) {
            @$body['FaqCategoryIds'] = $request->faqCategoryIdsShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instructionJson) {
            @$body['InstructionJson'] = $request->instructionJson;
        }

        if (null !== $request->labelsJson) {
            @$body['LabelsJson'] = $request->labelsJson;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->modelConfig) {
            @$body['ModelConfig'] = $request->modelConfig;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->promptJson) {
            @$body['PromptJson'] = $request->promptJson;
        }

        if (null !== $request->scenario) {
            @$body['Scenario'] = $request->scenario;
        }

        if (null !== $request->variablesJson) {
            @$body['VariablesJson'] = $request->variablesJson;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * @param request - ModifyAgentProfileRequest
     *
     * @returns ModifyAgentProfileResponse
     *
     * @param ModifyAgentProfileRequest $request
     *
     * @return ModifyAgentProfileResponse
     */
    public function modifyAgentProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAgentProfileWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyAnnotationMissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAnnotationMissionResponse
     *
     * @param ModifyAnnotationMissionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAnnotationMissionResponse
     */
    public function modifyAnnotationMissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotationMissionId) {
            @$query['AnnotationMissionId'] = $request->annotationMissionId;
        }

        if (null !== $request->annotationMissionName) {
            @$query['AnnotationMissionName'] = $request->annotationMissionName;
        }

        if (null !== $request->annotationStatus) {
            @$query['AnnotationStatus'] = $request->annotationStatus;
        }

        if (null !== $request->delete) {
            @$query['Delete'] = $request->delete;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyAnnotationMissionRequest
     *
     * @returns ModifyAnnotationMissionResponse
     *
     * @param ModifyAnnotationMissionRequest $request
     *
     * @return ModifyAnnotationMissionResponse
     */
    public function modifyAnnotationMission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAnnotationMissionWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyBatchJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBatchJobsResponse
     *
     * @param ModifyBatchJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyBatchJobsResponse
     */
    public function modifyBatchJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchJobName) {
            @$query['BatchJobName'] = $request->batchJobName;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobFilePath) {
            @$query['JobFilePath'] = $request->jobFilePath;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->strategyJson) {
            @$query['StrategyJson'] = $request->strategyJson;
        }

        if (null !== $request->submitted) {
            @$query['Submitted'] = $request->submitted;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyBatchJobsRequest
     *
     * @returns ModifyBatchJobsResponse
     *
     * @param ModifyBatchJobsRequest $request
     *
     * @return ModifyBatchJobsResponse
     */
    public function modifyBatchJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBatchJobsWithOptions($request, $runtime);
    }

    /**
     * ModifyBeebotIntent.
     *
     * @param tmpReq - ModifyBeebotIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBeebotIntentResponse
     *
     * @param ModifyBeebotIntentRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBeebotIntentResponse
     */
    public function modifyBeebotIntentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyBeebotIntentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->intentDefinition) {
            $request->intentDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->intentDefinition, 'IntentDefinition', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentDefinitionShrink) {
            @$query['IntentDefinition'] = $request->intentDefinitionShrink;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * ModifyBeebotIntent.
     *
     * @param request - ModifyBeebotIntentRequest
     *
     * @returns ModifyBeebotIntentResponse
     *
     * @param ModifyBeebotIntentRequest $request
     *
     * @return ModifyBeebotIntentResponse
     */
    public function modifyBeebotIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBeebotIntentWithOptions($request, $runtime);
    }

    /**
     * ModifyBeebotIntentLgf.
     *
     * @param tmpReq - ModifyBeebotIntentLgfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBeebotIntentLgfResponse
     *
     * @param ModifyBeebotIntentLgfRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyBeebotIntentLgfResponse
     */
    public function modifyBeebotIntentLgfWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyBeebotIntentLgfShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->lgfDefinition) {
            $request->lgfDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lgfDefinition, 'LgfDefinition', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lgfDefinitionShrink) {
            @$query['LgfDefinition'] = $request->lgfDefinitionShrink;
        }

        if (null !== $request->lgfId) {
            @$query['LgfId'] = $request->lgfId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * ModifyBeebotIntentLgf.
     *
     * @param request - ModifyBeebotIntentLgfRequest
     *
     * @returns ModifyBeebotIntentLgfResponse
     *
     * @param ModifyBeebotIntentLgfRequest $request
     *
     * @return ModifyBeebotIntentLgfResponse
     */
    public function modifyBeebotIntentLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBeebotIntentLgfWithOptions($request, $runtime);
    }

    /**
     * ModifyBeebotIntentUserSay.
     *
     * @param tmpReq - ModifyBeebotIntentUserSayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBeebotIntentUserSayResponse
     *
     * @param ModifyBeebotIntentUserSayRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyBeebotIntentUserSayResponse
     */
    public function modifyBeebotIntentUserSayWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyBeebotIntentUserSayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userSayDefinition) {
            $request->userSayDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userSayDefinition, 'UserSayDefinition', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->userSayDefinitionShrink) {
            @$query['UserSayDefinition'] = $request->userSayDefinitionShrink;
        }

        if (null !== $request->userSayId) {
            @$query['UserSayId'] = $request->userSayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * ModifyBeebotIntentUserSay.
     *
     * @param request - ModifyBeebotIntentUserSayRequest
     *
     * @returns ModifyBeebotIntentUserSayResponse
     *
     * @param ModifyBeebotIntentUserSayRequest $request
     *
     * @return ModifyBeebotIntentUserSayResponse
     */
    public function modifyBeebotIntentUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBeebotIntentUserSayWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDialogueFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDialogueFlowResponse
     *
     * @param ModifyDialogueFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDialogueFlowResponse
     */
    public function modifyDialogueFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dialogueFlowDefinition) {
            @$query['DialogueFlowDefinition'] = $request->dialogueFlowDefinition;
        }

        if (null !== $request->dialogueFlowId) {
            @$query['DialogueFlowId'] = $request->dialogueFlowId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isDrafted) {
            @$query['IsDrafted'] = $request->isDrafted;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyDialogueFlowRequest
     *
     * @returns ModifyDialogueFlowResponse
     *
     * @param ModifyDialogueFlowRequest $request
     *
     * @return ModifyDialogueFlowResponse
     */
    public function modifyDialogueFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDialogueFlowWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyEmptyNumberNoMoreCallsInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEmptyNumberNoMoreCallsInfoResponse
     *
     * @param ModifyEmptyNumberNoMoreCallsInfoRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyEmptyNumberNoMoreCallsInfoResponse
     */
    public function modifyEmptyNumberNoMoreCallsInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->emptyNumberNoMoreCalls) {
            @$query['EmptyNumberNoMoreCalls'] = $request->emptyNumberNoMoreCalls;
        }

        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyEmptyNumberNoMoreCallsInfoRequest
     *
     * @returns ModifyEmptyNumberNoMoreCallsInfoResponse
     *
     * @param ModifyEmptyNumberNoMoreCallsInfoRequest $request
     *
     * @return ModifyEmptyNumberNoMoreCallsInfoResponse
     */
    public function modifyEmptyNumberNoMoreCallsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEmptyNumberNoMoreCallsInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyGlobalQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGlobalQuestionResponse
     *
     * @param ModifyGlobalQuestionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyGlobalQuestionResponse
     */
    public function modifyGlobalQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->answers) {
            @$query['Answers'] = $request->answers;
        }

        if (null !== $request->globalQuestionId) {
            @$query['GlobalQuestionId'] = $request->globalQuestionId;
        }

        if (null !== $request->globalQuestionName) {
            @$query['GlobalQuestionName'] = $request->globalQuestionName;
        }

        if (null !== $request->globalQuestionType) {
            @$query['GlobalQuestionType'] = $request->globalQuestionType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->questions) {
            @$query['Questions'] = $request->questions;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyGlobalQuestionRequest
     *
     * @returns ModifyGlobalQuestionResponse
     *
     * @param ModifyGlobalQuestionRequest $request
     *
     * @return ModifyGlobalQuestionResponse
     */
    public function modifyGlobalQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalQuestionWithOptions($request, $runtime);
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
        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->instanceDescription) {
            @$query['InstanceDescription'] = $request->instanceDescription;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->maxConcurrentConversation) {
            @$query['MaxConcurrentConversation'] = $request->maxConcurrentConversation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIntentResponse
     *
     * @param ModifyIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyIntentResponse
     */
    public function modifyIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentDescription) {
            @$query['IntentDescription'] = $request->intentDescription;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->intentName) {
            @$query['IntentName'] = $request->intentName;
        }

        if (null !== $request->keywords) {
            @$query['Keywords'] = $request->keywords;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->utterances) {
            @$query['Utterances'] = $request->utterances;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyIntentRequest
     *
     * @returns ModifyIntentResponse
     *
     * @param ModifyIntentRequest $request
     *
     * @return ModifyIntentResponse
     */
    public function modifyIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIntentWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyJobGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyJobGroupResponse
     *
     * @param ModifyJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyJobGroupResponse
     */
    public function modifyJobGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->flashSmsExtras) {
            @$query['FlashSmsExtras'] = $request->flashSmsExtras;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->jobGroupStatus) {
            @$query['JobGroupStatus'] = $request->jobGroupStatus;
        }

        if (null !== $request->minConcurrency) {
            @$query['MinConcurrency'] = $request->minConcurrency;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->recallCallingNumber) {
            @$query['RecallCallingNumber'] = $request->recallCallingNumber;
        }

        if (null !== $request->recallStrategyJson) {
            @$query['RecallStrategyJson'] = $request->recallStrategyJson;
        }

        if (null !== $request->ringingDuration) {
            @$query['RingingDuration'] = $request->ringingDuration;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->strategyJson) {
            @$query['StrategyJson'] = $request->strategyJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyJobGroupRequest
     *
     * @returns ModifyJobGroupResponse
     *
     * @param ModifyJobGroupRequest $request
     *
     * @return ModifyJobGroupResponse
     */
    public function modifyJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyJobGroupWithOptions($request, $runtime);
    }

    /**
     * ModifyOutboundCallNumber.
     *
     * @param request - ModifyOutboundCallNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOutboundCallNumberResponse
     *
     * @param ModifyOutboundCallNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyOutboundCallNumberResponse
     */
    public function modifyOutboundCallNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->outboundCallNumberId) {
            @$query['OutboundCallNumberId'] = $request->outboundCallNumberId;
        }

        if (null !== $request->rateLimitCount) {
            @$query['RateLimitCount'] = $request->rateLimitCount;
        }

        if (null !== $request->rateLimitPeriod) {
            @$query['RateLimitPeriod'] = $request->rateLimitPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * ModifyOutboundCallNumber.
     *
     * @param request - ModifyOutboundCallNumberRequest
     *
     * @returns ModifyOutboundCallNumberResponse
     *
     * @param ModifyOutboundCallNumberRequest $request
     *
     * @return ModifyOutboundCallNumberResponse
     */
    public function modifyOutboundCallNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOutboundCallNumberWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScriptResponse
     *
     * @param ModifyScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyScriptResponse
     */
    public function modifyScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->agentLlm) {
            @$query['AgentLlm'] = $request->agentLlm;
        }

        if (null !== $request->asrConfig) {
            @$query['AsrConfig'] = $request->asrConfig;
        }

        if (null !== $request->chatConfig) {
            @$query['ChatConfig'] = $request->chatConfig;
        }

        if (null !== $request->chatbotId) {
            @$query['ChatbotId'] = $request->chatbotId;
        }

        if (null !== $request->emotionEnable) {
            @$query['EmotionEnable'] = $request->emotionEnable;
        }

        if (null !== $request->industry) {
            @$query['Industry'] = $request->industry;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->longWaitEnable) {
            @$query['LongWaitEnable'] = $request->longWaitEnable;
        }

        if (null !== $request->miniPlaybackConfigListJsonString) {
            @$query['MiniPlaybackConfigListJsonString'] = $request->miniPlaybackConfigListJsonString;
        }

        if (null !== $request->miniPlaybackEnable) {
            @$query['MiniPlaybackEnable'] = $request->miniPlaybackEnable;
        }

        if (null !== $request->newBargeInEnable) {
            @$query['NewBargeInEnable'] = $request->newBargeInEnable;
        }

        if (null !== $request->nlsConfig) {
            @$query['NlsConfig'] = $request->nlsConfig;
        }

        if (null !== $request->nluAccessType) {
            @$query['NluAccessType'] = $request->nluAccessType;
        }

        if (null !== $request->nluEngine) {
            @$query['NluEngine'] = $request->nluEngine;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->scriptContent) {
            @$query['ScriptContent'] = $request->scriptContent;
        }

        if (null !== $request->scriptDescription) {
            @$query['ScriptDescription'] = $request->scriptDescription;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptName) {
            @$query['ScriptName'] = $request->scriptName;
        }

        if (null !== $request->scriptWaveform) {
            @$query['ScriptWaveform'] = $request->scriptWaveform;
        }

        if (null !== $request->ttsConfig) {
            @$query['TtsConfig'] = $request->ttsConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyScriptRequest
     *
     * @returns ModifyScriptResponse
     *
     * @param ModifyScriptRequest $request
     *
     * @return ModifyScriptResponse
     */
    public function modifyScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyScriptVoiceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScriptVoiceConfigResponse
     *
     * @param ModifyScriptVoiceConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyScriptVoiceConfigResponse
     */
    public function modifyScriptVoiceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptVoiceConfigId) {
            @$query['ScriptVoiceConfigId'] = $request->scriptVoiceConfigId;
        }

        if (null !== $request->scriptWaveformRelation) {
            @$query['ScriptWaveformRelation'] = $request->scriptWaveformRelation;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyScriptVoiceConfigRequest
     *
     * @returns ModifyScriptVoiceConfigResponse
     *
     * @param ModifyScriptVoiceConfigRequest $request
     *
     * @return ModifyScriptVoiceConfigResponse
     */
    public function modifyScriptVoiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScriptVoiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyTTSConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTTSConfigResponse
     *
     * @param ModifyTTSConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyTTSConfigResponse
     */
    public function modifyTTSConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nlsServiceType) {
            @$query['NlsServiceType'] = $request->nlsServiceType;
        }

        if (null !== $request->pitchRate) {
            @$query['PitchRate'] = $request->pitchRate;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->speechRate) {
            @$query['SpeechRate'] = $request->speechRate;
        }

        if (null !== $request->voice) {
            @$query['Voice'] = $request->voice;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyTTSConfigRequest
     *
     * @returns ModifyTTSConfigResponse
     *
     * @param ModifyTTSConfigRequest $request
     *
     * @return ModifyTTSConfigResponse
     */
    public function modifyTTSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTTSConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyTagGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTagGroupsResponse
     *
     * @param ModifyTagGroupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyTagGroupsResponse
     */
    public function modifyTagGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->tagGroups) {
            @$query['TagGroups'] = $request->tagGroups;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ModifyTagGroupsRequest
     *
     * @returns ModifyTagGroupsResponse
     *
     * @param ModifyTagGroupsRequest $request
     *
     * @return ModifyTagGroupsResponse
     */
    public function modifyTagGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - PublishScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishScriptResponse
     *
     * @param PublishScriptRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PublishScriptResponse
     */
    public function publishScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - PublishScriptRequest
     *
     * @returns PublishScriptResponse
     *
     * @param PublishScriptRequest $request
     *
     * @return PublishScriptResponse
     */
    public function publishScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - PublishScriptForDebugRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishScriptForDebugResponse
     *
     * @param PublishScriptForDebugRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PublishScriptForDebugResponse
     */
    public function publishScriptForDebugWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - PublishScriptForDebugRequest
     *
     * @returns PublishScriptForDebugResponse
     *
     * @param PublishScriptForDebugRequest $request
     *
     * @return PublishScriptForDebugResponse
     */
    public function publishScriptForDebug($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishScriptForDebugWithOptions($request, $runtime);
    }

    /**
     * QueryJobs.
     *
     * @param request - QueryJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryJobsResponse
     *
     * @param QueryJobsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryJobsResponse
     */
    public function queryJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
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

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeAlignment) {
            @$query['TimeAlignment'] = $request->timeAlignment;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * QueryJobs.
     *
     * @param request - QueryJobsRequest
     *
     * @returns QueryJobsResponse
     *
     * @param QueryJobsRequest $request
     *
     * @return QueryJobsResponse
     */
    public function queryJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryJobsWithResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryJobsWithResultResponse
     *
     * @param QueryJobsWithResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryJobsWithResultResponse
     */
    public function queryJobsWithResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endActualTimeFilter) {
            @$query['EndActualTimeFilter'] = $request->endActualTimeFilter;
        }

        if (null !== $request->hasAnsweredFilter) {
            @$query['HasAnsweredFilter'] = $request->hasAnsweredFilter;
        }

        if (null !== $request->hasHangUpByRejectionFilter) {
            @$query['HasHangUpByRejectionFilter'] = $request->hasHangUpByRejectionFilter;
        }

        if (null !== $request->hasReachedEndOfFlowFilter) {
            @$query['HasReachedEndOfFlowFilter'] = $request->hasReachedEndOfFlowFilter;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobFailureReasonsFilter) {
            @$query['JobFailureReasonsFilter'] = $request->jobFailureReasonsFilter;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->jobStatusFilter) {
            @$query['JobStatusFilter'] = $request->jobStatusFilter;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryText) {
            @$query['QueryText'] = $request->queryText;
        }

        if (null !== $request->startActualTimeFilter) {
            @$query['StartActualTimeFilter'] = $request->startActualTimeFilter;
        }

        if (null !== $request->taskStatusFilter) {
            @$query['TaskStatusFilter'] = $request->taskStatusFilter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - QueryJobsWithResultRequest
     *
     * @returns QueryJobsWithResultResponse
     *
     * @param QueryJobsWithResultRequest $request
     *
     * @return QueryJobsWithResultResponse
     */
    public function queryJobsWithResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobsWithResultWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryScriptWaveformsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryScriptWaveformsResponse
     *
     * @param QueryScriptWaveformsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryScriptWaveformsResponse
     */
    public function queryScriptWaveformsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptContent) {
            @$query['ScriptContent'] = $request->scriptContent;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - QueryScriptWaveformsRequest
     *
     * @returns QueryScriptWaveformsResponse
     *
     * @param QueryScriptWaveformsRequest $request
     *
     * @return QueryScriptWaveformsResponse
     */
    public function queryScriptWaveforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryScriptWaveformsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryScriptsByStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryScriptsByStatusResponse
     *
     * @param QueryScriptsByStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryScriptsByStatusResponse
     */
    public function queryScriptsByStatusWithOptions($request, $runtime)
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

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - QueryScriptsByStatusRequest
     *
     * @returns QueryScriptsByStatusResponse
     *
     * @param QueryScriptsByStatusRequest $request
     *
     * @return QueryScriptsByStatusResponse
     */
    public function queryScriptsByStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryScriptsByStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - RecordFailureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecordFailureResponse
     *
     * @param RecordFailureRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecordFailureResponse
     */
    public function recordFailureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actualTime) {
            @$query['ActualTime'] = $request->actualTime;
        }

        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->dispositionCode) {
            @$query['DispositionCode'] = $request->dispositionCode;
        }

        if (null !== $request->exceptionCodes) {
            @$query['ExceptionCodes'] = $request->exceptionCodes;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - RecordFailureRequest
     *
     * @returns RecordFailureResponse
     *
     * @param RecordFailureRequest $request
     *
     * @return RecordFailureResponse
     */
    public function recordFailure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordFailureWithOptions($request, $runtime);
    }

    /**
     * @param request - ResumeJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeJobsResponse
     *
     * @param ResumeJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResumeJobsResponse
     */
    public function resumeJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobReferenceId) {
            @$query['JobReferenceId'] = $request->jobReferenceId;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ResumeJobsRequest
     *
     * @returns ResumeJobsResponse
     *
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
     * @param request - RollbackScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackScriptResponse
     *
     * @param RollbackScriptRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RollbackScriptResponse
     */
    public function rollbackScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->rollbackVersion) {
            @$query['RollbackVersion'] = $request->rollbackVersion;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - RollbackScriptRequest
     *
     * @returns RollbackScriptResponse
     *
     * @param RollbackScriptRequest $request
     *
     * @return RollbackScriptResponse
     */
    public function rollbackScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveAfterAnswerDelayPlaybackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveAfterAnswerDelayPlaybackResponse
     *
     * @param SaveAfterAnswerDelayPlaybackRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SaveAfterAnswerDelayPlaybackResponse
     */
    public function saveAfterAnswerDelayPlaybackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->afterAnswerDelayPlayback) {
            @$query['AfterAnswerDelayPlayback'] = $request->afterAnswerDelayPlayback;
        }

        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SaveAfterAnswerDelayPlaybackRequest
     *
     * @returns SaveAfterAnswerDelayPlaybackResponse
     *
     * @param SaveAfterAnswerDelayPlaybackRequest $request
     *
     * @return SaveAfterAnswerDelayPlaybackResponse
     */
    public function saveAfterAnswerDelayPlayback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAfterAnswerDelayPlaybackWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveAnnotationMissionSessionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveAnnotationMissionSessionListResponse
     *
     * @param SaveAnnotationMissionSessionListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveAnnotationMissionSessionListResponse
     */
    public function saveAnnotationMissionSessionListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->annotationMissionDataSourceType) {
            @$query['AnnotationMissionDataSourceType'] = $request->annotationMissionDataSourceType;
        }

        if (null !== $request->annotationMissionSessionList) {
            @$query['AnnotationMissionSessionList'] = $request->annotationMissionSessionList;
        }

        if (null !== $request->annotationMissionSessionListJsonString) {
            @$query['AnnotationMissionSessionListJsonString'] = $request->annotationMissionSessionListJsonString;
        }

        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->userNick) {
            @$query['UserNick'] = $request->userNick;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SaveAnnotationMissionSessionListRequest
     *
     * @returns SaveAnnotationMissionSessionListResponse
     *
     * @param SaveAnnotationMissionSessionListRequest $request
     *
     * @return SaveAnnotationMissionSessionListResponse
     */
    public function saveAnnotationMissionSessionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAnnotationMissionSessionListWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveAnnotationMissionTagInfoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveAnnotationMissionTagInfoListResponse
     *
     * @param SaveAnnotationMissionTagInfoListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveAnnotationMissionTagInfoListResponse
     */
    public function saveAnnotationMissionTagInfoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotationMissionTagInfoList) {
            @$query['AnnotationMissionTagInfoList'] = $request->annotationMissionTagInfoList;
        }

        if (null !== $request->annotationMissionTagInfoListJsonString) {
            @$query['AnnotationMissionTagInfoListJsonString'] = $request->annotationMissionTagInfoListJsonString;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->reset) {
            @$query['Reset'] = $request->reset;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SaveAnnotationMissionTagInfoListRequest
     *
     * @returns SaveAnnotationMissionTagInfoListResponse
     *
     * @param SaveAnnotationMissionTagInfoListRequest $request
     *
     * @return SaveAnnotationMissionTagInfoListResponse
     */
    public function saveAnnotationMissionTagInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAnnotationMissionTagInfoListWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveBaseStrategyPeriodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveBaseStrategyPeriodResponse
     *
     * @param SaveBaseStrategyPeriodRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SaveBaseStrategyPeriodResponse
     */
    public function saveBaseStrategyPeriodWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->onlyWeekdays) {
            @$query['OnlyWeekdays'] = $request->onlyWeekdays;
        }

        if (null !== $request->onlyWorkdays) {
            @$query['OnlyWorkdays'] = $request->onlyWorkdays;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        if (null !== $request->workingTime) {
            @$query['WorkingTime'] = $request->workingTime;
        }

        if (null !== $request->workingTimeFramesJson) {
            @$query['WorkingTimeFramesJson'] = $request->workingTimeFramesJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SaveBaseStrategyPeriodRequest
     *
     * @returns SaveBaseStrategyPeriodResponse
     *
     * @param SaveBaseStrategyPeriodRequest $request
     *
     * @return SaveBaseStrategyPeriodResponse
     */
    public function saveBaseStrategyPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBaseStrategyPeriodWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveContactBlockListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveContactBlockListResponse
     *
     * @param SaveContactBlockListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SaveContactBlockListResponse
     */
    public function saveContactBlockListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactBlockListList) {
            @$query['ContactBlockListList'] = $request->contactBlockListList;
        }

        if (null !== $request->contactBlockListsJson) {
            @$query['ContactBlockListsJson'] = $request->contactBlockListsJson;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SaveContactBlockListRequest
     *
     * @returns SaveContactBlockListResponse
     *
     * @param SaveContactBlockListRequest $request
     *
     * @return SaveContactBlockListResponse
     */
    public function saveContactBlockList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveContactBlockListWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveContactWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveContactWhiteListResponse
     *
     * @param SaveContactWhiteListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SaveContactWhiteListResponse
     */
    public function saveContactWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactWhiteListList) {
            @$query['ContactWhiteListList'] = $request->contactWhiteListList;
        }

        if (null !== $request->contactWhiteListsJson) {
            @$query['ContactWhiteListsJson'] = $request->contactWhiteListsJson;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SaveContactWhiteListRequest
     *
     * @returns SaveContactWhiteListResponse
     *
     * @param SaveContactWhiteListRequest $request
     *
     * @return SaveContactWhiteListResponse
     */
    public function saveContactWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveContactWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveEffectiveDaysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveEffectiveDaysResponse
     *
     * @param SaveEffectiveDaysRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveEffectiveDaysResponse
     */
    public function saveEffectiveDaysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveDays) {
            @$query['EffectiveDays'] = $request->effectiveDays;
        }

        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SaveEffectiveDaysRequest
     *
     * @returns SaveEffectiveDaysResponse
     *
     * @param SaveEffectiveDaysRequest $request
     *
     * @return SaveEffectiveDaysResponse
     */
    public function saveEffectiveDays($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveEffectiveDaysWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveMaxAttemptsPerDayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveMaxAttemptsPerDayResponse
     *
     * @param SaveMaxAttemptsPerDayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SaveMaxAttemptsPerDayResponse
     */
    public function saveMaxAttemptsPerDayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->maxAttemptsPerDay) {
            @$query['MaxAttemptsPerDay'] = $request->maxAttemptsPerDay;
        }

        if (null !== $request->strategyLevel) {
            @$query['StrategyLevel'] = $request->strategyLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SaveMaxAttemptsPerDayRequest
     *
     * @returns SaveMaxAttemptsPerDayResponse
     *
     * @param SaveMaxAttemptsPerDayRequest $request
     *
     * @return SaveMaxAttemptsPerDayResponse
     */
    public function saveMaxAttemptsPerDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMaxAttemptsPerDayWithOptions($request, $runtime);
    }

    /**
     * @param request - SearchTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchTaskResponse
     *
     * @param SearchTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SearchTaskResponse
     */
    public function searchTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SearchTaskRequest
     *
     * @returns SearchTaskResponse
     *
     * @param SearchTaskRequest $request
     *
     * @return SearchTaskResponse
     */
    public function searchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - StartJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartJobResponse
     *
     * @param StartJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StartJobResponse
     */
    public function startJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->jobJson) {
            @$query['JobJson'] = $request->jobJson;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - StartJobRequest
     *
     * @returns StartJobResponse
     *
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
     * @param request - SubmitBatchJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitBatchJobsResponse
     *
     * @param SubmitBatchJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitBatchJobsResponse
     */
    public function submitBatchJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SubmitBatchJobsRequest
     *
     * @returns SubmitBatchJobsResponse
     *
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
     * @param request - SubmitRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitRecordingResponse
     *
     * @param SubmitRecordingRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitRecordingResponse
     */
    public function submitRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mergedRecording) {
            @$query['MergedRecording'] = $request->mergedRecording;
        }

        if (null !== $request->resourceRecording) {
            @$query['ResourceRecording'] = $request->resourceRecording;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SubmitRecordingRequest
     *
     * @returns SubmitRecordingResponse
     *
     * @param SubmitRecordingRequest $request
     *
     * @return SubmitRecordingResponse
     */
    public function submitRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitRecordingWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitScriptReviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitScriptReviewResponse
     *
     * @param SubmitScriptReviewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitScriptReviewResponse
     */
    public function submitScriptReviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SubmitScriptReviewRequest
     *
     * @returns SubmitScriptReviewResponse
     *
     * @param SubmitScriptReviewRequest $request
     *
     * @return SubmitScriptReviewResponse
     */
    public function submitScriptReview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitScriptReviewWithOptions($request, $runtime);
    }

    /**
     * @param request - SuspendCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendCallResponse
     *
     * @param SuspendCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SuspendCallResponse
     */
    public function suspendCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumbers) {
            @$query['CalledNumbers'] = $request->calledNumbers;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SuspendCallRequest
     *
     * @returns SuspendCallResponse
     *
     * @param SuspendCallRequest $request
     *
     * @return SuspendCallResponse
     */
    public function suspendCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendCallWithOptions($request, $runtime);
    }

    /**
     * @param request - SuspendCallWithFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendCallWithFileResponse
     *
     * @param SuspendCallWithFileRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SuspendCallWithFileResponse
     */
    public function suspendCallWithFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SuspendCallWithFileRequest
     *
     * @returns SuspendCallWithFileResponse
     *
     * @param SuspendCallWithFileRequest $request
     *
     * @return SuspendCallWithFileResponse
     */
    public function suspendCallWithFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendCallWithFileWithOptions($request, $runtime);
    }

    /**
     * @param request - SuspendJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendJobsResponse
     *
     * @param SuspendJobsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SuspendJobsResponse
     */
    public function suspendJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobGroupId) {
            @$query['JobGroupId'] = $request->jobGroupId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobReferenceId) {
            @$query['JobReferenceId'] = $request->jobReferenceId;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - SuspendJobsRequest
     *
     * @returns SuspendJobsResponse
     *
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
     * @remarks
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @remarks
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * TaskPreparing.
     *
     * @param request - TaskPreparingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskPreparingResponse
     *
     * @param TaskPreparingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TaskPreparingResponse
     */
    public function taskPreparingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * TaskPreparing.
     *
     * @param request - TaskPreparingRequest
     *
     * @returns TaskPreparingResponse
     *
     * @param TaskPreparingRequest $request
     *
     * @return TaskPreparingResponse
     */
    public function taskPreparing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskPreparingWithOptions($request, $runtime);
    }

    /**
     * @param request - TerminateCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminateCallResponse
     *
     * @param TerminateCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TerminateCallResponse
     */
    public function terminateCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - TerminateCallRequest
     *
     * @returns TerminateCallResponse
     *
     * @param TerminateCallRequest $request
     *
     * @return TerminateCallResponse
     */
    public function terminateCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateCallWithOptions($request, $runtime);
    }

    /**
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - UploadScriptRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadScriptRecordingResponse
     *
     * @param UploadScriptRecordingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UploadScriptRecordingResponse
     */
    public function uploadScriptRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - UploadScriptRecordingRequest
     *
     * @returns UploadScriptRecordingResponse
     *
     * @param UploadScriptRecordingRequest $request
     *
     * @return UploadScriptRecordingResponse
     */
    public function uploadScriptRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadScriptRecordingWithOptions($request, $runtime);
    }

    /**
     * WithdrawScriptReview.
     *
     * @remarks
     *
     * @param request - WithdrawScriptReviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WithdrawScriptReviewResponse
     *
     * @param WithdrawScriptReviewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return WithdrawScriptReviewResponse
     */
    public function withdrawScriptReviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * WithdrawScriptReview.
     *
     * @remarks
     *
     * @param request - WithdrawScriptReviewRequest
     *
     * @returns WithdrawScriptReviewResponse
     *
     * @param WithdrawScriptReviewRequest $request
     *
     * @return WithdrawScriptReviewResponse
     */
    public function withdrawScriptReview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawScriptReviewWithOptions($request, $runtime);
    }
}
