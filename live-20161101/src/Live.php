<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Live extends Rpc
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
     * @param AddLiveASRConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddLiveASRConfigResponse
     */
    public function addLiveASRConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveASRConfigResponse::fromMap($this->doRequest('AddLiveASRConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveAsrConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLiveAsrConfigResponse
     */
    public function describeLiveAsrConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveAsrConfigResponse::fromMap($this->doRequest('DescribeLiveAsrConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveASRConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteLiveASRConfigResponse
     */
    public function deleteLiveASRConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveASRConfigResponse::fromMap($this->doRequest('DeleteLiveASRConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateLiveASRConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateLiveASRConfigResponse
     */
    public function updateLiveASRConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateLiveASRConfigResponse::fromMap($this->doRequest('UpdateLiveASRConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteMixStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMixStreamResponse
     */
    public function deleteMixStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteMixStreamResponse::fromMap($this->doRequest('DeleteMixStream', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateMixStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMixStreamResponse
     */
    public function updateMixStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateMixStreamResponse::fromMap($this->doRequest('UpdateMixStream', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateMixStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMixStreamResponse
     */
    public function createMixStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateMixStreamResponse::fromMap($this->doRequest('CreateMixStream', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeMixStreamListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeMixStreamListResponse
     */
    public function describeMixStreamListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeMixStreamListResponse::fromMap($this->doRequest('DescribeMixStreamList', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddRtsLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddRtsLiveStreamTranscodeResponse
     */
    public function addRtsLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddRtsLiveStreamTranscodeResponse::fromMap($this->doRequest('AddRtsLiveStreamTranscode', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainTimeShiftDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveDomainTimeShiftDataResponse
     */
    public function describeLiveDomainTimeShiftDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainTimeShiftDataResponse::fromMap($this->doRequest('DescribeLiveDomainTimeShiftData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteHtmlResourceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteHtmlResourceResponse
     */
    public function deleteHtmlResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteHtmlResourceResponse::fromMap($this->doRequest('DeleteHtmlResource', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeHtmlResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHtmlResourceResponse
     */
    public function describeHtmlResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeHtmlResourceResponse::fromMap($this->doRequest('DescribeHtmlResource', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ControlHtmlResourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ControlHtmlResourceResponse
     */
    public function controlHtmlResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ControlHtmlResourceResponse::fromMap($this->doRequest('ControlHtmlResource', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param EditHtmlResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EditHtmlResourceResponse
     */
    public function editHtmlResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EditHtmlResourceResponse::fromMap($this->doRequest('EditHtmlResource', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveUserTagsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLiveUserTagsResponse
     */
    public function describeLiveUserTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveUserTagsResponse::fromMap($this->doRequest('DescribeLiveUserTags', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UnTagLiveResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnTagLiveResourcesResponse
     */
    public function unTagLiveResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnTagLiveResourcesResponse::fromMap($this->doRequest('UnTagLiveResources', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param TagLiveResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TagLiveResourcesResponse
     */
    public function tagLiveResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagLiveResourcesResponse::fromMap($this->doRequest('TagLiveResources', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveTagResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveTagResourcesResponse
     */
    public function describeLiveTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveTagResourcesResponse::fromMap($this->doRequest('DescribeLiveTagResources', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveAudioAuditConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddLiveAudioAuditConfigResponse
     */
    public function addLiveAudioAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveAudioAuditConfigResponse::fromMap($this->doRequest('AddLiveAudioAuditConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveAudioAuditConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLiveAudioAuditConfigResponse
     */
    public function deleteLiveAudioAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveAudioAuditConfigResponse::fromMap($this->doRequest('DeleteLiveAudioAuditConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveAudioAuditConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveAudioAuditConfigResponse
     */
    public function describeLiveAudioAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveAudioAuditConfigResponse::fromMap($this->doRequest('DescribeLiveAudioAuditConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateLiveAudioAuditConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateLiveAudioAuditConfigResponse
     */
    public function updateLiveAudioAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateLiveAudioAuditConfigResponse::fromMap($this->doRequest('UpdateLiveAudioAuditConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveAudioAuditNotifyConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddLiveAudioAuditNotifyConfigResponse
     */
    public function addLiveAudioAuditNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveAudioAuditNotifyConfigResponse::fromMap($this->doRequest('AddLiveAudioAuditNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveAudioAuditNotifyConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteLiveAudioAuditNotifyConfigResponse
     */
    public function deleteLiveAudioAuditNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveAudioAuditNotifyConfigResponse::fromMap($this->doRequest('DeleteLiveAudioAuditNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveAudioAuditNotifyConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLiveAudioAuditNotifyConfigResponse
     */
    public function describeLiveAudioAuditNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveAudioAuditNotifyConfigResponse::fromMap($this->doRequest('DescribeLiveAudioAuditNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateLiveAudioAuditNotifyConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateLiveAudioAuditNotifyConfigResponse
     */
    public function updateLiveAudioAuditNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateLiveAudioAuditNotifyConfigResponse::fromMap($this->doRequest('UpdateLiveAudioAuditNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainPushTrafficDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveDomainPushTrafficDataResponse
     */
    public function describeLiveDomainPushTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainPushTrafficDataResponse::fromMap($this->doRequest('DescribeLiveDomainPushTrafficData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainPushBpsDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveDomainPushBpsDataResponse
     */
    public function describeLiveDomainPushBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainPushBpsDataResponse::fromMap($this->doRequest('DescribeLiveDomainPushBpsData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetCasterSyncGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetCasterSyncGroupResponse
     */
    public function setCasterSyncGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetCasterSyncGroupResponse::fromMap($this->doRequest('SetCasterSyncGroup', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterSyncGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCasterSyncGroupResponse
     */
    public function describeCasterSyncGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterSyncGroupResponse::fromMap($this->doRequest('DescribeCasterSyncGroup', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDetectPornDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLiveDetectPornDataResponse
     */
    public function describeLiveDetectPornDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDetectPornDataResponse::fromMap($this->doRequest('DescribeLiveDetectPornData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveRealTimeLogLogstoreRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteLiveRealTimeLogLogstoreResponse
     */
    public function deleteLiveRealTimeLogLogstoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveRealTimeLogLogstoreResponse::fromMap($this->doRequest('DeleteLiveRealTimeLogLogstore', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param DisableLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DisableLiveRealtimeLogDeliveryResponse
     */
    public function disableLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableLiveRealtimeLogDeliveryResponse::fromMap($this->doRequest('DisableLiveRealtimeLogDelivery', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param EnableLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnableLiveRealtimeLogDeliveryResponse
     */
    public function enableLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableLiveRealtimeLogDeliveryResponse::fromMap($this->doRequest('EnableLiveRealtimeLogDelivery', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param ListLiveRealtimeLogDeliveryDomainsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListLiveRealtimeLogDeliveryDomainsResponse
     */
    public function listLiveRealtimeLogDeliveryDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListLiveRealtimeLogDeliveryDomainsResponse::fromMap($this->doRequest('ListLiveRealtimeLogDeliveryDomains', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param ModifyLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyLiveRealtimeLogDeliveryResponse
     */
    public function modifyLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyLiveRealtimeLogDeliveryResponse::fromMap($this->doRequest('ModifyLiveRealtimeLogDelivery', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param DescribeLiveRealtimeDeliveryAccRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveRealtimeDeliveryAccResponse
     */
    public function describeLiveRealtimeDeliveryAccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveRealtimeDeliveryAccResponse::fromMap($this->doRequest('DescribeLiveRealtimeDeliveryAcc', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeLiveRealtimeLogAuthorizedResponse::fromMap($this->doRequest('DescribeLiveRealtimeLogAuthorized', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param ListLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListLiveRealtimeLogDeliveryResponse
     */
    public function listLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListLiveRealtimeLogDeliveryResponse::fromMap($this->doRequest('ListLiveRealtimeLogDelivery', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param ListLiveRealtimeLogDeliveryInfosRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListLiveRealtimeLogDeliveryInfosResponse
     */
    public function listLiveRealtimeLogDeliveryInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListLiveRealtimeLogDeliveryInfosResponse::fromMap($this->doRequest('ListLiveRealtimeLogDeliveryInfos', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param DescribeLiveDomainRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeLiveDomainRealtimeLogDeliveryResponse
     */
    public function describeLiveDomainRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainRealtimeLogDeliveryResponse::fromMap($this->doRequest('DescribeLiveDomainRealtimeLogDelivery', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param DeleteLiveRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteLiveRealtimeLogDeliveryResponse
     */
    public function deleteLiveRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveRealtimeLogDeliveryResponse::fromMap($this->doRequest('DeleteLiveRealtimeLogDelivery', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param CreateLiveRealTimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLiveRealTimeLogDeliveryResponse
     */
    public function createLiveRealTimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateLiveRealTimeLogDeliveryResponse::fromMap($this->doRequest('CreateLiveRealTimeLogDelivery', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param DescribeLiveDomainLimitRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLiveDomainLimitResponse
     */
    public function describeLiveDomainLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainLimitResponse::fromMap($this->doRequest('DescribeLiveDomainLimit', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainBpsDataByTimeStampRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeLiveDomainBpsDataByTimeStampResponse
     */
    public function describeLiveDomainBpsDataByTimeStampWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainBpsDataByTimeStampResponse::fromMap($this->doRequest('DescribeLiveDomainBpsDataByTimeStamp', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamTranscodeStreamNumRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeLiveStreamTranscodeStreamNumResponse
     */
    public function describeLiveStreamTranscodeStreamNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamTranscodeStreamNumResponse::fromMap($this->doRequest('DescribeLiveStreamTranscodeStreamNum', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateLiveTopLevelDomainRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLiveTopLevelDomainResponse
     */
    public function updateLiveTopLevelDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateLiveTopLevelDomainResponse::fromMap($this->doRequest('UpdateLiveTopLevelDomain', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainCertificateInfoRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveDomainCertificateInfoResponse
     */
    public function describeLiveDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainCertificateInfoResponse::fromMap($this->doRequest('DescribeLiveDomainCertificateInfo', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ModifyLiveDomainSchdmByPropertyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyLiveDomainSchdmByPropertyResponse
     */
    public function modifyLiveDomainSchdmByPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyLiveDomainSchdmByPropertyResponse::fromMap($this->doRequest('ModifyLiveDomainSchdmByProperty', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetLiveStreamOptimizedFeatureConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLiveStreamOptimizedFeatureConfigResponse
     */
    public function setLiveStreamOptimizedFeatureConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetLiveStreamOptimizedFeatureConfigResponse::fromMap($this->doRequest('SetLiveStreamOptimizedFeatureConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamOptimizedFeatureConfigRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLiveStreamOptimizedFeatureConfigResponse
     */
    public function describeLiveStreamOptimizedFeatureConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamOptimizedFeatureConfigResponse::fromMap($this->doRequest('DescribeLiveStreamOptimizedFeatureConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetLiveStreamDelayConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetLiveStreamDelayConfigResponse
     */
    public function setLiveStreamDelayConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetLiveStreamDelayConfigResponse::fromMap($this->doRequest('SetLiveStreamDelayConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamDelayConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveStreamDelayConfigResponse
     */
    public function describeLiveStreamDelayConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamDelayConfigResponse::fromMap($this->doRequest('DescribeLiveStreamDelayConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainOnlineUserNumRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveDomainOnlineUserNumResponse
     */
    public function describeLiveDomainOnlineUserNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainOnlineUserNumResponse::fromMap($this->doRequest('DescribeLiveDomainOnlineUserNum', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainFrameRateAndBitRateDataRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeLiveDomainFrameRateAndBitRateDataResponse
     */
    public function describeLiveDomainFrameRateAndBitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainFrameRateAndBitRateDataResponse::fromMap($this->doRequest('DescribeLiveDomainFrameRateAndBitRateData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetBoardCallbackRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetBoardCallbackResponse
     */
    public function setBoardCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetBoardCallbackResponse::fromMap($this->doRequest('SetBoardCallback', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeRecordsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRecordsResponse
     */
    public function describeRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRecordsResponse::fromMap($this->doRequest('DescribeRecords', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeRecordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeRecordResponse
     */
    public function describeRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRecordResponse::fromMap($this->doRequest('DescribeRecord', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CompleteBoardRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CompleteBoardRecordResponse
     */
    public function completeBoardRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CompleteBoardRecordResponse::fromMap($this->doRequest('CompleteBoardRecord', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param StartBoardRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartBoardRecordResponse
     */
    public function startBoardRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartBoardRecordResponse::fromMap($this->doRequest('StartBoardRecord', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ApplyRecordTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ApplyRecordTokenResponse
     */
    public function applyRecordTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ApplyRecordTokenResponse::fromMap($this->doRequest('ApplyRecordToken', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateBoardCallbackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateBoardCallbackResponse
     */
    public function updateBoardCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateBoardCallbackResponse::fromMap($this->doRequest('UpdateBoardCallback', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainMappingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLiveDomainMappingResponse
     */
    public function describeLiveDomainMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainMappingResponse::fromMap($this->doRequest('DescribeLiveDomainMapping', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param StopLiveIndexRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopLiveIndexResponse
     */
    public function stopLiveIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopLiveIndexResponse::fromMap($this->doRequest('StopLiveIndex', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param StartLiveIndexRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartLiveIndexResponse
     */
    public function startLiveIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartLiveIndexResponse::fromMap($this->doRequest('StartLiveIndex', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param RealTimeSnapshotCommandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RealTimeSnapshotCommandResponse
     */
    public function realTimeSnapshotCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RealTimeSnapshotCommandResponse::fromMap($this->doRequest('RealTimeSnapshotCommand', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveTopDomainsByFlowRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveTopDomainsByFlowResponse
     */
    public function describeLiveTopDomainsByFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveTopDomainsByFlowResponse::fromMap($this->doRequest('DescribeLiveTopDomainsByFlow', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveDomainRealTimeBpsDataResponse
     */
    public function describeLiveDomainRealTimeBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainRealTimeBpsDataResponse::fromMap($this->doRequest('DescribeLiveDomainRealTimeBpsData', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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

        return DescribeLiveDomainRealTimeHttpCodeDataResponse::fromMap($this->doRequest('DescribeLiveDomainRealTimeHttpCodeData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeLiveDomainRealTimeTrafficDataResponse::fromMap($this->doRequest('DescribeLiveDomainRealTimeTrafficData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveDomainPlayMappingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddLiveDomainPlayMappingResponse
     */
    public function addLiveDomainPlayMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveDomainPlayMappingResponse::fromMap($this->doRequest('AddLiveDomainPlayMapping', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveLazyPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteLiveLazyPullStreamInfoConfigResponse
     */
    public function deleteLiveLazyPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveLazyPullStreamInfoConfigResponse::fromMap($this->doRequest('DeleteLiveLazyPullStreamInfoConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveLazyPullStreamConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLiveLazyPullStreamConfigResponse
     */
    public function describeLiveLazyPullStreamConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveLazyPullStreamConfigResponse::fromMap($this->doRequest('DescribeLiveLazyPullStreamConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetLiveLazyPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetLiveLazyPullStreamInfoConfigResponse
     */
    public function setLiveLazyPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetLiveLazyPullStreamInfoConfigResponse::fromMap($this->doRequest('SetLiveLazyPullStreamInfoConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateCasterSceneAudioRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCasterSceneAudioResponse
     */
    public function updateCasterSceneAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateCasterSceneAudioResponse::fromMap($this->doRequest('UpdateCasterSceneAudio', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetCasterChannelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetCasterChannelResponse
     */
    public function setCasterChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetCasterChannelResponse::fromMap($this->doRequest('SetCasterChannel', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterSceneAudioRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCasterSceneAudioResponse
     */
    public function describeCasterSceneAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterSceneAudioResponse::fromMap($this->doRequest('DescribeCasterSceneAudio', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterChannelsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCasterChannelsResponse
     */
    public function describeCasterChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterChannelsResponse::fromMap($this->doRequest('DescribeCasterChannels', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateBoardRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateBoardResponse
     */
    public function updateBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateBoardResponse::fromMap($this->doRequest('UpdateBoard', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param JoinBoardRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return JoinBoardResponse
     */
    public function joinBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return JoinBoardResponse::fromMap($this->doRequest('JoinBoard', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeBoardSnapshotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBoardSnapshotResponse
     */
    public function describeBoardSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBoardSnapshotResponse::fromMap($this->doRequest('DescribeBoardSnapshot', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeBoardsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeBoardsResponse
     */
    public function describeBoardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBoardsResponse::fromMap($this->doRequest('DescribeBoards', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeBoardEventsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBoardEventsResponse
     */
    public function describeBoardEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBoardEventsResponse::fromMap($this->doRequest('DescribeBoardEvents', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteBoardRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteBoardResponse
     */
    public function deleteBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBoardResponse::fromMap($this->doRequest('DeleteBoard', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateBoardRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateBoardResponse
     */
    public function createBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBoardResponse::fromMap($this->doRequest('CreateBoard', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CompleteBoardRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CompleteBoardResponse
     */
    public function completeBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CompleteBoardResponse::fromMap($this->doRequest('CompleteBoard', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ApplyBoardTokenRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApplyBoardTokenResponse
     */
    public function applyBoardTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ApplyBoardTokenResponse::fromMap($this->doRequest('ApplyBoardToken', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamCountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLiveStreamCountResponse
     */
    public function describeLiveStreamCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamCountResponse::fromMap($this->doRequest('DescribeLiveStreamCount', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param DescribeLiveCertificateDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveCertificateDetailResponse
     */
    public function describeLiveCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveCertificateDetailResponse::fromMap($this->doRequest('DescribeLiveCertificateDetail', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeHlsLiveStreamRealTimeBpsDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeHlsLiveStreamRealTimeBpsDataResponse
     */
    public function describeHlsLiveStreamRealTimeBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeHlsLiveStreamRealTimeBpsDataResponse::fromMap($this->doRequest('DescribeHlsLiveStreamRealTimeBpsData', 'HTTPS', 'GET', '2016-11-01', 'AK', Tea::merge($request), null, $runtime));
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
     * @param StopLiveDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopLiveDomainResponse
     */
    public function stopLiveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopLiveDomainResponse::fromMap($this->doRequest('StopLiveDomain', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param StartLiveDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartLiveDomainResponse
     */
    public function startLiveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartLiveDomainResponse::fromMap($this->doRequest('StartLiveDomain', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetLiveDomainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetLiveDomainCertificateResponse
     */
    public function setLiveDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetLiveDomainCertificateResponse::fromMap($this->doRequest('SetLiveDomainCertificate', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param BatchSetLiveDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchSetLiveDomainConfigsResponse
     */
    public function batchSetLiveDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchSetLiveDomainConfigsResponse::fromMap($this->doRequest('BatchSetLiveDomainConfigs', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveCertificateListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLiveCertificateListResponse
     */
    public function describeLiveCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveCertificateListResponse::fromMap($this->doRequest('DescribeLiveCertificateList', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLiveDomainResponse
     */
    public function deleteLiveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveDomainResponse::fromMap($this->doRequest('DeleteLiveDomain', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLiveDomainConfigsResponse
     */
    public function describeLiveDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainConfigsResponse::fromMap($this->doRequest('DescribeLiveDomainConfigs', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddLiveDomainResponse
     */
    public function addLiveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveDomainResponse::fromMap($this->doRequest('AddLiveDomain', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveDomainDetailResponse
     */
    public function describeLiveDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainDetailResponse::fromMap($this->doRequest('DescribeLiveDomainDetail', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param BatchDeleteLiveDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchDeleteLiveDomainConfigsResponse
     */
    public function batchDeleteLiveDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BatchDeleteLiveDomainConfigsResponse::fromMap($this->doRequest('BatchDeleteLiveDomainConfigs', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeRoomStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRoomStatusResponse
     */
    public function describeRoomStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRoomStatusResponse::fromMap($this->doRequest('DescribeRoomStatus', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeRoomListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeRoomListResponse
     */
    public function describeRoomListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRoomListResponse::fromMap($this->doRequest('DescribeRoomList', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeRoomKickoutUserListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRoomKickoutUserListResponse
     */
    public function describeRoomKickoutUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRoomKickoutUserListResponse::fromMap($this->doRequest('DescribeRoomKickoutUserList', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SendRoomUserNotificationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SendRoomUserNotificationResponse
     */
    public function sendRoomUserNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SendRoomUserNotificationResponse::fromMap($this->doRequest('SendRoomUserNotification', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeForbidPushStreamRoomListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeForbidPushStreamRoomListResponse
     */
    public function describeForbidPushStreamRoomListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeForbidPushStreamRoomListResponse::fromMap($this->doRequest('DescribeForbidPushStreamRoomList', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SendRoomNotificationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SendRoomNotificationResponse
     */
    public function sendRoomNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SendRoomNotificationResponse::fromMap($this->doRequest('SendRoomNotification', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ForbidPushStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ForbidPushStreamResponse
     */
    public function forbidPushStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ForbidPushStreamResponse::fromMap($this->doRequest('ForbidPushStream', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoomResponse
     */
    public function deleteRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRoomResponse::fromMap($this->doRequest('DeleteRoom', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoomResponse
     */
    public function createRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRoomResponse::fromMap($this->doRequest('CreateRoom', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AllowPushStreamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AllowPushStreamResponse
     */
    public function allowPushStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AllowPushStreamResponse::fromMap($this->doRequest('AllowPushStream', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveUserDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLiveUserDomainsResponse
     */
    public function describeLiveUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveUserDomainsResponse::fromMap($this->doRequest('DescribeLiveUserDomains', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterRtcInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCasterRtcInfoResponse
     */
    public function describeCasterRtcInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterRtcInfoResponse::fromMap($this->doRequest('DescribeCasterRtcInfo', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeUpBpsPeakDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUpBpsPeakDataResponse
     */
    public function describeUpBpsPeakDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUpBpsPeakDataResponse::fromMap($this->doRequest('DescribeUpBpsPeakData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeUpBpsPeakOfLineResponse::fromMap($this->doRequest('DescribeUpBpsPeakOfLine', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeUpPeakPublishStreamDataResponse::fromMap($this->doRequest('DescribeUpPeakPublishStreamData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveDomainMappingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteLiveDomainMappingResponse
     */
    public function deleteLiveDomainMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveDomainMappingResponse::fromMap($this->doRequest('DeleteLiveDomainMapping', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveDomainMappingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddLiveDomainMappingResponse
     */
    public function addLiveDomainMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveDomainMappingResponse::fromMap($this->doRequest('AddLiveDomainMapping', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddCasterEpisodeGroupContentRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AddCasterEpisodeGroupContentResponse
     */
    public function addCasterEpisodeGroupContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCasterEpisodeGroupContentResponse::fromMap($this->doRequest('AddCasterEpisodeGroupContent', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ModifyCasterProgramRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyCasterProgramResponse
     */
    public function modifyCasterProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCasterProgramResponse::fromMap($this->doRequest('ModifyCasterProgram', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ModifyCasterEpisodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyCasterEpisodeResponse
     */
    public function modifyCasterEpisodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCasterEpisodeResponse::fromMap($this->doRequest('ModifyCasterEpisode', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterProgramRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCasterProgramResponse
     */
    public function describeCasterProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterProgramResponse::fromMap($this->doRequest('DescribeCasterProgram', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteCasterProgramRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCasterProgramResponse
     */
    public function deleteCasterProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCasterProgramResponse::fromMap($this->doRequest('DeleteCasterProgram', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteCasterEpisodeGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCasterEpisodeGroupResponse
     */
    public function deleteCasterEpisodeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCasterEpisodeGroupResponse::fromMap($this->doRequest('DeleteCasterEpisodeGroup', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteCasterEpisodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCasterEpisodeResponse
     */
    public function deleteCasterEpisodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCasterEpisodeResponse::fromMap($this->doRequest('DeleteCasterEpisode', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddCasterProgramRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddCasterProgramResponse
     */
    public function addCasterProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCasterProgramResponse::fromMap($this->doRequest('AddCasterProgram', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddCasterEpisodeGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddCasterEpisodeGroupResponse
     */
    public function addCasterEpisodeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCasterEpisodeGroupResponse::fromMap($this->doRequest('AddCasterEpisodeGroup', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddCasterEpisodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddCasterEpisodeResponse
     */
    public function addCasterEpisodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCasterEpisodeResponse::fromMap($this->doRequest('AddCasterEpisode', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainTranscodeDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveDomainTranscodeDataResponse
     */
    public function describeLiveDomainTranscodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainTranscodeDataResponse::fromMap($this->doRequest('DescribeLiveDomainTranscodeData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainSnapshotDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveDomainSnapshotDataResponse
     */
    public function describeLiveDomainSnapshotDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainSnapshotDataResponse::fromMap($this->doRequest('DescribeLiveDomainSnapshotData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainRecordDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveDomainRecordDataResponse
     */
    public function describeLiveDomainRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainRecordDataResponse::fromMap($this->doRequest('DescribeLiveDomainRecordData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param RealTimeRecordCommandRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RealTimeRecordCommandResponse
     */
    public function realTimeRecordCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RealTimeRecordCommandResponse::fromMap($this->doRequest('RealTimeRecordCommand', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainTrafficDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveDomainTrafficDataResponse
     */
    public function describeLiveDomainTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainTrafficDataResponse::fromMap($this->doRequest('DescribeLiveDomainTrafficData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDomainBpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLiveDomainBpsDataResponse
     */
    public function describeLiveDomainBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDomainBpsDataResponse::fromMap($this->doRequest('DescribeLiveDomainBpsData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddTrancodeSEIRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddTrancodeSEIResponse
     */
    public function addTrancodeSEIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddTrancodeSEIResponse::fromMap($this->doRequest('AddTrancodeSEI', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteCasterSceneConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteCasterSceneConfigResponse
     */
    public function deleteCasterSceneConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCasterSceneConfigResponse::fromMap($this->doRequest('DeleteCasterSceneConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddCustomLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AddCustomLiveStreamTranscodeResponse
     */
    public function addCustomLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCustomLiveStreamTranscodeResponse::fromMap($this->doRequest('AddCustomLiveStreamTranscode', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveRecordVodConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveRecordVodConfigsResponse
     */
    public function describeLiveRecordVodConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveRecordVodConfigsResponse::fromMap($this->doRequest('DescribeLiveRecordVodConfigs', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveRecordVodConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLiveRecordVodConfigResponse
     */
    public function deleteLiveRecordVodConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveRecordVodConfigResponse::fromMap($this->doRequest('DeleteLiveRecordVodConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveRecordVodConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddLiveRecordVodConfigResponse
     */
    public function addLiveRecordVodConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveRecordVodConfigResponse::fromMap($this->doRequest('AddLiveRecordVodConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ModifyCasterComponentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyCasterComponentResponse
     */
    public function modifyCasterComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCasterComponentResponse::fromMap($this->doRequest('ModifyCasterComponent', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterComponentsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCasterComponentsResponse
     */
    public function describeCasterComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterComponentsResponse::fromMap($this->doRequest('DescribeCasterComponents', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteCasterComponentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCasterComponentResponse
     */
    public function deleteCasterComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCasterComponentResponse::fromMap($this->doRequest('DeleteCasterComponent', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddCasterComponentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddCasterComponentResponse
     */
    public function addCasterComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCasterComponentResponse::fromMap($this->doRequest('AddCasterComponent', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param StopCasterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopCasterResponse
     */
    public function stopCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopCasterResponse::fromMap($this->doRequest('StopCaster', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param StartCasterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartCasterResponse
     */
    public function startCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartCasterResponse::fromMap($this->doRequest('StartCaster', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamHistoryUserNumRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLiveStreamHistoryUserNumResponse
     */
    public function describeLiveStreamHistoryUserNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamHistoryUserNumResponse::fromMap($this->doRequest('DescribeLiveStreamHistoryUserNum', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateCasterSceneConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCasterSceneConfigResponse
     */
    public function updateCasterSceneConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateCasterSceneConfigResponse::fromMap($this->doRequest('UpdateCasterSceneConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param StopCasterSceneRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopCasterSceneResponse
     */
    public function stopCasterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopCasterSceneResponse::fromMap($this->doRequest('StopCasterScene', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param StartCasterSceneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartCasterSceneResponse
     */
    public function startCasterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartCasterSceneResponse::fromMap($this->doRequest('StartCasterScene', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetCasterSceneConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetCasterSceneConfigResponse
     */
    public function setCasterSceneConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetCasterSceneConfigResponse::fromMap($this->doRequest('SetCasterSceneConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetCasterConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetCasterConfigResponse
     */
    public function setCasterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetCasterConfigResponse::fromMap($this->doRequest('SetCasterConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ModifyCasterVideoResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyCasterVideoResourceResponse
     */
    public function modifyCasterVideoResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCasterVideoResourceResponse::fromMap($this->doRequest('ModifyCasterVideoResource', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ModifyCasterLayoutRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyCasterLayoutResponse
     */
    public function modifyCasterLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCasterLayoutResponse::fromMap($this->doRequest('ModifyCasterLayout', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param EffectCasterVideoResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EffectCasterVideoResourceResponse
     */
    public function effectCasterVideoResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EffectCasterVideoResourceResponse::fromMap($this->doRequest('EffectCasterVideoResource', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param EffectCasterUrgentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EffectCasterUrgentResponse
     */
    public function effectCasterUrgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EffectCasterUrgentResponse::fromMap($this->doRequest('EffectCasterUrgent', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterVideoResourcesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCasterVideoResourcesResponse
     */
    public function describeCasterVideoResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterVideoResourcesResponse::fromMap($this->doRequest('DescribeCasterVideoResources', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterStreamUrlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCasterStreamUrlResponse
     */
    public function describeCasterStreamUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterStreamUrlResponse::fromMap($this->doRequest('DescribeCasterStreamUrl', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterScenesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCasterScenesResponse
     */
    public function describeCasterScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterScenesResponse::fromMap($this->doRequest('DescribeCasterScenes', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCastersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCastersResponse
     */
    public function describeCastersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCastersResponse::fromMap($this->doRequest('DescribeCasters', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterLayoutsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCasterLayoutsResponse
     */
    public function describeCasterLayoutsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterLayoutsResponse::fromMap($this->doRequest('DescribeCasterLayouts', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCasterConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCasterConfigResponse
     */
    public function describeCasterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCasterConfigResponse::fromMap($this->doRequest('DescribeCasterConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteCasterVideoResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCasterVideoResourceResponse
     */
    public function deleteCasterVideoResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCasterVideoResourceResponse::fromMap($this->doRequest('DeleteCasterVideoResource', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteCasterLayoutRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCasterLayoutResponse
     */
    public function deleteCasterLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCasterLayoutResponse::fromMap($this->doRequest('DeleteCasterLayout', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteCasterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteCasterResponse
     */
    public function deleteCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCasterResponse::fromMap($this->doRequest('DeleteCaster', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateCasterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateCasterResponse
     */
    public function createCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateCasterResponse::fromMap($this->doRequest('CreateCaster', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CopyCasterSceneConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CopyCasterSceneConfigResponse
     */
    public function copyCasterSceneConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CopyCasterSceneConfigResponse::fromMap($this->doRequest('CopyCasterSceneConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CopyCasterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CopyCasterResponse
     */
    public function copyCasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CopyCasterResponse::fromMap($this->doRequest('CopyCaster', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddCasterVideoResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddCasterVideoResourceResponse
     */
    public function addCasterVideoResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCasterVideoResourceResponse::fromMap($this->doRequest('AddCasterVideoResource', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddCasterLayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddCasterLayoutResponse
     */
    public function addCasterLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCasterLayoutResponse::fromMap($this->doRequest('AddCasterLayout', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLivePullStreamConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLivePullStreamConfigResponse
     */
    public function describeLivePullStreamConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLivePullStreamConfigResponse::fromMap($this->doRequest('DescribeLivePullStreamConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLivePullStreamInfoConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteLivePullStreamInfoConfigResponse
     */
    public function deleteLivePullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLivePullStreamInfoConfigResponse::fromMap($this->doRequest('DeleteLivePullStreamInfoConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLivePullStreamInfoConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddLivePullStreamInfoConfigResponse
     */
    public function addLivePullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLivePullStreamInfoConfigResponse::fromMap($this->doRequest('AddLivePullStreamInfoConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamBitRateDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveStreamBitRateDataResponse
     */
    public function describeLiveStreamBitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamBitRateDataResponse::fromMap($this->doRequest('DescribeLiveStreamBitRateData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveDetectNotifyConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddLiveDetectNotifyConfigResponse
     */
    public function addLiveDetectNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveDetectNotifyConfigResponse::fromMap($this->doRequest('AddLiveDetectNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveSnapshotDetectPornConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddLiveSnapshotDetectPornConfigResponse
     */
    public function addLiveSnapshotDetectPornConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveSnapshotDetectPornConfigResponse::fromMap($this->doRequest('AddLiveSnapshotDetectPornConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveDetectNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteLiveDetectNotifyConfigResponse
     */
    public function deleteLiveDetectNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveDetectNotifyConfigResponse::fromMap($this->doRequest('DeleteLiveDetectNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveDetectNotifyConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveDetectNotifyConfigResponse
     */
    public function describeLiveDetectNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveDetectNotifyConfigResponse::fromMap($this->doRequest('DescribeLiveDetectNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveSnapshotDetectPornConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteLiveSnapshotDetectPornConfigResponse
     */
    public function deleteLiveSnapshotDetectPornConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveSnapshotDetectPornConfigResponse::fromMap($this->doRequest('DeleteLiveSnapshotDetectPornConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveSnapshotDetectPornConfigRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeLiveSnapshotDetectPornConfigResponse
     */
    public function describeLiveSnapshotDetectPornConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveSnapshotDetectPornConfigResponse::fromMap($this->doRequest('DescribeLiveSnapshotDetectPornConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateLiveDetectNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateLiveDetectNotifyConfigResponse
     */
    public function updateLiveDetectNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateLiveDetectNotifyConfigResponse::fromMap($this->doRequest('UpdateLiveDetectNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateLiveSnapshotDetectPornConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateLiveSnapshotDetectPornConfigResponse
     */
    public function updateLiveSnapshotDetectPornConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateLiveSnapshotDetectPornConfigResponse::fromMap($this->doRequest('UpdateLiveSnapshotDetectPornConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddLiveRecordNotifyConfigResponse
     */
    public function addLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveRecordNotifyConfigResponse::fromMap($this->doRequest('AddLiveRecordNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteLiveStreamsNotifyUrlConfigResponse
     */
    public function deleteLiveStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveStreamsNotifyUrlConfigResponse::fromMap($this->doRequest('DeleteLiveStreamsNotifyUrlConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteLiveRecordNotifyConfigResponse
     */
    public function deleteLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveRecordNotifyConfigResponse::fromMap($this->doRequest('DeleteLiveRecordNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveRecordNotifyConfigResponse
     */
    public function describeLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveRecordNotifyConfigResponse::fromMap($this->doRequest('DescribeLiveRecordNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLiveStreamsNotifyUrlConfigResponse
     */
    public function describeLiveStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamsNotifyUrlConfigResponse::fromMap($this->doRequest('DescribeLiveStreamsNotifyUrlConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateLiveRecordNotifyConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateLiveRecordNotifyConfigResponse
     */
    public function updateLiveRecordNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateLiveRecordNotifyConfigResponse::fromMap($this->doRequest('UpdateLiveRecordNotifyConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamsBlockListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLiveStreamsBlockListResponse
     */
    public function describeLiveStreamsBlockListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamsBlockListResponse::fromMap($this->doRequest('DescribeLiveStreamsBlockList', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamOnlineUserNumRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveStreamOnlineUserNumResponse
     */
    public function describeLiveStreamOnlineUserNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamOnlineUserNumResponse::fromMap($this->doRequest('DescribeLiveStreamOnlineUserNum', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamsPublishListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveStreamsPublishListResponse
     */
    public function describeLiveStreamsPublishListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamsPublishListResponse::fromMap($this->doRequest('DescribeLiveStreamsPublishList', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamsOnlineListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLiveStreamsOnlineListResponse
     */
    public function describeLiveStreamsOnlineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamsOnlineListResponse::fromMap($this->doRequest('DescribeLiveStreamsOnlineList', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamsControlHistoryRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveStreamsControlHistoryResponse
     */
    public function describeLiveStreamsControlHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamsControlHistoryResponse::fromMap($this->doRequest('DescribeLiveStreamsControlHistory', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddLiveStreamTranscodeResponse
     */
    public function addLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveStreamTranscodeResponse::fromMap($this->doRequest('AddLiveStreamTranscode', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveStreamTranscodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLiveStreamTranscodeResponse
     */
    public function deleteLiveStreamTranscodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveStreamTranscodeResponse::fromMap($this->doRequest('DeleteLiveStreamTranscode', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamsFrameRateAndBitRateDataRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeLiveStreamsFrameRateAndBitRateDataResponse
     */
    public function describeLiveStreamsFrameRateAndBitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamsFrameRateAndBitRateDataResponse::fromMap($this->doRequest('DescribeLiveStreamsFrameRateAndBitRateData', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ForbidLiveStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ForbidLiveStreamResponse
     */
    public function forbidLiveStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ForbidLiveStreamResponse::fromMap($this->doRequest('ForbidLiveStream', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamTranscodeInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveStreamTranscodeInfoResponse
     */
    public function describeLiveStreamTranscodeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamTranscodeInfoResponse::fromMap($this->doRequest('DescribeLiveStreamTranscodeInfo', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetLiveStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetLiveStreamsNotifyUrlConfigResponse
     */
    public function setLiveStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetLiveStreamsNotifyUrlConfigResponse::fromMap($this->doRequest('SetLiveStreamsNotifyUrlConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ResumeLiveStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ResumeLiveStreamResponse
     */
    public function resumeLiveStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResumeLiveStreamResponse::fromMap($this->doRequest('ResumeLiveStream', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveAppSnapshotConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddLiveAppSnapshotConfigResponse
     */
    public function addLiveAppSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveAppSnapshotConfigResponse::fromMap($this->doRequest('AddLiveAppSnapshotConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddLiveAppRecordConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddLiveAppRecordConfigResponse
     */
    public function addLiveAppRecordConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLiveAppRecordConfigResponse::fromMap($this->doRequest('AddLiveAppRecordConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveRecordConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLiveRecordConfigResponse
     */
    public function describeLiveRecordConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveRecordConfigResponse::fromMap($this->doRequest('DescribeLiveRecordConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveAppSnapshotConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteLiveAppSnapshotConfigResponse
     */
    public function deleteLiveAppSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveAppSnapshotConfigResponse::fromMap($this->doRequest('DeleteLiveAppSnapshotConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteLiveAppRecordConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLiveAppRecordConfigResponse
     */
    public function deleteLiveAppRecordConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLiveAppRecordConfigResponse::fromMap($this->doRequest('DeleteLiveAppRecordConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateLiveStreamRecordIndexFilesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateLiveStreamRecordIndexFilesResponse
     */
    public function createLiveStreamRecordIndexFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateLiveStreamRecordIndexFilesResponse::fromMap($this->doRequest('CreateLiveStreamRecordIndexFiles', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamSnapshotInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeLiveStreamSnapshotInfoResponse
     */
    public function describeLiveStreamSnapshotInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamSnapshotInfoResponse::fromMap($this->doRequest('DescribeLiveStreamSnapshotInfo', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamRecordIndexFilesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLiveStreamRecordIndexFilesResponse
     */
    public function describeLiveStreamRecordIndexFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamRecordIndexFilesResponse::fromMap($this->doRequest('DescribeLiveStreamRecordIndexFiles', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamRecordIndexFileRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLiveStreamRecordIndexFileResponse
     */
    public function describeLiveStreamRecordIndexFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamRecordIndexFileResponse::fromMap($this->doRequest('DescribeLiveStreamRecordIndexFile', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveStreamRecordContentRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeLiveStreamRecordContentResponse
     */
    public function describeLiveStreamRecordContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveStreamRecordContentResponse::fromMap($this->doRequest('DescribeLiveStreamRecordContent', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeLiveSnapshotConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLiveSnapshotConfigResponse
     */
    public function describeLiveSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLiveSnapshotConfigResponse::fromMap($this->doRequest('DescribeLiveSnapshotConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateLiveAppSnapshotConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLiveAppSnapshotConfigResponse
     */
    public function updateLiveAppSnapshotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateLiveAppSnapshotConfigResponse::fromMap($this->doRequest('UpdateLiveAppSnapshotConfig', 'HTTPS', 'POST', '2016-11-01', 'AK', null, Tea::merge($request), $runtime));
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
}
