<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Rtc\V20180111\Models\AddRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\AddRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppLayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppLayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppLayoutShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppRecordTemplateShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppStreamingOutTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppStreamingOutTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppStreamingOutTemplateShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateCloudNotePhrasesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateCloudNotePhrasesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateCloudNotePhrasesShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateEventSubscribeRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateEventSubscribeResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppAgentTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppAgentTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppLayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppLayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppLayoutShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppRecordTemplateShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppStreamingOutTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppStreamingOutTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppStreamingOutTemplateShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteCloudNotePhrasesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteCloudNotePhrasesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteCloudNotePhrasesShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteEventSubscribeRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteEventSubscribeResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAllCallbackResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentFunctionStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentFunctionStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppCallbackSecretKeyRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppCallbackSecretKeyResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppCallStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppCallStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppKeyRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppKeyResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppLayoutsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppLayoutsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppLayoutsShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppLiveStreamStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppLiveStreamStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordingFilesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordingFilesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordingFilesShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordTemplatesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordTemplatesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordTemplatesShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppStreamingOutTemplatesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppStreamingOutTemplatesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppStreamingOutTemplatesShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallbacksRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallbacksResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAllUsersRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAllUsersResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAreaDistributionStatDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAreaDistributionStatDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelDistributionStatDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelDistributionStatDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelOverallDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelOverallDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelParticipantsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelParticipantsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelTopPubUserListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelTopPubUserListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserMetricsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserMetricsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUsersRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUsersResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotePhrasesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotePhrasesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotePhrasesShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotesShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudRecordStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudRecordStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointEventListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointEventListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointMetricDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointMetricDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisFactorDistributionStatRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisFactorDistributionStatResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisOverallDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisOverallDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribePubUserListBySubUserRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribePubUserListBySubUserResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQoeMetricDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQoeMetricDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityAreaDistributionStatDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityAreaDistributionStatDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityDistributionStatDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityDistributionStatDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityOsSdkVersionDistributionStatDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityOsSdkVersionDistributionStatDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityOverallDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityOverallDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeStreamingOutStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeStreamingOutStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeSystemLayoutListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeSystemLayoutListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageAreaDistributionStatDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageAreaDistributionStatDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageDistributionStatDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageDistributionStatDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageOsSdkVersionDistributionStatDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageOsSdkVersionDistributionStatDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageOverallDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageOverallDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DisableAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DisableAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\EnableAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\EnableAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\GetAgentRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\GetAgentResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\GetMPUTaskStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\GetMPUTaskStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentFunctionStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentFunctionStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppCallbackStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppCallbackStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppLayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppLayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppLayoutShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppLiveStreamStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppLiveStreamStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppRecordStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppRecordStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppRecordTemplateShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppStreamingOutTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppStreamingOutTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppStreamingOutTemplateShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCallbackMetaRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCallbackMetaResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCallbackMetaShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCloudNotePhrasesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCloudNotePhrasesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCloudNotePhrasesShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\NotifyAgentRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\NotifyAgentResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveUsersRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveUsersResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCategoryCallbackRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCategoryCallbackResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCategoryCallbackShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopAgentRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopAgentResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopCategoryCallbackRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopCategoryCallbackResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopCategoryCallbackShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopCloudNoteRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopCloudNoteResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopCloudRecordRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopCloudRecordResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopMPUTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopMPUTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopStreamingOutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopStreamingOutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateAgentResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateAgentShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordShrinkRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Rtc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rtc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AddRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRecordTemplateResponse
     *
     * @param AddRecordTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddRecordTemplateResponse
     */
    public function addRecordTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backgroundColor) {
            @$query['BackgroundColor'] = $request->backgroundColor;
        }

        if (null !== $request->backgrounds) {
            @$query['Backgrounds'] = $request->backgrounds;
        }

        if (null !== $request->clockWidgets) {
            @$query['ClockWidgets'] = $request->clockWidgets;
        }

        if (null !== $request->delayStopTime) {
            @$query['DelayStopTime'] = $request->delayStopTime;
        }

        if (null !== $request->enableM3u8DateTime) {
            @$query['EnableM3u8DateTime'] = $request->enableM3u8DateTime;
        }

        if (null !== $request->fileSplitInterval) {
            @$query['FileSplitInterval'] = $request->fileSplitInterval;
        }

        if (null !== $request->formats) {
            @$query['Formats'] = $request->formats;
        }

        if (null !== $request->httpCallbackUrl) {
            @$query['HttpCallbackUrl'] = $request->httpCallbackUrl;
        }

        if (null !== $request->layoutIds) {
            @$query['LayoutIds'] = $request->layoutIds;
        }

        if (null !== $request->mediaEncode) {
            @$query['MediaEncode'] = $request->mediaEncode;
        }

        if (null !== $request->mnsQueue) {
            @$query['MnsQueue'] = $request->mnsQueue;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        if (null !== $request->ossFilePrefix) {
            @$query['OssFilePrefix'] = $request->ossFilePrefix;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->taskProfile) {
            @$query['TaskProfile'] = $request->taskProfile;
        }

        if (null !== $request->watermarks) {
            @$query['Watermarks'] = $request->watermarks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddRecordTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddRecordTemplateRequest
     *
     * @returns AddRecordTemplateResponse
     *
     * @param AddRecordTemplateRequest $request
     *
     * @return AddRecordTemplateResponse
     */
    public function addRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * 创建应用智能体模版.
     *
     * @param tmpReq - CreateAppAgentTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppAgentTemplateResponse
     *
     * @param CreateAppAgentTemplateRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAppAgentTemplateResponse
     */
    public function createAppAgentTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppAgentTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->asrConfig) {
            $request->asrConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->asrConfig, 'AsrConfig', 'json');
        }

        if (null !== $tmpReq->llmConfig) {
            $request->llmConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->llmConfig, 'LlmConfig', 'json');
        }

        if (null !== $tmpReq->ttsConfig) {
            $request->ttsConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ttsConfig, 'TtsConfig', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->asrConfigShrink) {
            @$query['AsrConfig'] = $request->asrConfigShrink;
        }

        if (null !== $request->chatMode) {
            @$query['ChatMode'] = $request->chatMode;
        }

        if (null !== $request->greeting) {
            @$query['Greeting'] = $request->greeting;
        }

        if (null !== $request->interruptMode) {
            @$query['InterruptMode'] = $request->interruptMode;
        }

        if (null !== $request->llmConfigShrink) {
            @$query['LlmConfig'] = $request->llmConfigShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ttsConfigShrink) {
            @$query['TtsConfig'] = $request->ttsConfigShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppAgentTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppAgentTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用智能体模版.
     *
     * @param request - CreateAppAgentTemplateRequest
     *
     * @returns CreateAppAgentTemplateResponse
     *
     * @param CreateAppAgentTemplateRequest $request
     *
     * @return CreateAppAgentTemplateResponse
     */
    public function createAppAgentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppAgentTemplateWithOptions($request, $runtime);
    }

    /**
     * 新增app自定义布局
     *
     * @param tmpReq - CreateAppLayoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppLayoutResponse
     *
     * @param CreateAppLayoutRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAppLayoutResponse
     */
    public function createAppLayoutWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppLayoutShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->layout) {
            $request->layoutShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->layout, 'Layout', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->layoutShrink) {
            @$query['Layout'] = $request->layoutShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppLayout',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增app自定义布局
     *
     * @param request - CreateAppLayoutRequest
     *
     * @returns CreateAppLayoutResponse
     *
     * @param CreateAppLayoutRequest $request
     *
     * @return CreateAppLayoutResponse
     */
    public function createAppLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppLayoutWithOptions($request, $runtime);
    }

    /**
     * 增加应用录制模版.
     *
     * @param tmpReq - CreateAppRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppRecordTemplateResponse
     *
     * @param CreateAppRecordTemplateRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAppRecordTemplateResponse
     */
    public function createAppRecordTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppRecordTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->recordTemplate) {
            $request->recordTemplateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recordTemplate, 'RecordTemplate', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->recordTemplateShrink) {
            @$query['RecordTemplate'] = $request->recordTemplateShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppRecordTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增加应用录制模版.
     *
     * @param request - CreateAppRecordTemplateRequest
     *
     * @returns CreateAppRecordTemplateResponse
     *
     * @param CreateAppRecordTemplateRequest $request
     *
     * @return CreateAppRecordTemplateResponse
     */
    public function createAppRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * 创建应用推流模版.
     *
     * @param tmpReq - CreateAppStreamingOutTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppStreamingOutTemplateResponse
     *
     * @param CreateAppStreamingOutTemplateRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateAppStreamingOutTemplateResponse
     */
    public function createAppStreamingOutTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppStreamingOutTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->streamingOutTemplate) {
            $request->streamingOutTemplateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamingOutTemplate, 'StreamingOutTemplate', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->streamingOutTemplateShrink) {
            @$query['StreamingOutTemplate'] = $request->streamingOutTemplateShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppStreamingOutTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppStreamingOutTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用推流模版.
     *
     * @param request - CreateAppStreamingOutTemplateRequest
     *
     * @returns CreateAppStreamingOutTemplateResponse
     *
     * @param CreateAppStreamingOutTemplateRequest $request
     *
     * @return CreateAppStreamingOutTemplateResponse
     */
    public function createAppStreamingOutTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppStreamingOutTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateAutoLiveStreamRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoLiveStreamRuleResponse
     *
     * @param CreateAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAutoLiveStreamRuleResponse
     */
    public function createAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->callBack) {
            @$query['CallBack'] = $request->callBack;
        }

        if (null !== $request->channelIdPrefixes) {
            @$query['ChannelIdPrefixes'] = $request->channelIdPrefixes;
        }

        if (null !== $request->channelIds) {
            @$query['ChannelIds'] = $request->channelIds;
        }

        if (null !== $request->mediaEncode) {
            @$query['MediaEncode'] = $request->mediaEncode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playDomain) {
            @$query['PlayDomain'] = $request->playDomain;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAutoLiveStreamRule',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAutoLiveStreamRuleRequest
     *
     * @returns CreateAutoLiveStreamRuleResponse
     *
     * @param CreateAutoLiveStreamRuleRequest $request
     *
     * @return CreateAutoLiveStreamRuleResponse
     */
    public function createAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * 增加纪要热词表.
     *
     * @param tmpReq - CreateCloudNotePhrasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudNotePhrasesResponse
     *
     * @param CreateCloudNotePhrasesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCloudNotePhrasesResponse
     */
    public function createCloudNotePhrasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCloudNotePhrasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->phrase) {
            $request->phraseShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->phrase, 'Phrase', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->phraseShrink) {
            @$query['Phrase'] = $request->phraseShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudNotePhrases',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudNotePhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增加纪要热词表.
     *
     * @param request - CreateCloudNotePhrasesRequest
     *
     * @returns CreateCloudNotePhrasesResponse
     *
     * @param CreateCloudNotePhrasesRequest $request
     *
     * @return CreateCloudNotePhrasesResponse
     */
    public function createCloudNotePhrases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudNotePhrasesWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateEventSubscribeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEventSubscribeResponse
     *
     * @param CreateEventSubscribeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEventSubscribeResponse
     */
    public function createEventSubscribeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->events) {
            @$query['Events'] = $request->events;
        }

        if (null !== $request->needCallbackAuth) {
            @$query['NeedCallbackAuth'] = $request->needCallbackAuth;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->users) {
            @$query['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEventSubscribe',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEventSubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateEventSubscribeRequest
     *
     * @returns CreateEventSubscribeResponse
     *
     * @param CreateEventSubscribeRequest $request
     *
     * @return CreateEventSubscribeResponse
     */
    public function createEventSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMPULayoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMPULayoutResponse
     *
     * @param CreateMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMPULayoutResponse
     */
    public function createMPULayoutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->audioMixCount) {
            @$query['AudioMixCount'] = $request->audioMixCount;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->panes) {
            @$query['Panes'] = $request->panes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMPULayout',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMPULayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMPULayoutRequest
     *
     * @returns CreateMPULayoutResponse
     *
     * @param CreateMPULayoutRequest $request
     *
     * @return CreateMPULayoutResponse
     */
    public function createMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMPULayoutWithOptions($request, $runtime);
    }

    /**
     * 删除应用智能体模版.
     *
     * @param request - DeleteAppAgentTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppAgentTemplateResponse
     *
     * @param DeleteAppAgentTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAppAgentTemplateResponse
     */
    public function deleteAppAgentTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppAgentTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppAgentTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用智能体模版.
     *
     * @param request - DeleteAppAgentTemplateRequest
     *
     * @returns DeleteAppAgentTemplateResponse
     *
     * @param DeleteAppAgentTemplateRequest $request
     *
     * @return DeleteAppAgentTemplateResponse
     */
    public function deleteAppAgentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppAgentTemplateWithOptions($request, $runtime);
    }

    /**
     * 删除app自定义布局
     *
     * @param tmpReq - DeleteAppLayoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppLayoutResponse
     *
     * @param DeleteAppLayoutRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAppLayoutResponse
     */
    public function deleteAppLayoutWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAppLayoutShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->layout) {
            $request->layoutShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->layout, 'Layout', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->layoutShrink) {
            @$query['Layout'] = $request->layoutShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppLayout',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除app自定义布局
     *
     * @param request - DeleteAppLayoutRequest
     *
     * @returns DeleteAppLayoutResponse
     *
     * @param DeleteAppLayoutRequest $request
     *
     * @return DeleteAppLayoutResponse
     */
    public function deleteAppLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppLayoutWithOptions($request, $runtime);
    }

    /**
     * 删除应用录制模版.
     *
     * @param tmpReq - DeleteAppRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppRecordTemplateResponse
     *
     * @param DeleteAppRecordTemplateRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAppRecordTemplateResponse
     */
    public function deleteAppRecordTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAppRecordTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->template) {
            $request->templateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->templateShrink) {
            @$query['Template'] = $request->templateShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppRecordTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用录制模版.
     *
     * @param request - DeleteAppRecordTemplateRequest
     *
     * @returns DeleteAppRecordTemplateResponse
     *
     * @param DeleteAppRecordTemplateRequest $request
     *
     * @return DeleteAppRecordTemplateResponse
     */
    public function deleteAppRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * 删除应用推流模版.
     *
     * @param tmpReq - DeleteAppStreamingOutTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppStreamingOutTemplateResponse
     *
     * @param DeleteAppStreamingOutTemplateRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteAppStreamingOutTemplateResponse
     */
    public function deleteAppStreamingOutTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAppStreamingOutTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->streamingOutTemplate) {
            $request->streamingOutTemplateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamingOutTemplate, 'StreamingOutTemplate', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->streamingOutTemplateShrink) {
            @$query['StreamingOutTemplate'] = $request->streamingOutTemplateShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppStreamingOutTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppStreamingOutTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用推流模版.
     *
     * @param request - DeleteAppStreamingOutTemplateRequest
     *
     * @returns DeleteAppStreamingOutTemplateResponse
     *
     * @param DeleteAppStreamingOutTemplateRequest $request
     *
     * @return DeleteAppStreamingOutTemplateResponse
     */
    public function deleteAppStreamingOutTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppStreamingOutTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteAutoLiveStreamRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoLiveStreamRuleResponse
     *
     * @param DeleteAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAutoLiveStreamRuleResponse
     */
    public function deleteAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAutoLiveStreamRule',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAutoLiveStreamRuleRequest
     *
     * @returns DeleteAutoLiveStreamRuleResponse
     *
     * @param DeleteAutoLiveStreamRuleRequest $request
     *
     * @return DeleteAutoLiveStreamRuleResponse
     */
    public function deleteAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChannelResponse
     *
     * @param DeleteChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteChannelResponse
     */
    public function deleteChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChannel',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteChannelRequest
     *
     * @returns DeleteChannelResponse
     *
     * @param DeleteChannelRequest $request
     *
     * @return DeleteChannelResponse
     */
    public function deleteChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChannelWithOptions($request, $runtime);
    }

    /**
     * 删除纪要热词表.
     *
     * @param tmpReq - DeleteCloudNotePhrasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudNotePhrasesResponse
     *
     * @param DeleteCloudNotePhrasesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteCloudNotePhrasesResponse
     */
    public function deleteCloudNotePhrasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteCloudNotePhrasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->phrase) {
            $request->phraseShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->phrase, 'Phrase', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->phraseShrink) {
            @$query['Phrase'] = $request->phraseShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudNotePhrases',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudNotePhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除纪要热词表.
     *
     * @param request - DeleteCloudNotePhrasesRequest
     *
     * @returns DeleteCloudNotePhrasesResponse
     *
     * @param DeleteCloudNotePhrasesRequest $request
     *
     * @return DeleteCloudNotePhrasesResponse
     */
    public function deleteCloudNotePhrases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudNotePhrasesWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteEventSubscribeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventSubscribeResponse
     *
     * @param DeleteEventSubscribeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEventSubscribeResponse
     */
    public function deleteEventSubscribeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->subscribeId) {
            @$query['SubscribeId'] = $request->subscribeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEventSubscribe',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventSubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteEventSubscribeRequest
     *
     * @returns DeleteEventSubscribeResponse
     *
     * @param DeleteEventSubscribeRequest $request
     *
     * @return DeleteEventSubscribeResponse
     */
    public function deleteEventSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMPULayoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMPULayoutResponse
     *
     * @param DeleteMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMPULayoutResponse
     */
    public function deleteMPULayoutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->layoutId) {
            @$query['LayoutId'] = $request->layoutId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMPULayout',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMPULayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMPULayoutRequest
     *
     * @returns DeleteMPULayoutResponse
     *
     * @param DeleteMPULayoutRequest $request
     *
     * @return DeleteMPULayoutResponse
     */
    public function deleteMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRecordTemplateResponse
     *
     * @param DeleteRecordTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteRecordTemplateResponse
     */
    public function deleteRecordTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRecordTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteRecordTemplateRequest
     *
     * @returns DeleteRecordTemplateResponse
     *
     * @param DeleteRecordTemplateRequest $request
     *
     * @return DeleteRecordTemplateResponse
     */
    public function deleteRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * 列出系统支持的事件回调.
     *
     * @param request - DescribeAllCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAllCallbackResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAllCallbackResponse
     */
    public function describeAllCallbackWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeAllCallback',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAllCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出系统支持的事件回调.
     *
     * @returns DescribeAllCallbackResponse
     *
     * @return DescribeAllCallbackResponse
     */
    public function describeAllCallback()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllCallbackWithOptions($runtime);
    }

    /**
     * 查询应用智能体开关.
     *
     * @param request - DescribeAppAgentFunctionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppAgentFunctionStatusResponse
     *
     * @param DescribeAppAgentFunctionStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAppAgentFunctionStatusResponse
     */
    public function describeAppAgentFunctionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppAgentFunctionStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppAgentFunctionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用智能体开关.
     *
     * @param request - DescribeAppAgentFunctionStatusRequest
     *
     * @returns DescribeAppAgentFunctionStatusResponse
     *
     * @param DescribeAppAgentFunctionStatusRequest $request
     *
     * @return DescribeAppAgentFunctionStatusResponse
     */
    public function describeAppAgentFunctionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppAgentFunctionStatusWithOptions($request, $runtime);
    }

    /**
     * 应用智能体模版列表.
     *
     * @param request - DescribeAppAgentTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppAgentTemplatesResponse
     *
     * @param DescribeAppAgentTemplatesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAppAgentTemplatesResponse
     */
    public function describeAppAgentTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppAgentTemplates',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppAgentTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用智能体模版列表.
     *
     * @param request - DescribeAppAgentTemplatesRequest
     *
     * @returns DescribeAppAgentTemplatesResponse
     *
     * @param DescribeAppAgentTemplatesRequest $request
     *
     * @return DescribeAppAgentTemplatesResponse
     */
    public function describeAppAgentTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppAgentTemplatesWithOptions($request, $runtime);
    }

    /**
     * 查看app回调开关.
     *
     * @param request - DescribeAppCallStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppCallStatusResponse
     *
     * @param DescribeAppCallStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAppCallStatusResponse
     */
    public function describeAppCallStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppCallStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppCallStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看app回调开关.
     *
     * @param request - DescribeAppCallStatusRequest
     *
     * @returns DescribeAppCallStatusResponse
     *
     * @param DescribeAppCallStatusRequest $request
     *
     * @return DescribeAppCallStatusResponse
     */
    public function describeAppCallStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppCallStatusWithOptions($request, $runtime);
    }

    /**
     * 获取app回调密钥.
     *
     * @param request - DescribeAppCallbackSecretKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppCallbackSecretKeyResponse
     *
     * @param DescribeAppCallbackSecretKeyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAppCallbackSecretKeyResponse
     */
    public function describeAppCallbackSecretKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppCallbackSecretKey',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppCallbackSecretKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取app回调密钥.
     *
     * @param request - DescribeAppCallbackSecretKeyRequest
     *
     * @returns DescribeAppCallbackSecretKeyResponse
     *
     * @param DescribeAppCallbackSecretKeyRequest $request
     *
     * @return DescribeAppCallbackSecretKeyResponse
     */
    public function describeAppCallbackSecretKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppCallbackSecretKeyWithOptions($request, $runtime);
    }

    /**
     * 查看AppKey.
     *
     * @param request - DescribeAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppKeyResponse
     *
     * @param DescribeAppKeyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAppKeyResponse
     */
    public function describeAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppKey',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看AppKey.
     *
     * @param request - DescribeAppKeyRequest
     *
     * @returns DescribeAppKeyResponse
     *
     * @param DescribeAppKeyRequest $request
     *
     * @return DescribeAppKeyResponse
     */
    public function describeAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppKeyWithOptions($request, $runtime);
    }

    /**
     * 查询app自定义布局
     *
     * @param tmpReq - DescribeAppLayoutsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppLayoutsResponse
     *
     * @param DescribeAppLayoutsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAppLayoutsResponse
     */
    public function describeAppLayoutsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeAppLayoutsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->condition) {
            $request->conditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppLayouts',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppLayoutsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询app自定义布局
     *
     * @param request - DescribeAppLayoutsRequest
     *
     * @returns DescribeAppLayoutsResponse
     *
     * @param DescribeAppLayoutsRequest $request
     *
     * @return DescribeAppLayoutsResponse
     */
    public function describeAppLayouts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppLayoutsWithOptions($request, $runtime);
    }

    /**
     * 查看应用旁路开关.
     *
     * @param request - DescribeAppLiveStreamStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppLiveStreamStatusResponse
     *
     * @param DescribeAppLiveStreamStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAppLiveStreamStatusResponse
     */
    public function describeAppLiveStreamStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppLiveStreamStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppLiveStreamStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看应用旁路开关.
     *
     * @param request - DescribeAppLiveStreamStatusRequest
     *
     * @returns DescribeAppLiveStreamStatusResponse
     *
     * @param DescribeAppLiveStreamStatusRequest $request
     *
     * @return DescribeAppLiveStreamStatusResponse
     */
    public function describeAppLiveStreamStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppLiveStreamStatusWithOptions($request, $runtime);
    }

    /**
     * 查询应用录制开关.
     *
     * @param request - DescribeAppRecordStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppRecordStatusResponse
     *
     * @param DescribeAppRecordStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAppRecordStatusResponse
     */
    public function describeAppRecordStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppRecordStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用录制开关.
     *
     * @param request - DescribeAppRecordStatusRequest
     *
     * @returns DescribeAppRecordStatusResponse
     *
     * @param DescribeAppRecordStatusRequest $request
     *
     * @return DescribeAppRecordStatusResponse
     */
    public function describeAppRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppRecordStatusWithOptions($request, $runtime);
    }

    /**
     * 应用录制模版列表.
     *
     * @param tmpReq - DescribeAppRecordTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppRecordTemplatesResponse
     *
     * @param DescribeAppRecordTemplatesRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAppRecordTemplatesResponse
     */
    public function describeAppRecordTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeAppRecordTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->condition) {
            $request->conditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppRecordTemplates',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppRecordTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用录制模版列表.
     *
     * @param request - DescribeAppRecordTemplatesRequest
     *
     * @returns DescribeAppRecordTemplatesResponse
     *
     * @param DescribeAppRecordTemplatesRequest $request
     *
     * @return DescribeAppRecordTemplatesResponse
     */
    public function describeAppRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * 查询录制列表.
     *
     * @param tmpReq - DescribeAppRecordingFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppRecordingFilesResponse
     *
     * @param DescribeAppRecordingFilesRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAppRecordingFilesResponse
     */
    public function describeAppRecordingFilesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeAppRecordingFilesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIds) {
            $request->taskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppRecordingFiles',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppRecordingFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询录制列表.
     *
     * @param request - DescribeAppRecordingFilesRequest
     *
     * @returns DescribeAppRecordingFilesResponse
     *
     * @param DescribeAppRecordingFilesRequest $request
     *
     * @return DescribeAppRecordingFilesResponse
     */
    public function describeAppRecordingFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppRecordingFilesWithOptions($request, $runtime);
    }

    /**
     * 应用推流模版列表.
     *
     * @param tmpReq - DescribeAppStreamingOutTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppStreamingOutTemplatesResponse
     *
     * @param DescribeAppStreamingOutTemplatesRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeAppStreamingOutTemplatesResponse
     */
    public function describeAppStreamingOutTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeAppStreamingOutTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->condition) {
            $request->conditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->conditionShrink) {
            @$query['Condition'] = $request->conditionShrink;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppStreamingOutTemplates',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppStreamingOutTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用推流模版列表.
     *
     * @param request - DescribeAppStreamingOutTemplatesRequest
     *
     * @returns DescribeAppStreamingOutTemplatesResponse
     *
     * @param DescribeAppStreamingOutTemplatesRequest $request
     *
     * @return DescribeAppStreamingOutTemplatesResponse
     */
    public function describeAppStreamingOutTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppStreamingOutTemplatesWithOptions($request, $runtime);
    }

    /**
     * App列表.
     *
     * @param request - DescribeAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppsResponse
     *
     * @param DescribeAppsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeAppsResponse
     */
    public function describeAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApps',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * App列表.
     *
     * @param request - DescribeAppsRequest
     *
     * @returns DescribeAppsResponse
     *
     * @param DescribeAppsRequest $request
     *
     * @return DescribeAppsResponse
     */
    public function describeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAutoLiveStreamRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoLiveStreamRuleResponse
     *
     * @param DescribeAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoLiveStreamRuleResponse
     */
    public function describeAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoLiveStreamRule',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAutoLiveStreamRuleRequest
     *
     * @returns DescribeAutoLiveStreamRuleResponse
     *
     * @param DescribeAutoLiveStreamRuleRequest $request
     *
     * @return DescribeAutoLiveStreamRuleResponse
     */
    public function describeAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeCall获取单次通信详情。
     *
     * @param request - DescribeCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCallResponse
     *
     * @param DescribeCallRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeCallResponse
     */
    public function describeCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        if (null !== $request->extDataType) {
            @$query['ExtDataType'] = $request->extDataType;
        }

        if (null !== $request->queryExpInfo) {
            @$query['QueryExpInfo'] = $request->queryExpInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCall',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeCall获取单次通信详情。
     *
     * @param request - DescribeCallRequest
     *
     * @returns DescribeCallResponse
     *
     * @param DescribeCallRequest $request
     *
     * @return DescribeCallResponse
     */
    public function describeCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCallWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeCallList分页查询时间范围内创建的通信信息。
     *
     * @param request - DescribeCallListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCallListResponse
     *
     * @param DescribeCallListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCallListResponse
     */
    public function describeCallListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->callStatus) {
            @$query['CallStatus'] = $request->callStatus;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryMode) {
            @$query['QueryMode'] = $request->queryMode;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCallList',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeCallList分页查询时间范围内创建的通信信息。
     *
     * @param request - DescribeCallListRequest
     *
     * @returns DescribeCallListResponse
     *
     * @param DescribeCallListRequest $request
     *
     * @return DescribeCallListResponse
     */
    public function describeCallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCallListWithOptions($request, $runtime);
    }

    /**
     * app事件回调列表.
     *
     * @param request - DescribeCallbacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCallbacksResponse
     *
     * @param DescribeCallbacksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeCallbacksResponse
     */
    public function describeCallbacksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCallbacks',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCallbacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * app事件回调列表.
     *
     * @param request - DescribeCallbacksRequest
     *
     * @returns DescribeCallbacksResponse
     *
     * @param DescribeCallbacksRequest $request
     *
     * @return DescribeCallbacksResponse
     */
    public function describeCallbacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCallbacksWithOptions($request, $runtime);
    }

    /**
     * DescribeChannel.
     *
     * @param request - DescribeChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelResponse
     *
     * @param DescribeChannelRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeChannelResponse
     */
    public function describeChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannel',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeChannel.
     *
     * @param request - DescribeChannelRequest
     *
     * @returns DescribeChannelResponse
     *
     * @param DescribeChannelRequest $request
     *
     * @return DescribeChannelResponse
     */
    public function describeChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelWithOptions($request, $runtime);
    }

    /**
     * 查询频道的所有参会者.
     *
     * @param request - DescribeChannelAllUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelAllUsersResponse
     *
     * @param DescribeChannelAllUsersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeChannelAllUsersResponse
     */
    public function describeChannelAllUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelAllUsers',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelAllUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询频道的所有参会者.
     *
     * @param request - DescribeChannelAllUsersRequest
     *
     * @returns DescribeChannelAllUsersResponse
     *
     * @param DescribeChannelAllUsersRequest $request
     *
     * @return DescribeChannelAllUsersResponse
     */
    public function describeChannelAllUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelAllUsersWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeChannelAreaDistributionStatData获取频道地区分布统计数据。
     *
     * @param request - DescribeChannelAreaDistributionStatDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelAreaDistributionStatDataResponse
     *
     * @param DescribeChannelAreaDistributionStatDataRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeChannelAreaDistributionStatDataResponse
     */
    public function describeChannelAreaDistributionStatDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        if (null !== $request->parentArea) {
            @$query['ParentArea'] = $request->parentArea;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelAreaDistributionStatData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelAreaDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeChannelAreaDistributionStatData获取频道地区分布统计数据。
     *
     * @param request - DescribeChannelAreaDistributionStatDataRequest
     *
     * @returns DescribeChannelAreaDistributionStatDataResponse
     *
     * @param DescribeChannelAreaDistributionStatDataRequest $request
     *
     * @return DescribeChannelAreaDistributionStatDataResponse
     */
    public function describeChannelAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelAreaDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeChannelDistributionStatData获取频道分布统计数据。
     *
     * @param request - DescribeChannelDistributionStatDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelDistributionStatDataResponse
     *
     * @param DescribeChannelDistributionStatDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeChannelDistributionStatDataResponse
     */
    public function describeChannelDistributionStatDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        if (null !== $request->statDim) {
            @$query['StatDim'] = $request->statDim;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelDistributionStatData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeChannelDistributionStatData获取频道分布统计数据。
     *
     * @param request - DescribeChannelDistributionStatDataRequest
     *
     * @returns DescribeChannelDistributionStatDataResponse
     *
     * @param DescribeChannelDistributionStatDataRequest $request
     *
     * @return DescribeChannelDistributionStatDataResponse
     */
    public function describeChannelDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeChannelOverallData查询频道概览数据。
     *
     * @param request - DescribeChannelOverallDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelOverallDataResponse
     *
     * @param DescribeChannelOverallDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeChannelOverallDataResponse
     */
    public function describeChannelOverallDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelOverallData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelOverallDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeChannelOverallData查询频道概览数据。
     *
     * @param request - DescribeChannelOverallDataRequest
     *
     * @returns DescribeChannelOverallDataResponse
     *
     * @param DescribeChannelOverallDataRequest $request
     *
     * @return DescribeChannelOverallDataResponse
     */
    public function describeChannelOverallData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelOverallDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeChannelParticipantsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelParticipantsResponse
     *
     * @param DescribeChannelParticipantsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeChannelParticipantsResponse
     */
    public function describeChannelParticipantsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelParticipants',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelParticipantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeChannelParticipantsRequest
     *
     * @returns DescribeChannelParticipantsResponse
     *
     * @param DescribeChannelParticipantsRequest $request
     *
     * @return DescribeChannelParticipantsResponse
     */
    public function describeChannelParticipants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelParticipantsWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeChannelTopPubUserList获取频道内发布端的用户列表（按用户在线时长降序）。
     *
     * @param request - DescribeChannelTopPubUserListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelTopPubUserListResponse
     *
     * @param DescribeChannelTopPubUserListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeChannelTopPubUserListResponse
     */
    public function describeChannelTopPubUserListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelTopPubUserList',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelTopPubUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeChannelTopPubUserList获取频道内发布端的用户列表（按用户在线时长降序）。
     *
     * @param request - DescribeChannelTopPubUserListRequest
     *
     * @returns DescribeChannelTopPubUserListResponse
     *
     * @param DescribeChannelTopPubUserListRequest $request
     *
     * @return DescribeChannelTopPubUserListResponse
     */
    public function describeChannelTopPubUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelTopPubUserListWithOptions($request, $runtime);
    }

    /**
     * DescribeChannelUser.
     *
     * @param request - DescribeChannelUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelUserResponse
     *
     * @param DescribeChannelUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeChannelUserResponse
     */
    public function describeChannelUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelUser',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeChannelUser.
     *
     * @param request - DescribeChannelUserRequest
     *
     * @returns DescribeChannelUserResponse
     *
     * @param DescribeChannelUserRequest $request
     *
     * @return DescribeChannelUserResponse
     */
    public function describeChannelUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelUserWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeChannelUserMetrics查询频道总览中的用户数据。
     *
     * @param request - DescribeChannelUserMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelUserMetricsResponse
     *
     * @param DescribeChannelUserMetricsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeChannelUserMetricsResponse
     */
    public function describeChannelUserMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelUserMetrics',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelUserMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeChannelUserMetrics查询频道总览中的用户数据。
     *
     * @param request - DescribeChannelUserMetricsRequest
     *
     * @returns DescribeChannelUserMetricsResponse
     *
     * @param DescribeChannelUserMetricsRequest $request
     *
     * @return DescribeChannelUserMetricsResponse
     */
    public function describeChannelUserMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelUserMetricsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeChannelUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelUsersResponse
     *
     * @param DescribeChannelUsersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeChannelUsersResponse
     */
    public function describeChannelUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelUsers',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeChannelUsersRequest
     *
     * @returns DescribeChannelUsersResponse
     *
     * @param DescribeChannelUsersRequest $request
     *
     * @return DescribeChannelUsersResponse
     */
    public function describeChannelUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelUsersWithOptions($request, $runtime);
    }

    /**
     * 查询在线频道列表.
     *
     * @param request - DescribeChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelsResponse
     *
     * @param DescribeChannelsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeChannelsResponse
     */
    public function describeChannelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannels',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询在线频道列表.
     *
     * @param request - DescribeChannelsRequest
     *
     * @returns DescribeChannelsResponse
     *
     * @param DescribeChannelsRequest $request
     *
     * @return DescribeChannelsResponse
     */
    public function describeChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelsWithOptions($request, $runtime);
    }

    /**
     * 纪要热词列表.
     *
     * @param tmpReq - DescribeCloudNotePhrasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudNotePhrasesResponse
     *
     * @param DescribeCloudNotePhrasesRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCloudNotePhrasesResponse
     */
    public function describeCloudNotePhrasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCloudNotePhrasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->condition) {
            $request->conditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->conditionShrink) {
            @$query['Condition'] = $request->conditionShrink;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudNotePhrases',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudNotePhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 纪要热词列表.
     *
     * @param request - DescribeCloudNotePhrasesRequest
     *
     * @returns DescribeCloudNotePhrasesResponse
     *
     * @param DescribeCloudNotePhrasesRequest $request
     *
     * @return DescribeCloudNotePhrasesResponse
     */
    public function describeCloudNotePhrases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudNotePhrasesWithOptions($request, $runtime);
    }

    /**
     * 纪要列表.
     *
     * @param tmpReq - DescribeCloudNotesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudNotesResponse
     *
     * @param DescribeCloudNotesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCloudNotesResponse
     */
    public function describeCloudNotesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCloudNotesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIds) {
            $request->taskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudNotes',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudNotesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 纪要列表.
     *
     * @param request - DescribeCloudNotesRequest
     *
     * @returns DescribeCloudNotesResponse
     *
     * @param DescribeCloudNotesRequest $request
     *
     * @return DescribeCloudNotesResponse
     */
    public function describeCloudNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudNotesWithOptions($request, $runtime);
    }

    /**
     * 查询录制任务状态
     *
     * @param request - DescribeCloudRecordStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudRecordStatusResponse
     *
     * @param DescribeCloudRecordStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCloudRecordStatusResponse
     */
    public function describeCloudRecordStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudRecordStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询录制任务状态
     *
     * @param request - DescribeCloudRecordStatusRequest
     *
     * @returns DescribeCloudRecordStatusResponse
     *
     * @param DescribeCloudRecordStatusRequest $request
     *
     * @return DescribeCloudRecordStatusResponse
     */
    public function describeCloudRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudRecordStatusWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeEndPointEventList获取端对端用户事件列表。
     *
     * @param request - DescribeEndPointEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEndPointEventListResponse
     *
     * @param DescribeEndPointEventListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEndPointEventListResponse
     */
    public function describeEndPointEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        if (null !== $request->userIdList) {
            @$query['UserIdList'] = $request->userIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEndPointEventList',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEndPointEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeEndPointEventList获取端对端用户事件列表。
     *
     * @param request - DescribeEndPointEventListRequest
     *
     * @returns DescribeEndPointEventListResponse
     *
     * @param DescribeEndPointEventListRequest $request
     *
     * @return DescribeEndPointEventListResponse
     */
    public function describeEndPointEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndPointEventListWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeEndPointMetricData获取端对端指标数据。
     *
     * @param request - DescribeEndPointMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEndPointMetricDataResponse
     *
     * @param DescribeEndPointMetricDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEndPointMetricDataResponse
     */
    public function describeEndPointMetricDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->pubCallIdList) {
            @$query['PubCallIdList'] = $request->pubCallIdList;
        }

        if (null !== $request->pubUserId) {
            @$query['PubUserId'] = $request->pubUserId;
        }

        if (null !== $request->subUserId) {
            @$query['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEndPointMetricData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEndPointMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeEndPointMetricData获取端对端指标数据。
     *
     * @param request - DescribeEndPointMetricDataRequest
     *
     * @returns DescribeEndPointMetricDataResponse
     *
     * @param DescribeEndPointMetricDataRequest $request
     *
     * @return DescribeEndPointMetricDataResponse
     */
    public function describeEndPointMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndPointMetricDataWithOptions($request, $runtime);
    }

    /**
     * 获取异常诊断影响因素分布.
     *
     * @param request - DescribeFaultDiagnosisFactorDistributionStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaultDiagnosisFactorDistributionStatResponse
     *
     * @param DescribeFaultDiagnosisFactorDistributionStatRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatResponse
     */
    public function describeFaultDiagnosisFactorDistributionStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFaultDiagnosisFactorDistributionStat',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaultDiagnosisFactorDistributionStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取异常诊断影响因素分布.
     *
     * @param request - DescribeFaultDiagnosisFactorDistributionStatRequest
     *
     * @returns DescribeFaultDiagnosisFactorDistributionStatResponse
     *
     * @param DescribeFaultDiagnosisFactorDistributionStatRequest $request
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatResponse
     */
    public function describeFaultDiagnosisFactorDistributionStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaultDiagnosisFactorDistributionStatWithOptions($request, $runtime);
    }

    /**
     * 获取异常诊断总览数据.
     *
     * @param request - DescribeFaultDiagnosisOverallDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaultDiagnosisOverallDataResponse
     *
     * @param DescribeFaultDiagnosisOverallDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeFaultDiagnosisOverallDataResponse
     */
    public function describeFaultDiagnosisOverallDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        if (null !== $request->statDim) {
            @$query['StatDim'] = $request->statDim;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFaultDiagnosisOverallData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaultDiagnosisOverallDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取异常诊断总览数据.
     *
     * @param request - DescribeFaultDiagnosisOverallDataRequest
     *
     * @returns DescribeFaultDiagnosisOverallDataResponse
     *
     * @param DescribeFaultDiagnosisOverallDataRequest $request
     *
     * @return DescribeFaultDiagnosisOverallDataResponse
     */
    public function describeFaultDiagnosisOverallData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaultDiagnosisOverallDataWithOptions($request, $runtime);
    }

    /**
     * 获取异常诊断用户详情.
     *
     * @param request - DescribeFaultDiagnosisUserDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaultDiagnosisUserDetailResponse
     *
     * @param DescribeFaultDiagnosisUserDetailRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeFaultDiagnosisUserDetailResponse
     */
    public function describeFaultDiagnosisUserDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->faultType) {
            @$query['FaultType'] = $request->faultType;
        }

        if (null !== $request->queryCallUserInfo) {
            @$query['QueryCallUserInfo'] = $request->queryCallUserInfo;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFaultDiagnosisUserDetail',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaultDiagnosisUserDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取异常诊断用户详情.
     *
     * @param request - DescribeFaultDiagnosisUserDetailRequest
     *
     * @returns DescribeFaultDiagnosisUserDetailResponse
     *
     * @param DescribeFaultDiagnosisUserDetailRequest $request
     *
     * @return DescribeFaultDiagnosisUserDetailResponse
     */
    public function describeFaultDiagnosisUserDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaultDiagnosisUserDetailWithOptions($request, $runtime);
    }

    /**
     * 获取异常诊断用户明细列表.
     *
     * @param request - DescribeFaultDiagnosisUserListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaultDiagnosisUserListResponse
     *
     * @param DescribeFaultDiagnosisUserListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeFaultDiagnosisUserListResponse
     */
    public function describeFaultDiagnosisUserListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->faultTypes) {
            @$query['FaultTypes'] = $request->faultTypes;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFaultDiagnosisUserList',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaultDiagnosisUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取异常诊断用户明细列表.
     *
     * @param request - DescribeFaultDiagnosisUserListRequest
     *
     * @returns DescribeFaultDiagnosisUserListResponse
     *
     * @param DescribeFaultDiagnosisUserListRequest $request
     *
     * @return DescribeFaultDiagnosisUserListResponse
     */
    public function describeFaultDiagnosisUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaultDiagnosisUserListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeMPULayoutInfoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMPULayoutInfoListResponse
     *
     * @param DescribeMPULayoutInfoListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMPULayoutInfoListResponse
     */
    public function describeMPULayoutInfoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->layoutId) {
            @$query['LayoutId'] = $request->layoutId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMPULayoutInfoList',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMPULayoutInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMPULayoutInfoListRequest
     *
     * @returns DescribeMPULayoutInfoListResponse
     *
     * @param DescribeMPULayoutInfoListRequest $request
     *
     * @return DescribeMPULayoutInfoListResponse
     */
    public function describeMPULayoutInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPULayoutInfoListWithOptions($request, $runtime);
    }

    /**
     * 调用DescribePubUserListBySubUser根据订阅端获取通信中发布端用户列表。
     *
     * @param request - DescribePubUserListBySubUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePubUserListBySubUserResponse
     *
     * @param DescribePubUserListBySubUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePubUserListBySubUserResponse
     */
    public function describePubUserListBySubUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        if (null !== $request->subUserId) {
            @$query['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePubUserListBySubUser',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePubUserListBySubUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribePubUserListBySubUser根据订阅端获取通信中发布端用户列表。
     *
     * @param request - DescribePubUserListBySubUserRequest
     *
     * @returns DescribePubUserListBySubUserResponse
     *
     * @param DescribePubUserListBySubUserRequest $request
     *
     * @return DescribePubUserListBySubUserResponse
     */
    public function describePubUserListBySubUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePubUserListBySubUserWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeQoeMetricData获取单次通信中用户的下行体验质量指标。
     *
     * @param request - DescribeQoeMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQoeMetricDataResponse
     *
     * @param DescribeQoeMetricDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeQoeMetricDataResponse
     */
    public function describeQoeMetricDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->createdTs) {
            @$query['CreatedTs'] = $request->createdTs;
        }

        if (null !== $request->destroyedTs) {
            @$query['DestroyedTs'] = $request->destroyedTs;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeQoeMetricData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeQoeMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeQoeMetricData获取单次通信中用户的下行体验质量指标。
     *
     * @param request - DescribeQoeMetricDataRequest
     *
     * @returns DescribeQoeMetricDataResponse
     *
     * @param DescribeQoeMetricDataRequest $request
     *
     * @return DescribeQoeMetricDataResponse
     */
    public function describeQoeMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQoeMetricDataWithOptions($request, $runtime);
    }

    /**
     * 获取质量统计区域分布统计数据.
     *
     * @param request - DescribeQualityAreaDistributionStatDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQualityAreaDistributionStatDataResponse
     *
     * @param DescribeQualityAreaDistributionStatDataRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeQualityAreaDistributionStatDataResponse
     */
    public function describeQualityAreaDistributionStatDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->parentArea) {
            @$query['ParentArea'] = $request->parentArea;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeQualityAreaDistributionStatData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeQualityAreaDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取质量统计区域分布统计数据.
     *
     * @param request - DescribeQualityAreaDistributionStatDataRequest
     *
     * @returns DescribeQualityAreaDistributionStatDataResponse
     *
     * @param DescribeQualityAreaDistributionStatDataRequest $request
     *
     * @return DescribeQualityAreaDistributionStatDataResponse
     */
    public function describeQualityAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualityAreaDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * 获取质量统计分布数据.
     *
     * @param request - DescribeQualityDistributionStatDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQualityDistributionStatDataResponse
     *
     * @param DescribeQualityDistributionStatDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeQualityDistributionStatDataResponse
     */
    public function describeQualityDistributionStatDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->statDim) {
            @$query['StatDim'] = $request->statDim;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeQualityDistributionStatData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeQualityDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取质量统计分布数据.
     *
     * @param request - DescribeQualityDistributionStatDataRequest
     *
     * @returns DescribeQualityDistributionStatDataResponse
     *
     * @param DescribeQualityDistributionStatDataRequest $request
     *
     * @return DescribeQualityDistributionStatDataResponse
     */
    public function describeQualityDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualityDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * 获取质量统计各操作系统下SDK版本分布数据.
     *
     * @param request - DescribeQualityOsSdkVersionDistributionStatDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQualityOsSdkVersionDistributionStatDataResponse
     *
     * @param DescribeQualityOsSdkVersionDistributionStatDataRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return DescribeQualityOsSdkVersionDistributionStatDataResponse
     */
    public function describeQualityOsSdkVersionDistributionStatDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeQualityOsSdkVersionDistributionStatData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeQualityOsSdkVersionDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取质量统计各操作系统下SDK版本分布数据.
     *
     * @param request - DescribeQualityOsSdkVersionDistributionStatDataRequest
     *
     * @returns DescribeQualityOsSdkVersionDistributionStatDataResponse
     *
     * @param DescribeQualityOsSdkVersionDistributionStatDataRequest $request
     *
     * @return DescribeQualityOsSdkVersionDistributionStatDataResponse
     */
    public function describeQualityOsSdkVersionDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualityOsSdkVersionDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * 获取质量统计概览数据.
     *
     * @param request - DescribeQualityOverallDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQualityOverallDataResponse
     *
     * @param DescribeQualityOverallDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeQualityOverallDataResponse
     */
    public function describeQualityOverallDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->types) {
            @$query['Types'] = $request->types;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeQualityOverallData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeQualityOverallDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取质量统计概览数据.
     *
     * @param request - DescribeQualityOverallDataRequest
     *
     * @returns DescribeQualityOverallDataResponse
     *
     * @param DescribeQualityOverallDataRequest $request
     *
     * @return DescribeQualityOverallDataResponse
     */
    public function describeQualityOverallData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualityOverallDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRecordFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordFilesResponse
     *
     * @param DescribeRecordFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRecordFilesResponse
     */
    public function describeRecordFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecordFiles',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRecordFilesRequest
     *
     * @returns DescribeRecordFilesResponse
     *
     * @param DescribeRecordFilesRequest $request
     *
     * @return DescribeRecordFilesResponse
     */
    public function describeRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRecordTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordTemplatesResponse
     *
     * @param DescribeRecordTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRecordTemplatesResponse
     */
    public function describeRecordTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecordTemplates',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRecordTemplatesRequest
     *
     * @returns DescribeRecordTemplatesResponse
     *
     * @param DescribeRecordTemplatesRequest $request
     *
     * @return DescribeRecordTemplatesResponse
     */
    public function describeRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRtcChannelListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRtcChannelListResponse
     *
     * @param DescribeRtcChannelListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRtcChannelListResponse
     */
    public function describeRtcChannelListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceArea) {
            @$query['ServiceArea'] = $request->serviceArea;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->timePoint) {
            @$query['TimePoint'] = $request->timePoint;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRtcChannelList',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRtcChannelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRtcChannelListRequest
     *
     * @returns DescribeRtcChannelListResponse
     *
     * @param DescribeRtcChannelListRequest $request
     *
     * @return DescribeRtcChannelListResponse
     */
    public function describeRtcChannelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRtcChannelMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRtcChannelMetricResponse
     *
     * @param DescribeRtcChannelMetricRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRtcChannelMetricResponse
     */
    public function describeRtcChannelMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->timePoint) {
            @$query['TimePoint'] = $request->timePoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRtcChannelMetric',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRtcChannelMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRtcChannelMetricRequest
     *
     * @returns DescribeRtcChannelMetricResponse
     *
     * @param DescribeRtcChannelMetricRequest $request
     *
     * @return DescribeRtcChannelMetricResponse
     */
    public function describeRtcChannelMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelMetricWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRtcDurationDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRtcDurationDataResponse
     *
     * @param DescribeRtcDurationDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRtcDurationDataResponse
     */
    public function describeRtcDurationDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->serviceArea) {
            @$query['ServiceArea'] = $request->serviceArea;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRtcDurationData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRtcDurationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRtcDurationDataRequest
     *
     * @returns DescribeRtcDurationDataResponse
     *
     * @param DescribeRtcDurationDataRequest $request
     *
     * @return DescribeRtcDurationDataResponse
     */
    public function describeRtcDurationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcDurationDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRtcPeakChannelCntDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRtcPeakChannelCntDataResponse
     *
     * @param DescribeRtcPeakChannelCntDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRtcPeakChannelCntDataResponse
     */
    public function describeRtcPeakChannelCntDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->serviceArea) {
            @$query['ServiceArea'] = $request->serviceArea;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRtcPeakChannelCntData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRtcPeakChannelCntDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRtcPeakChannelCntDataRequest
     *
     * @returns DescribeRtcPeakChannelCntDataResponse
     *
     * @param DescribeRtcPeakChannelCntDataRequest $request
     *
     * @return DescribeRtcPeakChannelCntDataResponse
     */
    public function describeRtcPeakChannelCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcPeakChannelCntDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRtcUserCntDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRtcUserCntDataResponse
     *
     * @param DescribeRtcUserCntDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRtcUserCntDataResponse
     */
    public function describeRtcUserCntDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->serviceArea) {
            @$query['ServiceArea'] = $request->serviceArea;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRtcUserCntData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRtcUserCntDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRtcUserCntDataRequest
     *
     * @returns DescribeRtcUserCntDataResponse
     *
     * @param DescribeRtcUserCntDataRequest $request
     *
     * @return DescribeRtcUserCntDataResponse
     */
    public function describeRtcUserCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcUserCntDataWithOptions($request, $runtime);
    }

    /**
     * 查询旁路推流状态
     *
     * @param request - DescribeStreamingOutStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStreamingOutStatusResponse
     *
     * @param DescribeStreamingOutStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeStreamingOutStatusResponse
     */
    public function describeStreamingOutStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStreamingOutStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStreamingOutStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询旁路推流状态
     *
     * @param request - DescribeStreamingOutStatusRequest
     *
     * @returns DescribeStreamingOutStatusResponse
     *
     * @param DescribeStreamingOutStatusRequest $request
     *
     * @return DescribeStreamingOutStatusResponse
     */
    public function describeStreamingOutStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamingOutStatusWithOptions($request, $runtime);
    }

    /**
     * 系统内置布局
     *
     * @param request - DescribeSystemLayoutListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemLayoutListResponse
     *
     * @param DescribeSystemLayoutListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSystemLayoutListResponse
     */
    public function describeSystemLayoutListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSystemLayoutList',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSystemLayoutListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 系统内置布局
     *
     * @param request - DescribeSystemLayoutListRequest
     *
     * @returns DescribeSystemLayoutListResponse
     *
     * @param DescribeSystemLayoutListRequest $request
     *
     * @return DescribeSystemLayoutListResponse
     */
    public function describeSystemLayoutList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemLayoutListWithOptions($request, $runtime);
    }

    /**
     * 获取用量统计地域分布数据.
     *
     * @param request - DescribeUsageAreaDistributionStatDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsageAreaDistributionStatDataResponse
     *
     * @param DescribeUsageAreaDistributionStatDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeUsageAreaDistributionStatDataResponse
     */
    public function describeUsageAreaDistributionStatDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->parentArea) {
            @$query['ParentArea'] = $request->parentArea;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUsageAreaDistributionStatData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsageAreaDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用量统计地域分布数据.
     *
     * @param request - DescribeUsageAreaDistributionStatDataRequest
     *
     * @returns DescribeUsageAreaDistributionStatDataResponse
     *
     * @param DescribeUsageAreaDistributionStatDataRequest $request
     *
     * @return DescribeUsageAreaDistributionStatDataResponse
     */
    public function describeUsageAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageAreaDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * 获取用量统计分布数据.
     *
     * @param request - DescribeUsageDistributionStatDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsageDistributionStatDataResponse
     *
     * @param DescribeUsageDistributionStatDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeUsageDistributionStatDataResponse
     */
    public function describeUsageDistributionStatDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->statDim) {
            @$query['StatDim'] = $request->statDim;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUsageDistributionStatData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsageDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用量统计分布数据.
     *
     * @param request - DescribeUsageDistributionStatDataRequest
     *
     * @returns DescribeUsageDistributionStatDataResponse
     *
     * @param DescribeUsageDistributionStatDataRequest $request
     *
     * @return DescribeUsageDistributionStatDataResponse
     */
    public function describeUsageDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * 获取用量统计各操作系统下SDK版本分布数据.
     *
     * @param request - DescribeUsageOsSdkVersionDistributionStatDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsageOsSdkVersionDistributionStatDataResponse
     *
     * @param DescribeUsageOsSdkVersionDistributionStatDataRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeUsageOsSdkVersionDistributionStatDataResponse
     */
    public function describeUsageOsSdkVersionDistributionStatDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUsageOsSdkVersionDistributionStatData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsageOsSdkVersionDistributionStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用量统计各操作系统下SDK版本分布数据.
     *
     * @param request - DescribeUsageOsSdkVersionDistributionStatDataRequest
     *
     * @returns DescribeUsageOsSdkVersionDistributionStatDataResponse
     *
     * @param DescribeUsageOsSdkVersionDistributionStatDataRequest $request
     *
     * @return DescribeUsageOsSdkVersionDistributionStatDataResponse
     */
    public function describeUsageOsSdkVersionDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageOsSdkVersionDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * 获取用量统计概览数据.
     *
     * @param request - DescribeUsageOverallDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsageOverallDataResponse
     *
     * @param DescribeUsageOverallDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUsageOverallDataResponse
     */
    public function describeUsageOverallDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->types) {
            @$query['Types'] = $request->types;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUsageOverallData',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsageOverallDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用量统计概览数据.
     *
     * @param request - DescribeUsageOverallDataRequest
     *
     * @returns DescribeUsageOverallDataResponse
     *
     * @param DescribeUsageOverallDataRequest $request
     *
     * @return DescribeUsageOverallDataResponse
     */
    public function describeUsageOverallData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageOverallDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeUserInfoInChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserInfoInChannelResponse
     *
     * @param DescribeUserInfoInChannelRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserInfoInChannelResponse
     */
    public function describeUserInfoInChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserInfoInChannel',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserInfoInChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeUserInfoInChannelRequest
     *
     * @returns DescribeUserInfoInChannelResponse
     *
     * @param DescribeUserInfoInChannelRequest $request
     *
     * @return DescribeUserInfoInChannelResponse
     */
    public function describeUserInfoInChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserInfoInChannelWithOptions($request, $runtime);
    }

    /**
     * @param request - DisableAutoLiveStreamRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAutoLiveStreamRuleResponse
     *
     * @param DisableAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableAutoLiveStreamRuleResponse
     */
    public function disableAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAutoLiveStreamRule',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableAutoLiveStreamRuleRequest
     *
     * @returns DisableAutoLiveStreamRuleResponse
     *
     * @param DisableAutoLiveStreamRuleRequest $request
     *
     * @return DisableAutoLiveStreamRuleResponse
     */
    public function disableAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableAutoLiveStreamRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAutoLiveStreamRuleResponse
     *
     * @param EnableAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableAutoLiveStreamRuleResponse
     */
    public function enableAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableAutoLiveStreamRule',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableAutoLiveStreamRuleRequest
     *
     * @returns EnableAutoLiveStreamRuleResponse
     *
     * @param EnableAutoLiveStreamRuleRequest $request
     *
     * @return EnableAutoLiveStreamRuleResponse
     */
    public function enableAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * GetAgent。
     *
     * @param request - GetAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgent',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetAgent。
     *
     * @param request - GetAgentRequest
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     *
     * @return GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMPUTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMPUTaskStatusResponse
     *
     * @param GetMPUTaskStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMPUTaskStatusResponse
     */
    public function getMPUTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMPUTaskStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMPUTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMPUTaskStatusRequest
     *
     * @returns GetMPUTaskStatusResponse
     *
     * @param GetMPUTaskStatusRequest $request
     *
     * @return GetMPUTaskStatusResponse
     */
    public function getMPUTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMPUTaskStatusWithOptions($request, $runtime);
    }

    /**
     * 修改App信息.
     *
     * @param request - ModifyAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppResponse
     *
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApp',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改App信息.
     *
     * @param request - ModifyAppRequest
     *
     * @returns ModifyAppResponse
     *
     * @param ModifyAppRequest $request
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * 修改应用智能体开关.
     *
     * @param request - ModifyAppAgentFunctionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppAgentFunctionStatusResponse
     *
     * @param ModifyAppAgentFunctionStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyAppAgentFunctionStatusResponse
     */
    public function modifyAppAgentFunctionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppAgentFunctionStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppAgentFunctionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用智能体开关.
     *
     * @param request - ModifyAppAgentFunctionStatusRequest
     *
     * @returns ModifyAppAgentFunctionStatusResponse
     *
     * @param ModifyAppAgentFunctionStatusRequest $request
     *
     * @return ModifyAppAgentFunctionStatusResponse
     */
    public function modifyAppAgentFunctionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppAgentFunctionStatusWithOptions($request, $runtime);
    }

    /**
     * 更新应用智能体模版.
     *
     * @param tmpReq - ModifyAppAgentTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppAgentTemplateResponse
     *
     * @param ModifyAppAgentTemplateRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAppAgentTemplateResponse
     */
    public function modifyAppAgentTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppAgentTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->asrConfig) {
            $request->asrConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->asrConfig, 'AsrConfig', 'json');
        }

        if (null !== $tmpReq->llmConfig) {
            $request->llmConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->llmConfig, 'LlmConfig', 'json');
        }

        if (null !== $tmpReq->ttsConfig) {
            $request->ttsConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ttsConfig, 'TtsConfig', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->asrConfigShrink) {
            @$query['AsrConfig'] = $request->asrConfigShrink;
        }

        if (null !== $request->chatMode) {
            @$query['ChatMode'] = $request->chatMode;
        }

        if (null !== $request->greeting) {
            @$query['Greeting'] = $request->greeting;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->interruptMode) {
            @$query['InterruptMode'] = $request->interruptMode;
        }

        if (null !== $request->llmConfigShrink) {
            @$query['LlmConfig'] = $request->llmConfigShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ttsConfigShrink) {
            @$query['TtsConfig'] = $request->ttsConfigShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppAgentTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppAgentTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用智能体模版.
     *
     * @param request - ModifyAppAgentTemplateRequest
     *
     * @returns ModifyAppAgentTemplateResponse
     *
     * @param ModifyAppAgentTemplateRequest $request
     *
     * @return ModifyAppAgentTemplateResponse
     */
    public function modifyAppAgentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppAgentTemplateWithOptions($request, $runtime);
    }

    /**
     * 更新app回调事件开关.
     *
     * @param request - ModifyAppCallbackStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppCallbackStatusResponse
     *
     * @param ModifyAppCallbackStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAppCallbackStatusResponse
     */
    public function modifyAppCallbackStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppCallbackStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppCallbackStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新app回调事件开关.
     *
     * @param request - ModifyAppCallbackStatusRequest
     *
     * @returns ModifyAppCallbackStatusResponse
     *
     * @param ModifyAppCallbackStatusRequest $request
     *
     * @return ModifyAppCallbackStatusResponse
     */
    public function modifyAppCallbackStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppCallbackStatusWithOptions($request, $runtime);
    }

    /**
     * 修改app自定义布局
     *
     * @param tmpReq - ModifyAppLayoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppLayoutResponse
     *
     * @param ModifyAppLayoutRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyAppLayoutResponse
     */
    public function modifyAppLayoutWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppLayoutShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->layout) {
            $request->layoutShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->layout, 'Layout', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->layoutShrink) {
            @$query['Layout'] = $request->layoutShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppLayout',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改app自定义布局
     *
     * @param request - ModifyAppLayoutRequest
     *
     * @returns ModifyAppLayoutResponse
     *
     * @param ModifyAppLayoutRequest $request
     *
     * @return ModifyAppLayoutResponse
     */
    public function modifyAppLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppLayoutWithOptions($request, $runtime);
    }

    /**
     * 修改应用旁路开关.
     *
     * @param request - ModifyAppLiveStreamStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppLiveStreamStatusResponse
     *
     * @param ModifyAppLiveStreamStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyAppLiveStreamStatusResponse
     */
    public function modifyAppLiveStreamStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppLiveStreamStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppLiveStreamStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用旁路开关.
     *
     * @param request - ModifyAppLiveStreamStatusRequest
     *
     * @returns ModifyAppLiveStreamStatusResponse
     *
     * @param ModifyAppLiveStreamStatusRequest $request
     *
     * @return ModifyAppLiveStreamStatusResponse
     */
    public function modifyAppLiveStreamStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppLiveStreamStatusWithOptions($request, $runtime);
    }

    /**
     * 修改应用录制开关.
     *
     * @param request - ModifyAppRecordStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppRecordStatusResponse
     *
     * @param ModifyAppRecordStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAppRecordStatusResponse
     */
    public function modifyAppRecordStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppRecordStatus',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用录制开关.
     *
     * @param request - ModifyAppRecordStatusRequest
     *
     * @returns ModifyAppRecordStatusResponse
     *
     * @param ModifyAppRecordStatusRequest $request
     *
     * @return ModifyAppRecordStatusResponse
     */
    public function modifyAppRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppRecordStatusWithOptions($request, $runtime);
    }

    /**
     * 修改应用录制模版.
     *
     * @param tmpReq - ModifyAppRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppRecordTemplateResponse
     *
     * @param ModifyAppRecordTemplateRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAppRecordTemplateResponse
     */
    public function modifyAppRecordTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppRecordTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->recordTemplate) {
            $request->recordTemplateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recordTemplate, 'RecordTemplate', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->recordTemplateShrink) {
            @$query['RecordTemplate'] = $request->recordTemplateShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppRecordTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用录制模版.
     *
     * @param request - ModifyAppRecordTemplateRequest
     *
     * @returns ModifyAppRecordTemplateResponse
     *
     * @param ModifyAppRecordTemplateRequest $request
     *
     * @return ModifyAppRecordTemplateResponse
     */
    public function modifyAppRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * 更新应用推流模版.
     *
     * @param tmpReq - ModifyAppStreamingOutTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppStreamingOutTemplateResponse
     *
     * @param ModifyAppStreamingOutTemplateRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyAppStreamingOutTemplateResponse
     */
    public function modifyAppStreamingOutTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAppStreamingOutTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->streamingOutTemplate) {
            $request->streamingOutTemplateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamingOutTemplate, 'StreamingOutTemplate', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->streamingOutTemplateShrink) {
            @$query['StreamingOutTemplate'] = $request->streamingOutTemplateShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAppStreamingOutTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppStreamingOutTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用推流模版.
     *
     * @param request - ModifyAppStreamingOutTemplateRequest
     *
     * @returns ModifyAppStreamingOutTemplateResponse
     *
     * @param ModifyAppStreamingOutTemplateRequest $request
     *
     * @return ModifyAppStreamingOutTemplateResponse
     */
    public function modifyAppStreamingOutTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppStreamingOutTemplateWithOptions($request, $runtime);
    }

    /**
     * 更新app回调.
     *
     * @param tmpReq - ModifyCallbackMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCallbackMetaResponse
     *
     * @param ModifyCallbackMetaRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyCallbackMetaResponse
     */
    public function modifyCallbackMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyCallbackMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->callback) {
            $request->callbackShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callback, 'Callback', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->callbackShrink) {
            @$query['Callback'] = $request->callbackShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCallbackMeta',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCallbackMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新app回调.
     *
     * @param request - ModifyCallbackMetaRequest
     *
     * @returns ModifyCallbackMetaResponse
     *
     * @param ModifyCallbackMetaRequest $request
     *
     * @return ModifyCallbackMetaResponse
     */
    public function modifyCallbackMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCallbackMetaWithOptions($request, $runtime);
    }

    /**
     * 更新纪要热词表.
     *
     * @param tmpReq - ModifyCloudNotePhrasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCloudNotePhrasesResponse
     *
     * @param ModifyCloudNotePhrasesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyCloudNotePhrasesResponse
     */
    public function modifyCloudNotePhrasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyCloudNotePhrasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->phrase) {
            $request->phraseShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->phrase, 'Phrase', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->phraseShrink) {
            @$query['Phrase'] = $request->phraseShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCloudNotePhrases',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCloudNotePhrasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新纪要热词表.
     *
     * @param request - ModifyCloudNotePhrasesRequest
     *
     * @returns ModifyCloudNotePhrasesResponse
     *
     * @param ModifyCloudNotePhrasesRequest $request
     *
     * @return ModifyCloudNotePhrasesResponse
     */
    public function modifyCloudNotePhrases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudNotePhrasesWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyMPULayoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMPULayoutResponse
     *
     * @param ModifyMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyMPULayoutResponse
     */
    public function modifyMPULayoutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->audioMixCount) {
            @$query['AudioMixCount'] = $request->audioMixCount;
        }

        if (null !== $request->layoutId) {
            @$query['LayoutId'] = $request->layoutId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->panes) {
            @$query['Panes'] = $request->panes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMPULayout',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMPULayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyMPULayoutRequest
     *
     * @returns ModifyMPULayoutResponse
     *
     * @param ModifyMPULayoutRequest $request
     *
     * @return ModifyMPULayoutResponse
     */
    public function modifyMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMPULayoutWithOptions($request, $runtime);
    }

    /**
     * NotifyAgent.
     *
     * @param request - NotifyAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NotifyAgentResponse
     *
     * @param NotifyAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return NotifyAgentResponse
     */
    public function notifyAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->customAttribute) {
            @$query['CustomAttribute'] = $request->customAttribute;
        }

        if (null !== $request->interruptable) {
            @$query['Interruptable'] = $request->interruptable;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'NotifyAgent',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NotifyAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * NotifyAgent.
     *
     * @param request - NotifyAgentRequest
     *
     * @returns NotifyAgentResponse
     *
     * @param NotifyAgentRequest $request
     *
     * @return NotifyAgentResponse
     */
    public function notifyAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyAgentWithOptions($request, $runtime);
    }

    /**
     * @param request - RemoveTerminalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveTerminalsResponse
     *
     * @param RemoveTerminalsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveTerminalsResponse
     */
    public function removeTerminalsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->terminalIds) {
            @$query['TerminalIds'] = $request->terminalIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveTerminals',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemoveTerminalsRequest
     *
     * @returns RemoveTerminalsResponse
     *
     * @param RemoveTerminalsRequest $request
     *
     * @return RemoveTerminalsResponse
     */
    public function removeTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTerminalsWithOptions($request, $runtime);
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
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->users) {
            @$query['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUsers',
            'version' => '2018-01-11',
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
     * 启动AI Agent.
     *
     * @param tmpReq - StartAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAgentResponse
     *
     * @param StartAgentRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return StartAgentResponse
     */
    public function startAgentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rtcConfig) {
            $request->rtcConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rtcConfig, 'RtcConfig', 'json');
        }

        if (null !== $tmpReq->voiceChatConfig) {
            $request->voiceChatConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->voiceChatConfig, 'VoiceChatConfig', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->rtcConfigShrink) {
            @$query['RtcConfig'] = $request->rtcConfigShrink;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->voiceChatConfigShrink) {
            @$query['VoiceChatConfig'] = $request->voiceChatConfigShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartAgent',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动AI Agent.
     *
     * @param request - StartAgentRequest
     *
     * @returns StartAgentResponse
     *
     * @param StartAgentRequest $request
     *
     * @return StartAgentResponse
     */
    public function startAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAgentWithOptions($request, $runtime);
    }

    /**
     * 开启某个事件回调.
     *
     * @param tmpReq - StartCategoryCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartCategoryCallbackResponse
     *
     * @param StartCategoryCallbackRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return StartCategoryCallbackResponse
     */
    public function startCategoryCallbackWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartCategoryCallbackShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->callback) {
            $request->callbackShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callback, 'Callback', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->callbackShrink) {
            @$query['Callback'] = $request->callbackShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartCategoryCallback',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartCategoryCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启某个事件回调.
     *
     * @param request - StartCategoryCallbackRequest
     *
     * @returns StartCategoryCallbackResponse
     *
     * @param StartCategoryCallbackRequest $request
     *
     * @return StartCategoryCallbackResponse
     */
    public function startCategoryCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCategoryCallbackWithOptions($request, $runtime);
    }

    /**
     * 开启智能纪要
     *
     * @param tmpReq - StartCloudNoteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartCloudNoteResponse
     *
     * @param StartCloudNoteRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StartCloudNoteResponse
     */
    public function startCloudNoteWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartCloudNoteShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->autoChapters) {
            $request->autoChaptersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->autoChapters, 'AutoChapters', 'json');
        }

        if (null !== $tmpReq->customPrompt) {
            $request->customPromptShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customPrompt, 'CustomPrompt', 'json');
        }

        if (null !== $tmpReq->meetingAssistance) {
            $request->meetingAssistanceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->meetingAssistance, 'MeetingAssistance', 'json');
        }

        if (null !== $tmpReq->realtimeSubtitle) {
            $request->realtimeSubtitleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->realtimeSubtitle, 'RealtimeSubtitle', 'json');
        }

        if (null !== $tmpReq->serviceInspection) {
            $request->serviceInspectionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serviceInspection, 'ServiceInspection', 'json');
        }

        if (null !== $tmpReq->summarization) {
            $request->summarizationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->summarization, 'Summarization', 'json');
        }

        if (null !== $tmpReq->textPolish) {
            $request->textPolishShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->textPolish, 'TextPolish', 'json');
        }

        if (null !== $tmpReq->transcription) {
            $request->transcriptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transcription, 'Transcription', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->autoChaptersShrink) {
            @$query['AutoChapters'] = $request->autoChaptersShrink;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->customPromptShrink) {
            @$query['CustomPrompt'] = $request->customPromptShrink;
        }

        if (null !== $request->languageHints) {
            @$query['LanguageHints'] = $request->languageHints;
        }

        if (null !== $request->meetingAssistanceShrink) {
            @$query['MeetingAssistance'] = $request->meetingAssistanceShrink;
        }

        if (null !== $request->realtimeSubtitleShrink) {
            @$query['RealtimeSubtitle'] = $request->realtimeSubtitleShrink;
        }

        if (null !== $request->serviceInspectionShrink) {
            @$query['ServiceInspection'] = $request->serviceInspectionShrink;
        }

        if (null !== $request->sourceLanguage) {
            @$query['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->storageConfig) {
            @$query['StorageConfig'] = $request->storageConfig;
        }

        if (null !== $request->summarizationShrink) {
            @$query['Summarization'] = $request->summarizationShrink;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->textPolishShrink) {
            @$query['TextPolish'] = $request->textPolishShrink;
        }

        if (null !== $request->transcriptionShrink) {
            @$query['Transcription'] = $request->transcriptionShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartCloudNote',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartCloudNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启智能纪要
     *
     * @param request - StartCloudNoteRequest
     *
     * @returns StartCloudNoteResponse
     *
     * @param StartCloudNoteRequest $request
     *
     * @return StartCloudNoteResponse
     */
    public function startCloudNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCloudNoteWithOptions($request, $runtime);
    }

    /**
     * StartCloudRecord.
     *
     * @param tmpReq - StartCloudRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartCloudRecordResponse
     *
     * @param StartCloudRecordRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return StartCloudRecordResponse
     */
    public function startCloudRecordWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartCloudRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->layoutSpecifiedUsers) {
            $request->layoutSpecifiedUsersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->layoutSpecifiedUsers, 'LayoutSpecifiedUsers', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backgrounds) {
            @$query['Backgrounds'] = $request->backgrounds;
        }

        if (null !== $request->bgColor) {
            @$query['BgColor'] = $request->bgColor;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->clockWidgets) {
            @$query['ClockWidgets'] = $request->clockWidgets;
        }

        if (null !== $request->cropMode) {
            @$query['CropMode'] = $request->cropMode;
        }

        if (null !== $request->images) {
            @$query['Images'] = $request->images;
        }

        if (null !== $request->layoutSpecifiedUsersShrink) {
            @$query['LayoutSpecifiedUsers'] = $request->layoutSpecifiedUsersShrink;
        }

        if (null !== $request->panes) {
            @$query['Panes'] = $request->panes;
        }

        if (null !== $request->regionColor) {
            @$query['RegionColor'] = $request->regionColor;
        }

        if (null !== $request->reservePaneForNoCameraUser) {
            @$query['ReservePaneForNoCameraUser'] = $request->reservePaneForNoCameraUser;
        }

        if (null !== $request->showDefaultBackgroundOnMute) {
            @$query['ShowDefaultBackgroundOnMute'] = $request->showDefaultBackgroundOnMute;
        }

        if (null !== $request->storageConfig) {
            @$query['StorageConfig'] = $request->storageConfig;
        }

        if (null !== $request->subHighResolutionStream) {
            @$query['SubHighResolutionStream'] = $request->subHighResolutionStream;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->texts) {
            @$query['Texts'] = $request->texts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartCloudRecord',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StartCloudRecord.
     *
     * @param request - StartCloudRecordRequest
     *
     * @returns StartCloudRecordResponse
     *
     * @param StartCloudRecordRequest $request
     *
     * @return StartCloudRecordResponse
     */
    public function startCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCloudRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - StartMPUTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartMPUTaskResponse
     *
     * @param StartMPUTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartMPUTaskResponse
     */
    public function startMPUTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backgroundColor) {
            @$query['BackgroundColor'] = $request->backgroundColor;
        }

        if (null !== $request->backgrounds) {
            @$query['Backgrounds'] = $request->backgrounds;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->clockWidgets) {
            @$query['ClockWidgets'] = $request->clockWidgets;
        }

        if (null !== $request->cropMode) {
            @$query['CropMode'] = $request->cropMode;
        }

        if (null !== $request->layoutIds) {
            @$query['LayoutIds'] = $request->layoutIds;
        }

        if (null !== $request->mediaEncode) {
            @$query['MediaEncode'] = $request->mediaEncode;
        }

        if (null !== $request->mixMode) {
            @$query['MixMode'] = $request->mixMode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payloadType) {
            @$query['PayloadType'] = $request->payloadType;
        }

        if (null !== $request->reportVad) {
            @$query['ReportVad'] = $request->reportVad;
        }

        if (null !== $request->rtpExtInfo) {
            @$query['RtpExtInfo'] = $request->rtpExtInfo;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->streamType) {
            @$query['StreamType'] = $request->streamType;
        }

        if (null !== $request->streamURL) {
            @$query['StreamURL'] = $request->streamURL;
        }

        if (null !== $request->subSpecAudioUsers) {
            @$query['SubSpecAudioUsers'] = $request->subSpecAudioUsers;
        }

        if (null !== $request->subSpecCameraUsers) {
            @$query['SubSpecCameraUsers'] = $request->subSpecCameraUsers;
        }

        if (null !== $request->subSpecShareScreenUsers) {
            @$query['SubSpecShareScreenUsers'] = $request->subSpecShareScreenUsers;
        }

        if (null !== $request->subSpecUsers) {
            @$query['SubSpecUsers'] = $request->subSpecUsers;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->timeStampRef) {
            @$query['TimeStampRef'] = $request->timeStampRef;
        }

        if (null !== $request->unsubSpecAudioUsers) {
            @$query['UnsubSpecAudioUsers'] = $request->unsubSpecAudioUsers;
        }

        if (null !== $request->unsubSpecCameraUsers) {
            @$query['UnsubSpecCameraUsers'] = $request->unsubSpecCameraUsers;
        }

        if (null !== $request->unsubSpecShareScreenUsers) {
            @$query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        }

        if (null !== $request->userPanes) {
            @$query['UserPanes'] = $request->userPanes;
        }

        if (null !== $request->vadInterval) {
            @$query['VadInterval'] = $request->vadInterval;
        }

        if (null !== $request->watermarks) {
            @$query['Watermarks'] = $request->watermarks;
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->enhancedParam) {
            @$bodyFlat['EnhancedParam'] = $request->enhancedParam;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartMPUTask',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartMPUTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartMPUTaskRequest
     *
     * @returns StartMPUTaskResponse
     *
     * @param StartMPUTaskRequest $request
     *
     * @return StartMPUTaskResponse
     */
    public function startMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - StartRecordTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRecordTaskResponse
     *
     * @param StartRecordTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartRecordTaskResponse
     */
    public function startRecordTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->cropMode) {
            @$query['CropMode'] = $request->cropMode;
        }

        if (null !== $request->layoutIds) {
            @$query['LayoutIds'] = $request->layoutIds;
        }

        if (null !== $request->mediaEncode) {
            @$query['MediaEncode'] = $request->mediaEncode;
        }

        if (null !== $request->mixMode) {
            @$query['MixMode'] = $request->mixMode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->streamType) {
            @$query['StreamType'] = $request->streamType;
        }

        if (null !== $request->subSpecAudioUsers) {
            @$query['SubSpecAudioUsers'] = $request->subSpecAudioUsers;
        }

        if (null !== $request->subSpecCameraUsers) {
            @$query['SubSpecCameraUsers'] = $request->subSpecCameraUsers;
        }

        if (null !== $request->subSpecShareScreenUsers) {
            @$query['SubSpecShareScreenUsers'] = $request->subSpecShareScreenUsers;
        }

        if (null !== $request->subSpecUsers) {
            @$query['SubSpecUsers'] = $request->subSpecUsers;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskProfile) {
            @$query['TaskProfile'] = $request->taskProfile;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->unsubSpecAudioUsers) {
            @$query['UnsubSpecAudioUsers'] = $request->unsubSpecAudioUsers;
        }

        if (null !== $request->unsubSpecCameraUsers) {
            @$query['UnsubSpecCameraUsers'] = $request->unsubSpecCameraUsers;
        }

        if (null !== $request->unsubSpecShareScreenUsers) {
            @$query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        }

        if (null !== $request->userPanes) {
            @$query['UserPanes'] = $request->userPanes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartRecordTask',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartRecordTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartRecordTaskRequest
     *
     * @returns StartRecordTaskResponse
     *
     * @param StartRecordTaskRequest $request
     *
     * @return StartRecordTaskResponse
     */
    public function startRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordTaskWithOptions($request, $runtime);
    }

    /**
     * StartStreamingOut.
     *
     * @param tmpReq - StartStreamingOutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartStreamingOutResponse
     *
     * @param StartStreamingOutRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return StartStreamingOutResponse
     */
    public function startStreamingOutWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartStreamingOutShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->layoutSpecifiedUsers) {
            $request->layoutSpecifiedUsersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->layoutSpecifiedUsers, 'LayoutSpecifiedUsers', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backgrounds) {
            @$query['Backgrounds'] = $request->backgrounds;
        }

        if (null !== $request->bgColor) {
            @$query['BgColor'] = $request->bgColor;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->clockWidgets) {
            @$query['ClockWidgets'] = $request->clockWidgets;
        }

        if (null !== $request->cropMode) {
            @$query['CropMode'] = $request->cropMode;
        }

        if (null !== $request->images) {
            @$query['Images'] = $request->images;
        }

        if (null !== $request->layoutSpecifiedUsersShrink) {
            @$query['LayoutSpecifiedUsers'] = $request->layoutSpecifiedUsersShrink;
        }

        if (null !== $request->panes) {
            @$query['Panes'] = $request->panes;
        }

        if (null !== $request->regionColor) {
            @$query['RegionColor'] = $request->regionColor;
        }

        if (null !== $request->reservePaneForNoCameraUser) {
            @$query['ReservePaneForNoCameraUser'] = $request->reservePaneForNoCameraUser;
        }

        if (null !== $request->showDefaultBackgroundOnMute) {
            @$query['ShowDefaultBackgroundOnMute'] = $request->showDefaultBackgroundOnMute;
        }

        if (null !== $request->startWithoutChannel) {
            @$query['StartWithoutChannel'] = $request->startWithoutChannel;
        }

        if (null !== $request->startWithoutChannelWaitTime) {
            @$query['StartWithoutChannelWaitTime'] = $request->startWithoutChannelWaitTime;
        }

        if (null !== $request->subHighResolutionStream) {
            @$query['SubHighResolutionStream'] = $request->subHighResolutionStream;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->texts) {
            @$query['Texts'] = $request->texts;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartStreamingOut',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartStreamingOutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StartStreamingOut.
     *
     * @param request - StartStreamingOutRequest
     *
     * @returns StartStreamingOutResponse
     *
     * @param StartStreamingOutRequest $request
     *
     * @return StartStreamingOutResponse
     */
    public function startStreamingOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startStreamingOutWithOptions($request, $runtime);
    }

    /**
     * 停止AI Agent.
     *
     * @param request - StopAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAgentResponse
     *
     * @param StopAgentRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopAgentResponse
     */
    public function stopAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopAgent',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止AI Agent.
     *
     * @param request - StopAgentRequest
     *
     * @returns StopAgentResponse
     *
     * @param StopAgentRequest $request
     *
     * @return StopAgentResponse
     */
    public function stopAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAgentWithOptions($request, $runtime);
    }

    /**
     * 关闭某个事件回调.
     *
     * @param tmpReq - StopCategoryCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopCategoryCallbackResponse
     *
     * @param StopCategoryCallbackRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return StopCategoryCallbackResponse
     */
    public function stopCategoryCallbackWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StopCategoryCallbackShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->callback) {
            $request->callbackShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callback, 'Callback', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->callbackShrink) {
            @$query['Callback'] = $request->callbackShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopCategoryCallback',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopCategoryCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭某个事件回调.
     *
     * @param request - StopCategoryCallbackRequest
     *
     * @returns StopCategoryCallbackResponse
     *
     * @param StopCategoryCallbackRequest $request
     *
     * @return StopCategoryCallbackResponse
     */
    public function stopCategoryCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCategoryCallbackWithOptions($request, $runtime);
    }

    /**
     * 删除频道.
     *
     * @param request - StopChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopChannelResponse
     *
     * @param StopChannelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopChannelResponse
     */
    public function stopChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopChannel',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除频道.
     *
     * @param request - StopChannelRequest
     *
     * @returns StopChannelResponse
     *
     * @param StopChannelRequest $request
     *
     * @return StopChannelResponse
     */
    public function stopChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopChannelWithOptions($request, $runtime);
    }

    /**
     * 停止智能纪要
     *
     * @param request - StopCloudNoteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopCloudNoteResponse
     *
     * @param StopCloudNoteRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopCloudNoteResponse
     */
    public function stopCloudNoteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopCloudNote',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopCloudNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止智能纪要
     *
     * @param request - StopCloudNoteRequest
     *
     * @returns StopCloudNoteResponse
     *
     * @param StopCloudNoteRequest $request
     *
     * @return StopCloudNoteResponse
     */
    public function stopCloudNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCloudNoteWithOptions($request, $runtime);
    }

    /**
     * StopCloudRecord.
     *
     * @param request - StopCloudRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopCloudRecordResponse
     *
     * @param StopCloudRecordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopCloudRecordResponse
     */
    public function stopCloudRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopCloudRecord',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StopCloudRecord.
     *
     * @param request - StopCloudRecordRequest
     *
     * @returns StopCloudRecordResponse
     *
     * @param StopCloudRecordRequest $request
     *
     * @return StopCloudRecordResponse
     */
    public function stopCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCloudRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - StopMPUTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopMPUTaskResponse
     *
     * @param StopMPUTaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopMPUTaskResponse
     */
    public function stopMPUTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopMPUTask',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopMPUTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopMPUTaskRequest
     *
     * @returns StopMPUTaskResponse
     *
     * @param StopMPUTaskRequest $request
     *
     * @return StopMPUTaskResponse
     */
    public function stopMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - StopRecordTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopRecordTaskResponse
     *
     * @param StopRecordTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopRecordTaskResponse
     */
    public function stopRecordTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopRecordTask',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopRecordTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopRecordTaskRequest
     *
     * @returns StopRecordTaskResponse
     *
     * @param StopRecordTaskRequest $request
     *
     * @return StopRecordTaskResponse
     */
    public function stopRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordTaskWithOptions($request, $runtime);
    }

    /**
     * StopStreamingOut.
     *
     * @param request - StopStreamingOutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopStreamingOutResponse
     *
     * @param StopStreamingOutRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopStreamingOutResponse
     */
    public function stopStreamingOutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopStreamingOut',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopStreamingOutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StopStreamingOut.
     *
     * @param request - StopStreamingOutRequest
     *
     * @returns StopStreamingOutResponse
     *
     * @param StopStreamingOutRequest $request
     *
     * @return StopStreamingOutResponse
     */
    public function stopStreamingOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStreamingOutWithOptions($request, $runtime);
    }

    /**
     * 更新AI Agent.
     *
     * @param tmpReq - UpdateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAgentResponse
     */
    public function updateAgentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->voiceChatConfig) {
            $request->voiceChatConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->voiceChatConfig, 'VoiceChatConfig', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->voiceChatConfigShrink) {
            @$query['VoiceChatConfig'] = $request->voiceChatConfigShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAgent',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新AI Agent.
     *
     * @param request - UpdateAgentRequest
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $request
     *
     * @return UpdateAgentResponse
     */
    public function updateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgentWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateAutoLiveStreamRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoLiveStreamRuleResponse
     *
     * @param UpdateAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAutoLiveStreamRuleResponse
     */
    public function updateAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->callBack) {
            @$query['CallBack'] = $request->callBack;
        }

        if (null !== $request->channelIdPrefixes) {
            @$query['ChannelIdPrefixes'] = $request->channelIdPrefixes;
        }

        if (null !== $request->channelIds) {
            @$query['ChannelIds'] = $request->channelIds;
        }

        if (null !== $request->mediaEncode) {
            @$query['MediaEncode'] = $request->mediaEncode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playDomain) {
            @$query['PlayDomain'] = $request->playDomain;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoLiveStreamRule',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAutoLiveStreamRuleRequest
     *
     * @returns UpdateAutoLiveStreamRuleResponse
     *
     * @param UpdateAutoLiveStreamRuleRequest $request
     *
     * @return UpdateAutoLiveStreamRuleResponse
     */
    public function updateAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * 更新云端录制任务
     *
     * @param tmpReq - UpdateCloudRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudRecordResponse
     *
     * @param UpdateCloudRecordRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCloudRecordResponse
     */
    public function updateCloudRecordWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCloudRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->layoutSpecifiedUsers) {
            $request->layoutSpecifiedUsersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->layoutSpecifiedUsers, 'LayoutSpecifiedUsers', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backgrounds) {
            @$query['Backgrounds'] = $request->backgrounds;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->clockWidgets) {
            @$query['ClockWidgets'] = $request->clockWidgets;
        }

        if (null !== $request->images) {
            @$query['Images'] = $request->images;
        }

        if (null !== $request->layoutSpecifiedUsersShrink) {
            @$query['LayoutSpecifiedUsers'] = $request->layoutSpecifiedUsersShrink;
        }

        if (null !== $request->panes) {
            @$query['Panes'] = $request->panes;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->texts) {
            @$query['Texts'] = $request->texts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudRecord',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新云端录制任务
     *
     * @param request - UpdateCloudRecordRequest
     *
     * @returns UpdateCloudRecordResponse
     *
     * @param UpdateCloudRecordRequest $request
     *
     * @return UpdateCloudRecordResponse
     */
    public function updateCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateMPUTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMPUTaskResponse
     *
     * @param UpdateMPUTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateMPUTaskResponse
     */
    public function updateMPUTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backgroundColor) {
            @$query['BackgroundColor'] = $request->backgroundColor;
        }

        if (null !== $request->backgrounds) {
            @$query['Backgrounds'] = $request->backgrounds;
        }

        if (null !== $request->clockWidgets) {
            @$query['ClockWidgets'] = $request->clockWidgets;
        }

        if (null !== $request->cropMode) {
            @$query['CropMode'] = $request->cropMode;
        }

        if (null !== $request->layoutIds) {
            @$query['LayoutIds'] = $request->layoutIds;
        }

        if (null !== $request->mediaEncode) {
            @$query['MediaEncode'] = $request->mediaEncode;
        }

        if (null !== $request->mixMode) {
            @$query['MixMode'] = $request->mixMode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->streamType) {
            @$query['StreamType'] = $request->streamType;
        }

        if (null !== $request->subSpecAudioUsers) {
            @$query['SubSpecAudioUsers'] = $request->subSpecAudioUsers;
        }

        if (null !== $request->subSpecCameraUsers) {
            @$query['SubSpecCameraUsers'] = $request->subSpecCameraUsers;
        }

        if (null !== $request->subSpecShareScreenUsers) {
            @$query['SubSpecShareScreenUsers'] = $request->subSpecShareScreenUsers;
        }

        if (null !== $request->subSpecUsers) {
            @$query['SubSpecUsers'] = $request->subSpecUsers;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->unsubSpecAudioUsers) {
            @$query['UnsubSpecAudioUsers'] = $request->unsubSpecAudioUsers;
        }

        if (null !== $request->unsubSpecCameraUsers) {
            @$query['UnsubSpecCameraUsers'] = $request->unsubSpecCameraUsers;
        }

        if (null !== $request->unsubSpecShareScreenUsers) {
            @$query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        }

        if (null !== $request->userPanes) {
            @$query['UserPanes'] = $request->userPanes;
        }

        if (null !== $request->watermarks) {
            @$query['Watermarks'] = $request->watermarks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMPUTask',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMPUTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateMPUTaskRequest
     *
     * @returns UpdateMPUTaskResponse
     *
     * @param UpdateMPUTaskRequest $request
     *
     * @return UpdateMPUTaskResponse
     */
    public function updateMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateRecordTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecordTaskResponse
     *
     * @param UpdateRecordTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRecordTaskResponse
     */
    public function updateRecordTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->cropMode) {
            @$query['CropMode'] = $request->cropMode;
        }

        if (null !== $request->layoutIds) {
            @$query['LayoutIds'] = $request->layoutIds;
        }

        if (null !== $request->mediaEncode) {
            @$query['MediaEncode'] = $request->mediaEncode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->subSpecAudioUsers) {
            @$query['SubSpecAudioUsers'] = $request->subSpecAudioUsers;
        }

        if (null !== $request->subSpecCameraUsers) {
            @$query['SubSpecCameraUsers'] = $request->subSpecCameraUsers;
        }

        if (null !== $request->subSpecShareScreenUsers) {
            @$query['SubSpecShareScreenUsers'] = $request->subSpecShareScreenUsers;
        }

        if (null !== $request->subSpecUsers) {
            @$query['SubSpecUsers'] = $request->subSpecUsers;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskProfile) {
            @$query['TaskProfile'] = $request->taskProfile;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->unsubSpecAudioUsers) {
            @$query['UnsubSpecAudioUsers'] = $request->unsubSpecAudioUsers;
        }

        if (null !== $request->unsubSpecCameraUsers) {
            @$query['UnsubSpecCameraUsers'] = $request->unsubSpecCameraUsers;
        }

        if (null !== $request->unsubSpecShareScreenUsers) {
            @$query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        }

        if (null !== $request->userPanes) {
            @$query['UserPanes'] = $request->userPanes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecordTask',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecordTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateRecordTaskRequest
     *
     * @returns UpdateRecordTaskResponse
     *
     * @param UpdateRecordTaskRequest $request
     *
     * @return UpdateRecordTaskResponse
     */
    public function updateRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecordTemplateResponse
     *
     * @param UpdateRecordTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRecordTemplateResponse
     */
    public function updateRecordTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backgroundColor) {
            @$query['BackgroundColor'] = $request->backgroundColor;
        }

        if (null !== $request->backgrounds) {
            @$query['Backgrounds'] = $request->backgrounds;
        }

        if (null !== $request->clockWidgets) {
            @$query['ClockWidgets'] = $request->clockWidgets;
        }

        if (null !== $request->delayStopTime) {
            @$query['DelayStopTime'] = $request->delayStopTime;
        }

        if (null !== $request->enableM3u8DateTime) {
            @$query['EnableM3u8DateTime'] = $request->enableM3u8DateTime;
        }

        if (null !== $request->fileSplitInterval) {
            @$query['FileSplitInterval'] = $request->fileSplitInterval;
        }

        if (null !== $request->formats) {
            @$query['Formats'] = $request->formats;
        }

        if (null !== $request->httpCallbackUrl) {
            @$query['HttpCallbackUrl'] = $request->httpCallbackUrl;
        }

        if (null !== $request->layoutIds) {
            @$query['LayoutIds'] = $request->layoutIds;
        }

        if (null !== $request->mediaEncode) {
            @$query['MediaEncode'] = $request->mediaEncode;
        }

        if (null !== $request->mnsQueue) {
            @$query['MnsQueue'] = $request->mnsQueue;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        if (null !== $request->ossFilePrefix) {
            @$query['OssFilePrefix'] = $request->ossFilePrefix;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->taskProfile) {
            @$query['TaskProfile'] = $request->taskProfile;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->watermarks) {
            @$query['Watermarks'] = $request->watermarks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecordTemplate',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateRecordTemplateRequest
     *
     * @returns UpdateRecordTemplateResponse
     *
     * @param UpdateRecordTemplateRequest $request
     *
     * @return UpdateRecordTemplateResponse
     */
    public function updateRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * 更新旁路推流任务
     *
     * @param tmpReq - UpdateStreamingOutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStreamingOutResponse
     *
     * @param UpdateStreamingOutRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateStreamingOutResponse
     */
    public function updateStreamingOutWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateStreamingOutShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->layoutSpecifiedUsers) {
            $request->layoutSpecifiedUsersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->layoutSpecifiedUsers, 'LayoutSpecifiedUsers', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->backgrounds) {
            @$query['Backgrounds'] = $request->backgrounds;
        }

        if (null !== $request->bgColor) {
            @$query['BgColor'] = $request->bgColor;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->clockWidgets) {
            @$query['ClockWidgets'] = $request->clockWidgets;
        }

        if (null !== $request->cropMode) {
            @$query['CropMode'] = $request->cropMode;
        }

        if (null !== $request->images) {
            @$query['Images'] = $request->images;
        }

        if (null !== $request->layoutSpecifiedUsersShrink) {
            @$query['LayoutSpecifiedUsers'] = $request->layoutSpecifiedUsersShrink;
        }

        if (null !== $request->panes) {
            @$query['Panes'] = $request->panes;
        }

        if (null !== $request->regionColor) {
            @$query['RegionColor'] = $request->regionColor;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->texts) {
            @$query['Texts'] = $request->texts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateStreamingOut',
            'version' => '2018-01-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateStreamingOutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新旁路推流任务
     *
     * @param request - UpdateStreamingOutRequest
     *
     * @returns UpdateStreamingOutResponse
     *
     * @param UpdateStreamingOutRequest $request
     *
     * @return UpdateStreamingOutResponse
     */
    public function updateStreamingOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStreamingOutWithOptions($request, $runtime);
    }
}
