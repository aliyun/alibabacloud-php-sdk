<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddCategoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddCategoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AttachAppPolicyToIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AttachAppPolicyToIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchSetVodDomainConfigsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchSetVodDomainConfigsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStartVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStartVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStopVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStopVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CancelUrlUploadJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CancelUrlUploadJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateAppInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateAppInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateAuditRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateAuditResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateDetectionTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateDetectionTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadAttachedMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadAttachedMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadImageRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadImageResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateVodRealTimeLogDeliveryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateVodRealTimeLogDeliveryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAIImageInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAIImageInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAppInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAppInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAttachedMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAttachedMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteDetectionTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteDetectionTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteDynamicImageRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteDynamicImageResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMessageCallbackRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMessageCallbackResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMezzaninesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMezzaninesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMultipartUploadRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMultipartUploadResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteStreamRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteStreamResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodSpecificConfigRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodSpecificConfigResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshQuotaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshQuotaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTagResourcesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTagResourcesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserTagsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserTagsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodVerifyContentRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodVerifyContentResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DetachAppPolicyFromIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DetachAppPolicyFromIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DisableVodRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DisableVodRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\EnableVodRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\EnableVodRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAICaptionExtractionJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAICaptionExtractionJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIImageJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIImageJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDefaultAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDefaultAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionResultRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionResultResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIImageInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIImageInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDetectionJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDetectionJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDetectionTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDetectionTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDynamicImageRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDynamicImageResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLetterSendJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLetterSendJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodRealtimeLogDeliveryDomainsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodRealtimeLogDeliveryDomainsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodRealtimeLogDeliveryInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodRealtimeLogDeliveryInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\MoveAppResourceRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\MoveAppResourceResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\PreloadVodObjectCachesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\PreloadVodObjectCachesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ProduceEditingProjectVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ProduceEditingProjectVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshUploadVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshUploadVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshVodObjectCachesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshVodObjectCachesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetAuditSecurityIpRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetAuditSecurityIpResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetCrossdomainContentRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetCrossdomainContentResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetMessageCallbackRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetMessageCallbackResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetVodDomainCertificateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetVodDomainCertificateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAICaptionExtractionJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAICaptionExtractionJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageAuditJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIMediaAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIMediaAuditJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDetectionJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDetectionJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitLiveEditingRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitLiveEditingResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitMediaDNADeleteJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitMediaDNADeleteJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitWorkflowJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitWorkflowJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\TagVodResourcesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\TagVodResourcesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UnTagVodResourcesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UnTagVodResourcesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAppInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAppInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAttachedMediaInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAttachedMediaInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateDetectionJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateDetectionJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateDetectionTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateDetectionTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVideoInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVideoInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVideoInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVideoInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UploadMediaByURLRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UploadMediaByURLResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UploadStreamByURLRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UploadStreamByURLResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\VerifyVodDomainOwnerRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\VerifyVodDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Vod extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'vod.aliyuncs.com',
            'ap-southeast-2'              => 'vod.aliyuncs.com',
            'ap-southeast-3'              => 'vod.aliyuncs.com',
            'cn-beijing-finance-1'        => 'vod.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'vod.aliyuncs.com',
            'cn-beijing-gov-1'            => 'vod.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'vod.aliyuncs.com',
            'cn-chengdu'                  => 'vod.aliyuncs.com',
            'cn-edge-1'                   => 'vod.aliyuncs.com',
            'cn-fujian'                   => 'vod.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'vod.aliyuncs.com',
            'cn-hangzhou'                 => 'vod.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'vod.aliyuncs.com',
            'cn-hangzhou-finance'         => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'vod.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'vod.aliyuncs.com',
            'cn-hongkong'                 => 'vod.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'vod.aliyuncs.com',
            'cn-huhehaote'                => 'vod.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'vod.aliyuncs.com',
            'cn-qingdao'                  => 'vod.aliyuncs.com',
            'cn-qingdao-nebula'           => 'vod.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'vod.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'vod.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'vod.aliyuncs.com',
            'cn-shanghai-inner'           => 'vod.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'vod.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'vod.aliyuncs.com',
            'cn-shenzhen-inner'           => 'vod.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'vod.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'vod.aliyuncs.com',
            'cn-wuhan'                    => 'vod.aliyuncs.com',
            'cn-wulanchabu'               => 'vod.aliyuncs.com',
            'cn-yushanfang'               => 'vod.aliyuncs.com',
            'cn-zhangbei'                 => 'vod.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'vod.aliyuncs.com',
            'cn-zhangjiakou'              => 'vod.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'vod.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'vod.aliyuncs.com',
            'eu-west-1'                   => 'vod.aliyuncs.com',
            'eu-west-1-oxs'               => 'vod.aliyuncs.com',
            'me-east-1'                   => 'vod.aliyuncs.com',
            'rus-west-1-pop'              => 'vod.aliyuncs.com',
            'us-east-1'                   => 'vod.aliyuncs.com',
            'us-west-1'                   => 'vod.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vod', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddAITemplateRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddAITemplateResponse
     */
    public function addAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAITemplateResponse::fromMap($this->doRPCRequest('AddAITemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddAITemplateRequest $request
     *
     * @return AddAITemplateResponse
     */
    public function addAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddCategoryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddCategoryResponse
     */
    public function addCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCategoryResponse::fromMap($this->doRPCRequest('AddCategory', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddCategoryRequest $request
     *
     * @return AddCategoryResponse
     */
    public function addCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCategoryWithOptions($request, $runtime);
    }

    /**
     * @param AddEditingProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddEditingProjectResponse
     */
    public function addEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddEditingProjectResponse::fromMap($this->doRPCRequest('AddEditingProject', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddEditingProjectRequest $request
     *
     * @return AddEditingProjectResponse
     */
    public function addEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param AddTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddTranscodeTemplateGroupResponse
     */
    public function addTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTranscodeTemplateGroupResponse::fromMap($this->doRPCRequest('AddTranscodeTemplateGroup', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddTranscodeTemplateGroupRequest $request
     *
     * @return AddTranscodeTemplateGroupResponse
     */
    public function addTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddVodDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddVodDomainResponse
     */
    public function addVodDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVodDomainResponse::fromMap($this->doRPCRequest('AddVodDomain', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddVodDomainRequest $request
     *
     * @return AddVodDomainResponse
     */
    public function addVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param AddVodTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddVodTemplateResponse
     */
    public function addVodTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVodTemplateResponse::fromMap($this->doRPCRequest('AddVodTemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddVodTemplateRequest $request
     *
     * @return AddVodTemplateResponse
     */
    public function addVodTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddWatermarkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddWatermarkResponse
     */
    public function addWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddWatermarkResponse::fromMap($this->doRPCRequest('AddWatermark', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddWatermarkRequest $request
     *
     * @return AddWatermarkResponse
     */
    public function addWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param AttachAppPolicyToIdentityRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AttachAppPolicyToIdentityResponse
     */
    public function attachAppPolicyToIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachAppPolicyToIdentityResponse::fromMap($this->doRPCRequest('AttachAppPolicyToIdentity', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachAppPolicyToIdentityRequest $request
     *
     * @return AttachAppPolicyToIdentityResponse
     */
    public function attachAppPolicyToIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAppPolicyToIdentityWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetVodDomainConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchSetVodDomainConfigsResponse
     */
    public function batchSetVodDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetVodDomainConfigsResponse::fromMap($this->doRPCRequest('BatchSetVodDomainConfigs', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchSetVodDomainConfigsRequest $request
     *
     * @return BatchSetVodDomainConfigsResponse
     */
    public function batchSetVodDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartVodDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchStartVodDomainResponse
     */
    public function batchStartVodDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStartVodDomainResponse::fromMap($this->doRPCRequest('BatchStartVodDomain', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchStartVodDomainRequest $request
     *
     * @return BatchStartVodDomainResponse
     */
    public function batchStartVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopVodDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchStopVodDomainResponse
     */
    public function batchStopVodDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStopVodDomainResponse::fromMap($this->doRPCRequest('BatchStopVodDomain', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchStopVodDomainRequest $request
     *
     * @return BatchStopVodDomainResponse
     */
    public function batchStopVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param CancelUrlUploadJobsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelUrlUploadJobsResponse
     */
    public function cancelUrlUploadJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelUrlUploadJobsResponse::fromMap($this->doRPCRequest('CancelUrlUploadJobs', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelUrlUploadJobsRequest $request
     *
     * @return CancelUrlUploadJobsResponse
     */
    public function cancelUrlUploadJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUrlUploadJobsWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAppInfoResponse
     */
    public function createAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppInfoResponse::fromMap($this->doRPCRequest('CreateAppInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAppInfoRequest $request
     *
     * @return CreateAppInfoResponse
     */
    public function createAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateAuditRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAuditResponse
     */
    public function createAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAuditResponse::fromMap($this->doRPCRequest('CreateAudit', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAuditRequest $request
     *
     * @return CreateAuditResponse
     */
    public function createAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuditWithOptions($request, $runtime);
    }

    /**
     * @param CreateDetectionTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDetectionTemplateResponse
     */
    public function createDetectionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDetectionTemplateResponse::fromMap($this->doRPCRequest('CreateDetectionTemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDetectionTemplateRequest $request
     *
     * @return CreateDetectionTemplateResponse
     */
    public function createDetectionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDetectionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadAttachedMediaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateUploadAttachedMediaResponse
     */
    public function createUploadAttachedMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUploadAttachedMediaResponse::fromMap($this->doRPCRequest('CreateUploadAttachedMedia', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUploadAttachedMediaRequest $request
     *
     * @return CreateUploadAttachedMediaResponse
     */
    public function createUploadAttachedMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadAttachedMediaWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUploadImageResponse
     */
    public function createUploadImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUploadImageResponse::fromMap($this->doRPCRequest('CreateUploadImage', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUploadImageRequest $request
     *
     * @return CreateUploadImageResponse
     */
    public function createUploadImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadVideoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUploadVideoResponse
     */
    public function createUploadVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUploadVideoResponse::fromMap($this->doRPCRequest('CreateUploadVideo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUploadVideoRequest $request
     *
     * @return CreateUploadVideoResponse
     */
    public function createUploadVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @param CreateVodRealTimeLogDeliveryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateVodRealTimeLogDeliveryResponse
     */
    public function createVodRealTimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return CreateVodRealTimeLogDeliveryResponse::fromMap($this->doRPCRequest('CreateVodRealTimeLogDelivery', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVodRealTimeLogDeliveryRequest $request
     *
     * @return CreateVodRealTimeLogDeliveryResponse
     */
    public function createVodRealTimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVodRealTimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAIImageInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAIImageInfosResponse
     */
    public function deleteAIImageInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAIImageInfosResponse::fromMap($this->doRPCRequest('DeleteAIImageInfos', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAIImageInfosRequest $request
     *
     * @return DeleteAIImageInfosResponse
     */
    public function deleteAIImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAIImageInfosWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAITemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAITemplateResponse
     */
    public function deleteAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAITemplateResponse::fromMap($this->doRPCRequest('DeleteAITemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAITemplateRequest $request
     *
     * @return DeleteAITemplateResponse
     */
    public function deleteAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAppInfoResponse
     */
    public function deleteAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAppInfoResponse::fromMap($this->doRPCRequest('DeleteAppInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAppInfoRequest $request
     *
     * @return DeleteAppInfoResponse
     */
    public function deleteAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAttachedMediaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAttachedMediaResponse
     */
    public function deleteAttachedMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAttachedMediaResponse::fromMap($this->doRPCRequest('DeleteAttachedMedia', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAttachedMediaRequest $request
     *
     * @return DeleteAttachedMediaResponse
     */
    public function deleteAttachedMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAttachedMediaWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCategoryResponse::fromMap($this->doRPCRequest('DeleteCategory', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCategoryRequest $request
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDetectionTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDetectionTemplateResponse
     */
    public function deleteDetectionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDetectionTemplateResponse::fromMap($this->doRPCRequest('DeleteDetectionTemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDetectionTemplateRequest $request
     *
     * @return DeleteDetectionTemplateResponse
     */
    public function deleteDetectionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDetectionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDynamicImageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDynamicImageResponse
     */
    public function deleteDynamicImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDynamicImageResponse::fromMap($this->doRPCRequest('DeleteDynamicImage', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDynamicImageRequest $request
     *
     * @return DeleteDynamicImageResponse
     */
    public function deleteDynamicImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDynamicImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEditingProjectResponse
     */
    public function deleteEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEditingProjectResponse::fromMap($this->doRPCRequest('DeleteEditingProject', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEditingProjectRequest $request
     *
     * @return DeleteEditingProjectResponse
     */
    public function deleteEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageResponse::fromMap($this->doRPCRequest('DeleteImage', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMessageCallbackRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMessageCallbackResponse
     */
    public function deleteMessageCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMessageCallbackResponse::fromMap($this->doRPCRequest('DeleteMessageCallback', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMessageCallbackRequest $request
     *
     * @return DeleteMessageCallbackResponse
     */
    public function deleteMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMezzaninesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMezzaninesResponse
     */
    public function deleteMezzaninesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMezzaninesResponse::fromMap($this->doRPCRequest('DeleteMezzanines', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMezzaninesRequest $request
     *
     * @return DeleteMezzaninesResponse
     */
    public function deleteMezzanines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMezzaninesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMultipartUploadRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMultipartUploadResponse
     */
    public function deleteMultipartUploadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMultipartUploadResponse::fromMap($this->doRPCRequest('DeleteMultipartUpload', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMultipartUploadRequest $request
     *
     * @return DeleteMultipartUploadResponse
     */
    public function deleteMultipartUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMultipartUploadWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStreamRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteStreamResponse
     */
    public function deleteStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteStreamResponse::fromMap($this->doRPCRequest('DeleteStream', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteStreamRequest $request
     *
     * @return DeleteStreamResponse
     */
    public function deleteStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteTranscodeTemplateGroupResponse
     */
    public function deleteTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTranscodeTemplateGroupResponse::fromMap($this->doRPCRequest('DeleteTranscodeTemplateGroup', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTranscodeTemplateGroupRequest $request
     *
     * @return DeleteTranscodeTemplateGroupResponse
     */
    public function deleteTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVideoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteVideoResponse
     */
    public function deleteVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVideoResponse::fromMap($this->doRPCRequest('DeleteVideo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVideoRequest $request
     *
     * @return DeleteVideoResponse
     */
    public function deleteVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVideoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteVodDomainResponse
     */
    public function deleteVodDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVodDomainResponse::fromMap($this->doRPCRequest('DeleteVodDomain', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVodDomainRequest $request
     *
     * @return DeleteVodDomainResponse
     */
    public function deleteVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteVodRealtimeLogDeliveryResponse
     */
    public function deleteVodRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeleteVodRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('DeleteVodRealtimeLogDelivery', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVodRealtimeLogDeliveryRequest $request
     *
     * @return DeleteVodRealtimeLogDeliveryResponse
     */
    public function deleteVodRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodSpecificConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteVodSpecificConfigResponse
     */
    public function deleteVodSpecificConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVodSpecificConfigResponse::fromMap($this->doRPCRequest('DeleteVodSpecificConfig', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVodSpecificConfigRequest $request
     *
     * @return DeleteVodSpecificConfigResponse
     */
    public function deleteVodSpecificConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVodTemplateResponse
     */
    public function deleteVodTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVodTemplateResponse::fromMap($this->doRPCRequest('DeleteVodTemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVodTemplateRequest $request
     *
     * @return DeleteVodTemplateResponse
     */
    public function deleteVodTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWatermarkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWatermarkResponse
     */
    public function deleteWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWatermarkResponse::fromMap($this->doRPCRequest('DeleteWatermark', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteWatermarkRequest $request
     *
     * @return DeleteWatermarkResponse
     */
    public function deleteWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayTopVideosRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePlayTopVideosResponse
     */
    public function describePlayTopVideosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePlayTopVideosResponse::fromMap($this->doRPCRequest('DescribePlayTopVideos', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePlayTopVideosRequest $request
     *
     * @return DescribePlayTopVideosResponse
     */
    public function describePlayTopVideos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayTopVideosWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayUserAvgRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePlayUserAvgResponse
     */
    public function describePlayUserAvgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePlayUserAvgResponse::fromMap($this->doRPCRequest('DescribePlayUserAvg', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePlayUserAvgRequest $request
     *
     * @return DescribePlayUserAvgResponse
     */
    public function describePlayUserAvg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayUserAvgWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayUserTotalRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePlayUserTotalResponse
     */
    public function describePlayUserTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePlayUserTotalResponse::fromMap($this->doRPCRequest('DescribePlayUserTotal', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePlayUserTotalRequest $request
     *
     * @return DescribePlayUserTotalResponse
     */
    public function describePlayUserTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayUserTotalWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayVideoStatisRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePlayVideoStatisResponse
     */
    public function describePlayVideoStatisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePlayVideoStatisResponse::fromMap($this->doRPCRequest('DescribePlayVideoStatis', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePlayVideoStatisRequest $request
     *
     * @return DescribePlayVideoStatisResponse
     */
    public function describePlayVideoStatis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayVideoStatisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodAIDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVodAIDataResponse
     */
    public function describeVodAIDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodAIDataResponse::fromMap($this->doRPCRequest('DescribeVodAIData', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodAIDataRequest $request
     *
     * @return DescribeVodAIDataResponse
     */
    public function describeVodAIData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodAIDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodCertificateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVodCertificateListResponse
     */
    public function describeVodCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodCertificateListResponse::fromMap($this->doRPCRequest('DescribeVodCertificateList', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodCertificateListRequest $request
     *
     * @return DescribeVodCertificateListResponse
     */
    public function describeVodCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainBpsDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodDomainBpsDataResponse
     */
    public function describeVodDomainBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodDomainBpsDataResponse::fromMap($this->doRPCRequest('DescribeVodDomainBpsData', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodDomainBpsDataRequest $request
     *
     * @return DescribeVodDomainBpsDataResponse
     */
    public function describeVodDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainCertificateInfoRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVodDomainCertificateInfoResponse
     */
    public function describeVodDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodDomainCertificateInfoResponse::fromMap($this->doRPCRequest('DescribeVodDomainCertificateInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodDomainCertificateInfoRequest $request
     *
     * @return DescribeVodDomainCertificateInfoResponse
     */
    public function describeVodDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodDomainConfigsResponse
     */
    public function describeVodDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodDomainConfigsResponse::fromMap($this->doRPCRequest('DescribeVodDomainConfigs', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodDomainConfigsRequest $request
     *
     * @return DescribeVodDomainConfigsResponse
     */
    public function describeVodDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVodDomainDetailResponse
     */
    public function describeVodDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodDomainDetailResponse::fromMap($this->doRPCRequest('DescribeVodDomainDetail', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodDomainDetailRequest $request
     *
     * @return DescribeVodDomainDetailResponse
     */
    public function describeVodDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVodDomainLogResponse
     */
    public function describeVodDomainLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodDomainLogResponse::fromMap($this->doRPCRequest('DescribeVodDomainLog', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodDomainLogRequest $request
     *
     * @return DescribeVodDomainLogResponse
     */
    public function describeVodDomainLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeVodDomainRealtimeLogDeliveryResponse
     */
    public function describeVodDomainRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeVodDomainRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('DescribeVodDomainRealtimeLogDelivery', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodDomainRealtimeLogDeliveryRequest $request
     *
     * @return DescribeVodDomainRealtimeLogDeliveryResponse
     */
    public function describeVodDomainRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainTrafficDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVodDomainTrafficDataResponse
     */
    public function describeVodDomainTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodDomainTrafficDataResponse::fromMap($this->doRPCRequest('DescribeVodDomainTrafficData', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodDomainTrafficDataRequest $request
     *
     * @return DescribeVodDomainTrafficDataResponse
     */
    public function describeVodDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainUsageDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVodDomainUsageDataResponse
     */
    public function describeVodDomainUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodDomainUsageDataResponse::fromMap($this->doRPCRequest('DescribeVodDomainUsageData', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodDomainUsageDataRequest $request
     *
     * @return DescribeVodDomainUsageDataResponse
     */
    public function describeVodDomainUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodRefreshQuotaRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVodRefreshQuotaResponse
     */
    public function describeVodRefreshQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodRefreshQuotaResponse::fromMap($this->doRPCRequest('DescribeVodRefreshQuota', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodRefreshQuotaRequest $request
     *
     * @return DescribeVodRefreshQuotaResponse
     */
    public function describeVodRefreshQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodRefreshTasksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVodRefreshTasksResponse
     */
    public function describeVodRefreshTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodRefreshTasksResponse::fromMap($this->doRPCRequest('DescribeVodRefreshTasks', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodRefreshTasksRequest $request
     *
     * @return DescribeVodRefreshTasksResponse
     */
    public function describeVodRefreshTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodStorageDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVodStorageDataResponse
     */
    public function describeVodStorageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodStorageDataResponse::fromMap($this->doRPCRequest('DescribeVodStorageData', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodStorageDataRequest $request
     *
     * @return DescribeVodStorageDataResponse
     */
    public function describeVodStorageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodStorageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodTagResourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVodTagResourcesResponse
     */
    public function describeVodTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodTagResourcesResponse::fromMap($this->doRPCRequest('DescribeVodTagResources', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodTagResourcesRequest $request
     *
     * @return DescribeVodTagResourcesResponse
     */
    public function describeVodTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodTranscodeDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodTranscodeDataResponse
     */
    public function describeVodTranscodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodTranscodeDataResponse::fromMap($this->doRPCRequest('DescribeVodTranscodeData', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodTranscodeDataRequest $request
     *
     * @return DescribeVodTranscodeDataResponse
     */
    public function describeVodTranscodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodTranscodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodUserDomainsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVodUserDomainsResponse
     */
    public function describeVodUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodUserDomainsResponse::fromMap($this->doRPCRequest('DescribeVodUserDomains', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodUserDomainsRequest $request
     *
     * @return DescribeVodUserDomainsResponse
     */
    public function describeVodUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodUserTagsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVodUserTagsResponse
     */
    public function describeVodUserTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodUserTagsResponse::fromMap($this->doRPCRequest('DescribeVodUserTags', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodUserTagsRequest $request
     *
     * @return DescribeVodUserTagsResponse
     */
    public function describeVodUserTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodUserTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodVerifyContentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodVerifyContentResponse
     */
    public function describeVodVerifyContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodVerifyContentResponse::fromMap($this->doRPCRequest('DescribeVodVerifyContent', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodVerifyContentRequest $request
     *
     * @return DescribeVodVerifyContentResponse
     */
    public function describeVodVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodVerifyContentWithOptions($request, $runtime);
    }

    /**
     * @param DetachAppPolicyFromIdentityRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetachAppPolicyFromIdentityResponse
     */
    public function detachAppPolicyFromIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachAppPolicyFromIdentityResponse::fromMap($this->doRPCRequest('DetachAppPolicyFromIdentity', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachAppPolicyFromIdentityRequest $request
     *
     * @return DetachAppPolicyFromIdentityResponse
     */
    public function detachAppPolicyFromIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAppPolicyFromIdentityWithOptions($request, $runtime);
    }

    /**
     * @param DisableVodRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DisableVodRealtimeLogDeliveryResponse
     */
    public function disableVodRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DisableVodRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('DisableVodRealtimeLogDelivery', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableVodRealtimeLogDeliveryRequest $request
     *
     * @return DisableVodRealtimeLogDeliveryResponse
     */
    public function disableVodRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVodRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param EnableVodRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return EnableVodRealtimeLogDeliveryResponse
     */
    public function enableVodRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return EnableVodRealtimeLogDeliveryResponse::fromMap($this->doRPCRequest('EnableVodRealtimeLogDelivery', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableVodRealtimeLogDeliveryRequest $request
     *
     * @return EnableVodRealtimeLogDeliveryResponse
     */
    public function enableVodRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableVodRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param GetAICaptionExtractionJobsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAICaptionExtractionJobsResponse
     */
    public function getAICaptionExtractionJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAICaptionExtractionJobsResponse::fromMap($this->doRPCRequest('GetAICaptionExtractionJobs', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAICaptionExtractionJobsRequest $request
     *
     * @return GetAICaptionExtractionJobsResponse
     */
    public function getAICaptionExtractionJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAICaptionExtractionJobsWithOptions($request, $runtime);
    }

    /**
     * @param GetAIImageJobsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAIImageJobsResponse
     */
    public function getAIImageJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAIImageJobsResponse::fromMap($this->doRPCRequest('GetAIImageJobs', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAIImageJobsRequest $request
     *
     * @return GetAIImageJobsResponse
     */
    public function getAIImageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIImageJobsWithOptions($request, $runtime);
    }

    /**
     * @param GetAIMediaAuditJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAIMediaAuditJobResponse
     */
    public function getAIMediaAuditJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAIMediaAuditJobResponse::fromMap($this->doRPCRequest('GetAIMediaAuditJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAIMediaAuditJobRequest $request
     *
     * @return GetAIMediaAuditJobResponse
     */
    public function getAIMediaAuditJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIMediaAuditJobWithOptions($request, $runtime);
    }

    /**
     * @param GetAITemplateRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAITemplateResponse
     */
    public function getAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAITemplateResponse::fromMap($this->doRPCRequest('GetAITemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAITemplateRequest $request
     *
     * @return GetAITemplateResponse
     */
    public function getAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetAIVideoTagResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAIVideoTagResultResponse
     */
    public function getAIVideoTagResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAIVideoTagResultResponse::fromMap($this->doRPCRequest('GetAIVideoTagResult', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAIVideoTagResultRequest $request
     *
     * @return GetAIVideoTagResultResponse
     */
    public function getAIVideoTagResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIVideoTagResultWithOptions($request, $runtime);
    }

    /**
     * @param GetAppInfosRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAppInfosResponse
     */
    public function getAppInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAppInfosResponse::fromMap($this->doRPCRequest('GetAppInfos', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAppInfosRequest $request
     *
     * @return GetAppInfosResponse
     */
    public function getAppInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInfosWithOptions($request, $runtime);
    }

    /**
     * @param GetAttachedMediaInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAttachedMediaInfoResponse
     */
    public function getAttachedMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAttachedMediaInfoResponse::fromMap($this->doRPCRequest('GetAttachedMediaInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAttachedMediaInfoRequest $request
     *
     * @return GetAttachedMediaInfoResponse
     */
    public function getAttachedMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAttachedMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditHistoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAuditHistoryResponse
     */
    public function getAuditHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuditHistoryResponse::fromMap($this->doRPCRequest('GetAuditHistory', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAuditHistoryRequest $request
     *
     * @return GetAuditHistoryResponse
     */
    public function getAuditHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditHistoryWithOptions($request, $runtime);
    }

    /**
     * @param GetCategoriesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCategoriesResponse
     */
    public function getCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCategoriesResponse::fromMap($this->doRPCRequest('GetCategories', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCategoriesRequest $request
     *
     * @return GetCategoriesResponse
     */
    public function getCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param GetDefaultAITemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDefaultAITemplateResponse
     */
    public function getDefaultAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDefaultAITemplateResponse::fromMap($this->doRPCRequest('GetDefaultAITemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDefaultAITemplateRequest $request
     *
     * @return GetDefaultAITemplateResponse
     */
    public function getDefaultAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectionJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDetectionJobResponse
     */
    public function getDetectionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDetectionJobResponse::fromMap($this->doRPCRequest('GetDetectionJob', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDetectionJobRequest $request
     *
     * @return GetDetectionJobResponse
     */
    public function getDetectionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectionJobWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectionResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDetectionResultResponse
     */
    public function getDetectionResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDetectionResultResponse::fromMap($this->doRPCRequest('GetDetectionResult', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDetectionResultRequest $request
     *
     * @return GetDetectionResultResponse
     */
    public function getDetectionResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectionResultWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectionTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDetectionTemplateResponse
     */
    public function getDetectionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDetectionTemplateResponse::fromMap($this->doRPCRequest('GetDetectionTemplate', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDetectionTemplateRequest $request
     *
     * @return GetDetectionTemplateResponse
     */
    public function getDetectionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEditingProjectResponse::fromMap($this->doRPCRequest('GetEditingProject', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEditingProjectRequest $request
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEditingProjectMaterialsResponse::fromMap($this->doRPCRequest('GetEditingProjectMaterials', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEditingProjectMaterialsRequest $request
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param GetImageInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetImageInfoResponse
     */
    public function getImageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImageInfoResponse::fromMap($this->doRPCRequest('GetImageInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetImageInfoRequest $request
     *
     * @return GetImageInfoResponse
     */
    public function getImageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditAudioResultDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetMediaAuditAudioResultDetailResponse
     */
    public function getMediaAuditAudioResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaAuditAudioResultDetailResponse::fromMap($this->doRPCRequest('GetMediaAuditAudioResultDetail', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaAuditAudioResultDetailRequest $request
     *
     * @return GetMediaAuditAudioResultDetailResponse
     */
    public function getMediaAuditAudioResultDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditAudioResultDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMediaAuditResultResponse
     */
    public function getMediaAuditResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaAuditResultResponse::fromMap($this->doRPCRequest('GetMediaAuditResult', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaAuditResultRequest $request
     *
     * @return GetMediaAuditResultResponse
     */
    public function getMediaAuditResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditResultWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditResultDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetMediaAuditResultDetailResponse
     */
    public function getMediaAuditResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaAuditResultDetailResponse::fromMap($this->doRPCRequest('GetMediaAuditResultDetail', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaAuditResultDetailRequest $request
     *
     * @return GetMediaAuditResultDetailResponse
     */
    public function getMediaAuditResultDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditResultDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditResultTimelineRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetMediaAuditResultTimelineResponse
     */
    public function getMediaAuditResultTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaAuditResultTimelineResponse::fromMap($this->doRPCRequest('GetMediaAuditResultTimeline', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaAuditResultTimelineRequest $request
     *
     * @return GetMediaAuditResultTimelineResponse
     */
    public function getMediaAuditResultTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditResultTimelineWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaDNAResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMediaDNAResultResponse
     */
    public function getMediaDNAResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaDNAResultResponse::fromMap($this->doRPCRequest('GetMediaDNAResult', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaDNAResultRequest $request
     *
     * @return GetMediaDNAResultResponse
     */
    public function getMediaDNAResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaDNAResultWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageCallbackRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMessageCallbackResponse
     */
    public function getMessageCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMessageCallbackResponse::fromMap($this->doRPCRequest('GetMessageCallback', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMessageCallbackRequest $request
     *
     * @return GetMessageCallbackResponse
     */
    public function getMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param GetMezzanineInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMezzanineInfoResponse
     */
    public function getMezzanineInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMezzanineInfoResponse::fromMap($this->doRPCRequest('GetMezzanineInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMezzanineInfoRequest $request
     *
     * @return GetMezzanineInfoResponse
     */
    public function getMezzanineInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMezzanineInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetPlayInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPlayInfoResponse
     */
    public function getPlayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPlayInfoResponse::fromMap($this->doRPCRequest('GetPlayInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPlayInfoRequest $request
     *
     * @return GetPlayInfoResponse
     */
    public function getPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPlayInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeSummaryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetTranscodeSummaryResponse
     */
    public function getTranscodeSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTranscodeSummaryResponse::fromMap($this->doRPCRequest('GetTranscodeSummary', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTranscodeSummaryRequest $request
     *
     * @return GetTranscodeSummaryResponse
     */
    public function getTranscodeSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTranscodeTaskResponse
     */
    public function getTranscodeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTranscodeTaskResponse::fromMap($this->doRPCRequest('GetTranscodeTask', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTranscodeTaskRequest $request
     *
     * @return GetTranscodeTaskResponse
     */
    public function getTranscodeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTranscodeTemplateGroupResponse
     */
    public function getTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTranscodeTemplateGroupResponse::fromMap($this->doRPCRequest('GetTranscodeTemplateGroup', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTranscodeTemplateGroupRequest $request
     *
     * @return GetTranscodeTemplateGroupResponse
     */
    public function getTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetURLUploadInfosRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetURLUploadInfosResponse
     */
    public function getURLUploadInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetURLUploadInfosResponse::fromMap($this->doRPCRequest('GetURLUploadInfos', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetURLUploadInfosRequest $request
     *
     * @return GetURLUploadInfosResponse
     */
    public function getURLUploadInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getURLUploadInfosWithOptions($request, $runtime);
    }

    /**
     * @param GetUploadDetailsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUploadDetailsResponse
     */
    public function getUploadDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUploadDetailsResponse::fromMap($this->doRPCRequest('GetUploadDetails', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUploadDetailsRequest $request
     *
     * @return GetUploadDetailsResponse
     */
    public function getUploadDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetVideoInfoResponse
     */
    public function getVideoInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoInfoResponse::fromMap($this->doRPCRequest('GetVideoInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoInfoRequest $request
     *
     * @return GetVideoInfoResponse
     */
    public function getVideoInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoInfosRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetVideoInfosResponse
     */
    public function getVideoInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoInfosResponse::fromMap($this->doRPCRequest('GetVideoInfos', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoInfosRequest $request
     *
     * @return GetVideoInfosResponse
     */
    public function getVideoInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoInfosWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetVideoListResponse
     */
    public function getVideoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoListResponse::fromMap($this->doRPCRequest('GetVideoList', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoListRequest $request
     *
     * @return GetVideoListResponse
     */
    public function getVideoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoListWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoPlayAuthRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVideoPlayAuthResponse
     */
    public function getVideoPlayAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoPlayAuthResponse::fromMap($this->doRPCRequest('GetVideoPlayAuth', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoPlayAuthRequest $request
     *
     * @return GetVideoPlayAuthResponse
     */
    public function getVideoPlayAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoPlayAuthWithOptions($request, $runtime);
    }

    /**
     * @param GetVodTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetVodTemplateResponse
     */
    public function getVodTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVodTemplateResponse::fromMap($this->doRPCRequest('GetVodTemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVodTemplateRequest $request
     *
     * @return GetVodTemplateResponse
     */
    public function getVodTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetWatermarkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetWatermarkResponse
     */
    public function getWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWatermarkResponse::fromMap($this->doRPCRequest('GetWatermark', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetWatermarkRequest $request
     *
     * @return GetWatermarkResponse
     */
    public function getWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param ListAIImageInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAIImageInfoResponse
     */
    public function listAIImageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAIImageInfoResponse::fromMap($this->doRPCRequest('ListAIImageInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAIImageInfoRequest $request
     *
     * @return ListAIImageInfoResponse
     */
    public function listAIImageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIImageInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListAIJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListAIJobResponse
     */
    public function listAIJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAIJobResponse::fromMap($this->doRPCRequest('ListAIJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAIJobRequest $request
     *
     * @return ListAIJobResponse
     */
    public function listAIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAITemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAITemplateResponse
     */
    public function listAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAITemplateResponse::fromMap($this->doRPCRequest('ListAITemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAITemplateRequest $request
     *
     * @return ListAITemplateResponse
     */
    public function listAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListAppInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListAppInfoResponse
     */
    public function listAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAppInfoResponse::fromMap($this->doRPCRequest('ListAppInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAppInfoRequest $request
     *
     * @return ListAppInfoResponse
     */
    public function listAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListAppPoliciesForIdentityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListAppPoliciesForIdentityResponse
     */
    public function listAppPoliciesForIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAppPoliciesForIdentityResponse::fromMap($this->doRPCRequest('ListAppPoliciesForIdentity', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAppPoliciesForIdentityRequest $request
     *
     * @return ListAppPoliciesForIdentityResponse
     */
    public function listAppPoliciesForIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppPoliciesForIdentityWithOptions($request, $runtime);
    }

    /**
     * @param ListAuditSecurityIpRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAuditSecurityIpResponse
     */
    public function listAuditSecurityIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAuditSecurityIpResponse::fromMap($this->doRPCRequest('ListAuditSecurityIp', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAuditSecurityIpRequest $request
     *
     * @return ListAuditSecurityIpResponse
     */
    public function listAuditSecurityIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * @param ListDetectionJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDetectionJobResponse
     */
    public function listDetectionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListDetectionJobResponse::fromMap($this->doRPCRequest('ListDetectionJob', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDetectionJobRequest $request
     *
     * @return ListDetectionJobResponse
     */
    public function listDetectionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetectionJobWithOptions($request, $runtime);
    }

    /**
     * @param ListDetectionTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDetectionTemplateResponse
     */
    public function listDetectionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListDetectionTemplateResponse::fromMap($this->doRPCRequest('ListDetectionTemplate', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDetectionTemplateRequest $request
     *
     * @return ListDetectionTemplateResponse
     */
    public function listDetectionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetectionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListDynamicImageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDynamicImageResponse
     */
    public function listDynamicImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDynamicImageResponse::fromMap($this->doRPCRequest('ListDynamicImage', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDynamicImageRequest $request
     *
     * @return ListDynamicImageResponse
     */
    public function listDynamicImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicImageWithOptions($request, $runtime);
    }

    /**
     * @param ListLetterSendJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLetterSendJobResponse
     */
    public function listLetterSendJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListLetterSendJobResponse::fromMap($this->doRPCRequest('ListLetterSendJob', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLetterSendJobRequest $request
     *
     * @return ListLetterSendJobResponse
     */
    public function listLetterSendJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLetterSendJobWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRecordVideoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListLiveRecordVideoResponse
     */
    public function listLiveRecordVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLiveRecordVideoResponse::fromMap($this->doRPCRequest('ListLiveRecordVideo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLiveRecordVideoRequest $request
     *
     * @return ListLiveRecordVideoResponse
     */
    public function listLiveRecordVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordVideoWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaDNADeleteJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMediaDNADeleteJobResponse
     */
    public function listMediaDNADeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMediaDNADeleteJobResponse::fromMap($this->doRPCRequest('ListMediaDNADeleteJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMediaDNADeleteJobRequest $request
     *
     * @return ListMediaDNADeleteJobResponse
     */
    public function listMediaDNADeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaDNADeleteJobWithOptions($request, $runtime);
    }

    /**
     * @param ListSnapshotsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSnapshotsResponse::fromMap($this->doRPCRequest('ListSnapshots', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSnapshotsRequest $request
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @param ListTranscodeTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListTranscodeTaskResponse
     */
    public function listTranscodeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTranscodeTaskResponse::fromMap($this->doRPCRequest('ListTranscodeTask', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTranscodeTaskRequest $request
     *
     * @return ListTranscodeTaskResponse
     */
    public function listTranscodeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListTranscodeTemplateGroupResponse
     */
    public function listTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTranscodeTemplateGroupResponse::fromMap($this->doRPCRequest('ListTranscodeTemplateGroup', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTranscodeTemplateGroupRequest $request
     *
     * @return ListTranscodeTemplateGroupResponse
     */
    public function listTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListVodRealtimeLogDeliveryDomainsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListVodRealtimeLogDeliveryDomainsResponse
     */
    public function listVodRealtimeLogDeliveryDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListVodRealtimeLogDeliveryDomainsResponse::fromMap($this->doRPCRequest('ListVodRealtimeLogDeliveryDomains', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVodRealtimeLogDeliveryDomainsRequest $request
     *
     * @return ListVodRealtimeLogDeliveryDomainsResponse
     */
    public function listVodRealtimeLogDeliveryDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodRealtimeLogDeliveryDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListVodRealtimeLogDeliveryInfosRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListVodRealtimeLogDeliveryInfosResponse
     */
    public function listVodRealtimeLogDeliveryInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListVodRealtimeLogDeliveryInfosResponse::fromMap($this->doRPCRequest('ListVodRealtimeLogDeliveryInfos', '2017-03-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVodRealtimeLogDeliveryInfosRequest $request
     *
     * @return ListVodRealtimeLogDeliveryInfosResponse
     */
    public function listVodRealtimeLogDeliveryInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodRealtimeLogDeliveryInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListVodTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListVodTemplateResponse
     */
    public function listVodTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVodTemplateResponse::fromMap($this->doRPCRequest('ListVodTemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVodTemplateRequest $request
     *
     * @return ListVodTemplateResponse
     */
    public function listVodTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListWatermarkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListWatermarkResponse
     */
    public function listWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListWatermarkResponse::fromMap($this->doRPCRequest('ListWatermark', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListWatermarkRequest $request
     *
     * @return ListWatermarkResponse
     */
    public function listWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param MoveAppResourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MoveAppResourceResponse
     */
    public function moveAppResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveAppResourceResponse::fromMap($this->doRPCRequest('MoveAppResource', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MoveAppResourceRequest $request
     *
     * @return MoveAppResourceResponse
     */
    public function moveAppResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveAppResourceWithOptions($request, $runtime);
    }

    /**
     * @param PreloadVodObjectCachesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreloadVodObjectCachesResponse
     */
    public function preloadVodObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PreloadVodObjectCachesResponse::fromMap($this->doRPCRequest('PreloadVodObjectCaches', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PreloadVodObjectCachesRequest $request
     *
     * @return PreloadVodObjectCachesResponse
     */
    public function preloadVodObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param ProduceEditingProjectVideoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ProduceEditingProjectVideoResponse
     */
    public function produceEditingProjectVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ProduceEditingProjectVideoResponse::fromMap($this->doRPCRequest('ProduceEditingProjectVideo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ProduceEditingProjectVideoRequest $request
     *
     * @return ProduceEditingProjectVideoResponse
     */
    public function produceEditingProjectVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->produceEditingProjectVideoWithOptions($request, $runtime);
    }

    /**
     * @param RefreshUploadVideoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RefreshUploadVideoResponse
     */
    public function refreshUploadVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshUploadVideoResponse::fromMap($this->doRPCRequest('RefreshUploadVideo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefreshUploadVideoRequest $request
     *
     * @return RefreshUploadVideoResponse
     */
    public function refreshUploadVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @param RefreshVodObjectCachesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefreshVodObjectCachesResponse
     */
    public function refreshVodObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshVodObjectCachesResponse::fromMap($this->doRPCRequest('RefreshVodObjectCaches', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefreshVodObjectCachesRequest $request
     *
     * @return RefreshVodObjectCachesResponse
     */
    public function refreshVodObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMediaRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RegisterMediaResponse
     */
    public function registerMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterMediaResponse::fromMap($this->doRPCRequest('RegisterMedia', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterMediaRequest $request
     *
     * @return RegisterMediaResponse
     */
    public function registerMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaWithOptions($request, $runtime);
    }

    /**
     * @param SearchEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchEditingProjectResponse::fromMap($this->doRPCRequest('SearchEditingProject', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchEditingProjectRequest $request
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchMediaResponse
     */
    public function searchMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchMediaResponse::fromMap($this->doRPCRequest('SearchMedia', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchMediaRequest $request
     *
     * @return SearchMediaResponse
     */
    public function searchMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWithOptions($request, $runtime);
    }

    /**
     * @param SetAuditSecurityIpRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetAuditSecurityIpResponse
     */
    public function setAuditSecurityIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAuditSecurityIpResponse::fromMap($this->doRPCRequest('SetAuditSecurityIp', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetAuditSecurityIpRequest $request
     *
     * @return SetAuditSecurityIpResponse
     */
    public function setAuditSecurityIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * @param SetCrossdomainContentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetCrossdomainContentResponse
     */
    public function setCrossdomainContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetCrossdomainContentResponse::fromMap($this->doRPCRequest('SetCrossdomainContent', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetCrossdomainContentRequest $request
     *
     * @return SetCrossdomainContentResponse
     */
    public function setCrossdomainContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCrossdomainContentWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultAITemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetDefaultAITemplateResponse
     */
    public function setDefaultAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDefaultAITemplateResponse::fromMap($this->doRPCRequest('SetDefaultAITemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetDefaultAITemplateRequest $request
     *
     * @return SetDefaultAITemplateResponse
     */
    public function setDefaultAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SetDefaultTranscodeTemplateGroupResponse
     */
    public function setDefaultTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDefaultTranscodeTemplateGroupResponse::fromMap($this->doRPCRequest('SetDefaultTranscodeTemplateGroup', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetDefaultTranscodeTemplateGroupRequest $request
     *
     * @return SetDefaultTranscodeTemplateGroupResponse
     */
    public function setDefaultTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultWatermarkRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetDefaultWatermarkResponse
     */
    public function setDefaultWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDefaultWatermarkResponse::fromMap($this->doRPCRequest('SetDefaultWatermark', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetDefaultWatermarkRequest $request
     *
     * @return SetDefaultWatermarkResponse
     */
    public function setDefaultWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param SetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetEditingProjectMaterialsResponse
     */
    public function setEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetEditingProjectMaterialsResponse::fromMap($this->doRPCRequest('SetEditingProjectMaterials', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetEditingProjectMaterialsRequest $request
     *
     * @return SetEditingProjectMaterialsResponse
     */
    public function setEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param SetMessageCallbackRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetMessageCallbackResponse
     */
    public function setMessageCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetMessageCallbackResponse::fromMap($this->doRPCRequest('SetMessageCallback', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetMessageCallbackRequest $request
     *
     * @return SetMessageCallbackResponse
     */
    public function setMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param SetVodDomainCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetVodDomainCertificateResponse
     */
    public function setVodDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetVodDomainCertificateResponse::fromMap($this->doRPCRequest('SetVodDomainCertificate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetVodDomainCertificateRequest $request
     *
     * @return SetVodDomainCertificateResponse
     */
    public function setVodDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVodDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAICaptionExtractionJobRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitAICaptionExtractionJobResponse
     */
    public function submitAICaptionExtractionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAICaptionExtractionJobResponse::fromMap($this->doRPCRequest('SubmitAICaptionExtractionJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAICaptionExtractionJobRequest $request
     *
     * @return SubmitAICaptionExtractionJobResponse
     */
    public function submitAICaptionExtractionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAICaptionExtractionJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIImageAuditJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAIImageAuditJobResponse
     */
    public function submitAIImageAuditJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAIImageAuditJobResponse::fromMap($this->doRPCRequest('SubmitAIImageAuditJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAIImageAuditJobRequest $request
     *
     * @return SubmitAIImageAuditJobResponse
     */
    public function submitAIImageAuditJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAIImageAuditJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIImageJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitAIImageJobResponse
     */
    public function submitAIImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAIImageJobResponse::fromMap($this->doRPCRequest('SubmitAIImageJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAIImageJobRequest $request
     *
     * @return SubmitAIImageJobResponse
     */
    public function submitAIImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAIImageJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SubmitAIJobResponse
     */
    public function submitAIJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAIJobResponse::fromMap($this->doRPCRequest('SubmitAIJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAIJobRequest $request
     *
     * @return SubmitAIJobResponse
     */
    public function submitAIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAIJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIMediaAuditJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAIMediaAuditJobResponse
     */
    public function submitAIMediaAuditJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAIMediaAuditJobResponse::fromMap($this->doRPCRequest('SubmitAIMediaAuditJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAIMediaAuditJobRequest $request
     *
     * @return SubmitAIMediaAuditJobResponse
     */
    public function submitAIMediaAuditJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAIMediaAuditJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDetectionJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitDetectionJobResponse
     */
    public function submitDetectionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitDetectionJobResponse::fromMap($this->doRPCRequest('SubmitDetectionJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitDetectionJobRequest $request
     *
     * @return SubmitDetectionJobResponse
     */
    public function submitDetectionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDetectionJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDynamicImageJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitDynamicImageJobResponse::fromMap($this->doRPCRequest('SubmitDynamicImageJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitDynamicImageJobRequest $request
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicImageJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitLiveEditingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitLiveEditingResponse
     */
    public function submitLiveEditingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitLiveEditingResponse::fromMap($this->doRPCRequest('SubmitLiveEditing', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitLiveEditingRequest $request
     *
     * @return SubmitLiveEditingResponse
     */
    public function submitLiveEditing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveEditingWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaDNADeleteJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitMediaDNADeleteJobResponse
     */
    public function submitMediaDNADeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitMediaDNADeleteJobResponse::fromMap($this->doRPCRequest('SubmitMediaDNADeleteJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitMediaDNADeleteJobRequest $request
     *
     * @return SubmitMediaDNADeleteJobResponse
     */
    public function submitMediaDNADeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaDNADeleteJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitPreprocessJobsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitPreprocessJobsResponse
     */
    public function submitPreprocessJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitPreprocessJobsResponse::fromMap($this->doRPCRequest('SubmitPreprocessJobs', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitPreprocessJobsRequest $request
     *
     * @return SubmitPreprocessJobsResponse
     */
    public function submitPreprocessJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPreprocessJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSnapshotJobResponse::fromMap($this->doRPCRequest('SubmitSnapshotJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTranscodeJobsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitTranscodeJobsResponse
     */
    public function submitTranscodeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitTranscodeJobsResponse::fromMap($this->doRPCRequest('SubmitTranscodeJobs', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitTranscodeJobsRequest $request
     *
     * @return SubmitTranscodeJobsResponse
     */
    public function submitTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitWorkflowJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitWorkflowJobResponse
     */
    public function submitWorkflowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitWorkflowJobResponse::fromMap($this->doRPCRequest('SubmitWorkflowJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitWorkflowJobRequest $request
     *
     * @return SubmitWorkflowJobResponse
     */
    public function submitWorkflowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitWorkflowJobWithOptions($request, $runtime);
    }

    /**
     * @param TagVodResourcesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TagVodResourcesResponse
     */
    public function tagVodResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagVodResourcesResponse::fromMap($this->doRPCRequest('TagVodResources', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagVodResourcesRequest $request
     *
     * @return TagVodResourcesResponse
     */
    public function tagVodResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagVodResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UnTagVodResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnTagVodResourcesResponse
     */
    public function unTagVodResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnTagVodResourcesResponse::fromMap($this->doRPCRequest('UnTagVodResources', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnTagVodResourcesRequest $request
     *
     * @return UnTagVodResourcesResponse
     */
    public function unTagVodResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagVodResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAITemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAITemplateResponse
     */
    public function updateAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAITemplateResponse::fromMap($this->doRPCRequest('UpdateAITemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAITemplateRequest $request
     *
     * @return UpdateAITemplateResponse
     */
    public function updateAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAppInfoResponse
     */
    public function updateAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppInfoResponse::fromMap($this->doRPCRequest('UpdateAppInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppInfoRequest $request
     *
     * @return UpdateAppInfoResponse
     */
    public function updateAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAttachedMediaInfosRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAttachedMediaInfosResponse
     */
    public function updateAttachedMediaInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAttachedMediaInfosResponse::fromMap($this->doRPCRequest('UpdateAttachedMediaInfos', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAttachedMediaInfosRequest $request
     *
     * @return UpdateAttachedMediaInfosResponse
     */
    public function updateAttachedMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAttachedMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCategoryResponse::fromMap($this->doRPCRequest('UpdateCategory', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCategoryRequest $request
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDetectionJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDetectionJobResponse
     */
    public function updateDetectionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDetectionJobResponse::fromMap($this->doRPCRequest('UpdateDetectionJob', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDetectionJobRequest $request
     *
     * @return UpdateDetectionJobResponse
     */
    public function updateDetectionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDetectionJobWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDetectionTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDetectionTemplateResponse
     */
    public function updateDetectionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDetectionTemplateResponse::fromMap($this->doRPCRequest('UpdateDetectionTemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDetectionTemplateRequest $request
     *
     * @return UpdateDetectionTemplateResponse
     */
    public function updateDetectionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDetectionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEditingProjectResponse::fromMap($this->doRPCRequest('UpdateEditingProject', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEditingProjectRequest $request
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateImageInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateImageInfosResponse
     */
    public function updateImageInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateImageInfosResponse::fromMap($this->doRPCRequest('UpdateImageInfos', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateImageInfosRequest $request
     *
     * @return UpdateImageInfosResponse
     */
    public function updateImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageInfosWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateTranscodeTemplateGroupResponse
     */
    public function updateTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTranscodeTemplateGroupResponse::fromMap($this->doRPCRequest('UpdateTranscodeTemplateGroup', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTranscodeTemplateGroupRequest $request
     *
     * @return UpdateTranscodeTemplateGroupResponse
     */
    public function updateTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVideoInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateVideoInfoResponse
     */
    public function updateVideoInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVideoInfoResponse::fromMap($this->doRPCRequest('UpdateVideoInfo', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateVideoInfoRequest $request
     *
     * @return UpdateVideoInfoResponse
     */
    public function updateVideoInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVideoInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVideoInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateVideoInfosResponse
     */
    public function updateVideoInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVideoInfosResponse::fromMap($this->doRPCRequest('UpdateVideoInfos', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateVideoInfosRequest $request
     *
     * @return UpdateVideoInfosResponse
     */
    public function updateVideoInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVideoInfosWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVodDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateVodDomainResponse
     */
    public function updateVodDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVodDomainResponse::fromMap($this->doRPCRequest('UpdateVodDomain', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateVodDomainRequest $request
     *
     * @return UpdateVodDomainResponse
     */
    public function updateVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVodTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateVodTemplateResponse
     */
    public function updateVodTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVodTemplateResponse::fromMap($this->doRPCRequest('UpdateVodTemplate', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateVodTemplateRequest $request
     *
     * @return UpdateVodTemplateResponse
     */
    public function updateVodTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWatermarkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWatermarkResponse
     */
    public function updateWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateWatermarkResponse::fromMap($this->doRPCRequest('UpdateWatermark', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateWatermarkRequest $request
     *
     * @return UpdateWatermarkResponse
     */
    public function updateWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param UploadMediaByURLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadMediaByURLResponse::fromMap($this->doRPCRequest('UploadMediaByURL', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadMediaByURLRequest $request
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMediaByURLWithOptions($request, $runtime);
    }

    /**
     * @param UploadStreamByURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadStreamByURLResponse
     */
    public function uploadStreamByURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadStreamByURLResponse::fromMap($this->doRPCRequest('UploadStreamByURL', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadStreamByURLRequest $request
     *
     * @return UploadStreamByURLResponse
     */
    public function uploadStreamByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadStreamByURLWithOptions($request, $runtime);
    }

    /**
     * @param VerifyVodDomainOwnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyVodDomainOwnerResponse
     */
    public function verifyVodDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyVodDomainOwnerResponse::fromMap($this->doRPCRequest('VerifyVodDomainOwner', '2017-03-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param VerifyVodDomainOwnerRequest $request
     *
     * @return VerifyVodDomainOwnerResponse
     */
    public function verifyVodDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyVodDomainOwnerWithOptions($request, $runtime);
    }
}
