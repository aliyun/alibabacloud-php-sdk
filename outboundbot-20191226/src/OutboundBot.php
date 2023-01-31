<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ApplyNumberDistrictInfoParsingResultRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ApplyNumberDistrictInfoParsingResultResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\AssignJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\AssignJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CancelJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CancelJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchJobsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchRepeatJobRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchRepeatJobResponse;
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
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DeleteAllNumberDistrictInfoResponse;
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
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetMaxAttemptsPerDayRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetMaxAttemptsPerDayResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetNumberDistrictInfoTemplateDownloadUrlResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetSummaryInfoRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetSummaryInfoResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetTaskByUuidRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetTaskByUuidResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetVersionResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ImportScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ImportScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\InflightTaskTimeoutRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\InflightTaskTimeoutResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAllTenantBindNumberBindingResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListChatbotInstancesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListChatbotInstancesResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDialogueFlowsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDialogueFlowsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDownloadTasksRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDownloadTasksResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListGlobalQuestionsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListGlobalQuestionsResponse;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListInstancesRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListInstancesResponse;
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
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBatchJobsRequest;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBatchJobsResponse;
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
     * @param ApplyNumberDistrictInfoParsingResultRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ApplyNumberDistrictInfoParsingResultResponse
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
            'action'      => 'ApplyNumberDistrictInfoParsingResult',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyNumberDistrictInfoParsingResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AssignJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AssignJobsResponse
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
            'action'      => 'AssignJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssignJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CancelJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelJobsResponse
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
            'action'      => 'CancelJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
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
            'action'      => 'ChangeResourceGroup',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateBatchJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateBatchJobsResponse
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
            'action'      => 'CreateBatchJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBatchJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateBatchRepeatJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateBatchRepeatJobResponse
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
            'action'      => 'CreateBatchRepeatJob',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBatchRepeatJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateDialogueFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDialogueFlowResponse
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
            'action'      => 'CreateDialogueFlow',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDialogueFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateDownloadUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDownloadUrlResponse
     */
    public function createDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDownloadUrl',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateGlobalQuestionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateGlobalQuestionResponse
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
            'action'      => 'CreateGlobalQuestion',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGlobalQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
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
            'action'      => 'CreateInstance',
            'version'     => '2019-12-26',
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
     * @param CreateInstanceBindNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateInstanceBindNumberResponse
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
            'action'      => 'CreateInstanceBindNumber',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceBindNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateIntentResponse
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
            'action'      => 'CreateIntent',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateJobDataParsingTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateJobDataParsingTaskResponse
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
            'action'      => 'CreateJobDataParsingTask',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobDataParsingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateJobGroupResponse
     */
    public function createJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
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
            'action'      => 'CreateJobGroup',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateJobGroupExportTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateJobGroupExportTaskResponse
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
            'action'      => 'CreateJobGroupExportTask',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobGroupExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateNumberDistrictInfoDownloadUrlRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateNumberDistrictInfoDownloadUrlResponse
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
            'action'      => 'CreateNumberDistrictInfoDownloadUrl',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNumberDistrictInfoDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateNumberDistrictInfoParsingTaskRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateNumberDistrictInfoParsingTaskResponse
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
            'action'      => 'CreateNumberDistrictInfoParsingTask',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNumberDistrictInfoParsingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateOutboundCallNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOutboundCallNumberResponse
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
            'action'      => 'CreateOutboundCallNumber',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOutboundCallNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateScriptResponse
     */
    public function createScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'CreateScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateScriptWaveformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateScriptWaveformResponse
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
            'action'      => 'CreateScriptWaveform',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScriptWaveformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
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
            'action'      => 'CreateTag',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateTaskExportTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTaskExportTaskResponse
     */
    public function createTaskExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskExportTask',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTaskExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAllNumberDistrictInfoResponse
     */
    public function deleteAllNumberDistrictInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DeleteAllNumberDistrictInfo',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAllNumberDistrictInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DeleteAllNumberDistrictInfoResponse
     */
    public function deleteAllNumberDistrictInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllNumberDistrictInfoWithOptions($runtime);
    }

    /**
     * @param DeleteContactBlockListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteContactBlockListResponse
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
            'action'      => 'DeleteContactBlockList',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactBlockListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteContactWhiteListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteContactWhiteListResponse
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
            'action'      => 'DeleteContactWhiteList',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteDialogueFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDialogueFlowResponse
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
            'action'      => 'DeleteDialogueFlow',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDialogueFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteGlobalQuestionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGlobalQuestionResponse
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
            'action'      => 'DeleteGlobalQuestion',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGlobalQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
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
            'action'      => 'DeleteInstance',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteIntentResponse
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
            'action'      => 'DeleteIntent',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteJobGroupResponse
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
            'action'      => 'DeleteJobGroup',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJobGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteOutboundCallNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteOutboundCallNumberResponse
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
            'action'      => 'DeleteOutboundCallNumber',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOutboundCallNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteScriptResponse
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
            'action'      => 'DeleteScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteScriptRecordingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteScriptRecordingResponse
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
            'action'      => 'DeleteScriptRecording',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScriptRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteScriptWaveformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteScriptWaveformResponse
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
            'action'      => 'DeleteScriptWaveform',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScriptWaveformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDialogueNodeStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDialogueNodeStatisticsResponse
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
            'action'      => 'DescribeDialogueNodeStatistics',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDialogueNodeStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDsReportsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDsReportsResponse
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
            'action'      => 'DescribeDsReports',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDsReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeGlobalQuestionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGlobalQuestionResponse
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
            'action'      => 'DescribeGlobalQuestion',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeGroupExecutingInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeGroupExecutingInfoResponse
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
            'action'      => 'DescribeGroupExecutingInfo',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupExecutingInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
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
            'action'      => 'DescribeInstance',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeIntentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeIntentResponse
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
            'action'      => 'DescribeIntent',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeIntentStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeIntentStatisticsResponse
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
            'action'      => 'DescribeIntentStatistics',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIntentStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeJobResponse
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
            'action'      => 'DescribeJob',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeJobDataParsingTaskProgressRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeJobDataParsingTaskProgressResponse
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
            'action'      => 'DescribeJobDataParsingTaskProgress',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobDataParsingTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeJobGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeJobGroupResponse
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
            'action'      => 'DescribeJobGroup',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeJobGroupExportTaskProgressRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeJobGroupExportTaskProgressResponse
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
            'action'      => 'DescribeJobGroupExportTaskProgress',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobGroupExportTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeNumberDistrictInfoStatusResponse
     */
    public function describeNumberDistrictInfoStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeNumberDistrictInfoStatus',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNumberDistrictInfoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeNumberDistrictInfoStatusResponse
     */
    public function describeNumberDistrictInfoStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNumberDistrictInfoStatusWithOptions($runtime);
    }

    /**
     * @param DescribeScriptRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeScriptResponse
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
            'action'      => 'DescribeScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeScriptVoiceConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScriptVoiceConfigResponse
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
            'action'      => 'DescribeScriptVoiceConfig',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScriptVoiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeTTSConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTTSConfigResponse
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
            'action'      => 'DescribeTTSConfig',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTTSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeTTSDemoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTTSDemoResponse
     */
    public function describeTTSDemoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'DescribeTTSDemo',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTTSDemoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeTagHitsSummaryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeTagHitsSummaryResponse
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
            'action'      => 'DescribeTagHitsSummary',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagHitsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeTenantBindNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTenantBindNumberResponse
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
            'action'      => 'DescribeTenantBindNumber',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantBindNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DialogueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DialogueResponse
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
            'action'      => 'Dialogue',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DialogueResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DismissNumberDistrictInfoParsingResultRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DismissNumberDistrictInfoParsingResultResponse
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
            'action'      => 'DismissNumberDistrictInfoParsingResult',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DismissNumberDistrictInfoParsingResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DownloadRecordingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DownloadRecordingResponse
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
            'action'      => 'DownloadRecording',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DownloadScriptRecordingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DownloadScriptRecordingResponse
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
            'action'      => 'DownloadScriptRecording',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadScriptRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DuplicateScriptRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DuplicateScriptResponse
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
            'action'      => 'DuplicateScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DuplicateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ExportScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExportScriptResponse
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
            'action'      => 'ExportScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GenerateUploadUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateUploadUrlResponse
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
            'action'      => 'GenerateUploadUrl',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetAfterAnswerDelayPlaybackRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAfterAnswerDelayPlaybackResponse
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
            'action'      => 'GetAfterAnswerDelayPlayback',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAfterAnswerDelayPlaybackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetAsrServerInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAsrServerInfoResponse
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
            'action'      => 'GetAsrServerInfo',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsrServerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetBaseStrategyPeriodRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBaseStrategyPeriodResponse
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
            'action'      => 'GetBaseStrategyPeriod',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBaseStrategyPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return GetConcurrentConversationQuotaResponse
     */
    public function getConcurrentConversationQuotaWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetConcurrentConversationQuota',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConcurrentConversationQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetConcurrentConversationQuotaResponse
     */
    public function getConcurrentConversationQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConcurrentConversationQuotaWithOptions($runtime);
    }

    /**
     * @param GetContactBlockListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetContactBlockListResponse
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
            'action'      => 'GetContactBlockList',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetContactBlockListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetContactWhiteListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetContactWhiteListResponse
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
            'action'      => 'GetContactWhiteList',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetContactWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetCurrentConcurrencyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetCurrentConcurrencyResponse
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
            'action'      => 'GetCurrentConcurrency',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCurrentConcurrencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetEffectiveDaysRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetEffectiveDaysResponse
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
            'action'      => 'GetEffectiveDays',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEffectiveDaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetEmptyNumberNoMoreCallsInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetEmptyNumberNoMoreCallsInfoResponse
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
            'action'      => 'GetEmptyNumberNoMoreCallsInfo',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEmptyNumberNoMoreCallsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetMaxAttemptsPerDayRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMaxAttemptsPerDayResponse
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
            'action'      => 'GetMaxAttemptsPerDay',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMaxAttemptsPerDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return GetNumberDistrictInfoTemplateDownloadUrlResponse
     */
    public function getNumberDistrictInfoTemplateDownloadUrlWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetNumberDistrictInfoTemplateDownloadUrl',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNumberDistrictInfoTemplateDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetNumberDistrictInfoTemplateDownloadUrlResponse
     */
    public function getNumberDistrictInfoTemplateDownloadUrl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumberDistrictInfoTemplateDownloadUrlWithOptions($runtime);
    }

    /**
     * @param GetSummaryInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSummaryInfoResponse
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
            'action'      => 'GetSummaryInfo',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTaskByUuidRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskByUuidResponse
     */
    public function getTaskByUuidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskByUuid',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskByUuidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return GetVersionResponse
     */
    public function getVersionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetVersion',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetVersionResponse
     */
    public function getVersion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVersionWithOptions($runtime);
    }

    /**
     * @param ImportScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImportScriptResponse
     */
    public function importScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->signatureUrl)) {
            $query['SignatureUrl'] = $request->signatureUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param InflightTaskTimeoutRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return InflightTaskTimeoutResponse
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
            'action'      => 'InflightTaskTimeout',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InflightTaskTimeoutResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return ListAllTenantBindNumberBindingResponse
     */
    public function listAllTenantBindNumberBindingWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListAllTenantBindNumberBinding',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllTenantBindNumberBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListAllTenantBindNumberBindingResponse
     */
    public function listAllTenantBindNumberBinding()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllTenantBindNumberBindingWithOptions($runtime);
    }

    /**
     * @param ListChatbotInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListChatbotInstancesResponse
     */
    public function listChatbotInstancesWithOptions($request, $runtime)
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
            'action'      => 'ListChatbotInstances',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListChatbotInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListDialogueFlowsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDialogueFlowsResponse
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
            'action'      => 'ListDialogueFlows',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDialogueFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListDownloadTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDownloadTasksResponse
     */
    public function listDownloadTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDownloadTasks',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDownloadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListGlobalQuestionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListGlobalQuestionsResponse
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
            'action'      => 'ListGlobalQuestions',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGlobalQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListInstances',
            'version'     => '2019-12-26',
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
     * @param ListIntentsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListIntentsResponse
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
            'action'      => 'ListIntents',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListJobGroupsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListJobGroupsResponse
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
            'action'      => 'ListJobGroups',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListJobGroupsAsyncRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListJobGroupsAsyncResponse
     */
    public function listJobGroupsAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobGroupsAsync',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobGroupsAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
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
            'action'      => 'ListJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListJobsByGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListJobsByGroupResponse
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
            'action'      => 'ListJobsByGroup',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobsByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListOutboundCallNumbersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOutboundCallNumbersResponse
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
            'action'      => 'ListOutboundCallNumbers',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOutboundCallNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListResourceTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListResourceTagsResponse
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
            'action'      => 'ListResourceTags',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListSchedulerInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListSchedulerInstancesResponse
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
            'action'      => 'ListSchedulerInstances',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSchedulerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListScriptPublishHistoriesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListScriptPublishHistoriesResponse
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
            'action'      => 'ListScriptPublishHistories',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScriptPublishHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListScriptRecordingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListScriptRecordingResponse
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
            'action'      => 'ListScriptRecording',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScriptRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListScriptVoiceConfigsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListScriptVoiceConfigsResponse
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
            'action'      => 'ListScriptVoiceConfigs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScriptVoiceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListScriptsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListScriptsResponse
     */
    public function listScriptsWithOptions($request, $runtime)
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
            'action'      => 'ListScripts',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
            'action'      => 'ListTagResources',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
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
            'action'      => 'ListTags',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyBatchJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyBatchJobsResponse
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
            'action'      => 'ModifyBatchJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBatchJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDialogueFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDialogueFlowResponse
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
            'action'      => 'ModifyDialogueFlow',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDialogueFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyEmptyNumberNoMoreCallsInfoRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyEmptyNumberNoMoreCallsInfoResponse
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
            'action'      => 'ModifyEmptyNumberNoMoreCallsInfo',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEmptyNumberNoMoreCallsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyGlobalQuestionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyGlobalQuestionResponse
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
            'action'      => 'ModifyGlobalQuestion',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
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
            'action'      => 'ModifyInstance',
            'version'     => '2019-12-26',
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
     * @param ModifyIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyIntentResponse
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
            'action'      => 'ModifyIntent',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyJobGroupResponse
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
            'action'      => 'ModifyJobGroup',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyJobGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyOutboundCallNumberRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyOutboundCallNumberResponse
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
            'action'      => 'ModifyOutboundCallNumber',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOutboundCallNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyScriptResponse
     */
    public function modifyScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ModifyScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyScriptVoiceConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyScriptVoiceConfigResponse
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
            'action'      => 'ModifyScriptVoiceConfig',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScriptVoiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyTTSConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyTTSConfigResponse
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
            'action'      => 'ModifyTTSConfig',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTTSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyTagGroupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyTagGroupsResponse
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
            'action'      => 'ModifyTagGroups',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTagGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PublishScriptRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PublishScriptResponse
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
            'action'      => 'PublishScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PublishScriptForDebugRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PublishScriptForDebugResponse
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
            'action'      => 'PublishScriptForDebug',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishScriptForDebugResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryJobsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryJobsResponse
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
            'action'      => 'QueryJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryJobsWithResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryJobsWithResultResponse
     */
    public function queryJobsWithResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->taskStatusFilter)) {
            $query['TaskStatusFilter'] = $request->taskStatusFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryJobsWithResult',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryJobsWithResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryScriptWaveformsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryScriptWaveformsResponse
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
            'action'      => 'QueryScriptWaveforms',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryScriptWaveformsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryScriptsByStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryScriptsByStatusResponse
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
            'action'      => 'QueryScriptsByStatus',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryScriptsByStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecordFailureRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecordFailureResponse
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
            'action'      => 'RecordFailure',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecordFailureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ResumeJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResumeJobsResponse
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
            'action'      => 'ResumeJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RollbackScriptRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RollbackScriptResponse
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
            'action'      => 'RollbackScript',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveAfterAnswerDelayPlaybackRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SaveAfterAnswerDelayPlaybackResponse
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
            'action'      => 'SaveAfterAnswerDelayPlayback',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveAfterAnswerDelayPlaybackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveBaseStrategyPeriodRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SaveBaseStrategyPeriodResponse
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
            'action'      => 'SaveBaseStrategyPeriod',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveBaseStrategyPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveContactBlockListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SaveContactBlockListResponse
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
            'action'      => 'SaveContactBlockList',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveContactBlockListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveContactWhiteListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SaveContactWhiteListResponse
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
            'action'      => 'SaveContactWhiteList',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveContactWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveEffectiveDaysRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveEffectiveDaysResponse
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
            'action'      => 'SaveEffectiveDays',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveEffectiveDaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveMaxAttemptsPerDayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SaveMaxAttemptsPerDayResponse
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
            'action'      => 'SaveMaxAttemptsPerDay',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveMaxAttemptsPerDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SearchTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SearchTaskResponse
     */
    public function searchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTask',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StartJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StartJobResponse
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
            'action'      => 'StartJob',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'SubmitBatchJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitBatchJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitRecordingRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitRecordingResponse
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
            'action'      => 'SubmitRecording',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SubmitScriptReviewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitScriptReviewResponse
     */
    public function submitScriptReviewWithOptions($request, $runtime)
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
            'action'      => 'SubmitScriptReview',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitScriptReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SuspendCallRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SuspendCallResponse
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
            'action'      => 'SuspendCall',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SuspendCallWithFileRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SuspendCallWithFileResponse
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
            'action'      => 'SuspendCallWithFile',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendCallWithFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SuspendJobsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SuspendJobsResponse
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
            'action'      => 'SuspendJobs',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * **
     *   *
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
            'action'      => 'TagResources',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **
     *   *
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
     * @param TaskPreparingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TaskPreparingResponse
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
            'action'      => 'TaskPreparing',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TaskPreparingResponse::fromMap($this->callApi($params, $req, $runtime));
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

    /**
     * @param TerminateCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TerminateCallResponse
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
            'action'      => 'TerminateCall',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
            'action'      => 'UntagResources',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UploadScriptRecordingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UploadScriptRecordingResponse
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
            'action'      => 'UploadScriptRecording',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadScriptRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ****
     *   *
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
            'action'      => 'WithdrawScriptReview',
            'version'     => '2019-12-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WithdrawScriptReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   *
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
