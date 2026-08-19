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
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerCollectDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerCollectDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerDimensionDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerDimensionDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerMetricDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerMetricDataResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserVipsByDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserVipsByDomainResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppPlayKeyRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppPlayKeyResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWorkflowTaskRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWorkflowTaskResponse;
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
use AlibabaCloud\SDK\Vod\V20170321\Models\SetAppPlayKeyRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetAppPlayKeyResponse;
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
            'cn-shenzhen' => 'vod.cn-shenzhen.aliyuncs.com',
            'cn-beijing' => 'vod.cn-beijing.aliyuncs.com',
            'cn-shanghai' => 'vod.cn-shanghai.aliyuncs.com',
            'cn-hongkong' => 'vod.cn-hongkong.aliyuncs.com',
            'ap-southeast-1' => 'vod.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1' => 'vod.ap-northeast-1.aliyuncs.com',
            'ap-southeast-5' => 'vod.ap-southeast-5.aliyuncs.com',
            'us-west-1' => 'vod.us-west-1.aliyuncs.com',
            'eu-central-1' => 'vod.eu-central-1.aliyuncs.com',
            'me-central-1' => 'vod.me-central-1.aliyuncs.com',
            'cn-north-2-gov-1' => 'vod.cn-north-2-gov-1.aliyuncs.com',
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
     * Adds an AI template used for automated review and smart thumbnail tasks.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Before adding an AI template for automated review or smart thumbnail tasks, make sure that you have activated [automated review](https://ai.aliyun.com/vi/censor) or [smart thumbnail](https://ai.aliyun.com/vi/cover).
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
     * Adds an AI template used for automated review and smart thumbnail tasks.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Before adding an AI template for automated review or smart thumbnail tasks, make sure that you have activated [automated review](https://ai.aliyun.com/vi/censor) or [smart thumbnail](https://ai.aliyun.com/vi/cover).
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
     * Creates a category to classify audio, video, image, and short video materials stored in ApsaraVideo VOD, making resource discovery and management more efficient.
     *
     * @remarks
     * - Audio/video/image categories (`Type` set to `default`) support up to three levels, with a maximum of 100 subcategories per level. Short video material categories (`Type` set to `material`) support up to two levels, with a maximum of 100 subcategories per level.
     * - After creating a category, you can assign it to media assets during upload or to already uploaded media assets. For more information, see [Media asset categories](https://help.aliyun.com/document_detail/86070.html).
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
     * Creates a category to classify audio, video, image, and short video materials stored in ApsaraVideo VOD, making resource discovery and management more efficient.
     *
     * @remarks
     * - Audio/video/image categories (`Type` set to `default`) support up to three levels, with a maximum of 100 subcategories per level. Short video material categories (`Type` set to `material`) support up to two levels, with a maximum of 100 subcategories per level.
     * - After creating a category, you can assign it to media assets during upload or to already uploaded media assets. For more information, see [Media asset categories](https://help.aliyun.com/document_detail/86070.html).
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
     * Creates an online editing project (video editing task).
     *
     * @remarks
     * - For more information about online editing, see [Online editing](https://help.aliyun.com/document_detail/95482.html).
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
     * Creates an online editing project (video editing task).
     *
     * @remarks
     * - For more information about online editing, see [Online editing](https://help.aliyun.com/document_detail/95482.html).
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
     * Adds one or more materials to an online editing project.
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
     * Adds one or more materials to an online editing project.
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
     * Adds transcoding configurations. You can create a transcoding template group or add transcoding templates to a specified template group.
     *
     * @remarks
     * - Transcoding template groups that are **locked** by the ApsaraVideo VOD backend do not support custom operations. You can call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the template configuration and check whether the template group is locked based on the Locked response parameter. You can call the [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to unlock the template before you modify it.
     * - Because transcoding involves storage addresses of files, you cannot add a transcoding template group if no storage address is available. You can activate a **VOD system bucket** in the **ApsaraVideo VOD console > Configuration Management > Media Asset Management Configuration > Storage Management** to obtain an available storage address.
     * - You cannot add transcoding template configurations to a **No Transcoding** template group.
     * - You must specify either **TranscodeTemplateGroupId** or **Name**.
     * - You can create a maximum of 20 transcoding template groups.
     * - You can add a maximum of 20 transcoding template configurations to a transcoding template group.
     * - To generate adaptive bitrate streaming addresses through transcoding, you can add a maximum of 10 video packaging templates to a transcoding template group. If more than 10 templates are added, only individual stream addresses are generated instead of adaptive bitrate streaming addresses.
     * ### QPS limit
     * The maximum number of queries per second (QPS) per user for this operation is 5. If the number of calls per second exceeds the limit, throttling is triggered. This may affect your business. Manage your calls appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Adds transcoding configurations. You can create a transcoding template group or add transcoding templates to a specified template group.
     *
     * @remarks
     * - Transcoding template groups that are **locked** by the ApsaraVideo VOD backend do not support custom operations. You can call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the template configuration and check whether the template group is locked based on the Locked response parameter. You can call the [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to unlock the template before you modify it.
     * - Because transcoding involves storage addresses of files, you cannot add a transcoding template group if no storage address is available. You can activate a **VOD system bucket** in the **ApsaraVideo VOD console > Configuration Management > Media Asset Management Configuration > Storage Management** to obtain an available storage address.
     * - You cannot add transcoding template configurations to a **No Transcoding** template group.
     * - You must specify either **TranscodeTemplateGroupId** or **Name**.
     * - You can create a maximum of 20 transcoding template groups.
     * - You can add a maximum of 20 transcoding template configurations to a transcoding template group.
     * - To generate adaptive bitrate streaming addresses through transcoding, you can add a maximum of 10 video packaging templates to a transcoding template group. If more than 10 templates are added, only individual stream addresses are generated instead of adaptive bitrate streaming addresses.
     * ### QPS limit
     * The maximum number of queries per second (QPS) per user for this operation is 5. If the number of calls per second exceeds the limit, throttling is triggered. This may affect your business. Manage your calls appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Adds a domain name for CDN acceleration in ApsaraVideo VOD.
     *
     * @remarks
     * - Currently, the only supported service address is **China (Shanghai)**.
     * - Before creating an accelerated domain name, you must activate [ApsaraVideo VOD](https://help.aliyun.com/document_detail/51512.html), and the accelerated domain name must have a completed ICP filing.
     * - Origin content that is not hosted on Alibaba Cloud requires review, which will be completed before the next business day.
     * - You can submit only one accelerated domain name at a time. Each user can add up to 20 domain names.
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
     * Adds a domain name for CDN acceleration in ApsaraVideo VOD.
     *
     * @remarks
     * - Currently, the only supported service address is **China (Shanghai)**.
     * - Before creating an accelerated domain name, you must activate [ApsaraVideo VOD](https://help.aliyun.com/document_detail/51512.html), and the accelerated domain name must have a completed ICP filing.
     * - Origin content that is not hosted on Alibaba Cloud requires review, which will be completed before the next business day.
     * - You can submit only one accelerated domain name at a time. Each user can add up to 20 domain names.
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
     * Binds a storage bucket to a sub-application of ApsaraVideo VOD.
     *
     * @remarks
     * Calls AddVodStorageForApp to enable a VOD system bucket for an ApsaraVideo VOD sub-application.
     *  <notice>Each sub-application can have at most one VOD system bucket enabled. If you specify an AppId that does not exist or an AppId that already has a VOD system bucket enabled, an error is returned.</notice>
     * <notice>To call this operation, the caller must have application administrator permissions (VODAppAdministratorAccess). The Alibaba Cloud account has application administrator permissions by default. An application administrator can call AttachAppPolicyToIdentity to grant application permissions to a RAM user or role.</notice>
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
     * Binds a storage bucket to a sub-application of ApsaraVideo VOD.
     *
     * @remarks
     * Calls AddVodStorageForApp to enable a VOD system bucket for an ApsaraVideo VOD sub-application.
     *  <notice>Each sub-application can have at most one VOD system bucket enabled. If you specify an AppId that does not exist or an AppId that already has a VOD system bucket enabled, an error is returned.</notice>
     * <notice>To call this operation, the caller must have application administrator permissions (VODAppAdministratorAccess). The Alibaba Cloud account has application administrator permissions by default. An application administrator can call AttachAppPolicyToIdentity to grant application permissions to a RAM user or role.</notice>
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
     * Adds a snapshot or animated image template.
     *
     * @remarks
     * - After adding a template, you can pass the snapshot or animated image template ID through the [SubmitSnapshotJob](~~SubmitSnapshotJob~~) or [SubmitDynamicImageJob](~~SubmitDynamicImageJob~~) operation to initiate a snapshot or animated image job.
     * - You can receive [video snapshot completed](https://help.aliyun.com/document_detail/57337.html) and [video animated image completed](https://help.aliyun.com/document_detail/143490.html) callback messages through HTTP callbacks (compatible with HTTPS) or MNS callbacks. For more information, see [Callback methods](https://help.aliyun.com/document_detail/55627.html).
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
     * Adds a snapshot or animated image template.
     *
     * @remarks
     * - After adding a template, you can pass the snapshot or animated image template ID through the [SubmitSnapshotJob](~~SubmitSnapshotJob~~) or [SubmitDynamicImageJob](~~SubmitDynamicImageJob~~) operation to initiate a snapshot or animated image job.
     * - You can receive [video snapshot completed](https://help.aliyun.com/document_detail/57337.html) and [video animated image completed](https://help.aliyun.com/document_detail/143490.html) callback messages through HTTP callbacks (compatible with HTTPS) or MNS callbacks. For more information, see [Callback methods](https://help.aliyun.com/document_detail/55627.html).
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
     * To simplify watermark task processing, ApsaraVideo VOD consolidates complex watermark parameters such as position, size, font, and color into templates, each identified by a unique watermark template ID. Calls this operation to add an image or text watermark template.
     *
     * @remarks
     * - Call this operation to add an image watermark template (`Image`) or a text watermark template (`Text`). Image watermark templates support the following formats: static images (PNG) and animated images (GIF, APNG, MOV).
     * - After adding a watermark template by calling this operation, call [AddTranscodeTemplateGroup](~~AddTranscodeTemplateGroup~~) or [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) to associate the watermark template with a transcoding template group for subsequent watermark transcoding.
     * - For more information about adding image and text watermarks to videos, see [Video watermarks](https://help.aliyun.com/document_detail/99369.html).
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
     * To simplify watermark task processing, ApsaraVideo VOD consolidates complex watermark parameters such as position, size, font, and color into templates, each identified by a unique watermark template ID. Calls this operation to add an image or text watermark template.
     *
     * @remarks
     * - Call this operation to add an image watermark template (`Image`) or a text watermark template (`Text`). Image watermark templates support the following formats: static images (PNG) and animated images (GIF, APNG, MOV).
     * - After adding a watermark template by calling this operation, call [AddTranscodeTemplateGroup](~~AddTranscodeTemplateGroup~~) or [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) to associate the watermark template with a transcoding template group for subsequent watermark transcoding.
     * - For more information about adding image and text watermarks to videos, see [Video watermarks](https://help.aliyun.com/document_detail/99369.html).
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
     * Invokes this operation to attach access permissions of an ApsaraVideo VOD application to a specified identity (Resource Access Management (RAM) user or RAM role).
     *
     * @remarks
     * >Notice:  Each Resource Access Management (RAM) user or RAM role can be granted permissions on up to 10 applications.
     * >Notice: You must have application administrator permissions to invoke this operation. For the first invocation, use your Alibaba Cloud account.
     * - If the policy name is VODAppAdministratorAccess, AppId is optional. For other policies, AppId is required.
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
     * Invokes this operation to attach access permissions of an ApsaraVideo VOD application to a specified identity (Resource Access Management (RAM) user or RAM role).
     *
     * @remarks
     * >Notice:  Each Resource Access Management (RAM) user or RAM role can be granted permissions on up to 10 applications.
     * >Notice: You must have application administrator permissions to invoke this operation. For the first invocation, use your Alibaba Cloud account.
     * - If the policy name is VODAppAdministratorAccess, AppId is optional. For other policies, AppId is required.
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
     * Retrieves the basic information and source file information of multiple media assets in a batch.
     *
     * @remarks
     * - You can retrieve information about up to 20 audio or video files at a time.
     * - After an audio or video file is uploaded, ApsaraVideo VOD analyzes the uploaded source file. Therefore, media asset information is generated asynchronously. You can configure an [event notification](https://help.aliyun.com/document_detail/55627.html) for the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event. After you receive the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event notification, call this operation to retrieve the audio or video information.
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

        if (null !== $request->referenceIds) {
            @$query['ReferenceIds'] = $request->referenceIds;
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
     * Retrieves the basic information and source file information of multiple media assets in a batch.
     *
     * @remarks
     * - You can retrieve information about up to 20 audio or video files at a time.
     * - After an audio or video file is uploaded, ApsaraVideo VOD analyzes the uploaded source file. Therefore, media asset information is generated asynchronously. You can configure an [event notification](https://help.aliyun.com/document_detail/55627.html) for the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event. After you receive the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event notification, call this operation to retrieve the audio or video information.
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
     * Configures multiple accelerated domain names in a batch.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - You can configure up to 50 domain names at a time.
     * - After you call this operation to configure certain features for domain names, a unique ConfigId is generated. You can use the ConfigId to update or delete domain name configurations. This operation does not return the ConfigId. To obtain the ConfigId, call the [DescribeVodDomainConfigs](~~DescribeVodDomainConfigs~~) operation.
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
     * Configures multiple accelerated domain names in a batch.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - You can configure up to 50 domain names at a time.
     * - After you call this operation to configure certain features for domain names, a unique ConfigId is generated. You can use the ConfigId to update or delete domain name configurations. This operation does not return the ConfigId. To obtain the ConfigId, call the [DescribeVodDomainConfigs](~~DescribeVodDomainConfigs~~) operation.
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
     * Enables an accelerated domain name that is in the Disabled state.
     *
     * @remarks
     * - Currently, the only supported endpoint is **China (Shanghai)**.
     * - If the account associated with the domain name has an overdue payment or the domain name is in an illegal state, you cannot call this operation to enable the ApsaraVideo VOD domain name.
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
     * Enables an accelerated domain name that is in the Disabled state.
     *
     * @remarks
     * - Currently, the only supported endpoint is **China (Shanghai)**.
     * - If the account associated with the domain name has an overdue payment or the domain name is in an illegal state, you cannot call this operation to enable the ApsaraVideo VOD domain name.
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
     * Pauses domain name acceleration.
     *
     * @remarks
     * - Currently, the only supported service address is **China (Shanghai)**.
     * - After you pause the accelerated domain name, the domain name information is retained. Requests to the accelerated domain name are automatically redirected to the origin server.
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
     * Pauses domain name acceleration.
     *
     * @remarks
     * - Currently, the only supported service address is **China (Shanghai)**.
     * - After you pause the accelerated domain name, the domain name information is retained. Requests to the accelerated domain name are automatically redirected to the origin server.
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
     * Cancels URL upload tasks that are in the queue.
     *
     * @remarks
     * - You can cancel only URL upload nodes whose status is **Pending**. You can call the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation to query the node status.
     * - Upload nodes that have already started to execute cannot be canceled.
     * - The request parameters JobIds and UploadUrls must have one specified. If both are specified, only JobIds is processed.
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
     * Cancels URL upload tasks that are in the queue.
     *
     * @remarks
     * - You can cancel only URL upload nodes whose status is **Pending**. You can call the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation to query the node status.
     * - Upload nodes that have already started to execute cannot be canceled.
     * - The request parameters JobIds and UploadUrls must have one specified. If both are specified, only JobIds is processed.
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
     * Transfers a resource to a different resource group.
     *
     * @remarks
     * Transfers a resource to another resource group.
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
     * Transfers a resource to a different resource group.
     *
     * @remarks
     * Transfers a resource to another resource group.
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
     * Each account can create up to 10 applications. For more information, see [Multi-application development guide](https://help.aliyun.com/document_detail/113600.html).
     * ### QPS limit
     * The single-user QPS limit for this operation is 50 calls per second. If this limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Each account can create up to 10 applications. For more information, see [Multi-application development guide](https://help.aliyun.com/document_detail/113600.html).
     * ### QPS limit
     * The single-user QPS limit for this operation is 50 calls per second. If this limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Submits a manual review request to review media information such as videos and audio files.
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
     * Submits a manual review request to review media information such as videos and audio files.
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
     * The upload URL and credential are provided by ApsaraVideo VOD to address authorization and security concerns, prevent malicious uploads, and enable automatic creation of a media asset ID (MediaId) for management and processing. For auxiliary media assets such as watermarks and subtitles, invoke this operation to obtain the upload credential and create the corresponding media asset information.
     *
     * @remarks
     * - **Before using this operation, make sure that you understand the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For more information, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage transfer acceleration, uploading media files to ApsaraVideo VOD also incurs upload acceleration fees. For more information, see [Storage transfer acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - This operation only obtains the upload URL and credential and creates basic media asset information. It does not upload files. For a complete example of uploading files by using the API, see [Upload media files by using the ApsaraVideo VOD API](https://help.aliyun.com/document_detail/476208.html).
     * - If the upload credential expires (valid for 3000 seconds), call this operation again to obtain a new upload URL and credential.
     * - You can configure callbacks to receive event notifications for [auxiliary media asset upload complete](https://help.aliyun.com/document_detail/103250.html) to determine whether the upload is successful.
     * - Obtaining the upload URL and credential is a core fundamental of ApsaraVideo VOD and a required step for every upload operation. ApsaraVideo VOD provides various upload methods, each with different requirements for obtaining the upload URL and credential. For more information, see the instructions in [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
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
     * The upload URL and credential are provided by ApsaraVideo VOD to address authorization and security concerns, prevent malicious uploads, and enable automatic creation of a media asset ID (MediaId) for management and processing. For auxiliary media assets such as watermarks and subtitles, invoke this operation to obtain the upload credential and create the corresponding media asset information.
     *
     * @remarks
     * - **Before using this operation, make sure that you understand the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For more information, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage transfer acceleration, uploading media files to ApsaraVideo VOD also incurs upload acceleration fees. For more information, see [Storage transfer acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - This operation only obtains the upload URL and credential and creates basic media asset information. It does not upload files. For a complete example of uploading files by using the API, see [Upload media files by using the ApsaraVideo VOD API](https://help.aliyun.com/document_detail/476208.html).
     * - If the upload credential expires (valid for 3000 seconds), call this operation again to obtain a new upload URL and credential.
     * - You can configure callbacks to receive event notifications for [auxiliary media asset upload complete](https://help.aliyun.com/document_detail/103250.html) to determine whether the upload is successful.
     * - Obtaining the upload URL and credential is a core fundamental of ApsaraVideo VOD and a required step for every upload operation. ApsaraVideo VOD provides various upload methods, each with different requirements for obtaining the upload URL and credential. For more information, see the instructions in [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
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
     * Retrieves the upload URL and upload credential for uploading an image to ApsaraVideo VOD, and creates image information. ApsaraVideo VOD issues upload URLs and credentials to ensure authorization and security, prevent malicious uploads, and supports automatic creation of an image ID (ImageId) for management. You can invoke this operation to obtain the upload URL and credential and create image information.
     *
     * @remarks
     * - **Before using this operation, make sure that you understand the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For more information, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage and transfer acceleration, uploading media files to ApsaraVideo VOD also incurs upload acceleration fees. For more information, see [Storage and transfer acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - This operation only retrieves the upload URL and credential and creates basic media asset information. It does not upload files. For a complete example of uploading files by calling API operations, see [Upload media files by using the ApsaraVideo VOD API](https://help.aliyun.com/document_detail/476208.html).
     * - Refreshing the upload URL and credential is not supported for image uploads. If the image upload credential expires (the default validity period is 3000 seconds), call this operation again to obtain a new upload URL and credential.
     * - You can configure callbacks to receive event notifications for [image upload completion](https://help.aliyun.com/document_detail/91968.html) to determine whether the upload is successful.
     * - Retrieving the upload URL and credential is a core operation of ApsaraVideo VOD and is required for every upload. ApsaraVideo VOD provides multiple upload methods, each with different requirements for retrieving the upload URL and credential. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
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
     * Retrieves the upload URL and upload credential for uploading an image to ApsaraVideo VOD, and creates image information. ApsaraVideo VOD issues upload URLs and credentials to ensure authorization and security, prevent malicious uploads, and supports automatic creation of an image ID (ImageId) for management. You can invoke this operation to obtain the upload URL and credential and create image information.
     *
     * @remarks
     * - **Before using this operation, make sure that you understand the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For more information, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage and transfer acceleration, uploading media files to ApsaraVideo VOD also incurs upload acceleration fees. For more information, see [Storage and transfer acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - This operation only retrieves the upload URL and credential and creates basic media asset information. It does not upload files. For a complete example of uploading files by calling API operations, see [Upload media files by using the ApsaraVideo VOD API](https://help.aliyun.com/document_detail/476208.html).
     * - Refreshing the upload URL and credential is not supported for image uploads. If the image upload credential expires (the default validity period is 3000 seconds), call this operation again to obtain a new upload URL and credential.
     * - You can configure callbacks to receive event notifications for [image upload completion](https://help.aliyun.com/document_detail/91968.html) to determine whether the upload is successful.
     * - Retrieving the upload URL and credential is a core operation of ApsaraVideo VOD and is required for every upload. ApsaraVideo VOD provides multiple upload methods, each with different requirements for retrieving the upload URL and credential. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
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
     * ApsaraVideo VOD issues the upload URL and upload credential to ensure authorization and security and prevent malicious uploads. During issuance, a media ID (MediaId), also called a video ID (VideoId), undergoes automatic creation for management. Invoke this operation to obtain the upload URL and upload credential, and create audio or video information.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For more information, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage and transfer acceleration, uploading media files to ApsaraVideo VOD also incurs upload acceleration fees. For more information, see [Storage and transfer acceleration billing](~~188310#section_sta_zm2_tsv~~). Storage fees are calculated from the time when the file is uploaded. Acceleration fees are calculated when you perform upload operations after the feature is enabled. Simply calling this operation does not incur fees.**
     * - Obtaining the upload URL and credential is the core foundation of ApsaraVideo VOD and is a required step for every upload operation. ApsaraVideo VOD provides multiple upload methods, each with different requirements for obtaining the upload URL and credential. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     * - This operation is used only to obtain the upload URL and credential and create basic media asset information. It does not upload files. For a complete example of uploading files by using API operations, see [Upload media files by using the ApsaraVideo VOD API](https://help.aliyun.com/document_detail/476208.html).
     * - This operation supports obtaining the upload URL and credential for both video and audio files. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     * - If the upload credential expires (the default validity period is 3000 seconds), call the [RefreshUploadVideo](~~RefreshUploadVideo~~) operation to obtain a new upload credential.
     * - After the upload is complete, you can configure callbacks to receive [upload event notifications](https://help.aliyun.com/document_detail/55396.html) or call the [GetMezzanineInfo](https://help.aliyun.com/document_detail/59624.html) operation to check the file status and determine whether the upload is successful.
     * - The VideoId parameter returned by this operation can be used for media asset lifecycle management or media processing.
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

        if (null !== $request->enableFirstFrameCover) {
            @$query['EnableFirstFrameCover'] = $request->enableFirstFrameCover;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileSize) {
            @$query['FileSize'] = $request->fileSize;
        }

        if (null !== $request->generateThumbnail) {
            @$query['GenerateThumbnail'] = $request->generateThumbnail;
        }

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * ApsaraVideo VOD issues the upload URL and upload credential to ensure authorization and security and prevent malicious uploads. During issuance, a media ID (MediaId), also called a video ID (VideoId), undergoes automatic creation for management. Invoke this operation to obtain the upload URL and upload credential, and create audio or video information.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For more information, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage and transfer acceleration, uploading media files to ApsaraVideo VOD also incurs upload acceleration fees. For more information, see [Storage and transfer acceleration billing](~~188310#section_sta_zm2_tsv~~). Storage fees are calculated from the time when the file is uploaded. Acceleration fees are calculated when you perform upload operations after the feature is enabled. Simply calling this operation does not incur fees.**
     * - Obtaining the upload URL and credential is the core foundation of ApsaraVideo VOD and is a required step for every upload operation. ApsaraVideo VOD provides multiple upload methods, each with different requirements for obtaining the upload URL and credential. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     * - This operation is used only to obtain the upload URL and credential and create basic media asset information. It does not upload files. For a complete example of uploading files by using API operations, see [Upload media files by using the ApsaraVideo VOD API](https://help.aliyun.com/document_detail/476208.html).
     * - This operation supports obtaining the upload URL and credential for both video and audio files. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
     * - If the upload credential expires (the default validity period is 3000 seconds), call the [RefreshUploadVideo](~~RefreshUploadVideo~~) operation to obtain a new upload credential.
     * - After the upload is complete, you can configure callbacks to receive [upload event notifications](https://help.aliyun.com/document_detail/55396.html) or call the [GetMezzanineInfo](https://help.aliyun.com/document_detail/59624.html) operation to check the file status and determine whether the upload is successful.
     * - The VideoId parameter returned by this operation can be used for media asset lifecycle management or media processing.
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
     * Invokes this operation to perform decryption on the CiphertextBlob in a KMS data key (DK).
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
     * Invokes this operation to perform decryption on the CiphertextBlob in a KMS data key (DK).
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
     * Deletes AI image information.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - **This operation only deletes AI image information and does not actually delete image files**.
     * - A maximum of 10 IDs can be deleted at a time.
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
     * Deletes AI image information.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - **This operation only deletes AI image information and does not actually delete image files**.
     * - A maximum of 10 IDs can be deleted at a time.
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
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - An AI template that is set as the default template cannot be deleted.
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
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - An AI template that is set as the default template cannot be deleted.
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
     * Deletes application information.
     *
     * @remarks
     * An application cannot be deleted if it contains resources.
     * ### QPS limit
     * The single-user QPS limit for this API is 10 calls per second. If this limit is exceeded, the API calls are throttled, which may affect your business. Call this API appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Deletes application information.
     *
     * @remarks
     * An application cannot be deleted if it contains resources.
     * ### QPS limit
     * The single-user QPS limit for this API is 10 calls per second. If this limit is exceeded, the API calls are throttled, which may affect your business. Call this API appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Deletes one or more auxiliary media assets that have been uploaded to ApsaraVideo VOD, such as watermark images, subtitle files, and materials.
     *
     * @remarks
     * - **This operation physically deletes auxiliary media assets. Once deleted, they cannot be recovered. Proceed with caution.**
     * - You can delete up to 20 auxiliary media assets at a time.
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
     * Deletes one or more auxiliary media assets that have been uploaded to ApsaraVideo VOD, such as watermark images, subtitle files, and materials.
     *
     * @remarks
     * - **This operation physically deletes auxiliary media assets. Once deleted, they cannot be recovered. Proceed with caution.**
     * - You can delete up to 20 auxiliary media assets at a time.
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
     * - **This operation deletes a category and all its subcategories (including second-level and third-level categories). Proceed with caution.**
     * - If a category has been assigned to media assets, deleting the category also removes the category assignment from those media assets.
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
     * - **This operation deletes a category and all its subcategories (including second-level and third-level categories). Proceed with caution.**
     * - If a category has been assigned to media assets, deleting the category also removes the category assignment from those media assets.
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
     * Deletes animated sticker information.
     *
     * @remarks
     * - This operation only deletes the association between animated stickers and videos. It does not delete the actual animated sticker files.
     * - After the association is deleted, the deleted animated sticker information can no longer be queried by calling the [ListDynamicImage](https://help.aliyun.com/document_detail/180958.html) operation.
     * - If you do not specify **DynamicImageIds**, all animated stickers associated with the specified VideoId are deleted. However, if the video has more than 10 animated stickers, the deletion request is rejected.
     * ### QPS limit
     * The maximum queries per second (QPS) per user for this operation is 10. If the number of calls exceeds the limit, throttling is triggered. This may affect your business. Call this operation as needed. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Deletes animated sticker information.
     *
     * @remarks
     * - This operation only deletes the association between animated stickers and videos. It does not delete the actual animated sticker files.
     * - After the association is deleted, the deleted animated sticker information can no longer be queried by calling the [ListDynamicImage](https://help.aliyun.com/document_detail/180958.html) operation.
     * - If you do not specify **DynamicImageIds**, all animated stickers associated with the specified VideoId are deleted. However, if the video has more than 10 animated stickers, the deletion request is rejected.
     * ### QPS limit
     * The maximum queries per second (QPS) per user for this operation is 10. If the number of calls exceeds the limit, throttling is triggered. This may affect your business. Call this operation as needed. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Deletes an online editing project.
     *
     * @remarks
     * - Supports batch deletion.
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
     * Deletes an online editing project.
     *
     * @remarks
     * - Supports batch deletion.
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
     * Deletes materials from an online editing project.
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
     * Deletes materials from an online editing project.
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
     * Deletes images uploaded by users or images generated from video snapshots.
     *
     * @remarks
     * - **When you call this operation to delete images, the source files are permanently deleted. This action is irreversible. Once deleted, the images cannot be recovered. Proceed with caution.**
     * - When **DeleteImageType** is set to **VideoId**, **VideoId** and **ImageType** are available and required.
     * - When **DeleteImageType** is set to **ImageURL**, **ImageIds** and **ImageURLs** are available and required.
     * - After you call this operation to delete images, CDN caches may still exist in some cases, which means the image URLs may not become invalid immediately.
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
     * Deletes images uploaded by users or images generated from video snapshots.
     *
     * @remarks
     * - **When you call this operation to delete images, the source files are permanently deleted. This action is irreversible. Once deleted, the images cannot be recovered. Proceed with caution.**
     * - When **DeleteImageType** is set to **VideoId**, **VideoId** and **ImageType** are available and required.
     * - When **DeleteImageType** is set to **ImageURL**, **ImageIds** and **ImageURLs** are available and required.
     * - After you call this operation to delete images, CDN caches may still exist in some cases, which means the image URLs may not become invalid immediately.
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
     * Deletes the callback method, callback URL, and event types of an event notification.
     *
     * @remarks
     * > For more information, see [Event notification development guide](https://help.aliyun.com/document_detail/55627.html).
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
     * Deletes the callback method, callback URL, and event types of an event notification.
     *
     * @remarks
     * > For more information, see [Event notification development guide](https://help.aliyun.com/document_detail/55627.html).
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
     * Deletes the source files of multiple audio and video files at a time.
     *
     * @remarks
     * Media processing operations in ApsaraVideo VOD (transcoding, snapshots, automated review, etc.) are performed on source files. Once a source file is deleted, subsequent media processing operations cannot be performed. Proceed with caution.
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

        if (null !== $request->referenceIds) {
            @$query['ReferenceIds'] = $request->referenceIds;
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
     * Deletes the source files of multiple audio and video files at a time.
     *
     * @remarks
     * Media processing operations in ApsaraVideo VOD (transcoding, snapshots, automated review, etc.) are performed on source files. Once a source file is deleted, subsequent media processing operations cannot be performed. Proceed with caution.
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
     * Deletes fragment files generated during upload.
     *
     * @remarks
     * - When you use multipart upload, fragment files may be generated if the upload fails. These fragment files are automatically cleared after 7 days. After the upload is complete or fails, you can call this operation to manually clear the fragment files.
     * - Calling this operation does not delete the original file or transcoded files. It only deletes fragment files generated during the upload process.
     * - Calling the [DeleteVideo](https://help.aliyun.com/document_detail/52837.html) operation deletes the complete video file, including fragment files.
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
     * Deletes fragment files generated during upload.
     *
     * @remarks
     * - When you use multipart upload, fragment files may be generated if the upload fails. These fragment files are automatically cleared after 7 days. After the upload is complete or fails, you can call this operation to manually clear the fragment files.
     * - Calling this operation does not delete the original file or transcoded files. It only deletes fragment files generated during the upload process.
     * - Calling the [DeleteVideo](https://help.aliyun.com/document_detail/52837.html) operation deletes the complete video file, including fragment files.
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
     * Deletes media stream (video stream or audio stream) information and storage files.
     *
     * @remarks
     * ### Usage notes
     * Batch deletion is supported.
     * ### QPS limit
     * A single user can perform a maximum of 50 queries per second (QPS). Throttling is triggered when the QPS limit is exceeded, which may affect your business. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * Deletes media stream (video stream or audio stream) information and storage files.
     *
     * @remarks
     * ### Usage notes
     * Batch deletion is supported.
     * ### QPS limit
     * A single user can perform a maximum of 50 queries per second (QPS). Throttling is triggered when the QPS limit is exceeded, which may affect your business. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Deletes transcoding configurations. You can delete specific transcoding templates from a transcoding template group or force delete an entire transcoding template group.
     *
     * @remarks
     * - Default transcoding templates cannot be deleted. Remove the default designation before deleting them.
     *  - For security protection purposes, a locked transcoding template group cannot be added to, modified, or deleted. Call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the template configuration and check the Locked response parameter to determine whether the template group is locked. Call the [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to unlock the template before making changes.
     *  - If the ForceDelGroup parameter is empty or set to false, the TranscodeTemplateIds parameter is required.
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
     * Deletes transcoding configurations. You can delete specific transcoding templates from a transcoding template group or force delete an entire transcoding template group.
     *
     * @remarks
     * - Default transcoding templates cannot be deleted. Remove the default designation before deleting them.
     *  - For security protection purposes, a locked transcoding template group cannot be added to, modified, or deleted. Call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the template configuration and check the Locked response parameter to determine whether the template group is locked. Call the [UpdateTranscodeTemplateGroup](~~UpdateTranscodeTemplateGroup~~) operation to unlock the template before making changes.
     *  - If the ForceDelGroup parameter is empty or set to false, the TranscodeTemplateIds parameter is required.
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
     * Deletes complete videos, including video source files, transcoded stream files, and thumbnails.
     *
     * @remarks
     * ### Usage notes
     * - **This operation physically deletes videos. Deleted videos cannot be recovered. Proceed with caution.**
     * - Batch deletion is supported.
     * - When you delete a video, the source files are deleted, including the video source file, transcoded stream files, and thumbnails. However, the CDN cache is not refreshed through synchronization. If your business requires it, use the purge feature in the ApsaraVideo VOD console to clear stale data from the point of presence. Related operations: see [Purge and prefetch](https://help.aliyun.com/document_detail/86098.html).
     * ### QPS limit
     * The single-user QPS limit for this operation is 30 calls per second. If the limit is exceeded, the API invoke is throttled, which may affect your business. Invoke this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
        if (null !== $request->referenceIds) {
            @$query['ReferenceIds'] = $request->referenceIds;
        }

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
     * Deletes complete videos, including video source files, transcoded stream files, and thumbnails.
     *
     * @remarks
     * ### Usage notes
     * - **This operation physically deletes videos. Deleted videos cannot be recovered. Proceed with caution.**
     * - Batch deletion is supported.
     * - When you delete a video, the source files are deleted, including the video source file, transcoded stream files, and thumbnails. However, the CDN cache is not refreshed through synchronization. If your business requires it, use the purge feature in the ApsaraVideo VOD console to clear stale data from the point of presence. Related operations: see [Purge and prefetch](https://help.aliyun.com/document_detail/86098.html).
     * ### QPS limit
     * The single-user QPS limit for this operation is 30 calls per second. If the limit is exceeded, the API invoke is throttled, which may affect your business. Invoke this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Deletes an accelerated domain name that has been added for ApsaraVideo VOD.
     *
     * @remarks
     * >- Currently, the only supported service region is **China (Shanghai)**.
     * >- This operation makes the domain name inaccessible. Proceed with caution. Before deleting the domain name, restore the A record of the domain name at your DNS service provider.
     * >- After the domain name is successfully deleted, all related records of the ApsaraVideo VOD domain name are deleted. If you only want to temporarily disable the domain name, use the [DisableVodDomainOffline](https://help.aliyun.com/document_detail/120208.html) operation.
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
     * Deletes an accelerated domain name that has been added for ApsaraVideo VOD.
     *
     * @remarks
     * >- Currently, the only supported service region is **China (Shanghai)**.
     * >- This operation makes the domain name inaccessible. Proceed with caution. Before deleting the domain name, restore the A record of the domain name at your DNS service provider.
     * >- After the domain name is successfully deleted, all related records of the ApsaraVideo VOD domain name are deleted. If you only want to temporarily disable the domain name, use the [DisableVodDomainOffline](https://help.aliyun.com/document_detail/120208.html) operation.
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
     * Deletes the configurations of a domain name for CDN acceleration in ApsaraVideo VOD.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - This operation causes the domain name to become inaccessible. Before deleting the domain name, restore the A record of the domain name at your DNS service provider.
     * - After the domain name is successfully deleted, all related records of the ApsaraVideo VOD domain name are removed. If you only want to temporarily disable the domain name, use the [DisableVodRealtimeLogDelivery](https://help.aliyun.com/document_detail/120208.html) operation.
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
     * Deletes the configurations of a domain name for CDN acceleration in ApsaraVideo VOD.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - This operation causes the domain name to become inaccessible. Before deleting the domain name, restore the A record of the domain name at your DNS service provider.
     * - After the domain name is successfully deleted, all related records of the ApsaraVideo VOD domain name are removed. If you only want to temporarily disable the domain name, use the [DisableVodRealtimeLogDelivery](https://help.aliyun.com/document_detail/120208.html) operation.
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
     * Deletes an image watermark template or text watermark template by watermark template ID.
     *
     * @remarks
     * - **When you delete an image watermark template, the watermark source file is physically deleted and cannot be recovered. Proceed with caution.**
     * - A watermark template that has been set as the default watermark template cannot be deleted. To delete it, call [SetDefaultWatermark](~~SetDefaultWatermark~~) to set another watermark template as the default template to remove the default status, and then delete it.
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
     * Deletes an image watermark template or text watermark template by watermark template ID.
     *
     * @remarks
     * - **When you delete an image watermark template, the watermark source file is physically deleted and cannot be recovered. Proceed with caution.**
     * - A watermark template that has been set as the default watermark template cannot be deleted. To delete it, call [SetDefaultWatermark](~~SetDefaultWatermark~~) to set another watermark template as the default template to remove the default status, and then delete it.
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
     * Queries the time-based distribution of audio and video media assets. The maximum time span between the start time and end time is six months.
     *
     * @remarks
     * - Currently, this operation is supported only in the China (Shanghai) region.
     * - If you do not specify StartTime and EndTime, this operation returns data for the past 7 days by default. If you specify StartTime and EndTime, this operation returns data for the specified time range.
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
     * Queries the time-based distribution of audio and video media assets. The maximum time span between the start time and end time is six months.
     *
     * @remarks
     * - Currently, this operation is supported only in the China (Shanghai) region.
     * - If you do not specify StartTime and EndTime, this operation returns data for the past 7 days by default. If you specify StartTime and EndTime, this operation returns data for the specified time range.
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
     * Retrieves daily playback statistics for top videos, including the number of views, unique viewers, and total playback duration.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - You can query playback statistics for up to the top 1000 videos per day. The top video list is sorted in descending order by the number of views by default.
     * - Only playback data collected through ApsaraVideo Player SDK is supported.
     * - Based on UTC+8, playback statistics for the previous day are generated at 9:00 AM each day.
     * - You can query data generated after January 1, 2018. The maximum time range for a query is 180 days.
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
     * Retrieves daily playback statistics for top videos, including the number of views, unique viewers, and total playback duration.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - You can query playback statistics for up to the top 1000 videos per day. The top video list is sorted in descending order by the number of views by default.
     * - Only playback data collected through ApsaraVideo Player SDK is supported.
     * - Based on UTC+8, playback statistics for the previous day are generated at 9:00 AM each day.
     * - You can query data generated after January 1, 2018. The maximum time range for a query is 180 days.
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
     * Retrieves daily average playback statistics for a specified time range, including average playback duration and average playback count.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - Only playback data collected through ApsaraVideo Player SDK is supported.
     * - Playback statistics for the previous day are generated at 9:00 AM (UTC+8) each day.
     * - You can query data generated after 2018-01-01. The maximum time range between the start time and end time is 180 days.
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
     * Retrieves daily average playback statistics for a specified time range, including average playback duration and average playback count.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - Only playback data collected through ApsaraVideo Player SDK is supported.
     * - Playback statistics for the previous day are generated at 9:00 AM (UTC+8) each day.
     * - You can query data generated after 2018-01-01. The maximum time range between the start time and end time is 180 days.
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
     * Retrieves the total daily playback statistics within a specified time range, including total play count, total unique viewers, total playback duration, and playback duration distribution.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - Only playback data from ApsaraVideo Player SDK is supported.
     * - Based on UTC+8, playback statistics for the previous day are generated at 9:00 AM each day.
     * - Data after 2018-01-01 can be queried. The maximum time span between the start time and end time is 180 days.
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
     * Retrieves the total daily playback statistics within a specified time range, including total play count, total unique viewers, total playback duration, and playback duration distribution.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - Only playback data from ApsaraVideo Player SDK is supported.
     * - Based on UTC+8, playback statistics for the previous day are generated at 9:00 AM each day.
     * - Data after 2018-01-01 can be queried. The maximum time span between the start time and end time is 180 days.
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
     * Queries the daily playback statistics of a specified video within a specified time range. The statistics include total playback duration, number of playbacks, number of unique viewers, and playback duration distribution.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - Only playback data of videos that use ApsaraVideo Player SDK and rank in the top 1,000 by daily playback count is supported.
     * - Based on UTC+8, playback statistics for the previous day are generated at 9:00 AM each day.
     *  - Only data within the last 2 years (730 days) can be queried, and the maximum time span between the start time and end time is 180 days.
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
     * Queries the daily playback statistics of a specified video within a specified time range. The statistics include total playback duration, number of playbacks, number of unique viewers, and playback duration distribution.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - Only playback data of videos that use ApsaraVideo Player SDK and rank in the top 1,000 by daily playback count is supported.
     * - Based on UTC+8, playback statistics for the previous day are generated at 9:00 AM each day.
     *  - Only data within the last 2 years (730 days) can be queried, and the maximum time span between the start time and end time is 180 days.
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
     * Queries usage data of AI processing services such as automated review and media fingerprint.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - If the interval between the start time and end time is within 7 days, hourly data is returned. If the interval is greater than 7 days, daily data is returned. The maximum interval is 31 days.
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
     * Queries usage data of AI processing services such as automated review and media fingerprint.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - If the interval between the start time and end time is within 7 days, hourly data is returned. If the interval is greater than 7 days, daily data is returned. The maximum interval is 31 days.
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
     * Queries the certificate list information.
     *
     * @remarks
     * - Currently, the service address is supported only in the **China (Shanghai)** region.
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
     * Queries the certificate list information.
     *
     * @remarks
     * - Currently, the service address is supported only in the **China (Shanghai)** region.
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
     * Invokes this operation to query the bandwidth data of an accelerated domain name. Compared with the DescribeVodDomainRealTimeBpsData operation, this operation supports a longer time range for historical data queries (up to 366 days) but provides a larger data time granularity (minimum of 5 minutes) and higher data latency.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data for the past 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * If you specify `StartTime` and `EndTime` without Settings for `Interval`, the default time granularity of returned data, the queryable historical data time range, and the data latency are as follows:
     * |Time granularity  |Time span per query   |  Queryable historical data time range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3-4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 90 days |366 days  |Generally 4 hours, no more than 24 hours  |
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
     * Invokes this operation to query the bandwidth data of an accelerated domain name. Compared with the DescribeVodDomainRealTimeBpsData operation, this operation supports a longer time range for historical data queries (up to 366 days) but provides a larger data time granularity (minimum of 5 minutes) and higher data latency.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data for the past 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * If you specify `StartTime` and `EndTime` without Settings for `Interval`, the default time granularity of returned data, the queryable historical data time range, and the data latency are as follows:
     * |Time granularity  |Time span per query   |  Queryable historical data time range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3-4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 90 days |366 days  |Generally 4 hours, no more than 24 hours  |
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
     * Queries bandwidth data of accelerated domain names by protocol type.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data of up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data of the last 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data of the specified time range.
     * **Time granularity of returned data**
     * If you specify `StartTime` and `EndTime` without configuring `Interval`, the default time granularity, the maximum time range for historical data queries, and the data delay are as follows:
     * |Time granularity  |Time range per query   |  Maximum time range for historical data queries  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time range per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days  |186 days  |Typically 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time range per query ≤ 366 days |366 days  |Typically 4 hours, up to 24 hours  |
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
     * Queries bandwidth data of accelerated domain names by protocol type.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data of up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data of the last 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data of the specified time range.
     * **Time granularity of returned data**
     * If you specify `StartTime` and `EndTime` without configuring `Interval`, the default time granularity, the maximum time range for historical data queries, and the data delay are as follows:
     * |Time granularity  |Time range per query   |  Maximum time range for historical data queries  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time range per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days  |186 days  |Typically 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time range per query ≤ 366 days |366 days  |Typically 4 hours, up to 24 hours  |
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
     * Retrieves the certificate information of a specified accelerated domain name.
     *
     * @remarks
     * Currently, the only supported service region is **China (Shanghai)**.
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

        if (null !== $request->heraApiAutoVersion) {
            @$query['HeraApiAutoVersion'] = $request->heraApiAutoVersion;
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
     * Retrieves the certificate information of a specified accelerated domain name.
     *
     * @remarks
     * Currently, the only supported service region is **China (Shanghai)**.
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
     * Queries domain name configurations. You can query multiple feature configurations in a single request.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
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
     * Queries domain name configurations. You can query multiple feature configurations in a single request.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
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
     * Retrieves the basic configuration information of a specified China domain name for video-on-demand (VOD) acceleration.
     *
     * @remarks
     * Currently, the China service address supports only **China (Shanghai)**.
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
     * Retrieves the basic configuration information of a specified China domain name for video-on-demand (VOD) acceleration.
     *
     * @remarks
     * Currently, the China service address supports only **China (Shanghai)**.
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
     * Queries the byte hit ratio (percentage of hit bytes) of an accelerated domain name.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, data from the past 24 hours is returned by default. If you specify `StartTime` and `EndTime`, data for the specified time range is returned.
     * **Time granularity of returned data**
     * If you specify `StartTime` and `EndTime` without setting `Interval`, the default time granularity, the maximum time range for historical data queries, and the data delay are as follows:
     * |Time granularity  |Time span per query   |  Maximum time range for historical data queries  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 366 days |366 days  |Generally 4 hours, up to 24 hours  |
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
     * Queries the byte hit ratio (percentage of hit bytes) of an accelerated domain name.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, data from the past 24 hours is returned by default. If you specify `StartTime` and `EndTime`, data for the specified time range is returned.
     * **Time granularity of returned data**
     * If you specify `StartTime` and `EndTime` without setting `Interval`, the default time granularity, the maximum time range for historical data queries, and the data delay are as follows:
     * |Time granularity  |Time span per query   |  Maximum time range for historical data queries  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 366 days |366 days  |Generally 4 hours, up to 24 hours  |
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
     * Retrieves the download URLs of raw CDN access logs for a specified domain name.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - For details about log formats and latency, refer to [Log Management](https://help.aliyun.com/document_detail/86099.html).
     * - If you do not specify StartTime and EndTime, log data from the past 24 hours is returned by default.
     * - StartTime and EndTime must be specified together to query logs within the specified time range.
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
     * Retrieves the download URLs of raw CDN access logs for a specified domain name.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - For details about log formats and latency, refer to [Log Management](https://help.aliyun.com/document_detail/86099.html).
     * - If you do not specify StartTime and EndTime, log data from the past 24 hours is returned by default.
     * - StartTime and EndTime must be specified together to query logs within the specified time range.
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
     * Queries the 95th percentile bandwidth monitoring data for accelerated domain names.
     *
     * @remarks
     * *Three query methods are available:**
     * - When both StartTime and EndTime are specified: if the difference between EndTime and StartTime is within 24 hours, the 95th percentile bandwidth of the day that contains StartTime is returned. Otherwise, the 95th percentile bandwidth of the month that contains StartTime is returned.
     * - When both TimePoint and Cycle are specified, the 95th percentile bandwidth of the cycle that contains TimePoint is returned.
     * - When StartTime and EndTime are specified with an additional Cycle parameter, the 95th percentile bandwidth for all specified cycles within the query range is returned.
     * If none of these three methods are specified, the 95th percentile bandwidth of the past 24 hours is returned by default.
     * - Maximum query span: 90 days.
     * - Minimum query granularity: 1 day.
     * - Maximum query range: 90 days.
     * - Maximum number of calls per user per second: 100.
     * - Data unit: bit/s.
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
     * Queries the 95th percentile bandwidth monitoring data for accelerated domain names.
     *
     * @remarks
     * *Three query methods are available:**
     * - When both StartTime and EndTime are specified: if the difference between EndTime and StartTime is within 24 hours, the 95th percentile bandwidth of the day that contains StartTime is returned. Otherwise, the 95th percentile bandwidth of the month that contains StartTime is returned.
     * - When both TimePoint and Cycle are specified, the 95th percentile bandwidth of the cycle that contains TimePoint is returned.
     * - When StartTime and EndTime are specified with an additional Cycle parameter, the 95th percentile bandwidth for all specified cycles within the query range is returned.
     * If none of these three methods are specified, the 95th percentile bandwidth of the past 24 hours is returned by default.
     * - Maximum query span: 90 days.
     * - Minimum query granularity: 1 day.
     * - Maximum query range: 90 days.
     * - Maximum number of calls per user per second: 100.
     * - Data unit: bit/s.
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
     * Queries the queries per second (QPS) of accelerated domain names at a 5-minute granularity. Data from the last 90 days is supported.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Maximum call frequency per user: 100 calls per second.
     * - If you do not specify StartTime and EndTime, this operation returns data from the last 24 hours. If you specify StartTime and EndTime, this operation returns data for the specified time range.
     * **Supported time granularities**
     * The Interval request parameter supports different data time granularities based on the maximum time range per query. The following table describes the queryable historical data time range and data latency for each time granularity:
     * |Time granularity	|Maximum time range per query	|Queryable historical data time range	|Data latency
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes	|3 days	|93 days	|15 minutes
     * |1 hour	|31 days	|186 days	|Typically 3-4 hours
     * |1 day	|366 days	|366 days	|Typically 4 hours, no more than 24 hours
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
     * Queries the queries per second (QPS) of accelerated domain names at a 5-minute granularity. Data from the last 90 days is supported.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Maximum call frequency per user: 100 calls per second.
     * - If you do not specify StartTime and EndTime, this operation returns data from the last 24 hours. If you specify StartTime and EndTime, this operation returns data for the specified time range.
     * **Supported time granularities**
     * The Interval request parameter supports different data time granularities based on the maximum time range per query. The following table describes the queryable historical data time range and data latency for each time granularity:
     * |Time granularity	|Maximum time range per query	|Queryable historical data time range	|Data latency
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes	|3 days	|93 days	|15 minutes
     * |1 hour	|31 days	|186 days	|Typically 3-4 hours
     * |1 day	|366 days	|366 days	|Typically 4 hours, no more than 24 hours
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
     * Invokes this operation to query the bandwidth data of an accelerated domain name. Compared with the DescribeVodDomainBpsData operation, this operation supports a smaller time granularity (minimum of 1 minute), lower data latency (minimum of 5 minutes), but a shorter historical data time range (up to 186 days).
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data for the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data time range and data latency for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data time range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Generally 3 to 4 hours  |
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
     * Invokes this operation to query the bandwidth data of an accelerated domain name. Compared with the DescribeVodDomainBpsData operation, this operation supports a smaller time granularity (minimum of 1 minute), lower data latency (minimum of 5 minutes), but a shorter historical data time range (up to 186 days).
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data for the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data time range and data latency for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data time range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Generally 3 to 4 hours  |
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
     * Queries the byte hit rate data of accelerated domain names. This operation supports a minimum time granularity of 1 minute, with a data delay of at least 5 minutes, and allows you to query data from the last 186 days.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 100 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data delay for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Typically 3 to 4 hours  |
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
     * Queries the byte hit rate data of accelerated domain names. This operation supports a minimum time granularity of 1 minute, with a data delay of at least 5 minutes, and allows you to query data from the last 186 days.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 100 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data delay for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Typically 3 to 4 hours  |
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
     * Queries real-time access data for accelerated domain names, including QPS, bandwidth, and HTTP status code data within the last 7 days.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 20 domain names at a time.
     * - The maximum time range per query (the time range between StartTime and EndTime) is 10 minutes, and data is returned at a time granularity of 1 minute.
     * - Only data within the last 7 days can be queried.
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
     * Queries real-time access data for accelerated domain names, including QPS, bandwidth, and HTTP status code data within the last 7 days.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 20 domain names at a time.
     * - The maximum time range per query (the time range between StartTime and EndTime) is 10 minutes, and data is returned at a time granularity of 1 minute.
     * - Only data within the last 7 days can be queried.
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
     * Queries the total number and proportion of HTTP status codes for an accelerated domain name. This operation supports a minimum data time granularity of 1 minute, with a data delay of at least 5 minutes, and allows you to query data from the last 186 days.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 100 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data delay for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Typically 3 to 4 hours  |
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
     * Queries the total number and proportion of HTTP status codes for an accelerated domain name. This operation supports a minimum data time granularity of 1 minute, with a data delay of at least 5 minutes, and allows you to query data from the last 186 days.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 100 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data delay for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Typically 3 to 4 hours  |
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
     * Invoke this operation to query the queries per second (QPS) data for access to an accelerated domain name. This operation supports a minimum data time granularity of 1 minute, with a data delay of at least 5 minutes, and allows you to query data from the last 186 days.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data delay for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Typically 3 to 4 hours  |
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
     * Invoke this operation to query the queries per second (QPS) data for access to an accelerated domain name. This operation supports a minimum data time granularity of 1 minute, with a data delay of at least 5 minutes, and allows you to query data from the last 186 days.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data delay for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Typically 3 to 4 hours  |
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
     * Queries the request hit ratio data for an accelerated domain name. The minimum time granularity for data queried by this operation is 1 minute. The data latency is at least 5 minutes. You can query data for up to the last 186 days.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 100 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data for the last 1 hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * - The Go language uses the POST method by default. Manually change the request method to GET by declaring `request.Method="GET"`.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data latency for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Typically 3 to 4 hours  |
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
     * Queries the request hit ratio data for an accelerated domain name. The minimum time granularity for data queried by this operation is 1 minute. The data latency is at least 5 minutes. You can query data for up to the last 186 days.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - Batch queries are supported. You can query data for up to 100 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data for the last 1 hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * - The Go language uses the POST method by default. Manually change the request method to GET by declaring `request.Method="GET"`.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data latency for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Typically 3 to 4 hours  |
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
     * Invokes this operation to query the traffic data of an accelerated domain name. Compared with the DescribeVodDomainTrafficData operation, this operation supports a smaller time granularity (minimum of 1 minute), lower data latency (minimum of 5 minutes), but a shorter historical data range (up to 186 days).
     *
     * @remarks
     * - The service address of this operation supports only **China (Shanghai)**.
     * - Batch queries are supported. You can query data for up to 100 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data for the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data latency for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Generally 3 to 4 hours  |
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
     * Invokes this operation to query the traffic data of an accelerated domain name. Compared with the DescribeVodDomainTrafficData operation, this operation supports a smaller time granularity (minimum of 1 minute), lower data latency (minimum of 5 minutes), but a shorter historical data range (up to 186 days).
     *
     * @remarks
     * - The service address of this operation supports only **China (Shanghai)**.
     * - Batch queries are supported. You can query data for up to 100 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data for the last hour by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * The time granularity of returned data varies based on the time range specified by `StartTime` and `EndTime`. The following table describes the queryable historical data range and data latency for each time granularity:
     * |Time granularity  |Time range per query   |  Queryable historical data range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |1 minute  | Time range per query ≤ 1 hour   |7 days  |5 minutes  |
     * |5 minutes  | 1 hour < Time range per query < 3 days  |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time range per query < 31 days |186 days  |Generally 3 to 4 hours  |
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
     * Queries the request hit ratio (percentage of hit requests) of an accelerated domain name.
     *
     * @remarks
     * - Currently, this operation supports only the following service address: **China (Shanghai)**.
     * - Batch query is supported. You can query data of up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data of the last 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data of the specified time range.
     * **Time granularity of returned data**
     * Based on the time span specified by `StartTime` and `EndTime`, and when `Interval` is not set, the default time granularity of returned data, the queryable historical data time range, and data latency are as follows:
     * |Time granularity  |Time span per query   |  Queryable historical data time range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 90 days |366 days  |Generally 4 hours, no more than 24 hours  |
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
     * Queries the request hit ratio (percentage of hit requests) of an accelerated domain name.
     *
     * @remarks
     * - Currently, this operation supports only the following service address: **China (Shanghai)**.
     * - Batch query is supported. You can query data of up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data of the last 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data of the specified time range.
     * **Time granularity of returned data**
     * Based on the time span specified by `StartTime` and `EndTime`, and when `Interval` is not set, the default time granularity of returned data, the queryable historical data time range, and data latency are as follows:
     * |Time granularity  |Time span per query   |  Queryable historical data time range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 90 days |366 days  |Generally 4 hours, no more than 24 hours  |
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
     * Queries the back-to-origin bandwidth data of accelerated domain names.
     *
     * @remarks
     * - Currently, this operation supports only the following service address: **China (Shanghai)**.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the past 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * Based on the time span specified by `StartTime` and `EndTime`, and when `Interval` is not set, the default time granularity of returned data, the queryable historical data range, and data latency are as follows:
     * |Time granularity  |Time span per query   |  Queryable historical data range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 366 days |366 days  |Generally 4 hours, up to 24 hours  |
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
     * Queries the back-to-origin bandwidth data of accelerated domain names.
     *
     * @remarks
     * - Currently, this operation supports only the following service address: **China (Shanghai)**.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the past 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * Based on the time span specified by `StartTime` and `EndTime`, and when `Interval` is not set, the default time granularity of returned data, the queryable historical data range, and data latency are as follows:
     * |Time granularity  |Time span per query   |  Queryable historical data range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 366 days |366 days  |Generally 4 hours, up to 24 hours  |
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
     * Queries the back-to-origin traffic data of accelerated domain names.
     *
     * @remarks
     * - Currently, this operation supports only the following service address: **China (Shanghai)**.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the past 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * Based on the time span specified by `StartTime` and `EndTime`, and when `Interval` is not set at the same time, the default time granularity, the queryable historical data range, and data delay are as follows:
     * |Time granularity  |Time span per query   |  Queryable historical data range  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 366 days |366 days  |Generally 4 hours, up to 24 hours  |
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
     * Queries the back-to-origin traffic data of accelerated domain names.
     *
     * @remarks
     * - Currently, this operation supports only the following service address: **China (Shanghai)**.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, this operation returns data from the past 24 hours by default. If you specify `StartTime` and `EndTime`, this operation returns data for the specified time range.
     * **Time granularity of returned data**
     * Based on the time span specified by `StartTime` and `EndTime`, and when `Interval` is not set at the same time, the default time granularity, the queryable historical data range, and data delay are as follows:
     * |Time granularity  |Time span per query   |  Queryable historical data range  |  Data delay   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Generally 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 366 days |366 days  |Generally 4 hours, up to 24 hours  |
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
     * Invokes this operation to query the traffic data of an accelerated domain name. Compared with the DescribeVodDomainRealTimeTrafficData operation, this operation supports a longer historical data query range (up to 366 days) but provides a larger data time granularity (minimum of 5 minutes) and higher data latency.
     *
     * @remarks
     * - The service address of this operation supports only **China (Shanghai)**.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, data of the last 24 hours is returned by default. If you specify `StartTime` and `EndTime`, data of the specified time range is returned.
     * **Data time granularity of returned data**
     * The following table describes the default data time granularity of returned data, the queryable historical data range, and the data latency based on the time span specified by `StartTime` and `EndTime` when `Interval` is not set:
     * |Time granularity  |Time span per query   |  Queryable historical data range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Typically 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 366 days |366 days  |Typically 4 hours, up to 24 hours  |
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
     * Invokes this operation to query the traffic data of an accelerated domain name. Compared with the DescribeVodDomainRealTimeTrafficData operation, this operation supports a longer historical data query range (up to 366 days) but provides a larger data time granularity (minimum of 5 minutes) and higher data latency.
     *
     * @remarks
     * - The service address of this operation supports only **China (Shanghai)**.
     * - Batch queries are supported. You can query data for up to 500 domain names at a time.
     * - If you do not specify `StartTime` and `EndTime`, data of the last 24 hours is returned by default. If you specify `StartTime` and `EndTime`, data of the specified time range is returned.
     * **Data time granularity of returned data**
     * The following table describes the default data time granularity of returned data, the queryable historical data range, and the data latency based on the time span specified by `StartTime` and `EndTime` when `Interval` is not set:
     * |Time granularity  |Time span per query   |  Queryable historical data range  |  Data latency   |
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes  | Time span per query < 3 days   |93 days  |15 minutes  |
     * |1 hour  | 3 days ≤ Time span per query < 31 days  |186 days  |Typically 3 to 4 hours  |
     * | 1 day | 31 days ≤ Time span per query ≤ 366 days |366 days  |Typically 4 hours, up to 24 hours  |
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
     * Queries acceleration traffic or bandwidth usage data.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - Batch domain name queries are supported. Separate multiple domain names with commas (,). You can query up to 100 domain names at a time. If this parameter is left empty, data for all domain names under the account is returned.
     * - You can query data for up to the last year. The maximum time span for a single query is 3 months. If the query time range is 1 to 3 days, data is returned at hourly granularity. If the query time range is 4 days or more, data is returned at daily granularity.
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
     * Queries acceleration traffic or bandwidth usage data.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - Batch domain name queries are supported. Separate multiple domain names with commas (,). You can query up to 100 domain names at a time. If this parameter is left empty, data for all domain names under the account is returned.
     * - You can query data for up to the last year. The maximum time span for a single query is 3 months. If the query time range is 1 to 3 days, data is returned at hourly granularity. If the query time range is 4 days or more, data is returned at daily granularity.
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
     * Queries the usage data of online editing in ApsaraVideo VOD.
     *
     * @remarks
     * - Single user call frequency: 10 calls per second.
     * **Supported time granularities**:
     * The adaptive time granularity and the maximum time range for historical data queries vary based on the maximum time span per query.
     * | Time granularity          | Maximum time span per query            | Maximum time range for historical data queries    |
     * | -------------- | -------------- | ------ |
     * | 1 hour       | 7 days      |   31 days  |
     * | 1 day  | 31 days     |    366 days  |
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
     * Queries the usage data of online editing in ApsaraVideo VOD.
     *
     * @remarks
     * - Single user call frequency: 10 calls per second.
     * **Supported time granularities**:
     * The adaptive time granularity and the maximum time range for historical data queries vary based on the maximum time span per query.
     * | Time granularity          | Maximum time span per query            | Maximum time range for historical data queries    |
     * | -------------- | -------------- | ------ |
     * | 1 hour       | 7 days      |   31 days  |
     * | 1 day  | 31 days     |    366 days  |
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
     * Retrieves playback data of an audio or video file on a specified date by media ID (audio or video ID), including the number of unique visitors, average plays per user, total plays, average play duration per user, and total play duration.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Only playback data collected by ApsaraVideo Player SDK is supported. Traffic statistics for audio-only streams are not supported.
     * - Only data within the last 30 days can be queried.
     * >Notice: - Before calling this operation, make sure that ApsaraVideo Player SDK meets the following conditions:
     *   - Android Player SDK or iOS Player SDK
     *     - The Player SDK version is 5.4.9.2 or later.
     *     - A License for the Player SDK has been obtained and integrated. For more information, see [License management](https://help.aliyun.com/document_detail/469166.html).
     *     - The event tracking log reporting feature of the Player SDK is enabled. By default, this feature is enabled in ApsaraVideo Player SDK. For more information, see [Create a player for Android](~~311525#section-dc4-gp6-xk2~~) and [Create a player for iOS](~~313855#section-cmf-k7d-jg5~~).
     *   - Web Player SDK
     *      - The Player SDK version is 2.16.0 or later.
     *     - A License for **Playback Quality Monitoring** has been obtained and integrated. Submit the [Web Player SDK value-added service application form](https://yida.alibaba-inc.com/o/webplayer#/) to apply. For the License integration method, see the `license` property in [Web SDK API reference](~~125572#section-3ty-gwp-6pa~~).
     *     - The event tracking log reporting feature of the Player SDK is enabled. By default, this feature is enabled in ApsaraVideo Player SDK.
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
     * Retrieves playback data of an audio or video file on a specified date by media ID (audio or video ID), including the number of unique visitors, average plays per user, total plays, average play duration per user, and total play duration.
     *
     * @remarks
     * - Currently, this operation is available only in the **China (Shanghai)** region.
     * - Only playback data collected by ApsaraVideo Player SDK is supported. Traffic statistics for audio-only streams are not supported.
     * - Only data within the last 30 days can be queried.
     * >Notice: - Before calling this operation, make sure that ApsaraVideo Player SDK meets the following conditions:
     *   - Android Player SDK or iOS Player SDK
     *     - The Player SDK version is 5.4.9.2 or later.
     *     - A License for the Player SDK has been obtained and integrated. For more information, see [License management](https://help.aliyun.com/document_detail/469166.html).
     *     - The event tracking log reporting feature of the Player SDK is enabled. By default, this feature is enabled in ApsaraVideo Player SDK. For more information, see [Create a player for Android](~~311525#section-dc4-gp6-xk2~~) and [Create a player for iOS](~~313855#section-cmf-k7d-jg5~~).
     *   - Web Player SDK
     *      - The Player SDK version is 2.16.0 or later.
     *     - A License for **Playback Quality Monitoring** has been obtained and integrated. Submit the [Web Player SDK value-added service application form](https://yida.alibaba-inc.com/o/webplayer#/) to apply. For the License integration method, see the `license` property in [Web SDK API reference](~~125572#section-3ty-gwp-6pa~~).
     *     - The event tracking log reporting feature of the Player SDK is enabled. By default, this feature is enabled in ApsaraVideo Player SDK.
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
     * Queries aggregated playback data of the player.
     *
     * @param request - DescribeVodPlayerCollectDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodPlayerCollectDataResponse
     *
     * @param DescribeVodPlayerCollectDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVodPlayerCollectDataResponse
     */
    public function describeVodPlayerCollectDataWithOptions($request, $runtime)
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

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->os) {
            @$query['Os'] = $request->os;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->terminalType) {
            @$query['TerminalType'] = $request->terminalType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodPlayerCollectData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodPlayerCollectDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries aggregated playback data of the player.
     *
     * @param request - DescribeVodPlayerCollectDataRequest
     *
     * @returns DescribeVodPlayerCollectDataResponse
     *
     * @param DescribeVodPlayerCollectDataRequest $request
     *
     * @return DescribeVodPlayerCollectDataResponse
     */
    public function describeVodPlayerCollectData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodPlayerCollectDataWithOptions($request, $runtime);
    }

    /**
     * Queries the dimension metadata of the player.
     *
     * @param request - DescribeVodPlayerDimensionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodPlayerDimensionDataResponse
     *
     * @param DescribeVodPlayerDimensionDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeVodPlayerDimensionDataResponse
     */
    public function describeVodPlayerDimensionDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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
            'action' => 'DescribeVodPlayerDimensionData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodPlayerDimensionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the dimension metadata of the player.
     *
     * @param request - DescribeVodPlayerDimensionDataRequest
     *
     * @returns DescribeVodPlayerDimensionDataResponse
     *
     * @param DescribeVodPlayerDimensionDataRequest $request
     *
     * @return DescribeVodPlayerDimensionDataResponse
     */
    public function describeVodPlayerDimensionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodPlayerDimensionDataWithOptions($request, $runtime);
    }

    /**
     * Queries player metric data.
     *
     * @param request - DescribeVodPlayerMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodPlayerMetricDataResponse
     *
     * @param DescribeVodPlayerMetricDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVodPlayerMetricDataResponse
     */
    public function describeVodPlayerMetricDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->os) {
            @$query['Os'] = $request->os;
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

        if (null !== $request->terminalType) {
            @$query['TerminalType'] = $request->terminalType;
        }

        if (null !== $request->top) {
            @$query['Top'] = $request->top;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodPlayerMetricData',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodPlayerMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries player metric data.
     *
     * @param request - DescribeVodPlayerMetricDataRequest
     *
     * @returns DescribeVodPlayerMetricDataResponse
     *
     * @param DescribeVodPlayerMetricDataRequest $request
     *
     * @return DescribeVodPlayerMetricDataResponse
     */
    public function describeVodPlayerMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodPlayerMetricDataWithOptions($request, $runtime);
    }

    /**
     * Queries access data for an accelerated domain name by ISP or region, including bandwidth, average response rate, page views, cache hit ratio, and request hit ratio.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - The maximum time range for a single query (the time range between StartTime and EndTime) is 1 hour.
     * **Supported time granularities**
     * Based on the time range specified by `StartTime` and `EndTime`, the default data timestamp granularity, queryable historical data range, and data latency are as follows:
     * |Time granularity	|Time range per query|Queryable historical data range|Data latency|
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes	|≤ 1 hour	|93 days	|15 minutes|
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
     * Queries access data for an accelerated domain name by ISP or region, including bandwidth, average response rate, page views, cache hit ratio, and request hit ratio.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
     * - The maximum time range for a single query (the time range between StartTime and EndTime) is 1 hour.
     * **Supported time granularities**
     * Based on the time range specified by `StartTime` and `EndTime`, the default data timestamp granularity, queryable historical data range, and data latency are as follows:
     * |Time granularity	|Time range per query|Queryable historical data range|Data latency|
     * | ------------- |------------   | ----------- | ----------- |
     * |5 minutes	|≤ 1 hour	|93 days	|15 minutes|
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
     * Queries the maximum number and remaining daily quota of URLs and directories for purge and prefetch operations.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - Purge and prefetch operations include the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) purge operation and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.html) prefetch operation.
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
     * Queries the maximum number and remaining daily quota of URLs and directories for purge and prefetch operations.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - Purge and prefetch operations include the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) purge operation and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.html) prefetch operation.
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
     * Queries whether purge and prefetch tasks have taken effect.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - If neither Taskid nor Objectpath is specified, the first page of data (20 entries) within the last 3 days is returned by default. Taskid and Objectpath can be specified at the same time.
     * - When DomainName or Status is specified, ObjectType is required.
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
     * Queries whether purge and prefetch tasks have taken effect.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - If neither Taskid nor Objectpath is specified, the first page of data (20 entries) within the last 3 days is returned by default. Taskid and Objectpath can be specified at the same time.
     * - When DomainName or Status is specified, ObjectType is required.
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
     * Queries certificate list information by domain name.
     *
     * @remarks
     * This operation currently supports only the **China (Shanghai)** region.
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
     * Queries certificate list information by domain name.
     *
     * @remarks
     * This operation currently supports only the **China (Shanghai)** region.
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
     * Queries the usage of media asset management, including storage space and outbound storage traffic.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - If the interval between the start time and end time is within 7 days, hourly data is returned. If the interval is greater than 7 days, daily data is returned. The maximum interval is 31 days.
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
     * Queries the usage of media asset management, including storage space and outbound storage traffic.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
     * - If the interval between the start time and end time is within 7 days, hourly data is returned. If the interval is greater than 7 days, daily data is returned. The maximum interval is 31 days.
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
     * Queries the usage of tiered storage for media asset management.
     *
     * @remarks
     * - Currently, the service is available only in the **China (Shanghai)** region.
     * - If the query time range is within 7 days, hourly data is returned. If the query time range is greater than 7 days, daily data is returned. The maximum time range is 31 days.
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
     * Queries the usage of tiered storage for media asset management.
     *
     * @remarks
     * - Currently, the service is available only in the **China (Shanghai)** region.
     * - If the query time range is within 7 days, hourly data is returned. If the query time range is greater than 7 days, daily data is returned. The maximum time range is 31 days.
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
     * Queries the retrieval data usage of tiered storage in media asset management.
     *
     * @remarks
     * > - Currently, the service address supports only **China (Shanghai)**.
     * > - If the query time interval is within 7 days, data at the hour granularity is returned. If the query time interval is greater than 7 days, data at the day granularity is returned. The maximum interval is 31 days.
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
     * Queries the retrieval data usage of tiered storage in media asset management.
     *
     * @remarks
     * > - Currently, the service address supports only **China (Shanghai)**.
     * > - If the query time interval is within 7 days, data at the hour granularity is returned. If the query time interval is greater than 7 days, data at the day granularity is returned. The maximum interval is 31 days.
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
     * Queries transcoding usage data.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - If the interval between the start time and end time is within 7 days, hourly data is returned. If the interval is greater than 7 days, daily data is returned. The maximum interval is 31 days.
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
     * Queries transcoding usage data.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - If the interval between the start time and end time is within 7 days, hourly data is returned. If the interval is greater than 7 days, daily data is returned. The maximum interval is 31 days.
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
     * Queries the list of all acceleration domain names under your account for ApsaraVideo VOD.
     *
     * @remarks
     * - Supports fuzzy match filtering by domain name and filtering by domain name status.
     * - This operation currently supports only the following region: **China (Shanghai)**.
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
     * Queries the list of all acceleration domain names under your account for ApsaraVideo VOD.
     *
     * @remarks
     * - Supports fuzzy match filtering by domain name and filtering by domain name status.
     * - This operation currently supports only the following region: **China (Shanghai)**.
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
     * Queries the IP list of a domain name.
     *
     * @remarks
     * This operation is supported only in the China (Shanghai) region.
     *
     * @param request - DescribeVodUserVipsByDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodUserVipsByDomainResponse
     *
     * @param DescribeVodUserVipsByDomainRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVodUserVipsByDomainResponse
     */
    public function describeVodUserVipsByDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->available) {
            @$query['Available'] = $request->available;
        }

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
            'action' => 'DescribeVodUserVipsByDomain',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodUserVipsByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP list of a domain name.
     *
     * @remarks
     * This operation is supported only in the China (Shanghai) region.
     *
     * @param request - DescribeVodUserVipsByDomainRequest
     *
     * @returns DescribeVodUserVipsByDomainResponse
     *
     * @param DescribeVodUserVipsByDomainRequest $request
     *
     * @return DescribeVodUserVipsByDomainResponse
     */
    public function describeVodUserVipsByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodUserVipsByDomainWithOptions($request, $runtime);
    }

    /**
     * Retrieves the domain ownership verification content.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
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
     * Retrieves the domain ownership verification content.
     *
     * @remarks
     * - Currently, this operation is supported only in the **China (Shanghai)** region.
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
     * Invokes this operation to revoke application authorization from a specified account identity (Resource Access Management (RAM) user or RAM role).
     *
     * @remarks
     * >Notice: Each Resource Access Management (RAM) user or RAM role can be granted permissions for up to 10 applications.
     * -  If the policy name is **VODAppAdministratorAccess**, **AppId** is optional. For other policies, **AppId** is required.
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
     * Invokes this operation to revoke application authorization from a specified account identity (Resource Access Management (RAM) user or RAM role).
     *
     * @remarks
     * >Notice: Each Resource Access Management (RAM) user or RAM role can be granted permissions for up to 10 applications.
     * -  If the policy name is **VODAppAdministratorAccess**, **AppId** is optional. For other policies, **AppId** is required.
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
     * Generates a key for secure download. The secure download feature of ApsaraVideo Player SDK encrypts videos downloaded to local devices by using a key file. The encrypted videos can only be decrypted and played by using the key file generated by the unique app that is bindable in advance. This effectively protects video content and prevents downloaded videos from being maliciously played or distributed.
     *
     * @remarks
     * - To use the secure download feature, first enable the download feature in the ApsaraVideo VOD console and set the download method to secure download. For more information, see [Download settings](https://help.aliyun.com/document_detail/86107.html).
     * - After generating a key for secure download, configure the key in ApsaraVideo Player SDK. For more information, see [Secure download](https://help.aliyun.com/document_detail/124735.html).
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
     * Generates a key for secure download. The secure download feature of ApsaraVideo Player SDK encrypts videos downloaded to local devices by using a key file. The encrypted videos can only be decrypted and played by using the key file generated by the unique app that is bindable in advance. This effectively protects video content and prevents downloaded videos from being maliciously played or distributed.
     *
     * @remarks
     * - To use the secure download feature, first enable the download feature in the ApsaraVideo VOD console and set the download method to secure download. For more information, see [Download settings](https://help.aliyun.com/document_detail/86107.html).
     * - After generating a key for secure download, configure the key in ApsaraVideo Player SDK. For more information, see [Secure download](https://help.aliyun.com/document_detail/124735.html).
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
     * Invokes the operation to generate a random KMS data key (DK) for ApsaraVideo VOD HLS encryption.
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
     * Invokes the operation to generate a random KMS data key (DK) for ApsaraVideo VOD HLS encryption.
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
     * Queries the list of AI image processing tasks.
     *
     * @remarks
     * -  Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - Call the [SubmitAIImageJob](~~SubmitAIImageJob~~) operation to submit an AI image processing task before you call this operation to query the list of AI image tasks.
     * - You can query up to 10 AI image processing tasks at a time.
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
     * Queries the list of AI image processing tasks.
     *
     * @remarks
     * -  Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - Call the [SubmitAIImageJob](~~SubmitAIImageJob~~) operation to submit an AI image processing task before you call this operation to query the list of AI image tasks.
     * - You can query up to 10 AI image processing tasks at a time.
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
     * Queries an automated review job. After you submit an AI job, the job is processed asynchronously. You can call this operation to query job information in real time.
     *
     * @remarks
     * <props="intl">
     * - This operation is supported only in the Singapore region.
     * - Image resources in automated review job results are retained in the free storage provided by ApsaraVideo VOD for only two weeks. After two weeks, the images are automatically deleted.
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
     * Queries an automated review job. After you submit an AI job, the job is processed asynchronously. You can call this operation to query job information in real time.
     *
     * @remarks
     * <props="intl">
     * - This operation is supported only in the Singapore region.
     * - Image resources in automated review job results are retained in the free storage provided by ApsaraVideo VOD for only two weeks. After two weeks, the images are automatically deleted.
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
     * Queries an AI template.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Obtain the AI template ID first, and then call this operation to query the configuration information of the AI template.
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
     * Queries an AI template.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Obtain the AI template ID first, and then call this operation to query the configuration information of the AI template.
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
     * Retrieves the results of smart tagging for a video.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - Retrieves smart tagging results by video ID.
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
     * Retrieves the results of smart tagging for a video.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - Retrieves smart tagging results by video ID.
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
     * Queries application information by application ID.
     *
     * @remarks
     * - Batch queries are supported.
     * - AppIds supports a maximum of 10 IDs.
     * ### QPS limit
     * The single-user QPS limit for this operation is 100 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries application information by application ID.
     *
     * @remarks
     * - Batch queries are supported.
     * - AppIds supports a maximum of 10 IDs.
     * ### QPS limit
     * The single-user QPS limit for this operation is 100 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Retrieves the playback key of an application.
     *
     * @param request - GetAppPlayKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppPlayKeyResponse
     *
     * @param GetAppPlayKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAppPlayKeyResponse
     */
    public function getAppPlayKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
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
            'action' => 'GetAppPlayKey',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppPlayKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the playback key of an application.
     *
     * @param request - GetAppPlayKeyRequest
     *
     * @returns GetAppPlayKeyResponse
     *
     * @param GetAppPlayKeyRequest $request
     *
     * @return GetAppPlayKeyResponse
     */
    public function getAppPlayKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppPlayKeyWithOptions($request, $runtime);
    }

    /**
     * Retrieves the basic information and access URLs of multiple auxiliary media assets in a batch by specifying their IDs after the assets such as watermark images, subtitle files, and materials are uploaded to ApsaraVideo VOD.
     *
     * @remarks
     * You can retrieve information about up to 20 auxiliary media assets at a time.
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
     * Retrieves the basic information and access URLs of multiple auxiliary media assets in a batch by specifying their IDs after the assets such as watermark images, subtitle files, and materials are uploaded to ApsaraVideo VOD.
     *
     * @remarks
     * You can retrieve information about up to 20 auxiliary media assets at a time.
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
     * Retrieves the history of manual review records.
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
     * Retrieves the history of manual review records.
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
     * Invokes this operation to perform a filtered query for specified categorization information by ID or type, and retrieves the list of its subcategories (next-level categories).
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
     * Invokes this operation to perform a filtered query for specified categorization information by ID or type, and retrieves the list of its subcategories (next-level categories).
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
     * Retrieves the full traffic data of media assets for a specified date and region. The data is generated based on CDN traffic logs and primarily reflects the traffic consumption of videos. The generated CSV file contains the following information: date, video ID, domain name, traffic, application ID, and category ID. You can download the file to your local machine for scenarios such as operational data analytics.
     *
     * @remarks
     * - Currently, the service address of this operation only supports: **China (Shanghai)**.
     * - Only data within the past 90 days can be queried (data starts from April 29, 2025).
     * - The traffic data provided by this operation is raw traffic data. To align with billing traffic, multiply the data by a TCP coefficient of 1.1.
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
     * Retrieves the full traffic data of media assets for a specified date and region. The data is generated based on CDN traffic logs and primarily reflects the traffic consumption of videos. The generated CSV file contains the following information: date, video ID, domain name, traffic, application ID, and category ID. You can download the file to your local machine for scenarios such as operational data analytics.
     *
     * @remarks
     * - Currently, the service address of this operation only supports: **China (Shanghai)**.
     * - Only data within the past 90 days can be queried (data starts from April 29, 2025).
     * - The traffic data provided by this operation is raw traffic data. To align with billing traffic, multiply the data by a TCP coefficient of 1.1.
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
     * Queries the default AI template.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Currently, only the default AI template for automated review can be queried.
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
     * Queries the default AI template.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Currently, only the default AI template for automated review can be queried.
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
     * Queries the results of a digital watermarking (copyright watermark or tracing watermark) extraction job, including the job status and the successfully extracted watermark text.
     *
     * @remarks
     * - Currently, this operation is available only in the China (Shanghai) and China (Beijing) regions.
     * - After you call the [SubmitDigitalWatermarkExtractJob](~~SubmitDigitalWatermarkExtractJob~~) operation to extract the copyright watermark or tracing watermark from a video, call this operation to query the extracted watermark text.
     * - Only watermark extraction jobs from the last 2 years can be queried.
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
     * Queries the results of a digital watermarking (copyright watermark or tracing watermark) extraction job, including the job status and the successfully extracted watermark text.
     *
     * @remarks
     * - Currently, this operation is available only in the China (Shanghai) and China (Beijing) regions.
     * - After you call the [SubmitDigitalWatermarkExtractJob](~~SubmitDigitalWatermarkExtractJob~~) operation to extract the copyright watermark or tracing watermark from a video, call this operation to query the extracted watermark text.
     * - Only watermark extraction jobs from the last 2 years can be queried.
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
     * Retrieves the details of an online editing project (video editing task).
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
     * Retrieves the details of an online editing project (video editing task).
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
     * Retrieves the list of materials to be edited in an online editing project.
     *
     * @remarks
     * During the editing process, materials can be added to the timeline but are not necessarily fully used.
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
     * Retrieves the list of materials to be edited in an online editing project.
     *
     * @remarks
     * During the editing process, materials can be added to the timeline but are not necessarily fully used.
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
     * Retrieves the basic information and access URL of an image by image ID after the image is uploaded to ApsaraVideo VOD.
     *
     * @remarks
     * This operation only supports querying information about images uploaded to ApsaraVideo VOD. To query information about snapshots generated from video snapshots, call the [ListSnapshots](~~ListSnapshots~~) operation.
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
     * Retrieves the basic information and access URL of an image by image ID after the image is uploaded to ApsaraVideo VOD.
     *
     * @remarks
     * This operation only supports querying information about images uploaded to ApsaraVideo VOD. To query information about snapshots generated from video snapshots, call the [ListSnapshots](~~ListSnapshots~~) operation.
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
     * Queries the basic information and access URLs of multiple images by image ID after the images are uploaded to ApsaraVideo VOD.
     *
     * @remarks
     * - This operation only supports querying information about images uploaded to ApsaraVideo VOD. To query information about snapshots generated from video snapshots, call the [ListSnapshots](~~ListSnapshots~~) operation.
     * - You can query information about up to 20 images at a time.
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
     * Queries the basic information and access URLs of multiple images by image ID after the images are uploaded to ApsaraVideo VOD.
     *
     * @remarks
     * - This operation only supports querying information about images uploaded to ApsaraVideo VOD. To query information about snapshots generated from video snapshots, call the [ListSnapshots](~~ListSnapshots~~) operation.
     * - You can query information about up to 20 images at a time.
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
     * Queries the details of an asynchronous task by job ID.
     *
     * @remarks
     * *Usage notes**
     * This operation supports querying asynchronous task data from the last 6 months. Supported task types: transcoding tasks, snapshot tasks, AI tasks, and workflow tasks.
     * **QPS limit**
     * The single-user QPS limit for this operation is 15 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the details of an asynchronous task by job ID.
     *
     * @remarks
     * *Usage notes**
     * This operation supports querying asynchronous task data from the last 6 months. Supported task types: transcoding tasks, snapshot tasks, AI tasks, and workflow tasks.
     * **QPS limit**
     * The single-user QPS limit for this operation is 15 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
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
     * Retrieves the details of audio automated review results.
     *
     * @remarks
     * ### Usage notes
     * <props="china">After automated review is complete, if you have configured the [Automated review complete](https://help.aliyun.com/document_detail/89576.html) event notification, the callback URL is notified through a message callback. You can call this operation to query the details of audio review results.
     * <props="intl">
     * - This operation is supported only in the Singapore region.
     * - After automated review is complete, if you have configured the [Automated review complete](https://help.aliyun.com/document_detail/89576.html) event notification, the callback URL is notified through a message callback. You can call this operation to query the details of audio review results.
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
     * Retrieves the details of audio automated review results.
     *
     * @remarks
     * ### Usage notes
     * <props="china">After automated review is complete, if you have configured the [Automated review complete](https://help.aliyun.com/document_detail/89576.html) event notification, the callback URL is notified through a message callback. You can call this operation to query the details of audio review results.
     * <props="intl">
     * - This operation is supported only in the Singapore region.
     * - After automated review is complete, if you have configured the [Automated review complete](https://help.aliyun.com/document_detail/89576.html) event notification, the callback URL is notified through a message callback. You can call this operation to query the details of audio review results.
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
     * Retrieves the summary of automated review results.
     *
     * @remarks
     * <props="intl">
     * ### Usage notes
     * This operation is supported only in the Singapore region.
     * ### QPS limit
     * The maximum queries per second (QPS) for a single user for this operation is 20. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Retrieves the summary of automated review results.
     *
     * @remarks
     * <props="intl">
     * ### Usage notes
     * This operation is supported only in the Singapore region.
     * ### QPS limit
     * The maximum queries per second (QPS) for a single user for this operation is 20. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Retrieves the details of automated review results. You can call this operation to query the details of review results in real time.
     *
     * @remarks
     * - By default, only the review screenshot details of violating and suspected violating content are returned. No results are returned for compliant videos and images.
     * - The image resources of review results are retained in the free storage provided by ApsaraVideo VOD for only 2 weeks. After 2 weeks, the images are automatically deleted.
     * <props="intl">
     * - This operation is supported only in the Singapore region.
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
     * Retrieves the details of automated review results. You can call this operation to query the details of review results in real time.
     *
     * @remarks
     * - By default, only the review screenshot details of violating and suspected violating content are returned. No results are returned for compliant videos and images.
     * - The image resources of review results are retained in the free storage provided by ApsaraVideo VOD for only 2 weeks. After 2 weeks, the images are automatically deleted.
     * <props="intl">
     * - This operation is supported only in the Singapore region.
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
     * Retrieves the timestamps of all screenshots that contain violations.
     *
     * @remarks
     * > By default, only screenshot details for violations and suspected violations are returned. No results are returned for compliant videos and images.
     * <props="intl">
     * This operation is supported only in the Singapore region.
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
     * Retrieves the timestamps of all screenshots that contain violations.
     *
     * @remarks
     * > By default, only screenshot details for violations and suspected violations are returned. No results are returned for compliant videos and images.
     * <props="intl">
     * This operation is supported only in the Singapore region.
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
     * Retrieves media fingerprint results. After a media fingerprint job is complete, you can call this operation to query the results in real time.
     *
     * @remarks
     * This operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
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
     * Retrieves media fingerprint results. After a media fingerprint job is complete, you can call this operation to query the results in real time.
     *
     * @remarks
     * This operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
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
     * Queries task information such as task status and filtering policies for a video purge or prefetch task.
     *
     * @remarks
     * ### Usage notes
     * You can query task information for all audio or video files under a purge or prefetch task, or query task information for a specific audio or video file.
     * ### QPS limit
     * The single-user QPS limit for this operation is 50 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation as needed. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries task information such as task status and filtering policies for a video purge or prefetch task.
     *
     * @remarks
     * ### Usage notes
     * You can query task information for all audio or video files under a purge or prefetch task, or query task information for a specific audio or video file.
     * ### QPS limit
     * The single-user QPS limit for this operation is 50 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation as needed. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the callback method, callback URL, and event types of event notifications.
     *
     * @remarks
     * > For more information, see [Event notification development guide](https://help.aliyun.com/document_detail/55627.html).
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
     * Queries the callback method, callback URL, and event types of event notifications.
     *
     * @remarks
     * > For more information, see [Event notification development guide](https://help.aliyun.com/document_detail/55627.html).
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
     * Retrieves the source file information of an audio or video file, including the file URL, resolution, and bitrate.
     *
     * @remarks
     * You can retrieve the complete source file information only after a video or audio stream is transcoded.
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * Retrieves the source file information of an audio or video file, including the file URL, resolution, and bitrate.
     *
     * @remarks
     * You can retrieve the complete source file information only after a video or audio stream is transcoded.
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
     * Retrieves the playback URL of an audio or video file by providing the audio or video ID, which can then be played using ApsaraVideo Player or a third-party player such as a system-native, open-source, or custom-built player.
     *
     * @remarks
     * - **Before using this operation, make sure you fully understand the billing methods and pricing of ApsaraVideo VOD. Directly downloading or playing videos from ApsaraVideo VOD playback URLs incurs outbound traffic fees. If no accelerated domain name is configured, refer to [Storage outbound traffic billing](~~188308#section-rwh-e88-f7j~~). If an accelerated domain name is configured, refer to [Acceleration service billing](~~188308#section-c5t-oq9-15e~~). If you have enabled storage transfer acceleration, directly downloading or playing videos from ApsaraVideo VOD playback URLs also incurs download acceleration fees. For billing details, refer to [Storage transfer acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - Only videos in the Normal state (the Status field value is Normal) can be played. For more information about playback URL descriptions and usage limits, refer to [Audio and video playback](https://help.aliyun.com/document_detail/57290.html).
     * - When the [media storage](https://help.aliyun.com/document_detail/2392368.html) type is non-standard storage, set the StorageClass field of the PlayConfig parameter accordingly. For details, refer to [PlayConfig](~~86952#section-9g7-s9b-v7z~~).
     * - If video playback is abnormal, call the [GetMezzanineInfo](~~GetMezzanineInfo~~) operation to check whether the video source file information is correct.
     * <props="china">
     * - To generate m3u8 tracing watermark video streams by calling this operation, submit a ticket to apply for activation. For information about how to submit a ticket, refer to [Contact us](https://help.aliyun.com/document_detail/464625.html). For more information about tracing watermarks, refer to [Digital watermarking](https://help.aliyun.com/document_detail/2527021.html).
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

        if (null !== $request->codecName) {
            @$query['CodecName'] = $request->codecName;
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * Retrieves the playback URL of an audio or video file by providing the audio or video ID, which can then be played using ApsaraVideo Player or a third-party player such as a system-native, open-source, or custom-built player.
     *
     * @remarks
     * - **Before using this operation, make sure you fully understand the billing methods and pricing of ApsaraVideo VOD. Directly downloading or playing videos from ApsaraVideo VOD playback URLs incurs outbound traffic fees. If no accelerated domain name is configured, refer to [Storage outbound traffic billing](~~188308#section-rwh-e88-f7j~~). If an accelerated domain name is configured, refer to [Acceleration service billing](~~188308#section-c5t-oq9-15e~~). If you have enabled storage transfer acceleration, directly downloading or playing videos from ApsaraVideo VOD playback URLs also incurs download acceleration fees. For billing details, refer to [Storage transfer acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - Only videos in the Normal state (the Status field value is Normal) can be played. For more information about playback URL descriptions and usage limits, refer to [Audio and video playback](https://help.aliyun.com/document_detail/57290.html).
     * - When the [media storage](https://help.aliyun.com/document_detail/2392368.html) type is non-standard storage, set the StorageClass field of the PlayConfig parameter accordingly. For details, refer to [PlayConfig](~~86952#section-9g7-s9b-v7z~~).
     * - If video playback is abnormal, call the [GetMezzanineInfo](~~GetMezzanineInfo~~) operation to check whether the video source file information is correct.
     * <props="china">
     * - To generate m3u8 tracing watermark video streams by calling this operation, submit a ticket to apply for activation. For information about how to submit a ticket, refer to [Contact us](https://help.aliyun.com/document_detail/464625.html). For more information about tracing watermarks, refer to [Digital watermarking](https://help.aliyun.com/document_detail/2527021.html).
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
     * Queries video transcoding summary of one or more audio or video files by their IDs, including video transcoding status and transcoding progress.
     *
     * @remarks
     * - Because an audio or video file may be transcoded multiple times, this operation returns only the most recent transcoding summary.
     * - Batch queries are supported. You can query the transcoding summaries of up to 10 audio or video files at a time.
     * - To query historical transcoding task information, call the [ListTranscodeTask](https://help.aliyun.com/document_detail/109120.html) operation.
     * - **This operation supports querying transcoding task data only within the last year.**
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
     * Queries video transcoding summary of one or more audio or video files by their IDs, including video transcoding status and transcoding progress.
     *
     * @remarks
     * - Because an audio or video file may be transcoded multiple times, this operation returns only the most recent transcoding summary.
     * - Batch queries are supported. You can query the transcoding summaries of up to 10 audio or video files at a time.
     * - To query historical transcoding task information, call the [ListTranscodeTask](https://help.aliyun.com/document_detail/109120.html) operation.
     * - **This operation supports querying transcoding task data only within the last year.**
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
     * Queries the details of transcoding jobs based on a transcoding task ID.
     *
     * @remarks
     * ### Usage notes
     * **This operation only supports querying transcoding task data from the last year.**
     * ### QPS limit
     * A single user can perform a maximum of 15 queries per second (QPS). Throttling is triggered if this limit is exceeded, which may affect your business. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the details of transcoding jobs based on a transcoding task ID.
     *
     * @remarks
     * ### Usage notes
     * **This operation only supports querying transcoding task data from the last year.**
     * ### QPS limit
     * A single user can perform a maximum of 15 queries per second (QPS). Throttling is triggered if this limit is exceeded, which may affect your business. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the details of a transcoding configuration by transcoding template group ID.
     *
     * @remarks
     * Retrieves information about a single template group, including the configuration information of all transcoding templates in the group.
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
     * Queries the details of a transcoding configuration by transcoding template group ID.
     *
     * @remarks
     * Retrieves information about a single template group, including the configuration information of all transcoding templates in the group.
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
     * Retrieves URL upload information.
     *
     * @remarks
     * - Retrieves URL upload information by using the JobId returned during URL-based upload or the URL used for upload. The information includes the URL upload status, UserData, creation time, and completion time.
     * - **This operation only supports querying upload task data within the last year.**
     * - This operation currently supports only the following service regions: **China (Shanghai)** and **Singapore**.
     * - After you call the [UploadMediaByURL](~~UploadMediaByURL~~) operation to upload a media file to ApsaraVideo VOD, you can call this operation to query the upload information of a specified media file by using the upload task IDs (`JobIds`) or the source file URLs (`UploadURLs`).
     * - When calling this operation, you must specify either `JobIds` or `UploadURLs`. If both are specified, only `JobIds` is processed.
     * - If the media upload fails, you can call this operation to view the error code and error message. If the media upload succeeds, you can call this operation to view the corresponding media ID.
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
     * Retrieves URL upload information.
     *
     * @remarks
     * - Retrieves URL upload information by using the JobId returned during URL-based upload or the URL used for upload. The information includes the URL upload status, UserData, creation time, and completion time.
     * - **This operation only supports querying upload task data within the last year.**
     * - This operation currently supports only the following service regions: **China (Shanghai)** and **Singapore**.
     * - After you call the [UploadMediaByURL](~~UploadMediaByURL~~) operation to upload a media file to ApsaraVideo VOD, you can call this operation to query the upload information of a specified media file by using the upload task IDs (`JobIds`) or the source file URLs (`UploadURLs`).
     * - When calling this operation, you must specify either `JobIds` or `UploadURLs`. If both are specified, only `JobIds` is processed.
     * - If the media upload fails, you can call this operation to view the error code and error message. If the media upload succeeds, you can call this operation to view the corresponding media ID.
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
     * Retrieves media upload details by media ID, such as upload time, upload ratio, and upload source. Batch retrieval is supported.
     *
     * @remarks
     * - This operation only supports retrieving upload details of audio and video files.
     * - If audio or video files are uploaded through the ApsaraVideo VOD console, you can use this operation to retrieve information such as the upload ratio. If audio or video files are uploaded by using the upload SDK, only the following versions of the [upload SDK](https://help.aliyun.com/document_detail/52200.html) support this operation.
     * > Only the server upload SDK supports this operation. The client upload SDK does not support this operation. The server upload SDK version requirements are as follows:
     * > - Java upload SDK: version ≥ 1.4.4
     * > - C++ upload SDK: version ≥ 1.0.0
     * > - PHP upload SDK: version ≥ 1.0.2
     * > - Python upload SDK: version ≥ 1.3.0
     * ### QPS limit
     * The single-user QPS limit for this operation is 100 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Retrieves media upload details by media ID, such as upload time, upload ratio, and upload source. Batch retrieval is supported.
     *
     * @remarks
     * - This operation only supports retrieving upload details of audio and video files.
     * - If audio or video files are uploaded through the ApsaraVideo VOD console, you can use this operation to retrieve information such as the upload ratio. If audio or video files are uploaded by using the upload SDK, only the following versions of the [upload SDK](https://help.aliyun.com/document_detail/52200.html) support this operation.
     * > Only the server upload SDK supports this operation. The client upload SDK does not support this operation. The server upload SDK version requirements are as follows:
     * > - Java upload SDK: version ≥ 1.4.4
     * > - C++ upload SDK: version ≥ 1.0.0
     * > - PHP upload SDK: version ≥ 1.0.2
     * > - Python upload SDK: version ≥ 1.3.0
     * ### QPS limit
     * The single-user QPS limit for this operation is 100 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Retrieves the information about a single audio or video file by audio or video ID, including the title, description, duration, thumbnail URL, status, creation time, size, snapshots, category, and tags.
     *
     * @remarks
     * After an audio or video file is uploaded, ApsaraVideo VOD analyzes the uploaded source file. Therefore, media asset information is generated asynchronously. You can configure an [event notification](https://help.aliyun.com/document_detail/55627.html) for [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html). After you receive the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event notification, call this operation to retrieve the audio or video information.
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
        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
        }

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
     * Retrieves the information about a single audio or video file by audio or video ID, including the title, description, duration, thumbnail URL, status, creation time, size, snapshots, category, and tags.
     *
     * @remarks
     * After an audio or video file is uploaded, ApsaraVideo VOD analyzes the uploaded source file. Therefore, media asset information is generated asynchronously. You can configure an [event notification](https://help.aliyun.com/document_detail/55627.html) for [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html). After you receive the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event notification, call this operation to retrieve the audio or video information.
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
     * Retrieves the information about multiple audio and video files at a time by audio or video ID, including the title, description, duration, thumbnail URL, status, creation time, size, snapshots, category, and tags.
     *
     * @remarks
     * - You can retrieve information about up to 20 audio and video files at a time.
     * - After an audio or video file is uploaded, ApsaraVideo VOD analyzes the uploaded source file. Therefore, media asset information is generated asynchronously. You can configure the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) [event notification](https://help.aliyun.com/document_detail/55627.html). After you receive the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event notification, call this operation to retrieve the audio and video information.
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
        if (null !== $request->referenceIds) {
            @$query['ReferenceIds'] = $request->referenceIds;
        }

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
     * Retrieves the information about multiple audio and video files at a time by audio or video ID, including the title, description, duration, thumbnail URL, status, creation time, size, snapshots, category, and tags.
     *
     * @remarks
     * - You can retrieve information about up to 20 audio and video files at a time.
     * - After an audio or video file is uploaded, ApsaraVideo VOD analyzes the uploaded source file. Therefore, media asset information is generated asynchronously. You can configure the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) [event notification](https://help.aliyun.com/document_detail/55627.html). After you receive the [AudioVideoAnalysisComplete](https://help.aliyun.com/document_detail/99935.html) event notification, call this operation to retrieve the audio and video information.
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
     * Retrieves a list of audio and video information.
     *
     * @remarks
     * This operation retrieves up to **5000** audio and video files that match the specified filter conditions (such as video status and category ID). Specify StartTime and EndTime to retrieve data in batches. To query more audio and video files or traverse all audio and video information, see [Search for media information](https://help.aliyun.com/document_detail/86044.html).
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

        if (null !== $request->referenceIds) {
            @$query['ReferenceIds'] = $request->referenceIds;
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
     * Retrieves a list of audio and video information.
     *
     * @remarks
     * This operation retrieves up to **5000** audio and video files that match the specified filter conditions (such as video status and category ID). Specify StartTime and EndTime to retrieve data in batches. To query more audio and video files or traverse all audio and video information, see [Search for media information](https://help.aliyun.com/document_detail/86044.html).
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
     * Retrieves the playback credential (PlayAuth) for an audio or video file. ApsaraVideo Player SDK uses this credential to automatically obtain the playback URL. Because the playback credential has a validity period and is bound to a specific audio or video file, it cannot be shared or reused. An expired or invalid credential will cause playback failure. This playback method is suitable for audio and video playback scenarios that require high security.
     *
     * @remarks
     * - When using ApsaraVideo Player SDK (applicable to the PlayAuth playback method), call this operation to obtain the playback credential. ApsaraVideo Player SDK uses the playback credential to automatically obtain the playback URL for playback. For more information, see [ApsaraVideo Player SDK](https://help.aliyun.com/document_detail/125579.html).
     * - If the playback credential expires, the playback URL cannot be obtained. You must obtain a new playback credential.
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * Retrieves the playback credential (PlayAuth) for an audio or video file. ApsaraVideo Player SDK uses this credential to automatically obtain the playback URL. Because the playback credential has a validity period and is bound to a specific audio or video file, it cannot be shared or reused. An expired or invalid credential will cause playback failure. This playback method is suitable for audio and video playback scenarios that require high security.
     *
     * @remarks
     * - When using ApsaraVideo Player SDK (applicable to the PlayAuth playback method), call this operation to obtain the playback credential. ApsaraVideo Player SDK uses the playback credential to automatically obtain the playback URL for playback. For more information, see [ApsaraVideo Player SDK](https://help.aliyun.com/document_detail/125579.html).
     * - If the playback credential expires, the playback URL cannot be obtained. You must obtain a new playback credential.
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
     * Invokes this operation to query the parameter settings of a single image watermark template or text watermark template by watermark template ID, including the position, size, and display time of image watermarks, and the content, font, color, and position of text watermarks.
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
     * Invokes this operation to query the parameter settings of a single image watermark template or text watermark template by watermark template ID, including the position, size, and display time of image watermarks, and the content, font, color, and position of text watermarks.
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
     * Queries the execution information of a workflow task.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD. Using workflows may incur fees for transcoding, encryption, automated review, and other services. For billing details, see [Billing overview](https://help.aliyun.com/document_detail/188307.html).**
     * - You can call this operation to query workflow processing tasks. This operation currently supports only video understanding workflow task queries. Workflow tasks of other versions are not supported.
     *
     * @param request - GetWorkflowTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkflowTaskResponse
     *
     * @param GetWorkflowTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWorkflowTaskResponse
     */
    public function getWorkflowTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkflowTask',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkflowTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution information of a workflow task.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD. Using workflows may incur fees for transcoding, encryption, automated review, and other services. For billing details, see [Billing overview](https://help.aliyun.com/document_detail/188307.html).**
     * - You can call this operation to query workflow processing tasks. This operation currently supports only video understanding workflow task queries. Workflow tasks of other versions are not supported.
     *
     * @param request - GetWorkflowTaskRequest
     *
     * @returns GetWorkflowTaskResponse
     *
     * @param GetWorkflowTaskRequest $request
     *
     * @return GetWorkflowTaskResponse
     */
    public function getWorkflowTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the AI image information of a specified video.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - This operation can query AI image information of only a single video. **Batch queries are not supported**.
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
     * Queries the AI image information of a specified video.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - This operation can query AI image information of only a single video. **Batch queries are not supported**.
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
     * Queries intelligent tagging or media fingerprint jobs. After you submit an intelligent tagging or media fingerprint job, the job is processed asynchronously. You can call this operation to query job information in real time.
     *
     * @remarks
     * - Regions that support media fingerprint: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Regions that support intelligent tagging: **China (Beijing)** and **China (Shanghai)**.
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
     * Queries intelligent tagging or media fingerprint jobs. After you submit an intelligent tagging or media fingerprint job, the job is processed asynchronously. You can call this operation to query job information in real time.
     *
     * @remarks
     * - Regions that support media fingerprint: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Regions that support intelligent tagging: **China (Beijing)** and **China (Shanghai)**.
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
     * Queries the list of AI templates.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - You can call this operation to query the list of AI templates of a specified type.
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
     * Queries the list of AI templates.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - You can call this operation to query the list of AI templates of a specified type.
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
     * Queries a list of applications that you are authorized to access based on specified filter conditions.
     *
     * @remarks
     * ### Usage notes
     * You can filter applications by application status.
     * ### QPS limit
     * The single-user QPS limit for this operation is 30 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation properly. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries a list of applications that you are authorized to access based on specified filter conditions.
     *
     * @remarks
     * ### Usage notes
     * You can filter applications by application status.
     * ### QPS limit
     * The single-user QPS limit for this operation is 30 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation properly. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Invokes this operation to list the application permissions granted to a specified account identity (Resource Access Management (RAM) user or RAM role).
     *
     * @remarks
     * - The **IdentityType** and **IdentityName** parameters take effect only when the caller invokes this operation with administrator permissions. Otherwise, only the application access policies granted to the current account identity are returned.
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
     * Invokes this operation to list the application permissions granted to a specified account identity (Resource Access Management (RAM) user or RAM role).
     *
     * @remarks
     * - The **IdentityType** and **IdentityName** parameters take effect only when the caller invokes this operation with administrator permissions. Otherwise, only the application access policies granted to the current account identity are returned.
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
     * Retrieves the list of China Chinese review security IPs.
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
     * Retrieves the list of China Chinese review security IPs.
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
     * Queries the list of animated images for a video by video ID.
     *
     * @remarks
     * ### Usage notes
     * - After animated image capturing for a video is complete, call this operation to obtain the animated image information of the video.
     * - Animated image tasks can be initiated by calling an API operation ([SubmitDynamicImageJob](https://help.aliyun.com/document_detail/186842.html)) or by using the console. For more information, see [Animated images](https://help.aliyun.com/document_detail/177484.html).
     * ### QPS limit
     * The QPS limit for a single user for this operation is 100 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the list of animated images for a video by video ID.
     *
     * @remarks
     * ### Usage notes
     * - After animated image capturing for a video is complete, call this operation to obtain the animated image information of the video.
     * - Animated image tasks can be initiated by calling an API operation ([SubmitDynamicImageJob](https://help.aliyun.com/document_detail/186842.html)) or by using the console. For more information, see [Animated images](https://help.aliyun.com/document_detail/177484.html).
     * ### QPS limit
     * The QPS limit for a single user for this operation is 100 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limits](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the historical task list based on a media asset ID.
     *
     * @remarks
     * *Usage notes**
     * - To query detailed task information, call the [GetJobDetail](https://help.aliyun.com/document_detail/2861326.html) operation.
     * - This operation only supports querying asynchronous task data within the last 6 months. Supported task types: transcoding tasks, snapshot tasks, and AI tasks.
     * **QPS limit**
     * The single-user QPS limit for this operation is 15 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the historical task list based on a media asset ID.
     *
     * @remarks
     * *Usage notes**
     * - To query detailed task information, call the [GetJobDetail](https://help.aliyun.com/document_detail/2861326.html) operation.
     * - This operation only supports querying asynchronous task data within the last 6 months. Supported task types: transcoding tasks, snapshot tasks, and AI tasks.
     * **QPS limit**
     * The single-user QPS limit for this operation is 15 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Retrieves the list of Live to VOD videos.
     *
     * @remarks
     * A maximum of 5,000 records that match the specified filter conditions can be retrieved.
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
     * Retrieves the list of Live to VOD videos.
     *
     * @remarks
     * A maximum of 5,000 records that match the specified filter conditions can be retrieved.
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
     * Queries snapshots generated by video snapshot jobs and thumbnail snapshots automatically generated by the system during video upload.
     *
     * @remarks
     * If multiple snapshot jobs have been initiated for a video, this operation returns only the data of the most recent successful snapshot job.
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
     * Queries snapshots generated by video snapshot jobs and thumbnail snapshots automatically generated by the system during video upload.
     *
     * @remarks
     * If multiple snapshot jobs have been initiated for a video, this operation returns only the data of the most recent successful snapshot job.
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
     * Queries the historical transcoding task information of an audio or video file by its ID. This operation does not return specific job details.
     *
     * @remarks
     * ### Usage notes
     * - To query detailed transcoding job information, call the [GetTranscodeTask](https://help.aliyun.com/document_detail/109121.html) operation.
     * - **This operation supports only querying transcoding task data within the last year.**
     * ### QPS limit
     * The single-user QPS limit for this operation is 15 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the historical transcoding task information of an audio or video file by its ID. This operation does not return specific job details.
     *
     * @remarks
     * ### Usage notes
     * - To query detailed transcoding job information, call the [GetTranscodeTask](https://help.aliyun.com/document_detail/109121.html) operation.
     * - **This operation supports only querying transcoding task data within the last year.**
     * ### QPS limit
     * The single-user QPS limit for this operation is 15 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Queries the list of transcoding template configurations.
     *
     * @remarks
     * > This operation does not return the transcoding template configuration information under each transcoding template group. You can call the [GetTranscodeTemplateGroup](https://help.aliyun.com/document_detail/102670.html) operation to obtain the information.
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
     * Queries the list of transcoding template configurations.
     *
     * @remarks
     * > This operation does not return the transcoding template configuration information under each transcoding template group. You can call the [GetTranscodeTemplateGroup](https://help.aliyun.com/document_detail/102670.html) operation to obtain the information.
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
     * Queries the list of snapshot templates.
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
     * Queries the list of snapshot templates.
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
     * Invokes this operation to query the parameter settings of all image watermark templates and text watermark templates that have been added in the current service region, including the position, size, and display time of image watermarks, and the content, font, color, position, and other parameter settings of text watermarks.
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
     * Invokes this operation to query the parameter settings of all image watermark templates and text watermark templates that have been added in the current service region, including the position, size, and display time of image watermarks, and the content, font, color, position, and other parameter settings of text watermarks.
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
     * Invokes this operation to migrate resources such as media assets from one application to another. Application administrators can directly transfer resources. Resource Access Management (RAM) users or RAM roles must have write permissions on both the source and destination applications. Batch migration is supported.
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
     * Invokes this operation to migrate resources such as media assets from one application to another. Application administrators can directly transfer resources. Resource Access Management (RAM) users or RAM roles must have write permissions on both the source and destination applications. Batch migration is supported.
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
     * Prefetches content from the origin server to L2 Cache nodes so that the first access directly hits the cache, reducing the load on the origin server.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - A maximum of 500 prefetch URL requests can be submitted per account per day. Directory-level prefetch is not supported.
     * - The purge and prefetch operations include the [RefreshVodObjectCaches](~~RefreshVodObjectCaches~~) purge operation and the [PreloadVodObjectCaches](~~PreloadVodObjectCaches~~) prefetch operation.
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
     * Prefetches content from the origin server to L2 Cache nodes so that the first access directly hits the cache, reducing the load on the origin server.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - A maximum of 500 prefetch URL requests can be submitted per account per day. Directory-level prefetch is not supported.
     * - The purge and prefetch operations include the [RefreshVodObjectCaches](~~RefreshVodObjectCaches~~) purge operation and the [PreloadVodObjectCaches](~~PreloadVodObjectCaches~~) prefetch operation.
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
     * Produces one or more videos into a finished video. You can submit source videos directly through the timeline parameter, or create an online editing project first and then submit it for production.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD. Online editing is a paid feature. For more information about billing, see [Video editing and production billing](~~188310#section-pyv-b8h-bo7~~).**
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the online editing project ID is returned (the video has not been produced yet, and the task enters a queue for asynchronous execution). The final result is sent through a callback notification. You can also call [GetEditingProject](https://help.aliyun.com/document_detail/69052.html) to query the task status.
     * - The video resources used in the online editing timeline can be materials in the material library or videos in the media library. If you use videos from the media library, make sure that their status is Normal.
     * - Videos are produced based on ProjectId and Timeline. The logic is as follows:
     *     - ProjectId and Timeline cannot both be empty. Otherwise, no basis exists to produce videos.
     *     - If ProjectId is empty and Timeline is not empty, an online editing project is automatically created with the specified Timeline. The materials referenced in the Timeline are extracted and set as the project materials. Then, video production begins.
     *     - If ProjectId is not empty and Timeline is empty, the most recently saved Timeline is retrieved based on ProjectId and used to produce videos.
     *     - If both ProjectId and Timeline are not empty, the specified Timeline is used to produce videos, and the corresponding online editing project is updated (Timeline and project materials). If other fields are specified, the corresponding project fields are also updated.
     * - The maximum number of tracks for video tracks, image tracks, and subtitle tracks is 100 each.
     * - The total number of materials cannot exceed 200, and the total file size of materials cannot exceed 1 TB.
     * - The region of the input or output bucket must be the same as the region where the ApsaraVideo VOD service is used.
     * - When the output is a video, the following resolution limits apply to the finished video:
     *   - Both the width and height must be at least 128 px.
     *   - Both the width and height must be at most 4096 px.
     *   - The short side must be at most 2160 px.
     * - After video production is complete, the video is automatically uploaded to ApsaraVideo VOD. Therefore, after video production is complete, ApsaraVideo VOD sends the **ProduceMediaComplete** and **FileUploadComplete** event notifications. After the produced video transcoding is complete, the **single definition video transcoding complete** and **all definition video transcoding complete** event notifications are sent.
     * - You can also add effects to the produced video. For more details, see [Effects](https://help.aliyun.com/document_detail/69082.html).
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
     * Produces one or more videos into a finished video. You can submit source videos directly through the timeline parameter, or create an online editing project first and then submit it for production.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD. Online editing is a paid feature. For more information about billing, see [Video editing and production billing](~~188310#section-pyv-b8h-bo7~~).**
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the online editing project ID is returned (the video has not been produced yet, and the task enters a queue for asynchronous execution). The final result is sent through a callback notification. You can also call [GetEditingProject](https://help.aliyun.com/document_detail/69052.html) to query the task status.
     * - The video resources used in the online editing timeline can be materials in the material library or videos in the media library. If you use videos from the media library, make sure that their status is Normal.
     * - Videos are produced based on ProjectId and Timeline. The logic is as follows:
     *     - ProjectId and Timeline cannot both be empty. Otherwise, no basis exists to produce videos.
     *     - If ProjectId is empty and Timeline is not empty, an online editing project is automatically created with the specified Timeline. The materials referenced in the Timeline are extracted and set as the project materials. Then, video production begins.
     *     - If ProjectId is not empty and Timeline is empty, the most recently saved Timeline is retrieved based on ProjectId and used to produce videos.
     *     - If both ProjectId and Timeline are not empty, the specified Timeline is used to produce videos, and the corresponding online editing project is updated (Timeline and project materials). If other fields are specified, the corresponding project fields are also updated.
     * - The maximum number of tracks for video tracks, image tracks, and subtitle tracks is 100 each.
     * - The total number of materials cannot exceed 200, and the total file size of materials cannot exceed 1 TB.
     * - The region of the input or output bucket must be the same as the region where the ApsaraVideo VOD service is used.
     * - When the output is a video, the following resolution limits apply to the finished video:
     *   - Both the width and height must be at least 128 px.
     *   - Both the width and height must be at most 4096 px.
     *   - The short side must be at most 2160 px.
     * - After video production is complete, the video is automatically uploaded to ApsaraVideo VOD. Therefore, after video production is complete, ApsaraVideo VOD sends the **ProduceMediaComplete** and **FileUploadComplete** event notifications. After the produced video transcoding is complete, the **single definition video transcoding complete** and **all definition video transcoding complete** event notifications are sent.
     * - You can also add effects to the produced video. For more details, see [Effects](https://help.aliyun.com/document_detail/69082.html).
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
     * Submits a refresh or prefetch task for audio or video files by audio or video ID.
     *
     * @remarks
     * - ApsaraVideo VOD provides resource purge and prefetch features. The purge feature deletes cached resources on points of presence and forces the points of presence to retrieve the latest resources from the origin server through back-to-origin requests. The prefetch feature allows you to download and cache popular resources to points of presence before peak hours to improve access efficiency.
     * - This operation directly submits a refresh or prefetch node by audio or video ID and supports filtering by streaming format and definition, which allows you to refresh or prefetch specific streams as needed.
     * - You can submit a refresh or prefetch node for up to 20 audio or video files at a time.
     * ### QPS limit
     * The QPS limit for a single user for this operation is 50 calls per second. If the limit is exceeded, the API invocation is throttled, which may affect your business. Invoke this operation properly. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Submits a refresh or prefetch task for audio or video files by audio or video ID.
     *
     * @remarks
     * - ApsaraVideo VOD provides resource purge and prefetch features. The purge feature deletes cached resources on points of presence and forces the points of presence to retrieve the latest resources from the origin server through back-to-origin requests. The prefetch feature allows you to download and cache popular resources to points of presence before peak hours to improve access efficiency.
     * - This operation directly submits a refresh or prefetch node by audio or video ID and supports filtering by streaming format and definition, which allows you to refresh or prefetch specific streams as needed.
     * - You can submit a refresh or prefetch node for up to 20 audio or video files at a time.
     * ### QPS limit
     * The QPS limit for a single user for this operation is 50 calls per second. If the limit is exceeded, the API invocation is throttled, which may affect your business. Invoke this operation properly. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Refreshes the upload credential for a video file after the upload times out.
     *
     * @remarks
     * This operation can also be used to overwrite the source file of a video or audio file. This means that after you obtain the upload URL of the source file, you can upload the file again while keeping the audio or video ID unchanged. However, this may automatically trigger transcoding and snapshot capture if you have configured transcoding or snapshot capture upon upload. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * Refreshes the upload credential for a video file after the upload times out.
     *
     * @remarks
     * This operation can also be used to overwrite the source file of a video or audio file. This means that after you obtain the upload URL of the source file, you can upload the file again while keeping the audio or video ID unchanged. However, this may automatically trigger transcoding and snapshot capture if you have configured transcoding or snapshot capture upon upload. For more information, see [Upload URLs and credentials](https://help.aliyun.com/document_detail/55397.html).
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
     * Purges file content on nodes. Specifies URL content to purge on cache nodes, and supports batch URL purging.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - Each account can submit up to 2,000 URL purge requests and 100 directory purge requests per day.
     * - Purge and prefetch operations include the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) purge operation and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.html) prefetch operation.
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
     * Purges file content on nodes. Specifies URL content to purge on cache nodes, and supports batch URL purging.
     *
     * @remarks
     * - Currently, the only supported service region is **China (Shanghai)**.
     * - Each account can submit up to 2,000 URL purge requests and 100 directory purge requests per day.
     * - Purge and prefetch operations include the [RefreshVodObjectCaches](https://help.aliyun.com/document_detail/69215.html) purge operation and the [PreloadVodObjectCaches](https://help.aliyun.com/document_detail/69211.html) prefetch operation.
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
     * Registers media assets. Existing media files stored in your own OSS bucket that is connected to ApsaraVideo VOD must be registered to generate the associated data required by VOD before you can use VOD features such as transcoding and snapshotting.
     *
     * @remarks
     * - For audio and video files already stored in an OSS bucket connected to ApsaraVideo VOD, you must call this operation to generate the associated data required by VOD before you can initiate transcoding, snapshotting, AI processing, and other operations on these files by media ID.
     * - You can register up to **10 OSS media files** at a time, and all media files submitted in a single request must correspond to the same storage address.
     * - For media files uploaded through VOD, if no transcoding template group ID is specified, the default template group is used for transcoding. In contrast, after media asset registration, transcoding is not automatically triggered if no transcoding template group ID is specified. If a transcoding template group ID is specified, transcoding is performed based on the specified template group.
     * - If a media file is registered repeatedly, only the **unique media ID associated with it** is returned, and no other processing is performed.
     * - Make sure that the media file you want to register has a valid file name extension. Otherwise, the registration fails.
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
        if (null !== $request->enableFirstFrameCover) {
            @$query['EnableFirstFrameCover'] = $request->enableFirstFrameCover;
        }

        if (null !== $request->generateThumbnail) {
            @$query['GenerateThumbnail'] = $request->generateThumbnail;
        }

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
     * Registers media assets. Existing media files stored in your own OSS bucket that is connected to ApsaraVideo VOD must be registered to generate the associated data required by VOD before you can use VOD features such as transcoding and snapshotting.
     *
     * @remarks
     * - For audio and video files already stored in an OSS bucket connected to ApsaraVideo VOD, you must call this operation to generate the associated data required by VOD before you can initiate transcoding, snapshotting, AI processing, and other operations on these files by media ID.
     * - You can register up to **10 OSS media files** at a time, and all media files submitted in a single request must correspond to the same storage address.
     * - For media files uploaded through VOD, if no transcoding template group ID is specified, the default template group is used for transcoding. In contrast, after media asset registration, transcoding is not automatically triggered if no transcoding template group ID is specified. If a transcoding template group ID is specified, transcoding is performed based on the specified template group.
     * - If a media file is registered repeatedly, only the **unique media ID associated with it** is returned, and no other processing is performed.
     * - Make sure that the media file you want to register has a valid file name extension. Otherwise, the registration fails.
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
     * Restores media assets from frozen storage.
     *
     * @remarks
     * - Make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD before you call this operation. Restoring media assets incurs storage fees. For more information, see [Media asset storage billing](~~188308#section-e97-xrp-mzz~~).
     * - This operation applies only to Archive and Cold Archive audio and video files. After a file is restored, it can be accessed. The storage class of an audio or video file that is being restored cannot be changed.
     * Restoration generates retrieval traffic. After a Cold Archive audio or video file is restored, a Standard storage copy of the file is generated for access. The file copy incurs Standard storage fees until the restoration period ends.
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
     * Restores media assets from frozen storage.
     *
     * @remarks
     * - Make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD before you call this operation. Restoring media assets incurs storage fees. For more information, see [Media asset storage billing](~~188308#section-e97-xrp-mzz~~).
     * - This operation applies only to Archive and Cold Archive audio and video files. After a file is restored, it can be accessed. The storage class of an audio or video file that is being restored cannot be changed.
     * Restoration generates retrieval traffic. After a Cold Archive audio or video file is restored, a Standard storage copy of the file is generated for access. The file copy incurs Standard storage fees until the restoration period ends.
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
     * Searches for online editing projects (video editing lists).
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
     * Searches for online editing projects (video editing lists).
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
     * Searches for media asset information such as videos, audio files, and images produced by ApsaraVideo VOD. You can use this operation with the media asset search protocol to perform multi-dimensional searches in ApsaraVideo VOD, including specifying return fields, exact matching, fuzzy matching, multi-value queries, range queries, and sort fields.
     *
     * @remarks
     * For fields that support exact matching and fuzzy matching, when other query methods are used, the returned results follow the query method supported by the field. For example, if a field supports only fuzzy matching, results obtained through multi-value queries are also based on fuzzy matching.
     * The following describes the limits on the number of data records that can be retrieved:
     * - Method 1: Paged traversal
     *     For matched search results, you can set the pagination parameters PageNo (page number) and PageSize (number of records per page) to traverse up to 5,000 records. If the search results exceed 5,000 records, adjust the search conditions to narrow the result range. This method cannot traverse the complete dataset. To traverse more data, refer to Method 2.
     * - Method 2: Full traversal (for audio and video searches only)
     *   This method applies to video and audio content searches and supports traversing up to 2 million search results. If the number of search results exceeds 2 million, add more filter conditions to reduce the result count. When using this method, in addition to PageNo and PageSize, you must use the ScrollToken parameter for pagination. Each request supports traversing up to 100 records forward.
     * Using a PageSize of 20 as an example, the pagination logic is as follows:
     *     - If PageNo is 1, you can query up to the next 5 pages of data.
     *     - If PageNo is 2, you can query up to the next 6 pages of data.
     * Set pagination parameters properly and choose the appropriate traversal method based on the result set size. If you need to page through more than 1,000 records, use Method 2 for faster and more convenient data processing.
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
     * Searches for media asset information such as videos, audio files, and images produced by ApsaraVideo VOD. You can use this operation with the media asset search protocol to perform multi-dimensional searches in ApsaraVideo VOD, including specifying return fields, exact matching, fuzzy matching, multi-value queries, range queries, and sort fields.
     *
     * @remarks
     * For fields that support exact matching and fuzzy matching, when other query methods are used, the returned results follow the query method supported by the field. For example, if a field supports only fuzzy matching, results obtained through multi-value queries are also based on fuzzy matching.
     * The following describes the limits on the number of data records that can be retrieved:
     * - Method 1: Paged traversal
     *     For matched search results, you can set the pagination parameters PageNo (page number) and PageSize (number of records per page) to traverse up to 5,000 records. If the search results exceed 5,000 records, adjust the search conditions to narrow the result range. This method cannot traverse the complete dataset. To traverse more data, refer to Method 2.
     * - Method 2: Full traversal (for audio and video searches only)
     *   This method applies to video and audio content searches and supports traversing up to 2 million search results. If the number of search results exceeds 2 million, add more filter conditions to reduce the result count. When using this method, in addition to PageNo and PageSize, you must use the ScrollToken parameter for pagination. Each request supports traversing up to 100 records forward.
     * Using a PageSize of 20 as an example, the pagination logic is as follows:
     *     - If PageNo is 1, you can query up to the next 5 pages of data.
     *     - If PageNo is 2, you can query up to the next 6 pages of data.
     * Set pagination parameters properly and choose the appropriate traversal method based on the result set size. If you need to page through more than 1,000 records, use Method 2 for faster and more convenient data processing.
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
     * Sets the playback key for an application.
     *
     * @param request - SetAppPlayKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAppPlayKeyResponse
     *
     * @param SetAppPlayKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SetAppPlayKeyResponse
     */
    public function setAppPlayKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playKey) {
            @$query['PlayKey'] = $request->playKey;
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
            'action' => 'SetAppPlayKey',
            'version' => '2017-03-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAppPlayKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the playback key for an application.
     *
     * @param request - SetAppPlayKeyRequest
     *
     * @returns SetAppPlayKeyResponse
     *
     * @param SetAppPlayKeyRequest $request
     *
     * @return SetAppPlayKeyResponse
     */
    public function setAppPlayKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppPlayKeyWithOptions($request, $runtime);
    }

    /**
     * Sets the review security IP addresses.
     *
     * @remarks
     * When a video is in the Checking or Blocked state, only requests from review security IP addresses can play the video.
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
     * Sets the review security IP addresses.
     *
     * @remarks
     * When a video is in the Checking or Blocked state, only requests from review security IP addresses can play the video.
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
     * Updates the content of the cross-domain file crossdomain.xml for ApsaraVideo VOD.
     *
     * @remarks
     * >Notice: If you access the cross-domain file through a domain name, purge the CDN cache for the update to take effect immediately. You can logon to the console to [purge files](https://help.aliyun.com/document_detail/86098.html) or invoke the [Refresh Cache operation](https://help.aliyun.com/document_detail/69215.html).
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
     * Updates the content of the cross-domain file crossdomain.xml for ApsaraVideo VOD.
     *
     * @remarks
     * >Notice: If you access the cross-domain file through a domain name, purge the CDN cache for the update to take effect immediately. You can logon to the console to [purge files](https://help.aliyun.com/document_detail/86098.html) or invoke the [Refresh Cache operation](https://help.aliyun.com/document_detail/69215.html).
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
     * Sets a default AI template.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Obtain the AI template ID first, and then call this operation to set the template as the default AI template. A default AI template cannot be deleted.
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
     * Sets a default AI template.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - Obtain the AI template ID first, and then call this operation to set the template as the default AI template. A default AI template cannot be deleted.
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
     * Sets the default transcoding template group configuration.
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
     * Sets the default transcoding template group configuration.
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
     * Sets a specified watermark template as the default watermark template.
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
     * Sets a specified watermark template as the default watermark template.
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
     * Sets the materials to be edited for an online editing project.
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
     * Sets the materials to be edited for an online editing project.
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
     * Sets the callback method, callback URL, and event types for event notifications.
     *
     * @remarks
     * HTTP callbacks and Simple Message Queue (formerly MNS) callbacks are supported. For more information, see [Event notifications](https://help.aliyun.com/document_detail/55627.html).
     * ### QPS limit
     * The single-user QPS limit for this operation is 15 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Sets the callback method, callback URL, and event types for event notifications.
     *
     * @remarks
     * HTTP callbacks and Simple Message Queue (formerly MNS) callbacks are supported. For more information, see [Event notifications](https://help.aliyun.com/document_detail/55627.html).
     * ### QPS limit
     * The single-user QPS limit for this operation is 15 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Configures whether the certificate feature is enabled for a specified domain name and modifies certificate information.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
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
     * Configures whether the certificate feature is enabled for a specified domain name and modifies certificate information.
     *
     * @remarks
     * - Currently, the service address supports only **China (Shanghai)**.
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
     * Sets whether the certificate feature is enabled for a specified domain name and updates the certificate information.
     *
     * @remarks
     * - This operation currently supports only the **China East 2 (Shanghai)** region.
     * - Maximum calls per user: 30 calls per second.
     * - Request method: POST.
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
     * Sets whether the certificate feature is enabled for a specified domain name and updates the certificate information.
     *
     * @remarks
     * - This operation currently supports only the **China East 2 (Shanghai)** region.
     * - Maximum calls per user: 30 calls per second.
     * - Request method: POST.
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
     * Submits an image automated review task. The task is asynchronously executed after it is submitted. The task may not be complete when the response is returned.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD. Automated review is a paid feature. For billing details, <props="china">see [Automated review billing](~~188310#section-g7l-s3o-9ng~~).<props="intl">submit a ticket or contact your Alibaba Cloud account manager.**
     * - <props="china">This operation is supported only in the **China (Shanghai), China (Beijing), and Singapore** regions.<props="intl">This operation is supported only in the Singapore region.
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. At this point, the task is not complete and enters a queue for asynchronous execution. The final result is sent through a callback notification. You can also call [Query automated review job](https://help.aliyun.com/document_detail/454959.html) to query the task status.
     * - The size of a single image cannot exceed 20 MB. The height or width cannot exceed 30,000 px. The total number of pixels cannot exceed 250 million px.
     * - (Recommended) The image resolution is at least 256 × 256 px. A lower resolution may affect the review results.
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
     * Submits an image automated review task. The task is asynchronously executed after it is submitted. The task may not be complete when the response is returned.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing methods and pricing of ApsaraVideo VOD. Automated review is a paid feature. For billing details, <props="china">see [Automated review billing](~~188310#section-g7l-s3o-9ng~~).<props="intl">submit a ticket or contact your Alibaba Cloud account manager.**
     * - <props="china">This operation is supported only in the **China (Shanghai), China (Beijing), and Singapore** regions.<props="intl">This operation is supported only in the Singapore region.
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. At this point, the task is not complete and enters a queue for asynchronous execution. The final result is sent through a callback notification. You can also call [Query automated review job](https://help.aliyun.com/document_detail/454959.html) to query the task status.
     * - The size of a single image cannot exceed 20 MB. The height or width cannot exceed 30,000 px. The total number of pixels cannot exceed 250 million px.
     * - (Recommended) The image resolution is at least 256 × 256 px. A lower resolution may affect the review results.
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
     * Submits an AI image processing task.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is not yet complete at this point and enters a background queue for asynchronous execution. The final result is sent through a callback notification. You can also call [GetAIImageJobs](https://help.aliyun.com/document_detail/186923.html) to query the task execution result.
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
     * Submits an AI image processing task.
     *
     * @remarks
     * - Currently, this operation is supported in the following regions: **China (Beijing)** and **China (Shanghai)**.
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is not yet complete at this point and enters a background queue for asynchronous execution. The final result is sent through a callback notification. You can also call [GetAIImageJobs](https://help.aliyun.com/document_detail/186923.html) to query the task execution result.
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
     * Submits an intelligent tagging or media fingerprint job.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Intelligent tagging and media fingerprint are paid features. For billing details, see [Video AI billing](~~188310#section-g7l-s3o-9ng~~).**
     * - Regions supported by media fingerprint: **China (Beijing)**, **China (Shanghai)**, and **Singapore**. Regions supported by intelligent tagging: **China (Beijing)** and **China (Shanghai)**.
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit an AI job, the job ID is returned. The job is not yet complete at this point and enters a queue for asynchronous execution. We recommend that you configure the [event notification](https://help.aliyun.com/document_detail/55627.html) feature and set the callback event to **Video AI Processing Complete** to obtain the final processing result. You can also call [GetTaskDetail](https://help.aliyun.com/document_detail/2861326.html) to query the job status.
     * - You must activate the media fingerprint or intelligent tagging service before you can call this operation to submit AI jobs. For more information, see [Video AI](https://help.aliyun.com/document_detail/101148.html).
     * - When you use media fingerprint for the first time, provide your UID and region information and submit a ticket to apply for free activation of the fingerprint library. Otherwise, the media fingerprint feature will not work properly. For more information about how to submit a ticket, see [Contact us](https://help.aliyun.com/document_detail/464625.html).
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
     * Submits an intelligent tagging or media fingerprint job.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Intelligent tagging and media fingerprint are paid features. For billing details, see [Video AI billing](~~188310#section-g7l-s3o-9ng~~).**
     * - Regions supported by media fingerprint: **China (Beijing)**, **China (Shanghai)**, and **Singapore**. Regions supported by intelligent tagging: **China (Beijing)** and **China (Shanghai)**.
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit an AI job, the job ID is returned. The job is not yet complete at this point and enters a queue for asynchronous execution. We recommend that you configure the [event notification](https://help.aliyun.com/document_detail/55627.html) feature and set the callback event to **Video AI Processing Complete** to obtain the final processing result. You can also call [GetTaskDetail](https://help.aliyun.com/document_detail/2861326.html) to query the job status.
     * - You must activate the media fingerprint or intelligent tagging service before you can call this operation to submit AI jobs. For more information, see [Video AI](https://help.aliyun.com/document_detail/101148.html).
     * - When you use media fingerprint for the first time, provide your UID and region information and submit a ticket to apply for free activation of the fingerprint library. Otherwise, the media fingerprint feature will not work properly. For more information about how to submit a ticket, see [Contact us](https://help.aliyun.com/document_detail/464625.html).
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
     * Submits an automated review job for audio and video files. The job is executed asynchronously after submission, and the job may not be complete when the response is returned.
     *
     * @remarks
     * - **Before using this API, make sure that you understand the billing methods and pricing of ApsaraVideo VOD. Automated review is a paid feature. For billing details, <props="china">see [Automated review billing](~~188310#section-g7l-s3o-9ng~~).<props="intl">submit a ticket or contact your Alibaba Cloud account manager.**
     * - This operation currently supports only the **Shanghai**, **Beijing**, and **Singapore** regions.
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is not complete at this point and enters a queue for asynchronous execution. The final result is sent through a callback notification. You can also call [Query automated review job](https://help.aliyun.com/document_detail/454959.html) to query the task status.
     * - For the development guide on submitting automated review jobs, see [Automated review](https://help.aliyun.com/document_detail/101148.html).
     * - After an automated review job is complete, the image resources generated during the job are retained free of charge for only two weeks in the VOD system bucket allocated by ApsaraVideo VOD. The images are automatically deleted after two weeks.
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
     * Submits an automated review job for audio and video files. The job is executed asynchronously after submission, and the job may not be complete when the response is returned.
     *
     * @remarks
     * - **Before using this API, make sure that you understand the billing methods and pricing of ApsaraVideo VOD. Automated review is a paid feature. For billing details, <props="china">see [Automated review billing](~~188310#section-g7l-s3o-9ng~~).<props="intl">submit a ticket or contact your Alibaba Cloud account manager.**
     * - This operation currently supports only the **Shanghai**, **Beijing**, and **Singapore** regions.
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is not complete at this point and enters a queue for asynchronous execution. The final result is sent through a callback notification. You can also call [Query automated review job](https://help.aliyun.com/document_detail/454959.html) to query the task status.
     * - For the development guide on submitting automated review jobs, see [Automated review](https://help.aliyun.com/document_detail/101148.html).
     * - After an automated review job is complete, the image resources generated during the job are retained free of charge for only two weeks in the VOD system bucket allocated by ApsaraVideo VOD. The images are automatically deleted after two weeks.
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
     * Submits a digital watermarking (copyright watermark or tracing watermark) extraction job to asynchronously extract a copyright watermark or tracing watermark.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Digital watermarking is a paid feature. Both the generation and extraction of digital watermarks incur fees. For billing details, see [Digital watermarking billing](~~188310#62b9c940403se~~).**
     * - Currently, this operation is available only in the following regions: **China (Shanghai)** and **China (Beijing)**.
     * - <props="china">For more information about the generation and extraction of digital watermarks, see [Digital watermarking](https://help.aliyun.com/document_detail/2527021.html).Before you submit a digital watermark extraction job, make sure that the following conditions are met:
     *   - The video from which you want to extract the watermark has been uploaded to ApsaraVideo VOD.
     *   - The duration of the video from which you want to extract the watermark exceeds 6 minutes.
     * - After you submit a digital watermark extraction job, call the [GetDigitalWatermarkExtractResult](https://help.aliyun.com/document_detail/2587769.html) operation to query the job result.
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
     * Submits a digital watermarking (copyright watermark or tracing watermark) extraction job to asynchronously extract a copyright watermark or tracing watermark.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Digital watermarking is a paid feature. Both the generation and extraction of digital watermarks incur fees. For billing details, see [Digital watermarking billing](~~188310#62b9c940403se~~).**
     * - Currently, this operation is available only in the following regions: **China (Shanghai)** and **China (Beijing)**.
     * - <props="china">For more information about the generation and extraction of digital watermarks, see [Digital watermarking](https://help.aliyun.com/document_detail/2527021.html).Before you submit a digital watermark extraction job, make sure that the following conditions are met:
     *   - The video from which you want to extract the watermark has been uploaded to ApsaraVideo VOD.
     *   - The duration of the video from which you want to extract the watermark exceeds 6 minutes.
     * - After you submit a digital watermark extraction job, call the [GetDigitalWatermarkExtractResult](https://help.aliyun.com/document_detail/2587769.html) operation to query the job result.
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
     * Submits a media animated image job for asynchronous processing.
     *
     * @remarks
     * ### Usage notes
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is queued for asynchronous execution in the background. You can receive the final result through a callback notification or proactively query the task status by calling [Get task details](https://help.aliyun.com/document_detail/2861326.html).
     * - You can submit an animated image job only for videos in the **UploadSucc**, **Transcoding**, **Normal**, **Checking**, or **Blocked** state.
     * - Animated image production is billed as video transcoding at the same rate, based on resolution and duration. For more information, see [Media transcoding billing](https://help.aliyun.com/document_detail/188308.html).
     * ### QPS limit
     * The QPS limit for a single user on this operation is 30 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Submits a media animated image job for asynchronous processing.
     *
     * @remarks
     * ### Usage notes
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is queued for asynchronous execution in the background. You can receive the final result through a callback notification or proactively query the task status by calling [Get task details](https://help.aliyun.com/document_detail/2861326.html).
     * - You can submit an animated image job only for videos in the **UploadSucc**, **Transcoding**, **Normal**, **Checking**, or **Blocked** state.
     * - Animated image production is billed as video transcoding at the same rate, based on resolution and duration. For more information, see [Media transcoding billing](https://help.aliyun.com/document_detail/188308.html).
     * ### QPS limit
     * The QPS limit for a single user on this operation is 30 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Deletes a media fingerprint job.
     *
     * @remarks
     * Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
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
     * Deletes a media fingerprint job.
     *
     * @remarks
     * Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
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
     * Transcodes a video by using a China Production Studio (China Production Studio) for preprocessing.
     *
     * @remarks
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is queued for asynchronous execution in the background. The final result is sent through a callback notification. You can also call [GetTaskDetail](https://help.aliyun.com/document_detail/2861326.html) to query the task status.
     * - Video preprocessing is essentially a transcoding process that generates videos that meet the playback requirements of the China Production Studio. Therefore, **metering and billing** information is generated. For billing details, see [China Production Studio fees](https://help.aliyun.com/document_detail/64531.html).
     * - To meet the quality requirements of the China Production Studio for materials, videos in MP4 format with a short side of 360 must meet at least one of the following conditions before preprocessing can be initiated: the resolution exceeds 1920, the bit rate exceeds 6000 kbps, or the frame rate exceeds 25.
     * - You can receive the [TranscodeComplete](https://help.aliyun.com/document_detail/55638.html) callback message to obtain the processing result. When the callback message contains **Preprocess=true**, it indicates that the preprocessing is complete.
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
     * Transcodes a video by using a China Production Studio (China Production Studio) for preprocessing.
     *
     * @remarks
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is queued for asynchronous execution in the background. The final result is sent through a callback notification. You can also call [GetTaskDetail](https://help.aliyun.com/document_detail/2861326.html) to query the task status.
     * - Video preprocessing is essentially a transcoding process that generates videos that meet the playback requirements of the China Production Studio. Therefore, **metering and billing** information is generated. For billing details, see [China Production Studio fees](https://help.aliyun.com/document_detail/64531.html).
     * - To meet the quality requirements of the China Production Studio for materials, videos in MP4 format with a short side of 360 must meet at least one of the following conditions before preprocessing can be initiated: the resolution exceeds 1920, the bit rate exceeds 6000 kbps, or the frame rate exceeds 25.
     * - You can receive the [TranscodeComplete](https://help.aliyun.com/document_detail/55638.html) callback message to obtain the processing result. When the callback message contains **Preprocess=true**, it indicates that the preprocessing is complete.
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
     * Submits a video snapshot job to start asynchronous snapshot processing.
     *
     * @remarks
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned (the task is not yet complete and enters a queue for asynchronous execution). The final result is sent through a callback notification. You can also proactively query the task status by calling [Get task details](https://help.aliyun.com/document_detail/2861326.html).
     * - Only JPG images are supported.
     * - When the snapshot is complete, an event notification of [Video snapshot complete](https://help.aliyun.com/document_detail/57337.html) with EventType=SnapshotComplete and SubType=SpecifiedTime is sent.
     * ### QPS limit
     * The QPS limit for a single user on this operation is 30 calls per second. If this limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * Submits a video snapshot job to start asynchronous snapshot processing.
     *
     * @remarks
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned (the task is not yet complete and enters a queue for asynchronous execution). The final result is sent through a callback notification. You can also proactively query the task status by calling [Get task details](https://help.aliyun.com/document_detail/2861326.html).
     * - Only JPG images are supported.
     * - When the snapshot is complete, an event notification of [Video snapshot complete](https://help.aliyun.com/document_detail/57337.html) with EventType=SnapshotComplete and SubType=SpecifiedTime is sent.
     * ### QPS limit
     * The QPS limit for a single user on this operation is 30 calls per second. If this limit is exceeded, the API call is throttled, which may affect your business. Call this operation appropriately. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Submits a media transcoding job to start asynchronous transcoding.
     *
     * @remarks
     * ### Usage notes
     * - **Before you use this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Transcoding is a paid feature. For more information about billing, see [Transcoding billing](~~188308#section-ejb-nii-nqa~~).**
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is not yet complete at this point and enters a queue for asynchronous execution. The final result is sent through a callback notification. You can also call [GetTranscodeTask](https://help.aliyun.com/document_detail/454946.html) to query the task status.
     * - Only videos in the **UploadSucc**, **Normal**, or **Checking** state can be transcoded.
     * - To obtain transcoding results, configure callback messages: [SingleCompleteEvent](https://help.aliyun.com/document_detail/55636.html) and [AllCompleteEvent](https://help.aliyun.com/document_detail/55638.html).
     * - This operation supports dynamic replacement of subtitle URLs in HLS adaptive bitrate streaming packaging tasks. If the packaging task does not involve subtitle packaging, do not use this operation to initiate the task. Instead, specify the corresponding transcoding template group ID during video upload to automatically trigger the packaging process.
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * Submits a media transcoding job to start asynchronous transcoding.
     *
     * @remarks
     * ### Usage notes
     * - **Before you use this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Transcoding is a paid feature. For more information about billing, see [Transcoding billing](~~188308#section-ejb-nii-nqa~~).**
     * - This is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, the task ID is returned. The task is not yet complete at this point and enters a queue for asynchronous execution. The final result is sent through a callback notification. You can also call [GetTranscodeTask](https://help.aliyun.com/document_detail/454946.html) to query the task status.
     * - Only videos in the **UploadSucc**, **Normal**, or **Checking** state can be transcoded.
     * - To obtain transcoding results, configure callback messages: [SingleCompleteEvent](https://help.aliyun.com/document_detail/55636.html) and [AllCompleteEvent](https://help.aliyun.com/document_detail/55638.html).
     * - This operation supports dynamic replacement of subtitle URLs in HLS adaptive bitrate streaming packaging tasks. If the packaging task does not involve subtitle packaging, do not use this operation to initiate the task. Instead, specify the corresponding transcoding template group ID during video upload to automatically trigger the packaging process.
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
     * Initiates a VOD workflow for a video.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Using workflows may incur fees for transcoding, encryption, automated review, and other services. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188307.html).**
     * - This operation is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, a task ID is returned (the task is not yet complete and enters a background queue for asynchronous execution). The final result is sent through a callback notification. You can also call [GetTask](https://help.aliyun.com/document_detail/2861326.html) to query the task status.
     * - Call this operation to initiate a workflow processing task for a video. For more information about workflows, see [Workflow](https://help.aliyun.com/document_detail/115347.html).
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
     * Initiates a VOD workflow for a video.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Using workflows may incur fees for transcoding, encryption, automated review, and other services. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188307.html).**
     * - This operation is an [asynchronous operation](https://help.aliyun.com/document_detail/3027551.html). After you submit a task, a task ID is returned (the task is not yet complete and enters a background queue for asynchronous execution). The final result is sent through a callback notification. You can also call [GetTask](https://help.aliyun.com/document_detail/2861326.html) to query the task status.
     * - Call this operation to initiate a workflow processing task for a video. For more information about workflows, see [Workflow](https://help.aliyun.com/document_detail/115347.html).
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
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - After you call the [AddAITemplate](https://help.aliyun.com/document_detail/102930.html) operation to add an AI template, you can call this operation to modify the AI template.
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
     * - Currently, this operation is supported in the following regions: **China (Beijing)**, **China (Shanghai)**, and **Singapore**.
     * - After you call the [AddAITemplate](https://help.aliyun.com/document_detail/102930.html) operation to add an AI template, you can call this operation to modify the AI template.
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
     * Updates application information.
     *
     * @remarks
     * After an application is created, you can call this operation to locate an application by its application ID and modify the name, description, and status of the application.
     * ### QPS limit
     * The single-user QPS limit for this operation is 30 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation properly. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Updates application information.
     *
     * @remarks
     * After an application is created, you can call this operation to locate an application by its application ID and modify the name, description, and status of the application.
     * ### QPS limit
     * The single-user QPS limit for this operation is 30 calls per second. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation properly. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Batch updates the information of auxiliary media assets, such as title, description, tags, and category, by specifying the unique identifiers (IDs) of the auxiliary media assets that have been uploaded to ApsaraVideo VOD, including watermarked images, subtitle files, and other materials.
     *
     * @remarks
     * You can update the information of up to 20 auxiliary media assets at a time.
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
     * Batch updates the information of auxiliary media assets, such as title, description, tags, and category, by specifying the unique identifiers (IDs) of the auxiliary media assets that have been uploaded to ApsaraVideo VOD, including watermarked images, subtitle files, and other materials.
     *
     * @remarks
     * You can update the information of up to 20 auxiliary media assets at a time.
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
     * Updates the name of a category.
     *
     * @remarks
     * After a category is created, you can call this operation to modify the name of the category. If the category has been annotated to some media assets, the category name annotated to those media assets is updated synchronously after the category name is modified.
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
     * Updates the name of a category.
     *
     * @remarks
     * After a category is created, you can call this operation to modify the name of the category. If the category has been annotated to some media assets, the category name annotated to those media assets is updated synchronously after the category name is modified.
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
     * Modifies an online editing project (video editing task).
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
     * Modifies an online editing project (video editing task).
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
     * Batch modifies the title, description, tags, and category information of images by image ID after the images are uploaded to ApsaraVideo VOD.
     *
     * @remarks
     * - This operation only supports modifying uploaded images. Modifying images generated from video snapshots is not supported.
     * - You can modify the information of up to 20 images at a time.
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
     * Batch modifies the title, description, tags, and category information of images by image ID after the images are uploaded to ApsaraVideo VOD.
     *
     * @remarks
     * - This operation only supports modifying uploaded images. Modifying images generated from video snapshots is not supported.
     * - You can modify the information of up to 20 images at a time.
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
     * Modifies the storage class of a media asset.
     *
     * @remarks
     * - Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Modifying the storage class of a media asset incurs storage fees. For billing details, see [Media asset storage billing](~~188308#section-e97-xrp-mzz~~).
     * - Modifying the storage class is an **asynchronous operation**. A callback is sent to you after the entire operation is complete.
     * - If the current storage class of a media asset is Archive or ColdArchive, calling this operation automatically triggers a restore. After the restore is complete, the storage class is modified. You do not need to manually call the RestoreMedia operation to restore the media asset. For ColdArchive media assets, you need to specify the restore priority. The default value is RestoreTier=Standard.
     * - A media asset that is being modified cannot be modified again or be used for production or processing.
     * - Media assets in non-Standard storage classes have minimum storage duration requirements: Infrequent Access/source file Infrequent Access requires at least 30 days. Archive/source file Archive requires at least 60 days. ColdArchive/source file ColdArchive requires at least 180 days. If the storage duration is insufficient, modifying the storage class incurs storage fees for the remaining days. For example, if you modify the storage class from Infrequent Access to Standard after 10 days of storage, you are charged for the remaining 20 days of Infrequent Access storage, totaling 30 days of Infrequent Access storage fees.
     * - **Modifying the storage class of a self-managed bucket is not supported**.
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
     * Modifies the storage class of a media asset.
     *
     * @remarks
     * - Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Modifying the storage class of a media asset incurs storage fees. For billing details, see [Media asset storage billing](~~188308#section-e97-xrp-mzz~~).
     * - Modifying the storage class is an **asynchronous operation**. A callback is sent to you after the entire operation is complete.
     * - If the current storage class of a media asset is Archive or ColdArchive, calling this operation automatically triggers a restore. After the restore is complete, the storage class is modified. You do not need to manually call the RestoreMedia operation to restore the media asset. For ColdArchive media assets, you need to specify the restore priority. The default value is RestoreTier=Standard.
     * - A media asset that is being modified cannot be modified again or be used for production or processing.
     * - Media assets in non-Standard storage classes have minimum storage duration requirements: Infrequent Access/source file Infrequent Access requires at least 30 days. Archive/source file Archive requires at least 60 days. ColdArchive/source file ColdArchive requires at least 180 days. If the storage duration is insufficient, modifying the storage class incurs storage fees for the remaining days. For example, if you modify the storage class from Infrequent Access to Standard after 10 days of storage, you are charged for the remaining 20 days of Infrequent Access storage, totaling 30 days of Infrequent Access storage fees.
     * - **Modifying the storage class of a self-managed bucket is not supported**.
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
     * Modifies transcoding configurations. You can modify the configuration of a specified transcoding template in a transcoding template group.
     *
     * @remarks
     * For security purposes, you cannot add, modify, or delete transcoding template groups that are in the locked state. You can call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the template configuration and check whether the template group is locked based on the Locked response parameter. Alternatively, you can call this operation to unlock the template group before you add, modify, or delete templates.
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
     * Modifies transcoding configurations. You can modify the configuration of a specified transcoding template in a transcoding template group.
     *
     * @remarks
     * For security purposes, you cannot add, modify, or delete transcoding template groups that are in the locked state. You can call the [GetTranscodeTemplateGroup](~~GetTranscodeTemplateGroup~~) operation to query the template configuration and check whether the template group is locked based on the Locked response parameter. Alternatively, you can call this operation to unlock the template group before you add, modify, or delete templates.
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
     * Modifies the information about a single audio or video file.
     *
     * @remarks
     * ### Operation description
     * This operation locates an audio or video file by video ID and supports modifying the title, tags, description, and other information of the file. If a parameter is specified, the corresponding field is updated. Otherwise, the field is not overwritten or updated.
     * ### QPS limit
     * A single user can perform a maximum of 100 queries per second (QPS). Throttling is triggered when the QPS limit is exceeded, which may affect your business. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
     * Modifies the information about a single audio or video file.
     *
     * @remarks
     * ### Operation description
     * This operation locates an audio or video file by video ID and supports modifying the title, tags, description, and other information of the file. If a parameter is specified, the corresponding field is updated. Otherwise, the field is not overwritten or updated.
     * ### QPS limit
     * A single user can perform a maximum of 100 queries per second (QPS). Throttling is triggered when the QPS limit is exceeded, which may affect your business. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Modifies the information about multiple audio and video files at a time.
     *
     * @remarks
     * ### Usage notes
     * - Audio and video files are identified by their IDs. You can modify the title, tags, and description of audio and video files. If a parameter is specified, the corresponding field is updated. Otherwise, the field is not overwritten or updated.
     * - You can modify the information about up to 20 audio and video files at a time.
     * ### QPS limit
     * The single-user QPS limit for this operation is 30 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation properly. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Modifies the information about multiple audio and video files at a time.
     *
     * @remarks
     * ### Usage notes
     * - Audio and video files are identified by their IDs. You can modify the title, tags, and description of audio and video files. If a parameter is specified, the corresponding field is updated. Otherwise, the field is not overwritten or updated.
     * - You can modify the information about up to 20 audio and video files at a time.
     * ### QPS limit
     * The single-user QPS limit for this operation is 30 calls per second. If the limit is exceeded, the API call is throttled, which may affect your business. Call this operation properly. For more information, see [QPS limit](https://help.aliyun.com/document_detail/342790.html).
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
     * Modifies an accelerated domain name.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
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
     * Modifies an accelerated domain name.
     *
     * @remarks
     * > This operation is available only in the **China (Shanghai)** region.
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
     * Modifies the name and watermark configuration (WatermarkConfig) of an image and text watermark template that was added by calling the AddWatermark operation.
     *
     * @remarks
     * - After you invoke [AddWatermark](~~AddWatermark~~) to add an image and text watermark template, you can invoke this operation to modify the name and watermark configuration of the template.
     * - This operation does not support replacing the image in an image watermark template or modifying the template across templatetypes (such as changing an image watermark template to a text watermark template).
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
     * Modifies the name and watermark configuration (WatermarkConfig) of an image and text watermark template that was added by calling the AddWatermark operation.
     *
     * @remarks
     * - After you invoke [AddWatermark](~~AddWatermark~~) to add an image and text watermark template, you can invoke this operation to modify the name and watermark configuration of the template.
     * - This operation does not support replacing the image in an image watermark template or modifying the template across templatetypes (such as changing an image watermark template to a text watermark template).
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
     * Pulls audio and video media files for upload based on source file URLs. Batch upload is supported.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For billing details, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage transfer acceleration, uploading media files to ApsaraVideo VOD also incurs upload acceleration fees. For billing details, see [Storage transfer acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - For the media file formats supported by this operation, see [Media formats](~~55396#section-e27-2rj-mde~~).
     * - This operation is mainly applicable to scenarios where files are not stored on a local server or terminal and need to be uploaded through a URL with public network access.
     * - This operation is an [asynchronous upload operation](https://help.aliyun.com/document_detail/3027551.html). It is not real-time and does not guarantee timeliness. Generally, the migration upload is completed within hours or even days after the node is submitted. If you have high timeliness requirements, use the upload SDK instead.
     * - If a callback is configured, you will receive the [URL upload video complete](https://help.aliyun.com/document_detail/86326.html) event notification after the upload is completed. You can call the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation to query the upload status.
     * - After an upload node is submitted, an asynchronous node is generated in the cloud for execute. All URL upload nodes committed by users in the corresponding service region are queued for execute. The completion time is affected by the number of existing nodes. After the upload is completed, you can associate the URL with the video ID based on the information returned in the event notification (message callback).
     * - This operation currently supports only the **China (Shanghai)**, **China (Beijing)**, **China (Shenzhen)**, **Singapore**, and **US (Silicon Valley)** regions.
     * - Each time you commit an upload node for the same media file URL, a new media resource is generated in ApsaraVideo VOD (that is, a new media ID is generated).
     * - If a single file exceeds 20 GB, the upload is failed. If you need to upload a single file larger than 20 GB, use the upload SDK. For more information, see [Overview of the upload SDK](https://help.aliyun.com/document_detail/52200.html).
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

        if (null !== $request->enableFirstFrameCover) {
            @$query['EnableFirstFrameCover'] = $request->enableFirstFrameCover;
        }

        if (null !== $request->generateThumbnail) {
            @$query['GenerateThumbnail'] = $request->generateThumbnail;
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
     * Pulls audio and video media files for upload based on source file URLs. Batch upload is supported.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For billing details, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage transfer acceleration, uploading media files to ApsaraVideo VOD also incurs upload acceleration fees. For billing details, see [Storage transfer acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - For the media file formats supported by this operation, see [Media formats](~~55396#section-e27-2rj-mde~~).
     * - This operation is mainly applicable to scenarios where files are not stored on a local server or terminal and need to be uploaded through a URL with public network access.
     * - This operation is an [asynchronous upload operation](https://help.aliyun.com/document_detail/3027551.html). It is not real-time and does not guarantee timeliness. Generally, the migration upload is completed within hours or even days after the node is submitted. If you have high timeliness requirements, use the upload SDK instead.
     * - If a callback is configured, you will receive the [URL upload video complete](https://help.aliyun.com/document_detail/86326.html) event notification after the upload is completed. You can call the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation to query the upload status.
     * - After an upload node is submitted, an asynchronous node is generated in the cloud for execute. All URL upload nodes committed by users in the corresponding service region are queued for execute. The completion time is affected by the number of existing nodes. After the upload is completed, you can associate the URL with the video ID based on the information returned in the event notification (message callback).
     * - This operation currently supports only the **China (Shanghai)**, **China (Beijing)**, **China (Shenzhen)**, **Singapore**, and **US (Silicon Valley)** regions.
     * - Each time you commit an upload node for the same media file URL, a new media resource is generated in ApsaraVideo VOD (that is, a new media ID is generated).
     * - If a single file exceeds 20 GB, the upload is failed. If you need to upload a single file larger than 20 GB, use the upload SDK. For more information, see [Overview of the upload SDK](https://help.aliyun.com/document_detail/52200.html).
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
     * Uploads a transcoded stream file from external storage and mounts it to the corresponding ApsaraVideo VOD media asset.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For more information, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage transmission acceleration, upload acceleration fees also apply. For more information, see [Storage transmission acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - This operation is currently supported only in the **Shanghai** and **Singapore** regions.
     * - Call this operation to upload a transcoded stream file from external storage and mount it to the corresponding ApsaraVideo VOD media asset. The supported HDR types for transcoded streams are HDR, HDR10, HLG, DolbyVision, HDRVivid, and SDR+.
     * - You can call the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation to query the upload status. After the upload is complete, you will receive the [URL upload transcoded stream complete](https://help.aliyun.com/document_detail/376427.html) event notification.
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
     * Uploads a transcoded stream file from external storage and mounts it to the corresponding ApsaraVideo VOD media asset.
     *
     * @remarks
     * - **Before using this operation, make sure that you fully understand the billing methods and pricing of ApsaraVideo VOD. Uploading media files to ApsaraVideo VOD incurs storage fees. For more information, see [Media asset storage billing](~~188308#section_e97_xrp_mzz~~). If you have enabled storage transmission acceleration, upload acceleration fees also apply. For more information, see [Storage transmission acceleration billing](~~188310#section_sta_zm2_tsv~~).**
     * - This operation is currently supported only in the **Shanghai** and **Singapore** regions.
     * - Call this operation to upload a transcoded stream file from external storage and mount it to the corresponding ApsaraVideo VOD media asset. The supported HDR types for transcoded streams are HDR, HDR10, HLG, DolbyVision, HDRVivid, and SDR+.
     * - You can call the [GetURLUploadInfos](https://help.aliyun.com/document_detail/106830.html) operation to query the upload status. After the upload is complete, you will receive the [URL upload transcoded stream complete](https://help.aliyun.com/document_detail/376427.html) event notification.
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
     * Calls this operation to verify domain name ownership.
     *
     * @remarks
     * Currently, the service is supported only in the **China (Shanghai)** region.
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
     * Calls this operation to verify domain name ownership.
     *
     * @remarks
     * Currently, the service is supported only in the **China (Shanghai)** region.
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
