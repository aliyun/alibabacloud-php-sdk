<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterComponentRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterComponentResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupContentRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupContentResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterLayoutRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterLayoutResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterVideoResourceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterVideoResourceResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCustomLiveStreamTranscodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCustomLiveStreamTranscodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppSnapshotConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppSnapshotConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAudioAuditConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAudioAuditConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAudioAuditNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAudioAuditNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDetectNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDetectNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDomainMappingRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDomainMappingResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDomainPlayMappingRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDomainPlayMappingResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDomainRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDomainResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLivePullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLivePullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveRecordNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveRecordNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveRecordVodConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveRecordVodConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveSnapshotDetectPornConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveSnapshotDetectPornConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveStreamTranscodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveStreamTranscodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveStreamWatermarkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveStreamWatermarkResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveStreamWatermarkRuleRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveStreamWatermarkRuleResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddMultiRateConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddMultiRateConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddPlaylistItemsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddPlaylistItemsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddRtsLiveStreamTranscodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddRtsLiveStreamTranscodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddShowIntoShowListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddShowIntoShowListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddStudioLayoutRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddStudioLayoutResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddTrancodeSEIRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddTrancodeSEIResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AllowPushStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AllowPushStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchDeleteLiveDomainConfigsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchDeleteLiveDomainConfigsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchSetLiveDomainConfigsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchSetLiveDomainConfigsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CancelMuteAllGroupUserRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CancelMuteAllGroupUserResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CloseLiveShiftRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CloseLiveShiftResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CloseMessageGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CloseMessageGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CopyCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CopyCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CopyCasterSceneConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CopyCasterSceneConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateCustomTemplateRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateCustomTemplateResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveRealTimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveRealTimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamMonitorRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamMonitorResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamRecordIndexFilesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamRecordIndexFilesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateMessageGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateMessageGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateMessageGroupShrinkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateMixStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateMixStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterComponentRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterComponentResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterEpisodeGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterEpisodeGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterEpisodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterEpisodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterLayoutRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterLayoutResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterProgramRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterProgramResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterSceneConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterSceneConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterVideoResourceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCasterVideoResourceResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCustomTemplateRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteCustomTemplateResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAppRecordConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAppRecordConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAppSnapshotConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAppSnapshotConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAudioAuditConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAudioAuditConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAudioAuditNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAudioAuditNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveDetectNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveDetectNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveDomainMappingRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveDomainMappingResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveDomainPlayMappingRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveDomainPlayMappingResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveDomainRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveDomainResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveEdgeTransferRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveEdgeTransferResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveLazyPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveLazyPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLivePullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLivePullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveRealTimeLogLogstoreRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveRealTimeLogLogstoreResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveRecordNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveRecordNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveRecordVodConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveRecordVodConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveSnapshotDetectPornConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveSnapshotDetectPornConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveSpecificStagingConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveSpecificStagingConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamMonitorRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamMonitorResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamTranscodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamTranscodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamWatermarkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamWatermarkResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamWatermarkRuleRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamWatermarkRuleResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteMessageAppRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteMessageAppResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteMixStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteMixStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteMultiRateConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteMultiRateConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeletePlaylistItemsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeletePlaylistItemsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeletePlaylistRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeletePlaylistResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteRoomRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteRoomResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotCallbackAuthRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotCallbackAuthResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteStudioLayoutRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteStudioLayoutResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeAutoShowListTasksRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeAutoShowListTasksResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterChannelsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterChannelsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeDomainUsageDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeDomainUsageDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeDomainWithIntegrityRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeDomainWithIntegrityResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeForbidPushStreamRoomListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeForbidPushStreamRoomListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCertificateDetailRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCertificateDetailResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCertificateListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCertificateListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectPornDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectPornDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByLayerRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByLayerResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByTimeStampRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByTimeStampResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainDetailRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainDetailResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLogRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLogResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPushBpsDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPushBpsDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPushTrafficDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPushTrafficDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPvUvDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPvUvDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeBpsDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeBpsDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeTrafficDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeTrafficDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordUsageDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordUsageDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStagingConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStagingConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTrafficDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTrafficDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTranscodeDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTranscodeDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDrmUsageDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDrmUsageDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveEdgeTransferRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveEdgeTransferResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullStreamConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullStreamConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeLogAuthorizedRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeLogAuthorizedResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveShiftConfigsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveShiftConfigsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamBitRateDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamBitRateDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMetricDetailDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMetricDetailDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOptimizedFeatureConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOptimizedFeatureConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFileRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFileResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFilesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFilesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsBlockListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsBlockListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsPublishListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsPublishListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamStateRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamStateResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeStreamNumRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeStreamNumResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarkRulesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarkRulesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTagResourcesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTagResourcesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserBillPredictionRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserBillPredictionResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserTagsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserTagsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMeterLiveRtcDurationRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMeterLiveRtcDurationResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomKickoutUserListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomKickoutUserListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomStatusRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomStatusResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameCostRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameCostResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameCostShrinkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameDelayRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameDelayResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameDelayShrinkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayFailStatusRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayFailStatusResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayFailStatusShrinkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayTimeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayTimeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayTimeShrinkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKVvDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKVvDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKVvDataShrinkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeToutiaoLivePlayRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeToutiaoLivePlayResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeToutiaoLivePublishRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeToutiaoLivePublishResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DisableLiveRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DisableLiveRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DynamicUpdateWaterMarkStreamRuleRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DynamicUpdateWaterMarkStreamRuleResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\EditPlaylistRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\EditPlaylistResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\EditShowAndReplaceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\EditShowAndReplaceResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\EffectCasterUrgentRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\EffectCasterUrgentResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\EffectCasterVideoResourceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\EffectCasterVideoResourceResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\EnableLiveRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\EnableLiveRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ForbidLiveStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ForbidLiveStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ForbidPushStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ForbidPushStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\GetAllCustomTemplatesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\GetAllCustomTemplatesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\GetCustomTemplateRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\GetCustomTemplateResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\GetEditingJobInfoRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\GetEditingJobInfoResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMessageGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMessageGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMessageTokenRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMessageTokenResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMessageUserInfoRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMessageUserInfoResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMultiRateConfigListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMultiRateConfigListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMultiRateConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\GetMultiRateConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\HotLiveRtcStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\HotLiveRtcStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\InitializeAutoShowListTaskRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\InitializeAutoShowListTaskResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\JoinMessageGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\JoinMessageGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\LeaveMessageGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\LeaveMessageGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryDomainsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryDomainsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupUserRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupUserResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistItemsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistItemsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterComponentRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterComponentResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterEpisodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterEpisodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterProgramRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterProgramResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterVideoResourceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterVideoResourceResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveDomainSchdmByPropertyRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveDomainSchdmByPropertyResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyShowListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyShowListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyStudioLayoutRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyStudioLayoutResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\OpenLiveShiftRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\OpenLiveShiftResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\PlayChoosenShowRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\PlayChoosenShowResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\PublishLiveStagingConfigToProductionRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\PublishLiveStagingConfigToProductionResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\QuerySnapshotCallbackAuthRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\QuerySnapshotCallbackAuthResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\RealTimeRecordCommandRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\RealTimeRecordCommandResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\RealTimeSnapshotCommandRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\RealTimeSnapshotCommandResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\RemoveShowFromShowListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\RemoveShowFromShowListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ResumeLiveStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ResumeLiveStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\RollbackLiveStagingConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\RollbackLiveStagingConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SendRoomNotificationRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SendRoomNotificationResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SendRoomUserNotificationRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SendRoomUserNotificationResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterChannelRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterChannelResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSceneConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSceneConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSyncGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSyncGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterTimedEventRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterTimedEventResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveDomainCertificateRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveDomainCertificateResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveDomainStagingConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveDomainStagingConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveEdgeTransferRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveEdgeTransferResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveLazyPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveLazyPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamDelayConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamDelayConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamOptimizedFeatureConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamOptimizedFeatureConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetSnapshotCallbackAuthRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetSnapshotCallbackAuthResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterSceneRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterSceneResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveDomainRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveDomainResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveStreamMonitorRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveStreamMonitorResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopCasterSceneRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopCasterSceneResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopLiveDomainRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopLiveDomainResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopLiveStreamMonitorRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopLiveStreamMonitorResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopPlaylistRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopPlaylistResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\TagLiveResourcesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\TagLiveResourcesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UnTagLiveResourcesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UnTagLiveResourcesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAppSnapshotConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAppSnapshotConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAudioAuditConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAudioAuditConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAudioAuditNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAudioAuditNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveDetectNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveDetectNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLivePullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLivePullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveRecordNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveRecordNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveSnapshotDetectPornConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveSnapshotDetectPornConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveStreamMonitorRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveStreamMonitorResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveStreamWatermarkRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveStreamWatermarkResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveStreamWatermarkRuleRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveStreamWatermarkRuleResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveTopLevelDomainRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveTopLevelDomainResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateMixStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateMixStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\VerifyLiveDomainOwnerRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\VerifyLiveDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Live extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'live.aliyuncs.com',
            'cn-beijing'                  => 'live.aliyuncs.com',
            'cn-hangzhou'                 => 'live.aliyuncs.com',
            'cn-shanghai'                 => 'live.aliyuncs.com',
            'cn-shenzhen'                 => 'live.aliyuncs.com',
            'ap-southeast-1'              => 'live.aliyuncs.com',
            'ap-southeast-5'              => 'live.aliyuncs.com',
            'ap-northeast-1'              => 'live.aliyuncs.com',
            'eu-central-1'                => 'live.aliyuncs.com',
            'ap-south-1'                  => 'live.aliyuncs.com',
            'ap-northeast-2-pop'          => 'live.aliyuncs.com',
            'ap-southeast-2'              => 'live.aliyuncs.com',
            'ap-southeast-3'              => 'live.aliyuncs.com',
            'cn-beijing-finance-1'        => 'live.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'live.aliyuncs.com',
            'cn-beijing-gov-1'            => 'live.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'live.aliyuncs.com',
            'cn-chengdu'                  => 'live.aliyuncs.com',
            'cn-edge-1'                   => 'live.aliyuncs.com',
            'cn-fujian'                   => 'live.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'live.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'live.aliyuncs.com',
            'cn-hangzhou-finance'         => 'live.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'live.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'live.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'live.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'live.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'live.aliyuncs.com',
            'cn-hongkong'                 => 'live.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'live.aliyuncs.com',
            'cn-huhehaote'                => 'live.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'live.aliyuncs.com',
            'cn-north-2-gov-1'            => 'live.aliyuncs.com',
            'cn-qingdao-nebula'           => 'live.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'live.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'live.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'live.aliyuncs.com',
            'cn-shanghai-inner'           => 'live.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'live.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'live.aliyuncs.com',
            'cn-shenzhen-inner'           => 'live.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'live.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'live.aliyuncs.com',
            'cn-wuhan'                    => 'live.aliyuncs.com',
            'cn-wulanchabu'               => 'live.aliyuncs.com',
            'cn-yushanfang'               => 'live.aliyuncs.com',
            'cn-zhangbei'                 => 'live.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'live.aliyuncs.com',
            'cn-zhangjiakou'              => 'live.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'live.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'live.aliyuncs.com',
            'eu-west-1'                   => 'live.aliyuncs.com',
            'eu-west-1-oxs'               => 'live.aliyuncs.com',
            'me-east-1'                   => 'live.aliyuncs.com',
            'rus-west-1-pop'              => 'live.aliyuncs.com',
            'us-east-1'                   => 'live.aliyuncs.com',
            'us-west-1'                   => 'live.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('live', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddCasterComponentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddCasterComponentResponse
     */
    public function addCasterComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->captionLayerContent)) {
            $query['CaptionLayerContent'] = $request->captionLayerContent;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->componentLayer)) {
            $query['ComponentLayer'] = $request->componentLayer;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->componentType)) {
            $query['ComponentType'] = $request->componentType;
        }
        if (!Utils::isUnset($request->effect)) {
            $query['Effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->htmlLayerContent)) {
            $query['HtmlLayerContent'] = $request->htmlLayerContent;
        }
        if (!Utils::isUnset($request->imageLayerContent)) {
            $query['ImageLayerContent'] = $request->imageLayerContent;
        }
        if (!Utils::isUnset($request->layerOrder)) {
            $query['LayerOrder'] = $request->layerOrder;
        }
        if (!Utils::isUnset($request->locationId)) {
            $query['LocationId'] = $request->locationId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->textLayerContent)) {
            $query['TextLayerContent'] = $request->textLayerContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCasterComponent',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCasterComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCasterComponentRequest $request
     *
     * @return AddCasterComponentResponse
     */
    public function addCasterComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasterComponentWithOptions($request, $runtime);
    }

    /**
     * @param AddCasterEpisodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddCasterEpisodeResponse
     */
    public function addCasterEpisodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->episodeName)) {
            $query['EpisodeName'] = $request->episodeName;
        }
        if (!Utils::isUnset($request->episodeType)) {
            $query['EpisodeType'] = $request->episodeType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->switchType)) {
            $query['SwitchType'] = $request->switchType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCasterEpisode',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCasterEpisodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCasterEpisodeRequest $request
     *
     * @return AddCasterEpisodeResponse
     */
    public function addCasterEpisode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasterEpisodeWithOptions($request, $runtime);
    }

    /**
     * @param AddCasterEpisodeGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddCasterEpisodeGroupResponse
     */
    public function addCasterEpisodeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->item)) {
            $query['Item'] = $request->item;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->repeatNum)) {
            $query['RepeatNum'] = $request->repeatNum;
        }
        if (!Utils::isUnset($request->sideOutputUrl)) {
            $query['SideOutputUrl'] = $request->sideOutputUrl;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCasterEpisodeGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCasterEpisodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCasterEpisodeGroupRequest $request
     *
     * @return AddCasterEpisodeGroupResponse
     */
    public function addCasterEpisodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasterEpisodeGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddCasterEpisodeGroupContentRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AddCasterEpisodeGroupContentResponse
     */
    public function addCasterEpisodeGroupContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCasterEpisodeGroupContent',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCasterEpisodeGroupContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCasterEpisodeGroupContentRequest $request
     *
     * @return AddCasterEpisodeGroupContentResponse
     */
    public function addCasterEpisodeGroupContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasterEpisodeGroupContentWithOptions($request, $runtime);
    }

    /**
     * @param AddCasterLayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddCasterLayoutResponse
     */
    public function addCasterLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioLayer)) {
            $query['AudioLayer'] = $request->audioLayer;
        }
        if (!Utils::isUnset($request->blendList)) {
            $query['BlendList'] = $request->blendList;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->mixList)) {
            $query['MixList'] = $request->mixList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->videoLayer)) {
            $query['VideoLayer'] = $request->videoLayer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCasterLayout',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCasterLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCasterLayoutRequest $request
     *
     * @return AddCasterLayoutResponse
     */
    public function addCasterLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasterLayoutWithOptions($request, $runtime);
    }

    /**
     * @param AddCasterProgramRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddCasterProgramResponse
     */
    public function addCasterProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->episode)) {
            $query['Episode'] = $request->episode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCasterProgram',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCasterProgramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCasterProgramRequest $request
     *
     * @return AddCasterProgramResponse
     */
    public function addCasterProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasterProgramWithOptions($request, $runtime);
    }

    /**
     * @param AddCasterVideoResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddCasterVideoResourceResponse
     */
    public function addCasterVideoResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginOffset)) {
            $query['BeginOffset'] = $request->beginOffset;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->endOffset)) {
            $query['EndOffset'] = $request->endOffset;
        }
        if (!Utils::isUnset($request->fixedDelayDuration)) {
            $query['FixedDelayDuration'] = $request->fixedDelayDuration;
        }
        if (!Utils::isUnset($request->liveStreamUrl)) {
            $query['LiveStreamUrl'] = $request->liveStreamUrl;
        }
        if (!Utils::isUnset($request->locationId)) {
            $query['LocationId'] = $request->locationId;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ptsCallbackInterval)) {
            $query['PtsCallbackInterval'] = $request->ptsCallbackInterval;
        }
        if (!Utils::isUnset($request->repeatNum)) {
            $query['RepeatNum'] = $request->repeatNum;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->streamId)) {
            $query['StreamId'] = $request->streamId;
        }
        if (!Utils::isUnset($request->vodUrl)) {
            $query['VodUrl'] = $request->vodUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCasterVideoResource',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCasterVideoResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCasterVideoResourceRequest $request
     *
     * @return AddCasterVideoResourceResponse
     */
    public function addCasterVideoResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCasterVideoResourceWithOptions($request, $runtime);
    }

    /**
     * @param AddCustomLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AddCustomLiveStreamTranscodeResponse
     */
    public function addCustomLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->audioBitrate)) {
            $query['AudioBitrate'] = $request->audioBitrate;
        }
        if (!Utils::isUnset($request->audioChannelNum)) {
            $query['AudioChannelNum'] = $request->audioChannelNum;
        }
        if (!Utils::isUnset($request->audioCodec)) {
            $query['AudioCodec'] = $request->audioCodec;
        }
        if (!Utils::isUnset($request->audioProfile)) {
            $query['AudioProfile'] = $request->audioProfile;
        }
        if (!Utils::isUnset($request->audioRate)) {
            $query['AudioRate'] = $request->audioRate;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->encryptParameters)) {
            $query['EncryptParameters'] = $request->encryptParameters;
        }
        if (!Utils::isUnset($request->FPS)) {
            $query['FPS'] = $request->FPS;
        }
        if (!Utils::isUnset($request->gop)) {
            $query['Gop'] = $request->gop;
        }
        if (!Utils::isUnset($request->height)) {
            $query['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->kmsKeyExpireInterval)) {
            $query['KmsKeyExpireInterval'] = $request->kmsKeyExpireInterval;
        }
        if (!Utils::isUnset($request->kmsKeyID)) {
            $query['KmsKeyID'] = $request->kmsKeyID;
        }
        if (!Utils::isUnset($request->kmsUID)) {
            $query['KmsUID'] = $request->kmsUID;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->profile)) {
            $query['Profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->videoBitrate)) {
            $query['VideoBitrate'] = $request->videoBitrate;
        }
        if (!Utils::isUnset($request->width)) {
            $query['Width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCustomLiveStreamTranscode',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCustomLiveStreamTranscodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCustomLiveStreamTranscodeRequest $request
     *
     * @return AddCustomLiveStreamTranscodeResponse
     */
    public function addCustomLiveStreamTranscode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomLiveStreamTranscodeWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveAppRecordConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddLiveAppRecordConfigResponse
     */
    public function addLiveAppRecordConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->onDemand)) {
            $query['OnDemand'] = $request->onDemand;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->recordFormat)) {
            $query['RecordFormat'] = $request->recordFormat;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->transcodeRecordFormat)) {
            $query['TranscodeRecordFormat'] = $request->transcodeRecordFormat;
        }
        if (!Utils::isUnset($request->transcodeTemplates)) {
            $query['TranscodeTemplates'] = $request->transcodeTemplates;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveAppRecordConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveAppRecordConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveAppRecordConfigRequest $request
     *
     * @return AddLiveAppRecordConfigResponse
     */
    public function addLiveAppRecordConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveAppRecordConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveAppSnapshotConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddLiveAppSnapshotConfigResponse
     */
    public function addLiveAppSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->overwriteOssObject)) {
            $query['OverwriteOssObject'] = $request->overwriteOssObject;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sequenceOssObject)) {
            $query['SequenceOssObject'] = $request->sequenceOssObject;
        }
        if (!Utils::isUnset($request->timeInterval)) {
            $query['TimeInterval'] = $request->timeInterval;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveAppSnapshotConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveAppSnapshotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveAppSnapshotConfigRequest $request
     *
     * @return AddLiveAppSnapshotConfigResponse
     */
    public function addLiveAppSnapshotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveAppSnapshotConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveAudioAuditConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddLiveAudioAuditConfigResponse
     */
    public function addLiveAudioAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossObject)) {
            $query['OssObject'] = $request->ossObject;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveAudioAuditConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveAudioAuditConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveAudioAuditConfigRequest $request
     *
     * @return AddLiveAudioAuditConfigResponse
     */
    public function addLiveAudioAuditConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveAudioAuditConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveAudioAuditNotifyConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddLiveAudioAuditNotifyConfigResponse
     */
    public function addLiveAudioAuditNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->callbackTemplate)) {
            $query['CallbackTemplate'] = $request->callbackTemplate;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveAudioAuditNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveAudioAuditNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveAudioAuditNotifyConfigRequest $request
     *
     * @return AddLiveAudioAuditNotifyConfigResponse
     */
    public function addLiveAudioAuditNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveAudioAuditNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveDetectNotifyConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddLiveDetectNotifyConfigResponse
     */
    public function addLiveDetectNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveDetectNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveDetectNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveDetectNotifyConfigRequest $request
     *
     * @return AddLiveDetectNotifyConfigResponse
     */
    public function addLiveDetectNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveDetectNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddLiveDomainResponse
     */
    public function addLiveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkUrl)) {
            $query['CheckUrl'] = $request->checkUrl;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->liveDomainType)) {
            $query['LiveDomainType'] = $request->liveDomainType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveDomain',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveDomainRequest $request
     *
     * @return AddLiveDomainResponse
     */
    public function addLiveDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveDomainWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveDomainMappingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddLiveDomainMappingResponse
     */
    public function addLiveDomainMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pullDomain)) {
            $query['PullDomain'] = $request->pullDomain;
        }
        if (!Utils::isUnset($request->pushDomain)) {
            $query['PushDomain'] = $request->pushDomain;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveDomainMapping',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveDomainMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveDomainMappingRequest $request
     *
     * @return AddLiveDomainMappingResponse
     */
    public function addLiveDomainMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveDomainMappingWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveDomainPlayMappingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddLiveDomainPlayMappingResponse
     */
    public function addLiveDomainPlayMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        if (!Utils::isUnset($request->pullDomain)) {
            $query['PullDomain'] = $request->pullDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveDomainPlayMapping',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveDomainPlayMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveDomainPlayMappingRequest $request
     *
     * @return AddLiveDomainPlayMappingResponse
     */
    public function addLiveDomainPlayMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveDomainPlayMappingWithOptions($request, $runtime);
    }

    /**
     * @param AddLivePullStreamInfoConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddLivePullStreamInfoConfigResponse
     */
    public function addLivePullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sourceUrl)) {
            $query['SourceUrl'] = $request->sourceUrl;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLivePullStreamInfoConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLivePullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLivePullStreamInfoConfigRequest $request
     *
     * @return AddLivePullStreamInfoConfigResponse
     */
    public function addLivePullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLivePullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddLiveRecordNotifyConfigResponse
     */
    public function addLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->needStatusNotify)) {
            $query['NeedStatusNotify'] = $request->needStatusNotify;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->onDemandUrl)) {
            $query['OnDemandUrl'] = $request->onDemandUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveRecordNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveRecordNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveRecordNotifyConfigRequest $request
     *
     * @return AddLiveRecordNotifyConfigResponse
     */
    public function addLiveRecordNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveRecordNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveRecordVodConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddLiveRecordVodConfigResponse
     */
    public function addLiveRecordVodConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->autoCompose)) {
            $query['AutoCompose'] = $request->autoCompose;
        }
        if (!Utils::isUnset($request->composeVodTranscodeGroupId)) {
            $query['ComposeVodTranscodeGroupId'] = $request->composeVodTranscodeGroupId;
        }
        if (!Utils::isUnset($request->cycleDuration)) {
            $query['CycleDuration'] = $request->cycleDuration;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->storageLocation)) {
            $query['StorageLocation'] = $request->storageLocation;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->vodTranscodeGroupId)) {
            $query['VodTranscodeGroupId'] = $request->vodTranscodeGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveRecordVodConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveRecordVodConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveRecordVodConfigRequest $request
     *
     * @return AddLiveRecordVodConfigResponse
     */
    public function addLiveRecordVodConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveRecordVodConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveSnapshotDetectPornConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddLiveSnapshotDetectPornConfigResponse
     */
    public function addLiveSnapshotDetectPornConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossObject)) {
            $query['OssObject'] = $request->ossObject;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveSnapshotDetectPornConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveSnapshotDetectPornConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveSnapshotDetectPornConfigRequest $request
     *
     * @return AddLiveSnapshotDetectPornConfigResponse
     */
    public function addLiveSnapshotDetectPornConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveSnapshotDetectPornConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddLiveStreamTranscodeResponse
     */
    public function addLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->encryptParameters)) {
            $query['EncryptParameters'] = $request->encryptParameters;
        }
        if (!Utils::isUnset($request->lazy)) {
            $query['Lazy'] = $request->lazy;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveStreamTranscode',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveStreamTranscodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveStreamTranscodeRequest $request
     *
     * @return AddLiveStreamTranscodeResponse
     */
    public function addLiveStreamTranscode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveStreamTranscodeWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveStreamWatermarkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddLiveStreamWatermarkResponse
     */
    public function addLiveStreamWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->height)) {
            $query['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->offsetCorner)) {
            $query['OffsetCorner'] = $request->offsetCorner;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pictureUrl)) {
            $query['PictureUrl'] = $request->pictureUrl;
        }
        if (!Utils::isUnset($request->refHeight)) {
            $query['RefHeight'] = $request->refHeight;
        }
        if (!Utils::isUnset($request->refWidth)) {
            $query['RefWidth'] = $request->refWidth;
        }
        if (!Utils::isUnset($request->transparency)) {
            $query['Transparency'] = $request->transparency;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->XOffset)) {
            $query['XOffset'] = $request->XOffset;
        }
        if (!Utils::isUnset($request->YOffset)) {
            $query['YOffset'] = $request->YOffset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveStreamWatermark',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveStreamWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveStreamWatermarkRequest $request
     *
     * @return AddLiveStreamWatermarkResponse
     */
    public function addLiveStreamWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveStreamWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveStreamWatermarkRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddLiveStreamWatermarkRuleResponse
     */
    public function addLiveStreamWatermarkRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLiveStreamWatermarkRule',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLiveStreamWatermarkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddLiveStreamWatermarkRuleRequest $request
     *
     * @return AddLiveStreamWatermarkRuleResponse
     */
    public function addLiveStreamWatermarkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveStreamWatermarkRuleWithOptions($request, $runtime);
    }

    /**
     * @param AddMultiRateConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddMultiRateConfigResponse
     */
    public function addMultiRateConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->avFormat)) {
            $query['AvFormat'] = $request->avFormat;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isLazy)) {
            $query['IsLazy'] = $request->isLazy;
        }
        if (!Utils::isUnset($request->isTimeAlign)) {
            $query['IsTimeAlign'] = $request->isTimeAlign;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->templates)) {
            $query['Templates'] = $request->templates;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMultiRateConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMultiRateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMultiRateConfigRequest $request
     *
     * @return AddMultiRateConfigResponse
     */
    public function addMultiRateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMultiRateConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddPlaylistItemsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddPlaylistItemsResponse
     */
    public function addPlaylistItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programConfig)) {
            $query['ProgramConfig'] = $request->programConfig;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        if (!Utils::isUnset($request->programItems)) {
            $query['ProgramItems'] = $request->programItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPlaylistItems',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPlaylistItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddPlaylistItemsRequest $request
     *
     * @return AddPlaylistItemsResponse
     */
    public function addPlaylistItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPlaylistItemsWithOptions($request, $runtime);
    }

    /**
     * @param AddRtsLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddRtsLiveStreamTranscodeResponse
     */
    public function addRtsLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->audioBitrate)) {
            $query['AudioBitrate'] = $request->audioBitrate;
        }
        if (!Utils::isUnset($request->audioChannelNum)) {
            $query['AudioChannelNum'] = $request->audioChannelNum;
        }
        if (!Utils::isUnset($request->audioCodec)) {
            $query['AudioCodec'] = $request->audioCodec;
        }
        if (!Utils::isUnset($request->audioProfile)) {
            $query['AudioProfile'] = $request->audioProfile;
        }
        if (!Utils::isUnset($request->audioRate)) {
            $query['AudioRate'] = $request->audioRate;
        }
        if (!Utils::isUnset($request->deleteBframes)) {
            $query['DeleteBframes'] = $request->deleteBframes;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->FPS)) {
            $query['FPS'] = $request->FPS;
        }
        if (!Utils::isUnset($request->gop)) {
            $query['Gop'] = $request->gop;
        }
        if (!Utils::isUnset($request->height)) {
            $query['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->lazy)) {
            $query['Lazy'] = $request->lazy;
        }
        if (!Utils::isUnset($request->opus)) {
            $query['Opus'] = $request->opus;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->profile)) {
            $query['Profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->videoBitrate)) {
            $query['VideoBitrate'] = $request->videoBitrate;
        }
        if (!Utils::isUnset($request->width)) {
            $query['Width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRtsLiveStreamTranscode',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRtsLiveStreamTranscodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddRtsLiveStreamTranscodeRequest $request
     *
     * @return AddRtsLiveStreamTranscodeResponse
     */
    public function addRtsLiveStreamTranscode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRtsLiveStreamTranscodeWithOptions($request, $runtime);
    }

    /**
     * @param AddShowIntoShowListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddShowIntoShowListResponse
     */
    public function addShowIntoShowListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->liveInputType)) {
            $query['LiveInputType'] = $request->liveInputType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->repeatTimes)) {
            $query['RepeatTimes'] = $request->repeatTimes;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->resourceUrl)) {
            $query['ResourceUrl'] = $request->resourceUrl;
        }
        if (!Utils::isUnset($request->showName)) {
            $query['ShowName'] = $request->showName;
        }
        if (!Utils::isUnset($request->spot)) {
            $query['Spot'] = $request->spot;
        }
        if (!Utils::isUnset($request->isBatchMode)) {
            $query['isBatchMode'] = $request->isBatchMode;
        }
        if (!Utils::isUnset($request->showList)) {
            $query['showList'] = $request->showList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddShowIntoShowList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddShowIntoShowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddShowIntoShowListRequest $request
     *
     * @return AddShowIntoShowListResponse
     */
    public function addShowIntoShowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShowIntoShowListWithOptions($request, $runtime);
    }

    /**
     * @param AddStudioLayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddStudioLayoutResponse
     */
    public function addStudioLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bgImageConfig)) {
            $query['BgImageConfig'] = $request->bgImageConfig;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->commonConfig)) {
            $query['CommonConfig'] = $request->commonConfig;
        }
        if (!Utils::isUnset($request->layerOrderConfigList)) {
            $query['LayerOrderConfigList'] = $request->layerOrderConfigList;
        }
        if (!Utils::isUnset($request->layoutName)) {
            $query['LayoutName'] = $request->layoutName;
        }
        if (!Utils::isUnset($request->layoutType)) {
            $query['LayoutType'] = $request->layoutType;
        }
        if (!Utils::isUnset($request->mediaInputConfigList)) {
            $query['MediaInputConfigList'] = $request->mediaInputConfigList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->screenInputConfigList)) {
            $query['ScreenInputConfigList'] = $request->screenInputConfigList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddStudioLayout',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddStudioLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddStudioLayoutRequest $request
     *
     * @return AddStudioLayoutResponse
     */
    public function addStudioLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addStudioLayoutWithOptions($request, $runtime);
    }

    /**
     * @param AddTrancodeSEIRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddTrancodeSEIResponse
     */
    public function addTrancodeSEIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->delay)) {
            $query['Delay'] = $request->delay;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pattern)) {
            $query['Pattern'] = $request->pattern;
        }
        if (!Utils::isUnset($request->repeat)) {
            $query['Repeat'] = $request->repeat;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTrancodeSEI',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTrancodeSEIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTrancodeSEIRequest $request
     *
     * @return AddTrancodeSEIResponse
     */
    public function addTrancodeSEI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTrancodeSEIWithOptions($request, $runtime);
    }

    /**
     * @param AllowPushStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AllowPushStreamResponse
     */
    public function allowPushStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllowPushStream',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllowPushStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllowPushStreamRequest $request
     *
     * @return AllowPushStreamResponse
     */
    public function allowPushStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allowPushStreamWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteLiveDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchDeleteLiveDomainConfigsResponse
     */
    public function batchDeleteLiveDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteLiveDomainConfigs',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteLiveDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteLiveDomainConfigsRequest $request
     *
     * @return BatchDeleteLiveDomainConfigsResponse
     */
    public function batchDeleteLiveDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteLiveDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetLiveDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchSetLiveDomainConfigsResponse
     */
    public function batchSetLiveDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functions)) {
            $query['Functions'] = $request->functions;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSetLiveDomainConfigs',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetLiveDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchSetLiveDomainConfigsRequest $request
     *
     * @return BatchSetLiveDomainConfigsResponse
     */
    public function batchSetLiveDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetLiveDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param CancelMuteAllGroupUserRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CancelMuteAllGroupUserResponse
     */
    public function cancelMuteAllGroupUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->operatorUserId)) {
            $body['OperatorUserId'] = $request->operatorUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelMuteAllGroupUser',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelMuteAllGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelMuteAllGroupUserRequest $request
     *
     * @return CancelMuteAllGroupUserResponse
     */
    public function cancelMuteAllGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelMuteAllGroupUserWithOptions($request, $runtime);
    }

    /**
     * @param CloseLiveShiftRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloseLiveShiftResponse
     */
    public function closeLiveShiftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseLiveShift',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseLiveShiftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseLiveShiftRequest $request
     *
     * @return CloseLiveShiftResponse
     */
    public function closeLiveShift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeLiveShiftWithOptions($request, $runtime);
    }

    /**
     * @param CloseMessageGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CloseMessageGroupResponse
     */
    public function closeMessageGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloseMessageGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseMessageGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseMessageGroupRequest $request
     *
     * @return CloseMessageGroupResponse
     */
    public function closeMessageGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeMessageGroupWithOptions($request, $runtime);
    }

    /**
     * @param CopyCasterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CopyCasterResponse
     */
    public function copyCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterName)) {
            $query['CasterName'] = $request->casterName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->srcCasterId)) {
            $query['SrcCasterId'] = $request->srcCasterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyCaster',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyCasterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyCasterRequest $request
     *
     * @return CopyCasterResponse
     */
    public function copyCaster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyCasterWithOptions($request, $runtime);
    }

    /**
     * @param CopyCasterSceneConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CopyCasterSceneConfigResponse
     */
    public function copyCasterSceneConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->fromSceneId)) {
            $query['FromSceneId'] = $request->fromSceneId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->toSceneId)) {
            $query['ToSceneId'] = $request->toSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyCasterSceneConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyCasterSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyCasterSceneConfigRequest $request
     *
     * @return CopyCasterSceneConfigResponse
     */
    public function copyCasterSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyCasterSceneConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateCasterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateCasterResponse
     */
    public function createCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterName)) {
            $query['CasterName'] = $request->casterName;
        }
        if (!Utils::isUnset($request->casterTemplate)) {
            $query['CasterTemplate'] = $request->casterTemplate;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->normType)) {
            $query['NormType'] = $request->normType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->purchaseTime)) {
            $query['PurchaseTime'] = $request->purchaseTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCaster',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCasterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCasterRequest $request
     *
     * @return CreateCasterResponse
     */
    public function createCaster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCasterWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCustomTemplateResponse
     */
    public function createCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customTemplate)) {
            $query['CustomTemplate'] = $request->customTemplate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomTemplate',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomTemplateRequest $request
     *
     * @return CreateCustomTemplateResponse
     */
    public function createCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveRealTimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLiveRealTimeLogDeliveryResponse
     */
    public function createLiveRealTimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveRealTimeLogDelivery',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveRealTimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLiveRealTimeLogDeliveryRequest $request
     *
     * @return CreateLiveRealTimeLogDeliveryResponse
     */
    public function createLiveRealTimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveRealTimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveStreamMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateLiveStreamMonitorResponse
     */
    public function createLiveStreamMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->inputList)) {
            $query['InputList'] = $request->inputList;
        }
        if (!Utils::isUnset($request->monitorName)) {
            $query['MonitorName'] = $request->monitorName;
        }
        if (!Utils::isUnset($request->outputTemplate)) {
            $query['OutputTemplate'] = $request->outputTemplate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveStreamMonitor',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveStreamMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLiveStreamMonitorRequest $request
     *
     * @return CreateLiveStreamMonitorResponse
     */
    public function createLiveStreamMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveStreamMonitorWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveStreamRecordIndexFilesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateLiveStreamRecordIndexFilesResponse
     */
    public function createLiveStreamRecordIndexFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossObject)) {
            $query['OssObject'] = $request->ossObject;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveStreamRecordIndexFiles',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveStreamRecordIndexFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLiveStreamRecordIndexFilesRequest $request
     *
     * @return CreateLiveStreamRecordIndexFilesResponse
     */
    public function createLiveStreamRecordIndexFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveStreamRecordIndexFilesWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveTranscodeTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateLiveTranscodeTemplateResponse
     */
    public function createLiveTranscodeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->templateConfig)) {
            $query['TemplateConfig'] = $request->templateConfig;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveTranscodeTemplate',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLiveTranscodeTemplateRequest $request
     *
     * @return CreateLiveTranscodeTemplateResponse
     */
    public function createLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateMessageGroupRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMessageGroupResponse
     */
    public function createMessageGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMessageGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extension)) {
            $request->extensionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extension, 'Extension', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['CreatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->extensionShrink)) {
            $body['Extension'] = $request->extensionShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMessageGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMessageGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMessageGroupRequest $request
     *
     * @return CreateMessageGroupResponse
     */
    public function createMessageGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMessageGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateMixStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMixStreamResponse
     */
    public function createMixStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callbackConfig)) {
            $query['CallbackConfig'] = $request->callbackConfig;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->inputStreamList)) {
            $query['InputStreamList'] = $request->inputStreamList;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMixStream',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMixStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMixStreamRequest $request
     *
     * @return CreateMixStreamResponse
     */
    public function createMixStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMixStreamWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCasterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteCasterResponse
     */
    public function deleteCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCaster',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCasterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCasterRequest $request
     *
     * @return DeleteCasterResponse
     */
    public function deleteCaster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCasterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCasterComponentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCasterComponentResponse
     */
    public function deleteCasterComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCasterComponent',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCasterComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCasterComponentRequest $request
     *
     * @return DeleteCasterComponentResponse
     */
    public function deleteCasterComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCasterComponentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCasterEpisodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCasterEpisodeResponse
     */
    public function deleteCasterEpisodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->episodeId)) {
            $query['EpisodeId'] = $request->episodeId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCasterEpisode',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCasterEpisodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCasterEpisodeRequest $request
     *
     * @return DeleteCasterEpisodeResponse
     */
    public function deleteCasterEpisode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCasterEpisodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCasterEpisodeGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCasterEpisodeGroupResponse
     */
    public function deleteCasterEpisodeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCasterEpisodeGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCasterEpisodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCasterEpisodeGroupRequest $request
     *
     * @return DeleteCasterEpisodeGroupResponse
     */
    public function deleteCasterEpisodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCasterEpisodeGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCasterLayoutRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCasterLayoutResponse
     */
    public function deleteCasterLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
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
            'action'      => 'DeleteCasterLayout',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCasterLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCasterLayoutRequest $request
     *
     * @return DeleteCasterLayoutResponse
     */
    public function deleteCasterLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCasterLayoutWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCasterProgramRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCasterProgramResponse
     */
    public function deleteCasterProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCasterProgram',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCasterProgramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCasterProgramRequest $request
     *
     * @return DeleteCasterProgramResponse
     */
    public function deleteCasterProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCasterProgramWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCasterSceneConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteCasterSceneConfigResponse
     */
    public function deleteCasterSceneConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCasterSceneConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCasterSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCasterSceneConfigRequest $request
     *
     * @return DeleteCasterSceneConfigResponse
     */
    public function deleteCasterSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCasterSceneConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCasterVideoResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCasterVideoResourceResponse
     */
    public function deleteCasterVideoResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCasterVideoResource',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCasterVideoResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCasterVideoResourceRequest $request
     *
     * @return DeleteCasterVideoResourceResponse
     */
    public function deleteCasterVideoResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCasterVideoResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCustomTemplateResponse
     */
    public function deleteCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomTemplate',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomTemplateRequest $request
     *
     * @return DeleteCustomTemplateResponse
     */
    public function deleteCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveAppRecordConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLiveAppRecordConfigResponse
     */
    public function deleteLiveAppRecordConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveAppRecordConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveAppRecordConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveAppRecordConfigRequest $request
     *
     * @return DeleteLiveAppRecordConfigResponse
     */
    public function deleteLiveAppRecordConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveAppRecordConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveAppSnapshotConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteLiveAppSnapshotConfigResponse
     */
    public function deleteLiveAppSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveAppSnapshotConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveAppSnapshotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveAppSnapshotConfigRequest $request
     *
     * @return DeleteLiveAppSnapshotConfigResponse
     */
    public function deleteLiveAppSnapshotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveAppSnapshotConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveAudioAuditConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLiveAudioAuditConfigResponse
     */
    public function deleteLiveAudioAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveAudioAuditConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveAudioAuditConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveAudioAuditConfigRequest $request
     *
     * @return DeleteLiveAudioAuditConfigResponse
     */
    public function deleteLiveAudioAuditConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveAudioAuditConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveAudioAuditNotifyConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteLiveAudioAuditNotifyConfigResponse
     */
    public function deleteLiveAudioAuditNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveAudioAuditNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveAudioAuditNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveAudioAuditNotifyConfigRequest $request
     *
     * @return DeleteLiveAudioAuditNotifyConfigResponse
     */
    public function deleteLiveAudioAuditNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveAudioAuditNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveDetectNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteLiveDetectNotifyConfigResponse
     */
    public function deleteLiveDetectNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveDetectNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveDetectNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveDetectNotifyConfigRequest $request
     *
     * @return DeleteLiveDetectNotifyConfigResponse
     */
    public function deleteLiveDetectNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveDetectNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLiveDomainResponse
     */
    public function deleteLiveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveDomain',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveDomainRequest $request
     *
     * @return DeleteLiveDomainResponse
     */
    public function deleteLiveDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveDomainMappingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteLiveDomainMappingResponse
     */
    public function deleteLiveDomainMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pullDomain)) {
            $query['PullDomain'] = $request->pullDomain;
        }
        if (!Utils::isUnset($request->pushDomain)) {
            $query['PushDomain'] = $request->pushDomain;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveDomainMapping',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveDomainMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveDomainMappingRequest $request
     *
     * @return DeleteLiveDomainMappingResponse
     */
    public function deleteLiveDomainMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveDomainMappingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveDomainPlayMappingRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteLiveDomainPlayMappingResponse
     */
    public function deleteLiveDomainPlayMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        if (!Utils::isUnset($request->pullDomain)) {
            $query['PullDomain'] = $request->pullDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveDomainPlayMapping',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveDomainPlayMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveDomainPlayMappingRequest $request
     *
     * @return DeleteLiveDomainPlayMappingResponse
     */
    public function deleteLiveDomainPlayMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveDomainPlayMappingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveEdgeTransferRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteLiveEdgeTransferResponse
     */
    public function deleteLiveEdgeTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveEdgeTransfer',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveEdgeTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveEdgeTransferRequest $request
     *
     * @return DeleteLiveEdgeTransferResponse
     */
    public function deleteLiveEdgeTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveEdgeTransferWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveLazyPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteLiveLazyPullStreamInfoConfigResponse
     */
    public function deleteLiveLazyPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveLazyPullStreamInfoConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveLazyPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveLazyPullStreamInfoConfigRequest $request
     *
     * @return DeleteLiveLazyPullStreamInfoConfigResponse
     */
    public function deleteLiveLazyPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveLazyPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLivePullStreamInfoConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteLivePullStreamInfoConfigResponse
     */
    public function deleteLivePullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLivePullStreamInfoConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLivePullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLivePullStreamInfoConfigRequest $request
     *
     * @return DeleteLivePullStreamInfoConfigResponse
     */
    public function deleteLivePullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLivePullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveRealTimeLogLogstoreRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteLiveRealTimeLogLogstoreResponse
     */
    public function deleteLiveRealTimeLogLogstoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveRealTimeLogLogstore',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveRealTimeLogLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveRealTimeLogLogstoreRequest $request
     *
     * @return DeleteLiveRealTimeLogLogstoreResponse
     */
    public function deleteLiveRealTimeLogLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRealTimeLogLogstoreWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteLiveRealtimeLogDeliveryResponse
     */
    public function deleteLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveRealtimeLogDelivery',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveRealtimeLogDeliveryRequest $request
     *
     * @return DeleteLiveRealtimeLogDeliveryResponse
     */
    public function deleteLiveRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteLiveRecordNotifyConfigResponse
     */
    public function deleteLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveRecordNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveRecordNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveRecordNotifyConfigRequest $request
     *
     * @return DeleteLiveRecordNotifyConfigResponse
     */
    public function deleteLiveRecordNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveRecordVodConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLiveRecordVodConfigResponse
     */
    public function deleteLiveRecordVodConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveRecordVodConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveRecordVodConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveRecordVodConfigRequest $request
     *
     * @return DeleteLiveRecordVodConfigResponse
     */
    public function deleteLiveRecordVodConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordVodConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveSnapshotDetectPornConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteLiveSnapshotDetectPornConfigResponse
     */
    public function deleteLiveSnapshotDetectPornConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveSnapshotDetectPornConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveSnapshotDetectPornConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveSnapshotDetectPornConfigRequest $request
     *
     * @return DeleteLiveSnapshotDetectPornConfigResponse
     */
    public function deleteLiveSnapshotDetectPornConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotDetectPornConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveSpecificStagingConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteLiveSpecificStagingConfigResponse
     */
    public function deleteLiveSpecificStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveSpecificStagingConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveSpecificStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveSpecificStagingConfigRequest $request
     *
     * @return DeleteLiveSpecificStagingConfigResponse
     */
    public function deleteLiveSpecificStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSpecificStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveStreamMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteLiveStreamMonitorResponse
     */
    public function deleteLiveStreamMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->monitorId)) {
            $query['MonitorId'] = $request->monitorId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveStreamMonitor',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveStreamMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveStreamMonitorRequest $request
     *
     * @return DeleteLiveStreamMonitorResponse
     */
    public function deleteLiveStreamMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveStreamMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveStreamRecordIndexFilesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteLiveStreamRecordIndexFilesResponse
     */
    public function deleteLiveStreamRecordIndexFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->removeFile)) {
            $query['RemoveFile'] = $request->removeFile;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveStreamRecordIndexFiles',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveStreamRecordIndexFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveStreamRecordIndexFilesRequest $request
     *
     * @return DeleteLiveStreamRecordIndexFilesResponse
     */
    public function deleteLiveStreamRecordIndexFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveStreamRecordIndexFilesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLiveStreamTranscodeResponse
     */
    public function deleteLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveStreamTranscode',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveStreamTranscodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveStreamTranscodeRequest $request
     *
     * @return DeleteLiveStreamTranscodeResponse
     */
    public function deleteLiveStreamTranscode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveStreamTranscodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveStreamWatermarkRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLiveStreamWatermarkResponse
     */
    public function deleteLiveStreamWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DeleteLiveStreamWatermark',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveStreamWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveStreamWatermarkRequest $request
     *
     * @return DeleteLiveStreamWatermarkResponse
     */
    public function deleteLiveStreamWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveStreamWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveStreamWatermarkRuleRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteLiveStreamWatermarkRuleResponse
     */
    public function deleteLiveStreamWatermarkRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveStreamWatermarkRule',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveStreamWatermarkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveStreamWatermarkRuleRequest $request
     *
     * @return DeleteLiveStreamWatermarkRuleResponse
     */
    public function deleteLiveStreamWatermarkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveStreamWatermarkRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteLiveStreamsNotifyUrlConfigResponse
     */
    public function deleteLiveStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveStreamsNotifyUrlConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveStreamsNotifyUrlConfigRequest $request
     *
     * @return DeleteLiveStreamsNotifyUrlConfigResponse
     */
    public function deleteLiveStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMessageAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMessageAppResponse
     */
    public function deleteMessageAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMessageApp',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMessageAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMessageAppRequest $request
     *
     * @return DeleteMessageAppResponse
     */
    public function deleteMessageApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMixStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMixStreamResponse
     */
    public function deleteMixStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->mixStreamId)) {
            $query['MixStreamId'] = $request->mixStreamId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMixStream',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMixStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMixStreamRequest $request
     *
     * @return DeleteMixStreamResponse
     */
    public function deleteMixStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMixStreamWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMultiRateConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMultiRateConfigResponse
     */
    public function deleteMultiRateConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->deleteAll)) {
            $query['DeleteAll'] = $request->deleteAll;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->templates)) {
            $query['Templates'] = $request->templates;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMultiRateConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMultiRateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMultiRateConfigRequest $request
     *
     * @return DeleteMultiRateConfigResponse
     */
    public function deleteMultiRateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMultiRateConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeletePlaylistRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePlaylistResponse
     */
    public function deletePlaylistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePlaylist',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePlaylistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePlaylistRequest $request
     *
     * @return DeletePlaylistResponse
     */
    public function deletePlaylist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlaylistWithOptions($request, $runtime);
    }

    /**
     * @param DeletePlaylistItemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePlaylistItemsResponse
     */
    public function deletePlaylistItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        if (!Utils::isUnset($request->programItemIds)) {
            $query['ProgramItemIds'] = $request->programItemIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePlaylistItems',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePlaylistItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePlaylistItemsRequest $request
     *
     * @return DeletePlaylistItemsResponse
     */
    public function deletePlaylistItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlaylistItemsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoomResponse
     */
    public function deleteRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRoom',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRoomRequest $request
     *
     * @return DeleteRoomResponse
     */
    public function deleteRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoomWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnapshotCallbackAuthRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteSnapshotCallbackAuthResponse
     */
    public function deleteSnapshotCallbackAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshotCallbackAuth',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotCallbackAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSnapshotCallbackAuthRequest $request
     *
     * @return DeleteSnapshotCallbackAuthResponse
     */
    public function deleteSnapshotCallbackAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotCallbackAuthWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnapshotFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSnapshotFilesResponse
     */
    public function deleteSnapshotFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->createTimestampList)) {
            $query['CreateTimestampList'] = $request->createTimestampList;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->removeFile)) {
            $query['RemoveFile'] = $request->removeFile;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshotFiles',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSnapshotFilesRequest $request
     *
     * @return DeleteSnapshotFilesResponse
     */
    public function deleteSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStudioLayoutRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteStudioLayoutResponse
     */
    public function deleteStudioLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
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
            'action'      => 'DeleteStudioLayout',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStudioLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStudioLayoutRequest $request
     *
     * @return DeleteStudioLayoutResponse
     */
    public function deleteStudioLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStudioLayoutWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoShowListTasksRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAutoShowListTasksResponse
     */
    public function describeAutoShowListTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoShowListTasks',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoShowListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAutoShowListTasksRequest $request
     *
     * @return DescribeAutoShowListTasksResponse
     */
    public function describeAutoShowListTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoShowListTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterChannelsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCasterChannelsResponse
     */
    public function describeCasterChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterChannels',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterChannelsRequest $request
     *
     * @return DescribeCasterChannelsResponse
     */
    public function describeCasterChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterChannelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterComponentsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCasterComponentsResponse
     */
    public function describeCasterComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterComponents',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterComponentsRequest $request
     *
     * @return DescribeCasterComponentsResponse
     */
    public function describeCasterComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterComponentsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCasterConfigResponse
     */
    public function describeCasterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterConfigRequest $request
     *
     * @return DescribeCasterConfigResponse
     */
    public function describeCasterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterLayoutsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCasterLayoutsResponse
     */
    public function describeCasterLayoutsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
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
            'action'      => 'DescribeCasterLayouts',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterLayoutsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterLayoutsRequest $request
     *
     * @return DescribeCasterLayoutsResponse
     */
    public function describeCasterLayouts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterLayoutsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterProgramRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCasterProgramResponse
     */
    public function describeCasterProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->episodeId)) {
            $query['EpisodeId'] = $request->episodeId;
        }
        if (!Utils::isUnset($request->episodeType)) {
            $query['EpisodeType'] = $request->episodeType;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterProgram',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterProgramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterProgramRequest $request
     *
     * @return DescribeCasterProgramResponse
     */
    public function describeCasterProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterProgramWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterSceneAudioRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCasterSceneAudioResponse
     */
    public function describeCasterSceneAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterSceneAudio',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterSceneAudioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterSceneAudioRequest $request
     *
     * @return DescribeCasterSceneAudioResponse
     */
    public function describeCasterSceneAudio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterSceneAudioWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterScenesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCasterScenesResponse
     */
    public function describeCasterScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterScenes',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterScenesRequest $request
     *
     * @return DescribeCasterScenesResponse
     */
    public function describeCasterScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterScenesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterStreamUrlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCasterStreamUrlResponse
     */
    public function describeCasterStreamUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterStreamUrl',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterStreamUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterStreamUrlRequest $request
     *
     * @return DescribeCasterStreamUrlResponse
     */
    public function describeCasterStreamUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterStreamUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterSyncGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCasterSyncGroupResponse
     */
    public function describeCasterSyncGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterSyncGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterSyncGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterSyncGroupRequest $request
     *
     * @return DescribeCasterSyncGroupResponse
     */
    public function describeCasterSyncGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterSyncGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCasterVideoResourcesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCasterVideoResourcesResponse
     */
    public function describeCasterVideoResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasterVideoResources',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCasterVideoResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCasterVideoResourcesRequest $request
     *
     * @return DescribeCasterVideoResourcesResponse
     */
    public function describeCasterVideoResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterVideoResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCastersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCastersResponse
     */
    public function describeCastersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->casterName)) {
            $query['CasterName'] = $request->casterName;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->normType)) {
            $query['NormType'] = $request->normType;
        }
        if (!Utils::isUnset($request->orderByModifyAsc)) {
            $query['OrderByModifyAsc'] = $request->orderByModifyAsc;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCasters',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCastersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCastersRequest $request
     *
     * @return DescribeCastersResponse
     */
    public function describeCasters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCastersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainUsageDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainUsageDataResponse
     */
    public function describeDomainUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->field)) {
            $query['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainUsageData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainUsageDataRequest $request
     *
     * @return DescribeDomainUsageDataResponse
     */
    public function describeDomainUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainWithIntegrityRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainWithIntegrityResponse
     */
    public function describeDomainWithIntegrityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainWithIntegrity',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainWithIntegrityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainWithIntegrityRequest $request
     *
     * @return DescribeDomainWithIntegrityResponse
     */
    public function describeDomainWithIntegrity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainWithIntegrityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeForbidPushStreamRoomListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeForbidPushStreamRoomListResponse
     */
    public function describeForbidPushStreamRoomListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
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
            'action'      => 'DescribeForbidPushStreamRoomList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeForbidPushStreamRoomListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeForbidPushStreamRoomListRequest $request
     *
     * @return DescribeForbidPushStreamRoomListResponse
     */
    public function describeForbidPushStreamRoomList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeForbidPushStreamRoomListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHlsLiveStreamRealTimeBpsDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeHlsLiveStreamRealTimeBpsDataResponse
     */
    public function describeHlsLiveStreamRealTimeBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHlsLiveStreamRealTimeBpsData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHlsLiveStreamRealTimeBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHlsLiveStreamRealTimeBpsDataRequest $request
     *
     * @return DescribeHlsLiveStreamRealTimeBpsDataResponse
     */
    public function describeHlsLiveStreamRealTimeBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHlsLiveStreamRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveAudioAuditConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveAudioAuditConfigResponse
     */
    public function describeLiveAudioAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveAudioAuditConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveAudioAuditConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveAudioAuditConfigRequest $request
     *
     * @return DescribeLiveAudioAuditConfigResponse
     */
    public function describeLiveAudioAuditConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveAudioAuditConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveAudioAuditNotifyConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLiveAudioAuditNotifyConfigResponse
     */
    public function describeLiveAudioAuditNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveAudioAuditNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveAudioAuditNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveAudioAuditNotifyConfigRequest $request
     *
     * @return DescribeLiveAudioAuditNotifyConfigResponse
     */
    public function describeLiveAudioAuditNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveAudioAuditNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveCertificateDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveCertificateDetailResponse
     */
    public function describeLiveCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveCertificateDetail',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveCertificateDetailRequest $request
     *
     * @return DescribeLiveCertificateDetailResponse
     */
    public function describeLiveCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveCertificateListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLiveCertificateListResponse
     */
    public function describeLiveCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveCertificateList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveCertificateListRequest $request
     *
     * @return DescribeLiveCertificateListResponse
     */
    public function describeLiveCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDetectNotifyConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveDetectNotifyConfigResponse
     */
    public function describeLiveDetectNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDetectNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDetectNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDetectNotifyConfigRequest $request
     *
     * @return DescribeLiveDetectNotifyConfigResponse
     */
    public function describeLiveDetectNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDetectNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDetectPornDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLiveDetectPornDataResponse
     */
    public function describeLiveDetectPornDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fee)) {
            $query['Fee'] = $request->fee;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDetectPornData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDetectPornDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDetectPornDataRequest $request
     *
     * @return DescribeLiveDetectPornDataResponse
     */
    public function describeLiveDetectPornData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDetectPornDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainBpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLiveDomainBpsDataResponse
     */
    public function describeLiveDomainBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainBpsData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainBpsDataRequest $request
     *
     * @return DescribeLiveDomainBpsDataResponse
     */
    public function describeLiveDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainBpsDataByLayerRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLiveDomainBpsDataByLayerResponse
     */
    public function describeLiveDomainBpsDataByLayerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->layer)) {
            $query['Layer'] = $request->layer;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainBpsDataByLayer',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainBpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainBpsDataByLayerRequest $request
     *
     * @return DescribeLiveDomainBpsDataByLayerResponse
     */
    public function describeLiveDomainBpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainBpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainBpsDataByTimeStampRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeLiveDomainBpsDataByTimeStampResponse
     */
    public function describeLiveDomainBpsDataByTimeStampWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ispNames)) {
            $query['IspNames'] = $request->ispNames;
        }
        if (!Utils::isUnset($request->locationNames)) {
            $query['LocationNames'] = $request->locationNames;
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
            'action'      => 'DescribeLiveDomainBpsDataByTimeStamp',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainBpsDataByTimeStampResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainBpsDataByTimeStampRequest $request
     *
     * @return DescribeLiveDomainBpsDataByTimeStampResponse
     */
    public function describeLiveDomainBpsDataByTimeStamp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainBpsDataByTimeStampWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainCertificateInfoRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveDomainCertificateInfoResponse
     */
    public function describeLiveDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainCertificateInfo',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainCertificateInfoRequest $request
     *
     * @return DescribeLiveDomainCertificateInfoResponse
     */
    public function describeLiveDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLiveDomainConfigsResponse
     */
    public function describeLiveDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainConfigs',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainConfigsRequest $request
     *
     * @return DescribeLiveDomainConfigsResponse
     */
    public function describeLiveDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveDomainDetailResponse
     */
    public function describeLiveDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainDetail',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainDetailRequest $request
     *
     * @return DescribeLiveDomainDetailResponse
     */
    public function describeLiveDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainFrameRateAndBitRateDataRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeLiveDomainFrameRateAndBitRateDataResponse
     */
    public function describeLiveDomainFrameRateAndBitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->queryTime)) {
            $query['QueryTime'] = $request->queryTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainFrameRateAndBitRateData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainFrameRateAndBitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainFrameRateAndBitRateDataRequest $request
     *
     * @return DescribeLiveDomainFrameRateAndBitRateDataResponse
     */
    public function describeLiveDomainFrameRateAndBitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainFrameRateAndBitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainLimitRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLiveDomainLimitResponse
     */
    public function describeLiveDomainLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainLimit',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainLimitRequest $request
     *
     * @return DescribeLiveDomainLimitResponse
     */
    public function describeLiveDomainLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainLimitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLiveDomainLogResponse
     */
    public function describeLiveDomainLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeLiveDomainLog',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainLogRequest $request
     *
     * @return DescribeLiveDomainLogResponse
     */
    public function describeLiveDomainLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainMappingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLiveDomainMappingResponse
     */
    public function describeLiveDomainMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainMapping',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainMappingRequest $request
     *
     * @return DescribeLiveDomainMappingResponse
     */
    public function describeLiveDomainMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainMappingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainOnlineUserNumRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveDomainOnlineUserNumResponse
     */
    public function describeLiveDomainOnlineUserNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->queryTime)) {
            $query['QueryTime'] = $request->queryTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainOnlineUserNum',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainOnlineUserNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainOnlineUserNumRequest $request
     *
     * @return DescribeLiveDomainOnlineUserNumResponse
     */
    public function describeLiveDomainOnlineUserNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainOnlineUserNumWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainPushBpsDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveDomainPushBpsDataResponse
     */
    public function describeLiveDomainPushBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainPushBpsData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainPushBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainPushBpsDataRequest $request
     *
     * @return DescribeLiveDomainPushBpsDataResponse
     */
    public function describeLiveDomainPushBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainPushBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainPushTrafficDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveDomainPushTrafficDataResponse
     */
    public function describeLiveDomainPushTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainPushTrafficData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainPushTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainPushTrafficDataRequest $request
     *
     * @return DescribeLiveDomainPushTrafficDataResponse
     */
    public function describeLiveDomainPushTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainPushTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainPvUvDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLiveDomainPvUvDataResponse
     */
    public function describeLiveDomainPvUvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainPvUvData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainPvUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainPvUvDataRequest $request
     *
     * @return DescribeLiveDomainPvUvDataResponse
     */
    public function describeLiveDomainPvUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainPvUvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveDomainRealTimeBpsDataResponse
     */
    public function describeLiveDomainRealTimeBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainRealTimeBpsData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainRealTimeBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainRealTimeBpsDataRequest $request
     *
     * @return DescribeLiveDomainRealTimeBpsDataResponse
     */
    public function describeLiveDomainRealTimeBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainRealTimeHttpCodeDataRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeLiveDomainRealTimeHttpCodeDataResponse
     */
    public function describeLiveDomainRealTimeHttpCodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainRealTimeHttpCodeData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainRealTimeHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainRealTimeHttpCodeDataRequest $request
     *
     * @return DescribeLiveDomainRealTimeHttpCodeDataResponse
     */
    public function describeLiveDomainRealTimeHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainRealTimeHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeLiveDomainRealTimeTrafficDataResponse
     */
    public function describeLiveDomainRealTimeTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainRealTimeTrafficData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainRealTimeTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainRealTimeTrafficDataRequest $request
     *
     * @return DescribeLiveDomainRealTimeTrafficDataResponse
     */
    public function describeLiveDomainRealTimeTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainRealTimeTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeLiveDomainRealtimeLogDeliveryResponse
     */
    public function describeLiveDomainRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainRealtimeLogDelivery',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainRealtimeLogDeliveryRequest $request
     *
     * @return DescribeLiveDomainRealtimeLogDeliveryResponse
     */
    public function describeLiveDomainRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainRecordDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveDomainRecordDataResponse
     */
    public function describeLiveDomainRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->recordType)) {
            $query['RecordType'] = $request->recordType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainRecordData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainRecordDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainRecordDataRequest $request
     *
     * @return DescribeLiveDomainRecordDataResponse
     */
    public function describeLiveDomainRecordData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainRecordDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainRecordUsageDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveDomainRecordUsageDataResponse
     */
    public function describeLiveDomainRecordUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainRecordUsageData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainRecordUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainRecordUsageDataRequest $request
     *
     * @return DescribeLiveDomainRecordUsageDataResponse
     */
    public function describeLiveDomainRecordUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainRecordUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainSnapshotDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveDomainSnapshotDataResponse
     */
    public function describeLiveDomainSnapshotDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainSnapshotData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainSnapshotDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainSnapshotDataRequest $request
     *
     * @return DescribeLiveDomainSnapshotDataResponse
     */
    public function describeLiveDomainSnapshotData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainSnapshotDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainStagingConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveDomainStagingConfigResponse
     */
    public function describeLiveDomainStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainStagingConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainStagingConfigRequest $request
     *
     * @return DescribeLiveDomainStagingConfigResponse
     */
    public function describeLiveDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainStreamTranscodeDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeLiveDomainStreamTranscodeDataResponse
     */
    public function describeLiveDomainStreamTranscodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        if (!Utils::isUnset($request->split)) {
            $query['Split'] = $request->split;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainStreamTranscodeData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainStreamTranscodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainStreamTranscodeDataRequest $request
     *
     * @return DescribeLiveDomainStreamTranscodeDataResponse
     */
    public function describeLiveDomainStreamTranscodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainStreamTranscodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainTimeShiftDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveDomainTimeShiftDataResponse
     */
    public function describeLiveDomainTimeShiftDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainTimeShiftData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainTimeShiftDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainTimeShiftDataRequest $request
     *
     * @return DescribeLiveDomainTimeShiftDataResponse
     */
    public function describeLiveDomainTimeShiftData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainTimeShiftDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainTrafficDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveDomainTrafficDataResponse
     */
    public function describeLiveDomainTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainTrafficData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainTrafficDataRequest $request
     *
     * @return DescribeLiveDomainTrafficDataResponse
     */
    public function describeLiveDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDomainTranscodeDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveDomainTranscodeDataResponse
     */
    public function describeLiveDomainTranscodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDomainTranscodeData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDomainTranscodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDomainTranscodeDataRequest $request
     *
     * @return DescribeLiveDomainTranscodeDataResponse
     */
    public function describeLiveDomainTranscodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDomainTranscodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveDrmUsageDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveDrmUsageDataResponse
     */
    public function describeLiveDrmUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveDrmUsageData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveDrmUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveDrmUsageDataRequest $request
     *
     * @return DescribeLiveDrmUsageDataResponse
     */
    public function describeLiveDrmUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveDrmUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveEdgeTransferRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveEdgeTransferResponse
     */
    public function describeLiveEdgeTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveEdgeTransfer',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveEdgeTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveEdgeTransferRequest $request
     *
     * @return DescribeLiveEdgeTransferResponse
     */
    public function describeLiveEdgeTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveEdgeTransferWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveLazyPullStreamConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLiveLazyPullStreamConfigResponse
     */
    public function describeLiveLazyPullStreamConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveLazyPullStreamConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveLazyPullStreamConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveLazyPullStreamConfigRequest $request
     *
     * @return DescribeLiveLazyPullStreamConfigResponse
     */
    public function describeLiveLazyPullStreamConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveLazyPullStreamConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveProducerUsageDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveProducerUsageDataResponse
     */
    public function describeLiveProducerUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['Instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->app)) {
            $query['app'] = $request->app;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveProducerUsageData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveProducerUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveProducerUsageDataRequest $request
     *
     * @return DescribeLiveProducerUsageDataResponse
     */
    public function describeLiveProducerUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveProducerUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLivePullStreamConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLivePullStreamConfigResponse
     */
    public function describeLivePullStreamConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLivePullStreamConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLivePullStreamConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLivePullStreamConfigRequest $request
     *
     * @return DescribeLivePullStreamConfigResponse
     */
    public function describeLivePullStreamConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLivePullStreamConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveRealtimeDeliveryAccRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveRealtimeDeliveryAccResponse
     */
    public function describeLiveRealtimeDeliveryAccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->logStore)) {
            $query['LogStore'] = $request->logStore;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveRealtimeDeliveryAcc',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveRealtimeDeliveryAccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveRealtimeDeliveryAccRequest $request
     *
     * @return DescribeLiveRealtimeDeliveryAccResponse
     */
    public function describeLiveRealtimeDeliveryAcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveRealtimeDeliveryAccWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveRealtimeLogAuthorizedRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveRealtimeLogAuthorizedResponse
     */
    public function describeLiveRealtimeLogAuthorizedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveRealtimeLogAuthorized',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveRealtimeLogAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveRealtimeLogAuthorizedRequest $request
     *
     * @return DescribeLiveRealtimeLogAuthorizedResponse
     */
    public function describeLiveRealtimeLogAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveRealtimeLogAuthorizedWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveRecordConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveRecordConfigResponse
     */
    public function describeLiveRecordConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveRecordConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveRecordConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveRecordConfigRequest $request
     *
     * @return DescribeLiveRecordConfigResponse
     */
    public function describeLiveRecordConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveRecordConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveRecordNotifyConfigResponse
     */
    public function describeLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveRecordNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveRecordNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveRecordNotifyConfigRequest $request
     *
     * @return DescribeLiveRecordNotifyConfigResponse
     */
    public function describeLiveRecordNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveRecordNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveRecordVodConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveRecordVodConfigsResponse
     */
    public function describeLiveRecordVodConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveRecordVodConfigs',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveRecordVodConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveRecordVodConfigsRequest $request
     *
     * @return DescribeLiveRecordVodConfigsResponse
     */
    public function describeLiveRecordVodConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveRecordVodConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveShiftConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveShiftConfigsResponse
     */
    public function describeLiveShiftConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveShiftConfigs',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveShiftConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveShiftConfigsRequest $request
     *
     * @return DescribeLiveShiftConfigsResponse
     */
    public function describeLiveShiftConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveShiftConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveSnapshotConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLiveSnapshotConfigResponse
     */
    public function describeLiveSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveSnapshotConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveSnapshotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveSnapshotConfigRequest $request
     *
     * @return DescribeLiveSnapshotConfigResponse
     */
    public function describeLiveSnapshotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveSnapshotConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveSnapshotDetectPornConfigRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeLiveSnapshotDetectPornConfigResponse
     */
    public function describeLiveSnapshotDetectPornConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveSnapshotDetectPornConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveSnapshotDetectPornConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveSnapshotDetectPornConfigRequest $request
     *
     * @return DescribeLiveSnapshotDetectPornConfigResponse
     */
    public function describeLiveSnapshotDetectPornConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveSnapshotDetectPornConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamBitRateDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveStreamBitRateDataResponse
     */
    public function describeLiveStreamBitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamBitRateData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamBitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamBitRateDataRequest $request
     *
     * @return DescribeLiveStreamBitRateDataResponse
     */
    public function describeLiveStreamBitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamBitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamCountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLiveStreamCountResponse
     */
    public function describeLiveStreamCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamCount',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamCountRequest $request
     *
     * @return DescribeLiveStreamCountResponse
     */
    public function describeLiveStreamCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamDelayConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveStreamDelayConfigResponse
     */
    public function describeLiveStreamDelayConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamDelayConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamDelayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamDelayConfigRequest $request
     *
     * @return DescribeLiveStreamDelayConfigResponse
     */
    public function describeLiveStreamDelayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamDelayConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamHistoryUserNumRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLiveStreamHistoryUserNumResponse
     */
    public function describeLiveStreamHistoryUserNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamHistoryUserNum',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamHistoryUserNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamHistoryUserNumRequest $request
     *
     * @return DescribeLiveStreamHistoryUserNumResponse
     */
    public function describeLiveStreamHistoryUserNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamHistoryUserNumWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamMetricDetailDataRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLiveStreamMetricDetailDataResponse
     */
    public function describeLiveStreamMetricDetailDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamMetricDetailData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamMetricDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamMetricDetailDataRequest $request
     *
     * @return DescribeLiveStreamMetricDetailDataResponse
     */
    public function describeLiveStreamMetricDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamMetricDetailDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamMonitorListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveStreamMonitorListResponse
     */
    public function describeLiveStreamMonitorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->monitorId)) {
            $query['MonitorId'] = $request->monitorId;
        }
        if (!Utils::isUnset($request->orderRule)) {
            $query['OrderRule'] = $request->orderRule;
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
            'action'      => 'DescribeLiveStreamMonitorList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamMonitorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamMonitorListRequest $request
     *
     * @return DescribeLiveStreamMonitorListResponse
     */
    public function describeLiveStreamMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamMonitorListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamOptimizedFeatureConfigRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLiveStreamOptimizedFeatureConfigResponse
     */
    public function describeLiveStreamOptimizedFeatureConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configName)) {
            $query['ConfigName'] = $request->configName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamOptimizedFeatureConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamOptimizedFeatureConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamOptimizedFeatureConfigRequest $request
     *
     * @return DescribeLiveStreamOptimizedFeatureConfigResponse
     */
    public function describeLiveStreamOptimizedFeatureConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamOptimizedFeatureConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamRecordContentRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveStreamRecordContentResponse
     */
    public function describeLiveStreamRecordContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamRecordContent',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamRecordContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamRecordContentRequest $request
     *
     * @return DescribeLiveStreamRecordContentResponse
     */
    public function describeLiveStreamRecordContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamRecordContentWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamRecordIndexFileRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveStreamRecordIndexFileResponse
     */
    public function describeLiveStreamRecordIndexFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamRecordIndexFile',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamRecordIndexFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamRecordIndexFileRequest $request
     *
     * @return DescribeLiveStreamRecordIndexFileResponse
     */
    public function describeLiveStreamRecordIndexFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamRecordIndexFileWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamRecordIndexFilesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLiveStreamRecordIndexFilesResponse
     */
    public function describeLiveStreamRecordIndexFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamRecordIndexFiles',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamRecordIndexFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamRecordIndexFilesRequest $request
     *
     * @return DescribeLiveStreamRecordIndexFilesResponse
     */
    public function describeLiveStreamRecordIndexFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamRecordIndexFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamSnapshotInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveStreamSnapshotInfoResponse
     */
    public function describeLiveStreamSnapshotInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamSnapshotInfo',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamSnapshotInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamSnapshotInfoRequest $request
     *
     * @return DescribeLiveStreamSnapshotInfoResponse
     */
    public function describeLiveStreamSnapshotInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamSnapshotInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamStateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLiveStreamStateResponse
     */
    public function describeLiveStreamStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamState',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamStateRequest $request
     *
     * @return DescribeLiveStreamStateResponse
     */
    public function describeLiveStreamState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamStateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamTranscodeInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveStreamTranscodeInfoResponse
     */
    public function describeLiveStreamTranscodeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainTranscodeName)) {
            $query['DomainTranscodeName'] = $request->domainTranscodeName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamTranscodeInfo',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamTranscodeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamTranscodeInfoRequest $request
     *
     * @return DescribeLiveStreamTranscodeInfoResponse
     */
    public function describeLiveStreamTranscodeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamTranscodeInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamTranscodeStreamNumRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeLiveStreamTranscodeStreamNumResponse
     */
    public function describeLiveStreamTranscodeStreamNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamTranscodeStreamNum',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamTranscodeStreamNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamTranscodeStreamNumRequest $request
     *
     * @return DescribeLiveStreamTranscodeStreamNumResponse
     */
    public function describeLiveStreamTranscodeStreamNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamTranscodeStreamNumWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamWatermarkRulesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLiveStreamWatermarkRulesResponse
     */
    public function describeLiveStreamWatermarkRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeLiveStreamWatermarkRules',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamWatermarkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamWatermarkRulesRequest $request
     *
     * @return DescribeLiveStreamWatermarkRulesResponse
     */
    public function describeLiveStreamWatermarkRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamWatermarkRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamWatermarksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveStreamWatermarksResponse
     */
    public function describeLiveStreamWatermarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeLiveStreamWatermarks',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamWatermarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamWatermarksRequest $request
     *
     * @return DescribeLiveStreamWatermarksResponse
     */
    public function describeLiveStreamWatermarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamWatermarksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamsBlockListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveStreamsBlockListResponse
     */
    public function describeLiveStreamsBlockListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamsBlockList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamsBlockListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamsBlockListRequest $request
     *
     * @return DescribeLiveStreamsBlockListResponse
     */
    public function describeLiveStreamsBlockList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamsBlockListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamsControlHistoryRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveStreamsControlHistoryResponse
     */
    public function describeLiveStreamsControlHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamsControlHistory',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamsControlHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamsControlHistoryRequest $request
     *
     * @return DescribeLiveStreamsControlHistoryResponse
     */
    public function describeLiveStreamsControlHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamsControlHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLiveStreamsNotifyUrlConfigResponse
     */
    public function describeLiveStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamsNotifyUrlConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamsNotifyUrlConfigRequest $request
     *
     * @return DescribeLiveStreamsNotifyUrlConfigResponse
     */
    public function describeLiveStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamsOnlineListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveStreamsOnlineListResponse
     */
    public function describeLiveStreamsOnlineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->onlyStream)) {
            $query['OnlyStream'] = $request->onlyStream;
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
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamsOnlineList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamsOnlineListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamsOnlineListRequest $request
     *
     * @return DescribeLiveStreamsOnlineListResponse
     */
    public function describeLiveStreamsOnlineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamsOnlineListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveStreamsPublishListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveStreamsPublishListResponse
     */
    public function describeLiveStreamsPublishListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveStreamsPublishList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveStreamsPublishListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamsPublishListRequest $request
     *
     * @return DescribeLiveStreamsPublishListResponse
     */
    public function describeLiveStreamsPublishList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamsPublishListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveTagResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveTagResourcesResponse
     */
    public function describeLiveTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeLiveTagResources',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveTagResourcesRequest $request
     *
     * @return DescribeLiveTagResourcesResponse
     */
    public function describeLiveTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveTopDomainsByFlowRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveTopDomainsByFlowResponse
     */
    public function describeLiveTopDomainsByFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveTopDomainsByFlow',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveTopDomainsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveTopDomainsByFlowRequest $request
     *
     * @return DescribeLiveTopDomainsByFlowResponse
     */
    public function describeLiveTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveUserBillPredictionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveUserBillPredictionResponse
     */
    public function describeLiveUserBillPredictionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->dimension)) {
            $query['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveUserBillPrediction',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveUserBillPredictionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveUserBillPredictionRequest $request
     *
     * @return DescribeLiveUserBillPredictionResponse
     */
    public function describeLiveUserBillPrediction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveUserBillPredictionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveUserDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLiveUserDomainsResponse
     */
    public function describeLiveUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainSearchType)) {
            $query['DomainSearchType'] = $request->domainSearchType;
        }
        if (!Utils::isUnset($request->domainStatus)) {
            $query['DomainStatus'] = $request->domainStatus;
        }
        if (!Utils::isUnset($request->liveDomainType)) {
            $query['LiveDomainType'] = $request->liveDomainType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionName)) {
            $query['RegionName'] = $request->regionName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveUserDomains',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveUserDomainsRequest $request
     *
     * @return DescribeLiveUserDomainsResponse
     */
    public function describeLiveUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveUserTagsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLiveUserTagsResponse
     */
    public function describeLiveUserTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveUserTags',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveUserTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveUserTagsRequest $request
     *
     * @return DescribeLiveUserTagsResponse
     */
    public function describeLiveUserTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveUserTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterLiveRtcDurationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeMeterLiveRtcDurationResponse
     */
    public function describeMeterLiveRtcDurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->serviceArea)) {
            $query['ServiceArea'] = $request->serviceArea;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['appId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterLiveRtcDuration',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterLiveRtcDurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterLiveRtcDurationRequest $request
     *
     * @return DescribeMeterLiveRtcDurationResponse
     */
    public function describeMeterLiveRtcDuration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterLiveRtcDurationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMixStreamListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeMixStreamListResponse
     */
    public function describeMixStreamListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mixStreamId)) {
            $query['MixStreamId'] = $request->mixStreamId;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMixStreamList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMixStreamListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMixStreamListRequest $request
     *
     * @return DescribeMixStreamListResponse
     */
    public function describeMixStreamList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMixStreamListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRTSNativeSDKFirstFrameCostRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeRTSNativeSDKFirstFrameCostResponse
     */
    public function describeRTSNativeSDKFirstFrameCostWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeRTSNativeSDKFirstFrameCostShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->domainNameList)) {
            $request->domainNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->domainNameList, 'DomainNameList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataInterval)) {
            $query['DataInterval'] = $request->dataInterval;
        }
        if (!Utils::isUnset($request->domainNameListShrink)) {
            $query['DomainNameList'] = $request->domainNameListShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRTSNativeSDKFirstFrameCost',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRTSNativeSDKFirstFrameCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRTSNativeSDKFirstFrameCostRequest $request
     *
     * @return DescribeRTSNativeSDKFirstFrameCostResponse
     */
    public function describeRTSNativeSDKFirstFrameCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRTSNativeSDKFirstFrameCostWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRTSNativeSDKFirstFrameDelayRequest $tmpReq
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeRTSNativeSDKFirstFrameDelayResponse
     */
    public function describeRTSNativeSDKFirstFrameDelayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeRTSNativeSDKFirstFrameDelayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->domainNameList)) {
            $request->domainNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->domainNameList, 'DomainNameList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataInterval)) {
            $query['DataInterval'] = $request->dataInterval;
        }
        if (!Utils::isUnset($request->domainNameListShrink)) {
            $query['DomainNameList'] = $request->domainNameListShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRTSNativeSDKFirstFrameDelay',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRTSNativeSDKFirstFrameDelayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRTSNativeSDKFirstFrameDelayRequest $request
     *
     * @return DescribeRTSNativeSDKFirstFrameDelayResponse
     */
    public function describeRTSNativeSDKFirstFrameDelay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRTSNativeSDKFirstFrameDelayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRTSNativeSDKPlayFailStatusRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeRTSNativeSDKPlayFailStatusResponse
     */
    public function describeRTSNativeSDKPlayFailStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeRTSNativeSDKPlayFailStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->domainNameList)) {
            $request->domainNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->domainNameList, 'DomainNameList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataInterval)) {
            $query['DataInterval'] = $request->dataInterval;
        }
        if (!Utils::isUnset($request->domainNameListShrink)) {
            $query['DomainNameList'] = $request->domainNameListShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRTSNativeSDKPlayFailStatus',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRTSNativeSDKPlayFailStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRTSNativeSDKPlayFailStatusRequest $request
     *
     * @return DescribeRTSNativeSDKPlayFailStatusResponse
     */
    public function describeRTSNativeSDKPlayFailStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRTSNativeSDKPlayFailStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRTSNativeSDKPlayTimeRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeRTSNativeSDKPlayTimeResponse
     */
    public function describeRTSNativeSDKPlayTimeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeRTSNativeSDKPlayTimeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->domainNameList)) {
            $request->domainNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->domainNameList, 'DomainNameList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataInterval)) {
            $query['DataInterval'] = $request->dataInterval;
        }
        if (!Utils::isUnset($request->domainNameListShrink)) {
            $query['DomainNameList'] = $request->domainNameListShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRTSNativeSDKPlayTime',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRTSNativeSDKPlayTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRTSNativeSDKPlayTimeRequest $request
     *
     * @return DescribeRTSNativeSDKPlayTimeResponse
     */
    public function describeRTSNativeSDKPlayTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRTSNativeSDKPlayTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRTSNativeSDKVvDataRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRTSNativeSDKVvDataResponse
     */
    public function describeRTSNativeSDKVvDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeRTSNativeSDKVvDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->domainNameList)) {
            $request->domainNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->domainNameList, 'DomainNameList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataInterval)) {
            $query['DataInterval'] = $request->dataInterval;
        }
        if (!Utils::isUnset($request->domainNameListShrink)) {
            $query['DomainNameList'] = $request->domainNameListShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRTSNativeSDKVvData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRTSNativeSDKVvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRTSNativeSDKVvDataRequest $request
     *
     * @return DescribeRTSNativeSDKVvDataResponse
     */
    public function describeRTSNativeSDKVvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRTSNativeSDKVvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoomKickoutUserListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRoomKickoutUserListResponse
     */
    public function describeRoomKickoutUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
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
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRoomKickoutUserList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoomKickoutUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRoomKickoutUserListRequest $request
     *
     * @return DescribeRoomKickoutUserListResponse
     */
    public function describeRoomKickoutUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoomKickoutUserListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoomListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeRoomListResponse
     */
    public function describeRoomListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anchorId)) {
            $query['AnchorId'] = $request->anchorId;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->roomStatus)) {
            $query['RoomStatus'] = $request->roomStatus;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRoomList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoomListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRoomListRequest $request
     *
     * @return DescribeRoomListResponse
     */
    public function describeRoomList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoomListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoomStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRoomStatusResponse
     */
    public function describeRoomStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRoomStatus',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoomStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRoomStatusRequest $request
     *
     * @return DescribeRoomStatusResponse
     */
    public function describeRoomStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoomStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShowListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeShowListResponse
     */
    public function describeShowListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeShowList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeShowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeShowListRequest $request
     *
     * @return DescribeShowListResponse
     */
    public function describeShowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShowListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStudioLayoutsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeStudioLayoutsResponse
     */
    public function describeStudioLayoutsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
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
            'action'      => 'DescribeStudioLayouts',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStudioLayoutsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStudioLayoutsRequest $request
     *
     * @return DescribeStudioLayoutsResponse
     */
    public function describeStudioLayouts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStudioLayoutsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeToutiaoLivePlayRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeToutiaoLivePlayResponse
     */
    public function describeToutiaoLivePlayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeToutiaoLivePlay',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeToutiaoLivePlayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeToutiaoLivePlayRequest $request
     *
     * @return DescribeToutiaoLivePlayResponse
     */
    public function describeToutiaoLivePlay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeToutiaoLivePlayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeToutiaoLivePublishRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeToutiaoLivePublishResponse
     */
    public function describeToutiaoLivePublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeToutiaoLivePublish',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeToutiaoLivePublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeToutiaoLivePublishRequest $request
     *
     * @return DescribeToutiaoLivePublishResponse
     */
    public function describeToutiaoLivePublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeToutiaoLivePublishWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpBpsPeakDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUpBpsPeakDataResponse
     */
    public function describeUpBpsPeakDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainSwitch)) {
            $query['DomainSwitch'] = $request->domainSwitch;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpBpsPeakData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpBpsPeakDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpBpsPeakDataRequest $request
     *
     * @return DescribeUpBpsPeakDataResponse
     */
    public function describeUpBpsPeakData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpBpsPeakDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpBpsPeakOfLineRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeUpBpsPeakOfLineResponse
     */
    public function describeUpBpsPeakOfLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainSwitch)) {
            $query['DomainSwitch'] = $request->domainSwitch;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpBpsPeakOfLine',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpBpsPeakOfLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpBpsPeakOfLineRequest $request
     *
     * @return DescribeUpBpsPeakOfLineResponse
     */
    public function describeUpBpsPeakOfLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpBpsPeakOfLineWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpPeakPublishStreamDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeUpPeakPublishStreamDataResponse
     */
    public function describeUpPeakPublishStreamDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainSwitch)) {
            $query['DomainSwitch'] = $request->domainSwitch;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpPeakPublishStreamData',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpPeakPublishStreamDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpPeakPublishStreamDataRequest $request
     *
     * @return DescribeUpPeakPublishStreamDataResponse
     */
    public function describeUpPeakPublishStreamData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpPeakPublishStreamDataWithOptions($request, $runtime);
    }

    /**
     * @param DisableLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DisableLiveRealtimeLogDeliveryResponse
     */
    public function disableLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableLiveRealtimeLogDelivery',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableLiveRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableLiveRealtimeLogDeliveryRequest $request
     *
     * @return DisableLiveRealtimeLogDeliveryResponse
     */
    public function disableLiveRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLiveRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DynamicUpdateWaterMarkStreamRuleRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DynamicUpdateWaterMarkStreamRuleResponse
     */
    public function dynamicUpdateWaterMarkStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DynamicUpdateWaterMarkStreamRule',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DynamicUpdateWaterMarkStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DynamicUpdateWaterMarkStreamRuleRequest $request
     *
     * @return DynamicUpdateWaterMarkStreamRuleResponse
     */
    public function dynamicUpdateWaterMarkStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dynamicUpdateWaterMarkStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param EditPlaylistRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EditPlaylistResponse
     */
    public function editPlaylistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programConfig)) {
            $query['ProgramConfig'] = $request->programConfig;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        if (!Utils::isUnset($request->programItems)) {
            $query['ProgramItems'] = $request->programItems;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditPlaylist',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditPlaylistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditPlaylistRequest $request
     *
     * @return EditPlaylistResponse
     */
    public function editPlaylist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editPlaylistWithOptions($request, $runtime);
    }

    /**
     * @param EditShowAndReplaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EditShowAndReplaceResponse
     */
    public function editShowAndReplaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->showId)) {
            $query['ShowId'] = $request->showId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->storageInfo)) {
            $query['StorageInfo'] = $request->storageInfo;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditShowAndReplace',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditShowAndReplaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditShowAndReplaceRequest $request
     *
     * @return EditShowAndReplaceResponse
     */
    public function editShowAndReplace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editShowAndReplaceWithOptions($request, $runtime);
    }

    /**
     * @param EffectCasterUrgentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EffectCasterUrgentResponse
     */
    public function effectCasterUrgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EffectCasterUrgent',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EffectCasterUrgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EffectCasterUrgentRequest $request
     *
     * @return EffectCasterUrgentResponse
     */
    public function effectCasterUrgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->effectCasterUrgentWithOptions($request, $runtime);
    }

    /**
     * @param EffectCasterVideoResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EffectCasterVideoResourceResponse
     */
    public function effectCasterVideoResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EffectCasterVideoResource',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EffectCasterVideoResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EffectCasterVideoResourceRequest $request
     *
     * @return EffectCasterVideoResourceResponse
     */
    public function effectCasterVideoResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->effectCasterVideoResourceWithOptions($request, $runtime);
    }

    /**
     * @param EnableLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnableLiveRealtimeLogDeliveryResponse
     */
    public function enableLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableLiveRealtimeLogDelivery',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableLiveRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableLiveRealtimeLogDeliveryRequest $request
     *
     * @return EnableLiveRealtimeLogDeliveryResponse
     */
    public function enableLiveRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLiveRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param ForbidLiveStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ForbidLiveStreamResponse
     */
    public function forbidLiveStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->liveStreamType)) {
            $query['LiveStreamType'] = $request->liveStreamType;
        }
        if (!Utils::isUnset($request->oneshot)) {
            $query['Oneshot'] = $request->oneshot;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resumeTime)) {
            $query['ResumeTime'] = $request->resumeTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ForbidLiveStream',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ForbidLiveStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ForbidLiveStreamRequest $request
     *
     * @return ForbidLiveStreamResponse
     */
    public function forbidLiveStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forbidLiveStreamWithOptions($request, $runtime);
    }

    /**
     * @param ForbidPushStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ForbidPushStreamResponse
     */
    public function forbidPushStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ForbidPushStream',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ForbidPushStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ForbidPushStreamRequest $request
     *
     * @return ForbidPushStreamResponse
     */
    public function forbidPushStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forbidPushStreamWithOptions($request, $runtime);
    }

    /**
     * @param GetAllCustomTemplatesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAllCustomTemplatesResponse
     */
    public function getAllCustomTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'GetAllCustomTemplates',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllCustomTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAllCustomTemplatesRequest $request
     *
     * @return GetAllCustomTemplatesResponse
     */
    public function getAllCustomTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllCustomTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCustomTemplateResponse
     */
    public function getCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomTemplate',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCustomTemplateRequest $request
     *
     * @return GetCustomTemplateResponse
     */
    public function getCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingJobInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEditingJobInfoResponse
     */
    public function getEditingJobInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->showId)) {
            $query['ShowId'] = $request->showId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEditingJobInfo',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEditingJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEditingJobInfoRequest $request
     *
     * @return GetEditingJobInfoResponse
     */
    public function getEditingJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingJobInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMessageGroupResponse
     */
    public function getMessageGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMessageGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMessageGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMessageGroupRequest $request
     *
     * @return GetMessageGroupResponse
     */
    public function getMessageGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageTokenRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMessageTokenResponse
     */
    public function getMessageTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMessageToken',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMessageTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMessageTokenRequest $request
     *
     * @return GetMessageTokenResponse
     */
    public function getMessageToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageUserInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMessageUserInfoResponse
     */
    public function getMessageUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudUid)) {
            $body['CloudUid'] = $request->cloudUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMessageUserInfo',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMessageUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMessageUserInfoRequest $request
     *
     * @return GetMessageUserInfoResponse
     */
    public function getMessageUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMultiRateConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMultiRateConfigResponse
     */
    public function getMultiRateConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMultiRateConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMultiRateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMultiRateConfigRequest $request
     *
     * @return GetMultiRateConfigResponse
     */
    public function getMultiRateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiRateConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetMultiRateConfigListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMultiRateConfigListResponse
     */
    public function getMultiRateConfigListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMultiRateConfigList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMultiRateConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMultiRateConfigListRequest $request
     *
     * @return GetMultiRateConfigListResponse
     */
    public function getMultiRateConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiRateConfigListWithOptions($request, $runtime);
    }

    /**
     * @param HotLiveRtcStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return HotLiveRtcStreamResponse
     */
    public function hotLiveRtcStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->audioMsid)) {
            $query['AudioMsid'] = $request->audioMsid;
        }
        if (!Utils::isUnset($request->connectionTimeout)) {
            $query['ConnectionTimeout'] = $request->connectionTimeout;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->mediaTimeout)) {
            $query['MediaTimeout'] = $request->mediaTimeout;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->videoMsid)) {
            $query['VideoMsid'] = $request->videoMsid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotLiveRtcStream',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HotLiveRtcStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotLiveRtcStreamRequest $request
     *
     * @return HotLiveRtcStreamResponse
     */
    public function hotLiveRtcStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hotLiveRtcStreamWithOptions($request, $runtime);
    }

    /**
     * @param InitializeAutoShowListTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return InitializeAutoShowListTaskResponse
     */
    public function initializeAutoShowListTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callBackUrl)) {
            $query['CallBackUrl'] = $request->callBackUrl;
        }
        if (!Utils::isUnset($request->casterConfig)) {
            $query['CasterConfig'] = $request->casterConfig;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitializeAutoShowListTask',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeAutoShowListTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitializeAutoShowListTaskRequest $request
     *
     * @return InitializeAutoShowListTaskResponse
     */
    public function initializeAutoShowListTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeAutoShowListTaskWithOptions($request, $runtime);
    }

    /**
     * @param JoinMessageGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return JoinMessageGroupResponse
     */
    public function joinMessageGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->broadCastStatistics)) {
            $body['BroadCastStatistics'] = $request->broadCastStatistics;
        }
        if (!Utils::isUnset($request->broadCastType)) {
            $body['BroadCastType'] = $request->broadCastType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'JoinMessageGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinMessageGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinMessageGroupRequest $request
     *
     * @return JoinMessageGroupResponse
     */
    public function joinMessageGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinMessageGroupWithOptions($request, $runtime);
    }

    /**
     * @param LeaveMessageGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return LeaveMessageGroupResponse
     */
    public function leaveMessageGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->broadCastStatistics)) {
            $body['BroadCastStatistics'] = $request->broadCastStatistics;
        }
        if (!Utils::isUnset($request->broadCastType)) {
            $body['BroadCastType'] = $request->broadCastType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LeaveMessageGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LeaveMessageGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LeaveMessageGroupRequest $request
     *
     * @return LeaveMessageGroupResponse
     */
    public function leaveMessageGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveMessageGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListLiveRealtimeLogDeliveryResponse
     */
    public function listLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRealtimeLogDelivery',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLiveRealtimeLogDeliveryRequest $request
     *
     * @return ListLiveRealtimeLogDeliveryResponse
     */
    public function listLiveRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRealtimeLogDeliveryDomainsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListLiveRealtimeLogDeliveryDomainsResponse
     */
    public function listLiveRealtimeLogDeliveryDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRealtimeLogDeliveryDomains',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRealtimeLogDeliveryDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLiveRealtimeLogDeliveryDomainsRequest $request
     *
     * @return ListLiveRealtimeLogDeliveryDomainsResponse
     */
    public function listLiveRealtimeLogDeliveryDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRealtimeLogDeliveryDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRealtimeLogDeliveryInfosRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListLiveRealtimeLogDeliveryInfosResponse
     */
    public function listLiveRealtimeLogDeliveryInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRealtimeLogDeliveryInfos',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRealtimeLogDeliveryInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLiveRealtimeLogDeliveryInfosRequest $request
     *
     * @return ListLiveRealtimeLogDeliveryInfosResponse
     */
    public function listLiveRealtimeLogDeliveryInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRealtimeLogDeliveryInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListMessageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListMessageResponse
     */
    public function listMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortType)) {
            $body['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMessage',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMessageRequest $request
     *
     * @return ListMessageResponse
     */
    public function listMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageWithOptions($request, $runtime);
    }

    /**
     * @param ListMessageGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListMessageGroupResponse
     */
    public function listMessageGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortType)) {
            $body['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMessageGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMessageGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMessageGroupRequest $request
     *
     * @return ListMessageGroupResponse
     */
    public function listMessageGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListMessageGroupUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListMessageGroupUserResponse
     */
    public function listMessageGroupUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortType)) {
            $body['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMessageGroupUser',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMessageGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMessageGroupUserRequest $request
     *
     * @return ListMessageGroupUserResponse
     */
    public function listMessageGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageGroupUserWithOptions($request, $runtime);
    }

    /**
     * @param ListPlaylistRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPlaylistResponse
     */
    public function listPlaylistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPlaylist',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPlaylistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPlaylistRequest $request
     *
     * @return ListPlaylistResponse
     */
    public function listPlaylist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPlaylistWithOptions($request, $runtime);
    }

    /**
     * @param ListPlaylistItemsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPlaylistItemsResponse
     */
    public function listPlaylistItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        if (!Utils::isUnset($request->programItemIds)) {
            $query['ProgramItemIds'] = $request->programItemIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPlaylistItems',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPlaylistItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPlaylistItemsRequest $request
     *
     * @return ListPlaylistItemsResponse
     */
    public function listPlaylistItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPlaylistItemsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCasterComponentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyCasterComponentResponse
     */
    public function modifyCasterComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->captionLayerContent)) {
            $query['CaptionLayerContent'] = $request->captionLayerContent;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->componentLayer)) {
            $query['ComponentLayer'] = $request->componentLayer;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->componentType)) {
            $query['ComponentType'] = $request->componentType;
        }
        if (!Utils::isUnset($request->effect)) {
            $query['Effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->imageLayerContent)) {
            $query['ImageLayerContent'] = $request->imageLayerContent;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->textLayerContent)) {
            $query['TextLayerContent'] = $request->textLayerContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCasterComponent',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCasterComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCasterComponentRequest $request
     *
     * @return ModifyCasterComponentResponse
     */
    public function modifyCasterComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCasterComponentWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCasterEpisodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyCasterEpisodeResponse
     */
    public function modifyCasterEpisodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->episodeId)) {
            $query['EpisodeId'] = $request->episodeId;
        }
        if (!Utils::isUnset($request->episodeName)) {
            $query['EpisodeName'] = $request->episodeName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->switchType)) {
            $query['SwitchType'] = $request->switchType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCasterEpisode',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCasterEpisodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCasterEpisodeRequest $request
     *
     * @return ModifyCasterEpisodeResponse
     */
    public function modifyCasterEpisode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCasterEpisodeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCasterLayoutRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyCasterLayoutResponse
     */
    public function modifyCasterLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioLayer)) {
            $query['AudioLayer'] = $request->audioLayer;
        }
        if (!Utils::isUnset($request->blendList)) {
            $query['BlendList'] = $request->blendList;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->mixList)) {
            $query['MixList'] = $request->mixList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->videoLayer)) {
            $query['VideoLayer'] = $request->videoLayer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCasterLayout',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCasterLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCasterLayoutRequest $request
     *
     * @return ModifyCasterLayoutResponse
     */
    public function modifyCasterLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCasterLayoutWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCasterProgramRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyCasterProgramResponse
     */
    public function modifyCasterProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->episode)) {
            $query['Episode'] = $request->episode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCasterProgram',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCasterProgramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCasterProgramRequest $request
     *
     * @return ModifyCasterProgramResponse
     */
    public function modifyCasterProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCasterProgramWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCasterVideoResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyCasterVideoResourceResponse
     */
    public function modifyCasterVideoResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginOffset)) {
            $query['BeginOffset'] = $request->beginOffset;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->endOffset)) {
            $query['EndOffset'] = $request->endOffset;
        }
        if (!Utils::isUnset($request->liveStreamUrl)) {
            $query['LiveStreamUrl'] = $request->liveStreamUrl;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ptsCallbackInterval)) {
            $query['PtsCallbackInterval'] = $request->ptsCallbackInterval;
        }
        if (!Utils::isUnset($request->repeatNum)) {
            $query['RepeatNum'] = $request->repeatNum;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->vodUrl)) {
            $query['VodUrl'] = $request->vodUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCasterVideoResource',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCasterVideoResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCasterVideoResourceRequest $request
     *
     * @return ModifyCasterVideoResourceResponse
     */
    public function modifyCasterVideoResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCasterVideoResourceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLiveDomainSchdmByPropertyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyLiveDomainSchdmByPropertyResponse
     */
    public function modifyLiveDomainSchdmByPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->property)) {
            $query['Property'] = $request->property;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLiveDomainSchdmByProperty',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLiveDomainSchdmByPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLiveDomainSchdmByPropertyRequest $request
     *
     * @return ModifyLiveDomainSchdmByPropertyResponse
     */
    public function modifyLiveDomainSchdmByProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLiveDomainSchdmByPropertyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyLiveRealtimeLogDeliveryResponse
     */
    public function modifyLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLiveRealtimeLogDelivery',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLiveRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLiveRealtimeLogDeliveryRequest $request
     *
     * @return ModifyLiveRealtimeLogDeliveryResponse
     */
    public function modifyLiveRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLiveRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyShowListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyShowListResponse
     */
    public function modifyShowListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->highPriorityShowId)) {
            $query['HighPriorityShowId'] = $request->highPriorityShowId;
        }
        if (!Utils::isUnset($request->highPriorityShowStartTime)) {
            $query['HighPriorityShowStartTime'] = $request->highPriorityShowStartTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->repeatTimes)) {
            $query['RepeatTimes'] = $request->repeatTimes;
        }
        if (!Utils::isUnset($request->showId)) {
            $query['ShowId'] = $request->showId;
        }
        if (!Utils::isUnset($request->spot)) {
            $query['Spot'] = $request->spot;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyShowList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyShowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyShowListRequest $request
     *
     * @return ModifyShowListResponse
     */
    public function modifyShowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyShowListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStudioLayoutRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyStudioLayoutResponse
     */
    public function modifyStudioLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bgImageConfig)) {
            $query['BgImageConfig'] = $request->bgImageConfig;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->commonConfig)) {
            $query['CommonConfig'] = $request->commonConfig;
        }
        if (!Utils::isUnset($request->layerOrderConfigList)) {
            $query['LayerOrderConfigList'] = $request->layerOrderConfigList;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->layoutName)) {
            $query['LayoutName'] = $request->layoutName;
        }
        if (!Utils::isUnset($request->mediaInputConfigList)) {
            $query['MediaInputConfigList'] = $request->mediaInputConfigList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->screenInputConfigList)) {
            $query['ScreenInputConfigList'] = $request->screenInputConfigList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStudioLayout',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStudioLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyStudioLayoutRequest $request
     *
     * @return ModifyStudioLayoutResponse
     */
    public function modifyStudioLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStudioLayoutWithOptions($request, $runtime);
    }

    /**
     * @param OpenLiveShiftRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OpenLiveShiftResponse
     */
    public function openLiveShiftWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->ignoreTranscode)) {
            $query['IgnoreTranscode'] = $request->ignoreTranscode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->vision)) {
            $query['Vision'] = $request->vision;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenLiveShift',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenLiveShiftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenLiveShiftRequest $request
     *
     * @return OpenLiveShiftResponse
     */
    public function openLiveShift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openLiveShiftWithOptions($request, $runtime);
    }

    /**
     * @param PlayChoosenShowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PlayChoosenShowResponse
     */
    public function playChoosenShowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->showId)) {
            $query['ShowId'] = $request->showId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PlayChoosenShow',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PlayChoosenShowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PlayChoosenShowRequest $request
     *
     * @return PlayChoosenShowResponse
     */
    public function playChoosenShow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->playChoosenShowWithOptions($request, $runtime);
    }

    /**
     * @param PublishLiveStagingConfigToProductionRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return PublishLiveStagingConfigToProductionResponse
     */
    public function publishLiveStagingConfigToProductionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishLiveStagingConfigToProduction',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishLiveStagingConfigToProductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishLiveStagingConfigToProductionRequest $request
     *
     * @return PublishLiveStagingConfigToProductionResponse
     */
    public function publishLiveStagingConfigToProduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishLiveStagingConfigToProductionWithOptions($request, $runtime);
    }

    /**
     * @param QuerySnapshotCallbackAuthRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySnapshotCallbackAuthResponse
     */
    public function querySnapshotCallbackAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySnapshotCallbackAuth',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySnapshotCallbackAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySnapshotCallbackAuthRequest $request
     *
     * @return QuerySnapshotCallbackAuthResponse
     */
    public function querySnapshotCallbackAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySnapshotCallbackAuthWithOptions($request, $runtime);
    }

    /**
     * @param RealTimeRecordCommandRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RealTimeRecordCommandResponse
     */
    public function realTimeRecordCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RealTimeRecordCommand',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RealTimeRecordCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RealTimeRecordCommandRequest $request
     *
     * @return RealTimeRecordCommandResponse
     */
    public function realTimeRecordCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->realTimeRecordCommandWithOptions($request, $runtime);
    }

    /**
     * @param RealTimeSnapshotCommandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RealTimeSnapshotCommandResponse
     */
    public function realTimeSnapshotCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RealTimeSnapshotCommand',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RealTimeSnapshotCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RealTimeSnapshotCommandRequest $request
     *
     * @return RealTimeSnapshotCommandResponse
     */
    public function realTimeSnapshotCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->realTimeSnapshotCommandWithOptions($request, $runtime);
    }

    /**
     * @param RemoveShowFromShowListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveShowFromShowListResponse
     */
    public function removeShowFromShowListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->showId)) {
            $query['ShowId'] = $request->showId;
        }
        if (!Utils::isUnset($request->isBatchMode)) {
            $query['isBatchMode'] = $request->isBatchMode;
        }
        if (!Utils::isUnset($request->showIdList)) {
            $query['showIdList'] = $request->showIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveShowFromShowList',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveShowFromShowListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveShowFromShowListRequest $request
     *
     * @return RemoveShowFromShowListResponse
     */
    public function removeShowFromShowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeShowFromShowListWithOptions($request, $runtime);
    }

    /**
     * @param ResumeLiveStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ResumeLiveStreamResponse
     */
    public function resumeLiveStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->liveStreamType)) {
            $query['LiveStreamType'] = $request->liveStreamType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeLiveStream',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeLiveStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeLiveStreamRequest $request
     *
     * @return ResumeLiveStreamResponse
     */
    public function resumeLiveStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeLiveStreamWithOptions($request, $runtime);
    }

    /**
     * @param RollbackLiveStagingConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RollbackLiveStagingConfigResponse
     */
    public function rollbackLiveStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackLiveStagingConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackLiveStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackLiveStagingConfigRequest $request
     *
     * @return RollbackLiveStagingConfigResponse
     */
    public function rollbackLiveStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackLiveStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param SendRoomNotificationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SendRoomNotificationResponse
     */
    public function sendRoomNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appUid)) {
            $query['AppUid'] = $request->appUid;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendRoomNotification',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendRoomNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendRoomNotificationRequest $request
     *
     * @return SendRoomNotificationResponse
     */
    public function sendRoomNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendRoomNotificationWithOptions($request, $runtime);
    }

    /**
     * @param SendRoomUserNotificationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SendRoomUserNotificationResponse
     */
    public function sendRoomUserNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appUid)) {
            $query['AppUid'] = $request->appUid;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->toAppUid)) {
            $query['ToAppUid'] = $request->toAppUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendRoomUserNotification',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendRoomUserNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendRoomUserNotificationRequest $request
     *
     * @return SendRoomUserNotificationResponse
     */
    public function sendRoomUserNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendRoomUserNotificationWithOptions($request, $runtime);
    }

    /**
     * @param SetCasterChannelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetCasterChannelResponse
     */
    public function setCasterChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->faceBeauty)) {
            $query['FaceBeauty'] = $request->faceBeauty;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playStatus)) {
            $query['PlayStatus'] = $request->playStatus;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->seekOffset)) {
            $query['SeekOffset'] = $request->seekOffset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCasterChannel',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCasterChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCasterChannelRequest $request
     *
     * @return SetCasterChannelResponse
     */
    public function setCasterChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCasterChannelWithOptions($request, $runtime);
    }

    /**
     * @param SetCasterConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetCasterConfigResponse
     */
    public function setCasterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->casterName)) {
            $query['CasterName'] = $request->casterName;
        }
        if (!Utils::isUnset($request->channelEnable)) {
            $query['ChannelEnable'] = $request->channelEnable;
        }
        if (!Utils::isUnset($request->delay)) {
            $query['Delay'] = $request->delay;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programEffect)) {
            $query['ProgramEffect'] = $request->programEffect;
        }
        if (!Utils::isUnset($request->programName)) {
            $query['ProgramName'] = $request->programName;
        }
        if (!Utils::isUnset($request->recordConfig)) {
            $query['RecordConfig'] = $request->recordConfig;
        }
        if (!Utils::isUnset($request->sideOutputUrl)) {
            $query['SideOutputUrl'] = $request->sideOutputUrl;
        }
        if (!Utils::isUnset($request->sideOutputUrlList)) {
            $query['SideOutputUrlList'] = $request->sideOutputUrlList;
        }
        if (!Utils::isUnset($request->syncGroupsConfig)) {
            $query['SyncGroupsConfig'] = $request->syncGroupsConfig;
        }
        if (!Utils::isUnset($request->transcodeConfig)) {
            $query['TranscodeConfig'] = $request->transcodeConfig;
        }
        if (!Utils::isUnset($request->urgentLiveStreamUrl)) {
            $query['UrgentLiveStreamUrl'] = $request->urgentLiveStreamUrl;
        }
        if (!Utils::isUnset($request->urgentMaterialId)) {
            $query['UrgentMaterialId'] = $request->urgentMaterialId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCasterConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCasterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCasterConfigRequest $request
     *
     * @return SetCasterConfigResponse
     */
    public function setCasterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCasterConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetCasterSceneConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetCasterSceneConfigResponse
     */
    public function setCasterSceneConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCasterSceneConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCasterSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCasterSceneConfigRequest $request
     *
     * @return SetCasterSceneConfigResponse
     */
    public function setCasterSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCasterSceneConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetCasterSyncGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetCasterSyncGroupResponse
     */
    public function setCasterSyncGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->syncGroup)) {
            $query['SyncGroup'] = $request->syncGroup;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCasterSyncGroup',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCasterSyncGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCasterSyncGroupRequest $request
     *
     * @return SetCasterSyncGroupResponse
     */
    public function setCasterSyncGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCasterSyncGroupWithOptions($request, $runtime);
    }

    /**
     * @param SetCasterTimedEventRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetCasterTimedEventResponse
     */
    public function setCasterTimedEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTimeUTC)) {
            $query['StartTimeUTC'] = $request->startTimeUTC;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCasterTimedEvent',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCasterTimedEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCasterTimedEventRequest $request
     *
     * @return SetCasterTimedEventResponse
     */
    public function setCasterTimedEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCasterTimedEventWithOptions($request, $runtime);
    }

    /**
     * @param SetLiveDomainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetLiveDomainCertificateResponse
     */
    public function setLiveDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->forceSet)) {
            $query['ForceSet'] = $request->forceSet;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->SSLPri)) {
            $query['SSLPri'] = $request->SSLPri;
        }
        if (!Utils::isUnset($request->SSLProtocol)) {
            $query['SSLProtocol'] = $request->SSLProtocol;
        }
        if (!Utils::isUnset($request->SSLPub)) {
            $query['SSLPub'] = $request->SSLPub;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLiveDomainCertificate',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLiveDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLiveDomainCertificateRequest $request
     *
     * @return SetLiveDomainCertificateResponse
     */
    public function setLiveDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLiveDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetLiveDomainStagingConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetLiveDomainStagingConfigResponse
     */
    public function setLiveDomainStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functions)) {
            $query['Functions'] = $request->functions;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLiveDomainStagingConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLiveDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLiveDomainStagingConfigRequest $request
     *
     * @return SetLiveDomainStagingConfigResponse
     */
    public function setLiveDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLiveDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetLiveEdgeTransferRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetLiveEdgeTransferResponse
     */
    public function setLiveEdgeTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->httpDns)) {
            $query['HttpDns'] = $request->httpDns;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->targetDomainList)) {
            $query['TargetDomainList'] = $request->targetDomainList;
        }
        if (!Utils::isUnset($request->transferArgs)) {
            $query['TransferArgs'] = $request->transferArgs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLiveEdgeTransfer',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLiveEdgeTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLiveEdgeTransferRequest $request
     *
     * @return SetLiveEdgeTransferResponse
     */
    public function setLiveEdgeTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLiveEdgeTransferWithOptions($request, $runtime);
    }

    /**
     * @param SetLiveLazyPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetLiveLazyPullStreamInfoConfigResponse
     */
    public function setLiveLazyPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pullAppName)) {
            $query['PullAppName'] = $request->pullAppName;
        }
        if (!Utils::isUnset($request->pullDomainName)) {
            $query['PullDomainName'] = $request->pullDomainName;
        }
        if (!Utils::isUnset($request->pullProtocol)) {
            $query['PullProtocol'] = $request->pullProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLiveLazyPullStreamInfoConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLiveLazyPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLiveLazyPullStreamInfoConfigRequest $request
     *
     * @return SetLiveLazyPullStreamInfoConfigResponse
     */
    public function setLiveLazyPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLiveLazyPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetLiveStreamDelayConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetLiveStreamDelayConfigResponse
     */
    public function setLiveStreamDelayConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->flvDelay)) {
            $query['FlvDelay'] = $request->flvDelay;
        }
        if (!Utils::isUnset($request->flvLevel)) {
            $query['FlvLevel'] = $request->flvLevel;
        }
        if (!Utils::isUnset($request->hlsDelay)) {
            $query['HlsDelay'] = $request->hlsDelay;
        }
        if (!Utils::isUnset($request->hlsLevel)) {
            $query['HlsLevel'] = $request->hlsLevel;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rtmpDelay)) {
            $query['RtmpDelay'] = $request->rtmpDelay;
        }
        if (!Utils::isUnset($request->rtmpLevel)) {
            $query['RtmpLevel'] = $request->rtmpLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLiveStreamDelayConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLiveStreamDelayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLiveStreamDelayConfigRequest $request
     *
     * @return SetLiveStreamDelayConfigResponse
     */
    public function setLiveStreamDelayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLiveStreamDelayConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetLiveStreamOptimizedFeatureConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLiveStreamOptimizedFeatureConfigResponse
     */
    public function setLiveStreamOptimizedFeatureConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configName)) {
            $query['ConfigName'] = $request->configName;
        }
        if (!Utils::isUnset($request->configStatus)) {
            $query['ConfigStatus'] = $request->configStatus;
        }
        if (!Utils::isUnset($request->configValue)) {
            $query['ConfigValue'] = $request->configValue;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLiveStreamOptimizedFeatureConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLiveStreamOptimizedFeatureConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLiveStreamOptimizedFeatureConfigRequest $request
     *
     * @return SetLiveStreamOptimizedFeatureConfigResponse
     */
    public function setLiveStreamOptimizedFeatureConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLiveStreamOptimizedFeatureConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetLiveStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetLiveStreamsNotifyUrlConfigResponse
     */
    public function setLiveStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->notifyAuthKey)) {
            $query['NotifyAuthKey'] = $request->notifyAuthKey;
        }
        if (!Utils::isUnset($request->notifyReqAuth)) {
            $query['NotifyReqAuth'] = $request->notifyReqAuth;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLiveStreamsNotifyUrlConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLiveStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLiveStreamsNotifyUrlConfigRequest $request
     *
     * @return SetLiveStreamsNotifyUrlConfigResponse
     */
    public function setLiveStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLiveStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetSnapshotCallbackAuthRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetSnapshotCallbackAuthResponse
     */
    public function setSnapshotCallbackAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callbackAuthKey)) {
            $query['CallbackAuthKey'] = $request->callbackAuthKey;
        }
        if (!Utils::isUnset($request->callbackReqAuth)) {
            $query['CallbackReqAuth'] = $request->callbackReqAuth;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSnapshotCallbackAuth',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSnapshotCallbackAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetSnapshotCallbackAuthRequest $request
     *
     * @return SetSnapshotCallbackAuthResponse
     */
    public function setSnapshotCallbackAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSnapshotCallbackAuthWithOptions($request, $runtime);
    }

    /**
     * @param StartCasterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartCasterResponse
     */
    public function startCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartCaster',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCasterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCasterRequest $request
     *
     * @return StartCasterResponse
     */
    public function startCaster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCasterWithOptions($request, $runtime);
    }

    /**
     * @param StartCasterSceneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartCasterSceneResponse
     */
    public function startCasterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartCasterScene',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCasterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCasterSceneRequest $request
     *
     * @return StartCasterSceneResponse
     */
    public function startCasterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCasterSceneWithOptions($request, $runtime);
    }

    /**
     * @param StartLiveDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartLiveDomainResponse
     */
    public function startLiveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartLiveDomain',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartLiveDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartLiveDomainRequest $request
     *
     * @return StartLiveDomainResponse
     */
    public function startLiveDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLiveDomainWithOptions($request, $runtime);
    }

    /**
     * @param StartLiveStreamMonitorRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StartLiveStreamMonitorResponse
     */
    public function startLiveStreamMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->monitorId)) {
            $query['MonitorId'] = $request->monitorId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartLiveStreamMonitor',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartLiveStreamMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartLiveStreamMonitorRequest $request
     *
     * @return StartLiveStreamMonitorResponse
     */
    public function startLiveStreamMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLiveStreamMonitorWithOptions($request, $runtime);
    }

    /**
     * @param StartPlaylistRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartPlaylistResponse
     */
    public function startPlaylistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        if (!Utils::isUnset($request->resumeMode)) {
            $query['ResumeMode'] = $request->resumeMode;
        }
        if (!Utils::isUnset($request->startItemId)) {
            $query['StartItemId'] = $request->startItemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartPlaylist',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPlaylistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartPlaylistRequest $request
     *
     * @return StartPlaylistResponse
     */
    public function startPlaylist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPlaylistWithOptions($request, $runtime);
    }

    /**
     * @param StopCasterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopCasterResponse
     */
    public function stopCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopCaster',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCasterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopCasterRequest $request
     *
     * @return StopCasterResponse
     */
    public function stopCaster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCasterWithOptions($request, $runtime);
    }

    /**
     * @param StopCasterSceneRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopCasterSceneResponse
     */
    public function stopCasterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopCasterScene',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCasterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopCasterSceneRequest $request
     *
     * @return StopCasterSceneResponse
     */
    public function stopCasterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCasterSceneWithOptions($request, $runtime);
    }

    /**
     * @param StopLiveDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopLiveDomainResponse
     */
    public function stopLiveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopLiveDomain',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLiveDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopLiveDomainRequest $request
     *
     * @return StopLiveDomainResponse
     */
    public function stopLiveDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLiveDomainWithOptions($request, $runtime);
    }

    /**
     * @param StopLiveStreamMonitorRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StopLiveStreamMonitorResponse
     */
    public function stopLiveStreamMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->monitorId)) {
            $query['MonitorId'] = $request->monitorId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopLiveStreamMonitor',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLiveStreamMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopLiveStreamMonitorRequest $request
     *
     * @return StopLiveStreamMonitorResponse
     */
    public function stopLiveStreamMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLiveStreamMonitorWithOptions($request, $runtime);
    }

    /**
     * @param StopPlaylistRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopPlaylistResponse
     */
    public function stopPlaylistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->programId)) {
            $query['ProgramId'] = $request->programId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopPlaylist',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopPlaylistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopPlaylistRequest $request
     *
     * @return StopPlaylistResponse
     */
    public function stopPlaylist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopPlaylistWithOptions($request, $runtime);
    }

    /**
     * @param TagLiveResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TagLiveResourcesResponse
     */
    public function tagLiveResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'TagLiveResources',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagLiveResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagLiveResourcesRequest $request
     *
     * @return TagLiveResourcesResponse
     */
    public function tagLiveResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagLiveResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UnTagLiveResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnTagLiveResourcesResponse
     */
    public function unTagLiveResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'UnTagLiveResources',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnTagLiveResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnTagLiveResourcesRequest $request
     *
     * @return UnTagLiveResourcesResponse
     */
    public function unTagLiveResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagLiveResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCasterSceneAudioRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCasterSceneAudioResponse
     */
    public function updateCasterSceneAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioLayer)) {
            $query['AudioLayer'] = $request->audioLayer;
        }
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->followEnable)) {
            $query['FollowEnable'] = $request->followEnable;
        }
        if (!Utils::isUnset($request->mixList)) {
            $query['MixList'] = $request->mixList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCasterSceneAudio',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCasterSceneAudioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCasterSceneAudioRequest $request
     *
     * @return UpdateCasterSceneAudioResponse
     */
    public function updateCasterSceneAudio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCasterSceneAudioWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCasterSceneConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCasterSceneConfigResponse
     */
    public function updateCasterSceneConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->casterId)) {
            $query['CasterId'] = $request->casterId;
        }
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCasterSceneConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCasterSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCasterSceneConfigRequest $request
     *
     * @return UpdateCasterSceneConfigResponse
     */
    public function updateCasterSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCasterSceneConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveAppSnapshotConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLiveAppSnapshotConfigResponse
     */
    public function updateLiveAppSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->overwriteOssObject)) {
            $query['OverwriteOssObject'] = $request->overwriteOssObject;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sequenceOssObject)) {
            $query['SequenceOssObject'] = $request->sequenceOssObject;
        }
        if (!Utils::isUnset($request->timeInterval)) {
            $query['TimeInterval'] = $request->timeInterval;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveAppSnapshotConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveAppSnapshotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveAppSnapshotConfigRequest $request
     *
     * @return UpdateLiveAppSnapshotConfigResponse
     */
    public function updateLiveAppSnapshotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveAppSnapshotConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveAudioAuditConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateLiveAudioAuditConfigResponse
     */
    public function updateLiveAudioAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossObject)) {
            $query['OssObject'] = $request->ossObject;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveAudioAuditConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveAudioAuditConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveAudioAuditConfigRequest $request
     *
     * @return UpdateLiveAudioAuditConfigResponse
     */
    public function updateLiveAudioAuditConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveAudioAuditConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveAudioAuditNotifyConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateLiveAudioAuditNotifyConfigResponse
     */
    public function updateLiveAudioAuditNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->callbackTemplate)) {
            $query['CallbackTemplate'] = $request->callbackTemplate;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveAudioAuditNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveAudioAuditNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveAudioAuditNotifyConfigRequest $request
     *
     * @return UpdateLiveAudioAuditNotifyConfigResponse
     */
    public function updateLiveAudioAuditNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveAudioAuditNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveDetectNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateLiveDetectNotifyConfigResponse
     */
    public function updateLiveDetectNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveDetectNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveDetectNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveDetectNotifyConfigRequest $request
     *
     * @return UpdateLiveDetectNotifyConfigResponse
     */
    public function updateLiveDetectNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveDetectNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLivePullStreamInfoConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateLivePullStreamInfoConfigResponse
     */
    public function updateLivePullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLivePullStreamInfoConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLivePullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLivePullStreamInfoConfigRequest $request
     *
     * @return UpdateLivePullStreamInfoConfigResponse
     */
    public function updateLivePullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateLiveRecordNotifyConfigResponse
     */
    public function updateLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->needStatusNotify)) {
            $query['NeedStatusNotify'] = $request->needStatusNotify;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->onDemandUrl)) {
            $query['OnDemandUrl'] = $request->onDemandUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveRecordNotifyConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveRecordNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveRecordNotifyConfigRequest $request
     *
     * @return UpdateLiveRecordNotifyConfigResponse
     */
    public function updateLiveRecordNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveRecordNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveSnapshotDetectPornConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateLiveSnapshotDetectPornConfigResponse
     */
    public function updateLiveSnapshotDetectPornConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossObject)) {
            $query['OssObject'] = $request->ossObject;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveSnapshotDetectPornConfig',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveSnapshotDetectPornConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveSnapshotDetectPornConfigRequest $request
     *
     * @return UpdateLiveSnapshotDetectPornConfigResponse
     */
    public function updateLiveSnapshotDetectPornConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveSnapshotDetectPornConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveStreamMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateLiveStreamMonitorResponse
     */
    public function updateLiveStreamMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->inputList)) {
            $query['InputList'] = $request->inputList;
        }
        if (!Utils::isUnset($request->monitorId)) {
            $query['MonitorId'] = $request->monitorId;
        }
        if (!Utils::isUnset($request->monitorName)) {
            $query['MonitorName'] = $request->monitorName;
        }
        if (!Utils::isUnset($request->outputTemplate)) {
            $query['OutputTemplate'] = $request->outputTemplate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveStreamMonitor',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveStreamMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveStreamMonitorRequest $request
     *
     * @return UpdateLiveStreamMonitorResponse
     */
    public function updateLiveStreamMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveStreamMonitorWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveStreamWatermarkRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateLiveStreamWatermarkResponse
     */
    public function updateLiveStreamWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->height)) {
            $query['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->offsetCorner)) {
            $query['OffsetCorner'] = $request->offsetCorner;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pictureUrl)) {
            $query['PictureUrl'] = $request->pictureUrl;
        }
        if (!Utils::isUnset($request->refHeight)) {
            $query['RefHeight'] = $request->refHeight;
        }
        if (!Utils::isUnset($request->refWidth)) {
            $query['RefWidth'] = $request->refWidth;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->transparency)) {
            $query['Transparency'] = $request->transparency;
        }
        if (!Utils::isUnset($request->XOffset)) {
            $query['XOffset'] = $request->XOffset;
        }
        if (!Utils::isUnset($request->YOffset)) {
            $query['YOffset'] = $request->YOffset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveStreamWatermark',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveStreamWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveStreamWatermarkRequest $request
     *
     * @return UpdateLiveStreamWatermarkResponse
     */
    public function updateLiveStreamWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveStreamWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveStreamWatermarkRuleRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateLiveStreamWatermarkRuleResponse
     */
    public function updateLiveStreamWatermarkRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveStreamWatermarkRule',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveStreamWatermarkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveStreamWatermarkRuleRequest $request
     *
     * @return UpdateLiveStreamWatermarkRuleResponse
     */
    public function updateLiveStreamWatermarkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveStreamWatermarkRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveTopLevelDomainRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLiveTopLevelDomainResponse
     */
    public function updateLiveTopLevelDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveTopLevelDomain',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveTopLevelDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveTopLevelDomainRequest $request
     *
     * @return UpdateLiveTopLevelDomainResponse
     */
    public function updateLiveTopLevelDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTopLevelDomainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMixStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMixStreamResponse
     */
    public function updateMixStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->inputStreamList)) {
            $query['InputStreamList'] = $request->inputStreamList;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $query['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->mixStreamId)) {
            $query['MixStreamId'] = $request->mixStreamId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMixStream',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMixStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMixStreamRequest $request
     *
     * @return UpdateMixStreamResponse
     */
    public function updateMixStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMixStreamWithOptions($request, $runtime);
    }

    /**
     * @param VerifyLiveDomainOwnerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyLiveDomainOwnerResponse
     */
    public function verifyLiveDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->verifyType)) {
            $query['VerifyType'] = $request->verifyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyLiveDomainOwner',
            'version'     => '2016-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyLiveDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyLiveDomainOwnerRequest $request
     *
     * @return VerifyLiveDomainOwnerResponse
     */
    public function verifyLiveDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyLiveDomainOwnerWithOptions($request, $runtime);
    }
}
