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
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveASRConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveASRConfigResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\AddRtsLiveStreamTranscodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddRtsLiveStreamTranscodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AddTrancodeSEIRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AddTrancodeSEIResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\AllowPushStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\AllowPushStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ApplyBoardTokenRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ApplyBoardTokenResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ApplyRecordTokenRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ApplyRecordTokenResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchDeleteLiveDomainConfigsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchDeleteLiveDomainConfigsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchSetLiveDomainConfigsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\BatchSetLiveDomainConfigsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CompleteBoardRecordRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CompleteBoardRecordResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CompleteBoardRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CompleteBoardResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ControlHtmlResourceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ControlHtmlResourceResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CopyCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CopyCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CopyCasterSceneConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CopyCasterSceneConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateBoardRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateBoardResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveRealTimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveRealTimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamRecordIndexFilesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamRecordIndexFilesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateMixStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateMixStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateRoomRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateRoomResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteBoardRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteBoardResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteHtmlResourceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteHtmlResourceResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAppRecordConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAppRecordConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAppSnapshotConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveAppSnapshotConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveASRConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveASRConfigResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamTranscodeRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamTranscodeResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteMixStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteMixStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteRoomRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteRoomResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardEventsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardEventsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardsResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterRtcInfoRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterRtcInfoResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeForbidPushStreamRoomListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeForbidPushStreamRoomListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHtmlResourceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHtmlResourceResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAsrConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAsrConfigResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTrafficDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTrafficDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTranscodeDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTranscodeDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOnlineUserNumRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOnlineUserNumResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsFrameRateAndBitRateDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsFrameRateAndBitRateDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsPublishListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsPublishListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeStreamNumRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeStreamNumResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTagResourcesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTagResourcesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserTagsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserTagsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveVerifyContentRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveVerifyContentResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRecordRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRecordResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRecordsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRecordsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomKickoutUserListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomKickoutUserListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomListRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomListResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomStatusRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomStatusResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\DisableLiveRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\DisableLiveRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\EditHtmlResourceRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\EditHtmlResourceResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\JoinBoardRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\JoinBoardResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryDomainsRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryDomainsResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryResponse;
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
use AlibabaCloud\SDK\Live\V20161101\Models\RealTimeRecordCommandRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\RealTimeRecordCommandResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\RealTimeSnapshotCommandRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\RealTimeSnapshotCommandResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\ResumeLiveStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\ResumeLiveStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SendRoomNotificationRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SendRoomNotificationResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SendRoomUserNotificationRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SendRoomUserNotificationResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetBoardCallbackRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetBoardCallbackResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterChannelRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterChannelResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSceneConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSceneConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSyncGroupRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSyncGroupResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveDomainCertificateRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveDomainCertificateResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveLazyPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveLazyPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamDelayConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamDelayConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamOptimizedFeatureConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamOptimizedFeatureConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\SetLiveStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartBoardRecordRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartBoardRecordResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterSceneRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterSceneResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveDomainRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveDomainResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveIndexRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveIndexResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopCasterRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopCasterResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopCasterSceneRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopCasterSceneResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopLiveDomainRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopLiveDomainResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\StopLiveIndexRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\StopLiveIndexResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\TagLiveResourcesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\TagLiveResourcesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UnTagLiveResourcesRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UnTagLiveResourcesResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateBoardCallbackRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateBoardCallbackResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateBoardRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateBoardResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAppSnapshotConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAppSnapshotConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveASRConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveASRConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAudioAuditConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAudioAuditConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAudioAuditNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAudioAuditNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveDetectNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveDetectNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveRecordNotifyConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveRecordNotifyConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveSnapshotDetectPornConfigRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveSnapshotDetectPornConfigResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveTopLevelDomainRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveTopLevelDomainResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateMixStreamRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateMixStreamResponse;
use AlibabaCloud\SDK\Live\V20161101\Models\VerifyLiveDomainOwnerRequest;
use AlibabaCloud\SDK\Live\V20161101\Models\VerifyLiveDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
            'ap-northeast-2-pop'          => 'live.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'live.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'live.ap-southeast-1.aliyuncs.com',
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
            'cn-yushanfang'               => 'live.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'live.aliyuncs.com',
            'cn-zhangjiakou'              => 'live.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'live.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'live.aliyuncs.com',
            'eu-west-1'                   => 'live.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'live.ap-southeast-1.aliyuncs.com',
            'me-east-1'                   => 'live.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'live.ap-southeast-1.aliyuncs.com',
            'us-east-1'                   => 'live.ap-southeast-1.aliyuncs.com',
            'us-west-1'                   => 'live.ap-southeast-1.aliyuncs.com',
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCasterComponentResponse::fromMap($this->doRPCRequest('AddCasterComponent', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCasterEpisodeResponse::fromMap($this->doRPCRequest('AddCasterEpisode', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCasterEpisodeGroupResponse::fromMap($this->doRPCRequest('AddCasterEpisodeGroup', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCasterEpisodeGroupContentResponse::fromMap($this->doRPCRequest('AddCasterEpisodeGroupContent', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCasterLayoutResponse::fromMap($this->doRPCRequest('AddCasterLayout', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCasterProgramResponse::fromMap($this->doRPCRequest('AddCasterProgram', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCasterVideoResourceResponse::fromMap($this->doRPCRequest('AddCasterVideoResource', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCustomLiveStreamTranscodeResponse::fromMap($this->doRPCRequest('AddCustomLiveStreamTranscode', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveAppRecordConfigResponse::fromMap($this->doRPCRequest('AddLiveAppRecordConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveAppSnapshotConfigResponse::fromMap($this->doRPCRequest('AddLiveAppSnapshotConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddLiveASRConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddLiveASRConfigResponse
     */
    public function addLiveASRConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveASRConfigResponse::fromMap($this->doRPCRequest('AddLiveASRConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddLiveASRConfigRequest $request
     *
     * @return AddLiveASRConfigResponse
     */
    public function addLiveASRConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLiveASRConfigWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveAudioAuditConfigResponse::fromMap($this->doRPCRequest('AddLiveAudioAuditConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveAudioAuditNotifyConfigResponse::fromMap($this->doRPCRequest('AddLiveAudioAuditNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveDetectNotifyConfigResponse::fromMap($this->doRPCRequest('AddLiveDetectNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveDomainResponse::fromMap($this->doRPCRequest('AddLiveDomain', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveDomainMappingResponse::fromMap($this->doRPCRequest('AddLiveDomainMapping', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveDomainPlayMappingResponse::fromMap($this->doRPCRequest('AddLiveDomainPlayMapping', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLivePullStreamInfoConfigResponse::fromMap($this->doRPCRequest('AddLivePullStreamInfoConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveRecordNotifyConfigResponse::fromMap($this->doRPCRequest('AddLiveRecordNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveRecordVodConfigResponse::fromMap($this->doRPCRequest('AddLiveRecordVodConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveSnapshotDetectPornConfigResponse::fromMap($this->doRPCRequest('AddLiveSnapshotDetectPornConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLiveStreamTranscodeResponse::fromMap($this->doRPCRequest('AddLiveStreamTranscode', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddRtsLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddRtsLiveStreamTranscodeResponse
     */
    public function addRtsLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddRtsLiveStreamTranscodeResponse::fromMap($this->doRPCRequest('AddRtsLiveStreamTranscode', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddTrancodeSEIRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddTrancodeSEIResponse
     */
    public function addTrancodeSEIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTrancodeSEIResponse::fromMap($this->doRPCRequest('AddTrancodeSEI', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllowPushStreamResponse::fromMap($this->doRPCRequest('AllowPushStream', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ApplyBoardTokenRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApplyBoardTokenResponse
     */
    public function applyBoardTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyBoardTokenResponse::fromMap($this->doRPCRequest('ApplyBoardToken', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApplyBoardTokenRequest $request
     *
     * @return ApplyBoardTokenResponse
     */
    public function applyBoardToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyBoardTokenWithOptions($request, $runtime);
    }

    /**
     * @param ApplyRecordTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ApplyRecordTokenResponse
     */
    public function applyRecordTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyRecordTokenResponse::fromMap($this->doRPCRequest('ApplyRecordToken', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApplyRecordTokenRequest $request
     *
     * @return ApplyRecordTokenResponse
     */
    public function applyRecordToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyRecordTokenWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteLiveDomainConfigsResponse::fromMap($this->doRPCRequest('BatchDeleteLiveDomainConfigs', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetLiveDomainConfigsResponse::fromMap($this->doRPCRequest('BatchSetLiveDomainConfigs', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CompleteBoardRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CompleteBoardResponse
     */
    public function completeBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompleteBoardResponse::fromMap($this->doRPCRequest('CompleteBoard', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CompleteBoardRequest $request
     *
     * @return CompleteBoardResponse
     */
    public function completeBoard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeBoardWithOptions($request, $runtime);
    }

    /**
     * @param CompleteBoardRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CompleteBoardRecordResponse
     */
    public function completeBoardRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompleteBoardRecordResponse::fromMap($this->doRPCRequest('CompleteBoardRecord', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CompleteBoardRecordRequest $request
     *
     * @return CompleteBoardRecordResponse
     */
    public function completeBoardRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeBoardRecordWithOptions($request, $runtime);
    }

    /**
     * @param ControlHtmlResourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ControlHtmlResourceResponse
     */
    public function controlHtmlResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ControlHtmlResourceResponse::fromMap($this->doRPCRequest('ControlHtmlResource', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ControlHtmlResourceRequest $request
     *
     * @return ControlHtmlResourceResponse
     */
    public function controlHtmlResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->controlHtmlResourceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyCasterResponse::fromMap($this->doRPCRequest('CopyCaster', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyCasterSceneConfigResponse::fromMap($this->doRPCRequest('CopyCasterSceneConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateBoardRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateBoardResponse
     */
    public function createBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBoardResponse::fromMap($this->doRPCRequest('CreateBoard', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBoardRequest $request
     *
     * @return CreateBoardResponse
     */
    public function createBoard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBoardWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCasterResponse::fromMap($this->doRPCRequest('CreateCaster', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return CreateLiveRealTimeLogDeliveryResponse::fromMap($this->doRPCRequest('CreateLiveRealTimeLogDelivery', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param CreateLiveStreamRecordIndexFilesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateLiveStreamRecordIndexFilesResponse
     */
    public function createLiveStreamRecordIndexFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLiveStreamRecordIndexFilesResponse::fromMap($this->doRPCRequest('CreateLiveStreamRecordIndexFiles', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateMixStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMixStreamResponse
     */
    public function createMixStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMixStreamResponse::fromMap($this->doRPCRequest('CreateMixStream', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoomResponse
     */
    public function createRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRoomResponse::fromMap($this->doRPCRequest('CreateRoom', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRoomRequest $request
     *
     * @return CreateRoomResponse
     */
    public function createRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoomWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBoardRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteBoardResponse
     */
    public function deleteBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBoardResponse::fromMap($this->doRPCRequest('DeleteBoard', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteBoardRequest $request
     *
     * @return DeleteBoardResponse
     */
    public function deleteBoard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBoardWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCasterResponse::fromMap($this->doRPCRequest('DeleteCaster', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCasterComponentResponse::fromMap($this->doRPCRequest('DeleteCasterComponent', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCasterEpisodeResponse::fromMap($this->doRPCRequest('DeleteCasterEpisode', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCasterEpisodeGroupResponse::fromMap($this->doRPCRequest('DeleteCasterEpisodeGroup', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCasterLayoutResponse::fromMap($this->doRPCRequest('DeleteCasterLayout', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCasterProgramResponse::fromMap($this->doRPCRequest('DeleteCasterProgram', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCasterSceneConfigResponse::fromMap($this->doRPCRequest('DeleteCasterSceneConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCasterVideoResourceResponse::fromMap($this->doRPCRequest('DeleteCasterVideoResource', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteHtmlResourceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteHtmlResourceResponse
     */
    public function deleteHtmlResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHtmlResourceResponse::fromMap($this->doRPCRequest('DeleteHtmlResource', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHtmlResourceRequest $request
     *
     * @return DeleteHtmlResourceResponse
     */
    public function deleteHtmlResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHtmlResourceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveAppRecordConfigResponse::fromMap($this->doRPCRequest('DeleteLiveAppRecordConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveAppSnapshotConfigResponse::fromMap($this->doRPCRequest('DeleteLiveAppSnapshotConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLiveASRConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteLiveASRConfigResponse
     */
    public function deleteLiveASRConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveASRConfigResponse::fromMap($this->doRPCRequest('DeleteLiveASRConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLiveASRConfigRequest $request
     *
     * @return DeleteLiveASRConfigResponse
     */
    public function deleteLiveASRConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveASRConfigWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveAudioAuditConfigResponse::fromMap($this->doRPCRequest('DeleteLiveAudioAuditConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveAudioAuditNotifyConfigResponse::fromMap($this->doRPCRequest('DeleteLiveAudioAuditNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveDetectNotifyConfigResponse::fromMap($this->doRPCRequest('DeleteLiveDetectNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveDomainResponse::fromMap($this->doRPCRequest('DeleteLiveDomain', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveDomainMappingResponse::fromMap($this->doRPCRequest('DeleteLiveDomainMapping', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveDomainPlayMappingResponse::fromMap($this->doRPCRequest('DeleteLiveDomainPlayMapping', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLiveLazyPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteLiveLazyPullStreamInfoConfigResponse
     */
    public function deleteLiveLazyPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveLazyPullStreamInfoConfigResponse::fromMap($this->doRPCRequest('DeleteLiveLazyPullStreamInfoConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLivePullStreamInfoConfigResponse::fromMap($this->doRPCRequest('DeleteLivePullStreamInfoConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DeleteLiveRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('DeleteLiveRealtimeLogDelivery', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DeleteLiveRealTimeLogLogstoreResponse::fromMap($this->doRPCRequest('DeleteLiveRealTimeLogLogstore', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteLiveRecordNotifyConfigResponse
     */
    public function deleteLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveRecordNotifyConfigResponse::fromMap($this->doRPCRequest('DeleteLiveRecordNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveRecordVodConfigResponse::fromMap($this->doRPCRequest('DeleteLiveRecordVodConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveSnapshotDetectPornConfigResponse::fromMap($this->doRPCRequest('DeleteLiveSnapshotDetectPornConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLiveStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteLiveStreamsNotifyUrlConfigResponse
     */
    public function deleteLiveStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveStreamsNotifyUrlConfigResponse::fromMap($this->doRPCRequest('DeleteLiveStreamsNotifyUrlConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLiveStreamTranscodeResponse
     */
    public function deleteLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveStreamTranscodeResponse::fromMap($this->doRPCRequest('DeleteLiveStreamTranscode', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteMixStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMixStreamResponse
     */
    public function deleteMixStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMixStreamResponse::fromMap($this->doRPCRequest('DeleteMixStream', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoomResponse
     */
    public function deleteRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRoomResponse::fromMap($this->doRPCRequest('DeleteRoom', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeBoardEventsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBoardEventsResponse
     */
    public function describeBoardEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBoardEventsResponse::fromMap($this->doRPCRequest('DescribeBoardEvents', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBoardEventsRequest $request
     *
     * @return DescribeBoardEventsResponse
     */
    public function describeBoardEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBoardEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBoardsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeBoardsResponse
     */
    public function describeBoardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBoardsResponse::fromMap($this->doRPCRequest('DescribeBoards', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBoardsRequest $request
     *
     * @return DescribeBoardsResponse
     */
    public function describeBoards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBoardsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBoardSnapshotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBoardSnapshotResponse
     */
    public function describeBoardSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBoardSnapshotResponse::fromMap($this->doRPCRequest('DescribeBoardSnapshot', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBoardSnapshotRequest $request
     *
     * @return DescribeBoardSnapshotResponse
     */
    public function describeBoardSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBoardSnapshotWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterChannelsResponse::fromMap($this->doRPCRequest('DescribeCasterChannels', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterComponentsResponse::fromMap($this->doRPCRequest('DescribeCasterComponents', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterConfigResponse::fromMap($this->doRPCRequest('DescribeCasterConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterLayoutsResponse::fromMap($this->doRPCRequest('DescribeCasterLayouts', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterProgramResponse::fromMap($this->doRPCRequest('DescribeCasterProgram', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCasterRtcInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCasterRtcInfoResponse
     */
    public function describeCasterRtcInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterRtcInfoResponse::fromMap($this->doRPCRequest('DescribeCasterRtcInfo', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCasterRtcInfoRequest $request
     *
     * @return DescribeCasterRtcInfoResponse
     */
    public function describeCasterRtcInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCasterRtcInfoWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCastersResponse::fromMap($this->doRPCRequest('DescribeCasters', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCasterSceneAudioRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCasterSceneAudioResponse
     */
    public function describeCasterSceneAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterSceneAudioResponse::fromMap($this->doRPCRequest('DescribeCasterSceneAudio', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterScenesResponse::fromMap($this->doRPCRequest('DescribeCasterScenes', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterStreamUrlResponse::fromMap($this->doRPCRequest('DescribeCasterStreamUrl', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterSyncGroupResponse::fromMap($this->doRPCRequest('DescribeCasterSyncGroup', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCasterVideoResourcesResponse::fromMap($this->doRPCRequest('DescribeCasterVideoResources', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainUsageDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainUsageDataResponse
     */
    public function describeDomainUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainUsageDataResponse::fromMap($this->doRPCRequest('DescribeDomainUsageData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeForbidPushStreamRoomListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeForbidPushStreamRoomListResponse
     */
    public function describeForbidPushStreamRoomListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeForbidPushStreamRoomListResponse::fromMap($this->doRPCRequest('DescribeForbidPushStreamRoomList', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeHlsLiveStreamRealTimeBpsDataResponse::fromMap($this->doRPCRequest('DescribeHlsLiveStreamRealTimeBpsData', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param DescribeHtmlResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHtmlResourceResponse
     */
    public function describeHtmlResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHtmlResourceResponse::fromMap($this->doRPCRequest('DescribeHtmlResource', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHtmlResourceRequest $request
     *
     * @return DescribeHtmlResourceResponse
     */
    public function describeHtmlResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHtmlResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveAsrConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLiveAsrConfigResponse
     */
    public function describeLiveAsrConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveAsrConfigResponse::fromMap($this->doRPCRequest('DescribeLiveAsrConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLiveAsrConfigRequest $request
     *
     * @return DescribeLiveAsrConfigResponse
     */
    public function describeLiveAsrConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveAsrConfigWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveAudioAuditConfigResponse::fromMap($this->doRPCRequest('DescribeLiveAudioAuditConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveAudioAuditNotifyConfigResponse::fromMap($this->doRPCRequest('DescribeLiveAudioAuditNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveCertificateDetailResponse::fromMap($this->doRPCRequest('DescribeLiveCertificateDetail', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveCertificateListResponse::fromMap($this->doRPCRequest('DescribeLiveCertificateList', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDetectNotifyConfigResponse::fromMap($this->doRPCRequest('DescribeLiveDetectNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDetectPornDataResponse::fromMap($this->doRPCRequest('DescribeLiveDetectPornData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainBpsDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainBpsData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveDomainBpsDataByTimeStampRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeLiveDomainBpsDataByTimeStampResponse
     */
    public function describeLiveDomainBpsDataByTimeStampWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainBpsDataByTimeStampResponse::fromMap($this->doRPCRequest('DescribeLiveDomainBpsDataByTimeStamp', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainCertificateInfoResponse::fromMap($this->doRPCRequest('DescribeLiveDomainCertificateInfo', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainConfigsResponse::fromMap($this->doRPCRequest('DescribeLiveDomainConfigs', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainDetailResponse::fromMap($this->doRPCRequest('DescribeLiveDomainDetail', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainFrameRateAndBitRateDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainFrameRateAndBitRateData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainLimitResponse::fromMap($this->doRPCRequest('DescribeLiveDomainLimit', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeLiveDomainMappingResponse::fromMap($this->doRPCRequest('DescribeLiveDomainMapping', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainOnlineUserNumResponse::fromMap($this->doRPCRequest('DescribeLiveDomainOnlineUserNum', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainPushBpsDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainPushBpsData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainPushTrafficDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainPushTrafficData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainPvUvDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainPvUvData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeLiveDomainRealTimeBpsDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainRealTimeBpsData', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainRealTimeHttpCodeDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainRealTimeHttpCodeData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeLiveDomainRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('DescribeLiveDomainRealtimeLogDelivery', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeLiveDomainRealTimeTrafficDataResponse
     */
    public function describeLiveDomainRealTimeTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainRealTimeTrafficDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainRealTimeTrafficData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveDomainRecordDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveDomainRecordDataResponse
     */
    public function describeLiveDomainRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainRecordDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainRecordData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveDomainSnapshotDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveDomainSnapshotDataResponse
     */
    public function describeLiveDomainSnapshotDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainSnapshotDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainSnapshotData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveDomainTimeShiftDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveDomainTimeShiftDataResponse
     */
    public function describeLiveDomainTimeShiftDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainTimeShiftDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainTimeShiftData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainTrafficDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainTrafficData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveDomainTranscodeDataResponse::fromMap($this->doRPCRequest('DescribeLiveDomainTranscodeData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveLazyPullStreamConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLiveLazyPullStreamConfigResponse
     */
    public function describeLiveLazyPullStreamConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveLazyPullStreamConfigResponse::fromMap($this->doRPCRequest('DescribeLiveLazyPullStreamConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLivePullStreamConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLivePullStreamConfigResponse
     */
    public function describeLivePullStreamConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLivePullStreamConfigResponse::fromMap($this->doRPCRequest('DescribeLivePullStreamConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveRealtimeDeliveryAccResponse::fromMap($this->doRPCRequest('DescribeLiveRealtimeDeliveryAcc', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeLiveRealtimeLogAuthorizedResponse::fromMap($this->doRPCRequest('DescribeLiveRealtimeLogAuthorized', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveRecordConfigResponse::fromMap($this->doRPCRequest('DescribeLiveRecordConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveRecordNotifyConfigResponse::fromMap($this->doRPCRequest('DescribeLiveRecordNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveRecordVodConfigsResponse::fromMap($this->doRPCRequest('DescribeLiveRecordVodConfigs', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveSnapshotConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLiveSnapshotConfigResponse
     */
    public function describeLiveSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveSnapshotConfigResponse::fromMap($this->doRPCRequest('DescribeLiveSnapshotConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveSnapshotDetectPornConfigResponse::fromMap($this->doRPCRequest('DescribeLiveSnapshotDetectPornConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamBitRateDataResponse::fromMap($this->doRPCRequest('DescribeLiveStreamBitRateData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeLiveStreamCountResponse::fromMap($this->doRPCRequest('DescribeLiveStreamCount', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamDelayConfigResponse::fromMap($this->doRPCRequest('DescribeLiveStreamDelayConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamHistoryUserNumResponse::fromMap($this->doRPCRequest('DescribeLiveStreamHistoryUserNum', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveStreamOnlineUserNumRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveStreamOnlineUserNumResponse
     */
    public function describeLiveStreamOnlineUserNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamOnlineUserNumResponse::fromMap($this->doRPCRequest('DescribeLiveStreamOnlineUserNum', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamOnlineUserNumRequest $request
     *
     * @return DescribeLiveStreamOnlineUserNumResponse
     */
    public function describeLiveStreamOnlineUserNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamOnlineUserNumWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamOptimizedFeatureConfigResponse::fromMap($this->doRPCRequest('DescribeLiveStreamOptimizedFeatureConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamRecordContentResponse::fromMap($this->doRPCRequest('DescribeLiveStreamRecordContent', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamRecordIndexFileResponse::fromMap($this->doRPCRequest('DescribeLiveStreamRecordIndexFile', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamRecordIndexFilesResponse::fromMap($this->doRPCRequest('DescribeLiveStreamRecordIndexFiles', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveStreamsBlockListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveStreamsBlockListResponse
     */
    public function describeLiveStreamsBlockListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamsBlockListResponse::fromMap($this->doRPCRequest('DescribeLiveStreamsBlockList', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamsControlHistoryResponse::fromMap($this->doRPCRequest('DescribeLiveStreamsControlHistory', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveStreamsFrameRateAndBitRateDataRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeLiveStreamsFrameRateAndBitRateDataResponse
     */
    public function describeLiveStreamsFrameRateAndBitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamsFrameRateAndBitRateDataResponse::fromMap($this->doRPCRequest('DescribeLiveStreamsFrameRateAndBitRateData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLiveStreamsFrameRateAndBitRateDataRequest $request
     *
     * @return DescribeLiveStreamsFrameRateAndBitRateDataResponse
     */
    public function describeLiveStreamsFrameRateAndBitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveStreamsFrameRateAndBitRateDataWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamSnapshotInfoResponse::fromMap($this->doRPCRequest('DescribeLiveStreamSnapshotInfo', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLiveStreamsNotifyUrlConfigResponse
     */
    public function describeLiveStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamsNotifyUrlConfigResponse::fromMap($this->doRPCRequest('DescribeLiveStreamsNotifyUrlConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamsOnlineListResponse::fromMap($this->doRPCRequest('DescribeLiveStreamsOnlineList', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamsPublishListResponse::fromMap($this->doRPCRequest('DescribeLiveStreamsPublishList', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveStreamTranscodeInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveStreamTranscodeInfoResponse
     */
    public function describeLiveStreamTranscodeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamTranscodeInfoResponse::fromMap($this->doRPCRequest('DescribeLiveStreamTranscodeInfo', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveStreamTranscodeStreamNumResponse::fromMap($this->doRPCRequest('DescribeLiveStreamTranscodeStreamNum', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveTagResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveTagResourcesResponse
     */
    public function describeLiveTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveTagResourcesResponse::fromMap($this->doRPCRequest('DescribeLiveTagResources', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveTopDomainsByFlowResponse::fromMap($this->doRPCRequest('DescribeLiveTopDomainsByFlow', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveUserDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLiveUserDomainsResponse
     */
    public function describeLiveUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveUserDomainsResponse::fromMap($this->doRPCRequest('DescribeLiveUserDomains', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveUserTagsResponse::fromMap($this->doRPCRequest('DescribeLiveUserTags', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLiveVerifyContentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLiveVerifyContentResponse
     */
    public function describeLiveVerifyContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLiveVerifyContentResponse::fromMap($this->doRPCRequest('DescribeLiveVerifyContent', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLiveVerifyContentRequest $request
     *
     * @return DescribeLiveVerifyContentResponse
     */
    public function describeLiveVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveVerifyContentWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMixStreamListResponse::fromMap($this->doRPCRequest('DescribeMixStreamList', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRecordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeRecordResponse
     */
    public function describeRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordResponse::fromMap($this->doRPCRequest('DescribeRecord', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRecordRequest $request
     *
     * @return DescribeRecordResponse
     */
    public function describeRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRecordsResponse
     */
    public function describeRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordsResponse::fromMap($this->doRPCRequest('DescribeRecords', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRecordsRequest $request
     *
     * @return DescribeRecordsResponse
     */
    public function describeRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRoomKickoutUserListResponse::fromMap($this->doRPCRequest('DescribeRoomKickoutUserList', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRoomListResponse::fromMap($this->doRPCRequest('DescribeRoomList', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRoomStatusResponse::fromMap($this->doRPCRequest('DescribeRoomStatus', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeUpBpsPeakDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUpBpsPeakDataResponse
     */
    public function describeUpBpsPeakDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUpBpsPeakDataResponse::fromMap($this->doRPCRequest('DescribeUpBpsPeakData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUpBpsPeakOfLineResponse::fromMap($this->doRPCRequest('DescribeUpBpsPeakOfLine', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUpPeakPublishStreamDataResponse::fromMap($this->doRPCRequest('DescribeUpPeakPublishStreamData', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DisableLiveRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('DisableLiveRealtimeLogDelivery', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param EditHtmlResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EditHtmlResourceResponse
     */
    public function editHtmlResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditHtmlResourceResponse::fromMap($this->doRPCRequest('EditHtmlResource', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditHtmlResourceRequest $request
     *
     * @return EditHtmlResourceResponse
     */
    public function editHtmlResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editHtmlResourceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EffectCasterUrgentResponse::fromMap($this->doRPCRequest('EffectCasterUrgent', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EffectCasterVideoResourceResponse::fromMap($this->doRPCRequest('EffectCasterVideoResource', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return EnableLiveRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('EnableLiveRealtimeLogDelivery', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ForbidLiveStreamResponse::fromMap($this->doRPCRequest('ForbidLiveStream', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ForbidPushStreamResponse::fromMap($this->doRPCRequest('ForbidPushStream', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param JoinBoardRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return JoinBoardResponse
     */
    public function joinBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinBoardResponse::fromMap($this->doRPCRequest('JoinBoard', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param JoinBoardRequest $request
     *
     * @return JoinBoardResponse
     */
    public function joinBoard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinBoardWithOptions($request, $runtime);
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
            'query' => $query,
        ]);

        return ListLiveRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('ListLiveRealtimeLogDelivery', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListLiveRealtimeLogDeliveryDomainsResponse::fromMap($this->doRPCRequest('ListLiveRealtimeLogDeliveryDomains', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListLiveRealtimeLogDeliveryInfosResponse::fromMap($this->doRPCRequest('ListLiveRealtimeLogDeliveryInfos', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param ModifyCasterComponentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyCasterComponentResponse
     */
    public function modifyCasterComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCasterComponentResponse::fromMap($this->doRPCRequest('ModifyCasterComponent', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCasterEpisodeResponse::fromMap($this->doRPCRequest('ModifyCasterEpisode', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCasterLayoutResponse::fromMap($this->doRPCRequest('ModifyCasterLayout', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCasterProgramResponse::fromMap($this->doRPCRequest('ModifyCasterProgram', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCasterVideoResourceResponse::fromMap($this->doRPCRequest('ModifyCasterVideoResource', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLiveDomainSchdmByPropertyResponse::fromMap($this->doRPCRequest('ModifyLiveDomainSchdmByProperty', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ModifyLiveRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('ModifyLiveRealtimeLogDelivery', '2016-11-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param RealTimeRecordCommandRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RealTimeRecordCommandResponse
     */
    public function realTimeRecordCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RealTimeRecordCommandResponse::fromMap($this->doRPCRequest('RealTimeRecordCommand', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RealTimeSnapshotCommandResponse::fromMap($this->doRPCRequest('RealTimeSnapshotCommand', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ResumeLiveStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ResumeLiveStreamResponse
     */
    public function resumeLiveStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResumeLiveStreamResponse::fromMap($this->doRPCRequest('ResumeLiveStream', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SendRoomNotificationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SendRoomNotificationResponse
     */
    public function sendRoomNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendRoomNotificationResponse::fromMap($this->doRPCRequest('SendRoomNotification', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendRoomUserNotificationResponse::fromMap($this->doRPCRequest('SendRoomUserNotification', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetBoardCallbackRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetBoardCallbackResponse
     */
    public function setBoardCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetBoardCallbackResponse::fromMap($this->doRPCRequest('SetBoardCallback', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetBoardCallbackRequest $request
     *
     * @return SetBoardCallbackResponse
     */
    public function setBoardCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBoardCallbackWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetCasterChannelResponse::fromMap($this->doRPCRequest('SetCasterChannel', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetCasterConfigResponse::fromMap($this->doRPCRequest('SetCasterConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetCasterSceneConfigResponse::fromMap($this->doRPCRequest('SetCasterSceneConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetCasterSyncGroupResponse::fromMap($this->doRPCRequest('SetCasterSyncGroup', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetLiveDomainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetLiveDomainCertificateResponse
     */
    public function setLiveDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLiveDomainCertificateResponse::fromMap($this->doRPCRequest('SetLiveDomainCertificate', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetLiveLazyPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetLiveLazyPullStreamInfoConfigResponse
     */
    public function setLiveLazyPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLiveLazyPullStreamInfoConfigResponse::fromMap($this->doRPCRequest('SetLiveLazyPullStreamInfoConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLiveStreamDelayConfigResponse::fromMap($this->doRPCRequest('SetLiveStreamDelayConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLiveStreamOptimizedFeatureConfigResponse::fromMap($this->doRPCRequest('SetLiveStreamOptimizedFeatureConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetLiveStreamsNotifyUrlConfigResponse::fromMap($this->doRPCRequest('SetLiveStreamsNotifyUrlConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartBoardRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartBoardRecordResponse
     */
    public function startBoardRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartBoardRecordResponse::fromMap($this->doRPCRequest('StartBoardRecord', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartBoardRecordRequest $request
     *
     * @return StartBoardRecordResponse
     */
    public function startBoardRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBoardRecordWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartCasterResponse::fromMap($this->doRPCRequest('StartCaster', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartCasterSceneResponse::fromMap($this->doRPCRequest('StartCasterScene', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartLiveDomainResponse::fromMap($this->doRPCRequest('StartLiveDomain', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartLiveIndexRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartLiveIndexResponse
     */
    public function startLiveIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartLiveIndexResponse::fromMap($this->doRPCRequest('StartLiveIndex', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartLiveIndexRequest $request
     *
     * @return StartLiveIndexResponse
     */
    public function startLiveIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLiveIndexWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopCasterResponse::fromMap($this->doRPCRequest('StopCaster', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopCasterSceneResponse::fromMap($this->doRPCRequest('StopCasterScene', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopLiveDomainResponse::fromMap($this->doRPCRequest('StopLiveDomain', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StopLiveIndexRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopLiveIndexResponse
     */
    public function stopLiveIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopLiveIndexResponse::fromMap($this->doRPCRequest('StopLiveIndex', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopLiveIndexRequest $request
     *
     * @return StopLiveIndexResponse
     */
    public function stopLiveIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLiveIndexWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagLiveResourcesResponse::fromMap($this->doRPCRequest('TagLiveResources', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnTagLiveResourcesResponse::fromMap($this->doRPCRequest('UnTagLiveResources', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateBoardRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateBoardResponse
     */
    public function updateBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateBoardResponse::fromMap($this->doRPCRequest('UpdateBoard', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateBoardRequest $request
     *
     * @return UpdateBoardResponse
     */
    public function updateBoard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBoardWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBoardCallbackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateBoardCallbackResponse
     */
    public function updateBoardCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateBoardCallbackResponse::fromMap($this->doRPCRequest('UpdateBoardCallback', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateBoardCallbackRequest $request
     *
     * @return UpdateBoardCallbackResponse
     */
    public function updateBoardCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBoardCallbackWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCasterSceneAudioResponse::fromMap($this->doRPCRequest('UpdateCasterSceneAudio', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCasterSceneConfigResponse::fromMap($this->doRPCRequest('UpdateCasterSceneConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveAppSnapshotConfigResponse::fromMap($this->doRPCRequest('UpdateLiveAppSnapshotConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateLiveASRConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateLiveASRConfigResponse
     */
    public function updateLiveASRConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveASRConfigResponse::fromMap($this->doRPCRequest('UpdateLiveASRConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateLiveASRConfigRequest $request
     *
     * @return UpdateLiveASRConfigResponse
     */
    public function updateLiveASRConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveASRConfigWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveAudioAuditConfigResponse::fromMap($this->doRPCRequest('UpdateLiveAudioAuditConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveAudioAuditNotifyConfigResponse::fromMap($this->doRPCRequest('UpdateLiveAudioAuditNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveDetectNotifyConfigResponse::fromMap($this->doRPCRequest('UpdateLiveDetectNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateLiveRecordNotifyConfigResponse
     */
    public function updateLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveRecordNotifyConfigResponse::fromMap($this->doRPCRequest('UpdateLiveRecordNotifyConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveSnapshotDetectPornConfigResponse::fromMap($this->doRPCRequest('UpdateLiveSnapshotDetectPornConfig', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateLiveTopLevelDomainRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLiveTopLevelDomainResponse
     */
    public function updateLiveTopLevelDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveTopLevelDomainResponse::fromMap($this->doRPCRequest('UpdateLiveTopLevelDomain', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMixStreamResponse::fromMap($this->doRPCRequest('UpdateMixStream', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyLiveDomainOwnerResponse::fromMap($this->doRPCRequest('VerifyLiveDomainOwner', '2016-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
