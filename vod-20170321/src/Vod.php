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
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcBpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcBpsDataResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDynamicImageRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDynamicImageResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageAuditJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIMediaAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIMediaAuditJobResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateStreamInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateStreamInfoResponse;
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
use Darabonba\OpenApi\Models\Params;
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
        $query                   = [];
        $query['TemplateConfig'] = $request->templateConfig;
        $query['TemplateName']   = $request->templateName;
        $query['TemplateType']   = $request->templateType;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['CateName'] = $request->cateName;
        $query['ParentId'] = $request->parentId;
        $query['Type']     = $request->type;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddCategory',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['CoverURL']             = $request->coverURL;
        $query['Description']          = $request->description;
        $query['Division']             = $request->division;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Timeline']             = $request->timeline;
        $query['Title']                = $request->title;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                             = [];
        $query['AppId']                    = $request->appId;
        $query['Name']                     = $request->name;
        $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        $query['TranscodeTemplateList']    = $request->transcodeTemplateList;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                   = [];
        $query['CheckUrl']       = $request->checkUrl;
        $query['DomainName']     = $request->domainName;
        $query['OwnerAccount']   = $request->ownerAccount;
        $query['OwnerId']        = $request->ownerId;
        $query['Scope']          = $request->scope;
        $query['SecurityToken']  = $request->securityToken;
        $query['Sources']        = $request->sources;
        $query['TopLevelDomain'] = $request->topLevelDomain;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                   = [];
        $query['AppId']          = $request->appId;
        $query['Name']           = $request->name;
        $query['TemplateConfig'] = $request->templateConfig;
        $query['TemplateType']   = $request->templateType;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['AppId']           = $request->appId;
        $query['FileUrl']         = $request->fileUrl;
        $query['Name']            = $request->name;
        $query['Type']            = $request->type;
        $query['WatermarkConfig'] = $request->watermarkConfig;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AppId']        = $request->appId;
        $query['IdentityName'] = $request->identityName;
        $query['IdentityType'] = $request->identityType;
        $query['PolicyNames']  = $request->policyNames;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AttachAppPolicyToIdentity',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AttachAppPolicyToIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['DomainNames']   = $request->domainNames;
        $query['Functions']     = $request->functions;
        $query['OwnerAccount']  = $request->ownerAccount;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchSetVodDomainConfigs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchSetVodDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['DomainNames']   = $request->domainNames;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchStartVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchStartVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['DomainNames']   = $request->domainNames;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchStopVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchStopVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['JobIds']     = $request->jobIds;
        $query['UploadUrls'] = $request->uploadUrls;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CancelUrlUploadJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelUrlUploadJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['AppName']     = $request->appName;
        $query['Description'] = $request->description;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateAppInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AuditContent'] = $request->auditContent;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateAudit',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateUploadAttachedMediaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateUploadAttachedMediaResponse
     */
    public function createUploadAttachedMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AppId']           = $request->appId;
        $query['BusinessType']    = $request->businessType;
        $query['CateIds']         = $request->cateIds;
        $query['Description']     = $request->description;
        $query['FileName']        = $request->fileName;
        $query['FileSize']        = $request->fileSize;
        $query['MediaExt']        = $request->mediaExt;
        $query['StorageLocation'] = $request->storageLocation;
        $query['Tags']            = $request->tags;
        $query['Title']           = $request->title;
        $query['UserData']        = $request->userData;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadAttachedMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUploadAttachedMediaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['AppId']           = $request->appId;
        $query['CateId']          = $request->cateId;
        $query['Description']     = $request->description;
        $query['ImageExt']        = $request->imageExt;
        $query['ImageType']       = $request->imageType;
        $query['StorageLocation'] = $request->storageLocation;
        $query['Tags']            = $request->tags;
        $query['Title']           = $request->title;
        $query['UserData']        = $request->userData;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadImage',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUploadImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['AppId']           = $request->appId;
        $query['CateId']          = $request->cateId;
        $query['CoverURL']        = $request->coverURL;
        $query['Description']     = $request->description;
        $query['FileName']        = $request->fileName;
        $query['FileSize']        = $request->fileSize;
        $query['StorageLocation'] = $request->storageLocation;
        $query['Tags']            = $request->tags;
        $query['TemplateGroupId'] = $request->templateGroupId;
        $query['Title']           = $request->title;
        $query['UserData']        = $request->userData;
        $query['WorkflowId']      = $request->workflowId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUploadVideoResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVodRealTimeLogDelivery',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateVodRealTimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                   = [];
        $query['AIImageInfoIds'] = $request->AIImageInfoIds;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAIImageInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAIImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['TemplateId'] = $request->templateId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query          = [];
        $query['AppId'] = $request->appId;
        $req            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['MediaIds'] = $request->mediaIds;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAttachedMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAttachedMediaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query           = [];
        $query['CateId'] = $request->cateId;
        $req             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteCategory',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteDynamicImageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDynamicImageResponse
     */
    public function deleteDynamicImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['DynamicImageIds'] = $request->dynamicImageIds;
        $query['VideoId']         = $request->videoId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDynamicImage',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDynamicImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ProjectIds']           = $request->projectIds;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['DeleteImageType'] = $request->deleteImageType;
        $query['ImageIds']        = $request->imageIds;
        $query['ImageType']       = $request->imageType;
        $query['ImageURLs']       = $request->imageURLs;
        $query['VideoId']         = $request->videoId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AppId']        = $request->appId;
        $query['OwnerAccount'] = $request->ownerAccount;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteMessageCallback',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['Force']    = $request->force;
        $query['VideoIds'] = $request->videoIds;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteMezzanines',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMezzaninesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['MediaId']      = $request->mediaId;
        $query['MediaType']    = $request->mediaType;
        $query['OwnerAccount'] = $request->ownerAccount;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteMultipartUpload',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMultipartUploadResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query            = [];
        $query['JobIds']  = $request->jobIds;
        $query['VideoId'] = $request->videoId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteStream',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteStreamResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                             = [];
        $query['ForceDelGroup']            = $request->forceDelGroup;
        $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        $query['TranscodeTemplateIds']     = $request->transcodeTemplateIds;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['VideoIds'] = $request->videoIds;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVideoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerAccount']  = $request->ownerAccount;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVodRealtimeLogDelivery',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVodRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['ConfigId']      = $request->configId;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteVodSpecificConfig',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVodSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['VodTemplateId'] = $request->vodTemplateId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['WatermarkId'] = $request->watermarkId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['BizDate']  = $request->bizDate;
        $query['OwnerId']  = $request->ownerId;
        $query['PageNo']   = $request->pageNo;
        $query['PageSize'] = $request->pageSize;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayTopVideos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePlayTopVideosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayUserAvg',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePlayUserAvgResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayUserTotal',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePlayUserTotalResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['StartTime'] = $request->startTime;
        $query['VideoId']   = $request->videoId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayVideoStatis',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePlayVideoStatisResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query              = [];
        $query['AIType']    = $request->AIType;
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['Region']    = $request->region;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodAIData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodAIDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodCertificateList',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainBpsData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainCertificateInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['FunctionNames'] = $request->functionNames;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainConfigs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainDetail',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainLog',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainRealtimeLogDelivery',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeVodDomainSrcBpsDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVodDomainSrcBpsDataResponse
     */
    public function describeVodDomainSrcBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Interval']   = $request->interval;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainSrcBpsData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVodDomainSrcBpsDataRequest $request
     *
     * @return DescribeVodDomainSrcBpsDataResponse
     */
    public function describeVodDomainSrcBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainSrcBpsDataWithOptions($request, $runtime);
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainTrafficData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['Area']       = $request->area;
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Field']      = $request->field;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $query['Type']       = $request->type;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodDomainUsageData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodRefreshQuota',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodRefreshQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['EndTime']       = $request->endTime;
        $query['ObjectPath']    = $request->objectPath;
        $query['ObjectType']    = $request->objectType;
        $query['OwnerId']       = $request->ownerId;
        $query['PageNumber']    = $request->pageNumber;
        $query['PageSize']      = $request->pageSize;
        $query['SecurityToken'] = $request->securityToken;
        $query['StartTime']     = $request->startTime;
        $query['Status']        = $request->status;
        $query['TaskId']        = $request->taskId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodRefreshTasks',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodRefreshTasksResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['EndTime']     = $request->endTime;
        $query['OwnerId']     = $request->ownerId;
        $query['Region']      = $request->region;
        $query['StartTime']   = $request->startTime;
        $query['Storage']     = $request->storage;
        $query['StorageType'] = $request->storageType;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodStorageData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodStorageDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['OwnerId']      = $request->ownerId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodTagResources',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['EndTime']       = $request->endTime;
        $query['Interval']      = $request->interval;
        $query['OwnerId']       = $request->ownerId;
        $query['Region']        = $request->region;
        $query['Specification'] = $request->specification;
        $query['StartTime']     = $request->startTime;
        $query['Storage']       = $request->storage;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodTranscodeData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodTranscodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                     = [];
        $query['DomainName']       = $request->domainName;
        $query['DomainSearchType'] = $request->domainSearchType;
        $query['DomainStatus']     = $request->domainStatus;
        $query['OwnerId']          = $request->ownerId;
        $query['PageNumber']       = $request->pageNumber;
        $query['PageSize']         = $request->pageSize;
        $query['SecurityToken']    = $request->securityToken;
        $query['Tag']              = $request->tag;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodUserDomains',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodUserTags',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodUserTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodVerifyContent',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeVodVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AppId']        = $request->appId;
        $query['IdentityName'] = $request->identityName;
        $query['IdentityType'] = $request->identityType;
        $query['PolicyNames']  = $request->policyNames;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetachAppPolicyFromIdentity',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetachAppPolicyFromIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableVodRealtimeLogDelivery',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableVodRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableVodRealtimeLogDelivery',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableVodRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetAIImageJobsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAIImageJobsResponse
     */
    public function getAIImageJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['JobIds']               = $request->jobIds;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAIImageJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAIImageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query          = [];
        $query['JobId'] = $request->jobId;
        $req            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAIMediaAuditJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAIMediaAuditJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['TemplateId'] = $request->templateId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['MediaId']              = $request->mediaId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAIVideoTagResult',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAIVideoTagResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query           = [];
        $query['AppIds'] = $request->appIds;
        $req             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAppInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppInfosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['AuthTimeout'] = $request->authTimeout;
        $query['MediaIds']    = $request->mediaIds;
        $query['OutputType']  = $request->outputType;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAttachedMediaInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAttachedMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['PageNo']   = $request->pageNo;
        $query['PageSize'] = $request->pageSize;
        $query['SortBy']   = $request->sortBy;
        $query['VideoId']  = $request->videoId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAuditHistory',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAuditHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['CateId']   = $request->cateId;
        $query['PageNo']   = $request->pageNo;
        $query['PageSize'] = $request->pageSize;
        $query['SortBy']   = $request->sortBy;
        $query['Type']     = $request->type;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetCategories',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['TemplateType'] = $request->templateType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetDefaultAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDefaultAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetEditingProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ProjectId']            = $request->projectId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['MaterialType']         = $request->materialType;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ProjectId']            = $request->projectId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Type']                 = $request->type;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetEditingProjectMaterials',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['AuthTimeout'] = $request->authTimeout;
        $query['ImageId']     = $request->imageId;
        $query['OutputType']  = $request->outputType;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetImageInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['MediaId']              = $request->mediaId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['PageNo']               = $request->pageNo;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditAudioResultDetail',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMediaAuditAudioResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query            = [];
        $query['MediaId'] = $request->mediaId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditResult',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMediaAuditResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query            = [];
        $query['MediaId'] = $request->mediaId;
        $query['PageNo']  = $request->pageNo;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditResultDetail',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMediaAuditResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query            = [];
        $query['MediaId'] = $request->mediaId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditResultTimeline',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMediaAuditResultTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['MediaId']              = $request->mediaId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMediaDNAResult',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMediaDNAResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AppId']        = $request->appId;
        $query['OwnerAccount'] = $request->ownerAccount;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMessageCallback',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AdditionType'] = $request->additionType;
        $query['AuthTimeout']  = $request->authTimeout;
        $query['OutputType']   = $request->outputType;
        $query['VideoId']      = $request->videoId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMezzanineInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMezzanineInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AdditionType'] = $request->additionType;
        $query['AuthTimeout']  = $request->authTimeout;
        $query['Definition']   = $request->definition;
        $query['Formats']      = $request->formats;
        $query['OutputType']   = $request->outputType;
        $query['PlayConfig']   = $request->playConfig;
        $query['ReAuthInfo']   = $request->reAuthInfo;
        $query['ResultType']   = $request->resultType;
        $query['StreamType']   = $request->streamType;
        $query['VideoId']      = $request->videoId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetPlayInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['VideoIds'] = $request->videoIds;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetTranscodeSummary',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTranscodeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['TranscodeTaskId'] = $request->transcodeTaskId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetTranscodeTask',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTranscodeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                             = [];
        $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['JobIds']     = $request->jobIds;
        $query['UploadURLs'] = $request->uploadURLs;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetURLUploadInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetURLUploadInfosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query              = [];
        $query['MediaIds']  = $request->mediaIds;
        $query['MediaType'] = $request->mediaType;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetUploadDetails',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUploadDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query            = [];
        $query['VideoId'] = $request->videoId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetVideoInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVideoInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['VideoIds'] = $request->videoIds;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetVideoInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVideoInfosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['CateId']          = $request->cateId;
        $query['EndTime']         = $request->endTime;
        $query['PageNo']          = $request->pageNo;
        $query['PageSize']        = $request->pageSize;
        $query['SortBy']          = $request->sortBy;
        $query['StartTime']       = $request->startTime;
        $query['Status']          = $request->status;
        $query['StorageLocation'] = $request->storageLocation;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetVideoList',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVideoListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['ApiVersion']      = $request->apiVersion;
        $query['AuthInfoTimeout'] = $request->authInfoTimeout;
        $query['VideoId']         = $request->videoId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetVideoPlayAuth',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVideoPlayAuthResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['VodTemplateId'] = $request->vodTemplateId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['WatermarkId'] = $request->watermarkId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query            = [];
        $query['VideoId'] = $request->videoId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAIImageInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAIImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['JobIds']               = $request->jobIds;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAIJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAIJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['TemplateType'] = $request->templateType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['PageNo']   = $request->pageNo;
        $query['PageSize'] = $request->pageSize;
        $query['Status']   = $request->status;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAppInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AppId']        = $request->appId;
        $query['IdentityName'] = $request->identityName;
        $query['IdentityType'] = $request->identityType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAppPoliciesForIdentity',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppPoliciesForIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                      = [];
        $query['SecurityGroupName'] = $request->securityGroupName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAuditSecurityIp',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAuditSecurityIpResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListDynamicImageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDynamicImageResponse
     */
    public function listDynamicImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['VideoId'] = $request->videoId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListDynamicImage',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDynamicImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListLiveRecordVideoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListLiveRecordVideoResponse
     */
    public function listLiveRecordVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['AppName']    = $request->appName;
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['PageNo']     = $request->pageNo;
        $query['PageSize']   = $request->pageSize;
        $query['SortBy']     = $request->sortBy;
        $query['StartTime']  = $request->startTime;
        $query['StreamName'] = $request->streamName;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRecordVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLiveRecordVideoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['JobIds']               = $request->jobIds;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListMediaDNADeleteJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMediaDNADeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AuthTimeout']  = $request->authTimeout;
        $query['PageNo']       = $request->pageNo;
        $query['PageSize']     = $request->pageSize;
        $query['SnapshotType'] = $request->snapshotType;
        $query['VideoId']      = $request->videoId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListSnapshots',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['PageNo']    = $request->pageNo;
        $query['PageSize']  = $request->pageSize;
        $query['StartTime'] = $request->startTime;
        $query['VideoId']   = $request->videoId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListTranscodeTask',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTranscodeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query          = [];
        $query['AppId'] = $request->appId;
        $req            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVodRealtimeLogDeliveryDomains',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVodRealtimeLogDeliveryDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVodRealtimeLogDeliveryInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVodRealtimeLogDeliveryInfosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['AppId']        = $request->appId;
        $query['TemplateType'] = $request->templateType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query          = [];
        $query['AppId'] = $request->appId;
        $req            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['ResourceIds']  = $request->resourceIds;
        $query['ResourceType'] = $request->resourceType;
        $query['TargetAppId']  = $request->targetAppId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'MoveAppResource',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MoveAppResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['ObjectPath']    = $request->objectPath;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PreloadVodObjectCaches',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PreloadVodObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['CoverURL']             = $request->coverURL;
        $query['Description']          = $request->description;
        $query['MediaMetadata']        = $request->mediaMetadata;
        $query['OwnerId']              = $request->ownerId;
        $query['ProduceConfig']        = $request->produceConfig;
        $query['ProjectId']            = $request->projectId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Timeline']             = $request->timeline;
        $query['Title']                = $request->title;
        $query['UserData']             = $request->userData;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ProduceEditingProjectVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ProduceEditingProjectVideoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['VideoId']              = $request->videoId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RefreshUploadVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshUploadVideoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['ObjectPath']    = $request->objectPath;
        $query['ObjectType']    = $request->objectType;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RefreshVodObjectCaches',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshVodObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                      = [];
        $query['RegisterMetadatas'] = $request->registerMetadatas;
        $query['TemplateGroupId']   = $request->templateGroupId;
        $query['UserData']          = $request->userData;
        $query['WorkflowId']        = $request->workflowId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RegisterMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RegisterMediaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['EndTime']              = $request->endTime;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['PageNo']               = $request->pageNo;
        $query['PageSize']             = $request->pageSize;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SortBy']               = $request->sortBy;
        $query['StartTime']            = $request->startTime;
        $query['Status']               = $request->status;
        $query['Title']                = $request->title;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SearchEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['Fields']      = $request->fields;
        $query['Match']       = $request->match;
        $query['PageNo']      = $request->pageNo;
        $query['PageSize']    = $request->pageSize;
        $query['ScrollToken'] = $request->scrollToken;
        $query['SearchType']  = $request->searchType;
        $query['SortBy']      = $request->sortBy;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SearchMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchMediaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                      = [];
        $query['Ips']               = $request->ips;
        $query['OperateMode']       = $request->operateMode;
        $query['SecurityGroupName'] = $request->securityGroupName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetAuditSecurityIp',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetAuditSecurityIpResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['Content']              = $request->content;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ResourceRealOwnerId']  = $request->resourceRealOwnerId;
        $query['StorageLocation']      = $request->storageLocation;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetCrossdomainContent',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetCrossdomainContentResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['TemplateId'] = $request->templateId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetDefaultAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                             = [];
        $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetDefaultTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['WatermarkId'] = $request->watermarkId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetDefaultWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['MaterialIds']          = $request->materialIds;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ProjectId']            = $request->projectId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetEditingProjectMaterials',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['AppId']         = $request->appId;
        $query['AuthKey']       = $request->authKey;
        $query['AuthSwitch']    = $request->authSwitch;
        $query['CallbackType']  = $request->callbackType;
        $query['CallbackURL']   = $request->callbackURL;
        $query['EventTypeList'] = $request->eventTypeList;
        $query['MnsEndpoint']   = $request->mnsEndpoint;
        $query['MnsQueueName']  = $request->mnsQueueName;
        $query['OwnerAccount']  = $request->ownerAccount;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetMessageCallback',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['CertName']      = $request->certName;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SSLPri']        = $request->SSLPri;
        $query['SSLProtocol']   = $request->SSLProtocol;
        $query['SSLPub']        = $request->SSLPub;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetVodDomainCertificate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetVodDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitAIImageAuditJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAIImageAuditJobResponse
     */
    public function submitAIImageAuditJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['MediaAuditConfiguration'] = $request->mediaAuditConfiguration;
        $query['MediaId']                 = $request->mediaId;
        $query['OwnerAccount']            = $request->ownerAccount;
        $query['OwnerId']                 = $request->ownerId;
        $query['ResourceOwnerAccount']    = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']         = $request->resourceOwnerId;
        $query['TemplateId']              = $request->templateId;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitAIImageAuditJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitAIImageAuditJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['AIPipelineId']         = $request->AIPipelineId;
        $query['AITemplateId']         = $request->AITemplateId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['UserData']             = $request->userData;
        $query['VideoId']              = $request->videoId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitAIImageJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitAIImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['Config']               = $request->config;
        $query['MediaId']              = $request->mediaId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Types']                = $request->types;
        $query['UserData']             = $request->userData;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitAIJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitAIJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                            = [];
        $query['MediaAuditConfiguration'] = $request->mediaAuditConfiguration;
        $query['MediaId']                 = $request->mediaId;
        $query['MediaType']               = $request->mediaType;
        $query['TemplateId']              = $request->templateId;
        $query['UserData']                = $request->userData;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitAIMediaAuditJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitAIMediaAuditJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitDynamicImageJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['DynamicImageTemplateId'] = $request->dynamicImageTemplateId;
        $query['OverrideParams']         = $request->overrideParams;
        $query['VideoId']                = $request->videoId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitDynamicImageJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['AppName']              = $request->appName;
        $query['Clips']                = $request->clips;
        $query['CoverURL']             = $request->coverURL;
        $query['Description']          = $request->description;
        $query['DomainName']           = $request->domainName;
        $query['MediaMetadata']        = $request->mediaMetadata;
        $query['OwnerId']              = $request->ownerId;
        $query['ProduceConfig']        = $request->produceConfig;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['StreamName']           = $request->streamName;
        $query['Title']                = $request->title;
        $query['UserData']             = $request->userData;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveEditing',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitLiveEditingResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['MediaId']              = $request->mediaId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaDNADeleteJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaDNADeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                   = [];
        $query['PreprocessType'] = $request->preprocessType;
        $query['VideoId']        = $request->videoId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitPreprocessJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitPreprocessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['Count']                = $request->count;
        $query['Height']               = $request->height;
        $query['Interval']             = $request->interval;
        $query['SnapshotTemplateId']   = $request->snapshotTemplateId;
        $query['SpecifiedOffsetTime']  = $request->specifiedOffsetTime;
        $query['SpriteSnapshotConfig'] = $request->spriteSnapshotConfig;
        $query['UserData']             = $request->userData;
        $query['VideoId']              = $request->videoId;
        $query['Width']                = $request->width;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitSnapshotJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['EncryptConfig']   = $request->encryptConfig;
        $query['OverrideParams']  = $request->overrideParams;
        $query['PipelineId']      = $request->pipelineId;
        $query['Priority']        = $request->priority;
        $query['TemplateGroupId'] = $request->templateGroupId;
        $query['UserData']        = $request->userData;
        $query['VideoId']         = $request->videoId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitTranscodeJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['MediaId']    = $request->mediaId;
        $query['WorkflowId'] = $request->workflowId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitWorkflowJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitWorkflowJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['OwnerId']      = $request->ownerId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TagVodResources',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TagVodResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                 = [];
        $query['All']          = $request->all;
        $query['OwnerId']      = $request->ownerId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['TagKey']       = $request->tagKey;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UnTagVodResources',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnTagVodResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                   = [];
        $query['TemplateConfig'] = $request->templateConfig;
        $query['TemplateId']     = $request->templateId;
        $query['TemplateName']   = $request->templateName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['AppId']       = $request->appId;
        $query['AppName']     = $request->appName;
        $query['Description'] = $request->description;
        $query['Status']      = $request->status;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['UpdateContent'] = $request->updateContent;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateAttachedMediaInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAttachedMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query             = [];
        $query['CateId']   = $request->cateId;
        $query['CateName'] = $request->cateName;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateCategory',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['CoverURL']             = $request->coverURL;
        $query['Description']          = $request->description;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ProjectId']            = $request->projectId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Timeline']             = $request->timeline;
        $query['Title']                = $request->title;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['UpdateContent'] = $request->updateContent;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateImageInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateStreamInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateStreamInfoResponse
     */
    public function updateStreamInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['JobId']   = $request->jobId;
        $query['MediaId'] = $request->mediaId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateStreamInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateStreamInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStreamInfoRequest $request
     *
     * @return UpdateStreamInfoResponse
     */
    public function updateStreamInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStreamInfoWithOptions($request, $runtime);
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
        $query                             = [];
        $query['Locked']                   = $request->locked;
        $query['Name']                     = $request->name;
        $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        $query['TranscodeTemplateList']    = $request->transcodeTemplateList;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                = [];
        $query['CateId']      = $request->cateId;
        $query['CoverURL']    = $request->coverURL;
        $query['Description'] = $request->description;
        $query['Tags']        = $request->tags;
        $query['Title']       = $request->title;
        $query['VideoId']     = $request->videoId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateVideoInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateVideoInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['UpdateContent'] = $request->updateContent;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateVideoInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateVideoInfosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['OwnerId']        = $request->ownerId;
        $query['SecurityToken']  = $request->securityToken;
        $query['Sources']        = $request->sources;
        $query['TopLevelDomain'] = $request->topLevelDomain;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                   = [];
        $query['Name']           = $request->name;
        $query['TemplateConfig'] = $request->templateConfig;
        $query['VodTemplateId']  = $request->vodTemplateId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['Name']            = $request->name;
        $query['WatermarkConfig'] = $request->watermarkConfig;
        $query['WatermarkId']     = $request->watermarkId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['AppId']           = $request->appId;
        $query['StorageLocation'] = $request->storageLocation;
        $query['TemplateGroupId'] = $request->templateGroupId;
        $query['UploadMetadatas'] = $request->uploadMetadatas;
        $query['UploadURLs']      = $request->uploadURLs;
        $query['UserData']        = $request->userData;
        $query['WorkflowId']      = $request->workflowId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UploadMediaByURL',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UploadMediaByURLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                  = [];
        $query['Definition']    = $request->definition;
        $query['FileExtension'] = $request->fileExtension;
        $query['HDRType']       = $request->HDRType;
        $query['MediaId']       = $request->mediaId;
        $query['StreamURL']     = $request->streamURL;
        $query['UserData']      = $request->userData;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UploadStreamByURL',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UploadStreamByURLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['OwnerId']    = $request->ownerId;
        $query['VerifyType'] = $request->verifyType;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'VerifyVodDomainOwner',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VerifyVodDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
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
