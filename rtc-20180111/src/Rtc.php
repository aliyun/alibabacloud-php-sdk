<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddRecordTemplateRequest $request AddRecordTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddRecordTemplateResponse AddRecordTemplateResponse
     */
    public function addRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backgroundColor)) {
            $query['BackgroundColor'] = $request->backgroundColor;
        }
        if (!Utils::isUnset($request->backgrounds)) {
            $query['Backgrounds'] = $request->backgrounds;
        }
        if (!Utils::isUnset($request->clockWidgets)) {
            $query['ClockWidgets'] = $request->clockWidgets;
        }
        if (!Utils::isUnset($request->delayStopTime)) {
            $query['DelayStopTime'] = $request->delayStopTime;
        }
        if (!Utils::isUnset($request->enableM3u8DateTime)) {
            $query['EnableM3u8DateTime'] = $request->enableM3u8DateTime;
        }
        if (!Utils::isUnset($request->fileSplitInterval)) {
            $query['FileSplitInterval'] = $request->fileSplitInterval;
        }
        if (!Utils::isUnset($request->formats)) {
            $query['Formats'] = $request->formats;
        }
        if (!Utils::isUnset($request->httpCallbackUrl)) {
            $query['HttpCallbackUrl'] = $request->httpCallbackUrl;
        }
        if (!Utils::isUnset($request->layoutIds)) {
            $query['LayoutIds'] = $request->layoutIds;
        }
        if (!Utils::isUnset($request->mediaEncode)) {
            $query['MediaEncode'] = $request->mediaEncode;
        }
        if (!Utils::isUnset($request->mnsQueue)) {
            $query['MnsQueue'] = $request->mnsQueue;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossFilePrefix)) {
            $query['OssFilePrefix'] = $request->ossFilePrefix;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskProfile)) {
            $query['TaskProfile'] = $request->taskProfile;
        }
        if (!Utils::isUnset($request->watermarks)) {
            $query['Watermarks'] = $request->watermarks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param AddRecordTemplateRequest $request AddRecordTemplateRequest
     *
     * @return AddRecordTemplateResponse AddRecordTemplateResponse
     */
    public function addRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 创建应用智能体模版
     *  *
     * @param CreateAppAgentTemplateRequest $tmpReq  CreateAppAgentTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppAgentTemplateResponse CreateAppAgentTemplateResponse
     */
    public function createAppAgentTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppAgentTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->asrConfig)) {
            $request->asrConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->asrConfig, 'AsrConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->llmConfig)) {
            $request->llmConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->llmConfig, 'LlmConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->ttsConfig)) {
            $request->ttsConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ttsConfig, 'TtsConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->asrConfigShrink)) {
            $query['AsrConfig'] = $request->asrConfigShrink;
        }
        if (!Utils::isUnset($request->chatMode)) {
            $query['ChatMode'] = $request->chatMode;
        }
        if (!Utils::isUnset($request->greeting)) {
            $query['Greeting'] = $request->greeting;
        }
        if (!Utils::isUnset($request->interruptMode)) {
            $query['InterruptMode'] = $request->interruptMode;
        }
        if (!Utils::isUnset($request->llmConfigShrink)) {
            $query['LlmConfig'] = $request->llmConfigShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ttsConfigShrink)) {
            $query['TtsConfig'] = $request->ttsConfigShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 创建应用智能体模版
     *  *
     * @param CreateAppAgentTemplateRequest $request CreateAppAgentTemplateRequest
     *
     * @return CreateAppAgentTemplateResponse CreateAppAgentTemplateResponse
     */
    public function createAppAgentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppAgentTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 新增app自定义布局
     *  *
     * @param CreateAppLayoutRequest $tmpReq  CreateAppLayoutRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppLayoutResponse CreateAppLayoutResponse
     */
    public function createAppLayoutWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppLayoutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->layout)) {
            $request->layoutShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->layout, 'Layout', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->layoutShrink)) {
            $query['Layout'] = $request->layoutShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 新增app自定义布局
     *  *
     * @param CreateAppLayoutRequest $request CreateAppLayoutRequest
     *
     * @return CreateAppLayoutResponse CreateAppLayoutResponse
     */
    public function createAppLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppLayoutWithOptions($request, $runtime);
    }

    /**
     * @summary 增加应用录制模版
     *  *
     * @param CreateAppRecordTemplateRequest $tmpReq  CreateAppRecordTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppRecordTemplateResponse CreateAppRecordTemplateResponse
     */
    public function createAppRecordTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppRecordTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordTemplate)) {
            $request->recordTemplateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordTemplate, 'RecordTemplate', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->recordTemplateShrink)) {
            $query['RecordTemplate'] = $request->recordTemplateShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 增加应用录制模版
     *  *
     * @param CreateAppRecordTemplateRequest $request CreateAppRecordTemplateRequest
     *
     * @return CreateAppRecordTemplateResponse CreateAppRecordTemplateResponse
     */
    public function createAppRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 创建应用推流模版
     *  *
     * @param CreateAppStreamingOutTemplateRequest $tmpReq  CreateAppStreamingOutTemplateRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppStreamingOutTemplateResponse CreateAppStreamingOutTemplateResponse
     */
    public function createAppStreamingOutTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppStreamingOutTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamingOutTemplate)) {
            $request->streamingOutTemplateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamingOutTemplate, 'StreamingOutTemplate', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->streamingOutTemplateShrink)) {
            $query['StreamingOutTemplate'] = $request->streamingOutTemplateShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 创建应用推流模版
     *  *
     * @param CreateAppStreamingOutTemplateRequest $request CreateAppStreamingOutTemplateRequest
     *
     * @return CreateAppStreamingOutTemplateResponse CreateAppStreamingOutTemplateResponse
     */
    public function createAppStreamingOutTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppStreamingOutTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateAutoLiveStreamRuleRequest $request CreateAutoLiveStreamRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAutoLiveStreamRuleResponse CreateAutoLiveStreamRuleResponse
     */
    public function createAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callBack)) {
            $query['CallBack'] = $request->callBack;
        }
        if (!Utils::isUnset($request->channelIdPrefixes)) {
            $query['ChannelIdPrefixes'] = $request->channelIdPrefixes;
        }
        if (!Utils::isUnset($request->channelIds)) {
            $query['ChannelIds'] = $request->channelIds;
        }
        if (!Utils::isUnset($request->mediaEncode)) {
            $query['MediaEncode'] = $request->mediaEncode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param CreateAutoLiveStreamRuleRequest $request CreateAutoLiveStreamRuleRequest
     *
     * @return CreateAutoLiveStreamRuleResponse CreateAutoLiveStreamRuleResponse
     */
    public function createAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 增加纪要热词表
     *  *
     * @param CreateCloudNotePhrasesRequest $tmpReq  CreateCloudNotePhrasesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudNotePhrasesResponse CreateCloudNotePhrasesResponse
     */
    public function createCloudNotePhrasesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCloudNotePhrasesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phrase)) {
            $request->phraseShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phrase, 'Phrase', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->phraseShrink)) {
            $query['Phrase'] = $request->phraseShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 增加纪要热词表
     *  *
     * @param CreateCloudNotePhrasesRequest $request CreateCloudNotePhrasesRequest
     *
     * @return CreateCloudNotePhrasesResponse CreateCloudNotePhrasesResponse
     */
    public function createCloudNotePhrases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudNotePhrasesWithOptions($request, $runtime);
    }

    /**
     * @param CreateEventSubscribeRequest $request CreateEventSubscribeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEventSubscribeResponse CreateEventSubscribeResponse
     */
    public function createEventSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->events)) {
            $query['Events'] = $request->events;
        }
        if (!Utils::isUnset($request->needCallbackAuth)) {
            $query['NeedCallbackAuth'] = $request->needCallbackAuth;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->users)) {
            $query['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param CreateEventSubscribeRequest $request CreateEventSubscribeRequest
     *
     * @return CreateEventSubscribeResponse CreateEventSubscribeResponse
     */
    public function createEventSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param CreateMPULayoutRequest $request CreateMPULayoutRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMPULayoutResponse CreateMPULayoutResponse
     */
    public function createMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->audioMixCount)) {
            $query['AudioMixCount'] = $request->audioMixCount;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->panes)) {
            $query['Panes'] = $request->panes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param CreateMPULayoutRequest $request CreateMPULayoutRequest
     *
     * @return CreateMPULayoutResponse CreateMPULayoutResponse
     */
    public function createMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @summary 删除应用智能体模版
     *  *
     * @param DeleteAppAgentTemplateRequest $request DeleteAppAgentTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppAgentTemplateResponse DeleteAppAgentTemplateResponse
     */
    public function deleteAppAgentTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除应用智能体模版
     *  *
     * @param DeleteAppAgentTemplateRequest $request DeleteAppAgentTemplateRequest
     *
     * @return DeleteAppAgentTemplateResponse DeleteAppAgentTemplateResponse
     */
    public function deleteAppAgentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppAgentTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除app自定义布局
     *  *
     * @param DeleteAppLayoutRequest $tmpReq  DeleteAppLayoutRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppLayoutResponse DeleteAppLayoutResponse
     */
    public function deleteAppLayoutWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAppLayoutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->layout)) {
            $request->layoutShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->layout, 'Layout', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->layoutShrink)) {
            $query['Layout'] = $request->layoutShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除app自定义布局
     *  *
     * @param DeleteAppLayoutRequest $request DeleteAppLayoutRequest
     *
     * @return DeleteAppLayoutResponse DeleteAppLayoutResponse
     */
    public function deleteAppLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppLayoutWithOptions($request, $runtime);
    }

    /**
     * @summary 删除应用录制模版
     *  *
     * @param DeleteAppRecordTemplateRequest $tmpReq  DeleteAppRecordTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppRecordTemplateResponse DeleteAppRecordTemplateResponse
     */
    public function deleteAppRecordTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAppRecordTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->template)) {
            $request->templateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->templateShrink)) {
            $query['Template'] = $request->templateShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除应用录制模版
     *  *
     * @param DeleteAppRecordTemplateRequest $request DeleteAppRecordTemplateRequest
     *
     * @return DeleteAppRecordTemplateResponse DeleteAppRecordTemplateResponse
     */
    public function deleteAppRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除应用推流模版
     *  *
     * @param DeleteAppStreamingOutTemplateRequest $tmpReq  DeleteAppStreamingOutTemplateRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppStreamingOutTemplateResponse DeleteAppStreamingOutTemplateResponse
     */
    public function deleteAppStreamingOutTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAppStreamingOutTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamingOutTemplate)) {
            $request->streamingOutTemplateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamingOutTemplate, 'StreamingOutTemplate', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->streamingOutTemplateShrink)) {
            $query['StreamingOutTemplate'] = $request->streamingOutTemplateShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除应用推流模版
     *  *
     * @param DeleteAppStreamingOutTemplateRequest $request DeleteAppStreamingOutTemplateRequest
     *
     * @return DeleteAppStreamingOutTemplateResponse DeleteAppStreamingOutTemplateResponse
     */
    public function deleteAppStreamingOutTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppStreamingOutTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAutoLiveStreamRuleRequest $request DeleteAutoLiveStreamRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAutoLiveStreamRuleResponse DeleteAutoLiveStreamRuleResponse
     */
    public function deleteAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteAutoLiveStreamRuleRequest $request DeleteAutoLiveStreamRuleRequest
     *
     * @return DeleteAutoLiveStreamRuleResponse DeleteAutoLiveStreamRuleResponse
     */
    public function deleteAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChannelRequest $request DeleteChannelRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteChannelResponse DeleteChannelResponse
     */
    public function deleteChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteChannelRequest $request DeleteChannelRequest
     *
     * @return DeleteChannelResponse DeleteChannelResponse
     */
    public function deleteChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChannelWithOptions($request, $runtime);
    }

    /**
     * @summary 删除纪要热词表
     *  *
     * @param DeleteCloudNotePhrasesRequest $tmpReq  DeleteCloudNotePhrasesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCloudNotePhrasesResponse DeleteCloudNotePhrasesResponse
     */
    public function deleteCloudNotePhrasesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteCloudNotePhrasesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phrase)) {
            $request->phraseShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phrase, 'Phrase', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->phraseShrink)) {
            $query['Phrase'] = $request->phraseShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除纪要热词表
     *  *
     * @param DeleteCloudNotePhrasesRequest $request DeleteCloudNotePhrasesRequest
     *
     * @return DeleteCloudNotePhrasesResponse DeleteCloudNotePhrasesResponse
     */
    public function deleteCloudNotePhrases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudNotePhrasesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventSubscribeRequest $request DeleteEventSubscribeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEventSubscribeResponse DeleteEventSubscribeResponse
     */
    public function deleteEventSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->subscribeId)) {
            $query['SubscribeId'] = $request->subscribeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteEventSubscribeRequest $request DeleteEventSubscribeRequest
     *
     * @return DeleteEventSubscribeResponse DeleteEventSubscribeResponse
     */
    public function deleteEventSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMPULayoutRequest $request DeleteMPULayoutRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMPULayoutResponse DeleteMPULayoutResponse
     */
    public function deleteMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteMPULayoutRequest $request DeleteMPULayoutRequest
     *
     * @return DeleteMPULayoutResponse DeleteMPULayoutResponse
     */
    public function deleteMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecordTemplateRequest $request DeleteRecordTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRecordTemplateResponse DeleteRecordTemplateResponse
     */
    public function deleteRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteRecordTemplateRequest $request DeleteRecordTemplateRequest
     *
     * @return DeleteRecordTemplateResponse DeleteRecordTemplateResponse
     */
    public function deleteRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 列出系统支持的事件回调
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllCallbackResponse DescribeAllCallbackResponse
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
     * @summary 列出系统支持的事件回调
     *  *
     * @return DescribeAllCallbackResponse DescribeAllCallbackResponse
     */
    public function describeAllCallback()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllCallbackWithOptions($runtime);
    }

    /**
     * @summary 查询应用智能体开关
     *  *
     * @param DescribeAppAgentFunctionStatusRequest $request DescribeAppAgentFunctionStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppAgentFunctionStatusResponse DescribeAppAgentFunctionStatusResponse
     */
    public function describeAppAgentFunctionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询应用智能体开关
     *  *
     * @param DescribeAppAgentFunctionStatusRequest $request DescribeAppAgentFunctionStatusRequest
     *
     * @return DescribeAppAgentFunctionStatusResponse DescribeAppAgentFunctionStatusResponse
     */
    public function describeAppAgentFunctionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppAgentFunctionStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 应用智能体模版列表
     *  *
     * @param DescribeAppAgentTemplatesRequest $request DescribeAppAgentTemplatesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppAgentTemplatesResponse DescribeAppAgentTemplatesResponse
     */
    public function describeAppAgentTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 应用智能体模版列表
     *  *
     * @param DescribeAppAgentTemplatesRequest $request DescribeAppAgentTemplatesRequest
     *
     * @return DescribeAppAgentTemplatesResponse DescribeAppAgentTemplatesResponse
     */
    public function describeAppAgentTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppAgentTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary 查看app回调开关
     *  *
     * @param DescribeAppCallStatusRequest $request DescribeAppCallStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppCallStatusResponse DescribeAppCallStatusResponse
     */
    public function describeAppCallStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查看app回调开关
     *  *
     * @param DescribeAppCallStatusRequest $request DescribeAppCallStatusRequest
     *
     * @return DescribeAppCallStatusResponse DescribeAppCallStatusResponse
     */
    public function describeAppCallStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppCallStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 获取app回调密钥
     *  *
     * @param DescribeAppCallbackSecretKeyRequest $request DescribeAppCallbackSecretKeyRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppCallbackSecretKeyResponse DescribeAppCallbackSecretKeyResponse
     */
    public function describeAppCallbackSecretKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取app回调密钥
     *  *
     * @param DescribeAppCallbackSecretKeyRequest $request DescribeAppCallbackSecretKeyRequest
     *
     * @return DescribeAppCallbackSecretKeyResponse DescribeAppCallbackSecretKeyResponse
     */
    public function describeAppCallbackSecretKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppCallbackSecretKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 查看AppKey
     *  *
     * @param DescribeAppKeyRequest $request DescribeAppKeyRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppKeyResponse DescribeAppKeyResponse
     */
    public function describeAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查看AppKey
     *  *
     * @param DescribeAppKeyRequest $request DescribeAppKeyRequest
     *
     * @return DescribeAppKeyResponse DescribeAppKeyResponse
     */
    public function describeAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 查询app自定义布局
     *  *
     * @param DescribeAppLayoutsRequest $tmpReq  DescribeAppLayoutsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppLayoutsResponse DescribeAppLayoutsResponse
     */
    public function describeAppLayoutsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeAppLayoutsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->condition)) {
            $request->conditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询app自定义布局
     *  *
     * @param DescribeAppLayoutsRequest $request DescribeAppLayoutsRequest
     *
     * @return DescribeAppLayoutsResponse DescribeAppLayoutsResponse
     */
    public function describeAppLayouts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppLayoutsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看应用旁路开关
     *  *
     * @param DescribeAppLiveStreamStatusRequest $request DescribeAppLiveStreamStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppLiveStreamStatusResponse DescribeAppLiveStreamStatusResponse
     */
    public function describeAppLiveStreamStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查看应用旁路开关
     *  *
     * @param DescribeAppLiveStreamStatusRequest $request DescribeAppLiveStreamStatusRequest
     *
     * @return DescribeAppLiveStreamStatusResponse DescribeAppLiveStreamStatusResponse
     */
    public function describeAppLiveStreamStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppLiveStreamStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 查询应用录制开关
     *  *
     * @param DescribeAppRecordStatusRequest $request DescribeAppRecordStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppRecordStatusResponse DescribeAppRecordStatusResponse
     */
    public function describeAppRecordStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询应用录制开关
     *  *
     * @param DescribeAppRecordStatusRequest $request DescribeAppRecordStatusRequest
     *
     * @return DescribeAppRecordStatusResponse DescribeAppRecordStatusResponse
     */
    public function describeAppRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppRecordStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 应用录制模版列表
     *  *
     * @param DescribeAppRecordTemplatesRequest $tmpReq  DescribeAppRecordTemplatesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppRecordTemplatesResponse DescribeAppRecordTemplatesResponse
     */
    public function describeAppRecordTemplatesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeAppRecordTemplatesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->condition)) {
            $request->conditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 应用录制模版列表
     *  *
     * @param DescribeAppRecordTemplatesRequest $request DescribeAppRecordTemplatesRequest
     *
     * @return DescribeAppRecordTemplatesResponse DescribeAppRecordTemplatesResponse
     */
    public function describeAppRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询录制列表
     *  *
     * @param DescribeAppRecordingFilesRequest $tmpReq  DescribeAppRecordingFilesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppRecordingFilesResponse DescribeAppRecordingFilesResponse
     */
    public function describeAppRecordingFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeAppRecordingFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIds)) {
            $request->taskIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询录制列表
     *  *
     * @param DescribeAppRecordingFilesRequest $request DescribeAppRecordingFilesRequest
     *
     * @return DescribeAppRecordingFilesResponse DescribeAppRecordingFilesResponse
     */
    public function describeAppRecordingFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppRecordingFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 应用推流模版列表
     *  *
     * @param DescribeAppStreamingOutTemplatesRequest $tmpReq  DescribeAppStreamingOutTemplatesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppStreamingOutTemplatesResponse DescribeAppStreamingOutTemplatesResponse
     */
    public function describeAppStreamingOutTemplatesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeAppStreamingOutTemplatesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->condition)) {
            $request->conditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->conditionShrink)) {
            $query['Condition'] = $request->conditionShrink;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 应用推流模版列表
     *  *
     * @param DescribeAppStreamingOutTemplatesRequest $request DescribeAppStreamingOutTemplatesRequest
     *
     * @return DescribeAppStreamingOutTemplatesResponse DescribeAppStreamingOutTemplatesResponse
     */
    public function describeAppStreamingOutTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppStreamingOutTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary App列表
     *  *
     * @param DescribeAppsRequest $request DescribeAppsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppsResponse DescribeAppsResponse
     */
    public function describeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary App列表
     *  *
     * @param DescribeAppsRequest $request DescribeAppsRequest
     *
     * @return DescribeAppsResponse DescribeAppsResponse
     */
    public function describeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoLiveStreamRuleRequest $request DescribeAutoLiveStreamRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoLiveStreamRuleResponse DescribeAutoLiveStreamRuleResponse
     */
    public function describeAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeAutoLiveStreamRuleRequest $request DescribeAutoLiveStreamRuleRequest
     *
     * @return DescribeAutoLiveStreamRuleResponse DescribeAutoLiveStreamRuleResponse
     */
    public function describeAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeCall获取单次通信详情。
     *  *
     * @param DescribeCallRequest $request DescribeCallRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCallResponse DescribeCallResponse
     */
    public function describeCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->extDataType)) {
            $query['ExtDataType'] = $request->extDataType;
        }
        if (!Utils::isUnset($request->queryExpInfo)) {
            $query['QueryExpInfo'] = $request->queryExpInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeCall获取单次通信详情。
     *  *
     * @param DescribeCallRequest $request DescribeCallRequest
     *
     * @return DescribeCallResponse DescribeCallResponse
     */
    public function describeCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCallWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeCallList分页查询时间范围内创建的通信信息。
     *  *
     * @param DescribeCallListRequest $request DescribeCallListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCallListResponse DescribeCallListResponse
     */
    public function describeCallListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callStatus)) {
            $query['CallStatus'] = $request->callStatus;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryMode)) {
            $query['QueryMode'] = $request->queryMode;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeCallList分页查询时间范围内创建的通信信息。
     *  *
     * @param DescribeCallListRequest $request DescribeCallListRequest
     *
     * @return DescribeCallListResponse DescribeCallListResponse
     */
    public function describeCallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCallListWithOptions($request, $runtime);
    }

    /**
     * @summary app事件回调列表
     *  *
     * @param DescribeCallbacksRequest $request DescribeCallbacksRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCallbacksResponse DescribeCallbacksResponse
     */
    public function describeCallbacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary app事件回调列表
     *  *
     * @param DescribeCallbacksRequest $request DescribeCallbacksRequest
     *
     * @return DescribeCallbacksResponse DescribeCallbacksResponse
     */
    public function describeCallbacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCallbacksWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeChannel
     *  *
     * @param DescribeChannelRequest $request DescribeChannelRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelResponse DescribeChannelResponse
     */
    public function describeChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary DescribeChannel
     *  *
     * @param DescribeChannelRequest $request DescribeChannelRequest
     *
     * @return DescribeChannelResponse DescribeChannelResponse
     */
    public function describeChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelWithOptions($request, $runtime);
    }

    /**
     * @summary 查询频道的所有参会者
     *  *
     * @param DescribeChannelAllUsersRequest $request DescribeChannelAllUsersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelAllUsersResponse DescribeChannelAllUsersResponse
     */
    public function describeChannelAllUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询频道的所有参会者
     *  *
     * @param DescribeChannelAllUsersRequest $request DescribeChannelAllUsersRequest
     *
     * @return DescribeChannelAllUsersResponse DescribeChannelAllUsersResponse
     */
    public function describeChannelAllUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelAllUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeChannelAreaDistributionStatData获取频道地区分布统计数据。
     *  *
     * @param DescribeChannelAreaDistributionStatDataRequest $request DescribeChannelAreaDistributionStatDataRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelAreaDistributionStatDataResponse DescribeChannelAreaDistributionStatDataResponse
     */
    public function describeChannelAreaDistributionStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->parentArea)) {
            $query['ParentArea'] = $request->parentArea;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeChannelAreaDistributionStatData获取频道地区分布统计数据。
     *  *
     * @param DescribeChannelAreaDistributionStatDataRequest $request DescribeChannelAreaDistributionStatDataRequest
     *
     * @return DescribeChannelAreaDistributionStatDataResponse DescribeChannelAreaDistributionStatDataResponse
     */
    public function describeChannelAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelAreaDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeChannelDistributionStatData获取频道分布统计数据。
     *  *
     * @param DescribeChannelDistributionStatDataRequest $request DescribeChannelDistributionStatDataRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelDistributionStatDataResponse DescribeChannelDistributionStatDataResponse
     */
    public function describeChannelDistributionStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->statDim)) {
            $query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeChannelDistributionStatData获取频道分布统计数据。
     *  *
     * @param DescribeChannelDistributionStatDataRequest $request DescribeChannelDistributionStatDataRequest
     *
     * @return DescribeChannelDistributionStatDataResponse DescribeChannelDistributionStatDataResponse
     */
    public function describeChannelDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeChannelOverallData查询频道概览数据。
     *  *
     * @param DescribeChannelOverallDataRequest $request DescribeChannelOverallDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelOverallDataResponse DescribeChannelOverallDataResponse
     */
    public function describeChannelOverallDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeChannelOverallData查询频道概览数据。
     *  *
     * @param DescribeChannelOverallDataRequest $request DescribeChannelOverallDataRequest
     *
     * @return DescribeChannelOverallDataResponse DescribeChannelOverallDataResponse
     */
    public function describeChannelOverallData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelOverallDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelParticipantsRequest $request DescribeChannelParticipantsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelParticipantsResponse DescribeChannelParticipantsResponse
     */
    public function describeChannelParticipantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeChannelParticipantsRequest $request DescribeChannelParticipantsRequest
     *
     * @return DescribeChannelParticipantsResponse DescribeChannelParticipantsResponse
     */
    public function describeChannelParticipants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelParticipantsWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeChannelTopPubUserList获取频道内发布端的用户列表（按用户在线时长降序）。
     *  *
     * @param DescribeChannelTopPubUserListRequest $request DescribeChannelTopPubUserListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelTopPubUserListResponse DescribeChannelTopPubUserListResponse
     */
    public function describeChannelTopPubUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeChannelTopPubUserList获取频道内发布端的用户列表（按用户在线时长降序）。
     *  *
     * @param DescribeChannelTopPubUserListRequest $request DescribeChannelTopPubUserListRequest
     *
     * @return DescribeChannelTopPubUserListResponse DescribeChannelTopPubUserListResponse
     */
    public function describeChannelTopPubUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelTopPubUserListWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeChannelUser
     *  *
     * @param DescribeChannelUserRequest $request DescribeChannelUserRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelUserResponse DescribeChannelUserResponse
     */
    public function describeChannelUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary DescribeChannelUser
     *  *
     * @param DescribeChannelUserRequest $request DescribeChannelUserRequest
     *
     * @return DescribeChannelUserResponse DescribeChannelUserResponse
     */
    public function describeChannelUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelUserWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeChannelUserMetrics查询频道总览中的用户数据。
     *  *
     * @param DescribeChannelUserMetricsRequest $request DescribeChannelUserMetricsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelUserMetricsResponse DescribeChannelUserMetricsResponse
     */
    public function describeChannelUserMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeChannelUserMetrics查询频道总览中的用户数据。
     *  *
     * @param DescribeChannelUserMetricsRequest $request DescribeChannelUserMetricsRequest
     *
     * @return DescribeChannelUserMetricsResponse DescribeChannelUserMetricsResponse
     */
    public function describeChannelUserMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelUserMetricsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelUsersRequest $request DescribeChannelUsersRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelUsersResponse DescribeChannelUsersResponse
     */
    public function describeChannelUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeChannelUsersRequest $request DescribeChannelUsersRequest
     *
     * @return DescribeChannelUsersResponse DescribeChannelUsersResponse
     */
    public function describeChannelUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询在线频道列表
     *  *
     * @param DescribeChannelsRequest $request DescribeChannelsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelsResponse DescribeChannelsResponse
     */
    public function describeChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询在线频道列表
     *  *
     * @param DescribeChannelsRequest $request DescribeChannelsRequest
     *
     * @return DescribeChannelsResponse DescribeChannelsResponse
     */
    public function describeChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelsWithOptions($request, $runtime);
    }

    /**
     * @summary 纪要热词列表
     *  *
     * @param DescribeCloudNotePhrasesRequest $tmpReq  DescribeCloudNotePhrasesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudNotePhrasesResponse DescribeCloudNotePhrasesResponse
     */
    public function describeCloudNotePhrasesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeCloudNotePhrasesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->condition)) {
            $request->conditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->condition, 'Condition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->conditionShrink)) {
            $query['Condition'] = $request->conditionShrink;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 纪要热词列表
     *  *
     * @param DescribeCloudNotePhrasesRequest $request DescribeCloudNotePhrasesRequest
     *
     * @return DescribeCloudNotePhrasesResponse DescribeCloudNotePhrasesResponse
     */
    public function describeCloudNotePhrases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudNotePhrasesWithOptions($request, $runtime);
    }

    /**
     * @summary 纪要列表
     *  *
     * @param DescribeCloudNotesRequest $tmpReq  DescribeCloudNotesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudNotesResponse DescribeCloudNotesResponse
     */
    public function describeCloudNotesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeCloudNotesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIds)) {
            $request->taskIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 纪要列表
     *  *
     * @param DescribeCloudNotesRequest $request DescribeCloudNotesRequest
     *
     * @return DescribeCloudNotesResponse DescribeCloudNotesResponse
     */
    public function describeCloudNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudNotesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询录制任务状态
     *  *
     * @param DescribeCloudRecordStatusRequest $request DescribeCloudRecordStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudRecordStatusResponse DescribeCloudRecordStatusResponse
     */
    public function describeCloudRecordStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询录制任务状态
     *  *
     * @param DescribeCloudRecordStatusRequest $request DescribeCloudRecordStatusRequest
     *
     * @return DescribeCloudRecordStatusResponse DescribeCloudRecordStatusResponse
     */
    public function describeCloudRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudRecordStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeEndPointEventList获取端对端用户事件列表。
     *  *
     * @param DescribeEndPointEventListRequest $request DescribeEndPointEventListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEndPointEventListResponse DescribeEndPointEventListResponse
     */
    public function describeEndPointEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->userIdList)) {
            $query['UserIdList'] = $request->userIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeEndPointEventList获取端对端用户事件列表。
     *  *
     * @param DescribeEndPointEventListRequest $request DescribeEndPointEventListRequest
     *
     * @return DescribeEndPointEventListResponse DescribeEndPointEventListResponse
     */
    public function describeEndPointEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndPointEventListWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeEndPointMetricData获取端对端指标数据。
     *  *
     * @param DescribeEndPointMetricDataRequest $request DescribeEndPointMetricDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEndPointMetricDataResponse DescribeEndPointMetricDataResponse
     */
    public function describeEndPointMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->pubCallIdList)) {
            $query['PubCallIdList'] = $request->pubCallIdList;
        }
        if (!Utils::isUnset($request->pubUserId)) {
            $query['PubUserId'] = $request->pubUserId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeEndPointMetricData获取端对端指标数据。
     *  *
     * @param DescribeEndPointMetricDataRequest $request DescribeEndPointMetricDataRequest
     *
     * @return DescribeEndPointMetricDataResponse DescribeEndPointMetricDataResponse
     */
    public function describeEndPointMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndPointMetricDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取异常诊断影响因素分布
     *  *
     * @param DescribeFaultDiagnosisFactorDistributionStatRequest $request DescribeFaultDiagnosisFactorDistributionStatRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatResponse DescribeFaultDiagnosisFactorDistributionStatResponse
     */
    public function describeFaultDiagnosisFactorDistributionStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取异常诊断影响因素分布
     *  *
     * @param DescribeFaultDiagnosisFactorDistributionStatRequest $request DescribeFaultDiagnosisFactorDistributionStatRequest
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatResponse DescribeFaultDiagnosisFactorDistributionStatResponse
     */
    public function describeFaultDiagnosisFactorDistributionStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaultDiagnosisFactorDistributionStatWithOptions($request, $runtime);
    }

    /**
     * @summary 获取异常诊断总览数据
     *  *
     * @param DescribeFaultDiagnosisOverallDataRequest $request DescribeFaultDiagnosisOverallDataRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFaultDiagnosisOverallDataResponse DescribeFaultDiagnosisOverallDataResponse
     */
    public function describeFaultDiagnosisOverallDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->statDim)) {
            $query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取异常诊断总览数据
     *  *
     * @param DescribeFaultDiagnosisOverallDataRequest $request DescribeFaultDiagnosisOverallDataRequest
     *
     * @return DescribeFaultDiagnosisOverallDataResponse DescribeFaultDiagnosisOverallDataResponse
     */
    public function describeFaultDiagnosisOverallData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaultDiagnosisOverallDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取异常诊断用户详情
     *  *
     * @param DescribeFaultDiagnosisUserDetailRequest $request DescribeFaultDiagnosisUserDetailRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFaultDiagnosisUserDetailResponse DescribeFaultDiagnosisUserDetailResponse
     */
    public function describeFaultDiagnosisUserDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->faultType)) {
            $query['FaultType'] = $request->faultType;
        }
        if (!Utils::isUnset($request->queryCallUserInfo)) {
            $query['QueryCallUserInfo'] = $request->queryCallUserInfo;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取异常诊断用户详情
     *  *
     * @param DescribeFaultDiagnosisUserDetailRequest $request DescribeFaultDiagnosisUserDetailRequest
     *
     * @return DescribeFaultDiagnosisUserDetailResponse DescribeFaultDiagnosisUserDetailResponse
     */
    public function describeFaultDiagnosisUserDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaultDiagnosisUserDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 获取异常诊断用户明细列表
     *  *
     * @param DescribeFaultDiagnosisUserListRequest $request DescribeFaultDiagnosisUserListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFaultDiagnosisUserListResponse DescribeFaultDiagnosisUserListResponse
     */
    public function describeFaultDiagnosisUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->faultTypes)) {
            $query['FaultTypes'] = $request->faultTypes;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取异常诊断用户明细列表
     *  *
     * @param DescribeFaultDiagnosisUserListRequest $request DescribeFaultDiagnosisUserListRequest
     *
     * @return DescribeFaultDiagnosisUserListResponse DescribeFaultDiagnosisUserListResponse
     */
    public function describeFaultDiagnosisUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaultDiagnosisUserListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPULayoutInfoListRequest $request DescribeMPULayoutInfoListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMPULayoutInfoListResponse DescribeMPULayoutInfoListResponse
     */
    public function describeMPULayoutInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeMPULayoutInfoListRequest $request DescribeMPULayoutInfoListRequest
     *
     * @return DescribeMPULayoutInfoListResponse DescribeMPULayoutInfoListResponse
     */
    public function describeMPULayoutInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPULayoutInfoListWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribePubUserListBySubUser根据订阅端获取通信中发布端用户列表。
     *  *
     * @param DescribePubUserListBySubUserRequest $request DescribePubUserListBySubUserRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePubUserListBySubUserResponse DescribePubUserListBySubUserResponse
     */
    public function describePubUserListBySubUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribePubUserListBySubUser根据订阅端获取通信中发布端用户列表。
     *  *
     * @param DescribePubUserListBySubUserRequest $request DescribePubUserListBySubUserRequest
     *
     * @return DescribePubUserListBySubUserResponse DescribePubUserListBySubUserResponse
     */
    public function describePubUserListBySubUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePubUserListBySubUserWithOptions($request, $runtime);
    }

    /**
     * @summary 调用DescribeQoeMetricData获取单次通信中用户的下行体验质量指标。
     *  *
     * @param DescribeQoeMetricDataRequest $request DescribeQoeMetricDataRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeQoeMetricDataResponse DescribeQoeMetricDataResponse
     */
    public function describeQoeMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->createdTs)) {
            $query['CreatedTs'] = $request->createdTs;
        }
        if (!Utils::isUnset($request->destroyedTs)) {
            $query['DestroyedTs'] = $request->destroyedTs;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 调用DescribeQoeMetricData获取单次通信中用户的下行体验质量指标。
     *  *
     * @param DescribeQoeMetricDataRequest $request DescribeQoeMetricDataRequest
     *
     * @return DescribeQoeMetricDataResponse DescribeQoeMetricDataResponse
     */
    public function describeQoeMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQoeMetricDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取质量统计区域分布统计数据
     *  *
     * @param DescribeQualityAreaDistributionStatDataRequest $request DescribeQualityAreaDistributionStatDataRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeQualityAreaDistributionStatDataResponse DescribeQualityAreaDistributionStatDataResponse
     */
    public function describeQualityAreaDistributionStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentArea)) {
            $query['ParentArea'] = $request->parentArea;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取质量统计区域分布统计数据
     *  *
     * @param DescribeQualityAreaDistributionStatDataRequest $request DescribeQualityAreaDistributionStatDataRequest
     *
     * @return DescribeQualityAreaDistributionStatDataResponse DescribeQualityAreaDistributionStatDataResponse
     */
    public function describeQualityAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualityAreaDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取质量统计分布数据
     *  *
     * @param DescribeQualityDistributionStatDataRequest $request DescribeQualityDistributionStatDataRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeQualityDistributionStatDataResponse DescribeQualityDistributionStatDataResponse
     */
    public function describeQualityDistributionStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->statDim)) {
            $query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取质量统计分布数据
     *  *
     * @param DescribeQualityDistributionStatDataRequest $request DescribeQualityDistributionStatDataRequest
     *
     * @return DescribeQualityDistributionStatDataResponse DescribeQualityDistributionStatDataResponse
     */
    public function describeQualityDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualityDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取质量统计各操作系统下SDK版本分布数据
     *  *
     * @param DescribeQualityOsSdkVersionDistributionStatDataRequest $request DescribeQualityOsSdkVersionDistributionStatDataRequest
     * @param RuntimeOptions                                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeQualityOsSdkVersionDistributionStatDataResponse DescribeQualityOsSdkVersionDistributionStatDataResponse
     */
    public function describeQualityOsSdkVersionDistributionStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取质量统计各操作系统下SDK版本分布数据
     *  *
     * @param DescribeQualityOsSdkVersionDistributionStatDataRequest $request DescribeQualityOsSdkVersionDistributionStatDataRequest
     *
     * @return DescribeQualityOsSdkVersionDistributionStatDataResponse DescribeQualityOsSdkVersionDistributionStatDataResponse
     */
    public function describeQualityOsSdkVersionDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualityOsSdkVersionDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取质量统计概览数据
     *  *
     * @param DescribeQualityOverallDataRequest $request DescribeQualityOverallDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeQualityOverallDataResponse DescribeQualityOverallDataResponse
     */
    public function describeQualityOverallDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取质量统计概览数据
     *  *
     * @param DescribeQualityOverallDataRequest $request DescribeQualityOverallDataRequest
     *
     * @return DescribeQualityOverallDataResponse DescribeQualityOverallDataResponse
     */
    public function describeQualityOverallData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQualityOverallDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordFilesRequest $request DescribeRecordFilesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordFilesResponse DescribeRecordFilesResponse
     */
    public function describeRecordFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeRecordFilesRequest $request DescribeRecordFilesRequest
     *
     * @return DescribeRecordFilesResponse DescribeRecordFilesResponse
     */
    public function describeRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordTemplatesRequest $request DescribeRecordTemplatesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordTemplatesResponse DescribeRecordTemplatesResponse
     */
    public function describeRecordTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeRecordTemplatesRequest $request DescribeRecordTemplatesRequest
     *
     * @return DescribeRecordTemplatesResponse DescribeRecordTemplatesResponse
     */
    public function describeRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelListRequest $request DescribeRtcChannelListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRtcChannelListResponse DescribeRtcChannelListResponse
     */
    public function describeRtcChannelListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->timePoint)) {
            $query['TimePoint'] = $request->timePoint;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeRtcChannelListRequest $request DescribeRtcChannelListRequest
     *
     * @return DescribeRtcChannelListResponse DescribeRtcChannelListResponse
     */
    public function describeRtcChannelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelMetricRequest $request DescribeRtcChannelMetricRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRtcChannelMetricResponse DescribeRtcChannelMetricResponse
     */
    public function describeRtcChannelMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->timePoint)) {
            $query['TimePoint'] = $request->timePoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeRtcChannelMetricRequest $request DescribeRtcChannelMetricRequest
     *
     * @return DescribeRtcChannelMetricResponse DescribeRtcChannelMetricResponse
     */
    public function describeRtcChannelMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcDurationDataRequest $request DescribeRtcDurationDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRtcDurationDataResponse DescribeRtcDurationDataResponse
     */
    public function describeRtcDurationDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeRtcDurationDataRequest $request DescribeRtcDurationDataRequest
     *
     * @return DescribeRtcDurationDataResponse DescribeRtcDurationDataResponse
     */
    public function describeRtcDurationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcDurationDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcPeakChannelCntDataRequest $request DescribeRtcPeakChannelCntDataRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRtcPeakChannelCntDataResponse DescribeRtcPeakChannelCntDataResponse
     */
    public function describeRtcPeakChannelCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeRtcPeakChannelCntDataRequest $request DescribeRtcPeakChannelCntDataRequest
     *
     * @return DescribeRtcPeakChannelCntDataResponse DescribeRtcPeakChannelCntDataResponse
     */
    public function describeRtcPeakChannelCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcPeakChannelCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcUserCntDataRequest $request DescribeRtcUserCntDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRtcUserCntDataResponse DescribeRtcUserCntDataResponse
     */
    public function describeRtcUserCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeRtcUserCntDataRequest $request DescribeRtcUserCntDataRequest
     *
     * @return DescribeRtcUserCntDataResponse DescribeRtcUserCntDataResponse
     */
    public function describeRtcUserCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcUserCntDataWithOptions($request, $runtime);
    }

    /**
     * @summary 查询旁路推流状态
     *  *
     * @param DescribeStreamingOutStatusRequest $request DescribeStreamingOutStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStreamingOutStatusResponse DescribeStreamingOutStatusResponse
     */
    public function describeStreamingOutStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询旁路推流状态
     *  *
     * @param DescribeStreamingOutStatusRequest $request DescribeStreamingOutStatusRequest
     *
     * @return DescribeStreamingOutStatusResponse DescribeStreamingOutStatusResponse
     */
    public function describeStreamingOutStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamingOutStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 系统内置布局
     *  *
     * @param DescribeSystemLayoutListRequest $request DescribeSystemLayoutListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSystemLayoutListResponse DescribeSystemLayoutListResponse
     */
    public function describeSystemLayoutListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 系统内置布局
     *  *
     * @param DescribeSystemLayoutListRequest $request DescribeSystemLayoutListRequest
     *
     * @return DescribeSystemLayoutListResponse DescribeSystemLayoutListResponse
     */
    public function describeSystemLayoutList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemLayoutListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用量统计地域分布数据
     *  *
     * @param DescribeUsageAreaDistributionStatDataRequest $request DescribeUsageAreaDistributionStatDataRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsageAreaDistributionStatDataResponse DescribeUsageAreaDistributionStatDataResponse
     */
    public function describeUsageAreaDistributionStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentArea)) {
            $query['ParentArea'] = $request->parentArea;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取用量统计地域分布数据
     *  *
     * @param DescribeUsageAreaDistributionStatDataRequest $request DescribeUsageAreaDistributionStatDataRequest
     *
     * @return DescribeUsageAreaDistributionStatDataResponse DescribeUsageAreaDistributionStatDataResponse
     */
    public function describeUsageAreaDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageAreaDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用量统计分布数据
     *  *
     * @param DescribeUsageDistributionStatDataRequest $request DescribeUsageDistributionStatDataRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsageDistributionStatDataResponse DescribeUsageDistributionStatDataResponse
     */
    public function describeUsageDistributionStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->statDim)) {
            $query['StatDim'] = $request->statDim;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取用量统计分布数据
     *  *
     * @param DescribeUsageDistributionStatDataRequest $request DescribeUsageDistributionStatDataRequest
     *
     * @return DescribeUsageDistributionStatDataResponse DescribeUsageDistributionStatDataResponse
     */
    public function describeUsageDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用量统计各操作系统下SDK版本分布数据
     *  *
     * @param DescribeUsageOsSdkVersionDistributionStatDataRequest $request DescribeUsageOsSdkVersionDistributionStatDataRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsageOsSdkVersionDistributionStatDataResponse DescribeUsageOsSdkVersionDistributionStatDataResponse
     */
    public function describeUsageOsSdkVersionDistributionStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取用量统计各操作系统下SDK版本分布数据
     *  *
     * @param DescribeUsageOsSdkVersionDistributionStatDataRequest $request DescribeUsageOsSdkVersionDistributionStatDataRequest
     *
     * @return DescribeUsageOsSdkVersionDistributionStatDataResponse DescribeUsageOsSdkVersionDistributionStatDataResponse
     */
    public function describeUsageOsSdkVersionDistributionStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageOsSdkVersionDistributionStatDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用量统计概览数据
     *  *
     * @param DescribeUsageOverallDataRequest $request DescribeUsageOverallDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsageOverallDataResponse DescribeUsageOverallDataResponse
     */
    public function describeUsageOverallDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取用量统计概览数据
     *  *
     * @param DescribeUsageOverallDataRequest $request DescribeUsageOverallDataRequest
     *
     * @return DescribeUsageOverallDataResponse DescribeUsageOverallDataResponse
     */
    public function describeUsageOverallData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsageOverallDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserInfoInChannelRequest $request DescribeUserInfoInChannelRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserInfoInChannelResponse DescribeUserInfoInChannelResponse
     */
    public function describeUserInfoInChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DescribeUserInfoInChannelRequest $request DescribeUserInfoInChannelRequest
     *
     * @return DescribeUserInfoInChannelResponse DescribeUserInfoInChannelResponse
     */
    public function describeUserInfoInChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserInfoInChannelWithOptions($request, $runtime);
    }

    /**
     * @param DisableAutoLiveStreamRuleRequest $request DisableAutoLiveStreamRuleRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableAutoLiveStreamRuleResponse DisableAutoLiveStreamRuleResponse
     */
    public function disableAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DisableAutoLiveStreamRuleRequest $request DisableAutoLiveStreamRuleRequest
     *
     * @return DisableAutoLiveStreamRuleResponse DisableAutoLiveStreamRuleResponse
     */
    public function disableAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableAutoLiveStreamRuleRequest $request EnableAutoLiveStreamRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableAutoLiveStreamRuleResponse EnableAutoLiveStreamRuleResponse
     */
    public function enableAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param EnableAutoLiveStreamRuleRequest $request EnableAutoLiveStreamRuleRequest
     *
     * @return EnableAutoLiveStreamRuleResponse EnableAutoLiveStreamRuleResponse
     */
    public function enableAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @summary GetAgent。
     *  *
     * @param GetAgentRequest $request GetAgentRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentResponse GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary GetAgent。
     *  *
     * @param GetAgentRequest $request GetAgentRequest
     *
     * @return GetAgentResponse GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentWithOptions($request, $runtime);
    }

    /**
     * @param GetMPUTaskStatusRequest $request GetMPUTaskStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMPUTaskStatusResponse GetMPUTaskStatusResponse
     */
    public function getMPUTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param GetMPUTaskStatusRequest $request GetMPUTaskStatusRequest
     *
     * @return GetMPUTaskStatusResponse GetMPUTaskStatusResponse
     */
    public function getMPUTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMPUTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改App信息
     *  *
     * @param ModifyAppRequest $request ModifyAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改App信息
     *  *
     * @param ModifyAppRequest $request ModifyAppRequest
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @summary 修改应用智能体开关
     *  *
     * @param ModifyAppAgentFunctionStatusRequest $request ModifyAppAgentFunctionStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppAgentFunctionStatusResponse ModifyAppAgentFunctionStatusResponse
     */
    public function modifyAppAgentFunctionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改应用智能体开关
     *  *
     * @param ModifyAppAgentFunctionStatusRequest $request ModifyAppAgentFunctionStatusRequest
     *
     * @return ModifyAppAgentFunctionStatusResponse ModifyAppAgentFunctionStatusResponse
     */
    public function modifyAppAgentFunctionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppAgentFunctionStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 更新应用智能体模版
     *  *
     * @param ModifyAppAgentTemplateRequest $tmpReq  ModifyAppAgentTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppAgentTemplateResponse ModifyAppAgentTemplateResponse
     */
    public function modifyAppAgentTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAppAgentTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->asrConfig)) {
            $request->asrConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->asrConfig, 'AsrConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->llmConfig)) {
            $request->llmConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->llmConfig, 'LlmConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->ttsConfig)) {
            $request->ttsConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ttsConfig, 'TtsConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->asrConfigShrink)) {
            $query['AsrConfig'] = $request->asrConfigShrink;
        }
        if (!Utils::isUnset($request->chatMode)) {
            $query['ChatMode'] = $request->chatMode;
        }
        if (!Utils::isUnset($request->greeting)) {
            $query['Greeting'] = $request->greeting;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->interruptMode)) {
            $query['InterruptMode'] = $request->interruptMode;
        }
        if (!Utils::isUnset($request->llmConfigShrink)) {
            $query['LlmConfig'] = $request->llmConfigShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ttsConfigShrink)) {
            $query['TtsConfig'] = $request->ttsConfigShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新应用智能体模版
     *  *
     * @param ModifyAppAgentTemplateRequest $request ModifyAppAgentTemplateRequest
     *
     * @return ModifyAppAgentTemplateResponse ModifyAppAgentTemplateResponse
     */
    public function modifyAppAgentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppAgentTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新app回调事件开关
     *  *
     * @param ModifyAppCallbackStatusRequest $request ModifyAppCallbackStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppCallbackStatusResponse ModifyAppCallbackStatusResponse
     */
    public function modifyAppCallbackStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新app回调事件开关
     *  *
     * @param ModifyAppCallbackStatusRequest $request ModifyAppCallbackStatusRequest
     *
     * @return ModifyAppCallbackStatusResponse ModifyAppCallbackStatusResponse
     */
    public function modifyAppCallbackStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppCallbackStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改app自定义布局
     *  *
     * @param ModifyAppLayoutRequest $tmpReq  ModifyAppLayoutRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppLayoutResponse ModifyAppLayoutResponse
     */
    public function modifyAppLayoutWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAppLayoutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->layout)) {
            $request->layoutShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->layout, 'Layout', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->layoutShrink)) {
            $query['Layout'] = $request->layoutShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改app自定义布局
     *  *
     * @param ModifyAppLayoutRequest $request ModifyAppLayoutRequest
     *
     * @return ModifyAppLayoutResponse ModifyAppLayoutResponse
     */
    public function modifyAppLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppLayoutWithOptions($request, $runtime);
    }

    /**
     * @summary 修改应用旁路开关
     *  *
     * @param ModifyAppLiveStreamStatusRequest $request ModifyAppLiveStreamStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppLiveStreamStatusResponse ModifyAppLiveStreamStatusResponse
     */
    public function modifyAppLiveStreamStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改应用旁路开关
     *  *
     * @param ModifyAppLiveStreamStatusRequest $request ModifyAppLiveStreamStatusRequest
     *
     * @return ModifyAppLiveStreamStatusResponse ModifyAppLiveStreamStatusResponse
     */
    public function modifyAppLiveStreamStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppLiveStreamStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改应用录制开关
     *  *
     * @param ModifyAppRecordStatusRequest $request ModifyAppRecordStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppRecordStatusResponse ModifyAppRecordStatusResponse
     */
    public function modifyAppRecordStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改应用录制开关
     *  *
     * @param ModifyAppRecordStatusRequest $request ModifyAppRecordStatusRequest
     *
     * @return ModifyAppRecordStatusResponse ModifyAppRecordStatusResponse
     */
    public function modifyAppRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppRecordStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改应用录制模版
     *  *
     * @param ModifyAppRecordTemplateRequest $tmpReq  ModifyAppRecordTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppRecordTemplateResponse ModifyAppRecordTemplateResponse
     */
    public function modifyAppRecordTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAppRecordTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordTemplate)) {
            $request->recordTemplateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordTemplate, 'RecordTemplate', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->recordTemplateShrink)) {
            $query['RecordTemplate'] = $request->recordTemplateShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改应用录制模版
     *  *
     * @param ModifyAppRecordTemplateRequest $request ModifyAppRecordTemplateRequest
     *
     * @return ModifyAppRecordTemplateResponse ModifyAppRecordTemplateResponse
     */
    public function modifyAppRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新应用推流模版
     *  *
     * @param ModifyAppStreamingOutTemplateRequest $tmpReq  ModifyAppStreamingOutTemplateRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppStreamingOutTemplateResponse ModifyAppStreamingOutTemplateResponse
     */
    public function modifyAppStreamingOutTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAppStreamingOutTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamingOutTemplate)) {
            $request->streamingOutTemplateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamingOutTemplate, 'StreamingOutTemplate', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->streamingOutTemplateShrink)) {
            $query['StreamingOutTemplate'] = $request->streamingOutTemplateShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新应用推流模版
     *  *
     * @param ModifyAppStreamingOutTemplateRequest $request ModifyAppStreamingOutTemplateRequest
     *
     * @return ModifyAppStreamingOutTemplateResponse ModifyAppStreamingOutTemplateResponse
     */
    public function modifyAppStreamingOutTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppStreamingOutTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新app回调
     *  *
     * @param ModifyCallbackMetaRequest $tmpReq  ModifyCallbackMetaRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCallbackMetaResponse ModifyCallbackMetaResponse
     */
    public function modifyCallbackMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyCallbackMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->callback)) {
            $request->callbackShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->callback, 'Callback', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callbackShrink)) {
            $query['Callback'] = $request->callbackShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新app回调
     *  *
     * @param ModifyCallbackMetaRequest $request ModifyCallbackMetaRequest
     *
     * @return ModifyCallbackMetaResponse ModifyCallbackMetaResponse
     */
    public function modifyCallbackMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCallbackMetaWithOptions($request, $runtime);
    }

    /**
     * @summary 更新纪要热词表
     *  *
     * @param ModifyCloudNotePhrasesRequest $tmpReq  ModifyCloudNotePhrasesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCloudNotePhrasesResponse ModifyCloudNotePhrasesResponse
     */
    public function modifyCloudNotePhrasesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyCloudNotePhrasesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phrase)) {
            $request->phraseShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phrase, 'Phrase', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->phraseShrink)) {
            $query['Phrase'] = $request->phraseShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新纪要热词表
     *  *
     * @param ModifyCloudNotePhrasesRequest $request ModifyCloudNotePhrasesRequest
     *
     * @return ModifyCloudNotePhrasesResponse ModifyCloudNotePhrasesResponse
     */
    public function modifyCloudNotePhrases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudNotePhrasesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMPULayoutRequest $request ModifyMPULayoutRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMPULayoutResponse ModifyMPULayoutResponse
     */
    public function modifyMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->audioMixCount)) {
            $query['AudioMixCount'] = $request->audioMixCount;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->panes)) {
            $query['Panes'] = $request->panes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ModifyMPULayoutRequest $request ModifyMPULayoutRequest
     *
     * @return ModifyMPULayoutResponse ModifyMPULayoutResponse
     */
    public function modifyMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @summary NotifyAgent
     *  *
     * @param NotifyAgentRequest $request NotifyAgentRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return NotifyAgentResponse NotifyAgentResponse
     */
    public function notifyAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->customAttribute)) {
            $query['CustomAttribute'] = $request->customAttribute;
        }
        if (!Utils::isUnset($request->interruptable)) {
            $query['Interruptable'] = $request->interruptable;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary NotifyAgent
     *  *
     * @param NotifyAgentRequest $request NotifyAgentRequest
     *
     * @return NotifyAgentResponse NotifyAgentResponse
     */
    public function notifyAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyAgentWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTerminalsRequest $request RemoveTerminalsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTerminalsResponse RemoveTerminalsResponse
     */
    public function removeTerminalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->terminalIds)) {
            $query['TerminalIds'] = $request->terminalIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param RemoveTerminalsRequest $request RemoveTerminalsRequest
     *
     * @return RemoveTerminalsResponse RemoveTerminalsResponse
     */
    public function removeTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTerminalsWithOptions($request, $runtime);
    }

    /**
     * @summary RemoveUsers
     *  *
     * @param RemoveUsersRequest $request RemoveUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUsersResponse RemoveUsersResponse
     */
    public function removeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->users)) {
            $query['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary RemoveUsers
     *  *
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
     * @summary 启动AI Agent
     *  *
     * @param StartAgentRequest $tmpReq  StartAgentRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAgentResponse StartAgentResponse
     */
    public function startAgentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartAgentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rtcConfig)) {
            $request->rtcConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rtcConfig, 'RtcConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->voiceChatConfig)) {
            $request->voiceChatConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->voiceChatConfig, 'VoiceChatConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->rtcConfigShrink)) {
            $query['RtcConfig'] = $request->rtcConfigShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->voiceChatConfigShrink)) {
            $query['VoiceChatConfig'] = $request->voiceChatConfigShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 启动AI Agent
     *  *
     * @param StartAgentRequest $request StartAgentRequest
     *
     * @return StartAgentResponse StartAgentResponse
     */
    public function startAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAgentWithOptions($request, $runtime);
    }

    /**
     * @summary 开启某个事件回调
     *  *
     * @param StartCategoryCallbackRequest $tmpReq  StartCategoryCallbackRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StartCategoryCallbackResponse StartCategoryCallbackResponse
     */
    public function startCategoryCallbackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartCategoryCallbackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->callback)) {
            $request->callbackShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->callback, 'Callback', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callbackShrink)) {
            $query['Callback'] = $request->callbackShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 开启某个事件回调
     *  *
     * @param StartCategoryCallbackRequest $request StartCategoryCallbackRequest
     *
     * @return StartCategoryCallbackResponse StartCategoryCallbackResponse
     */
    public function startCategoryCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCategoryCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary 开启智能纪要
     *  *
     * @param StartCloudNoteRequest $tmpReq  StartCloudNoteRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartCloudNoteResponse StartCloudNoteResponse
     */
    public function startCloudNoteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartCloudNoteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->autoChapters)) {
            $request->autoChaptersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->autoChapters, 'AutoChapters', 'json');
        }
        if (!Utils::isUnset($tmpReq->customPrompt)) {
            $request->customPromptShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customPrompt, 'CustomPrompt', 'json');
        }
        if (!Utils::isUnset($tmpReq->meetingAssistance)) {
            $request->meetingAssistanceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->meetingAssistance, 'MeetingAssistance', 'json');
        }
        if (!Utils::isUnset($tmpReq->realtimeSubtitle)) {
            $request->realtimeSubtitleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->realtimeSubtitle, 'RealtimeSubtitle', 'json');
        }
        if (!Utils::isUnset($tmpReq->serviceInspection)) {
            $request->serviceInspectionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serviceInspection, 'ServiceInspection', 'json');
        }
        if (!Utils::isUnset($tmpReq->summarization)) {
            $request->summarizationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->summarization, 'Summarization', 'json');
        }
        if (!Utils::isUnset($tmpReq->textPolish)) {
            $request->textPolishShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->textPolish, 'TextPolish', 'json');
        }
        if (!Utils::isUnset($tmpReq->transcription)) {
            $request->transcriptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transcription, 'Transcription', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->autoChaptersShrink)) {
            $query['AutoChapters'] = $request->autoChaptersShrink;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->customPromptShrink)) {
            $query['CustomPrompt'] = $request->customPromptShrink;
        }
        if (!Utils::isUnset($request->languageHints)) {
            $query['LanguageHints'] = $request->languageHints;
        }
        if (!Utils::isUnset($request->meetingAssistanceShrink)) {
            $query['MeetingAssistance'] = $request->meetingAssistanceShrink;
        }
        if (!Utils::isUnset($request->realtimeSubtitleShrink)) {
            $query['RealtimeSubtitle'] = $request->realtimeSubtitleShrink;
        }
        if (!Utils::isUnset($request->serviceInspectionShrink)) {
            $query['ServiceInspection'] = $request->serviceInspectionShrink;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $query['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->storageConfig)) {
            $query['StorageConfig'] = $request->storageConfig;
        }
        if (!Utils::isUnset($request->summarizationShrink)) {
            $query['Summarization'] = $request->summarizationShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->textPolishShrink)) {
            $query['TextPolish'] = $request->textPolishShrink;
        }
        if (!Utils::isUnset($request->transcriptionShrink)) {
            $query['Transcription'] = $request->transcriptionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 开启智能纪要
     *  *
     * @param StartCloudNoteRequest $request StartCloudNoteRequest
     *
     * @return StartCloudNoteResponse StartCloudNoteResponse
     */
    public function startCloudNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCloudNoteWithOptions($request, $runtime);
    }

    /**
     * @summary StartCloudRecord
     *  *
     * @param StartCloudRecordRequest $tmpReq  StartCloudRecordRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StartCloudRecordResponse StartCloudRecordResponse
     */
    public function startCloudRecordWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartCloudRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->layoutSpecifiedUsers)) {
            $request->layoutSpecifiedUsersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->layoutSpecifiedUsers, 'LayoutSpecifiedUsers', 'json');
        }
        if (!Utils::isUnset($tmpReq->singleStreamingRecord)) {
            $request->singleStreamingRecordShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->singleStreamingRecord, 'SingleStreamingRecord', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->annotation)) {
            $query['Annotation'] = $request->annotation;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backgrounds)) {
            $query['Backgrounds'] = $request->backgrounds;
        }
        if (!Utils::isUnset($request->bgColor)) {
            $query['BgColor'] = $request->bgColor;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->clockWidgets)) {
            $query['ClockWidgets'] = $request->clockWidgets;
        }
        if (!Utils::isUnset($request->cropMode)) {
            $query['CropMode'] = $request->cropMode;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
        }
        if (!Utils::isUnset($request->layoutSpecifiedUsersShrink)) {
            $query['LayoutSpecifiedUsers'] = $request->layoutSpecifiedUsersShrink;
        }
        if (!Utils::isUnset($request->panes)) {
            $query['Panes'] = $request->panes;
        }
        if (!Utils::isUnset($request->recordMode)) {
            $query['RecordMode'] = $request->recordMode;
        }
        if (!Utils::isUnset($request->regionColor)) {
            $query['RegionColor'] = $request->regionColor;
        }
        if (!Utils::isUnset($request->reservePaneForNoCameraUser)) {
            $query['ReservePaneForNoCameraUser'] = $request->reservePaneForNoCameraUser;
        }
        if (!Utils::isUnset($request->showDefaultBackgroundOnMute)) {
            $query['ShowDefaultBackgroundOnMute'] = $request->showDefaultBackgroundOnMute;
        }
        if (!Utils::isUnset($request->singleStreamingRecordShrink)) {
            $query['SingleStreamingRecord'] = $request->singleStreamingRecordShrink;
        }
        if (!Utils::isUnset($request->startWithoutChannel)) {
            $query['StartWithoutChannel'] = $request->startWithoutChannel;
        }
        if (!Utils::isUnset($request->startWithoutChannelWaitTime)) {
            $query['StartWithoutChannelWaitTime'] = $request->startWithoutChannelWaitTime;
        }
        if (!Utils::isUnset($request->storageConfig)) {
            $query['StorageConfig'] = $request->storageConfig;
        }
        if (!Utils::isUnset($request->subHighResolutionStream)) {
            $query['SubHighResolutionStream'] = $request->subHighResolutionStream;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->texts)) {
            $query['Texts'] = $request->texts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary StartCloudRecord
     *  *
     * @param StartCloudRecordRequest $request StartCloudRecordRequest
     *
     * @return StartCloudRecordResponse StartCloudRecordResponse
     */
    public function startCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCloudRecordWithOptions($request, $runtime);
    }

    /**
     * @param StartMPUTaskRequest $request StartMPUTaskRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StartMPUTaskResponse StartMPUTaskResponse
     */
    public function startMPUTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backgroundColor)) {
            $query['BackgroundColor'] = $request->backgroundColor;
        }
        if (!Utils::isUnset($request->backgrounds)) {
            $query['Backgrounds'] = $request->backgrounds;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->clockWidgets)) {
            $query['ClockWidgets'] = $request->clockWidgets;
        }
        if (!Utils::isUnset($request->cropMode)) {
            $query['CropMode'] = $request->cropMode;
        }
        if (!Utils::isUnset($request->layoutIds)) {
            $query['LayoutIds'] = $request->layoutIds;
        }
        if (!Utils::isUnset($request->mediaEncode)) {
            $query['MediaEncode'] = $request->mediaEncode;
        }
        if (!Utils::isUnset($request->mixMode)) {
            $query['MixMode'] = $request->mixMode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payloadType)) {
            $query['PayloadType'] = $request->payloadType;
        }
        if (!Utils::isUnset($request->reportVad)) {
            $query['ReportVad'] = $request->reportVad;
        }
        if (!Utils::isUnset($request->rtpExtInfo)) {
            $query['RtpExtInfo'] = $request->rtpExtInfo;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        if (!Utils::isUnset($request->streamURL)) {
            $query['StreamURL'] = $request->streamURL;
        }
        if (!Utils::isUnset($request->subSpecAudioUsers)) {
            $query['SubSpecAudioUsers'] = $request->subSpecAudioUsers;
        }
        if (!Utils::isUnset($request->subSpecCameraUsers)) {
            $query['SubSpecCameraUsers'] = $request->subSpecCameraUsers;
        }
        if (!Utils::isUnset($request->subSpecShareScreenUsers)) {
            $query['SubSpecShareScreenUsers'] = $request->subSpecShareScreenUsers;
        }
        if (!Utils::isUnset($request->subSpecUsers)) {
            $query['SubSpecUsers'] = $request->subSpecUsers;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->timeStampRef)) {
            $query['TimeStampRef'] = $request->timeStampRef;
        }
        if (!Utils::isUnset($request->unsubSpecAudioUsers)) {
            $query['UnsubSpecAudioUsers'] = $request->unsubSpecAudioUsers;
        }
        if (!Utils::isUnset($request->unsubSpecCameraUsers)) {
            $query['UnsubSpecCameraUsers'] = $request->unsubSpecCameraUsers;
        }
        if (!Utils::isUnset($request->unsubSpecShareScreenUsers)) {
            $query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        }
        if (!Utils::isUnset($request->userPanes)) {
            $query['UserPanes'] = $request->userPanes;
        }
        if (!Utils::isUnset($request->vadInterval)) {
            $query['VadInterval'] = $request->vadInterval;
        }
        if (!Utils::isUnset($request->watermarks)) {
            $query['Watermarks'] = $request->watermarks;
        }
        $body = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->enhancedParam)) {
            $bodyFlat['EnhancedParam'] = $request->enhancedParam;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param StartMPUTaskRequest $request StartMPUTaskRequest
     *
     * @return StartMPUTaskResponse StartMPUTaskResponse
     */
    public function startMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param StartRecordTaskRequest $request StartRecordTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StartRecordTaskResponse StartRecordTaskResponse
     */
    public function startRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->cropMode)) {
            $query['CropMode'] = $request->cropMode;
        }
        if (!Utils::isUnset($request->layoutIds)) {
            $query['LayoutIds'] = $request->layoutIds;
        }
        if (!Utils::isUnset($request->mediaEncode)) {
            $query['MediaEncode'] = $request->mediaEncode;
        }
        if (!Utils::isUnset($request->mixMode)) {
            $query['MixMode'] = $request->mixMode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        if (!Utils::isUnset($request->subSpecAudioUsers)) {
            $query['SubSpecAudioUsers'] = $request->subSpecAudioUsers;
        }
        if (!Utils::isUnset($request->subSpecCameraUsers)) {
            $query['SubSpecCameraUsers'] = $request->subSpecCameraUsers;
        }
        if (!Utils::isUnset($request->subSpecShareScreenUsers)) {
            $query['SubSpecShareScreenUsers'] = $request->subSpecShareScreenUsers;
        }
        if (!Utils::isUnset($request->subSpecUsers)) {
            $query['SubSpecUsers'] = $request->subSpecUsers;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskProfile)) {
            $query['TaskProfile'] = $request->taskProfile;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->unsubSpecAudioUsers)) {
            $query['UnsubSpecAudioUsers'] = $request->unsubSpecAudioUsers;
        }
        if (!Utils::isUnset($request->unsubSpecCameraUsers)) {
            $query['UnsubSpecCameraUsers'] = $request->unsubSpecCameraUsers;
        }
        if (!Utils::isUnset($request->unsubSpecShareScreenUsers)) {
            $query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        }
        if (!Utils::isUnset($request->userPanes)) {
            $query['UserPanes'] = $request->userPanes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param StartRecordTaskRequest $request StartRecordTaskRequest
     *
     * @return StartRecordTaskResponse StartRecordTaskResponse
     */
    public function startRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @summary StartStreamingOut
     *  *
     * @param StartStreamingOutRequest $tmpReq  StartStreamingOutRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StartStreamingOutResponse StartStreamingOutResponse
     */
    public function startStreamingOutWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartStreamingOutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->layoutSpecifiedUsers)) {
            $request->layoutSpecifiedUsersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->layoutSpecifiedUsers, 'LayoutSpecifiedUsers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->annotation)) {
            $query['Annotation'] = $request->annotation;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backgrounds)) {
            $query['Backgrounds'] = $request->backgrounds;
        }
        if (!Utils::isUnset($request->bgColor)) {
            $query['BgColor'] = $request->bgColor;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->clockWidgets)) {
            $query['ClockWidgets'] = $request->clockWidgets;
        }
        if (!Utils::isUnset($request->cropMode)) {
            $query['CropMode'] = $request->cropMode;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
        }
        if (!Utils::isUnset($request->layoutSpecifiedUsersShrink)) {
            $query['LayoutSpecifiedUsers'] = $request->layoutSpecifiedUsersShrink;
        }
        if (!Utils::isUnset($request->panes)) {
            $query['Panes'] = $request->panes;
        }
        if (!Utils::isUnset($request->regionColor)) {
            $query['RegionColor'] = $request->regionColor;
        }
        if (!Utils::isUnset($request->reservePaneForNoCameraUser)) {
            $query['ReservePaneForNoCameraUser'] = $request->reservePaneForNoCameraUser;
        }
        if (!Utils::isUnset($request->showDefaultBackgroundOnMute)) {
            $query['ShowDefaultBackgroundOnMute'] = $request->showDefaultBackgroundOnMute;
        }
        if (!Utils::isUnset($request->specMixedUserList)) {
            $query['SpecMixedUserList'] = $request->specMixedUserList;
        }
        if (!Utils::isUnset($request->startWithoutChannel)) {
            $query['StartWithoutChannel'] = $request->startWithoutChannel;
        }
        if (!Utils::isUnset($request->startWithoutChannelWaitTime)) {
            $query['StartWithoutChannelWaitTime'] = $request->startWithoutChannelWaitTime;
        }
        if (!Utils::isUnset($request->subHighResolutionStream)) {
            $query['SubHighResolutionStream'] = $request->subHighResolutionStream;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->texts)) {
            $query['Texts'] = $request->texts;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary StartStreamingOut
     *  *
     * @param StartStreamingOutRequest $request StartStreamingOutRequest
     *
     * @return StartStreamingOutResponse StartStreamingOutResponse
     */
    public function startStreamingOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startStreamingOutWithOptions($request, $runtime);
    }

    /**
     * @summary 停止AI Agent
     *  *
     * @param StopAgentRequest $request StopAgentRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAgentResponse StopAgentResponse
     */
    public function stopAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 停止AI Agent
     *  *
     * @param StopAgentRequest $request StopAgentRequest
     *
     * @return StopAgentResponse StopAgentResponse
     */
    public function stopAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAgentWithOptions($request, $runtime);
    }

    /**
     * @summary 关闭某个事件回调
     *  *
     * @param StopCategoryCallbackRequest $tmpReq  StopCategoryCallbackRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StopCategoryCallbackResponse StopCategoryCallbackResponse
     */
    public function stopCategoryCallbackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopCategoryCallbackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->callback)) {
            $request->callbackShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->callback, 'Callback', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callbackShrink)) {
            $query['Callback'] = $request->callbackShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 关闭某个事件回调
     *  *
     * @param StopCategoryCallbackRequest $request StopCategoryCallbackRequest
     *
     * @return StopCategoryCallbackResponse StopCategoryCallbackResponse
     */
    public function stopCategoryCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCategoryCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary 删除频道
     *  *
     * @param StopChannelRequest $request StopChannelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StopChannelResponse StopChannelResponse
     */
    public function stopChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除频道
     *  *
     * @param StopChannelRequest $request StopChannelRequest
     *
     * @return StopChannelResponse StopChannelResponse
     */
    public function stopChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopChannelWithOptions($request, $runtime);
    }

    /**
     * @summary 停止智能纪要
     *  *
     * @param StopCloudNoteRequest $request StopCloudNoteRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopCloudNoteResponse StopCloudNoteResponse
     */
    public function stopCloudNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 停止智能纪要
     *  *
     * @param StopCloudNoteRequest $request StopCloudNoteRequest
     *
     * @return StopCloudNoteResponse StopCloudNoteResponse
     */
    public function stopCloudNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCloudNoteWithOptions($request, $runtime);
    }

    /**
     * @summary StopCloudRecord
     *  *
     * @param StopCloudRecordRequest $request StopCloudRecordRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StopCloudRecordResponse StopCloudRecordResponse
     */
    public function stopCloudRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary StopCloudRecord
     *  *
     * @param StopCloudRecordRequest $request StopCloudRecordRequest
     *
     * @return StopCloudRecordResponse StopCloudRecordResponse
     */
    public function stopCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCloudRecordWithOptions($request, $runtime);
    }

    /**
     * @param StopMPUTaskRequest $request StopMPUTaskRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StopMPUTaskResponse StopMPUTaskResponse
     */
    public function stopMPUTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param StopMPUTaskRequest $request StopMPUTaskRequest
     *
     * @return StopMPUTaskResponse StopMPUTaskResponse
     */
    public function stopMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopRecordTaskRequest $request StopRecordTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopRecordTaskResponse StopRecordTaskResponse
     */
    public function stopRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param StopRecordTaskRequest $request StopRecordTaskRequest
     *
     * @return StopRecordTaskResponse StopRecordTaskResponse
     */
    public function stopRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @summary StopStreamingOut
     *  *
     * @param StopStreamingOutRequest $request StopStreamingOutRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StopStreamingOutResponse StopStreamingOutResponse
     */
    public function stopStreamingOutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary StopStreamingOut
     *  *
     * @param StopStreamingOutRequest $request StopStreamingOutRequest
     *
     * @return StopStreamingOutResponse StopStreamingOutResponse
     */
    public function stopStreamingOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStreamingOutWithOptions($request, $runtime);
    }

    /**
     * @summary 更新AI Agent
     *  *
     * @param UpdateAgentRequest $tmpReq  UpdateAgentRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAgentResponse UpdateAgentResponse
     */
    public function updateAgentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAgentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->voiceChatConfig)) {
            $request->voiceChatConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->voiceChatConfig, 'VoiceChatConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->voiceChatConfigShrink)) {
            $query['VoiceChatConfig'] = $request->voiceChatConfigShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新AI Agent
     *  *
     * @param UpdateAgentRequest $request UpdateAgentRequest
     *
     * @return UpdateAgentResponse UpdateAgentResponse
     */
    public function updateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAutoLiveStreamRuleRequest $request UpdateAutoLiveStreamRuleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAutoLiveStreamRuleResponse UpdateAutoLiveStreamRuleResponse
     */
    public function updateAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->callBack)) {
            $query['CallBack'] = $request->callBack;
        }
        if (!Utils::isUnset($request->channelIdPrefixes)) {
            $query['ChannelIdPrefixes'] = $request->channelIdPrefixes;
        }
        if (!Utils::isUnset($request->channelIds)) {
            $query['ChannelIds'] = $request->channelIds;
        }
        if (!Utils::isUnset($request->mediaEncode)) {
            $query['MediaEncode'] = $request->mediaEncode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param UpdateAutoLiveStreamRuleRequest $request UpdateAutoLiveStreamRuleRequest
     *
     * @return UpdateAutoLiveStreamRuleResponse UpdateAutoLiveStreamRuleResponse
     */
    public function updateAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 更新云端录制任务
     *  *
     * @param UpdateCloudRecordRequest $tmpReq  UpdateCloudRecordRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCloudRecordResponse UpdateCloudRecordResponse
     */
    public function updateCloudRecordWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateCloudRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->layoutSpecifiedUsers)) {
            $request->layoutSpecifiedUsersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->layoutSpecifiedUsers, 'LayoutSpecifiedUsers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backgrounds)) {
            $query['Backgrounds'] = $request->backgrounds;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->clockWidgets)) {
            $query['ClockWidgets'] = $request->clockWidgets;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
        }
        if (!Utils::isUnset($request->layoutSpecifiedUsersShrink)) {
            $query['LayoutSpecifiedUsers'] = $request->layoutSpecifiedUsersShrink;
        }
        if (!Utils::isUnset($request->panes)) {
            $query['Panes'] = $request->panes;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->texts)) {
            $query['Texts'] = $request->texts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新云端录制任务
     *  *
     * @param UpdateCloudRecordRequest $request UpdateCloudRecordRequest
     *
     * @return UpdateCloudRecordResponse UpdateCloudRecordResponse
     */
    public function updateCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudRecordWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMPUTaskRequest $request UpdateMPUTaskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMPUTaskResponse UpdateMPUTaskResponse
     */
    public function updateMPUTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backgroundColor)) {
            $query['BackgroundColor'] = $request->backgroundColor;
        }
        if (!Utils::isUnset($request->backgrounds)) {
            $query['Backgrounds'] = $request->backgrounds;
        }
        if (!Utils::isUnset($request->clockWidgets)) {
            $query['ClockWidgets'] = $request->clockWidgets;
        }
        if (!Utils::isUnset($request->cropMode)) {
            $query['CropMode'] = $request->cropMode;
        }
        if (!Utils::isUnset($request->layoutIds)) {
            $query['LayoutIds'] = $request->layoutIds;
        }
        if (!Utils::isUnset($request->mediaEncode)) {
            $query['MediaEncode'] = $request->mediaEncode;
        }
        if (!Utils::isUnset($request->mixMode)) {
            $query['MixMode'] = $request->mixMode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        if (!Utils::isUnset($request->subSpecAudioUsers)) {
            $query['SubSpecAudioUsers'] = $request->subSpecAudioUsers;
        }
        if (!Utils::isUnset($request->subSpecCameraUsers)) {
            $query['SubSpecCameraUsers'] = $request->subSpecCameraUsers;
        }
        if (!Utils::isUnset($request->subSpecShareScreenUsers)) {
            $query['SubSpecShareScreenUsers'] = $request->subSpecShareScreenUsers;
        }
        if (!Utils::isUnset($request->subSpecUsers)) {
            $query['SubSpecUsers'] = $request->subSpecUsers;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->unsubSpecAudioUsers)) {
            $query['UnsubSpecAudioUsers'] = $request->unsubSpecAudioUsers;
        }
        if (!Utils::isUnset($request->unsubSpecCameraUsers)) {
            $query['UnsubSpecCameraUsers'] = $request->unsubSpecCameraUsers;
        }
        if (!Utils::isUnset($request->unsubSpecShareScreenUsers)) {
            $query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        }
        if (!Utils::isUnset($request->userPanes)) {
            $query['UserPanes'] = $request->userPanes;
        }
        if (!Utils::isUnset($request->watermarks)) {
            $query['Watermarks'] = $request->watermarks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param UpdateMPUTaskRequest $request UpdateMPUTaskRequest
     *
     * @return UpdateMPUTaskResponse UpdateMPUTaskResponse
     */
    public function updateMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRecordTaskRequest $request UpdateRecordTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRecordTaskResponse UpdateRecordTaskResponse
     */
    public function updateRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->cropMode)) {
            $query['CropMode'] = $request->cropMode;
        }
        if (!Utils::isUnset($request->layoutIds)) {
            $query['LayoutIds'] = $request->layoutIds;
        }
        if (!Utils::isUnset($request->mediaEncode)) {
            $query['MediaEncode'] = $request->mediaEncode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->subSpecAudioUsers)) {
            $query['SubSpecAudioUsers'] = $request->subSpecAudioUsers;
        }
        if (!Utils::isUnset($request->subSpecCameraUsers)) {
            $query['SubSpecCameraUsers'] = $request->subSpecCameraUsers;
        }
        if (!Utils::isUnset($request->subSpecShareScreenUsers)) {
            $query['SubSpecShareScreenUsers'] = $request->subSpecShareScreenUsers;
        }
        if (!Utils::isUnset($request->subSpecUsers)) {
            $query['SubSpecUsers'] = $request->subSpecUsers;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskProfile)) {
            $query['TaskProfile'] = $request->taskProfile;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->unsubSpecAudioUsers)) {
            $query['UnsubSpecAudioUsers'] = $request->unsubSpecAudioUsers;
        }
        if (!Utils::isUnset($request->unsubSpecCameraUsers)) {
            $query['UnsubSpecCameraUsers'] = $request->unsubSpecCameraUsers;
        }
        if (!Utils::isUnset($request->unsubSpecShareScreenUsers)) {
            $query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        }
        if (!Utils::isUnset($request->userPanes)) {
            $query['UserPanes'] = $request->userPanes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param UpdateRecordTaskRequest $request UpdateRecordTaskRequest
     *
     * @return UpdateRecordTaskResponse UpdateRecordTaskResponse
     */
    public function updateRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRecordTemplateRequest $request UpdateRecordTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRecordTemplateResponse UpdateRecordTemplateResponse
     */
    public function updateRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backgroundColor)) {
            $query['BackgroundColor'] = $request->backgroundColor;
        }
        if (!Utils::isUnset($request->backgrounds)) {
            $query['Backgrounds'] = $request->backgrounds;
        }
        if (!Utils::isUnset($request->clockWidgets)) {
            $query['ClockWidgets'] = $request->clockWidgets;
        }
        if (!Utils::isUnset($request->delayStopTime)) {
            $query['DelayStopTime'] = $request->delayStopTime;
        }
        if (!Utils::isUnset($request->enableM3u8DateTime)) {
            $query['EnableM3u8DateTime'] = $request->enableM3u8DateTime;
        }
        if (!Utils::isUnset($request->fileSplitInterval)) {
            $query['FileSplitInterval'] = $request->fileSplitInterval;
        }
        if (!Utils::isUnset($request->formats)) {
            $query['Formats'] = $request->formats;
        }
        if (!Utils::isUnset($request->httpCallbackUrl)) {
            $query['HttpCallbackUrl'] = $request->httpCallbackUrl;
        }
        if (!Utils::isUnset($request->layoutIds)) {
            $query['LayoutIds'] = $request->layoutIds;
        }
        if (!Utils::isUnset($request->mediaEncode)) {
            $query['MediaEncode'] = $request->mediaEncode;
        }
        if (!Utils::isUnset($request->mnsQueue)) {
            $query['MnsQueue'] = $request->mnsQueue;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossFilePrefix)) {
            $query['OssFilePrefix'] = $request->ossFilePrefix;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskProfile)) {
            $query['TaskProfile'] = $request->taskProfile;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->watermarks)) {
            $query['Watermarks'] = $request->watermarks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param UpdateRecordTemplateRequest $request UpdateRecordTemplateRequest
     *
     * @return UpdateRecordTemplateResponse UpdateRecordTemplateResponse
     */
    public function updateRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新旁路推流任务
     *  *
     * @param UpdateStreamingOutRequest $tmpReq  UpdateStreamingOutRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStreamingOutResponse UpdateStreamingOutResponse
     */
    public function updateStreamingOutWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStreamingOutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->layoutSpecifiedUsers)) {
            $request->layoutSpecifiedUsersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->layoutSpecifiedUsers, 'LayoutSpecifiedUsers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->backgrounds)) {
            $query['Backgrounds'] = $request->backgrounds;
        }
        if (!Utils::isUnset($request->bgColor)) {
            $query['BgColor'] = $request->bgColor;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->clockWidgets)) {
            $query['ClockWidgets'] = $request->clockWidgets;
        }
        if (!Utils::isUnset($request->cropMode)) {
            $query['CropMode'] = $request->cropMode;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
        }
        if (!Utils::isUnset($request->layoutSpecifiedUsersShrink)) {
            $query['LayoutSpecifiedUsers'] = $request->layoutSpecifiedUsersShrink;
        }
        if (!Utils::isUnset($request->panes)) {
            $query['Panes'] = $request->panes;
        }
        if (!Utils::isUnset($request->regionColor)) {
            $query['RegionColor'] = $request->regionColor;
        }
        if (!Utils::isUnset($request->specMixedUserList)) {
            $query['SpecMixedUserList'] = $request->specMixedUserList;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->texts)) {
            $query['Texts'] = $request->texts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新旁路推流任务
     *  *
     * @param UpdateStreamingOutRequest $request UpdateStreamingOutRequest
     *
     * @return UpdateStreamingOutResponse UpdateStreamingOutResponse
     */
    public function updateStreamingOut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStreamingOutWithOptions($request, $runtime);
    }
}
