<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddCategoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddCategoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodStorageForAppRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodStorageForAppResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AttachAppPolicyToIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AttachAppPolicyToIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchSetVodDomainConfigsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchSetVodDomainConfigsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStartVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStartVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStopVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStopVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CancelUrlUploadJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CancelUrlUploadJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ChangeResourceGroupResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteEditingProjectMaterialsResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeMediaDistributionRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeMediaDistributionResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataByLayerRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataByLayerResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainHitRateDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainHitRateDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainMax95BpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainMax95BpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainQpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainQpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeBpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeBpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeByteHitRateDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeByteHitRateDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeDetailDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeDetailDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeHttpCodeDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeHttpCodeDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeQpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeQpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeReqHitRateDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeReqHitRateDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeTrafficDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeTrafficDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainReqHitRateDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainReqHitRateDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcBpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcBpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcTrafficDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcTrafficDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodEditingUsageDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodEditingUsageDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodMediaPlayDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodMediaPlayDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRangeDataByLocateAndIspServiceRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRangeDataByLocateAndIspServiceResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshQuotaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshQuotaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodSSLCertificateListRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodSSLCertificateListResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageRetrievalDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageRetrievalDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodVerifyContentRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodVerifyContentResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DetachAppPolicyFromIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DetachAppPolicyFromIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GenerateDownloadSecretKeyRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GenerateDownloadSecretKeyResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDailyPlayRegionStatisRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDailyPlayRegionStatisResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDefaultAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDefaultAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDigitalWatermarkExtractResultRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDigitalWatermarkExtractResultResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\ListJobInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListJobInfoResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\SetVodDomainSSLCertificateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetVodDomainSSLCertificateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageAuditJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIImageJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIMediaAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIMediaAuditJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDigitalWatermarkExtractJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDigitalWatermarkExtractJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitMediaDNADeleteJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitMediaDNADeleteJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobShrinkRequest;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Vod extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'vod.cn-shanghai.aliyuncs.com',
            'ap-northeast-2-pop' => 'vod.aliyuncs.com',
            'ap-southeast-2' => 'vod.aliyuncs.com',
            'ap-southeast-3' => 'vod.aliyuncs.com',
            'cn-beijing-finance-1' => 'vod.aliyuncs.com',
            'cn-beijing-finance-pop' => 'vod.aliyuncs.com',
            'cn-beijing-gov-1' => 'vod.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'vod.aliyuncs.com',
            'cn-chengdu' => 'vod.aliyuncs.com',
            'cn-edge-1' => 'vod.aliyuncs.com',
            'cn-fujian' => 'vod.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'vod.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'vod.aliyuncs.com',
            'cn-hangzhou-finance' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'vod.aliyuncs.com',
            'cn-hangzhou-test-306' => 'vod.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'vod.aliyuncs.com',
            'cn-huhehaote' => 'vod.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'vod.aliyuncs.com',
            'cn-qingdao' => 'vod.aliyuncs.com',
            'cn-qingdao-nebula' => 'vod.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'vod.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'vod.aliyuncs.com',
            'cn-shanghai-finance-1' => 'vod.aliyuncs.com',
            'cn-shanghai-inner' => 'vod.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'vod.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'vod.aliyuncs.com',
            'cn-shenzhen-inner' => 'vod.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'vod.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'vod.aliyuncs.com',
            'cn-wuhan' => 'vod.aliyuncs.com',
            'cn-wulanchabu' => 'vod.aliyuncs.com',
            'cn-yushanfang' => 'vod.aliyuncs.com',
            'cn-zhangbei' => 'vod.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'vod.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'vod.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'vod.aliyuncs.com',
            'eu-west-1-oxs' => 'vod.aliyuncs.com',
            'me-east-1' => 'vod.aliyuncs.com',
            'rus-west-1-pop' => 'vod.aliyuncs.com',
            'us-east-1' => 'vod.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds an AI template for automated review and smart thumbnail tasks.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   Before you add an AI template for automated review and smart thumbnail tasks, make sure that [automated review](https://ai.aliyun.com/vi/censor) and [smart thumbnail](https://ai.aliyun.com/vi/cover) are enabled.
     *
     * @param request - AddAITemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAITemplateResponse
     *
     * @param AddAITemplateRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddAITemplateResponse
     */
    public function addAITemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAITemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an AI template for automated review and smart thumbnail tasks.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   Before you add an AI template for automated review and smart thumbnail tasks, make sure that [automated review](https://ai.aliyun.com/vi/censor) and [smart thumbnail](https://ai.aliyun.com/vi/cover) are enabled.
     *
     * @param request - AddAITemplateRequest
     *
     * @returns AddAITemplateResponse
     *
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
     * Creates a video category. You can call this operation to categorize media assets including audio or video files, images, and short video materials in ApsaraVideo VOD. This simplifies the query and management of media assets.
     *
     * @remarks
     *   You can create a maximum of 3 levels of categories for audio, video, and image files and 2 levels of categories for short video materials. Each category level can contain a maximum of 100 subcategories. To create categories for audio and video files, set `Type` to `default`. To create categories for short video materials, set `Type` to `material`.
     * *   After you create a category, you can categorize media resources during upload or categorize the uploaded media resources. For more information, see [Manage video categories](https://help.aliyun.com/document_detail/86070.html).
     *
     * @param request - AddCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCategoryResponse
     *
     * @param AddCategoryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddCategoryResponse
     */
    public function addCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateName) {
            @$query['CateName'] = $request->cateName;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCategory',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a video category. You can call this operation to categorize media assets including audio or video files, images, and short video materials in ApsaraVideo VOD. This simplifies the query and management of media assets.
     *
     * @remarks
     *   You can create a maximum of 3 levels of categories for audio, video, and image files and 2 levels of categories for short video materials. Each category level can contain a maximum of 100 subcategories. To create categories for audio and video files, set `Type` to `default`. To create categories for short video materials, set `Type` to `material`.
     * *   After you create a category, you can categorize media resources during upload or categorize the uploaded media resources. For more information, see [Manage video categories](https://help.aliyun.com/document_detail/86070.html).
     *
     * @param request - AddCategoryRequest
     *
     * @returns AddCategoryResponse
     *
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
     * Creates an online editing project.
     *
     * @remarks
     *   For more information about the online editing feature, see [Overview](https://help.aliyun.com/document_detail/95482.html).
     *
     * @param request - AddEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddEditingProjectResponse
     *
     * @param AddEditingProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddEditingProjectResponse
     */
    public function addEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->division) {
            @$query['Division'] = $request->division;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->timeline) {
            @$query['Timeline'] = $request->timeline;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddEditingProject',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an online editing project.
     *
     * @remarks
     *   For more information about the online editing feature, see [Overview](https://help.aliyun.com/document_detail/95482.html).
     *
     * @param request - AddEditingProjectRequest
     *
     * @returns AddEditingProjectResponse
     *
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
     * Adds one or more materials to an editing project.
     *
     * @param request - AddEditingProjectMaterialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddEditingProjectMaterialsResponse
     *
     * @param AddEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->materialIds) {
            @$query['MaterialIds'] = $request->materialIds;
        }

        if (null !== $request->materialType) {
            @$query['MaterialType'] = $request->materialType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddEditingProjectMaterials',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more materials to an editing project.
     *
     * @param request - AddEditingProjectMaterialsRequest
     *
     * @returns AddEditingProjectMaterialsResponse
     *
     * @param AddEditingProjectMaterialsRequest $request
     *
     * @return AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * Creates a transcoding template group or adds transcoding templates to a transcoding template group.
     *
     * @remarks
     *   You cannot perform custom operations on transcoding template groups that are **locked** in the ApsaraVideo VOD console. You can call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the information about a transcoding template group and check whether the transcoding template group is locked based on the value of the Locked parameter. You can call the [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to unlock a transcoding template group if it is locked. Then, you can perform custom operations on the transcoding template group.
     * *   An Object Storage Service (OSS) bucket is required to store files that are used for transcoding. You cannot create a transcoding template group if no bucket is available. To activate a bucket, perform the following operations: Log on to the ApsaraVideo VOD console. In the left-side navigation pane, choose **Configuration Management > Media Management > Storage**. On the **Storage** page, activate the bucket that is allocated by ApsaraVideo VOD.
     * *   You cannot add transcoding templates to the **No Transcoding** template group.
     * *   You can create a maximum of 20 transcoding template groups.
     * *   You can add a maximum of 20 transcoding templates to a transcoding template group.
     * *   If you want to generate a URL for adaptive bitrate streaming, you can add video packaging templates to a transcoding template group. You can add a maximum of 10 video packaging templates to a transcoding template group. If you add more than 10 video packaging templates, URLs of the video transcoded based on the video packaging templates are generated but the URL for adaptive bitrate streaming is not generated.
     * ### QPS limits
     * You can call this operation up to five times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - AddTranscodeTemplateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTranscodeTemplateGroupResponse
     *
     * @param AddTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddTranscodeTemplateGroupResponse
     */
    public function addTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->transcodeTemplateGroupId) {
            @$query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }

        if (null !== $request->transcodeTemplateList) {
            @$query['TranscodeTemplateList'] = $request->transcodeTemplateList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTranscodeTemplateGroup',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a transcoding template group or adds transcoding templates to a transcoding template group.
     *
     * @remarks
     *   You cannot perform custom operations on transcoding template groups that are **locked** in the ApsaraVideo VOD console. You can call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the information about a transcoding template group and check whether the transcoding template group is locked based on the value of the Locked parameter. You can call the [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to unlock a transcoding template group if it is locked. Then, you can perform custom operations on the transcoding template group.
     * *   An Object Storage Service (OSS) bucket is required to store files that are used for transcoding. You cannot create a transcoding template group if no bucket is available. To activate a bucket, perform the following operations: Log on to the ApsaraVideo VOD console. In the left-side navigation pane, choose **Configuration Management > Media Management > Storage**. On the **Storage** page, activate the bucket that is allocated by ApsaraVideo VOD.
     * *   You cannot add transcoding templates to the **No Transcoding** template group.
     * *   You can create a maximum of 20 transcoding template groups.
     * *   You can add a maximum of 20 transcoding templates to a transcoding template group.
     * *   If you want to generate a URL for adaptive bitrate streaming, you can add video packaging templates to a transcoding template group. You can add a maximum of 10 video packaging templates to a transcoding template group. If you add more than 10 video packaging templates, URLs of the video transcoded based on the video packaging templates are generated but the URL for adaptive bitrate streaming is not generated.
     * ### QPS limits
     * You can call this operation up to five times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - AddTranscodeTemplateGroupRequest
     *
     * @returns AddTranscodeTemplateGroupResponse
     *
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
     * Adds a domain name to accelerate in ApsaraVideo VOD.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   Before you add a domain name to accelerate, you must activate ApsaraVideo VOD and apply for an Internet content provider (ICP) filing for the domain name. For more information about how to activate ApsaraVideo VOD, see [Activate ApsaraVideo VOD](https://help.aliyun.com/document_detail/51512.html).
     * *   If the content on the origin server is not stored on Alibaba Cloud, the content must be reviewed by Alibaba Cloud. The review will be complete by the end of the next business day after you submit an application.
     * *   You can add only one domain name to accelerate in a request. You can add a maximum of 20 accelerated domain names within an Alibaba Cloud account.
     *
     * @param request - AddVodDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddVodDomainResponse
     *
     * @param AddVodDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddVodDomainResponse
     */
    public function addVodDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkUrl) {
            @$query['CheckUrl'] = $request->checkUrl;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sources) {
            @$query['Sources'] = $request->sources;
        }

        if (null !== $request->topLevelDomain) {
            @$query['TopLevelDomain'] = $request->topLevelDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddVodDomain',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a domain name to accelerate in ApsaraVideo VOD.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   Before you add a domain name to accelerate, you must activate ApsaraVideo VOD and apply for an Internet content provider (ICP) filing for the domain name. For more information about how to activate ApsaraVideo VOD, see [Activate ApsaraVideo VOD](https://help.aliyun.com/document_detail/51512.html).
     * *   If the content on the origin server is not stored on Alibaba Cloud, the content must be reviewed by Alibaba Cloud. The review will be complete by the end of the next business day after you submit an application.
     * *   You can add only one domain name to accelerate in a request. You can add a maximum of 20 accelerated domain names within an Alibaba Cloud account.
     *
     * @param request - AddVodDomainRequest
     *
     * @returns AddVodDomainResponse
     *
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
     * Binds a storage bucket to one or more applications in ApsaraVideo VOD.
     *
     * @remarks
     * You can call this operation to add a buckets to an ApsaraVideo VOD applications.
     * > You can add only one ApsaraVideo VOD bucket for each application. If you specify an AppId that does not exist or the ID of an application for which an VOD bucket is enabled, an error is returned.
     *
     * @param request - AddVodStorageForAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddVodStorageForAppResponse
     *
     * @param AddVodStorageForAppRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddVodStorageForAppResponse
     */
    public function addVodStorageForAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->storageLocation) {
            @$query['StorageLocation'] = $request->storageLocation;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddVodStorageForApp',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddVodStorageForAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a storage bucket to one or more applications in ApsaraVideo VOD.
     *
     * @remarks
     * You can call this operation to add a buckets to an ApsaraVideo VOD applications.
     * > You can add only one ApsaraVideo VOD bucket for each application. If you specify an AppId that does not exist or the ID of an application for which an VOD bucket is enabled, an error is returned.
     *
     * @param request - AddVodStorageForAppRequest
     *
     * @returns AddVodStorageForAppResponse
     *
     * @param AddVodStorageForAppRequest $request
     *
     * @return AddVodStorageForAppResponse
     */
    public function addVodStorageForApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVodStorageForAppWithOptions($request, $runtime);
    }

    /**
     * Adds a snapshot template or frame animation template.
     *
     * @remarks
     *   After you add a snapshot template, you can call the [SubmitSnapshotJob](https://help.aliyun.com/document_detail/72213.html) operation and specify the template ID to submit a snapshot job.
     * *   You can use the HTTP (HTTPS compatible) callback or MNS callback method to receive the [SnapshotComplete](https://help.aliyun.com/document_detail/57337.html) callback. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - AddVodTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddVodTemplateResponse
     *
     * @param AddVodTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddVodTemplateResponse
     */
    public function addVodTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddVodTemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a snapshot template or frame animation template.
     *
     * @remarks
     *   After you add a snapshot template, you can call the [SubmitSnapshotJob](https://help.aliyun.com/document_detail/72213.html) operation and specify the template ID to submit a snapshot job.
     * *   You can use the HTTP (HTTPS compatible) callback or MNS callback method to receive the [SnapshotComplete](https://help.aliyun.com/document_detail/57337.html) callback. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - AddVodTemplateRequest
     *
     * @returns AddVodTemplateResponse
     *
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
     * Creates an image or text watermark. ApsaraVideo VOD allows you to create watermark templates to reuse your parameter configurations such as watermark position, size, font, and color. Each watermark template is assigned a unique ID. This simplifies the progress of creating watermark tasks.
     *
     * @remarks
     *   You can call this operation to create an `Image` watermark template or a `Text` watermark template. You can use static images in the PNG format or dynamic images in the GIF, APNG, and MOV formats as image watermarks.
     * *   After you call this operation to create a watermark template, you must call the [AddTranscodeTemplateGroup](~~AddTranscodeTemplateGroup~~) or [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to associate the watermark template with a transcoding template group. This way, you can add watermarks to videos during transcoding.
     * *   For more information, see [Video watermarks](https://help.aliyun.com/document_detail/99369.html).
     *
     * @param request - AddWatermarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWatermarkResponse
     *
     * @param AddWatermarkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddWatermarkResponse
     */
    public function addWatermarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->watermarkConfig) {
            @$query['WatermarkConfig'] = $request->watermarkConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddWatermark',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an image or text watermark. ApsaraVideo VOD allows you to create watermark templates to reuse your parameter configurations such as watermark position, size, font, and color. Each watermark template is assigned a unique ID. This simplifies the progress of creating watermark tasks.
     *
     * @remarks
     *   You can call this operation to create an `Image` watermark template or a `Text` watermark template. You can use static images in the PNG format or dynamic images in the GIF, APNG, and MOV formats as image watermarks.
     * *   After you call this operation to create a watermark template, you must call the [AddTranscodeTemplateGroup](~~AddTranscodeTemplateGroup~~) or [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to associate the watermark template with a transcoding template group. This way, you can add watermarks to videos during transcoding.
     * *   For more information, see [Video watermarks](https://help.aliyun.com/document_detail/99369.html).
     *
     * @param request - AddWatermarkRequest
     *
     * @returns AddWatermarkResponse
     *
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
     * Grants a RAM user or RAM role permissions to access ApsaraVideo VOD applications.
     *
     * @remarks
     * > You can grant a RAM user or RAM role permissions to access up to 10 applications.
     *
     * @param request - AttachAppPolicyToIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachAppPolicyToIdentityResponse
     *
     * @param AttachAppPolicyToIdentityRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AttachAppPolicyToIdentityResponse
     */
    public function attachAppPolicyToIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->identityName) {
            @$query['IdentityName'] = $request->identityName;
        }

        if (null !== $request->identityType) {
            @$query['IdentityType'] = $request->identityType;
        }

        if (null !== $request->policyNames) {
            @$query['PolicyNames'] = $request->policyNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachAppPolicyToIdentity',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachAppPolicyToIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants a RAM user or RAM role permissions to access ApsaraVideo VOD applications.
     *
     * @remarks
     * > You can grant a RAM user or RAM role permissions to access up to 10 applications.
     *
     * @param request - AttachAppPolicyToIdentityRequest
     *
     * @returns AttachAppPolicyToIdentityResponse
     *
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
     * Obtains the basic information and source file information of multiple media assets.
     *
     * @remarks
     *   You can specify up to 20 audio or video file IDs in each request.
     * *   After a media file is uploaded, ApsaraVideo VOD processes the source file. Then, information about the media file is asynchronously generated. You can configure notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event and call this operation to query information about a media file after you receive notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - BatchGetMediaInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetMediaInfosResponse
     *
     * @param BatchGetMediaInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchGetMediaInfosResponse
     */
    public function batchGetMediaInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetMediaInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the basic information and source file information of multiple media assets.
     *
     * @remarks
     *   You can specify up to 20 audio or video file IDs in each request.
     * *   After a media file is uploaded, ApsaraVideo VOD processes the source file. Then, information about the media file is asynchronously generated. You can configure notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event and call this operation to query information about a media file after you receive notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - BatchGetMediaInfosRequest
     *
     * @returns BatchGetMediaInfosResponse
     *
     * @param BatchGetMediaInfosRequest $request
     *
     * @return BatchGetMediaInfosResponse
     */
    public function batchGetMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetMediaInfosWithOptions($request, $runtime);
    }

    /**
     * Configures one or more domain names for CDN.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - BatchSetVodDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSetVodDomainConfigsResponse
     *
     * @param BatchSetVodDomainConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchSetVodDomainConfigsResponse
     */
    public function batchSetVodDomainConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->functions) {
            @$query['Functions'] = $request->functions;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchSetVodDomainConfigs',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetVodDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures one or more domain names for CDN.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - BatchSetVodDomainConfigsRequest
     *
     * @returns BatchSetVodDomainConfigsResponse
     *
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
     * Enables accelerated domain names that are in the disabled state.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If the domain name that you want to enable is invalid or your Alibaba Cloud account has overdue payments, you cannot call this operation to enable the domain name.
     *
     * @param request - BatchStartVodDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStartVodDomainResponse
     *
     * @param BatchStartVodDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchStartVodDomainResponse
     */
    public function batchStartVodDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStartVodDomain',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStartVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables accelerated domain names that are in the disabled state.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If the domain name that you want to enable is invalid or your Alibaba Cloud account has overdue payments, you cannot call this operation to enable the domain name.
     *
     * @param request - BatchStartVodDomainRequest
     *
     * @returns BatchStartVodDomainResponse
     *
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
     * Disables accelerated domain names.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   After you disable an accelerated domain name, the information about the domain name is retained. The system automatically reroutes all the requests that are destined for the domain name to the origin server.
     *
     * @param request - BatchStopVodDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStopVodDomainResponse
     *
     * @param BatchStopVodDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchStopVodDomainResponse
     */
    public function batchStopVodDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStopVodDomain',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStopVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables accelerated domain names.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   After you disable an accelerated domain name, the information about the domain name is retained. The system automatically reroutes all the requests that are destined for the domain name to the origin server.
     *
     * @param request - BatchStopVodDomainRequest
     *
     * @returns BatchStopVodDomainResponse
     *
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
     * Cancels URL-based upload jobs in the queue.
     *
     * @remarks
     *   You can cancel only URL-based upload jobs in the **Pending** state. You can query the status of a URL-based upload job by calling the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation.
     * *   You cannot cancel an upload job that already starts.
     * *   You must specify either JobIds or UploadUrls. If you specify both parameters, only JobIds takes effect.
     *
     * @param request - CancelUrlUploadJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelUrlUploadJobsResponse
     *
     * @param CancelUrlUploadJobsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelUrlUploadJobsResponse
     */
    public function cancelUrlUploadJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->uploadUrls) {
            @$query['UploadUrls'] = $request->uploadUrls;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelUrlUploadJobs',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelUrlUploadJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels URL-based upload jobs in the queue.
     *
     * @remarks
     *   You can cancel only URL-based upload jobs in the **Pending** state. You can query the status of a URL-based upload job by calling the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation.
     * *   You cannot cancel an upload job that already starts.
     * *   You must specify either JobIds or UploadUrls. If you specify both parameters, only JobIds takes effect.
     *
     * @param request - CancelUrlUploadJobsRequest
     *
     * @returns CancelUrlUploadJobsResponse
     *
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
     * Transfers a resource to a specified resource group.
     *
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
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2017-03-21',
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
     * Transfers a resource to a specified resource group.
     *
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
     * Creates an application.
     *
     * @remarks
     * You can create up to 10 applications within an Alibaba Cloud account. For more information, see [Multi-application service](https://help.aliyun.com/document_detail/113600.html).
     * ### QPS limits
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VOD](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - CreateAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInfoResponse
     *
     * @param CreateAppInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAppInfoResponse
     */
    public function createAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application.
     *
     * @remarks
     * You can create up to 10 applications within an Alibaba Cloud account. For more information, see [Multi-application service](https://help.aliyun.com/document_detail/113600.html).
     * ### QPS limits
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VOD](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - CreateAppInfoRequest
     *
     * @returns CreateAppInfoResponse
     *
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
     * Performs manual review on media files, such as audio and video files.
     *
     * @param request - CreateAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAuditResponse
     *
     * @param CreateAuditRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAuditResponse
     */
    public function createAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditContent) {
            @$query['AuditContent'] = $request->auditContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAudit',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs manual review on media files, such as audio and video files.
     *
     * @param request - CreateAuditRequest
     *
     * @returns CreateAuditResponse
     *
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
     * Obtains an upload URL and an upload credential for an auxiliary media asset such as a watermark image, subtitle file, or material and generates the media ID. ApsaraVideo VOD issues upload URLs and credentials to perform authorization and ensure security. This prevents unauthorized users from uploading media files. ApsaraVideo VOD generates media IDs together with upload URLs and credentials. Media IDs are used in lifecycle management and media processing.
     *
     * @remarks
     *   **Make sure that you understand the billing method and prices of ApsaraVideo VOD before you call this operation. You are charged storage fees after you upload media files to ApsaraVideo VOD. For more information, see [Billing of media asset storage](~~188308#section_e97_xrp_mzz~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   You can call this operation only to obtain the upload URLs and credentials for media files and create media assets in ApsaraVideo VOD. You cannot call this operation to upload media files. For more information about how to upload media files by calling API operations, see [Upload media files by calling API operations](https://help.aliyun.com/document_detail/476208.html).
     * *   If the upload credential expires after 3,000 seconds, you can call the CreateUploadAttachedMedia operation again to obtain a new upload URL and a new upload credential.
     * *   You can configure a callback to receive an [AttachedMediaUploadComplete](https://help.aliyun.com/document_detail/103250.html) event notification to determine whether the upload is successful.
     * *   You must obtain a URL and a credential before you upload a media file to ApsaraVideo VOD. ApsaraVideo VOD supports multiple upload methods. Each method has different requirements on upload URLs and credentials. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     *
     * @param request - CreateUploadAttachedMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUploadAttachedMediaResponse
     *
     * @param CreateUploadAttachedMediaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateUploadAttachedMediaResponse
     */
    public function createUploadAttachedMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->cateIds) {
            @$query['CateIds'] = $request->cateIds;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileSize) {
            @$query['FileSize'] = $request->fileSize;
        }

        if (null !== $request->mediaExt) {
            @$query['MediaExt'] = $request->mediaExt;
        }

        if (null !== $request->storageLocation) {
            @$query['StorageLocation'] = $request->storageLocation;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUploadAttachedMedia',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUploadAttachedMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains an upload URL and an upload credential for an auxiliary media asset such as a watermark image, subtitle file, or material and generates the media ID. ApsaraVideo VOD issues upload URLs and credentials to perform authorization and ensure security. This prevents unauthorized users from uploading media files. ApsaraVideo VOD generates media IDs together with upload URLs and credentials. Media IDs are used in lifecycle management and media processing.
     *
     * @remarks
     *   **Make sure that you understand the billing method and prices of ApsaraVideo VOD before you call this operation. You are charged storage fees after you upload media files to ApsaraVideo VOD. For more information, see [Billing of media asset storage](~~188308#section_e97_xrp_mzz~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   You can call this operation only to obtain the upload URLs and credentials for media files and create media assets in ApsaraVideo VOD. You cannot call this operation to upload media files. For more information about how to upload media files by calling API operations, see [Upload media files by calling API operations](https://help.aliyun.com/document_detail/476208.html).
     * *   If the upload credential expires after 3,000 seconds, you can call the CreateUploadAttachedMedia operation again to obtain a new upload URL and a new upload credential.
     * *   You can configure a callback to receive an [AttachedMediaUploadComplete](https://help.aliyun.com/document_detail/103250.html) event notification to determine whether the upload is successful.
     * *   You must obtain a URL and a credential before you upload a media file to ApsaraVideo VOD. ApsaraVideo VOD supports multiple upload methods. Each method has different requirements on upload URLs and credentials. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     *
     * @param request - CreateUploadAttachedMediaRequest
     *
     * @returns CreateUploadAttachedMediaResponse
     *
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
     * Queries a URL and a credential for uploading an image.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged storage fees after you upload media files to ApsaraVideo VOD. For more information, see [Billing of media asset storage](~~188308#section_e97_xrp_mzz~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   You must obtain a URL and a credential before you upload an image to ApsaraVideo VOD. ApsaraVideo VOD provides multiple upload methods. You can upload files by using server upload SDKs, client upload SDKs, URLs, Object Storage Service (OSS) API, or OSS SDKs. Each upload method has different requirements for obtaining upload URLs and credentials. For more information, see the "Usage notes" section of the [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html) topic.
     * *   You cannot refresh the upload URL or credential when you upload images. If the image upload credential expires, you can call this operation to obtain a new upload URL and credential. By default, the validity period of an image upload credential is 3,000 seconds.
     * *   You can call the [CreateUploadAttachedMedia](https://help.aliyun.com/document_detail/98467.html) operation to upload image watermarks.
     * *   You can configure a callback for [ImageUploadComplete](https://help.aliyun.com/document_detail/91968.html) to receive notifications about the image upload status.
     *
     * @param request - CreateUploadImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUploadImageResponse
     *
     * @param CreateUploadImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUploadImageResponse
     */
    public function createUploadImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->imageExt) {
            @$query['ImageExt'] = $request->imageExt;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->originalFileName) {
            @$query['OriginalFileName'] = $request->originalFileName;
        }

        if (null !== $request->storageLocation) {
            @$query['StorageLocation'] = $request->storageLocation;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUploadImage',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUploadImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a URL and a credential for uploading an image.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged storage fees after you upload media files to ApsaraVideo VOD. For more information, see [Billing of media asset storage](~~188308#section_e97_xrp_mzz~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   You must obtain a URL and a credential before you upload an image to ApsaraVideo VOD. ApsaraVideo VOD provides multiple upload methods. You can upload files by using server upload SDKs, client upload SDKs, URLs, Object Storage Service (OSS) API, or OSS SDKs. Each upload method has different requirements for obtaining upload URLs and credentials. For more information, see the "Usage notes" section of the [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html) topic.
     * *   You cannot refresh the upload URL or credential when you upload images. If the image upload credential expires, you can call this operation to obtain a new upload URL and credential. By default, the validity period of an image upload credential is 3,000 seconds.
     * *   You can call the [CreateUploadAttachedMedia](https://help.aliyun.com/document_detail/98467.html) operation to upload image watermarks.
     * *   You can configure a callback for [ImageUploadComplete](https://help.aliyun.com/document_detail/91968.html) to receive notifications about the image upload status.
     *
     * @param request - CreateUploadImageRequest
     *
     * @returns CreateUploadImageResponse
     *
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
     * Obtains an upload URL and an upload credential for uploading an audio or video file and generates the audio or video ID. ApsaraVideo VOD issues upload URLs and credentials to perform authorization and ensure security. This prevents unauthorized users from uploading media files. ApsaraVideo VOD generates media IDs, video IDs, and image IDs together with upload URLs and credentials. Media IDs are used in lifecycle management and media processing.
     *
     * @remarks
     *   **Make sure that you understand the billing method and prices of ApsaraVideo VOD before you call this operation. You are charged storage fees after you upload media files to ApsaraVideo VOD. For more information, see [Billing of media asset storage](~~188308#section_e97_xrp_mzz~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   You can call this operation to obtain upload URLs and credentials for video and audio files. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     * *   You can call this operation only to obtain the upload URLs and credentials for media files and create media assets in ApsaraVideo VOD. You cannot call this operation to upload media files. For more information about how to upload media files by calling API operations, see [Upload media files by calling API operations](https://help.aliyun.com/document_detail/476208.html).
     * *   If the upload credential expires, call the [RefreshUploadVideo](~~RefreshUploadVideo~~) operation to obtain a new upload credential. The default validity period of an upload credential is 3,000 seconds.
     * *   You can configure a callback to receive an event notification when an audio or video file is uploaded. Alternatively, after you upload an audio or video file, you can call the [GetMezzanineInfo](https://help.aliyun.com/document_detail/59624.html) operation to determine whether the upload is successful. For more information, see [Overview](https://help.aliyun.com/document_detail/55396.html).
     * *   The value of the VideoId parameter that is returned after you call this operation can be used for media processing or the lifecycle management of media assets.
     * *   You must obtain a URL and a credential before you upload a media file to ApsaraVideo VOD. ApsaraVideo VOD supports multiple upload methods. Each method has different requirements on upload URLs and credentials. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     *
     * @param request - CreateUploadVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUploadVideoResponse
     *
     * @param CreateUploadVideoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUploadVideoResponse
     */
    public function createUploadVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileSize) {
            @$query['FileSize'] = $request->fileSize;
        }

        if (null !== $request->storageLocation) {
            @$query['StorageLocation'] = $request->storageLocation;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templateGroupId) {
            @$query['TemplateGroupId'] = $request->templateGroupId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUploadVideo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUploadVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains an upload URL and an upload credential for uploading an audio or video file and generates the audio or video ID. ApsaraVideo VOD issues upload URLs and credentials to perform authorization and ensure security. This prevents unauthorized users from uploading media files. ApsaraVideo VOD generates media IDs, video IDs, and image IDs together with upload URLs and credentials. Media IDs are used in lifecycle management and media processing.
     *
     * @remarks
     *   **Make sure that you understand the billing method and prices of ApsaraVideo VOD before you call this operation. You are charged storage fees after you upload media files to ApsaraVideo VOD. For more information, see [Billing of media asset storage](~~188308#section_e97_xrp_mzz~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   You can call this operation to obtain upload URLs and credentials for video and audio files. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     * *   You can call this operation only to obtain the upload URLs and credentials for media files and create media assets in ApsaraVideo VOD. You cannot call this operation to upload media files. For more information about how to upload media files by calling API operations, see [Upload media files by calling API operations](https://help.aliyun.com/document_detail/476208.html).
     * *   If the upload credential expires, call the [RefreshUploadVideo](~~RefreshUploadVideo~~) operation to obtain a new upload credential. The default validity period of an upload credential is 3,000 seconds.
     * *   You can configure a callback to receive an event notification when an audio or video file is uploaded. Alternatively, after you upload an audio or video file, you can call the [GetMezzanineInfo](https://help.aliyun.com/document_detail/59624.html) operation to determine whether the upload is successful. For more information, see [Overview](https://help.aliyun.com/document_detail/55396.html).
     * *   The value of the VideoId parameter that is returned after you call this operation can be used for media processing or the lifecycle management of media assets.
     * *   You must obtain a URL and a credential before you upload a media file to ApsaraVideo VOD. ApsaraVideo VOD supports multiple upload methods. Each method has different requirements on upload URLs and credentials. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     *
     * @param request - CreateUploadVideoRequest
     *
     * @returns CreateUploadVideoResponse
     *
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
     * Decrypts the ciphertext specified by CiphertextBlob in the Key Management Service (KMS) data key.
     *
     * @param request - DecryptKMSDataKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DecryptKMSDataKeyResponse
     *
     * @param DecryptKMSDataKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cipherText) {
            @$query['CipherText'] = $request->cipherText;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DecryptKMSDataKey',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DecryptKMSDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Decrypts the ciphertext specified by CiphertextBlob in the Key Management Service (KMS) data key.
     *
     * @param request - DecryptKMSDataKeyRequest
     *
     * @returns DecryptKMSDataKeyResponse
     *
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
     * Deletes the information about one or more images that are submitted for AI processing.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)** and **China (Shanghai)**.
     * *   This operation deletes only information about images that are submitted for AI processing. The image files are not deleted.
     *
     * @param request - DeleteAIImageInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAIImageInfosResponse
     *
     * @param DeleteAIImageInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAIImageInfosResponse
     */
    public function deleteAIImageInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AIImageInfoIds) {
            @$query['AIImageInfoIds'] = $request->AIImageInfoIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAIImageInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAIImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the information about one or more images that are submitted for AI processing.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)** and **China (Shanghai)**.
     * *   This operation deletes only information about images that are submitted for AI processing. The image files are not deleted.
     *
     * @param request - DeleteAIImageInfosRequest
     *
     * @returns DeleteAIImageInfosResponse
     *
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
     * Deletes an AI template.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You cannot delete an AI template that is set as the default template.
     *
     * @param request - DeleteAITemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAITemplateResponse
     *
     * @param DeleteAITemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAITemplateResponse
     */
    public function deleteAITemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAITemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AI template.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You cannot delete an AI template that is set as the default template.
     *
     * @param request - DeleteAITemplateRequest
     *
     * @returns DeleteAITemplateResponse
     *
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
     * Deletes an application.
     *
     * @remarks
     * Application with resources can not be deleted.
     *
     * @param request - DeleteAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppInfoResponse
     *
     * @param DeleteAppInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAppInfoResponse
     */
    public function deleteAppInfoWithOptions($request, $runtime)
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
            'action' => 'DeleteAppInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application.
     *
     * @remarks
     * Application with resources can not be deleted.
     *
     * @param request - DeleteAppInfoRequest
     *
     * @returns DeleteAppInfoResponse
     *
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
     * Deletes auxiliary media assets from ApsaraVideo VOD. You can delete multiple auxiliary media assets such as watermark images, subtitle files, and materials in a batch.
     *
     * @remarks
     *   **This operation physically deletes auxiliary media assets. You cannot recover the auxiliary media assets that you deleted. Exercise caution when you call this operation.**
     * *   You can delete a maximum of 20 auxiliary media assets in one request.
     *
     * @param request - DeleteAttachedMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAttachedMediaResponse
     *
     * @param DeleteAttachedMediaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAttachedMediaResponse
     */
    public function deleteAttachedMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAttachedMedia',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAttachedMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes auxiliary media assets from ApsaraVideo VOD. You can delete multiple auxiliary media assets such as watermark images, subtitle files, and materials in a batch.
     *
     * @remarks
     *   **This operation physically deletes auxiliary media assets. You cannot recover the auxiliary media assets that you deleted. Exercise caution when you call this operation.**
     * *   You can delete a maximum of 20 auxiliary media assets in one request.
     *
     * @param request - DeleteAttachedMediaRequest
     *
     * @returns DeleteAttachedMediaResponse
     *
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
     * Deletes a category and its subcategories.
     *
     * @remarks
     *   **After you call this operation to delete a category, all subcategories including level 2 and level 3 categories are deleted at the same time. Exercise caution when you call this operation.**
     * *   If you have classified specific media resources to a category, the category names labeled on these media resources are automatically deleted when you delete the category.
     *
     * @param request - DeleteCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCategoryResponse
     *
     * @param DeleteCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCategory',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a category and its subcategories.
     *
     * @remarks
     *   **After you call this operation to delete a category, all subcategories including level 2 and level 3 categories are deleted at the same time. Exercise caution when you call this operation.**
     * *   If you have classified specific media resources to a category, the category names labeled on these media resources are automatically deleted when you delete the category.
     *
     * @param request - DeleteCategoryRequest
     *
     * @returns DeleteCategoryResponse
     *
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
     * Deletes the information about animated stickers.
     *
     * @remarks
     * > This operation deletes only the information about animated stickers, but not the animated stickers themselves.
     *
     * @param request - DeleteDynamicImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDynamicImageResponse
     *
     * @param DeleteDynamicImageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDynamicImageResponse
     */
    public function deleteDynamicImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dynamicImageIds) {
            @$query['DynamicImageIds'] = $request->dynamicImageIds;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDynamicImage',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDynamicImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the information about animated stickers.
     *
     * @remarks
     * > This operation deletes only the information about animated stickers, but not the animated stickers themselves.
     *
     * @param request - DeleteDynamicImageRequest
     *
     * @returns DeleteDynamicImageResponse
     *
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
     * Deletes online editing projects.
     *
     * @remarks
     *   You can call this operation to delete multiple online editing projects at a time.
     *
     * @param request - DeleteEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEditingProjectResponse
     *
     * @param DeleteEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEditingProjectResponse
     */
    public function deleteEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectIds) {
            @$query['ProjectIds'] = $request->projectIds;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEditingProject',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes online editing projects.
     *
     * @remarks
     *   You can call this operation to delete multiple online editing projects at a time.
     *
     * @param request - DeleteEditingProjectRequest
     *
     * @returns DeleteEditingProjectResponse
     *
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
     * 删除剪辑资源.
     *
     * @param request - DeleteEditingProjectMaterialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEditingProjectMaterialsResponse
     *
     * @param DeleteEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->materialIds) {
            @$query['MaterialIds'] = $request->materialIds;
        }

        if (null !== $request->materialType) {
            @$query['MaterialType'] = $request->materialType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEditingProjectMaterials',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除剪辑资源.
     *
     * @param request - DeleteEditingProjectMaterialsRequest
     *
     * @returns DeleteEditingProjectMaterialsResponse
     *
     * @param DeleteEditingProjectMaterialsRequest $request
     *
     * @return DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * Deletes uploaded images and video snapshots that are automatically captured.
     *
     * @remarks
     *   **After you call this operation to delete an image, the source file is permanently deleted and cannot be recovered. Exercise caution when you call this operation.**
     * *   If some images are cached on Alibaba Cloud CDN points of presence (POPs), the image URLs do not immediately become invalid.
     * *   You can call this operation to delete uploaded images and video snapshots.
     *
     * @param request - DeleteImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteImageType) {
            @$query['DeleteImageType'] = $request->deleteImageType;
        }

        if (null !== $request->imageIds) {
            @$query['ImageIds'] = $request->imageIds;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->imageURLs) {
            @$query['ImageURLs'] = $request->imageURLs;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteImage',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes uploaded images and video snapshots that are automatically captured.
     *
     * @remarks
     *   **After you call this operation to delete an image, the source file is permanently deleted and cannot be recovered. Exercise caution when you call this operation.**
     * *   If some images are cached on Alibaba Cloud CDN points of presence (POPs), the image URLs do not immediately become invalid.
     * *   You can call this operation to delete uploaded images and video snapshots.
     *
     * @param request - DeleteImageRequest
     *
     * @returns DeleteImageResponse
     *
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
     * Deletes the callback method, callback URL, and event type of an event notification.
     *
     * @remarks
     * > For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - DeleteMessageCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMessageCallbackResponse
     *
     * @param DeleteMessageCallbackRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMessageCallbackResponse
     */
    public function deleteMessageCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMessageCallback',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the callback method, callback URL, and event type of an event notification.
     *
     * @remarks
     * > For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - DeleteMessageCallbackRequest
     *
     * @returns DeleteMessageCallbackResponse
     *
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
     * Deletes one or more source files at a time.
     *
     * @remarks
     * All media processing operations in ApsaraVideo VOD, such as transcoding, snapshot capture, and content moderation, are performed based on source files. If you delete the source files, you cannot perform media processing operations. Exercise caution when you call this operation.
     *
     * @param request - DeleteMezzaninesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMezzaninesResponse
     *
     * @param DeleteMezzaninesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMezzaninesResponse
     */
    public function deleteMezzaninesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->videoIds) {
            @$query['VideoIds'] = $request->videoIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMezzanines',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMezzaninesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more source files at a time.
     *
     * @remarks
     * All media processing operations in ApsaraVideo VOD, such as transcoding, snapshot capture, and content moderation, are performed based on source files. If you delete the source files, you cannot perform media processing operations. Exercise caution when you call this operation.
     *
     * @param request - DeleteMezzaninesRequest
     *
     * @returns DeleteMezzaninesResponse
     *
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
     * Deletes the parts generated during an upload.
     *
     * @remarks
     *   During multipart upload, useless parts may be retained if the upload fails. These useless parts are automatically deleted after 7 days. You can call this operation to delete the generated parts after the upload is successful or fails.
     * *   This operation does not delete the source file or transcoded file, but deletes only the parts generated during the upload.
     * *   If you call the [DeleteVideo](https://help.aliyun.com/document_detail/52837.html) operation, the entire video file is deleted, including the generated parts.
     *
     * @param request - DeleteMultipartUploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMultipartUploadResponse
     *
     * @param DeleteMultipartUploadRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMultipartUploadResponse
     */
    public function deleteMultipartUploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMultipartUpload',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMultipartUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the parts generated during an upload.
     *
     * @remarks
     *   During multipart upload, useless parts may be retained if the upload fails. These useless parts are automatically deleted after 7 days. You can call this operation to delete the generated parts after the upload is successful or fails.
     * *   This operation does not delete the source file or transcoded file, but deletes only the parts generated during the upload.
     * *   If you call the [DeleteVideo](https://help.aliyun.com/document_detail/52837.html) operation, the entire video file is deleted, including the generated parts.
     *
     * @param request - DeleteMultipartUploadRequest
     *
     * @returns DeleteMultipartUploadResponse
     *
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
     * Deletes one or more video or audio streams and their storage files at a time.
     *
     * @param request - DeleteStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStreamResponse
     *
     * @param DeleteStreamRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteStreamResponse
     */
    public function deleteStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStream',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more video or audio streams and their storage files at a time.
     *
     * @param request - DeleteStreamRequest
     *
     * @returns DeleteStreamResponse
     *
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
     * Deletes one or more transcoding templates from a transcoding template group or forcibly deletes a transcoding template group.
     *
     * @remarks
     *   You cannot call this operation to delete the default transcoding template. You can delete the transcoding template when it is no longer specified as the default one.
     * *   For security purposes, you cannot add, modify, or delete transcoding templates in a transcoding template group that is locked. To check whether a transcoding template group is locked, call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation and obtain the Locked parameter from the response. To modify transcoding templates within a locked transcoding template group, you must call the [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to unlock the transcoding template group first.
     *
     * @param request - DeleteTranscodeTemplateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTranscodeTemplateGroupResponse
     *
     * @param DeleteTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteTranscodeTemplateGroupResponse
     */
    public function deleteTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceDelGroup) {
            @$query['ForceDelGroup'] = $request->forceDelGroup;
        }

        if (null !== $request->transcodeTemplateGroupId) {
            @$query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }

        if (null !== $request->transcodeTemplateIds) {
            @$query['TranscodeTemplateIds'] = $request->transcodeTemplateIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTranscodeTemplateGroup',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more transcoding templates from a transcoding template group or forcibly deletes a transcoding template group.
     *
     * @remarks
     *   You cannot call this operation to delete the default transcoding template. You can delete the transcoding template when it is no longer specified as the default one.
     * *   For security purposes, you cannot add, modify, or delete transcoding templates in a transcoding template group that is locked. To check whether a transcoding template group is locked, call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation and obtain the Locked parameter from the response. To modify transcoding templates within a locked transcoding template group, you must call the [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to unlock the transcoding template group first.
     *
     * @param request - DeleteTranscodeTemplateGroupRequest
     *
     * @returns DeleteTranscodeTemplateGroupResponse
     *
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
     * Deletes one or more videos at a time, including their mezzanine files, transcoded stream files, and thumbnail snapshots.
     *
     * @remarks
     *   This operation physically deletes videos. Deleted videos cannot be recovered. Exercise caution when you call this operation.
     * *   You can call this operation to delete multiple videos at a time.
     * *   When you delete a video, its source file, transcoded stream file, and thumbnail screenshot are also deleted. However, the Alibaba Cloud Content Delivery Network (CDN) cache is not refreshed simultaneously. You can use the refresh feature in the ApsaraVideo VOD console to clear garbage data on CDN nodes. For more information, see [Refresh and prefetch](https://help.aliyun.com/document_detail/86098.html).
     *
     * @param request - DeleteVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVideoResponse
     *
     * @param DeleteVideoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteVideoResponse
     */
    public function deleteVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->videoIds) {
            @$query['VideoIds'] = $request->videoIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVideo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more videos at a time, including their mezzanine files, transcoded stream files, and thumbnail snapshots.
     *
     * @remarks
     *   This operation physically deletes videos. Deleted videos cannot be recovered. Exercise caution when you call this operation.
     * *   You can call this operation to delete multiple videos at a time.
     * *   When you delete a video, its source file, transcoded stream file, and thumbnail screenshot are also deleted. However, the Alibaba Cloud Content Delivery Network (CDN) cache is not refreshed simultaneously. You can use the refresh feature in the ApsaraVideo VOD console to clear garbage data on CDN nodes. For more information, see [Refresh and prefetch](https://help.aliyun.com/document_detail/86098.html).
     *
     * @param request - DeleteVideoRequest
     *
     * @returns DeleteVideoResponse
     *
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
     * Removes a domain name for CDN from ApsaraVideo VOD.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * > *   After a domain name for CDN is removed from ApsaraVideo VOD, the domain name becomes unavailable. Proceed with caution. We recommend that you restore the A record at your DNS service provider before you remove the domain name for CDN.
     * > *   After you call this operation to remove a domain name for CDN from ApsaraVideo VOD, all records that are related to the domain name are deleted. If you only want to disable a domain name for CDN, call the [BatchStopVodDomain](https://help.aliyun.com/document_detail/120208.html) operation.
     *
     * @param request - DeleteVodDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVodDomainResponse
     *
     * @param DeleteVodDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteVodDomainResponse
     */
    public function deleteVodDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVodDomain',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a domain name for CDN from ApsaraVideo VOD.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * > *   After a domain name for CDN is removed from ApsaraVideo VOD, the domain name becomes unavailable. Proceed with caution. We recommend that you restore the A record at your DNS service provider before you remove the domain name for CDN.
     * > *   After you call this operation to remove a domain name for CDN from ApsaraVideo VOD, all records that are related to the domain name are deleted. If you only want to disable a domain name for CDN, call the [BatchStopVodDomain](https://help.aliyun.com/document_detail/120208.html) operation.
     *
     * @param request - DeleteVodDomainRequest
     *
     * @returns DeleteVodDomainResponse
     *
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
     * Deletes the configurations of a domain name for CDN.
     *
     * @remarks
     * >
     * *   This operation is available only in the **China (Shanghai)** region.
     * *   After the configurations of a domain name for CDN are deleted, the domain name becomes unavailable. We recommend that you restore the A record at your DNS service provider before you delete the configurations of the domain name for CDN.
     * *   After you call this operation to remove a domain name for CDN from ApsaraVideo VOD, all records that are related to the domain name are deleted. If you only want to disable a domain name for CDN, call the [BatchStopVodDomain](https://help.aliyun.com/document_detail/120208.html) operation.
     *
     * @param request - DeleteVodSpecificConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVodSpecificConfigResponse
     *
     * @param DeleteVodSpecificConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteVodSpecificConfigResponse
     */
    public function deleteVodSpecificConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVodSpecificConfig',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVodSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the configurations of a domain name for CDN.
     *
     * @remarks
     * >
     * *   This operation is available only in the **China (Shanghai)** region.
     * *   After the configurations of a domain name for CDN are deleted, the domain name becomes unavailable. We recommend that you restore the A record at your DNS service provider before you delete the configurations of the domain name for CDN.
     * *   After you call this operation to remove a domain name for CDN from ApsaraVideo VOD, all records that are related to the domain name are deleted. If you only want to disable a domain name for CDN, call the [BatchStopVodDomain](https://help.aliyun.com/document_detail/120208.html) operation.
     *
     * @param request - DeleteVodSpecificConfigRequest
     *
     * @returns DeleteVodSpecificConfigResponse
     *
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
     * Deletes a snapshot template.
     *
     * @param request - DeleteVodTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVodTemplateResponse
     *
     * @param DeleteVodTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVodTemplateResponse
     */
    public function deleteVodTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vodTemplateId) {
            @$query['VodTemplateId'] = $request->vodTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVodTemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a snapshot template.
     *
     * @param request - DeleteVodTemplateRequest
     *
     * @returns DeleteVodTemplateResponse
     *
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
     * Deletes an image watermark or text watermark template.
     *
     * @remarks
     *   **After you delete an image watermark template, the source watermark file is physically deleted and cannot be restored. Exercise caution when you call this operation.**
     * *   You cannot delete the default watermark template. To delete a default watermark template, call the [SetDefaultWatermark](~~SetDefaultWatermark~~) operation to set another watermark template as the default one.
     *
     * @param request - DeleteWatermarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWatermarkResponse
     *
     * @param DeleteWatermarkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWatermarkResponse
     */
    public function deleteWatermarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->watermarkId) {
            @$query['WatermarkId'] = $request->watermarkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWatermark',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an image watermark or text watermark template.
     *
     * @remarks
     *   **After you delete an image watermark template, the source watermark file is physically deleted and cannot be restored. Exercise caution when you call this operation.**
     * *   You cannot delete the default watermark template. To delete a default watermark template, call the [SetDefaultWatermark](~~SetDefaultWatermark~~) operation to set another watermark template as the default one.
     *
     * @param request - DeleteWatermarkRequest
     *
     * @returns DeleteWatermarkResponse
     *
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
     * Queries the distribution of media asset data by time. The maximum time range to query is 6 months.
     *
     * @remarks
     *   This operation is available only in the China (Shanghai) region.
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the previous 7 days. If you set both the parameters, the request returns the data collected within the specified time range.
     *
     * @param request - DescribeMediaDistributionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMediaDistributionResponse
     *
     * @param DescribeMediaDistributionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMediaDistributionResponse
     */
    public function describeMediaDistributionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->storageClass) {
            @$query['StorageClass'] = $request->storageClass;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMediaDistribution',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMediaDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the distribution of media asset data by time. The maximum time range to query is 6 months.
     *
     * @remarks
     *   This operation is available only in the China (Shanghai) region.
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the previous 7 days. If you set both the parameters, the request returns the data collected within the specified time range.
     *
     * @param request - DescribeMediaDistributionRequest
     *
     * @returns DescribeMediaDistributionResponse
     *
     * @param DescribeMediaDistributionRequest $request
     *
     * @return DescribeMediaDistributionResponse
     */
    public function describeMediaDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMediaDistributionWithOptions($request, $runtime);
    }

    /**
     * Queries daily playback statistics on top videos, including video views, unique visitors, and total playback duration.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can query playback statistics on top 1,000 videos at most on a specified day. By default, top videos are sorted in descending order based on video views.
     * *   You can call this operation to query only playback statistics collected on videos that are played by using ApsaraVideo Player SDKs.
     * *   Playback statistics for the previous day are generated at 09:00 on the current day, in UTC+8.
     * *   You can query data that is generated since January 1, 2018. The maximum time range to query is 180 days.
     *
     * @param request - DescribePlayTopVideosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlayTopVideosResponse
     *
     * @param DescribePlayTopVideosRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePlayTopVideosResponse
     */
    public function describePlayTopVideosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizDate) {
            @$query['BizDate'] = $request->bizDate;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlayTopVideos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlayTopVideosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries daily playback statistics on top videos, including video views, unique visitors, and total playback duration.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can query playback statistics on top 1,000 videos at most on a specified day. By default, top videos are sorted in descending order based on video views.
     * *   You can call this operation to query only playback statistics collected on videos that are played by using ApsaraVideo Player SDKs.
     * *   Playback statistics for the previous day are generated at 09:00 on the current day, in UTC+8.
     * *   You can query data that is generated since January 1, 2018. The maximum time range to query is 180 days.
     *
     * @param request - DescribePlayTopVideosRequest
     *
     * @returns DescribePlayTopVideosResponse
     *
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
     * Queries the statistics on average playback each day in a specified time range.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * > *   You can call this operation to query only playback statistics collected on videos that are played by using ApsaraVideo Player SDKs.
     * > *   Playback statistics for the previous day are generated at 09:00 on the current day, in UTC+8.
     * > *   You can query data that is generated since January 1, 2018. The maximum time range to query is 180 days.
     *
     * @param request - DescribePlayUserAvgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlayUserAvgResponse
     *
     * @param DescribePlayUserAvgRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePlayUserAvgResponse
     */
    public function describePlayUserAvgWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlayUserAvg',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlayUserAvgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on average playback each day in a specified time range.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * > *   You can call this operation to query only playback statistics collected on videos that are played by using ApsaraVideo Player SDKs.
     * > *   Playback statistics for the previous day are generated at 09:00 on the current day, in UTC+8.
     * > *   You can query data that is generated since January 1, 2018. The maximum time range to query is 180 days.
     *
     * @param request - DescribePlayUserAvgRequest
     *
     * @returns DescribePlayUserAvgResponse
     *
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
     * Queries the daily playback statistics in a specified time range. The playback statistics include the total number of views, total number of viewers, total playback duration, and playback duration distribution.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can call this operation to query only playback statistics collected on videos that are played by using ApsaraVideo Player SDKs.
     * *   Playback statistics for the current day are generated at 09:00 (UTC+8) on the next day.
     * *   You can query data that is generated since January 1, 2018. The maximum time range to query is 180 days.
     *
     * @param request - DescribePlayUserTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlayUserTotalResponse
     *
     * @param DescribePlayUserTotalRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePlayUserTotalResponse
     */
    public function describePlayUserTotalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlayUserTotal',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlayUserTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the daily playback statistics in a specified time range. The playback statistics include the total number of views, total number of viewers, total playback duration, and playback duration distribution.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can call this operation to query only playback statistics collected on videos that are played by using ApsaraVideo Player SDKs.
     * *   Playback statistics for the current day are generated at 09:00 (UTC+8) on the next day.
     * *   You can query data that is generated since January 1, 2018. The maximum time range to query is 180 days.
     *
     * @param request - DescribePlayUserTotalRequest
     *
     * @returns DescribePlayUserTotalResponse
     *
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
     * Queries daily playback statistics on a video in the specified time range.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can call this operation to query only playback statistics collected on videos that are played by using ApsaraVideo Player SDKs.
     * *   Playback statistics for the current day are generated at 09:00 (UTC+8) on the next day.
     * *   You can query only data in the last 730 days. The maximum time range to query is 180 days.
     *
     * @param request - DescribePlayVideoStatisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlayVideoStatisResponse
     *
     * @param DescribePlayVideoStatisRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePlayVideoStatisResponse
     */
    public function describePlayVideoStatisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlayVideoStatis',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlayVideoStatisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries daily playback statistics on a video in the specified time range.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can call this operation to query only playback statistics collected on videos that are played by using ApsaraVideo Player SDKs.
     * *   Playback statistics for the current day are generated at 09:00 (UTC+8) on the next day.
     * *   You can query only data in the last 730 days. The maximum time range to query is 180 days.
     *
     * @param request - DescribePlayVideoStatisRequest
     *
     * @returns DescribePlayVideoStatisResponse
     *
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
     * Queries the statistics on video AI of different types, such as automated review and media fingerprinting.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * >*   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *
     * @param request - DescribeVodAIDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodAIDataResponse
     *
     * @param DescribeVodAIDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVodAIDataResponse
     */
    public function describeVodAIDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AIType) {
            @$query['AIType'] = $request->AIType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodAIData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodAIDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on video AI of different types, such as automated review and media fingerprinting.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * >*   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *
     * @param request - DescribeVodAIDataRequest
     *
     * @returns DescribeVodAIDataResponse
     *
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
     * Queries the certificates of a specified domain name for CDN or all the domain names for CDN within your Alibaba Cloud account.
     *
     * @remarks
     * >  This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodCertificateListResponse
     *
     * @param DescribeVodCertificateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVodCertificateListResponse
     */
    public function describeVodCertificateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodCertificateList',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificates of a specified domain name for CDN or all the domain names for CDN within your Alibaba Cloud account.
     *
     * @remarks
     * >  This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodCertificateListRequest
     *
     * @returns DescribeVodCertificateListResponse
     *
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
     * Queries the bandwidth for one or more specified domain names for CDN.
     *
     * @remarks
     * If you specify neither the StartTime parameter nor the EndTime parameter, the data in the last 24 hours is queried. Alternatively, you can specify both the StartTime and EndTime parameters to query data that is generated in the specified duration. You can query data for the last 90 days at most.
     *
     * @param request - DescribeVodDomainBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainBpsDataResponse
     *
     * @param DescribeVodDomainBpsDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodDomainBpsDataResponse
     */
    public function describeVodDomainBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainBpsData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth for one or more specified domain names for CDN.
     *
     * @remarks
     * If you specify neither the StartTime parameter nor the EndTime parameter, the data in the last 24 hours is queried. Alternatively, you can specify both the StartTime and EndTime parameters to query data that is generated in the specified duration. You can query data for the last 90 days at most.
     *
     * @param request - DescribeVodDomainBpsDataRequest
     *
     * @returns DescribeVodDomainBpsDataResponse
     *
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
     * Queries the bandwidth data by protocol.
     *
     * @remarks
     * You can call this API operation up to 20 times per second per account. If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range. Time granularity
     * The time granularity supported by Interval, the maximum time period within which historical data is available, and the data delay vary based on the time range to query, as described in the following table.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |15 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|3 to 4 hours|
     * |1 day|90 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainBpsDataByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainBpsDataByLayerResponse
     *
     * @param DescribeVodDomainBpsDataByLayerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVodDomainBpsDataByLayerResponse
     */
    public function describeVodDomainBpsDataByLayerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->layer) {
            @$query['Layer'] = $request->layer;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainBpsDataByLayer',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainBpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth data by protocol.
     *
     * @remarks
     * You can call this API operation up to 20 times per second per account. If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range. Time granularity
     * The time granularity supported by Interval, the maximum time period within which historical data is available, and the data delay vary based on the time range to query, as described in the following table.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |15 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|3 to 4 hours|
     * |1 day|90 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainBpsDataByLayerRequest
     *
     * @returns DescribeVodDomainBpsDataByLayerResponse
     *
     * @param DescribeVodDomainBpsDataByLayerRequest $request
     *
     * @return DescribeVodDomainBpsDataByLayerResponse
     */
    public function describeVodDomainBpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainBpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * Queries the certificate information about an accelerated domain name.
     *
     * @remarks
     * This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodDomainCertificateInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainCertificateInfoResponse
     *
     * @param DescribeVodDomainCertificateInfoRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVodDomainCertificateInfoResponse
     */
    public function describeVodDomainCertificateInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainCertificateInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificate information about an accelerated domain name.
     *
     * @remarks
     * This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodDomainCertificateInfoRequest
     *
     * @returns DescribeVodDomainCertificateInfoResponse
     *
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
     * Queries the configurations of a domain name for CDN. You can query the configurations of multiple features at a time.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainConfigsResponse
     *
     * @param DescribeVodDomainConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodDomainConfigsResponse
     */
    public function describeVodDomainConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->functionNames) {
            @$query['FunctionNames'] = $request->functionNames;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainConfigs',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a domain name for CDN. You can query the configurations of multiple features at a time.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodDomainConfigsRequest
     *
     * @returns DescribeVodDomainConfigsResponse
     *
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
     * Queries the basic information about a specified domain name for CDN.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodDomainDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainDetailResponse
     *
     * @param DescribeVodDomainDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVodDomainDetailResponse
     */
    public function describeVodDomainDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainDetail',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about a specified domain name for CDN.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodDomainDetailRequest
     *
     * @returns DescribeVodDomainDetailResponse
     *
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
     * Queries the byte hit ratios of accelerated domain names. Byte hit ratios are measured in percentage.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 24 hours is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay when you do not set `Interval`.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     * |1 day|31 days ≤ Time span of a single query ≤ 366 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainHitRateDataResponse
     *
     * @param DescribeVodDomainHitRateDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVodDomainHitRateDataResponse
     */
    public function describeVodDomainHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainHitRateData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the byte hit ratios of accelerated domain names. Byte hit ratios are measured in percentage.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 24 hours is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay when you do not set `Interval`.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     * |1 day|31 days ≤ Time span of a single query ≤ 366 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainHitRateDataRequest
     *
     * @returns DescribeVodDomainHitRateDataResponse
     *
     * @param DescribeVodDomainHitRateDataRequest $request
     *
     * @return DescribeVodDomainHitRateDataResponse
     */
    public function describeVodDomainHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainHitRateDataWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the CDN access logs for a domain name, including the log path.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   For more information about the log format and latency, see [Download logs](https://help.aliyun.com/document_detail/86099.html).
     * *   If you specify neither the StartTime parameter nor the EndTime parameter, the log data in the last 24 hours is queried.
     * *   You can specify both the StartTime and EndTime parameters to query the log data that is generated in the specified time range.
     *
     * @param request - DescribeVodDomainLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainLogResponse
     *
     * @param DescribeVodDomainLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVodDomainLogResponse
     */
    public function describeVodDomainLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainLog',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the CDN access logs for a domain name, including the log path.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   For more information about the log format and latency, see [Download logs](https://help.aliyun.com/document_detail/86099.html).
     * *   If you specify neither the StartTime parameter nor the EndTime parameter, the log data in the last 24 hours is queried.
     * *   You can specify both the StartTime and EndTime parameters to query the log data that is generated in the specified time range.
     *
     * @param request - DescribeVodDomainLogRequest
     *
     * @returns DescribeVodDomainLogResponse
     *
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
     * Queries the 95th percentile bandwidth data of an accelerated domain name.
     *
     * @param request - DescribeVodDomainMax95BpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainMax95BpsDataResponse
     *
     * @param DescribeVodDomainMax95BpsDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVodDomainMax95BpsDataResponse
     */
    public function describeVodDomainMax95BpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainMax95BpsData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainMax95BpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the 95th percentile bandwidth data of an accelerated domain name.
     *
     * @param request - DescribeVodDomainMax95BpsDataRequest
     *
     * @returns DescribeVodDomainMax95BpsDataResponse
     *
     * @param DescribeVodDomainMax95BpsDataRequest $request
     *
     * @return DescribeVodDomainMax95BpsDataResponse
     */
    public function describeVodDomainMax95BpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainMax95BpsDataWithOptions($request, $runtime);
    }

    /**
     * Queries the number of queries per second (QPS) for one or more accelerated domain names. Data is collected every 5 minutes. You can query data collected in the last 90 days.
     *
     * @remarks
     * This operation is available only in the China (Shanghai) region.
     * * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|3 to 4 hours|
     * |1 day|366 days|366 days|4 to 24 hours|
     * ---
     *
     * @param request - DescribeVodDomainQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainQpsDataResponse
     *
     * @param DescribeVodDomainQpsDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodDomainQpsDataResponse
     */
    public function describeVodDomainQpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainQpsData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of queries per second (QPS) for one or more accelerated domain names. Data is collected every 5 minutes. You can query data collected in the last 90 days.
     *
     * @remarks
     * This operation is available only in the China (Shanghai) region.
     * * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|3 to 4 hours|
     * |1 day|366 days|366 days|4 to 24 hours|
     * ---
     *
     * @param request - DescribeVodDomainQpsDataRequest
     *
     * @returns DescribeVodDomainQpsDataResponse
     *
     * @param DescribeVodDomainQpsDataRequest $request
     *
     * @return DescribeVodDomainQpsDataResponse
     */
    public function describeVodDomainQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainQpsDataWithOptions($request, $runtime);
    }

    /**
     * Queries the bandwidth data for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days. Compared with the DescribeVodDomainBpsData operation, this operation provides a smaller time granularity, lower data latency, and allows you to query historical data within a shorter time period.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 Hour &#x3C; Time range per query ≤ 3 days|93 days|15 minutes|
     * |1 hour|3 days &#x3C; Time range per query ≤ 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainRealTimeBpsDataResponse
     *
     * @param DescribeVodDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVodDomainRealTimeBpsDataResponse
     */
    public function describeVodDomainRealTimeBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainRealTimeBpsData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainRealTimeBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth data for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days. Compared with the DescribeVodDomainBpsData operation, this operation provides a smaller time granularity, lower data latency, and allows you to query historical data within a shorter time period.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 Hour &#x3C; Time range per query ≤ 3 days|93 days|15 minutes|
     * |1 hour|3 days &#x3C; Time range per query ≤ 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeBpsDataRequest
     *
     * @returns DescribeVodDomainRealTimeBpsDataResponse
     *
     * @param DescribeVodDomainRealTimeBpsDataRequest $request
     *
     * @return DescribeVodDomainRealTimeBpsDataResponse
     */
    public function describeVodDomainRealTimeBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * Queries the byte hit ratio for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 100 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 Hour &#x3C; Time range per query ≤ 3 days|93 days|15 minutes|
     * |1 hour|3 days &#x3C; Time range per query ≤ 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeByteHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainRealTimeByteHitRateDataResponse
     *
     * @param DescribeVodDomainRealTimeByteHitRateDataRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeVodDomainRealTimeByteHitRateDataResponse
     */
    public function describeVodDomainRealTimeByteHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainRealTimeByteHitRateData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainRealTimeByteHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the byte hit ratio for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 100 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 Hour &#x3C; Time range per query ≤ 3 days|93 days|15 minutes|
     * |1 hour|3 days &#x3C; Time range per query ≤ 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeByteHitRateDataRequest
     *
     * @returns DescribeVodDomainRealTimeByteHitRateDataResponse
     *
     * @param DescribeVodDomainRealTimeByteHitRateDataRequest $request
     *
     * @return DescribeVodDomainRealTimeByteHitRateDataResponse
     */
    public function describeVodDomainRealTimeByteHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainRealTimeByteHitRateDataWithOptions($request, $runtime);
    }

    /**
     * Queries real-time monitoring data of one or more accelerated domain names.
     *
     * @remarks
     * You can query data within the last seven days. Data is collected every minute. You can call this API operation up to 10 times per second per account.
     *
     * @param request - DescribeVodDomainRealTimeDetailDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainRealTimeDetailDataResponse
     *
     * @param DescribeVodDomainRealTimeDetailDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeVodDomainRealTimeDetailDataResponse
     */
    public function describeVodDomainRealTimeDetailDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainRealTimeDetailData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainRealTimeDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries real-time monitoring data of one or more accelerated domain names.
     *
     * @remarks
     * You can query data within the last seven days. Data is collected every minute. You can call this API operation up to 10 times per second per account.
     *
     * @param request - DescribeVodDomainRealTimeDetailDataRequest
     *
     * @returns DescribeVodDomainRealTimeDetailDataResponse
     *
     * @param DescribeVodDomainRealTimeDetailDataRequest $request
     *
     * @return DescribeVodDomainRealTimeDetailDataResponse
     */
    public function describeVodDomainRealTimeDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainRealTimeDetailDataWithOptions($request, $runtime);
    }

    /**
     * Queries the total number of HTTP status codes and proportion of each HTTP status code for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 100 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available (days)|Data latency|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 hour &#x3C; Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainRealTimeHttpCodeDataResponse
     *
     * @param DescribeVodDomainRealTimeHttpCodeDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeVodDomainRealTimeHttpCodeDataResponse
     */
    public function describeVodDomainRealTimeHttpCodeDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainRealTimeHttpCodeData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainRealTimeHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total number of HTTP status codes and proportion of each HTTP status code for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 100 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available (days)|Data latency|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 hour &#x3C; Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeHttpCodeDataRequest
     *
     * @returns DescribeVodDomainRealTimeHttpCodeDataResponse
     *
     * @param DescribeVodDomainRealTimeHttpCodeDataRequest $request
     *
     * @return DescribeVodDomainRealTimeHttpCodeDataResponse
     */
    public function describeVodDomainRealTimeHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainRealTimeHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * Queries the number of queries per second (QPS) for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 Hour &#x3C; Time range per query ≤ 3 days|93 days|15 minutes|
     * |1 hour|3 days &#x3C; Time range per query ≤ 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainRealTimeQpsDataResponse
     *
     * @param DescribeVodDomainRealTimeQpsDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVodDomainRealTimeQpsDataResponse
     */
    public function describeVodDomainRealTimeQpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainRealTimeQpsData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainRealTimeQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of queries per second (QPS) for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 Hour &#x3C; Time range per query ≤ 3 days|93 days|15 minutes|
     * |1 hour|3 days &#x3C; Time range per query ≤ 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeQpsDataRequest
     *
     * @returns DescribeVodDomainRealTimeQpsDataResponse
     *
     * @param DescribeVodDomainRealTimeQpsDataRequest $request
     *
     * @return DescribeVodDomainRealTimeQpsDataResponse
     */
    public function describeVodDomainRealTimeQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainRealTimeQpsDataWithOptions($request, $runtime);
    }

    /**
     * Queries the request hit ratio data for one or more accelerated domain names. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 100 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * * By default, the POST method is used for Go. To use the FET method, you must declare `request.Method="GET"`.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 hour &#x3C; Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeReqHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainRealTimeReqHitRateDataResponse
     *
     * @param DescribeVodDomainRealTimeReqHitRateDataRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeVodDomainRealTimeReqHitRateDataResponse
     */
    public function describeVodDomainRealTimeReqHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainRealTimeReqHitRateData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainRealTimeReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the request hit ratio data for one or more accelerated domain names. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 100 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * * By default, the POST method is used for Go. To use the FET method, you must declare `request.Method="GET"`.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 hour &#x3C; Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeReqHitRateDataRequest
     *
     * @returns DescribeVodDomainRealTimeReqHitRateDataResponse
     *
     * @param DescribeVodDomainRealTimeReqHitRateDataRequest $request
     *
     * @return DescribeVodDomainRealTimeReqHitRateDataResponse
     */
    public function describeVodDomainRealTimeReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainRealTimeReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * Queries the traffic data for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days. Compared with the DescribeVodDomainTrafficData operation, this operation provides a smaller time granularity, lower data latency, and allows you to query historical data within a shorter time period.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 100 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 Hour &#x3C; Time range per query ≤ 3 days|93 days|15 minutes|
     * |1 hour|3 days &#x3C; Time range per query ≤ 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainRealTimeTrafficDataResponse
     *
     * @param DescribeVodDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeVodDomainRealTimeTrafficDataResponse
     */
    public function describeVodDomainRealTimeTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainRealTimeTrafficData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainRealTimeTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the traffic data for one or more accelerated domains. The minimum time granularity is 1 minute. The minimum data latency is 5 minutes. You can query data in the last 186 days. Compared with the DescribeVodDomainTrafficData operation, this operation provides a smaller time granularity, lower data latency, and allows you to query historical data within a shorter time period.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 100 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 1 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|Time range per query ≤ 1 hour|7 days|5 minutes|
     * |5 minutes|1 Hour &#x3C; Time range per query ≤ 3 days|93 days|15 minutes|
     * |1 hour|3 days &#x3C; Time range per query ≤ 31 days|186 days|3 to 4 hours|
     *
     * @param request - DescribeVodDomainRealTimeTrafficDataRequest
     *
     * @returns DescribeVodDomainRealTimeTrafficDataResponse
     *
     * @param DescribeVodDomainRealTimeTrafficDataRequest $request
     *
     * @return DescribeVodDomainRealTimeTrafficDataResponse
     */
    public function describeVodDomainRealTimeTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainRealTimeTrafficDataWithOptions($request, $runtime);
    }

    /**
     * Queries the byte hit ratio for one or more accelerated domains. Request hit ratios are measured in percentage.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 24 hours is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay when you do not set `Interval`.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     * |1 day|31 days ≤ Time range per query ≤ 90 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainReqHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainReqHitRateDataResponse
     *
     * @param DescribeVodDomainReqHitRateDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVodDomainReqHitRateDataResponse
     */
    public function describeVodDomainReqHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainReqHitRateData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the byte hit ratio for one or more accelerated domains. Request hit ratios are measured in percentage.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 24 hours is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay when you do not set `Interval`.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     * |1 day|31 days ≤ Time range per query ≤ 90 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainReqHitRateDataRequest
     *
     * @returns DescribeVodDomainReqHitRateDataResponse
     *
     * @param DescribeVodDomainReqHitRateDataRequest $request
     *
     * @return DescribeVodDomainReqHitRateDataResponse
     */
    public function describeVodDomainReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * Queries the bandwidth data during back-to-origin routing for one or more accelerated domain names.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 24 hours is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay when you do not set `Interval`.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     * |1 day|31 days ≤ Time span of a single query ≤ 366 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainSrcBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainSrcBpsDataResponse
     *
     * @param DescribeVodDomainSrcBpsDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVodDomainSrcBpsDataResponse
     */
    public function describeVodDomainSrcBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainSrcBpsData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth data during back-to-origin routing for one or more accelerated domain names.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 24 hours is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay when you do not set `Interval`.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     * |1 day|31 days ≤ Time span of a single query ≤ 366 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainSrcBpsDataRequest
     *
     * @returns DescribeVodDomainSrcBpsDataResponse
     *
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
     * Queries origin traffic data for accelerated domain names in ApsaraVideo VOD. The traffic is measured in bytes.
     *
     * @remarks
     * This operation is available only in the **China (Shanghai)** region.
     * * ApsaraVideo VOD stores the origin traffic data for 90 days before the data is deleted.
     * * If you do not set the `StartTime` or `EndTime` parameter, the request returns the data collected in the last 24 hours. If you set both the `StartTime` and `EndTime` parameters, the request returns the data collected within the specified time range.
     * * You can specify a maximum of 500 domain names in a request. Separate multiple domain names with commas (,). If you specify multiple domain names in a request, aggregation results are returned.
     * ### Time granularity
     * The time granularity supported by the Interval parameter varies based on the time range per query specified by using `StartTime` and `EndTime`. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query (days)|Historical data available (days)|Data delay|
     * |---|---|---|---|
     * |5 minutes|(0, 3\\]|93|15 minutes|
     * |1 hour|(3, 31\\]|186|4 hours|
     * |1 day|(31, 366\\]|366|04:00 on the next day|
     *
     * @param request - DescribeVodDomainSrcTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainSrcTrafficDataResponse
     *
     * @param DescribeVodDomainSrcTrafficDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVodDomainSrcTrafficDataResponse
     */
    public function describeVodDomainSrcTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainSrcTrafficData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries origin traffic data for accelerated domain names in ApsaraVideo VOD. The traffic is measured in bytes.
     *
     * @remarks
     * This operation is available only in the **China (Shanghai)** region.
     * * ApsaraVideo VOD stores the origin traffic data for 90 days before the data is deleted.
     * * If you do not set the `StartTime` or `EndTime` parameter, the request returns the data collected in the last 24 hours. If you set both the `StartTime` and `EndTime` parameters, the request returns the data collected within the specified time range.
     * * You can specify a maximum of 500 domain names in a request. Separate multiple domain names with commas (,). If you specify multiple domain names in a request, aggregation results are returned.
     * ### Time granularity
     * The time granularity supported by the Interval parameter varies based on the time range per query specified by using `StartTime` and `EndTime`. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Time range per query (days)|Historical data available (days)|Data delay|
     * |---|---|---|---|
     * |5 minutes|(0, 3\\]|93|15 minutes|
     * |1 hour|(3, 31\\]|186|4 hours|
     * |1 day|(31, 366\\]|366|04:00 on the next day|
     *
     * @param request - DescribeVodDomainSrcTrafficDataRequest
     *
     * @returns DescribeVodDomainSrcTrafficDataResponse
     *
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
     * Queries the traffic data for one or more accelerated domains. The minimum time granularity is 5 minutes. You can query data in the last 366 days. Compared with the DescribeVodDomainRealTimeTrafficData operation, this operation provides a greater time granularity, higher data latency, but allows you to query historical data within a longer time period.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 24 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay when you do not set `Interval`.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     * |1 day|31 days ≤ Time range per query ≤ 366 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainTrafficDataResponse
     *
     * @param DescribeVodDomainTrafficDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVodDomainTrafficDataResponse
     */
    public function describeVodDomainTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainTrafficData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the traffic data for one or more accelerated domains. The minimum time granularity is 5 minutes. You can query data in the last 366 days. Compared with the DescribeVodDomainRealTimeTrafficData operation, this operation provides a greater time granularity, higher data latency, but allows you to query historical data within a longer time period.
     *
     * @remarks
     * This operation is supported only in the **China (Shanghai)** region.
     * * You can specify a maximum of 500 accelerated domain names.
     * * If you specify neither `StartTime` nor `EndTime`, the data of the last 24 hour is queried. You can specify both `StartTime` and `EndTime` parameters to query data of a specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the `StartTime` and `EndTime` parameters. The following table describes the time period within which historical data is available and the data delay when you do not set `Interval`.
     * |Time granularity|Time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|Time range per query &#x3C; 3 days|93 days|15 minutes|
     * |1 hour|3 days ≤ Time range per query &#x3C; 31 days|186 days|3 to 4 hours|
     * |1 day|31 days ≤ Time range per query ≤ 366 days|366 days|4 hours in most cases, not more than 24 hours|
     *
     * @param request - DescribeVodDomainTrafficDataRequest
     *
     * @returns DescribeVodDomainTrafficDataResponse
     *
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
     * Queries the traffic or bandwidth data of one or more accelerated domain names.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can specify up to 100 accelerated domain names in a request. Separate multiple domain names with commas (,). If you do not specify an accelerated domain name, the data of all accelerated domain names within your Alibaba Cloud account is returned.
     * *   You can query data in the last year. The maximum time range that can be queried is three months. If you specify a time range of one to three days, the system returns data on an hourly basis. If you specify a time range of four days or more, the system returns data on a daily basis.
     *
     * @param request - DescribeVodDomainUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodDomainUsageDataResponse
     *
     * @param DescribeVodDomainUsageDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVodDomainUsageDataResponse
     */
    public function describeVodDomainUsageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->field) {
            @$query['Field'] = $request->field;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodDomainUsageData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodDomainUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the traffic or bandwidth data of one or more accelerated domain names.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can specify up to 100 accelerated domain names in a request. Separate multiple domain names with commas (,). If you do not specify an accelerated domain name, the data of all accelerated domain names within your Alibaba Cloud account is returned.
     * *   You can query data in the last year. The maximum time range that can be queried is three months. If you specify a time range of one to three days, the system returns data on an hourly basis. If you specify a time range of four days or more, the system returns data on a daily basis.
     *
     * @param request - DescribeVodDomainUsageDataRequest
     *
     * @returns DescribeVodDomainUsageDataResponse
     *
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
     * 点播云剪辑用量查询.
     *
     * @param request - DescribeVodEditingUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodEditingUsageDataResponse
     *
     * @param DescribeVodEditingUsageDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVodEditingUsageDataResponse
     */
    public function describeVodEditingUsageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodEditingUsageData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodEditingUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 点播云剪辑用量查询.
     *
     * @param request - DescribeVodEditingUsageDataRequest
     *
     * @returns DescribeVodEditingUsageDataResponse
     *
     * @param DescribeVodEditingUsageDataRequest $request
     *
     * @return DescribeVodEditingUsageDataResponse
     */
    public function describeVodEditingUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodEditingUsageDataWithOptions($request, $runtime);
    }

    /**
     * Queries the playback statistics based on the media ID. You can call this operation to query information such as the number of visits, average video views per viewer, total number of views, average playback duration per viewer, and total playback duration.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   Only playback data in ApsaraVideo Player SDK is collected.
     * *   You can query only data within the last 30 days.
     * *   Before you call this operation, make sure that the following requirements are met:
     *     *   ApsaraVideo Player SDK for Android or iOS
     *         *   ApsaraVideo Player SDK for Android or iOS V5.4.9.2 or later is used.
     *         *   A license for ApsaraVideo Player SDK is obtained. For more information, see [Manage licenses](https://help.aliyun.com/document_detail/469166.html).
     *         *   The log reporting feature is enabled. By default, the feature is enabled for ApsaraVideo Player SDKs. For more information, see [Integrate ApsaraVideo Player SDK for Android](~~311525#section-dc4-gp6-xk2~~) and [Integrate ApsaraVideo Player SDK for iOS](~~313855#section-cmf-k7d-jg5~~).
     *     *   ApsaraVideo Player SDK for Web
     *         *   ApsaraVideo Player SDK for Web V2.16.0 or later is used.
     *         *   A license for **playback quality monitoring** is obtained. To apply for the license, [submit a request on Yida to enable value-added features for ApsaraVideo Player SDK for Web](https://yida.alibaba-inc.com/o/webplayer#/). For more information, see the description of the `license` parameter in the [API operations](~~125572#section-3ty-gwp-6pa~~) topic.
     *         *   The log reporting feature is enabled. By default, the feature is enabled for ApsaraVideo Player SDKs.
     *
     * @param request - DescribeVodMediaPlayDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodMediaPlayDataResponse
     *
     * @param DescribeVodMediaPlayDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodMediaPlayDataResponse
     */
    public function describeVodMediaPlayDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->orderName) {
            @$query['OrderName'] = $request->orderName;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->os) {
            @$query['Os'] = $request->os;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->playDate) {
            @$query['PlayDate'] = $request->playDate;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->terminalType) {
            @$query['TerminalType'] = $request->terminalType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodMediaPlayData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodMediaPlayDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the playback statistics based on the media ID. You can call this operation to query information such as the number of visits, average video views per viewer, total number of views, average playback duration per viewer, and total playback duration.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   Only playback data in ApsaraVideo Player SDK is collected.
     * *   You can query only data within the last 30 days.
     * *   Before you call this operation, make sure that the following requirements are met:
     *     *   ApsaraVideo Player SDK for Android or iOS
     *         *   ApsaraVideo Player SDK for Android or iOS V5.4.9.2 or later is used.
     *         *   A license for ApsaraVideo Player SDK is obtained. For more information, see [Manage licenses](https://help.aliyun.com/document_detail/469166.html).
     *         *   The log reporting feature is enabled. By default, the feature is enabled for ApsaraVideo Player SDKs. For more information, see [Integrate ApsaraVideo Player SDK for Android](~~311525#section-dc4-gp6-xk2~~) and [Integrate ApsaraVideo Player SDK for iOS](~~313855#section-cmf-k7d-jg5~~).
     *     *   ApsaraVideo Player SDK for Web
     *         *   ApsaraVideo Player SDK for Web V2.16.0 or later is used.
     *         *   A license for **playback quality monitoring** is obtained. To apply for the license, [submit a request on Yida to enable value-added features for ApsaraVideo Player SDK for Web](https://yida.alibaba-inc.com/o/webplayer#/). For more information, see the description of the `license` parameter in the [API operations](~~125572#section-3ty-gwp-6pa~~) topic.
     *         *   The log reporting feature is enabled. By default, the feature is enabled for ApsaraVideo Player SDKs.
     *
     * @param request - DescribeVodMediaPlayDataRequest
     *
     * @returns DescribeVodMediaPlayDataResponse
     *
     * @param DescribeVodMediaPlayDataRequest $request
     *
     * @return DescribeVodMediaPlayDataResponse
     */
    public function describeVodMediaPlayData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodMediaPlayDataWithOptions($request, $runtime);
    }

    /**
     * Queries the bandwidth data by Internet service provider (ISP) and region.
     *
     * @remarks
     * The data is collected every 5 minutes. You can call this API operation up to 20 times per second per account. Time granularity
     * The time granularity supported by Interval, the maximum time period within which historical data is available, and the data delay vary based on the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|1 hour|93 days|15 minutes|
     *
     * @param request - DescribeVodRangeDataByLocateAndIspServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodRangeDataByLocateAndIspServiceResponse
     *
     * @param DescribeVodRangeDataByLocateAndIspServiceRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeVodRangeDataByLocateAndIspServiceResponse
     */
    public function describeVodRangeDataByLocateAndIspServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodRangeDataByLocateAndIspService',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodRangeDataByLocateAndIspServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth data by Internet service provider (ISP) and region.
     *
     * @remarks
     * The data is collected every 5 minutes. You can call this API operation up to 20 times per second per account. Time granularity
     * The time granularity supported by Interval, the maximum time period within which historical data is available, and the data delay vary based on the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|1 hour|93 days|15 minutes|
     *
     * @param request - DescribeVodRangeDataByLocateAndIspServiceRequest
     *
     * @returns DescribeVodRangeDataByLocateAndIspServiceResponse
     *
     * @param DescribeVodRangeDataByLocateAndIspServiceRequest $request
     *
     * @return DescribeVodRangeDataByLocateAndIspServiceResponse
     */
    public function describeVodRangeDataByLocateAndIspService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodRangeDataByLocateAndIspServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the maximum number and remaining number of requests to refresh or prefetch files on the current day. You can prefetch files based on URLs and refresh files based on URLs or directories.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * > *   You can call the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) operation to refresh content and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.html) operation to prefetch content.
     *
     * @param request - DescribeVodRefreshQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodRefreshQuotaResponse
     *
     * @param DescribeVodRefreshQuotaRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVodRefreshQuotaResponse
     */
    public function describeVodRefreshQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodRefreshQuota',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodRefreshQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the maximum number and remaining number of requests to refresh or prefetch files on the current day. You can prefetch files based on URLs and refresh files based on URLs or directories.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * > *   You can call the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) operation to refresh content and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.html) operation to prefetch content.
     *
     * @param request - DescribeVodRefreshQuotaRequest
     *
     * @returns DescribeVodRefreshQuotaResponse
     *
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
     * Queries the information about one or more refresh or prefetch tasks.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If you do not specify the TaskId or ObjectPath parameter, the data in the last three days is returned on the first page. By default, one page displays a maximum of 20 entries. You can specify the TaskId and ObjectPath parameters at the same time.
     *
     * @param request - DescribeVodRefreshTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodRefreshTasksResponse
     *
     * @param DescribeVodRefreshTasksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVodRefreshTasksResponse
     */
    public function describeVodRefreshTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->objectPath) {
            @$query['ObjectPath'] = $request->objectPath;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodRefreshTasks',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodRefreshTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more refresh or prefetch tasks.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If you do not specify the TaskId or ObjectPath parameter, the data in the last three days is returned on the first page. By default, one page displays a maximum of 20 entries. You can specify the TaskId and ObjectPath parameters at the same time.
     *
     * @param request - DescribeVodRefreshTasksRequest
     *
     * @returns DescribeVodRefreshTasksResponse
     *
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
     * Queries the certificates by domain name.
     *
     * @param request - DescribeVodSSLCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodSSLCertificateListResponse
     *
     * @param DescribeVodSSLCertificateListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVodSSLCertificateListResponse
     */
    public function describeVodSSLCertificateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKeyword) {
            @$query['SearchKeyword'] = $request->searchKeyword;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodSSLCertificateList',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodSSLCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificates by domain name.
     *
     * @param request - DescribeVodSSLCertificateListRequest
     *
     * @returns DescribeVodSSLCertificateListResponse
     *
     * @param DescribeVodSSLCertificateListRequest $request
     *
     * @return DescribeVodSSLCertificateListResponse
     */
    public function describeVodSSLCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodSSLCertificateListWithOptions($request, $runtime);
    }

    /**
     * Queries the usage of storage-related resources, including the storage volume and outbound traffic.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * >*   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *
     * @param request - DescribeVodStorageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodStorageDataResponse
     *
     * @param DescribeVodStorageDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVodStorageDataResponse
     */
    public function describeVodStorageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->storage) {
            @$query['Storage'] = $request->storage;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodStorageData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodStorageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage of storage-related resources, including the storage volume and outbound traffic.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * >*   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *
     * @param request - DescribeVodStorageDataRequest
     *
     * @returns DescribeVodStorageDataResponse
     *
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
     * Queries the usage of tiered storage for media assets.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If you specify a time range within 7 days, the request returns the data based on hours. If you specify a time range longer than 7 days, the request returns the data based on days. The maximum time range is 31 days.
     *
     * @param request - DescribeVodTieringStorageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodTieringStorageDataResponse
     *
     * @param DescribeVodTieringStorageDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVodTieringStorageDataResponse
     */
    public function describeVodTieringStorageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->storageClass) {
            @$query['StorageClass'] = $request->storageClass;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodTieringStorageData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodTieringStorageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage of tiered storage for media assets.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If you specify a time range within 7 days, the request returns the data based on hours. If you specify a time range longer than 7 days, the request returns the data based on days. The maximum time range is 31 days.
     *
     * @param request - DescribeVodTieringStorageDataRequest
     *
     * @returns DescribeVodTieringStorageDataResponse
     *
     * @param DescribeVodTieringStorageDataRequest $request
     *
     * @return DescribeVodTieringStorageDataResponse
     */
    public function describeVodTieringStorageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodTieringStorageDataWithOptions($request, $runtime);
    }

    /**
     * Queries the data retrieval from tiered storage.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If you specify a time range within 7 days, the request returns the data based on hours. If you specify a time range longer than 7 days, the request returns the data based on days. The maximum time range is 31 days.
     *
     * @param request - DescribeVodTieringStorageRetrievalDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodTieringStorageRetrievalDataResponse
     *
     * @param DescribeVodTieringStorageRetrievalDataRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeVodTieringStorageRetrievalDataResponse
     */
    public function describeVodTieringStorageRetrievalDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->storageClass) {
            @$query['StorageClass'] = $request->storageClass;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodTieringStorageRetrievalData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodTieringStorageRetrievalDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data retrieval from tiered storage.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If you specify a time range within 7 days, the request returns the data based on hours. If you specify a time range longer than 7 days, the request returns the data based on days. The maximum time range is 31 days.
     *
     * @param request - DescribeVodTieringStorageRetrievalDataRequest
     *
     * @returns DescribeVodTieringStorageRetrievalDataResponse
     *
     * @param DescribeVodTieringStorageRetrievalDataRequest $request
     *
     * @return DescribeVodTieringStorageRetrievalDataResponse
     */
    public function describeVodTieringStorageRetrievalData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodTieringStorageRetrievalDataWithOptions($request, $runtime);
    }

    /**
     * Queries the transcoding statistics.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *
     * @param request - DescribeVodTranscodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodTranscodeDataResponse
     *
     * @param DescribeVodTranscodeDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodTranscodeDataResponse
     */
    public function describeVodTranscodeDataWithOptions($request, $runtime)
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

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->storage) {
            @$query['Storage'] = $request->storage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodTranscodeData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodTranscodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the transcoding statistics.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   If the time range to query is less than or equal to seven days, the system returns the statistics collected on an hourly basis. If the time range to query is greater than seven days, the system returns the statistics collected on a daily basis. The maximum time range that you can specify to query is 31 days.
     *
     * @param request - DescribeVodTranscodeDataRequest
     *
     * @returns DescribeVodTranscodeDataResponse
     *
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
     * Queries the domain names for CDN within your Alibaba Cloud account.
     *
     * @remarks
     *   You can filter domain names by name and status. Fuzzy match is supported for domain name-based query.
     * *   This operation is available only in the China (Shanghai) region.
     *
     * @param request - DescribeVodUserDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodUserDomainsResponse
     *
     * @param DescribeVodUserDomainsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVodUserDomainsResponse
     */
    public function describeVodUserDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainSearchType) {
            @$query['DomainSearchType'] = $request->domainSearchType;
        }

        if (null !== $request->domainStatus) {
            @$query['DomainStatus'] = $request->domainStatus;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodUserDomains',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the domain names for CDN within your Alibaba Cloud account.
     *
     * @remarks
     *   You can filter domain names by name and status. Fuzzy match is supported for domain name-based query.
     * *   This operation is available only in the China (Shanghai) region.
     *
     * @param request - DescribeVodUserDomainsRequest
     *
     * @returns DescribeVodUserDomainsResponse
     *
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
     * Queries the ownership verification content.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodVerifyContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodVerifyContentResponse
     *
     * @param DescribeVodVerifyContentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVodVerifyContentResponse
     */
    public function describeVodVerifyContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodVerifyContent',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ownership verification content.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - DescribeVodVerifyContentRequest
     *
     * @returns DescribeVodVerifyContentResponse
     *
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
     * Revokes application permissions from the specified identity. The identity may a RAM user or RAM role.
     *
     * @remarks
     * >  You can grant a maximum of 10 application permissions to a RAM user or RAM role.
     *
     * @param request - DetachAppPolicyFromIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachAppPolicyFromIdentityResponse
     *
     * @param DetachAppPolicyFromIdentityRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetachAppPolicyFromIdentityResponse
     */
    public function detachAppPolicyFromIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->identityName) {
            @$query['IdentityName'] = $request->identityName;
        }

        if (null !== $request->identityType) {
            @$query['IdentityType'] = $request->identityType;
        }

        if (null !== $request->policyNames) {
            @$query['PolicyNames'] = $request->policyNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachAppPolicyFromIdentity',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachAppPolicyFromIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes application permissions from the specified identity. The identity may a RAM user or RAM role.
     *
     * @remarks
     * >  You can grant a maximum of 10 application permissions to a RAM user or RAM role.
     *
     * @param request - DetachAppPolicyFromIdentityRequest
     *
     * @returns DetachAppPolicyFromIdentityResponse
     *
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
     * Generates a key for secure download. ApsaraVideo Player SDK provides the secure download feature. Videos that are downloaded to your local device in this mode are encrypted. You can play the encrypted videos only by using the key file generated from the app that you specified. Secure download protects your videos from malicious playback or distribution.
     *
     * @remarks
     *   To use the secure download feature, you must enable the download feature in the ApsaraVideo VOD console and set the download method to secure download. For more information, see [Configure download settings](https://help.aliyun.com/document_detail/86107.html).
     * *   After you generate a key for secure download, you must configure the key in ApsaraVideo Player SDK. For more information, see [Secure download](https://help.aliyun.com/document_detail/124735.html).
     *
     * @param request - GenerateDownloadSecretKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateDownloadSecretKeyResponse
     *
     * @param GenerateDownloadSecretKeyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateDownloadSecretKeyResponse
     */
    public function generateDownloadSecretKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appDecryptKey) {
            @$query['AppDecryptKey'] = $request->appDecryptKey;
        }

        if (null !== $request->appIdentification) {
            @$query['AppIdentification'] = $request->appIdentification;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateDownloadSecretKey',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateDownloadSecretKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a key for secure download. ApsaraVideo Player SDK provides the secure download feature. Videos that are downloaded to your local device in this mode are encrypted. You can play the encrypted videos only by using the key file generated from the app that you specified. Secure download protects your videos from malicious playback or distribution.
     *
     * @remarks
     *   To use the secure download feature, you must enable the download feature in the ApsaraVideo VOD console and set the download method to secure download. For more information, see [Configure download settings](https://help.aliyun.com/document_detail/86107.html).
     * *   After you generate a key for secure download, you must configure the key in ApsaraVideo Player SDK. For more information, see [Secure download](https://help.aliyun.com/document_detail/124735.html).
     *
     * @param request - GenerateDownloadSecretKeyRequest
     *
     * @returns GenerateDownloadSecretKeyResponse
     *
     * @param GenerateDownloadSecretKeyRequest $request
     *
     * @return GenerateDownloadSecretKeyResponse
     */
    public function generateDownloadSecretKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDownloadSecretKeyWithOptions($request, $runtime);
    }

    /**
     * Generates a random Key Management Service (KMS) data key used for HLS encryption in ApsaraVideo VOD.
     *
     * @param request - GenerateKMSDataKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateKMSDataKeyResponse
     *
     * @param GenerateKMSDataKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateKMSDataKey',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateKMSDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a random Key Management Service (KMS) data key used for HLS encryption in ApsaraVideo VOD.
     *
     * @param request - GenerateKMSDataKeyRequest
     *
     * @returns GenerateKMSDataKeyResponse
     *
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
     * Queries jobs of image AI processing.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)** and **China (Shanghai)**.
     * *   Call the [SubmitAIImageJob](~~SubmitAIImageJob~~) operation to submit image AI processing jobs before you call this operation to query image AI processing jobs.
     * *   You can query a maximum of 10 jobs of image AI processing in one request.
     *
     * @param request - GetAIImageJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAIImageJobsResponse
     *
     * @param GetAIImageJobsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAIImageJobsResponse
     */
    public function getAIImageJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAIImageJobs',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAIImageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries jobs of image AI processing.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)** and **China (Shanghai)**.
     * *   Call the [SubmitAIImageJob](~~SubmitAIImageJob~~) operation to submit image AI processing jobs before you call this operation to query image AI processing jobs.
     * *   You can query a maximum of 10 jobs of image AI processing in one request.
     *
     * @param request - GetAIImageJobsRequest
     *
     * @returns GetAIImageJobsResponse
     *
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
     * Queries the information about an intelligent review job. After the job is submitted, it is processed asynchronously. You can call this operation to query the job information in real time.
     *
     * @remarks
     * ApsaraVideo VOD stores the snapshots of the intelligent review results free of charge for two weeks. After this period, the snapshots are automatically deleted.
     *
     * @param request - GetAIMediaAuditJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAIMediaAuditJobResponse
     *
     * @param GetAIMediaAuditJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAIMediaAuditJobResponse
     */
    public function getAIMediaAuditJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAIMediaAuditJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAIMediaAuditJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an intelligent review job. After the job is submitted, it is processed asynchronously. You can call this operation to query the job information in real time.
     *
     * @remarks
     * ApsaraVideo VOD stores the snapshots of the intelligent review results free of charge for two weeks. After this period, the snapshots are automatically deleted.
     *
     * @param request - GetAIMediaAuditJobRequest
     *
     * @returns GetAIMediaAuditJobResponse
     *
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
     * Queries the details of an AI template.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   Before you call this operation to query details of an AI template, you must obtain the ID of the AI template.
     *
     * @param request - GetAITemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAITemplateResponse
     *
     * @param GetAITemplateRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAITemplateResponse
     */
    public function getAITemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAITemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an AI template.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   Before you call this operation to query details of an AI template, you must obtain the ID of the AI template.
     *
     * @param request - GetAITemplateRequest
     *
     * @returns GetAITemplateResponse
     *
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
     * Queries the results of smart tagging jobs.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You can obtain the smart tagging results by using the video ID.
     *
     * @param request - GetAIVideoTagResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAIVideoTagResultResponse
     *
     * @param GetAIVideoTagResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAIVideoTagResultResponse
     */
    public function getAIVideoTagResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAIVideoTagResult',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAIVideoTagResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of smart tagging jobs.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You can obtain the smart tagging results by using the video ID.
     *
     * @param request - GetAIVideoTagResultRequest
     *
     * @returns GetAIVideoTagResultResponse
     *
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
     * Queries the information about one or more applications based on application IDs.
     *
     * @remarks
     * You can specify multiple accelerated domain names in a request.
     *
     * @param request - GetAppInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppInfosResponse
     *
     * @param GetAppInfosRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAppInfosResponse
     */
    public function getAppInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more applications based on application IDs.
     *
     * @remarks
     * You can specify multiple accelerated domain names in a request.
     *
     * @param request - GetAppInfosRequest
     *
     * @returns GetAppInfosResponse
     *
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
     * Queries the URL and basic information about one or more auxiliary media assets such as watermark images, subtitle files, and materials based on IDs.
     *
     * @remarks
     * You can query information about up to 20 auxiliary media assets in a request.
     *
     * @param request - GetAttachedMediaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAttachedMediaInfoResponse
     *
     * @param GetAttachedMediaInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAttachedMediaInfoResponse
     */
    public function getAttachedMediaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->outputType) {
            @$query['OutputType'] = $request->outputType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAttachedMediaInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAttachedMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the URL and basic information about one or more auxiliary media assets such as watermark images, subtitle files, and materials based on IDs.
     *
     * @remarks
     * You can query information about up to 20 auxiliary media assets in a request.
     *
     * @param request - GetAttachedMediaInfoRequest
     *
     * @returns GetAttachedMediaInfoResponse
     *
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
     * Queries the manual review history.
     *
     * @param request - GetAuditHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuditHistoryResponse
     *
     * @param GetAuditHistoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAuditHistoryResponse
     */
    public function getAuditHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuditHistory',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuditHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the manual review history.
     *
     * @param request - GetAuditHistoryRequest
     *
     * @returns GetAuditHistoryResponse
     *
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
     * Queries the information about a specific category and its subcategories based on the ID or type of the category.
     *
     * @param request - GetCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCategoriesResponse
     *
     * @param GetCategoriesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCategoriesResponse
     */
    public function getCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCategories',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a specific category and its subcategories based on the ID or type of the category.
     *
     * @param request - GetCategoriesRequest
     *
     * @returns GetCategoriesResponse
     *
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
     * 支持区域化媒资ID级别播放数据查询.
     *
     * @param request - GetDailyPlayRegionStatisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDailyPlayRegionStatisResponse
     *
     * @param GetDailyPlayRegionStatisRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDailyPlayRegionStatisResponse
     */
    public function getDailyPlayRegionStatisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['Date'] = $request->date;
        }

        if (null !== $request->mediaRegion) {
            @$query['MediaRegion'] = $request->mediaRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDailyPlayRegionStatis',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDailyPlayRegionStatisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 支持区域化媒资ID级别播放数据查询.
     *
     * @param request - GetDailyPlayRegionStatisRequest
     *
     * @returns GetDailyPlayRegionStatisResponse
     *
     * @param GetDailyPlayRegionStatisRequest $request
     *
     * @return GetDailyPlayRegionStatisResponse
     */
    public function getDailyPlayRegionStatis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDailyPlayRegionStatisWithOptions($request, $runtime);
    }

    /**
     * Queries information about the default AI template.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You can query information only about the default AI template for automated review.
     *
     * @param request - GetDefaultAITemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDefaultAITemplateResponse
     *
     * @param GetDefaultAITemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDefaultAITemplateResponse
     */
    public function getDefaultAITemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDefaultAITemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDefaultAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the default AI template.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You can query information only about the default AI template for automated review.
     *
     * @param request - GetDefaultAITemplateRequest
     *
     * @returns GetDefaultAITemplateResponse
     *
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
     * Queries the results of a digital watermark extraction job. You can call this operation to obtain information such as the job status and the content of the copyright or user-tracing watermark.
     *
     * @remarks
     *   This operation is supported only in the China (Shanghai) and China (Beijing) regions.
     * *   You can call this operation to query the watermark content after you call the [SubmitDigitalWatermarkExtractJob](~~SubmitDigitalWatermarkExtractJob~~) operation to extract the copyright or user-tracing watermark in a video.
     * *   You can query watermark content extracted only from watermark extraction jobs that are submitted in the last 2 years.
     *
     * @param request - GetDigitalWatermarkExtractResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDigitalWatermarkExtractResultResponse
     *
     * @param GetDigitalWatermarkExtractResultRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetDigitalWatermarkExtractResultResponse
     */
    public function getDigitalWatermarkExtractResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extractType) {
            @$query['ExtractType'] = $request->extractType;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDigitalWatermarkExtractResult',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDigitalWatermarkExtractResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of a digital watermark extraction job. You can call this operation to obtain information such as the job status and the content of the copyright or user-tracing watermark.
     *
     * @remarks
     *   This operation is supported only in the China (Shanghai) and China (Beijing) regions.
     * *   You can call this operation to query the watermark content after you call the [SubmitDigitalWatermarkExtractJob](~~SubmitDigitalWatermarkExtractJob~~) operation to extract the copyright or user-tracing watermark in a video.
     * *   You can query watermark content extracted only from watermark extraction jobs that are submitted in the last 2 years.
     *
     * @param request - GetDigitalWatermarkExtractResultRequest
     *
     * @returns GetDigitalWatermarkExtractResultResponse
     *
     * @param GetDigitalWatermarkExtractResultRequest $request
     *
     * @return GetDigitalWatermarkExtractResultResponse
     */
    public function getDigitalWatermarkExtractResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDigitalWatermarkExtractResultWithOptions($request, $runtime);
    }

    /**
     * 获取剪辑工程.
     *
     * @param request - GetEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEditingProjectResponse
     *
     * @param GetEditingProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEditingProject',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取剪辑工程.
     *
     * @param request - GetEditingProjectRequest
     *
     * @returns GetEditingProjectResponse
     *
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
     * Queries materials to be edited for an online editing project.
     *
     * @remarks
     * During editing, you can add materials to the timeline, but some of them may not be used.
     *
     * @param request - GetEditingProjectMaterialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEditingProjectMaterialsResponse
     *
     * @param GetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->materialType) {
            @$query['MaterialType'] = $request->materialType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEditingProjectMaterials',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries materials to be edited for an online editing project.
     *
     * @remarks
     * During editing, you can add materials to the timeline, but some of them may not be used.
     *
     * @param request - GetEditingProjectMaterialsRequest
     *
     * @returns GetEditingProjectMaterialsResponse
     *
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
     * Queries the basic information and access URL of an image based on the image ID.
     *
     * @param request - GetImageInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageInfoResponse
     *
     * @param GetImageInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetImageInfoResponse
     */
    public function getImageInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->outputType) {
            @$query['OutputType'] = $request->outputType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information and access URL of an image based on the image ID.
     *
     * @param request - GetImageInfoRequest
     *
     * @returns GetImageInfoResponse
     *
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
     * Queries the basic information about multiple images at a time.
     *
     * @remarks
     *   You can call the [CreateUploadImage](~~CreateUploadImage~~) operation to upload images to ApsaraVideo VOD and call this operation to query the basic information about multiple images at a time.
     * *   To query information about video snapshots, call the [ListSnapshots](~~ListSnapshots~~) operation.
     * *   You can specify up to 20 image IDs in one call.
     *
     * @param request - GetImageInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageInfosResponse
     *
     * @param GetImageInfosRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetImageInfosResponse
     */
    public function getImageInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->imageIds) {
            @$query['ImageIds'] = $request->imageIds;
        }

        if (null !== $request->outputType) {
            @$query['OutputType'] = $request->outputType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about multiple images at a time.
     *
     * @remarks
     *   You can call the [CreateUploadImage](~~CreateUploadImage~~) operation to upload images to ApsaraVideo VOD and call this operation to query the basic information about multiple images at a time.
     * *   To query information about video snapshots, call the [ListSnapshots](~~ListSnapshots~~) operation.
     * *   You can specify up to 20 image IDs in one call.
     *
     * @param request - GetImageInfosRequest
     *
     * @returns GetImageInfosResponse
     *
     * @param GetImageInfosRequest $request
     *
     * @return GetImageInfosResponse
     */
    public function getImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageInfosWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an asynchronous task based on jobId.
     *
     * @remarks
     * ***
     * You can call this operation to query only asynchronous tasks of the last six months. The types of tasks that you can query include transcoding tasks, snapshot tasks, and AI tasks.
     * **QPS limit**
     * You can call this operation up to 15 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - GetJobDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobDetailResponse
     *
     * @param GetJobDetailRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobDetailResponse
     */
    public function getJobDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobDetail',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an asynchronous task based on jobId.
     *
     * @remarks
     * ***
     * You can call this operation to query only asynchronous tasks of the last six months. The types of tasks that you can query include transcoding tasks, snapshot tasks, and AI tasks.
     * **QPS limit**
     * You can call this operation up to 15 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - GetJobDetailRequest
     *
     * @returns GetJobDetailResponse
     *
     * @param GetJobDetailRequest $request
     *
     * @return GetJobDetailResponse
     */
    public function getJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the details of audio review results.
     *
     * @remarks
     * If notifications for the [CreateAuditComplete](https://help.aliyun.com/document_detail/89576.html) event are configured, event notifications are sent to the callback URL after automated review is complete. You can call this operation to query the details of audio review results.
     *
     * @param request - GetMediaAuditAudioResultDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaAuditAudioResultDetailResponse
     *
     * @param GetMediaAuditAudioResultDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetMediaAuditAudioResultDetailResponse
     */
    public function getMediaAuditAudioResultDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMediaAuditAudioResultDetail',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaAuditAudioResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of audio review results.
     *
     * @remarks
     * If notifications for the [CreateAuditComplete](https://help.aliyun.com/document_detail/89576.html) event are configured, event notifications are sent to the callback URL after automated review is complete. You can call this operation to query the details of audio review results.
     *
     * @param request - GetMediaAuditAudioResultDetailRequest
     *
     * @returns GetMediaAuditAudioResultDetailResponse
     *
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
     * Queries the summary of automated review results.
     *
     * @param request - GetMediaAuditResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaAuditResultResponse
     *
     * @param GetMediaAuditResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMediaAuditResultResponse
     */
    public function getMediaAuditResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMediaAuditResult',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaAuditResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the summary of automated review results.
     *
     * @param request - GetMediaAuditResultRequest
     *
     * @returns GetMediaAuditResultResponse
     *
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
     * Queries the details of automated review results. You can call this operation to query the details of review results in real time.
     *
     * @remarks
     *   By default, only details of snapshots that violate content regulations and potentially violate content regulations are returned.
     * *   ApsaraVideo VOD stores the snapshots in the automated review results free of charge for two weeks. After this period, the snapshots are automatically deleted.
     * *   This operation is available only in the Singapore region.
     *
     * @param request - GetMediaAuditResultDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaAuditResultDetailResponse
     *
     * @param GetMediaAuditResultDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetMediaAuditResultDetailResponse
     */
    public function getMediaAuditResultDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMediaAuditResultDetail',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaAuditResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of automated review results. You can call this operation to query the details of review results in real time.
     *
     * @remarks
     *   By default, only details of snapshots that violate content regulations and potentially violate content regulations are returned.
     * *   ApsaraVideo VOD stores the snapshots in the automated review results free of charge for two weeks. After this period, the snapshots are automatically deleted.
     * *   This operation is available only in the Singapore region.
     *
     * @param request - GetMediaAuditResultDetailRequest
     *
     * @returns GetMediaAuditResultDetailResponse
     *
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
     * Queries the timelines of all snapshots that violate content regulations.
     *
     * @remarks
     * >  By default, only details of snapshots that violate content regulations and potentially violate content regulations are returned.
     * This operation is available only in the Singapore region.
     *
     * @param request - GetMediaAuditResultTimelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaAuditResultTimelineResponse
     *
     * @param GetMediaAuditResultTimelineRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetMediaAuditResultTimelineResponse
     */
    public function getMediaAuditResultTimelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMediaAuditResultTimeline',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaAuditResultTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the timelines of all snapshots that violate content regulations.
     *
     * @remarks
     * >  By default, only details of snapshots that violate content regulations and potentially violate content regulations are returned.
     * This operation is available only in the Singapore region.
     *
     * @param request - GetMediaAuditResultTimelineRequest
     *
     * @returns GetMediaAuditResultTimelineResponse
     *
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
     * Queries a media fingerprinting result. After a media fingerprinting job is complete, you can call this operation to query the media fingerprinting result.
     *
     * @remarks
     * Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     *
     * @param request - GetMediaDNAResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaDNAResultResponse
     *
     * @param GetMediaDNAResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMediaDNAResultResponse
     */
    public function getMediaDNAResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMediaDNAResult',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaDNAResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a media fingerprinting result. After a media fingerprinting job is complete, you can call this operation to query the media fingerprinting result.
     *
     * @remarks
     * Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     *
     * @param request - GetMediaDNAResultRequest
     *
     * @returns GetMediaDNAResultResponse
     *
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
     * Queries the information about media refresh or prefetch jobs, such as the job status and filtering conditions.
     *
     * @remarks
     * You can query the information about all media files or a specific media file in a refresh or prefetch job.
     * ### QPS limits
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VoD](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - GetMediaRefreshJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaRefreshJobsResponse
     *
     * @param GetMediaRefreshJobsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMediaRefreshJobsResponse
     */
    public function getMediaRefreshJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMediaRefreshJobs',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaRefreshJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about media refresh or prefetch jobs, such as the job status and filtering conditions.
     *
     * @remarks
     * You can query the information about all media files or a specific media file in a refresh or prefetch job.
     * ### QPS limits
     * You can call this operation up to 50 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations in ApsaraVideo VoD](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - GetMediaRefreshJobsRequest
     *
     * @returns GetMediaRefreshJobsResponse
     *
     * @param GetMediaRefreshJobsRequest $request
     *
     * @return GetMediaRefreshJobsResponse
     */
    public function getMediaRefreshJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaRefreshJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the callback method, callback URL, and event type for event notifications.
     *
     * @remarks
     * > For more information, see [Event notification](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - GetMessageCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMessageCallbackResponse
     *
     * @param GetMessageCallbackRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMessageCallbackResponse
     */
    public function getMessageCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMessageCallback',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the callback method, callback URL, and event type for event notifications.
     *
     * @remarks
     * > For more information, see [Event notification](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - GetMessageCallbackRequest
     *
     * @returns GetMessageCallbackResponse
     *
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
     * Queries the information about the mezzanine file of an audio or video. The information includes the mezzanine file URL, resolution, and bitrate of the audio or video.
     *
     * @remarks
     * You can obtain complete information about the source file only after a stream is transcoded.
     *
     * @param request - GetMezzanineInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMezzanineInfoResponse
     *
     * @param GetMezzanineInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMezzanineInfoResponse
     */
    public function getMezzanineInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additionType) {
            @$query['AdditionType'] = $request->additionType;
        }

        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->outputType) {
            @$query['OutputType'] = $request->outputType;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMezzanineInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMezzanineInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the mezzanine file of an audio or video. The information includes the mezzanine file URL, resolution, and bitrate of the audio or video.
     *
     * @remarks
     * You can obtain complete information about the source file only after a stream is transcoded.
     *
     * @param request - GetMezzanineInfoRequest
     *
     * @returns GetMezzanineInfoResponse
     *
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
     * Obtains the playback URL by the audio or video ID. Then, you can use ApsaraVideo Player or a third-party player, such as a system player, open source player, orself-developed player, to play the audio or video.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged for outbound traffic when you download or play videos based on URLs in ApsaraVideo VOD. For more information about billing of outbound traffic, see [Billing of outbound traffic](~~188308#section-rwh-e88-f7j~~). If you have configured an accelerated domain name, see [Billing of the acceleration service](~~188308#section-c5t-oq9-15e~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   Only videos whose Status is Normal can be played. For more information, see [Overview](https://help.aliyun.com/document_detail/57290.html).
     * *   If video playback fails, you can call the [GetMezzanineInfo](~~GetMezzanineInfo~~) operation to check whether the video source information is correct.
     *
     * @param request - GetPlayInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPlayInfoResponse
     *
     * @param GetPlayInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPlayInfoResponse
     */
    public function getPlayInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additionType) {
            @$query['AdditionType'] = $request->additionType;
        }

        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->definition) {
            @$query['Definition'] = $request->definition;
        }

        if (null !== $request->digitalWatermarkType) {
            @$query['DigitalWatermarkType'] = $request->digitalWatermarkType;
        }

        if (null !== $request->formats) {
            @$query['Formats'] = $request->formats;
        }

        if (null !== $request->outputType) {
            @$query['OutputType'] = $request->outputType;
        }

        if (null !== $request->playConfig) {
            @$query['PlayConfig'] = $request->playConfig;
        }

        if (null !== $request->reAuthInfo) {
            @$query['ReAuthInfo'] = $request->reAuthInfo;
        }

        if (null !== $request->resultType) {
            @$query['ResultType'] = $request->resultType;
        }

        if (null !== $request->streamType) {
            @$query['StreamType'] = $request->streamType;
        }

        if (null !== $request->trace) {
            @$query['Trace'] = $request->trace;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPlayInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the playback URL by the audio or video ID. Then, you can use ApsaraVideo Player or a third-party player, such as a system player, open source player, orself-developed player, to play the audio or video.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged for outbound traffic when you download or play videos based on URLs in ApsaraVideo VOD. For more information about billing of outbound traffic, see [Billing of outbound traffic](~~188308#section-rwh-e88-f7j~~). If you have configured an accelerated domain name, see [Billing of the acceleration service](~~188308#section-c5t-oq9-15e~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   Only videos whose Status is Normal can be played. For more information, see [Overview](https://help.aliyun.com/document_detail/57290.html).
     * *   If video playback fails, you can call the [GetMezzanineInfo](~~GetMezzanineInfo~~) operation to check whether the video source information is correct.
     *
     * @param request - GetPlayInfoRequest
     *
     * @returns GetPlayInfoResponse
     *
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
     * Queries transcoding summaries of audio and video files based on the file ID. A transcoding summary includes the status and progress of transcoding.
     *
     * @remarks
     *   An audio or video file may be transcoded multiple times. This operation returns only the latest transcoding summary.
     * *   You can query transcoding summaries for a maximum of 10 audio and video files in one request.
     * *   You can call the [ListTranscodeTask](https://help.aliyun.com/document_detail/109120.html) operation to query historical transcoding tasks.
     * *   **You can call this operation to query information only about transcoding tasks created within the past year.
     *
     * @param request - GetTranscodeSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTranscodeSummaryResponse
     *
     * @param GetTranscodeSummaryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetTranscodeSummaryResponse
     */
    public function getTranscodeSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->videoIds) {
            @$query['VideoIds'] = $request->videoIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTranscodeSummary',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTranscodeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries transcoding summaries of audio and video files based on the file ID. A transcoding summary includes the status and progress of transcoding.
     *
     * @remarks
     *   An audio or video file may be transcoded multiple times. This operation returns only the latest transcoding summary.
     * *   You can query transcoding summaries for a maximum of 10 audio and video files in one request.
     * *   You can call the [ListTranscodeTask](https://help.aliyun.com/document_detail/109120.html) operation to query historical transcoding tasks.
     * *   **You can call this operation to query information only about transcoding tasks created within the past year.
     *
     * @param request - GetTranscodeSummaryRequest
     *
     * @returns GetTranscodeSummaryResponse
     *
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
     * Queries details about transcoding jobs based on the transcoding task ID.
     *
     * @remarks
     * You can call this operation to query only transcoding tasks created within the past year.
     *
     * @param request - GetTranscodeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTranscodeTaskResponse
     *
     * @param GetTranscodeTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTranscodeTaskResponse
     */
    public function getTranscodeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->transcodeTaskId) {
            @$query['TranscodeTaskId'] = $request->transcodeTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTranscodeTask',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTranscodeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details about transcoding jobs based on the transcoding task ID.
     *
     * @remarks
     * You can call this operation to query only transcoding tasks created within the past year.
     *
     * @param request - GetTranscodeTaskRequest
     *
     * @returns GetTranscodeTaskResponse
     *
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
     * Queries the details of a transcoding template group based on the template group ID.
     *
     * @remarks
     * This operation returns information about the specified transcoding template group and the configurations of all the transcoding templates in the group.
     *
     * @param request - GetTranscodeTemplateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTranscodeTemplateGroupResponse
     *
     * @param GetTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTranscodeTemplateGroupResponse
     */
    public function getTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->transcodeTemplateGroupId) {
            @$query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTranscodeTemplateGroup',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a transcoding template group based on the template group ID.
     *
     * @remarks
     * This operation returns information about the specified transcoding template group and the configurations of all the transcoding templates in the group.
     *
     * @param request - GetTranscodeTemplateGroupRequest
     *
     * @returns GetTranscodeTemplateGroupResponse
     *
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
     * Queries the information about URL-based upload jobs.
     *
     * @remarks
     * You can query the information about a URL-based upload job by specifying the upload URL or using the job ID returned when you upload media files. The information includes the status of the upload job, custom configurations, the time when the job was created, and the time when the job was complete.
     * If the upload fails, you can view the error code and error message. If the upload is successful, you can obtain the video ID.
     *
     * @param request - GetURLUploadInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetURLUploadInfosResponse
     *
     * @param GetURLUploadInfosRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetURLUploadInfosResponse
     */
    public function getURLUploadInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->uploadURLs) {
            @$query['UploadURLs'] = $request->uploadURLs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetURLUploadInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetURLUploadInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about URL-based upload jobs.
     *
     * @remarks
     * You can query the information about a URL-based upload job by specifying the upload URL or using the job ID returned when you upload media files. The information includes the status of the upload job, custom configurations, the time when the job was created, and the time when the job was complete.
     * If the upload fails, you can view the error code and error message. If the upload is successful, you can obtain the video ID.
     *
     * @param request - GetURLUploadInfosRequest
     *
     * @returns GetURLUploadInfosResponse
     *
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
     * Queries the upload details, such as the upload time, upload ratio, and upload source, about one or more media files based on the media IDs.
     *
     * @remarks
     *   You can call this operation to obtain the upload details only about audio and video files.
     * *   If you use the ApsaraVideo VOD console to upload audio and video files, you can call this operation to query information such as the upload ratio. If you use an upload SDK to upload audio and video files, make sure that the version of the [upload SDK](https://help.aliyun.com/document_detail/52200.html) meets one of the following requirements:
     *     *   The version of the upload SDK for Java is 1.4.4 or later.
     *     *   The version of the upload SDK for C++ is 1.0.0 or later.
     *     *   The version of the upload SDK for PHP is 1.0.2 or later.
     *     *   The version of the upload SDK for Python is 1.3.0 or later.
     *     *   The version of the upload SDK for JavaScript is 1.4.0 or later.
     *     *   The version of the upload SDK for Android is 1.5.0 or later.
     *     *   The version of the upload SDK for iOS is 1.5.0 or later.
     *
     * @param request - GetUploadDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadDetailsResponse
     *
     * @param GetUploadDetailsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUploadDetailsResponse
     */
    public function getUploadDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUploadDetails',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUploadDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the upload details, such as the upload time, upload ratio, and upload source, about one or more media files based on the media IDs.
     *
     * @remarks
     *   You can call this operation to obtain the upload details only about audio and video files.
     * *   If you use the ApsaraVideo VOD console to upload audio and video files, you can call this operation to query information such as the upload ratio. If you use an upload SDK to upload audio and video files, make sure that the version of the [upload SDK](https://help.aliyun.com/document_detail/52200.html) meets one of the following requirements:
     *     *   The version of the upload SDK for Java is 1.4.4 or later.
     *     *   The version of the upload SDK for C++ is 1.0.0 or later.
     *     *   The version of the upload SDK for PHP is 1.0.2 or later.
     *     *   The version of the upload SDK for Python is 1.3.0 or later.
     *     *   The version of the upload SDK for JavaScript is 1.4.0 or later.
     *     *   The version of the upload SDK for Android is 1.5.0 or later.
     *     *   The version of the upload SDK for iOS is 1.5.0 or later.
     *
     * @param request - GetUploadDetailsRequest
     *
     * @returns GetUploadDetailsResponse
     *
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
     * Obtains the title, description, duration, thumbnail URL, status, creation time, size, snapshots, category, and tags of a media file based on the file ID.
     *
     * @remarks
     * After a media file is uploaded, ApsaraVideo VOD processes the source file. Then, information about the media file is asynchronously generated. You can configure notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event and call this operation to query information about a media file after you receive notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - GetVideoInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoInfoResponse
     *
     * @param GetVideoInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetVideoInfoResponse
     */
    public function getVideoInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the title, description, duration, thumbnail URL, status, creation time, size, snapshots, category, and tags of a media file based on the file ID.
     *
     * @remarks
     * After a media file is uploaded, ApsaraVideo VOD processes the source file. Then, information about the media file is asynchronously generated. You can configure notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event and call this operation to query information about a media file after you receive notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - GetVideoInfoRequest
     *
     * @returns GetVideoInfoResponse
     *
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
     * Queries information such as the title, description, duration, thumbnail URL, status, creation time, size, snapshots, category, and tags about multiple audio or video files based on IDs.
     *
     * @remarks
     *   You can specify up to 20 audio or video file IDs in each request.
     * *   After a media file is uploaded, ApsaraVideo VOD processes the source file. Then, information about the media file is asynchronously generated. You can configure notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event and call this operation to query information about a media file after you receive notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - GetVideoInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoInfosResponse
     *
     * @param GetVideoInfosRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetVideoInfosResponse
     */
    public function getVideoInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->videoIds) {
            @$query['VideoIds'] = $request->videoIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information such as the title, description, duration, thumbnail URL, status, creation time, size, snapshots, category, and tags about multiple audio or video files based on IDs.
     *
     * @remarks
     *   You can specify up to 20 audio or video file IDs in each request.
     * *   After a media file is uploaded, ApsaraVideo VOD processes the source file. Then, information about the media file is asynchronously generated. You can configure notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event and call this operation to query information about a media file after you receive notifications for the [VideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - GetVideoInfosRequest
     *
     * @returns GetVideoInfosResponse
     *
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
     * Queries information about media files.
     *
     * @remarks
     * You can call this operation to query information about media files based on the filter conditions that you specify, such as video status and category ID. Information about a maximum of **5,000** media files can be returned for each request. We recommend that you set the StartTime and EndTime parameters to specify a time range for each request. For more information about how to query information about more media files or even all media files, see [SearchMedia](https://help.aliyun.com/document_detail/86044.html).
     *
     * @param request - GetVideoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoListResponse
     *
     * @param GetVideoListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetVideoListResponse
     */
    public function getVideoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->storageLocation) {
            @$query['StorageLocation'] = $request->storageLocation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoList',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about media files.
     *
     * @remarks
     * You can call this operation to query information about media files based on the filter conditions that you specify, such as video status and category ID. Information about a maximum of **5,000** media files can be returned for each request. We recommend that you set the StartTime and EndTime parameters to specify a time range for each request. For more information about how to query information about more media files or even all media files, see [SearchMedia](https://help.aliyun.com/document_detail/86044.html).
     *
     * @param request - GetVideoListRequest
     *
     * @returns GetVideoListResponse
     *
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
     * Queries the credential required for media playback. ApsaraVideo Player SDK automatically obtains the playback URL based on the playback credential. Each playback credential can be used to obtain the playback URL only for a specific video in a specific period of time. You cannot obtain the playback URL if the credential expires or is incorrect. You can use PlayAuth-based playback when you require high security for audio and video playback.
     *
     * @remarks
     *   You can call this operation to obtain a playback credential when you use ApsaraVideo Player SDK to play a media file based on PlayAuth. The credential is used to obtain the playback URL. For more information, see [ApsaraVideo Player SDK](https://help.aliyun.com/document_detail/125579.html).
     * *   You cannot obtain the playback URL of a video by using a credential that has expired. A new credential is required.
     *
     * @param request - GetVideoPlayAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoPlayAuthResponse
     *
     * @param GetVideoPlayAuthRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVideoPlayAuthResponse
     */
    public function getVideoPlayAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiVersion) {
            @$query['ApiVersion'] = $request->apiVersion;
        }

        if (null !== $request->authInfoTimeout) {
            @$query['AuthInfoTimeout'] = $request->authInfoTimeout;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoPlayAuth',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoPlayAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the credential required for media playback. ApsaraVideo Player SDK automatically obtains the playback URL based on the playback credential. Each playback credential can be used to obtain the playback URL only for a specific video in a specific period of time. You cannot obtain the playback URL if the credential expires or is incorrect. You can use PlayAuth-based playback when you require high security for audio and video playback.
     *
     * @remarks
     *   You can call this operation to obtain a playback credential when you use ApsaraVideo Player SDK to play a media file based on PlayAuth. The credential is used to obtain the playback URL. For more information, see [ApsaraVideo Player SDK](https://help.aliyun.com/document_detail/125579.html).
     * *   You cannot obtain the playback URL of a video by using a credential that has expired. A new credential is required.
     *
     * @param request - GetVideoPlayAuthRequest
     *
     * @returns GetVideoPlayAuthResponse
     *
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
     * Queries a single snapshot template.
     *
     * @param request - GetVodTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVodTemplateResponse
     *
     * @param GetVodTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetVodTemplateResponse
     */
    public function getVodTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vodTemplateId) {
            @$query['VodTemplateId'] = $request->vodTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVodTemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a single snapshot template.
     *
     * @param request - GetVodTemplateRequest
     *
     * @returns GetVodTemplateResponse
     *
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
     * Queries the information about an image or text watermark based on the watermark template ID. You can call this operation to obtain information such as the position, size, and display time of an image watermark or the content, position, font, and font color of a text watermark.
     *
     * @param request - GetWatermarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWatermarkResponse
     *
     * @param GetWatermarkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetWatermarkResponse
     */
    public function getWatermarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->watermarkId) {
            @$query['WatermarkId'] = $request->watermarkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWatermark',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an image or text watermark based on the watermark template ID. You can call this operation to obtain information such as the position, size, and display time of an image watermark or the content, position, font, and font color of a text watermark.
     *
     * @param request - GetWatermarkRequest
     *
     * @returns GetWatermarkResponse
     *
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
     * Queries the AI processing results about the images of a specified video.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)** and **China (Shanghai)**.
     * *   You can call this operation to query AI processing results about images of a specified video. Images of different videos cannot be queried in one request.
     *
     * @param request - ListAIImageInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAIImageInfoResponse
     *
     * @param ListAIImageInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAIImageInfoResponse
     */
    public function listAIImageInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAIImageInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAIImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the AI processing results about the images of a specified video.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)** and **China (Shanghai)**.
     * *   You can call this operation to query AI processing results about images of a specified video. Images of different videos cannot be queried in one request.
     *
     * @param request - ListAIImageInfoRequest
     *
     * @returns ListAIImageInfoResponse
     *
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
     * Queries AI jobs. After a job is submitted, ApsaraVideo VOD asynchronously processes the job. You can call this operation to query the job information in real time.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You can call this operation to query video fingerprinting jobs and smart tagging jobs.
     *
     * @param request - ListAIJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAIJobResponse
     *
     * @param ListAIJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListAIJobResponse
     */
    public function listAIJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAIJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries AI jobs. After a job is submitted, ApsaraVideo VOD asynchronously processes the job. You can call this operation to query the job information in real time.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You can call this operation to query video fingerprinting jobs and smart tagging jobs.
     *
     * @param request - ListAIJobRequest
     *
     * @returns ListAIJobResponse
     *
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
     * Queries AI templates.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You can call this operation to query AI templates of a specified type.
     *
     * @param request - ListAITemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAITemplateResponse
     *
     * @param ListAITemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAITemplateResponse
     */
    public function listAITemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAITemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries AI templates.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   You can call this operation to query AI templates of a specified type.
     *
     * @param request - ListAITemplateRequest
     *
     * @returns ListAITemplateResponse
     *
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
     * Queries the applications that you are authorized to manage based on query conditions.
     *
     * @remarks
     * ### [](#)Usage notes
     * You can query applications based on states.
     * ### [](#qps-)QPS limit
     * You can call this operation up to 30 times per second per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - ListAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppInfoResponse
     *
     * @param ListAppInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListAppInfoResponse
     */
    public function listAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applications that you are authorized to manage based on query conditions.
     *
     * @remarks
     * ### [](#)Usage notes
     * You can query applications based on states.
     * ### [](#qps-)QPS limit
     * You can call this operation up to 30 times per second per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - ListAppInfoRequest
     *
     * @returns ListAppInfoResponse
     *
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
     * Queries the application policies that are attached to the specified identity. The identity may be a RAM user or RAM role.
     *
     * @remarks
     * > The IdentityType and IdentityName parameters take effect only when an identity assumes the application administrator role to call this operation. Otherwise, only application policies that are attached to the current identity are returned.
     *
     * @param request - ListAppPoliciesForIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppPoliciesForIdentityResponse
     *
     * @param ListAppPoliciesForIdentityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListAppPoliciesForIdentityResponse
     */
    public function listAppPoliciesForIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->identityName) {
            @$query['IdentityName'] = $request->identityName;
        }

        if (null !== $request->identityType) {
            @$query['IdentityType'] = $request->identityType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppPoliciesForIdentity',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppPoliciesForIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the application policies that are attached to the specified identity. The identity may be a RAM user or RAM role.
     *
     * @remarks
     * > The IdentityType and IdentityName parameters take effect only when an identity assumes the application administrator role to call this operation. Otherwise, only application policies that are attached to the current identity are returned.
     *
     * @param request - ListAppPoliciesForIdentityRequest
     *
     * @returns ListAppPoliciesForIdentityResponse
     *
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
     * Queries the IP addresses in a review security group.
     *
     * @param request - ListAuditSecurityIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuditSecurityIpResponse
     *
     * @param ListAuditSecurityIpRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAuditSecurityIpResponse
     */
    public function listAuditSecurityIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityGroupName) {
            @$query['SecurityGroupName'] = $request->securityGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuditSecurityIp',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAuditSecurityIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP addresses in a review security group.
     *
     * @param request - ListAuditSecurityIpRequest
     *
     * @returns ListAuditSecurityIpResponse
     *
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
     * Queries the information about animated stickers of a video based on the video ID.
     *
     * @param request - ListDynamicImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDynamicImageResponse
     *
     * @param ListDynamicImageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDynamicImageResponse
     */
    public function listDynamicImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDynamicImage',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDynamicImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about animated stickers of a video based on the video ID.
     *
     * @param request - ListDynamicImageRequest
     *
     * @returns ListDynamicImageResponse
     *
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
     * Queries historical tasks based on the media asset ID.
     *
     * @remarks
     * ***
     * *   You can call the [GetJobDetail](https://apiworkbench.aliyun-inc.com/document/vod/2017-03-21/GetJobDetail?spm=openapi-amp.newDocPublishment.0.0.616a281fSegn0e) operation to query detailed information about the tasks.
     * *   You can call this operation to query only asynchronous tasks of the last six months. The types of tasks that you can query include transcoding tasks, snapshot tasks, and AI tasks.
     * **QPS limits**
     * You can call this operation up to 15 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - ListJobInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobInfoResponse
     *
     * @param ListJobInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListJobInfoResponse
     */
    public function listJobInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries historical tasks based on the media asset ID.
     *
     * @remarks
     * ***
     * *   You can call the [GetJobDetail](https://apiworkbench.aliyun-inc.com/document/vod/2017-03-21/GetJobDetail?spm=openapi-amp.newDocPublishment.0.0.616a281fSegn0e) operation to query detailed information about the tasks.
     * *   You can call this operation to query only asynchronous tasks of the last six months. The types of tasks that you can query include transcoding tasks, snapshot tasks, and AI tasks.
     * **QPS limits**
     * You can call this operation up to 15 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - ListJobInfoRequest
     *
     * @returns ListJobInfoResponse
     *
     * @param ListJobInfoRequest $request
     *
     * @return ListJobInfoResponse
     */
    public function listJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobInfoWithOptions($request, $runtime);
    }

    /**
     * Queries live-to-VOD videos.
     *
     * @remarks
     * You can query up to 5,000 videos based on the specified filter condition.
     *
     * @param request - ListLiveRecordVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLiveRecordVideoResponse
     *
     * @param ListLiveRecordVideoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListLiveRecordVideoResponse
     */
    public function listLiveRecordVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLiveRecordVideo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLiveRecordVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries live-to-VOD videos.
     *
     * @remarks
     * You can query up to 5,000 videos based on the specified filter condition.
     *
     * @param request - ListLiveRecordVideoRequest
     *
     * @returns ListLiveRecordVideoResponse
     *
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
     * Queries the snapshots that are captured by submitting snapshot jobs or snapshots that are generated by the system when you upload the video.
     *
     * @remarks
     * If multiple snapshots exist for a video, you can call this operation to query information about the latest snapshot.
     *
     * @param request - ListSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSnapshotsResponse
     *
     * @param ListSnapshotsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->snapshotType) {
            @$query['SnapshotType'] = $request->snapshotType;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSnapshots',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the snapshots that are captured by submitting snapshot jobs or snapshots that are generated by the system when you upload the video.
     *
     * @remarks
     * If multiple snapshots exist for a video, you can call this operation to query information about the latest snapshot.
     *
     * @param request - ListSnapshotsRequest
     *
     * @returns ListSnapshotsResponse
     *
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
     * Queries transcoding tasks based on the media ID. This operation does not return specific job information.
     *
     * @remarks
     *   You can call the [GetTranscodeTask](https://help.aliyun.com/document_detail/109121.html) operation to query details about transcoding jobs.
     * *   **You can call this operation to query only transcoding tasks created within the past year.**
     *
     * @param request - ListTranscodeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTranscodeTaskResponse
     *
     * @param ListTranscodeTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListTranscodeTaskResponse
     */
    public function listTranscodeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTranscodeTask',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTranscodeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries transcoding tasks based on the media ID. This operation does not return specific job information.
     *
     * @remarks
     *   You can call the [GetTranscodeTask](https://help.aliyun.com/document_detail/109121.html) operation to query details about transcoding jobs.
     * *   **You can call this operation to query only transcoding tasks created within the past year.**
     *
     * @param request - ListTranscodeTaskRequest
     *
     * @returns ListTranscodeTaskResponse
     *
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
     * Queries transcoding template groups.
     *
     * @remarks
     * > This operation does not return the configurations of transcoding templates in each transcoding template group. To query the configurations of transcoding templates in a specific transcoding template group, call the [GetTranscodeTemplateGroup](https://help.aliyun.com/document_detail/102670.html) operation.
     *
     * @param request - ListTranscodeTemplateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTranscodeTemplateGroupResponse
     *
     * @param ListTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListTranscodeTemplateGroupResponse
     */
    public function listTranscodeTemplateGroupWithOptions($request, $runtime)
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
            'action' => 'ListTranscodeTemplateGroup',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries transcoding template groups.
     *
     * @remarks
     * > This operation does not return the configurations of transcoding templates in each transcoding template group. To query the configurations of transcoding templates in a specific transcoding template group, call the [GetTranscodeTemplateGroup](https://help.aliyun.com/document_detail/102670.html) operation.
     *
     * @param request - ListTranscodeTemplateGroupRequest
     *
     * @returns ListTranscodeTemplateGroupResponse
     *
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
     * Queries snapshot templates.
     *
     * @param request - ListVodTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVodTemplateResponse
     *
     * @param ListVodTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListVodTemplateResponse
     */
    public function listVodTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVodTemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries snapshot templates.
     *
     * @param request - ListVodTemplateRequest
     *
     * @returns ListVodTemplateResponse
     *
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
     * Queries the configuration information about all image and text watermark templates in a region. You can call this operation to obtain information such as the position, size, and display time of image watermarks or the content, position, font, and font color of text watermarks.
     *
     * @param request - ListWatermarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWatermarkResponse
     *
     * @param ListWatermarkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListWatermarkResponse
     */
    public function listWatermarkWithOptions($request, $runtime)
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
            'action' => 'ListWatermark',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information about all image and text watermark templates in a region. You can call this operation to obtain information such as the position, size, and display time of image watermarks or the content, position, font, and font color of text watermarks.
     *
     * @param request - ListWatermarkRequest
     *
     * @returns ListWatermarkResponse
     *
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
     * Migrates resources between applications. The application administrator can directly migrate resources between applications. Resource Access Management (RAM) users or RAM roles must obtain the write permissions on the source and destination applications before they migrate resources between applications. Multiple resources can be migrated at a time.
     *
     * @param request - MoveAppResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveAppResourceResponse
     *
     * @param MoveAppResourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MoveAppResourceResponse
     */
    public function moveAppResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->targetAppId) {
            @$query['TargetAppId'] = $request->targetAppId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveAppResource',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveAppResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates resources between applications. The application administrator can directly migrate resources between applications. Resource Access Management (RAM) users or RAM roles must obtain the write permissions on the source and destination applications before they migrate resources between applications. Multiple resources can be migrated at a time.
     *
     * @param request - MoveAppResourceRequest
     *
     * @returns MoveAppResourceResponse
     *
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
     * Prefetches resources from an origin server to L2 nodes. Users can directly hit the cache upon their first visits. This way, workloads on the origin server can be reduced.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * > *   You can submit a maximum of 500 requests to prefetch resources based on URLs each day by using an Alibaba Cloud account. You cannot prefetch resources based on directories.
     * > *   You can call the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) operation to refresh content and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.htmll) operation to prefetch content.
     *
     * @param request - PreloadVodObjectCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreloadVodObjectCachesResponse
     *
     * @param PreloadVodObjectCachesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreloadVodObjectCachesResponse
     */
    public function preloadVodObjectCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
        }

        if (null !== $request->l2Preload) {
            @$query['L2Preload'] = $request->l2Preload;
        }

        if (null !== $request->objectPath) {
            @$query['ObjectPath'] = $request->objectPath;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->withHeader) {
            @$query['WithHeader'] = $request->withHeader;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PreloadVodObjectCaches',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreloadVodObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Prefetches resources from an origin server to L2 nodes. Users can directly hit the cache upon their first visits. This way, workloads on the origin server can be reduced.
     *
     * @remarks
     * > *   This operation is available only in the **China (Shanghai)** region.
     * > *   You can submit a maximum of 500 requests to prefetch resources based on URLs each day by using an Alibaba Cloud account. You cannot prefetch resources based on directories.
     * > *   You can call the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) operation to refresh content and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.htmll) operation to prefetch content.
     *
     * @param request - PreloadVodObjectCachesRequest
     *
     * @returns PreloadVodObjectCachesResponse
     *
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
     * Produces a video from one or more source files. You can directly specify source files by configuring the Timeline parameter. Alternatively, you can specify source files after you create an online editing project.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged for using the online editing feature. For more information, see [Billing](~~188310#section-pyv-b8h-bo7~~).**
     * *   This operation returns only the submission result of a video production task. When the submission result is returned, video production may still be in progress. After a video production task is submitted, the task is queued in the background for asynchronous processing.
     * *   The source files that are used in the timeline of an online editing project can be materials directly uploaded to the online project or selected from the media asset library. Only media assets that are in the Normal state can be used in the project.
     * *   Videos are produced based on ProjectId and Timeline. The following content describes the parameter configurations:
     *     *   You must specify ProjectId or Timeline. If you leave both parameters empty, the video cannot be produced.
     *     *   If you specify Timeline and leave ProjectId empty, the system automatically creates an online editing project based on Timeline and adds the materials specified in the Timeline to the project to produce videos.
     *     *   If you specify ProjectId and leave Timeline empty, the system automatically uses the latest timeline information of the project to produce videos.
     *     *   If you specify both ProjectId and Timeline, the system automatically uses the timeline information that you specified to produce videos and updates the project timeline and materials. You can also specify other parameters to update the corresponding information about the online editing project.
     * *   You can create up to 100 video tracks, 100 image tracks, and 100 subtitle tracks in a project.
     * *   The total size of material files cannot exceed 1 TB.
     * *   The buckets in which the materials reside and where the exported videos are stored must be in the same region as the region where ApsaraVideo VOD is activated.
     * *   The exported videos must meet the following requirements:
     *     *   The width and height of the video image cannot be less than 128 pixels.
     *     *   The width and height of the video image cannot exceed 4,096 pixels.
     *     *   The width cannot exceed 2,160 pixels.
     * *   After a video is produced, the video is automatically uploaded to ApsaraVideo VOD. Then, the **ProduceMediaComplete** and **FileUploadComplete** event notifications are sent to you. After the produced video is transcoded, the **StreamTranscodeComplete** and **TranscodeComplete** event notifications are sent to you.
     * *   You can add special effects to the video. For more information, see [Special effects](https://help.aliyun.com/document_detail/69082.html).
     *
     * @param request - ProduceEditingProjectVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProduceEditingProjectVideoResponse
     *
     * @param ProduceEditingProjectVideoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ProduceEditingProjectVideoResponse
     */
    public function produceEditingProjectVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->mediaMetadata) {
            @$query['MediaMetadata'] = $request->mediaMetadata;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->produceConfig) {
            @$query['ProduceConfig'] = $request->produceConfig;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->timeline) {
            @$query['Timeline'] = $request->timeline;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProduceEditingProjectVideo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProduceEditingProjectVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Produces a video from one or more source files. You can directly specify source files by configuring the Timeline parameter. Alternatively, you can specify source files after you create an online editing project.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged for using the online editing feature. For more information, see [Billing](~~188310#section-pyv-b8h-bo7~~).**
     * *   This operation returns only the submission result of a video production task. When the submission result is returned, video production may still be in progress. After a video production task is submitted, the task is queued in the background for asynchronous processing.
     * *   The source files that are used in the timeline of an online editing project can be materials directly uploaded to the online project or selected from the media asset library. Only media assets that are in the Normal state can be used in the project.
     * *   Videos are produced based on ProjectId and Timeline. The following content describes the parameter configurations:
     *     *   You must specify ProjectId or Timeline. If you leave both parameters empty, the video cannot be produced.
     *     *   If you specify Timeline and leave ProjectId empty, the system automatically creates an online editing project based on Timeline and adds the materials specified in the Timeline to the project to produce videos.
     *     *   If you specify ProjectId and leave Timeline empty, the system automatically uses the latest timeline information of the project to produce videos.
     *     *   If you specify both ProjectId and Timeline, the system automatically uses the timeline information that you specified to produce videos and updates the project timeline and materials. You can also specify other parameters to update the corresponding information about the online editing project.
     * *   You can create up to 100 video tracks, 100 image tracks, and 100 subtitle tracks in a project.
     * *   The total size of material files cannot exceed 1 TB.
     * *   The buckets in which the materials reside and where the exported videos are stored must be in the same region as the region where ApsaraVideo VOD is activated.
     * *   The exported videos must meet the following requirements:
     *     *   The width and height of the video image cannot be less than 128 pixels.
     *     *   The width and height of the video image cannot exceed 4,096 pixels.
     *     *   The width cannot exceed 2,160 pixels.
     * *   After a video is produced, the video is automatically uploaded to ApsaraVideo VOD. Then, the **ProduceMediaComplete** and **FileUploadComplete** event notifications are sent to you. After the produced video is transcoded, the **StreamTranscodeComplete** and **TranscodeComplete** event notifications are sent to you.
     * *   You can add special effects to the video. For more information, see [Special effects](https://help.aliyun.com/document_detail/69082.html).
     *
     * @param request - ProduceEditingProjectVideoRequest
     *
     * @returns ProduceEditingProjectVideoResponse
     *
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
     * Submits media refresh or prefetch tasks based on the media IDs.
     *
     * @remarks
     *   ApsaraVideo VOD allows you to purge and prefetch resources. The purge feature forces the point of presence (POP) to clear cached resources and retrieve the latest resources from origin servers. The prefetch feature allows the POP to retrieve frequently accessed resources from origin servers during off-peak hours. This increases the cache hit ratio.
     * *   You can call this operation to submit purge or prefetch tasks based on the media ID. You can also specify the format and resolution of the media streams to purge or prefetch based on your business requirements.
     * *   You can submit a maximum of 20 purge or prefetch tasks at a time.
     *
     * @param request - RefreshMediaPlayUrlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshMediaPlayUrlsResponse
     *
     * @param RefreshMediaPlayUrlsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RefreshMediaPlayUrlsResponse
     */
    public function refreshMediaPlayUrlsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->definitions) {
            @$query['Definitions'] = $request->definitions;
        }

        if (null !== $request->formats) {
            @$query['Formats'] = $request->formats;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->resultType) {
            @$query['ResultType'] = $request->resultType;
        }

        if (null !== $request->sliceCount) {
            @$query['SliceCount'] = $request->sliceCount;
        }

        if (null !== $request->sliceFlag) {
            @$query['SliceFlag'] = $request->sliceFlag;
        }

        if (null !== $request->streamType) {
            @$query['StreamType'] = $request->streamType;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshMediaPlayUrls',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshMediaPlayUrlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits media refresh or prefetch tasks based on the media IDs.
     *
     * @remarks
     *   ApsaraVideo VOD allows you to purge and prefetch resources. The purge feature forces the point of presence (POP) to clear cached resources and retrieve the latest resources from origin servers. The prefetch feature allows the POP to retrieve frequently accessed resources from origin servers during off-peak hours. This increases the cache hit ratio.
     * *   You can call this operation to submit purge or prefetch tasks based on the media ID. You can also specify the format and resolution of the media streams to purge or prefetch based on your business requirements.
     * *   You can submit a maximum of 20 purge or prefetch tasks at a time.
     *
     * @param request - RefreshMediaPlayUrlsRequest
     *
     * @returns RefreshMediaPlayUrlsResponse
     *
     * @param RefreshMediaPlayUrlsRequest $request
     *
     * @return RefreshMediaPlayUrlsResponse
     */
    public function refreshMediaPlayUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshMediaPlayUrlsWithOptions($request, $runtime);
    }

    /**
     * Obtains a new upload credential after a file failed to be uploaded.
     *
     * @remarks
     * You can also call this operation to overwrite the source file of an audio or video file. After you call this operation, the system obtains the upload URL and uploads a new source file without changing the ID of the audio or video file. If you have configured transcoding or snapshot capture for the upload, the transcoding or snapshot capture job is automatically triggered. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     *
     * @param request - RefreshUploadVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshUploadVideoResponse
     *
     * @param RefreshUploadVideoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RefreshUploadVideoResponse
     */
    public function refreshUploadVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshUploadVideo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshUploadVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a new upload credential after a file failed to be uploaded.
     *
     * @remarks
     * You can also call this operation to overwrite the source file of an audio or video file. After you call this operation, the system obtains the upload URL and uploads a new source file without changing the ID of the audio or video file. If you have configured transcoding or snapshot capture for the upload, the transcoding or snapshot capture job is automatically triggered. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     *
     * @param request - RefreshUploadVideoRequest
     *
     * @returns RefreshUploadVideoResponse
     *
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
     * Refreshes files on Alibaba Cloud CDN nodes. You can refresh multiple files at a time based on URLs.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can submit a maximum of 2,000 requests to refresh resources based on URLs and 100 requests to refresh resources based on directories each day by using an Alibaba Cloud account.
     * *   You can call the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) operation to refresh content and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.html) operation to prefetch content.
     *
     * @param request - RefreshVodObjectCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshVodObjectCachesResponse
     *
     * @param RefreshVodObjectCachesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefreshVodObjectCachesResponse
     */
    public function refreshVodObjectCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->objectPath) {
            @$query['ObjectPath'] = $request->objectPath;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshVodObjectCaches',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshVodObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes files on Alibaba Cloud CDN nodes. You can refresh multiple files at a time based on URLs.
     *
     * @remarks
     *   This operation is available only in the **China (Shanghai)** region.
     * *   You can submit a maximum of 2,000 requests to refresh resources based on URLs and 100 requests to refresh resources based on directories each day by using an Alibaba Cloud account.
     * *   You can call the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) operation to refresh content and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.html) operation to prefetch content.
     *
     * @param request - RefreshVodObjectCachesRequest
     *
     * @returns RefreshVodObjectCachesResponse
     *
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
     * Registers media files. After you add an Object Storage Service (OSS) bucket to ApsaraVideo VOD, you must register the media files in the bucket to generate the required information before you use features such as transcoding and snapshot capture on the media files.
     *
     * @remarks
     *   After you add an OSS bucket to ApsaraVideo VOD, you must register media files in the OSS bucket to generate the required information. Then, you can use media IDs for features such as transcoding, snapshot capture, and AI processing.use features such as xxx on media files by specifying their IDs?
     * *   You can register up to 10 media files in an OSS bucket in a request. The media files must be stored in the same bucket.
     * *   If you do not specify a transcoding template group ID when you upload a media file to ApsaraVideo VOD, the media file is automatically transcoded based on the default template group. If you do not specify a transcoding template group ID after you register a media file, the media file is not automatically transcoded. The registered media files are automatically transcoded only if you specify a transcoding template group ID.
     * *   If the media file that you want to register has been registered, this operation returns only the unique media ID that is associated with the media file. No further operation is performed.
     * *   Make sure that the media file that you want to register has a valid suffix. Otherwise, the registration fails.
     *
     * @param request - RegisterMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterMediaResponse
     *
     * @param RegisterMediaRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RegisterMediaResponse
     */
    public function registerMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->registerMetadatas) {
            @$query['RegisterMetadatas'] = $request->registerMetadatas;
        }

        if (null !== $request->templateGroupId) {
            @$query['TemplateGroupId'] = $request->templateGroupId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterMedia',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers media files. After you add an Object Storage Service (OSS) bucket to ApsaraVideo VOD, you must register the media files in the bucket to generate the required information before you use features such as transcoding and snapshot capture on the media files.
     *
     * @remarks
     *   After you add an OSS bucket to ApsaraVideo VOD, you must register media files in the OSS bucket to generate the required information. Then, you can use media IDs for features such as transcoding, snapshot capture, and AI processing.use features such as xxx on media files by specifying their IDs?
     * *   You can register up to 10 media files in an OSS bucket in a request. The media files must be stored in the same bucket.
     * *   If you do not specify a transcoding template group ID when you upload a media file to ApsaraVideo VOD, the media file is automatically transcoded based on the default template group. If you do not specify a transcoding template group ID after you register a media file, the media file is not automatically transcoded. The registered media files are automatically transcoded only if you specify a transcoding template group ID.
     * *   If the media file that you want to register has been registered, this operation returns only the unique media ID that is associated with the media file. No further operation is performed.
     * *   Make sure that the media file that you want to register has a valid suffix. Otherwise, the registration fails.
     *
     * @param request - RegisterMediaRequest
     *
     * @returns RegisterMediaResponse
     *
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
     * Restores media assets.
     *
     * @remarks
     * You can call this operation to restore only Archive and Cold Archive audio and video files. You can access the audio and video files after the files are restored. You cannot change the storage class of an audio or video file that is being restored. You are charged for the retrieval traffic generated during restoration. After a Cold Archive audio or video file is restored, a Standard replica of the file is generated for access. You are charged for the storage of the replica before the file returns to the frozen state.
     *
     * @param request - RestoreMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreMediaResponse
     *
     * @param RestoreMediaRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RestoreMediaResponse
     */
    public function restoreMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->restoreDays) {
            @$query['RestoreDays'] = $request->restoreDays;
        }

        if (null !== $request->restoreTier) {
            @$query['RestoreTier'] = $request->restoreTier;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestoreMedia',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores media assets.
     *
     * @remarks
     * You can call this operation to restore only Archive and Cold Archive audio and video files. You can access the audio and video files after the files are restored. You cannot change the storage class of an audio or video file that is being restored. You are charged for the retrieval traffic generated during restoration. After a Cold Archive audio or video file is restored, a Standard replica of the file is generated for access. You are charged for the storage of the replica before the file returns to the frozen state.
     *
     * @param request - RestoreMediaRequest
     *
     * @returns RestoreMediaResponse
     *
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
     * Queries online editing projects.
     *
     * @param request - SearchEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchEditingProjectResponse
     *
     * @param SearchEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchEditingProject',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries online editing projects.
     *
     * @param request - SearchEditingProjectRequest
     *
     * @returns SearchEditingProjectResponse
     *
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
     * Queries information about videos, audio, images, and auxiliary media assets. You can call this operation and specify the search protocol to query media assets based on the return fields, fields used for exact match, fields used for fuzzy match, fields used for a multi-value query, fields used for a range query, and sort fields.
     *
     * @remarks
     * The maximum number of data records that you can query varies based on the method used to query the data. You can use the following methods to query data:
     * *   Method 1: Traverse data by page
     *     You can use the PageNo and PageSize parameters to traverse up to 5,000 data records that meet the specified filter condition. PageNo specifies the page number and PageSize specifies the number of data records displayed on a page. If the number of data records that meet the specified filter condition exceeds 5,000, change the filter conditions to narrow down the results. You cannot use this method to traverse all data records. If you want to traverse more data records, use Method 2.
     * *   Method 2: Traverse all data (available only for audio and video files)
     *     You can use this method to traverse up to 2 million data records related to audio and video files. If the number of data records that meet the specified filter condition exceeds 2 million, change the filter conditions to narrow down the results. To traverse data page by page, you must set the PageNo, PageSize, and ScrollToken parameters. The total number of data records from the current page to the target page cannot exceed 100. For example, you set PageSize to 20. The following content describes the traverse logic:
     *     *   When the PageNo parameter is set to 1, you can traverse data records from page 1 to page 5.
     *     *   When the PageNo parameter is set to 2, you can traverse data records from page 2 to page 6.
     * Make sure that you set the appropriate page number and page size, and use a traverse method based on the number of results that meet your filter condition.
     *
     * @param request - SearchMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMediaResponse
     *
     * @param SearchMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchMediaResponse
     */
    public function searchMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fields) {
            @$query['Fields'] = $request->fields;
        }

        if (null !== $request->match) {
            @$query['Match'] = $request->match;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scrollToken) {
            @$query['ScrollToken'] = $request->scrollToken;
        }

        if (null !== $request->searchType) {
            @$query['SearchType'] = $request->searchType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchMedia',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about videos, audio, images, and auxiliary media assets. You can call this operation and specify the search protocol to query media assets based on the return fields, fields used for exact match, fields used for fuzzy match, fields used for a multi-value query, fields used for a range query, and sort fields.
     *
     * @remarks
     * The maximum number of data records that you can query varies based on the method used to query the data. You can use the following methods to query data:
     * *   Method 1: Traverse data by page
     *     You can use the PageNo and PageSize parameters to traverse up to 5,000 data records that meet the specified filter condition. PageNo specifies the page number and PageSize specifies the number of data records displayed on a page. If the number of data records that meet the specified filter condition exceeds 5,000, change the filter conditions to narrow down the results. You cannot use this method to traverse all data records. If you want to traverse more data records, use Method 2.
     * *   Method 2: Traverse all data (available only for audio and video files)
     *     You can use this method to traverse up to 2 million data records related to audio and video files. If the number of data records that meet the specified filter condition exceeds 2 million, change the filter conditions to narrow down the results. To traverse data page by page, you must set the PageNo, PageSize, and ScrollToken parameters. The total number of data records from the current page to the target page cannot exceed 100. For example, you set PageSize to 20. The following content describes the traverse logic:
     *     *   When the PageNo parameter is set to 1, you can traverse data records from page 1 to page 5.
     *     *   When the PageNo parameter is set to 2, you can traverse data records from page 2 to page 6.
     * Make sure that you set the appropriate page number and page size, and use a traverse method based on the number of results that meet your filter condition.
     *
     * @param request - SearchMediaRequest
     *
     * @returns SearchMediaResponse
     *
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
     * Manages the IP addresses in review security groups.
     *
     * @remarks
     * You can play videos in the Checking or Blocked state only from the IP addresses that are added to review security groups.
     *
     * @param request - SetAuditSecurityIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAuditSecurityIpResponse
     *
     * @param SetAuditSecurityIpRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetAuditSecurityIpResponse
     */
    public function setAuditSecurityIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ips) {
            @$query['Ips'] = $request->ips;
        }

        if (null !== $request->operateMode) {
            @$query['OperateMode'] = $request->operateMode;
        }

        if (null !== $request->securityGroupName) {
            @$query['SecurityGroupName'] = $request->securityGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAuditSecurityIp',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAuditSecurityIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manages the IP addresses in review security groups.
     *
     * @remarks
     * You can play videos in the Checking or Blocked state only from the IP addresses that are added to review security groups.
     *
     * @param request - SetAuditSecurityIpRequest
     *
     * @returns SetAuditSecurityIpResponse
     *
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
     * Updates the cross-domain policy file crossdomain.xml.
     *
     * @remarks
     * > After you use the cross-domain policy file to update the resources on the origin server, you must refresh the resources that are cached on Alibaba Cloud CDN nodes. You can use the ApsaraVideo VOD console to refresh resources. For more information, see [Refresh and prefetch](https://help.aliyun.com/document_detail/86098.html). Alternatively, you can call the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) operation to refresh resources.
     *
     * @param request - SetCrossdomainContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCrossdomainContentResponse
     *
     * @param SetCrossdomainContentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetCrossdomainContentResponse
     */
    public function setCrossdomainContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceRealOwnerId) {
            @$query['ResourceRealOwnerId'] = $request->resourceRealOwnerId;
        }

        if (null !== $request->storageLocation) {
            @$query['StorageLocation'] = $request->storageLocation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCrossdomainContent',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCrossdomainContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the cross-domain policy file crossdomain.xml.
     *
     * @remarks
     * > After you use the cross-domain policy file to update the resources on the origin server, you must refresh the resources that are cached on Alibaba Cloud CDN nodes. You can use the ApsaraVideo VOD console to refresh resources. For more information, see [Refresh and prefetch](https://help.aliyun.com/document_detail/86098.html). Alternatively, you can call the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) operation to refresh resources.
     *
     * @param request - SetCrossdomainContentRequest
     *
     * @returns SetCrossdomainContentResponse
     *
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
     * Specifies an AI template as the default template.
     *
     * @remarks
     * Specifies an AI template as the default template.
     *
     * @param request - SetDefaultAITemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultAITemplateResponse
     *
     * @param SetDefaultAITemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetDefaultAITemplateResponse
     */
    public function setDefaultAITemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDefaultAITemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies an AI template as the default template.
     *
     * @remarks
     * Specifies an AI template as the default template.
     *
     * @param request - SetDefaultAITemplateRequest
     *
     * @returns SetDefaultAITemplateResponse
     *
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
     * Specifies a transcoding template group as the default one.
     *
     * @param request - SetDefaultTranscodeTemplateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultTranscodeTemplateGroupResponse
     *
     * @param SetDefaultTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SetDefaultTranscodeTemplateGroupResponse
     */
    public function setDefaultTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->transcodeTemplateGroupId) {
            @$query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDefaultTranscodeTemplateGroup',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies a transcoding template group as the default one.
     *
     * @param request - SetDefaultTranscodeTemplateGroupRequest
     *
     * @returns SetDefaultTranscodeTemplateGroupResponse
     *
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
     * Sets a watermark template as the default one.
     *
     * @param request - SetDefaultWatermarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultWatermarkResponse
     *
     * @param SetDefaultWatermarkRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetDefaultWatermarkResponse
     */
    public function setDefaultWatermarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->watermarkId) {
            @$query['WatermarkId'] = $request->watermarkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDefaultWatermark',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets a watermark template as the default one.
     *
     * @param request - SetDefaultWatermarkRequest
     *
     * @returns SetDefaultWatermarkResponse
     *
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
     * Specifies the media assets that you want to edit in an online editing project.
     *
     * @param request - SetEditingProjectMaterialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetEditingProjectMaterialsResponse
     *
     * @param SetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetEditingProjectMaterialsResponse
     */
    public function setEditingProjectMaterialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->materialIds) {
            @$query['MaterialIds'] = $request->materialIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetEditingProjectMaterials',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies the media assets that you want to edit in an online editing project.
     *
     * @param request - SetEditingProjectMaterialsRequest
     *
     * @returns SetEditingProjectMaterialsResponse
     *
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
     * Sets the callback method, callback URL, and event type of an event notification.
     *
     * @remarks
     * HTTP callbacks and MNS callbacks are supported. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - SetMessageCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetMessageCallbackResponse
     *
     * @param SetMessageCallbackRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetMessageCallbackResponse
     */
    public function setMessageCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSwitch) {
            @$query['AuthSwitch'] = $request->authSwitch;
        }

        if (null !== $request->callbackType) {
            @$query['CallbackType'] = $request->callbackType;
        }

        if (null !== $request->callbackURL) {
            @$query['CallbackURL'] = $request->callbackURL;
        }

        if (null !== $request->eventTypeList) {
            @$query['EventTypeList'] = $request->eventTypeList;
        }

        if (null !== $request->mnsEndpoint) {
            @$query['MnsEndpoint'] = $request->mnsEndpoint;
        }

        if (null !== $request->mnsQueueName) {
            @$query['MnsQueueName'] = $request->mnsQueueName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetMessageCallback',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the callback method, callback URL, and event type of an event notification.
     *
     * @remarks
     * HTTP callbacks and MNS callbacks are supported. For more information, see [Overview](https://help.aliyun.com/document_detail/55627.html).
     *
     * @param request - SetMessageCallbackRequest
     *
     * @returns SetMessageCallbackResponse
     *
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
     * Enables or disables the certificate of a domain name and modifies the certificate information.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - SetVodDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetVodDomainCertificateResponse
     *
     * @param SetVodDomainCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetVodDomainCertificateResponse
     */
    public function setVodDomainCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->SSLPri) {
            @$query['SSLPri'] = $request->SSLPri;
        }

        if (null !== $request->SSLProtocol) {
            @$query['SSLProtocol'] = $request->SSLProtocol;
        }

        if (null !== $request->SSLPub) {
            @$query['SSLPub'] = $request->SSLPub;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetVodDomainCertificate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetVodDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the certificate of a domain name and modifies the certificate information.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - SetVodDomainCertificateRequest
     *
     * @returns SetVodDomainCertificateResponse
     *
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
     * Enables or disables the SSL certificate of a domain name and updates the certificate information.
     *
     * @param request - SetVodDomainSSLCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetVodDomainSSLCertificateResponse
     *
     * @param SetVodDomainSSLCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetVodDomainSSLCertificateResponse
     */
    public function setVodDomainSSLCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->certRegion) {
            @$query['CertRegion'] = $request->certRegion;
        }

        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->env) {
            @$query['Env'] = $request->env;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->SSLPri) {
            @$query['SSLPri'] = $request->SSLPri;
        }

        if (null !== $request->SSLProtocol) {
            @$query['SSLProtocol'] = $request->SSLProtocol;
        }

        if (null !== $request->SSLPub) {
            @$query['SSLPub'] = $request->SSLPub;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetVodDomainSSLCertificate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetVodDomainSSLCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the SSL certificate of a domain name and updates the certificate information.
     *
     * @param request - SetVodDomainSSLCertificateRequest
     *
     * @returns SetVodDomainSSLCertificateResponse
     *
     * @param SetVodDomainSSLCertificateRequest $request
     *
     * @return SetVodDomainSSLCertificateResponse
     */
    public function setVodDomainSSLCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVodDomainSSLCertificateWithOptions($request, $runtime);
    }

    /**
     * Submits an automated review job for an image. After the job is submitted, the job is processed in an asynchronous manner. The operation may return a response before the job is complete.
     *
     * @remarks
     * This operation is available only in the Singapore region.
     *
     * @param request - SubmitAIImageAuditJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAIImageAuditJobResponse
     *
     * @param SubmitAIImageAuditJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAIImageAuditJobResponse
     */
    public function submitAIImageAuditJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaAuditConfiguration) {
            @$query['MediaAuditConfiguration'] = $request->mediaAuditConfiguration;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitAIImageAuditJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAIImageAuditJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an automated review job for an image. After the job is submitted, the job is processed in an asynchronous manner. The operation may return a response before the job is complete.
     *
     * @remarks
     * This operation is available only in the Singapore region.
     *
     * @param request - SubmitAIImageAuditJobRequest
     *
     * @returns SubmitAIImageAuditJobResponse
     *
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
     * Submits jobs of image AI processing.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)** and **China (Shanghai)**.
     * *   After you call this operation, you can call the [GetAIImageJobs](https://help.aliyun.com/document_detail/186923.html) operation to query the job execution result.
     *
     * @param request - SubmitAIImageJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAIImageJobResponse
     *
     * @param SubmitAIImageJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitAIImageJobResponse
     */
    public function submitAIImageJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AIPipelineId) {
            @$query['AIPipelineId'] = $request->AIPipelineId;
        }

        if (null !== $request->AITemplateId) {
            @$query['AITemplateId'] = $request->AITemplateId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitAIImageJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAIImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits jobs of image AI processing.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)** and **China (Shanghai)**.
     * *   After you call this operation, you can call the [GetAIImageJobs](https://help.aliyun.com/document_detail/186923.html) operation to query the job execution result.
     *
     * @param request - SubmitAIImageJobRequest
     *
     * @returns SubmitAIImageJobResponse
     *
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
     * Submits a smart tagging or video fingerprinting job.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged for using the smart tagging and video fingerprinting features. For more information, see [Billing of video AI](~~188310#section-g7l-s3o-9ng~~).**
     * *   Regions that support the video fingerprinting feature: **China (Beijing)**, **China (Shanghai)**, and **Singapore**. Regions that support the smart tagging feature: **China (Beijing)** and **China (Shanghai)**.
     * *   You need to enable the video fingerprinting feature or the smart tagging feature before you can call this operation to submit jobs. For more information, see [Overview](https://help.aliyun.com/document_detail/101148.html).
     * *   If this is the first time you use the video fingerprinting feature, you must submit a ticket to apply for using the media fingerprint library for free. Otherwise, the video fingerprinting feature will be affected. For more information about how to submit a ticket, see [Contact us](https://help.aliyun.com/document_detail/464625.html).
     * *   After you submit an AI job, ApsaraVideo VOD asynchronously processes the job. The operation may return a response before the job is complete. You can configure the [Event Notification](https://help.aliyun.com/document_detail/55627.html) feature and set the callback event to **AI Processing Completed**. After you receive the event notification, you can query the execution result of the AI job.
     *
     * @param request - SubmitAIJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAIJobResponse
     *
     * @param SubmitAIJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SubmitAIJobResponse
     */
    public function submitAIJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->types) {
            @$query['Types'] = $request->types;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitAIJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAIJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a smart tagging or video fingerprinting job.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged for using the smart tagging and video fingerprinting features. For more information, see [Billing of video AI](~~188310#section-g7l-s3o-9ng~~).**
     * *   Regions that support the video fingerprinting feature: **China (Beijing)**, **China (Shanghai)**, and **Singapore**. Regions that support the smart tagging feature: **China (Beijing)** and **China (Shanghai)**.
     * *   You need to enable the video fingerprinting feature or the smart tagging feature before you can call this operation to submit jobs. For more information, see [Overview](https://help.aliyun.com/document_detail/101148.html).
     * *   If this is the first time you use the video fingerprinting feature, you must submit a ticket to apply for using the media fingerprint library for free. Otherwise, the video fingerprinting feature will be affected. For more information about how to submit a ticket, see [Contact us](https://help.aliyun.com/document_detail/464625.html).
     * *   After you submit an AI job, ApsaraVideo VOD asynchronously processes the job. The operation may return a response before the job is complete. You can configure the [Event Notification](https://help.aliyun.com/document_detail/55627.html) feature and set the callback event to **AI Processing Completed**. After you receive the event notification, you can query the execution result of the AI job.
     *
     * @param request - SubmitAIJobRequest
     *
     * @returns SubmitAIJobResponse
     *
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
     * Submits an automated review job for a media file. After the job is submitted, ApsaraVideo VOD asynchronously processes the job. Therefore, the operation may return a response before the job is complete.
     *
     * @remarks
     *   **Make sure that you understand the billing methods and price of ApsaraVideo VOD before you call this operation. You are charged for using the automated review feature. For more information about billing, submit a ticket or contact your account manager.**
     * *   You can call this operation only in the **China (Shanghai)**, **China (Beijing)**, and **Singapore** regions.
     * *   For more information, see [Automated review](https://help.aliyun.com/document_detail/101148.html).
     * *   After an automated review job is complete, the images generated during the review are stored in the VOD bucket for two weeks free of charge. The images are automatically deleted after two weeks.
     *
     * @param request - SubmitAIMediaAuditJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAIMediaAuditJobResponse
     *
     * @param SubmitAIMediaAuditJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAIMediaAuditJobResponse
     */
    public function submitAIMediaAuditJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaAuditConfiguration) {
            @$query['MediaAuditConfiguration'] = $request->mediaAuditConfiguration;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitAIMediaAuditJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAIMediaAuditJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an automated review job for a media file. After the job is submitted, ApsaraVideo VOD asynchronously processes the job. Therefore, the operation may return a response before the job is complete.
     *
     * @remarks
     *   **Make sure that you understand the billing methods and price of ApsaraVideo VOD before you call this operation. You are charged for using the automated review feature. For more information about billing, submit a ticket or contact your account manager.**
     * *   You can call this operation only in the **China (Shanghai)**, **China (Beijing)**, and **Singapore** regions.
     * *   For more information, see [Automated review](https://help.aliyun.com/document_detail/101148.html).
     * *   After an automated review job is complete, the images generated during the review are stored in the VOD bucket for two weeks free of charge. The images are automatically deleted after two weeks.
     *
     * @param request - SubmitAIMediaAuditJobRequest
     *
     * @returns SubmitAIMediaAuditJobResponse
     *
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
     * Submits a digital watermark extraction job. You can call this operation to asynchronously extract a copyright watermark or user-tracing watermark.
     *
     * @remarks
     *   **Make sure that you understand the billing methods and price of ApsaraVideo VOD before you call this operation. You are charged for generating and extracting digital watermarks. For more information, see [Billing](~~188310#62b9c940403se~~).**
     * *   This operation is supported only in the **China (Shanghai)** and **China (Beijing)** regions.
     * *   Before you submit a digital watermark extraction job, make sure that the following conditions are met:
     *     *   The video from which you want to extract the watermark is uploaded to the ApsaraVideo VOD.
     *     *   The video from which you want to extract the watermark is longer than 6 minutes.
     *
     * @param request - SubmitDigitalWatermarkExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDigitalWatermarkExtractJobResponse
     *
     * @param SubmitDigitalWatermarkExtractJobRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SubmitDigitalWatermarkExtractJobResponse
     */
    public function submitDigitalWatermarkExtractJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extractType) {
            @$query['ExtractType'] = $request->extractType;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDigitalWatermarkExtractJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDigitalWatermarkExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a digital watermark extraction job. You can call this operation to asynchronously extract a copyright watermark or user-tracing watermark.
     *
     * @remarks
     *   **Make sure that you understand the billing methods and price of ApsaraVideo VOD before you call this operation. You are charged for generating and extracting digital watermarks. For more information, see [Billing](~~188310#62b9c940403se~~).**
     * *   This operation is supported only in the **China (Shanghai)** and **China (Beijing)** regions.
     * *   Before you submit a digital watermark extraction job, make sure that the following conditions are met:
     *     *   The video from which you want to extract the watermark is uploaded to the ApsaraVideo VOD.
     *     *   The video from which you want to extract the watermark is longer than 6 minutes.
     *
     * @param request - SubmitDigitalWatermarkExtractJobRequest
     *
     * @returns SubmitDigitalWatermarkExtractJobResponse
     *
     * @param SubmitDigitalWatermarkExtractJobRequest $request
     *
     * @return SubmitDigitalWatermarkExtractJobResponse
     */
    public function submitDigitalWatermarkExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDigitalWatermarkExtractJobWithOptions($request, $runtime);
    }

    /**
     * Submits a frame animation job and starts asynchronous processing.
     *
     * @remarks
     *   You can capture a part of a video and generate animated images only when the video is in the **Uploaded**, **Transcoding**, **Normal**, **Reviewing**, or **Flagged** state.
     * *   The fees for frame animation are included in your video transcoding bill. You are charged based on the output resolution and the duration. For more information, see [Billing of basic services](https://help.aliyun.com/document_detail/188308.html).
     * ### QPS limits
     * You can call this operation up to 30 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit on API operations](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - SubmitDynamicImageJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDynamicImageJobResponse
     *
     * @param SubmitDynamicImageJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dynamicImageTemplateId) {
            @$query['DynamicImageTemplateId'] = $request->dynamicImageTemplateId;
        }

        if (null !== $request->overrideParams) {
            @$query['OverrideParams'] = $request->overrideParams;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDynamicImageJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a frame animation job and starts asynchronous processing.
     *
     * @remarks
     *   You can capture a part of a video and generate animated images only when the video is in the **Uploaded**, **Transcoding**, **Normal**, **Reviewing**, or **Flagged** state.
     * *   The fees for frame animation are included in your video transcoding bill. You are charged based on the output resolution and the duration. For more information, see [Billing of basic services](https://help.aliyun.com/document_detail/188308.html).
     * ### QPS limits
     * You can call this operation up to 30 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit on API operations](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - SubmitDynamicImageJobRequest
     *
     * @returns SubmitDynamicImageJobResponse
     *
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
     * Deletes a video fingerprinting job.
     *
     * @remarks
     * Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     *
     * @param request - SubmitMediaDNADeleteJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitMediaDNADeleteJobResponse
     *
     * @param SubmitMediaDNADeleteJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitMediaDNADeleteJobResponse
     */
    public function submitMediaDNADeleteJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitMediaDNADeleteJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitMediaDNADeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a video fingerprinting job.
     *
     * @remarks
     * Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     *
     * @param request - SubmitMediaDNADeleteJobRequest
     *
     * @returns SubmitMediaDNADeleteJobResponse
     *
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
     * Transcodes a video by using the production studio.
     *
     * @remarks
     *   During video preprocessing, videos are transcoded to meet the playback requirements of the production studio. Therefore, **you are charged for video preprocessing**. For more information about billing, see [Billing of production studios](https://help.aliyun.com/document_detail/64531.html).
     * *   You can obtain the preprocessing result in the [TranscodeComplete](https://help.aliyun.com/document_detail/55638.html) event notification. If **Preprocess=true** is returned in the event notification, the video is transcoded.
     *
     * @param request - SubmitPreprocessJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitPreprocessJobsResponse
     *
     * @param SubmitPreprocessJobsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitPreprocessJobsResponse
     */
    public function submitPreprocessJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->preprocessType) {
            @$query['PreprocessType'] = $request->preprocessType;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitPreprocessJobs',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitPreprocessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transcodes a video by using the production studio.
     *
     * @remarks
     *   During video preprocessing, videos are transcoded to meet the playback requirements of the production studio. Therefore, **you are charged for video preprocessing**. For more information about billing, see [Billing of production studios](https://help.aliyun.com/document_detail/64531.html).
     * *   You can obtain the preprocessing result in the [TranscodeComplete](https://help.aliyun.com/document_detail/55638.html) event notification. If **Preprocess=true** is returned in the event notification, the video is transcoded.
     *
     * @param request - SubmitPreprocessJobsRequest
     *
     * @returns SubmitPreprocessJobsResponse
     *
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
     * Submits a snapshot job for a video and starts asynchronous snapshot processing.
     *
     * @remarks
     *   Only snapshots in the JPG format are generated.
     * *   After a snapshot is captured, the [SnapshotComplete](https://help.aliyun.com/document_detail/57337.html) callback is fired and EventType=SnapshotComplete, SubType=SpecifiedTime is returned.
     * ### [](#qps-)QPS limits
     * You can call this operation up to 30 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param tmpReq - SubmitSnapshotJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSnapshotJobResponse
     *
     * @param SubmitSnapshotJobRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitSnapshotJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->specifiedOffsetTimes) {
            $request->specifiedOffsetTimesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->specifiedOffsetTimes, 'SpecifiedOffsetTimes', 'json');
        }

        $query = [];
        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->height) {
            @$query['Height'] = $request->height;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->snapshotTemplateId) {
            @$query['SnapshotTemplateId'] = $request->snapshotTemplateId;
        }

        if (null !== $request->specifiedOffsetTime) {
            @$query['SpecifiedOffsetTime'] = $request->specifiedOffsetTime;
        }

        if (null !== $request->specifiedOffsetTimesShrink) {
            @$query['SpecifiedOffsetTimes'] = $request->specifiedOffsetTimesShrink;
        }

        if (null !== $request->spriteSnapshotConfig) {
            @$query['SpriteSnapshotConfig'] = $request->spriteSnapshotConfig;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        if (null !== $request->width) {
            @$query['Width'] = $request->width;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSnapshotJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a snapshot job for a video and starts asynchronous snapshot processing.
     *
     * @remarks
     *   Only snapshots in the JPG format are generated.
     * *   After a snapshot is captured, the [SnapshotComplete](https://help.aliyun.com/document_detail/57337.html) callback is fired and EventType=SnapshotComplete, SubType=SpecifiedTime is returned.
     * ### [](#qps-)QPS limits
     * You can call this operation up to 30 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - SubmitSnapshotJobRequest
     *
     * @returns SubmitSnapshotJobResponse
     *
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
     * Submits a transcoding job to start transcoding in an asynchronous manner.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   **Make sure that you understand the billing methods and prices of ApsaraVideo VOD before you call this operation. For more information about billing of the transcoding feature, see [Billing of basic services](~~188308#section-ejb-nii-nqa~~).**
     * *   You can transcode a video only in the Uploaded, Normal, or Reviewing state.
     * *   You can obtain the transcoding results from the [StreamTranscodeComplete](https://help.aliyun.com/document_detail/55636.html) or [TranscodeComplete](https://help.aliyun.com/document_detail/55638.html) callback.
     * *   You can call this operation to dynamically override the subtitle URL in an HTTP Live Streaming (HLS) packaging task. If the packaging task does not contain subtitles, we recommend that you specify the ID of the specific packaging template group when you upload the video instead of calling this operation.
     *
     * @param request - SubmitTranscodeJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTranscodeJobsResponse
     *
     * @param SubmitTranscodeJobsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitTranscodeJobsResponse
     */
    public function submitTranscodeJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptConfig) {
            @$query['EncryptConfig'] = $request->encryptConfig;
        }

        if (null !== $request->overrideParams) {
            @$query['OverrideParams'] = $request->overrideParams;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->templateGroupId) {
            @$query['TemplateGroupId'] = $request->templateGroupId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitTranscodeJobs',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a transcoding job to start transcoding in an asynchronous manner.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   **Make sure that you understand the billing methods and prices of ApsaraVideo VOD before you call this operation. For more information about billing of the transcoding feature, see [Billing of basic services](~~188308#section-ejb-nii-nqa~~).**
     * *   You can transcode a video only in the Uploaded, Normal, or Reviewing state.
     * *   You can obtain the transcoding results from the [StreamTranscodeComplete](https://help.aliyun.com/document_detail/55636.html) or [TranscodeComplete](https://help.aliyun.com/document_detail/55638.html) callback.
     * *   You can call this operation to dynamically override the subtitle URL in an HTTP Live Streaming (HLS) packaging task. If the packaging task does not contain subtitles, we recommend that you specify the ID of the specific packaging template group when you upload the video instead of calling this operation.
     *
     * @param request - SubmitTranscodeJobsRequest
     *
     * @returns SubmitTranscodeJobsResponse
     *
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
     * Initiates a workflow to process media files.
     *
     * @remarks
     * **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. When you use workflows to process videos, you may be charged for transcoding, encryption, and automated review. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188307.html).**
     * * You can call this operation to initiate a VOD workflow to process media files. For more information, see [Workflows](https://help.aliyun.com/document_detail/115347.html).
     *
     * @param request - SubmitWorkflowJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitWorkflowJobResponse
     *
     * @param SubmitWorkflowJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitWorkflowJobResponse
     */
    public function submitWorkflowJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitWorkflowJob',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitWorkflowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a workflow to process media files.
     *
     * @remarks
     * **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. When you use workflows to process videos, you may be charged for transcoding, encryption, and automated review. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188307.html).**
     * * You can call this operation to initiate a VOD workflow to process media files. For more information, see [Workflows](https://help.aliyun.com/document_detail/115347.html).
     *
     * @param request - SubmitWorkflowJobRequest
     *
     * @returns SubmitWorkflowJobResponse
     *
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
     * Modifies an AI template.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   After you call the [AddAITemplate](https://help.aliyun.com/document_detail/102930.html) operation to add an AI template, you can call this operation to modify the AI template.
     *
     * @param request - UpdateAITemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAITemplateResponse
     *
     * @param UpdateAITemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAITemplateResponse
     */
    public function updateAITemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAITemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAITemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an AI template.
     *
     * @remarks
     *   Regions that support this operation: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * *   After you call the [AddAITemplate](https://help.aliyun.com/document_detail/102930.html) operation to add an AI template, you can call this operation to modify the AI template.
     *
     * @param request - UpdateAITemplateRequest
     *
     * @returns UpdateAITemplateResponse
     *
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
     * Updates the information about an application.
     *
     * @remarks
     * ## QPS limit
     * A single user can perform a maximum of 30 queries per second (QPS). Throttling is triggered when the number of calls per second exceeds the QPS limit. The throttling may affect your business. Thus, we recommend that you observe the QPS limit on this operation.
     *
     * @param request - UpdateAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppInfoResponse
     *
     * @param UpdateAppInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAppInfoResponse
     */
    public function updateAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about an application.
     *
     * @remarks
     * ## QPS limit
     * A single user can perform a maximum of 30 queries per second (QPS). Throttling is triggered when the number of calls per second exceeds the QPS limit. The throttling may affect your business. Thus, we recommend that you observe the QPS limit on this operation.
     *
     * @param request - UpdateAppInfoRequest
     *
     * @returns UpdateAppInfoResponse
     *
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
     * Modifies the information about multiple auxiliary media assets such as watermark images, subtitle files, and materials in a batch based on IDs. You can modify information such as the title, description, tags, and category.
     *
     * @remarks
     * You can modify the information about up to 20 auxiliary media assets at a time.
     *
     * @param request - UpdateAttachedMediaInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAttachedMediaInfosResponse
     *
     * @param UpdateAttachedMediaInfosRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAttachedMediaInfosResponse
     */
    public function updateAttachedMediaInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->updateContent) {
            @$query['UpdateContent'] = $request->updateContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAttachedMediaInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAttachedMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about multiple auxiliary media assets such as watermark images, subtitle files, and materials in a batch based on IDs. You can modify information such as the title, description, tags, and category.
     *
     * @remarks
     * You can modify the information about up to 20 auxiliary media assets at a time.
     *
     * @param request - UpdateAttachedMediaInfosRequest
     *
     * @returns UpdateAttachedMediaInfosResponse
     *
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
     * Modifies a video category.
     *
     * @remarks
     * After you create a category, you can call this operation to modify the name of the category. If you have classified specific media resources to this category, the category names that are labeled on the media resources are automatically updated.
     *
     * @param request - UpdateCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCategoryResponse
     *
     * @param UpdateCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->cateName) {
            @$query['CateName'] = $request->cateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCategory',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a video category.
     *
     * @remarks
     * After you create a category, you can call this operation to modify the name of the category. If you have classified specific media resources to this category, the category names that are labeled on the media resources are automatically updated.
     *
     * @param request - UpdateCategoryRequest
     *
     * @returns UpdateCategoryResponse
     *
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
     * Modifies an online editing project.
     *
     * @param request - UpdateEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEditingProjectResponse
     *
     * @param UpdateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->timeline) {
            @$query['Timeline'] = $request->timeline;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEditingProject',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an online editing project.
     *
     * @param request - UpdateEditingProjectRequest
     *
     * @returns UpdateEditingProjectResponse
     *
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
     * Modifies the information about one or more images at a time.
     *
     * @remarks
     *   You can call this operation to modify information such as the title, tags, description, and category about images based on image IDs. You must pass in the parameters that you want to modify. Otherwise, parameter configurations are not overwritten.
     * *   You can modify the information about up to 20 images at a time.
     *
     * @param request - UpdateImageInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageInfosResponse
     *
     * @param UpdateImageInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateImageInfosResponse
     */
    public function updateImageInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->updateContent) {
            @$query['UpdateContent'] = $request->updateContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateImageInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about one or more images at a time.
     *
     * @remarks
     *   You can call this operation to modify information such as the title, tags, description, and category about images based on image IDs. You must pass in the parameters that you want to modify. Otherwise, parameter configurations are not overwritten.
     * *   You can modify the information about up to 20 images at a time.
     *
     * @param request - UpdateImageInfosRequest
     *
     * @returns UpdateImageInfosResponse
     *
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
     * Modifies the storage classes of media assets.
     *
     * @remarks
     *   This operation is an asynchronous operation. You can call this operation to modify the storage classes of media assets. After the storage class is modified, a callback notification is sent.
     * *   If the storage class of the media asset is Archive or Cold Archive and you call this operation to modify the storage class of the media asset, the media asset is automatically restored before the storage class is modified. You do not need to call the RestoreMedia operation to restore the media asset. You must specify the restoration priority for Cold Archive objects. Default configuration: RestoreTier=Standard.
     * *   Media assets whose storage classes are being modified cannot be used or processed.
     * *   Non-Standard objects have minimum storage durations. If an object is stored for less than the minimum storage duration, the storage class of the object cannot be changed. The following content describes the minimum storage durations for objects in different storage classes: IA or IA storage for source files: 30 days, Archive or Archive storage for source files: 60 days, Cold Archive or Cold Archive for source files: 180 days.
     *
     * @param request - UpdateMediaStorageClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaStorageClassResponse
     *
     * @param UpdateMediaStorageClassRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMediaStorageClassResponse
     */
    public function updateMediaStorageClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowUpdateWithoutTimeLimit) {
            @$query['AllowUpdateWithoutTimeLimit'] = $request->allowUpdateWithoutTimeLimit;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->restoreTier) {
            @$query['RestoreTier'] = $request->restoreTier;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->storageClass) {
            @$query['StorageClass'] = $request->storageClass;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMediaStorageClass',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaStorageClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the storage classes of media assets.
     *
     * @remarks
     *   This operation is an asynchronous operation. You can call this operation to modify the storage classes of media assets. After the storage class is modified, a callback notification is sent.
     * *   If the storage class of the media asset is Archive or Cold Archive and you call this operation to modify the storage class of the media asset, the media asset is automatically restored before the storage class is modified. You do not need to call the RestoreMedia operation to restore the media asset. You must specify the restoration priority for Cold Archive objects. Default configuration: RestoreTier=Standard.
     * *   Media assets whose storage classes are being modified cannot be used or processed.
     * *   Non-Standard objects have minimum storage durations. If an object is stored for less than the minimum storage duration, the storage class of the object cannot be changed. The following content describes the minimum storage durations for objects in different storage classes: IA or IA storage for source files: 30 days, Archive or Archive storage for source files: 60 days, Cold Archive or Cold Archive for source files: 180 days.
     *
     * @param request - UpdateMediaStorageClassRequest
     *
     * @returns UpdateMediaStorageClassResponse
     *
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
     * Modifies the configurations of a transcoding template group or configurations of transcoding templates in the transcoding template group.
     *
     * @remarks
     * For security purposes, you cannot add, modify, or delete transcoding templates in a transcoding template group that is locked. You can call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the configurations of a transcoding template group, check whether the transcoding template group is locked by using the response parameter Locked, and unlock the transcoding template group before you perform operations such as add, modify, and delete transcoding templates.
     *
     * @param request - UpdateTranscodeTemplateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTranscodeTemplateGroupResponse
     *
     * @param UpdateTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateTranscodeTemplateGroupResponse
     */
    public function updateTranscodeTemplateGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->locked) {
            @$query['Locked'] = $request->locked;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->transcodeTemplateGroupId) {
            @$query['TranscodeTemplateGroupId'] = $request->transcodeTemplateGroupId;
        }

        if (null !== $request->transcodeTemplateList) {
            @$query['TranscodeTemplateList'] = $request->transcodeTemplateList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTranscodeTemplateGroup',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTranscodeTemplateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a transcoding template group or configurations of transcoding templates in the transcoding template group.
     *
     * @remarks
     * For security purposes, you cannot add, modify, or delete transcoding templates in a transcoding template group that is locked. You can call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the configurations of a transcoding template group, check whether the transcoding template group is locked by using the response parameter Locked, and unlock the transcoding template group before you perform operations such as add, modify, and delete transcoding templates.
     *
     * @param request - UpdateTranscodeTemplateGroupRequest
     *
     * @returns UpdateTranscodeTemplateGroupResponse
     *
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
     * Modifies the information about an audio or video file.
     *
     * @remarks
     * ### [](#)
     * You can call this operation to modify information such as the title, tags, and description about audio and video files based on audio or video IDs. You must pass in the parameters that you want to modify. Otherwise, parameter configurations are not overwritten.
     * ### [](#qps-)Queries per second (QPS) limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - UpdateVideoInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVideoInfoResponse
     *
     * @param UpdateVideoInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateVideoInfoResponse
     */
    public function updateVideoInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVideoInfo',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVideoInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about an audio or video file.
     *
     * @remarks
     * ### [](#)
     * You can call this operation to modify information such as the title, tags, and description about audio and video files based on audio or video IDs. You must pass in the parameters that you want to modify. Otherwise, parameter configurations are not overwritten.
     * ### [](#qps-)Queries per second (QPS) limit
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits on API operations](https://help.aliyun.com/document_detail/342790.html).
     *
     * @param request - UpdateVideoInfoRequest
     *
     * @returns UpdateVideoInfoResponse
     *
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
     * Modifies the information about multiple videos at a time.
     *
     * @remarks
     * The specific parameter of a video is updated only when a new value is passed in the parameter.
     *
     * @param request - UpdateVideoInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVideoInfosResponse
     *
     * @param UpdateVideoInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateVideoInfosResponse
     */
    public function updateVideoInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->updateContent) {
            @$query['UpdateContent'] = $request->updateContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVideoInfos',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVideoInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about multiple videos at a time.
     *
     * @remarks
     * The specific parameter of a video is updated only when a new value is passed in the parameter.
     *
     * @param request - UpdateVideoInfosRequest
     *
     * @returns UpdateVideoInfosResponse
     *
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
     * Modifies a specific accelerated domain name.
     *
     * @remarks
     * UpdateVodDomain
     *
     * @param request - UpdateVodDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVodDomainResponse
     *
     * @param UpdateVodDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateVodDomainResponse
     */
    public function updateVodDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sources) {
            @$query['Sources'] = $request->sources;
        }

        if (null !== $request->topLevelDomain) {
            @$query['TopLevelDomain'] = $request->topLevelDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVodDomain',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVodDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a specific accelerated domain name.
     *
     * @remarks
     * UpdateVodDomain
     *
     * @param request - UpdateVodDomainRequest
     *
     * @returns UpdateVodDomainResponse
     *
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
     * Modifies a snapshot template.
     *
     * @param request - UpdateVodTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVodTemplateResponse
     *
     * @param UpdateVodTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateVodTemplateResponse
     */
    public function updateVodTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->vodTemplateId) {
            @$query['VodTemplateId'] = $request->vodTemplateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVodTemplate',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVodTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a snapshot template.
     *
     * @param request - UpdateVodTemplateRequest
     *
     * @returns UpdateVodTemplateResponse
     *
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
     * Modifies the name and configurations of a watermark template after you create a watermark template.
     *
     * @remarks
     *   You can modify the name and configurations of the watermark template after you call the [AddWatermark](~~AddWatermark~~) operation to create a watermark template.
     * *   You cannot call this operation to change the image in an image watermark template.
     *
     * @param request - UpdateWatermarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWatermarkResponse
     *
     * @param UpdateWatermarkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWatermarkResponse
     */
    public function updateWatermarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->watermarkConfig) {
            @$query['WatermarkConfig'] = $request->watermarkConfig;
        }

        if (null !== $request->watermarkId) {
            @$query['WatermarkId'] = $request->watermarkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateWatermark',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and configurations of a watermark template after you create a watermark template.
     *
     * @remarks
     *   You can modify the name and configurations of the watermark template after you call the [AddWatermark](~~AddWatermark~~) operation to create a watermark template.
     * *   You cannot call this operation to change the image in an image watermark template.
     *
     * @param request - UpdateWatermarkRequest
     *
     * @returns UpdateWatermarkResponse
     *
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
     * Uploads media files based on URLs.
     *
     * @remarks
     *   You can call this operation to upload media files that are not stored on a local server or device and must be uploaded based on URLs over the Internet.
     * *   The URL-based upload jobs are asynchronous. After you submit a URL-based upload job by calling this operation, it may take hours, even days to complete. If you require high timeliness, we recommend that you use the upload SDK.
     * *   If you configure callbacks, you can receive an [UploadByURLComplete](https://help.aliyun.com/document_detail/86326.html) event notification after the media file is uploaded. You can query the upload status by calling the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation.
     * *   After you submit an upload job, the job is asynchronously processed on the cloud. All URL-based upload jobs that are submitted in each region are queued. The waiting time for the upload job depends on the number of queued jobs. After the upload job is complete, you can associate the playback URL included in the callback with the media ID.
     * *   You can call this operation only in the **China (Shanghai)** and **Singapore** regions.
     * *   Every time you submit a URL-based upload job, a new media ID is generated in ApsaraVideo VOD.
     *
     * @param request - UploadMediaByURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadMediaByURLResponse
     *
     * @param UploadMediaByURLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->storageLocation) {
            @$query['StorageLocation'] = $request->storageLocation;
        }

        if (null !== $request->templateGroupId) {
            @$query['TemplateGroupId'] = $request->templateGroupId;
        }

        if (null !== $request->uploadMetadatas) {
            @$query['UploadMetadatas'] = $request->uploadMetadatas;
        }

        if (null !== $request->uploadURLs) {
            @$query['UploadURLs'] = $request->uploadURLs;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadMediaByURL',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadMediaByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads media files based on URLs.
     *
     * @remarks
     *   You can call this operation to upload media files that are not stored on a local server or device and must be uploaded based on URLs over the Internet.
     * *   The URL-based upload jobs are asynchronous. After you submit a URL-based upload job by calling this operation, it may take hours, even days to complete. If you require high timeliness, we recommend that you use the upload SDK.
     * *   If you configure callbacks, you can receive an [UploadByURLComplete](https://help.aliyun.com/document_detail/86326.html) event notification after the media file is uploaded. You can query the upload status by calling the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation.
     * *   After you submit an upload job, the job is asynchronously processed on the cloud. All URL-based upload jobs that are submitted in each region are queued. The waiting time for the upload job depends on the number of queued jobs. After the upload job is complete, you can associate the playback URL included in the callback with the media ID.
     * *   You can call this operation only in the **China (Shanghai)** and **Singapore** regions.
     * *   Every time you submit a URL-based upload job, a new media ID is generated in ApsaraVideo VOD.
     *
     * @param request - UploadMediaByURLRequest
     *
     * @returns UploadMediaByURLResponse
     *
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
     * Uploads transcoded streams to ApsaraVideo VOD from external storage.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged storage fees after you upload media files to ApsaraVideo VOD. For more information, see [Billing of media asset storage](~~188308#section_e97_xrp_mzz~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   This operation is available only in the **China (Shanghai)** and **Singapore** regions.
     * *   You can call this operation to upload transcoded streams to ApsaraVideo VOD from external storage. The following HDR types of transcoded streams are supported: HDR, HDR 10, HLG, Dolby Vision, HDR Vivid, and SDR+.
     * *   You can call the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation to query the upload status. After the upload is complete, the callback of the [UploadByURLComplete](https://help.aliyun.com/document_detail/376427.html) event is returned.
     *
     * @param request - UploadStreamByURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadStreamByURLResponse
     *
     * @param UploadStreamByURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadStreamByURLResponse
     */
    public function uploadStreamByURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->definition) {
            @$query['Definition'] = $request->definition;
        }

        if (null !== $request->fileExtension) {
            @$query['FileExtension'] = $request->fileExtension;
        }

        if (null !== $request->HDRType) {
            @$query['HDRType'] = $request->HDRType;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->streamURL) {
            @$query['StreamURL'] = $request->streamURL;
        }

        if (null !== $request->uploadMetadata) {
            @$query['UploadMetadata'] = $request->uploadMetadata;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadStreamByURL',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadStreamByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads transcoded streams to ApsaraVideo VOD from external storage.
     *
     * @remarks
     *   **Make sure that you understand the billing method and price of ApsaraVideo VOD before you call this operation. You are charged storage fees after you upload media files to ApsaraVideo VOD. For more information, see [Billing of media asset storage](~~188308#section_e97_xrp_mzz~~). If you have activated the acceleration service, you are charged acceleration fees when you upload media files to ApsaraVideo VOD. For more information, see [Billing of acceleration traffic](~~188310#section_sta_zm2_tsv~~).**
     * *   This operation is available only in the **China (Shanghai)** and **Singapore** regions.
     * *   You can call this operation to upload transcoded streams to ApsaraVideo VOD from external storage. The following HDR types of transcoded streams are supported: HDR, HDR 10, HLG, Dolby Vision, HDR Vivid, and SDR+.
     * *   You can call the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation to query the upload status. After the upload is complete, the callback of the [UploadByURLComplete](https://help.aliyun.com/document_detail/376427.html) event is returned.
     *
     * @param request - UploadStreamByURLRequest
     *
     * @returns UploadStreamByURLResponse
     *
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
     * Verifies the ownership of a specified domain name.
     *
     * @remarks
     * This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - VerifyVodDomainOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyVodDomainOwnerResponse
     *
     * @param VerifyVodDomainOwnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyVodDomainOwnerResponse
     */
    public function verifyVodDomainOwnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyVodDomainOwner',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyVodDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the ownership of a specified domain name.
     *
     * @remarks
     * This operation is available only in the **China (Shanghai)** region.
     *
     * @param request - VerifyVodDomainOwnerRequest
     *
     * @returns VerifyVodDomainOwnerResponse
     *
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
