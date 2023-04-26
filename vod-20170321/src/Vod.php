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
use AlibabaCloud\SDK\Vod\V20170321\Models\DecryptKMSDataKeyRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DecryptKMSDataKeyResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcBpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcBpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcTrafficDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcTrafficDataResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodVerifyContentRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodVerifyContentResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DetachAppPolicyFromIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DetachAppPolicyFromIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GenerateKMSDataKeyRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GenerateKMSDataKeyResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaRefreshJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaRefreshJobsResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshMediaPlayUrlsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshMediaPlayUrlsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshUploadVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshUploadVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshVodObjectCachesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshVodObjectCachesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RestoreMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RestoreMediaResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponse;
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
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
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
     * The type of the AI template. Valid values:
     *   * *   **AIMediaAudit**: automated review
     *   * *   **AIImage**: smart thumbnail.
     *   *
     * @param AddAITemplateRequest $request AddAITemplateRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAITemplateResponse AddAITemplateResponse
     */
    public function addAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateConfig)) {
            $query['TemplateConfig'] = $request->templateConfig;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of the AI template. Valid values:
     *   * *   **AIMediaAudit**: automated review
     *   * *   **AIImage**: smart thumbnail.
     *   *
     * @param AddAITemplateRequest $request AddAITemplateRequest
     *
     * @return AddAITemplateResponse AddAITemplateResponse
     */
    public function addAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAITemplateWithOptions($request, $runtime);
    }

    /**
     * The level of the category. A value of **0** indicates a level 1 category.
     *   *
     * @param AddCategoryRequest $request AddCategoryRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCategoryResponse AddCategoryResponse
     */
    public function addCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateName)) {
            $query['CateName'] = $request->cateName;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCategory',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The level of the category. A value of **0** indicates a level 1 category.
     *   *
     * @param AddCategoryRequest $request AddCategoryRequest
     *
     * @return AddCategoryResponse AddCategoryResponse
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
        $query = [];
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->division)) {
            $query['Division'] = $request->division;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->timeline)) {
            $query['Timeline'] = $request->timeline;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The ID of the transcoding template group.
     *   *
     * @param AddTranscodeTemplateGroupRequest $request AddTranscodeTemplateGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTranscodeTemplateGroupResponse AddTranscodeTemplateGroupResponse
     */
    public function addTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->transcodeTemplateGroupId)) {
            $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }
        if (!Utils::isUnset($request->transcodeTemplateList)) {
            $query['TranscodeTemplateList'] = $request->transcodeTemplateList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the transcoding template group.
     *   *
     * @param AddTranscodeTemplateGroupRequest $request AddTranscodeTemplateGroupRequest
     *
     * @return AddTranscodeTemplateGroupResponse AddTranscodeTemplateGroupResponse
     */
    public function addTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param AddVodDomainRequest $request AddVodDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddVodDomainResponse AddVodDomainResponse
     */
    public function addVodDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkUrl)) {
            $query['CheckUrl'] = $request->checkUrl;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param AddVodDomainRequest $request AddVodDomainRequest
     *
     * @return AddVodDomainResponse AddVodDomainResponse
     */
    public function addVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVodDomainWithOptions($request, $runtime);
    }

    /**
     * The type of the template. Set the value to **Snapshot**.
     *   *
     * @param AddVodTemplateRequest $request AddVodTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddVodTemplateResponse AddVodTemplateResponse
     */
    public function addVodTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateConfig)) {
            $query['TemplateConfig'] = $request->templateConfig;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of the template. Set the value to **Snapshot**.
     *   *
     * @param AddVodTemplateRequest $request AddVodTemplateRequest
     *
     * @return AddVodTemplateResponse AddVodTemplateResponse
     */
    public function addVodTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVodTemplateWithOptions($request, $runtime);
    }

    /**
     * The name of the watermark. Only letters and digits are supported.
     *   * *   The name can be up to 128 bytes in length.
     *   * *   The value must be encoded in UTF-8.
     *   *
     * @param AddWatermarkRequest $request AddWatermarkRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddWatermarkResponse AddWatermarkResponse
     */
    public function addWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->watermarkConfig)) {
            $query['WatermarkConfig'] = $request->watermarkConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the watermark. Only letters and digits are supported.
     *   * *   The name can be up to 128 bytes in length.
     *   * *   The value must be encoded in UTF-8.
     *   *
     * @param AddWatermarkRequest $request AddWatermarkRequest
     *
     * @return AddWatermarkResponse AddWatermarkResponse
     */
    public function addWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWatermarkWithOptions($request, $runtime);
    }

    /**
     * The name of the policy that was not found.
     *   *
     * @param AttachAppPolicyToIdentityRequest $request AttachAppPolicyToIdentityRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachAppPolicyToIdentityResponse AttachAppPolicyToIdentityResponse
     */
    public function attachAppPolicyToIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->identityName)) {
            $query['IdentityName'] = $request->identityName;
        }
        if (!Utils::isUnset($request->identityType)) {
            $query['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->policyNames)) {
            $query['PolicyNames'] = $request->policyNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachAppPolicyToIdentity',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachAppPolicyToIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the policy that was not found.
     *   *
     * @param AttachAppPolicyToIdentityRequest $request AttachAppPolicyToIdentityRequest
     *
     * @return AttachAppPolicyToIdentityResponse AttachAppPolicyToIdentityResponse
     */
    public function attachAppPolicyToIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAppPolicyToIdentityWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param BatchSetVodDomainConfigsRequest $request BatchSetVodDomainConfigsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetVodDomainConfigsResponse BatchSetVodDomainConfigsResponse
     */
    public function batchSetVodDomainConfigsWithOptions($request, $runtime)
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
            'action'      => 'BatchSetVodDomainConfigs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetVodDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param BatchSetVodDomainConfigsRequest $request BatchSetVodDomainConfigsRequest
     *
     * @return BatchSetVodDomainConfigsResponse BatchSetVodDomainConfigsResponse
     */
    public function batchSetVodDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to **BatchStartVodDomain**.
     *   *
     * @param BatchStartVodDomainRequest $request BatchStartVodDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStartVodDomainResponse BatchStartVodDomainResponse
     */
    public function batchStartVodDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
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
            'action'      => 'BatchStartVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStartVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to **BatchStartVodDomain**.
     *   *
     * @param BatchStartVodDomainRequest $request BatchStartVodDomainRequest
     *
     * @return BatchStartVodDomainResponse BatchStartVodDomainResponse
     */
    public function batchStartVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartVodDomainWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to **BatchStopVodDomain**.
     *   *
     * @param BatchStopVodDomainRequest $request BatchStopVodDomainRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStopVodDomainResponse BatchStopVodDomainResponse
     */
    public function batchStopVodDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
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
            'action'      => 'BatchStopVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStopVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to **BatchStopVodDomain**.
     *   *
     * @param BatchStopVodDomainRequest $request BatchStopVodDomainRequest
     *
     * @return BatchStopVodDomainResponse BatchStopVodDomainResponse
     */
    public function batchStopVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopVodDomainWithOptions($request, $runtime);
    }

    /**
     * The upload URLs of source files. Separate multiple URLs with commas (,). You can specify a maximum of 10 URLs.
     *   * > *   You must encode the URLs before you use the URLs.
     *   * > *   You must set one of the JobIds and the UploadUrls parameters. If you set both the JobIds and UploadUrls parameters, only the value of the JobIds parameter takes effect.
     *   *
     * @param CancelUrlUploadJobsRequest $request CancelUrlUploadJobsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelUrlUploadJobsResponse CancelUrlUploadJobsResponse
     */
    public function cancelUrlUploadJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->uploadUrls)) {
            $query['UploadUrls'] = $request->uploadUrls;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelUrlUploadJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelUrlUploadJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The upload URLs of source files. Separate multiple URLs with commas (,). You can specify a maximum of 10 URLs.
     *   * > *   You must encode the URLs before you use the URLs.
     *   * > *   You must set one of the JobIds and the UploadUrls parameters. If you set both the JobIds and UploadUrls parameters, only the value of the JobIds parameter takes effect.
     *   *
     * @param CancelUrlUploadJobsRequest $request CancelUrlUploadJobsRequest
     *
     * @return CancelUrlUploadJobsResponse CancelUrlUploadJobsResponse
     */
    public function cancelUrlUploadJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUrlUploadJobsWithOptions($request, $runtime);
    }

    /**
     * The description of the application.
     *   * - The description can contain up to 512 characters in length.
     *   * - The description can contain only UTF-8 characters.
     *   *
     * @param CreateAppInfoRequest $request CreateAppInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppInfoResponse CreateAppInfoResponse
     */
    public function createAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The description of the application.
     *   * - The description can contain up to 512 characters in length.
     *   * - The description can contain only UTF-8 characters.
     *   *
     * @param CreateAppInfoRequest $request CreateAppInfoRequest
     *
     * @return CreateAppInfoResponse CreateAppInfoResponse
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
        $query = [];
        if (!Utils::isUnset($request->auditContent)) {
            $query['AuditContent'] = $request->auditContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAudit',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The type of the media asset. Valid values:
     *   * *   **watermark**
     *   * *   **subtitle**
     *   * *   **material**.
     *   *
     * @param CreateUploadAttachedMediaRequest $request CreateUploadAttachedMediaRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadAttachedMediaResponse CreateUploadAttachedMediaResponse
     */
    public function createUploadAttachedMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->cateIds)) {
            $query['CateIds'] = $request->cateIds;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $query['FileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->mediaExt)) {
            $query['MediaExt'] = $request->mediaExt;
        }
        if (!Utils::isUnset($request->storageLocation)) {
            $query['StorageLocation'] = $request->storageLocation;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadAttachedMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadAttachedMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of the media asset. Valid values:
     *   * *   **watermark**
     *   * *   **subtitle**
     *   * *   **material**.
     *   *
     * @param CreateUploadAttachedMediaRequest $request CreateUploadAttachedMediaRequest
     *
     * @return CreateUploadAttachedMediaResponse CreateUploadAttachedMediaResponse
     */
    public function createUploadAttachedMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadAttachedMediaWithOptions($request, $runtime);
    }

    /**
     * The custom configurations. For example, you can specify callback configurations and upload acceleration configurations. The value is a JSON string. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952~~) topic.
     *   * > *   The callback configurations take effect only after you specify the HTTP callback URL and select specific callback events in the ApsaraVideo VOD console. For more information about how to configure HTTP callback settings in the ApsaraVideo VOD console, see [Configure callback settings](~~86071~~).
     *   * > *   To use the upload acceleration feature, submit a [ticket](https://ticket-intl.console.aliyun.com/#/ticket/createIndex) to enable this feature. For more information, see [Overview](~~55396~~).
     *   *
     * @param CreateUploadImageRequest $request CreateUploadImageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadImageResponse CreateUploadImageResponse
     */
    public function createUploadImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageExt)) {
            $query['ImageExt'] = $request->imageExt;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->originalFileName)) {
            $query['OriginalFileName'] = $request->originalFileName;
        }
        if (!Utils::isUnset($request->storageLocation)) {
            $query['StorageLocation'] = $request->storageLocation;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadImage',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The custom configurations. For example, you can specify callback configurations and upload acceleration configurations. The value is a JSON string. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952~~) topic.
     *   * > *   The callback configurations take effect only after you specify the HTTP callback URL and select specific callback events in the ApsaraVideo VOD console. For more information about how to configure HTTP callback settings in the ApsaraVideo VOD console, see [Configure callback settings](~~86071~~).
     *   * > *   To use the upload acceleration feature, submit a [ticket](https://ticket-intl.console.aliyun.com/#/ticket/createIndex) to enable this feature. For more information, see [Overview](~~55396~~).
     *   *
     * @param CreateUploadImageRequest $request CreateUploadImageRequest
     *
     * @return CreateUploadImageResponse CreateUploadImageResponse
     */
    public function createUploadImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadImageWithOptions($request, $runtime);
    }

    /**
     * Obtains the upload URLs and credentials for media files and creates media assets in ApsaraVideo VOD.
     *   *
     * @param CreateUploadVideoRequest $request CreateUploadVideoRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadVideoResponse CreateUploadVideoResponse
     */
    public function createUploadVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $query['FileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->storageLocation)) {
            $query['StorageLocation'] = $request->storageLocation;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->templateGroupId)) {
            $query['TemplateGroupId'] = $request->templateGroupId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the upload URLs and credentials for media files and creates media assets in ApsaraVideo VOD.
     *   *
     * @param CreateUploadVideoRequest $request CreateUploadVideoRequest
     *
     * @return CreateUploadVideoResponse CreateUploadVideoResponse
     */
    public function createUploadVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @param DecryptKMSDataKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cipherText)) {
            $query['CipherText'] = $request->cipherText;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DecryptKMSDataKey',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DecryptKMSDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DecryptKMSDataKeyRequest $request
     *
     * @return DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptKMSDataKeyWithOptions($request, $runtime);
    }

    /**
     * This operation deletes only information about images that are submitted for AI processing. The image files are not deleted.
     *   * - The smart thumbnail feature is not supported. You cannot call this operation.
     *   * - This operation deletes only information about images that are submitted for AI processing. The image files are not deleted.
     *   * ### QPS limit
     *   * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VoD](~~342790~~).
     *   *
     * @param DeleteAIImageInfosRequest $request DeleteAIImageInfosRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAIImageInfosResponse DeleteAIImageInfosResponse
     */
    public function deleteAIImageInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AIImageInfoIds)) {
            $query['AIImageInfoIds'] = $request->AIImageInfoIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAIImageInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAIImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation deletes only information about images that are submitted for AI processing. The image files are not deleted.
     *   * - The smart thumbnail feature is not supported. You cannot call this operation.
     *   * - This operation deletes only information about images that are submitted for AI processing. The image files are not deleted.
     *   * ### QPS limit
     *   * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VoD](~~342790~~).
     *   *
     * @param DeleteAIImageInfosRequest $request DeleteAIImageInfosRequest
     *
     * @return DeleteAIImageInfosResponse DeleteAIImageInfosResponse
     */
    public function deleteAIImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAIImageInfosWithOptions($request, $runtime);
    }

    /**
     * The ID of the AI template. You can use one of the following methods to obtain the ID of the AI template:
     *   * *   Call the [AddAITemplate](~~102930~~) operation to add an AI template if no AI template exists. The value of TemplateId from the response is the ID of the AI template.
     *   * *   Call the [ListAITemplate](~~102936~~) operation if the template already exists. The value of TemplateId from the response is the ID of the AI template.
     *   *
     * @param DeleteAITemplateRequest $request DeleteAITemplateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAITemplateResponse DeleteAITemplateResponse
     */
    public function deleteAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the AI template. You can use one of the following methods to obtain the ID of the AI template:
     *   * *   Call the [AddAITemplate](~~102930~~) operation to add an AI template if no AI template exists. The value of TemplateId from the response is the ID of the AI template.
     *   * *   Call the [ListAITemplate](~~102936~~) operation if the template already exists. The value of TemplateId from the response is the ID of the AI template.
     *   *
     * @param DeleteAITemplateRequest $request DeleteAITemplateRequest
     *
     * @return DeleteAITemplateResponse DeleteAITemplateResponse
     */
    public function deleteAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAITemplateWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteAppInfoRequest $request DeleteAppInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppInfoResponse DeleteAppInfoResponse
     */
    public function deleteAppInfoWithOptions($request, $runtime)
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
            'action'      => 'DeleteAppInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteAppInfoRequest $request DeleteAppInfoRequest
     *
     * @return DeleteAppInfoResponse DeleteAppInfoResponse
     */
    public function deleteAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInfoWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteAttachedMediaRequest $request DeleteAttachedMediaRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAttachedMediaResponse DeleteAttachedMediaResponse
     */
    public function deleteAttachedMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAttachedMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAttachedMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteAttachedMediaRequest $request DeleteAttachedMediaRequest
     *
     * @return DeleteAttachedMediaResponse DeleteAttachedMediaResponse
     */
    public function deleteAttachedMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAttachedMediaWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteCategoryRequest $request DeleteCategoryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCategoryResponse DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCategory',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteCategoryRequest $request DeleteCategoryRequest
     *
     * @return DeleteCategoryResponse DeleteCategoryResponse
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
        $query = [];
        if (!Utils::isUnset($request->dynamicImageIds)) {
            $query['DynamicImageIds'] = $request->dynamicImageIds;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDynamicImage',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->projectIds)) {
            $query['ProjectIds'] = $request->projectIds;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The URL of the image.
     *   * *   This parameter only takes effect when the **DeleteImageType** parameter is set to **ImageURL**. In this case, you must set this parameter.
     *   * *   Encode multiple image URLs and separate them with commas (,).
     *   * *   The use of special characters in image URLs may lead to the failure to delete the images. To prevent such failure, you must encode the image URLs before you concatenate them into a string with commas (,).
     *   *
     * @param DeleteImageRequest $request DeleteImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteImageResponse DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteImageType)) {
            $query['DeleteImageType'] = $request->deleteImageType;
        }
        if (!Utils::isUnset($request->imageIds)) {
            $query['ImageIds'] = $request->imageIds;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->imageURLs)) {
            $query['ImageURLs'] = $request->imageURLs;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The URL of the image.
     *   * *   This parameter only takes effect when the **DeleteImageType** parameter is set to **ImageURL**. In this case, you must set this parameter.
     *   * *   Encode multiple image URLs and separate them with commas (,).
     *   * *   The use of special characters in image URLs may lead to the failure to delete the images. To prevent such failure, you must encode the image URLs before you concatenate them into a string with commas (,).
     *   *
     * @param DeleteImageRequest $request DeleteImageRequest
     *
     * @return DeleteImageResponse DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to **DeleteMessageCallback**.
     *   *
     * @param DeleteMessageCallbackRequest $request DeleteMessageCallbackRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMessageCallbackResponse DeleteMessageCallbackResponse
     */
    public function deleteMessageCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMessageCallback',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to **DeleteMessageCallback**.
     *   *
     * @param DeleteMessageCallbackRequest $request DeleteMessageCallbackRequest
     *
     * @return DeleteMessageCallbackResponse DeleteMessageCallbackResponse
     */
    public function deleteMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * The IDs of the videos that do not exist.
     *   *
     * @param DeleteMezzaninesRequest $request DeleteMezzaninesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMezzaninesResponse DeleteMezzaninesResponse
     */
    public function deleteMezzaninesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->videoIds)) {
            $query['VideoIds'] = $request->videoIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMezzanines',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMezzaninesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The IDs of the videos that do not exist.
     *   *
     * @param DeleteMezzaninesRequest $request DeleteMezzaninesRequest
     *
     * @return DeleteMezzaninesResponse DeleteMezzaninesResponse
     */
    public function deleteMezzanines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMezzaninesWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteMultipartUploadRequest $request DeleteMultipartUploadRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMultipartUploadResponse DeleteMultipartUploadResponse
     */
    public function deleteMultipartUploadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMultipartUpload',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMultipartUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteMultipartUploadRequest $request DeleteMultipartUploadRequest
     *
     * @return DeleteMultipartUploadResponse DeleteMultipartUploadResponse
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
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStream',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * Specifies whether to forcibly delete the entire transcoding template group. Valid values:
     *   * *   **true**: deletes the entire transcoding template group and its transcoding templates.
     *   * *   **false**: removes the specified transcoding templates from the transcoding template group. This is the default value.
     *   *
     * @param DeleteTranscodeTemplateGroupRequest $request DeleteTranscodeTemplateGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTranscodeTemplateGroupResponse DeleteTranscodeTemplateGroupResponse
     */
    public function deleteTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceDelGroup)) {
            $query['ForceDelGroup'] = $request->forceDelGroup;
        }
        if (!Utils::isUnset($request->transcodeTemplateGroupId)) {
            $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }
        if (!Utils::isUnset($request->transcodeTemplateIds)) {
            $query['TranscodeTemplateIds'] = $request->transcodeTemplateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies whether to forcibly delete the entire transcoding template group. Valid values:
     *   * *   **true**: deletes the entire transcoding template group and its transcoding templates.
     *   * *   **false**: removes the specified transcoding templates from the transcoding template group. This is the default value.
     *   *
     * @param DeleteTranscodeTemplateGroupRequest $request DeleteTranscodeTemplateGroupRequest
     *
     * @return DeleteTranscodeTemplateGroupResponse DeleteTranscodeTemplateGroupResponse
     */
    public function deleteTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * The list of video IDs. Separate multiple IDs with commas (,). A maximum of 20 IDs can be specified. You can obtain a video ID in one of the following ways:
     *   * *   If the video is uploaded by using the [ApsaraVideo VOD console](https://vod.console.aliyun.com), log on to the console and choose **Media Files** > **Audio/Video** to view the ID of the video.
     *   * *   If the video is uploaded by calling the [CreateUploadVideo](~~55407~~) operation, the video ID is the VideoId value in the response.
     *   * *   You can also call the [SearchMedia](~~86044~~) operation to obtain the video ID, which is the VideoId value in the response.
     *   *
     * @param DeleteVideoRequest $request DeleteVideoRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVideoResponse DeleteVideoResponse
     */
    public function deleteVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->videoIds)) {
            $query['VideoIds'] = $request->videoIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The list of video IDs. Separate multiple IDs with commas (,). A maximum of 20 IDs can be specified. You can obtain a video ID in one of the following ways:
     *   * *   If the video is uploaded by using the [ApsaraVideo VOD console](https://vod.console.aliyun.com), log on to the console and choose **Media Files** > **Audio/Video** to view the ID of the video.
     *   * *   If the video is uploaded by calling the [CreateUploadVideo](~~55407~~) operation, the video ID is the VideoId value in the response.
     *   * *   You can also call the [SearchMedia](~~86044~~) operation to obtain the video ID, which is the VideoId value in the response.
     *   *
     * @param DeleteVideoRequest $request DeleteVideoRequest
     *
     * @return DeleteVideoResponse DeleteVideoResponse
     */
    public function deleteVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVideoWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteVodDomainRequest $request DeleteVodDomainRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVodDomainResponse DeleteVodDomainResponse
     */
    public function deleteVodDomainWithOptions($request, $runtime)
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
            'action'      => 'DeleteVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteVodDomainRequest $request DeleteVodDomainRequest
     *
     * @return DeleteVodDomainResponse DeleteVodDomainResponse
     */
    public function deleteVodDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodDomainWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteVodSpecificConfigRequest $request DeleteVodSpecificConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVodSpecificConfigResponse DeleteVodSpecificConfigResponse
     */
    public function deleteVodSpecificConfigWithOptions($request, $runtime)
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
            'action'      => 'DeleteVodSpecificConfig',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVodSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteVodSpecificConfigRequest $request DeleteVodSpecificConfigRequest
     *
     * @return DeleteVodSpecificConfigResponse DeleteVodSpecificConfigResponse
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
        $query = [];
        if (!Utils::isUnset($request->vodTemplateId)) {
            $query['VodTemplateId'] = $request->vodTemplateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The ID of the request.
     *   *
     * @param DeleteWatermarkRequest $request DeleteWatermarkRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWatermarkResponse DeleteWatermarkResponse
     */
    public function deleteWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->watermarkId)) {
            $query['WatermarkId'] = $request->watermarkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteWatermarkRequest $request DeleteWatermarkRequest
     *
     * @return DeleteWatermarkResponse DeleteWatermarkResponse
     */
    public function deleteWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWatermarkWithOptions($request, $runtime);
    }

    /**
     * The number of entries to return on each page. Default value: **100**. Maximum value: **1000**.
     *   *
     * @param DescribePlayTopVideosRequest $request DescribePlayTopVideosRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlayTopVideosResponse DescribePlayTopVideosResponse
     */
    public function describePlayTopVideosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizDate)) {
            $query['BizDate'] = $request->bizDate;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayTopVideos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayTopVideosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of entries to return on each page. Default value: **100**. Maximum value: **1000**.
     *   *
     * @param DescribePlayTopVideosRequest $request DescribePlayTopVideosRequest
     *
     * @return DescribePlayTopVideosResponse DescribePlayTopVideosResponse
     */
    public function describePlayTopVideos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayTopVideosWithOptions($request, $runtime);
    }

    /**
     * The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *   *
     * @param DescribePlayUserAvgRequest $request DescribePlayUserAvgRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlayUserAvgResponse DescribePlayUserAvgResponse
     */
    public function describePlayUserAvgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribePlayUserAvg',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayUserAvgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *   *
     * @param DescribePlayUserAvgRequest $request DescribePlayUserAvgRequest
     *
     * @return DescribePlayUserAvgResponse DescribePlayUserAvgResponse
     */
    public function describePlayUserAvg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayUserAvgWithOptions($request, $runtime);
    }

    /**
     * The total number of unique visitors who use ApsaraVideo Player SDK for Flash.
     *   *
     * @param DescribePlayUserTotalRequest $request DescribePlayUserTotalRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlayUserTotalResponse DescribePlayUserTotalResponse
     */
    public function describePlayUserTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribePlayUserTotal',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayUserTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The total number of unique visitors who use ApsaraVideo Player SDK for Flash.
     *   *
     * @param DescribePlayUserTotalRequest $request DescribePlayUserTotalRequest
     *
     * @return DescribePlayUserTotalResponse DescribePlayUserTotalResponse
     */
    public function describePlayUserTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayUserTotalWithOptions($request, $runtime);
    }

    /**
     * The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *   *
     * @param DescribePlayVideoStatisRequest $request DescribePlayVideoStatisRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlayVideoStatisResponse DescribePlayVideoStatisResponse
     */
    public function describePlayVideoStatisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayVideoStatis',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayVideoStatisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *   *
     * @param DescribePlayVideoStatisRequest $request DescribePlayVideoStatisRequest
     *
     * @return DescribePlayVideoStatisResponse DescribePlayVideoStatisResponse
     */
    public function describePlayVideoStatis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayVideoStatisWithOptions($request, $runtime);
    }

    /**
     * > *   This operation is available only in the **China (Shanghai)** region.
     *   * >*   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *   *
     * @param DescribeVodAIDataRequest $request DescribeVodAIDataRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodAIDataResponse DescribeVodAIDataResponse
     */
    public function describeVodAIDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AIType)) {
            $query['AIType'] = $request->AIType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodAIData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodAIDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > *   This operation is available only in the **China (Shanghai)** region.
     *   * >*   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *   *
     * @param DescribeVodAIDataRequest $request DescribeVodAIDataRequest
     *
     * @return DescribeVodAIDataResponse DescribeVodAIDataResponse
     */
    public function describeVodAIData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodAIDataWithOptions($request, $runtime);
    }

    /**
     * The domain name for CDN.
     *   *
     * @param DescribeVodCertificateListRequest $request DescribeVodCertificateListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodCertificateListResponse DescribeVodCertificateListResponse
     */
    public function describeVodCertificateListWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodCertificateList',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The domain name for CDN.
     *   *
     * @param DescribeVodCertificateListRequest $request DescribeVodCertificateListRequest
     *
     * @return DescribeVodCertificateListResponse DescribeVodCertificateListResponse
     */
    public function describeVodCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodCertificateListWithOptions($request, $runtime);
    }

    /**
     * The domain name for CDN.
     *   *
     * @param DescribeVodDomainBpsDataRequest $request DescribeVodDomainBpsDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodDomainBpsDataResponse DescribeVodDomainBpsDataResponse
     */
    public function describeVodDomainBpsDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodDomainBpsData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The domain name for CDN.
     *   *
     * @param DescribeVodDomainBpsDataRequest $request DescribeVodDomainBpsDataRequest
     *
     * @return DescribeVodDomainBpsDataResponse DescribeVodDomainBpsDataResponse
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
            'action'      => 'DescribeVodDomainCertificateInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The name of the function.
     *   *
     * @param DescribeVodDomainConfigsRequest $request DescribeVodDomainConfigsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodDomainConfigsResponse DescribeVodDomainConfigsResponse
     */
    public function describeVodDomainConfigsWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodDomainConfigs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the function.
     *   *
     * @param DescribeVodDomainConfigsRequest $request DescribeVodDomainConfigsRequest
     *
     * @return DescribeVodDomainConfigsResponse DescribeVodDomainConfigsResponse
     */
    public function describeVodDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * The description of the domain name for CDN.
     *   *
     * @param DescribeVodDomainDetailRequest $request DescribeVodDomainDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodDomainDetailResponse DescribeVodDomainDetailResponse
     */
    public function describeVodDomainDetailWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodDomainDetail',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The description of the domain name for CDN.
     *   *
     * @param DescribeVodDomainDetailRequest $request DescribeVodDomainDetailRequest
     *
     * @return DescribeVodDomainDetailResponse DescribeVodDomainDetailResponse
     */
    public function describeVodDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainDetailWithOptions($request, $runtime);
    }

    /**
     * The total number of entries returned on the current page.
     *   *
     * @param DescribeVodDomainLogRequest $request DescribeVodDomainLogRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodDomainLogResponse DescribeVodDomainLogResponse
     */
    public function describeVodDomainLogWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodDomainLog',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The total number of entries returned on the current page.
     *   *
     * @param DescribeVodDomainLogRequest $request DescribeVodDomainLogRequest
     *
     * @return DescribeVodDomainLogResponse DescribeVodDomainLogResponse
     */
    public function describeVodDomainLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainLogWithOptions($request, $runtime);
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
            'action'      => 'DescribeVodDomainSrcBpsData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param DescribeVodDomainSrcTrafficDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVodDomainSrcTrafficDataResponse
     */
    public function describeVodDomainSrcTrafficDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodDomainSrcTrafficData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVodDomainSrcTrafficDataRequest $request
     *
     * @return DescribeVodDomainSrcTrafficDataResponse
     */
    public function describeVodDomainSrcTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * *   This operation is available only in the **China (Shanghai)** region.
     *   * *   You can specify multiple accelerated domain names in a request.
     *   * *   If you do not specify the StartTime or EndTime parameter, data of the last 24 hours is returned. You can specify the StartTime and EndTime parameters to query data that is generated in the specified time range. You can query data of the last 90 days.
     *   * ### QPS limit
     *   * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit on API operations](~~342790~~).
     *   *
     * @param DescribeVodDomainTrafficDataRequest $request DescribeVodDomainTrafficDataRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodDomainTrafficDataResponse DescribeVodDomainTrafficDataResponse
     */
    public function describeVodDomainTrafficDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodDomainTrafficData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is available only in the **China (Shanghai)** region.
     *   * *   You can specify multiple accelerated domain names in a request.
     *   * *   If you do not specify the StartTime or EndTime parameter, data of the last 24 hours is returned. You can specify the StartTime and EndTime parameters to query data that is generated in the specified time range. You can query data of the last 90 days.
     *   * ### QPS limit
     *   * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit on API operations](~~342790~~).
     *   *
     * @param DescribeVodDomainTrafficDataRequest $request DescribeVodDomainTrafficDataRequest
     *
     * @return DescribeVodDomainTrafficDataResponse DescribeVodDomainTrafficDataResponse
     */
    public function describeVodDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   This operation is available only in the **China (Shanghai)** region.
     *   * *   You can specify up to 100 accelerated domain names in a request. Separate multiple domain names with commas (,). If you do not specify an accelerated domain name, the data of all accelerated domain names within your Alibaba Cloud account is returned.
     *   * *   You can query data in the last year. The maximum time range that can be queried is three months. If you specify a time range of one to three days, the system returns data on an hourly basis. If you specify a time range of four days or more, the system returns data on a daily basis.
     *   *
     * @param DescribeVodDomainUsageDataRequest $request DescribeVodDomainUsageDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodDomainUsageDataResponse DescribeVodDomainUsageDataResponse
     */
    public function describeVodDomainUsageDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodDomainUsageData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodDomainUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   This operation is available only in the **China (Shanghai)** region.
     *   * *   You can specify up to 100 accelerated domain names in a request. Separate multiple domain names with commas (,). If you do not specify an accelerated domain name, the data of all accelerated domain names within your Alibaba Cloud account is returned.
     *   * *   You can query data in the last year. The maximum time range that can be queried is three months. If you specify a time range of one to three days, the system returns data on an hourly basis. If you specify a time range of four days or more, the system returns data on a daily basis.
     *   *
     * @param DescribeVodDomainUsageDataRequest $request DescribeVodDomainUsageDataRequest
     *
     * @return DescribeVodDomainUsageDataResponse DescribeVodDomainUsageDataResponse
     */
    public function describeVodDomainUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * The maximum number of URLs of files that can be refreshed each day.
     *   *
     * @param DescribeVodRefreshQuotaRequest $request DescribeVodRefreshQuotaRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodRefreshQuotaResponse DescribeVodRefreshQuotaResponse
     */
    public function describeVodRefreshQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeVodRefreshQuota',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodRefreshQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The maximum number of URLs of files that can be refreshed each day.
     *   *
     * @param DescribeVodRefreshQuotaRequest $request DescribeVodRefreshQuotaRequest
     *
     * @return DescribeVodRefreshQuotaResponse DescribeVodRefreshQuotaResponse
     */
    public function describeVodRefreshQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * > *   This operation is available only in the **China (Shanghai)** region.
     *   * >*   If you do not specify the TaskId or ObjectPath parameter, the data in the last three days is returned on the first page. By default, one page displays a maximum of 20 entries. You can specify the TaskId and ObjectPath parameters at the same time.
     *   *
     * @param DescribeVodRefreshTasksRequest $request DescribeVodRefreshTasksRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodRefreshTasksResponse DescribeVodRefreshTasksResponse
     */
    public function describeVodRefreshTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodRefreshTasks',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodRefreshTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > *   This operation is available only in the **China (Shanghai)** region.
     *   * >*   If you do not specify the TaskId or ObjectPath parameter, the data in the last three days is returned on the first page. By default, one page displays a maximum of 20 entries. You can specify the TaskId and ObjectPath parameters at the same time.
     *   *
     * @param DescribeVodRefreshTasksRequest $request DescribeVodRefreshTasksRequest
     *
     * @return DescribeVodRefreshTasksResponse DescribeVodRefreshTasksResponse
     */
    public function describeVodRefreshTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * > *   This operation is available only in the **China (Shanghai)** region.
     *   * >*   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *   *
     * @param DescribeVodStorageDataRequest $request DescribeVodStorageDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodStorageDataResponse DescribeVodStorageDataResponse
     */
    public function describeVodStorageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodStorageData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodStorageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > *   This operation is available only in the **China (Shanghai)** region.
     *   * >*   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *   *
     * @param DescribeVodStorageDataRequest $request DescribeVodStorageDataRequest
     *
     * @return DescribeVodStorageDataResponse DescribeVodStorageDataResponse
     */
    public function describeVodStorageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodStorageDataWithOptions($request, $runtime);
    }

    /**
     * *   This operation is available only in the **China (Shanghai)** region.
     *   * *   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *   *
     * @param DescribeVodTranscodeDataRequest $request DescribeVodTranscodeDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodTranscodeDataResponse DescribeVodTranscodeDataResponse
     */
    public function describeVodTranscodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodTranscodeData',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodTranscodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is available only in the **China (Shanghai)** region.
     *   * *   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *   *
     * @param DescribeVodTranscodeDataRequest $request DescribeVodTranscodeDataRequest
     *
     * @return DescribeVodTranscodeDataResponse DescribeVodTranscodeDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'DescribeVodUserDomains',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param DescribeVodVerifyContentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodVerifyContentResponse
     */
    public function describeVodVerifyContentWithOptions($request, $runtime)
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
            'action'      => 'DescribeVodVerifyContent',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The name of the policy that was not found.
     *   *
     * @param DetachAppPolicyFromIdentityRequest $request DetachAppPolicyFromIdentityRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachAppPolicyFromIdentityResponse DetachAppPolicyFromIdentityResponse
     */
    public function detachAppPolicyFromIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->identityName)) {
            $query['IdentityName'] = $request->identityName;
        }
        if (!Utils::isUnset($request->identityType)) {
            $query['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->policyNames)) {
            $query['PolicyNames'] = $request->policyNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachAppPolicyFromIdentity',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachAppPolicyFromIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the policy that was not found.
     *   *
     * @param DetachAppPolicyFromIdentityRequest $request DetachAppPolicyFromIdentityRequest
     *
     * @return DetachAppPolicyFromIdentityResponse DetachAppPolicyFromIdentityResponse
     */
    public function detachAppPolicyFromIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAppPolicyFromIdentityWithOptions($request, $runtime);
    }

    /**
     * @param GenerateKMSDataKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateKMSDataKey',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateKMSDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateKMSDataKeyRequest $request
     *
     * @return GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateKMSDataKeyWithOptions($request, $runtime);
    }

    /**
     * The image AI processing jobs.
     *   *
     * @param GetAIImageJobsRequest $request GetAIImageJobsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAIImageJobsResponse GetAIImageJobsResponse
     */
    public function getAIImageJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAIImageJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAIImageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The image AI processing jobs.
     *   *
     * @param GetAIImageJobsRequest $request GetAIImageJobsRequest
     *
     * @return GetAIImageJobsResponse GetAIImageJobsResponse
     */
    public function getAIImageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIImageJobsWithOptions($request, $runtime);
    }

    /**
     * The recommendation for review results. Valid values:
     *   * *   **block**: The content violates the regulations.
     *   * *   **review**: The content may violate the regulations.
     *   * *   **pass**: The content passes the review.
     *   *
     * @param GetAIMediaAuditJobRequest $request GetAIMediaAuditJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAIMediaAuditJobResponse GetAIMediaAuditJobResponse
     */
    public function getAIMediaAuditJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAIMediaAuditJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAIMediaAuditJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The recommendation for review results. Valid values:
     *   * *   **block**: The content violates the regulations.
     *   * *   **review**: The content may violate the regulations.
     *   * *   **pass**: The content passes the review.
     *   *
     * @param GetAIMediaAuditJobRequest $request GetAIMediaAuditJobRequest
     *
     * @return GetAIMediaAuditJobResponse GetAIMediaAuditJobResponse
     */
    public function getAIMediaAuditJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIMediaAuditJobWithOptions($request, $runtime);
    }

    /**
     * The detailed configurations of the AI template. The value is a JSON string. For more information, see [AITemplateConfig](https://help.aliyun.com/document_detail/89863.html#title-vd3-499-o36).
     *   *
     * @param GetAITemplateRequest $request GetAITemplateRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAITemplateResponse GetAITemplateResponse
     */
    public function getAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The detailed configurations of the AI template. The value is a JSON string. For more information, see [AITemplateConfig](https://help.aliyun.com/document_detail/89863.html#title-vd3-499-o36).
     *   *
     * @param GetAITemplateRequest $request GetAITemplateRequest
     *
     * @return GetAITemplateResponse GetAITemplateResponse
     */
    public function getAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAITemplateWithOptions($request, $runtime);
    }

    /**
     * Milliseconds.
     *   *
     * @param GetAIVideoTagResultRequest $request GetAIVideoTagResultRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAIVideoTagResultResponse GetAIVideoTagResultResponse
     */
    public function getAIVideoTagResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAIVideoTagResult',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAIVideoTagResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Milliseconds.
     *   *
     * @param GetAIVideoTagResultRequest $request GetAIVideoTagResultRequest
     *
     * @return GetAIVideoTagResultResponse GetAIVideoTagResultResponse
     */
    public function getAIVideoTagResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIVideoTagResultWithOptions($request, $runtime);
    }

    /**
     * The description of the application.
     *   *
     * @param GetAppInfosRequest $request GetAppInfosRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppInfosResponse GetAppInfosResponse
     */
    public function getAppInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The description of the application.
     *   *
     * @param GetAppInfosRequest $request GetAppInfosRequest
     *
     * @return GetAppInfosResponse GetAppInfosResponse
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
        $query = [];
        if (!Utils::isUnset($request->authTimeout)) {
            $query['AuthTimeout'] = $request->authTimeout;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->outputType)) {
            $query['OutputType'] = $request->outputType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAttachedMediaInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuditHistory',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCategories',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The detailed configurations of the AI template. The value is a JSON string. For more information, see [AITemplateConfig](https://help.aliyun.com/document_detail/89863.html#title-vd3-499-o36).
     *   *
     * @param GetDefaultAITemplateRequest $request GetDefaultAITemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDefaultAITemplateResponse GetDefaultAITemplateResponse
     */
    public function getDefaultAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDefaultAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDefaultAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The detailed configurations of the AI template. The value is a JSON string. For more information, see [AITemplateConfig](https://help.aliyun.com/document_detail/89863.html#title-vd3-499-o36).
     *   *
     * @param GetDefaultAITemplateRequest $request GetDefaultAITemplateRequest
     *
     * @return GetDefaultAITemplateResponse GetDefaultAITemplateResponse
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The time when the material was last updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *   *
     * @param GetEditingProjectMaterialsRequest $request GetEditingProjectMaterialsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEditingProjectMaterialsResponse GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->materialType)) {
            $query['MaterialType'] = $request->materialType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEditingProjectMaterials',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The time when the material was last updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *   *
     * @param GetEditingProjectMaterialsRequest $request GetEditingProjectMaterialsRequest
     *
     * @return GetEditingProjectMaterialsResponse GetEditingProjectMaterialsResponse
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
        $query = [];
        if (!Utils::isUnset($request->authTimeout)) {
            $query['AuthTimeout'] = $request->authTimeout;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->outputType)) {
            $query['OutputType'] = $request->outputType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImageInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * You can call this operation to query the basic information about multiple images at a time, such as the image title, type, creation time, tags, and URL.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit on an API operation in ApsaraVideo Live](~~342790~~).
     *   *
     * @param GetImageInfosRequest $request GetImageInfosRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageInfosResponse GetImageInfosResponse
     */
    public function getImageInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authTimeout)) {
            $query['AuthTimeout'] = $request->authTimeout;
        }
        if (!Utils::isUnset($request->imageIds)) {
            $query['ImageIds'] = $request->imageIds;
        }
        if (!Utils::isUnset($request->outputType)) {
            $query['OutputType'] = $request->outputType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImageInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the basic information about multiple images at a time, such as the image title, type, creation time, tags, and URL.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit on an API operation in ApsaraVideo Live](~~342790~~).
     *   *
     * @param GetImageInfosRequest $request GetImageInfosRequest
     *
     * @return GetImageInfosResponse GetImageInfosResponse
     */
    public function getImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageInfosWithOptions($request, $runtime);
    }

    /**
     * The start time of the audio that failed the review. Unit: seconds.
     *   *
     * @param GetMediaAuditAudioResultDetailRequest $request GetMediaAuditAudioResultDetailRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaAuditAudioResultDetailResponse GetMediaAuditAudioResultDetailResponse
     */
    public function getMediaAuditAudioResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditAudioResultDetail',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaAuditAudioResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The start time of the audio that failed the review. Unit: seconds.
     *   *
     * @param GetMediaAuditAudioResultDetailRequest $request GetMediaAuditAudioResultDetailRequest
     *
     * @return GetMediaAuditAudioResultDetailResponse GetMediaAuditAudioResultDetailResponse
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
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditResult',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * Details about review results.
     *   *
     * @param GetMediaAuditResultDetailRequest $request GetMediaAuditResultDetailRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaAuditResultDetailResponse GetMediaAuditResultDetailResponse
     */
    public function getMediaAuditResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditResultDetail',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaAuditResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Details about review results.
     *   *
     * @param GetMediaAuditResultDetailRequest $request GetMediaAuditResultDetailRequest
     *
     * @return GetMediaAuditResultDetailResponse GetMediaAuditResultDetailResponse
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
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditResultTimeline',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The details of the matched video. Information such as the location and duration of the video is returned.
     *   *
     * @param GetMediaDNAResultRequest $request GetMediaDNAResultRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaDNAResultResponse GetMediaDNAResultResponse
     */
    public function getMediaDNAResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaDNAResult',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaDNAResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The details of the matched video. Information such as the location and duration of the video is returned.
     *   *
     * @param GetMediaDNAResultRequest $request GetMediaDNAResultRequest
     *
     * @return GetMediaDNAResultResponse GetMediaDNAResultResponse
     */
    public function getMediaDNAResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaDNAResultWithOptions($request, $runtime);
    }

    /**
     * You can query the information about all media files or a specific media file in a refresh or prefetch job.
     *   * ### QPS limits
     *   * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VoD](~~342790~~).
     *   *
     * @param GetMediaRefreshJobsRequest $request GetMediaRefreshJobsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaRefreshJobsResponse GetMediaRefreshJobsResponse
     */
    public function getMediaRefreshJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaRefreshJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaRefreshJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can query the information about all media files or a specific media file in a refresh or prefetch job.
     *   * ### QPS limits
     *   * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VoD](~~342790~~).
     *   *
     * @param GetMediaRefreshJobsRequest $request GetMediaRefreshJobsRequest
     *
     * @return GetMediaRefreshJobsResponse GetMediaRefreshJobsResponse
     */
    public function getMediaRefreshJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaRefreshJobsWithOptions($request, $runtime);
    }

    /**
     * The type of the callback event.
     *   *
     * @param GetMessageCallbackRequest $request GetMessageCallbackRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMessageCallbackResponse GetMessageCallbackResponse
     */
    public function getMessageCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMessageCallback',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of the callback event.
     *   *
     * @param GetMessageCallbackRequest $request GetMessageCallbackRequest
     *
     * @return GetMessageCallbackResponse GetMessageCallbackResponse
     */
    public function getMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * The sampling format.
     *   *
     * @param GetMezzanineInfoRequest $request GetMezzanineInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMezzanineInfoResponse GetMezzanineInfoResponse
     */
    public function getMezzanineInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionType)) {
            $query['AdditionType'] = $request->additionType;
        }
        if (!Utils::isUnset($request->authTimeout)) {
            $query['AuthTimeout'] = $request->authTimeout;
        }
        if (!Utils::isUnset($request->outputType)) {
            $query['OutputType'] = $request->outputType;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMezzanineInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMezzanineInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The sampling format.
     *   *
     * @param GetMezzanineInfoRequest $request GetMezzanineInfoRequest
     *
     * @return GetMezzanineInfoResponse GetMezzanineInfoResponse
     */
    public function getMezzanineInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMezzanineInfoWithOptions($request, $runtime);
    }

    /**
     * The ID of the media file.
     *   *
     * @param GetPlayInfoRequest $request GetPlayInfoRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPlayInfoResponse GetPlayInfoResponse
     */
    public function getPlayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionType)) {
            $query['AdditionType'] = $request->additionType;
        }
        if (!Utils::isUnset($request->authTimeout)) {
            $query['AuthTimeout'] = $request->authTimeout;
        }
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->formats)) {
            $query['Formats'] = $request->formats;
        }
        if (!Utils::isUnset($request->outputType)) {
            $query['OutputType'] = $request->outputType;
        }
        if (!Utils::isUnset($request->playConfig)) {
            $query['PlayConfig'] = $request->playConfig;
        }
        if (!Utils::isUnset($request->reAuthInfo)) {
            $query['ReAuthInfo'] = $request->reAuthInfo;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPlayInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the media file.
     *   *
     * @param GetPlayInfoRequest $request GetPlayInfoRequest
     *
     * @return GetPlayInfoResponse GetPlayInfoResponse
     */
    public function getPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPlayInfoWithOptions($request, $runtime);
    }

    /**
     * *   A media file may be transcoded multiple times. This operation returns only the latest transcoding summary.
     *   * *   You can query transcoding summaries for a maximum of 10 media files in one request.
     *   * *   You can call the [ListTranscodeTask](~~109120~~) operation to query historical transcoding tasks.
     *   * *   **You can call this operation to query information only about transcoding tasks created within the past year.**.
     *   *
     * @param GetTranscodeSummaryRequest $request GetTranscodeSummaryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTranscodeSummaryResponse GetTranscodeSummaryResponse
     */
    public function getTranscodeSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->videoIds)) {
            $query['VideoIds'] = $request->videoIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTranscodeSummary',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTranscodeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   A media file may be transcoded multiple times. This operation returns only the latest transcoding summary.
     *   * *   You can query transcoding summaries for a maximum of 10 media files in one request.
     *   * *   You can call the [ListTranscodeTask](~~109120~~) operation to query historical transcoding tasks.
     *   * *   **You can call this operation to query information only about transcoding tasks created within the past year.**.
     *   *
     * @param GetTranscodeSummaryRequest $request GetTranscodeSummaryRequest
     *
     * @return GetTranscodeSummaryResponse GetTranscodeSummaryResponse
     */
    public function getTranscodeSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeSummaryWithOptions($request, $runtime);
    }

    /**
     * The video resolution. Valid values:
     *   * *   **LD**: low definition
     *   * *   **SD**: standard definition
     *   * *   **HD**: high definition
     *   * *   **FHD**: ultra high definition
     *   * *   **OD**: original definition
     *   * *   **2K**: 2K
     *   * *   **4K**: 4K
     *   * *   **SQ**: standard sound quality
     *   * *   **HQ**: high sound quality
     *   * *   **AUTO**: adaptive bitrate Adaptive bitrate streams are returned only if PackageSetting is set in the transcoding template. For more information, see [Basic structures](~~52839~~).
     *   * > This parameter indicates the definition that is configured in the transcoding template and does not indicate the actual resolution of the output video.
     *   *
     * @param GetTranscodeTaskRequest $request GetTranscodeTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTranscodeTaskResponse GetTranscodeTaskResponse
     */
    public function getTranscodeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->transcodeTaskId)) {
            $query['TranscodeTaskId'] = $request->transcodeTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTranscodeTask',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTranscodeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The video resolution. Valid values:
     *   * *   **LD**: low definition
     *   * *   **SD**: standard definition
     *   * *   **HD**: high definition
     *   * *   **FHD**: ultra high definition
     *   * *   **OD**: original definition
     *   * *   **2K**: 2K
     *   * *   **4K**: 4K
     *   * *   **SQ**: standard sound quality
     *   * *   **HQ**: high sound quality
     *   * *   **AUTO**: adaptive bitrate Adaptive bitrate streams are returned only if PackageSetting is set in the transcoding template. For more information, see [Basic structures](~~52839~~).
     *   * > This parameter indicates the definition that is configured in the transcoding template and does not indicate the actual resolution of the output video.
     *   *
     * @param GetTranscodeTaskRequest $request GetTranscodeTaskRequest
     *
     * @return GetTranscodeTaskResponse GetTranscodeTaskResponse
     */
    public function getTranscodeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeTaskWithOptions($request, $runtime);
    }

    /**
     * Valid values for the definition of a common transcoding template:
     *   * *   **LD**: low definition.
     *   * *   **SD**: standard definition.
     *   * *   **HD**: high definition.
     *   * *   **FHD**: ultra high definition.
     *   * *   **OD**: original quality.
     *   * *   **2K**
     *   * *   **4K**
     *   * *   **SQ**: standard sound quality.
     *   * *   **HQ**: high sound quality.
     *   * Valid values for the definition of a Narrowband HD™ 1.0 transcoding template:
     *   * *   **LD-NBV1**: low definition.
     *   * *   **SD-NBV1**: standard definition.
     *   * *   **HD-NBV1**: high definition.
     *   * *   **FHD-NBV1**: ultra high definition.
     *   * *   **2K-NBV1**
     *   * *   **4K-NBV1**
     *   * >*   You cannot modify the definition of transcoding templates.
     *   * >*   You cannot modify the system parameters, such as the video resolution, audio resolution, and bitrate, of Narrowband HD™ 1.0 transcoding templates.
     *   * >*   You can create only Narrowband HD™ 1.0 transcoding templates that support the FLV, M3U8 (HLS), and MP4 output formats.
     *   *
     * @param GetTranscodeTemplateGroupRequest $request GetTranscodeTemplateGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTranscodeTemplateGroupResponse GetTranscodeTemplateGroupResponse
     */
    public function getTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->transcodeTemplateGroupId)) {
            $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Valid values for the definition of a common transcoding template:
     *   * *   **LD**: low definition.
     *   * *   **SD**: standard definition.
     *   * *   **HD**: high definition.
     *   * *   **FHD**: ultra high definition.
     *   * *   **OD**: original quality.
     *   * *   **2K**
     *   * *   **4K**
     *   * *   **SQ**: standard sound quality.
     *   * *   **HQ**: high sound quality.
     *   * Valid values for the definition of a Narrowband HD™ 1.0 transcoding template:
     *   * *   **LD-NBV1**: low definition.
     *   * *   **SD-NBV1**: standard definition.
     *   * *   **HD-NBV1**: high definition.
     *   * *   **FHD-NBV1**: ultra high definition.
     *   * *   **2K-NBV1**
     *   * *   **4K-NBV1**
     *   * >*   You cannot modify the definition of transcoding templates.
     *   * >*   You cannot modify the system parameters, such as the video resolution, audio resolution, and bitrate, of Narrowband HD™ 1.0 transcoding templates.
     *   * >*   You can create only Narrowband HD™ 1.0 transcoding templates that support the FLV, M3U8 (HLS), and MP4 output formats.
     *   *
     * @param GetTranscodeTemplateGroupRequest $request GetTranscodeTemplateGroupRequest
     *
     * @return GetTranscodeTemplateGroupResponse GetTranscodeTemplateGroupResponse
     */
    public function getTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * The size of the uploaded media file. Unit: byte.
     *   *
     * @param GetURLUploadInfosRequest $request GetURLUploadInfosRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetURLUploadInfosResponse GetURLUploadInfosResponse
     */
    public function getURLUploadInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->uploadURLs)) {
            $query['UploadURLs'] = $request->uploadURLs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetURLUploadInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetURLUploadInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The size of the uploaded media file. Unit: byte.
     *   *
     * @param GetURLUploadInfosRequest $request GetURLUploadInfosRequest
     *
     * @return GetURLUploadInfosResponse GetURLUploadInfosResponse
     */
    public function getURLUploadInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getURLUploadInfosWithOptions($request, $runtime);
    }

    /**
     * The type of the media file. Set the value to **video**, which indicates audio and video files.
     *   *
     * @param GetUploadDetailsRequest $request GetUploadDetailsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadDetailsResponse GetUploadDetailsResponse
     */
    public function getUploadDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUploadDetails',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUploadDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of the media file. Set the value to **video**, which indicates audio and video files.
     *   *
     * @param GetUploadDetailsRequest $request GetUploadDetailsRequest
     *
     * @return GetUploadDetailsResponse GetUploadDetailsResponse
     */
    public function getUploadDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadDetailsWithOptions($request, $runtime);
    }

    /**
     * The video snapshot URLs.
     *   *
     * @param GetVideoInfoRequest $request GetVideoInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoInfoResponse GetVideoInfoResponse
     */
    public function getVideoInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The video snapshot URLs.
     *   *
     * @param GetVideoInfoRequest $request GetVideoInfoRequest
     *
     * @return GetVideoInfoResponse GetVideoInfoResponse
     */
    public function getVideoInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoInfoWithOptions($request, $runtime);
    }

    /**
     * The duration of the video. Unit: seconds.
     *   *
     * @param GetVideoInfosRequest $request GetVideoInfosRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoInfosResponse GetVideoInfosResponse
     */
    public function getVideoInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->videoIds)) {
            $query['VideoIds'] = $request->videoIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The duration of the video. Unit: seconds.
     *   *
     * @param GetVideoInfosRequest $request GetVideoInfosRequest
     *
     * @return GetVideoInfosResponse GetVideoInfosResponse
     */
    public function getVideoInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoInfosWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query information about media files based on the filter conditions that you specify, such as video status and category ID. Information about a maximum of **5,000** media files can be returned for each request. We recommend that you set the StartTime and EndTime parameters to specify a time range for each request. For more information about how to query information about more media files or even all media files, see [SearchMedia](~~86044~~).
     *   *
     * @param GetVideoListRequest $request GetVideoListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoListResponse GetVideoListResponse
     */
    public function getVideoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->storageLocation)) {
            $query['StorageLocation'] = $request->storageLocation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoList',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query information about media files based on the filter conditions that you specify, such as video status and category ID. Information about a maximum of **5,000** media files can be returned for each request. We recommend that you set the StartTime and EndTime parameters to specify a time range for each request. For more information about how to query information about more media files or even all media files, see [SearchMedia](~~86044~~).
     *   *
     * @param GetVideoListRequest $request GetVideoListRequest
     *
     * @return GetVideoListResponse GetVideoListResponse
     */
    public function getVideoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoListWithOptions($request, $runtime);
    }

    /**
     * The thumbnail URL of the audio or video file.
     *   *
     * @param GetVideoPlayAuthRequest $request GetVideoPlayAuthRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoPlayAuthResponse GetVideoPlayAuthResponse
     */
    public function getVideoPlayAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->authInfoTimeout)) {
            $query['AuthInfoTimeout'] = $request->authInfoTimeout;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoPlayAuth',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoPlayAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The thumbnail URL of the audio or video file.
     *   *
     * @param GetVideoPlayAuthRequest $request GetVideoPlayAuthRequest
     *
     * @return GetVideoPlayAuthResponse GetVideoPlayAuthResponse
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
        $query = [];
        if (!Utils::isUnset($request->vodTemplateId)) {
            $query['VodTemplateId'] = $request->vodTemplateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->watermarkId)) {
            $query['WatermarkId'] = $request->watermarkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * You can call this operation to query AI processing results about images of a specified video. Images of different videos cannot be queried in one request.
     *   * - The smart thumbnail feature is not supported. You cannot call this operation.
     *   * - You can call this operation to query AI processing results about images of a specified video. Images of different videos cannot be queried in one request.
     *   * ### QPS limit
     *   * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VoD](~~342790~~).
     *   *
     * @param ListAIImageInfoRequest $request ListAIImageInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAIImageInfoResponse ListAIImageInfoResponse
     */
    public function listAIImageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAIImageInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAIImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query AI processing results about images of a specified video. Images of different videos cannot be queried in one request.
     *   * - The smart thumbnail feature is not supported. You cannot call this operation.
     *   * - You can call this operation to query AI processing results about images of a specified video. Images of different videos cannot be queried in one request.
     *   * ### QPS limit
     *   * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VoD](~~342790~~).
     *   *
     * @param ListAIImageInfoRequest $request ListAIImageInfoRequest
     *
     * @return ListAIImageInfoResponse ListAIImageInfoResponse
     */
    public function listAIImageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIImageInfoWithOptions($request, $runtime);
    }

    /**
     * The IDs of the jobs that do not exist.
     *   *
     * @param ListAIJobRequest $request ListAIJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAIJobResponse ListAIJobResponse
     */
    public function listAIJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAIJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The IDs of the jobs that do not exist.
     *   *
     * @param ListAIJobRequest $request ListAIJobRequest
     *
     * @return ListAIJobResponse ListAIJobResponse
     */
    public function listAIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIJobWithOptions($request, $runtime);
    }

    /**
     * The returned result.
     *   *
     * @param ListAITemplateRequest $request ListAITemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAITemplateResponse ListAITemplateResponse
     */
    public function listAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The returned result.
     *   *
     * @param ListAITemplateRequest $request ListAITemplateRequest
     *
     * @return ListAITemplateResponse ListAITemplateResponse
     */
    public function listAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAITemplateWithOptions($request, $runtime);
    }

    /**
     * The description of the application.
     *   *
     * @param ListAppInfoRequest $request ListAppInfoRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppInfoResponse ListAppInfoResponse
     */
    public function listAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
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
            'action'      => 'ListAppInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The description of the application.
     *   *
     * @param ListAppInfoRequest $request ListAppInfoRequest
     *
     * @return ListAppInfoResponse ListAppInfoResponse
     */
    public function listAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInfoWithOptions($request, $runtime);
    }

    /**
     * The name of the identity.
     *   * *   Specifies the ID of the RAM user when the IdentityType parameter is set to RamUser.
     *   * *   Specifies the name of the RAM role when the IdentityType parameter is set to RamRole.
     *   *
     * @param ListAppPoliciesForIdentityRequest $request ListAppPoliciesForIdentityRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppPoliciesForIdentityResponse ListAppPoliciesForIdentityResponse
     */
    public function listAppPoliciesForIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->identityName)) {
            $query['IdentityName'] = $request->identityName;
        }
        if (!Utils::isUnset($request->identityType)) {
            $query['IdentityType'] = $request->identityType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppPoliciesForIdentity',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppPoliciesForIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the identity.
     *   * *   Specifies the ID of the RAM user when the IdentityType parameter is set to RamUser.
     *   * *   Specifies the name of the RAM role when the IdentityType parameter is set to RamRole.
     *   *
     * @param ListAppPoliciesForIdentityRequest $request ListAppPoliciesForIdentityRequest
     *
     * @return ListAppPoliciesForIdentityResponse ListAppPoliciesForIdentityResponse
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
        $query = [];
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuditSecurityIp',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDynamicImage',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The ID of the video category.
     *   *
     * @param ListLiveRecordVideoRequest $request ListLiveRecordVideoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveRecordVideoResponse ListLiveRecordVideoResponse
     */
    public function listLiveRecordVideoWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
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
            'action'      => 'ListLiveRecordVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRecordVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the video category.
     *   *
     * @param ListLiveRecordVideoRequest $request ListLiveRecordVideoRequest
     *
     * @return ListLiveRecordVideoResponse ListLiveRecordVideoResponse
     */
    public function listLiveRecordVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordVideoWithOptions($request, $runtime);
    }

    /**
     * The type of snapshots that are returned. Valid values:
     *   * *   **CoverSnapshot**: thumbnail snapshot
     *   * *   **NormalSnapshot**: normal snapshot
     *   * *   **SpriteSnapshot**: sprite snapshot
     *   * *   **SpriteOriginSnapshot**: sprite source snapshot
     *   * *   **WebVttSnapshot**: WebVTT snapshot.
     *   *
     * @param ListSnapshotsRequest $request ListSnapshotsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotsResponse ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authTimeout)) {
            $query['AuthTimeout'] = $request->authTimeout;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->snapshotType)) {
            $query['SnapshotType'] = $request->snapshotType;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSnapshots',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of snapshots that are returned. Valid values:
     *   * *   **CoverSnapshot**: thumbnail snapshot
     *   * *   **NormalSnapshot**: normal snapshot
     *   * *   **SpriteSnapshot**: sprite snapshot
     *   * *   **SpriteOriginSnapshot**: sprite source snapshot
     *   * *   **WebVttSnapshot**: WebVTT snapshot.
     *   *
     * @param ListSnapshotsRequest $request ListSnapshotsRequest
     *
     * @return ListSnapshotsResponse ListSnapshotsResponse
     */
    public function listSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotsWithOptions($request, $runtime);
    }

    /**
     * The time when the transcoding task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *   *
     * @param ListTranscodeTaskRequest $request ListTranscodeTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTranscodeTaskResponse ListTranscodeTaskResponse
     */
    public function listTranscodeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTranscodeTask',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTranscodeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The time when the transcoding task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *   *
     * @param ListTranscodeTaskRequest $request ListTranscodeTaskRequest
     *
     * @return ListTranscodeTaskResponse ListTranscodeTaskResponse
     */
    public function listTranscodeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeTaskWithOptions($request, $runtime);
    }

    /**
     * The ID of the application. Default value: **app-1000000**. For more information, see [Overview](~~113600~~).
     *   *
     * @param ListTranscodeTemplateGroupRequest $request ListTranscodeTemplateGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTranscodeTemplateGroupResponse ListTranscodeTemplateGroupResponse
     */
    public function listTranscodeTemplateGroupWithOptions($request, $runtime)
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
            'action'      => 'ListTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the application. Default value: **app-1000000**. For more information, see [Overview](~~113600~~).
     *   *
     * @param ListTranscodeTemplateGroupRequest $request ListTranscodeTemplateGroupRequest
     *
     * @return ListTranscodeTemplateGroupResponse ListTranscodeTemplateGroupResponse
     */
    public function listTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeTemplateGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->targetAppId)) {
            $query['TargetAppId'] = $request->targetAppId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveAppResource',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The operation that you want to perform. Set the value to **PreloadVodObjectCaches**.
     *   *
     * @param PreloadVodObjectCachesRequest $request PreloadVodObjectCachesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return PreloadVodObjectCachesResponse PreloadVodObjectCachesResponse
     */
    public function preloadVodObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
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
            'action'      => 'PreloadVodObjectCaches',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreloadVodObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to **PreloadVodObjectCaches**.
     *   *
     * @param PreloadVodObjectCachesRequest $request PreloadVodObjectCachesRequest
     *
     * @return PreloadVodObjectCachesResponse PreloadVodObjectCachesResponse
     */
    public function preloadVodObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * The title of the online editing project.
     *   *
     * @param ProduceEditingProjectVideoRequest $request ProduceEditingProjectVideoRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ProduceEditingProjectVideoResponse ProduceEditingProjectVideoResponse
     */
    public function produceEditingProjectVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->mediaMetadata)) {
            $query['MediaMetadata'] = $request->mediaMetadata;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->produceConfig)) {
            $query['ProduceConfig'] = $request->produceConfig;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->timeline)) {
            $query['Timeline'] = $request->timeline;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProduceEditingProjectVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProduceEditingProjectVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The title of the online editing project.
     *   *
     * @param ProduceEditingProjectVideoRequest $request ProduceEditingProjectVideoRequest
     *
     * @return ProduceEditingProjectVideoResponse ProduceEditingProjectVideoResponse
     */
    public function produceEditingProjectVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->produceEditingProjectVideoWithOptions($request, $runtime);
    }

    /**
     * The formats of the media streams you want to refresh or prefetch. You can specify multiple formats. Separate multiple formats with commas (,). If you leave this parameter empty, media streams in all formats are refreshed or prefetched by default. Valid values:
     *   * *   **mp4**
     *   * *   **m3u8**
     *   * *   **mp3**
     *   * *   **flv**
     *   * *   **webm**
     *   * *   **ts**.
     *   *
     * @param RefreshMediaPlayUrlsRequest $request RefreshMediaPlayUrlsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshMediaPlayUrlsResponse RefreshMediaPlayUrlsResponse
     */
    public function refreshMediaPlayUrlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->definitions)) {
            $query['Definitions'] = $request->definitions;
        }
        if (!Utils::isUnset($request->formats)) {
            $query['Formats'] = $request->formats;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->sliceCount)) {
            $query['SliceCount'] = $request->sliceCount;
        }
        if (!Utils::isUnset($request->sliceFlag)) {
            $query['SliceFlag'] = $request->sliceFlag;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshMediaPlayUrls',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshMediaPlayUrlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The formats of the media streams you want to refresh or prefetch. You can specify multiple formats. Separate multiple formats with commas (,). If you leave this parameter empty, media streams in all formats are refreshed or prefetched by default. Valid values:
     *   * *   **mp4**
     *   * *   **m3u8**
     *   * *   **mp3**
     *   * *   **flv**
     *   * *   **webm**
     *   * *   **ts**.
     *   *
     * @param RefreshMediaPlayUrlsRequest $request RefreshMediaPlayUrlsRequest
     *
     * @return RefreshMediaPlayUrlsResponse RefreshMediaPlayUrlsResponse
     */
    public function refreshMediaPlayUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshMediaPlayUrlsWithOptions($request, $runtime);
    }

    /**
     * The upload credential.
     *   * > The upload credential returned by this operation is Base64-encoded. Before you can use an SDK or an API operation to upload a media asset based on the upload credential, you must decode the upload credential by using the Base64 algorithm. You must parse the upload credential only if you use native OSS SDKs or OSS API for uploads.
     *   *
     * @param RefreshUploadVideoRequest $request RefreshUploadVideoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshUploadVideoResponse RefreshUploadVideoResponse
     */
    public function refreshUploadVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshUploadVideo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshUploadVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The upload credential.
     *   * > The upload credential returned by this operation is Base64-encoded. Before you can use an SDK or an API operation to upload a media asset based on the upload credential, you must decode the upload credential by using the Base64 algorithm. You must parse the upload credential only if you use native OSS SDKs or OSS API for uploads.
     *   *
     * @param RefreshUploadVideoRequest $request RefreshUploadVideoRequest
     *
     * @return RefreshUploadVideoResponse RefreshUploadVideoResponse
     */
    public function refreshUploadVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshUploadVideoWithOptions($request, $runtime);
    }

    /**
     * The ID of the refresh task. Separate multiple task IDs with commas (,).
     *   *
     * @param RefreshVodObjectCachesRequest $request RefreshVodObjectCachesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshVodObjectCachesResponse RefreshVodObjectCachesResponse
     */
    public function refreshVodObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
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
            'action'      => 'RefreshVodObjectCaches',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshVodObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the refresh task. Separate multiple task IDs with commas (,).
     *   *
     * @param RefreshVodObjectCachesRequest $request RefreshVodObjectCachesRequest
     *
     * @return RefreshVodObjectCachesResponse RefreshVodObjectCachesResponse
     */
    public function refreshVodObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * The media files that are registered, including newly registered and repeatedly registered media files.
     *   *
     * @param RegisterMediaRequest $request RegisterMediaRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterMediaResponse RegisterMediaResponse
     */
    public function registerMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->registerMetadatas)) {
            $query['RegisterMetadatas'] = $request->registerMetadatas;
        }
        if (!Utils::isUnset($request->templateGroupId)) {
            $query['TemplateGroupId'] = $request->templateGroupId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The media files that are registered, including newly registered and repeatedly registered media files.
     *   *
     * @param RegisterMediaRequest $request RegisterMediaRequest
     *
     * @return RegisterMediaResponse RegisterMediaResponse
     */
    public function registerMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaWithOptions($request, $runtime);
    }

    /**
     * @param RestoreMediaRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RestoreMediaResponse
     */
    public function restoreMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->restoreDays)) {
            $query['RestoreDays'] = $request->restoreDays;
        }
        if (!Utils::isUnset($request->restoreTier)) {
            $query['RestoreTier'] = $request->restoreTier;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestoreMediaRequest $request
     *
     * @return RestoreMediaResponse
     */
    public function restoreMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreMediaWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The ID of the parent category.
     *   *
     * @param SearchMediaRequest $request SearchMediaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaResponse SearchMediaResponse
     */
    public function searchMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fields)) {
            $query['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->match)) {
            $query['Match'] = $request->match;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scrollToken)) {
            $query['ScrollToken'] = $request->scrollToken;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['SearchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMedia',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the parent category.
     *   *
     * @param SearchMediaRequest $request SearchMediaRequest
     *
     * @return SearchMediaResponse SearchMediaResponse
     */
    public function searchMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWithOptions($request, $runtime);
    }

    /**
     * The name of the review security group. Default value: **Default**. You can specify a maximum of 10 review security groups.
     *   *
     * @param SetAuditSecurityIpRequest $request SetAuditSecurityIpRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAuditSecurityIpResponse SetAuditSecurityIpResponse
     */
    public function setAuditSecurityIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ips)) {
            $query['Ips'] = $request->ips;
        }
        if (!Utils::isUnset($request->operateMode)) {
            $query['OperateMode'] = $request->operateMode;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAuditSecurityIp',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAuditSecurityIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the review security group. Default value: **Default**. You can specify a maximum of 10 review security groups.
     *   *
     * @param SetAuditSecurityIpRequest $request SetAuditSecurityIpRequest
     *
     * @return SetAuditSecurityIpResponse SetAuditSecurityIpResponse
     */
    public function setAuditSecurityIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param SetCrossdomainContentRequest $request SetCrossdomainContentRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCrossdomainContentResponse SetCrossdomainContentResponse
     */
    public function setCrossdomainContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceRealOwnerId)) {
            $query['ResourceRealOwnerId'] = $request->resourceRealOwnerId;
        }
        if (!Utils::isUnset($request->storageLocation)) {
            $query['StorageLocation'] = $request->storageLocation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCrossdomainContent',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCrossdomainContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param SetCrossdomainContentRequest $request SetCrossdomainContentRequest
     *
     * @return SetCrossdomainContentResponse SetCrossdomainContentResponse
     */
    public function setCrossdomainContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCrossdomainContentWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param SetDefaultAITemplateRequest $request SetDefaultAITemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultAITemplateResponse SetDefaultAITemplateResponse
     */
    public function setDefaultAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param SetDefaultAITemplateRequest $request SetDefaultAITemplateRequest
     *
     * @return SetDefaultAITemplateResponse SetDefaultAITemplateResponse
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
        $query = [];
        if (!Utils::isUnset($request->transcodeTemplateGroupId)) {
            $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->watermarkId)) {
            $query['WatermarkId'] = $request->watermarkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->materialIds)) {
            $query['MaterialIds'] = $request->materialIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetEditingProjectMaterials',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The ID of the application. If you do not set this parameter, the default value **app-1000000** is used.
     *   *
     * @param SetMessageCallbackRequest $request SetMessageCallbackRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetMessageCallbackResponse SetMessageCallbackResponse
     */
    public function setMessageCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->authSwitch)) {
            $query['AuthSwitch'] = $request->authSwitch;
        }
        if (!Utils::isUnset($request->callbackType)) {
            $query['CallbackType'] = $request->callbackType;
        }
        if (!Utils::isUnset($request->callbackURL)) {
            $query['CallbackURL'] = $request->callbackURL;
        }
        if (!Utils::isUnset($request->eventTypeList)) {
            $query['EventTypeList'] = $request->eventTypeList;
        }
        if (!Utils::isUnset($request->mnsEndpoint)) {
            $query['MnsEndpoint'] = $request->mnsEndpoint;
        }
        if (!Utils::isUnset($request->mnsQueueName)) {
            $query['MnsQueueName'] = $request->mnsQueueName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetMessageCallback',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the application. If you do not set this parameter, the default value **app-1000000** is used.
     *   *
     * @param SetMessageCallbackRequest $request SetMessageCallbackRequest
     *
     * @return SetMessageCallbackResponse SetMessageCallbackResponse
     */
    public function setMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * > This operation is available only in the **China (Shanghai)** region.
     *   *
     * @param SetVodDomainCertificateRequest $request SetVodDomainCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetVodDomainCertificateResponse SetVodDomainCertificateResponse
     */
    public function setVodDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
            'action'      => 'SetVodDomainCertificate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetVodDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is available only in the **China (Shanghai)** region.
     *   *
     * @param SetVodDomainCertificateRequest $request SetVodDomainCertificateRequest
     *
     * @return SetVodDomainCertificateResponse SetVodDomainCertificateResponse
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
        $query = [];
        if (!Utils::isUnset($request->mediaAuditConfiguration)) {
            $query['MediaAuditConfiguration'] = $request->mediaAuditConfiguration;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAIImageAuditJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The returned data.
     *   *
     * @param SubmitAIImageJobRequest $request SubmitAIImageJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAIImageJobResponse SubmitAIImageJobResponse
     */
    public function submitAIImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AIPipelineId)) {
            $query['AIPipelineId'] = $request->AIPipelineId;
        }
        if (!Utils::isUnset($request->AITemplateId)) {
            $query['AITemplateId'] = $request->AITemplateId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAIImageJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAIImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The returned data.
     *   *
     * @param SubmitAIImageJobRequest $request SubmitAIImageJobRequest
     *
     * @return SubmitAIImageJobResponse SubmitAIImageJobResponse
     */
    public function submitAIImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAIImageJobWithOptions($request, $runtime);
    }

    /**
     * The returned data.
     *   *
     * @param SubmitAIJobRequest $request SubmitAIJobRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAIJobResponse SubmitAIJobResponse
     */
    public function submitAIJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAIJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The returned data.
     *   *
     * @param SubmitAIJobRequest $request SubmitAIJobRequest
     *
     * @return SubmitAIJobResponse SubmitAIJobResponse
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
        $query = [];
        if (!Utils::isUnset($request->mediaAuditConfiguration)) {
            $query['MediaAuditConfiguration'] = $request->mediaAuditConfiguration;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAIMediaAuditJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The ID of the video.
     *   *
     * @param SubmitDynamicImageJobRequest $request SubmitDynamicImageJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDynamicImageJobResponse SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dynamicImageTemplateId)) {
            $query['DynamicImageTemplateId'] = $request->dynamicImageTemplateId;
        }
        if (!Utils::isUnset($request->overrideParams)) {
            $query['OverrideParams'] = $request->overrideParams;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDynamicImageJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the video.
     *   *
     * @param SubmitDynamicImageJobRequest $request SubmitDynamicImageJobRequest
     *
     * @return SubmitDynamicImageJobResponse SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicImageJobWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param SubmitMediaDNADeleteJobRequest $request SubmitMediaDNADeleteJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaDNADeleteJobResponse SubmitMediaDNADeleteJobResponse
     */
    public function submitMediaDNADeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaDNADeleteJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaDNADeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param SubmitMediaDNADeleteJobRequest $request SubmitMediaDNADeleteJobRequest
     *
     * @return SubmitMediaDNADeleteJobResponse SubmitMediaDNADeleteJobResponse
     */
    public function submitMediaDNADeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaDNADeleteJobWithOptions($request, $runtime);
    }

    /**
     * The ID of the job.
     *   *
     * @param SubmitPreprocessJobsRequest $request SubmitPreprocessJobsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitPreprocessJobsResponse SubmitPreprocessJobsResponse
     */
    public function submitPreprocessJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->preprocessType)) {
            $query['PreprocessType'] = $request->preprocessType;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitPreprocessJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitPreprocessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the job.
     *   *
     * @param SubmitPreprocessJobsRequest $request SubmitPreprocessJobsRequest
     *
     * @return SubmitPreprocessJobsResponse SubmitPreprocessJobsResponse
     */
    public function submitPreprocessJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPreprocessJobsWithOptions($request, $runtime);
    }

    /**
     * The ID of the snapshot template.
     *   * *   We recommend that you create a snapshot template before you specify the ID of the snapshot template.
     *   * *   If you set the SnapshotTemplateId parameter, all the other request parameters except the Action and VideoId parameters are ignored.
     *   * *   For more information about how to create a snapshot template, see [AddVodTemplate](~~99406~~).
     *   *
     * @param SubmitSnapshotJobRequest $request SubmitSnapshotJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSnapshotJobResponse SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->height)) {
            $query['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->snapshotTemplateId)) {
            $query['SnapshotTemplateId'] = $request->snapshotTemplateId;
        }
        if (!Utils::isUnset($request->specifiedOffsetTime)) {
            $query['SpecifiedOffsetTime'] = $request->specifiedOffsetTime;
        }
        if (!Utils::isUnset($request->spriteSnapshotConfig)) {
            $query['SpriteSnapshotConfig'] = $request->spriteSnapshotConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        if (!Utils::isUnset($request->width)) {
            $query['Width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSnapshotJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the snapshot template.
     *   * *   We recommend that you create a snapshot template before you specify the ID of the snapshot template.
     *   * *   If you set the SnapshotTemplateId parameter, all the other request parameters except the Action and VideoId parameters are ignored.
     *   * *   For more information about how to create a snapshot template, see [AddVodTemplate](~~99406~~).
     *   *
     * @param SubmitSnapshotJobRequest $request SubmitSnapshotJobRequest
     *
     * @return SubmitSnapshotJobResponse SubmitSnapshotJobResponse
     */
    public function submitSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * The ID of the transcoding template group used when the video is transcoded. To specify a transcoding template group, you can log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/?spm=a2c4g.11186623.2.18.2f1a2267jCybwh#/vod/settings/transcode/vod) and view the ID of the transcoding template group on the Transcode page.
     *   *
     * @param SubmitTranscodeJobsRequest $request SubmitTranscodeJobsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTranscodeJobsResponse SubmitTranscodeJobsResponse
     */
    public function submitTranscodeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encryptConfig)) {
            $query['EncryptConfig'] = $request->encryptConfig;
        }
        if (!Utils::isUnset($request->overrideParams)) {
            $query['OverrideParams'] = $request->overrideParams;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->templateGroupId)) {
            $query['TemplateGroupId'] = $request->templateGroupId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTranscodeJobs',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the transcoding template group used when the video is transcoded. To specify a transcoding template group, you can log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/?spm=a2c4g.11186623.2.18.2f1a2267jCybwh#/vod/settings/transcode/vod) and view the ID of the transcoding template group on the Transcode page.
     *   *
     * @param SubmitTranscodeJobsRequest $request SubmitTranscodeJobsRequest
     *
     * @return SubmitTranscodeJobsResponse SubmitTranscodeJobsResponse
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
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitWorkflowJob',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The returned result.
     *   *
     * @param UpdateAITemplateRequest $request UpdateAITemplateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAITemplateResponse UpdateAITemplateResponse
     */
    public function updateAITemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateConfig)) {
            $query['TemplateConfig'] = $request->templateConfig;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAITemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The returned result.
     *   *
     * @param UpdateAITemplateRequest $request UpdateAITemplateRequest
     *
     * @return UpdateAITemplateResponse UpdateAITemplateResponse
     */
    public function updateAITemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAITemplateWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param UpdateAppInfoRequest $request UpdateAppInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAppInfoResponse UpdateAppInfoResponse
     */
    public function updateAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param UpdateAppInfoRequest $request UpdateAppInfoRequest
     *
     * @return UpdateAppInfoResponse UpdateAppInfoResponse
     */
    public function updateAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppInfoWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param UpdateAttachedMediaInfosRequest $request UpdateAttachedMediaInfosRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAttachedMediaInfosResponse UpdateAttachedMediaInfosResponse
     */
    public function updateAttachedMediaInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->updateContent)) {
            $query['UpdateContent'] = $request->updateContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAttachedMediaInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAttachedMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param UpdateAttachedMediaInfosRequest $request UpdateAttachedMediaInfosRequest
     *
     * @return UpdateAttachedMediaInfosResponse UpdateAttachedMediaInfosResponse
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
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->cateName)) {
            $query['CateName'] = $request->cateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCategory',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->timeline)) {
            $query['Timeline'] = $request->timeline;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEditingProject',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->updateContent)) {
            $query['UpdateContent'] = $request->updateContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateImageInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param UpdateMediaStorageClassRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMediaStorageClassResponse
     */
    public function updateMediaStorageClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->restoreTier)) {
            $query['RestoreTier'] = $request->restoreTier;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->storageClass)) {
            $query['StorageClass'] = $request->storageClass;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaStorageClass',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaStorageClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMediaStorageClassRequest $request
     *
     * @return UpdateMediaStorageClassResponse
     */
    public function updateMediaStorageClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaStorageClassWithOptions($request, $runtime);
    }

    /**
     * The ID of the transcoding template group.
     *   *
     * @param UpdateTranscodeTemplateGroupRequest $request UpdateTranscodeTemplateGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTranscodeTemplateGroupResponse UpdateTranscodeTemplateGroupResponse
     */
    public function updateTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->locked)) {
            $query['Locked'] = $request->locked;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->transcodeTemplateGroupId)) {
            $query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }
        if (!Utils::isUnset($request->transcodeTemplateList)) {
            $query['TranscodeTemplateList'] = $request->transcodeTemplateList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTranscodeTemplateGroup',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the transcoding template group.
     *   *
     * @param UpdateTranscodeTemplateGroupRequest $request UpdateTranscodeTemplateGroupRequest
     *
     * @return UpdateTranscodeTemplateGroupResponse UpdateTranscodeTemplateGroupResponse
     */
    public function updateTranscodeTemplateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * The ID of the video.
     *   *
     * @param UpdateVideoInfoRequest $request UpdateVideoInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVideoInfoResponse UpdateVideoInfoResponse
     */
    public function updateVideoInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->videoId)) {
            $query['VideoId'] = $request->videoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVideoInfo',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVideoInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the video.
     *   *
     * @param UpdateVideoInfoRequest $request UpdateVideoInfoRequest
     *
     * @return UpdateVideoInfoResponse UpdateVideoInfoResponse
     */
    public function updateVideoInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVideoInfoWithOptions($request, $runtime);
    }

    /**
     * The IDs of the videos that do not exist.
     *   *
     * @param UpdateVideoInfosRequest $request UpdateVideoInfosRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVideoInfosResponse UpdateVideoInfosResponse
     */
    public function updateVideoInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->updateContent)) {
            $query['UpdateContent'] = $request->updateContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVideoInfos',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVideoInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The IDs of the videos that do not exist.
     *   *
     * @param UpdateVideoInfosRequest $request UpdateVideoInfosRequest
     *
     * @return UpdateVideoInfosResponse UpdateVideoInfosResponse
     */
    public function updateVideoInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVideoInfosWithOptions($request, $runtime);
    }

    /**
     * > This operation is available only in the **China (Shanghai)** region.
     *   *
     * @param UpdateVodDomainRequest $request UpdateVodDomainRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVodDomainResponse UpdateVodDomainResponse
     */
    public function updateVodDomainWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVodDomain',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is available only in the **China (Shanghai)** region.
     *   *
     * @param UpdateVodDomainRequest $request UpdateVodDomainRequest
     *
     * @return UpdateVodDomainResponse UpdateVodDomainResponse
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateConfig)) {
            $query['TemplateConfig'] = $request->templateConfig;
        }
        if (!Utils::isUnset($request->vodTemplateId)) {
            $query['VodTemplateId'] = $request->vodTemplateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVodTemplate',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * The configurations such as the position and effect of the text watermark or image watermark. The value is a JSON-formatted string.
     *   * > The value of this parameter varies with the watermark type. For more information about the data structure, see the "WatermarkConfig" section of the [Media processing parameters](~~98618~~) topic.
     *   *
     * @param UpdateWatermarkRequest $request UpdateWatermarkRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWatermarkResponse UpdateWatermarkResponse
     */
    public function updateWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->watermarkConfig)) {
            $query['WatermarkConfig'] = $request->watermarkConfig;
        }
        if (!Utils::isUnset($request->watermarkId)) {
            $query['WatermarkId'] = $request->watermarkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWatermark',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The configurations such as the position and effect of the text watermark or image watermark. The value is a JSON-formatted string.
     *   * > The value of this parameter varies with the watermark type. For more information about the data structure, see the "WatermarkConfig" section of the [Media processing parameters](~~98618~~) topic.
     *   *
     * @param UpdateWatermarkRequest $request UpdateWatermarkRequest
     *
     * @return UpdateWatermarkResponse UpdateWatermarkResponse
     */
    public function updateWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWatermarkWithOptions($request, $runtime);
    }

    /**
     * The ID of the workflow. To view the ID of the workflow, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     *   * > If both the WorkflowId and TemplateGroupId parameters are set, the value of the WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
     *   *
     * @param UploadMediaByURLRequest $request UploadMediaByURLRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadMediaByURLResponse UploadMediaByURLResponse
     */
    public function uploadMediaByURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->storageLocation)) {
            $query['StorageLocation'] = $request->storageLocation;
        }
        if (!Utils::isUnset($request->templateGroupId)) {
            $query['TemplateGroupId'] = $request->templateGroupId;
        }
        if (!Utils::isUnset($request->uploadMetadatas)) {
            $query['UploadMetadatas'] = $request->uploadMetadatas;
        }
        if (!Utils::isUnset($request->uploadURLs)) {
            $query['UploadURLs'] = $request->uploadURLs;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadMediaByURL',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMediaByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the workflow. To view the ID of the workflow, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     *   * > If both the WorkflowId and TemplateGroupId parameters are set, the value of the WorkflowId parameter takes effect. For more information, see [Workflows](~~115347~~).
     *   *
     * @param UploadMediaByURLRequest $request UploadMediaByURLRequest
     *
     * @return UploadMediaByURLResponse UploadMediaByURLResponse
     */
    public function uploadMediaByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMediaByURLWithOptions($request, $runtime);
    }

    /**
     * The URL of the transcoded stream.
     *   * If URL authentication is required, you must pass authentication information in this parameter and make sure that the URL can be accessed over the Internet.
     *   *
     * @param UploadStreamByURLRequest $request UploadStreamByURLRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadStreamByURLResponse UploadStreamByURLResponse
     */
    public function uploadStreamByURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->fileExtension)) {
            $query['FileExtension'] = $request->fileExtension;
        }
        if (!Utils::isUnset($request->HDRType)) {
            $query['HDRType'] = $request->HDRType;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->streamURL)) {
            $query['StreamURL'] = $request->streamURL;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadStreamByURL',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadStreamByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The URL of the transcoded stream.
     *   * If URL authentication is required, you must pass authentication information in this parameter and make sure that the URL can be accessed over the Internet.
     *   *
     * @param UploadStreamByURLRequest $request UploadStreamByURLRequest
     *
     * @return UploadStreamByURLResponse UploadStreamByURLResponse
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
            'action'      => 'VerifyVodDomainOwner',
            'version'     => '2017-03-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
